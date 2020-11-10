-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 03:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `div_manager`
--

CREATE TABLE `div_manager` (
  `div_id` varchar(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL DEFAULT 'div_man@123',
  `emp_status` varchar(25) NOT NULL DEFAULT 'Divisional_Manager',
  `div_code` varchar(10) NOT NULL,
  `no_employee` int(10) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `div_manager`
--

INSERT INTO `div_manager` (`div_id`, `first_name`, `last_name`, `email`, `pwd`, `emp_status`, `div_code`, `no_employee`, `is_deleted`) VALUES
('10', 'sample', 'sample123', 'sample', 'div_man@123', 'Divisional_Manager', '123', 10, 1),
('D101', 'Lasith', 'Perera', 'lasithperera@gmail.com', 'div_man@123', '   Divisional_Manager', 'D/R/220', 1, 1),
('D102', 'Lasith123', 'Disanayaka', 'disanayaka@gmail.com', 'div_man@123', '  Divisional_Manager', 'D/R/420', 8, 1),
('D103', 'prasanna', 'silva', 'prasanna@gmail.com', 'div_man@123', 'Divisional_Manager', 'D/Q/460', 2, 0),
('D104', 'Prabath', 'Gunathilaka', 'prabath@gmail.com', 'div_man@123', ' Divisional_Manager', 'D/R/783', 9, 0),
('D105', 'Sunil', 'Perera', 'sunil@gmail.com', 'div_man@123', 'Divisional_Manager', 'D/R/249', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `div_manager`
--
ALTER TABLE `div_manager`
  ADD PRIMARY KEY (`div_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `div_code` (`div_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
