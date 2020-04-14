-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2020 at 04:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rasmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `AEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `ProfilePic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `LastName`, `AEmail`, `Password`, `ProfilePic`) VALUES
('', '', 'admin@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `ProfilePic` varchar(80) NOT NULL DEFAULT 'ProfilePicDef',
  `ArtEmail` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `AEmail` varchar(30) NOT NULL,
  `Approved` double NOT NULL DEFAULT 0,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`ProfilePic`, `ArtEmail`, `Name`, `LastName`, `Password`, `AEmail`, `Approved`, `Age`) VALUES
('img/profile photo/147141.png', 'akh9180@gmail.com', 'Atheer', 'khaledH', '1234', 'admin@gmail.com', 1, 0),
('ProfilePicDef', 'nada12@gmail.com', 'nada', 'sami', '202cb962ac59075b964b07152d234b', 'admin@gmail.com', 1, 2),
('img/profile photo/profile-icon-png-75.png', 'random56565@gmail.com', 'Lena', 'fahad', '1234', 'admin@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `picture` varchar(80) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `ID` int(11) NOT NULL,
  `LikeNum` int(11) NOT NULL,
  `DislikeNum` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ArtEmail` varchar(30) NOT NULL,
  `comment` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`picture`, `Title`, `Description`, `ID`, `LikeNum`, `DislikeNum`, `Date`, `ArtEmail`, `comment`) VALUES
('img/uploads/Easy4_300x300.jpg', 'owl', 'cute owl', 8, 1, 0, '2020-04-08', 'akh9180@gmail.com', 1),
('img/uploads/max1_300x300.jpg', 'cub cake', 'nice cub cake', 11, 2, 1, '2020-04-08', 'akh9180@gmail.com', 1),
('img/uploads/max2_300x300.jpg', 'umbrella', 'This is one of my favorite drawings, and I won it in the painting competition in my school in first place.                    My mother helped me choose the colors and my father helped me in the idea, so thank them.                  Share your opinion, my friends.', 25, 2, 0, '2020-04-12', 'akh9180@gmail.com', 1),
('img/uploads/max5_1_300x300.jpg', 'ice cream', '', 36, 0, 0, '2020-04-12', 'akh9180@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `content` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL,
  `VEmail` varchar(50) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`content`, `author`, `ID`, `VEmail`, `comment_id`) VALUES
('i like it', 'lamia fahad', 25, 'lolo@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `favoritelist`
--

CREATE TABLE `favoritelist` (
  `VEmail` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favoritelist`
--

INSERT INTO `favoritelist` (`VEmail`, `ID`) VALUES
('lolo@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `ProfilePic` varchar(100) NOT NULL DEFAULT 'ProfilePicDef',
  `VEmail` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`ProfilePic`, `VEmail`, `Name`, `LastName`, `Password`) VALUES
('ProfilePicDef', 'dm@gmail.com', 'hel', 'dam', '81dc9bdb52d04dc20036dbd8313ed0'),
('img/profile photo/72-729869_circled-user-female-skin-type-4-icon-profile.png', 'lolo@gmail.com', 'lamia', 'fahad', '1234');

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
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comment1` (`VEmail`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  ADD CONSTRAINT `comment1` FOREIGN KEY (`VEmail`) REFERENCES `visitor` (`VEmail`);

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
