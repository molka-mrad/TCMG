-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 29 nov. 2019 à 08:43
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
-- Base de données :  `tcmg`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  `img` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=994 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `contenu`, `img`) VALUES
(789, 'Titre de l\'actualite', 'ceci est le contenu de l\'actualite. Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', 'images/actu.jpg'),
(8, 'lp', 'lp', 'images/actu.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

DROP TABLE IF EXISTS `evenements`;
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) NOT NULL,
  `descrip` text NOT NULL,
  `dateDeb` date NOT NULL,
  `dateFin` date NOT NULL,
  `nbParticip` int(3) NOT NULL,
  `lieux` varchar(30) NOT NULL,
  `img` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `libelle`, `descrip`, `dateDeb`, `dateFin`, `nbParticip`, `lieux`, `img`) VALUES
(8, 'Titre de l\'evenement', 'Desricption de l\'evenement. Bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla', '2019-11-01', '2019-11-02', 1, 'Tennis club de megrine', 'images/actu.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

DROP TABLE IF EXISTS `formateurs`;
CREATE TABLE IF NOT EXISTS `formateurs` (
  `cin` int(8) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `tel` int(8) NOT NULL,
  `age` int(3) NOT NULL,
  `inscription` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `img` varchar(25) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`cin`, `nom`, `prenom`, `tel`, `age`, `inscription`, `email`, `img`) VALUES
(789, 'lakabou', 'esmou', 987, 88, '2019-11-29', 'meljfekl', 'images/formateur.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `cin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `inscription` date NOT NULL,
  `abonnement` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `paiement` tinyint(1) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`cin`, `nom`, `prenom`, `tel`, `age`, `inscription`, `abonnement`, `email`, `mdp`, `paiement`, `role`) VALUES
(1234567, 'azi', 'azi', 5583997, 2, '2019-11-01', '2019-11-02', 'hammamiaziz00@hotmail.com', 'azi', 1, 'abonne'),
(8484484, '', '', 0, 0, '0000-00-00', '0000-00-00', 'hammamiaziz200@hotmail.com', 'aziz', 0, 'membre'),
(848488484, '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', 0, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123', '2016-04-12 20:57:17', 'admin'),
(2, 'Amina', 'amina@esprit.tn', 'bbb', '2016-04-12 21:21:42', 'abonne');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `cin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `inscription` date NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`cin`, `nom`, `prenom`, `tel`, `age`, `inscription`, `mdp`, `email`, `role`) VALUES
(12345678, 'aziz', 'aziz', 55839979, 25, '2019-11-27', 'aziz', 'hammamiaziz200@hotmail.com', 'visiteur'),
(69696969, 'azizaziz', 'azizaziza', 55839979, 25, '2019-11-27', 'aziz', 'hammamiaziz@hotmail.com', 'visiteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
