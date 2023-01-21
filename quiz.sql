-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2023 at 05:58 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `number` int(11) NOT NULL,
  `question` varchar(512) DEFAULT NULL,
  `answer` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`number`, `question`, `answer`) VALUES
(1, 'Can beavers breathe underwater?', 'Yes'),
(2, 'If an forest of Alvarez fir burns down. Is it a good solution to reforest the are with Bur Chervils?', 'No'),
(3, 'If a forest of Alverez fir burns down. Is it proper to reforest with Alverez fir?', 'Yes'),
(4, 'If a forest of Alverez fir burns down. Is it proper to reforest the area with Western Red Cedar?', 'Yes\r\n'),
(5, 'The fish population in a BC lake is under steady decline. Do we stock the lake with spottail shiner?', 'No'),
(6, 'The fish population in a BC lake is under steady decline. Do we stock the lake with bulltrout?', 'Yes'),
(7, 'The fish population in a BC lake is under steady decline. Do we stock the lake with muskellunge?', 'No'),
(8, 'The fish population in a BC lake is under steady decline. Do we stock the lake with dolly varden?', 'Yes'),
(9, 'The fish population in a BC lake is under steady decline. Do we stock the lake with bitterling?', 'No'),
(10, 'The fish population in a BC lake is under steady decline. Do we stock the lake with black crappie?', 'Yes'),
(11, 'Black swift is found. This cute bird hasn\'t been seen for many years! Do you capture it and send to the zoo?', 'No'),
(12, 'Black swift is found. This cute bird hasn\'t been seen for many years! Do you protect it?', 'Yes'),
(13, 'The natural fish population in a BC lake is declining. Do we improve the situation by stocking the link with white sturgeon?', 'Yes'),
(14, 'The natural fish population in a BC lake is declining. Do we improve the situation by stocking the link with black carp?', 'No'),
(15, 'Rabbit population is growing. Cute little rabbits are everywhere! Do you plant dandelions as their food and increase the population more?', 'No'),
(16, 'Rabbit population is growing. Cute little rabbits are everywhere! Do you introduce wolves to control their population?', 'Yes'),
(17, 'The fish population in a BC lake is under steady decline. Do we stock the lake with rock bass?', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `username` varchar(256) NOT NULL,
  `number` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `bool` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`username`, `number`, `date`, `bool`) VALUES
('admin@gmail.com', 1, '2023-01-21', b'1'),
('admin@gmail.com', 2, '2023-01-21', b'1'),
('admin@gmail.com', 3, '2023-01-21', b'1'),
('hello@gmail.com', 3, '2023-01-20', b'1'),
('hello@gmail.com', 4, '2023-01-21', b'1'),
('hello@gmail.com', 6, '2023-01-21', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin@gmail.com', '1234'),
('hello@gmail.com', '1234'),
('new@gmail.com', '1234\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`username`,`number`),
  ADD KEY `number` (`number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`number`) REFERENCES `bank` (`number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
