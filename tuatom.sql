-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 03:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuatom`
--

-- --------------------------------------------------------

--
-- Table structure for table `Mode`
--

CREATE TABLE `Mode` (
  `ModeID` int(11) NOT NULL,
  `mode` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Mode`
--

INSERT INTO `Mode` (`ModeID`, `mode`) VALUES
(1, 'Normal Mode'),
(2, 'Battle Mode'),
(3, 'Rank Mode');

-- --------------------------------------------------------

--
-- Table structure for table `Player`
--

CREATE TABLE `Player` (
  `PlayerID` int(11) NOT NULL,
  `Username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CreditCard` int(50) NOT NULL,
  `Coins` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Player`
--

INSERT INTO `Player` (`PlayerID`, `Username`, `Password`, `Email`, `CreditCard`, `Coins`) VALUES
(1, 'GG', '1234', 'gg@gg', 12345678, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `QuestionID` int(20) NOT NULL,
  `Question` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TopicID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`QuestionID`, `Question`, `Answer`, `TopicID`) VALUES
(1, 'Which animal can fly', 'bird', 1),
(2, 'Which animal can stay in very low temperature?', 'penguin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Score`
--

CREATE TABLE `Score` (
  `ScoreID` int(11) NOT NULL,
  `PlayerID` int(11) NOT NULL,
  `ModeID` int(11) NOT NULL,
  `Score` int(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Score`
--

INSERT INTO `Score` (`ScoreID`, `PlayerID`, `ModeID`, `Score`, `Date`) VALUES
(1, 1, 3, 30, '2017-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `Topic`
--

CREATE TABLE `Topic` (
  `TopicID` int(11) NOT NULL,
  `TopicName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ch1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch5` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch6` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch7` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch8` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch9` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Ch10` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Topic`
--

INSERT INTO `Topic` (`TopicID`, `TopicName`, `Ch1`, `Ch2`, `Ch3`, `Ch4`, `Ch5`, `Ch6`, `Ch7`, `Ch8`, `Ch9`, `Ch10`) VALUES
(1, 'animal', 'cat', 'dog', 'rabbit', 'tiger', 'lion', 'snake', 'fish', 'bird', 'chicken', 'penguin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Mode`
--
ALTER TABLE `Mode`
  ADD PRIMARY KEY (`ModeID`),
  ADD KEY `ModeID` (`ModeID`);

--
-- Indexes for table `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`PlayerID`),
  ADD KEY `PlayerID` (`PlayerID`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`QuestionID`),
  ADD KEY `QuestionID` (`QuestionID`);

--
-- Indexes for table `Score`
--
ALTER TABLE `Score`
  ADD PRIMARY KEY (`ScoreID`),
  ADD KEY `ScoreID` (`ScoreID`);

--
-- Indexes for table `Topic`
--
ALTER TABLE `Topic`
  ADD PRIMARY KEY (`TopicID`),
  ADD KEY `TopicID` (`TopicID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Mode`
--
ALTER TABLE `Mode`
  MODIFY `ModeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Player`
--
ALTER TABLE `Player`
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `QuestionID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Score`
--
ALTER TABLE `Score`
  MODIFY `ScoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Topic`
--
ALTER TABLE `Topic`
  MODIFY `TopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
