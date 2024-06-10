-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2024 at 07:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE `blooddonor` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `months` int(11) NOT NULL,
  `bldgrp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`id`, `user_id`, `name`, `age`, `gender`, `weight`, `months`, `bldgrp`, `email`, `mobile`, `user_name`, `pass`) VALUES
(1, 491146, 'Bhupendra Patil', 23, 'Male', 69, 12, 'O+', 'omkarmaurya123@gmail.com', 1212121212, 'bhupi', '1212'),
(2, 128270812290, 'Rohan Ramchandra Lambar', 19, 'Male', 59, 3, 'A+', 'rohanlambar98@gmail.com', 2147483647, 'rohan', '123'),
(5, 737544681340891, 'test', 23, 'Male', 78, 12, 'O+', 'naruto123@gmail.com', 2147483647, 'rohanlambar07', '1234'),
(6, 1102725617071766935, 'shubham patil', 23, 'male', 56, 4, 'A+', 'shubham@patil.com', 2147483647, 'shubham_patil', 'shubham@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddonor`
--
ALTER TABLE `blooddonor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
