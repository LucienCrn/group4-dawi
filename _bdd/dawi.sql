-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 juin 2020 à 14:25
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dawi`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `enseignant_id` int(11) NOT NULL AUTO_INCREMENT,
  `edt` varchar(100) NOT NULL,
  `enseignant_note` float NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`enseignant_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`enseignant_id`, `edt`, `enseignant_note`, `user_id`) VALUES
(1, 'edt.pdf', 12, 5);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `entreprise_id` int(11) NOT NULL AUTO_INCREMENT,
  `pt` varchar(256) NOT NULL,
  `offrealternance` varchar(256) NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`entreprise_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`entreprise_id`, `pt`, `offrealternance`, `user_id`) VALUES
(1, 'fichierpt.txt', 'fichier.txt', 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `etu_id` int(100) NOT NULL AUTO_INCREMENT,
  `note` varchar(150) NOT NULL,
  `edt` varchar(150) NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`etu_id`),
  KEY `user_id` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`etu_id`, `note`, `edt`, `user_id`) VALUES
(1, '12', 'image.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_prenom` varchar(100) NOT NULL,
  `user_nom` varchar(100) NOT NULL,
  `user_mail` varchar(150) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_prenom`, `user_nom`, `user_mail`, `user_pwd`) VALUES
(1, 'Lucien', 'Cornu', 'a@a.com', 'mdp'),
(2, 'Neicul', 'Nuroc', 'b@b.net', 'pdm'),
(5, 'Luis', 'Grov', 'c@c.com', 'a');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `user id enseignant` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `user id entreprise` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `user id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
