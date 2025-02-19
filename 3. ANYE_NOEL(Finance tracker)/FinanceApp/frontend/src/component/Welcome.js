import React from "react";
import { Container, Typography, Grid, Card, CardContent, CardMedia } from "@mui/material";
import { Savings, TrendingUp, Payment, Security } from "@mui/icons-material";
import "./welcome.css"; // Import external CSS

const features = [
  {
    title: "Track Expenses",
    description: "Easily monitor your spending habits and manage your daily expenses efficiently.",
    icon: <Payment fontSize="large" color="primary" />,
    // image: "https://source.unsplash.com/400x300/?money,finance"
  },
  {
    title: "Smart Savings",
    description: "Set savings goals and let the app help you reach them effortlessly.",
    icon: <Savings fontSize="large" color="secondary" />,
    image: "https://source.unsplash.com/400x300/?piggybank,savings"
  },
  {
    title: "Investment Insights",
    description: "Get real-time analytics and trends to make informed investment decisions.",
    icon: <TrendingUp fontSize="large" color="success" />,
    image: "https://source.unsplash.com/400x300/?investment,stocks"
  },
  {
    title: "Secure & Private",
    description: "Your financial data is encrypted and securely stored with top-level protection.",
    icon: <Security fontSize="large" color="error" />,
    image: "https://source.unsplash.com/400x300/?security,privacy"
  }
];

const WelcomePage = () => {
  return (
    <Container className="welcome-container">
      {/* Hero Section */}
      <div className="hero-section">
        <Typography variant="h3" className="hero-title">Welcome to FinanceApp</Typography>
        <Typography variant="h6" className="hero-subtitle">
          Manage your expenses, save smartly, and grow your wealth with ease.
        </Typography>
      </div>

      {/* Feature Cards */}
      <Grid container spacing={4} className="features-grid">
        {features.map((feature, index) => (
          <Grid item xs={12} sm={6} md={3} key={index}>
            <Card className="feature-card">
              {/* <CardMedia component="img" height="140" image={feature.image} alt={feature.title} /> */}
              <CardContent>
                <div className="feature-icon">{feature.icon}</div>
                <Typography variant="h6" className="feature-title">{feature.title}</Typography>
                <Typography variant="body2" className="feature-desc">{feature.description}</Typography>
              </CardContent>
            </Card>
          </Grid>
        ))}
      </Grid>
    </Container>
  );
};

export default WelcomePage;
