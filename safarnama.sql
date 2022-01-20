-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 10:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safarnama`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `post_id`, `user_id`, `comment`) VALUES
(1, 92, 33, 'Thanks for sharing your expierence');

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `id` int(11) NOT NULL,
  `continent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` int(11) NOT NULL,
  `continent_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `parents_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `continent_name`, `status`, `parents_id`) VALUES
(2, 'Africa', 1, 0),
(3, 'Europe', 1, 0),
(4, 'North America', 1, 0),
(5, 'South America', 1, 0),
(6, 'Antarctica', 1, 0),
(7, 'Austraila', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `continet_id` int(11) NOT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(5, '2014_10_12_000000_create_users_table', 2),
(13, '2021_12_16_175311_create_continent_table', 3),
(14, '2021_12_16_182806_create_counrty_table', 3),
(15, '2021_12_16_182904_create_packages_table', 3),
(16, '2021_12_18_145724_create_user_tabel', 3),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 4);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `attechment` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `title`, `description`, `attechment`, `status`, `updated_at`, `created_at`) VALUES
(27, 36, 'Here is My first Blog', '<p>zfxgchjbkm</p>\r\n\r\n<p>gxfchvjbknm.,</p>\r\n\r\n<p>vfdcxwefdscx</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>', '1641204918.jpg', 'active', '2022-01-03 15:45:18', '2022-01-03 15:45:18'),
(28, 36, 'Here is My first Blog', '<p>zfxgchjbkm</p>\r\n\r\n<p>gxfchvjbknm.,</p>\r\n\r\n<p>vfdcxwefdscx</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>\r\n\r\n<p>dsxz</p>', '1641208833.jpg', 'pending', '2022-01-08 13:45:26', '2022-01-03 16:50:33'),
(92, 33, 'FAQs – Hampta Pass and Chandratal Trek| Manali | Spiti Valley', '<p><a href=\"https://kailashrath.com/tour/hamta-pass-chandrataal-trek/\">Hamta Pass Trek</a>&nbsp;is perfect if what you love is Snow. Snow clad mountains enclosing on all sides makes you hypnotized in the lap of nature. Attractive landscapes and glacial valleys embellish the trail that leads to the Hampta Pass.<br />\r\nDuring May &ndash; June the route from Balu ka ghera camp till Hamta pass is completely covered in snow. Here you walk right on top of a stream, covered with a thick layer of snow and ice and you can hear the sound of stream gushing down beneath your feet.</p>\r\n\r\n<p>There are two best seasons to do the Hamta Pass and Chandratal Lake trek.<br />\r\nFirst is between June to July.<br />\r\nSecond is between August-October.</p>\r\n\r\n<p>In June the route from Balu ka ghera camp till Hamta pass is completely covered in snow. Here you walk right on top of a stream, covered with a thick layer of snow and ice and you can hear the sound of stream gushing down beneath your feet. There are chances that you witness snowfall while crossing the pass.?</p>\r\n\r\n<p>While in Aug-Sept you will get no snow but more of streams to cross through and the landscape will be lush green and full of flowers in Aug-Sept. During this period, trekkers can enjoy the clear views of snow-capped mountains.</p>', '1642670948.jpg', 'pending', '2022-01-20 14:59:08', '2022-01-20 14:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CvewE4bM4Mo47f50ONKpsS7b7ezvUhi9YGpqoeQQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDNwTmVCN3FkcWplRmRwUFNqaWNWWVdHOUs0ZXVJVzBnSDk1RTRVRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1640260883),
('JlluCJnuTUi0xalWFmkcGdchXeH7trpptgaAYT03', 532, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMnB3akVlVVRmaU9weXdBRTRpc1F1QmN5Z1J0NjhQUENQT0xKTnVmTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC90cmF2ZWwvYWRtaW4vY29udGluZW50TGlzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjUzMjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHFqUm5CRzJCM2had0RsL2M5Lk1LcE9jdjd0N0RrTm1LeDV5VFFZVFRKT3FmclRzZzJDOXNXIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRxalJuQkcyQjNoWndEbC9jOS5NS3BPY3Y3dDdEa05tS3g1eVRRWVRUSk9xZnJUc2cyQzlzVyI7fQ==', 1639772980);

-- --------------------------------------------------------

--
-- Table structure for table `user_registrations`
--

CREATE TABLE `user_registrations` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_registrations`
--

INSERT INTO `user_registrations` (`user_id`, `fname`, `lname`, `gender`, `dob`, `email`, `phone`, `password`, `images`, `address`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(33, 'Naveen', 'Panjala', 'male', '2000-03-01', 'naveen@panajala.com', '7418529630', '12345678', '1640810691.jpg', 'Surat Gujarat India', NULL, NULL, '2021-12-29 20:44:51', '2021-12-29 20:44:51'),
(34, 'Ditya', 'Patel', 'female', '2001-02-28', 'ditya@patel.com', '7410852369', '12345678', '1640811983.jpg', 'Surat Gujarat India', NULL, NULL, '2021-12-29 21:06:23', '2021-12-29 21:06:23'),
(35, 'Amit', 'Singh', 'male', '1999-07-03', 'amit@singh.com', '9638527410', '12345678', '1640812094.jpg', 'Mumbai Maharastra India', NULL, NULL, '2021-12-29 21:08:14', '2021-12-29 21:08:14'),
(36, 'Vatsal', 'Gajjar', 'male', '1999-01-01', 'vatsal@gajjar.com', '7418529630', '12345678', '1641204883.jpg', 'Adajan Surat Gujarat', NULL, NULL, '2022-01-03 10:14:43', '2022-01-03 10:14:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `user_registrations`
--
ALTER TABLE `user_registrations`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `user_registrations`
--
ALTER TABLE `user_registrations`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
