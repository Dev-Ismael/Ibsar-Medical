-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221028.4ba2a88e73
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 06:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibsar`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinned` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `summary`, `content`, `seo_title`, `seo_description`, `seo_keywords`, `pinned`, `author`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(2, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(3, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(4, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(5, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(6, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(7, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(8, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(9, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(10, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(11, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(12, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(13, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(14, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(15, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43'),
(16, 1, 'title', 'title', 'summary', '<p>content</p>', 'seo_title', 'seo_description', 'seo_keywords', '0', 'author', '1671309943.png', '2022-12-17 18:37:25', '2022-12-17 18:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'title', 'slug', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_show` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `job_title`, `slider_show`, `twitter`, `img`, `created_at`, `updated_at`) VALUES
(2, 'د.وافي العنزي', 'استشاري طب و جراحة الشبكية والسائل الزجاجي', '1', 'https://twitter.com/dwafialanazi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915481.jpg', '2022-12-24 18:58:01', '2022-12-24 18:58:01'),
(3, 'د. حسن الكويكبي', 'استشاري طب وجراحة العيون ( إعتام عدسة العين ، الجلوكوما ، زراعة القرنية ، الجراحة الانكسارية ، أمراض سطح العين)', '1', 'https://twitter.com/alkwikbi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915796.png', '2022-12-24 19:03:16', '2022-12-24 19:03:16'),
(4, 'د.نبيل شلبي', 'استشاري طب وجراحة العيون والماء الابيض وتصحيح النظر', '1', 'https://twitter.com/nabeelshalabi?s=21&t=ZxNyRq1qW0zKZHww48hk1A', '1671915872.jpg', '2022-12-24 19:04:32', '2022-12-24 19:04:32'),
(5, 'د.عبدالله الربيعي', 'استشاري طب وجراحة الشبكية والجسم الزجاجي', '0', NULL, '1671916169.png', '2022-12-24 19:09:29', '2022-12-24 19:09:29'),
(6, 'د.محمد العنزي', 'جراحة القرنية والماء الأبيض و تصحيح النظر بالليزر', '0', 'https://twitter.com/DrMohammedAlen1?t=PYXLNgv51m6jmSg1SHn0EQ&s=08', '1671916247.jpeg', '2022-12-24 19:10:47', '2022-12-24 19:10:47'),
(7, 'د.ماجد الخليفة', 'استشاري طب الأسرة MD.SBFM.ABFM', '0', NULL, '1671916302.png', '2022-12-24 19:11:42', '2022-12-24 19:11:42'),
(8, 'د.محمد نادر', 'أخصائي عام (عيون )', '0', NULL, '1671916371.png', '2022-12-24 19:12:51', '2022-12-24 19:12:51'),
(9, 'د.فهد الرويلى', 'استشاري طب وجراحة الشبكية والسائل الزجاجي والماء الابيض', '0', NULL, '1671916418.png', '2022-12-24 19:13:38', '2022-12-24 19:13:38');

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
(12, '2022_07_18_072633_create_resources_table', 1),
(13, '2022_07_24_120221_create_tax_centers_table', 1),
(17, '2022_07_28_100148_forgien_key', 1),
(118, '2014_10_12_000000_create_users_table', 2),
(119, '2014_10_12_100000_create_password_resets_table', 2),
(120, '2019_08_19_000000_create_failed_jobs_table', 2),
(121, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(122, '2022_07_17_072633_create_categories_table', 2),
(123, '2022_07_18_072633_create_articles_table', 2),
(124, '2022_07_18_072633_create_members_table', 2),
(125, '2022_07_25_083008_create_services_table', 2),
(126, '2022_07_25_102710_create_testimonials_table', 2),
(127, '2022_07_25_134316_create_settings_table', 2),
(128, '2022_07_31_080523_create_newsletters_table', 2),
(129, '2022_07_31_080554_create_subscribers_table', 2),
(130, '2022_08_13_181407_create_appointments_table', 2),
(131, '2022_12_28_100148_forgien_key', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(1, 'subject', 'content', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keywords` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `head_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `head_title`, `seo_title`, `seo_description`, `seo_keywords`, `address`, `location`, `email`, `phone`, `sms`, `whatsapp`, `linkedin`, `facebook`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'head_title', 'seo_title', 'seo_description', 'seo_keywords', 'address', 'location', 'email', 'phone', 'sms', 'whatsapp', 'linkedin', 'facebook', 'twitter', 'youtube', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'a.ismael@bluskyint.com', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `job_title`, `visibility`, `content`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'web developer', '1', 'precision fantastic company', 'img', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

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
  `is_admin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdulrahman ismael', 'a.ismael@bluskyint.com', '2022-12-17 18:37:24', '$2y$10$smoObTvQwP.mTz58/alSeuFIncj10ol.rFsTg17EVFpUOJbmQhgnK', '1', 'Wo1Dk6WmMK', '2022-12-17 18:37:25', '2022-12-17 18:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_username_index` (`username`),
  ADD KEY `appointments_member_id_foreign` (`member_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_title_index` (`title`),
  ADD KEY `articles_slug_index` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_title_index` (`title`),
  ADD KEY `categories_slug_index` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_name_index` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsletters_subject_index` (`subject`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_title_index` (`title`),
  ADD KEY `services_slug_index` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscribers_email_index` (`email`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_name_index` (`name`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
