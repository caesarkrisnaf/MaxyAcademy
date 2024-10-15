-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 10:11 AM
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
-- Database: `day26`
--

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
(5, '2024_10_15_071937_create_products_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(2, 'placeat', 'Nihil hic vero quaerat necessitatibus.', 52.91, 69, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(3, 'voluptatem', 'Laudantium laborum atque voluptatem nulla vel.', 70.57, 25, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(4, 'eum', 'Eaque ab est quas dolor.', 74.30, 81, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(5, 'temporibus', 'Rem consequatur exercitationem quia reprehenderit accusamus.', 70.16, 37, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(6, 'maiores', 'Omnis cupiditate ratione excepturi sunt quod recusandae distinctio.', 14.99, 78, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(7, 'possimus', 'Quo numquam voluptas quo et.', 61.62, 36, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(8, 'aut', 'Eius voluptas voluptate quam eos sapiente quibusdam aspernatur consequatur.', 86.74, 1, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(9, 'et', 'Ut ut aut reprehenderit voluptatem aut voluptatem cupiditate minus.', 89.22, 2, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(10, 'deserunt', 'Rerum id totam est ea.', 94.50, 91, '2024-10-15 00:35:29', '2024-10-15 00:35:29'),
(11, 'sed', 'Quas est consequatur qui molestiae.', 82.82, 9, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(12, 'blanditiis', 'Est a qui id et sed blanditiis debitis maiores.', 77.86, 3, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(13, 'nesciunt', 'Eveniet rerum quidem omnis vero debitis molestias.', 40.84, 4, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(14, 'error', 'Nulla minus quas beatae eaque.', 25.01, 88, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(15, 'consequatur', 'Dolor suscipit est provident laborum excepturi accusamus earum.', 91.73, 98, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(16, 'ratione', 'Sunt dolores porro numquam natus.', 74.31, 28, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(17, 'qui', 'Optio accusantium recusandae blanditiis at.', 59.15, 87, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(18, 'est', 'Id consectetur excepturi voluptatem modi atque sed repudiandae.', 92.99, 94, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(19, 'et', 'Et omnis et animi cumque non aliquam aut iste.', 98.49, 64, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(20, 'ea', 'A voluptatem eos totam magnam quos doloremque ab provident.', 28.03, 55, '2024-10-15 00:35:57', '2024-10-15 00:35:57'),
(21, 'kepo', 'aaaaa', 22.33, 3, '2024-10-15 00:56:23', '2024-10-15 00:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
