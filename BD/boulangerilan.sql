-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 08 jan. 2023 à 22:34
-- Version du serveur : 8.0.29
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `image` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nom` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prix` float NOT NULL,
  `categorie` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `description`, `prix`, `categorie`) VALUES
(1, 'https://epiceries.imgix.net/spree/images/436333/large/Clarisse_-_2022-06-24T170208.111.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Pain au chocolat', 'Feuilleté et ses 2 barres de chocolat noir', 1.6, 'viennoiserie'),
(2, 'https://epiceries.imgix.net/spree/images/436304/large/Clarisse_-_2022-06-24T164520.291.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&mark=https%3A%2F%2Fepiceries.imgix.net%2Fwatermarks%2Fc80956c2-27e1-4ed0-9f39-0863fcb0ca0c%2Fimages%2FWatermark_Retour_Demain.png%3Fixlib%3Drails-4.2.0&markalign=bottom%2Cleft&markh=95&markpad=16&auto=format&ch=Width,DPR&w=1200', 'Chausson aux pommes', 'Feuilleté fourée à la compote de pommes', 2.3, 'viennoiserie'),
(3, 'https://epiceries.imgix.net/spree/images/436312/large/Clarisse_-_2022-06-24T165052.248.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Croissant au beurre', 'Feuilleté au bon beurre doux de Bretagne', 1.4, 'viennoiserie'),
(4, 'https://epiceries.imgix.net/spree/images/436337/large/Clarisse_-_2022-06-24T170343.409.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&mark=https%3A%2F%2Fepiceries.imgix.net%2Fwatermarks%2Fc80956c2-27e1-4ed0-9f39-0863fcb0ca0c%2Fimages%2FWatermark_Retour_Demain.png%3Fixlib%3Drails-4.2.0&markalign=bottom%2Cleft&markh=95&markpad=16&auto=format&ch=Width,DPR&w=1200', 'Pain aux raisins', 'Feuilleté crème patissière et ses raisins secs', 2.1, 'viennoiserie'),
(5, 'https://epiceries.imgix.net/spree/images/436292/large/Clarisse_-_2022-06-24T163913.326.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Baguette', 'Pain de tradition française.', 1.3, 'pain'),
(6, 'https://epiceries.imgix.net/spree/images/436294/large/Clarisse_-_2022-06-24T164003.415.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Baguette céréales', 'Tradition française aux céréales', 1.5, 'boulangerie'),
(7, 'https://epiceries.imgix.net/spree/images/436341/large/Clarisse_-_2022-06-24T170427.807.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Pain bûcheron', 'Délicieux pain au seigle et céréales.', 3.9, 'boulangerie'),
(8, 'https://epiceries.imgix.net/spree/images/436343/large/Clarisse_-_2022-06-24T170556.703.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Pain complet', 'Délicieux pain complet.', 3.9, 'boulangerie'),
(9, 'https://epiceries.imgix.net/spree/images/436365/large/Clarisse_-_2022-06-24T171920.136.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Tarte framboise', 'Tartelette garnie de framboise', 6, 'patisserie'),
(10, 'https://epiceries.imgix.net/spree/images/436311/large/Clarisse_-_2022-06-24T165026.738.png?ixlib=rails-4.2.0&auto=format%2Ccompress&fit=crop&crop=faces&auto=format&ch=Width,DPR&w=1200', 'Coffret de macarons', 'Assortiment de 16  macarons.', 25, 'patisserie');

-- --------------------------------------------------------

--
-- Structure de la table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `register`
--

INSERT INTO `register` (`id`, `username`, `password`) VALUES
(1, 'ilan', 'root');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
