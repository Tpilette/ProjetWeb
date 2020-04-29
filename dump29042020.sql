-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 avr. 2020 à 19:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `idUser` int(10) DEFAULT NULL,
  `montant` double(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date`, `idUser`, `montant`) VALUES
(2, '2020-03-29', 1, 21.60),
(6, '2020-04-01', 1, 43.20),
(27, '2020-04-05', 1, 7.20),
(28, '2020-04-12', 1, 7.50),
(29, '2020-04-12', 1, 14.40),
(30, '2020-04-15', 5, 7.50),
(35, '2020-04-28', 13, 22.50);

-- --------------------------------------------------------

--
-- Structure de la table `contenucommande`
--

CREATE TABLE `contenucommande` (
  `id` int(10) NOT NULL,
  `idManga` int(10) DEFAULT NULL,
  `idCommande` int(10) DEFAULT NULL,
  `prixEnDate` double(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(16, 4, 27, 7.20),
(17, 4, 28, 7.50),
(18, 17, 29, 7.20),
(19, 18, 29, 7.20),
(20, 4, 30, 7.50),
(25, 4, 35, 22.50);

-- --------------------------------------------------------

--
-- Structure de la table `manga`
--

CREATE TABLE `manga` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `editeur` varchar(100) DEFAULT NULL,
  `volume` int(10) DEFAULT NULL,
  `prix` double(10,2) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `imageData` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `isAvailable` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `manga`
--

INSERT INTO `manga` (`id`, `title`, `editeur`, `volume`, `prix`, `auteur`, `imageData`, `genre`, `isAvailable`) VALUES
(4, 'Card Captor Sakura', 'Pika', 1, 22.50, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(5, 'Card Captor Sakura', 'Pika', 2, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(6, 'Card Captor Sakura', 'Pika', 3, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(7, 'Card Captor Sakura', 'Pika', 4, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(8, 'Card Captor Sakura', 'Pika', 5, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(9, 'Card Captor Sakura', 'Pika', 6, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(10, 'Card Captor Sakura', 'Pika', 7, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(11, 'Card Captor Sakura', 'Pika', 8, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(12, 'Card Captor Sakura', 'Pika', 9, 7.20, 'CLAMP', 'Card_Captor_Sakura', 'shojo', 1),
(13, 'Frau Faust', 'Pika', 1, 7.20, 'Kore Yamazaki', 'Frau_Faust', 'seinen', 1),
(14, 'Frau Faust', 'Pika', 2, 7.20, 'Kore Yamazaki', 'Frau_Faust', 'seinen', 1),
(15, 'Frau Faust', 'Pika', 3, 7.20, 'Kore Yamazaki', 'Frau_Faust', 'seinen', 1),
(16, 'Frau Faust', 'Pika', 4, 7.20, 'Kore Yamazaki', 'Frau_Faust', 'seinen', 1),
(17, 'Beast Master', 'Kaze Manga', 1, 7.20, 'Kyousuke Motomi', 'Beast_Master', 'shojo', 1),
(18, 'Beast Master', 'Kaze Manga', 2, 7.20, 'Kyousuke Motomi', 'Beast_Master', 'shojo', 1),
(19, 'Beyond Evil', 'Kaze Manga', 1, 7.20, 'Miura', 'Beyond_Evil', 'seinen', 1),
(20, 'Beyond Evil', 'Kaze Manga', 2, 7.20, 'Miura', 'Beyond_Evil', 'seinen', 1),
(21, 'Beyond Evil', 'Kaze Manga', 3, 7.20, 'Miura', 'Beyond_Evil', 'seinen', 1),
(22, 'Beyond Evil', 'Kaze Manga', 4, 7.20, 'Miura', 'Beyond_Evil', 'seinen', 1),
(23, 'Mushoku Tensei', 'DokiDoki', 1, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(24, 'Mushoku Tensei', 'DokiDoki', 2, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(25, 'Mushoku Tensei', 'DokiDoki', 3, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(26, 'Mushoku Tensei', 'DokiDoki', 4, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(27, 'Mushoku Tensei', 'DokiDoki', 5, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(28, 'Mushoku Tensei', 'DokiDoki', 6, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(29, 'Mushoku Tensei', 'DokiDoki', 7, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(30, 'Mushoku Tensei', 'DokiDoki', 8, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(31, 'Mushoku Tensei', 'DokiDoki', 9, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(32, 'Mushoku Tensei', 'DokiDoki', 10, 7.20, 'Fujikawa Yuka', 'Mushoku_Tensei', 'shonen', 1),
(33, 'Goblin Slayer', 'Kurokawa', 1, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(34, 'Goblin Slayer', 'Kurokawa', 2, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(35, 'Goblin Slayer', 'Kurokawa', 3, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(36, 'Goblin Slayer', 'Kurokawa', 4, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(37, 'Goblin Slayer', 'Kurokawa', 5, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(38, 'Goblin Slayer', 'Kurokawa', 6, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1),
(39, 'Goblin Slayer', 'Kurokawa', 7, 7.20, 'Kumo Kagyu', 'Goblin_Slayer', 'seinen', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numTel` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `role` int(10) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `login`, `password`, `email`, `nom`, `prenom`, `adresse`, `numTel`, `dateNaissance`, `role`, `isActive`) VALUES
(1, 'thibault', '$2y$10$mO5.yiDvpARL7IyCIduTPeQajp8rP0n0e3sYAaja9PKQ99h5HgzSK', 'thibault_pilette@hotmail.com', 'Pilette', 'Thibault', '53 rue Jules Tison Haine-saint-pierre', '0479487998', '1990-02-24', 1, 1),
(5, 'test2', '$2y$10$s3YzuAR.0IdCI0hv8HCFN.oLEv1mJH9uSJY6QGSKhDzIBYmLRiXlO', 'test@test.com', 'test2', 'test2', 'test2', '0479487998', '2020-04-15', 1, 1),
(6, 'admin', '$2y$10$2YS7SqOhWPcyQCoSo5JqE.4PYFChxhRsclrNNstKodx7x89imj03y', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 2, 1),
(11, 'test5', '$2y$10$6daZOLkQgVQWagtLQvp5G.n5fVsObh8VvBTdvzCIyGaplciOvift6', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 1, 1),
(12, 'neko', '$2y$10$Uxc8oRIYXCkDiwBUiapZ0uJPS5s80oW2SF705MLbdKINiRs1W/NNu', 'neko@mail.com', NULL, NULL, NULL, NULL, NULL, 1, 1),
(13, 'test6', '$2y$10$S2tzNvnd0/bywKHRF0/Ki.nmSgQilyLbTSVOVW8tyKMR5dj1kD/SG', 'test@test.com', NULL, NULL, NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `valeur` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `valeur`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `contenucommande`
--
ALTER TABLE `contenucommande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdManga` (`idManga`),
  ADD KEY `IdCommande` (`idCommande`);

--
-- Index pour la table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`,`volume`,`prix`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `contenucommande`
--
ALTER TABLE `contenucommande`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `contenucommande_ibfk_1` FOREIGN KEY (`idManga`) REFERENCES `manga` (`id`),
  ADD CONSTRAINT `contenucommande_ibfk_2` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
