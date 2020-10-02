-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 05:38 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andum`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(20) NOT NULL,
  `nic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dress_showcase`
--

CREATE TABLE `dress_showcase` (
  `dress_id` int(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` float NOT NULL,
  `permission` int(11) NOT NULL,
  `t_nic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dress_showcase`
--

INSERT INTO `dress_showcase` (`dress_id`, `category`, `title`, `amount`, `permission`, `t_nic`) VALUES
(1, 'shoes', 'dsi white shoes', 500, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tailors`
--

CREATE TABLE `tailors` (
  `t_id` int(20) NOT NULL,
  `ac_no` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `unpaid_amount` float NOT NULL,
  `nic` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_orders`
--

CREATE TABLE `t_orders` (
  `id` int(11) NOT NULL,
  `c_nic` varchar(255) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `t_nic` varchar(255) NOT NULL,
  `t_fname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_orders`
--

INSERT INTO `t_orders` (`id`, `c_nic`, `c_fname`, `t_nic`, `t_fname`, `status`) VALUES
(9, '', '', '1 ', '', 'Hello'),
(10, '', '', '1 ', '', 'Hello'),
(11, '7 ', ' ', '1 ', '', 'Hello'),
(12, '7 ', 'pramod ', '1 ', '', 'Active'),
(13, '7 ', 'pramod ', '9 ', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nic` varchar(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactno` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(2) NOT NULL,
  `pic` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `postalcode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nic`, `fname`, `email`, `lname`, `contactno`, `password`, `type`, `pic`, `address`, `postalcode`) VALUES
('1', 'buddhi', 'buddhi.alahendra@gmail.com', '', 0, '202cb962ac59075b964b07152d234b70', 0, '', '', 0),
('123', 'Buddhi', 'ffdd', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 0, '', '', 0),
('12345', 'buddhi', 'buddhi.alahendra@gmail.com', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 1, '', '', 0),
('321', 'dsfds', 'dsfdsf', 'dsfsf', 768390856, '202cb962ac59075b964b07152d234b70', 0, '', '', 0),
('7', 'pramod', 'buddhi.alahendra@gmail.com', '', 0, '202cb962ac59075b964b07152d234b70', 1, '', '', 0),
('9', 'dfsdfs', 'gsdsfs', 'dsfsdf', 768390856, '202cb962ac59075b964b07152d234b70', 0, '', '', 0),
('982730740v', 'Buddhi', 'm.madurangidesilva@gmail.com', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 1, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `dress_showcase`
--
ALTER TABLE `dress_showcase`
  ADD PRIMARY KEY (`dress_id`),
  ADD KEY `t_nic` (`t_nic`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tailors`
--
ALTER TABLE `tailors`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `t_orders`
--
ALTER TABLE `t_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dress_showcase`
--
ALTER TABLE `dress_showcase`
  MODIFY `dress_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tailors`
--
ALTER TABLE `tailors`
  MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_orders`
--
ALTER TABLE `t_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);

--
-- Constraints for table `dress_showcase`
--
ALTER TABLE `dress_showcase`
  ADD CONSTRAINT `dress_showcase_ibfk_1` FOREIGN KEY (`t_nic`) REFERENCES `users` (`nic`);

--
-- Constraints for table `tailors`
--
ALTER TABLE `tailors`
  ADD CONSTRAINT `tailors_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `users` (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
