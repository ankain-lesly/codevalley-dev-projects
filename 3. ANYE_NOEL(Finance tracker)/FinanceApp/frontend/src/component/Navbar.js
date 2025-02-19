  

import React, { useState } from "react";
import { AppBar, Toolbar, Typography, IconButton, Drawer, List, ListItem, ListItemText } from "@mui/material";
import { AttachMoney, Login, Menu } from "@mui/icons-material";
import "./navbar.css";

const Navbar = ({ onNavigate }) => {
  const [mobileOpen, setMobileOpen] = useState(false);

  const handleDrawerToggle = () => {
    setMobileOpen(!mobileOpen);
  };

  return (
    <AppBar position="static" className="navbar">
      <Toolbar className="toolbar">
        {/* Logo */}
        <Typography variant="h6" className="logo" onClick={() => onNavigate("welcome")} style={{ cursor: "pointer" }}>
          <AttachMoney className="logo-icon" /> FinanceApp
        </Typography>

        {/* Desktop Navigation Links */}
        <div className="nav-links">
          <Typography className="nav-item" onClick={() => onNavigate("expenses")}>Expenses</Typography>
          <Typography className="nav-item" onClick={() => onNavigate("savings")}>Savings</Typography>
          <Typography className="nav-item" onClick={() => onNavigate("plan")}>Plan</Typography>
        </div>

        {/* Login Button & Menu Icon for Mobile */}
        <div className="nav-actions">
          <IconButton color="inherit" className="login-button" onClick={() => onNavigate("signin")}>
            <Login />
          </IconButton>
          <IconButton color="inherit" className="menu-button" onClick={handleDrawerToggle}>
            <Menu />
          </IconButton>
        </div>
      </Toolbar>

      {/* Mobile Drawer */}
      <Drawer anchor="right" open={mobileOpen} onClose={handleDrawerToggle}>
        <List className="drawer-list">
          <ListItem button onClick={() => { onNavigate("expenses"); handleDrawerToggle(); }}>
            <ListItemText primary="Expenses" />
          </ListItem>
          <ListItem button onClick={() => { onNavigate("savings"); handleDrawerToggle(); }}>
            <ListItemText primary="Savings" />
          </ListItem>
          <ListItem button onClick={() => { onNavigate("plan"); handleDrawerToggle(); }}>
            <ListItemText primary="Plan" />
          </ListItem>
          <ListItem button onClick={() => { onNavigate("signin"); handleDrawerToggle(); }}>
            <ListItemText primary="Login" />
          </ListItem>
        </List>
      </Drawer>
    </AppBar>
  );
};

export default Navbar;

