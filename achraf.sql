-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 22 Septembre 2017 à 11:07
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `achraf`
--

-- --------------------------------------------------------

--
-- Structure de la table `tele`
--

CREATE TABLE `tele` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `tele` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tele`
--

INSERT INTO `tele` (`id`, `nom`, `prenom`, `tele`) VALUES
(1, 'ttt', 'jhk', 'kihjk'),
(2, 'dsqf', 'zdf', 'zfd'),
(3, 'achraf', 'HAZIME', '12345678'),
(4, 'wassim', 'HAZIME', 'yassin'),
(5, 'wassim', 'HAZIME', 'yassin'),
(6, 'wa', 'wa', 'wa');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tele`
--
ALTER TABLE `tele`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tele`
--
ALTER TABLE `tele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
