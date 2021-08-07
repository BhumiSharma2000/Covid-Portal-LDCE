-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 08:25 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `no.` int(10) NOT NULL,
  `Project_name` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` bigint(50) NOT NULL,
  `Abstract` varchar(500) NOT NULL,
  `Video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`no.`, `Project_name`, `name`, `email`, `contact`, `Abstract`, `Video`) VALUES
(1, 'Health City', 'Bhumi Sharma', 'sharmabhumi2000@gmail.com', 9898660970, 'uploads/HealthCity.pdf', 'uploads/HealthCity.mp4'),
(2, 'Food Drive', 'Arpan Prajapati', 'arpanprajapati15@gmail.com', 9427421806, 'uploads/Fooddrive.pdf', 'uploads/Fooddrive.mp4'),
(3, 'CovidStats', 'Smit Rami', 'smitrami7890@gmail.com', 9106919293, 'uploads/covidabstract(1).pdf', 'uploads/finalcovid.mp4'),
(4, 'EduLane', 'Vaibhavi Ghelani', '', 0, 'uploads/EduLane_Report.pdf', 'uploads/WhatsApp Video 2020-04-25 at 11.38.07.mp4'),
(5, 'Fake News Detection', 'Neil Saxena', '', 0, 'uploads/Fake News Detection.pdf', 'uploads/WhatsApp Video 2020-04-25 at 11.44.52.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `no.` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
