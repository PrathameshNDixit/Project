-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 06:57 PM
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
-- Database: `postalservicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `postalreceivemaster`
--

CREATE TABLE `postalreceivemaster` (
  `ReceiveId` bigint(20) NOT NULL,
  `InwardNo` bigint(20) DEFAULT NULL,
  `InwardDate` date DEFAULT NULL,
  `InwardName` varchar(20) DEFAULT NULL,
  `Place` varchar(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `IncomingRefNo` int(10) DEFAULT NULL,
  `IncomingDate` date DEFAULT NULL,
  `Subject` varchar(100) DEFAULT NULL,
  `Remark` varchar(100) DEFAULT NULL,
  `PostalCharges` float DEFAULT NULL,
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
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postalreceivemaster`
--

INSERT INTO `postalreceivemaster` (`ReceiveId`, `InwardNo`, `InwardDate`, `InwardName`, `Place`, `Address`, `IncomingRefNo`, `IncomingDate`, `Subject`, `Remark`, `PostalCharges`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(0, 1, '2333-12-03', 'abc', 'kolhapur', 'abcacbc', 12, '2006-12-03', 'gfjdhdggfg', 'hdfhgbygwgy', 1.2, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26 14:51:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
