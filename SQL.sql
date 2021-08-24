
--crée par Charlène
--Base de donnée :bdsitederencontre
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--------------------------------------------------------------------------------------------------------

-- Table utilisateurs
CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mot_de_passe` varchar(500) NOT NULL,
  `sport_pratique` varchar(20) NOT NULL,
  `niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--Index
ALTER TABLE `utilisateurs` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`)
ALTER TABLE `utilisateurs` ADD CONSTRAINT `fk_niveau` FOREIGN KEY (`niveau`) REFERENCES `niveaux_sportifs`(`niveau`) ON DELETE RESTRICT ON UPDATE RESTRICT;
ALTER TABLE `utilisateurs` DROP FOREIGN KEY `fk_niveau`; ALTER TABLE `utilisateurs` ADD CONSTRAINT `fk_utilisateurs_sports` FOREIGN KEY (`sport_pratique`) REFERENCES `sports`(`nom`) ON DELETE RESTRICT ON UPDATE RESTRICT;
--Auto 
ALTER TABLE `utilisateurs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16

--------------------------------------------------------------------------------------------------------

-- Table sports
CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Insérer les données
INSERT INTO `sports` (`id`, `nom`) VALUES
(1, 'Football'),
(2, 'Basketball'),
(3, 'Rugby'),
(4, 'Natation'),
(5, 'Judo');
--Clé primaire
ALTER TABLE `sports` ADD PRIMARY KEY (`id`)
--Auto 
ALTER TABLE `sports` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15

--------------------------------------------------------------------------------------------------------

--Table NiveauSportif
CREATE TABLE `niveaux_sportifs` (
  `id` int(11) NOT NULL,
  `niveau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Insérer les données
INSERT INTO `niveaux_sportifs` (`id`, `niveau`) VALUES
(1, 'débutant'),
(2, 'confirmé'),
(3, 'pro');
--Clé primaire
ALTER TABLE `niveaux_sportifs` ADD PRIMARY KEY (`id`)
--Auto 
ALTER TABLE `niveaux_sportifs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4





