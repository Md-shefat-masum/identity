-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 10:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `identity`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutmes`
--

CREATE TABLE `aboutmes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'About Me',
  `sub_heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'john doe',
  `occupation` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UI/UX designer',
  `birthdate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '02-09-1995',
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0123456789',
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin@gmail.com',
  `website` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'www.example.com',
  `address` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '12 Segun Bagicha, 10th Floor,Dhaka 1000, Bangladesh.',
  `happy_client` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '150',
  `experience` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '7',
  `award` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '13',
  `project_done` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '520',
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'djfsjdflsdodsfe',
  `section_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutmes`
--

INSERT INTO `aboutmes` (`id`, `heading`, `sub_heading`, `paragraph`, `image`, `name`, `occupation`, `birthdate`, `phone`, `email`, `website`, `address`, `happy_client`, `experience`, `award`, `project_done`, `slug`, `section_status`, `created_at`, `updated_at`) VALUES
(1, 'About Me', 'Be who you are and say what you feel, because those who mind don\'t matter, and those who matter don\'t mind.', '<p>\r\nHello, I\'m a UI/UX Designer & Front End Developer from Dhaka, Bangladesh. I hold a master degree of Web Design from the St. Patrick University.\r\n</p>\r\n\r\n<p>\r\nI currently work at Intel, where I spend most of my time crafting and working on awesome projects. Lorem ipsum dolor sit amet consectetuer Integer eleifend Curabitur id ut. Quisque Aenean ut pede id elit ligula est mollis sapien magna. Urna turpis quis sagittis at ac Sed augue habitant tortor elit. Dolor Quisque et elit aliquam vitae habitant.\r\n</p>', 'aboutme_djfsjdflsdodsfe_1564517453.JPG', 'john doe', 'UI/UX designer', '02-09-1995', '0123456789', 'admin@gmail.com', 'www.example.com', '12 Segun Bagicha, 10th Floor,Dhaka 1000, Bangladesh.', '150', '7', '130', '520', 'djfsjdflsdodsfe', 1, '2019-07-07 22:17:18', '2019-07-30 20:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `subtitle`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'banner__1564127402.jpg', 'Security-researcher', 'i\'m Salaheddine hadjar', 'banner205d2121240699c', '1', NULL, '2019-07-30 20:08:44'),
(3, 'banner__1564127388.jpg', 'Student / Blogger / CoDer', 'Salaheddine hadjar', 'banner205d21279105661', '1', NULL, '2019-07-30 20:09:17'),
(5, 'banner__1562518313.png', 'graphics designer2', 'logo edit', 'banner205d222329adfb3', '0', NULL, '2019-07-26 18:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `file`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/cv/V3WY8ZfONHxvn2tonIDn4CoUx74NonuFOVWN6MsB.pdf', 'sdfdsfvdff', 1, '2019-07-11 04:26:19', '2019-07-22 22:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `clientsays`
--

CREATE TABLE `clientsays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientsays`
--

INSERT INTO `clientsays` (`id`, `comment`, `name`, `occupation`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.', 'shefat', 'mdshefat.com', 'slug205d3627d184928', 1, '2019-07-23 09:17:05', NULL),
(4, 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.', 'shefat', 'mdshefat.com', 'slug205d362a105363c', 1, '2019-07-23 09:26:40', NULL),
(5, 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.', 'timu', 'mdshefat.com', 'slug205d362a184eeb1', 1, '2019-07-23 09:26:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `slug`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(9, 'abouT', 'contact255d3a9f36a530e', 'nahiyan@gmail.com', 'sdaf asdf asdf asdf sad', '1', '2019-07-26 18:35:34', NULL),
(10, 'bmnbnm', 'contact255d3b8e631663b', 'nahiyan@gmail.com', 'jklhklj', '1', '2019-07-27 11:36:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '© Copyright Md shefat 2019. All Rights Reserved.', 'sdfdsfvdff', 1, '2019-07-26 06:00:00', '2019-07-28 21:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `frontlogos`
--

CREATE TABLE `frontlogos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontlogos`
--

INSERT INTO `frontlogos` (`id`, `name`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'front-logo__1564123277.png', 'logo2', 'egcaed', 1, '2019-07-01 06:00:00', '2019-07-26 18:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `frontnavs`
--

CREATE TABLE `frontnavs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `integer` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontnavs`
--

INSERT INTO `frontnavs` (`id`, `name`, `slug`, `nid`, `integer`, `created_at`, `updated_at`) VALUES
(1, 'home update', 'adfewfasdfsd', 'home', 1, NULL, '2019-07-26 18:41:37'),
(2, 'abouT', 'asdfewcxsdfe', 'about', 1, NULL, '2019-07-07 09:18:10'),
(3, 'portfolio', 'asdfewcxvdsf', 'portfolio', 1, NULL, '2019-07-07 09:14:32'),
(4, 'skill', 'ecxsdfsdfsadfe', 'skill', 1, NULL, '2019-07-07 09:14:43'),
(5, 'experience', 'ecxvrgcvdfa', 'experience', 1, NULL, '2019-07-07 09:14:53'),
(6, 'clients', 'esdccxcxrdfa', 'clients', 1, NULL, NULL),
(7, 'process', 'efbxczxdfe', 'process', 1, NULL, NULL),
(8, 'contact', 'ecbzsfedfvdc', 'contact', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languageskills`
--

CREATE TABLE `languageskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdf',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languageskills`
--

INSERT INTO `languageskills` (`id`, `name`, `percentage`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'english', 70, 'lskill205d27438a851a7', 1, '2019-07-11 14:11:22', '2019-07-11 14:14:09'),
(2, 'Hindi', 89, 'lskill205d27440501aaf', 1, '2019-07-11 14:13:25', NULL),
(3, 'french', 15, 'lskill205d27444011867', 1, '2019-07-11 14:14:24', NULL);

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
(3, '2019_07_06_165611_create_contact_messages_table', 1),
(4, '2019_07_07_011621_create_frontlogos_table', 1),
(5, '2019_07_07_022209_create_frontnavs_table', 1),
(6, '2019_07_07_033023_create_banners_table', 1),
(7, '2019_07_07_225507_create_aboutmes_table', 1),
(8, '2019_07_09_135829_create_services_table', 1),
(9, '2019_07_09_212134_create_portfoliocategories_table', 1),
(10, '2019_07_09_233751_create_portfolioimages_table', 1),
(11, '2019_07_11_173353_create_personalskills_table', 1),
(12, '2019_07_11_195507_create_languageskills_table', 1),
(13, '2019_07_11_202538_create_biodatas_table', 1),
(14, '2019_07_22_164935_create_myresumes_table', 1),
(15, '2019_07_22_234103_create_resume_categories_table', 2),
(16, '2019_07_23_025808_create_clientsays_table', 3),
(17, '2019_07_23_033231_create_partners_table', 4),
(18, '2019_07_23_041400_create_processes_table', 5),
(19, '2019_07_23_050646_create_personalinfos_table', 6),
(20, '2019_07_26_235535_create_user_roles_table', 7),
(21, '2019_07_28_142249_create_footers_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `myresumes`
--

CREATE TABLE `myresumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_heading` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_sub_heading` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sasdfdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myresumes`
--

INSERT INTO `myresumes` (`id`, `section_name`, `course_heading`, `course_sub_heading`, `course_details`, `start_date`, `end_date`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'present', 'INFOSYS', 'UI/UX Designer', 'Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', '10-15-19', '20-15-19', 'resume305d35ad2b514b4', 1, '2019-07-23 00:33:47', '2019-07-23 07:31:47'),
(2, 'education', 'CREATIVE AGENCY', 'UI/UX Designer', 'Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', '10-15-19', '20-15-19', 'resume305d35ad4acf700', 1, '2019-07-23 00:34:18', '2019-07-23 07:31:18'),
(3, 'trainning', 'INFOSYS', 'UI/UX Designer', 'Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', '10-15-19', '20-15-19', 'resume305d36094225a52', 1, '2019-07-23 07:06:42', NULL),
(4, 'education', 'INFOSYS', 'UI/UX Designer', 'Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', '10-15-19', '20-15-19', 'resume305d3612815584b', 1, '2019-07-23 07:46:09', NULL),
(5, 'present', 'CREATIVE AGENCY', 'UI/UX Designer', 'Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', '10-15-19', '20-15-19', 'resume305d361292c597f', 1, '2019-07-23 07:46:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`slug`, `status`, `id`, `image`, `created_at`, `updated_at`) VALUES
('slug205d36343d8bc13', 1, 10, 'uploads/partner/ZFP1fTR2H7GVPx9D3qkTI8m1IyYwbSQm6u3zq4yF.png', '2019-07-23 10:10:05', '2019-07-23 10:10:05'),
('slug205d363442c1591', 1, 11, 'uploads/partner/IHOntXTY1kZ53piHvjJChtTCmmyW7JfF2AiIUBWT.png', '2019-07-23 10:10:10', '2019-07-23 10:10:10'),
('slug205d36344965fd7', 1, 12, 'uploads/partner/LLGTqQaDrmHAiSCP2pfUihROxv2B1CWlzPyWf9Bw.png', '2019-07-23 10:10:17', '2019-07-23 10:10:17'),
('slug205d3634510bd2c', 1, 13, 'uploads/partner/8upZlP4B4YqhfxKlRkmIDpLzQXLHEjaAB9FnPavO.png', '2019-07-23 10:10:25', '2019-07-23 10:10:25'),
('slug205d36345852928', 1, 14, 'uploads/partner/8ZynxPbkwp4rYw3oDZ3zpnPG0rchC9CUM2phNKFE.png', '2019-07-23 10:10:32', '2019-07-23 10:10:32'),
('slug205d363471bde86', 1, 16, 'uploads/partner/eW11SORbXpdvQiRMHUVVtpiyCp31WtUuoWvY0wm0.png', '2019-07-23 10:10:57', '2019-07-23 10:10:57');

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
-- Table structure for table `personalinfos`
--

CREATE TABLE `personalinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personalinfos`
--

INSERT INTO `personalinfos` (`id`, `icon`, `link`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-github-alt', 'your link', 'slug205d36481fe476f', 1, '2019-07-23 11:34:55', '2019-07-26 19:54:10'),
(3, 'fa fa-twitter', 'twitter.com', 'slug205d364a7204c5f', 1, '2019-07-23 11:44:50', NULL),
(4, 'fa fa-youtube', 'youtube.com', 'slug205d364a7dbeaee', 1, '2019-07-23 11:45:01', '2019-07-23 11:52:33'),
(5, 'fa fa-git', 'github.com', 'slug205d364bd5b3440', 1, '2019-07-23 11:50:45', NULL),
(6, 'fa fa-github', 'github.com', 'slug205d364befa3b40', 1, '2019-07-23 11:51:11', NULL),
(7, 'fa fa-google-plus', 'google.com', 'slug205d364c001a2e9', 1, '2019-07-23 11:51:28', NULL),
(8, 'fa fa-fa fa-twitter', 'adsfasdf', 'slug205d3c873dc776d', 1, '2019-07-28 05:17:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personalskills`
--

CREATE TABLE `personalskills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personalskills`
--

INSERT INTO `personalskills` (`id`, `name`, `percentage`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'graphics design2', 75, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273cefb1268', 1, '2019-07-11 13:43:11', '2019-07-11 13:44:49'),
(3, 'html', 90, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273d1170d78', 1, '2019-07-11 13:43:45', NULL),
(4, 'wordpress', 50, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273ea2533a2', 1, '2019-07-11 13:50:26', NULL),
(5, 'theme development', 76, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273ec7e5954', 1, '2019-07-11 13:51:03', NULL),
(6, 'illustrator', 85, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273f236b302', 1, '2019-07-11 13:52:35', NULL),
(7, 'Wordpress theme development', 96, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'skill205d273f415b7bc', 1, '2019-07-11 13:53:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfoliocategories`
--

CREATE TABLE `portfoliocategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfoliocategories`
--

INSERT INTO `portfoliocategories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'design', 'category205d24be36c008e', 1, '2019-07-09 16:17:58', '2019-07-09 16:52:46'),
(2, 'photography', 'category205d24bed798228', 1, '2019-07-09 16:20:39', NULL),
(5, 'mobile', 'category205d24bf0b9b404', 1, '2019-07-09 16:21:31', NULL),
(6, 'web', 'category205d24c3cd43341', 1, '2019-07-09 16:41:49', NULL),
(7, 'video', 'category205d24c3db4590f', 1, '2019-07-09 16:42:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolioimages`
--

CREATE TABLE `portfolioimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolioimages`
--

INSERT INTO `portfolioimages` (`id`, `image`, `description`, `category`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(9, 'portimage__1562699078.jpg', 'test image of portfolio', 'web ', 'portImage205d24e5469c1dc', 1, '2019-07-09 19:04:38', '2019-07-09 19:04:38'),
(10, 'portimage__1564131298.jpg', 'this is description', 'design  mobile  photography ', 'portImage205d3abfe20d4bb', 1, '2019-07-26 20:54:58', '2019-07-26 20:54:58'),
(11, 'portimage__1564131615.jpg', 'this is description', 'web', 'portImage205d3ac11fe88a4', 1, '2019-07-26 21:00:15', '2019-07-26 21:00:15'),
(12, 'portimage__1564131631.jpg', 'this is description', 'video', 'portImage205d3ac12f2035f', 1, '2019-07-26 21:00:31', '2019-07-26 21:00:31'),
(13, 'portimage__1564131698.jpg', 'this is description', 'photography', 'portImage205d3ac172071a1', 1, '2019-07-26 21:01:38', '2019-07-26 21:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `slug`, `status`, `name`, `description`, `icon`, `serial`, `created_at`, `updated_at`) VALUES
(1, 'slug205d36391ad7127', 1, 'discuss', 'dsfefsda sdfe ', 'fa fa-pencil', '1', '2019-07-23 10:30:50', '2019-07-23 10:46:30'),
(3, 'slug205d363e13b7c80', 1, 'taking proper documentation', 'sdfe df cgr rgra', 'fa fa-rocket', '2', '2019-07-23 10:52:03', '2019-07-23 10:59:44'),
(4, 'slug205d363f82a0c2f', 1, 'Idea', 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet', 'fa fa-lightbulb-o', '3', '2019-07-23 10:58:10', NULL),
(5, 'slug205d363f9fa2803', 1, 'Implementation', 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet', 'fa fa-desktop', '4', '2019-07-23 10:58:39', NULL),
(6, 'slug205d363fc128f92', 1, 'Review', 'Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet', 'fa fa-flash', '5', '2019-07-23 10:59:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resume_categories`
--

CREATE TABLE `resume_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resume_categories`
--

INSERT INTO `resume_categories` (`id`, `name`, `serial`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'education', '2', 'slug205d36049552f09', '2019-07-23 06:46:45', '2019-07-23 06:47:55'),
(4, 'present', '1', 'slug205d36055b54d31', '2019-07-23 06:50:03', NULL),
(5, 'trainning', '3', 'slug205d36066bc9e53', '2019-07-23 06:54:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ti-pencil',
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(3, 'fa fa-smile-o', 'web design', 'Lorem ipsum dolor sit amet Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis nulla.\r\n                                            \r\n                                            \r\n                                            \r\n                                            ', 'dsfesdf', 1, '2019-07-08 22:12:17', '2019-07-09 15:05:59'),
(4, 'fa fa-image', 'graphics design', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis nulla.\r\n                                            \r\n                                            \r\n                                            \r\n                                            ', 'dsfesdsfdf', 1, '2019-07-08 22:12:17', '2019-07-09 15:05:42'),
(5, 'fa fa-facebook', 'test', 'Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis nulla.. Quisque rutrum pellesque imperdiet. Nulla lacinia iacul. ', 'service205d247d3505527', 1, '2019-07-09 11:40:37', '2019-07-09 15:11:01'),
(6, 'fa fa-rocket', 'customization', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis nulla.\r\n', 'service205d2499074da1b', 1, '2019-07-09 13:39:19', '2019-07-09 13:49:50'),
(9, 'fa fa-search', 'SEO', 'Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis nulla.. Quisque rutrum pellesque imperdiet. Nulla lacinia iaculis ', 'service205d24adb5ea4d1', 1, '2019-07-09 15:07:33', '2019-07-09 15:10:02'),
(10, 'fa fa-calendar', 'Content Writing', 'pellesque imperdiet. Nulla lacinia iaculis  pellesque imperdiet. Nulla lacinia iaculis . Quisque rutrum pellesque imperdiet.', 'service205d24adeecc9e3', 1, '2019-07-09 15:08:30', '2019-07-09 15:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_serial` int(11) DEFAULT NULL,
  `slug` varchar(34) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `creator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_serial`, `slug`, `photo`, `status`, `creator`, `updator`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'superadmin@superadmin.com', 1, '123456', 'uploads/users/0jxtPmjGjrjfKdk7pXxHIXXAkGSUpnzSYujz7UMe.jpeg', 1, 'shefat', NULL, NULL, '$2y$10$FTDKRdVPs0eAX2mcDORoUus2r9FtH3vgmYsdARFE2m3YN8KH.Sjp.', 'jDZxZc4IeSNtludUjPA1a0VVQROm3Y1P9RxRylmvSOeshupwAi3oCeTU2513', '2019-07-06 21:39:14', '2019-07-30 20:26:13'),
(3, 'yasir', 'intu@gmail.com', 2, 'slug205d3b85c2416a3', 'uploads/users/XN6C7vDBz6nGisnwJCEfbgKbsOWXyJHLilBJ203E.png', 1, 'shefat', NULL, NULL, '$2y$10$e1jd8VXP5vo7KWalLvS0g.LXiynccoxoeY4piwFy6H2ggS.or5qn6', NULL, '2019-07-27 10:59:14', '2019-07-30 18:25:35'),
(4, 'Salaheddine Hadjar', 'Hadjar@superadmin.com', 1, 'slug205d408b420b8d8', 'uploads/users/ujvJt5vyFIS6HCcUwezxuBGM8XOKVXbqbbf697fJ.jpeg', 1, 'shefat', NULL, NULL, '$2y$10$7HDIuXo9DyhHp5VDveOjau5Rh0Br1NYjioMLEfolih1LBqMTeafHK', NULL, '2019-07-30 18:24:02', '2019-07-30 18:24:02'),
(5, 'masum', 'masum@admin.com', 2, 'slug205d408bf148fe4', 'uploads/users/RYpB9hdSjOr1fJ1bq6kdacvJ2DIlmUISSqGlbjzq.jpeg', 1, 'shefat', NULL, NULL, '$2y$10$2YGrvopuTovw2ZFv1I0fmeJL8kqsyunwyIyvV4Z8k5WZ6jA1voyuG', NULL, '2019-07-30 18:26:57', '2019-07-30 18:26:57'),
(6, 'masum shefat', 'shefat@admin.com', 2, 'slug205d408de70c820', 'uploads/users/1sr1t31PcNXVBIQ1Uty9Pfj1WO3YHlbwLOE7RaDL.jpeg', 1, 'shefat', NULL, NULL, '$2y$10$r2/nJ7PWXdcNYU446.ez1OsDA6pPhjOqFFZYCRkp0teIt5OV7.xYO', NULL, '2019-07-30 18:35:19', '2019-07-30 18:35:19'),
(7, 'admin', 'admin@admin.com', 2, 'slug205d408e49b8db0', 'uploads/users/TsUyDiy3Wfuq4N36AwfILZwcefpeGagaaKJ46gr7.jpeg', 1, 'super admin', NULL, NULL, '$2y$10$f0Njokx4wESrDELBhpSEqeFutfN/BIcvFF27pl6hVTZDY2IYSCt9W', NULL, '2019-07-30 18:36:57', '2019-07-30 18:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_serial` int(11) NOT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sdfdsfvdff',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `role_serial`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'admin ', 2, 'slug205d3b55dc4af8e', 1, '2019-07-27 07:34:52', NULL),
(6, 'user', 3, 'slug205d3b59428a4d1', 1, '2019-07-27 07:49:22', NULL),
(7, 'super admin', 1, 'slug205d3b5d9301613', 1, '2019-07-27 08:07:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutmes`
--
ALTER TABLE `aboutmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientsays`
--
ALTER TABLE `clientsays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontlogos`
--
ALTER TABLE `frontlogos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontnavs`
--
ALTER TABLE `frontnavs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languageskills`
--
ALTER TABLE `languageskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myresumes`
--
ALTER TABLE `myresumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personalinfos`
--
ALTER TABLE `personalinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalskills`
--
ALTER TABLE `personalskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfoliocategories`
--
ALTER TABLE `portfoliocategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_categories`
--
ALTER TABLE `resume_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_serial` (`role_serial`),
  ADD KEY `role_serial_2` (`role_serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutmes`
--
ALTER TABLE `aboutmes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clientsays`
--
ALTER TABLE `clientsays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontlogos`
--
ALTER TABLE `frontlogos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `frontnavs`
--
ALTER TABLE `frontnavs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languageskills`
--
ALTER TABLE `languageskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `myresumes`
--
ALTER TABLE `myresumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personalinfos`
--
ALTER TABLE `personalinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personalskills`
--
ALTER TABLE `personalskills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfoliocategories`
--
ALTER TABLE `portfoliocategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolioimages`
--
ALTER TABLE `portfolioimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resume_categories`
--
ALTER TABLE `resume_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
