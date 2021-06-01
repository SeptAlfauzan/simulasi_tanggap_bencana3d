-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2021 at 03:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `animations`
--

CREATE TABLE `animations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) NOT NULL,
  `scenes_id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `scale` double(10,2) NOT NULL,
  `background_color` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animations`
--

INSERT INTO `animations` (`id`, `position`, `scenes_id`, `path`, `scale`, `background_color`, `description`, `author_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '/file-1620447402.gltf', 25.80, '0xff0000', 'asdasd asdsad asdasd asdasd', 1, '2021-05-03 08:30:15', '2021-05-21 09:01:57'),
(7, 3, 1, '/file-1620483082.gltf', 1.00, '0x000000', 'tes lorem lorem', 4, '2021-05-05 00:29:59', '2021-05-21 09:01:57'),
(8, 1, 2, '/file-1620262916.gltf', 11.80, '0xff0e0e', 'tes', 4, '2021-05-05 18:01:56', '2021-05-20 23:37:20'),
(9, 1, 6, '/file-1620782563.gltf', 20.50, '0x000000', 'Jonathan Joestar, the first jojo', 4, '2021-05-11 18:19:38', '2021-05-11 18:24:17'),
(10, 2, 6, '/file-1620782631.gltf', 20.50, '0x000000', 'Joseph Joestar', 4, '2021-05-11 18:23:51', '2021-05-11 18:24:17'),
(11, 2, 3, '/file-1621384680.gltf', 20.50, '0x000000', 'scene 1. Ketika terjadi getaran akibat gempa, usahakan untuk tidak panik.', 3, '2021-05-18 17:38:00', '2021-05-24 19:25:36'),
(12, 3, 3, '/file-1621384852.gltf', 20.50, '0x000000', 'scene 2. Segera tinggalkan ruangan, dan usahakan jangan membawa apapun, karena berpotensi memperlambat gerak anda ketika meninggalkan ruangan', 3, '2021-05-18 17:40:52', '2021-05-24 19:25:36'),
(13, 4, 3, '/file-1621384901.gltf', 20.50, '0x000000', 'scene 3. Jika anda tidak berada pada lantai satu, usahakan memakai tangga darurat daripada lift.', 3, '2021-05-18 17:41:41', '2021-05-24 19:25:36'),
(14, 1, 3, '/file-1621385009.gltf', 20.50, '0x000000', 'scene 4. Segera setelah berada pada tempat yang lapang, cari informasi terkait gempa yang sedang terjadi, tentunya lewat sumber yang resmi, seperti akun twitter resmi dari BMKG.', 3, '2021-05-18 17:43:29', '2021-05-24 19:25:36'),
(15, 2, 1, '/file-1621389681.gltf', 20.50, '0x000000', 'tes tes', 10, '2021-05-18 19:01:21', '2021-05-21 09:01:57'),
(17, 2, 2, '/file-1621906900.gltf', 20.50, '0x000000', 'asdasd', 3, '2021-05-24 18:41:40', '2021-05-24 18:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_27_231729_create_scenes_table', 1),
(5, '2021_04_27_231804_create_animations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scenes`
--

CREATE TABLE `scenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scenes`
--

INSERT INTO `scenes` (`id`, `author_id`, `nama`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 'percobaan ini telah ', NULL, '2021-05-03 07:55:29', '2021-05-15 06:01:03'),
(2, 4, 'tes', NULL, '2021-05-05 00:23:39', '2021-05-05 00:23:39'),
(3, 4, 'gempa bumi', NULL, '2021-05-05 00:26:37', '2021-05-24 19:42:04'),
(4, 4, 'asd', NULL, '2021-05-08 20:35:22', '2021-05-21 00:52:33'),
(5, 4, 'asd', '2021-05-18 17:17:14', '2021-05-08 20:35:38', '2021-05-18 17:17:14'),
(6, 4, 'Jojo Bizzare Adventure', '2021-05-18 17:17:09', '2021-05-11 18:13:02', '2021-05-18 17:17:09'),
(7, 4, 'Hello world', '2021-05-11 23:57:44', '2021-05-11 23:57:27', '2021-05-11 23:57:44'),
(8, 3, 'Septa Alfauzan', NULL, '2021-05-21 00:53:40', '2021-05-21 00:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('contributor','administrator') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'contributor',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Rafif Habibillah', 'rafifhabibillah354@gmail.com', NULL, '$2y$10$bvhM1WCAmSNuA.3vbiWaaeNw9UyGO1b8BM5fAt/Edogkav/po5MZ.', 'administrator', NULL, NULL, '2021-05-01 14:36:17', '2021-05-15 10:17:56'),
(3, 'coba', 'coba@coba.com', NULL, '$2y$10$dfkP0v2BdRK0xfIhzBMXR.I5ltCrFFSbOxFeqJ0iKX2CWZ7MH.9ai', 'administrator', NULL, NULL, '2021-05-01 14:37:38', '2021-05-01 14:37:38'),
(4, 'admin', 'admin@admin.com', NULL, '$2y$10$DgItqZWzsbBwFm0k6K.jT.a8xRms.6BnINL9ViUvJmsVRTYX.5.lS', 'administrator', NULL, NULL, '2021-05-01 14:39:03', '2021-05-15 11:23:12'),
(6, '082132351498', 'alfauzansepta@gmail.com', NULL, '$2y$10$JQq5r.VSBzJ9OXudl8xyXe2ZirAOeiIyQZFs7lTLxXTJODGRakFUu', 'contributor', NULL, NULL, '2021-05-13 10:16:23', '2021-05-15 11:39:40'),
(7, '082132351498', 'alfauzanseptaasd@gmail.com', NULL, '$2y$10$5NstBxEeN4UoTP58k3UolO42uyak85OSb9Xk7FJWFVhVw0jvOj3IS', 'administrator', NULL, NULL, '2021-05-15 10:34:22', '2021-05-15 11:39:42'),
(8, 'ruly ruly', 'ruly@gmail.com', NULL, '$2y$10$NpJ/Pzu1rFcgxxe3jAcPvO2/8TNofIlwk8JtsuuUbQ4b5iqcfaJB.', 'contributor', NULL, NULL, '2021-05-18 18:27:45', '2021-05-23 06:59:27'),
(10, 'ruly ruly', 'rulyajah@gmail.com', NULL, '$2y$10$7n8Rt/2lM126AH5kt3JAaOGrKZLVoMgNCFnh13NQJ5BhcPChI61aS', 'contributor', NULL, NULL, '2021-05-18 18:49:39', '2021-05-21 01:00:36'),
(11, 'Mark zuck', 'asd@gmail.com', NULL, '$2y$10$ggxgqBcWR1EgTpPMK.nkgOQhbEZNGCmQpmdrglkMtdckxE.vlgybm', 'administrator', NULL, '2021-05-21 01:00:09', '2021-05-21 00:59:39', '2021-05-21 01:00:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animations`
--
ALTER TABLE `animations`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `scenes`
--
ALTER TABLE `scenes`
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
-- AUTO_INCREMENT for table `animations`
--
ALTER TABLE `animations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `scenes`
--
ALTER TABLE `scenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
