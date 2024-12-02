-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2024 at 01:16 PM
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
-- Table structure for table `1a_lab_3hours`
--

DROP TABLE IF EXISTS `1a_lab_3hours`;
CREATE TABLE IF NOT EXISTS `1a_lab_3hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1a_lab_3hours`
--

INSERT INTO `1a_lab_3hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T10', 'Dr. N Arun Prasath', 'C Lab', 3, '1A', '1ACLab'),
('T12', 'Dr. S Rekha', 'Excel Lab', 3, '1A', '1AExcelLab');

-- --------------------------------------------------------

--
-- Table structure for table `1a_language_6hours`
--

DROP TABLE IF EXISTS `1a_language_6hours`;
CREATE TABLE IF NOT EXISTS `1a_language_6hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1a_language_6hours`
--

INSERT INTO `1a_language_6hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TF', 'French Staff', 'French', 6, '1A', '1AFrench'),
('TE', 'English Staff', 'English', 6, '1A', '1AEnglish');

-- --------------------------------------------------------

--
-- Table structure for table `1a_theory_4hours`
--

DROP TABLE IF EXISTS `1a_theory_4hours`;
CREATE TABLE IF NOT EXISTS `1a_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(10) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1a_theory_4hours`
--

INSERT INTO `1a_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T11', 'Dr. C V Banupriya', 'FDC', 4, '1A', '1AFDC'),
('T10', 'Dr. N Arun Prasath', 'C', 4, '1A', '1AC'),
('TM', 'Maths Staff', 'Maths', 4, '1A', '1AMaths');

-- --------------------------------------------------------

--
-- Table structure for table `1b_lab_3hours`
--

DROP TABLE IF EXISTS `1b_lab_3hours`;
CREATE TABLE IF NOT EXISTS `1b_lab_3hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1b_lab_3hours`
--

INSERT INTO `1b_lab_3hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T10', 'Dr. N Arun Prasath', 'C Lab', 3, '1B', '1BCLab'),
('T8', 'Dr. D Mohanapriya', 'Excel Lab', 3, '1B', '1BExcelLab');

-- --------------------------------------------------------

--
-- Table structure for table `1b_language_6hours`
--

DROP TABLE IF EXISTS `1b_language_6hours`;
CREATE TABLE IF NOT EXISTS `1b_language_6hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1b_language_6hours`
--

INSERT INTO `1b_language_6hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TF', 'French Staff', 'French', 6, '1B', '1BFrench'),
('TE', 'English Staff', 'English', 6, '1B', '1BEnglish');

-- --------------------------------------------------------

--
-- Table structure for table `1b_theory_4hours`
--

DROP TABLE IF EXISTS `1b_theory_4hours`;
CREATE TABLE IF NOT EXISTS `1b_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1b_theory_4hours`
--

INSERT INTO `1b_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T12', 'Dr. S Rekha', 'FDC', 4, '1B', '1BFDC'),
('T10', 'Dr. N Arun Prasath', 'C', 4, '1B', '1BC'),
('TM', 'Maths Staff', 'Maths', 4, '1B', '1BMaths');

-- --------------------------------------------------------

--
-- Table structure for table `2a_evs_2hours`
--

DROP TABLE IF EXISTS `2a_evs_2hours`;
CREATE TABLE IF NOT EXISTS `2a_evs_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2a_evs_2hours`
--

INSERT INTO `2a_evs_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TEVS', 'EVS Staff', 'EVS', 2, '2A', '2AEVS');

-- --------------------------------------------------------

--
-- Table structure for table `2a_lab_2hours`
--

DROP TABLE IF EXISTS `2a_lab_2hours`;
CREATE TABLE IF NOT EXISTS `2a_lab_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2a_lab_2hours`
--

INSERT INTO `2a_lab_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T3', 'Dr. D Saraswathi', 'Java Lab', 2, '2A', '2AJavaLab'),
('T11', 'Dr. C V Banupriya', 'DBMS Lab', 2, '2A', '2ADBMSLab');

-- --------------------------------------------------------

--
-- Table structure for table `2a_language_4hours`
--

DROP TABLE IF EXISTS `2a_language_4hours`;
CREATE TABLE IF NOT EXISTS `2a_language_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2a_language_4hours`
--

INSERT INTO `2a_language_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TF', 'French Staff', 'French', 4, '2A', '2AFrench'),
('TE', 'English Staff', 'English', 4, '2A', '2AEnglish');

-- --------------------------------------------------------

--
-- Table structure for table `2a_theory_4hours`
--

DROP TABLE IF EXISTS `2a_theory_4hours`;
CREATE TABLE IF NOT EXISTS `2a_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2a_theory_4hours`
--

INSERT INTO `2a_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T1', 'Dr. T Revathi', 'OS', 4, '2A', '2AOS'),
('T3', 'Dr. D Saraswathi', 'Java', 4, '2A', '2AJava'),
('T11', 'Dr. C V Banupriya', 'DBMS', 4, '2A', '2ADBMS'),
('TS', 'Stat Staff', 'Stat', 4, '2A', '2AStat');

-- --------------------------------------------------------

--
-- Table structure for table `2b_evs_2hours`
--

DROP TABLE IF EXISTS `2b_evs_2hours`;
CREATE TABLE IF NOT EXISTS `2b_evs_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2b_evs_2hours`
--

INSERT INTO `2b_evs_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TEVS', 'EVS Staff', 'EVS', 2, '2B', '2BEVS');

-- --------------------------------------------------------

--
-- Table structure for table `2b_lab_2hours`
--

DROP TABLE IF EXISTS `2b_lab_2hours`;
CREATE TABLE IF NOT EXISTS `2b_lab_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2b_lab_2hours`
--

INSERT INTO `2b_lab_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T3', 'Dr. D Saraswathi', 'Java Lab', 2, '2B', '2BJavaLab'),
('T9', 'Dr. C Sivamathi', 'DBMS Lab', 2, '2B', '2BDBMSLab');

-- --------------------------------------------------------

--
-- Table structure for table `2b_language_4hours`
--

DROP TABLE IF EXISTS `2b_language_4hours`;
CREATE TABLE IF NOT EXISTS `2b_language_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2b_language_4hours`
--

INSERT INTO `2b_language_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TF', 'French Staff', 'French', 4, '2B', '2BFrench'),
('TE', 'English Staff', 'English', 4, '2B', '2BEnglish');

-- --------------------------------------------------------

--
-- Table structure for table `2b_theory_4hours`
--

DROP TABLE IF EXISTS `2b_theory_4hours`;
CREATE TABLE IF NOT EXISTS `2b_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `2b_theory_4hours`
--

INSERT INTO `2b_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T8', 'Dr. D Mohanapriya', 'OS', 4, '2B', '2BOS'),
('T3', 'Dr. D Saraswathi', 'Java', 4, '2B', '2BJava'),
('T9', 'Dr. C Sivamathi', 'DBMS', 4, '2B', '2BDBMS'),
('TS', 'Stat Staff', 'Stat', 4, '2B', '2BStat');

-- --------------------------------------------------------

--
-- Table structure for table `3a_dse_4hours`
--

DROP TABLE IF EXISTS `3a_dse_4hours`;
CREATE TABLE IF NOT EXISTS `3a_dse_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_dse_4hours`
--

INSERT INTO `3a_dse_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TDSE', 'DSE Staff', 'DSE', 4, '3A', '3ADSE');

-- --------------------------------------------------------

--
-- Table structure for table `3a_lab_2hours`
--

DROP TABLE IF EXISTS `3a_lab_2hours`;
CREATE TABLE IF NOT EXISTS `3a_lab_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_lab_2hours`
--

INSERT INTO `3a_lab_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T4', 'Dr. D Sowmyadevi', 'AD Java Lab', 2, '3A', '3AADJavaLab'),
('T6', 'Dr. C Nagarani', 'Web Lab', 2, '3A', '3AWebLab');

-- --------------------------------------------------------

--
-- Table structure for table `3a_lab_3hours`
--

DROP TABLE IF EXISTS `3a_lab_3hours`;
CREATE TABLE IF NOT EXISTS `3a_lab_3hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_lab_3hours`
--

INSERT INTO `3a_lab_3hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T5', 'Dr. C Thirumoorthi', 'MAD Lab', 3, '3A', '3AMADLab');

-- --------------------------------------------------------

--
-- Table structure for table `3a_tdc_2hours`
--

DROP TABLE IF EXISTS `3a_tdc_2hours`;
CREATE TABLE IF NOT EXISTS `3a_tdc_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_tdc_2hours`
--

INSERT INTO `3a_tdc_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TTDC', 'TDC Staff', 'TDC', 2, '3A', '3ATDC');

-- --------------------------------------------------------

--
-- Table structure for table `3a_theory_4hours`
--

DROP TABLE IF EXISTS `3a_theory_4hours`;
CREATE TABLE IF NOT EXISTS `3a_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_theory_4hours`
--

INSERT INTO `3a_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T5', 'Dr. C Thirumoorthi', 'MAD', 4, '3A', '3AMAD'),
('T4', 'Dr. D Sowmyadevi', 'AD Java', 4, '3A', '3AADJava'),
('T9', 'Dr. C Sivamathi', 'PCD', 4, '3A', '3APCD');

-- --------------------------------------------------------

--
-- Table structure for table `3a_theory_5hours`
--

DROP TABLE IF EXISTS `3a_theory_5hours`;
CREATE TABLE IF NOT EXISTS `3a_theory_5hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3a_theory_5hours`
--

INSERT INTO `3a_theory_5hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T6', 'Dr. C Nagarani', 'Web', 5, '3A', '3AWeb');

-- --------------------------------------------------------

--
-- Table structure for table `3b_dse_4hours`
--

DROP TABLE IF EXISTS `3b_dse_4hours`;
CREATE TABLE IF NOT EXISTS `3b_dse_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_dse_4hours`
--

INSERT INTO `3b_dse_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TDSE', 'DSE Staff', 'DSE', 4, '3B', '3BDSE');

-- --------------------------------------------------------

--
-- Table structure for table `3b_lab_2hours`
--

DROP TABLE IF EXISTS `3b_lab_2hours`;
CREATE TABLE IF NOT EXISTS `3b_lab_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_lab_2hours`
--

INSERT INTO `3b_lab_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T4', 'Dr. D Sowmyadevi', 'AD Java Lab', 2, '3B', '3BADJavaLab'),
('T6', 'Dr. C Nagarani', 'Web Lab', 2, '3B', '3BWebLab');

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

-- --------------------------------------------------------

--
-- Table structure for table `3b_tdc_2hours`
--

DROP TABLE IF EXISTS `3b_tdc_2hours`;
CREATE TABLE IF NOT EXISTS `3b_tdc_2hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_tdc_2hours`
--

INSERT INTO `3b_tdc_2hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('TTDC', 'TDC Staff', 'TDC', 2, '3B', '3BTDC');

-- --------------------------------------------------------

--
-- Table structure for table `3b_theory_4hours`
--

DROP TABLE IF EXISTS `3b_theory_4hours`;
CREATE TABLE IF NOT EXISTS `3b_theory_4hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_theory_4hours`
--

INSERT INTO `3b_theory_4hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T5', 'Dr. C Thirumoorthi', 'MAD', 4, '3B', '3BMAD'),
('T4', 'Dr. D Sowmyadevi', 'AD Java', 4, '3B', '3BADJava'),
('T2', 'Dr. S Selvi', 'PCD', 4, '3B', '3BPCD');

-- --------------------------------------------------------

--
-- Table structure for table `3b_theory_5hours`
--

DROP TABLE IF EXISTS `3b_theory_5hours`;
CREATE TABLE IF NOT EXISTS `3b_theory_5hours` (
  `TID` varchar(10) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Hours` int NOT NULL,
  `Class` varchar(20) NOT NULL,
  `SPID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `3b_theory_5hours`
--

INSERT INTO `3b_theory_5hours` (`TID`, `Teacher_Name`, `Subject`, `Hours`, `Class`, `SPID`) VALUES
('T6', 'Dr. C Nagarani', 'Web', 5, '3B', '3BWeb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
