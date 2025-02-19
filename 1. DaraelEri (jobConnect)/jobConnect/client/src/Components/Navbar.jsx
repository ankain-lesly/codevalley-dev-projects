import React, {useState} from 'react'
import { Link } from 'react-router-dom'
import { Navbar, Avatar, Button, TextInput} from 'flowbite-react'

// Icons 
import {FiBell, FiMoon, FiHome,FiCompass,FiMessageCircle} from 'react-icons/fi'
import {HiChartPie} from 'react-icons/hi'
import { AiOutlineSearch } from 'react-icons/ai'

import { motion } from 'framer-motion'

// import Logo from '../Assets/Logo/Logo.png'

function NavBar() {
  const [activeLink, setActiveLink] = useState('/')

  const links = [
    { path: '/', label: 'Home', icon: <FiHome className='text-lg' /> },
    { path: '/explore', label: 'Explore', icon: <FiCompass className='text-lg' /> },
    { path: '/chats', label: 'Chats', icon: <FiMessageCircle className='text-lg' /> },
    { path: '/Statistics', label: 'Statistics', icon: <HiChartPie className='text-lg' /> },
  ]

  return (
    <header className="bg-white shadow">  
    <div className="container mx-auto px-6 py-4 flex justify-between items-center">  
      <h1 className="text-2xl font-bold">Job Portal</h1>  
      <nav>  
        <Link to="/" className="text-gray-500 mx-4 hover:text-gray-700">Home</Link>  
        <Link to="/dashboard" className="text-gray-500 mx-4 hover:text-gray-700">DashBoard</Link>  
        <Link to="/companies" className="text-gray-500 mx-4 hover:text-gray-700">Companies</Link>  
        <Link to="/contact" className="text-gray-500 mx-4 hover:text-gray-700">Contact</Link>  
      </nav>  
      <button className="bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600">  
        Sign In  
      </button>  
    </div>  
  </header>  
  )
}

export default NavBar