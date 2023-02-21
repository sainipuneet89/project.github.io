-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 01:34 PM
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
-- Database: `website1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` bigint(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile_number`, `status`, `password`, `images`) VALUES
(1, 'yash', 'yash566@gmail.com', 8607086741, 1, 'd39b5a3b8a1f761686687e10a77d369ab8e97f03', 'yash.jpg'),
(2, 'aarav', 'aarav123@gmail.com', 9527370001, 1, '163f6ff7dbd39e2a5b00394bd1aaacedbb142aa3', 'aarav.jpg'),
(3, 'anvi', 'anvi0122@gmail.com', 8607237767, 0, '8fa77804684166498636e1050dfbfe9cd0746b52', 'imgg.jpg'),
(4, 'simmi', 'simmi555@gmail.com', 68587686, 1, '6b6e40f2f12e4ef4ad014e83d0340dc7da9eb672', 'emoji-face-boy-cap-emoji-face-boy-cap-125270919.jpg'),
(5, 'anaya', 'anaya000@gmail.com', 8607237767, 0, '2e27150d0898944bfbfecdca98bde28760322855', 'anaya.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
