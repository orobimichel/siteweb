-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 16 Octobre 2019 à 16:50
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE IF NOT EXISTS `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libprod` varchar(50) NOT NULL,
  `prixunit` int(11) NOT NULL,
  `qtecmde` int(11) NOT NULL,
  `mtht` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `libprod`, `prixunit`, `qtecmde`, `mtht`, `date`) VALUES
(1, 'riz', 700, 20, 14000, '2019-10-02'),
(2, 'coca-cola', 150, 16, 2400, '2019-10-18'),
(3, 'rhum-saint-james', 650, 110, 71500, '2019-10-12'),
(4, 'gingimbres', 75, 132, 9900, '2019-10-24'),
(5, 'pate alimentaire', 1500, 33, 49500, '2017-10-03'),
(6, 'patate douce', 145, 57, 8265, '2019-10-04'),
(7, 'pain dore', 150, 15, 2250, '2019-10-19'),
(8, 'gomboo', 25, 60, 1500, '2019-10-25'),
(10, 'gombo', 150, 251, 37650, '2019-10-15'),
(11, 'avocat', 156, 1233, 192348, '2019-10-11'),
(12, 'coco', 150, 250, 37500, '2019-10-04'),
(13, 'tomates', 300, 175, 52500, '2019-10-13'),
(14, 'bananes', 75, 13, 975, '2019-10-11'),
(15, 'chocolat', 4500, 120, 540000, '2019-10-31'),
(16, 'pastis', 1500, 18, 27000, '2019-10-20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
