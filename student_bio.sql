-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 01:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_bio`
--

CREATE TABLE `student_bio` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `about_me` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_bio`
--

INSERT INTO `student_bio` (`student_id`, `first_name`, `last_name`, `mid_name`, `adress`, `contact`, `about_me`) VALUES
(2, 'Saheed', 'Olayinka', 'Olayemi', 'Ikire Town', '0812324123', 'PHP is just another programming language!'),
(3, 'Naheemot', 'Alabi', 'Ajoke', 'Ogun State', '9084625473', 'I\'m a gentle girl'),
(4, 'Farouq', 'Osuolale', 'Akolade', 'Ibadan, Oyo', '08034356754', 'Nice man '),
(5, 'Farouq', 'Osuolale', 'Akolade', '6 Niyi Adedun Sabintu Sabo Sag', '08034356754', 'A computer Scientist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_bio`
--
ALTER TABLE `student_bio`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_bio`
--
ALTER TABLE `student_bio`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
