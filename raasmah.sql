-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 10:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raasmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AEmail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `ProfilePic` varchar(50) NOT NULL DEFAULT 'ProfilePicDef',
  `ArtEmail` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `AEmail` varchar(30) NOT NULL,
  `Approved` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `picture` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `ID` int(11) NOT NULL,
  `LikeNum` int(11) NOT NULL,
  `DislikeNum` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ArtEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `content` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `ID` int(11) NOT NULL,
  `VEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='author will be taken from visitor name';

-- --------------------------------------------------------

--
-- Table structure for table `favoritelist`
--

CREATE TABLE `favoritelist` (
  `VEmail` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ProfilePic` varchar(50) NOT NULL DEFAULT 'ProfilePicDef',
  `VEmail` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AEmail`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`ArtEmail`),
  ADD KEY `Artist_1` (`AEmail`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Artwork_1` (`ArtEmail`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`,`VEmail`),
  ADD KEY `comment_2` (`VEmail`);

--
-- Indexes for table `favoritelist`
--
ALTER TABLE `favoritelist`
  ADD PRIMARY KEY (`VEmail`,`ID`),
  ADD KEY `Favorite_1` (`ID`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`VEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `Artist_1` FOREIGN KEY (`AEmail`) REFERENCES `admin` (`AEmail`);

--
-- Constraints for table `artwork`
--
ALTER TABLE `artwork`
  ADD CONSTRAINT `Artwork_1` FOREIGN KEY (`ArtEmail`) REFERENCES `artists` (`ArtEmail`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_1` FOREIGN KEY (`ID`) REFERENCES `artwork` (`ID`),
  ADD CONSTRAINT `comment_2` FOREIGN KEY (`VEmail`) REFERENCES `visitor` (`VEmail`);

--
-- Constraints for table `favoritelist`
--
ALTER TABLE `favoritelist`
  ADD CONSTRAINT `Favorite_1` FOREIGN KEY (`ID`) REFERENCES `artwork` (`ID`),
  ADD CONSTRAINT `Favorite_2` FOREIGN KEY (`VEmail`) REFERENCES `visitor` (`VEmail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
