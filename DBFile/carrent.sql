-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 26 mai 2020 à 20:54
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence_de_loyer_auto`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'admin10', 'alabenmed583@gmail.com', '$2y$10$t8EtTAi025kaRdnLJpMB0O47dLC7UVgfZhSwOksTsyC3.8MGgjNHy'),
(2, 'admin2', 'ala.benmohamed@esen.tn', '$2y$10$A2Y5X1QNYE0BJfPkFKZxd.my6AsNoRP4izIaCezn151lE.t2Vrroa'),
(3, 'admin5', 'admin555@gmail.com', 'ab4f63f9ac65152575886860dde480a1');

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id_agence` int(11) NOT NULL,
  `pseudo_ag` tinytext NOT NULL,
  `nom_agence` tinytext NOT NULL,
  `mail_ag` tinytext NOT NULL,
  `tel_ag` text NOT NULL,
  `adress_agence` tinytext NOT NULL,
  `dmd` varchar(32) NOT NULL,
  `pwd_ag` longtext NOT NULL,
  `id_admin_ag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id_agence`, `pseudo_ag`, `nom_agence`, `mail_ag`, `tel_ag`, `adress_agence`, `dmd`, `pwd_ag`, `id_admin_ag`) VALUES
(10, 'azerty22', 'azerty', 'azertyyy@gmail.com', '22544665', '13 rue hamam bourguiba sidi hassine', '', 'e1eba9bbbb04da14e0f0b1cec9eea708', 0),
(11, 'iphone4', 'iphone', 'iphoneee@gmail.com', '55455444', '13 rue iphone', 'Accepter', 'f4b4ea96b35c0c7eb8b4cc105c81595b', 0),
(13, 'Khaled2', 'SassiAuto', 'khaledsassi22@gmail.com', '52445541', '13 hamam bourguiba Soukra', 'Accepter', '0b7639be4f6aa9656b5a7f42b23aec6f', 3),
(14, 'Khaled22', 'SassiAuto2', 'khaledsassi2222@gmail.com', '52445545', '13 hamam bourguiba Soukraa', 'Refuser', '4fd2fefafbf932894746807a2ee9803b', 3),
(15, 'testt33', 'testtest', 'testtest@gmail.com', '72544488', '13 hamam bourguiba Soukraa', 'Accepter', '19f8ab3a56afbae8ad21100c36076f27', 3);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `pseudo_c` tinytext NOT NULL,
  `nom_c` tinytext NOT NULL,
  `prenom_c` tinytext NOT NULL,
  `email_c` tinytext NOT NULL,
  `numtel_c` tinytext NOT NULL,
  `pwd_c` longtext NOT NULL,
  `id_admin_cl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `pseudo_c`, `nom_c`, `prenom_c`, `email_c`, `numtel_c`, `pwd_c`, `id_admin_cl`) VALUES
(27, 'Alaa2', 'Ben Mohamed', 'Ala', 'alabenmed22@gmail.com', '22331144', '62159f0c311d985275f4e00bf38ff868', 3),
(28, 'hosni22', 'Hosni', 'Houssem', 'houssemhosni22@gmail.com', '25445477', 'cc503b0b6f89aaf9de5ec5dc1995c810', 3);

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `id_contrat` int(11) NOT NULL,
  `date_ret` date NOT NULL,
  `total_prix` double NOT NULL,
  `statut_op` varchar(32) NOT NULL,
  `id_reser` int(11) NOT NULL,
  `id_voiture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`id_contrat`, `date_ret`, `total_prix`, `statut_op`, `id_reser`, `id_voiture`) VALUES
(373, '2020-05-16', 144, 'En attent', 432, 140),
(375, '2020-05-19', 300, 'Accepter', 434, 143),
(376, '2020-05-18', 160, 'Annuler', 435, 142),
(377, '2020-05-17', 80, 'Accepter', 436, 142),
(378, '2020-05-20', 208, 'Annuler', 437, 144),
(379, '2020-05-22', 240, 'Annuler', 438, 145),
(380, '2020-05-28', 208, 'Annuler', 439, 144);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reser` int(11) NOT NULL,
  `date_de_depart` date NOT NULL,
  `nbjour` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reser`, `date_de_depart`, `nbjour`, `id_client`) VALUES
(432, '2020-05-14', 2, 27),
(433, '2020-05-14', 3, 27),
(434, '2020-05-14', 5, 28),
(435, '2020-05-16', 2, 27),
(436, '2020-05-16', 1, 27),
(437, '2020-05-16', 4, 27),
(438, '2020-05-19', 3, 27),
(439, '2020-05-24', 4, 27);

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `id_voiture` int(11) NOT NULL,
  `marque` tinytext NOT NULL,
  `description` tinytext NOT NULL,
  `immat` tinytext NOT NULL,
  `prix_parj` tinytext NOT NULL,
  `genre` varchar(64) NOT NULL,
  `img` varchar(200) NOT NULL,
  `statut` varchar(21) NOT NULL,
  `id_agence_voit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id_voiture`, `marque`, `description`, `immat`, `prix_parj`, `genre`, `img`, `statut`, `id_agence_voit`) VALUES
(142, 'Golf 7 ', 'Golf 7  4 Portes TSI', '201 Tun 5411', '80', 'Intermediaire', 'Imageuploads/golf7.jpg', 'Occupee', 11),
(143, 'Symbole 2020', 'Symbole 4 porte, ... :) ', '201 Tun 5452', '60', 'Economique', 'Imageuploads/29925.jpg', 'Occupee', 11),
(145, 'Jetta', 'Jetta 2020 Familliale 4 porte', '205 Tun 6544', '80', 'Intermediaire', 'Imageuploads/Jetta-2018.jpg', 'Libre', 11),
(146, 'Ford', 'Ford Fiesta 4 Porte', '170 Tun 5477', '65', 'Economique', 'Imageuploads/ford-fiesta_5.jpg', 'Libre', 11),
(147, 'Renault', 'Renault clio Familliale', '203 Tun 5441', '70', 'Intermediaire', 'Imageuploads/Renault_Clio_2019_17590-1600-1108.jpg', 'Libre', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idUsers`);

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id_agence`),
  ADD KEY `id_admin_ag` (`id_admin_ag`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `id_admin_cl` (`id_admin_cl`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id_contrat`),
  ADD KEY `id_client_transact` (`id_reser`),
  ADD KEY `id_voiture_transact` (`id_voiture`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reser`),
  ADD KEY `id_client_l` (`id_client`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`id_voiture`),
  ADD KEY `id_agence_voit` (`id_agence_voit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id_agence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id_contrat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=381;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=440;

--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id_voiture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
