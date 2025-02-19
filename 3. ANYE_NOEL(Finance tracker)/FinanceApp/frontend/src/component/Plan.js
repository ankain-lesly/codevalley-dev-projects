import React, { useState, useEffect } from "react";
import { 
  Container, Typography, TextField, Button, Paper, MenuItem, Alert,
  Select, FormControl, InputLabel, Grid, Card, CardContent, IconButton 
} from "@mui/material";
import DeleteIcon from "@mui/icons-material/Delete";
import "./plan.css";
import { useLocation, useNavigate } from "react-router-dom";


const Plan = () => {
  const [income, setIncome] = useState("");
  const [savings, setSavings] = useState("");
  const [dailyLimit, setDailyLimit] = useState(null);
  const [currency, setCurrency] = useState("USD");
  const [message, setMessage] = useState("");
  const [plans, setPlans] = useState([]);

  const location = useLocation(); 

  const exchangeRate = 600; // 1 USD = 600 XAF

  const convertCurrency = (value) => (currency === "XAF" ? value * exchangeRate : value);

  // Fetch plans from the database
  const fetchPlans = async () => {
    try {
      const response = await fetch("http://localhost:5000/api/plans");
      const data = await response.json();
      setPlans(data);
    } catch (error) {
      console.error("Error fetching plans:", error);
    }
  };

  useEffect(() => {
    fetchPlans();
  }, []);



//   fetch("http://localhost:5000/api/login", {
//   method: "POST",
//   headers: { "Content-Type": "application/json" },
//   body: JSON.stringify({ username, password }),
// })
//   .then((response) => response.json())
//   .then((data) => {
//     if (data.token) {
//       localStorage.setItem("token", data.token);
//     }
//   });


  // Calculate and save plan
  const calculateAndSavePlan = async () => {
    const token = localStorage.getItem("token"); // Retrieve the JWT token
    console.log("token: " + token)
    const monthlyIncome = parseFloat(income);
    const expectedSavings = parseFloat(savings);

    if (isNaN(monthlyIncome) || isNaN(expectedSavings) || monthlyIncome <= 0 || expectedSavings < 0 || expectedSavings > monthlyIncome) {
      alert("Please enter valid values. Savings should be less than income.");
      return;
    }

    const remainingAmount = monthlyIncome - expectedSavings;
    const dailyExpense = remainingAmount / 30;
    setDailyLimit(dailyExpense.toFixed(2));

    try {
      const response = await fetch("http://localhost:5000/api/plans", {
        method: "POST",
        headers: { Authorization: `Bearer ${token}`,
        "Content-Type": "application/json",
  
       },
         
        body: JSON.stringify({
          monthlyIncome,
          expectedSavings,
          dailyExpenditure: dailyExpense.toFixed(2),
        }),
      });

      const data = await response.json();
      if (response.ok) {
        setMessage("Plan saved successfully!");
        fetchPlans();
      } else {
        setMessage(data.error || "Failed to save plan.");
      }
    } catch (error) {
      setMessage("Server error. Try again later.");
    }
  };

  // Delete a specific plan
  const deletePlan = async (id) => {
    const token = localStorage.getItem("token"); // Retrieve the JWT token
    try {
      await fetch(`http://localhost:5000/api/plans/${id}`, {
         method: "DELETE",
         headers: { Authorization: `Bearer ${token}` },
         });
      setPlans(plans.filter((plan) => plan._id !== id));
    } catch (error) {
      console.error("Failed to delete plan:", error);
    }
  };

  return (
    <Container className="plan-container">
      <Grid container spacing={3}>
        {/* Left Side: Financial Planning */}
        <Grid item xs={12} md={6}>
          <Paper elevation={3} className="plan-box">
            <Typography variant="h4" className="plan-title">Financial Planning</Typography>

            {/* Currency Selection */}
            <FormControl fullWidth>
              <InputLabel>Currency</InputLabel>
              <Select value={currency} onChange={(e) => setCurrency(e.target.value)}>
                <MenuItem value="USD">USD ($)</MenuItem>
                <MenuItem value="XAF">XAF (CFA)</MenuItem>
              </Select>
            </FormControl>

            {/* Income Input */}
            <TextField
              label={`Monthly Income (${currency})`}
              variant="outlined"
              fullWidth
              margin="normal"
              value={income}
              onChange={(e) => setIncome(e.target.value)}
              type="number"
            />

            {/* Savings Input */}
            <TextField
              label={`Expected Savings (${currency})`}
              variant="outlined"
              fullWidth
              margin="normal"
              value={savings}
              onChange={(e) => setSavings(e.target.value)}
              type="number"
            />

            {/* Calculate & Save Button */}
            <Button variant="contained" color="primary" fullWidth className="calculate-btn" onClick={calculateAndSavePlan}>
              Calculate & Save Plan
            </Button>

               {/* Result Display */}
               {dailyLimit !== null && (
              <Typography variant="h6" className="result-text">
                You can spend <strong>{convertCurrency(dailyLimit)}</strong> {currency} per day.
              </Typography>
            )}

            {/* Success/Error Message */}
            {message && <Alert severity={message.includes("success") ? "success" : "error"}>{message}</Alert>}
        
          </Paper>
          
        </Grid>

        {/* Right Side: Planned Set */}
        <Grid item xs={12} md={6}>
          <Paper elevation={3} className="plan-box">
            <Typography variant="h4" className="plan-title">Planned Set</Typography>

            {plans.length > 0 ? (
              plans.map((plan) => (
                <Card key={plan._id} className="plan-card">
                  <CardContent>
                    <Typography variant="body2">Date: {new Date(plan.createdAt).toLocaleDateString()}</Typography>

                    <Grid container spacing={2}>
                      {/* Income Card */}
                      <Grid item xs={4}>
                        <Card className="small-card income-card">
                          <CardContent>
                            <Typography variant="body2">Income</Typography>
                            <Typography variant="h6">{convertCurrency(plan.monthlyIncome)} {currency}</Typography>
                          </CardContent>
                        </Card>
                      </Grid>

                      {/* Savings Card */}
                      <Grid item xs={4}>
                        <Card className="small-card savings-card">
                          <CardContent>
                            <Typography variant="body2">Savings</Typography>
                            <Typography variant="h6">{convertCurrency(plan.expectedSavings)} {currency}</Typography>
                          </CardContent>
                        </Card>
                      </Grid>

                      {/* Daily Expense Card */}
                      <Grid item xs={4}>
                        <Card className="small-card expenses-card">
                          <CardContent>
                            <Typography variant="body2">Daily Exp</Typography>
                            <Typography variant="h6">{convertCurrency(plan.dailyExpenditure)} {currency}</Typography>
                          </CardContent>
                        </Card>
                      </Grid>
                    </Grid>

                    {/* Delete Plan Button */}
                    <IconButton color="error" onClick={() => deletePlan(plan._id)}>
                      <DeleteIcon />
                    </IconButton>
                  </CardContent>
                </Card>
              ))
            ) : (
              <Typography variant="body1">No plans available.</Typography>
            )}
          </Paper>
        </Grid>
      </Grid>
    </Container>
  );
};

export default Plan;








































// import React, { useState, useEffect } from "react";
// import { 
//   Container, Typography, TextField, Button, Paper, Alert, 
//   MenuItem, Select, FormControl, InputLabel, Grid, Card, CardContent 
// } from "@mui/material";
// import "./plan.css";

// const Plan = () => {
//   const [income, setIncome] = useState("");
//   const [savings, setSavings] = useState("");
//   const [dailyLimit, setDailyLimit] = useState(null);
//   const [currency, setCurrency] = useState("USD");
//   const [message, setMessage] = useState("");
//   const [plans, setPlans] = useState([]);

//   const exchangeRate = 600; // 1 USD = 600 XAF (Example rate)

//   // Convert currency
//   const convertCurrency = (value) => (currency === "XAF" ? (value * exchangeRate).toFixed(2) : value);

//   // Fetch plans from database
//   const fetchPlans = async () => {
//     try {
//       const response = await fetch("http://localhost:5000/api/plans");
//       const data = await response.json();
//       setPlans(data);
//     } catch (error) {
//       console.error("Error fetching plans:", error);
//     }
//   };

//   useEffect(() => {
//     fetchPlans();
//   }, []);

//   // Calculate and save plan
//   const calculateAndSavePlan = async () => {
//     const monthlyIncome = parseFloat(income);
//     const expectedSavings = parseFloat(savings);

//     if (isNaN(monthlyIncome) || isNaN(expectedSavings) || monthlyIncome <= 0 || expectedSavings < 0 || expectedSavings > monthlyIncome) {
//       alert("Please enter valid values. Savings should be less than income.");
//       return;
//     }

//     const remainingAmount = monthlyIncome - expectedSavings;
//     const dailyExpense = remainingAmount / 30;
//     setDailyLimit(dailyExpense.toFixed(2));

//     // Save to database
//     try {
//       const response = await fetch("http://localhost:5000/api/plans", {
//         method: "POST",
//         headers: { "Content-Type": "application/json" },
//         body: JSON.stringify({
//           monthlyIncome,
//           expectedSavings,
//           dailyExpenditure: dailyExpense.toFixed(2),
//         }),
//       });

//       const data = await response.json();
//       if (response.ok) {
//         setMessage("Plan saved successfully!");
//         fetchPlans(); // Refresh list
//       } else {
//         setMessage(data.error || "Failed to save plan.");
//       }
//     } catch (error) {
//       setMessage("Server error. Try again later.");
//     }
//   };

//   // Delete all plans
//   const clearPlans = async () => {
//     try {
//       await fetch("http://localhost:5000/api/plans", { method: "DELETE" });
//       setPlans([]);
//       setMessage("All plans cleared!");
//     } catch (error) {
//       setMessage("Failed to clear plans.");
//     }
//   };

//   return (
//     <Container className="plan-container">
//       <Grid container spacing={3}>
//         {/* Left Side: Financial Planning */}
//         <Grid item xs={12} md={6}>
//           <Paper elevation={3} className="plan-box">
//             <Typography variant="h4" className="plan-title">Financial Planning</Typography>

//             {/* Currency Selection */}
//             <FormControl fullWidth>
//               <InputLabel>Currency</InputLabel>
//               <Select value={currency} onChange={(e) => setCurrency(e.target.value)}>
//                 <MenuItem value="USD">USD ($)</MenuItem>
//                 <MenuItem value="XAF">XAF (CFA)</MenuItem>
//               </Select>
//             </FormControl>

//             {/* Income Input */}
//             <TextField
//               label={`Monthly Income (${currency})`}
//               variant="outlined"
//               fullWidth
//               margin="normal"
//               value={income}
//               onChange={(e) => setIncome(e.target.value)}
//               type="number"
//             />

//             {/* Savings Input */}
//             <TextField
//               label={`Expected Savings (${currency})`}
//               variant="outlined"
//               fullWidth
//               margin="normal"
//               value={savings}
//               onChange={(e) => setSavings(e.target.value)}
//               type="number"
//             />

//             {/* Calculate & Save Button */}
//             <Button variant="contained" color="primary" fullWidth className="calculate-btn" onClick={calculateAndSavePlan}>
//               Calculate & Save Plan
//             </Button>

          //   {/* Result Display */}
          //   {dailyLimit !== null && (
          //     <Typography variant="h6" className="result-text">
          //       You can spend <strong>{convertCurrency(dailyLimit)}</strong> {currency} per day.
          //     </Typography>
          //   )}

          //   {/* Success/Error Message */}
          //   {message && <Alert severity={message.includes("success") ? "success" : "error"}>{message}</Alert>}
          // </Paper>
//         </Grid>

//         {/* Right Side: Planned Set */}
//         <Grid item xs={12} md={6}>
//           <Paper elevation={3} className="plan-box">
//             <Typography variant="h4" className="plan-title">Planned Set</Typography>

//             {plans.length > 0 ? (
//               plans.map((plan, index) => (
//                 <Card key={index} className="plan-card">
//                   <CardContent>
//                     <Typography variant="body2">Date: {new Date(plan.createdAt).toLocaleDateString()}</Typography>
//                     <Typography variant="h6">Income: {convertCurrency(plan.monthlyIncome)} {currency}</Typography>
//                     <Typography variant="h6">Savings: {convertCurrency(plan.expectedSavings)} {currency}</Typography>
//                     <Typography variant="h6">Daily Expense: {convertCurrency(plan.dailyExpenditure)} {currency}</Typography>
//                   </CardContent>
//                 </Card>
//               ))
//             ) : (
//               <Typography variant="body1">No plans available.</Typography>
//             )}

//             {/* Clear Plans Button */}
//             <Button variant="outlined" color="secondary" fullWidth onClick={clearPlans} className="clear-btn">
//               Clear Plans
//             </Button>
//           </Paper>
//         </Grid>
//       </Grid>
//     </Container>
//   );
// };

// export default Plan;



