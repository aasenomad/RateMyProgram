-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 04 mars 2018 à 12:36
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rateprogram`
--

-- --------------------------------------------------------

--
-- Structure de la table `city`
--

CREATE TABLE `city` (
  `cityId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stateId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `commentId` int(11) NOT NULL,
  `comment` text NOT NULL,
  `userId` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`commentId`, `comment`, `userId`, `schoolId`) VALUES
(1, 'The research is excellent, the culture is enthusiastic and the teaching is fantastic!', 1, 1),
(2, 'Had a terrible experience here. Would not recommend. ', 2, 1),
(3, 'Would do it all over again. Loved it here!', 3, 1),
(4, 'Great time!', 3, 3),
(5, 'Not the best. ', 1, 1),
(6, 'The best place on earth!', 1, 1),
(7, 'I hate this program. ', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `flags`
--

CREATE TABLE `flags` (
  `flgaId` int(11) NOT NULL,
  `commentId` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `commentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rateinfo`
--

CREATE TABLE `rateinfo` (
  `rateId` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rateinfo`
--

INSERT INTO `rateinfo` (`rateId`, `value`) VALUES
(1, 'Overall Program rating'),
(2, 'Level of difficulty'),
(3, 'Academic Quality'),
(4, 'Research Opportunities'),
(5, 'Location'),
(6, 'Atmosphere (Respectful, Friendly, Fun people)');

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `ratingId` int(11) NOT NULL,
  `rateId` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`ratingId`, `rateId`, `schoolId`, `userId`, `rate`) VALUES
(2, 1, 1, 1, 4),
(3, 1, 1, 2, 3),
(4, 2, 2, 3, 2),
(5, 2, 2, 3, 5),
(6, 3, 1, 4, 4),
(7, 4, 1, 3, 5),
(8, 6, 1, 4, 4),
(9, 6, 1, 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `savedprogram`
--

CREATE TABLE `savedprogram` (
  `userId` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `school`
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
-- Déchargement des données de la table `school`
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

-- --------------------------------------------------------

--
-- Structure de la table `schoolprogram`
--

CREATE TABLE `schoolprogram` (
  `programId` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `schoolprogram`
--

INSERT INTO `schoolprogram` (`programId`, `name`) VALUES
(1, 'Undergraduate'),
(2, 'Master'),
(3, 'PhD');

-- --------------------------------------------------------

--
-- Structure de la table `schooltype`
--

CREATE TABLE `schooltype` (
  `typeId` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `schooltype`
--

INSERT INTO `schooltype` (`typeId`, `name`) VALUES
(1, 'Public'),
(2, 'Private');

-- --------------------------------------------------------

--
-- Structure de la table `states`
--

CREATE TABLE `states` (
  `stateId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `useraccount`
--

CREATE TABLE `useraccount` (
  `iden` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `UserId` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `useraccount`
--

INSERT INTO `useraccount` (`iden`, `email`, `password`, `UserId`) VALUES
(1, 'nana@gmail.com', 'nana', '456teyh78'),
(2, 'jiji@gmail.com', 'jiji', 'fJn4KpFJS1'),
(5, 'jiji@gmail.com', 'jiji', '7Sx8GwzHJs');

-- --------------------------------------------------------

--
-- Structure de la table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` varchar(50) NOT NULL,
  `username` text NOT NULL,
  `school` text,
  `position` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `userinfo`
--

INSERT INTO `userinfo` (`userID`, `username`, `school`, `position`) VALUES
('456teyh78', 'nana', 'GSU', 'ALumni'),
('fJn4KpFJS1', 'JiJi', 'FSU', 'student'),
('7Sx8GwzHJs', 'JiJi', '', 'FSU');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityId`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentId`);

--
-- Index pour la table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`flgaId`);

--
-- Index pour la table `rateinfo`
--
ALTER TABLE `rateinfo`
  ADD PRIMARY KEY (`rateId`);

--
-- Index pour la table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Index pour la table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolId`);

--
-- Index pour la table `schoolprogram`
--
ALTER TABLE `schoolprogram`
  ADD PRIMARY KEY (`programId`);

--
-- Index pour la table `schooltype`
--
ALTER TABLE `schooltype`
  ADD PRIMARY KEY (`typeId`);

--
-- Index pour la table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`stateId`);

--
-- Index pour la table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`iden`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- Index pour la table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `city`
--
ALTER TABLE `city`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `flags`
--
ALTER TABLE `flags`
  MODIFY `flgaId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rateinfo`
--
ALTER TABLE `rateinfo`
  MODIFY `rateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `rating`
--
ALTER TABLE `rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `school`
--
ALTER TABLE `school`
  MODIFY `schoolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `schoolprogram`
--
ALTER TABLE `schoolprogram`
  MODIFY `programId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `schooltype`
--
ALTER TABLE `schooltype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `states`
--
ALTER TABLE `states`
  MODIFY `stateId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `iden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
