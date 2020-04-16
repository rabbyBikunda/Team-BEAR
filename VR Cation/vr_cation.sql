-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 11:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vr_cation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `tour_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`tour_id`, `name`, `user_email`, `rating`) VALUES
(11, 'Aran Islands', 'bikunda@gmail.com', 3.5),
(13, 'Aran Islands', 'test@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_tours`
--

CREATE TABLE `uploaded_tours` (
  `user_email` varchar(100) NOT NULL,
  `location_name` varchar(50) NOT NULL,
  `info` varchar(500) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_tours`
--

INSERT INTO `uploaded_tours` (`user_email`, `location_name`, `info`, `name`, `phone`) VALUES
('bikunda@gmail.com', 'jvwefuvwefvyewifwkehf', 'hbiohuobonlunlunln', 'iviyvyiviyiyv', '0891234567'),
('rabby@gmail.com', 'YOOOOOOOOOOO', 'fgsgsgsdggsddgs', 'patrick', '0891234567'),
('test@gmail.com', 'My location', 'Arrows should be green', 'Patrick', '0891234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(33, 'bikunda@gmail.com', 'bikunda', '$2y$10$qp57YfarGLTHw7wDCZxLSOoEig/QNcUvgij8XJf66QW2Ro.rFtZ8O'),
(35, 'rabby@gmail.com', 'rabi', '$2y$10$vzj0zPk.WwtYDFyFuvLzGe6exQ1HHHYM0YrK8M04G9PhD2dn09Wi.'),
(36, 'test@gmail.com', 'test', '$2y$10$elJnA1SF2Xp3zv2RgDTSB.0U3vfpsjGJ451lZgpjqiHiahiEVYVUm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `uploaded_tours`
--
ALTER TABLE `uploaded_tours`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
