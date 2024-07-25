-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 12:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `answerbag`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abc`
--

INSERT INTO `abc` (`id`, `name`) VALUES
(1, 'subho'),
(2, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `people_id`, `address`, `country`, `state`, `created_at`, `updated_at`) VALUES
(1, '7', '979 Schuppe Springs Suite 707\nFaymouth, MA 46403-4899', 'India', 'Nevada', '2023-04-11 10:30:07', '2023-04-11 10:30:07'),
(2, '3', '8726 Zachariah Point Suite 483\nEast Bernieceside, UT 48995', 'Spain', 'Iowa', '2023-04-11 10:37:38', '2023-04-11 10:37:38'),
(3, '10', '60688 Blick Club\nWest Dorris, VA 74195', 'South Korea', 'Washington', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(4, '5', '5374 Waelchi Circles Apt. 512\nSouth Orvillemouth, KY 52420-4107', 'Singapore', 'Delaware', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(5, '1', '3527 Braulio Cliff\nReganport, GA 56204-5303', 'Oman', 'Oklahoma', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(6, '6', '7345 Van Squares Apt. 529\nSchambergerbury, NV 03061', 'Spain', 'Delaware', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(7, '9', '858 Jennings Overpass Suite 904\nNovellaborough, WI 41086-7031', 'Nigeria', 'Texas', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(8, '8', '37991 Swaniawski Rapid Apt. 581\nEast Mae, DE 06000-9713', 'Australia', 'Alabama', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(9, '2', '45135 Rodriguez Forest\nWest Sigrid, CA 42577', 'Nigeria', 'Hawaii', '2023-04-11 10:39:03', '2023-04-11 10:39:03'),
(10, '4', '8387 Keebler Pike Suite 164\nNehaton, AK 41934-1330', 'South Korea', 'Virginia', '2023-04-11 10:39:03', '2023-04-11 10:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `a_id` int(20) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `is_active` int(1) NOT NULL,
  `last_active` date DEFAULT NULL,
  `is_banned` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `admin_name`, `email`, `password`, `user_id`, `category_id`, `is_active`, `last_active`, `is_banned`) VALUES
(13, 'Subhankar Nath', 'banadipsagar@gmail.com', 'eyJpdiI6IkE2TCtaVklnK0dxVm52ZHo4SVd3S2c9PSIsInZhbHVlIjoicUFnKzdtZ090d1BDclJwekZTSlZzdz09IiwibWFjIjoiN2Y2M2I1NzA1YjMxMzUyYjhmZDJhN2Y0NzE2MTNlODZiYTZhYjQwYjM4Mzk3N2RlZTM0NTAxMTI5Zjk0MzQyYiIsInRhZyI6IiJ9', 1, 4, 1, NULL, 0),
(59, 'Nancy Singh', 'nancynandani241999@gmail.com', 'eyJpdiI6IjZpY0NYWDEvSGtIdHdEaDNwSFAvcXc9PSIsInZhbHVlIjoiQTdhTm01RWE2UVNtQjUySjJWc1dmZz09IiwibWFjIjoiNTQ5ZmUzNjUzZjRhMjBkZTkxNWZkZjUxMzU3ZGQ3M2JlMzI1NGJlZGQ4OTVmYzY4MDdiMzM2OTA3ZDUyMTIxNiIsInRhZyI6IiJ9', 13, 2, 1, '2023-06-24', 0),
(61, 'Mancy Singh', 'nancysi2711@gmail.com', 'eyJpdiI6ImpmL1BXeUdBN3M3YklnT0RYMENwK2c9PSIsInZhbHVlIjoiMU81aUszd1N2U09GWkpGLzRKYk1aUT09IiwibWFjIjoiMWZhNTZmMTYyZjIxZGIzNDc1N2FiZjI2ZGQ4ZTMyNDQxOWRiN2Y5OGNhNjA3MWM2ODI5ZDk5MmQ2M2NmMGNhNCIsInRhZyI6IiJ9', 17, 3, 0, '2023-01-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `records` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`records`)),
  `like` int(11) NOT NULL DEFAULT 0,
  `dislike` int(11) NOT NULL DEFAULT 0,
  `report` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `records`, `like`, `dislike`, `report`, `flag`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'HTML stands for Hypertext Markup Language and is used for \n        creating web pages and web applications. It is still very much needed today\n         as it is the foundation of every website on the internet, and is used with\n          other technologies like CSS and JavaScript to create dynamic and interactive\n           web pages. HTML has evolved over time, with the latest version being HTML5, \n           which includes new features like improved multimedia support and semantic tags.', '{\"3\":\"dislike\"}', 0, 1, 0, 0, '2023-04-14 05:32:04', '2023-04-17 07:19:35'),
(2, 3, 4, '<p>\n<b>HTML (Hypertext Markup Language)</b> is not a programming language, but rather a markup language. It is used to structure content on web pages, such as headings, paragraphs, images, and links, but it does not have the ability to perform calculations or logic like a programming language does.\n<br>\nHowever, HTML can be combined with other programming languages such as JavaScript and PHP to create dynamic and interactive web pages. These languages provide the ability to perform calculations and logic, while HTML provides the structure and presentation of the content.\n</p>', '{\"4\":\"like\"}', 1, 0, 0, 0, '2023-04-14 05:37:06', '2023-04-25 05:50:13'),
(3, 3, 5, '<p>\n<p style=\"color:red;display:inline;\">HTML is not a programming language,</p> but a markup language used to structure and present content on the web. It provides a set of markup tags that define the structure and content of a web page and is interpreted by web browsers. It can be used in conjunction with other technologies like CSS and JavaScript to create more complex web applications.\n</p>', '{\"3\":\"like\"}', 1, 0, 0, 0, '2023-04-14 05:47:30', '2023-04-16 22:14:51'),
(4, 3, 2, '<p>\nNo, HTML is not a programming language, but a markup language used to structure and present content on the web.\n</p>', '{\"3\":\"like\"}', 1, 0, 0, 0, '2023-04-14 05:49:22', '2023-04-23 20:27:37'),
(5, 2, 3, '<p>\nHTML stands for Hypertext Markup Language.<br> It is still very much needed nowadays as it is the foundation of every website on the internet, used in conjunction with other web technologies like CSS and JavaScript to create dynamic and interactive web pages. Although HTML is not considered a programming language, it provides a set of markup tags that define the structure and content of a web page, and can be used to create more complex web applications.\n</p>', '{\"3\":\"dislike\"}', 0, 1, 0, 0, '2023-04-14 05:56:14', '2023-04-24 09:11:54'),
(7, 2, 3, '<p>this is testing comments</p>', '{\"3\":\"dislike\"}', 0, 1, 0, 1, '2023-04-16 21:02:21', '2023-04-16 22:12:38'),
(8, 3, 3, '<p>hello&nbsp;</p>', '{\"2\":\"dislike\",\"4\":\"dislike\"}', 0, 2, 0, 1, '2023-04-16 22:15:04', '2023-05-04 12:33:56'),
(10, 2, 4, '<p><font color=\"#ff0000\"><b><u>HTML</u></b> </font>stands for <font color=\"#ff9c00\">HYPER TEXT MARKUP LANGUGE.</font></p>', '{\"8\":\"like\"}', 1, 0, 0, 2, '2023-04-25 05:48:59', '2023-05-05 10:12:09'),
(11, 16, 4, '<p>this is testing comment after changing the user_name filed.</p>', '[]', 0, 0, 0, 1, '2023-05-04 11:55:23', '2023-05-05 07:50:33'),
(14, 18, 6, '<p>this is tesing answers of my question purpose&nbsp;</p>', '{\"8\":\"dislike\"}', 0, 1, 0, 0, '2023-05-05 07:22:21', '2023-05-05 10:14:00'),
(15, 16, 6, '<p>jbjasdbjkasb</p>', NULL, 0, 0, 0, 0, '2023-05-05 07:52:31', '2023-05-05 07:52:31'),
(16, 9, 6, '<p>chemistry is a subject.</p>', NULL, 0, 0, 0, 0, '2023-05-05 09:40:43', '2023-05-05 09:40:43'),
(17, 21, 8, '<p>this is from user id 8 tesing tesing</p>', NULL, 0, 0, 0, 0, '2023-05-05 10:03:15', '2023-05-05 10:03:15'),
(19, 4, 8, '<p>yes valid</p>', NULL, 0, 0, 0, 0, '2023-05-05 10:07:10', '2023-05-05 10:07:10'),
(20, 22, 8, '<p>this is testing after changing datatype of answers table</p>', NULL, 0, 0, 0, 0, '2023-05-07 04:21:05', '2023-05-07 04:21:05'),
(21, 4, 12, '<p>yes vaild.</p>', NULL, 0, 0, 0, 0, '2023-05-11 03:27:25', '2023-05-11 03:27:25'),
(22, 28, 14, '<p>Hello There</p>', NULL, 0, 0, 0, 1, '2023-05-16 04:05:57', '2023-05-16 04:05:57'),
(23, 9, 14, '<p>hello stand alone ui.. language lab.</p>', NULL, 0, 0, 0, 0, '2023-05-16 04:41:39', '2023-05-16 04:41:39'),
(24, 28, 14, 'nach shubhankar', NULL, 0, 0, 0, 2, '2023-05-16 04:46:04', '2023-05-16 04:46:04'),
(25, 28, 14, '<p>subhankar loves coding</p>', NULL, 0, 0, 0, 0, '2023-05-16 04:46:28', '2023-05-16 04:46:28'),
(26, 28, 14, '<pre>&lt;?php echo \"Hello world !\" </pre>', NULL, 0, 0, 0, 0, '2023-05-16 04:51:21', '2023-05-16 04:51:21'),
(27, 28, 14, '<pre>&lt;script&gt;</pre><p>window.location.href=\"www.google.com\";</p><p>&lt;/script&gt;</p>', NULL, 0, 0, 0, 0, '2023-05-16 04:53:07', '2023-05-16 04:53:07'),
(28, 19, 15, '<p><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px; background-color: rgb(255, 255, 255);\">Velocity is&nbsp;</span><span style=\"background-color: rgba(80, 151, 255, 0.18); color: rgb(4, 12, 40); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px;\">the directional speed of an object in motion as an indication of its rate of change in position as observed from a particular frame of reference and as measured by a particular standard of time</span><span style=\"color: rgb(32, 33, 36); font-family: &quot;Google Sans&quot;, arial, sans-serif; font-size: 20px; background-color: rgb(255, 255, 255);\">&nbsp;(e.g. 60 km/h northbound).</span><br></p>', NULL, 0, 0, 0, 1, '2023-05-18 03:24:33', '2023-05-18 03:24:33'),
(29, 3, 16, '<h1>yes html is a <span style=\"background-color: rgb(255, 255, 0);\">programmin</span>g lang.</h1>', NULL, 0, 0, 0, 1, '2023-05-18 05:07:01', '2023-05-18 05:07:01'),
(30, 34, 13, '<p>report122344</p>', NULL, 0, 0, 0, 0, '2023-05-18 05:17:36', '2023-05-18 05:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

CREATE TABLE `bookmarks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookmarks`
--

INSERT INTO `bookmarks` (`id`, `user_id`, `questions_id`, `created_at`, `updated_at`) VALUES
(2, '5', '4', NULL, NULL),
(3, '3', '1', '2023-04-17 12:02:37', '2023-04-17 12:02:37'),
(5, '2', '11', '2023-04-18 00:59:33', '2023-04-18 00:59:33'),
(7, '3', '2', '2023-04-18 09:49:05', '2023-04-18 09:49:05'),
(8, '3', '3', '2023-04-18 09:49:08', '2023-04-18 09:49:08'),
(11, '3', '5', '2023-04-23 08:46:39', '2023-04-23 08:46:39'),
(16, '4', '5', '2023-05-03 06:54:43', '2023-05-03 06:54:43'),
(18, '6', '3', '2023-05-05 05:34:47', '2023-05-05 05:34:47'),
(20, '6', '18', '2023-05-05 07:21:28', '2023-05-05 07:21:28'),
(21, '6', '4', '2023-05-05 09:15:23', '2023-05-05 09:15:23'),
(22, '8', '21', '2023-05-05 10:02:44', '2023-05-05 10:02:44'),
(25, '12', '22', '2023-05-11 03:35:41', '2023-05-11 03:35:41'),
(26, '12', '14', '2023-05-11 03:37:05', '2023-05-11 03:37:05'),
(28, '8', '13', '2023-05-11 07:46:01', '2023-05-11 07:46:01'),
(30, '13', '9', '2023-05-15 01:54:42', '2023-05-15 01:54:42'),
(31, '14', '4', '2023-05-16 04:06:13', '2023-05-16 04:06:13'),
(33, '13', '31', '2023-06-29 04:03:10', '2023-06-29 04:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `catagorys`
--

CREATE TABLE `catagorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagorys`
--

INSERT INTO `catagorys` (`id`, `catagory_name`, `created_at`, `updated_at`) VALUES
(1, 'science', NULL, NULL),
(2, 'trending', NULL, NULL),
(3, 'sports', NULL, NULL),
(4, 'programming', NULL, NULL),
(6, 'technology', NULL, NULL);

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
-- Table structure for table `followings`
--

CREATE TABLE `followings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `following_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`id`, `user_id`, `following_id`, `created_at`, `updated_at`) VALUES
(1, '3', '5', NULL, NULL),
(15, '1', '5', NULL, NULL),
(19, '2', '3', NULL, NULL),
(21, '3', '2', '2023-04-21 09:48:00', '2023-04-21 09:48:00'),
(26, '1', '3', '2023-04-24 05:17:52', '2023-04-24 05:17:52'),
(28, '2', '1', NULL, NULL),
(33, '4', '3', '2023-05-04 12:33:20', '2023-05-04 12:33:20'),
(36, '3', '6', NULL, NULL),
(37, '6', '3', NULL, NULL),
(41, '8', '3', '2023-05-05 10:00:41', '2023-05-05 10:00:41'),
(42, '12', '8', '2023-05-11 03:23:55', '2023-05-11 03:23:55'),
(44, '12', '4', '2023-05-11 03:35:14', '2023-05-11 03:35:14'),
(45, '12', '2', '2023-05-11 03:35:19', '2023-05-11 03:35:19'),
(49, '14', '1', '2023-05-16 04:09:48', '2023-05-16 04:09:48'),
(50, '15', '8', '2023-05-18 01:33:11', '2023-05-18 01:33:11'),
(51, '15', '13', '2023-05-18 01:33:17', '2023-05-18 01:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `jsontests`
--

CREATE TABLE `jsontests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `like` int(11) NOT NULL DEFAULT 0,
  `dislike` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jsontests`
--

INSERT INTO `jsontests` (`id`, `title`, `data`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 'hi', '{\"2\":\"like\",\"3\":\"like\"}', 2, 0, '2023-04-16 04:23:16', '2023-04-16 05:10:12'),
(2, 'hi', '{\"2\":\"dislike\"}', 0, 1, '2023-04-16 04:25:00', '2023-04-16 05:11:24'),
(3, 'hi', '{\"3\":\"like\"}', 1, 0, '2023-04-16 04:38:42', '2023-04-16 04:39:13'),
(4, 'hi', '{\"2\":\"dislike\"}', 0, 1, '2023-04-16 05:16:58', '2023-04-16 05:17:31'),
(5, 'hi', NULL, 0, 0, '2023-04-16 05:17:18', '2023-04-16 05:17:18');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_11_095018_create_table_catagorys', 1),
(6, '2023_04_11_100021_create_catagorys_table', 2),
(7, '2023_04_11_102411_create_subcatagorys_table', 3),
(8, '2023_04_11_152345_create_people_table', 4),
(9, '2023_04_11_152406_create_addresses_table', 4),
(10, '2023_04_11_175129_create_posts_table', 5),
(11, '2023_04_11_181303_update_description_length_in_posts_table', 6),
(12, '2023_04_13_104357_create_questions_table', 7),
(13, '2023_04_13_143713_create_newusers_table', 8),
(14, '2023_04_14_104604_create_answers_table', 9),
(15, '2023_04_15_064827_create_reports_table', 10),
(19, '2023_04_16_063117_create_jsontests_table', 11),
(20, '2023_04_16_094545_add_like_to_jsontests', 11),
(21, '2023_04_16_095343_add_dislike_to_jsontests', 12),
(23, '2023_04_16_113103_add_records_to_questions', 13),
(24, '2023_04_16_161341_add_flag_to_questions', 14),
(25, '2023_04_17_022745_add_flag_to_answers', 15),
(26, '2023_04_17_023006_add_records_to_answers', 16),
(27, '2023_04_17_110248_create_bookmarks_table', 17),
(28, '2023_04_20_101026_create_followers_table', 18),
(29, '2023_04_20_101044_create_followings_table', 18),
(30, '2023_04_22_112640_create_user_personal_infos_table', 19),
(31, '2023_05_09_121643_create_notifications_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `newusers`
--

CREATE TABLE `newusers` (
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `prev_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newusers`
--

INSERT INTO `newusers` (`u_id`, `user_name`, `email`, `password`, `status`, `prev_id`, `created_at`, `updated_at`) VALUES
(1, 'Subhankar Nath', 'nathsubhankar008@gmail.com', 'eyJpdiI6IkE2TCtaVklnK0dxVm52ZHo4SVd3S2c9PSIsInZhbHVlIjoicUFnKzdtZ090d1BDclJwekZTSlZzdz09IiwibWFjIjoiN2Y2M2I1NzA1YjMxMzUyYjhmZDJhN2Y0NzE2MTNlODZiYTZhYjQwYjM4Mzk3N2RlZTM0NTAxMTI5Zjk0MzQyYiIsInRhZyI6IiJ9', '1', 0, '2023-04-13 09:42:24', '2022-02-13 09:42:24'),
(2, 'Tamal Kundu', 'tamalkundu.tih2023@gmail.com', 'eyJpdiI6IldKeUs5RUVPa1pYMXpIV1RZWGphT1E9PSIsInZhbHVlIjoiL1hrMGlQZXo4aEVBb0xITlo1VWJsQT09IiwibWFjIjoiZTdkYjg5NDdiYzRiODI1OTlmZGQ3ZmNhNDY4ODQwNzJiY2FmNTZkZmMzODgwMzZlMDQyZmUxZjg5ZmNjZTg5YyIsInRhZyI6IiJ9', '1', 0, '2023-04-13 09:43:32', '2023-04-13 09:43:32'),
(3, 'Subham Sarma', 'subham005@gmail.com', 'eyJpdiI6IjBoZEN1ZnNvMzd0UmtFZm5TKzZuQWc9PSIsInZhbHVlIjoiQ0hhRkRvNjQyb0dna1pMeW1Rc1RGUT09IiwibWFjIjoiMDYyMjQxYjZhZTBhMDZlZjkxNTY3ZGQ5YjU4ZTY1ZDE0OWY5Njg4MjVjMDJiN2ZlYTIzODVkNzg5NWZiMmNhZCIsInRhZyI6IiJ9', '1', 0, '2023-04-14 05:51:42', '2023-04-14 05:51:42'),
(4, 'Ranit Nath', 'nathranit.tih2023@gmail.com', 'eyJpdiI6IjFQRW44YjJGOVYzVVBLbTZhNXAxemc9PSIsInZhbHVlIjoiRUxxbVUzWUUwbnJ0R3dvNmhWUUhJZz09IiwibWFjIjoiZDg3ZmNiMzQ1Y2EzNGM0ZDQxMDA0NDdmNWYzMjAwZjk5M2ExNzZmZWJlYzkxZDViYjAzODYwNmY0NTgxYWUxYSIsInRhZyI6IiJ9', '1', 0, '2023-04-14 05:53:03', '2023-04-14 05:53:03'),
(5, 'Nilesh Das', 'dasnilesh2023@gmail.com', 'eyJpdiI6Im9qcFB2VCsrYmxJd2Y1L2xCQnBRekE9PSIsInZhbHVlIjoiQkl4b21BZmh6ZHorbXB3Y0dVZm56dz09IiwibWFjIjoiMGMzNjA2ZWM2NTY4MjVjYTBmYTc1OWQzYjM0NmFiYWY2M2RmMjUwOGI0MTUyMjM2YmFmNWFlODA4YjExMWQ3NSIsInRhZyI6IiJ9', '1', 0, '2023-04-14 05:54:05', '2023-04-14 05:54:05'),
(6, 'whilliam hence', 'william@gmail.com', '1234', '1', 0, NULL, NULL),
(8, 'Shreyanshu Mondol', 'mondol123@gmail.com', 'eyJpdiI6ImNGb1VuV0w0S2dzR1VYUGZPNnFaU3c9PSIsInZhbHVlIjoiL1Nrc2E4SWVrRWh2ODdkM3hYemR1UT09IiwibWFjIjoiZWI1NjgzOTFjZTQyN2FkZjI4NjNkNTVmMWU2MmUyZTVlNjk0NjhkNmE4ODdiMWQ4ZmNhNTg0MThhNzU4NTlkNiIsInRhZyI6IiJ9', '1', 0, '2023-05-05 09:56:14', '2023-05-05 09:56:14'),
(9, 'Testing', 'testing@gmail.com', 'eyJpdiI6IkROVVpDQURxbHFXNXkxZ1NiYzRjaHc9PSIsInZhbHVlIjoiRitQMytpd1BmMUlEdDRodmNZUlBTQT09IiwibWFjIjoiODkyN2NjN2VhZmEwNWJjNWE2MzFmNDNlM2M2Mjg5ZDcwZDUwMzU2MjM5NmRhYmEyZWNhZmU1YzFhNWQ3ZDI0MCIsInRhZyI6IiJ9', '0', 0, '2023-05-09 20:43:19', '2023-05-09 20:43:19'),
(10, 'Testing2', 'testing2@gmail.com', 'eyJpdiI6Im9kU1BXdjdzODByUHZJZHU0YmU0YlE9PSIsInZhbHVlIjoieVJQdzhJRU0zN3V1N2RIbk1NRi9qdz09IiwibWFjIjoiYTE3ZGJmODc3ZDBjNTU1NzgyYTQ2ZjE0NmRmMDlkN2Q1Y2UyNjVkNWNlMWZjYzZhZmM4ZDk0MmI2ODExNTc0YiIsInRhZyI6IiJ9', '0', 0, '2023-05-09 20:46:25', '2023-05-09 20:46:25'),
(11, 'Testing 3', 'testing3@gmail.com', 'eyJpdiI6InVOejBOODMvNjNPNDBrV0tJc0ZORlE9PSIsInZhbHVlIjoiT0Q1RkFhbzI5ZGhhM29Zbm5yWkY2dz09IiwibWFjIjoiNjE5YmJkNjAzMmZkYzhkNWZkM2RkOGRlYzUyZjk1ZDRlNzlmMTMzYmE1Y2ExZTc4ODIzNjk1MzBjNzA1NWI4NSIsInRhZyI6IiJ9', '1', 0, '2023-05-10 09:57:12', '2023-05-10 09:57:12'),
(12, 'Ashdgashd', 'nathsubhankar007@gmail.com', 'eyJpdiI6InYxMEp1TkczQ2NGOVYwa2xQL0t4YXc9PSIsInZhbHVlIjoiaVBXUTIxYkEyQTVLMUJRS2h6cXNlZz09IiwibWFjIjoiN2NjN2Q1MzQ0YmEyOTQ1YWIwNDJlOWY3MzI1OGE3YTEyYjg5NjA1MDIxNmUxM2Y0NjJlNDZmMTRmMjdlZWNlNyIsInRhZyI6IiJ9', '1', 0, '2023-05-10 11:45:52', '2023-05-10 11:45:52'),
(13, 'Nancy Singh', 'nancynandani241999@gmail.com', 'eyJpdiI6IjZpY0NYWDEvSGtIdHdEaDNwSFAvcXc9PSIsInZhbHVlIjoiQTdhTm01RWE2UVNtQjUySjJWc1dmZz09IiwibWFjIjoiNTQ5ZmUzNjUzZjRhMjBkZTkxNWZkZjUxMzU3ZGQ3M2JlMzI1NGJlZGQ4OTVmYzY4MDdiMzM2OTA3ZDUyMTIxNiIsInRhZyI6IiJ9', '0', 2, '2023-05-13 05:28:07', '2023-06-24 12:41:34'),
(14, 'ABC', 'abc@gmail.com', 'eyJpdiI6InhzZWFXZ1J3c3VhYlFmUytUM2lwTXc9PSIsInZhbHVlIjoib0pFR3I4ejhKelNMUG0xdDJsRTZ3dz09IiwibWFjIjoiYzNlZTVhMGY4ZjllN2I0N2IwZmEyNDg0MDIwNDQxYmY5YWMzZGUyNDU4MmQ1N2RmODhlMDQxNWZhZjJlOTlhMyIsInRhZyI6IiJ9', '1', 0, '2023-05-16 04:04:59', '2023-05-16 04:04:59'),
(15, 'Salma Nasreen', 'salma123@gmail.com', 'eyJpdiI6IkZCL2lJMWhQbUdzM2VQK2xkNEVLM3c9PSIsInZhbHVlIjoiMHo4MlExWkJ5VWlxcmxHUWVZbW1uUT09IiwibWFjIjoiYTFhMmI1ZGYxOTFhZjY0N2IyZDA4ZmM1OWJlYzcxMGIzYzc2MmRmZWFkNTgyZTg3NTBlNWI5YmM3Y2Y1ZWFmOSIsInRhZyI6IiJ9', '0', 0, '2023-05-18 01:32:54', '2023-05-18 01:32:54'),
(16, 'Tamal', 'tamal001kundu@gmail.com', 'eyJpdiI6IjhaWnIwdEhUdHJsU2hQbFFycTB2RHc9PSIsInZhbHVlIjoiYWxBbHluRTQ0amFCV2xiTEIzWFdzUT09IiwibWFjIjoiYmE4YzA3YTMzZWEyZDQwZDY0MzgyYTM0MDc3NGY4ZDZiNGE3MmZlMGNkMjA4YTk4YWQ1ZmIyZGFhOGYzY2U5ZiIsInRhZyI6IiJ9', '1', 0, '2023-05-18 05:05:10', '2023-05-18 05:24:50'),
(17, 'Mancy Singh', 'nancysi2711@gmail.com', 'eyJpdiI6ImpmL1BXeUdBN3M3YklnT0RYMENwK2c9PSIsInZhbHVlIjoiMU81aUszd1N2U09GWkpGLzRKYk1aUT09IiwibWFjIjoiMWZhNTZmMTYyZjIxZGIzNDc1N2FiZjI2ZGQ4ZTMyNDQxOWRiN2Y5OGNhNjA3MWM2ODI5ZDk5MmQ2M2NmMGNhNCIsInRhZyI6IiJ9', '0', 3, '2023-06-24 12:18:57', '2023-01-24 12:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `user_id`, `action_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 'Your Question has been Approved.', 8, 21, 'question', '2023-05-09 07:03:50', '2023-05-09 07:03:50'),
(2, 'Your Answer has been Approved.', 8, 20, 'answer', '2023-05-09 07:05:58', '2023-05-09 07:05:58'),
(3, 'Your Report has been Approved.', 8, 8, 'report_reporting_user', '2023-05-11 00:47:08', '2023-05-11 00:47:08'),
(4, 'Your Answer is Deleted.', 8, 8, 'report_target_user', '2023-05-11 01:34:30', '2023-05-11 01:34:30'),
(5, 'Your Question has been Approved', 1, 8, 'question', '2023-05-14 06:19:50', '2023-05-14 06:19:50'),
(6, 'Your Question has been Approved', 1, 4, 'question', '2023-05-14 09:53:42', '2023-05-14 09:53:42'),
(7, 'Your Question has been Approved', 13, 29, 'question', '2023-05-15 02:28:10', '2023-05-15 02:28:10'),
(8, 'Your Report is Approved', 13, 11, 'report_reporting_user', '2023-05-15 02:31:20', '2023-05-15 02:31:20'),
(9, 'Your Answer is Deleted', 8, 11, 'report_target_user', '2023-05-15 02:31:20', '2023-05-15 02:31:20'),
(16, 'Your Report is Approved', 13, 17, 'report_reporting_user', '2023-05-15 02:53:59', '2023-05-15 02:53:59'),
(17, 'Your Answer is Deleted', 8, 17, 'report_target_user', '2023-05-15 02:53:59', '2023-05-15 02:53:59'),
(20, 'Your Report is Approved', 13, 11, 'report_reporting_user', '2023-05-15 04:19:30', '2023-05-15 04:19:30'),
(21, 'Your Answer is Deleted', 8, 11, 'report_target_user', '2023-05-15 04:19:30', '2023-05-15 04:19:30'),
(22, 'Your Report is Approved', 13, 11, 'report_reporting_user', '2023-05-15 04:35:38', '2023-05-15 04:35:38'),
(23, 'Your Answer is Deleted', 8, 11, 'report_target_user', '2023-05-15 04:35:38', '2023-05-15 04:35:38'),
(24, 'Your Report is Approved', 13, 14, 'report_reporting_user', '2023-05-15 04:39:16', '2023-05-15 04:39:16'),
(25, 'Your Answer is Deleted', 3, 14, 'report_target_user', '2023-05-15 04:39:16', '2023-05-15 04:39:16'),
(26, 'Your Report is Approved', 2, 1, 'report_reporting_user', '2023-05-15 10:45:53', '2023-05-15 10:45:53'),
(27, 'Your Answer is Deleted', 2, 1, 'report_target_user', '2023-05-15 10:45:53', '2023-05-15 10:45:53'),
(28, 'Your Report is Approved', 2, 3, 'report_reporting_user', '2023-05-15 10:46:03', '2023-05-15 10:46:03'),
(29, 'Your Answer is Deleted', 2, 3, 'report_target_user', '2023-05-15 10:46:03', '2023-05-15 10:46:03'),
(30, 'Your Report is Approved', 2, 2, 'report_reporting_user', '2023-05-15 10:47:01', '2023-05-15 10:47:01'),
(31, 'Your Answer is Deleted', 2, 2, 'report_target_user', '2023-05-15 10:47:01', '2023-05-15 10:47:01'),
(32, 'Your Answer has been Approved', 3, 8, 'answer', '2023-05-15 10:54:25', '2023-05-15 10:54:25'),
(33, 'Your Answer has been Rejected', 4, 10, 'answer', '2023-05-15 10:56:24', '2023-05-15 10:56:24'),
(34, 'Your Report is Rejected', 2, 4, 'report_reporting_user', '2023-05-15 11:43:04', '2023-05-15 11:43:04'),
(35, 'Your Question has been Approved', 1, 8, 'question', '2023-05-16 04:13:35', '2023-05-16 04:13:35'),
(36, 'Your Answer has been Approved', 3, 7, 'answer', '2023-05-16 04:14:29', '2023-05-16 04:14:29'),
(37, 'Your Report is Approved', 14, 15, 'report_reporting_user', '2023-05-16 04:16:27', '2023-05-16 04:16:27'),
(38, 'Your Answer is Deleted', 8, 15, 'report_target_user', '2023-05-16 04:16:27', '2023-05-16 04:16:27'),
(39, 'Your Question has been Approved', 14, 31, 'question', '2023-05-16 04:38:01', '2023-05-16 04:38:01'),
(40, 'Your Question has been Approved', 14, 31, 'question', '2023-05-16 04:38:41', '2023-05-16 04:38:41'),
(41, 'Your Answer has been Approved', 3, 8, 'answer', '2023-05-16 04:44:03', '2023-05-16 04:44:03'),
(42, 'Your Answer has been Approved', 14, 25, 'answer', '2023-05-16 04:46:57', '2023-05-16 04:46:57'),
(43, 'Your Report is Approved', 14, 15, 'report_reporting_user', '2023-05-18 02:05:02', '2023-05-18 02:05:02'),
(44, 'Your Answer is Deleted', 8, 15, 'report_target_user', '2023-05-18 02:05:02', '2023-05-18 02:05:02'),
(45, 'Your Report is Rejected', 13, 11, 'report_reporting_user', '2023-05-18 03:07:19', '2023-05-18 03:07:19'),
(46, 'Your Report is Approved', 15, 16, 'report_reporting_user', '2023-05-18 03:13:20', '2023-05-18 03:13:20'),
(47, 'Your Answer is Deleted', 8, 16, 'report_target_user', '2023-05-18 03:13:20', '2023-05-18 03:13:20'),
(48, 'Your Report is Approved', 15, 16, 'report_reporting_user', '2023-05-18 03:16:47', '2023-05-18 03:16:47'),
(49, 'Your Answer is Deleted', 8, 16, 'report_target_user', '2023-05-18 03:16:47', '2023-05-18 03:16:47'),
(50, 'Your Question has been Approved', 15, 19, 'question', '2023-05-18 03:20:18', '2023-05-18 03:20:18'),
(51, 'Your Answer has been Rejected', 14, 24, 'answer', '2023-05-18 03:23:59', '2023-05-18 03:23:59'),
(52, 'Your Answer has been Approved', 15, 28, 'answer', '2023-05-18 03:25:01', '2023-05-18 03:25:01'),
(53, 'Your Question has been Approved', 16, 34, 'question', '2023-05-18 05:12:25', '2023-05-18 05:12:25'),
(54, 'Your Answer has been Approved', 16, 29, 'answer', '2023-05-18 05:13:04', '2023-05-18 05:13:04'),
(55, 'Your Report is Approved', 2, 1, 'report_reporting_user', '2023-05-18 05:13:45', '2023-05-18 05:13:45'),
(56, 'Your Answer is Deleted', 2, 1, 'report_target_user', '2023-05-18 05:13:45', '2023-05-18 05:13:45'),
(57, 'Your Report is Approved', 16, 19, 'report_reporting_user', '2023-05-18 05:14:25', '2023-05-18 05:14:25'),
(58, 'Your Answer is Deleted', 14, 19, 'report_target_user', '2023-05-18 05:14:25', '2023-05-18 05:14:25'),
(59, 'Your Answer has been Approved', 13, 30, 'answer', '2023-05-18 05:18:14', '2023-05-18 05:18:14'),
(60, 'Your Report is Approved', 16, 20, 'report_reporting_user', '2023-05-18 05:19:44', '2023-05-18 05:19:44'),
(61, 'Your Answer is Deleted', 13, 20, 'report_target_user', '2023-05-18 05:19:44', '2023-05-18 05:19:44'),
(62, 'Your Answer has been Approved', 14, 22, 'answer', '2023-05-20 10:22:59', '2023-05-20 10:22:59'),
(63, 'Your Question has been Approved', 17, 35, 'question', '2023-06-24 12:42:48', '2023-06-24 12:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'subhanke nath', 'nathsubhnakar102@gmail.com', '123456', '2023-04-11 10:09:59', '2023-04-11 10:09:59'),
(2, 'Cielo Kuphal', 'akiehn@gmail.com', 'W!^18Y\\I.RW/4@UZ!_-y', '2023-04-11 10:16:41', '2023-04-11 10:16:41'),
(3, 'Miller Douglas', 'raquel32@hotmail.com', 'AZzXmyGeir', '2023-04-11 10:18:19', '2023-04-11 10:18:19'),
(4, 'Lauryn West DVM', 'icrooks@yahoo.com', 'FFIvGEe[SOK|me2LNE', '2023-04-11 10:19:26', '2023-04-11 10:19:26'),
(5, 'Dr. Gideon Pollich DDS', 'treutel.nova@gmail.com', 'B<Zq<K1Y\"', '2023-04-11 10:21:04', '2023-04-11 10:21:04'),
(6, 'Prof. Arnaldo Nicolas', 'mills.chanel@pagac.biz', '4Z?D`w&gry[(+m+c', '2023-04-11 10:21:32', '2023-04-11 10:21:32'),
(7, 'Leopoldo Altenwerth', 'klein.emely@lehner.org', '\\]N%$mcT|\'', '2023-04-11 10:21:32', '2023-04-11 10:21:32'),
(8, 'Lorenza Kozey', 'schinner.blaise@gmail.com', ':>4.c;^8Y.l@?Vu~|i]', '2023-04-11 10:21:32', '2023-04-11 10:21:32'),
(9, 'Octavia Dach', 'barton57@yahoo.com', 'I|vlE@yu', '2023-04-11 10:21:32', '2023-04-11 10:21:32'),
(10, 'Ross Schroeder', 'arturo42@block.com', 'g|P1`y$,P', '2023-04-11 10:21:32', '2023-04-11 10:21:32');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `people_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dislikeNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `people_id`, `title`, `description`, `likeNo`, `dislikeNo`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tempore atque eos enim molestias non eum exercitationem.', 'Maxime possimus at omnis at quis nostrum inventore ut.', '353', '13', '2023-04-11 12:35:47', '2023-04-11 12:35:47'),
(2, '3', 'Dolorem suscipit perferendis eligendi autem dolores iure dolore eius.', 'Deleniti eligendi ut autem aut ut. Quis sunt est hic consequuntur. Aut impedit et debitis. Saepe error beatae animi fugiat similique deleniti eveniet. In cum et deserunt nam id et dolorem.\n\nNatus sint ab quos error saepe rerum accusamus. Quia eveniet deserunt dolor explicabo velit tempore. Officia aut inventore eos ab.\n\nQui aliquid libero voluptas et pariatur et. Fugit velit ea nesciunt est atque provident. Voluptatibus ut itaque beatae quae unde. Molestias officia asperiores sapiente distinctio sunt praesentium.', '250', '25', '2023-04-11 12:44:44', '2023-04-11 12:44:44'),
(3, '3', 'Et iusto numquam repellat quam nisi adipisci.', 'Veritatis et non ea et dolorem voluptatem cupiditate. Et amet est qui. Est quisquam debitis architecto autem est. Officia veniam architecto explicabo.\n\nAsperiores est praesentium nihil est. Iusto commodi nihil consequatur. Animi sint et et quia sit. Aut nulla voluptas voluptatem voluptatem et non tenetur.\n\nEveniet alias dolore dolorem doloribus quasi doloribus rerum. Ea delectus aliquid aut repudiandae deleniti. Non sint ut nam.', '479', '27', '2023-04-11 12:46:05', '2023-04-11 12:46:05'),
(4, '9', 'Occaecati repellat optio quod architecto laudantium et.', 'Rem et aliquam et natus dolorem. Quia ipsum tenetur ut autem ut ut. Error voluptatem labore repellat neque ut exercitationem consequatur id. Ipsam molestias explicabo vitae voluptatem.\n\nNon hic voluptate culpa nisi quibusdam. Minima nulla temporibus sit dolores qui. Placeat et quia voluptate alias corrupti id consequuntur et. Porro quo repudiandae delectus animi explicabo. In minima minima nam aut.\n\nDelectus aut facere maxime dolor voluptatem corporis sunt quo. Soluta quia nostrum architecto nesciunt. Qui cupiditate quos quis magnam sit impedit rem. Tempore autem omnis corporis omnis et sed.', '103', '50', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(5, '9', 'Cum enim earum id.', 'Et suscipit ducimus quia explicabo in nulla et quaerat. Temporibus quaerat sit saepe illo. Temporibus et velit et nulla. Quis architecto aliquam illum aut.\n\nEveniet sequi similique officiis ea distinctio adipisci. Hic quo voluptatem sit aut non unde ea tempore. Sed dignissimos itaque iure est et dolorem et.\n\nEum fuga adipisci eos dolorem dolore rerum. Dolor eligendi libero voluptatibus maiores non non. Non qui minus quis mollitia animi delectus quo.', '5', '8', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(6, '1', 'Dolorum perferendis est sit.', 'Occaecati nihil quia non nihil. Pariatur nam est necessitatibus ratione. Adipisci dolore quae repudiandae id et hic. Est ad recusandae ut voluptates provident sint qui voluptatem.\n\nPlaceat dolorem quae dolores culpa qui. Libero consequuntur doloribus fugiat qui et quaerat et reprehenderit. Quis aperiam quibusdam nesciunt ipsa. Sunt libero ut provident voluptatibus quos odio.\n\nQuasi autem consectetur corporis itaque autem et autem sed. Molestias et alias fugit tempora quo quasi. Fugiat aut vel assumenda nihil iure. Eaque totam harum ipsam ipsa tempora a magnam ducimus.', '12', '38', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(7, '3', 'Est debitis quia sed velit suscipit.', 'Ut fugit autem harum quod. Sit dolorem explicabo omnis voluptatum similique culpa. Quod aut laborum qui modi magnam eos et adipisci. Ut ex accusamus incidunt quod consequatur accusamus molestiae.\n\nSoluta aut eius ab aliquam quia consequatur et ut. Fugit itaque amet modi id praesentium deserunt. Tempora dolorum aut et et incidunt cupiditate fuga. Et earum omnis quae animi est sunt reiciendis aut.\n\nReiciendis eius enim culpa quia est est. Officia animi accusantium voluptas nam. Tenetur officia dolorum ipsam delectus possimus laborum id.', '46', '1', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(8, '7', 'Velit est veniam ducimus totam rerum officiis recusandae.', 'Accusantium sunt velit commodi aut numquam consequuntur. Voluptatem itaque dolores id nostrum totam itaque beatae. Placeat distinctio perspiciatis deleniti voluptate. Sunt aut nihil nulla dolor culpa earum ut perspiciatis.\n\nNihil laboriosam veniam odit ab aliquid libero. Est voluptatem rerum soluta exercitationem quia explicabo. Illum nam aut assumenda consequatur eum voluptas nam.\n\nDeserunt aut odio libero excepturi. Unde unde voluptate voluptatibus rerum et nobis. Voluptates quo suscipit et et pariatur. Occaecati soluta pariatur velit praesentium dolores. Suscipit blanditiis repellat est autem.', '31', '61', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(9, '10', 'Dolor qui aut molestias quia modi voluptatibus possimus aspernatur.', 'Neque ipsum quia est voluptatem magni. Ab neque officiis repellat velit qui. Quidem voluptatem nulla reprehenderit consequuntur debitis aperiam autem.\n\nConsequatur similique aut recusandae alias nostrum. Nulla corporis sed id dolorem consequatur et ut. Aut qui recusandae eaque fuga facilis minima et excepturi. Voluptatem quam dignissimos laudantium eaque dolores.\n\nDoloremque ullam aut natus. Qui pariatur sequi sed recusandae maiores et consequatur. Esse dignissimos et aspernatur ut aspernatur ad itaque. Ipsum rerum est minima impedit nihil maxime.', '109', '28', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(10, '3', 'Sequi aperiam aspernatur officiis fugit et accusamus.', 'Quos nihil qui autem quia inventore. Consequatur quisquam velit ut qui voluptatibus harum aperiam a. Repellendus consectetur neque rem quia inventore distinctio expedita. Maxime ab dolore porro. Commodi voluptas assumenda in molestiae.\n\nVel similique deleniti et autem nihil est aut. Ad dolor reprehenderit quae. Quia perferendis aperiam non vel.\n\nRepellat sint fugit est provident laudantium. Quas tempore ut sed fugit eos. Provident ex necessitatibus vero facilis rem facilis amet.', '70', '40', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(11, '2', 'Sint mollitia asperiores fuga accusamus id.', 'Officiis perferendis assumenda consequatur. Reprehenderit voluptas iure rerum quis est. Est ea qui quis.\n\nAut et dicta qui incidunt et aperiam. Neque ipsum animi error cumque quidem asperiores hic. Sit id labore qui.\n\nIllum eos dolor perferendis eos facilis maiores et. Qui unde omnis et consequatur tempore quisquam. Et facere nulla quia sint neque architecto repellat ut. Tempora facilis omnis ipsa esse nam possimus.', '90', '38', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(12, '7', 'Harum quaerat ut dolor neque corporis voluptatibus.', 'Velit et earum quod ut alias quos. Voluptatem ut consequatur dignissimos ab.\n\nCommodi et qui quaerat inventore perferendis ratione. Aut dolorem natus ad adipisci. Suscipit ut nisi deserunt accusantium dolorem et.\n\nUnde ex nam ad laborum. Cumque quia unde numquam aperiam dolorem ea eos. Possimus est sint at recusandae pariatur provident. Aut eius asperiores beatae fugiat earum rerum magni.', '49', '7', '2023-04-11 12:46:06', '2023-04-11 12:46:06'),
(13, '5', 'Accusamus rerum aliquid dolores consectetur iste.', 'Sunt explicabo ad non amet. Ut molestiae suscipit velit non enim aliquam id possimus. Voluptas voluptatem libero illum veritatis dolor aut inventore sed.\n\nEst eum voluptatem asperiores dignissimos sed. Fugit aut similique omnis voluptas recusandae maiores. Ab temporibus ut provident. Ut autem sed neque itaque accusantium.\n\nNam molestiae omnis quod non repellendus libero sed. Est at dolor ea suscipit facere mollitia. Facilis aut odio est quos quia ducimus neque. Mollitia enim sapiente doloremque excepturi saepe enim enim corporis.', '48', '57', '2023-04-11 12:46:06', '2023-04-11 12:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_id` int(255) NOT NULL,
  `subcatagory_id` int(255) NOT NULL,
  `records` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`records`)),
  `like` int(11) NOT NULL DEFAULT 0,
  `dislike` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `user_id`, `question`, `catagory_id`, `subcatagory_id`, `records`, `like`, `dislike`, `flag`, `created_at`, `updated_at`) VALUES
(1, 1, '<h2><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#ff0000\"><b><u>this is css tutorial</u></b></font></span></h2><h2><span style=\"background-color: rgb(255, 255, 255);\"><div style=\"text-align: right;\"><img src=\"http://127.0.0.1:8000/images/1681383540_919826.png\" style=\"width: 50%; float: left;\" class=\"note-float-left\"><font color=\"#ff0000\"><b><u><br></u></b></font></div></span></h2>', 4, 2, '{\"2\":\"dislike\",\"3\":\"like\",\"4\":\"like\"}', 2, 1, 0, '2023-04-13 05:41:07', '2023-05-04 12:29:36'),
(2, 1, '<h4>What is the full from of <b><font color=\"#ff0000\">HTML</font></b>? is Html needed nowadays ?</h4>', 4, 2, '{\"3\":\"dislike\"}', 0, 1, 0, '2023-04-13 05:58:32', '2023-05-05 06:28:26'),
(3, 1, '<h4><b>Is <font color=\"#ff0000\">Html</font> a programming language?</b></h4>', 4, 1, '{\"2\":\"dislike\",\"4\":\"like\",\"3\":\"like\",\"6\":\"like\"}', 3, 1, 1, '2023-04-13 06:02:34', '2023-05-05 07:38:36'),
(4, 1, '<p>is css valid</p>', 2, 7, '{\"3\":\"like\",\"4\":\"like\",\"15\":\"like\"}', 3, 0, 1, '2023-04-16 21:24:22', '2023-05-18 01:35:07'),
(5, 2, '<p>this is testing question of css</p>', 2, 7, '{\"3\":\"like\",\"12\":\"like\"}', 2, 0, 0, '2023-04-16 21:35:45', '2023-05-14 06:34:48'),
(8, 1, '<p>this is from html boss</p>', 4, 2, '{\"16\":\"like\"}', 1, 0, 1, '2023-04-16 21:42:49', '2023-05-18 05:05:29'),
(9, 1, '<p>what is chemistry</p>', 2, 7, '{\"3\":\"dislike\",\"13\":\"dislike\"}', 0, 2, 1, '2023-04-17 07:23:04', '2023-05-18 01:25:02'),
(11, 3, '<p>hey i am from biology</p>', 1, 6, '{\"6\":\"dislike\"}', 0, 1, 0, '2023-04-17 10:26:04', '2023-05-05 09:44:11'),
(13, 5, '<p>what is the castling?</p>', 3, 4, '{\"4\":\"dislike\"}', 0, 1, 0, '2023-04-18 21:26:36', '2023-04-25 05:36:15'),
(14, 4, '<p>How to make a chatbot like CHATGPT?</p>', 6, 12, '{\"4\":\"like\",\"8\":\"like\"}', 2, 0, 0, '2023-04-25 05:46:57', '2023-05-11 02:58:17'),
(15, 4, '<p>what is fashion?</p>', 2, 7, '{\"6\":\"dislike\"}', 0, 1, 0, '2023-05-04 10:26:51', '2023-05-05 06:14:19'),
(16, 4, '<p>this is testing fashion question after changing the user_name column</p>', 2, 7, '[]', 0, 0, 0, '2023-05-04 11:40:59', '2023-05-04 11:54:52'),
(17, 6, '<p>this is from fashion after changing q_id</p>', 2, 7, '{\"6\":\"dislike\"}', 0, 1, 0, '2023-05-05 06:16:55', '2023-05-05 07:20:56'),
(18, 6, '<p>this is tesing for <b><font color=\"#ff0000\">my question </font></b>purpose&nbsp;</p>', 2, 8, '{\"6\":\"like\"}', 1, 0, 0, '2023-05-05 07:20:37', '2023-05-05 07:20:59'),
(19, 6, '<p>what is velocity?</p>', 1, 21, '{\"6\":\"like\"}', 1, 0, 1, '2023-05-05 07:42:51', '2023-05-05 07:43:21'),
(20, 6, '<p>this is tesing post after chaging u_id</p>', 2, 7, NULL, 0, 0, 0, '2023-05-05 09:34:54', '2023-05-05 09:34:54'),
(21, 8, '<p>what is the man power? this is testing question after chaging the fields name of u_id</p>', 3, 3, '{\"8\":\"dislike\",\"12\":\"like\",\"13\":\"dislike\"}', 1, 2, 1, '2023-05-05 10:02:02', '2023-05-15 01:53:38'),
(22, 8, '<p>what is chat bot?</p><p><img src=\"http://127.0.0.1:8000/images/1683381799_set-cute-robot-ai-character-show-thumb-up-presentation_99413-153.webp\" style=\"width: 575px;\"><br></p>', 6, 12, NULL, 0, 0, 1, '2023-05-06 08:34:06', '2023-05-06 08:34:06'),
(23, 8, '<p>what is castling and why its a good move?</p>', 3, 4, '{\"8\":\"dislike\"}', 0, 1, 0, '2023-05-07 04:26:08', '2023-05-07 04:27:12'),
(24, 12, '<p>what is cloud computing?</p>', 6, 15, '{\"12\":\"dislike\"}', 0, 1, 0, '2023-05-11 03:25:38', '2023-05-11 03:29:40'),
(25, 8, '<p>what are the new trends?</p>', 2, 7, NULL, 0, 0, 0, '2023-05-11 07:41:47', '2023-05-11 07:41:47'),
(26, 8, '<p>what are the new trends?</p>', 2, 7, NULL, 0, 0, 0, '2023-05-11 07:41:50', '2023-05-11 07:41:50'),
(27, 13, 'who many&nbsp;', 3, 20, NULL, 0, 0, 0, '2023-05-13 05:30:30', '2023-05-13 05:30:30'),
(28, 13, '<h3>what is <font color=\"#ff9c00\">biology</font>?</h3>', 1, 6, '[]', 0, 0, 1, '2023-05-15 01:58:36', '2023-05-16 04:05:25'),
(29, 13, '<h2><span style=\"background-color: rgb(115, 165, 173);\">new&nbsp; trend of this year?</span></h2>', 2, 8, NULL, 0, 0, 1, '2023-05-15 02:27:43', '2023-05-15 02:27:43'),
(30, 13, '<h2>who is sachin tendulkar?</h2>', 3, 20, NULL, 0, 0, 1, '2023-05-15 02:29:27', '2023-05-15 02:29:48'),
(31, 14, '<p><span style=\"background-color: rgb(255, 255, 0);\"><b>What is Laravel</b></span></p>', 4, 17, '[]', 0, 0, 1, '2023-05-16 04:08:20', '2023-05-17 11:17:02'),
(32, 15, '<h3>what is <font color=\"#ff0000\">set-timeout </font>function?</h3>', 3, 4, NULL, 0, 0, 1, '2023-05-18 01:34:39', '2023-05-18 05:12:20'),
(33, 15, '<h4>About human body?</h4>', 1, 6, '{\"13\":\"dislike\"}', 0, 1, 1, '2023-05-18 03:18:10', '2023-06-29 04:02:11'),
(34, 16, '<p>what is js?</p>', 4, 17, NULL, 0, 0, 1, '2023-05-18 05:06:07', '2023-05-18 05:06:07'),
(35, 17, '<p>HOwdy</p>', 2, 7, NULL, 0, 0, 1, '2023-06-24 12:40:39', '2023-06-24 12:40:39'),
(36, 13, '<p>haSKDIWJDWN</p>', 2, 7, NULL, 0, 0, 0, '2023-06-29 04:02:03', '2023-06-29 04:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `r_id` bigint(20) UNSIGNED NOT NULL,
  `reporting_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extracomment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`r_id`, `reporting_user_id`, `answer_id`, `reason`, `extracomment`, `flag`, `created_at`, `updated_at`) VALUES
(1, '2', '4', 'The answer is a duplicate of another answer already provided', 'yes please remove it.', 1, '2023-04-15 02:08:12', '2023-05-18 05:13:45'),
(2, '2', '4', 'The answer violates the website\'s terms of service or community guidelines', NULL, NULL, '2023-04-15 04:46:54', '2023-05-15 10:47:01'),
(3, '2', '1', 'The answer contains inappropriate content', 'yes', NULL, '2023-04-15 08:43:07', '2023-05-15 10:46:03'),
(5, '2', '5', 'The answer is spam or contains advertising', NULL, NULL, '2023-04-15 08:53:43', '2023-04-15 08:53:43'),
(6, '2', '4', 'The answer is spam or contains advertising', 'yes remove it', 0, '2023-04-16 12:23:29', '2023-04-16 12:23:29'),
(7, '2', '3', 'The answer contains inappropriate content', 'please take an action.', 0, '2023-04-25 05:51:15', '2023-04-25 05:51:15'),
(8, '8', '8', 'The answer contains inappropriate content', 'take an action against this user.', 0, '2023-04-25 05:57:45', '2023-04-25 05:57:45'),
(9, '6', '11', 'The answer contains inappropriate content', 'ok after changing the q_id filed', 0, '2023-05-05 07:51:30', '2023-05-05 07:51:30'),
(10, '8', '10', 'The answer is spam or contains advertising', 'testing after changing u_id', 0, '2023-05-05 10:13:18', '2023-05-05 10:13:18'),
(14, '13', '8', 'The answer is spam or contains advertising', 'new tamal 3:37', 0, '2023-05-15 04:38:04', '2023-05-15 04:39:16'),
(15, '14', '19', 'The answer is a duplicate of another answer already provided', 'report', 0, '2023-05-16 04:15:10', '2023-05-18 02:05:02'),
(16, '15', '20', 'The answer contains inappropriate content', 'report1', 1, '2023-05-18 03:11:02', '2023-05-18 03:16:47'),
(17, '15', '20', 'The answer is spam or contains advertising', 'report3', NULL, '2023-05-18 03:17:17', '2023-05-18 03:17:17'),
(18, '15', '20', 'Why did you report this answer?', NULL, NULL, '2023-05-18 03:17:17', '2023-05-18 03:17:17'),
(19, '16', '25', 'The answer contains inappropriate content', 'test report', 1, '2023-05-18 05:10:50', '2023-05-18 05:14:25'),
(20, '16', '30', 'The answer is a duplicate of another answer already provided', 'inappropriate content', 1, '2023-05-18 05:19:22', '2023-05-18 05:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `subcatagorys`
--

CREATE TABLE `subcatagorys` (
  `subcatagorys_id` bigint(20) UNSIGNED NOT NULL,
  `catagorys_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcatagorys`
--

INSERT INTO `subcatagorys` (`subcatagorys_id`, `catagorys_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '4', 'html', NULL, NULL),
(2, '4', 'css', NULL, NULL),
(3, '3', 'football', NULL, NULL),
(4, '3', 'chess', NULL, NULL),
(5, '1', 'chemistry', NULL, NULL),
(6, '1', 'biology', NULL, NULL),
(7, '2', 'fashion', NULL, NULL),
(8, '2', 'media', NULL, NULL),
(9, '2', 'travel', NULL, NULL),
(10, '2', 'economy', NULL, NULL),
(11, '2', 'politics', NULL, NULL),
(12, '6', 'AI & ML', NULL, NULL),
(13, '6', 'robotics', NULL, NULL),
(14, '6', 'wireless', NULL, NULL),
(15, '6', 'cloud', NULL, NULL),
(16, '4', 'php', NULL, NULL),
(17, '4', 'javascript', NULL, NULL),
(18, '4', 'python', NULL, NULL),
(19, '4', 'java', NULL, NULL),
(20, '3', 'cricket', NULL, NULL),
(21, '1', 'physics', NULL, NULL),
(22, '1', 'health', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_personal_infos`
--

CREATE TABLE `user_personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_credential` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`education_credential`)),
  `employment_credential` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`employment_credential`)),
  `location_credential` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`location_credential`)),
  `socialmedia_credential` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`socialmedia_credential`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_personal_infos`
--

INSERT INTO `user_personal_infos` (`id`, `user_id`, `education_credential`, `employment_credential`, `location_credential`, `socialmedia_credential`, `created_at`, `updated_at`) VALUES
(1, '3', '{\"School\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Secondary school\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Collage\":\"Techno India Hooghly\",\"Degree\":\"BCA\",\"Graduation year\":\"2023\"}', '{\"Position\":\"web developer\",\"Company-name\":\"wipro\",\"Experience\":\"2 years\"}', NULL, NULL, '2023-04-22 10:11:47', '2023-04-25 05:00:59'),
(2, '2', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '4', '{\"School\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Secondary school\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Collage\":\"Techno India Hooghly\",\"Degree\":\"BCA\",\"Graduation year\":\"2023\"}', NULL, '{\"Country\":\"India\",\"State\":\"WEST BENGAL\",\"ZIP-CODE\":\"743129new_banadipchange_after_user_name\",\"Address\":\"KANKINARA, BADAMTALA, 24 PGS(N)\"}', NULL, NULL, '2023-05-04 11:49:09'),
(5, '5', NULL, NULL, NULL, NULL, NULL, NULL),
(6, '6', '{\"School\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Secondary school\":null,\"Collage\":null,\"Degree\":null,\"Graduation year\":null}', '{\"Position\":\"web developer\",\"Company-name\":null,\"Experience\":null}', '{\"Country\":\"India\",\"State\":\"WEST BENGAL\",\"ZIP-CODE\":\"743129\",\"Address\":\"KANKINARA, BADAMTALA, 24 PGS(N)\"}', NULL, NULL, '2023-05-05 07:07:49'),
(7, '8', '{\"School\":\"Rathtala Fingapara High School\",\"Secondary school\":null,\"Collage\":null,\"Degree\":null,\"Graduation year\":null}', '{\"Position\":\"web developer\",\"Company-name\":\"wipro\",\"Experience\":null}', '{\"Country\":\"India\",\"State\":\"WEST BENGAL\",\"ZIP-CODE\":null,\"Address\":null}', NULL, '2023-05-05 09:56:14', '2023-05-09 06:44:14'),
(8, '9', NULL, NULL, NULL, NULL, '2023-05-09 20:43:19', '2023-05-09 20:43:19'),
(9, '10', NULL, NULL, NULL, NULL, '2023-05-09 20:46:26', '2023-05-09 20:46:26'),
(10, '11', NULL, NULL, NULL, NULL, '2023-05-10 09:57:12', '2023-05-10 09:57:12'),
(11, '12', '{\"School\":\"Bhatpara Amarkrishna Mahavidhyalaya\",\"Secondary school\":null,\"Collage\":null,\"Degree\":null,\"Graduation year\":null}', '{\"Position\":\"web developer\",\"Company-name\":null,\"Experience\":null}', NULL, NULL, '2023-05-10 11:45:53', '2023-05-11 03:34:14'),
(12, '13', '{\"School\":\"LSHS\",\"Secondary-school\":\"qqq\",\"Collage\":\"TIH\",\"Degree\":\"BCA\",\"Graduation-year\":\"2023\"}', '{\"Position\":\"web\",\"Company-name\":\"wipro, xenon stack\",\"Experience\":\"1\"}', '{\"Country\":\"india\",\"State\":\"WEST BENGAL\",\"ZIP-CODE\":\"711106\",\"Address\":\"SALKIA HOWRAH\"}', NULL, '2023-05-13 05:28:07', '2023-05-15 02:18:10'),
(13, '14', NULL, NULL, NULL, NULL, '2023-05-16 04:04:59', '2023-05-16 04:04:59'),
(14, '15', '{\"School\":null,\"Secondary-school\":null,\"Collage\":\"TIH\",\"Degree\":\"BCA\",\"Graduation-year\":null}', '{\"Position\":null,\"Company-name\":\"wipro\",\"Experience\":\"2\"}', NULL, NULL, '2023-05-18 01:32:54', '2023-05-18 01:33:46'),
(15, '16', '{\"School\":\"asdfg\",\"Secondary-school\":null,\"Collage\":null,\"Degree\":null,\"Graduation-year\":null}', NULL, NULL, NULL, '2023-05-18 05:05:10', '2023-05-18 05:10:07'),
(16, '17', NULL, NULL, NULL, NULL, '2023-06-24 12:18:57', '2023-06-24 12:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarks`
--
ALTER TABLE `bookmarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagorys`
--
ALTER TABLE `catagorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jsontests`
--
ALTER TABLE `jsontests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newusers`
--
ALTER TABLE `newusers`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `newusers_email_unique` (`email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `subcatagorys`
--
ALTER TABLE `subcatagorys`
  ADD PRIMARY KEY (`subcatagorys_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_personal_infos`
--
ALTER TABLE `user_personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bookmarks`
--
ALTER TABLE `bookmarks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `catagorys`
--
ALTER TABLE `catagorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followings`
--
ALTER TABLE `followings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `jsontests`
--
ALTER TABLE `jsontests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newusers`
--
ALTER TABLE `newusers`
  MODIFY `u_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `r_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcatagorys`
--
ALTER TABLE `subcatagorys`
  MODIFY `subcatagorys_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_personal_infos`
--
ALTER TABLE `user_personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
