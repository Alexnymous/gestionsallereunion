-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 06 fév. 2018 à 11:48
-- Version du serveur :  5.6.38
-- Version de PHP :  7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `GSR`
--

-- --------------------------------------------------------

--
-- Structure de la table `T_RESERVATIONS`
--

CREATE TABLE `T_RESERVATIONS` (
  `reservation_id` int(10) UNSIGNED NOT NULL COMMENT 'by BJ',
  `reservation_nom` varchar(100) DEFAULT NULL,
  `reservation_heureDebut` datetime DEFAULT NULL,
  `reservation_heureFin` datetime DEFAULT NULL,
  `T_SALLES_salle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_SALLES`
--

CREATE TABLE `T_SALLES` (
  `salle_id` int(11) NOT NULL COMMENT 'by BJ',
  `salle_nom` varchar(100) DEFAULT NULL,
  `salle_capacite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_SALLES`
--

INSERT INTO `T_SALLES` (`salle_id`, `salle_nom`, `salle_capacite`) VALUES
(1, 'Gilbert Montagné', 20),
(2, 'Claude Francois', 12),
(3, 'Patrick Sebastien', 35),
(4, 'Jul', 68);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `T_RESERVATIONS`
--
ALTER TABLE `T_RESERVATIONS`
  ADD PRIMARY KEY (`reservation_id`,`T_SALLES_salle_id`),
  ADD KEY `fk_T_RESERVATIONS_T_SALLES_idx` (`T_SALLES_salle_id`);

--
-- Index pour la table `T_SALLES`
--
ALTER TABLE `T_SALLES`
  ADD PRIMARY KEY (`salle_id`),
  ADD UNIQUE KEY `salle_id_UNIQUE` (`salle_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `T_RESERVATIONS`
--
ALTER TABLE `T_RESERVATIONS`
  MODIFY `reservation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'by BJ';

--
-- AUTO_INCREMENT pour la table `T_SALLES`
--
ALTER TABLE `T_SALLES`
  MODIFY `salle_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'by BJ', AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `T_RESERVATIONS`
--
ALTER TABLE `T_RESERVATIONS`
  ADD CONSTRAINT `fk_T_RESERVATIONS_T_SALLES` FOREIGN KEY (`T_SALLES_salle_id`) REFERENCES `T_SALLES` (`salle_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
