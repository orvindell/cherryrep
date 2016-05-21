-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2016, 19:48
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tomekf`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzialki`
--

CREATE TABLE `dzialki` (
  `id` int(11) NOT NULL,
  `fk_id_planety` int(11) NOT NULL,
  `fk_id_kategorii` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `dzialki`
--

INSERT INTO `dzialki` (`id`, `fk_id_planety`, `fk_id_kategorii`, `ilosc`) VALUES
(1, 1, 2, 511),
(2, 1, 1, 123),
(3, 1, 3, 16),
(4, 3, 3, 1086),
(5, 3, 2, 2059),
(6, 3, 1, 33694),
(7, 5, 1, 101486),
(8, 5, 2, 23640),
(9, 4, 2, 16000);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie_dzialek`
--

CREATE TABLE `kategorie_dzialek` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `kategorie_dzialek`
--

INSERT INTO `kategorie_dzialek` (`id`, `nazwa`, `cena`) VALUES
(1, 'tania', '2499.99'),
(2, 'standard', '6124.50'),
(3, 'luksus', '14750.00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kupione_dzialki`
--

CREATE TABLE `kupione_dzialki` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `fk_id_dzialki` int(11) NOT NULL,
  `ilosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planety`
--

CREATE TABLE `planety` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `planety`
--

INSERT INTO `planety` (`id`, `nazwa`) VALUES
(1, 'Merkury'),
(2, 'Wenus'),
(3, 'Ziemia'),
(4, 'Mars'),
(5, 'Jowisz'),
(6, 'Saturn'),
(7, 'Uran'),
(8, 'Neptun');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `dzialki`
--
ALTER TABLE `dzialki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_kategorii` (`fk_id_kategorii`),
  ADD KEY `fk_id_planety` (`fk_id_planety`);

--
-- Indexes for table `kategorie_dzialek`
--
ALTER TABLE `kategorie_dzialek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kupione_dzialki`
--
ALTER TABLE `kupione_dzialki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_dzialki` (`fk_id_dzialki`);

--
-- Indexes for table `planety`
--
ALTER TABLE `planety`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dzialki`
--
ALTER TABLE `dzialki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `kategorie_dzialek`
--
ALTER TABLE `kategorie_dzialek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `kupione_dzialki`
--
ALTER TABLE `kupione_dzialki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `planety`
--
ALTER TABLE `planety`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dzialki`
--
ALTER TABLE `dzialki`
  ADD CONSTRAINT `dzialki_ibfk_1` FOREIGN KEY (`fk_id_kategorii`) REFERENCES `kategorie_dzialek` (`id`),
  ADD CONSTRAINT `dzialki_ibfk_2` FOREIGN KEY (`fk_id_planety`) REFERENCES `planety` (`id`);

--
-- Ograniczenia dla tabeli `kupione_dzialki`
--
ALTER TABLE `kupione_dzialki`
  ADD CONSTRAINT `kupione_dzialki_ibfk_1` FOREIGN KEY (`fk_id_dzialki`) REFERENCES `dzialki` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
