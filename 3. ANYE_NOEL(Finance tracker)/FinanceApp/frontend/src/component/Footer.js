import React from "react";
import { Container, Grid, Typography, IconButton } from "@mui/material";
import { Facebook, Twitter, Instagram, LinkedIn } from "@mui/icons-material";
import "./footer.css"; // Import external CSS

const Footer = () => {
  return (
    <footer className="footer">
      <Container maxWidth="lg">
        <Grid container spacing={4} className="footer-content">
          {/* Key Features Section */}
          <Grid item xs={12} md={6}>
            <Typography variant="h6" className="footer-title">
              Key Features
            </Typography>
            <ul className="footer-list">
              <li>✔ Expense Tracking</li>
              <li>✔ Smart Budgeting</li>
              <li>✔ Secure Transactions</li>
              <li>✔ Investment Insights</li>
            </ul>
          </Grid>

          {/* Social Media Links */}
          <Grid item xs={12} md={6} className="footer-socials">
            <Typography variant="h6" className="footer-title">
              Follow Us
            </Typography>
            <div className="social-icons">
              <IconButton className="social-icon" href="https://facebook.com" target="_blank">
                <Facebook />
              </IconButton>
              <IconButton className="social-icon" href="https://twitter.com" target="_blank">
                <Twitter />
              </IconButton>
              <IconButton className="social-icon" href="https://instagram.com" target="_blank">
                <Instagram />
              </IconButton>
              <IconButton className="social-icon" href="https://linkedin.com" target="_blank">
                <LinkedIn />
              </IconButton>
            </div>
          </Grid>
        </Grid>

        {/* Copyright */}
        <Typography variant="body2" className="footer-copy">
          © {new Date().getFullYear()} FinanceApp. All rights reserved.
        </Typography>
      </Container>
    </footer>
  );
};

export default Footer;
