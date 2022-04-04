-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2022 at 01:08 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntigskov_go2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anvandare`
--

CREATE TABLE `anvandare` (
  `AID` int(11) NOT NULL,
  `Namn` varchar(30) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anvandare`
--

INSERT INTO `anvandare` (`AID`, `Namn`) VALUES
(1, 'Stefan'),
(2, 'Jessica'),
(3, 'GW'),
(4, 'Terese'),
(5, 'Anton'),
(6, 'Sten');

-- --------------------------------------------------------

--
-- Table structure for table `kategorier`
--

CREATE TABLE `kategorier` (
  `KID` int(11) NOT NULL,
  `Kategorier` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategorier`
--

INSERT INTO `kategorier` (`KID`, `Kategorier`) VALUES
(1, 'Spelbarhet'),
(2, 'Roligt'),
(3, 'Matte/Fysik'),
(4, 'Design'),
(5, 'Programmering'),
(6, 'Tema');

-- --------------------------------------------------------

--
-- Table structure for table `resultat`
--

CREATE TABLE `resultat` (
  `AID` int(11) NOT NULL,
  `KID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `Poang` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resultat`
--

INSERT INTO `resultat` (`AID`, `KID`, `SID`, `Poang`, `ID`) VALUES
(6, 2, 3, 0, 1),
(6, 2, 4, 0, 2),
(6, 2, 5, 0, 3),
(6, 2, 6, 0, 4),
(6, 2, 7, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `spel`
--

CREATE TABLE `spel` (
  `SID` int(11) NOT NULL,
  `Spel` varchar(30) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spel`
--

INSERT INTO `spel` (`SID`, `Spel`) VALUES
(3, 'Goat Simulator'),
(4, 'Among us'),
(5, 'I am bread'),
(6, 'Starstable'),
(7, 'Moviestar planet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anvandare`
--
ALTER TABLE `anvandare`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `kategorier`
--
ALTER TABLE `kategorier`
  ADD PRIMARY KEY (`KID`);

--
-- Indexes for table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `spel`
--
ALTER TABLE `spel`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anvandare`
--
ALTER TABLE `anvandare`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategorier`
--
ALTER TABLE `kategorier`
  MODIFY `KID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spel`
--
ALTER TABLE `spel`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
