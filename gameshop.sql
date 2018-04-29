-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 29 avr. 2018 à 13:25
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gameshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `user_id`, `status_id`) VALUES
(1, 6, 3),
(2, 7, 3),
(3, 4, 3),
(4, 5, 3),
(5, 3, 1),
(6, 8, 3),
(7, 4, 3),
(8, 8, 3),
(9, 4, 3);

-- --------------------------------------------------------

--
-- Structure de la table `book_item`
--

CREATE TABLE `book_item` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `book_item`
--

INSERT INTO `book_item` (`id`, `book_id`, `item_id`, `price`) VALUES
(2, 2, 4, 38.99),
(3, 3, 5, 64.99),
(4, 3, 6, 39.99),
(5, 4, 7, 39.99),
(6, 4, 7, 39.99),
(7, 4, 6, 39.99),
(9, 5, 3, 69.99),
(10, 6, 3, 69.99),
(11, 1, 8, 13.99),
(12, 1, 9, 59.99),
(13, 1, 10, 15.99),
(14, 2, 12, 39.99),
(15, 2, 9, 59.99),
(16, 7, 10, 15.99),
(17, 8, 11, 49.99),
(18, 8, 11, 49.99),
(19, 9, 3, 69.99),
(20, 9, 3, 69.99),
(21, 9, 3, 69.99),
(22, 9, 3, 69.99),
(23, 9, 6, 39.99),
(24, 9, 6, 39.99),
(25, 9, 6, 39.99),
(26, 9, 7, 39.99),
(27, 9, 7, 39.99),
(28, 9, 9, 59.99);

-- --------------------------------------------------------

--
-- Structure de la table `info_item`
--

CREATE TABLE `info_item` (
  `id` int(11) NOT NULL,
  `editor` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `info_item`
--

INSERT INTO `info_item` (`id`, `editor`, `type`, `item_id`) VALUES
(1, 'Activision', 'Action, FPS, Shooter', 3),
(2, 'Visual Concepts', 'Sport', 4),
(3, 'Ubisoft Montreal', ' Action, FPS, Infiltration', 5),
(4, 'Electronic Arts', 'FPS', 6),
(5, 'Destination Software', 'Action', 7);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `title`, `price`) VALUES
(3, 'CALL OF DUTY : WW2', 69.99),
(4, 'NBA 2K18', 38.99),
(5, 'FAR CRY 5', 64.99),
(6, 'STAR WARS BATTLEFRONT II', 39.99),
(7, 'NEED FOR SPEED PAYBACK', 39.99),
(8, 'Okami HD', 13.99),
(9, 'Dragon Ball FighterZ', 59.99),
(10, 'Wolfenstein: The Old Blood', 15.99),
(11, 'Assassin\'s Creed Origins', 49.99),
(12, 'Destiny 2', 39.99);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'attente'),
(2, 'payee'),
(3, 'validee');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role_id`) VALUES
(1, 'Admin', '$2y$10$MXT2zHxb3hh06WsB7zFi4ezTPLca4SA3DNh/3d1rRJ7zPi2QTr2o6', 1),
(2, 'nouveau', '$2y$10$B6hXzjLETWNsahEBD/hoFuqWK0UE2DfQMVUxce.Z11U7.ee1..1Am', 2),
(3, 'test', '$2y$10$sX88nCn2UlL8Y0e/klNLFeJ0kHtpMQ3ZZ482rTD2j8qmj2DLH1q.C', 2),
(4, 'new', '$2y$10$xEM95wH/pVY71/V0ZipfnOtjMqYyqZN.pUSmL8JrImkpYWL6ZIerm', 2),
(5, 'newtest', '$2y$10$tCBwU2OuMpQFMJN2WgAskuoCBwjm4HU/Agh9Xw3HUt54E2METnXNy', 2),
(6, 'compte', '$2y$10$xFTVhaM.lgt/KNV12dEgbercLx2z2ZlPSezDVqhWlSIdYkoSD9KC2', 2),
(7, 'gaetan', '$2y$10$0rrXCWXVKavHhE5jqTuZ6uXaFxkx41hgqwFdmGpUl.P6GXcU3QkQe', 2),
(8, 'yolo', '$2y$10$ELj0h7U8ZZefaEmmjmVWyuENWyBUIHaZSIj6RtWfjPcEamRcdYR1a', 2),
(9, 'testmdp', '$2y$10$KomPnzrgA93Rra0Flmd5H.7i9Bn7LyiGss4m7FR.cJSXKQmw9rJ0G', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Index pour la table `book_item`
--
ALTER TABLE `book_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Index pour la table `info_item`
--
ALTER TABLE `info_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_ibfk_1` (`item_id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `book_item`
--
ALTER TABLE `book_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `info_item`
--
ALTER TABLE `info_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Contraintes pour la table `book_item`
--
ALTER TABLE `book_item`
  ADD CONSTRAINT `book_item_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`),
  ADD CONSTRAINT `book_item_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `info_item`
--
ALTER TABLE `info_item`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
