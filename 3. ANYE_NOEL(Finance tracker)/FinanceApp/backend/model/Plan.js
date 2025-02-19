const mongoose = require("mongoose");

const planSchema = new mongoose.Schema({
  monthlyIncome: { type: Number, required: true },
  expectedSavings: { type: Number, required: true },
  dailyExpenditure: { type: Number, required: true },
  createdAt: { type: Date, default: Date.now }
});

module.exports = mongoose.model("Plan", planSchema);
