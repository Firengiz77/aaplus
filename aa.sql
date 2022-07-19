-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3307
-- Üretim Zamanı: 19 Tem 2022, 14:02:45
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
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(255) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug_az`, `slug_en`, `slug_ru`, `icon`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Elektron təhlükəsizlik sistemləri\",\"en\":\"Elektron təhlükəsizlik sistemləri\",\"ru\":\"Elektron təhlükəsizlik sistemləri\"}', 'elektron_tehlukesizlik_sistemleri_az', 'elektron_tehlukesizlik_sistemleri_e', 'elektron_tehlukesizlik_sistemleri_ru', '118535347_icon-1.png', 0, NULL, '2022-07-15 03:35:45'),
(2, '{\"az\":\"Simsiz telemetriya\",\"en\":\"Simsiz telemetriya\",\"ru\":\"Simsiz telemetriya\"}', 'simsiz_telemetriya_az', 'simsiz_telemetriya_en', 'simsiz_telemetriya_ru', '245881478_icon-2.png', 0, '2022-07-08 02:37:55', '2022-07-15 01:58:47'),
(3, '{\"az\":\"Məqsədli həllər\",\"en\":\"Məqsədli həllər\",\"ru\":\"Məqsədli həllər\"}', 'meqsedli_heller_az', 'meqsedli_heller_en', 'meqsedli_heller_ru', '91952404_icon-3.png', 0, '2022-07-08 02:42:25', '2022-07-15 01:59:02'),
(4, '{\"az\":\"Proqramlaşdırma və avtomatlaşdırma\",\"en\":\"Proqramlaşdırma və avtomatlaşdırma\",\"ru\":\"Proqramlaşdırma və avtomatlaşdırma\"}', 'proqramlasdirma_az', 'proqramlasdirma_en', 'proqramlasdirma_ru', '85856917_icon-4.png', 0, '2022-07-08 02:42:32', '2022-07-15 01:59:17');

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
(1, '1431149039_certificate-1.png', '2022-07-07 01:54:03', '2022-07-13 08:35:26'),
(3, '629026695_certificate-2.png', '2022-07-07 01:55:27', '2022-07-13 08:35:32');

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
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `slug_az`, `slug_en`, `slug_ru`, `created_at`, `updated_at`, `gallery_id`) VALUES
(8, '{\"az\":\"Gallery 1 title az\",\"en\":\"Gallery 1 title en\",\"ru\":\"Gallery 1 title ru\"}', '1479523075_news-slide-3.png', 'gallery_1_az', 'gallery_1_en', 'gallery_1_ru', '2022-07-15 00:54:20', '2022-07-15 01:32:28', '0'),
(9, '{\"az\":\"Gallery 2 title 2 az\",\"en\":\"Gallery 2 title 2 en\",\"ru\":\"Gallery 2 title 2 ru\"}', '565561470_news-slide-2.png', 'gallery_2_az', 'gallery_2_en', 'gallery_2_ru', '2022-07-15 00:55:36', '2022-07-15 02:43:31', '0'),
(10, '{\"az\":\"Gallery 1 sub gallery title 1\",\"en\":\"Gallery 1 sub gallery title 1 en\",\"ru\":\"Gallery 1 sub gallery title 1 ru\"}', '533918512_about-1.png', 'gallery_1_1_az', 'gallery_1_1_az', 'gallery_1_1_az', '2022-07-15 00:56:07', '2022-07-15 01:33:49', '8'),
(11, '{\"az\":\"Gallery 2 sub gallery title 1\",\"en\":\"Gallery 2 sub gallery title 1 en\",\"ru\":\"Gallery 2 sub gallery title 1 ru\"}', '638978794_about-2.png', 'gallery_2_1_az', 'gallery_2_1_az', 'gallery_2_1_az', '2022-07-15 00:56:32', '2022-07-15 01:33:45', '9'),
(12, '{\"az\":\"Gallery 1.2 title 1 az\",\"en\":\"Gallery 1.2 title 1 en\",\"ru\":\"Gallery 1.2 title 1 ru\"}', '1338511084_gallery-img2.png', 'gallery_1_2_az', 'gallery_1_2_en', 'gallery_1_2_en', '2022-07-15 01:17:58', '2022-07-15 01:33:30', '8');

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
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msj` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `surname`, `phone`, `email`, `msj`, `prefix`, `created_at`, `updated_at`) VALUES
(2, 'Kondisioner', 'test1', '888-56-78', 'dev@gmail.com', 'sgfdsdf', '051', '2022-07-14 00:43:24', '2022-07-14 00:43:24');

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
(21, '2022_07_08_071222_create_products_table', 15),
(22, '2022_07_13_131506_create_messages_table', 16),
(23, '2022_07_15_044301_add_column_to_galleries_table', 17),
(24, '2022_07_19_100417_add_column_to_slider_table', 18);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `title`, `desc`, `thumbnail`, `images`, `created_at`, `updated_at`) VALUES
(1, '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam aLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam aLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam aLorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam a\"}', '156404736_news-1.png', '[\"1746943414_news-slide-1.png\",\"1491519475_news-slide-2.png\"]', '2022-07-07 02:41:47', '2022-07-14 02:48:11'),
(3, '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, en\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, az\"}', '405912376_news-2.png', '[\"1176268342_news-slide-1.png\",\"3154085_news-slide-2.png\"]', '2022-07-14 02:34:16', '2022-07-14 02:48:19');

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
(6, 'Home Page', 'Home Page ru', 'Esas Sehife', '/', '/', '/', 'Home Page', 'Home Page ru', 'Əsas Səhifə', 'Home Page', 'Home Page ru', 'Əsas Səhifə', 'Home Page', 'Home Page ru', 'Əsas Səhifə', 'index', 'index', '1', '0', '2022-07-07 03:18:36', '2022-07-13 07:57:39', '0'),
(10, 'About us', 'About us ru', 'Haqqimizda', 'about-us', 'about-us-ru', 'haqqimizda', 'Haqqimizda en', 'Haaqimizda ru', 'Haqqimizda', 'rfth', 'dtdrt', 'hbhjb', 'drth', 'dth', 'drt', 'about_us', 'about', '2', '0', '2022-07-13 07:58:16', '2022-07-15 06:16:20', '1'),
(11, 'Gallery', 'Gallery ru', 'Qalereya', 'galleries', 'galleries_ru', 'qalereyalar', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'Gallery', 'galleries', 'galleries', '3', '10', '2022-07-13 08:00:17', '2022-07-15 00:59:42', '1'),
(12, 'About us', 'About us', 'Sirket Haqqinda', 'about-us', 'about-us-ru', 'sirket-haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'Sirket Haqqinda', 'about_us', 'about_us', '4', '10', '2022-07-13 08:04:40', '2022-07-13 08:04:40', '1'),
(13, 'Mehsullar ve heller', 'Mehsullar ve heller', 'Mehsullar ve heller', 'mehsullar-ve-heller-en', 'mehsullar-ve-heller-ru', 'mehsullar-ve-heller', 'mehsullar-ve-heller', 'mehsullar-ve-heller', 'mehsullar-ve-heller', 'mehsullar-ve-heller', 'Projects', 'mehsullar-ve-heller', 'Projects', 'Projects', 'Projects', 'mehsullarveheller', 'mehsullarveheller', '5', '0', '2022-07-13 08:05:57', '2022-07-13 08:06:53', '1'),
(14, 'Projects', 'Работает', 'Layihələr', 'projects', 'projects_ru', 'layiheler', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'Layihələr', 'projectall', 'projectall', '5', '0', '2022-07-13 08:07:51', '2022-07-15 02:42:33', '1'),
(15, 'News', 'News', 'Xeberler', 'news', 'news-ru', 'xeberler', 'News', 'News', 'News', 'News', 'News', 'News', 'News', 'News', 'News', 'news', 'news', '6', '0', '2022-07-13 08:08:41', '2022-07-13 08:08:41', '1'),
(16, 'Contact', 'Contact ru', 'Elaqe', 'contact', 'o-nas', 'elaqe', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'Contact', 'contact', 'contact', '7', '0', '2022-07-13 08:09:27', '2022-07-13 08:09:27', '1'),
(17, 'Project', 'Project', 'Layihe', 'project', 'project_ru', 'layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'Layihe', 'projects', 'project', '7', '0', '2022-07-14 02:07:37', '2022-07-14 02:08:28', '0'),
(18, 'Qaleriya', 'Qaleriya', 'Qaleriya', 'gallery', 'gallery', 'qalereya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'Qaleriya', 'gallery', 'gallery', '11', '0', '2022-07-15 01:20:21', '2022-07-15 01:20:21', '0'),
(19, 'Search', 'Search', 'Search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', 'search', '19', '0', '2022-07-15 04:28:29', '2022-07-15 04:28:41', '0');

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
(1, '330999085_mobotix.png', '2022-07-07 02:11:00', '2022-07-13 07:41:33'),
(3, '488516179_geovision.png', '2022-07-07 02:12:00', '2022-07-13 07:41:58'),
(4, '816686829_azercell.png', '2022-07-13 07:42:03', '2022-07-13 07:42:25'),
(5, '487666173_bakcell.png', '2022-07-13 07:42:19', '2022-07-13 07:42:19'),
(6, '776339299_assa.png', '2022-07-13 07:42:29', '2022-07-13 07:42:29'),
(7, '2126890551_ruptela.png', '2022-07-13 07:42:45', '2022-07-13 07:42:45'),
(8, '490438049_teltonika.png', '2022-07-13 07:42:51', '2022-07-13 07:42:51'),
(9, '114375499_vingcard.png', '2022-07-13 07:42:55', '2022-07-13 07:42:55');

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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `desc`, `images`, `link`, `slug_az`, `slug_en`, `slug_ru`, `category_id`, `created_at`, `updated_at`) VALUES
(3, '{\"az\":\"Video müşahidə sistemləri,\",\"en\":\"Video müşahidə sistemləri en\",\"ru\":\"Video müşahidə sistemləri ru\"}', '{\"az\":\"VİDEO KAMERA ALLROUND DUAL M25 az\",\"en\":\"VİDEO KAMERA ALLROUND DUAL M25 en\",\"ru\":\"VİDEO KAMERA ALLROUND DUAL M25 ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum. az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum. en\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictumru\"}', '[\"2119455824_about-1.png\",\"1502319500_about-2.png\",\"1930165239_about-img-1.png\",\"931895571_about-img-2.png\"]', NULL, 'video_musahide_sistemleri_az', 'video_musahide_sistemleri_en', 'video_musahide_sistemleri_ru', '1', '2022-07-15 02:08:02', '2022-07-15 02:21:36'),
(4, '{\"az\":\"Girişə və iş vaxtına nəzarət sistemləri,\",\"en\":\"Girişə və iş vaxtına nəzarət sistemləri,\",\"ru\":\"Girişə və iş vaxtına nəzarət sistemləri,\"}', '{\"az\":\"VİDEO KAMERA ALLROUND DUAL M25  title az\",\"en\":\"VİDEO KAMERA ALLROUND DUAL M25 title en\",\"ru\":\"VİDEO KAMERA ALLROUND DUAL M25 title  ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum. az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum. en\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum. ru\"}', '[\"1976510808_gallery-img1.png\",\"936900902_gallery-img2.png\"]', 'link', 'girise_nezaret_az', 'girise_nezaret_en', 'girise_nezaret_ru', '1', '2022-07-15 02:08:22', '2022-07-15 02:24:43'),
(5, '{\"az\":\"test az\",\"en\":\"test az en\",\"ru\":\"test az ru\"}', '{\"az\":\"test az title\",\"en\":\"test az  en title\",\"ru\":\"test az ru title\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum.\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum.\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum fames sapien lectus urna aliquam pretium, imperdiet imperdiet. Gravida imperdiet enim sit at ac at purus elementum est. Ipsum ut nisl urna pretium. Est fringilla vulputate consequat enim id dictum.\"}', '[\"1380936240_project-1.png\",\"1501211223_project--1.png\",\"1966063662_project-2.png\"]', NULL, 'test_az', 'test_en', 'test_ru', '2', '2022-07-15 02:08:57', '2022-07-15 02:22:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_type_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projects`
--

INSERT INTO `projects` (`id`, `project_type_id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(2, '5', '{\"az\":\"Heydər Əliyev Adına İdman Konsert Kompleksi\",\"en\":\"Heydər Əliyev Adına İdman Konsert Kompleksi\",\"ru\":\"Heydər Əliyev Adına İdman Konsert Kompleksi ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu tu\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu tu\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu tu\"}', '382893225_project-6.png', '2022-07-08 01:21:47', '2022-07-14 01:01:47'),
(3, '4', '{\"az\":\"Heydər Əliyev Adına İdman Konsert Kompleksi\",\"en\":\"Heydər Əliyev Adına İdman Konsert Kompleksi en\",\"ru\":\"Heydər Əliyev Adına İdman Konsert Kompleksi eu\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula. az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula. en\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula.\"}', '270496386_about-2.png', '2022-07-08 02:03:32', '2022-07-14 01:01:16'),
(4, '4', '{\"az\":\"Heydər Əliyev Adına İdman Konsert Kompleksi\",\"en\":\"Heydər Əliyev Adına İdman Konsert Kompleksi en\",\"ru\":\"Heydər Əliyev Adına İdman Konsert Kompleksi ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula.\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula.\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula.\"}', '1584037938_about-1.png', '2022-07-08 02:05:55', '2022-07-14 01:00:42'),
(5, '5', '{\"az\":\"Heydər Əliyev Adına İdman Konsert Kompleksi\",\"en\":\"Heydər Əliyev Adına İdman Konsert Kompleksi en\",\"ru\":\"Heydər Əliyev Adına İdman Konsert Kompleksi ru\"}', '{\"az\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula az\",\"en\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula en\",\"ru\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse purus semper volutpat elementum ipsum vel sed sed. Lectus aliquam amet, enim, sit porttitor mi massa. Leo enim, nulla auctor arcu enim egestas odio dui. Vulputate est, in augue est, dignissim arcu turpis ligula\"}', '357189287_project-7.png', '2022-07-14 01:02:16', '2022-07-14 01:02:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `projecttypes`
--

CREATE TABLE `projecttypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `projecttypes`
--

INSERT INTO `projecttypes` (`id`, `name`, `slug_az`, `slug_en`, `slug_ru`, `image`, `created_at`, `updated_at`) VALUES
(4, '{\"az\":\"Cari\",\"en\":\"Cari\",\"ru\":\"Cari\"}', 'cari', 'cari_en', 'cari_ru', '1340077058_project-1.png', '2022-07-07 04:03:01', '2022-07-14 00:52:39'),
(5, '{\"az\":\"Bitmis\",\"en\":\"Bitmis en\",\"ru\":\"Bitmis ru\"}', 'bitmis', 'bitmis_en', 'bitmis_ru', '434089777_project-2.png', '2022-07-07 04:11:58', '2022-07-14 01:31:12');

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
(61, 5, 2, NULL, NULL),
(64, 5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `font_size_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_weight_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_weight_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_size_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `desc`, `desc_2`, `image`, `created_at`, `updated_at`, `font_size_1`, `color`, `font_weight_1`, `font_weight_2`, `font_size_2`) VALUES
(5, '{\"az\":\"Title 1\",\"en\":\"Title 1 en\",\"ru\":\"Title 1 ru\"}', '{\"az\":\"Duzgun Muhafize\\n</br>\\nRahat Yasam\",\"en\":\"Duzgun Muhafize\\n</br>\\nRahat Yasam\",\"ru\":\"Duzgun Muhafize\"}', NULL, '1562743326_a1.jpg', '2022-07-07 01:03:14', '2022-07-19 06:35:03', '50', 'white', '700', '400', '35'),
(6, '{\"az\":\"Title 2\",\"en\":\"Title 2 en\",\"ru\":\"Title 2 ru\"}', '{\"az\":\"Desc 2\",\"en\":\"Desc 2 en\",\"ru\":\"Desc 2 ru\"}', NULL, '950086162_a2.jpg', '2022-07-13 06:44:23', '2022-07-19 06:30:16', '50', 'black', '400', '400', '35');

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
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
