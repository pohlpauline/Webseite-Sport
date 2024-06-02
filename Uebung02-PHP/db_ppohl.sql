-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jun 2024 um 15:33
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db_ppohl`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kurse`
--

CREATE TABLE `kurse` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` varchar(50) NOT NULL,
  `von` date NOT NULL,
  `bis` date NOT NULL,
  `preis` int(11) NOT NULL,
  `ort` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kurse`
--

INSERT INTO `kurse` (`id`, `titel`, `von`, `bis`, `preis`, `ort`) VALUES
(1, 'Aerobic', '2024-06-06', '2024-07-06', 110, 'Wesel'),
(2, 'Aquapower', '2025-06-05', '2025-07-15', 250, 'Wesel'),
(3, 'Yoga', '2024-12-12', '2025-02-13', 220, 'Wesel'),
(4, 'Joggen', '2024-08-15', '2024-09-19', 80, 'Wesel');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kursmotivationstexte`
--

CREATE TABLE `kursmotivationstexte` (
  `id` int(10) UNSIGNED NOT NULL,
  `motivation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kursmotivationstexte`
--

INSERT INTO `kursmotivationstexte` (`id`, `motivation`) VALUES
(1, 'Entdecken Sie unsere Kursangebote im Gesundheitswesen, um möglichst fit zu bleiben. Sei es, zur Meditation, zur Stressbewältigung oder um die eigene Kondition aufzubauen. Wir bieten Sportkurse an, die für alle Fitnesstypen gedacht sind. Vor allem richtet es sich an diejenigen, die für sich ein besseres Ich erzielen wollen. Tuen Sie sich selbst einen Gefallen und melden Sie sich heute für einen Sportkurs an. Sie werden gemeinsam in einer Gruppe sportliche Übungen ausführen, begleitet von einem Trainer/ einer Trainerin. Vergessen Sie nicht, der beste Antrieb zu einem besserem Wohlbefinden sind Sie selbst. Für mehr Sport in den Alltag einbringen: Melden Sie sich für Ihren Sportkus an!');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `teilnehmer`
--

CREATE TABLE `teilnehmer` (
  `id` int(11) UNSIGNED NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `kursid` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `teilnehmer`
--

INSERT INTO `teilnehmer` (`id`, `lastname`, `firstname`, `email`, `telefon`, `kursid`) VALUES
(5, 'Sommer', 'Tina', 'sommer@sommer.de', '12345', 4),
(6, 'Sommer', 'Tina', 'sommer@sommer.de', '12345', 4),
(10, 'Brummer', 'Tim', 'brummer@brummer.de', '123457', 2),
(11, 'Brummer', 'Tim', 'brummer@brummer.de', '123457', 2),
(12, 'Tom ', 'Jerry', 'jerry@jerry.de', '12345678', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `kid` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `email`, `password`, `telefon`, `kid`) VALUES
(5, 'Lina', 'Winter', 'lina@lina.de', '$2y$10$MjjIuEeMdzlyw4Au7fTTIeYjucIh6DG5yg0rAFFbc0s', '89076', 2),
(6, 'Hans', 'Herbst', 'hans@hans.de', '$2y$10$HwjDdujSBDPsZRi3M2rMHurZw0LR5UMdDND2WDtda7m', '56789', 1),
(9, 'Jerry', 'Tom', 'jerry@jerry.de', '$2y$10$lVZR2gbkUYY9NTMY3tOLA.UYpKd1HrcXSJoao3w8cKWH8.CCcfl9K', '1234567', 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kurse`
--
ALTER TABLE `kurse`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kursmotivationstexte`
--
ALTER TABLE `kursmotivationstexte`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verbindung_zu_Tabelle_kurse` (`kursid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verbindung_zur_Tabelle_kurse` (`kid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kurse`
--
ALTER TABLE `kurse`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `kursmotivationstexte`
--
ALTER TABLE `kursmotivationstexte`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `teilnehmer`
--
ALTER TABLE `teilnehmer`
  ADD CONSTRAINT `verbindung_zu_Tabelle_kurse` FOREIGN KEY (`kursid`) REFERENCES `kurse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `verbindung_zur_Tabelle_kurse` FOREIGN KEY (`kid`) REFERENCES `kurse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
