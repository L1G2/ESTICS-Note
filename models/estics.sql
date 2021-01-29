-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 29 jan. 2021 à 18:56
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `note_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `idClasse` int(11) NOT NULL AUTO_INCREMENT,
  `nomClasse` varchar(100) NOT NULL,
  PRIMARY KEY (`idClasse`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`idClasse`, `nomClasse`) VALUES
(1, 'L1G2'),
(2, 'L1G1');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `idEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `idMatiere` int(11) NOT NULL,
  `nomEnseignant` char(100) NOT NULL,
  `prenomEnseignant` varchar(100) NOT NULL,
  `emailEnseignant` varchar(50) NOT NULL,
  `mdpEnseignant` varchar(50) NOT NULL,
  PRIMARY KEY (`idEnseignant`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`idEnseignant`, `idMatiere`, `nomEnseignant`, `prenomEnseignant`, `emailEnseignant`, `mdpEnseignant`) VALUES
(1, 1, 'RAKOTOARISON', 'Nirina Jean Claude', 'nirina@esti.mg', '1234'),
(2, 2, 'RAZAKASON', 'Marie Rochelle', 'rocheellle@esti.mg', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `idClasse` int(11) NOT NULL,
  `nomEtudiant` char(100) NOT NULL,
  `prenomEtudiant` char(100) NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  KEY `idClasse` (`idClasse`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `idClasse`, `nomEtudiant`, `prenomEtudiant`) VALUES
(1, 1, 'RAJAONARIVONY', 'Rivo Lalaina'),
(2, 1, 'BOTORAVONY', 'Arlème Johnson');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(100) NOT NULL,
  `coeffMatiere` int(11) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idMatiere`, `nomMatiere`, `coeffMatiere`) VALUES
(1, 'BASE DE DONNEES RELATIONNELLES', 4),
(2, 'LANGAGE DE PROGRAMMATION DYNAMIQUE', 3);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idNote` int(11) NOT NULL AUTO_INCREMENT,
  `idEtudiant` int(11) NOT NULL,
  `idMatiere` int(11) NOT NULL,
  `idRaison` int(11) NOT NULL,
  `valeurNote` int(20) NOT NULL,
  `dateNote` date NOT NULL,
  PRIMARY KEY (`idNote`),
  KEY `idEtudiant` (`idEtudiant`),
  KEY `idRaison` (`idRaison`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idNote`, `idEtudiant`, `idMatiere`, `idRaison`, `valeurNote`, `dateNote`) VALUES
(1, 1, 1, 1, 18, '2021-01-05'),
(2, 1, 1, 2, 4, '2021-01-11'),
(3, 2, 1, 1, 18, '2021-01-18'),
(4, 2, 1, 2, 20, '2021-01-15');

-- --------------------------------------------------------

--
-- Structure de la table `raison`
--

DROP TABLE IF EXISTS `raison`;
CREATE TABLE IF NOT EXISTS `raison` (
  `idRaison` int(11) NOT NULL AUTO_INCREMENT,
  `nomRaison` varchar(100) NOT NULL,
  PRIMARY KEY (`idRaison`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `raison`
--

INSERT INTO `raison` (`idRaison`, `nomRaison`) VALUES
(1, 'Contrôle continue'),
(2, 'Examen final');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
