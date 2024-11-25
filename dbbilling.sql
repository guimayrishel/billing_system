-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2024 at 07:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcrud`
--

CREATE TABLE `tbcrud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_called` time NOT NULL DEFAULT current_timestamp(),
  `time_arrived` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbcrud`
--

INSERT INTO `tbcrud` (`id`, `name`, `user_id`, `time_called`, `time_arrived`, `created_at`) VALUES
(1, 'Kristine', 1, '10:25:33', '14:28:56', '2024-11-21 02:25:33'),
(2, 'Leon', 1, '10:39:00', '14:29:05', '2024-11-21 02:39:00'),
(3, 'Nika', 1, '14:16:03', NULL, '2024-11-21 06:16:03'),
(4, 'Marce', 1, '14:17:32', NULL, '2024-11-21 06:17:32'),
(5, 'Ofel', 1, '10:39:41', '11:48:53', '2024-11-22 02:39:41'),
(6, 'Sheng', 1, '09:38:58', '10:03:13', '2024-11-25 01:38:58'),
(7, 'Shing', 2, '11:34:12', '13:36:17', '2024-11-25 03:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `password`, `username`, `email`, `firstname`, `middlename`, `lastname`, `created_at`) VALUES
(1, '$2y$10$82NnqVoX/GA6as8CKZ6Y3ueB69hkELdeOdlyuR0Ow9cX61yodiDKe', 'sheng', 'rishel@gmail.com', 'Rishel', 'Fieror', 'Guimay', '2024-11-20 13:27:32'),
(2, '$2y$10$yWi8.KVccAkuKSs6jF00w.syaRrajyQtjsrl7Tw9/1FMg47N2duBW', 'shung', 'guimayrishel@gmail.com', 'Shang', 'Sheng', 'Shing', '2024-11-25 03:23:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcrud`
--
ALTER TABLE `tbcrud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcrud`
--
ALTER TABLE `tbcrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
