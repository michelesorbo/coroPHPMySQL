-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Creato il: Giu 17, 2022 alle 13:11
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
-- Database: `corso`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `corsi`
--

CREATE TABLE `corsi` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `edizione` varchar(50) NOT NULL,
  `data_inizio` date NOT NULL,
  `data_fine` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `corsi`
--

INSERT INTO `corsi` (`id`, `nome`, `edizione`, `data_inizio`, `data_fine`) VALUES
(1, 'php', '1', '2022-05-13', '2022-06-28'),
(2, 'html', '1', '2022-04-04', '2022-06-03');

-- --------------------------------------------------------

--
-- Struttura della tabella `docenti`
--

CREATE TABLE `docenti` (
  `id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `data_nascita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `docenti`
--

INSERT INTO `docenti` (`id`, `nome`, `cognome`, `data_nascita`) VALUES
(1, 'michele', 'sorbo', '2022-06-01'),
(2, 'marco', 'planeta', '2022-06-05'),
(3, 'edoardo', 'scaccia', '2022-06-01'),
(4, 'mariarosa ', 'lo faro', '2022-06-01'),
(5, 'paolo', 'prazzoli', '2022-06-06');

-- --------------------------------------------------------

--
-- Struttura della tabella `docenti_mateire`
--

CREATE TABLE `docenti_mateire` (
  `id` int(5) NOT NULL,
  `id_docente` int(5) NOT NULL,
  `id_materia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `docenti_mateire`
--

INSERT INTO `docenti_mateire` (`id`, `id_docente`, `id_materia`) VALUES
(1, 2, 1),
(2, 2, 3),
(3, 2, 4),
(4, 1, 1),
(5, 1, 2),
(6, 3, 3),
(7, 4, 2),
(8, 4, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `materie`
--

CREATE TABLE `materie` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `materie`
--

INSERT INTO `materie` (`id`, `nome`) VALUES
(1, 'php'),
(2, 'sql'),
(3, 'html'),
(4, 'java');

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
  `comune_nascita` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`id`, `nome`, `cognome`, `cf`, `data_nascita`, `comune_nascita`, `pwd`, `email`) VALUES
(1, 'Mike', 'Sor', 'SRB006', '2014-06-03', '', '', ''),
(2, 'Marco', 'Scarcelli', 'MRC001', '2012-06-19', '', '', ''),
(3, 'Marco', 'Planeta', 'SRB006', '2022-06-05', '', '', ''),
(4, 'Mariarosa', 'Lo Faro', 'MRS001', '2021-05-01', '', '', ''),
(5, 'Piera', 'Capozucca', 'CP002', '2000-01-01', '', '', ''),
(6, 'mario', 'rossi', 'MRSRSS001', '2015-01-14', '', 'mariorossi', 'mario@rossi.it'),
(7, 'giuseppe', 'verdi', 'GPVRD', '2022-06-03', '', 'verdi', 'giu@verdi.it'),
(8, 'marco', 'marrone', 'MRC001', '2022-05-31', '', 'asd', 'mar@mar.it'),
(9, 'roberto', 'benigni', 'RSV002', '2022-05-30', '', '7815696ecbf1c96e6894b779456d330e', 'rob@ben.it'),
(10, 'umberto', 'tozzi', 'TZZ001', '2022-05-30', '', '912ec803b2ce49e4a541068d495ab570', 'umt@tzz.it'),
(11, 'vasco', 'rossi', 'VRC002', '2022-06-01', '', '7815696ecbf1c96e6894b779456d330e', 'vas@rossi.it');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `cognome` varchar(100) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `nome`, `cognome`, `mail`, `pwd`) VALUES
(1, 'michele', 'sorbo', 'michele.sorbo@gmail.com', '8a94bdfc825df46f880854f41fee346b'),
(2, 'marco', 'planeta', 'marco.planeta@gmail.com', 'f5888d0bb58d611107e11f7cbc41c97a');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `docenti`
--
ALTER TABLE `docenti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `docenti_mateire`
--
ALTER TABLE `docenti_mateire`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `materie`
--
ALTER TABLE `materie`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `corsi`
--
ALTER TABLE `corsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `docenti`
--
ALTER TABLE `docenti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `docenti_mateire`
--
ALTER TABLE `docenti_mateire`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `materie`
--
ALTER TABLE `materie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
