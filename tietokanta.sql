-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 20, 2023 at 08:25 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hTiedotkanta`
--
CREATE DATABASE IF NOT EXISTS `hTiedotkanta` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `hTiedotkanta`;

-- --------------------------------------------------------

--
-- Table structure for table `hakemus`
--

CREATE TABLE `hakemus` (
  `id` int NOT NULL,
  `etunimi` varchar(100) NOT NULL,
  `sukunimi` varchar(100) NOT NULL,
  `puhelinnumero` varchar(10) NOT NULL,
  `osoite` varchar(100) NOT NULL,
  `postinumero` varchar(10) NOT NULL,
  `postitoimipaikka` varchar(100) NOT NULL,
  `syntymaaika` date NOT NULL,
  `sahkoposti` varchar(100) NOT NULL,
  `lisatietoja` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hakemus`
--

INSERT INTO `hakemus` (`id`, `etunimi`, `sukunimi`, `puhelinnumero`, `osoite`, `postinumero`, `postitoimipaikka`, `syntymaaika`, `sahkoposti`, `lisatietoja`) VALUES
(7, 'Toimiiko', 'Tää', 'Haloo???', 'Joo', 'Toimi', 'Varmaan', '2023-03-21', 'Ehka@gmail.com', 'joo'),
(8, 'assa', 'assaas', 'asassaas', 'asassasa', '33720', 'czxzcxzxc', '2023-02-20', 'Ehka@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakemus`
--
ALTER TABLE `hakemus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hakemus`
--
ALTER TABLE `hakemus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `kayttajatunnukset`
--
CREATE DATABASE IF NOT EXISTS `kayttajatunnukset` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `kayttajatunnukset`;

-- --------------------------------------------------------

--
-- Table structure for table `tunnukset`
--

CREATE TABLE `tunnukset` (
  `tunnus` varchar(100) NOT NULL,
  `salasana` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tunnukset`
--

INSERT INTO `tunnukset` (`tunnus`, `salasana`) VALUES
('Pena', 'accc9b78199e17dca3f419bd28352703');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tunnukset`
--
ALTER TABLE `tunnukset`
  ADD PRIMARY KEY (`tunnus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
