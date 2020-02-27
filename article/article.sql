-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 06 fév. 2020 à 13:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `article`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_creation` datetime NOT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id_post`, `titre`, `contenu`, `date_creation`, `date_modification`) VALUES
(7, 'MON TITRE', 'MON CONTENU', '2020-01-30 10:36:41', '2020-01-30 10:36:41'),
(6, 'MON TITRE', 'MON CONTENU', '2020-01-30 10:33:27', '2020-01-30 10:33:27'),
(8, 'MON TITRE', 'MON CONTENU', '2020-01-30 10:36:53', '2020-01-30 10:36:53'),
(9, 'titre', 'contenu', '2020-01-30 10:38:00', '2020-01-30 10:38:00'),
(10, 'titre', 'contenu', '2020-01-30 10:42:24', '2020-01-30 10:42:24'),
(11, 'titre', 'contenu', '2020-01-30 10:42:38', '2020-01-30 10:42:38'),
(12, 'titre', 'contenu', '2020-01-30 10:44:16', '2020-01-30 10:44:16'),
(13, 'titre', 'contenu', '2020-01-30 10:44:31', '2020-01-30 10:44:31'),
(14, 'titre', 'contenu', '2020-01-30 10:45:56', '2020-01-30 10:45:56'),
(15, 'titre', 'contenu', '2020-01-30 10:48:13', '2020-01-30 10:48:13'),
(16, 'titre', 'contenu', '2020-01-30 10:52:13', '2020-01-30 10:52:13'),
(17, 'titre', 'contenu', '2020-01-30 10:52:26', '2020-01-30 10:52:26'),
(18, 'titre', 'contenu', '2020-01-30 10:52:47', '2020-01-30 10:52:47'),
(19, 'titre', 'contenu', '2020-01-30 10:52:49', '2020-01-30 10:52:49'),
(20, 'titre', 'contenu', '2020-01-30 10:52:51', '2020-01-30 10:52:51'),
(21, 'titre', 'contenu', '2020-01-30 10:53:16', '2020-01-30 10:53:16'),
(22, 'titre', 'contenu', '2020-01-30 10:53:23', '2020-01-30 10:53:23'),
(23, 'titre', 'contenu', '2020-01-30 10:53:33', '2020-01-30 10:53:33'),
(24, 'titre', 'contenu', '2020-01-30 10:54:35', '2020-01-30 10:54:35'),
(25, 'titre', 'contenu', '2020-01-30 10:54:43', '2020-01-30 10:54:43'),
(26, 'titre', 'contenu', '2020-01-30 10:54:48', '2020-01-30 10:54:48'),
(27, 'titre', 'contenu', '2020-01-30 10:58:25', '2020-01-30 10:58:25'),
(28, 'titre', 'contenu', '2020-01-30 10:58:28', '2020-01-30 10:58:28'),
(29, 'titre', 'contenu', '2020-01-30 10:59:34', '2020-01-30 10:59:34'),
(30, 'titre', 'contenu', '2020-01-30 10:59:38', '2020-01-30 10:59:38'),
(31, 'titre', 'contenu', '2020-01-30 11:03:27', '2020-01-30 11:03:27'),
(32, 'titre', 'contenu', '2020-01-30 11:03:47', '2020-01-30 11:03:47'),
(33, 'titre', 'contenu', '2020-01-30 11:03:50', '2020-01-30 11:03:50'),
(34, 'titre', 'contenu', '2020-01-30 11:09:01', '2020-01-30 11:09:01'),
(35, 'titre', 'contenu', '2020-01-30 11:09:05', '2020-01-30 11:09:05'),
(36, 'titre', 'contenu', '2020-01-30 11:09:09', '2020-01-30 11:09:09'),
(37, 'titre', 'contenu', '2020-01-30 11:09:48', '2020-01-30 11:09:48'),
(38, 'titre', 'contenu', '2020-01-30 11:10:31', '2020-01-30 11:10:31'),
(39, 'titre', 'contenu', '2020-01-30 11:10:51', '2020-01-30 11:10:51'),
(40, 'titre', 'contenu', '2020-01-30 11:11:00', '2020-01-30 11:11:00'),
(41, 'titre', 'contenu', '2020-01-30 11:11:05', '2020-01-30 11:11:05'),
(42, 'titre', 'contenu', '2020-01-30 11:11:37', '2020-01-30 11:11:37'),
(43, 'titre', 'contenu', '2020-01-30 11:13:59', '2020-01-30 11:13:59'),
(44, 'titre', 'contenu', '2020-01-30 11:15:08', '2020-01-30 11:15:08'),
(45, 'titre', 'contenu', '2020-01-30 11:15:18', '2020-01-30 11:15:18'),
(46, 'titre', 'contenu', '2020-01-30 11:16:06', '2020-01-30 11:16:06'),
(47, 'titre', 'contenu', '2020-01-30 11:16:18', '2020-01-30 11:16:18'),
(48, 'titre', 'contenu', '2020-01-30 11:17:08', '2020-01-30 11:17:08'),
(49, 'titre', 'contenu', '2020-01-30 11:18:14', '2020-01-30 11:18:14'),
(50, 'titre', 'contenu', '2020-01-30 11:18:27', '2020-01-30 11:18:27'),
(51, 'titre', 'contenu', '2020-01-30 11:18:31', '2020-01-30 11:18:31'),
(52, 'titre', 'contenu', '2020-01-30 11:18:40', '2020-01-30 11:18:40'),
(53, 'titre', 'contenu', '2020-01-30 11:18:45', '2020-01-30 11:18:45'),
(54, 'titre', 'contenu', '2020-01-30 11:19:14', '2020-01-30 11:19:14'),
(55, 'titre', 'contenu', '2020-01-30 11:19:21', '2020-01-30 11:19:21'),
(56, 'titre', 'contenu', '2020-01-30 11:20:05', '2020-01-30 11:20:05'),
(57, 'titre', 'contenu', '2020-01-30 11:20:11', '2020-01-30 11:20:11'),
(58, 'titre', 'contenu', '2020-01-30 11:20:16', '2020-01-30 11:20:16'),
(59, 'titre', 'contenu', '2020-01-30 11:21:06', '2020-01-30 11:21:06'),
(60, 'titre', 'contenu', '2020-01-30 11:21:19', '2020-01-30 11:21:19'),
(61, 'titre', 'contenu', '2020-01-30 11:22:49', '2020-01-30 11:22:49'),
(62, 'titre', 'contenu', '2020-01-30 11:23:09', '2020-01-30 11:23:09'),
(63, 'titre', 'contenu', '2020-01-30 11:35:04', '2020-01-30 11:35:04'),
(64, 'titre', 'contenu', '2020-01-30 11:35:06', '2020-01-30 11:35:06'),
(65, 'titre', 'contenu', '2020-01-30 11:35:07', '2020-01-30 11:35:07'),
(66, 'titre', 'contenu', '2020-01-30 11:35:09', '2020-01-30 11:35:09'),
(67, 'titre', 'contenu', '2020-01-30 11:35:25', '2020-01-30 11:35:25'),
(68, 'titre', 'contenu', '2020-01-30 11:36:13', '2020-01-30 11:36:13'),
(69, 'titre', 'contenu', '2020-01-30 11:36:41', '2020-01-30 11:36:41'),
(70, 'titre', 'contenu', '2020-01-30 11:40:35', '2020-01-30 11:40:35'),
(71, 'titre', 'contenu', '2020-01-30 11:42:18', '2020-01-30 11:42:18'),
(72, 'titre', 'contenu', '2020-01-30 11:42:28', '2020-01-30 11:42:28'),
(73, 'titre', 'contenu', '2020-01-30 11:42:33', '2020-01-30 11:42:33'),
(74, 'titre', 'contenu', '2020-01-30 11:43:51', '2020-01-30 11:43:51'),
(75, 'titre', 'contenu', '2020-01-30 11:44:08', '2020-01-30 11:44:08'),
(76, 'titre', 'contenu', '2020-01-30 11:46:46', '2020-01-30 11:46:46'),
(77, 'titre', 'contenu', '2020-01-30 11:49:39', '2020-01-30 11:49:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
