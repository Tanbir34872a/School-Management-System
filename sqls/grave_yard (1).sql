-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 03:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darussalam`
--

-- --------------------------------------------------------

--
-- Table structure for table `grave_yard`
--

CREATE TABLE `grave_yard` (
  `C_ID` int(15) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `mobile` int(11) NOT NULL,
  `Representative_name` varchar(30) DEFAULT NULL,
  `Expiring_date` date NOT NULL,
  `checkbox` varchar(30) NOT NULL,
  `booked` tinyint(1) NOT NULL,
  `rejected` tinyint(4) NOT NULL,
  `pending` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grave_yard`
--

INSERT INTO `grave_yard` (`C_ID`, `Name`, `mobile`, `Representative_name`, `Expiring_date`, `checkbox`, `booked`, `rejected`, `pending`) VALUES
(145, 'Hasan', 1405326501, 'Self', '2023-10-23', 'land_0_0', 1, 0, 0),
(147, 'XYZ', 5656, 'Self', '2023-10-25', 'land_4_2', 1, 0, 0),
(149, 'Mike Tyson', 999, 'Self', '2023-11-04', 'land_0_29', 1, 0, 0),
(150, 'Mike Tyson', 999, 'Self', '2023-10-30', 'land_0_23', 1, 0, 0),
(151, 'Mike Tyson', 999, 'Self', '2023-10-30', 'land_0_24', 1, 0, 0),
(152, 'Hasan', 1405326501, 'Self', '2023-10-29', 'land_0_1', 1, 0, 0),
(153, 'nLFEt3?/bgMm@ag', 1405326501, 'Self', '2023-10-16', 'land_0_2', 1, 0, 0),
(154, 'nLFEt3?/bgMm@ag', 1405326501, 'Self', '2023-10-16', 'land_0_3', 1, 0, 0),
(155, 'Roz', 123, 'Self', '2023-10-10', 'land_8_18', 0, 0, 0),
(156, 'nLFEt3?/bgMm@ag', 176, 'Self', '2023-10-25', 'land_5_29', 1, 0, 0),
(157, 'nLFEt3?/bgMm@ag', 231, 'Self', '2023-10-18', 'land_4_7', 1, 0, 0),
(158, 'Mobile', 9, 'Self', '2023-10-13', 'land_6_18', 1, 0, 0),
(159, 'MRH', 1760375010, 'Self', '2023-10-23', 'land_9_22', 1, 0, 0),
(160, 'nLFEt3?/bgMm@ag', 1234, 'Self', '2023-10-22', 'land_6_29', 1, 0, 0),
(161, 'nLFEt3?/bgMm@ag', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(162, 'nLFEt3?/bgMm@ag', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(163, 'nLFEt3?/bgMm@ag', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(164, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_3_20', 1, 0, 0),
(165, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_3_21', 1, 0, 0),
(166, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_6_18', 1, 0, 0),
(167, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_3_20', 1, 0, 0),
(168, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_3_21', 1, 0, 0),
(169, 'nLFEt3?/bgMm@ag', 1760375010, 'Self', '2023-11-05', 'land_6_18', 1, 0, 0),
(170, 'Eidj', 789, 'Self', '2023-10-13', 'land_21_27', 1, 0, 0),
(171, 'nLFEt3?/bgMm@ag', 1760, 'Self', '2023-10-23', 'land_0_11', 1, 0, 0),
(172, 'nLFEt3?/bgMm@ag', 1760, 'Self', '2023-10-23', 'land_0_12', 1, 0, 0),
(173, 'abid', 222, 'Self', '2023-05-21', 'land_10_12', 1, 0, 0),
(174, 'abid', 222, 'Self', '2023-05-21', 'land_10_13', 1, 0, 0),
(175, 'pendingtest', 888, 'Self', '2023-11-21', 'land_2_25', 1, 0, 1),
(177, 'Rejected', 555, 'Self', '2023-11-27', 'land_21_29', 0, 1, 0),
(178, 'pend', 456, 'Self', '2023-11-14', 'land_9_27', 1, 0, 0),
(179, 'ok', 852, 'Self', '2023-11-12', 'land_14_25', 0, 0, 0),
(180, 'new pending', 963, 'Self', '2023-11-27', 'land_15_1', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grave_yard`
--
ALTER TABLE `grave_yard`
  ADD PRIMARY KEY (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grave_yard`
--
ALTER TABLE `grave_yard`
  MODIFY `C_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
