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
-- Database: `rezervacije`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `ID` int(11) NOT NULL,
  `POLAZAK` text COLLATE utf8_croatian_ci NOT NULL,
  `DOLAZAK` text COLLATE utf8_croatian_ci NOT NULL,
  `CIJENA` int(11) NOT NULL,
  `OSOBA` int(11) NOT NULL,
  `IME` text COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`ID`, `POLAZAK`, `DOLAZAK`, `CIJENA`, `OSOBA`, `IME`) VALUES
(8, 'Dubrovnik', 'Korcula', 540, 3, 'Ivan'),
(9, 'Zadar', 'Split', 450, 8, 'Marin'),
(10, 'Å ibenik', 'Split', 450, 3, 'Ante'),
(11, 'Split', 'Split', 450, 0, ''),
(12, 'Split', 'Split', 450, 0, ''),
(13, 'Split', 'Split', 450, 0, ''),
(14, '', '', 0, 0, ''),
(15, '', '', 0, 0, ''),
(16, '', '', 0, 0, ''),
(17, '', '', 0, 0, ''),
(18, '', '', 0, 0, ''),
(19, '', '', 0, 0, ''),
(20, '', '', 0, 0, ''),
(21, '', '', 0, 0, ''),
(22, '', '', 0, 0, ''),
(23, '', '', 0, 0, ''),
(24, '', '', 0, 0, ''),
(25, '', '', 0, 0, ''),
(26, '', '', 0, 0, ''),
(27, '', '', 0, 0, ''),
(28, '', '', 0, 0, ''),
(29, '', '', 0, 0, ''),
(30, '', '', 0, 0, ''),
(31, '', '', 0, 0, ''),
(32, '', '', 0, 0, ''),
(33, '', '', 0, 0, ''),
(34, 'Split', 'Split', 450, 0, ''),
(35, 'Split', 'Split', 450, 0, ''),
(36, 'Split', 'Split', 450, 1, 'Stjepan'),
(37, 'Split', 'Split', 450, 3, 'Jovan'),
(38, 'Split', 'Split', 450, 0, ''),
(39, 'Split', 'Split', 450, 0, ''),
(40, 'Split', 'Split', 450, 2, 'Jole'),
(41, 'Split', 'Split', 450, 6, 'khlkj'),
(42, 'Split', 'Split', 450, 0, ''),
(43, 'Split', 'Split', 450, 2, 'lkn'),
(44, 'Split', 'Split', 450, 7, 'Marijan'),
(45, 'Split', 'Split', 450, 7, 'Ivan'),
(46, 'Split', 'Split', 450, 7, 'Ivan'),
(47, 'Split', 'Split', 450, 7, 'Ivan'),
(48, 'Split', 'Split', 450, 7, 'Ivan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
