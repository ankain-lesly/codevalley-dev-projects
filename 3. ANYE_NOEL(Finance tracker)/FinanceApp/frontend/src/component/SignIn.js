// import React, { useState } from "react";
// import { Container, TextField, Button, Typography, Box } from "@mui/material";
// import axios from "axios";
// import "./signin.css"; // Import external CSS
// import { useNavigate } from "react-router-dom";

// const SignIn = () => {
//   const [formData, setFormData] = useState({ username: "", password: "" });
//   const navigate = useNavigate();

//   // Handle input change
//   const handleChange = (e) => {
//     setFormData({ ...formData, [e.target.name]: e.target.value });
//   };

//   // Register User
//   const handleRegister = async () => {
//     try {
//       const response = await axios.post("http://localhost:5000/api/register", formData);
//       alert(response.data.message);
//     } catch (error) {
//       alert("Registration Failed: " + error.response?.data?.message || error.message);
//     }
//   };

//   // Login User
//   const handleLogin = async () => {
//     try {
//       const response = await axios.post("http://localhost:5000/api/login", formData);
//       localStorage.setItem("token", response.data.token); // Save session token
//       alert("Login Successful!");
//       navigate("/plan"); // Redirect to plan page
//     } catch (error) {
//       alert("Login Failed: " + error.response?.data?.message || error.message);
//     }
//   };

//   return (
//     <Container className="signin-container">
//       <Box className="signin-box">
//         <Typography variant="h5" className="signin-title">Sign In</Typography>
//         <TextField
//           label="Username"
//           name="username"
//           variant="outlined"
//           fullWidth
//           margin="normal"
//           onChange={handleChange}
//         />
//         <TextField
//           label="Password"
//           name="password"
//           type="password"
//           variant="outlined"
//           fullWidth
//           margin="normal"
//           onChange={handleChange}
//         />
//         <Box className="signin-actions">
//           <Button variant="contained" color="primary" onClick={handleLogin}>Login</Button>
//           <Button variant="outlined" color="secondary" onClick={handleRegister}>Register</Button>
//         </Box>
//       </Box>
//     </Container>
//   );
// };

// export default SignIn;
 

import React, { useState } from "react";
import { Container, TextField, Button, Typography, Box } from "@mui/material";
import axios from "axios";
import "./signin.css"; // Import external CSS

const SignIn = () => {
  const [formData, setFormData] = useState({ username: "", password: "" });

  // Handle input change
  const handleChange = (e) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  // Register User
  const handleRegister = async () => {
    try {
      const response = await axios.post("http://localhost:5000/api/register", formData);
      alert(response.data.message);
    } catch (error) {
      alert("Registration Failed: " + error.response?.data?.message || error.message);
    }
  };

  // Login User
  const handleLogin = async () => {
    try {
      const response = await axios.post("http://localhost:5000/api/login", formData);
      localStorage.setItem("token", response.data.token); // Save session token
      alert("Login Successful!");
      window.location.reload();
    } catch (error) {
      alert("Login Failed: " + error.response?.data?.message || error.message);
    }
  };

  return (
    <Container className="signin-container">
      <Box className="signin-box">
        <Typography variant="h5" className="signin-title">Sign In</Typography>
        <TextField
          label="Username"
          name="username"
          variant="outlined"
          fullWidth
          margin="normal"
          onChange={handleChange}
        />
        <TextField
          label="Password"
          name="password"
          type="password"
          variant="outlined"
          fullWidth
          margin="normal"
          onChange={handleChange}
        />
        <Box className="signin-actions">
          <Button variant="contained" color="primary" onClick={handleLogin}>Login</Button>
          <Button variant="outlined" color="secondary" onClick={handleRegister}>Register</Button>
        </Box>
      </Box>
    </Container>
  );
};

export default SignIn;
