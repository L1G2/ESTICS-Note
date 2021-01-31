-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 31 jan. 2021 à 13:30
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `idClasse`, `nomEtudiant`, `prenomEtudiant`) VALUES
(1, 1, 'RAJAONARIVONY', 'Rivo Lalaina'),
(2, 1, 'BOTORAVONY', 'Arlème Johnson'),
(3, 1, 'TAFITASOA', ' FABRICE'),
(4, 1, 'RAKOTOARISON', 'Tahaiana'),
(5, 1, 'MANAMBINA', 'Miharintsoa'),
(6, 1, 'RAJAOANARIVOSONA', 'Tsiaro'),
(7, 1, 'MANAFIKA', 'Foyer');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `nomMatiere` varchar(100) NOT NULL,
  `codeMatiere` varchar(50) NOT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idMatiere`, `nomMatiere`, `codeMatiere`) VALUES
(1, 'BASE DE DONNEES RELATIONNELLES', 'INFO_255'),
(2, 'LANGAGE DE PROGRAMMATION DYNAMIQUE', 'MATHS_2225');

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
  `semestreNote` int(11) NOT NULL,
  `coeffNote` int(11) NOT NULL,
  PRIMARY KEY (`idNote`),
  KEY `idEtudiant` (`idEtudiant`),
  KEY `idRaison` (`idRaison`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idNote`, `idEtudiant`, `idMatiere`, `idRaison`, `valeurNote`, `dateNote`, `semestreNote`, `coeffNote`) VALUES
(30, 3, 1, 2, 17, '2021-01-04', 1, 8),
(29, 2, 1, 2, 15, '2021-01-04', 1, 8),
(28, 1, 1, 2, 12, '2021-01-04', 1, 8),
(31, 4, 1, 2, 14, '2021-01-04', 1, 8),
(27, 7, 1, 1, 2, '2021-01-04', 1, 4),
(26, 6, 1, 1, 14, '2021-01-04', 1, 4),
(25, 5, 1, 1, 12, '2021-01-04', 1, 4),
(24, 4, 1, 1, 14, '2021-01-04', 1, 4),
(23, 3, 1, 1, 17, '2021-01-04', 1, 4),
(22, 2, 1, 1, 15, '2021-01-04', 1, 4),
(21, 1, 1, 1, 12, '2021-01-04', 1, 4),
(32, 5, 1, 2, 12, '2021-01-04', 1, 8),
(33, 6, 1, 2, 14, '2021-01-04', 1, 8),
(34, 7, 1, 2, 2, '2021-01-04', 1, 8),
(35, 1, 1, 1, 12, '2021-01-20', 2, 8),
(36, 2, 1, 1, 15, '2021-01-20', 2, 8),
(37, 3, 1, 1, 17, '2021-01-20', 2, 8),
(38, 4, 1, 1, 14, '2021-01-20', 2, 8),
(39, 5, 1, 1, 12, '2021-01-20', 2, 8),
(40, 6, 1, 1, 14, '2021-01-20', 2, 8),
(41, 7, 1, 1, 2, '2021-01-20', 2, 8),
(42, 1, 1, 1, 12, '2021-01-20', 2, 8),
(43, 2, 1, 1, 15, '2021-01-20', 2, 8),
(44, 3, 1, 1, 17, '2021-01-20', 2, 8),
(45, 4, 1, 1, 14, '2021-01-20', 2, 8),
(46, 5, 1, 1, 12, '2021-01-20', 2, 8),
(47, 6, 1, 1, 14, '2021-01-20', 2, 8),
(48, 7, 1, 1, 2, '2021-01-20', 2, 8),
(49, 1, 1, 2, 15, '2021-01-06', 2, 8),
(50, 2, 1, 2, 12, '2021-01-06', 2, 8),
(51, 3, 1, 2, 11, '2021-01-06', 2, 8),
(52, 4, 1, 2, 12, '2021-01-06', 2, 8),
(53, 5, 1, 2, 14, '2021-01-06', 2, 8),
(54, 6, 1, 2, 15, '2021-01-06', 2, 8),
(55, 7, 1, 2, 15, '2021-01-06', 2, 8);

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
