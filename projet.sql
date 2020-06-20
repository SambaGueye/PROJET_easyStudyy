-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 20 juin 2020 à 14:01
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idUser` int(255) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idUser`, `prenom`, `nom`, `email`, `password`, `avatar`) VALUES
(1, 'Samba', 'GUEYE', 'sambahathagueyee@gmail.com', '12345', '1.jpg'),
(3, 'Moustapha ', 'Ka', 'moustapha@gmail.com', '1234', ''),
(4, 'Macky ', 'Sall', 'macky@gmail.com', '123456', ''),
(5, 'Moussa', 'SALL', 'moussa@gmail.com', '1234', '5.jpeg'),
(6, 'Sophia', 'Nachin', 'sophianachin@gmail.com', 'sophia', '');

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int(255) NOT NULL,
  `nomT` varchar(255) NOT NULL,
  `descriptionT` varchar(255) NOT NULL,
  `idUser` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `nomT`, `descriptionT`, `idUser`) VALUES
(3, 'Rapport IHM ', 'Terminer la liste de taches utilisateurs\r\nFaire le prototype moyenne fidÃ©litÃ© sur Balsamiq', 3),
(7, 'Senegal', 'fais le', 4),
(9, 'hey', 'hey', 4),
(20, 'moi', 'c\'est moi\r\n', 4),
(21, 'une tache', 'khslkas ojsjgdgf;ousdg[fgwf sps9ugfpusd dsp9ugcas9udtgf[w s9pdfgaspw dp9sdgfouavf pas9d8gs s9gdu9gsdjovbosd pugsdugwa', 4),
(22, 'une tache 3', 'kdogsdu usavbfiuuadgp9f8aij uvsdcuvsc p9saudgf08s ;pOAiyae9w o;jjozxbc8gasd ;osoudg[u0fwf', 4),
(24, 'Exo Maths', 'Faire les exo 21 et 22 avant le prochain cours ', 5),
(47, 'ContrÃ´le de maths', 'Lundi prochain', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idUser`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tache_membre` (`idUser`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idUser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
