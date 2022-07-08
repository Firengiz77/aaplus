-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3307
-- Üretim Zamanı: 08 Tem 2022, 14:54:29
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aa`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(255) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Elektron təhlükəsizlik sistemləri\",\"en\":\"Elektron təhlükəsizlik sistemləri\",\"ru\":\"Elektron təhlükəsizlik sistemləri\"}', 0, NULL, '2022-07-08 02:41:44'),
(2, '{\"az\":\"Simsiz telemetriya\",\"en\":\"Simsiz telemetriya\",\"ru\":\"Simsiz telemetriya\"}', 0, '2022-07-08 02:37:55', '2022-07-08 02:41:53'),
(3, '{\"az\":\"Məqsədli həllər\",\"en\":\"Məqsədli həllər\",\"ru\":\"Məqsədli həllər\"}', 0, '2022-07-08 02:42:25', '2022-07-08 02:42:25'),
(4, '{\"az\":\"Proqramlaşdırma və avtomatlaşdırma\",\"en\":\"Proqramlaşdırma və avtomatlaşdırma\",\"ru\":\"Proqramlaşdırma və avtomatlaşdırma\"}', 0, '2022-07-08 02:42:32', '2022-07-08 02:42:46'),
(5, '{\"az\":\"Video müşahidə sistemləri,\",\"en\":\"Video müşahidə sistemləri,\",\"ru\":\"Video müşahidə sistemləri,\"}', 1, '2022-07-08 02:42:55', '2022-07-08 02:42:55'),
(6, '{\"az\":\"Girişə və iş vaxtına nəzarət sistemləri,\",\"en\":\"Girişə və iş vaxtına nəzarət sistemləri,\",\"ru\":\"Girişə və iş vaxtına nəzarət sistemləri,\"}', 1, '2022-07-08 02:43:05', '2022-07-08 02:43:05'),
(7, '{\"az\":\"Yanğın siqnalizasiya sistemləri,\",\"en\":\"Yanğın siqnalizasiya sistemləri,\",\"ru\":\"Yanğın siqnalizasiya sistemləri,\"}', 1, '2022-07-08 02:43:13', '2022-07-08 02:43:13'),
(8, '{\"az\":\"Mühafizə xəbərdarlıq sistemləri,\",\"en\":\"Mühafizə xəbərdarlıq sistemləri,\",\"ru\":\"Mühafizə xəbərdarlıq sistemləri,\"}', 1, '2022-07-08 02:43:20', '2022-07-08 02:43:20'),
(9, '{\"az\":\"Şlaqbaunlar, Turniketlər, Bollardlar və s,\",\"en\":\"Şlaqbaunlar, Turniketlər, Bollardlar və s,\",\"ru\":\"Şlaqbaunlar, Turniketlər, Bollardlar və s,\"}', 1, '2022-07-08 02:43:27', '2022-07-08 02:43:27'),
(10, '{\"az\":\"Ödənişli və ödənişsiz dayanacaq sistemləri,\",\"en\":\"Ödənişli və ödənişsiz dayanacaq sistemləri,\",\"ru\":\"Ödənişli və ödənişsiz dayanacaq sistemləri,\"}', 1, '2022-07-08 02:43:33', '2022-07-08 02:43:33'),
(11, '{\"az\":\"Şəbəkə avadanlığı\",\"en\":\"Şəbəkə avadanlığı\",\"ru\":\"Şəbəkə avadanlığı\"}', 1, '2022-07-08 02:43:40', '2022-07-08 02:43:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `certificates`
--

INSERT INTO `certificates` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '229227906_XDj3V0Aa3LVbvqZ8QOpe.webp', '2022-07-07 01:54:03', '2022-07-07 01:56:07'),
(3, '877318804_Knauf-logo.png', '2022-07-07 01:55:27', '2022-07-07 01:55:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `phone1`, `phone2`, `email`, `address`, `fb`, `insta`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, '0708884581', '0708884581', 'firengizsariyeva77@gmail.com', 'Baku Azerbaijan', 'baku2', 'baku', 'baku', '2022-07-06 05:38:30', '2022-07-06 05:40:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `counters`
--

INSERT INTO `counters` (`id`, `title`, `number`, `created_at`, `updated_at`) VALUES
(2, '{\"az\":\"Title 1 for Counter az\",\"en\":\"Title 1 for Counter en\",\"ru\":\"Title 1 for Counter ru\"}', '123', '2022-07-07 01:23:09', '2022-07-07 01:23:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(5, '{\"az\":\"sdfgdfg\",\"en\":\"sdfsdf\",\"ru\":\"dfgbdfgb\"}', '534343284_geo_travel_blue_logo.png', '2022-07-07 01:01:52', '2022-07-07 01:01:52'),
(7, '{\"az\":\"fbxdfgb\",\"en\":\"dfgbdf\",\"ru\":\"dfgbdfgb\"}', '433101935_Rectangle-23.jpg', '2022-07-07 01:02:11', '2022-07-07 01:02:11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_04_120218_create_roles_table', 1),
(6, '2022_07_04_120250_create_role_users_table', 1),
(7, '2022_07_04_121332_create_user_codes_table', 1),
(8, '2022_07_05_112250_create_pages_table', 2),
(9, '2022_07_05_112437_create_languages_table', 3),
(10, '2022_07_05_115734_add_column_to_pages_table', 4),
(11, '2022_07_06_075902_create_contacts_table', 5),
(12, '2022_07_06_094630_create_galleries_table', 6),
(13, '2022_07_06_105842_create_sliders_table', 7),
(14, '2022_07_07_050824_create_counters_table', 8),
(15, '2022_07_07_052933_create_certificates_table', 9),
(16, '2022_07_07_060137_create_partners_table', 10),
(17, '2022_07_07_061525_create_news_table', 11),
(18, '2022_07_07_075320_create_projecttypes_table', 12),
(19, '2022_07_08_045009_create_projects_table', 13),
(20, '2022_07_08_062210_create_categories_table', 14),
(21, '2022_07_08_071222_create_products_table', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `desc`, `thumbnail`, `images`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"sdfg\",\"en\":\"sdfgdfvdfvdf \",\"ru\":\"sdf\"}', '{\"az\":\"sdfg\",\"en\":\"sdffv\",\"ru\":\"sfdv\"}', '2131412481_lankaran.jpg', '[\"365454414_qabala.jpg\",\"856047269_103236.jpg\"]', '2022-07-07 02:41:47', '2022-07-07 02:46:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `on_off` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `page_en`, `page_ru`, `page_az`, `slug_en`, `slug_ru`, `slug_az`, `title_en`, `title_ru`, `title_az`, `description_en`, `description_ru`, `description_az`, `keywords_en`, `keywords_ru`, `keywords_az`, `viewname`, `route`, `page_id`, `parent_id`, `created_at`, `updated_at`, `on_off`) VALUES
(6, 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', 'home 2', '2022-07-07 03:18:36', '2022-07-07 03:18:36', '1'),
(8, 'hjkl.j', 'kl', 'hjk,', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', 'jkl', '2022-07-07 03:20:14', '2022-07-07 03:46:20', '1'),
(9, 'hjk', 'hjk', 'hjk', 'asd', 'zxdcz', 'hjk', 'vc', 'fdgb', 'dczx', 'dfgb', 'dfgb', 'xcgbv', 'dfgb', 'dfgb', 'dfgb', 'dfgb', 'dfgb', 'dfgb', 'dfgb', '2022-07-07 03:20:38', '2022-07-07 03:20:38', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `partners`
--

INSERT INTO `partners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '59952753_462852_02.jpg', '2022-07-07 02:11:00', '2022-07-07 02:11:48'),
(3, '1304280902_103236.jpg', '2022-07-07 02:12:00', '2022-07-07 02:12:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `images`, `link`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"fghj\",\"en\":\"ghjdf\",\"ru\":\"hj\"}', '{\"az\":\"ghj\",\"en\":\"ghjdf\",\"ru\":\"k,hjk\"}', '[\"1261298963_11.jpg\",\"1302557627_13.jpg\"]', NULL, '5', '2022-07-08 03:46:26', '2022-07-08 03:53:47'),
(2, '{\"az\":\"cfghn\",\"en\":\"gh\",\"ru\":\"cfg\"}', '{\"az\":\"cfgh\",\"en\":\"fcgh\",\"ru\":\"hnchn\"}', '[\"970950276_photo-1591448764624-d7973a442bff.jpg\",\"160226337_izmir-1-(1).jpg\",\"426221018_cappadocia.jpg\",\"1362191655_antalya-turkey-1800x1000.jpg\"]', NULL, '6', '2022-07-08 03:54:30', '2022-07-08 03:54:30');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_type_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `project_type_id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(2, '4', '{\"az\":\"fgh\",\"en\":\"gfh\",\"ru\":\"rtg\"}', '{\"az\":\"fghn\",\"en\":\"fgh\",\"ru\":\"rdtg\"}', '1534807065_13.jpg', '2022-07-08 01:21:47', '2022-07-08 02:11:48'),
(3, '4', '{\"az\":\"sdfsdf\",\"en\":\"sfsdf\",\"ru\":\"sdfsdf\"}', '{\"az\":\"sdfsdf\",\"en\":\"sfdsdf\",\"ru\":\"sdfsdf\"}', '714489772_bread.jpg', '2022-07-08 02:03:32', '2022-07-08 02:11:55'),
(4, '4', '{\"az\":\"dfg\",\"en\":\"dsfg\",\"ru\":\"dfg\"}', '{\"az\":\"dfg\",\"en\":\"dfg\",\"ru\":\"dfg\"}', '558576839_bread2.jpg', '2022-07-08 02:05:55', '2022-07-08 02:15:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projecttypes`
--

CREATE TABLE `projecttypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projecttypes`
--

INSERT INTO `projecttypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"Cari\",\"en\":\"Cari\",\"ru\":\"Cari\"}', '2022-07-07 04:03:01', '2022-07-08 00:55:25'),
(5, '{\"az\":\"Bitmis\",\"en\":\"Bitmis\",\"ru\":\"Bitmis\"}', '2022-07-07 04:11:58', '2022-07-08 00:55:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', NULL, NULL),
(2, 'Admin', NULL, NULL),
(3, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_users`
--

CREATE TABLE `role_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `role_users`
--

INSERT INTO `role_users` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 5, 1, NULL, NULL),
(6, 5, 1, NULL, NULL),
(10, 5, 1, NULL, NULL),
(12, 5, 1, NULL, NULL),
(14, 5, 1, NULL, NULL),
(16, 5, 1, NULL, NULL),
(18, 5, 1, NULL, NULL),
(20, 5, 2, NULL, NULL),
(22, 5, 2, NULL, NULL),
(24, 5, 2, NULL, NULL),
(26, 5, 2, NULL, NULL),
(28, 5, 1, NULL, NULL),
(30, 5, 1, NULL, NULL),
(32, 5, 1, NULL, NULL),
(34, 5, 1, NULL, NULL),
(36, 5, 1, NULL, NULL),
(38, 5, 2, NULL, NULL),
(40, 5, 2, NULL, NULL),
(42, 5, 2, NULL, NULL),
(44, 5, 2, NULL, NULL),
(46, 5, 1, NULL, NULL),
(48, 5, 1, NULL, NULL),
(51, 5, 1, NULL, NULL),
(53, 5, 1, NULL, NULL),
(55, 5, 1, NULL, NULL),
(57, 5, 2, NULL, NULL),
(59, 5, 2, NULL, NULL),
(61, 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(5, '{\"az\":\"dsfvdf\",\"en\":\"sdsd\",\"ru\":\"sdfvdf\"}', '{\"az\":\"dfvdfv\",\"en\":\"sdzsd\",\"ru\":\"dsffdv\"}', '2124947672_103236.jpg', '2022-07-07 01:03:14', '2022-07-07 01:03:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_active` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `admin_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Firengiz', 'firengizsariyeva77@gmail.com', NULL, '$2y$10$Qs8f3QMyjDDeLkMAeChqX.gSLuHWyZ0rMxhFBcTLNYUq3GDtZ9iZq', '202207050629antalya-turkey-1800x1000.jpg', 1, NULL, '2022-07-05 01:47:19', '2022-07-05 02:33:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_codes`
--

CREATE TABLE `user_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `projecttypes`
--
ALTER TABLE `projecttypes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `user_codes`
--
ALTER TABLE `user_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_codes_user_id_foreign` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `projecttypes`
--
ALTER TABLE `projecttypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `user_codes`
--
ALTER TABLE `user_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `user_codes`
--
ALTER TABLE `user_codes`
  ADD CONSTRAINT `user_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
