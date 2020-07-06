-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 juil. 2020 à 11:37
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bateau`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `interprete` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `jaquette` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`id`, `nom`, `interprete`, `label`, `jaquette`) VALUES
(1, 'Sauver l\'amour', 1, 1, 'alb-sauver-amour'),
(2, 'Diamond life', 2, 2, 'alb-diamond-life'),
(3, 'Rendez vous', 3, 3, 'alb-rdv'),
(4, 'For Their Love', 5, 4, 'alb-for-their-love'),
(5, 'Rough and Rowdy Ways', 4, 5, 'alb-rough-and-rowdy-ways'),
(6, 'Back to Black', 6, 6, 'alb-back-to-black'),
(7, 'After Hours', 7, 7, 'alb-after-hours');

-- --------------------------------------------------------

--
-- Structure de la table `interprete`
--

CREATE TABLE `interprete` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `prenom` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  `type` enum('groupe','seul') COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `interprete`
--

INSERT INTO `interprete` (`id`, `nom`, `prenom`, `type`) VALUES
(1, 'Balavoine', 'Daniel', 'seul'),
(2, 'Sade', NULL, 'seul'),
(3, 'Gendre', 'Maxime', 'groupe'),
(4, 'Dylan', 'Bob', 'seul'),
(5, 'Lives', 'Other', 'seul'),
(6, 'Winehouse', 'Amy', 'seul'),
(7, 'The Weeknd', NULL, 'seul');

-- --------------------------------------------------------

--
-- Structure de la table `label`
--

CREATE TABLE `label` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `label`
--

INSERT INTO `label` (`id`, `nom`) VALUES
(1, 'Disques Barclay'),
(2, 'Power Plant'),
(3, 'Zappruder Records'),
(4, 'ATO Records / Fontana North'),
(5, 'Columbia Records'),
(6, 'Universal Records'),
(7, 'Universal Republic');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_ibfk_1` (`interprete`),
  ADD KEY `album_ibfk_2` (`label`);

--
-- Index pour la table `interprete`
--
ALTER TABLE `interprete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `interprete`
--
ALTER TABLE `interprete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `label`
--
ALTER TABLE `label`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`interprete`) REFERENCES `interprete` (`id`),
  ADD CONSTRAINT `album_ibfk_2` FOREIGN KEY (`label`) REFERENCES `label` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
