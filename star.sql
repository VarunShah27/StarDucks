-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 03:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fav` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `views` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `name`, `gender`, `country`, `fav`, `contact`, `views`) VALUES
(1, 'test@1', 'test', 'on', 'Australia', 'dac', 789465, ''),
(2, 'test@2', 'test', 'on', 'U.K.', 'cappo', 789465, ' tydacsfsags. ');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `name`, `price`) VALUES
(1, 'Cappuchino', 150),
(2, 'EspressoFrappuccino', 145),
(3, 'TazoTea', 180),
(4, 'CheeseSandwich', 200),
(5, 'CaffèLatte', 150),
(6, 'CaramelFrappuccino', 200),
(7, 'HotChocolate', 100),
(8, 'PaneerRoll', 200),
(9, 'IcedCaffèLatte', 250),
(10, 'CookieFrappuccino', 300),
(11, 'ChinaGreen', 120),
(12, 'CrunchCake', 175),
(13, 'CaffèAmericano', 500),
(14, 'MochaFrappuccino', 200),
(15, 'IcedShakenHibiscusTea', 300),
(16, 'Cheesecake', 120),
(17, 'CookieLatte', 30),
(18, 'PralineFrappuccino', 330),
(19, 'IcedShakenBlackTea', 210),
(20, 'Muffin', 70),
(21, 'CaffèMocha', 210),
(22, 'NutFrappuccino', 250),
(23, 'EarlGreyTea', 250),
(24, 'ChocolateMuffin', 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
