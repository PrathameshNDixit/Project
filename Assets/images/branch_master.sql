-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comtransedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `branch_id` int(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`branch_id`, `branch_name`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`, `photo`) VALUES
(1, 'Financial', 0, 1, 1, '2023-03-09 15:39:46', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-09 14:39:46', NULL),
(2, 'Comtranse', 0, 1, 1, '2023-03-10 08:57:59', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-10 07:57:59', NULL),
(3, 'asb', 0, 1, 1, '2023-03-13 15:30:57', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 14:30:57', NULL),
(4, 'Male', 0, 1, 1, '2023-03-13 16:08:35', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 15:08:35', NULL),
(5, 'Female', 0, 1, 1, '2023-03-13 16:10:46', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 15:10:46', NULL),
(6, 'male', 0, 1, 1, '2023-03-13 16:14:07', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 15:14:07', NULL),
(7, '6b6n byt', 0, 1, 1, '2023-03-13 16:15:20', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 15:15:20', NULL),
(8, 'fuck', 0, 1, 1, '2023-03-13 16:15:40', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-13 15:15:40', NULL),
(9, 'rbtrbyh', 0, 1, 1, '2023-03-19 16:42:18', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-19 15:42:18', NULL),
(10, 'Ritesh', 0, 1, 1, '2023-03-19 16:42:35', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-19 15:42:35', NULL),
(11, 'ytfytf', 0, 1, 1, '2023-03-26 07:36:01', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:36:01', NULL),
(12, 'hffthf', 0, 1, 1, '2023-03-26 07:38:55', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:38:55', NULL),
(13, 'Bharat', 0, 1, 1, '2023-03-26 07:49:36', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:49:36', NULL),
(14, 'Ritesh', 0, 1, 1, '2023-03-26 07:50:42', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:50:42', NULL),
(15, 'Tahir', 0, 1, 1, '2023-03-26 07:54:07', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:54:07', NULL),
(16, 'Adya bhai', 0, 1, 1, '2023-03-26 07:56:43', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 05:56:43', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `branch_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
