-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 09:26 AM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `c_nic` varchar(255) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `t_nic` varchar(255) NOT NULL,
  `t_fname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `c_nic`, `c_fname`, `t_nic`, `t_fname`, `status`) VALUES
(9, '', '', '1 ', '', 'Hello'),
(10, '', '', '1 ', '', 'Hello'),
(11, '7 ', ' ', '1 ', '', 'Hello'),
(12, '7 ', 'pramod ', '1 ', '', 'Active');

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
  `pic` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nic`, `fname`, `email`, `lname`, `contactno`, `password`, `type`, `pic`) VALUES
('1', 'buddhi', 'buddhi.alahendra@gmail.com', '', 0, '202cb962ac59075b964b07152d234b70', 0, ''),
('123', 'Buddhi', 'ffdd', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 0, ''),
('12345', 'buddhi', 'buddhi.alahendra@gmail.com', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 1, ''),
('321', 'dsfds', 'dsfdsf', 'dsfsf', 768390856, '202cb962ac59075b964b07152d234b70', 0, ''),
('7', 'pramod', 'buddhi.alahendra@gmail.com', '', 0, '202cb962ac59075b964b07152d234b70', 1, ''),
('982730740v', 'Buddhi', 'm.madurangidesilva@gmail.com', 'Alahendra', 768390856, '202cb962ac59075b964b07152d234b70', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
