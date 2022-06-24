-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 11:01
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `databasesamar`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Auteur` varchar(50) NOT NULL,
  `Date_publication` date NOT NULL,
  `Texte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `Titre`, `Auteur`, `Date_publication`, `Texte`) VALUES
(5, 'PHP', 'Wikipédia', '2022-06-04', 'Hypertext Preprocessor, mieux connu sous son acronyme PHP, est un langage de script dérivé des langages C et Perl. Il est utilisé principalement pour programmer des pages Webetdes applications Internet dynamiques.'),
(6, 'Python', 'Wikipédia', '2022-06-02', 'Python est un langage de programmation dit « évolué » qui se fonde sur un code à la fois compact et compréhensible. Python est également facile à exploiter ; par exemple, son indentation permet de délimiter les blocs de code par des espaces plutôt que par des symboles. C’est pour cela que ce langage est considéré comme agréable à apprendre et à utiliser.'),
(28, 'Java', 'Wikipédia', '2022-06-02', 'Le Java est un langage de programmation open source, indépendant de toute plateforme. Sa polyvalence en fait une option pour presque tous les types de projets. Comme la plupart des langages de programmation Web les plus courants, il est en paradigme orienté objet, ce qui signifie qu’il se détermine en fonction de son champ d’application concret. Un très grand nombre de bibliothèques et de frameworks Web généralement bien fournis et détaillés sont disponibles pour faciliter la réalisation de projets très complexes. En outre, les programmes écrits en Java sont extensibles, évolutifs et faciles à entretenir, sous réserve que le programmeur connaisse son métier.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
