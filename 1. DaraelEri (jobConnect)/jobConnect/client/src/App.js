import React from 'react'
import { BrowserRouter as Router, Routes, Route, useLocation } from 'react-router-dom'
import Home from './Pages/Home'
import Dashboard from './Pages/Dashboard' 
import Companies from './Pages/Company' 
import Contact from './Pages/Contact'
import SignUp from './Pages/SignUp'
import Login from './Pages/Login'
// import SideBar from './Components/SideBar'
import NavBar from './Components/Navbar'

function App() {

  return (
    <Router> 
      <Main/>
    </Router>
  )
}


const Main = () => {
  const path = useLocation()
  const showNavbar = !['/login', '/sign-up'].includes(path.pathname)
  return (
    <div>
      {showNavbar && <NavBar />}
      <Routes>
        <Route path="/" element={<Home/>} />
        <Route path="/dashboard" element={<Dashboard/>} />
        <Route path="/companies" element={<Companies/>} />
        <Route path="/contact" element={<Contact/>} />
        <Route path="/sign-up" element={<SignUp/>} />
        <Route path="/login" element={<Login/>} />
      </Routes>
    </div>
  )
}

export default App
