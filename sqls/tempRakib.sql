-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 04:48 PM
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
  `Message` varchar(255) DEFAULT NULL,
  `eventId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donators`
--

INSERT INTO `donators` (`SL`, `Email`, `Name`, `Region`, `Amount`, `Message`, `eventId`) VALUES
(1, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 56, NULL, NULL),
(2, 'mrhrakib002@gmail.com', 'Rakibul Hasan 2', 'DC', 6486, NULL, NULL),
(3, 'mrhrakib003@gmail.com', 'Rakibul Hasan3', 'DC', 21000, NULL, NULL),
(4, 'primarykey@gmail.com', 'Rakibul Hasan4', 'DC', 56, NULL, NULL),
(5, 'mrhrakib001@gmail.com4', 'Rakibul Hasan', 'DC', 6486, NULL, NULL),
(6, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'Bangladesh', 424500, NULL, NULL),
(7, '[value-2]', '[value-3]', '[value-4]', 546, '[value-6]', NULL),
(8, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(9, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(10, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10, '', NULL),
(11, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(12, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(13, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'lgfd', NULL),
(14, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Working', NULL),
(15, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'working2\r\n565', NULL),
(16, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'hiii', NULL),
(17, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(18, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10, 'Allahu Akbar', NULL),
(19, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(20, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '123', NULL),
(21, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '345', NULL),
(22, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '945', NULL),
(23, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(24, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(25, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(26, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(27, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(28, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(29, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(30, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(31, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(32, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(33, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(34, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(35, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(36, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(37, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(38, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(39, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(40, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(41, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(42, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(43, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(44, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(45, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(46, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(47, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'desc', NULL),
(48, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'Keep up the good work! BarakAllah Feek', NULL),
(49, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, '', NULL),
(50, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'adsa', NULL),
(51, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(52, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(53, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(54, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(55, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(56, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(57, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(58, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(59, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(60, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(61, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(62, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(63, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(64, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(65, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'Keep up', NULL),
(66, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(67, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(68, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(69, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 106500, 'Hope it helps', NULL),
(70, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(71, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'sad', NULL),
(72, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'gg', NULL),
(73, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'asd', NULL),
(74, 'mrhrakib001@gmail.com', 'mrh', 'Bangladesh', 1000, 'Keep up the good work!', NULL),
(75, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'One time', NULL),
(76, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(77, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(78, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(79, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'OK', NULL),
(80, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(81, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 7, '', NULL),
(82, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 16562, '', NULL),
(83, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(84, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(85, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(86, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(87, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(88, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(89, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 655450, '', NULL),
(90, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(91, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'From mobile ', NULL),
(92, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(93, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'Bangladesh', 100000, 'Keep up the good work! BarakAllah Feek', NULL),
(94, 'mike@yahoo.com', 'Mike Tyson', 'UK', 1000, 'SALAM', NULL),
(95, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'From mobile ', NULL),
(96, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 24069, '', NULL),
(97, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 62, '', NULL),
(98, 'abidhossain1717@gmail.com', 'ABID', 'Bangladesh', 500, '', NULL),
(99, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(100, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(101, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(102, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(103, 'mrhrakib001@gmail.com', 'Rakibul Hasan102', 'DC', 1000, '', NULL),
(104, 'mrhrakib001@gmail.com', 'Rakibul Hasan102', 'DC', 1000, '', NULL),
(105, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(106, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(107, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(108, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(109, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(110, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(111, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(112, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(113, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(114, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(115, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(116, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(117, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(118, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(119, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(120, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(121, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(122, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(123, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(124, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(125, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(126, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(127, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(128, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(129, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(130, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(131, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(132, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(133, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(134, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(135, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(136, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(137, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(138, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(139, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(140, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(141, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 65545, '', NULL),
(142, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(143, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(144, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(145, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(146, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(147, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(148, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(149, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(150, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(151, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(152, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(153, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(154, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(155, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(156, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(157, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(158, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(159, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(160, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(161, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(162, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(163, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(164, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(165, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(166, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(167, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(168, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(169, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '44664', NULL),
(170, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(171, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(172, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(173, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(174, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(175, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(176, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(177, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(178, 'hossainalif595@gmail.com', 'ALIF HOSSAIN TALHA', 'BD', 5000, 'carry on', NULL),
(9, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(13, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'lgfd', NULL),
(14, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Working', NULL),
(15, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'working2\r\n565', NULL),
(16, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'hiii', NULL),
(17, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(18, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10, 'Allahu Akbar', NULL),
(19, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(20, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '123', NULL),
(21, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '345', NULL),
(22, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '945', NULL),
(23, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(24, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(25, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(26, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(27, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(28, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(29, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(30, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(31, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(32, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(33, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(34, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(35, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(36, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(37, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(38, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(39, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(40, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(41, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(42, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(43, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(44, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(45, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(46, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(47, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'desc', NULL),
(48, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'Keep up the good work! BarakAllah Feek', NULL),
(49, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, '', NULL),
(50, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'adsa', NULL),
(51, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(52, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(53, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(54, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(55, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(56, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(57, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(58, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(59, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(60, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(61, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(62, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(63, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(64, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(65, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'Keep up', NULL),
(66, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(67, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(68, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(69, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 106500, 'Hope it helps', NULL),
(70, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(71, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'sad', NULL),
(72, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'gg', NULL),
(73, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'asd', NULL),
(74, 'mrhrakib001@gmail.com', 'mrh', 'Bangladesh', 1000, 'Keep up the good work!', NULL),
(75, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'One time', NULL),
(76, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(77, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(78, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(79, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'OK', NULL),
(80, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(81, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 7, '', NULL),
(82, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 16562, '', NULL),
(83, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(84, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(85, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(86, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(87, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(88, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(89, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 655450, '', NULL),
(90, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(91, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'From mobile ', NULL),
(9, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(13, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'lgfd', NULL),
(14, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Working', NULL),
(15, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'working2\r\n565', NULL),
(16, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'hiii', NULL),
(17, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(18, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10, 'Allahu Akbar', NULL),
(19, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'Alhamdulillah', NULL),
(20, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '123', NULL),
(21, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '345', NULL),
(22, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '945', NULL),
(23, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(24, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(25, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(26, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(27, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(28, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(29, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(30, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(31, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(32, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(33, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(34, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(35, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(36, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(37, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(38, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(39, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(40, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(41, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(42, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(43, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(44, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(45, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(46, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(47, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, 'desc', NULL),
(48, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'Keep up the good work! BarakAllah Feek', NULL),
(49, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, '', NULL),
(50, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'adsa', NULL),
(51, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(52, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(53, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', NULL),
(54, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(55, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(56, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(57, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(58, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(59, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(60, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(61, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(62, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(63, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(64, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(65, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'Keep up', NULL),
(66, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(67, 'Ashik53@mega.zik.dj', 'Asim ', 'Bangladesh', 1000, 'God Bless', NULL),
(68, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(69, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 106500, 'Hope it helps', NULL),
(70, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(71, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'sad', NULL),
(72, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 10000, 'gg', NULL),
(73, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'asd', NULL),
(74, 'mrhrakib001@gmail.com', 'mrh', 'Bangladesh', 1000, 'Keep up the good work!', NULL),
(75, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'One time', NULL),
(76, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 50, '', NULL),
(77, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(78, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(79, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'OK', NULL),
(80, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(81, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 7, '', NULL),
(82, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 16562, '', NULL),
(83, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(84, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(85, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(86, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(87, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(88, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(89, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 655450, '', NULL),
(90, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(91, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'From mobile ', NULL),
(179, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(180, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(181, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(182, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(183, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', NULL),
(184, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', NULL),
(185, 'sani@gmail.com', 'Sani', 'BD', 9999, 'Gift from sani', NULL),
(186, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 3, 'balance', NULL),
(187, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(188, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(189, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 22, '', 1),
(190, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'Bangladesh', 999999, '#freePalestine', 1),
(191, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(192, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', 2),
(193, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(194, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '#StandWithPalestine', 1),
(195, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(196, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 1),
(197, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 0),
(198, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', 0),
(199, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, '', 0),
(200, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 100, '', 0),
(201, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 1000, 'Develop', 0),
(202, 'mrhrakib001@gmail.com', 'Rakibul Hasan', 'DC', 500, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventId` int(4) NOT NULL,
  `eventName` varchar(70) DEFAULT NULL,
  `status` tinyint(2) NOT NULL,
  `goal` int(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `eventName`, `status`, `goal`, `description`) VALUES
(0, 'Development', 0, 999999999, NULL),
(1, 'Palestine', 1, 5030000, 'Today, we unite in a collective effort to stand with the people of Palestine as they face unprecedented challenges. Your support can make a significant impact, providing essential aid, medical assistance, and hope to those affected by conflict.'),
(2, 'Second Event', 0, 20000, 'A');

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
(153, 'Kareem', 1405326501, 'Self', '2023-10-16', 'land_0_2', 0, 1, 0),
(154, 'Kareem', 1405326501, 'Self', '2023-10-16', 'land_0_3', 1, 0, 1),
(155, 'Roz', 123, 'Self', '2023-10-10', 'land_8_18', 0, 0, 0),
(156, 'Kareem', 176, 'Self', '2023-10-25', 'land_5_29', 1, 0, 0),
(157, 'Kareem', 231, 'Self', '2023-10-18', 'land_4_7', 1, 0, 0),
(159, 'MRH', 1760375010, 'Self', '2023-10-23', 'land_9_22', 1, 0, 0),
(160, 'Kareem', 1234, 'Self', '2023-10-22', 'land_6_29', 1, 0, 0),
(161, 'Kareem', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(162, 'Kareem', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(163, 'Kareem', 2343, 'Self', '2023-10-17', 'land_7_23', 1, 0, 0),
(164, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_3_20', 1, 0, 0),
(165, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_3_21', 1, 0, 0),
(166, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_6_18', 1, 0, 0),
(167, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_3_20', 1, 0, 0),
(168, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_3_21', 1, 0, 0),
(169, 'Kareem', 1760375010, 'Self', '2023-11-05', 'land_6_18', 1, 0, 0),
(170, 'Eidj', 789, 'Self', '2023-10-13', 'land_21_27', 1, 0, 0),
(171, 'Kareem', 1760, 'Self', '2023-10-23', 'land_0_11', 1, 0, 0),
(173, 'abid', 222, 'Self', '2023-05-21', 'land_10_12', 1, 0, 0),
(174, 'abid', 222, 'Self', '2023-05-21', 'land_10_13', 1, 0, 0),
(175, 'pendingtest', 888, 'Self', '2023-11-21', 'land_2_25', 1, 0, 0),
(177, 'Rejected', 555, 'Self', '2023-11-27', 'land_21_29', 0, 1, 0),
(178, 'pend', 456, 'Self', '2023-11-14', 'land_9_27', 1, 0, 0),
(179, 'ok', 852, 'Self', '2023-11-12', 'land_14_25', 0, 0, 0),
(180, 'new pending', 963, 'Self', '2023-11-27', 'land_15_1', 0, 1, 0),
(181, 'admincheck', 1111, 'Self', '2023-11-20', 'land_0_17', 1, 0, 0),
(182, '546', 546, 'Self', '2023-11-21', 'land_2_29', 1, 0, 1),
(183, '546', 546, 'Self', '2023-11-21', 'land_2_29', 1, 0, 0),
(184, 'pendingtest', 888, 'Self', '2023-11-14', 'land_7_26', 1, 0, 1),
(185, 'ytdh', 4445, 'Self', '2023-11-14', 'land_7_11', 1, 0, 0),
(186, 'ytdh', 4445, 'Self', '2023-11-14', 'land_7_14', 1, 0, 0),
(187, 'Hasan', 1760375090, 'Self', '2023-11-28', 'land_0_7', 1, 0, 1),
(188, 'Talha', 1855252515, 'Self', '2023-11-13', 'land_0_14', 1, 0, 0),
(189, 'talha', 1711111111, 'Self', '2023-11-18', 'land_1_0', 1, 0, 0),
(192, 'Rakibul Hasan', 1405326522, 'Self', '2023-11-06', 'land_14_22', 1, 0, 1),
(193, 'Rakibul Hasan', 1405326511, 'Self', '2023-11-08', 'land_0_20', 1, 0, 0),
(194, 'Sani', 1821501083, 'Self', '2023-11-12', 'land_3_14', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donators`
--
ALTER TABLE `donators`
  ADD KEY `SL` (`SL`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventId`);

--
-- Indexes for table `grave_yard`
--
ALTER TABLE `grave_yard`
  ADD PRIMARY KEY (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donators`
--
ALTER TABLE `donators`
  MODIFY `SL` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grave_yard`
--
ALTER TABLE `grave_yard`
  MODIFY `C_ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
