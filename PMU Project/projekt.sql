-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Cze 2023, 13:30
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(4) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `stanowisko` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Adam', 'Kowalski', 1),
(2, 'Monika ', 'Nowak', 2),
(3, 'Anna', 'Smith', 3),
(4, 'Mirosław', 'Włodarczyk ', 4),
(5, 'Nowy', 'Praktykant', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stanowisko`
--

CREATE TABLE `stanowisko` (
  `id_stanowisko` int(4) NOT NULL,
  `stanowisko_pracy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `stanowisko`
--

INSERT INTO `stanowisko` (`id_stanowisko`, `stanowisko_pracy`) VALUES
(1, 'Programista'),
(2, 'Automatyk'),
(3, 'Analityk Biznesowy'),
(4, 'Technik');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `status_zadania`
--

CREATE TABLE `status_zadania` (
  `id_status` int(4) NOT NULL,
  `zadanie_id` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `status_zadania`
--

INSERT INTO `status_zadania` (`id_status`, `zadanie_id`, `img`) VALUES
(1, 'Nierozpoczęte', '1'),
(2, 'Rozpoczęte', '2'),
(3, 'W realizacji', '3'),
(4, 'Zakończone', '4');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zadania`
--

CREATE TABLE `zadania` (
  `id_zadania` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `tresc_zadania` varchar(255) DEFAULT NULL,
  `zadania_status` int(11) DEFAULT NULL,
  `zaawansowanie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zadania`
--

INSERT INTO `zadania` (`id_zadania`, `id`, `tresc_zadania`, `zadania_status`, `zaawansowanie`) VALUES
(1, 1, 'Tworzenie stron', 1, 0),
(2, 1, 'Tworzenie baz danych', 2, 20),
(3, 1, 'Aktualizacja oprogramowania', 3, 60),
(4, 1, 'Program dla firmy', 4, 100),
(5, 2, 'Projekt dla firmy', 1, 0),
(6, 2, 'przenoszenie stanowisk', 4, 100),
(7, 3, 'Sponsor', 4, 100),
(8, 4, 'optymalizacja kodu', 1, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `stanowisko`
--
ALTER TABLE `stanowisko`
  ADD PRIMARY KEY (`id_stanowisko`);

--
-- Indeksy dla tabeli `status_zadania`
--
ALTER TABLE `status_zadania`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeksy dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD PRIMARY KEY (`id_zadania`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `stanowisko`
--
ALTER TABLE `stanowisko`
  MODIFY `id_stanowisko` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `status_zadania`
--
ALTER TABLE `status_zadania`
  MODIFY `id_status` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `zadania`
--
ALTER TABLE `zadania`
  MODIFY `id_zadania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zadania`
--
ALTER TABLE `zadania`
  ADD CONSTRAINT `zadania_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pracownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
