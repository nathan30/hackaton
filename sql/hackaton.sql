-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Avril 2017 à 17:18
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackaton`
--

-- --------------------------------------------------------

--
-- Structure de la table `alcohol_category`
--

CREATE TABLE `alcohol_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `alcohol_category`
--

INSERT INTO `alcohol_category` (`id`, `category`) VALUES
(1, 'rouges'),
(2, 'blancs'),
(3, 'roses');

-- --------------------------------------------------------

--
-- Structure de la table `food_category`
--

CREATE TABLE `food_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `food_category`
--

INSERT INTO `food_category` (`id`, `label`) VALUES
(1, 'entree'),
(2, 'plat'),
(3, 'dessert');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `label`, `cat_id`) VALUES
(1, 'Foie-gras de canard aux poires, crumble pain d''épices, caramel de passion', 1),
(2, 'Fondu de camenbert, framboises, échalotes, salade de jeunes pousses, huile au curry', 1),
(3, 'Tartare de poisson, betteraves farcies au fromage frais, vinaigrette de soja', 1),
(4, 'Nougat au fromage de chèvre et pistaches, consommé de concombre, pétales de tomates confites', 1),
(5, 'Oeuf en "chaud-froid", brouillade d''oeuf au chorizo, mousseline d''oeuf, crumble de parmesan', 1),
(6, 'Nems de boudin noir aux pommes, sauce légèrement pimentée', 2),
(7, 'Parmentier de légumes, lentilles, fèves, céleri, chèvre frais, concassé de tomates', 2),
(8, 'Magret de canard, porto, beure d''amandes, purée d''oignons à la verveine', 2),
(9, 'Dos de cabillaud, crème de haricot coco, marmelade de chorizo', 2),
(10, 'Côtes de porcelet juste grillée, sauce massala, lait de coco, curry rouge, gingembre et citronnelle', 2),
(11, 'Poire pochée, sauce chocolat au thé earl grey, fondant au café léger', 3),
(12, 'Cheesecake vanille et spéculos, gel de clémentines, éclats de sablé aux amandes, crème glacé au lait d''amandes', 3),
(13, 'Autour du citron, mousse au citron jaune, gel de citron vert, moelleux au citron yuzu, glace au yaourt', 3),
(14, 'Soupe d''ananas au gingembre et vanille bourbon, crémeux à la châtaigne', 3);

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` text NOT NULL,
  `cat_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menus`
--

INSERT INTO `menus` (`id`, `label`, `cat_id`) VALUES
(1, 'Foie-gras de canard aux poires, crumble pain d''épices, caramel de passion', 1),
(2, '&&&&&ééééé', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Nathan', 'Cheval', 'nathavignon@hotmail.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `alcohol_category`
--
ALTER TABLE `alcohol_category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `food_category`
--
ALTER TABLE `food_category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `alcohol_category`
--
ALTER TABLE `alcohol_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
