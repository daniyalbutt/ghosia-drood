-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 12:41 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u263857507_ghosiadrood`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `image`, `author`, `language`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Adab e Hazri', 'https://ghosiadrood.samplelinkweb.site/uploads/images/adab.png', 'Muhammad Yaseen Ajmal', 'urdu', 'https://ghosiadrood.samplelinkweb.site/uploads/book/adab.pdf', '2024-06-22 00:03:25', '2024-06-22 00:03:25'),
(2, 'Tajdar e Banu Hashim', 'https://ghosiadrood.samplelinkweb.site/uploads/images/tajdar.png', 'Muhammad Yaseen Ajmal', 'urdu', 'https://ghosiadrood.samplelinkweb.site/uploads/book/tajdar.pdf', '2024-07-03 23:18:06', '2024-07-03 23:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `duroodpaks`
--

CREATE TABLE `duroodpaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `durood` bigint(20) NOT NULL,
  `quran_majeed_part` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duroodpaks`
--

INSERT INTO `duroodpaks` (`id`, `durood`, `quran_majeed_part`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 25, 20, 2, '2024-06-24 17:21:25', '2024-06-24 17:21:25'),
(10, 10, 3, 2, '2024-06-24 17:34:49', '2024-06-24 17:34:49'),
(11, 10, 3, 2, '2024-06-24 17:48:36', '2024-06-24 17:48:36'),
(12, 10, 3, 2, '2024-06-24 17:51:00', '2024-06-24 17:51:00'),
(13, 10, 3, 2, '2024-06-24 17:51:54', '2024-06-24 17:51:54'),
(14, 10, 3, 2, '2024-06-24 17:59:53', '2024-06-24 17:59:53'),
(15, 10, 3, 2, '2024-06-24 18:00:14', '2024-06-24 18:00:14'),
(16, 10, 3, 2, '2024-06-24 18:01:42', '2024-06-24 18:01:42'),
(17, 10, 3, 2, '2024-06-24 18:02:34', '2024-06-24 18:02:34'),
(18, 10, 3, 2, '2024-06-24 18:07:06', '2024-06-24 18:07:06'),
(19, 10, 3, 2, '2024-06-24 18:07:52', '2024-06-24 18:07:52'),
(20, 10, 3, 2, '2024-06-24 18:43:03', '2024-06-24 18:43:03'),
(21, 10, 3, 2, '2024-06-24 18:46:22', '2024-06-24 18:46:22'),
(22, 10, 3, 2, '2024-06-24 18:46:48', '2024-06-24 18:46:48'),
(23, 10, 3, 2, '2024-06-24 18:47:06', '2024-06-24 18:47:06'),
(24, 10, 3, 2, '2024-06-24 18:48:00', '2024-06-24 18:48:00'),
(25, 10, 3, 2, '2024-06-24 18:49:10', '2024-06-24 18:49:10'),
(26, 10, 3, 2, '2024-06-24 18:52:30', '2024-06-24 18:52:30'),
(27, 10, 3, 2, '2024-06-24 18:53:35', '2024-06-24 18:53:35'),
(28, 10, 3, 2, '2024-06-24 18:56:43', '2024-06-24 18:56:43'),
(29, 10, 3, 2, '2024-06-24 18:58:59', '2024-06-24 18:58:59'),
(30, 10, 3, 2, '2024-06-24 19:00:24', '2024-06-24 19:00:24'),
(31, 10, 3, 2, '2024-06-24 19:03:03', '2024-06-24 19:03:03'),
(32, 10, 3, 2, '2024-06-24 19:04:05', '2024-06-24 19:04:05'),
(33, 10, 3, 2, '2024-06-24 19:05:46', '2024-06-24 19:05:46'),
(34, 10, 3, 2, '2024-06-24 19:06:45', '2024-06-24 19:06:45'),
(35, 10, 3, 2, '2024-06-24 19:08:38', '2024-06-24 19:08:38'),
(36, 10, 3, 2, '2024-06-24 19:12:25', '2024-06-24 19:12:25'),
(37, 75, 10, 2, '2024-06-24 19:46:14', '2024-06-24 19:46:14'),
(38, 75, 10, 2, '2024-06-24 19:47:35', '2024-06-24 19:47:35'),
(39, 15, 1, 3, '2024-06-24 23:43:18', '2024-06-24 23:43:18'),
(40, 15, 1, 2, '2024-06-27 16:31:22', '2024-06-27 16:31:22'),
(41, 25, 1, 2, '2024-06-27 16:38:08', '2024-06-27 16:38:08'),
(42, 25, 1, 9, '2024-06-27 16:40:44', '2024-06-27 16:40:44'),
(43, 4, 4, 9, '2024-06-27 16:43:40', '2024-06-27 16:43:40'),
(44, 4, 4, 9, '2024-06-27 16:45:09', '2024-06-27 16:45:09'),
(45, 1, 1, 9, '2024-06-27 16:45:53', '2024-06-27 16:45:53'),
(46, 3, 1, 9, '2024-06-27 16:49:53', '2024-06-27 16:49:53'),
(47, 0, 0, 9, '2024-07-01 15:49:50', '2024-07-01 15:49:50'),
(48, 1, 2, 9, '2024-07-03 19:13:14', '2024-07-03 19:13:14'),
(49, 2, 1, 9, '2024-07-03 19:17:10', '2024-07-03 19:17:10'),
(50, 1, 1, 9, '2024-07-03 19:18:41', '2024-07-03 19:18:41'),
(51, 0, 0, 19, '2024-07-03 19:54:31', '2024-07-03 19:54:31'),
(52, 0, 0, 19, '2024-07-05 17:13:00', '2024-07-05 17:13:00'),
(53, 1, 1, 19, '2024-07-05 17:30:32', '2024-07-05 17:30:32'),
(54, 0, 0, 19, '2024-07-05 17:31:58', '2024-07-05 17:31:58'),
(55, 0, 0, 19, '2024-07-05 17:32:59', '2024-07-05 17:32:59'),
(56, 0, 0, 19, '2024-07-05 17:34:45', '2024-07-05 17:34:45'),
(57, 2, 1, 19, '2024-07-05 17:35:28', '2024-07-05 17:35:28'),
(58, 0, 1, 19, '2024-07-05 17:36:10', '2024-07-05 17:36:10'),
(59, 1, 1, 19, '2024-07-05 17:37:51', '2024-07-05 17:37:51'),
(60, 0, 1, 19, '2024-07-05 17:37:58', '2024-07-05 17:37:58'),
(61, 1, 1, 19, '2024-07-05 17:55:56', '2024-07-05 17:55:56'),
(62, 5, 1, 20, '2024-07-05 19:11:40', '2024-07-05 19:11:40'),
(63, 5, 1, 20, '2024-07-05 19:12:00', '2024-07-05 19:12:00'),
(64, 1, 1, 9, '2024-07-05 19:53:36', '2024-07-05 19:53:36'),
(65, 17, 1, 20, '2024-07-06 06:31:48', '2024-07-06 06:31:48'),
(66, 2, 1, 9, '2024-07-10 18:01:51', '2024-07-10 18:01:51'),
(67, 25, NULL, 2, '2024-07-10 18:21:36', '2024-07-10 18:21:36'),
(68, 25, 3, 2, '2024-07-10 18:21:46', '2024-07-10 18:21:46'),
(69, 1, NULL, 9, '2024-07-10 18:50:27', '2024-07-10 18:50:27'),
(70, 1, NULL, 9, '2024-07-10 18:51:33', '2024-07-10 18:51:33'),
(71, 2, NULL, 9, '2024-07-10 18:51:54', '2024-07-10 18:51:54'),
(72, 3, NULL, 9, '2024-07-10 19:01:58', '2024-07-10 19:01:58'),
(73, 1, NULL, 9, '2024-07-10 19:11:19', '2024-07-10 19:11:19'),
(74, 1, NULL, 9, '2024-07-11 15:07:20', '2024-07-11 15:07:20'),
(75, 2, 1, 20, '2024-07-31 14:12:19', '2024-07-31 14:12:19'),
(76, 2, 1, 20, '2024-07-31 14:13:03', '2024-07-31 14:13:03'),
(77, 1500, NULL, 26, '2025-02-24 17:04:17', '2025-02-24 17:04:17'),
(78, 3, NULL, 26, '2025-02-24 17:05:26', '2025-02-24 17:05:26'),
(79, 3, NULL, 27, '2025-02-24 20:19:55', '2025-02-24 20:19:55'),
(80, 0, NULL, 27, '2025-02-24 20:20:04', '2025-02-24 20:20:04'),
(81, 5, NULL, 27, '2025-02-24 20:20:09', '2025-02-24 20:20:09'),
(82, 4, NULL, 27, '2025-02-24 20:20:35', '2025-02-24 20:20:35'),
(83, 5, NULL, 27, '2025-02-24 22:28:16', '2025-02-24 22:28:16'),
(84, 25, NULL, 27, '2025-02-24 22:53:37', '2025-02-24 22:53:37'),
(85, 2, NULL, 27, '2025-02-24 22:58:17', '2025-02-24 22:58:17'),
(86, 2, NULL, 27, '2025-02-24 23:35:16', '2025-02-24 23:35:16');

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
-- Table structure for table `forget_passwords`
--

CREATE TABLE `forget_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `otp` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forget_passwords`
--

INSERT INTO `forget_passwords` (`id`, `user_id`, `otp`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 9372, 0, '2024-06-05 00:30:57', '2024-06-05 00:30:57'),
(3, 3, 9930, 0, '2024-06-06 18:43:36', '2024-06-06 18:43:36'),
(5, 10, 2781, 0, '2024-06-06 19:00:30', '2024-06-06 19:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `author_image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `title`, `sub_title`, `banner_image`, `author_image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Durood o Salam ki Fazilat', 'Durood o Salam', 'https://ghosiadrood.samplelinkweb.site/uploads/banner_image/durood.png', 'https://ghosiadrood.samplelinkweb.site/uploads/author_image/author.jpg', 'https://www.youtube.com/watch?v=25EhT4DeBJY', '2024-06-22 02:43:42', '2024-06-22 02:43:42');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2024_05_29_202728_create_forget_passwords_table', 1),
(10, '2024_06_11_171249_create_permission_tables', 2),
(11, '2024_06_11_180947_create_profiles_table', 2),
(12, '2024_07_12_171112_add_column_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('05e1ead680347a2cf2eaed3a20bdb1caf5c56e4421b9ef4de85fa6d90d68c11873c0037ddf3530d2', 9, 1, 'MyApp', '[]', 0, '2024-06-12 19:10:22', '2024-06-12 19:10:22', '2025-06-12 19:10:22'),
('07fbb0f0f7aabe1d2cdcc433162a0a216f1e7c032f1cb8b59664fef5748b63e92c176a27041e6a3f', 9, 1, 'MyApp', '[]', 0, '2024-06-05 17:25:00', '2024-06-05 17:25:00', '2025-06-05 17:25:00'),
('0811e8a71933a99fd90ff2ef747bbef66c4b3fb41f16b5baeac9c17d1e9521a5d682b95e7a30fd78', 18, 1, 'MyApp', '[]', 0, '2024-07-03 19:46:54', '2024-07-03 19:46:54', '2025-07-03 19:46:54'),
('0c202807c277fd130762b3f156924f1fad5139b64f88d53025899f2598446f7e080ecb8da4dc9a21', 25, 1, 'MyApp', '[]', 1, '2024-07-12 17:45:59', '2024-07-12 17:45:59', '2025-07-12 17:45:59'),
('0f40943a23585ffe754115065f5de12ce82ced292f7a4323576c20dfe95177a3b583861ed67e532a', 8, 1, 'MyApp', '[]', 0, '2024-06-05 11:47:16', '2024-06-05 11:47:16', '2025-06-05 11:47:16'),
('1956091558c63b36a71752f7bb0c15cf675cb4572296e595bf9c6acc362bf6919459b874fc2c5238', 25, 1, 'MyApp', '[]', 0, '2024-07-12 17:50:23', '2024-07-12 17:50:23', '2025-07-12 17:50:23'),
('1c7155620c7de45a8ff530ee6372f4a5f36a2c7573b513cf3e4090a53eb103d8368958f362554531', 8, 1, 'MyApp', '[]', 0, '2024-06-05 11:46:36', '2024-06-05 11:46:36', '2025-06-05 11:46:36'),
('204190cc8d340595dbeb1fa76682d64f0088ec92e20774000cd941ea1133c3e708eb9a5f567b3e8a', 2, 1, 'MyApp', '[]', 0, '2024-07-10 18:19:06', '2024-07-10 18:19:06', '2025-07-10 18:19:06'),
('21472a2c2129200c8b6e41afbd67eada159bec9e337e764177e7ecf855c7efddd8f79f64f0daeca8', 2, 1, 'MyApp', '[]', 0, '2024-06-21 19:46:11', '2024-06-21 19:46:11', '2025-06-21 19:46:11'),
('249e51780bde328303d7536cd2f411856a0b0fb964b39a7da2bdf1596a6c45ca94ec601a59a58687', 25, 1, 'MyApp', '[]', 1, '2024-07-12 17:46:59', '2024-07-12 17:46:59', '2025-07-12 17:46:59'),
('2c5f786b9e0e49492b1f2de935dfbf0b9db00d4633ee76f02ea57e395737643b46c192ec58c705c5', 2, 1, 'MyApp', '[]', 0, '2024-06-11 18:40:31', '2024-06-11 18:40:31', '2025-06-11 18:40:31'),
('30a9d4f711e64d452757942ab0f2a15f3eacdedfc71c33d4a0058e32a49b509b4bd2b806b072aa1f', 9, 1, 'MyApp', '[]', 0, '2024-07-05 19:53:27', '2024-07-05 19:53:27', '2025-07-05 19:53:27'),
('3337aaa842793c6f8961dd32a872e541c708c8f00f6c9d119f7bc131f5fe2e1118ca2bcd51f10aee', 20, 1, 'MyApp', '[]', 0, '2024-07-05 19:10:22', '2024-07-05 19:10:22', '2025-07-05 19:10:22'),
('377d15097cfbcb5a5e13a37709d60ea66615574e84bc70c05830240a102de6db764b6c59d4ea1943', 2, 1, 'MyApp', '[]', 0, '2024-06-21 21:00:35', '2024-06-21 21:00:35', '2025-06-21 21:00:35'),
('420aeaff817a76202ba20d0d50690c1a733b78ad16a1e5a2d33edc92cb74615414e553b439e85aac', 2, 1, 'MyApp', '[]', 0, '2024-06-21 20:07:13', '2024-06-21 20:07:13', '2025-06-21 20:07:13'),
('4e00dd40cb2f890a24b3f0ef53b335317df217269db06b09ddb5f0982b26e8b94b97b10d0d3b090b', 21, 1, 'MyApp', '[]', 0, '2024-07-12 17:29:38', '2024-07-12 17:29:38', '2025-07-12 17:29:38'),
('4e14a9e13a43b5ad0cfce2299abbb97462054f75c188d10931bea2e89b9ba3f0737fdde62c0b646e', 2, 1, 'MyApp', '[]', 0, '2024-06-24 20:49:09', '2024-06-24 20:49:09', '2025-06-24 20:49:09'),
('4fdecf812cf9e4965b65de741a6fdf1ca5f743807b556bcc209f58ce0a2a0cb33632b61b50dac5f2', 2, 1, 'MyApp', '[]', 0, '2024-06-24 17:33:53', '2024-06-24 17:33:53', '2025-06-24 17:33:53'),
('52b2536820827028441b42e42d469a4b08554157eed4c5356aa3cc18d5590d546ba4f3ef5e8b13bc', 2, 1, 'MyApp', '[]', 0, '2024-07-03 19:22:57', '2024-07-03 19:22:57', '2025-07-03 19:22:57'),
('52ebdc9a0ce1b19026cff1e200ef00bdd6cf0f516c94269779c1d351c753534f2325e465d2a97f97', 27, 1, 'MyApp', '[]', 0, '2025-02-24 23:33:12', '2025-02-24 23:33:12', '2026-02-24 23:33:12'),
('56c2a0414ac615369f707d1c8b9a72aaf3ab77107ee1be9a81eac792d35196ae2a9a2fdd712e558c', 3, 1, 'MyApp', '[]', 0, '2024-06-24 23:42:17', '2024-06-24 23:42:17', '2025-06-24 23:42:17'),
('5a0754491dd4f192c2ffc47ac369887d86531d7c3f2f5d77332314b4da5ca27ad1ccd25a8fa990b6', 9, 1, 'MyApp', '[]', 0, '2024-07-11 13:29:16', '2024-07-11 13:29:16', '2025-07-11 13:29:16'),
('5bb63e7e0fb26a72c9a6d653318ea08340bf0398d78d5da10c87180929a71e6fa5f18a8d1c2f7e11', 2, 1, 'MyApp', '[]', 0, '2024-06-11 19:09:46', '2024-06-11 19:09:46', '2025-06-11 19:09:46'),
('5c5580a01addf9e6e947c22cc15ec1ef9fceae6fc5baf9a4e97d8e759af82cd5b4f83bb6ff263a5e', 9, 1, 'MyApp', '[]', 0, '2024-06-05 17:43:34', '2024-06-05 17:43:34', '2025-06-05 17:43:34'),
('6595044d44331cbb0c2ce2e5783cedf2c99e49381391205d043a6116bc99c26d30944c3badcfec55', 2, 1, 'MyApp', '[]', 0, '2024-06-11 17:54:22', '2024-06-11 17:54:22', '2025-06-11 17:54:22'),
('69fa59714530ce45a05b49df0ae6b957279bd7e19d8167462a3506dbb70a52c08cff6540fb659cd3', 25, 1, 'MyApp', '[]', 1, '2024-07-12 17:48:09', '2024-07-12 17:48:09', '2025-07-12 17:48:09'),
('6b37283ae704267137e7a795f38935a04e8f690ef446d71855308f9ca7a5b721e3d9fc7376c80487', 2, 1, 'MyApp', '[]', 0, '2024-06-24 22:04:10', '2024-06-24 22:04:10', '2025-06-24 22:04:10'),
('6cddaa63f76fbb297a5e5317b9cf172291d48a4a8a377be286f05f259112bade50ad51b707e6ceef', 2, 1, 'MyApp', '[]', 0, '2024-06-22 00:34:38', '2024-06-22 00:34:38', '2025-06-22 00:34:38'),
('72cfb8b8958805442d427ded486b3ca9178b7fa6213a6ea64f4cda2be31331416f0d7b41345e1cb8', 2, 1, 'MyApp', '[]', 1, '2024-06-24 20:47:31', '2024-06-24 20:47:31', '2025-06-24 20:47:31'),
('79692d20183d2b20d6091d838473cf4fb72f378c624caf4f1254b81ddb2a784658bd102bab1f45c0', 9, 1, 'MyApp', '[]', 1, '2024-06-26 14:49:55', '2024-06-26 14:49:55', '2025-06-26 14:49:55'),
('7b4b015a7e509919556e00cb62e5c3244954871a0b692d81cb5c8f89d3d85346f6490dccbeaf813f', 9, 1, 'MyApp', '[]', 0, '2024-06-13 14:09:42', '2024-06-13 14:09:42', '2025-06-13 14:09:42'),
('7b52643e426445718131912cd747720cedd7ff3548196bfb109c80383bb9a7791c73c6d1867fadb2', 2, 1, 'MyApp', '[]', 0, '2024-06-21 20:16:07', '2024-06-21 20:16:07', '2025-06-21 20:16:07'),
('7c2547d0a674cdf71f28255ed502e5d98c03aead630d315a025d9cea8fe742491168c07f38f7bd59', 9, 1, 'MyApp', '[]', 0, '2024-07-10 17:59:29', '2024-07-10 17:59:29', '2025-07-10 17:59:29'),
('817169916700af429c617fee616886cb380a3c2bbdf203e0b3e7e2fd89d6fa9c66302e41332e1cb6', 27, 1, 'MyApp', '[]', 1, '2025-02-24 20:18:23', '2025-02-24 20:18:23', '2026-02-24 20:18:23'),
('81b909b4ee32b2a24eb0d8998cf4fa5be702a58815cc9e933d5cbfeaac3148918b757c38ba029300', 9, 1, 'MyApp', '[]', 0, '2024-06-05 18:23:41', '2024-06-05 18:23:41', '2025-06-05 18:23:41'),
('8283464fd1ebc09e8e825158fe8c4b3e1356d287cd48badbb017d436a5fe6fd537903220fcc91751', 2, 1, 'MyApp', '[]', 0, '2024-06-24 17:28:06', '2024-06-24 17:28:06', '2025-06-24 17:28:06'),
('837f1ecd7d77b730dabfb1d913677d9d220ba5c40ece4cd46d1c5fa40163177e2513dc5c1d8459b1', 7, 1, 'MyApp', '[]', 0, '2024-06-05 00:18:43', '2024-06-05 00:18:43', '2025-06-05 00:18:43'),
('84e2aaafcd9f2a9bd7eff51e89bb3575d6067ccbda76a90e58910c53345773b0b9ef5ff67f188b33', 2, 1, 'MyApp', '[]', 0, '2024-06-11 18:40:15', '2024-06-11 18:40:15', '2025-06-11 18:40:15'),
('86d851b23bcfd48d2c68f6d0c9beb925b5fdb1d94f327f26a0a0947024f0acb01541204de97cc0a0', 19, 1, 'MyApp', '[]', 1, '2024-07-03 19:48:02', '2024-07-03 19:48:02', '2025-07-03 19:48:02'),
('905bdf8dcb39eed2c6fcc9af6604c84bc5c3c82c7d0236acc13eda436da9bb3c6e96a6ed08a145ca', 2, 1, 'MyApp', '[]', 0, '2024-06-27 16:31:00', '2024-06-27 16:31:00', '2025-06-27 16:31:00'),
('95d0a44325059b1131b8b9e758f768cbb2f442508052e73a9ae89f65f1dd335e57aca7e2bda52f79', 27, 1, 'MyApp', '[]', 1, '2025-02-24 23:00:41', '2025-02-24 23:00:41', '2026-02-24 23:00:41'),
('9c0872c4db448130059179b048741c0ae5383a45cfa16360224bbe40b7e64fc5b38dcb65224fdcb9', 9, 1, 'MyApp', '[]', 0, '2024-06-10 12:52:58', '2024-06-10 12:52:58', '2025-06-10 12:52:58'),
('9c1630ee216e39c99d8491b6852c387db6354ffe121fbeb9edc660b48d2fe8ae03fcc29702412b52', 9, 1, 'MyApp', '[]', 0, '2024-07-11 15:06:36', '2024-07-11 15:06:36', '2025-07-11 15:06:36'),
('9e3cc6910607a7bc62ff3e4f5c5ff30003c421e2bfe0474b30b619d46b65b30c04a548421f02adf2', 20, 1, 'MyApp', '[]', 0, '2024-07-05 19:11:09', '2024-07-05 19:11:09', '2025-07-05 19:11:09'),
('9ee9a98f9034fd80f18deea9d3a80047b3de56daf546af8909ae66a0bd661a69a25673a8157b3c14', 22, 1, 'MyApp', '[]', 0, '2024-07-12 17:35:11', '2024-07-12 17:35:11', '2025-07-12 17:35:11'),
('a596a622d072e3050274d572430e0b6ac87d6f676b22a163d6e97ad3def5a3b456a743a69982fb2c', 2, 1, 'MyApp', '[]', 0, '2024-06-24 17:00:30', '2024-06-24 17:00:30', '2025-06-24 17:00:30'),
('a80b9284a8045bf3cf92a3feaccef4a5d19919b6048561661aa5e1c9a9fb0c9b3973a7c5bd82cd49', 7, 1, 'MyApp', '[]', 0, '2024-06-05 00:19:21', '2024-06-05 00:19:21', '2025-06-05 00:19:21'),
('af8e3163ebf47a18594671c41f8c8f18a7aa8398d482e89d63c68dc3f559fefbc5367697f3174792', 19, 1, 'MyApp', '[]', 0, '2024-07-03 19:47:30', '2024-07-03 19:47:30', '2025-07-03 19:47:30'),
('b99e41c6943d118ca332167f4e36d6700f0bb54569b6040a4ed7cfd041f33018ffa08d6043416efc', 27, 1, 'MyApp', '[]', 0, '2025-02-24 22:05:43', '2025-02-24 22:05:43', '2026-02-24 22:05:43'),
('c14fe834c8fd498ea990dd8a1b3df9ed285cc7d3cf3c3c441043df5a2960cf6879be158afe78758d', 9, 1, 'MyApp', '[]', 0, '2024-07-10 19:55:48', '2024-07-10 19:55:48', '2025-07-10 19:55:48'),
('cea415788d325b4cde533a5052b865285d56e611db59bcbd85a3ec4c3711d5a7ad2a7a83c5249d2b', 24, 1, 'MyApp', '[]', 0, '2024-07-12 17:42:58', '2024-07-12 17:42:58', '2025-07-12 17:42:58'),
('cf84e6b45785c73de92b58a6769203b3974125d63be8ee8f96c23bf85bd736fba5fd5211ebd48c6e', 11, 1, 'MyApp', '[]', 0, '2024-06-26 17:45:34', '2024-06-26 17:45:34', '2025-06-26 17:45:34'),
('d611d892974058a0ae1740e58c20e914d40a031368a96c8f5a117af3a582516c698fb5fc94232ad5', 25, 1, 'MyApp', '[]', 1, '2024-07-12 17:47:45', '2024-07-12 17:47:45', '2025-07-12 17:47:45'),
('d94fd7aac5adbd541c7a982a2d6589f23a51ae938371d07de021e7ebb113dd61df8a0ecc48e8dadf', 23, 1, 'MyApp', '[]', 0, '2024-07-12 17:42:29', '2024-07-12 17:42:29', '2025-07-12 17:42:29'),
('dea8b5b7560b9ffd98be4c9db461ace6a17e5ff80900cd16ef9f57b5913cb2416098ca5747bc5ed2', 26, 1, 'MyApp', '[]', 0, '2025-02-24 17:03:20', '2025-02-24 17:03:20', '2026-02-24 17:03:20'),
('e474bb321e60a522538372bc1166dd1a712ddf612e38fe3a8bd34121ee57e3077d5454e74b865ef0', 27, 1, 'MyApp', '[]', 1, '2025-02-24 22:06:45', '2025-02-24 22:06:45', '2026-02-24 22:06:45'),
('e5bf2f7c25438de71f6a70bd235746d8f363530ec6904df2b8edf6894c23554dfb2446e726990135', 9, 1, 'MyApp', '[]', 1, '2024-07-01 15:49:36', '2024-07-01 15:49:36', '2025-07-01 15:49:36'),
('e6b9ce470ca53ebcd7d1672f912c06629c87e23d23b03fdcda60470db15c7c0dea57b83fb7c98b20', 10, 1, 'MyApp', '[]', 0, '2024-06-06 18:57:31', '2024-06-06 18:57:31', '2025-06-06 18:57:31'),
('ea95af8b5eac7551cc1fe94af061c6bdecfa39a7e9b53babbe27f4de0a1778a1e4e711dfefd79c07', 2, 1, 'MyApp', '[]', 0, '2024-06-21 21:55:50', '2024-06-21 21:55:50', '2025-06-21 21:55:50'),
('f13b0c7483fb70b86115bbb4fccc530b4c2184562a963894d72e496d2f908a40a736cc9ef36d08f0', 9, 1, 'MyApp', '[]', 1, '2024-07-11 13:33:20', '2024-07-11 13:33:20', '2025-07-11 13:33:20'),
('f1816d33a39b5b841152d5b10d7d4049f5ea18a89cd6ed2bb6d70137a19c0ef2ed5c0b2959ac6a83', 2, 1, 'MyApp', '[]', 0, '2024-06-24 22:16:26', '2024-06-24 22:16:26', '2025-06-24 22:16:26'),
('f44b372d85d99fbb681aefe365e7f0f44b0b3898d2d7c02ec6642fad8c1df3a0c800ebd094f0ac36', 2, 1, 'MyApp', '[]', 0, '2024-06-24 16:33:53', '2024-06-24 16:33:53', '2025-06-24 16:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 't48DLROPjlqn0HFS5ijjAepybJTqkmk4OIEV6PvZ', NULL, 'http://localhost', 1, 0, 0, '2024-06-05 00:18:23', '2024-06-05 00:18:23'),
(2, NULL, 'Laravel Password Grant Client', 'aN0rnc4tueBwFxhAqbxNt5FmZY87yDLYe3xKlPNx', 'users', 'http://localhost', 0, 1, 0, '2024-06-05 00:18:23', '2024-06-05 00:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-06-05 00:18:23', '2024-06-05 00:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `education`, `profession`, `country`, `district`, `phone`, `dob`, `address`, `created_at`, `updated_at`) VALUES
(1, 2, 'asa', 'asa', 'asas', 'sas', '665465465', '1999-06-12', 'asasasa', '2024-06-11 18:42:50', '2024-07-03 19:27:10'),
(2, 2, '3243as', NULL, NULL, NULL, '32324242', NULL, NULL, '2024-06-11 18:54:05', '2024-06-11 18:54:05'),
(3, 2, 'ASS', NULL, NULL, NULL, '32324242', NULL, NULL, '2024-06-11 19:01:46', '2024-06-11 19:01:46'),
(4, 9, 'Bs', 'Accounting Technician', 'Algeria', 'ddu', '12344567891', '2024-07-04', 'Test', '2024-06-12 15:20:44', '2024-07-03 19:33:01'),
(5, 27, 'Bs', 'Accountant', '2025-02-25', NULL, '111111111111', '2025-02-25', 'Test', '2025-02-24 23:04:00', '2025-02-24 23:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'abc', 'abc@gmail.com', NULL, '$2y$10$cy0etWzOaJhgZWQnwmJ/5OC/M4R9dMCXNx4CtVGaPorx3Orz1NFN6', NULL, '2024-06-05 00:00:47', '2024-06-05 00:00:47', ''),
(2, 'asa', 'his@gmail.com', NULL, '$2y$10$.g5KA7QWL/ow3f2Bd.yV9.cmx4KUfivc13HdrqHDMyOKqUwcL66Q.', NULL, '2024-06-05 00:05:53', '2024-07-03 19:23:59', ''),
(3, 'abc', 'pascaline@gmail.com', NULL, '$2y$10$uyW75ilnSaRRvD3uz0WPgeniL3.ZsjX3YTzJr5emEHgmvoR7VA5U2', NULL, '2024-06-05 00:06:57', '2024-06-05 00:06:57', ''),
(5, 'abc', 'mario@gmail.com', NULL, '$2y$10$UEKxRXybFgQtTXl2.It6I.tCkdI6Dj9SlsFX/EbcqlXgx.eQBdM7S', NULL, '2024-06-05 00:13:13', '2024-06-05 00:13:13', ''),
(6, 'abc', 'demario@gmail.com', NULL, '$2y$10$RBxTtBe5TKBy26kA4/F/AOiQgL1QlHHyGx0PjiQSPGgLZ2h9ptKlu', NULL, '2024-06-05 00:17:52', '2024-06-05 00:17:52', ''),
(7, 'abc', 'ronald@gmail.com', NULL, '$2y$10$8wAvpEmha.GHSWrIvhlm/OBV2J4qOr5h56VkugmY1389ov6./4pIa', NULL, '2024-06-05 00:18:43', '2024-06-05 00:18:43', ''),
(8, 'Customer', 'customerR@mailinator.com', NULL, '$2y$10$OoNDNDmKriU.3veazcvIv.tEgEPwrYzuq.X.1uccfhyyaxOVLCqaa', NULL, '2024-06-05 11:46:36', '2024-06-06 18:48:11', ''),
(9, 'Babar', 'babaralisoomro1@gmail.com', NULL, '$2y$10$rqjQz3kxeqfS39vJrkdsqusv9mYr54UUtlZywsfH.xMQc2XYm3Olm', NULL, '2024-06-05 17:25:00', '2024-06-28 15:41:04', ''),
(10, 'Test', 'test22@mailinator.com', NULL, '$2y$10$68P3yJYro1O.N8x6N1GCQOIaZfi24jemqljN0S.EcVTW5qO0Pc2eO', NULL, '2024-06-06 18:57:31', '2024-06-06 18:57:31', ''),
(11, 'jack', 'jack@mailinator.com', NULL, '$2y$10$K6NChRFtWokyKceb3sioue.rib6PfdZmd57Udu9Jsz/a4o.pEI/Yi', NULL, '2024-06-26 17:34:19', '2024-06-26 17:34:19', ''),
(12, 'jack', 'jack23@mailinator.com', NULL, '$2y$10$NBWmcZ8LR27EMdXPnm/d3em9xp3G1A9K1mVdekIrQO4U.RxfvsehO', NULL, '2024-06-26 17:46:52', '2024-06-26 17:46:52', ''),
(13, 'kyle', 'kyle@gmail.com', NULL, '$2y$10$Bh69PNQDNfqjLqpwKsjB8.GWrmUkUy67FAHp6PFLWOuGggW/9wqmm', NULL, '2024-06-26 17:48:36', '2024-06-26 17:48:36', ''),
(14, 'Test', 'test@yopmail.com', NULL, '$2y$10$RIbFfCrUpJ2SDOT2chtrleV.3Mgt2jFjIfkSY8AhCdWnvO/jiWh3O', NULL, '2024-07-03 19:41:24', '2024-07-03 19:41:24', ''),
(15, 'jack', 'jack234@mailinator.com', NULL, '$2y$10$Y0iwX3wimJVtJXzaPDKay.4KEpLNujPJO5CkA5QoO6xRoKZ5reIV6', NULL, '2024-07-03 19:41:53', '2024-07-03 19:41:53', ''),
(16, 'jack', 'jack2345@mailinator.com', NULL, '$2y$10$A0gIN/MQVpZ1n3n5spgusOQu7VFjXlTQ705lVhVfUzWWN1KBfeaMy', NULL, '2024-07-03 19:42:13', '2024-07-03 19:42:13', ''),
(17, 'kyle', 'xyz@gmail.com', NULL, '$2y$10$88UFtR4ka9Zp1NUfvX1xVeWCj5kLjtsVNMNVe6i4XbiI10IWtEzye', NULL, '2024-07-03 19:43:41', '2024-07-03 19:43:41', ''),
(18, 'kyle', 'wyz@gmail.com', NULL, '$2y$10$pVC6VQpnsXittfvqEwFQduG.kw0cdXjBZ.s.ZCp7rke0.JFlNdMGq', NULL, '2024-07-03 19:46:54', '2024-07-03 19:46:54', ''),
(19, 'Test', 'test123@yopmail.com', NULL, '$2y$10$0RjMTHBit0fgNOFKyVL2c.snsKMqljSgO/l.DIEof/7ahnxqZA1.a', NULL, '2024-07-03 19:47:30', '2024-07-03 19:47:30', ''),
(20, 'Ali', 'letsemailaliahsan@gmail.com', NULL, '$2y$10$j4ymdAL2QXRsfBo2DNJ4kuqks6k7PzVzlOZI393YlyYOd7OQEfOG6', NULL, '2024-07-05 19:10:22', '2024-07-05 19:10:22', ''),
(25, 'Ali', 'ali@gmail.com', NULL, '$2y$10$uUQqWbuSsFqlmZIw9XTr6ueBBk7LF1D257v5IZ1OToFK73sRBkSvu', NULL, '2024-07-12 17:45:59', '2024-07-12 17:45:59', '090078601'),
(26, 'Ali', 'letsmailaliahsan@gmail.com', NULL, '$2y$10$o3cebmvLZwRjjSZzC9QPX.NP05LaO8n4p0vnbpBnaPY67MB95hDY.', NULL, '2025-02-24 17:03:20', '2025-02-24 17:03:20', '03426347923'),
(27, 'Tests', 'test321@yopmail.com', NULL, '$2y$10$NWX2jHnPS7TWHgZAF/WuMeQlQSjXMfFeTGeBHe0UqQ7GXSmhvt8Me', NULL, '2025-02-24 20:18:23', '2025-02-24 23:17:55', '1234567891');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duroodpaks`
--
ALTER TABLE `duroodpaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forget_passwords`
--
ALTER TABLE `forget_passwords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forget_passwords_user_id_foreign` (`user_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `duroodpaks`
--
ALTER TABLE `duroodpaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forget_passwords`
--
ALTER TABLE `forget_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forget_passwords`
--
ALTER TABLE `forget_passwords`
  ADD CONSTRAINT `forget_passwords_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
