-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 05:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `old_balance` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `createaccount`
--

INSERT INTO `createaccount` (`s_no`, `name`, `mobile_no`, `gst_no`, `old_balance`, `email`, `gender`, `password`, `address`, `city`, `state`, `pin_code`) VALUES
(1, 'ajay', '123456789', '879089', 4500, 'aj@gmail.com', 'Male', '12345', 'Narwana', 'Narwana', 'Haryana', '126116'),
(2, 'amit', '123456789', '564897145', 500, 'amit@gmail.com', 'Male', '12345', 'NARWANA', 'NARWANA', 'Haryana', '126152');

-- --------------------------------------------------------

--
-- Table structure for table `newproduct`
--

CREATE TABLE `newproduct` (
  `s_no` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bar_code` varchar(50) NOT NULL,
  `hsn_code` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `gst` varchar(30) NOT NULL,
  `discount` decimal(30,0) NOT NULL,
  `opening_stock` varchar(30) NOT NULL,
  `sale_price` decimal(30,0) NOT NULL,
  `mrp` decimal(30,0) NOT NULL,
  `purchage_price` decimal(30,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newproduct`
--

INSERT INTO `newproduct` (`s_no`, `name`, `bar_code`, `hsn_code`, `company_name`, `quantity`, `gst`, `discount`, `opening_stock`, `sale_price`, `mrp`, `purchage_price`) VALUES
(1, '', '', '', '', '', '', '0', '', '0', '0', '0'),
(2, 'aj', '123', '444', 'abc', '50', '18', '2', '', '50', '55', '45'),
(3, 'sheokand', '123456789', '987654321', 'Computer Solution', '50', '24', '10', '', '100', '120', '90');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createaccount`
--
ALTER TABLE `createaccount`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `newproduct`
--
ALTER TABLE `newproduct`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createaccount`
--
ALTER TABLE `createaccount`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newproduct`
--
ALTER TABLE `newproduct`
  MODIFY `s_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
