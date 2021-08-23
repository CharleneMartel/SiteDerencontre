
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
  `niveau` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  `last_login` datetime NOT NULL DEFAULT '1970-01-01 00:00:00'
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1970-01-01 00:00:01'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Insérer les données
INSERT INTO `sports` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Football', '2020-11-08 19:39:42', '1970-01-01 00:00:01'),
(2, 'Basketball', '2020-11-08 19:40:00', '1970-01-01 00:00:01'),
(3, 'Rugby', '2020-11-08 19:40:43', '1970-01-01 00:00:01'),
(4, 'Natation', '2020-11-08 19:41:33', '1970-01-01 00:00:01'),
(5, 'Judo', '2020-11-08 19:41:57', '1970-01-01 00:00:01');
--Clé primaire
ALTER TABLE `sports` ADD PRIMARY KEY (`id`)
--Auto 
ALTER TABLE `sports` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15

--------------------------------------------------------------------------------------------------------

--Table NiveauSportif
CREATE TABLE `niveaux_sportifs` (
  `id` int(11) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT '1970-01-01 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Insérer les données
INSERT INTO `niveaux_sportifs` (`id`, `niveau`, `created_at`, `updated_at`) VALUES
(1, 'débutant', '2020-11-08 20:31:48', '1970-01-01 00:00:00'),
(2, 'confirmé', '2020-11-08 20:31:48', '1970-01-01 00:00:00'),
(3, 'pro', '2020-11-08 20:32:03', '1970-01-01 00:00:00');
--Clé primaire
ALTER TABLE `niveaux_sportifs` ADD PRIMARY KEY (`id`)
--Auto 
ALTER TABLE `niveaux_sportifs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4





