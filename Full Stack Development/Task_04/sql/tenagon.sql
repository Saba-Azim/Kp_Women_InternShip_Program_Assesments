-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2025 at 12:27 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenagon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:6:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"f\";s:7:\"menu_id\";s:1:\"r\";s:5:\"roles\";s:1:\"l\";s:10:\"is_generic\";}s:11:\"permissions\";a:56:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"user-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:1;s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"user-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:1;s:1:\"r\";a:1:{i:0;i:1;}}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:9:\"user-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:1;s:1:\"r\";a:1:{i:0;i:1;}}i:3;a:5:{s:1:\"a\";i:4;s:1:\"b\";s:11:\"user-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:1;s:1:\"r\";a:1:{i:0;i:1;}}i:4;a:5:{s:1:\"a\";i:5;s:1:\"b\";s:9:\"role-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:2;s:1:\"r\";a:1:{i:0;i:1;}}i:5;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:11:\"role-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:2;s:1:\"r\";a:1:{i:0;i:1;}}i:6;a:5:{s:1:\"a\";i:7;s:1:\"b\";s:9:\"role-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:2;s:1:\"r\";a:1:{i:0;i:1;}}i:7;a:5:{s:1:\"a\";i:8;s:1:\"b\";s:11:\"role-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:2;s:1:\"r\";a:1:{i:0;i:1;}}i:8;a:4:{s:1:\"a\";i:202;s:1:\"b\";s:13:\"district-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:4;}i:9;a:4:{s:1:\"a\";i:203;s:1:\"b\";s:15:\"district-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:4;}i:10;a:4:{s:1:\"a\";i:204;s:1:\"b\";s:13:\"district-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:4;}i:11;a:4:{s:1:\"a\";i:205;s:1:\"b\";s:15:\"district-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:4;}i:12;a:4:{s:1:\"a\";i:206;s:1:\"b\";s:11:\"tehsil-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:5;}i:13;a:4:{s:1:\"a\";i:207;s:1:\"b\";s:13:\"tehsil-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:5;}i:14;a:4:{s:1:\"a\";i:208;s:1:\"b\";s:11:\"tehsil-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:5;}i:15;a:4:{s:1:\"a\";i:209;s:1:\"b\";s:13:\"tehsil-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:5;}i:16;a:4:{s:1:\"a\";i:210;s:1:\"b\";s:13:\"division-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:12;}i:17;a:4:{s:1:\"a\";i:211;s:1:\"b\";s:15:\"division-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:12;}i:18;a:4:{s:1:\"a\";i:212;s:1:\"b\";s:13:\"division-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:12;}i:19;a:4:{s:1:\"a\";i:213;s:1:\"b\";s:15:\"division-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:12;}i:20;a:4:{s:1:\"a\";i:214;s:1:\"b\";s:11:\"status-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:15;}i:21;a:4:{s:1:\"a\";i:215;s:1:\"b\";s:13:\"status-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:15;}i:22;a:4:{s:1:\"a\";i:216;s:1:\"b\";s:11:\"status-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:15;}i:23;a:4:{s:1:\"a\";i:217;s:1:\"b\";s:13:\"status-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:15;}i:24;a:4:{s:1:\"a\";i:218;s:1:\"b\";s:13:\"app_flow-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:16;}i:25;a:4:{s:1:\"a\";i:219;s:1:\"b\";s:15:\"app_flow-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:16;}i:26;a:4:{s:1:\"a\";i:220;s:1:\"b\";s:13:\"app_flow-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:16;}i:27;a:4:{s:1:\"a\";i:221;s:1:\"b\";s:15:\"app_flow-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:16;}i:28;a:5:{s:1:\"a\";i:222;s:1:\"b\";s:13:\"category-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:17;s:1:\"r\";a:1:{i:0;i:1;}}i:29;a:5:{s:1:\"a\";i:223;s:1:\"b\";s:15:\"category-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:17;s:1:\"r\";a:1:{i:0;i:1;}}i:30;a:5:{s:1:\"a\";i:224;s:1:\"b\";s:13:\"category-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:17;s:1:\"r\";a:1:{i:0;i:1;}}i:31;a:5:{s:1:\"a\";i:225;s:1:\"b\";s:15:\"category-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:17;s:1:\"r\";a:1:{i:0;i:1;}}i:32;a:5:{s:1:\"a\";i:226;s:1:\"b\";s:15:\"department-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:53;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:33;a:5:{s:1:\"a\";i:227;s:1:\"b\";s:17:\"department-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:53;s:1:\"r\";a:1:{i:0;i:1;}}i:34;a:5:{s:1:\"a\";i:228;s:1:\"b\";s:15:\"department-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:53;s:1:\"r\";a:1:{i:0;i:1;}}i:35;a:5:{s:1:\"a\";i:229;s:1:\"b\";s:17:\"department-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:53;s:1:\"r\";a:1:{i:0;i:1;}}i:36;a:5:{s:1:\"a\";i:230;s:1:\"b\";s:14:\"institute-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:54;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:37;a:5:{s:1:\"a\";i:231;s:1:\"b\";s:16:\"institute-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:54;s:1:\"r\";a:1:{i:0;i:1;}}i:38;a:5:{s:1:\"a\";i:232;s:1:\"b\";s:14:\"institute-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:54;s:1:\"r\";a:1:{i:0;i:1;}}i:39;a:5:{s:1:\"a\";i:233;s:1:\"b\";s:16:\"institute-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:54;s:1:\"r\";a:1:{i:0;i:1;}}i:40;a:5:{s:1:\"a\";i:234;s:1:\"b\";s:11:\"thesis-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:55;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:41;a:5:{s:1:\"a\";i:235;s:1:\"b\";s:13:\"thesis-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:55;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:42;a:5:{s:1:\"a\";i:236;s:1:\"b\";s:11:\"thesis-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:55;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:43;a:5:{s:1:\"a\";i:237;s:1:\"b\";s:13:\"thesis-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:55;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:44;a:5:{s:1:\"a\";i:238;s:1:\"b\";s:13:\"research-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:56;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:45;a:5:{s:1:\"a\";i:239;s:1:\"b\";s:15:\"research-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:56;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:46;a:5:{s:1:\"a\";i:240;s:1:\"b\";s:13:\"research-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:56;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:47;a:5:{s:1:\"a\";i:241;s:1:\"b\";s:15:\"research-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:56;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:48;a:5:{s:1:\"a\";i:242;s:1:\"b\";s:15:\"supervisor-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:57;s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:49;a:5:{s:1:\"a\";i:243;s:1:\"b\";s:17:\"supervisor-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:57;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:50;a:5:{s:1:\"a\";i:244;s:1:\"b\";s:15:\"supervisor-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:57;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:51;a:5:{s:1:\"a\";i:245;s:1:\"b\";s:17:\"supervisor-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:57;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:52;a:5:{s:1:\"a\";i:246;s:1:\"b\";s:8:\"lab-list\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:58;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:53;a:5:{s:1:\"a\";i:247;s:1:\"b\";s:10:\"lab-create\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:58;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:54;a:5:{s:1:\"a\";i:248;s:1:\"b\";s:8:\"lab-edit\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:58;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:55;a:5:{s:1:\"a\";i:249;s:1:\"b\";s:10:\"lab-delete\";s:1:\"c\";s:3:\"web\";s:1:\"f\";i:58;s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}}s:5:\"roles\";a:3:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"Developer\";s:1:\"c\";s:3:\"web\";s:1:\"l\";i:0;}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:10:\"university\";s:1:\"c\";s:3:\"web\";s:1:\"l\";i:0;}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:10:\"Department\";s:1:\"c\";s:3:\"web\";s:1:\"l\";i:0;}}}', 1747460062),
('laravel_cache_month_labels', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:12:{i:0;s:3:\"Jan\";i:1;s:3:\"Feb\";i:2;s:3:\"Mar\";i:3;s:3:\"Apr\";i:4;s:3:\"May\";i:5;s:3:\"Jun\";i:6;s:3:\"Jul\";i:7;s:3:\"Aug\";i:8;s:3:\"Sep\";i:9;s:3:\"Oct\";i:10;s:3:\"Nov\";i:11;s:3:\"Dec\";}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1749893871);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(17, 'Muhmmad Jawad', '', 'engrjawadkhan318@gmail.com', 'engrjawadkhan318@gmail.com', 'engrjawadkhan318@gmail.com', NULL, NULL, NULL),
(15, 'Muhmmad Jawad', '', 'engrjawadkhan318@gmail.com', 'pesoxomot@mailinator.com', 'pesoxomot@mailinator.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 8, 'test', 'test', '2025-05-21 01:11:00', '2025-05-21 01:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jlh6Lg2SPSALPH19YgcdlUThOqTlkq97wC1s8jIy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWk9MZklnUG9LUzNZOU5ucnAwWnZmRHFzUWtFbkZoRGI5azBiUEh1YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHAvdGhlc2lzL2NyZWF0ZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1747374476),
('TbMXXeENiCVpunrQ7ohNT0xuCCbOoeqD2z8hnBtt', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaVJsWTU2SjJlUGlGamlNc2ZiMWFNbEp5cEdXejJ1dWE1bm5jU0xlaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHAvc2V0dGluZy91c2VyLW1hbmFnbWVudC91c2VycyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1747218057),
('YdSZA50PeRa8cY2wJIYNhd8lWwsaaKFI1FfGHuzx', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoickVqWXF6cWRKRENZMExQczZtcE1ZY2lNRWp5dWlLRVRXdVVMZHdMWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcHAvZGVwYXJ0bWVudHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1747223473),
('oocK2DI4W0VQIjdsIeT9QaUDw1Us9QmWRk4mnjQH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRmlLQXZGbndBUzNReFZITk9XR0FyR2FPSE5aVUxRd1Bva1VqcGp3WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM1OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBwL2xhYi9leUpwZGlJNkltMXdUR1UzV1hSeE5taHlVV1p4V2xCU2RHTlBWbmM5UFNJc0luWmhiSFZsSWpvaVNTOWhSV3g2YUVKa1lXSmpZMWhEU1RGeGNqTkpaejA5SWl3aWJXRmpJam9pT0RkbFpqRTRaVE0yTldJME5EUmhaVFl4WkRBeU9URmtZbUpsWlRSall6VmhNalZtWmpWalkyVmlOV1UxWVRFME4yRTNaVFkyWldGalpUVXdOMlE1TVNJc0luUmhaeUk2SWlKOS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1747288381);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female','Other') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `date_of_birth`, `email`, `phone`, `address`) VALUES
(5, 'abc', 'Female', '2025-06-09', NULL, '83892365', 'xyz'),
(4, 'Tasneem Malala', 'Female', '2025-07-03', NULL, '03450931220', 'Shagai Saidu Sharif Swat'),
(3, 'Sabahun Noor', 'Female', '2002-03-18', 'xyz@gmail.com', '397589236029', 'swat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tehsil_id` bigint UNSIGNED DEFAULT NULL,
  `district_id` bigint UNSIGNED DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_offline_enable` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'visitor',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tehsil_id_foreign` (`tehsil_id`),
  KEY `users_district_id_foreign` (`district_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `tehsil_id`, `district_id`, `status`, `type`, `email_verified_at`, `password`, `remember_token`, `api_token`, `is_offline_enable`, `deleted_at`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Developer admin', NULL, 'admin@admin.com', 81, 23, 1, NULL, '2025-03-23 06:46:26', '$2y$12$WLSQoC8gQJDqjMG5P2jsheyfjorsONTi810k9tHa3S6qTyQdYzPla', NULL, NULL, 0, NULL, '2025-03-23 06:46:26', '2025-03-23 02:20:21', 'admin'),
(7, 'Developer admin', NULL, 'user@gmail.col', 81, 23, 1, NULL, '2025-03-23 06:46:26', '$2y$12$WLSQoC8gQJDqjMG5P2jsheyfjorsONTi810k9tHa3S6qTyQdYzPla', NULL, NULL, 0, NULL, '2025-03-23 06:46:26', '2025-03-23 02:20:21', 'visitor'),
(8, 'MUHAMMAD JAWAD', NULL, 'jawad@gmail.com', NULL, NULL, 1, NULL, NULL, '$2y$10$LBQZsoWafYS7xH8k9zvU9ujETKGrtkxnODdwJULD8QDSu9CV8pEiy', NULL, NULL, 0, NULL, NULL, NULL, 'visitor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
