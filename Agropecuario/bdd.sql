-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 17 Mai 2017 à 11:38
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BDD-MSH`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
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
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `nom`, `prénom`, `mail`, `mdp`, `adresse`, `ville`, `code_postal`, `pays`, `numero_tel`) VALUES
(6, 'jeanoo75', 'luc', 'jean', 'jean.thierry@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '34 rue des champs', 'Cassis', 13260, 'France', 654325467),
(7, 'LuLu_24', 'Gallix', 'Lucas', 'lucas.gallix@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '99 rue de la Faisanderie', 'Paris', 75116, 'France', 669053275),
(8, 'JujuDu78', 'Lembourg', 'Julie', 'julie.lembourg@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '6 Square de Grandschamps', 'Marly-Le-Roi', 78160, 'France', 601415820);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;