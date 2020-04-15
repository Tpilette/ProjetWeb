-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 12 avr. 2020 à 09:07
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--
CREATE DATABASE IF NOT EXISTS `projetweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetweb`;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `idUser` int(10) DEFAULT NULL,
  `montant` double(4,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `commande`:
--   `idUser`
--       `personne` -> `id`
--

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date`, `idUser`, `montant`) VALUES
(2, '2020-03-29', 1, 21.60),
(6, '2020-04-01', 1, 43.20),
(27, '2020-04-05', 1, 7.20);

-- --------------------------------------------------------

--
-- Structure de la table `contenucommande`
--

DROP TABLE IF EXISTS `contenucommande`;
CREATE TABLE IF NOT EXISTS `contenucommande` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idManga` int(10) DEFAULT NULL,
  `idCommande` int(10) DEFAULT NULL,
  `prixEnDate` double(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IdManga` (`idManga`),
  KEY `IdCommande` (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `contenucommande`:
--   `IdManga`
--       `manga` -> `Id`
--   `IdCommande`
--       `commande` -> `id`
--

--
-- Déchargement des données de la table `contenucommande`
--

INSERT INTO `contenucommande` (`id`, `idManga`, `idCommande`, `prixEnDate`) VALUES
(1, 4, 2, 7.20),
(2, 5, 2, 7.20),
(3, 6, 2, 7.20),
(4, 23, 6, 7.20),
(5, 24, 6, 7.20),
(6, 25, 6, 7.20),
(7, 26, 6, 7.20),
(8, 27, 6, 7.20),
(9, 28, 6, 7.20),
(16, 4, 27, 7.20);

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `editeur` varchar(100) DEFAULT NULL,
  `volume` int(10) DEFAULT NULL,
  `prix` double(10,2) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `imageData` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `manga`:
--

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id`, `title`, `editeur`, `volume`, `prix`, `auteur`, `imageData`, `genre`) VALUES
(4, 'Card Captor Sakura', 'Pika', 1, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(5, 'Card Captor Sakura', 'Pika', 2, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(6, 'Card Captor Sakura', 'Pika', 3, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(7, 'Card Captor Sakura', 'Pika', 4, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(8, 'Card Captor Sakura', 'Pika', 5, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(9, 'Card Captor Sakura', 'Pika', 6, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(10, 'Card Captor Sakura', 'Pika', 7, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(11, 'Card Captor Sakura', 'Pika', 8, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(12, 'Card Captor Sakura', 'Pika', 9, 7.20, 'CLAMP', 'Card_Captor_Sakura', NULL),
(13, 'Frau Faust', 'Pika', 1, 7.20, 'Kore Yamazaki', 'Frau_Faust', NULL),
(14, 'Frau Faust', 'Pika', 2, 7.20, 'Kore Yamazaki', 'Frau_Faust', NULL),
(15, 'Frau Faust', 'Pika', 3, 7.20, 'Kore Yamazaki', 'Frau_Faust', NULL),
(16, 'Frau Faust', 'Pika', 4, 7.20, 'Kore Yamazaki', 'Frau_Faust', NULL),
(17, 'Beast Master', 'Kaze Manga', 1, 7.20, 'Kyousuke Motomi', 'Beast_Master', NULL),
(18, 'Beast Master', 'Kaze Manga', 2, 7.20, 'Kyousuke Motomi', 'Beast_Master', NULL),
(19, 'Beyond Evil', 'Kaze Manga', 1, 7.20, 'Miura', 'Beyond_Evil', NULL),
(20, 'Beyond Evil', 'Kaze Manga', 2, 7.20, 'Miura', 'Beyond_Evil', NULL),
(21, 'Beyond Evil', 'Kaze Manga', 3, 7.20, 'Miura', 'Beyond_Evil', NULL),
(22, 'Beyond Evil', 'Kaze Manga', 4, 7.20, 'Miura', 'Beyond_Evil', NULL),
(23, 'Mushoku Tensei', 'DokiDoki', 1, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(24, 'Mushoku Tensei', 'DokiDoki', 2, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(25, 'Mushoku Tensei', 'DokiDoki', 3, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(26, 'Mushoku Tensei', 'DokiDoki', 4, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(27, 'Mushoku Tensei', 'DokiDoki', 5, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(28, 'Mushoku Tensei', 'DokiDoki', 6, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(29, 'Mushoku Tensei', 'DokiDoki', 7, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(30, 'Mushoku Tensei', 'DokiDoki', 8, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(31, 'Mushoku Tensei', 'DokiDoki', 9, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(32, 'Mushoku Tensei', 'DokiDoki', 10, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', NULL),
(33, 'Goblin Slayer', 'Kurokawa', 1, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(34, 'Goblin Slayer', 'Kurokawa', 2, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(35, 'Goblin Slayer', 'Kurokawa', 3, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(36, 'Goblin Slayer', 'Kurokawa', 1, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(37, 'Goblin Slayer', 'Kurokawa', 5, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(38, 'Goblin Slayer', 'Kurokawa', 6, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(39, 'Goblin Slayer', 'Kurokawa', 7, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', NULL),
(40, 'test', 'test', 1, 9.99, 'test', 'test1', 'test'),
(41, 'test', 'test', 1, 9.99, 'test', 'test1', 'test'),
(42, 'test', 't', 1, 9.99, 't', 'test1', 't'),
(43, 'test', 't', 1, 9.99, 't', 'test1', 't'),
(44, 'test', 't', 1, 9.99, 't', 'test1', 't'),
(45, 'test', 'test', 1, 9.99, 'test', 'test1', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numTel` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `personne`:
--   `role`
--       `role` -> `id`
--

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `login`, `password`, `email`, `nom`, `prenom`, `adresse`, `numTel`, `dateNaissance`, `role`) VALUES
(1, 'thibault', '$2y$10$mO5.yiDvpARL7IyCIduTPeQajp8rP0n0e3sYAaja9PKQ99h5HgzSK', 'thibault_pilette@hotmail.com', 'Pilette', 'Thibault', '53 rue Jules Tison Haine-saint-pierre', '0479487998', '1990-02-24', 1),
(5, 'test2', '$2y$10$s3YzuAR.0IdCI0hv8HCFN.oLEv1mJH9uSJY6QGSKhDzIBYmLRiXlO', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 1),
(6, 'admin', '$2y$10$2YS7SqOhWPcyQCoSo5JqE.4PYFChxhRsclrNNstKodx7x89imj03y', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 2),
(11, 'test5', '$2y$10$6daZOLkQgVQWagtLQvp5G.n5fVsObh8VvBTdvzCIyGaplciOvift6', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- RELATIONS POUR LA TABLE `role`:
--

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `valeur`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `contenucommande`
--
ALTER TABLE `contenucommande`
  ADD CONSTRAINT `contenucommande_ibfk_1` FOREIGN KEY (`IdManga`) REFERENCES `manga` (`Id`),
  ADD CONSTRAINT `contenucommande_ibfk_2` FOREIGN KEY (`IdCommande`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
