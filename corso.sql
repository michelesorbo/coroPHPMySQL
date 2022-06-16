-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Giu 16, 2022 alle 12:12
-- Versione del server: 5.7.34
-- Versione PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19117091_corso`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE `studenti` (
  `id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `cf` varchar(16) NOT NULL,
  `data_nascita` date NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `cf`, `data_nascita`, `pwd`, `email`) VALUES
(1, 'Mike', 'Sor', 'SRB006', '2014-06-03', '', ''),
(2, 'Marco', 'Scarcelli', 'MRC001', '2012-06-19', '', ''),
(3, 'Marco', 'Planeta', 'SRB006', '2022-06-05', '', ''),
(4, 'Mariarosa', 'Lo Faro', 'MRS001', '2021-05-01', '', ''),
(5, 'Piera', 'Capozucca', 'CP002', '2000-01-01', '', ''),
(6, 'mario', 'rossi', 'MRSRSS001', '2015-01-14', 'mariorossi', 'mario@rossi.it'),
(7, 'giuseppe', 'verdi', 'GPVRD', '2022-06-03', 'verdi', 'giu@verdi.it'),
(8, 'marco', 'marrone', 'MRC001', '2022-05-31', 'asd', 'mar@mar.it'),
(9, 'roberto', 'benigni', 'RSV002', '2022-05-30', '7815696ecbf1c96e6894b779456d330e', 'rob@ben.it'),
(10, 'umberto', 'tozzi', 'TZZ001', '2022-05-30', '912ec803b2ce49e4a541068d495ab570', 'umt@tzz.it'),
(11, 'vasco', 'rossi', 'VRC002', '2022-06-01', '7815696ecbf1c96e6894b779456d330e', 'vas@rossi.it');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
