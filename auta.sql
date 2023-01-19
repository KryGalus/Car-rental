-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Sty 2023, 20:03
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `auta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `marka` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `model` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `nadwozie` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `rok` year(4) NOT NULL,
  `paliwo` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `silnik` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `km` int(11) NOT NULL,
  `typ` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `zdj` varchar(20) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oferta`
--

INSERT INTO `oferta` (`id`, `marka`, `model`, `nadwozie`, `rok`, `paliwo`, `silnik`, `km`, `typ`, `zdj`) VALUES
(1, 'VW', 'Golf4', 'coupe', 2015, 'benzyna', '1.6', 80, '1', 'z1'),
(2, 'Volvo', 'S60', 'sedan', 2020, 'diesel', '2.0', 170, '1', 'z2'),
(3, 'BMW', 'E90', 'sedan', 2016, 'diesel', '2.2', 140, '1', 'z3'),
(4, 'Peguot', 'RCZ', 'coupe', 2012, 'benzyna', '1.4', 70, '1', 'z4'),
(5, 'Opel', 'Movano', 'van', 2017, 'diesel', '2.0', 130, '2', 'z5'),
(6, 'Renault', 'Master', 'bus', 2018, 'diesel', '2.2', 150, '2', 'z6'),
(7, 'Mercedes', 'Sprinter', 'bus', 2020, 'diesel', '2.0', 120, '2', 'z7'),
(8, 'Opel', 'Vivaro', 'van', 2015, 'benzyna', '2.0', 100, '2', 'z8'),
(9, 'Toyota', 'Yaris', 'kombi', 2018, 'benzyna', '1.4', 80, '3', 'z9'),
(10, 'VW', 'PoloV', 'hatchback', 2016, 'benzyna', '1.2', 70, '3', 'z10'),
(11, 'Fiat', '500', 'hatchback', 2016, 'benzyna', '1.4', 80, '3', 'z11'),
(12, 'Peguot', '207', 'kombi', 2012, 'diesel', '1.6', 90, '3', 'z12'),
(13, 'Citroen', 'C-crosser', 'suv', 2017, 'diesel', '2.0', 140, '4', 'z13'),
(14, 'Toyota', 'Rav4', 'suv', 2021, 'diesel', '2.5', 180, '4', 'z14'),
(15, 'BMW', 'X5', 'suv', 2020, 'benzyna', '3.0', 240, '4', 'z15'),
(16, 'Mercedes', 'GLE', 'suv', 2019, 'benzyna', '2.5', 200, '4', 'z16'),
(17, 'Ford', 'Mustang', 'coupe', 2018, 'benzyna', '2.3', 290, '5', 'z17'),
(18, 'Dodge', 'Challanger', 'coupe', 2017, 'benzyna', '3.0', 300, '5', 'z18'),
(19, 'Audi', 'R8', 'coupe', 2020, 'benzyna', '5.2', 570, '5', 'z19'),
(20, 'Chevrolet', 'Camaro', 'coupe', 2020, 'benzyna', '7.0', 430, '5', 'z20');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
