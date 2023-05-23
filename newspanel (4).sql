-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 06:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institute_names`
--

CREATE TABLE `institute_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_names`
--

INSERT INTO `institute_names` (`id`, `type_id`, `institute_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ekhushe', '2022-09-13 13:50:53', '2022-09-13 13:50:53'),
(2, 2, 'voice of asia', '2022-09-13 13:51:02', '2022-09-13 13:51:02'),
(3, 3, 'voice of asia1', '2022-09-13 13:51:12', '2022-09-13 13:51:12'),
(4, 1, 'bangla vision', '2022-09-13 22:40:25', '2022-09-13 22:40:25'),
(5, 2, 'dainik somgbad', '2022-09-14 06:45:38', '2022-09-14 06:45:38'),
(6, 1, 'ekhushe', '2022-09-15 05:34:18', '2022-09-15 05:34:18'),
(7, 1, 'wwwwww', '2022-09-15 05:34:41', '2022-09-15 05:34:41'),
(8, 3, 'voice of asia2', '2022-12-06 00:07:58', '2022-12-06 00:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `institute_types`
--

CREATE TABLE `institute_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_types`
--

INSERT INTO `institute_types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'Tv', '2022-09-13 13:50:25', '2022-09-13 13:50:25'),
(2, 'Print News Paper', '2022-09-13 13:50:33', '2022-09-13 13:50:33'),
(3, 'Online News Paper', '2022-09-13 13:50:40', '2022-09-13 13:50:40');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_16_045855_create_sessions_table', 1),
(7, '2022_08_16_054414_create_print_news_papers_table', 1),
(8, '2022_08_16_054609_create_online_news_papers_table', 1),
(9, '2022_08_16_054837_create_tvs_table', 1),
(10, '2022_09_13_132117_create_institute_names_table', 1),
(11, '2022_09_13_132215_create_version_names_table', 1),
(12, '2022_09_13_132243_create_page_names_table', 1),
(13, '2022_09_13_132328_create_prices_table', 1),
(14, '2022_09_13_133740_create_institute_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_news_papers`
--

CREATE TABLE `online_news_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspaper_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspaper_count` int(11) NOT NULL DEFAULT 0,
  `newspaper_price` int(11) NOT NULL,
  `newspaper_bkash_percentage` int(11) NOT NULL,
  `content_price` double(10,2) NOT NULL,
  `bkash_transaction_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_price_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_news_papers`
--

INSERT INTO `online_news_papers` (`id`, `title`, `sub_title`, `caption`, `main_description`, `reporter`, `bkash_no`, `image`, `newspaper_name`, `divisions`, `districts`, `police_station`, `newspaper_count`, `newspaper_price`, `newspaper_bkash_percentage`, `content_price`, `bkash_transaction_id`, `content_price_word`, `status`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশকে হালকাভাবে নেওয়ার সুযোগ নেই: প্রিটোরিয়াস | Bangladesh Cricket Team | Dwaine Pretorius', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnn', '<p>ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '9999999999999999999', '[\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/hand.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/icon.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/limelight.png\"]', '[\"3\"]', 'Chattogram', 'Chandpur', 'Faridganj', 1, 1500, 19, 1527.00, '33333333333333333333333333333333', 'zero', 0, '2022-11-12 01:24:41', '2022-11-12 01:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `page_names`
--

CREATE TABLE `page_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `version_id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_names`
--

INSERT INTO `page_names` (`id`, `type_id`, `institute_id`, `version_id`, `page_name`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '1st page1', '2022-09-13 13:54:03', '2022-09-13 14:08:45'),
(3, 2, 2, 2, 'last page', '2022-09-13 21:44:07', '2022-09-13 21:44:07'),
(4, 2, 2, 2, '1st page', '2022-09-13 21:44:26', '2022-09-13 21:46:34'),
(5, 2, 5, 5, 'last page', '2022-09-15 02:54:58', '2022-09-15 02:54:58');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `version_id` bigint(20) UNSIGNED DEFAULT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content_price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `type_id`, `institute_id`, `version_id`, `page_id`, `content_price`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 1, 2, 1200.00, '2022-09-13 21:31:01', '2022-09-13 21:31:01'),
(3, 1, 1, 1, 2, 1200.00, '2022-09-13 21:45:09', '2022-09-13 21:45:09'),
(4, 2, 2, 2, 3, 1200.00, '2022-09-14 07:02:09', '2022-09-14 07:02:09'),
(5, 2, 2, 2, 4, 120.00, '2022-09-14 07:02:36', '2022-09-14 07:02:36'),
(6, 2, 5, 5, 5, 1258.00, '2022-09-15 02:55:33', '2022-09-15 02:55:33'),
(7, 1, 1, NULL, NULL, 1580.00, '2022-11-11 23:15:31', '2022-11-11 23:15:31'),
(8, 3, 3, NULL, NULL, 1500.00, '2022-11-11 23:39:56', '2022-11-11 23:39:56'),
(9, 1, 4, NULL, NULL, 3000.00, '2022-12-03 02:08:00', '2022-12-03 02:08:00'),
(10, 1, 1, NULL, NULL, 4000.00, '2022-12-05 23:59:42', '2022-12-05 23:59:42'),
(11, 3, 8, NULL, NULL, 5000.00, '2022-12-06 00:08:28', '2022-12-06 00:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `print_news_papers`
--

CREATE TABLE `print_news_papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspaper_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspaper_count` int(11) NOT NULL DEFAULT 0,
  `newspaper_price` int(11) NOT NULL,
  `newspaper_bkash_percentage` int(11) NOT NULL,
  `content_price` double(10,2) NOT NULL,
  `bkash_transaction_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_price_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `print_news_papers`
--

INSERT INTO `print_news_papers` (`id`, `title`, `sub_title`, `caption`, `main_description`, `version`, `page`, `reporter`, `bkash_no`, `image`, `newspaper_name`, `divisions`, `districts`, `police_station`, `newspaper_count`, `newspaper_price`, `newspaper_bkash_percentage`, `content_price`, `bkash_transaction_id`, `content_price_word`, `status`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশকে হালকাভাবে নেওয়ার সুযোগ নেই: প্রিটোরিয়াস | Bangladesh Cricket Team | Dwaine Pretorius', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnn', '<p>hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>', '2', '3', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '9999999999999999999', '[\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/hand.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/icon.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/limelight.png\"]', 'null', 'Khulna', 'Jhenaidah', 'Kaliganj', 1, 1200, 19, 1222.00, '33333333333333333333333333333333', 'zero', 0, '2022-11-12 01:18:13', '2022-11-12 01:18:13'),
(2, 'বাংলাদেশকে হালকাভাবে নেওয়ার সুযোগ নেই: প্রিটোরিয়াস | Bangladesh Cricket Team | Dwaine Pretorius', 'nnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnn', '<p>ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>', '2', '3', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '9999999999999999999', '[\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/hand.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/icon.png\",\".\\/backend\\/assets\\/image\\/PrintNewsPaperImages\\/limelight.png\"]', '[\"2\"]', 'Chattogram', 'Chandpur', 'Faridganj', 1, 1200, 19, 1222.00, '33333333333333333333333333333333', 'zero', 0, '2022-11-12 01:35:25', '2022-11-12 01:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G3k0Qt1HofAsZHruhpbRqkgivscPVOUJ4iLJnzUU', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicHFDMWZVbGhYSVBMZ2JYeVBUbXdjbWFQSVc5Z1R5YXZQeGsxNU5wcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3QvTmV3c1BhbmVsL3B1YmxpYyI7fX0=', 1670564927);

-- --------------------------------------------------------

--
-- Table structure for table `tvs`
--

CREATE TABLE `tvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_google_drive_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reporter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tv_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `districts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newspaper_count` int(11) NOT NULL DEFAULT 0,
  `newspaper_price` int(11) NOT NULL,
  `newspaper_bkash_percentage` int(11) NOT NULL,
  `content_price` double(10,2) NOT NULL,
  `bkash_transaction_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_price_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tvs`
--

INSERT INTO `tvs` (`id`, `title`, `file_name`, `video_google_drive_link`, `reporter`, `main_description`, `bkash_no`, `tv_name`, `divisions`, `districts`, `police_station`, `newspaper_count`, `newspaper_price`, `newspaper_bkash_percentage`, `content_price`, `bkash_transaction_id`, `content_price_word`, `status`, `created_at`, `updated_at`) VALUES
(1, 'বাংলাদেশকে হালকাভাবে নেওয়ার সুযোগ নেই: প্রিটোরিয়াস | Bangladesh Cricket Team | Dwaine Pretorius', 'rrrrrrrrrrrrrrr', 'ffffffffffffffffffffffffffffff', 'iiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '<p>dddddddddddddddddddddddddddddddddddddddddddddddddddddd</p>', '9999999999999999999', '[\"1\"]', 'Barishal', 'Bhola', 'Bhola Sadar', 1, 1580, 19, 1609.00, '33333333333333333333333333333333', 'zero', 0, '2022-11-12 00:31:09', '2022-11-12 00:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$tzFOu/gOWgdK6a1/Vy6dJ.udAY5ht2MSDgK0nlD1Kiw8NngbzZeBW', NULL, NULL, NULL, 'user', NULL, NULL, NULL, '2022-09-13 13:49:54', '2022-09-13 13:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `version_names`
--

CREATE TABLE `version_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `institute_id` bigint(20) UNSIGNED NOT NULL,
  `version_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `version_names`
--

INSERT INTO `version_names` (`id`, `type_id`, `institute_id`, `version_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'black and white', '2022-09-13 13:51:58', '2022-09-13 13:51:58'),
(2, 2, 2, 'Color', '2022-09-13 21:43:30', '2022-09-13 21:43:30'),
(3, 2, 2, 'black and white', '2022-09-13 21:43:42', '2022-09-13 21:43:42'),
(4, 2, 2, 'black and white1', '2022-09-14 06:45:09', '2022-09-14 06:45:09'),
(5, 2, 5, 'black and white1', '2022-09-14 06:45:53', '2022-09-14 06:45:53');

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
-- Indexes for table `institute_names`
--
ALTER TABLE `institute_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute_types`
--
ALTER TABLE `institute_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_news_papers`
--
ALTER TABLE `online_news_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_names`
--
ALTER TABLE `page_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `print_news_papers`
--
ALTER TABLE `print_news_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tvs`
--
ALTER TABLE `tvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `version_names`
--
ALTER TABLE `version_names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute_names`
--
ALTER TABLE `institute_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `institute_types`
--
ALTER TABLE `institute_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `online_news_papers`
--
ALTER TABLE `online_news_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_names`
--
ALTER TABLE `page_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `print_news_papers`
--
ALTER TABLE `print_news_papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tvs`
--
ALTER TABLE `tvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `version_names`
--
ALTER TABLE `version_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
