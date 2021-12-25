-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 02:08 PM
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
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `title`, `description`, `attechment`, `updated_at`, `created_at`) VALUES
(5, 16, 'Costa Brava Divers', '<h1>Best Scuba Diving experience</h1>\r\n\r\n<p>we had gone for scuba diving and snorkeling with them. they are thorough professionals in their work and are very warm in nature too. Ana was our guide and host and she took care of us amazingly well. we were given proper gear to scuba dive and they were lots of people with us, mostly professionals who guided us well. we had our camera but it was not waterproof and to our delight they even took their cameras along just to get some photos clicked underwater for us. overall it was a great day spent with them. i will go again to them for sure. we paid roughly 83euros for both the activities and it took about 4 hours in total. they do give a break in between the two activities.</p>', '1640431637.jpg', '2021-12-25 16:57:17', '2021-12-25 16:57:17'),
(6, 16, 'Best Scuba Diving experience', '<p>It all started with the plan of my friend (Vaibhav) who wanted to do Sara Umga Pass together. But as per Covid-19 situation arising in the country, he was not able to make it and I had been bore enough from past 3 months at my stay in Manali that I decided to take up the plan and start the journey with Ramu ji and Bijju [with whom i had been trekking since the past 6 years]. Ramu ji had been trekking in Manali, Lahaul, Spiti, Zanskar and Leh valley from past 30 years and had a lot of trekking experience. There was not any route in these valleys which he had not been to. People like him fascinate me a lot for their experience and I find myself quite fortunate trekking along with them. Bijju was younger to me in age and had been a close mate since the time was in Himachal. Being a small team, and knowing each other so well we were quite confident with the plan.</p>\r\n\r\n<p>We made an exact list of all the stay gear, rations, clothes and other equipment with their weights, distributed it among ourselves and packed our bags. It came out to be 19 kg for myself, 18.3 kg for Bijju and 13.5 kg for Ramu ji [whom we wanted to keep light for his age].</p>\r\n\r\n<p>The night was going to be sleepless for the usual anxiousness that gets built inside you before such a journey where you don&rsquo;t know how things will be.</p>', '1640432736.jpg', '2021-12-25 17:15:36', '2021-12-25 17:15:36'),
(7, 16, 'Hello World', '<p>Hello World Hell Brother</p>', '1640435364.jpg', '2021-12-25 17:59:24', '2021-12-25 17:59:24'),
(8, 16, 'Hello World', '<p>Hello World Hell Brother</p>', '1640435383.jpg', '2021-12-25 17:59:43', '2021-12-25 17:59:43'),
(9, 16, 'Hello World', '<p>Hello World Hell Brother</p>', '1640435555.jpg', '2021-12-25 18:02:35', '2021-12-25 18:02:35'),
(10, 16, 'dscsasdcsa', '<p>asdadad</p>', '1640436009.jpg', '2021-12-25 18:10:09', '2021-12-25 18:10:09'),
(11, 16, 'dscsasdcsa', '<p>asdadad</p>', '1640436098.jpg', '2021-12-25 18:11:38', '2021-12-25 18:11:38');

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
(15, 'Raj', 'Patel', 'male', '2021-10-20', 'raj.p@engees.in', '7410852963', '12345678', '1640344258.jpg', 'Surat Gujarat India', NULL, NULL, '2021-12-23 11:49:04', '2021-12-23 11:49:04'),
(16, 'Raj', 'Patel', 'male', '1999-06-23', 'rajpatel@gmail.com', '7410852963', '12345678', '1640265094.jpg', 'Surat Gujarat', NULL, NULL, '2021-12-23 13:11:34', '2021-12-23 13:11:34'),
(22, 'Amit', 'Singh', 'male', '2000-03-02', 'amit@gmail.com', '7410852963', '123', '1640342357.jpg', 'Surat Gujarat India', NULL, NULL, '2021-12-24 10:39:17', '2021-12-24 10:39:17'),
(23, 'Chetan', 'Chhajer', 'male', '1999-01-01', 'chetan@gmail.com', '7410852963', '111', '1640344258.jpg', 'Surat', NULL, NULL, '2021-12-24 11:10:58', '2021-12-24 11:10:58'),
(24, 'Naveen', 'Panjala', 'male', '2000-03-03', 'naveen@panajala.com', '7410852963', '12345678', '1640415287.jpg', 'Surat Gujarat India', NULL, NULL, '2021-12-25 06:54:47', '2021-12-25 06:54:47');

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
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_registrations`
--
ALTER TABLE `user_registrations`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
