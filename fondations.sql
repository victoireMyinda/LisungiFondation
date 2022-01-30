-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 déc. 2021 à 00:58
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
