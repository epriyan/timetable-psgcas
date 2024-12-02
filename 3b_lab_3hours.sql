-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2024 at 01:29 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `3b_lab_3hours`
--

DROP TABLE IF EXISTS `3b_lab_3hours`;
CREATE TABLE IF NOT EXISTS `3b_lab_3hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_lab_3hours`
--

INSERT INTO `3b_lab_3hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T5', 'Dr. C Thirumoorthi', 'MAD Lab', 3, '3B', '3BMADLab');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
