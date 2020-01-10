-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2020 at 12:45 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsg`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at_ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `morelink` varchar(50) DEFAULT NULL,
  `morelinkweb` varchar(255) DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `details` text,
  `image` varchar(256) NOT NULL,
  `thumb` varchar(256) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `hstatus` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `title`, `morelink`, `morelinkweb`, `rank`, `details`, `image`, `thumb`, `image_path`, `hstatus`, `status`, `created_at`) VALUES
(11, 'Slider 1', NULL, NULL, 1, NULL, '1575823554_Web_Pic_1.jpg', 'thumb_1575823554_Web_Pic_1.jpg', 'public/assets/home/slider/', 1, 1, '2019-10-14 07:51:30'),
(12, 'Slider 2', NULL, NULL, 2, NULL, '1571723174_Aamar-Account-banner.jpg', 'thumb_1571723174_Aamar-Account-banner.jpg', 'public/assets/home/slider/', 1, 1, '2019-10-14 07:51:59'),
(13, 'Slider 3', NULL, NULL, 3, NULL, '1571723143_IFIC_Aamar-Card.jpg', 'thumb_1571723143_IFIC_Aamar-Card.jpg', 'public/assets/home/slider/', 1, 1, '2019-10-14 07:56:32'),
(14, 'Slider 4', NULL, NULL, 1, NULL, '1575823940_Shohoj_ Website_1920 px X 668 px_4-12-19-01.jpg', 'thumb_1575823940_Shohoj_ Website_1920 px X 668 px_4-12-19-01.jpg', 'public/assets/home/slider/', 1, 1, '2019-10-14 08:00:00'),
(15, 'slider 5', NULL, NULL, 5, NULL, '1571723121_IFIC-Aamar-Bank.jpg', 'thumb_1571723121_IFIC-Aamar-Bank.jpg', 'public/assets/home/slider/', 1, 1, '2019-10-14 08:44:32'),
(16, 'IFIC Aamar Bari', NULL, 'https://www.ificbank.com.bd/personal/ific-aamar-bari', -1, NULL, '1575739421_Amar-Bari_we-banner_v2.jpg', 'thumb_1575739421_Amar-Bari_we-banner_v2.jpg', 'public/assets/home/slider/', 1, 1, '2019-12-07 17:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 3),
(13, '2014_10_12_100000_create_password_resets_table', 3),
(11, '2017_09_19_063044_users', 2),
(14, '2017_11_20_051139_admins', 4),
(15, '2017_11_20_051159_password_resets_admin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('POSTED','PUBLISHED','BLOCKED','RESERVED','SOLD','UNAVAILABLE','RETURNED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'POSTED',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `publish_date` datetime DEFAULT NULL,
  `blocking_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `thumb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `group`, `password`, `image`, `thumb`, `image_path`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jobayer Mojumder', 'jobayer.pro@gmail.com', 'admin', '$2y$10$w3izHy6CV.luwuDy36Ggw.NER3Z/ZmU7T6nwZPNBBTqxEXRpLAkvi', '1528090106_16299767_1402521006478179_360885980094480421_o.jpg', 'thumb_1528090106_16299767_1402521006478179_360885980094480421_o.jpg', 'assets/user/', 1, '4h9uT9Mjbi16p9zkbVZ5PcnRuqsd2c87b84akBRU5B4ORzD2CZutenTZXiO2', NULL, '2017-09-28 00:23:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
