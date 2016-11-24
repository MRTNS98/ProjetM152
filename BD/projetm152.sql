-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 24 Novembre 2016 à 09:37
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetm152`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(15) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`idCategorie`, `nomCategorie`) VALUES
(1, 'Image'),
(2, 'Video'),
(3, 'Blague');

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `idContenu` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(144) NOT NULL,
  `lienContenu` varchar(255) NOT NULL,
  `Auteur` varchar(40) DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  `idSection` int(11) NOT NULL,
  PRIMARY KEY (`idContenu`),
  KEY `FK_Contenu_idCategorie` (`idCategorie`),
  KEY `FK_Contenu_idSection` (`idSection`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `idSection` int(11) NOT NULL AUTO_INCREMENT,
  `NomSection` varchar(15) NOT NULL,
  PRIMARY KEY (`idSection`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`idSection`, `NomSection`) VALUES
(1, 'Drôle'),
(2, 'Sport'),
(3, 'Voiture'),
(4, 'Nourriture'),
(5, 'Déguisement'),
(6, 'Jeux'),
(7, 'GIF'),
(8, '+18');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `FK_Contenu_idSection` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`),
  ADD CONSTRAINT `FK_Contenu_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
