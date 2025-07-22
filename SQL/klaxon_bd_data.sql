-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 22 juil. 2025 à 18:47
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
-- Base de données : `klaxon_bd`
--

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `ville`) VALUES
(1, 'Paris'),
(2, 'Lyon'),
(3, 'Marseille'),
(4, 'Toulouse'),
(5, 'Nice'),
(6, 'Nantes'),
(7, 'Strasbourg'),
(8, 'Montpellier'),
(9, 'Bordeaux'),
(10, 'Lille'),
(12, 'Reims');

--
-- Déchargement des données de la table `trajets`
--

INSERT INTO `trajets` (`id`, `depart`, `date_depart`, `heure_depart`, `arrivee`, `date_arrivee`, `heure_arrivee`, `nbr_places`, `places_dispo`, `contact`) VALUES
(28, 9, '2025-07-30', '08:00:00', 10, '2025-07-30', '14:00:00', 2, 1, 1),
(29, 9, '2025-07-16', '08:00:00', 4, '2025-07-16', '14:00:00', 3, 2, 1),
(30, 3, '2025-07-29', '22:00:00', 9, '2025-07-30', '02:00:00', 2, 1, 1),
(31, 12, '2025-07-31', '08:00:00', 6, '2025-07-31', '12:00:00', 4, 2, 4),
(32, 1, '2025-08-21', '12:00:00', 9, '2025-08-21', '18:00:00', 4, 1, 4),
(33, 7, '2025-07-31', '12:00:00', 10, '2025-07-31', '16:00:00', 4, 4, 3);

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `telephone`, `email`, `role`, `password`) VALUES
(1, 'Martin', 'Alexandre', 612345678, 'alexandre.martin@email.fr', 'user', '14\'14_6&7mN'),
(2, 'Dubois', 'Sophie', 698765432, 'sophie.dubois@email.fr', 'admin', 'J*_iIL87/63'),
(3, 'Bernard', 'Julien', 622446688, 'julien.bernard@email.fr', 'user', '12@17_6&7mN'),
(4, 'Moreau', 'Camille', 611223344, 'camille.moreau@email.fr', 'user', '125/*+45;Ml'),
(5, 'Lefèvre', 'Lucie', 777889900, 'lucie.lefevre@email.fr', 'user', ''),
(6, 'Leroy', 'Thomas', 655443322, 'thomas.leroy@email.fr', 'user', ''),
(7, 'Roux', 'Chloé', 633221199, 'chloe.roux@email.fr', 'user', ''),
(8, 'Petit', 'Maxime', 766778899, 'maxime.petit@email.fr', 'user', ''),
(9, 'Garnier', 'Laura', 688776655, 'laura.garnier@email.fr', 'user', ''),
(10, 'Dupuis', 'Antoine', 744556677, 'antoine.dupuis@email.fr', 'user', ''),
(11, 'Lefebvre', 'Emma', 699887766, 'emma.lefebvre@email.fr', 'user', ''),
(12, 'Fontaine', 'Louis', 655667788, 'louis.fontaine@email.fr', 'user', ''),
(13, 'Chevalier', 'Clara', 788990011, 'clara.chevalier@email.fr', 'user', ''),
(14, 'Robin', 'Nicolas', 644332211, 'nicolas.robin@email.fr', 'user', ''),
(15, 'Gauthier', 'Marine', 677889922, 'marine.gauthier@email.fr', 'user', ''),
(16, 'Fournier', 'Pierre', 722334455, 'pierre.fournier@email.fr', 'user', ''),
(17, 'Girard', 'Sarah', 688665544, 'sarah.girard@email.fr', 'user', ''),
(18, 'Lambert', 'Hugo', 611223366, 'hugo.lambert@email.fr', 'user', ''),
(19, 'Masson', 'Julie', 733445566, 'julie.masson@email.fr', 'user', ''),
(20, 'Henry', 'Arthur', 666554433, 'arthur.henry@email.fr', 'user', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
