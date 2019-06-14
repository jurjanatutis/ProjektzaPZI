-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 12:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putovanja`
--

-- --------------------------------------------------------

--
-- Table structure for table `dubrovnik`
--

CREATE TABLE `dubrovnik` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `dubrovnik`
--

INSERT INTO `dubrovnik` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Korcula', 500, '10:00:00'),
(2, 'Split', 600, '07:00:00'),
(3, 'Rijeka', 900, '05:00:00'),
(4, 'Rijeka', 540, '10:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `ploce`
--

CREATE TABLE `ploce` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `ploce`
--

INSERT INTO `ploce` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Split', 450, '09:00:00'),
(2, 'Dubrovnik', 600, '07:00:00'),
(3, 'Korcula', 490, '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rijeka`
--

CREATE TABLE `rijeka` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `rijeka`
--

INSERT INTO `rijeka` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Brac', 700, '10:00:00'),
(2, 'Dubrovnik', 900, '06:00:00'),
(3, 'Korcula', 950, '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sibenik`
--

CREATE TABLE `sibenik` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `sibenik`
--

INSERT INTO `sibenik` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Rijeka', 400, '08:00:00'),
(2, 'Dubrovnik', 390, '06:00:00'),
(3, 'Brac', 500, '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `split`
--

CREATE TABLE `split` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `split`
--

INSERT INTO `split` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Rijeka', 100, '09:00:00'),
(2, 'Komiza', 200, '06:00:00'),
(3, 'Brac', 300, '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `zadar`
--

CREATE TABLE `zadar` (
  `ID` int(11) NOT NULL,
  `GRAD` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `POLAZAK` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `zadar`
--

INSERT INTO `zadar` (`ID`, `GRAD`, `CIJENA`, `POLAZAK`) VALUES
(1, 'Korcula', 100, '10:00:00'),
(2, 'Split', 500, '06:00:00'),
(3, 'Rujeka', 650, '07:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dubrovnik`
--
ALTER TABLE `dubrovnik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ploce`
--
ALTER TABLE `ploce`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rijeka`
--
ALTER TABLE `rijeka`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sibenik`
--
ALTER TABLE `sibenik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `split`
--
ALTER TABLE `split`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zadar`
--
ALTER TABLE `zadar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dubrovnik`
--
ALTER TABLE `dubrovnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ploce`
--
ALTER TABLE `ploce`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rijeka`
--
ALTER TABLE `rijeka`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sibenik`
--
ALTER TABLE `sibenik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `split`
--
ALTER TABLE `split`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zadar`
--
ALTER TABLE `zadar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
