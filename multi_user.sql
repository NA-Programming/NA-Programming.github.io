-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2018 at 10:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` int(5) NOT NULL,
  `password` int(6) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Ero Kurnia Ramadani', 15852, 080705, 1),
(2, 'Annura Fauzi', 15850, 120804, 2),
(3, 'Reza Ardiansyah Malik', 15881, 080305, 3),
(4, 'M. Hakim Aufa Al-Manik', 15872, 160704, 4),
(5, 'M. Habibillah Adiputra Asnan', 15860, 030904, 5),
(6, 'Moh. Sahil Fahma I.', 15868, 151004, 6),
(7, 'Fogus Rudy Adhitama', 15855, 130304, 7),
(8, 'Mohammad Alwy Kurniawan', 15870, 010105, 8),
(9, 'Imam Mahfudz', 15857, 101204, 9),
(10, 'Iqbal Adam N. M.', 15858, 140704, 10),
(11, 'Adnan Kasogi', 15845, 030404, 11),
(12, 'M. Hilmy F.R.', 15861, 260604, 12),
(13, 'M. Rabbani Dilladayana', 15876, 021204, 13),
(14, 'Ferdian Akmal Nazid', 15854, 150904, 14),
(15, 'Muhammad Jimly A. ', 15875, 050405, 15),
(16, 'M. Irhash Izzuddin Nur', 15874, 051104, 16),
(17, 'M. Nazdif Al Muzaki', 15862, 070504, 17),
(18, 'A. Farhan Nawawi', 15847, 120305, 18),
(19, 'A. Aziz Ubaidillah F.A.', 15846, 151104, 19),
(20, 'Faza Hidayatullah', 15853, 123456, 20),
(21, 'M. Farhan Aziz', 15859, 280904, 21),
(22, 'Moh. Risky', 15867, 300904, 22),
(23, 'M. Tabaroku Rifai', 15866, 250205, 23),
(24, 'Naufal Yudhistira Tsani', 15880, 123456, 24),
(25, 'Dimas Mahendra Ardianto', 15851, 071004, 25),
(26, 'Moch. Zidani Arifin', 15864, 161004, 26),
(27, 'Rizal Fadhli Muhammad', 15882, 040704, 27),
(28, 'Wahyu Jihat F.M.', 15956, 240405, 28),
(29, 'Muh. Fatkhur T.R.', 15871, 250505, 29),
(30, 'Rizal Prastiyo Abidin', 15953, 060205, 30),
(31, 'Bima Kurniawan A.R', 15924, 211104, 31),
(32, 'Muh Fatkhur Nurochim', 15942, 290404, 32),
(33, 'M. Rizal Fauzi', 15879, 123456, 33),
(34, 'M. Muchsin Hariri', 15873, 260404, 34);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
