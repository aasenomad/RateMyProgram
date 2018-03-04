-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 03, 2018 at 11:08 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rateprogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolId` int(11) NOT NULL,
  `nom` text NOT NULL,
  `Degree` text NOT NULL,
  `program` int(11) NOT NULL,
  `City` int(11) DEFAULT NULL,
  `State` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `website` text,
  `contact` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolId`, `nom`, `Degree`, `program`, `City`, `State`, `type`, `website`, `contact`) VALUES
(1, 'Georgia State University', 'Bachelor\'s of Science in Computer Science', 1, NULL, 1, 2, 'http://cs.gsu.edu/', NULL),
(4, 'University of North Carolina', 'Bachelor of Science in Computer Science', 1, NULL, 3, 2, NULL, NULL),
(2, 'Florida State University', 'Master\'s of Science in Computer Science', 2, NULL, 2, 2, 'http://www.cs.fsu.edu/academics/graduate-programs/ms-in-computer-science/', NULL),
(3, 'University of Miami', 'Doctor of Philosophy in Computer Science', 3, NULL, 2, 1, NULL, NULL),
(5, 'Duke University', 'Doctor of Philosophy in Computer Science', 3, NULL, 3, 1, NULL, NULL),
(6, 'Georgia Institute of Technology', 'Master\'s of Science in Computer Science', 2, NULL, 1, 2, NULL, NULL),
(7, 'Emory University', 'Master\'s of Science in Computer Science', 2, NULL, 3, 1, NULL, NULL),
(8, 'Embry-Riddle Aeronautic University', 'Bachelor\'s of Science in Computer Science', 1, NULL, 2, 1, NULL, NULL),
(9, 'University of Georgia', 'Doctor of Philosophy in Computer Science', 3, NULL, 1, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
