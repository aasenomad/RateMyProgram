-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 03 mars 2018 à 08:44
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
  `schoolId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `school`
--

CREATE TABLE `school` (
  `schoolId` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `Degree` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `City` int(11) DEFAULT NULL,
  `State` int(11) NOT NULL,
  `type` text NOT NULL,
  `website` text,
  `contact` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `UserId` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(11) NOT NULL,
  `username` text NOT NULL,
  `school` text,
  `position` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `school`
--
ALTER TABLE `school`
  MODIFY `schoolId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `states`
--
ALTER TABLE `states`
  MODIFY `stateId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `iden` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
