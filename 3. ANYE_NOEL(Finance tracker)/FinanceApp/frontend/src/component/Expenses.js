import React, { useState } from "react";
import {
  Container,
  Grid,
  Card,
  CardContent,
  Typography,
  TextField,
  Button,
  List,
  ListItem,
  ListItemText,
} from "@mui/material";
import CheckCircleIcon from "@mui/icons-material/CheckCircle";
import TrendingUpIcon from "@mui/icons-material/TrendingUp";
import TrendingDownIcon from "@mui/icons-material/TrendingDown";
import "./expenses.css";

const Expenses = () => {
  const [selectedDay, setSelectedDay] = useState(1);
  const [items, setItems] = useState([]);
  const [newItem, setNewItem] = useState("");
  const [newPrice, setNewPrice] = useState("");
  const [totalPrice, setTotalPrice] = useState(0);
  const expectedSavings = 80;

  const handleDayClick = (day) => {
    setSelectedDay(day);
    setItems([]);
    setTotalPrice(0);
  };

  const addItem = () => {
    if (newItem && newPrice) {
      setItems([...items, { name: newItem, price: parseFloat(newPrice) }]);
      setNewItem("");
      setNewPrice("");
    }
  };

  const calculateTotal = () => {
    const total = items.reduce((acc, item) => acc + item.price, 0);
    setTotalPrice(total);
  };

  const getStatusIcon = () => {
    if (totalPrice < expectedSavings) return <TrendingUpIcon color="success" />;
    if (totalPrice > expectedSavings) return <TrendingDownIcon color="error" />;
    return <CheckCircleIcon color="primary" />;
  };

  return (
    <Container className="expenses-container">
      <Grid container spacing={3}>
        {/* Calendar Card */}
        <Grid item xs={12} md={6}>
          <Card className="calendar-card">
            <CardContent>
              <Typography variant="h5">Select a Day</Typography>
              <Grid container spacing={1} className="calendar-grid">
                {Array.from({ length: 30 }, (_, i) => (
                  <Grid item xs={2} key={i}>
                    <Button
                      variant={selectedDay === i + 1 ? "contained" : "outlined"}
                      onClick={() => handleDayClick(i + 1)}
                    >
                      {i + 1}
                    </Button>
                  </Grid>
                ))}
              </Grid>
            </CardContent>
          </Card>
        </Grid>

        {/* Expense Entry & Display */}
        <Grid item xs={12} md={6}>
          <Card className="expense-card">
            <CardContent>
              <Typography variant="h5">Day {selectedDay}</Typography>
              <Typography variant="h6">Total Expenses: ${totalPrice.toFixed(2)}</Typography>
              <Typography variant="h6">Expected Savings: ${expectedSavings}</Typography>
              {getStatusIcon()}

              {/* Input Fields */}
              <TextField
                label="Item"
                value={newItem}
                onChange={(e) => setNewItem(e.target.value)}
                fullWidth
                margin="normal"
              />
              <TextField
                label="Price"
                type="number"
                value={newPrice}
                onChange={(e) => setNewPrice(e.target.value)}
                fullWidth
                margin="normal"
              />
              <Button variant="contained" color="primary" onClick={addItem}>
                Add Item
              </Button>

              {/* List of Items */}
              <List>
                {items.map((item, index) => (
                  <ListItem key={index}>
                    <ListItemText primary={`${item.name}: $${item.price}`} />
                  </ListItem>
                ))}
              </List>

              <Button variant="contained" color="secondary" onClick={calculateTotal}>
                Know Total
              </Button>
            </CardContent>
          </Card>
        </Grid>
      </Grid>
    </Container>
  );
};

export default Expenses;
