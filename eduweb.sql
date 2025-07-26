-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 07:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card`
--

CREATE TABLE `tbl_card` (
  `tbl_card_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_card`
--

INSERT INTO `tbl_card` (`tbl_card_id`, `question`, `answer`) VALUES
(20, 'what is html', 'hyper text markup language '),
(21, 'what is js', 'Java Script '),
(23, 'what is www', 'world wide web');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `course`, `email`, `phone`, `password`) VALUES
(8, 'Guru Kiran', 'Male', 'Computer Science', 'kiranguru117@gmail.com', '7204045060', '$2y$10$5EHjt0vLpRAqKSeqddi3HeejqzlNfYIsVT1VrkYJyVCmH0iJiCKLS'),
(9, 'bobby', 'Male', 'Computer Science', 'guru@gamil.com', '7204045060', '$2y$10$F9LX1fvhi2821e1vMHXMHOzzcHFxHSAoiOxK4mmx7GEtYht3h8KLe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_card`
--
ALTER TABLE `tbl_card`
  ADD PRIMARY KEY (`tbl_card_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_card`
--
ALTER TABLE `tbl_card`
  MODIFY `tbl_card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
