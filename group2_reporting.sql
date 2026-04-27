-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 26, 2026 at 08:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group2_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `Get_Last_ID`
--

CREATE TABLE `Get_Last_ID` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Get_Last_ID`
--

INSERT INTO `Get_Last_ID` (`ID`, `firstname`, `lastname`) VALUES
(1, 'Artot', 'Dulaca'),
(3, 'Hello', 'World'),
(4, 'Earl', 'Balaoing'),
(5, 'Ambot', 'Ambot'),
(6, 'Ambot', 'Ambot'),
(7, 'Sabrina', 'Carpenter'),
(8, 'Lemuel', 'Ballaran'),
(9, 'Ricarte', 'Montaner'),
(10, 'Ricarte', 'Montaner'),
(11, 'Dalzen', 'Lorico'),
(12, 'Dalzen', 'Lorico'),
(13, 'idk', 'idk'),
(14, 'Hello', 'Hello'),
(16, 'World', 'Hello'),
(17, 'Hello', 'IDK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Get_Last_ID`
--
ALTER TABLE `Get_Last_ID`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Get_Last_ID`
--
ALTER TABLE `Get_Last_ID`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
