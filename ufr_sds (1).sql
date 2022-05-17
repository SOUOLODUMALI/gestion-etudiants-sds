-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 17 mai 2022 à 21:20
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ufr_sds`
--

-- --------------------------------------------------------

--
-- Structure de la table `cobine`
--

CREATE TABLE `cobine` (
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `date_de_naissance` date NOT NULL,
  `filiere` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` int(11) NOT NULL,
  `informatio_du_tuteur` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cobine`
--

INSERT INTO `cobine` (`nom`, `prenom`, `email`, `date_de_naissance`, `filiere`, `telephone`, `informatio_du_tuteur`) VALUES
('oued', 'dsfhvgbdshf', 'dfgbyef@aff', '2000-06-14', 'avc', 345666466, 67788990);

-- --------------------------------------------------------

--
-- Structure de la table `sds_admin`
--

CREATE TABLE `sds_admin` (
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sds_admin`
--

INSERT INTO `sds_admin` (`nom`, `Prenom`, `telephone`, `email`, `pass`) VALUES
('simplon', 'ffgjh', 789890, 'art@gmail.com', '1212'),
('keita', 'gaoussou', 789890, 'am@gmail.com', '12345'),
('simplon', 'nassan', 545456678, 'nad@gmail.com', '3443');

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE `tuteur` (
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tuteur`
--

INSERT INTO `tuteur` (`nom`, `prenom`, `email`, `telephone`) VALUES
('papa', 'LOYARA', 'afo@gmail.com', 789890),
('simplon', 'LOYARA', 'bedjick@gmail.com', 67788990),
('ADA', 'nassan', 'dgfhgjhkj@gmail.com', 5700003);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cobine`
--
ALTER TABLE `cobine`
  ADD PRIMARY KEY (`nom`),
  ADD KEY `information_du_tuteur` (`informatio_du_tuteur`),
  ADD KEY `informatio_du_tuteur` (`informatio_du_tuteur`);

--
-- Index pour la table `sds_admin`
--
ALTER TABLE `sds_admin`
  ADD PRIMARY KEY (`Prenom`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Index pour la table `tuteur`
--
ALTER TABLE `tuteur`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cobine`
--
ALTER TABLE `cobine`
  ADD CONSTRAINT `cobine_ibfk_1` FOREIGN KEY (`informatio_du_tuteur`) REFERENCES `tuteur` (`telephone`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
