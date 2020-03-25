-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 mars 2020 à 09:16
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contenucommande`
--

DROP TABLE IF EXISTS `contenucommande`;
CREATE TABLE IF NOT EXISTS `contenucommande` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `IdManga` int(10) DEFAULT NULL,
  `IdCommande` int(10) DEFAULT NULL,
  `PrixEnDate` double(3,2) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `IdManga` (`IdManga`),
  KEY `IdCommande` (`IdCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

DROP TABLE IF EXISTS `manga`;
CREATE TABLE IF NOT EXISTS `manga` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(20) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Editeur` varchar(100) DEFAULT NULL,
  `Volume` int(10) DEFAULT NULL,
  `Prix` double(3,2) DEFAULT NULL,
  `Auteur` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga`(`Id`, `Title`, `Editeur`, `Volume`, `Prix`, `Auteur`) VALUES 
(0,'Card Captor Sakura','Pika',1,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',2,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',3,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',4,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',5,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',6,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',7,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',8,7.20 ,'CLAMP'),
(0,'Card Captor Sakura','Pika',9,7.20 ,'CLAMP'),

(0,'Frau Faust','Pika',1,7.20 ,'Kore Yamazaki'),
(0,'Frau Faust','Pika',2,7.20 ,'Kore Yamazaki'),
(0,'Frau Faust','Pika',3,7.20 ,'Kore Yamazaki'),
(0,'Frau Faust','Pika',4,7.20 ,'Kore Yamazaki'),

(0,'Beast Master','Kaze Manga',1,7.20 ,'Kyousuke Motomi'),
(0,'Beast Master','Kaze Manga',2,7.20 ,'Kyousuke Motomi'),

(0,'Beyond Evil','Kaze Manga',1,7.20 ,'Miura'),
(0,'Beyond Evil','Kaze Manga',2,7.20 ,'Miura'),
(0,'Beyond Evil','Kaze Manga',3,7.20 ,'Miura'),
(0,'Beyond Evil','Kaze Manga',4,7.20 ,'Miura'),


(0,'Mushoku Tensei','DokiDoki',1,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',2,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',3,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',4,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',5,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',6,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',7,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',8,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',9,7.20 ,'Fujikawa Yuka'),
(0,'Mushoku Tensei','DokiDoki',10,7.20 ,'Fujikawa Yuka'),

(0,'Goblin Slayer','Kurokawa',1,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',2,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',3,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',1,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',5,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',6,7.20 ,'Kumo Kagyu'),
(0,'Goblin Slayer','Kurokawa',7,7.20 ,'Kumo Kagyu');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `login`, `password`, `email`, `nom`, `prenom`, `adresse`, `numTel`, `dateNaissance`, `role`) VALUES
(1, 'thibault', '$2y$10$8ouCyMpSH1/TSN0KS53G/.4pMtVfQ8pUP39Gpor9WgJ5mGrIKbp4u', 'thibault_pilette@hotmail.com', 'thibault', 'pilette', '53 rue Jules Tison Haine-saint-pierre', '0479487998', '0000-00-00', 1),
(2, 'admin', '$2y$10$i79TFY4WIo7M9.wDoniEPOmPEj.sZRDmbE7y3XHUmF2BaC7oy11uC', 'hennaut.jessica@live.be', 'jessica', 'Hennaut', '53 rue Jules Tison Haine-saint-pierre', '0479487998', '0000-00-00', 2),
(3, 'test', 'test', 'test@test.com', 'test', 'test', 'test', '0477611646', '1990-02-24', 1);

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

CREATE USER 'appDbUser'@'%' IDENTIFIED BY 'Pasw123!'

GRANT ALL PRIVILEGES ON *.* TO 'appDbUser'@'%' IDENTIFIED BY PASSWORD '*23C9B10D09D356BADAB731104210C52CC8E7CE89' WITH GRANT OPTION;

GRANT ALL PRIVILEGES ON `projetweb`.* TO 'appDbUser'@'%';