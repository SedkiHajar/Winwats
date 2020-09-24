-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 sep. 2020 à 21:58
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `abs`
--

CREATE TABLE `abs` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `nbrHeur` int(11) NOT NULL,
  `justif` text DEFAULT 'NON',
  `id_mat` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abs`
--

INSERT INTO `abs` (`id`, `date`, `nbrHeur`, `justif`, `id_mat`, `id_etudiant`) VALUES
(15, '2020-09-24 19:46:00', 2, 'ZZ', 104, 4),
(19, '2020-09-06 17:10:00', 5, 'TT', 104, 3),
(20, '2020-09-24 19:12:00', 4, 'RR', 104, 3),
(21, '2020-09-24 19:12:00', 4, 'ZZ', 104, 4),
(22, '2020-09-24 17:19:00', 8, 'TTT', 104, 3),
(23, '2020-09-12 17:17:00', 10, 'RR', 104, 3),
(24, '2020-09-24 20:28:00', 33, 'ZZ', 103, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abs`
--
ALTER TABLE `abs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mat` (`id_mat`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abs`
--
ALTER TABLE `abs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abs`
--
ALTER TABLE `abs`
  ADD CONSTRAINT `abs_ibfk_1` FOREIGN KEY (`id_mat`) REFERENCES `matiere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `abs_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`CIN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
