-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2026 at 12:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scis`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_table`
--

CREATE TABLE `class_table` (
  `class_id` varchar(10) NOT NULL,
  `major_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_table`
--

INSERT INTO `class_table` (`class_id`, `major_id`) VALUES
('X DKV 1', 'DKV'),
('X DKV 2', 'DKV'),
('X RPL 1', 'RPL'),
('X RPL 2', 'RPL'),
('X TKJ 1', 'TKJ'),
('X TKJ 2', 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `major_table`
--

CREATE TABLE `major_table` (
  `major_id` varchar(10) NOT NULL,
  `major_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `major_table`
--

INSERT INTO `major_table` (`major_id`, `major_name`) VALUES
('DKV', 'Desain Komunikasi Visual'),
('RPL', 'Rekayasa Perangkat Lunak'),
('TKJ', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `students_table`
--

CREATE TABLE `students_table` (
  `nis` varchar(10) NOT NULL,
  `full_name` text DEFAULT NULL,
  `att_number` int(11) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `acc_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_table`
--

INSERT INTO `students_table` (`nis`, `full_name`, `att_number`, `class`, `acc_password`) VALUES
('530', 'Hugh Treeson III', 1, 'X RPL 1', '12345678'),
('531', 'Gout Dat Drip', 2, 'X RPL 1', '12345678'),
('532', 'Zorro Almond', 3, 'X RPL 1', '12345678'),
('533', 'Troy Fuller', 4, 'X RPL 1', '12345678'),
('534', 'Monty Python', 5, 'X RPL 1', '12345678'),
('535', 'Barry Pacifica', 6, 'X RPL 1', '12345678'),
('536', 'Mick Wilson', 7, 'X RPL 1', '12345678'),
('537', 'Ray Wilson', 8, 'X RPL 1', '12345678'),
('538', 'Vinie Wilson', 9, 'X RPL 1', '12345678'),
('539', 'Breemoi Wilson', 10, 'X RPL 1', '12345678'),
('540', 'Jack Wilson', 11, 'X RPL 1', '12345678'),
('541', 'Quaker Wilson', 12, 'X RPL 1', '12345678'),
('542', 'Tony Pluey', 13, 'X RPL 1', '12345678'),
('543', 'John Doe', 14, 'X RPL 1', '12345678'),
('544', 'Rodger Alebrek', 15, 'X DKV 1', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_table`
--
ALTER TABLE `class_table`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `fk_class_major` (`major_id`);

--
-- Indexes for table `major_table`
--
ALTER TABLE `major_table`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `students_table`
--
ALTER TABLE `students_table`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `fk_student_class` (`class`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_table`
--
ALTER TABLE `class_table`
  ADD CONSTRAINT `fk_class_major` FOREIGN KEY (`major_id`) REFERENCES `major_table` (`major_id`);

--
-- Constraints for table `students_table`
--
ALTER TABLE `students_table`
  ADD CONSTRAINT `fk_student_class` FOREIGN KEY (`class`) REFERENCES `class_table` (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
