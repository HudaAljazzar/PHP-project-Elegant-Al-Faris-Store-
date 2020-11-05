-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 01:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `play_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `sill_user`
--

CREATE TABLE `sill_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `day_date` datetime NOT NULL DEFAULT current_timestamp()
) ;

--
-- Dumping data for table `sill_user`
--

INSERT INTO `sill_user` (`id`, `email`, `address`, `phone`, `bank_name`, `day_date`) VALUES
(1, 'huda2130134@gmail.com', 'rafah', '05987', 'palestim', '2020-04-26 16:20:02'),
(2, 'huda2130134@gmail.com', 'palestine-gaza', '0597149902', 'alqudes', '2020-04-26 16:21:58'),
(3, 'ahmed2130134@gmail.com', 'amman', '44532', 'palestine', '2020-04-26 16:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `date`) VALUES
(1, 'huda ', '23011', '2020-04-21 14:31:18'),
(2, 'lama lamssray', '12345', '2020-04-21 14:31:18'),
(3, 'Yageen', '0532195', '2020-04-21 14:31:18'),
(4, 'Hoor Alhamas', '456', '2020-04-21 14:31:18'),
(5, 'nour abo ansa', '789456', '2020-04-24 17:23:17'),
(6, 'omar', '123', '2020-04-26 15:59:26'),
(7, 'omar', '123', '2020-04-26 16:00:00'),
(8, '2301183046', 're', '2020-04-26 16:00:10'),
(9, '2301183046', 're', '2020-04-26 16:01:13'),
(10, 'omar', 'nm,', '2020-04-26 16:05:47'),
(11, 'omar', 'nm,', '2020-04-26 16:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sill_user`
--
ALTER TABLE `sill_user`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sill_user`
--
ALTER TABLE `sill_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
