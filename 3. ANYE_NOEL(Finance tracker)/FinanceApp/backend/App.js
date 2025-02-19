
// const express = require("express");
// const mongoose = require("mongoose");
// const cors = require("cors");
// const bcrypt = require("bcryptjs");
// const jwt = require("jsonwebtoken");

// const app = express();
// app.use(express.json());
// app.use(cors());

// const JWT_SECRET = "magic"

// // MongoDB Connection
// mongoose.connect("mongodb://localhost:27017/financeDB", { useNewUrlParser: true, useUnifiedTopology: true })
//   .then(() => console.log("MongoDB Connected"))
//   .catch(err => console.log(err));

// // User Schema
// const UserSchema = new mongoose.Schema({ username: String, password: String });
// const User = mongoose.model("User", UserSchema);

// // Mongoose Model for Financial Plans
// const PlanSchema = new mongoose.Schema({
//   monthlyIncome: { type: Number, required: true },
//   expectedSavings: { type: Number, required: true },
//   dailyExpenditure: { type: Number, required: true },
//   createdAt: { type: Date, default: Date.now }
// });

// const Plan = mongoose.model("Plan", PlanSchema);


// // Register User
// app.post("/api/register", async (req, res) => {
//   const { username, password } = req.body;
//   const hashedPassword = await bcrypt.hash(password, 10);
//   const newUser = new User({ username, password: hashedPassword });

//   try {
//     await newUser.save();
//     res.status(201).json({ message: "User registered successfully" });
//   } catch (error) {
//     res.status(500).json({ message: "Error registering user" });
//   }
// });

// // Login User
// app.post("/api/login", async (req, res) => {
//   const { username, password } = req.body;
//   const user = await User.findOne({ username });

//   if (!user || !(await bcrypt.compare(password, user.password))) {
//     return res.status(400).json({ message: "Invalid credentials" });
//   }

//   const token = jwt.sign({ userId: user._id }, JWT_SECRET, { expiresIn: "1h" });
//   res.json({ token });
// });

// // API Route to Create a Financial Plan
// app.post("/api/plans", async (req, res) => {
//   try {
//     const { monthlyIncome, expectedSavings } = req.body;

//     if (!monthlyIncome || !expectedSavings || expectedSavings > monthlyIncome) {
//       return res.status(400).json({ error: "Invalid input values." });
//     }

//     const dailyExpenditure = (monthlyIncome - expectedSavings) / 30;

//     const newPlan = new Plan({
//       monthlyIncome,
//       expectedSavings,
//       dailyExpenditure,
//     });

//     await newPlan.save();
//     res.status(201).json(newPlan);
//   } catch (error) {
//     res.status(500).json({ error: "Server error" });
//   }
// });

// // A delete route
// app.delete("/api/plans/:id",  async (req, res) => {
//   try {
//     const { id } = req.params;
//     await Plan.findByIdAndDelete(id);
//     res.status(200).json({ message: "Plan deleted successfully" });
//   } catch (err) {
//     console.error(err);
//     res.status(500).json({ error: "Failed to delete Plan" });
//   }
// });


// // Start Server
// const PORT = process.env.PORT || 5000;
// app.listen(PORT, () => console.log(`Server running on port ${PORT}`));



const express = require("express");
const mongoose = require("mongoose");
const cors = require("cors");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");

const app = express();
app.use(express.json());
app.use(cors());

const JWT_SECRET = "magic";

// MongoDB Connection
mongoose.connect("mongodb://localhost:27017/financeDB", { useNewUrlParser: true, useUnifiedTopology: true })
  .then(() => console.log("MongoDB Connected"))
  .catch(err => console.log(err));

// User Schema
const UserSchema = new mongoose.Schema({ username: String, password: String });
const User = mongoose.model("User", UserSchema);

// Mongoose Model for Financial Plans
const PlanSchema = new mongoose.Schema({
  userId: { type: mongoose.Schema.Types.ObjectId, ref: "User", required: true },
  monthlyIncome: { type: Number, required: true },
  expectedSavings: { type: Number, required: true },
  dailyExpenditure: { type: Number, required: true },
  createdAt: { type: Date, default: Date.now }
});

const Plan = mongoose.model("Plan", PlanSchema);

// Middleware to Authenticate User
const authenticateUser = (req, res, next) => {
  const token = req.headers.authorization;
  if (!token) {
    return res.status(401).json({ error: "Unauthorized: No token provided" });
  }

  try {
    const decoded = jwt.verify(token, JWT_SECRET);
    req.user = decoded;
    next();
  } catch (error) {
    return res.status(401).json({ error: "Unauthorized: Invalid token" });
  }
};

// Register User
app.post("/api/register", async (req, res) => {
  const { username, password } = req.body;
  const hashedPassword = await bcrypt.hash(password, 10);
  const newUser = new User({ username, password: hashedPassword });

  try {
    await newUser.save();
    res.status(201).json({ message: "User registered successfully" });
  } catch (error) {
    res.status(500).json({ message: "Error registering user" });
  }
});
 

app.post("/api/login", async (req, res) => {
  const { username, password } = req.body;
  try {
    const user = await User.findOne({ username });
    if (!user || !(await bcrypt.compare(password, user.password))) {
      return res.status(401).json({ error: "Invalid username or password" });
    }
    const token = jwt.sign({ id: user._id }, JWT_SECRET, { expiresIn: "1h" });
    res.status(200).json({ message: "Login successful", token });
  } catch (err) {
    res.status(500).json({ error: "Login failed", details: err.message });
  }
});


// API Route to Create a Financial Plan (Authenticated)
app.post("/api/plans", authenticateUser, async (req, res) => {
  try {
    const { monthlyIncome, expectedSavings } = req.body;


    if (!monthlyIncome || !expectedSavings || expectedSavings > monthlyIncome) {
      return res.status(400).json({ error: "Invalid input values." });
    }

    const dailyExpenditure = (monthlyIncome - expectedSavings) / 30;
     console.log(dailyExpenditure);
    const newPlan = new Plan({
      userId: req.user.userId,
      monthlyIncome,
      expectedSavings,
      dailyExpenditure,
    });

    await newPlan.save();
    res.status(201).json(newPlan);
  } catch (error) {
    res.status(500).json({ error: "Server error" });
  }
});

// app.post("/api/plans", authenticateUser, async (req, res) => {
//   try {
//     const { monthlyIncome, expectedSavings } = req.body;

//     if (!monthlyIncome || !expectedSavings || expectedSavings > monthlyIncome) {
//       return res.status(400).json({ error: "Invalid input values." });
//     }

//     console.log("User info:", req.user); // Debugging

//     if (!req.user || !req.user.userId) {
//       return res.status(401).json({ error: "Unauthorized user." });
//     }

//     const dailyExpenditure = (monthlyIncome - expectedSavings) / 30;
//     console.log("Calculated Daily Expenditure:", dailyExpenditure);

//     const newPlan = new Plan({
//       userId: req.user.userId,
//       monthlyIncome,
//       expectedSavings,
//       dailyExpenditure,
//     });

//     await newPlan.save();
//     res.status(201).json(newPlan);
//   } catch (error) {
//     console.error("Error saving plan:", error);
//     res.status(500).json({ error: "Server error", details: error.message });
//   }
// });


// API Route to Delete a Financial Plan (Authenticated)
app.delete("/api/plans/:id", authenticateUser, async (req, res) => {
  try {
    const { id } = req.params;
    const plan = await Plan.findOne({ _id: id, userId: req.user.userId });

    if (!plan) {
      return res.status(404).json({ error: "Plan not found or unauthorized" });
    }

    await Plan.findByIdAndDelete(id);
    res.status(200).json({ message: "Plan deleted successfully" });
  } catch (err) {
    console.error(err);
    res.status(500).json({ error: "Failed to delete Plan" });
  }
});

// Start Server
const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
