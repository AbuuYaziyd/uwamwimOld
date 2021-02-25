-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 09:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uwam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admn`
--

CREATE TABLE `admn` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admn`
--

INSERT INTO `admn` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Abou', 'Yaziyd', 'abuuyaziyd@gmail.com', 'kirosa28');

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `id` int(11) NOT NULL,
  `yield` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`id`, `yield`, `amount`, `userID`, `created`) VALUES
(4, 'embe', 10, 'UWAM722022021', '2021-02-23'),
(5, 'Biringanya', 30, 'UWAM722022021', '2021-02-23'),
(6, 'Biringanya', 30, 'UWAM722022021', '2021-02-23'),
(7, 'Nyanya Chungu', 40, 'UWAM0212021', '2021-02-23'),
(8, 'Cabbage', 20, 'UWAM0212021', '2021-02-24'),
(9, 'Matango', 50, 'UWAM822022021', '2021-02-25'),
(10, 'Cabbage', 30, 'UWAM822022021', '2021-02-25'),
(11, 'Bamia', 40, 'UWAM822022021', '2021-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passwod` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `userID` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `district` varchar(40) NOT NULL,
  `grp` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwod`, `gender`, `userID`, `phone`, `district`, `grp`, `age`, `created`) VALUES
(6, 'Abou Yaziyd', 'Gora', 'M', 'UWAM0212021', 2147483647, 'Magharibi A', 'Gora', 29, '2021-02-18'),
(7, 'Bakari Juma Hamudi', 'west', 'M', 'UWAM722022021', 2147483647, 'Kaskazini B', 'west', 35, '2021-02-22'),
(9, 'Ali Bakari Simai', 'fhgkjh', 'M', 'UWAM822022021', 784175134, 'Kaskazini A', 'fhgkjh', 29, '2021-02-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admn`
--
ALTER TABLE `admn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userID_2` (`userID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admn`
--
ALTER TABLE `admn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prod`
--
ALTER TABLE `prod`
  ADD CONSTRAINT `prod_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
