-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 12:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(100) NOT NULL,
  `cus_name` varchar(100) DEFAULT NULL,
  `cus_contact` varchar(100) DEFAULT NULL,
  `cus_state` varchar(100) DEFAULT NULL,
  `cus_district` varchar(100) DEFAULT NULL,
  `cus_city` varchar(100) DEFAULT NULL,
  `cus_address` varchar(100) DEFAULT NULL,
  `cus_cnic` varchar(100) DEFAULT NULL,
  `cnic_image` varchar(100) DEFAULT NULL,
  `cus_password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loading`
--

CREATE TABLE `loading` (
  `load_id` int(100) NOT NULL,
  `load_from` varchar(100) DEFAULT NULL,
  `load_to` varchar(100) DEFAULT NULL,
  `load_material` varchar(100) DEFAULT NULL,
  `load_weight` varchar(100) DEFAULT NULL,
  `load_number` varchar(100) DEFAULT NULL,
  `load_date` varchar(100) DEFAULT NULL,
  `cus_contact` varchar(100) DEFAULT NULL,
  `driver_contact` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bill` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(100) NOT NULL,
  `pack_from` text DEFAULT NULL,
  `pack_to` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `package` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `truckoperator`
--

CREATE TABLE `truckoperator` (
  `TO_id` int(100) NOT NULL,
  `TO_name` varchar(100) DEFAULT NULL,
  `TO_contact` varchar(100) DEFAULT NULL,
  `TO_state` varchar(100) DEFAULT NULL,
  `TO_district` varchar(100) DEFAULT NULL,
  `TO_city` varchar(100) DEFAULT NULL,
  `TO_address` varchar(100) DEFAULT NULL,
  `TO_cnic` varchar(100) DEFAULT NULL,
  `cnic_image` varchar(100) DEFAULT NULL,
  `TO_password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `truck_number` varchar(100) DEFAULT NULL,
  `truck_weight` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `loading`
--
ALTER TABLE `loading`
  ADD PRIMARY KEY (`load_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `truckoperator`
--
ALTER TABLE `truckoperator`
  ADD PRIMARY KEY (`TO_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loading`
--
ALTER TABLE `loading`
  MODIFY `load_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `truckoperator`
--
ALTER TABLE `truckoperator`
  MODIFY `TO_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
