const express = require("express");
const Plan = require("../model/Plan");
const router = express.Router();

// Create a new financial plan
router.post("/", async (req, res) => {
  try {
    const { monthlyIncome, expectedSavings } = req.body;

    // Validate input
    if (!monthlyIncome || !expectedSavings || expectedSavings > monthlyIncome) {
      return res.status(400).json({ error: "Invalid input values." });
    }

    // Calculate daily expenditure limit
    const dailyExpenditure = (monthlyIncome - expectedSavings) / 30;

    // Create new plan
    const newPlan = new Plan({
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

// Get all saved plans
router.get("/", async (req, res) => {
  try {
    const plans = await Plan.find().sort({ createdAt: -1 });
    res.json(plans);
  } catch (error) {
    res.status(500).json({ error: "Server error" });
  }
});

module.exports = router;
