-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 24 sep. 2020 à 21:59
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
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `apreciation` varchar(100) NOT NULL,
  `note` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL,
  `id_mat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_mat` (`id_mat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`CIN`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`id_mat`) REFERENCES `matiere` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
