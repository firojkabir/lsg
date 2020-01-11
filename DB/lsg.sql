-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 12, 2020 at 12:39 AM
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
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Computers, Tablets & Laptop', 1, NULL, NULL),
(3, 'Mobile & Gadgets', 1, NULL, NULL),
(4, 'Women\'s Clothing & Access.', 1, NULL, NULL),
(5, 'Men\'s Clothings & Access.', 1, NULL, NULL),
(6, 'Kids Clothing & Access.', 1, NULL, NULL),
(7, 'Food & Beverages', 1, NULL, NULL),
(8, 'Health & Beauty', 1, NULL, NULL),
(9, 'Sports & Leisure', 1, NULL, NULL),
(10, 'Books & Entertainments', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstname`, `lastname`, `email`, `password`, `phone`, `street`, `city`, `zip`, `country`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Firoz', 'Kabir', 'rimon@gmail.com', '$2y$10$43nkcAF7sbNSNXYW/C.Yl.57eUVXVxXQAe/PNTMtLv7GXA6wItCFW', '09876543765', 'Demo', 'FULDA', '36037', 'Germany', 1, NULL, '2020-01-11 12:06:09', '2020-01-11 12:06:09');

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
(15, '2017_11_20_051159_password_resets_admin', 4),
(17, '2020_01_10_232021_create_clients_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('POSTED','PUBLISHED','BLOCKED','RESERVED','SOLD','UNAVAILABLE','RETURNED') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'POSTED',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `status`, `image`, `image1`, `image2`, `thumb`, `path`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 'Macbook Air', 'Mackbook air from Apple.\r\n\r\nRam: 8gb\r\nRom 500 gb SSD\r\nScreen: 13.5\"', 555.00, 'POSTED', '1578783770_laptop.jpg', '1578783770_laptop.jpg', '1578783770_laptop.jpg', 'thumb_1578783770_laptop.jpg', 'assets/product/', 4, 2, NULL, NULL),
(8, 'Bike(Kids)', 'Bike for kids. \r\n\r\nRechargeable and driveable.', 250.00, 'POSTED', '1578784969_kids.jpg', '1578784969_kids.jpg', '1578784969_kids.jpg', 'thumb_1578784969_kids.jpg', 'assets/product/', 4, 6, NULL, NULL),
(9, 'Juice(Grape)', 'Juice made from black grapes. \r\n\r\nNo alcohol.', 2.00, 'POSTED', '1578785205_foods.jpg', '1578785205_foods.jpg', '1578785205_foods.jpg', 'thumb_1578785205_foods.jpg', 'assets/product/', 4, 7, NULL, NULL),
(10, 'Hand Wash(Dettol)', 'Dettol hand wash. \r\n\r\nTo disinfect your hands.', 10.00, 'POSTED', '1578785296_Health.jpg', '1578785296_Health.jpg', '1578785296_Health.jpg', 'thumb_1578785296_Health.jpg', 'assets/product/', 4, 8, NULL, NULL),
(11, 'Basket Ball', 'Wilson basket ball.\r\n\r\nKeep play it will make your body fit.', 45.00, 'POSTED', '1578785375_sports.jpg', '1578785375_sports.jpg', '1578785375_sports.jpg', 'thumb_1578785375_sports.jpg', 'assets/product/', 4, 9, NULL, NULL),
(12, 'Eat That From(1st Edition)', 'Eat that from is a best selling book. \r\n\r\nHelpful for self improvement.', 23.00, 'POSTED', '1578785469_books.jpeg', '1578785469_books.jpeg', '1578785469_books.jpeg', 'thumb_1578785469_books.jpeg', 'assets/product/', 4, 10, NULL, NULL),
(13, 'Shoe(Women)', 'Women\'s converse. \r\nEasy and comfortable to wear.', 48.00, 'POSTED', '1578785619_women.jpg', '1578785619_women.jpg', '1578785619_women.jpg', 'thumb_1578785619_women.jpg', 'assets/product/', 4, 4, NULL, NULL),
(14, 'Xiaomi AirDots', 'Xiaomi airdots\r\n\r\nBlack \r\nBluetooth', 18.00, 'POSTED', '1578785723_gadgets.jpg', '1578785723_gadgets.jpg', '1578785723_gadgets.jpg', 'thumb_1578785723_gadgets.jpg', 'assets/product/', 4, 3, NULL, NULL),
(15, 'Jacket(Men)', 'Winter jacket for men.\r\n\r\nWaterproof', 60.00, 'POSTED', '1578785806_men.jpeg', '1578785807_men.jpeg', '1578785807_men.jpeg', 'thumb_1578785806_men.jpeg', 'assets/product/', 4, 5, NULL, NULL);

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
(1, 'Jobayer Mojumder', 'jobayer.pro@gmail.com', 'admin', '$2y$10$w3izHy6CV.luwuDy36Ggw.NER3Z/ZmU7T6nwZPNBBTqxEXRpLAkvi', '1528090106_16299767_1402521006478179_360885980094480421_o.jpg', 'thumb_1528090106_16299767_1402521006478179_360885980094480421_o.jpg', 'assets/user/', 1, 'fglgHNtTvrJUa8lj90uUSzhvqkgzlhOjAuJbgfiLHBOXDpBG1Owv7cDG6gYc', NULL, '2017-09-28 00:23:16'),
(6, 'Rimon', 'rimon@gmail.com', 'customer', '$2y$10$w3izHy6CV.luwuDy36Ggw.NER3Z/ZmU7T6nwZPNBBTqxEXRpLAkvi', '', '', '', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
