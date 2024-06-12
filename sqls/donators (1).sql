-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 03:06 AM
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
-- Table structure for table `donators`
--

CREATE TABLE `donators` (
  `SL` int(255) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donators`
--

INSERT INTO `donators` (`SL`, `Email`, `Name`, `Region`, `Amount`, `Message`) VALUES
(9, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, ''),
(13, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'lgfd'),
(14, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Working'),
(15, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'working2\r\n565'),
(16, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'hiii'),
(17, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah'),
(18, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10, 'Allahu Akbar'),
(19, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah'),
(20, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '123'),
(21, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '345'),
(22, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '945'),
(23, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, ''),
(24, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(25, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(26, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(27, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(28, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(29, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(30, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(31, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(32, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(33, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(34, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(35, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(36, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(37, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(38, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(39, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(40, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(41, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(42, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(43, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(44, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(45, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(46, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(47, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'desc'),
(48, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'Keep up the good work! BarakAllah Feek'),
(49, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, ''),
(50, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'adsa'),
(51, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, ''),
(52, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, ''),
(53, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, ''),
(54, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(55, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(56, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(57, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(58, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(59, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(60, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(61, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(62, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(63, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(64, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(65, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'Keep up'),
(66, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless'),
(67, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless'),
(68, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, ''),
(69, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 106500, 'Hope it helps'),
(70, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(71, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'sad'),
(72, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'gg'),
(73, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'asd'),
(74, 'mrhrakib001@gmail.com', 'mrh', 'Bangladesh', 1000, 'Keep up the good work!'),
(75, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'One time'),
(76, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, ''),
(77, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(78, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(79, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'OK'),
(80, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(81, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 7, ''),
(82, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 16562, ''),
(83, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(84, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(85, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(86, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(87, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(88, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(89, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 655450, ''),
(90, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, ''),
(91, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'From mobile ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donators`
--
ALTER TABLE `donators`
  ADD KEY `SL` (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donators`
--
ALTER TABLE `donators`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
