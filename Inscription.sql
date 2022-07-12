-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2022 at 04:18 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Inscription`
--

-- --------------------------------------------------------

--
-- Table structure for table `fiche_inscription`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fiche_inscription`
--

INSERT INTO `fiche_inscription` (`id`, `prenom`, `nom`, `genre`, `email`, `email_confirmation`, `numero_téléphone`, `pays`, `niveau`, `thématique_choisie`, `campus_préféré`) VALUES
(1, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Anglophone-Accra'),
(2, 'laurent', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Bac+2', 'Energie', 'Campus Anglophone-Accra'),
(3, 'elom', 'komlan', ' Homme', 'elom@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Bac+2', 'Energie', 'Campus Anglophone-Accra'),
(4, 'sewenda', 'prudent', ' Homme', 'sewenda@gmail.com', 'sewenda@gmail.com', '228 90025230', '...', 'Bac+3', 'Energie', 'Campus Francophone-Lomé'),
(5, 'Elom', 'Laurent', ' Homme', 'laziagbenyo@gmail.com', 'sewenda@gmail.com', '228 90 02 52 30', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(6, 'Elom', 'Laurent', ' Homme', 'laziagbenyo@gmail.com', 'sewenda@gmail.com', '228 90 02 52 30', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(12, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(13, '', '', ' ', '', '', '', '', '', '', ''),
(14, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(15, 'Elom', 'Laurent', ' Homme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(16, 'Elom', 'Laurent', ' Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Bac+2', 'Energie', 'Campus Francophone-Lomé'),
(17, 'Elom', 'Laurent', 'Homme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(18, 'Elom', 'Laurent', 'Femme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(19, 'laurent', 'Laurent', 'Homme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Aucun diplome superieur', 'Energie', 'Campus Francophone-Lomé'),
(20, 'armel', 'majoie', 'Homme', 'laziagbenyo@gmail.com', 'laziagbenyo@gmail.com', '228 90025230', '...', 'Bac+4/5', 'Agri-busness', 'Campus Francophone-Lomé');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fiche_inscription`
--
ALTER TABLE `fiche_inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fiche_inscription`
--
ALTER TABLE `fiche_inscription`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
