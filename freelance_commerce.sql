-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 02:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmenus`
--

CREATE TABLE `adminmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmenus`
--

INSERT INTO `adminmenus` (`id`, `name`, `position`, `data`, `lang`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"Header\",\"en\":\"Header\"}', 'header', '[{\"text\":\"Home\",\"href\":\"/\",\"icon\":\"\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Pricing\",\"href\":\"/priceing\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Services\",\"href\":\"/service\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Contact\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Login\",\"href\":\"/login\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]', 'en', 0, '2021-01-08 13:21:55', '2021-01-11 15:08:42'),
(2, '{\"ar\":\"Useful links\",\"en\":\"Useful links\"}', 'footer_left', '[{\"text\":\"Academy\",\"href\":\"/\",\"icon\":\"\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Help\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Community\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Tools\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]', 'en', 1, '2021-01-10 06:46:43', '2021-01-16 05:04:06'),
(3, '{\"ar\":\"Policy\",\"en\":\"Policy\"}', 'footer_right', '[{\"text\":\"Policy\",\"href\":\"/page/terms-and-condition\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Service Policy\",\"href\":\"/page/terms-and-condition\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Refund Policy\",\"href\":\"/page/terms-and-condition\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]', 'en', 1, '2021-01-10 06:58:24', '2021-01-16 05:09:59'),
(4, '{\"ar\":\"Information\",\"en\":\"Information\"}', 'footer_center', '[{\"text\":\"About Us\",\"href\":\"#about_us\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Partners Program\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Priceing\",\"href\":\"#priceing\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"Payment gateway\",\"href\":\"/contact\",\"icon\":\"empty\",\"target\":\"_self\",\"title\":\"\"}]', 'en', 1, '2021-01-10 06:58:40', '2021-01-16 05:02:47'),
(5, '{\"ar\":\"Header Arabic\",\"en\":\"Header Arabic\"}', 'header', '[{\"text\":\"الصفحة الرئيسية\",\"icon\":\"\",\"href\":\"/\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"التسعير\",\"icon\":\"empty\",\"href\":\"/priceing\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"صالة عرض\",\"icon\":\"empty\",\"href\":\"/service\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"اتصل\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"تسجيل الدخول\",\"icon\":\"empty\",\"href\":\"/login\",\"target\":\"_self\",\"title\":\"\"}]', 'ar', 1, '2021-01-11 15:09:00', '2021-01-11 15:10:56'),
(6, '{\"ar\":\"معلومات\",\"en\":\"معلومات\"}', 'footer_center', '[{\"text\":\"معلومات عنا\",\"icon\":\"\",\"href\":\"#about_us\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"برنامج الشركاء\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"التسعير\",\"icon\":\"empty\",\"href\":\"#priceing\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"بوابة الدفع\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"}]', 'ar', 1, '2021-01-16 05:05:58', '2021-01-16 05:08:26'),
(7, '{\"ar\":\"سياسات\",\"en\":\"سياسات\"}', 'footer_right', '[{\"text\":\"سياسات\",\"icon\":\"\",\"href\":\"/page/terms-and-condition\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"سياسة الخدمة\",\"icon\":\"empty\",\"href\":\"/page/terms-and-condition\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"سياسة الاسترجاع\",\"icon\":\"empty\",\"href\":\"/page/terms-and-condition\",\"target\":\"_self\",\"title\":\"\"}]', 'ar', 1, '2021-01-16 05:06:18', '2021-01-16 05:10:29'),
(8, '{\"ar\":\"روابط مفيدة\",\"en\":\"روابط مفيدة\"}', 'footer_left', '[{\"text\":\"الأكاديمية\",\"icon\":\"empty\",\"href\":\"/\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"مساعدة\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"تواصل اجتماعي\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"},{\"text\":\"أدوات\",\"icon\":\"empty\",\"href\":\"/contact\",\"target\":\"_self\",\"title\":\"\"}]', 'ar', 1, '2021-01-16 05:06:35', '2021-01-16 05:24:25'),
(9, '{\"ar\":\"\\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a\",\"en\":\"emarates\"}', 'header', '[]', 'en', 0, '2021-04-11 20:28:19', '2021-04-11 20:28:19'),
(10, '{\"ar\":\"\\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a\",\"en\":\"emarates\"}', 'header', '[]', 'en', 1, '2021-04-11 20:28:20', '2021-04-11 20:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `variation_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `term_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'category',
  `p_id` bigint(20) UNSIGNED DEFAULT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `menu_status` int(11) NOT NULL DEFAULT 0,
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `type`, `p_id`, `featured`, `menu_status`, `is_admin`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '{\"ar\":\"default\",\"en\":\"default\"}', '{\"ar\":\"default\",\"en\":\"default\"}', 'parent_attribute', NULL, 0, 0, 0, '2020-12-12 12:49:38', '2020-12-12 12:49:38', 1),
(2, '{\"ar\":\"COD\",\"en\":\"COD\"}', '{\"ar\":\"cod\",\"en\":\"cod\"}', 'payment_getway', NULL, 1, 0, 0, '2020-12-12 12:49:38', '2020-12-12 12:49:38', 1),
(3, '{\"ar\":\"INSTAMOJO\",\"en\":\"INSTAMOJO\"}', '{\"ar\":\"instamojo\",\"en\":\"instamojo\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:49:39', '2020-12-12 12:49:39', 1),
(4, '{\"ar\":\"RAZORPAY\",\"en\":\"RAZORPAY\"}', '{\"ar\":\"razorpay\",\"en\":\"razorpay\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:49:39', '2020-12-12 12:49:39', 1),
(5, '{\"ar\":\"PAYPAL\",\"en\":\"PAYPAL\"}', '{\"ar\":\"paypal\",\"en\":\"paypal\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:49:39', '2020-12-29 07:12:16', 1),
(6, '{\"ar\":\"STRIPE\",\"en\":\"STRIPE\"}', '{\"ar\":\"stripe\",\"en\":\"stripe\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:49:40', '2020-12-12 12:49:40', 1),
(7, '{\"ar\":\"TOYYIBPAY\",\"en\":\"TOYYIBPAY\"}', '{\"ar\":\"toyyibpay\",\"en\":\"toyyibpay\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:49:40', '2020-12-12 12:49:40', 1),
(8, '{\"ar\":\"Mollie\",\"en\":\"Mollie\"}', '{\"ar\":\"mollie\",\"en\":\"mollie\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:54:58', '2020-12-14 04:28:00', 1),
(9, '{\"ar\":\"Paystack\",\"en\":\"Paystack\"}', '{\"ar\":\"paystack\",\"en\":\"paystack\"}', 'payment_getway', NULL, 0, 0, 0, '2020-12-12 12:54:58', '2020-12-14 04:28:00', 1),
(73, '{\"ar\":\"James Curran\",\"en\":\"James Curran\"}', '{\"ar\":\"James Curran\",\"en\":\"James Curran\"}', 'testimonial', NULL, 0, 0, 1, '2020-12-18 15:36:54', '2020-12-18 15:36:54', 1),
(74, '{\"ar\":\"Jose Evans\",\"en\":\"Jose Evans\"}', '	\r\n{\"ar\":\"Jose Evans\",\"en\":\"Jose Evans\"}', 'testimonial', NULL, 0, 0, 1, '2020-12-18 15:37:34', '2020-12-18 15:37:34', 1),
(75, '{\"ar\":\"#\",\"en\":\"#\"}', NULL, 'brand', NULL, 0, 0, 1, '2020-12-18 16:02:34', '2020-12-18 16:02:34', 1),
(76, '{\"ar\":\"#\",\"en\":\"#\"}', NULL, 'brand', NULL, 0, 0, 1, '2020-12-18 16:02:43', '2020-12-18 16:02:43', 1),
(77, '{\"ar\":\"#\",\"en\":\"#\"}', NULL, 'brand', NULL, 0, 0, 1, '2020-12-18 16:02:57', '2020-12-18 16:02:57', 1),
(78, '{\"ar\":\"#\",\"en\":\"#\"}', NULL, 'brand', NULL, 0, 0, 1, '2020-12-18 16:03:05', '2020-12-18 16:03:05', 1),
(79, '{\"ar\":\"#\",\"en\":\"#\"}', NULL, 'brand', NULL, 0, 0, 1, '2020-12-18 16:03:14', '2020-12-18 16:03:14', 1),
(81, '{\"ar\":\"ابدا متجر اون لاين\",\"en\":\"Start an online business\"}', '{\"ar\":\"Start an online business\",\"en\":\"Start an online business\"}', 'features', NULL, 0, 0, 1, '2021-01-09 15:20:57', '2021-01-09 15:20:57', 1),
(82, '{\"ar\":\"حول للتجارة اون لاين\",\"en\":\"Move your business online\"}', '{\"ar\":\"Move your business online\",\"en\":\"Move your business online\"}', 'features', NULL, 0, 0, 1, '2021-01-09 15:23:50', '2021-01-09 15:23:50', 1),
(87, '{\"ar\":\"#test\",\"en\":\"#test\"}', '', 'gallery', NULL, 0, 0, 1, '2021-01-09 16:19:05', '2021-01-09 16:19:05', 1),
(88, '{\"ar\":\"#\",\"en\":\"#\"}', '1', 'gallery', NULL, 0, 0, 1, '2021-01-09 16:19:17', '2021-01-09 16:19:17', 1),
(89, '{\"ar\":\"#\",\"en\":\"#\"}', '1', 'gallery', NULL, 0, 0, 1, '2021-01-09 16:19:27', '2021-01-09 16:19:27', 1),
(90, '{\"ar\":\"#\",\"en\":\"#\"}', '1', 'gallery', NULL, 0, 0, 1, '2021-01-09 16:32:18', '2021-01-09 16:32:18', 1),
(91, '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '{\"ar\":\"Product Inventors\",\"en\":\"Product Inventors\"}', 'features', NULL, 0, 0, 1, '2021-01-09 15:20:57', '2021-01-09 15:20:57', 1),
(92, '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '{\"ar\":\"Product Inventors\",\"en\":\"Product Inventors\"}', 'features', NULL, 0, 0, 1, '2021-01-09 15:20:57', '2021-01-09 15:20:57', 1),
(93, '{\"ar\":\"#\",\"en\":\"#\"}', '{\"ar\":\"#\",\"en\":\"#\"}', 'brand', NULL, 0, 0, 1, '2020-12-18 16:03:14', '2020-12-18 16:03:14', 1),
(94, '{\"ar\":\"\\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a\",\"en\":\"emarates\"}', '{\"ar\":\"alamarat\",\"en\":\"emarates\"}', 'category', NULL, 1, 1, 0, '2021-04-08 20:48:30', '2021-04-08 20:48:30', 2),
(95, '{\"ar\":\"adsq1\",\"en\":\"\\u0634\\u0633\\u064aq1\"}', 'aradsenu0634u0633u064a', 'parent_attribute', NULL, 0, 0, 0, '2021-04-08 21:37:49', '2021-04-08 21:53:25', 2),
(96, '{\"ar\":\"\\u062b\\u0635\\u063622\",\"en\":\"ewq22\"}', '{\"ar\":\"thsd\",\"en\":\"ewq\"}', 'child_attribute', 95, 0, 0, 0, '2021-04-08 21:53:09', '2021-04-08 21:53:44', 2),
(97, '{\"ar\":\"\\u0626\\u0624\\u062122\",\"en\":\"czx22\"}', '{\"ar\":\"yoaa\",\"en\":\"czx\"}', 'brand', NULL, 0, 0, 0, '2021-04-08 22:06:24', '2021-04-08 22:06:43', 2),
(99, '{\"ar\":\"\\u0634\\u064a\\u0633\",\"en\":\"ads\"}', '{\"ar\":\"shys\",\"en\":\"ads\"}', 'city', NULL, 0, 0, 0, '2021-04-08 22:34:47', '2021-04-08 22:34:47', 2),
(100, '{\"ar\":\"\\u0634\\u0633\\u064a\",\"en\":\"ads\"}', '11', 'method', NULL, 0, 0, 0, '2021-04-08 22:35:05', '2021-04-08 22:35:05', 2),
(101, '{\"ar\":\"منتج جديد\",\"en\":\"new product\"}', '{\"ar\":\"aaa\",\"en\":\"dsf\"}', 'features', NULL, 0, 0, 1, '2021-04-11 19:57:57', '2021-04-11 19:57:57', 1),
(102, '{\"ar\":\"sdf\",\"en\":\"dsf\"}', '{\"ar\":\"fsd\",\"en\":\"fdsfds\"}', 'testimonial', NULL, 0, 0, 1, '2021-04-11 20:00:43', '2021-04-11 20:00:43', 1),
(103, '{\"ar\":\"\\u0627\\u0644\\u0627\\u0645\\u0627\\u0631\\u0627\\u062a\",\"en\":\"emarates\"}', NULL, 'brand', NULL, 0, 0, 1, '2021-04-11 20:02:16', '2021-04-11 20:02:16', 1),
(104, '{\"ar\":\"ds\",\"en\":\"ds\"}', '{\"ar\":\"ds\",\"en\":\"ds\"}', 'gallery', NULL, 0, 0, 1, '2021-04-11 20:15:36', '2021-04-11 20:15:36', 1),
(105, 'uploads/2/21/04/1618792710.png', '#test', 'banner_ads', NULL, 0, 0, 0, '2021-04-18 22:38:30', '2021-04-18 22:38:30', 2),
(106, 'uploads/2/21/04/1618793409.png', '#aaa', 'offer_ads', NULL, 0, 0, 0, '2021-04-18 22:50:09', '2021-04-18 22:50:09', 2),
(107, 'سيي', '2021-04-28', 'coupon', NULL, 25, 0, 0, '2021-04-18 22:56:50', '2021-04-18 22:56:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categorymedia`
--

CREATE TABLE `categorymedia` (
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorymetas`
--

CREATE TABLE `categorymetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorymetas`
--

INSERT INTO `categorymetas` (`id`, `category_id`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 'description', 'description', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(2, 2, 'preview', 'uploads/cod.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(3, 3, 'description', 'description', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(4, 3, 'preview', 'uploads/instamojo.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(5, 4, 'description', 'description', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(6, 4, 'preview', 'uploads/razorpay.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(7, 5, 'description', 'description', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(8, 5, 'preview', 'uploads/paypal.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(9, 6, 'description', 'description', '2020-12-12 12:49:40', '2020-12-12 12:49:40'),
(10, 6, 'preview', 'uploads/stripe.png', '2020-12-12 12:49:40', '2020-12-12 12:49:40'),
(11, 7, 'description', 'description', '2020-12-12 12:49:40', '2020-12-12 12:49:40'),
(12, 7, 'preview', 'uploads/toyyibpay.jpg', '2020-12-12 12:49:40', '2020-12-12 12:49:40'),
(35, 73, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2020-12-18 15:36:54', '2020-12-18 15:36:54'),
(36, 74, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2020-12-18 15:37:34', '2020-12-18 15:37:34'),
(37, 75, 'preview', 'uploads/1/2020/12/1608314554.png', '2020-12-18 16:02:34', '2020-12-18 16:02:34'),
(38, 76, 'preview', 'uploads/1/2020/12/1608314563.png', '2020-12-18 16:02:43', '2020-12-18 16:02:43'),
(39, 77, 'preview', 'uploads/1/2020/12/1608314577.png', '2020-12-18 16:02:57', '2020-12-18 16:02:57'),
(40, 78, 'preview', 'uploads/1/2020/12/1608314585.png', '2020-12-18 16:03:06', '2020-12-18 16:03:06'),
(41, 79, 'preview', 'uploads/1/2020/12/1608314594.png', '2020-12-18 16:03:14', '2020-12-18 16:03:14'),
(42, 8, 'description', 'description', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(43, 8, 'preview', 'uploads/mollie.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(44, 4, 'credentials', '{\"key_id\":\"\",\"key_secret\":\"\",\"currency\":\"USD\"}', '2020-12-29 05:42:37', '2020-12-29 05:51:10'),
(45, 3, 'credentials', '{\"x_api_Key\":\"\",\"x_api_token\":\"\"}', '2020-12-29 05:42:54', '2020-12-29 05:42:54'),
(46, 5, 'credentials', '{\"client_id\":\"\",\"client_secret\":\"\",\"currency\":\"USD\"}', '2020-12-29 05:43:08', '2020-12-29 07:01:49'),
(47, 6, 'credentials', '{\"publishable_key\":\"\",\"secret_key\":\"\",\"currency\":\"USD\"}', '2020-12-29 05:43:20', '2020-12-29 05:50:41'),
(48, 7, 'credentials', '{\"userSecretKey\":\"\",\"categoryCode\":\"\"}', '2020-12-29 05:43:32', '2020-12-29 05:43:32'),
(49, 8, 'credentials', '{\"api_key\":\"\",\"currency\":\"USD\"}', '2020-12-29 05:50:18', '2020-12-29 05:50:18'),
(50, 81, 'preview', 'uploads/1/2021/01/1610212857.svg', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(51, 81, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(52, 82, 'preview', 'uploads/1/2021/01/1610213030.svg', '2021-01-09 15:23:51', '2021-01-09 15:23:51'),
(53, 82, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-01-09 15:23:51', '2021-01-09 15:23:51'),
(61, 87, 'preview', 'uploads/admin/1/2021/01/1610216345.webp', '2021-01-09 16:19:05', '2021-01-09 16:19:05'),
(62, 88, 'preview', 'uploads/admin/1/2021/01/1610216357.webp', '2021-01-09 16:19:17', '2021-01-09 16:19:17'),
(63, 89, 'preview', 'uploads/admin/1/2021/01/1610216367.webp', '2021-01-09 16:19:27', '2021-01-09 16:19:27'),
(64, 90, 'preview', 'uploads/admin/1/2021/01/1610217138.webp', '2021-01-09 16:32:18', '2021-01-09 16:32:18'),
(65, 9, 'credentials', '{\"public_key\":\"\",\"secret_key\":\"\",\"currency\":\"GHS\"}', '2020-12-29 05:50:18', '2020-12-29 05:50:18'),
(66, 9, 'preview', 'uploads/paystack.png', '2020-12-12 12:49:39', '2020-12-12 12:49:39'),
(67, 9, 'description', 'description', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(68, 91, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(69, 92, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(70, 91, 'preview', 'uploads/1/2021/01/1610212859.svg', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(71, 92, 'preview', 'uploads/1/2021/01/1610212858.svg', '2021-01-09 15:20:57', '2021-01-09 15:20:57'),
(72, 93, 'preview', 'uploads/1/2020/12/nginx-logo.svg', '2020-12-18 16:03:14', '2020-12-18 16:03:14'),
(73, 94, 'preview', 'uploads/2/21/04/1617922110.png', '2021-04-08 20:48:30', '2021-04-08 20:48:30'),
(74, 97, 'preview', 'uploads/2/21/04/1617926784.png', '2021-04-08 22:06:24', '2021-04-08 22:06:24'),
(75, 101, 'preview', 'uploads/1/2021/04/1618178277.png', '2021-04-11 19:57:57', '2021-04-11 19:57:57'),
(76, 101, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-04-11 19:57:57', '2021-04-11 19:57:57'),
(77, 102, 'excerpt', '{\"ar\":\"مخترعي المنتج\",\"en\":\"Product Inventors\"}', '2021-04-11 20:00:43', '2021-04-11 20:00:43'),
(78, 103, 'preview', 'uploads/1/2021/04/1618178536.png', '2021-04-11 20:02:16', '2021-04-11 20:02:16'),
(79, 104, 'preview', 'uploads/admin/1/2021/04/1618179336.png', '2021-04-11 20:15:36', '2021-04-11 20:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `categoryrelations`
--

CREATE TABLE `categoryrelations` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `relation_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categoryrelations`
--

INSERT INTO `categoryrelations` (`category_id`, `relation_id`) VALUES
(100, 99);

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_domain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `template_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `shop_type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`id`, `domain`, `full_domain`, `status`, `user_id`, `template_id`, `shop_type`, `created_at`, `updated_at`) VALUES
(1, 'andrew.multicommerce.test', 'http://andrew.multicommerce.test', 1, 2, 1, 1, '2021-04-01 16:27:36', '2021-04-07 18:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `getways`
--

CREATE TABLE `getways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `user_id`, `name`, `position`, `data`, `created_at`, `updated_at`) VALUES
(1, 2, 'header', 'header', '[]', '2021-04-09 10:06:05', '2021-04-09 10:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `term_id`, `key`, `value`) VALUES
(59, 34, 'excerpt', '{\"ar\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\"}'),
(60, 34, 'content', '{\"ar\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\"}'),
(61, 35, 'content', '{\"meta_title\":\"{\\\"ar\\\":\\\"\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\",\\\"en\\\":\\\"product\\\"}\",\"meta_description\":\"\",\"meta_keyword\":\"\"}'),
(62, 35, 'seo', '{\"meta_title\":\"{\\\"ar\\\":\\\"\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\",\\\"en\\\":\\\"product\\\"}\",\"meta_description\":\"\",\"meta_keyword\":\"\"}'),
(63, 36, 'content', '{\"content\":null,\"excerpt\":null}'),
(64, 36, 'seo', '{\"meta_title\":\"{\\\"ar\\\":\\\"asd\\\",\\\"en\\\":\\\"\\\\u0633\\\\u0634\\\\u064a\\\"}\",\"meta_description\":\"\",\"meta_keyword\":\"\"}'),
(65, 37, 'content', '{\"ar\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\"}'),
(66, 37, 'excerpt', '{\"ar\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\",\"en\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960\"}');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2020_08_18_193029_create_templates_table', 1),
(6, '2020_08_18_193030_create_domains_table', 1),
(7, '2020_08_18_193033_create_categories_table', 1),
(8, '2020_08_18_193343_create_terms_table', 1),
(9, '2020_08_18_193358_create_metas_table', 1),
(10, '2020_08_18_194203_create_postcategories_table', 1),
(11, '2020_08_18_201413_create_adminmenus_table', 1),
(12, '2020_08_18_201414_create_menus_table', 1),
(13, '2020_08_18_201436_create_options_table', 1),
(14, '2020_08_18_201617_create_usermetas_table', 1),
(15, '2020_08_25_165636_create_categorymetas_table', 1),
(16, '2020_09_14_162315_create_permission_tables', 1),
(17, '2020_09_20_052737_create_plans_table', 1),
(18, '2020_10_09_122906_create_attributes_table', 1),
(19, '2020_10_09_123652_create_stocks_table', 1),
(20, '2020_10_09_124238_create_media_table', 1),
(21, '2020_10_09_124646_create_postmedia_table', 1),
(22, '2020_10_15_182226_create_files_table', 1),
(23, '2020_10_17_152834_create_categoryrelations_table', 1),
(24, '2020_10_18_053526_create_useroptions_table', 1),
(25, '2020_10_19_180725_create_getways_table', 1),
(26, '2020_10_21_083527_create_categorymedia_table', 1),
(27, '2020_10_27_174958_create_trasections_table', 1),
(28, '2020_10_27_174959_create_orders_table', 1),
(29, '2020_11_05_065943_create_ordermetas_table', 1),
(30, '2020_11_05_072101_create_orderitems_table', 1),
(31, '2020_11_05_074430_create_ordershippings_table', 1),
(32, '2020_11_06_110926_create_jobs_table', 1),
(33, '2020_11_15_175403_create_userplans_table', 1),
(34, '2020_12_13_072447_create_reviews_table', 1),
(35, '2021_02_04_072932_create_prices_table', 1),
(36, '2021_02_04_074632_create_termoptions_table', 1),
(37, '2021_02_17_061654_create_userplanmetas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'langlist', '{\"English\":\"en\",\"Bengali\":\"bn\"}', '2020-12-12 12:49:37', '2020-12-12 12:49:37'),
(2, 'order_prefix', 'AMC', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(3, 'company_info', '{\"name\":\"{\\\"ar\\\":\\\"Dokans ar\\\",\\\"en\\\":\\\"Dokans\\\"}\",\"site_description\":\"{\\\"ar\\\":\\\"ar aeLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s\\\",\\\"en\\\":\\\"ar aeLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been th\\\"}\",\"email1\":\"email@email.com\",\"email2\":\"email2@email.com\",\"phone1\":\"+88012456789\",\"phone2\":\"+88012456789\",\"country\":\"bangladesh\",\"zip_code\":\"1234\",\"state\":\"Chattagram\",\"city\":\"Chattagram\",\"address\":\"Agrabad\",\"facebook\":\"#\",\"twitter\":\"#\",\"linkedin\":\"#\",\"instagram\":\"#\",\"youtube\":\"#\",\"site_color\":\"#42155c\"}', '2020-12-12 12:49:38', '2021-04-20 21:07:48'),
(4, 'currency_info', '{\"currency_name\":\"USD\",\"currency_icon\":\"$\",\"currency_possition\":\"left\"}', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(5, 'cron_info', '{\"send_mail_to_will_expire_within_days\":\"7\",\"send_notification_expired_date\":\"on\",\"auto_assign_to_default\":\"on\",\"auto_approve\":\"on\"}', '2020-12-12 12:49:38', '2020-12-12 12:49:38'),
(6, 'header', '{\"title\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u0628\\\\u062f\\\\u0627 \\\\u0627\\\\u0644\\\\u062a\\\\u062c\\\\u0627\\\\u0631\\\\u0629 \\\\u0645\\\\u0639 \\\\u0627\\\\u0644\\\\u062f\\\\u0643\\\\u062a\\\\u0646\\\",\\\"en\\\":\\\"START SELLING WITH DOKANS\\\"}\",\"highlight_title\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u0628\\\\u062f\\\\u0627 \\\\u0645\\\\u062a\\\\u062c\\\\u0631\\\\u0643 \\\\u0641\\\\u064a 5 \\\\u062f\\\\u0642\\\\u0627\\\\u0626\\\\u0642\\\",\\\"en\\\":\\\"Build Your Store Within 5 Minutes\\\"}\",\"ytb_video\":null,\"description\":\"{\\\"ar\\\":\\\"\\\\u064a\\\\u0645\\\\u0643\\\\u0646\\\\u0643 \\\\u0627\\\\u0633\\\\u062a\\\\u0639\\\\u0645\\\\u0627\\\\u0644 \\\\u062e\\\\u0630\\\\u0627 \\\\u0627\\\\u0644\\\\u062a\\\\u0637\\\\u0628\\\\u064a\\\\u0642 \\\\u064a\\\\u0645\\\\u0643\\\\u0646\\\\u0643 \\\\u0627\\\\u0633\\\\u062a\\\\u0639\\\\u0645\\\\u0627\\\\u0644 \\\\u062e\\\\u0630\\\\u0627 \\\\u0627\\\\u0644\\\\u062a\\\\u0637\\\\u0628\\\\u064a\\\\u0642 \\\\u064a\\\\u0645\\\\u0643\\\\u0646\\\\u0643 \\\\u0627\\\\u0633\\\\u062a\\\\u0639\\\\u0645\\\\u0627\\\\u0644 \\\\u062e\\\\u0630\\\\u0627 \\\\u0627\\\\u0644\\\\u062a\\\\u0637\\\\u0628\\\\u064a\\\\u0642\\\\u064a\\\\u0645\\\\u0643\\\\u0646\\\\u0643 \\\\u0627\\\\u0633\\\\u062a\\\\u0639\\\\u0645\\\\u0627\\\\u0644 \\\\u062e\\\\u0630\\\\u0627 \\\\u0627\\\\u0644\\\\u062a\\\\u0637\\\\u0628\\\\u064a\\\\u0642\\\",\\\"en\\\":\\\"Use one platform to sell products to anyone, anywhere\\\\u2014in person with Point of Sale and online through your website, social media, and online marketplaces.\\\"}\",\"preview\":\"uploads\\/1\\/2021\\/04\\/1618950991.webp\"}', '2020-12-18 15:14:36', '2021-04-20 18:36:31'),
(7, 'faqs', '{\"description\":\"<h2>Site Audit<\\/h2>\\r\\n\\r\\n<p>Site Audit crawls all the pages it finds on your website &ndash; then provides an overall SEO health score, visualises key data in charts, flags all possible SEO issues and provides recommendations on how to fix them.<\\/p>\\r\\n\\r\\n<p>Have a huge website? Not an issue.<\\/p>\\r\\n\\r\\n<p><a href=\\\"https:\\/\\/demos.creative-tim.com\\/impact-design-system\\/front\\/pages\\/about.html\\\">Learn More&nbsp;<\\/a><\\/p>\",\"preview\":\"uploads\\/1\\/2020\\/12\\/1608311802.svg\"}', '2020-12-18 15:16:42', '2020-12-18 15:19:03'),
(8, 'marketing_tool', '{\"ga_measurement_id\":\"UA-180680025-1\",\"analytics_view_id\":\"231381168\",\"google_status\":\"on\",\"fb_pixel\":\"\",\"fb_pixel_status\":\"\"}', '2020-12-25 15:32:48', '2020-12-25 15:32:48'),
(9, 'languages', '{\"en\":\"English\",\"bn\":\"Bangla\",\"ar\":\"Arabic\"}', '2021-01-05 07:51:31', '2021-01-11 15:07:34'),
(10, 'active_languages', '{\"en\":\"English\",\"ar\":\"Arabic\"}', '2021-01-08 13:21:41', '2021-01-11 15:07:52'),
(11, 'about_1', '{\"title\":\"{\\\"ar\\\":\\\"\\\\u062d\\\\u0645\\\\u0644 \\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0643 \\\\u0627\\\\u0644\\\\u0627\\\\u0646\\\",\\\"en\\\":\\\"Upload your product\\\"}\",\"description\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0631\\\\u0631\\\\u0631\\\\u0631\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0631\\\\u0631\\\\u0631\\\\u0631\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0645\\\\u0646\\\\u062a\\\\u062c\\\",\\\"en\\\":\\\"Enter the product along with other complete information such as photos, videos, variations, product descriptions, promotions and so on.\\\"}\",\"btn_link\":\"#priceing\",\"btn_text\":\"{\\\"ar\\\":\\\"\\\\u0644\\\\u0628\\\\u062f\\\\u0627 \\\\u0627\\\\u0644\\\\u0627\\\\u0646\\\",\\\"en\\\":\\\"get stated\\\"}\",\"preview\":\"icofont-cloud-upload\"}', '2021-01-09 16:51:25', '2021-04-20 18:30:03'),
(12, 'about_2', '{\"title\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u0646\\\\u0634\\\\u0627 \\\\u0645\\\\u062a\\\\u062c\\\\u0631\\\\u0643\\\",\\\"en\\\":\\\"Setup your store\\\"}\",\"description\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648 \\\\u0627\\\\u062f\\\\u062e\\\\u0644 \\\\u0627\\\\u0644\\\\u0644\\\\u0648\\\\u062c\\\\u0648\\\",\\\"en\\\":\\\"Insert logo, banner and modify your store theme according to your own brand identity without having to create any code.\\\"}\",\"btn_link\":\"test\",\"btn_text\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u0628\\\\u062f\\\\u0627\\\",\\\"en\\\":\\\"start\\\"}\",\"preview\":\"icofont-shopping-cart\"}', '2021-01-09 16:55:31', '2021-04-20 18:32:05'),
(13, 'about_3', '{\"title\":\"{\\\"ar\\\":\\\"\\\\u0641\\\\u064a \\\\u0643\\\\u0627\\\\u0641\\\\u0629 \\\\u0627\\\\u0644\\\\u062f\\\\u0648\\\\u0644\\\",\\\"en\\\":\\\"The launch continues\\\"}\",\"description\":\"{\\\"ar\\\":\\\"\\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629 \\\\u0628\\\\u0643\\\\u0644 \\\\u0633\\\\u0647\\\\u0648\\\\u0644\\\\u0629\\\",\\\"en\\\":\\\"Easily, your online store goes live and you can validate your business and get market share faster than your other competitors.\\\"}\",\"btn_link\":\"go\",\"btn_text\":\"{\\\"ar\\\":\\\"\\\\u0627\\\\u0646\\\\u0637\\\\u0644\\\\u0642\\\",\\\"en\\\":\\\"go\\\"}\",\"preview\":\"icofont-rocket-alt-2\"}', '2021-01-09 16:56:22', '2021-04-20 18:33:41'),
(14, 'seo', '{\"title\":\"Dokans\",\"description\":\"test\",\"canonical\":\"http://multicommerce.test\",\"tags\":\"test\",\"twitterTitle\":\"@dokans\"}', '2021-01-16 06:30:26', '2021-01-16 06:30:26'),
(15, 'auto_order', 'no', '2021-02-21 16:14:35', '2021-04-20 20:31:57'),
(16, 'ecom_features', '{\"top_image\":\"uploads\\/1\\/2021\\/03\\/1615392340.png\",\"center_image\":\"uploads\\/1\\/2021\\/03\\/1615392340.webp\",\"bottom_image\":\"uploads\\/1\\/2021\\/03\\/1615392340.webp\",\"area_title\":\"{\\\"ar\\\":\\\"ابدا البيزنس الخاص بك\\\",\\\"en\\\":\\\"Market your business\\\"}\",\"description\":\"{\\\"ar\\\":\\\"ابدا البيزنس الخاص بك ابدا البيزنس الخاص بك ابدا البيزنس الخاص بك\\\",\\\"en\\\":\\\"Take the guesswork out of marketing with built-in tools that help you create, execute, and analyze digital marketing campaigns.\\\"}\",\"btn_link\":\"#service\",\"btn_text\":\"{\\\"ar\\\":\\\"خدمات\\\",\\\"en\\\":\\\"Service\\\"}\"}', '2021-02-21 16:14:35', '2021-04-11 19:29:50'),
(17, 'counter_area', '{\"happy_customer\":\"1000\",\"total_reviews\":\"800\",\"total_domain\":\"1200\",\"community_member\":\"2000\"}', '2021-02-21 16:14:35', '2021-02-21 16:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordermetas`
--

CREATE TABLE `ordermetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_type` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 2,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tax` double NOT NULL DEFAULT 0,
  `shipping` double NOT NULL DEFAULT 0,
  `total` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordershippings`
--

CREATE TABLE `ordershippings` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', 'dashboard', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(2, 'plan.create', 'web', 'plan', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(3, 'plan.edit', 'web', 'plan', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(4, 'plan.show', 'web', 'plan', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(5, 'plan.update', 'web', 'plan', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(6, 'plan.delete', 'web', 'plan', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(7, 'plan.list', 'web', 'plan', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(8, 'admin.create', 'web', 'admin', '2021-03-28 12:52:49', '2021-03-28 12:52:49'),
(9, 'admin.edit', 'web', 'admin', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(10, 'admin.update', 'web', 'admin', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(11, 'admin.delete', 'web', 'admin', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(12, 'admin.list', 'web', 'admin', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(13, 'role.create', 'web', 'role', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(14, 'role.edit', 'web', 'role', '2021-03-28 12:52:50', '2021-03-28 12:52:50'),
(15, 'role.update', 'web', 'role', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(16, 'role.delete', 'web', 'role', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(17, 'role.list', 'web', 'role', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(18, 'page.create', 'web', 'Pages', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(19, 'page.edit', 'web', 'Pages', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(20, 'page.delete', 'web', 'Pages', '2021-03-28 12:52:51', '2021-03-28 12:52:51'),
(21, 'page.list', 'web', 'Pages', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(22, 'payment_gateway.config', 'web', 'Payment Gateway', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(23, 'seo', 'web', 'seo', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(24, 'gallery.list', 'web', 'gallery', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(25, 'gallery.create', 'web', 'gallery', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(26, 'order.create', 'web', 'Orders', '2021-03-28 12:52:52', '2021-03-28 12:52:52'),
(27, 'order.edit', 'web', 'Orders', '2021-03-28 12:52:53', '2021-03-28 12:52:53'),
(28, 'order.delete', 'web', 'Orders', '2021-03-28 12:52:53', '2021-03-28 12:52:53'),
(29, 'order.list', 'web', 'Orders', '2021-03-28 12:52:53', '2021-03-28 12:52:53'),
(30, 'order.view', 'web', 'Orders', '2021-03-28 12:52:53', '2021-03-28 12:52:53'),
(31, 'report.view', 'web', 'Report', '2021-03-28 12:52:53', '2021-03-28 12:52:53'),
(32, 'customer.create', 'web', 'Customer', '2021-03-28 12:52:54', '2021-03-28 12:52:54'),
(33, 'customer.list', 'web', 'Customer', '2021-03-28 12:52:54', '2021-03-28 12:52:54'),
(34, 'customer.view', 'web', 'Customer', '2021-03-28 12:52:54', '2021-03-28 12:52:54'),
(35, 'customer.edit', 'web', 'Customer', '2021-03-28 12:52:54', '2021-03-28 12:52:54'),
(36, 'customer.delete', 'web', 'Customer', '2021-03-28 12:52:55', '2021-03-28 12:52:55'),
(37, 'customer.request', 'web', 'Customer', '2021-03-28 12:52:55', '2021-03-28 12:52:55'),
(38, 'customer.expired_subscription', 'web', 'Customer', '2021-03-28 12:52:55', '2021-03-28 12:52:55'),
(39, 'domain.create', 'web', 'Domain', '2021-03-28 12:52:55', '2021-03-28 12:52:55'),
(40, 'domain.edit', 'web', 'Domain', '2021-03-28 12:52:55', '2021-03-28 12:52:55'),
(41, 'domain.list', 'web', 'Domain', '2021-03-28 12:52:56', '2021-03-28 12:52:56'),
(42, 'domain.delete', 'web', 'Domain', '2021-03-28 12:52:56', '2021-03-28 12:52:56'),
(43, 'cron_job.control', 'web', 'Cron jobs', '2021-03-28 12:52:56', '2021-03-28 12:52:56'),
(44, 'menu', 'web', 'menu', '2021-03-28 12:52:56', '2021-03-28 12:52:56'),
(45, 'cron_job', 'web', 'Developer', '2021-03-28 12:52:56', '2021-03-28 12:52:56'),
(46, 'email_template.config', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(47, 'template.upload', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(48, 'template.delete', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(49, 'template.list', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(50, 'environment.settings', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(51, 'payment_gateway.setup', 'web', 'Developer', '2021-03-28 12:52:57', '2021-03-28 12:52:57'),
(52, 'site.settings', 'web', 'Settings', '2021-03-28 12:52:58', '2021-03-28 12:52:58'),
(53, 'marketing.tools', 'web', 'Settings', '2021-03-28 12:52:58', '2021-03-28 12:52:58'),
(54, 'uploaded_files.control', 'web', 'Seller Activity', '2021-03-28 12:52:58', '2021-03-28 12:52:58'),
(55, 'uploaded_files_directory.control', 'web', 'Seller Activity', '2021-03-28 12:52:59', '2021-03-28 12:52:59'),
(56, 'product.control', 'web', 'Seller Activity', '2021-03-28 12:52:59', '2021-03-28 12:52:59'),
(57, 'invoices.control', 'web', 'Seller Activity', '2021-03-28 12:53:00', '2021-03-28 12:53:00'),
(58, 'language_edit', 'web', 'language', '2021-03-28 12:53:00', '2021-03-28 12:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `days` int(11) NOT NULL,
  `product_limit` int(11) NOT NULL,
  `storage` double NOT NULL,
  `customer_limit` int(11) NOT NULL DEFAULT 0,
  `category_limit` int(11) NOT NULL DEFAULT 0,
  `location_limit` int(11) NOT NULL DEFAULT 0,
  `brand_limit` int(11) NOT NULL DEFAULT 0,
  `variation_limit` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `custom_domain` int(11) NOT NULL DEFAULT 0,
  `featured` int(11) NOT NULL DEFAULT 0,
  `is_default` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `description`, `price`, `days`, `product_limit`, `storage`, `customer_limit`, `category_limit`, `location_limit`, `brand_limit`, `variation_limit`, `status`, `custom_domain`, `featured`, `is_default`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"asd\",\"en\":\"asd\"}', '{\"ar\":\"asd\",\"en\":\"asd\"}', 5, 30, 21, 98, 100, 100, 100, 100, 100, 1, 0, 0, 0, '2020-12-12 12:51:30', '2021-04-07 18:16:12'),
(2, '{\"ar\":\"asd\",\"en\":\"asd\"}', '{\"ar\":\"asd\",\"en\":\"asd\"}', 19, 30, 100, 10000, 0, 0, 0, 0, 0, 1, 1, 1, 0, '2020-12-18 15:58:10', '2021-01-16 05:28:07'),
(3, '{\"ar\":\"asd\",\"en\":\"asd\"}', '{\"ar\":\"asd\",\"en\":\"asd\"}', 1999, 365, 99999, 99999, 0, 0, 0, 0, 0, 1, 1, 0, 0, '2021-01-16 05:26:37', '2021-01-16 05:26:37'),
(4, '{\"ar\":\"asdar\",\"en\":\"asden\"}', '{\"ar\":\"desar\",\"en\":\"desen\"}', 21, 7, 2, 2, 2, 2, 3, 2, 0, 1, 1, 1, 1, '2021-04-04 18:46:38', '2021-04-05 20:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `postcategories`
--

CREATE TABLE `postcategories` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postmedia`
--

CREATE TABLE `postmedia` (
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `regular_price` double NOT NULL,
  `special_price` double DEFAULT NULL,
  `price_type` int(11) NOT NULL DEFAULT 1,
  `starting_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `term_id`, `price`, `regular_price`, `special_price`, `price_type`, `starting_date`, `ending_date`) VALUES
(1, 35, 10, 100, 90, 1, '2021-04-05', '2021-04-30'),
(2, 36, 16.59, 21, 21, 0, '2021-04-01', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(2, '{\"ar\":\"test role\",\"en\":\"test role\"}', 'web', '2021-04-18 19:50:51', '2021-04-18 19:50:51'),
(3, '{\"ar\":\"\\u0634\\u0633\\u064a\",\"en\":\"\\u0634\\u0633\\u064a\"}', 'web', '2021-04-19 21:15:41', '2021-04-19 21:15:41'),
(4, '{\"ar\":\"ytut\",\"en\":\"hyuiuy\"}', 'web', '2021-04-19 22:08:54', '2021-04-19 22:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 1),
(8, 2),
(8, 3),
(8, 4),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(15, 1),
(15, 2),
(15, 3),
(15, 4),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(17, 1),
(17, 2),
(17, 3),
(17, 4),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(19, 1),
(19, 2),
(19, 3),
(19, 4),
(20, 1),
(20, 2),
(20, 3),
(20, 4),
(21, 1),
(21, 2),
(21, 3),
(21, 4),
(22, 1),
(22, 2),
(22, 3),
(22, 4),
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(24, 1),
(24, 2),
(24, 3),
(24, 4),
(25, 1),
(25, 2),
(25, 3),
(25, 4),
(26, 1),
(26, 2),
(26, 3),
(26, 4),
(27, 1),
(27, 2),
(27, 3),
(27, 4),
(28, 1),
(28, 2),
(28, 3),
(28, 4),
(29, 1),
(29, 2),
(29, 3),
(29, 4),
(30, 1),
(30, 2),
(30, 3),
(30, 4),
(31, 1),
(31, 2),
(31, 3),
(31, 4),
(32, 1),
(32, 2),
(32, 3),
(32, 4),
(33, 1),
(33, 2),
(33, 3),
(33, 4),
(34, 1),
(34, 2),
(34, 3),
(34, 4),
(35, 1),
(35, 2),
(35, 3),
(35, 4),
(36, 1),
(36, 2),
(36, 3),
(36, 4),
(37, 1),
(37, 2),
(37, 3),
(37, 4),
(38, 1),
(38, 2),
(38, 3),
(38, 4),
(39, 1),
(39, 2),
(39, 3),
(39, 4),
(40, 1),
(40, 2),
(40, 3),
(40, 4),
(41, 1),
(41, 2),
(41, 3),
(41, 4),
(42, 1),
(42, 2),
(42, 3),
(42, 4),
(43, 1),
(43, 2),
(43, 3),
(43, 4),
(44, 1),
(44, 2),
(44, 3),
(44, 4),
(45, 1),
(45, 2),
(45, 3),
(45, 4),
(46, 1),
(46, 2),
(46, 3),
(46, 4),
(47, 1),
(47, 2),
(47, 3),
(47, 4),
(48, 1),
(48, 2),
(48, 3),
(48, 4),
(49, 1),
(49, 2),
(49, 3),
(49, 4),
(50, 1),
(50, 2),
(50, 3),
(50, 4),
(51, 1),
(51, 2),
(51, 3),
(51, 4),
(52, 1),
(52, 2),
(52, 3),
(52, 4),
(53, 1),
(53, 2),
(53, 3),
(53, 4),
(54, 1),
(54, 2),
(54, 3),
(54, 4),
(55, 1),
(55, 2),
(55, 3),
(55, 4),
(56, 1),
(56, 2),
(56, 3),
(56, 4),
(57, 1),
(57, 2),
(57, 3),
(57, 4),
(58, 1),
(58, 2),
(58, 3),
(58, 4);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `stock_manage` int(11) NOT NULL DEFAULT 1,
  `stock_status` int(11) NOT NULL DEFAULT 1,
  `stock_qty` int(11) NOT NULL DEFAULT 1,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `term_id`, `stock_manage`, `stock_status`, `stock_qty`, `sku`) VALUES
(1, 35, 0, 1, 100, NULL),
(2, 36, 1, 1, 21, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asset_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `src_path`, `asset_path`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"Bigbag_ar\",\"en\":\"Bigbag\"}', 'frontend/bigbag', 'frontend/bigbag', '2021-03-28 12:52:47', '2021-03-28 12:52:47'),
(2, '{\"ar\":\"Arafa Cart ar\",\"en\":\"Arafa Cart\"}', 'frontend/arafa-cart', 'frontend/arafa-cart', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(3, '{\"ar\":\"Saka Cart\",\"en\":\"Saka Cart\"}', 'frontend/saka-cart', 'frontend/saka-cart', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(4, '{\"ar\":\"Bazar ar\",\"en\":\"Bazar\"}', 'frontend/bazar', 'frontend/bazar', '2021-03-28 12:52:48', '2021-03-28 12:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `termoptions`
--

CREATE TABLE `termoptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `amount` double DEFAULT NULL,
  `amount_type` int(11) NOT NULL DEFAULT 1,
  `is_required` int(11) NOT NULL DEFAULT 0,
  `select_type` int(11) NOT NULL DEFAULT 0,
  `p_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'product',
  `is_admin` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `slug`, `user_id`, `status`, `featured`, `type`, `is_admin`, `created_at`, `updated_at`) VALUES
(34, '{\"ar\":\"terms and condition\",\"en\":\"terms and condition\"}', '{\"ar\":\"terms and condition\",\"en\":\"terms and condition\"}', 1, 1, 0, 'page', 1, '2021-01-11 08:52:34', '2021-01-11 08:52:34'),
(35, '{\"ar\":\"\\u0645\\u0646\\u062a\\u062c\",\"en\":\"product\"}', '{\"ar\":\"mntg\",\"en\":\"product\"}', 2, 3, 0, 'product', 0, '2021-04-08 19:31:52', '2021-04-08 19:31:52'),
(36, '{\"ar\":\"asd\",\"en\":\"\\u0633\\u0634\\u064a\"}', '{\"ar\":\"asd\",\"en\":\"sshy\"}', 2, 3, 0, 'product', 0, '2021-04-08 20:02:06', '2021-04-08 20:02:06'),
(37, '{\"ar\":\"asd\",\"en\":\"\\u0633\\u0634\\u064a\"}', '{\"ar\":\"asd\",\"en\":\"sshy\"}', 2, 1, 0, 'page', 0, '2021-04-18 23:59:13', '2021-04-19 00:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `trasections`
--

CREATE TABLE `trasections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 3,
  `trasection_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trasections`
--

INSERT INTO `trasections` (`id`, `category_id`, `user_id`, `status`, `trasection_id`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '123132', '2021-04-07 18:14:07', '2021-04-07 18:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `usermetas`
--

CREATE TABLE `usermetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'preview',
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useroptions`
--

CREATE TABLE `useroptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useroptions`
--

INSERT INTO `useroptions` (`id`, `key`, `value`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'seo', '{\"title\":\"\",\"twitterTitle\":\"\",\"canonical\":\"\",\"tags\":\"\",\"description\":\"\"}', 1, '2021-04-19 23:32:50', '2021-04-19 23:32:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `userplanmetas`
--

CREATE TABLE `userplanmetas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_limit` int(11) NOT NULL DEFAULT 0,
  `storage` double DEFAULT NULL,
  `customer_limit` int(11) NOT NULL DEFAULT 0,
  `category_limit` int(11) NOT NULL DEFAULT 0,
  `location_limit` int(11) NOT NULL DEFAULT 0,
  `brand_limit` int(11) NOT NULL DEFAULT 0,
  `variation_limit` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userplanmetas`
--

INSERT INTO `userplanmetas` (`id`, `user_id`, `name`, `product_limit`, `storage`, `customer_limit`, `category_limit`, `location_limit`, `brand_limit`, `variation_limit`) VALUES
(1, 2, 'asd', 21, 98, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `userplans`
--

CREATE TABLE `userplans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `plan_id` bigint(20) UNSIGNED NOT NULL,
  `trasection_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `payment_status` int(11) NOT NULL DEFAULT 2,
  `will_expired` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userplans`
--

INSERT INTO `userplans` (`id`, `order_no`, `amount`, `user_id`, `plan_id`, `trasection_id`, `status`, `payment_status`, `will_expired`, `created_at`, `updated_at`) VALUES
(1, '434344', 4, 2, 1, NULL, 1, 2, '2021-04-30', '2019-09-16 05:50:29', '2019-12-12 20:35:55'),
(2, 'AMC2', 5, 2, 1, 1, 1, 1, '2021-05-06', '2021-04-07 18:14:07', '2021-04-07 18:14:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `shop_type` int(11) NOT NULL DEFAULT 1,
  `domain_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `status`, `shop_type`, `domain_id`, `name`, `email`, `email_verified_at`, `password`, `created_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Admin', 'admin@admin.com', NULL, '$2y$10$MvVRah7ojkq3l/wGuvTjZuqTVPqQ5rdnaGEP6ayXAXMgq2LFNPU.6', NULL, 'gg0xEcpunyIn0cGQtaA0D3CtX9JrkifJe4eKCQmvpQqauxRQup2pJDlRltQu', '2021-03-28 12:52:48', '2021-03-28 12:52:48'),
(2, 3, 1, 1, 1, 'andrew', 'andrew@andrew.com', NULL, '$2y$10$XaOf1mpNbaqQCvS0tDmHvefOe7kclpLh/saEbwJWZ8rh6xa3Cgg.G', NULL, NULL, '2021-04-01 16:27:35', '2021-04-07 18:14:58'),
(3, 1, 1, 1, NULL, 'test', 'ta@as.com', NULL, '$2y$10$JwxkBVb1kpQXcL7ES163hOwfPZyanIjv6XekEVBF9A5o7gKsswGMG', NULL, NULL, '2021-04-17 19:17:35', '2021-04-17 19:17:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_category_id_foreign` (`category_id`),
  ADD KEY `attributes_variation_id_foreign` (`variation_id`),
  ADD KEY `attributes_term_id_foreign` (`term_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `categorymedia`
--
ALTER TABLE `categorymedia`
  ADD KEY `categorymedia_category_id_foreign` (`category_id`),
  ADD KEY `categorymedia_media_id_foreign` (`media_id`);

--
-- Indexes for table `categorymetas`
--
ALTER TABLE `categorymetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorymetas_category_id_foreign` (`category_id`);

--
-- Indexes for table `categoryrelations`
--
ALTER TABLE `categoryrelations`
  ADD KEY `categoryrelations_category_id_foreign` (`category_id`),
  ADD KEY `categoryrelations_relation_id_foreign` (`relation_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `domains_user_id_foreign` (`user_id`),
  ADD KEY `domains_template_id_foreign` (`template_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_term_id_foreign` (`term_id`);

--
-- Indexes for table `getways`
--
ALTER TABLE `getways`
  ADD PRIMARY KEY (`id`),
  ADD KEY `getways_user_id_foreign` (`user_id`),
  ADD KEY `getways_category_id_foreign` (`category_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_user_id_foreign` (`user_id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `metas_term_id_foreign` (`term_id`);

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
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderitems_order_id_foreign` (`order_id`),
  ADD KEY `orderitems_term_id_foreign` (`term_id`);

--
-- Indexes for table `ordermetas`
--
ALTER TABLE `ordermetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordermetas_order_id_foreign` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_category_id_foreign` (`category_id`);

--
-- Indexes for table `ordershippings`
--
ALTER TABLE `ordershippings`
  ADD KEY `ordershippings_order_id_foreign` (`order_id`),
  ADD KEY `ordershippings_location_id_foreign` (`location_id`),
  ADD KEY `ordershippings_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postcategories`
--
ALTER TABLE `postcategories`
  ADD KEY `postcategories_category_id_foreign` (`category_id`),
  ADD KEY `postcategories_term_id_foreign` (`term_id`);

--
-- Indexes for table `postmedia`
--
ALTER TABLE `postmedia`
  ADD KEY `postmedia_term_id_foreign` (`term_id`),
  ADD KEY `postmedia_media_id_foreign` (`media_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_term_id_foreign` (`term_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_term_id_foreign` (`term_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_term_id_foreign` (`term_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termoptions`
--
ALTER TABLE `termoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `termoptions_user_id_foreign` (`user_id`),
  ADD KEY `termoptions_term_id_foreign` (`term_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terms_user_id_foreign` (`user_id`);

--
-- Indexes for table `trasections`
--
ALTER TABLE `trasections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trasections_category_id_foreign` (`category_id`),
  ADD KEY `trasections_user_id_foreign` (`user_id`);

--
-- Indexes for table `usermetas`
--
ALTER TABLE `usermetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usermetas_user_id_foreign` (`user_id`);

--
-- Indexes for table `useroptions`
--
ALTER TABLE `useroptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `useroptions_user_id_foreign` (`user_id`);

--
-- Indexes for table `userplanmetas`
--
ALTER TABLE `userplanmetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userplanmetas_user_id_foreign` (`user_id`);

--
-- Indexes for table `userplans`
--
ALTER TABLE `userplans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userplans_user_id_foreign` (`user_id`),
  ADD KEY `userplans_plan_id_foreign` (`plan_id`),
  ADD KEY `userplans_trasection_id_foreign` (`trasection_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_created_by_foreign` (`created_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmenus`
--
ALTER TABLE `adminmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `categorymetas`
--
ALTER TABLE `categorymetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getways`
--
ALTER TABLE `getways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordermetas`
--
ALTER TABLE `ordermetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `termoptions`
--
ALTER TABLE `termoptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `trasections`
--
ALTER TABLE `trasections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usermetas`
--
ALTER TABLE `usermetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useroptions`
--
ALTER TABLE `useroptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userplanmetas`
--
ALTER TABLE `userplanmetas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userplans`
--
ALTER TABLE `userplans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attributes_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attributes_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categorymedia`
--
ALTER TABLE `categorymedia`
  ADD CONSTRAINT `categorymedia_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categorymedia_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categorymetas`
--
ALTER TABLE `categorymetas`
  ADD CONSTRAINT `categorymetas_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categoryrelations`
--
ALTER TABLE `categoryrelations`
  ADD CONSTRAINT `categoryrelations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categoryrelations_relation_id_foreign` FOREIGN KEY (`relation_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `domains`
--
ALTER TABLE `domains`
  ADD CONSTRAINT `domains_template_id_foreign` FOREIGN KEY (`template_id`) REFERENCES `templates` (`id`),
  ADD CONSTRAINT `domains_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `getways`
--
ALTER TABLE `getways`
  ADD CONSTRAINT `getways_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `getways_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `metas`
--
ALTER TABLE `metas`
  ADD CONSTRAINT `metas_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orderitems_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ordermetas`
--
ALTER TABLE `ordermetas`
  ADD CONSTRAINT `ordermetas_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ordershippings`
--
ALTER TABLE `ordershippings`
  ADD CONSTRAINT `ordershippings_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordershippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordershippings_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `postcategories`
--
ALTER TABLE `postcategories`
  ADD CONSTRAINT `postcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `postcategories_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `postmedia`
--
ALTER TABLE `postmedia`
  ADD CONSTRAINT `postmedia_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `postmedia_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `termoptions`
--
ALTER TABLE `termoptions`
  ADD CONSTRAINT `termoptions_term_id_foreign` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `termoptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `terms`
--
ALTER TABLE `terms`
  ADD CONSTRAINT `terms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trasections`
--
ALTER TABLE `trasections`
  ADD CONSTRAINT `trasections_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `trasections_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `usermetas`
--
ALTER TABLE `usermetas`
  ADD CONSTRAINT `usermetas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `useroptions`
--
ALTER TABLE `useroptions`
  ADD CONSTRAINT `useroptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userplanmetas`
--
ALTER TABLE `userplanmetas`
  ADD CONSTRAINT `userplanmetas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userplans`
--
ALTER TABLE `userplans`
  ADD CONSTRAINT `userplans_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userplans_trasection_id_foreign` FOREIGN KEY (`trasection_id`) REFERENCES `trasections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userplans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
