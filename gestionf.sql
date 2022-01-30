-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 déc. 2021 à 01:10
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionf`
--

-- --------------------------------------------------------

--
-- Structure de la table `donpivot`
--

DROP TABLE IF EXISTS `donpivot`;
CREATE TABLE IF NOT EXISTS `donpivot` (
  `id_pivot` int NOT NULL AUTO_INCREMENT,
  `id_f` int DEFAULT NULL,
  `id_fourn` int DEFAULT NULL,
  PRIMARY KEY (`id_pivot`),
  KEY `id_f` (`id_f`),
  KEY `id_fourn` (`id_fourn`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `donpivot`
--

INSERT INTO `donpivot` (`id_pivot`, `id_f`, `id_fourn`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 2, 3),
(4, 1, 4),
(5, 2, 5),
(6, 1, 6),
(7, 2, 8),
(8, 2, 9),
(9, 5, 10),
(10, 2, 11);

-- --------------------------------------------------------

--
-- Structure de la table `fondations`
--

DROP TABLE IF EXISTS `fondations`;
CREATE TABLE IF NOT EXISTS `fondations` (
  `id_f` int NOT NULL AUTO_INCREMENT,
  `nomF` varchar(255) NOT NULL,
  `abbrev` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_f`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fondations`
--

INSERT INTO `fondations` (`id_f`, `nomF`, `abbrev`, `logo`, `adresse`, `description`) VALUES
(1, 'Staff Benda Bilili', 'SBLL', 'des-chiens-renifleurs-decouvrent-des-sepultures-vieilles-de-3000-ans-en-croatie.jpg', 'Av des Huilleries, Kinshasa', 'Un regroupement de musiciens'),
(2, 'Many Lisungu', 'MLI', 'car_panne.PNG', 'Av des Roi, Gombe Kinshasa', 'Une association de bons gars courageux'),
(5, 'Tika Batu', 'TBK_Lisungi', 'CODES.jpg', 'Av, de la science 5, Gombe, Kinshasa', 'Un groupe lisungi');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `id_fourn` int NOT NULL AUTO_INCREMENT,
  `noms` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `paiement` varchar(255) NOT NULL,
  `montant` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fourn`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id_fourn`, `noms`, `telephone`, `adresse`, `paiement`, `montant`) VALUES
(1, 'Stéphane KIKONI', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'AIRTEL', '5000'),
(2, 'CREAS', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'M-PSA', '5000'),
(3, 'Ledjo Mboma', '090998', 'Boulevard 30 juin', 'M-PSA', '200'),
(4, 'Myinda Victoire', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'ORANGE', '50000'),
(5, 'AIRTEL', '0817247035', 'Boulevard 30 juin', 'AIRTEL', '12500'),
(6, 'OGEFREM', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'M-PSA', '200'),
(7, 'Stéphane KIKONI', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'choisir', '5000'),
(8, 'Stéphane KIKONI', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'M-PSA', '50000'),
(9, 'Stéphane KIKONI', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'AIRTEL', '50000'),
(10, 'Stéphane KIKONI', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'ORANGE', '12500'),
(11, 'OGEFREM', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'AIRTEL', '200'),
(12, 'OGEFREM', '0817247035', 'AV de la SCIENCE 5 GOMBE', 'AIRTEL', '5000');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `etat` int NOT NULL DEFAULT '1',
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `etat`, `role`) VALUES
(1, 'admin', '12345', 1, 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
