-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 11:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `published_year` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `published_year`, `created_at`, `updated_at`) VALUES
(1, 'tiger in the forest', 'him', 'genre 1', '2025', '2024-06-07 01:48:20', '2024-06-07 02:05:30'),
(2, 'Book 2', 'Author 2', 'Genre 2', '2000', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(3, 'Book 3', 'Author 3', 'Genre 3', '2001', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(4, 'Book 4', 'Author 4', 'Genre 4', '2023', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(5, 'Book 5', 'Author 5', 'Genre 5', '2002', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(6, 'Book 6', 'Author 6', 'Genre 6', '2003', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(7, 'Book 7', 'Author 7', 'Genre 7', '2004', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(8, 'Book 8', 'Author 8', 'Genre 8', '2005', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(9, 'Book 9', 'Author 9', 'Genre 9', '2006', '2024-06-07 01:48:20', '2024-06-07 01:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_records`
--

CREATE TABLE `borrow_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrow_records`
--

INSERT INTO `borrow_records` (`id`, `user_id`, `book_id`, `borrow_date`, `return_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(2, 2, 2, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(3, 3, 3, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(4, 4, 4, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(5, 5, 5, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(6, 6, 6, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(7, 7, 7, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(8, 8, 8, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(9, 9, 9, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(10, 10, 10, '2021-01-01', '2021-02-01', '2024-06-07 01:48:20', '2024-06-07 01:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_07_065342_create_borrow_records_table', 1),
(6, '2024_06_07_065412_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(2, 'user', 'user', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(3, 'user2', 'user2', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(4, 'user3', 'user3', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(5, 'user4', 'user4', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(6, 'user5', 'user5', '2024-06-07 01:48:19', '2024-06-07 01:48:19'),
(7, 'user6', 'user6', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(8, 'user7', 'user7', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(9, 'user8', 'user8', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(10, 'user9', 'user9', '2024-06-07 01:48:20', '2024-06-07 01:48:20'),
(12, 'hak', 'hak@gmail.com', '2024-06-07 02:06:18', '2024-06-07 02:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_records`
--
ALTER TABLE `borrow_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrow_records`
--
ALTER TABLE `borrow_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
