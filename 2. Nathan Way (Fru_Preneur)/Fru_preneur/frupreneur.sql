-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2025 at 01:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frupreneur`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(3) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_size` varchar(10) NOT NULL,
  `product_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_image`, `product_name`, `product_price`, `product_size`, `product_qty`) VALUES
(11, '', 'Solar Home System', 1000, 'Large', 4),
(12, '', 'Solar Home System', 1000, 'Small', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_image` text NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(5) NOT NULL,
  `stock_availabiity` varchar(255) NOT NULL DEFAULT 'Avaiable'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_brand`, `product_name`, `product_price`, `stock_availabiity`) VALUES
(1, 'file-SYW9aHDn1vZrnhghb14onm.webp', 'Sun Vibe', 'Solar Home System', 1000, 'Avaiable'),
(2, 'received_623722086753342.jpeg', 'AquaMiser', 'Low-Fow Water Fixtures', 250, 'Avaiable'),
(3, 'received_614728541216341.jpeg', 'Sun Vibe', 'Mini Solar grid', 500, 'Avaiable'),
(4, 'received_1096638751955081.jpeg', 'Aqua Miser', 'Rain Water-Harvesting Sytem', 500, 'Avaiable'),
(5, 'received_1100740294929122.jpeg', 'Aqua Miser', 'Water Purification System', 250, 'Avaiable'),
(6, 'received_1101292367978707.jpeg', 'Yamaha', 'Improved Cookstove', 300, 'Avaiable'),
(7, 'received_1306308307384064.jpeg', 'Sun Vibe', 'Off-grid Solar Refrigerator', 500, 'Avaiable'),
(8, 'received_581460167931167.jpeg', 'Sun Vibe', 'Solar Powered water-pump', 400, 'Avaiable'),
(9, 'h1.jpg', 'Gluco-flow Systems', 'Insulin Pump', 250, 'Avaiable'),
(10, 'h2.jpg', 'NetGuard Solutions', 'Medicated Camping Net', 150, 'Avaiable'),
(11, 'h3.jpg', 'SonoWave Mobile', 'Mobile Ultrasound', 500, 'Avaiable'),
(12, 'h4.jpg', 'GlucoTrack Technologies', 'Glucose & Blood Sugar Monitors', 300, 'Avaiable'),
(13, 'h5.jpg', 'RapidAid Solutions', 'First Aid Kit', 100, 'Avaiable'),
(14, 'h6.jpg', 'MedicsGroups', 'Medicated Mosquito Net', 100, 'Avaiable'),
(15, 'h7.jpg', 'PureBreath systems', 'Air Purifier', 500, 'Avaiable'),
(16, 'h8.jpg', 'Apple', 'Smart Watch', 300, 'Avaiable'),
(17, 'received_632708132419225.jpeg', 'Illuminate', 'Low-Consumption light bulb', 500, 'Avaiable'),
(18, 'received_1306308307384064.jpeg', 'Sun Vibe', 'Solar Reffrigerator', 1000, 'Avaiable'),
(19, 'received_863321435742787.jpeg', 'LG', 'Water Filter', 500, 'Avaiable'),
(20, 'received_906329481585730.jpeg', 'LG', 'Smoke Absorber', 300, 'Avaiable');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `confirm_password`) VALUES
(5, 'Blag Silva', 'blagsilva@gmail.com', 'f6771b5221d40ef42af8820ae58a8908', 'f6771b5221d40ef42af8820ae58a8908'),
(6, 'alpha', 'alphaway@gmail.com', 'f6771b5221d40ef42af8820ae58a8908', 'f6771b5221d40ef42af8820ae58a8908'),
(7, 'lakran', 'elalakran@gmail.com', 'f6771b5221d40ef42af8820ae58a8908', 'f6771b5221d40ef42af8820ae58a8908');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
