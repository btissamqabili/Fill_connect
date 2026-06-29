-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 juin 2026 à 11:11
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fitconnect`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `id_abonnement` int(11) NOT NULL,
  `type_abonnement` enum('Mensuel','Trimestriel','Annuel') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_adherent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`id_abonnement`, `type_abonnement`, `date_debut`, `date_fin`, `id_adherent`) VALUES
(11, 'Mensuel', '2026-06-01', '2026-06-30', 80),
(12, 'Annuel', '2026-01-01', '2026-12-31', 81),
(13, 'Trimestriel', '2026-05-01', '2026-07-31', 82),
(14, 'Mensuel', '2026-06-10', '2026-07-09', 83),
(15, 'Annuel', '2026-03-01', '2027-02-28', 84),
(16, 'Trimestriel', '2026-04-15', '2026-07-14', 85),
(17, 'Mensuel', '2026-06-15', '2026-07-14', 86),
(18, 'Annuel', '2026-02-01', '2027-01-31', 87),
(19, 'Trimestriel', '2026-06-01', '2026-08-31', 88),
(20, 'Mensuel', '2026-06-20', '2026-07-19', 89);

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `id_adherent` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`id_adherent`, `nom`, `prenom`, `telephone`, `email`, `id_salle`) VALUES
(80, 'Alaoui', 'Ahmed', '0612345678', 'ahmed@gmail.com', 9),
(81, 'Bennani', 'Sara', '0623456789', 'sara@gmail.com', 10),
(82, 'El Idrissi', 'Youssef', '0634567891', 'youssef@gmail.com', 9),
(83, 'Tazi', 'Imane', '0645678912', 'imane@gmail.com', 11),
(84, 'Amrani', 'Omar', '0656789123', 'omar@gmail.com', 12),
(85, 'Chraibi', 'Salma', '0667891234', 'salma@gmail.com', 10),
(86, 'Lahlou', 'Hamza', '0678912345', 'hamza@gmail.com', 11),
(87, 'Berrada', 'Nadia', '0689123456', 'nadia@gmail.com', 9),
(88, 'Kettani', 'Mehdi', '0691234567', 'mehdi@gmail.com', 12),
(89, 'Fassi', 'Amina', '0602345678', 'amina@gmail.com', 10);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom_salle` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom_salle`, `adresse`) VALUES
(9, 'FitConnect Centre', 'Casablanca'),
(10, 'FitConnect Nord', 'Rabat'),
(11, 'FitConnect Sud', 'Marrakech'),
(12, 'Fitconnect Est', 'Fès'),
(13, 'qsfsdfdgj', 'dsfgs'),
(14, 'fqsd', 'fdsqfsfd');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(11) NOT NULL,
  `date_seance` date NOT NULL,
  `type_activite` varchar(100) NOT NULL,
  `duree` int(11) NOT NULL,
  `equipement_utilise` varchar(100) DEFAULT NULL,
  `id_adherent` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `date_seance`, `type_activite`, `duree`, `equipement_utilise`, `id_adherent`, `id_salle`) VALUES
(1, '2026-06-20', 'Musculation', 60, 'Haltères', 80, 9),
(2, '2026-06-20', 'Cardio', 45, 'Tapis roulant', 81, 10),
(3, '2026-06-21', 'Yoga', 50, NULL, 82, 9),
(4, '2026-06-21', 'CrossFit', 70, 'Kettlebell', 83, 11),
(5, '2026-06-22', 'Musculation', 90, 'Barre olympique', 84, 12),
(6, '2026-06-22', 'Cardio', 40, 'Vélo elliptique', 85, 10),
(7, '2026-06-23', 'Pilates', 55, 'Tapis', 86, 11),
(8, '2026-06-23', 'Musculation', 75, 'Machine à presse', 87, 9),
(9, '2026-06-24', 'CrossFit', 60, 'Corde à sauter', 88, 12),
(10, '2026-06-24', 'Cardio', 35, NULL, 89, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id_abonnement`),
  ADD UNIQUE KEY `id_adherent` (`id_adherent`);

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id_adherent`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `id_adherent` (`id_adherent`),
  ADD KEY `id_salle` (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id_abonnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id_adherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `abonnement_ibfk_1` FOREIGN KEY (`id_adherent`) REFERENCES `adherent` (`id_adherent`);

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `adherent_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_adherent`) REFERENCES `adherent` (`id_adherent`),
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
