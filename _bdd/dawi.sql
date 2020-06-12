-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 12 juin 2020 à 08:46
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
  `matiere` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`enseignant_id`),
  KEY `fk_ens_usr_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`enseignant_id`, `edt`, `enseignant_note`, `matiere`, `user_id`) VALUES
(1, 'edt.pdf', 12, '', 5);

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
  KEY `fk_usr_ent_idx` (`user_id`)
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
  KEY `fk_etu_usr_idx` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`etu_id`, `note`, `edt`, `user_id`) VALUES
(1, '12', 'image.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id_statut` int(11) NOT NULL AUTO_INCREMENT,
  `sta_code` int(11) NOT NULL,
  `sta_lib` varchar(64) NOT NULL,
  PRIMARY KEY (`id_statut`),
  UNIQUE KEY `id_statut_UNIQUE` (`id_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id_statut`, `sta_code`, `sta_lib`) VALUES
(1, 1, 'anonyme'),
(2, 2, 'étudiant'),
(3, 4, 'entreprise'),
(4, 8, 'enseignant'),
(5, 16, 'personnel miaw');

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
  `user_pwd` varchar(256) NOT NULL,
  `fk_usr_statut` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `statut_idx` (`fk_usr_statut`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_prenom`, `user_nom`, `user_mail`, `user_pwd`, `fk_usr_statut`) VALUES
(1, 'Lucien', 'Cornu', 'a@a.com', 'mdp', 2),
(2, 'Neicul', 'Nuroc', 'b@b.net', 'pdm', 4),
(3, 'Luis', 'Grov', 'c@c.com', 'aza', 8),
(4, 'Guy', 'Chauvet', 'g@c.com', 'aza', 16),
(5, 'Ibrahima', 'Girault', 'i@g.com', 'azer', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `fk_ens_usr` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `fk_usr_ent` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_etu_usr` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
