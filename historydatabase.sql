-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 09:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `historydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientId` int(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `dateOfBirth` varchar(45) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `nextOfKin` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientId`, `firstName`, `lastName`, `dateOfBirth`, `phoneNumber`, `nextOfKin`, `password`) VALUES
(4126, 'rael', 'kilonzo', '1989-12-09', 722124670, 'none', '$2y$10$HMo2nbFUwq9P0abiYrTY/OgWACGTWK0B70/8Qn'),
(4127, 'jenny', 'Kahamba', '1998-12-01', 722124670, 'Maggie Kahamba', '$2y$10$LYrN6o2NKldN/TvDPgTOheHZZfc6QW36cCTk4u'),
(4128, 'lyn', 'Anastasia', '1989-12-09', 700896458, 'Mom', '$2y$10$AgjANBm7Wa.B.g9EIcaNEesXeGNXtAIcEbw1Ij'),
(4129, 'antony', 'Kimani', '1998-12-01', 707080998, 'Allan, Benjamin', '$2y$10$E0sJz3X.eaGcTLm2H8U6Eu6fhFt5C.oF1UoOpG'),
(4131, 'ijfvf', 'wjedj', '1998-12-01', 700896458, 'dfuj', '$2y$10$2WhHcMOunqdQ4/z0ogzYbOGscaus1NekoUFZoN'),
(4132, 'hhgbvv', 'efc', '1989-12-09', 707080998, 'wdjc', '$2y$10$oJNbCDqmbTsgmFa7rcJ.DOMRQ.om80ajMcNQV0'),
(4133, 'tgfdgved', 'efc', '1989-12-09', 707080998, 'wdjc', '$2y$10$LCClte.XFW8qQ4sSBIah6.Zb8uoWOPtzAhVcAf');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `patientId` int(60) NOT NULL,
  `current_appointment` date NOT NULL,
  `illness` longtext NOT NULL,
  `treatment` longtext NOT NULL,
  `futureAppointment` date NOT NULL,
  `recordId` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`patientId`, `current_appointment`, `illness`, `treatment`, `futureAppointment`, `recordId`) VALUES
(4126, '2017-11-09', 'Malaria', 'rfgbgijuhjgfjkrfogiugh', '2017-11-14', 1),
(4126, '2017-11-09', 'Malaria', 'rfgbgijuhjgfjkrfogiugh', '2017-11-14', 2),
(4128, '2017-11-12', 'those', 'they', '2017-11-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_type` enum('Administrator','Doctor','Nurse','SuperAdministrator') NOT NULL,
  `userId` int(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `phoneNumber` varchar(45) NOT NULL,
  `access_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `password` varchar(60) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_type`, `userId`, `userName`, `phoneNumber`, `access_time`, `password`, `image`) VALUES
('Administrator', 1, 'jenny', '0722124670', '2017-11-08 13:46:02.655264', '$2y$10$m5rlxOUYH.iEWqUTa37ZyuRX/RZQMSQB0LCqaTeu1qR83eoIyDw3e', ''),
('Administrator', 2, 'jenny', '0722124670', '2017-11-08 13:47:01.001899', '$2y$10$o3lE5PS06EKMXCo4Rj0oYeQhCnA8GcGd9pBzhjqqRSq53JEkKBVn2', ''),
('Administrator', 4, 'lyna', '0722124670', '2017-11-08 13:44:31.659736', '$2y$10$MfSti0RoJQE2.651VSOTy.UMzCINrm1S26tLHCHN2oyYNkSZBXtXu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientId`),
  ADD UNIQUE KEY `PatientIdt_UNIQUE` (`patientId`),
  ADD KEY `patientId` (`patientId`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordId`),
  ADD KEY `patientId` (`patientId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientId` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4134;
--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordId` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
