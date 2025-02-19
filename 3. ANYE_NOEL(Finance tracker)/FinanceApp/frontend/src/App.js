import logo from './logo.svg';
import './App.css';
import Navbar from './component/Navbar';
import Footer from './component/Footer';
import Welcome from './component/Welcome';
import Signin from "./component/SignIn";
 
import Plan from "./component/Plan";
import Expenses from "./component/Expenses";
import Savings from "./component/Savings";
import { Container } from "@mui/material";
import { useState } from 'react';




const App = () => {
  const [currentPage, setCurrentPage] = useState("welcome");

  // Function to change components dynamically
  const renderComponent = () => {
    switch (currentPage) {
      case "signin":
        return <Signin />;
      case "plan":
        return <Plan />;
      case "expenses":
        return <Expenses />;
      case "savings":
        return <Savings />;
      default:
        return <Welcome />;
    }
  };

  return (
    <div>
    <Container>
      {/* Navbar with onNavigate handler */}
      <Navbar onNavigate={setCurrentPage} />

      {/* Display the current selected component */}
      {renderComponent()}
    </Container>
    <Footer/>
    </div>
  );
};

export default App;
