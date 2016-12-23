-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 23 Décembre 2016 à 15:58
-- Version du serveur :  5.5.52-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db-GeBlague`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `contenu` (
  `idContenu` int(11) NOT NULL,
  `Titre` varchar(144) NOT NULL,
  `lienContenu` varchar(255) NOT NULL,
  `NomImage` varchar(120) NOT NULL,
  `Description` text NOT NULL,
  `Auteur` varchar(40) DEFAULT NULL,
  `nbLike` int(15) DEFAULT NULL,
  `nbDislike` int(15) DEFAULT NULL,
  `idCategorie` int(11) NOT NULL,
  `idSection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenu`
--

INSERT INTO `contenu` (`idContenu`, `Titre`, `lienContenu`, `NomImage`, `Description`, `Auteur`, `nbLike`, `nbDislike`, `idCategorie`, `idSection`) VALUES
(21, 'Tout faux depuis le début !', '585d34bb64397.jpg', 'LinkZelda.jpg', 'Qui d\'entre vous a toujours pensé que Link êtait Zelda ?', 'Miguel', 0, 0, 1, 1),
(22, 'Un petit smile :) ?', '585d350be4a50.jpg', 'CRSport.jpg', 'Il faut savoir sourire un peu de temps en temps !', 'Miguel', 0, 0, 1, 2),
(23, 'Vous en pensez quoi ?', '585d355fbf13f.jpg', 'Voiture.jpg', 'Une Opel GT Concept', 'Miguel', 0, 0, 1, 3),
(24, 'Qui veux un café ?', '585d359fb04e4.jpg', 'Cafe.jpg', 'Je veux le même !', 'Miguel', 0, 0, 1, 4),
(25, 'Une bouteille de coca comestible ?', '585d35c752686.jpg', 'Coca.jpg', 'Comment la faire ?', 'Miguel', 0, 0, 1, 4),
(26, 'Le chien de Dark Vador', '585d360fd218d.jpg', 'StarWarsCos.jpg', 'Un bon costume au passage !', 'Miguel', 0, 0, 1, 5),
(27, 'Le meilleur jeu de tout les temps !', '585d364196274.jpg', 'Nfs.jpg', 'Ce jeu devrais être remasterisé !', 'Miguel', 0, 0, 1, 6),
(28, 'Comment faire du sport ?', '585d366907ecc.gif', 'new-york-30-gifs-7.gif', 'Il a trouvé la bonne technique de travail !', 'Miguel', 0, 0, 1, 7),
(29, 'Le meilleur des animaux !', 'YNUEAxUGxyE', '', 'Un compilation d\'animaux drôles', 'Miguel', 0, 0, 2, 1),
(30, 'Les meilleurs moments !', '7vAq222TNTs', '', 'Des fails au niveau sportif !', 'Miguel', 0, 0, 2, 2),
(31, 'Compilation de crash !', 'kVl-6-A9ZO4', '', 'Attention sur la route !', 'Miguel', 0, 0, 2, 3),
(32, 'C\'est trop bon !', 's8pm9vPNWyc', '', 'Vidéo super satisfaisante !', 'Miguel', 0, 0, 2, 4),
(33, 'Les meilleurs déguisements de 2014 !', 'd-f0rAXzlIs', '', 'La quantité de travail fournit a du être très importante !', 'Miguel', 0, 0, 2, 5),
(34, 'Une compilation de fail dans les jeux vidéos', 'qlG16t7hBr4', '', 'Je suis mort de rire !', 'Miguel', 0, 0, 2, 6),
(35, 'Une compilation de GIFs avec du son !', 'KG73ANzoUhQ', '', 'Les meilleurs GIFs !', 'Miguel', 0, 0, 2, 7),
(36, 'Pourquoi les japonais ont t il pas de poney ?', '', '', 'Car il son déjà poney. (des japonais)', 'Miguel', 0, 0, 3, 1),
(37, 'Hollande', '', '', 'Ya un enfant en vélo il croise François Hollande à cheval et la Hollande dit :\r\n- Et! Petit, il est a toi ce vélo ?\r\n- Ben... Oui pourquoi ?\r\n- Haha,Pneus lisse et degonflés, 11€ d\'amande que tu donnera a tes parents.\r\n- D\'accord.....Et vous ! Il est a vous ce cheval ?\r\n- Et bien oui mon garçon. Pourquoi cette question ?\r\n- Ben normalement le trou du cul il est derrière pas sur son dos !', 'Miguel', 0, 0, 3, 1),
(38, 'Hahahaha ! C\'est génial !', '585d3a4e288f7.jpg', 'ChienHypno.jpg', 'Perso j\'ai pris plus de 2 minutes a comprendre se qui se passait !', 'Miguel', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `idSection` int(11) NOT NULL,
  `NomSection` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`idContenu`),
  ADD KEY `FK_Contenu_idCategorie` (`idCategorie`),
  ADD KEY `FK_Contenu_idSection` (`idSection`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`idSection`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `idContenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `idSection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `FK_Contenu_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `categories` (`idCategorie`),
  ADD CONSTRAINT `FK_Contenu_idSection` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
