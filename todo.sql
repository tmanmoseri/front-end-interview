-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2021 at 02:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_18_132757_create_todo_lists_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todo_lists`
--

CREATE TABLE `todo_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todo_lists`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mogale Andries Moseri', 'admin@covid.com', '$2y$10$X/45YIHm2hci7dqKlRIHaOQOy/pC5kPeMK.qhqw5o0cqMLqa.BwD2', NULL, '2021-02-19 08:50:36', '2021-02-19 08:50:36'),
(2, 'Mogale Andries Moseri', '2@gmail.com', '$2y$10$ig0leRyiPsAzbiyLWRlkbO33f3X8ol7mgOYr6JjBzmvj5LlGI6TFG', 'ULL3OPeFN9Mfts6fuQbldIt8PgSQNaZBAeQBlBmQcMz5mpcLU6w5kPdHXXEG', '2021-02-19 08:59:34', '2021-02-19 08:59:34'),
(3, 'Save Jeffrey Ngobeni', '3@gmail.com', '$2y$10$DSJxvugNWei1HWCcangB0.r3eksrtMDLcE5v2zwHB7BitNDh8cmNu', NULL, '2021-02-19 09:04:08', '2021-02-19 09:04:08'),
(5, 'Save Ngobeni', '4@gmail.com', '$2y$10$v0D76H2x9j5Tc03DyllVx.w88S4KI3w9UvPqA42okKewY.JE40Nbi', NULL, '2021-02-19 09:05:35', '2021-02-19 09:05:35'),
(6, 'Save Ngobeni', '5@gmail.com', '$2y$10$YslGeBMphduPPUweO3xvKu1kEklCqbgJ15svgkWP0SUy6O0k/VLFC', NULL, '2021-02-19 09:06:02', '2021-02-19 09:06:02'),
(7, 'Z DIDI', 'a@gmail.com', '$2y$10$dGzSuGVB6QTTWUMxuxI7Fud0jCGCtx90ezIhO6aSetM9b2FOCE.W.', NULL, '2021-02-19 09:08:41', '2021-02-19 09:08:41'),
(8, '66666', '6@gmail.com', '$2y$10$b8GKGFxSYg6ZYAYRaAax6uh4XUps8pHtKWIZwDPObLDBtIf0EkmSG', NULL, '2021-02-19 09:10:50', '2021-02-19 09:10:50'),
(9, 'Save Jeffrey Ngobeni b', '7@gmail.com', '$2y$10$jGMvkwysadzmoinCllTZs.HCw5c0AXw4RLbpf0Xqs.ulZdoECoUyW', NULL, '2021-02-19 09:25:30', '2021-02-19 09:25:30'),
(10, 'Mogale Andries Moseri', 'q@gmail.com', '$2y$10$HRE5MKmx2HeGTx42059qw.ebIljQ2A7.k6GlyWAlkvjbMhuB/uIcu', NULL, '2021-02-19 09:29:05', '2021-02-19 09:29:05'),
(12, 'Mogale Andries Moseri', 'w@gmail.com', '$2y$10$8uDN.vwmVh1Js8wj/Bn/2.GTHDE1cV50hqqfzIXx126giQJnZaZ7K', NULL, '2021-02-19 09:33:35', '2021-02-19 09:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `todo_lists`
--
ALTER TABLE `todo_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todo_lists`
--
ALTER TABLE `todo_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
