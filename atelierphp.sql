-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 19 déc. 2020 à 17:05
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `atelierphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `blogslist`
--

CREATE TABLE `blogslist` (
  `id` int(11) NOT NULL,
  `medecin` int(11) NOT NULL,
  `nomarticle` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `categorie` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `blog` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blogslist`
--

INSERT INTO `blogslist` (`id`, `medecin`, `nomarticle`, `date`, `categorie`, `img`, `blog`) VALUES
(3, 5, 'soumaya', '2012-05-31', 4, 'img-3.jpg', '<p>&nbsp;nbjknjhhihhjbbnj</p>');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(3, 'qqqq'),
(4, 'zzzzzzzzz'),
(5, 'eeeeeeeeee'),
(8, 'BENSASSI');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `nomClient` varchar(50) NOT NULL,
  `emailClient` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `passwordVerif` varchar(50) NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `emailClient`, `password`, `passwordVerif`, `token`) VALUES
(30, 'rabia bensassi', 'rabiaa.bensassii@gmail.com', '111', '111', 'NULL'),
(32, 'saif', 'seifeddine.TRABELSI@esprit.tn', '123', '123', 'NULL'),
(33, 'soumaya bensassi', 'soumaya.bensassi@esprit.tn', '111', '111', '5fdc70f54100a'),
(34, 'lazzez', 'mohamed.lazez@esprit.tn', '123', '123', 'NULL'),
(35, 'Mohamed Lazez', 'mohamed@esprit.tn', '123', '123', 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `doctorslist`
--

CREATE TABLE `doctorslist` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `specealite` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `doctorslist`
--

INSERT INTO `doctorslist` (`id`, `nom`, `username`, `email`, `mdp`, `specealite`, `img`) VALUES
(1, 'Soumaya', 'lucidev', 'montherdabbech@gmail.com', 'aaa', 'zzz', 'img-2.jpg'),
(4, 'aaaa', 'sss', 'mondher.dabbech@esprit.tn', 'xxx', 'xxx', 'blog.PNG'),
(5, 'BENSASSI', 'soumayabensassi', 'soumaya.bensassi@esprit.tn', '123', 'generaliste', 'gallery-04.jpg'),
(6, 'LAZEZ', 'syrine', 'mario.med@live.com', '123', 'orthpediste', 'img-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `idMedicament` int(11) NOT NULL,
  `nomMedicament` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `typeMedicament` varchar(50) NOT NULL,
  `imgMedicament` varchar(50) NOT NULL,
  `desMedicament` varchar(9000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`idMedicament`, `nomMedicament`, `quantite`, `prix`, `typeMedicament`, `imgMedicament`, `desMedicament`) VALUES
(38, 'Doliprane 1000 mg comprimés x 8', 1, 2.7, 'sans ordonnance', 'product6.png', 'Sans ordonnance, ce médicament est indiqué en cas de douleur et/ou fièvre : maux de tête, états grippaux, douleurs dentaires, courbatures, règles douloureuses. Il peut également être prescrit en cas d\'arthrose.'),
(39, 'Dafalgan 1 g comprimés x 8', 25, 5.2, 'sans ordonnance', 'product1.png', 'Ce médicament contient du paracétamol. Il est indiqué en cas de douleur et-ou fièvre telles que maux de tête, états grippaux, douleurs dentaires, courbatures, règles douloureuses.'),
(40, 'Urgo Immunostim x 30', 31, 50, 'avec ordonnance', 'product7.png', 'Contribue à renforcer les défenses de l\'organisme'),
(41, 'Stodaline Sans Sucre 200 ml', 25, 9799, 'avec ordonnance', 'product9.png', 'Médicament homéopathique traditionnellement utilisé dans le traitement de la toux.'),
(42, 'qqqq', 265, 2.5, 'avec ordonnance', 'product2.png', 'njkvbhkcl,ckdlfghfkjkmszodfzuohsc,ldcld^\r\n,cldpfv,;lcmlp^rguvc,;lmpdrgv ,\r\nkjkhgsjlkqmdruoigsjlkqmzaedrghji');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `emailclients` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_notification` varchar(50) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id_notification`, `emailclients`, `date`, `message`, `status`, `status_notification`, `client`) VALUES
(1, 'soumaya.bensassi@esprit.tn', '2020-12-18 22:55:03', 'votre reclamation a ete ', 'traiter', 'unread', 33),
(2, 'soumaya.bensassi@esprit.tn', '2020-12-18 23:53:51', 'votre rendez vous a ete ', 'accepté', 'unread', 33);

-- --------------------------------------------------------

--
-- Structure de la table `ordonnance`
--

CREATE TABLE `ordonnance` (
  `id_ordonnance` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ordonnance`
--

INSERT INTO `ordonnance` (`id_ordonnance`, `client`, `img`) VALUES
(2, 35, 'img-01.png');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id_panier` int(11) NOT NULL,
  `medicament` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `nom_Medicament` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_panier`, `medicament`, `client`, `qte`, `nom_Medicament`) VALUES
(155, 40, 33, 1, 'Urgo Immunostim x 30'),
(156, 40, 33, 1, 'Urgo Immunostim x 30');

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `idblog` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rating`
--

INSERT INTO `rating` (`id`, `idclient`, `idblog`, `note`) VALUES
(1, 33, 3, 5),
(2, 30, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `nom_reclamation` varchar(50) NOT NULL,
  `email_reclamation` varchar(50) NOT NULL,
  `number_reclamation` varchar(50) NOT NULL,
  `message_reclamation` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `nom_reclamation`, `email_reclamation`, `number_reclamation`, `message_reclamation`, `status`, `client`) VALUES
(1, 'Soumaya', 'soumaya.bensassi@esprit.tn', '50607010', 'cdvfbgnht', 'traiter', 33);

-- --------------------------------------------------------

--
-- Structure de la table `rendezvous`
--

CREATE TABLE `rendezvous` (
  `id_rendezvous` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `heure` varchar(50) NOT NULL,
  `doctor` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rendezvous`
--

INSERT INTO `rendezvous` (`id_rendezvous`, `nom`, `prenom`, `email`, `date`, `heure`, `doctor`, `status`, `client`) VALUES
(2, 'Soumaya', 'MOHAMED', 'soumaya.bensassi@esprit.tn', '2020-02-02', '8:00 to 9:00', 1, 'accepté', 33);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blogslist`
--
ALTER TABLE `blogslist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cate_blog` (`categorie`),
  ADD KEY `fk_med_blog` (`medecin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `doctorslist`
--
ALTER TABLE `doctorslist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`idMedicament`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `fk_noti_client` (`client`);

--
-- Index pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD PRIMARY KEY (`id_ordonnance`),
  ADD KEY `fk_ord_client` (`client`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id_panier`),
  ADD KEY `fk_panier_client` (`client`),
  ADD KEY `fk_panier_medicament` (`medicament`);

--
-- Index pour la table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rt_client` (`idclient`),
  ADD KEY `fk_rt_blog` (`idblog`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `fk_reclamtion_client` (`client`);

--
-- Index pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD PRIMARY KEY (`id_rendezvous`),
  ADD KEY `fk_rv_client` (`client`),
  ADD KEY `fk_doc_rv` (`doctor`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blogslist`
--
ALTER TABLE `blogslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `doctorslist`
--
ALTER TABLE `doctorslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `idMedicament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  MODIFY `id_ordonnance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id_panier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT pour la table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  MODIFY `id_rendezvous` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `blogslist`
--
ALTER TABLE `blogslist`
  ADD CONSTRAINT `fk_cate_blog` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_med_blog` FOREIGN KEY (`medecin`) REFERENCES `doctorslist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_noti_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ordonnance`
--
ALTER TABLE `ordonnance`
  ADD CONSTRAINT `fk_ord_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_panier_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_panier_medicament` FOREIGN KEY (`medicament`) REFERENCES `medicament` (`idMedicament`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rt_blog` FOREIGN KEY (`idblog`) REFERENCES `blogslist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rt_client` FOREIGN KEY (`idclient`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD CONSTRAINT `fk_reclamtion_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rendezvous`
--
ALTER TABLE `rendezvous`
  ADD CONSTRAINT `fk_doc_rv` FOREIGN KEY (`doctor`) REFERENCES `doctorslist` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rv_client` FOREIGN KEY (`client`) REFERENCES `client` (`idClient`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
