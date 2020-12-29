-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 déc. 2020 à 21:29
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpstore`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(200) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`password`, `id_admin`, `first_name`, `email`, `last_name`) VALUES
('$2y$10$CRiaWDpBnd.YGtQIqtVhp..XW7ZJh2V.NmdBTLNeRddRbyKxDGxe.', 1, 'soufiane', 'soufianebenyaala1998@gmail.com', 'ben yaala');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `commentaire` text NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id_avis`, `note`, `date_enregistrement`, `commentaire`, `id_membre`, `id_salle`) VALUES
(1, 4, '2020-12-23 13:17:10', 'good :)', 11, 10),
(6, 2, '2020-12-23 15:50:57', 'qqqqqqq', 17, 11),
(8, 2, '2020-12-23 14:19:41', 'gg', 17, 10),
(11, 3, '2020-12-23 15:14:53', 'hhjhjhj', 11, 11),
(13, 5, '2020-12-23 16:05:12', 'good', 17, 5),
(14, 5, '2020-12-26 20:17:33', 'goood', 11, 5),
(15, 1, '2020-12-26 20:18:10', 'bad', 11, 5);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `montant` varchar(200) NOT NULL,
  `date_commande` datetime NOT NULL,
  `lesproduits` varchar(300) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `montant`, `date_commande`, `lesproduits`, `id_membre`) VALUES
(35, '770', '2020-12-29 16:09:34', '23', 11);

-- --------------------------------------------------------

--
-- Structure de la table `details_commande`
--

CREATE TABLE `details_commande` (
  `id-details_commande` int(11) NOT NULL,
  `id-commande` int(11) NOT NULL,
  `id-produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `pseudo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `zip_code` varchar(200) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `mdp` varchar(300) NOT NULL,
  `sexe` enum('F','H') NOT NULL,
  `verifyAccount` enum('oui','non') NOT NULL,
  `etat` enum('admin','membre') NOT NULL DEFAULT 'membre',
  `photo` varchar(200) NOT NULL,
  `state_of_photo` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `first_name`, `last_name`, `pseudo`, `email`, `addresse`, `zip_code`, `pays`, `ville`, `telephone`, `mdp`, `sexe`, `verifyAccount`, `etat`, `photo`, `state_of_photo`) VALUES
(8, 'Ayoub', 'Balt', 'tass96', 'ayoub.balti@enis.tn', 'Zarzouna', '7021', 'Tunisie', 'Bizerte', '52770942', '$2y$10$Q4As01mbw4dTzZp9dni7yO3aieLHEu08xSJMiSujhygr1FDaXBC8W', 'H', 'oui', 'membre', '', '0'),
(9, 'taha', 'zeidy', 'wataba', 'zeidytahamohsen@gmail.com', 'sidi bouzid', '1235', 'Tunisie', 'sidi', '50056505', '$2y$10$6IE5Ht39dptRWzN002NPFeYwbHe7zZywkkjF1YumlX0Ie.ZPSnASG', 'F', 'oui', 'membre', '', '0'),
(11, 'soufiane', 'yaala', 'sof123', 'soufianebenyaala1998@gmail.com', 'Djerba', '4146', 'France', 'houmt el souk', '50830448', '$2y$10$CRiaWDpBnd.YGtQIqtVhp..XW7ZJh2V.NmdBTLNeRddRbyKxDGxe.', 'H', 'oui', 'membre', '11.jpg', '1'),
(17, 'soufiane', 'yaala', 'soufiane123', 'soufiane.benyaala@enis.tn', 'Societe d&#39;alimentation de ben moussa houmt souk djerba', '4146', 'Tunisie', 'houmt souk djerba', '50830448', '$2y$10$TYlmvHD4o7dI.d2Qyu0Zzu3icFU6GjFNchNUSsIrMwybUTeOK1k96', 'H', 'oui', 'membre', '', '0');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id-panier` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `prix` varchar(200) NOT NULL,
  `etat` enum('libre','occupe') NOT NULL,
  `views` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `id_salle`, `date_arrivee`, `date_depart`, `prix`, `etat`, `views`) VALUES
(19, 5, '2021-01-15', '2021-01-12', '100', 'libre', '9'),
(21, 6, '2021-01-23', '2021-01-19', '100', 'libre', '2'),
(22, 5, '2021-01-31', '2021-01-25', '300', 'libre', '2'),
(23, 7, '2021-02-07', '2021-02-01', '700', 'occupe', '28'),
(24, 8, '2021-02-19', '2021-02-16', '100', 'libre', '1'),
(25, 9, '2021-03-07', '2021-03-01', '800', 'libre', '1'),
(26, 5, '2021-03-14', '2021-03-09', '100', 'libre', '1'),
(27, 10, '2021-03-12', '2021-03-09', '200', 'libre', '1'),
(28, 11, '2021-02-12', '2021-02-09', '500', 'libre', '3'),
(29, 11, '2021-04-04', '2021-04-01', '250', 'libre', '7'),
(30, 5, '2021-08-15', '2021-08-10', '1000', 'libre', '42');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `titre` text NOT NULL,
  `description` text NOT NULL,
  `categorie` enum('Conference, Convention','Reunion, Formation','Soiree entreprise','Seminaire residentiel') NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `photo_1` varchar(300) NOT NULL,
  `photo_2` varchar(300) NOT NULL,
  `photo_3` varchar(300) NOT NULL,
  `photo_4` varchar(300) NOT NULL,
  `capacite` varchar(20) NOT NULL,
  `avis` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `pays`, `ville`, `cp`, `titre`, `description`, `categorie`, `addresse`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `capacite`, `avis`) VALUES
(5, 'France', 'Paris', '75015', 'Paris gare Montparnasse Idéal voyageurs de affaires', 'Louez notre jolie salle de réunion à Paris gare Montparnasse pour rassembler vos collaborateurs dans un centre d&#39;affaires au cœur de la gare.  Idéal pour les voyageurs d&#39;affaires, nous pouvons vous accueillir entre deux trains, vous permettant de rentabiliser au maximum votre précieux temps. La pièce est chaleureuse et lumineuse, et est meublée pour 8 participants.  A votre disposition des bouteilles d&#39;eau, du papier et des stylos. Une télé est installée dans la pièce, vous permettant de projeter vos présentations commerciales.', 'Reunion, Formation', 'France Paris 75015 Avenue du Maine', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '8', '4'),
(6, 'France', 'Paris', '75015', 'Centre d\'affaires Paris gare Montparnasse', 'Votre prochain lieu de séminaire, au cœur du centre d&#39;affaires de Paris gare Montparnasse.  Un espace de travail de 61m² pouvant accueillir jusqu&#39;à 48 participants assis. Sont inclus dans le prix de location tous les équipements techniques nécessaire au parfait déroulement de votre événement interne. A votre discrétion, bouteilles d&#39;eau et petite papeterie dans la pièce.  Des espaces communs lumineux, chaleureux, propices aux échanges et aux rencontres professionnelles.  Une localisation idéale au cœur de la gare TGV.', 'Reunion, Formation', 'France Paris 75015 Avenue du Maine', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '8', '0'),
(7, 'France', 'Paris', '75008', 'Louer salle de réunion Paris 8  réunion de travail', 'Vous voulez louer une salle de réunion à Paris dans le 8ème arrondissement ? Cet espace de 35 m² est idéal pour vos réunions de travail de 20 personnes. autour d&#39;une table.  Les équipements: - Vidéo-projecteur - Paper Board - Stylo et bloc note - Téléviseur  La salle peut être louée pour un minimum d&#39;une demi-journée, du lundi au dimanche. Toutes les conditions sont réunies pour le bon déroulement de votre séminaire.', 'Conference, Convention', 'France Paris 75008 Rue de Surène', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '19', '0'),
(8, 'France', 'Paris', '75015', 'Location salle de conférence à Paris métro avenue Emile Zola', 'Réserver une belle salle de conférence de 60m2 pouvant accueillir jusqu&#39;à 45 personnes avec vue sur un jardin intérieur arboré.Aménageable pour travaux pratiques de 20 participants.  Située idéalement en plein Paris dans le 15ème arrondissement, la salle de conférence est accessible de plein pied, proche de la Tour Eiffel et desservie par de nombreux moyens de transports. Vous bénéficierez d&#39;un espace détente de 40m2. La salle de conférence, très claire bénéficie d&#39;une grande luminosité avec vue sur le jardin arboré.  Un vidéo-projecteur full HD est à votre disposition ainsi qu&#39;une salle régie au besoin. L&#39;organisation de petits-déjeuners à disposition et de déjeuner est possible sur demande. A deviser selon vos souhaits.', 'Soiree entreprise', 'France Paris 75015 Rue Fondary', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '45', '0'),
(9, 'France', 'Bruxelles', '1000', 'Grande salle de séminaire Bruxelles, lumineuse et équipée', 'Pour votre prochain événement d&#39;entreprise à Bruxelles, voici une salle de séminaire somptueuse, parfaite pour accueillir 16 personnes en format table ronde ou rectangulaire, ou 20 personnes en format théâtre.  Ses 3 baies vitrées vous feront bénéficier d&#39;un bain de lumière naturelle, pour une meilleure atmosphère pendant votre formation professionnelle. De plus, pour un confort optimal, vous pourrez bénéficier de tout l&#39;équipement hi-tech, indispensable au bon déroulement de votre événement d&#39;entreprise.', 'Soiree entreprise', 'Belgique Bruxelles 1000 Avenue Louise', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '10', '0'),
(10, 'France', 'Paris', '75001', 'Salle pour événement professionnel, au cœur de Paris', 'Située au sein d&#39;un hôtel du 1er arrondissement de Paris nous vous proposons de louer une salle de réunion atypique. Le minimum de réservation pour cette salle est d&#39;une heure.  A l&#39;abri des regards, nous mettons à votre disposition notre espace bar avec une capacité d&#39;accueil maximum de 40 personnes. Cet espace de travail est idéal pour un cocktail d&#39;entreprise, une réunion et une formation.  En louant cet espace atypique, vous aurez à disposition une connexion wifi et un paper board. Il vous sera également possible de faire des photocopies.', 'Seminaire residentiel', 'France Paris 75001 Rue Hérold', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '40', '3'),
(11, 'France', 'Nice', '06000', 'Réserver bel espace de conférence banquet modulable', 'Profitez d&#39;un espace luxueux et élégant de 120m² pour organiser vos formations, réceptions ou conférences lors de vos déplacements professionnels à Nice au coeur du quartier des musiciens.  Cette salle située au RDC peut accueillir jusqu&#39;à 120 personnes, idéale pour recevoir vos événements d&#39;entreprise. La location comprend un écran, un vidéoprojecteur, un paperboard, micros et sonorisation ainsi qu&#39;un accès à Internet en Wifi.  Pour votre confort, l&#39;établissement propose de vous restaurer autour d&#39;une pause café gourmande, d&#39;un déjeuner assis ou d&#39;un cocktail dînatoire.  L&#39;espace peut être réservé pour un minimum de quatre heures, du lundi au dimanche et se trouve à quelques minutes des stations de bus et tramway. Accès direct au parking extérieur : possibilité de charger/décharger du matériel', 'Seminaire residentiel', 'France Nice 06000 Boulevard Victor Hugo', 'photo_1.png', 'photo_2.png', 'photo_3.png', 'photo_4.png', '140', '3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `details_commande`
--
ALTER TABLE `details_commande`
  ADD PRIMARY KEY (`id-details_commande`),
  ADD UNIQUE KEY `id-commande` (`id-commande`),
  ADD UNIQUE KEY `id-produit` (`id-produit`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id-panier`),
  ADD KEY `id_produit` (`id_produit`),
  ADD KEY `id_membre` (`id_membre`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `details_commande`
--
ALTER TABLE `details_commande`
  MODIFY `id-details_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id-panier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
