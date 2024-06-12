-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 08:04 PM
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
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `guardianname` varchar(255) NOT NULL,
  `relationwithguardian` varchar(255) NOT NULL,
  `guardiannidno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `praddress` varchar(255) NOT NULL,
  `peaddress` varchar(255) NOT NULL,
  `student_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `name`, `fathername`, `mothername`, `gender`, `guardianname`, `relationwithguardian`, `guardiannidno`, `email`, `phone`, `praddress`, `peaddress`, `student_picture`) VALUES
(14, 'Safwan', 'X', 'Y', 'male', 'Z', 'Uncle', '1234567', 'strawcherry@frogreat.com', '01826719772', 'z', 'y', 'C:\\xampp\\htdocs\\darussalam\\uploads\\MicrosoftTeams-image (11).png'),
(36, 'Nayeem', 'X', 'Y', 'male', 'X', 'Father', '1234567', 'ahmed@gmail.com', '1826719764', 'z', 'y', 'C:\\xampp\\htdocs\\darussalam\\uploads\\registration.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
