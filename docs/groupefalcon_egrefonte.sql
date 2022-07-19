-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql-groupefalcon.alwaysdata.net
-- Généré le : jeu. 14 juil. 2022 à 01:29
-- Version du serveur : 10.6.7-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `groupefalcon_egrefonte`
--

-- --------------------------------------------------------

--
-- Structure de la table `fiche_inscription`
--

CREATE TABLE `fiche_inscription` (
  `id` int(70) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `nom` varchar(70) NOT NULL,
  `genre` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `email_confirmation` varchar(70) NOT NULL,
  `numero_téléphone` varchar(70) NOT NULL,
  `pays` varchar(70) NOT NULL,
  `niveau` varchar(70) NOT NULL,
  `thématique_choisie` varchar(70) NOT NULL,
  `campus_préféré` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `fiche_inscription`
--

INSERT INTO `fiche_inscription` (`id`, `prenom`, `nom`, `genre`, `email`, `email_confirmation`, `numero_téléphone`, `pays`, `niveau`, `thématique_choisie`, `campus_préféré`) VALUES
(1, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Anglophone-Accra'),
(15, 'Elom', 'Laurent', ' Homme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(16, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Bac+2', 'Energie', 'Campus Francophone-Lomé'),
(17, 'fale', 'Fale', 'Homme', 'az@gmail.com', 'az@gmail.com', '+22899889988', 'Bénin', '', 'Campus Francophone-Lomé', ''),
(18, 'fale', 'Fale', 'Femme', 'az@gmail.com', 'az@gmail.com', '+22899889988', 'Érythrée', '', 'Campus Francophone-Lomé', ''),
(19, 'ssssss', 'ssddddd', 'Homme', 'ddd@gmail.com', 'ddd@gmail.com', '21212123344', 'Angola', '', 'Campus Francophone-Lomé', '');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nos_conditions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `names`, `email`, `nos_conditions`) VALUES
(1, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(2, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(3, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(4, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(5, 'userAdmin', 'jkjdkj@gmail.com', 'Oui'),
(6, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(7, 'Fale', 'jkjdkj@gmail.com', 'Oui'),
(8, 'FASIFEL', 'jkjdkj@gmail.com', 'Oui'),
(9, 'Bold', 'fale@gmail.com', 'Oui'),
(10, 'Eliowall23', 'elvioadjoh06@gmail.com', 'Oui'),
(11, 'userAdmin', 'elvj@gmail.com', 'Oui'),
(12, 'FASIFEL', 'jkjdkj@gmail.com', 'Oui'),
(13, 'userAdmin', 'falefelix23@gmail.com', 'Oui'),
(14, 'fal', 'jkjdkj@gmail.com', 'Oui'),
(15, 'yy', 'sewendatchaou@gmail.com', 'Oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche_inscription`
--
ALTER TABLE `fiche_inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche_inscription`
--
ALTER TABLE `fiche_inscription`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
