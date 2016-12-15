-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 07:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(22) NOT NULL,
  `emp_code` varchar(222) DEFAULT NULL,
  `name` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `address` varchar(222) DEFAULT NULL,
  `designation` varchar(222) DEFAULT NULL,
  `leave_entitled` int(22) DEFAULT NULL,
  `leave_taken` int(22) DEFAULT NULL,
  `remaining_leave` int(22) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `mod_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_code`, `name`, `email`, `start_date`, `end_date`, `address`, `designation`, `leave_entitled`, `leave_taken`, `remaining_leave`, `entry_date`, `mod_date`) VALUES
(1, 'PSE001', 'dfgn', 'aditya.manhas2013@gmail.com', '2016-10-10', '2016-10-28', '421,akash avenue,amritsar', 'dev', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE `leave_details` (
  `id` int(22) NOT NULL,
  `empid` int(22) NOT NULL,
  `leave_ent` int(22) DEFAULT NULL,
  `leave_start` date DEFAULT NULL,
  `leave_end` date DEFAULT NULL,
  `leave_taken` int(22) DEFAULT NULL,
  `leave_rem` int(22) DEFAULT NULL,
  `leave_type` int(222) DEFAULT NULL,
  `is_approved` date DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `mod_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_details`
--

INSERT INTO `leave_details` (`id`, `empid`, `leave_ent`, `leave_start`, `leave_end`, `leave_taken`, `leave_rem`, `leave_type`, `is_approved`, `entry_date`, `mod_date`) VALUES
(1, 1, NULL, '2016-10-16', '2016-10-21', 5, 2, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(22) NOT NULL,
  `type` varchar(222) DEFAULT NULL,
  `description` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `type`, `description`) VALUES
(1, 'Priveleged Leave', 'Leaves within entitled leaves or for other business purposes. '),
(2, 'Casual Leave', 'Leaves for personal purposes.'),
(5, 'Sick Leave', 'For when an employee is not feeling well.');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(22) NOT NULL,
  `salid` int(22) DEFAULT NULL,
  `name` varchar(222) DEFAULT NULL,
  `basic_salary` int(22) DEFAULT NULL,
  `hra` int(22) DEFAULT NULL,
  `da` int(22) DEFAULT NULL,
  `mob_reimbursement` int(22) DEFAULT NULL,
  `advance` int(22) DEFAULT NULL,
  `expense` int(22) DEFAULT NULL,
  `total` int(22) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `mod_date` date DEFAULT NULL,
  `salary_month` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `salid`, `name`, `basic_salary`, `hra`, `da`, `mob_reimbursement`, `advance`, `expense`, `total`, `entry_date`, `mod_date`, `salary_month`) VALUES
(6, 1, NULL, 18500, 1850, 4625, NULL, 200, 500, 26675, NULL, NULL, 'May');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(22) NOT NULL,
  `first_name` varchar(222) NOT NULL,
  `last_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `address`) VALUES
(10, 'aditya', 'manhas', 'aditya.m@provensec.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_code` (`emp_code`);

--
-- Indexes for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empid` (`empid`) USING BTREE,
  ADD KEY `leave_type` (`leave_type`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `salid` (`salid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leave_details`
--
ALTER TABLE `leave_details`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `leave_details`
--
ALTER TABLE `leave_details`
  ADD CONSTRAINT `leave_details_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `employee` (`id`),
  ADD CONSTRAINT `leave_details_ibfk_2` FOREIGN KEY (`leave_type`) REFERENCES `leave_type` (`id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`salid`) REFERENCES `employee` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
