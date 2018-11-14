-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 14, 2018 at 04:45 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdd-msh`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(11) NOT NULL,
  `id_piece` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `etat` int(11) NOT NULL,
  `numero_serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`id`, `id_piece`, `valeur`, `type`, `etat`, `numero_serie`) VALUES
(1, 1, 45, 'Humidité', 0, 12345),
(2, 1, 0, 'Lumière', 0, 1234),
(3, 1, 12, 'Température', 0, 123456),
(4, 2, 35, 'Humidité', 0, 12345),
(5, 3, 35, 'Humidité', 0, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

CREATE TABLE `logement` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `superficie` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `n_piece` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logement`
--

INSERT INTO `logement` (`id`, `nom`, `superficie`, `direccion`, `ciudad`, `codigo_postal`, `n_piece`, `id_utilisateur`) VALUES
(6, 'Test campo', 200, 'Juan Domingo Peron 1267', 'Buenos Aires', '12345', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE `piece` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `superficie` int(11) NOT NULL,
  `id_logement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `piece`
--

INSERT INTO `piece` (`id`, `nom`, `superficie`, `id_logement`) VALUES
(1, 'Chambre', 12, 1),
(2, 'Papas', 50, 1),
(3, 'Papas', 20, 6);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prénom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code_postal` int(11) NOT NULL,
  `pays` varchar(255) CHARACTER SET utf8 NOT NULL,
  `numero_tel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `nom`, `prénom`, `mail`, `mdp`, `adresse`, `ville`, `code_postal`, `pays`, `numero_tel`) VALUES
(6, 'jeanoo75', 'luc', 'jean', 'jean.thierry@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '34 rue des champs', 'Cassis', 13260, 'France', 654325467),
(7, 'LuLu_24', 'Gallix', 'Lucas', 'lucas.gallix@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '99 rue de la Faisanderie', 'Paris', 75116, 'France', 669053275),
(8, 'JujuDu78', 'Lembourg', 'Julie', 'julie.lembourg@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '6 Square de Grandschamps', 'Marly-Le-Roi', 78160, 'France', 601415820);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
