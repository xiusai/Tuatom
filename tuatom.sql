-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: May 25, 2017 at 01:18 PM
=======
-- Generation Time: May 20, 2017 at 03:51 PM
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
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
<<<<<<< HEAD
  `Coins` int(50) NOT NULL,
  `expiry_month` int(11) NOT NULL,
  `expiry_year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
=======
  `Coins` int(50) NOT NULL
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Player`
--

<<<<<<< HEAD
INSERT INTO `Player` (`PlayerID`, `Username`, `Password`, `Email`, `CreditCard`, `Coins`, `expiry_month`, `expiry_year`, `cvv`) VALUES
(1, 'GG', '1234', 'gg@gg', 12345678, 2000, 0, 0, 0);
=======
INSERT INTO `Player` (`PlayerID`, `Username`, `Password`, `Email`, `CreditCard`, `Coins`) VALUES
(1, 'GG', '1234', 'gg@gg', 12345678, 2000);
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `QuestionID` int(20) NOT NULL,
  `Question` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
<<<<<<< HEAD
  `TopicID` int(20) NOT NULL,
  `Choice1` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Choice2` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Choice3` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Choice4` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
=======
  `TopicID` int(20) NOT NULL
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Question`
--

<<<<<<< HEAD
INSERT INTO `Question` (`QuestionID`, `Question`, `Answer`, `TopicID`, `Choice1`, `Choice2`, `Choice3`, `Choice4`) VALUES
(1, 'Which animal can fly?', 'bird', 1, 'dog', 'bird', 'fish', 'zebra'),
(2, 'which animal can breath in the water', 'fish', 1, 'fish', 'ant', 'pig', 'hippo'),
(3, 'which is the slowest animal?', 'slot', 1, 'turtle', 'hippo', 'slot', 'bird'),
(4, 'which is the fastest animal?', 'cheetah', 1, 'rabbit', 'slot', 'frog', 'cheetah'),
(5, 'which is the biggest animal?', 'elephant', 1, 'elephant', 'ant', 'monkey', 'pig'),
(6, 'which country is in Europe?', 'Italy', 2, 'Thailand', 'Uruguay', 'Italy', 'Pakistan'),
(7, 'Who is the singer?', 'Adele', 3, 'Huge Jackman', 'Robert Pattinson', 'Adele', 'Harry Potter');
=======
INSERT INTO `Question` (`QuestionID`, `Question`, `Answer`, `TopicID`) VALUES
(1, 'Which animal can fly', 'bird', 1),
(2, 'Which animal can stay in very low temperature?', 'penguin', 1);
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225

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
<<<<<<< HEAD
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `CreditCard` (`CreditCard`),
=======
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
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
<<<<<<< HEAD
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
=======
  MODIFY `PlayerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
<<<<<<< HEAD
  MODIFY `QuestionID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `QuestionID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> 237e997b4c80e6c18c4e5f0b27a292e74e49c225
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
