-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2021 at 04:31 PM
-- Server version: 8.0.25
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

DROP TABLE IF EXISTS `foodmenu`;
CREATE TABLE IF NOT EXISTS `foodmenu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`id`, `name`, `price`) VALUES
(1, 'CHICKEN KOTTU', 'Rs.420'),
(2, 'HOT BUTTER CUTTLEFISH PIZZA - MEDIUM', 'Rs.850'),
(3, 'EGG KOTTU', 'Rs.350'),
(4, 'CHICKEN RICE & CURRY', 'Rs.180'),
(5, 'DUMBIRIYANI', 'Rs.220'),
(6, 'VEGGIE SUPREME PIZZA - SMALL', 'Rs.450'),
(7, 'VEG RICE & CURRY', 'Rs.140'),
(8, 'NAVARATHNA KURUMA', 'Rs.140'),
(9, 'CHICKEN SOUP', 'Rs.80'),
(10, 'PRAWN FRIED RICE', 'Rs.245'),
(11, 'CHICKEN PAKORA', 'Rs.200'),
(12, 'BUTTER NAAN', 'Rs.180'),
(13, 'SEAFOOD FRIED NOODLES', 'Rs.220'),
(14, 'MUSHROOM MASALA', 'Rs.325'),
(15, 'ALMOND & DATE CAKE', 'Rs.100'),
(16, 'APPLE BERRY CRUMBLE', 'Rs.150'),
(17, 'MALTESERS TIRAMISU', 'Rs.120'),
(18, 'DONNET', 'Rs.75'),
(19, 'HONEY CHEESE CAKE', 'Rs.50'),
(20, 'PINEAPPLE UPSIDE', 'Rs.160'),
(21, 'FRESH WATERMELON JUICE', 'Rs.125'),
(22, 'BLACK COFFEE', 'Rs.65'),
(23, 'ALMOND MILK', 'Rs.120'),
(24, 'ROSE DRINK', 'Rs.110');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Swarnaka', 'Swarna04'),
(2, 'admin', 'ad2512');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `name` varchar(30) NOT NULL,
  `contactNo` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nooforder` int NOT NULL,
  `restaurant` varchar(30) NOT NULL,
  `foodmenu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`name`, `contactNo`, `date`, `time`, `location`, `nooforder`, `restaurant`, `foodmenu`, `price`) VALUES
('denci', 779013030, '2021-06-16', '10:00:00', 'Point Pedro, Jaffna', 3, 'Valampuri', 'PRAWN FRIED RICE', 'Rs.245'),
('Dinesh', 775163165, '2021-06-06', '12:30:00', 'Railway Road, Kodikamam', 2, 'Green Grass Hotel & Restaurant', 'MUSHROOM MASALA', 'Rs.325'),
('Kirushana', 777420267, '2021-07-05', '15:00:00', '', 2, 'Valampuri', 'HONEY CHEESE CAKE, DUMBIRIYANI', 'Rs.220, Rs.50'),
('Sasmiya', 774171612, '2021-07-03', '16:30:00', 'Nallur Road, Jaffna', 1, 'Pizza Hut', 'HOT BUTTER CUTTLEFISH PIZZA - MEDIUM', 'Rs.850');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `place` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `place`) VALUES
(1, 'KFC', ' Hospital Rd, Jaffna 40000'),
(2, 'U.S. Restaurant', ' No. 855 Hospital St, Jaffna 40000  '),
(3, 'Green Grass Hotel & Restaurant', 'No.33 Aseervatham Lane, Jaffna 40000'),
(4, 'Peninsula Hotel', '53 Kandy Rd, Jaffna 40000'),
(5, 'Cosy Hotel & Restaurant', '266/1 Stanley Rd, Jaffna 40000'),
(6, 'Tilko Restaurant', ' 70/6, K.K.S. Road, Jaffna-Kankesanturai Rd, Jaffna 40000'),
(7, 'Malayan Cafe', 'C Ponnampalam Rd, Jaffna 40000'),
(8, 'Valampuri', '148/10 Railway, Station Rd, Jaffna 40000'),
(9, 'Pizza Hut', 'Hospital Rd, Jaffna 40000'),
(10, 'NallurBhavan Vegetarian', '250 Kovil Rd, Jaffna 40000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(25) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Denci', 'Denci', 'Ispampathy', 'denci04@gmail.com', 'Den2504'),
(2, 'Jensan', 'Jensan', 'Ispampathy', 'jen2512@gmail.com', 'Jens2591'),
(3, 'Anistan', 'Anistan', 'Stantilas', 'anistan19@gmail.com', 'anis21'),
(4, 'Simi', 'Simirna', 'vijiendran', 'simiviji@gmail.com', 'simi1208'),
(5, 'Pareeena', 'Spareena', 'Ispampathy', 'spareena1995@gmail.com', 'S301095');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
