-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2023 at 05:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indotradex`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgimages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `images`, `bgimages`, `meta_title`, `meta_keywords`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Brief Overview Of IndoTradex', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '155,156,157', '133', 'Brief Overview Of IndoTradex', 'Brief Overview Of IndoTradex', 'Brief Overview Of IndoTradex', NULL, '2023-09-06 00:41:04', '2023-09-06 01:38:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `role`, `deleted_at`, `created_at`, `updated_at`) VALUES
('34b386c5-01bc-456a-872f-6157f9311b38', 'Chase Wolfe', 'kojiqo@mailinator.com', '$2y$10$PYX40mnx.fulI6JK/pYfZO6u4YiQyGMlprl1jBeaVjum7KoCyoYw6', 2, NULL, '2023-09-19 05:48:32', '2023-09-19 05:48:32'),
('d0d10947-27e3-495a-809c-395087b224da', 'Admin', 'admin@example.com', '$2y$10$5zj5xWCS5fySTG5P6mZFuuSyEkozXTZYyrLVLm30Byjfsg54Lm8Na', 1, NULL, '2023-08-30 00:05:34', '2023-09-19 05:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `benefitsof_memberships`
--

CREATE TABLE `benefitsof_memberships` (
  `id` bigint UNSIGNED NOT NULL,
  `silver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gold` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diamond` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `benefitsof_memberships`
--

INSERT INTO `benefitsof_memberships` (`id`, `silver`, `gold`, `diamond`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'NO', 'View More Project Details', 'View More Project Details', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(2, 'Priority', 'Priority', 'Priority', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(3, 'Can Download Selected PDF Resources', 'Can Download All', 'Can Download All', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(4, 'Consult on Call – 1/ Month', 'Consult on Call – 2/ Month', 'Consult on Call – 3/ Month', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(5, 'Meeting for Guidance – 1/Year', '2/Year', '3/Year', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(6, 'Visit Support – 1 place/Year', '2 Places/ Year', '3 Places/ Year', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(7, 'Discounted Boarding & Lodging', 'YES', 'YES', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(8, 'Other Fee Discounts and Supports', 'YES', 'YES', 1, NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` int NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `name`, `slug`, `short_desc`, `description`, `image`, `created_by`, `order`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Establishment', 'establishment', 'Iste possimus porro', 'Lorem ipsum dolor sit amet consectetur adipiscing elit interdum montes, sed inceptos habitant iaculis mattis curae tempus ante, hac mollis gravida tempor congue velit neque lectus. Metus curabitur sodales justo porttitor luctus himenaeos eu, cum massa nam cursus imperdiet hac, vulputate quisque sollicitudin eros integer purus. Montes ullamcorper venenatis leo dapibus arcu duis risus rhoncus, scelerisque vulputate condimentum penatibus quisque nec. Curabitur inceptos venenatis magna enim sed nunc penatibus iaculis tincidunt, sodales proin neque pulvinar curae torquent nostra viverra, quisque porta felis gravida mattis vestibulum netus ante. Quisque tempor risus laoreet dis egestas mus hac, quis praesent auctor id leo blandit vitae convallis, ac tellus tristique vestibulum primis pulvinar. Aliquam eleifend dis mus sapien non blandit magnis hac integer a auctor, laoreet sollicitudin porta quis dictum ultricies mi at vulputate odio sed, ac molestie mattis viverra sociosqu per curabitur mauris ridiculus maecenas.', 118, 'd0d10947-27e3-495a-809c-395087b224da', 4, 1, NULL, '2023-09-05 06:30:19', '2023-09-08 02:11:00'),
(2, 'Investment', 'investment', 'We assist you in growing', 'Lorem ipsum dolor sit amet consectetur adipiscing elit ac consequat neque ante pellentesque, purus in himenaeos quam curae dignissim fusce cum magna dapibus dictum. Parturient ad commodo nisl mus erat non fringilla dis, ultrices consequat blandit iaculis lacinia nibh tempus laoreet porta, arcu per viverra potenti sollicitudin neque a. Curae ultricies enim magnis lacinia congue, dignissim scelerisque malesuada eros, facilisi torquent cursus taciti. Ad quam risus venenatis nisi luctus porttitor parturient odio, mattis montes malesuada placerat diam dignissim gravida a maecenas, felis quis massa egestas conubia curabitur sodales. Mollis mauris pellentesque sem lacus velit aenean litora nisl integer donec justo feugiat libero rhoncus, sociosqu faucibus placerat sagittis potenti diam primis etiam non metus pharetra massa. Purus nullam massa luctus nisl magnis nam habitasse, hac inceptos potenti nulla cras varius elementum donec, dictum pulvinar lobortis porttitor id in. Egestas litora integer pulvinar aliquet euismod donec facilisi, gravida auctor taciti dapibus pellentesque aliquam, sollicitudin eleifend pharetra magna platea fames.', 119, 'd0d10947-27e3-495a-809c-395087b224da', 5, 1, NULL, '2023-09-05 06:30:57', '2023-09-08 02:11:56'),
(3, 'Procurement & Sourcing', 'procurement-sourcing', 'We assist you in growing your', 'Lorem ipsum dolor sit amet consectetur adipiscing elit purus venenatis, suscipit lectus lacus lacinia non morbi tempor interdum vulputate erat, nisi curabitur maecenas aenean massa duis nullam bibendum. Per urna interdum penatibus iaculis facilisi mauris consequat risus, volutpat magna faucibus condimentum vulputate aptent cras potenti, quisque integer suspendisse vel quam elementum laoreet. Lectus pharetra nisi nisl class lobortis aliquet sodales, et volutpat ligula luctus suspendisse sociosqu laoreet nunc, posuere sem quis inceptos eleifend sollicitudin. Commodo nam nostra class primis pulvinar velit tincidunt ante torquent parturient, pharetra nullam luctus penatibus feugiat a viverra montes euismod, morbi facilisis libero suscipit fermentum nibh cubilia aliquet sollicitudin. Habitasse porttitor non erat ut morbi consequat suspendisse, orci et turpis vel maecenas velit, dictum class vestibulum fames arcu habitant. Nostra non gravida cum dis curabitur aptent commodo ultricies, quisque dictumst etiam arcu dictum enim montes, eros nisl lacus tellus augue malesuada morbi. Sollicitudin suspendisse sociosqu leo conubia elementum suscipit auctor at, varius dis tortor rutrum hac netus dui, maecenas dictum vitae eros pretium curabitur diam.', 120, 'd0d10947-27e3-495a-809c-395087b224da', 6, 1, NULL, '2023-09-05 06:31:13', '2023-09-08 02:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_enquiries`
--

CREATE TABLE `bussiness_enquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bussiness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bussiness_enquiries`
--

INSERT INTO `bussiness_enquiries` (`id`, `user_id`, `type_of_support`, `bussiness`, `remarks`, `status`, `admin_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '66187226-815d-4eb8-a4f0-a96c696aad5e', '3', 'Et officiis sint und', 'Vitae reprehenderit', 0, NULL, NULL, '2023-09-15 00:33:23', '2023-09-18 07:02:39'),
(2, '66187226-815d-4eb8-a4f0-a96c696aad5e', '3', 'Anim nisi enim adipi', 'Ullam cillum maxime', 2, NULL, NULL, '2023-09-15 00:33:47', '2023-09-18 06:33:11'),
(3, '66187226-815d-4eb8-a4f0-a96c696aad5e', '2', 'In error lorem offic', 'Sunt impedit odio m', 1, NULL, NULL, '2023-09-15 00:35:09', '2023-09-15 00:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `user_id`, `admin_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 'd0d10947-27e3-495a-809c-395087b224da', 2, '2023-09-16 05:58:55', '2023-09-18 07:25:48'),
(2, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', NULL, 1, '2023-09-16 05:59:03', '2023-09-16 05:59:03'),
(3, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 'd0d10947-27e3-495a-809c-395087b224da', 2, '2023-09-16 05:59:07', '2023-09-18 07:25:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` int DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` int DEFAULT NULL,
  `order` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `short_desc`, `description`, `image`, `created_by`, `banner`, `order`, `status`, `meta_title`, `meta_description`, `meta_keywords`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Trading Products', 'trading', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', NULL, 99, 'd0d10947-27e3-495a-809c-395087b224da', 16, 1, 1, 'Trading', ' ', ' ', NULL, '2023-09-01 02:23:04', '2023-09-12 00:25:08'),
(2, 'Trending Projects', 'trending', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', NULL, 100, 'd0d10947-27e3-495a-809c-395087b224da', 101, 2, 1, 'Trending Projects', ' ', ' ', NULL, '2023-09-05 04:13:14', '2023-09-12 00:25:22'),
(3, 'Business Supports', 'business', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.\r\n\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, 102, 'd0d10947-27e3-495a-809c-395087b224da', 103, 3, 1, 'Business Supports', ' ', ' ', NULL, '2023-09-05 04:14:36', '2023-09-05 04:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_nme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Products` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `org_nme`, `category`, `state`, `e_mail`, `mobile`, `Products`, `product`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Lillith', 'Hays and Nieves Plc', 'indonesia', 'Nostrud totam atque', 'zulivatuga@mailinator.com', 'Error quidem sed vel', 'Products', 'Ratione ipsam omnis', 'Velit ad magni et co', '2023-09-18 00:10:25', '2023-09-18 00:10:25'),
(2, 'Quemby', 'Mcconnell Pollard Traders', 'indonesia', 'Voluptatem accusamus', 'dasiniqeb@mailinator.com', 'Labore commodi et qu', 'Products', 'Possimus dolor moll', 'Debitis quisquam qui', '2023-09-18 00:11:35', '2023-09-18 00:11:35'),
(3, 'Lars', 'Campbell and Burch Plc', 'indonesia', 'Sit voluptate archit', 'balalewu@mailinator.com', 'Labore sit doloribus', 'Products', 'Quia porro enim at s', 'Molestias ea suscipi', '2023-09-18 00:12:22', '2023-09-18 00:12:22'),
(4, 'Olivia', 'Shelton and Cantu Associates', 'indonesia', 'Eligendi deserunt al', 'wuvytyxyj@mailinator.com', 'Facere provident pe', 'Products', 'Corporis quas aliqui', 'Tempor enim impedit', '2023-09-18 00:13:04', '2023-09-18 00:13:04'),
(5, 'Cally', 'Burgess Campos Traders', 'india', 'Suscipit voluptas ex', 'movirimozu@mailinator.com', 'Omnis et neque non f', 'Products', 'Qui nesciunt sed ex', 'Quia ducimus ad mag', '2023-09-18 11:09:51', '2023-09-18 11:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membership_fees`
--

CREATE TABLE `membership_fees` (
  `id` bigint UNSIGNED NOT NULL,
  `plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `USD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IDR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `INR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membership_fees`
--

INSERT INTO `membership_fees` (`id`, `plan`, `USD`, `IDR`, `INR`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SILVER', '100', '1000000', '7500', '1', NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(2, 'GOLD', '200', '3000000', '15000', '1', NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12'),
(3, 'DIAMOND', '300', '4500000', '22500', '1', NULL, '2023-09-12 06:18:12', '2023-09-12 06:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `mettings`
--

CREATE TABLE `mettings` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `via` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1 => panding , 2 => accept , 0 =>cancelled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mettings`
--

INSERT INTO `mettings` (`id`, `user_id`, `via`, `time`, `perpose`, `message`, `admin_id`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 'physical', '1971-09-13T02:07', 'Earum voluptas assum', 'Temporibus officia f', 'd0d10947-27e3-495a-809c-395087b224da', 'https://www.youtube.com/watch?v=HKgA5Ahfies&list=RDU-r9RboQe0I&index=11&ab_channel=ZeeMusicCompany', 2, '2023-09-18 00:43:47', '2023-09-18 10:48:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_08_03_102115_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_03_100504_create_admin_users_table', 1),
(7, '2023_08_04_071129_create_uploads_table', 1),
(8, '2023_08_05_065008_create_trading_categories_table', 1),
(9, '2023_08_05_065605_create_products_table', 1),
(10, '2023_08_24_074821_create_categories_table', 1),
(11, '2023_08_25_113452_create_tranding_categories_table', 1),
(12, '2023_08_25_115029_create_projects_table', 1),
(13, '2023_08_25_122616_create_businesses_table', 1),
(14, '2023_09_05_103936_create_sliders_table', 2),
(15, '2023_09_05_104242_create_abouts_table', 2),
(16, '2023_09_12_111708_create_membership_fees_table', 3),
(17, '2023_09_12_111732_create_benefitsof_memberships_table', 3),
(18, '2023_09_13_045944_create_plans_table', 4),
(19, '2023_09_14_071834_create_products_enquiries_table', 5),
(20, '2023_09_14_104417_create_project_enquiries_table', 6),
(21, '2023_09_15_052243_create_bussiness_enquiries_table', 7),
(22, '2023_09_15_061140_team', 8),
(23, '2023_09_15_071938_create_resources_table', 9),
(24, '2023_09_15_072704_create_calls_table', 9),
(25, '2023_09_15_073613_create_mettings_table', 9),
(26, '2023_09_15_091343_create_visits_table', 9),
(27, '2023_09_16_093414_create_visitors_table', 10),
(28, '2023_09_16_120649_create_contacts_table', 11),
(29, '2023_09_19_063245_create_settings_table', 12),
(30, '2023_09_19_095958_remove_foreign_key_from_users_table', 13);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `type` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `user_id`, `start_date`, `end_date`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ec1d97b4-d261-4a04-9e88-afa45c33b316', '2023-09-13', '2023-12-13', 1, 0, '2023-09-13 03:31:14', '2023-09-13 03:31:14'),
(3, 'aeb9b097-66f1-4b13-b2ac-be7b79b35394', '2023-09-13', '2023-12-13', 1, 1, '2023-09-13 04:27:26', '2023-09-13 04:27:26'),
(4, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', '2023-09-14', '2023-12-14', 1, 1, '2023-09-13 23:52:01', '2023-09-13 23:52:01'),
(5, '66187226-815d-4eb8-a4f0-a96c696aad5e', '2023-09-15', '2023-12-15', 1, 1, '2023-09-14 23:38:07', '2023-09-14 23:38:07'),
(6, 'a33204c3-879e-4644-af7e-89755a8a2084', '2023-09-15', '2023-12-15', 1, 1, '2023-09-15 06:57:27', '2023-09-15 06:57:27'),
(7, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', '2023-09-16', '2023-12-16', 1, 1, '2023-09-15 23:44:34', '2023-09-15 23:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tranding_category_id` int DEFAULT NULL,
  `shot_desc` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `specifications` longtext COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_order` int NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `image`, `icon`, `category_id`, `tranding_category_id`, `shot_desc`, `description`, `specifications`, `status`, `created_by`, `display_order`, `meta_title`, `meta_description`, `meta_keywords`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Cashew Nuts', 'cashew-nuts', '114', '115', '[\"6\",\"12\",\"21\",\"7\",\"15\",\"9\",\"24\"]', NULL, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '{\"Size\":\"Extra Bold\",\"Grade\":\"AGEB\",\"Quality\":\"Appeppey Green Extra Bold\",\"Density g\\/l\":\"435 g\\/l\",\"Size (mm)\":\"> 7.0 mm\"}', 1, 'd0d10947-27e3-495a-809c-395087b224da', 1, 'Cashew Nuts', NULL, NULL, NULL, '2023-09-05 05:58:03', '2023-09-12 00:21:21'),
(11, 'Jason Calderon', 'ipsam-deserunt-amet', '215', '216', '[\"6\",\"12\",\"21\",\"7\",\"14\",\"9\",\"24\",\"10\",\"16\",\"20\",\"22\",\"26\",\"25\"]', NULL, 'Quisquam voluptas cu', 'Fugiat rerum quam re', '{\"Est sequi aliqua I\":\"Nam sed odit accusan\",\"Occaecat est ut est\":\"Excepteur hic adipis\",\"Earum ducimus ab si\":\"In id natus ex sit\",\"Reprehenderit evenie\":\"Consequatur atque si\"}', 1, 'd0d10947-27e3-495a-809c-395087b224da', 79, 'Voluptatem iste corr', 'Quod consequuntur ma', 'Ut reprehenderit nu', NULL, '2023-09-12 00:01:23', '2023-09-12 00:05:43'),
(12, 'Finn Mendez', 'voluptatem-similique', '217', '100', '[\"7\",\"14\",\"15\",\"10\",\"16\",\"20\",\"22\",\"23\",\"26\",\"25\"]', NULL, 'Velit incidunt eius', 'Qui sed quo omnis di', '{\"Ut id aut ut obcaeca\":\"Elit elit aut est\",\"Animi earum magni a\":\"Et non nihil sapient\",\"Hic officia rerum re\":\"Nisi sint voluptatem\"}', 1, 'd0d10947-27e3-495a-809c-395087b224da', 54, 'Suscipit ut ducimus', 'Est voluptatibus nes', 'Quia laboris aliquid', NULL, '2023-09-12 00:22:01', '2023-09-12 00:22:01'),
(13, 'Maxine Campos', 'dolorem-cupidatat-qu', '227', '228', '[\"6\",\"12\",\"27\",\"21\",\"9\",\"24\"]', NULL, 'Magni at et voluptat', 'Minima et esse sit', '{\"Corrupti tempora au\":\"Quaerat ullam aut ea\",\"Fugit eu esse dolo\":\"Voluptatem Est dese\",\"Non architecto deser\":\"Et quae dolores pari\",\"Voluptate non in vel\":\"Amet quis ex dolore\",\"Atque accusamus aspe\":\"Incididunt omnis par\"}', 1, 'd0d10947-27e3-495a-809c-395087b224da', 12, 'Similique et eveniet', 'Tempore aspernatur', 'Ullam velit id null', NULL, '2023-09-13 00:25:11', '2023-09-13 00:25:11');

-- --------------------------------------------------------

--
-- Table structure for table `products_enquiries`
--

CREATE TABLE `products_enquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT ' 1=> Supplier  , 2 =>Buying  , 3 =>Sourcing',
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photograph` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherItems` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forMaking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pieces` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_enquiries`
--

INSERT INTO `products_enquiries` (`id`, `user_id`, `product_id`, `type`, `qty`, `quantity`, `rate`, `Payment`, `delivery`, `quality_pdf`, `photograph`, `otherItems`, `forMaking`, `Pieces`, `remark`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '597', 'Hand Picked', '576', 'Negotiable', '10', '247', '248', NULL, NULL, NULL, 'Laboris magni ipsa', 1, NULL, '2023-09-14 04:12:14', '2023-09-18 05:57:22'),
(2, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '989', 'Below Standard', '416', 'Cash onsite', '45', '249', '250', NULL, NULL, NULL, 'Sit officiis magna d', 2, NULL, '2023-09-14 04:13:25', '2023-09-18 05:34:49'),
(3, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '915', 'Hand Picked', '22', 'Flexible', '20', '251', '252', NULL, NULL, NULL, 'Aute ad do nostrud q', 1, NULL, '2023-09-14 04:16:07', '2023-09-14 04:16:07'),
(4, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '76', 'Hand Picked', '99', 'Cash at Delivery', '45', '253', '254', NULL, NULL, NULL, 'Dolor dolor ipsam qu', 1, NULL, '2023-09-14 04:17:15', '2023-09-14 04:17:15'),
(5, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '96', 'Standard', '303', 'Cash at Delivery', '60', '255', '256', NULL, NULL, NULL, 'Iure cum sit fugiat', 1, NULL, '2023-09-14 04:19:39', '2023-09-14 04:19:39'),
(6, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '96', 'Standard', '303', 'Cash at Delivery', '60', '257', '258', NULL, NULL, NULL, 'Iure cum sit fugiat', 1, NULL, '2023-09-14 04:19:53', '2023-09-14 04:19:53'),
(7, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '404', 'Best', '751', 'Negotiable', '60', '259', '260', NULL, NULL, NULL, 'Alias voluptatibus u', 1, NULL, '2023-09-14 04:20:12', '2023-09-14 04:20:12'),
(8, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 13, '1', '27', 'Hand Picked', '335', 'Negotiable', '25', '261', '262', NULL, NULL, NULL, 'Sed laborum Cum sun', 1, NULL, '2023-09-14 04:20:27', '2023-09-14 04:20:27'),
(9, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 12, '1', '900', 'Best', '986', 'Cash at Delivery', '60', '263', '264', NULL, NULL, NULL, 'Eligendi natus quas', 2, NULL, '2023-09-14 04:22:11', '2023-09-18 05:32:54'),
(10, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 13, '2', '776', 'Avarage', '980', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Voluptatem voluptate', 1, NULL, '2023-09-14 04:28:31', '2023-09-14 04:28:31'),
(11, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 12, '3', '562', 'Best Color', NULL, NULL, NULL, NULL, NULL, 'Silver', 'Other', '880', 'Et facilis in mollit', 1, NULL, '2023-09-14 04:34:19', '2023-09-14 04:34:19'),
(12, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '2', '395', 'Baad', '214', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Officiis irure aut v', 1, NULL, '2023-09-14 04:39:43', '2023-09-14 04:39:43'),
(13, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '1', '826', 'Below Standard', '840', 'Flexible', '30', '265', '266', NULL, NULL, NULL, 'Et ex deserunt facer', 1, NULL, '2023-09-14 04:40:03', '2023-09-14 04:40:03'),
(14, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11, '2', '671', 'Avarage', '188', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Qui aliquip quos eiu', 1, NULL, '2023-09-14 04:41:06', '2023-09-14 04:41:06'),
(15, '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 2, '2', '759', 'Avarage', '783', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Eos earum aperiam la', 0, NULL, '2023-09-14 04:46:56', '2023-09-18 05:32:47'),
(19, 'a33204c3-879e-4644-af7e-89755a8a2084', 12, '1', '675', 'Standard', '324', 'Cash at Delivery', '20', '284', '285', NULL, NULL, NULL, 'Cum maxime facere mi', 2, NULL, '2023-09-15 06:59:57', '2023-09-18 05:32:39'),
(21, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 13, '1', '524', 'Hand Picked', '813', 'Flexible', '45', '292', '293', NULL, NULL, NULL, 'Dolorem eum accusant', 2, 'd0d10947-27e3-495a-809c-395087b224da', '2023-09-18 09:40:25', '2023-09-18 09:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` int NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resouces_about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resouces_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL,
  `status` int DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `slug`, `image`, `short_description`, `description`, `category_id`, `created_by`, `features`, `parameters`, `resouces_about`, `resouces_images`, `download_pdf`, `order`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Aidan Mcdonald', 'aliquam-facilis-omni', 19, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '20', 0, NULL, NULL, NULL, NULL, '2023-09-05 01:16:51', '2023-09-05 00:13:59', '2023-09-05 01:16:51'),
(2, 'Karyn Fuller', 'quisquam-voluptatum', 21, NULL, 'Dolorem cupiditate l', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Illo omnis ipsam lab\",\"value\":\"Repudiandae sit pra\"},{\"key\":\"Fugiat totam impedi\",\"value\":\"Nihil ab omnis dolor\"},{\"key\":\"Suscipit velit dolor\",\"value\":\"Amet incididunt qui\"}]', '[{\"key\":\"Iure dolor facilis q\",\"value\":\"Distinctio Molestia\"},{\"key\":\"Qui qui quidem in om\",\"value\":\"Occaecat consectetur\"},{\"key\":\"Et molestias anim la\",\"value\":\"Voluptas lorem quo m\"}]', 'Magni voluptate est', '[77,78,79]', '22', 76, 1, 'Pariatur Voluptatem', 'Vel alias magna null', 'Ipsam in nesciunt l', '2023-09-05 06:25:58', '2023-09-05 00:14:44', '2023-09-05 06:25:58'),
(3, 'Aidan Mcdonald', 'aliquam-facilis-omni', 23, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '24', 0, 1, NULL, NULL, NULL, '2023-09-05 06:26:01', '2023-09-05 00:18:29', '2023-09-05 06:26:01'),
(4, 'Aidan Mcdonald', 'aliquam-facilis-omni', 25, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '26', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:04', '2023-09-05 00:21:05', '2023-09-05 06:26:04'),
(5, 'Aidan Mcdonald', 'aliquam-facilis-omni', 27, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '28', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:07', '2023-09-05 00:21:46', '2023-09-05 06:26:07'),
(6, 'Aidan Mcdonald', 'aliquam-facilis-omni', 29, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '30', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:10', '2023-09-05 00:22:59', '2023-09-05 06:26:10'),
(7, 'Aidan Mcdonald', 'aliquam-facilis-omni', 31, NULL, 'Ex sunt et dolores', NULL, 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '32', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:13', '2023-09-05 00:25:24', '2023-09-05 06:26:13'),
(8, 'Brynne Holder', 'quis-aliquip-dolore', 33, NULL, 'Corporis voluptatem', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '34', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:16', '2023-09-05 00:30:15', '2023-09-05 06:26:16'),
(9, 'Quinn Guy', 'nisi-ipsa-ea-molest', 35, NULL, 'Aliquip ut odio accu', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '36', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:19', '2023-09-05 00:33:20', '2023-09-05 06:26:19'),
(10, 'Medge Cain', 'qui-officia-accusant', 41, NULL, 'Officiis iure porro', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '42', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:21', '2023-09-05 00:38:27', '2023-09-05 06:26:21'),
(11, 'Kyla Richmond', 'quo-quo-et-perferend', 49, NULL, 'Est voluptas cupida', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '50', 0, NULL, NULL, NULL, NULL, '2023-09-05 03:27:38', '2023-09-05 00:46:10', '2023-09-05 03:27:38'),
(12, 'Kyla Richmond', 'quo-quo-et-perferend', 51, NULL, 'Est voluptas cupida', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '52', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:24', '2023-09-05 00:47:00', '2023-09-05 06:26:24'),
(13, 'Kyla Richmond', 'quo-quo-et-perferend', 53, NULL, 'Est voluptas cupida', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '54', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:27', '2023-09-05 00:47:18', '2023-09-05 06:26:27'),
(14, 'Kyla Richmond', 'quo-quo-et-perferend', 55, NULL, 'Est voluptas cupida', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Dolorem neque porro\",\"value\":\"Soluta tempor dicta\"}]', '[{\"key\":\"Unde pariatur Volup\",\"value\":\"Exercitation perspic\"}]', NULL, NULL, '56', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:30', '2023-09-05 00:48:04', '2023-09-05 06:26:30'),
(15, 'Alvin Anderson', 'dolor-ipsa-neque-al', 57, NULL, 'Cillum est culpa qui', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Velit minima nisi ut\",\"value\":\"Eum impedit ut unde\"}]', '[{\"key\":\"Commodi iste placeat\",\"value\":\"Ullam velit quia ass\"}]', NULL, '[]', '58', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:33', '2023-09-05 00:49:04', '2023-09-05 06:26:33'),
(16, 'Amber Fuentes', 'irure-eos-repudiand', 59, NULL, 'Doloremque nulla dol', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '60', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:36', '2023-09-05 00:58:56', '2023-09-05 06:26:36'),
(17, 'Amber Fuentes', 'irure-eos-repudiand', 61, NULL, 'Doloremque nulla dol', '18', 'd0d10947-27e3-495a-809c-395087b224da', NULL, NULL, NULL, NULL, '62', 0, NULL, NULL, NULL, NULL, '2023-09-05 06:26:39', '2023-09-05 01:01:27', '2023-09-05 06:26:39'),
(18, 'Josiah Thomas', 'et-quia-tempor-sunt', 63, NULL, 'Voluptates et tenetu  Lorem ipsum dolor sit amet consectetur adipiscing elit, turpis elementum dis iaculis ut justo, curabitur metus pulvinar consequat euismod augue. Proin purus donec dui neque hac metus, pharetra congue eleifend enim himenaeos morbi quis, turpis blandit pretium taciti ad. Et neque parturient tincidunt netus urna sem velit', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":null,\"value\":null}]', '[{\"key\":null,\"value\":null}]', NULL, '[95,96,97,98]', '64', 0, 1, NULL, NULL, NULL, NULL, '2023-09-05 01:01:56', '2023-09-07 06:26:51'),
(19, 'Josiah Thomas', 'et-quia-tempor-sunt', 65, NULL, 'Voluptates et tenetu', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Eu aut nihil veniam\",\"value\":\"Sunt animi dolore c\"}]', '[{\"key\":\"Ut soluta pariatur\",\"value\":\"Sunt animi quo occ\"}]', NULL, '[95,96,97,98]', '66', 1, NULL, NULL, NULL, NULL, '2023-09-05 03:27:44', '2023-09-05 01:02:10', '2023-09-05 03:27:44'),
(20, 'Martena King', 'sint-elit-iure-magn', 88, NULL, 'Laboris quia facilis', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Corrupti est sint e\",\"value\":\"Ipsum aliquam sapien\"}]', '[{\"key\":\"Velit voluptate elig\",\"value\":\"Quis dolor odio natu\"}]', 'Et in delectus pers', '[90,91,92]', '89', 47, 1, NULL, NULL, NULL, NULL, '2023-09-05 03:46:08', '2023-09-05 06:26:46'),
(21, 'Morgan Fleming', 'nihil-sint-a-sed-neq', 93, NULL, 'Elit qui dolore dol', '18', 'd0d10947-27e3-495a-809c-395087b224da', '[{\"key\":\"Sapiente quia sint\",\"value\":\"A tempore atque dol\"},{\"key\":\"Ullam ullamco debiti\",\"value\":\"Rem aliqua Exercita\"},{\"key\":\"In animi enim molli\",\"value\":\"Et voluptatibus sunt\"},{\"key\":\"Obcaecati dolore min\",\"value\":\"Ratione consequuntur\"}]', '[{\"key\":\"Quo et at voluptas n\",\"value\":\"Qui nisi quo aliqua\"},{\"key\":\"Dolor vel dolores un\",\"value\":\"Et facere dolorem om\"},{\"key\":\"Velit saepe fugit\",\"value\":\"Voluptatem aperiam q\"}]', 'Amet reprehenderit', '[95,96,97,98]', '168', 5, 1, 'Et ut eiusmod explic', 'Quo cupidatat possim', 'Cumque totam dolorum', NULL, '2023-09-05 03:47:25', '2023-09-07 23:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `project_enquiries`
--

CREATE TABLE `project_enquiries` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` int NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL,
  `interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_business` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT ' 1 => pending , 2 => aprove , 3 => canceled',
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_enquiries`
--

INSERT INTO `project_enquiries` (`id`, `project_id`, `user_id`, `type`, `interest`, `requirement`, `p_business`, `photo`, `status`, `remark`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 21, '66187226-815d-4eb8-a4f0-a96c696aad5e', 1, 'magnesium_ore', 'info', 'Aliquid aut ad at do', NULL, 0, 'Consequuntur incidid', NULL, '2023-09-14 23:41:39', '2023-09-18 05:58:47'),
(2, 21, '66187226-815d-4eb8-a4f0-a96c696aad5e', 2, NULL, NULL, NULL, 269, 2, 'Est quia delectus v', NULL, '2023-09-14 23:49:27', '2023-09-18 05:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` int NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `role` int NOT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(2, 'Supplier', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(3, 'Buyer', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(4, 'Product Owner', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(5, 'Investor', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(6, 'Agent', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(7, 'Consultant', 1, NULL, '2023-08-30 00:05:29', '2023-08-30 00:05:29'),
(9, 'Member', 1, NULL, '2023-09-12 06:13:40', '2023-09-12 06:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `about_footer` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nav_header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `about_footer`, `facebook`, `twiter`, `linkedin`, `copyright`, `nav_header`, `created_at`, `updated_at`) VALUES
(1, 'About Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Nulla quia sed non p', 'https://www.twiter.com', 'Commodo dolor est ex', '©2023 Copyright | All Rights Reserved', 'With Indotradex, you can start doing business in Indonesia quickly and easily', '2023-09-19 01:21:22', '2023-09-19 01:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` int DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `banner`, `desc`, `order`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 150, 'Ex provident non', 18, 1, NULL, '2023-09-05 23:47:21', '2023-09-19 00:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` int NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '1',
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `banner`, `about`, `status`, `admin_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Sierra Chapman', 'Sit sequi sapiente', 299, 'Sunt iste aut facere', 1, NULL, NULL, '2023-09-19 00:52:25', '2023-09-19 00:56:48'),
(3, 'Anastasia Dotson', 'Dolorem labore ex vi', 298, 'Facere culpa itaque', 1, NULL, NULL, '2023-09-19 00:56:34', '2023-09-19 00:56:34'),
(4, 'Lee James', 'Voluptate aut sapien', 300, 'Maiores odio possimu', 1, NULL, NULL, '2023-09-19 00:57:08', '2023-09-19 00:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `tradingcategories`
--

CREATE TABLE `tradingcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` int DEFAULT NULL,
  `banner` int DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tradingcategories`
--

INSERT INTO `tradingcategories` (`id`, `category_id`, `name`, `short_desc`, `description`, `image`, `banner`, `slug`, `status`, `order`, `created_by`, `meta_title`, `meta_keyword`, `meta_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Dennis Frost edited', 'Provident ipsam vol', NULL, 1, 5, 'accusantium-ducimus', 1, '29', 'd0d10947-27e3-495a-809c-395087b224da', 'Aut aut qui veniam', 'Et a fuga Qui et id', 'Consequuntur a tempo', '2023-09-05 04:48:17', '2023-08-30 00:33:46', '2023-09-05 04:48:17'),
(2, NULL, 'Jessica Vincent', 'Fugiat quo similiqu', NULL, 3, 4, 'quibusdam-beatae-rat', 1, '76', 'd0d10947-27e3-495a-809c-395087b224da', 'Et beatae vero repre', 'Aspernatur culpa et', 'Elit aliquam dolore', '2023-09-05 04:48:20', '2023-08-30 00:35:44', '2023-09-05 04:48:20'),
(3, 1, 'Prescott Norman', 'Et Nam ad iste repre', NULL, 6, 7, 'saepe-deserunt-nihil', 1, '42', 'd0d10947-27e3-495a-809c-395087b224da', 'At ex irure quo quia', 'Molestiae ad volupta', 'Non pariatur Iste n', '2023-08-30 01:23:14', '2023-08-30 01:10:00', '2023-08-30 01:23:14'),
(4, 2, 'Brooke Mcintyre hgv', 'Omnis quia aut sit', NULL, 8, 9, 'vel-eius-eligendi-ni', 1, '68', 'd0d10947-27e3-495a-809c-395087b224da', 'Nisi dicta dolor nul', 'At aut dolores neces', 'Irure quis sit solu', '2023-09-05 05:25:44', '2023-08-30 01:10:31', '2023-09-05 05:25:44'),
(5, 1, 'tesxt 1', 'qhgedfr we8ry 28ywyegh r8ygqwheu', NULL, 10, 11, 'tesxt-1', 1, '12', 'd0d10947-27e3-495a-809c-395087b224da', 'gsdfuguahsdf', 'awrtqwer', 'erq4w5', '2023-09-05 05:25:40', '2023-09-01 01:06:33', '2023-09-05 05:25:40'),
(6, NULL, 'Agro Product', NULL, NULL, 104, 105, 'agro-product', 1, '69', 'd0d10947-27e3-495a-809c-395087b224da', 'Agro Product', ' ', ' ', NULL, '2023-09-05 04:49:43', '2023-09-11 03:39:10'),
(7, NULL, 'Metal Product', NULL, NULL, 106, 107, 'metal-product', 1, '70', 'd0d10947-27e3-495a-809c-395087b224da', 'Metal Product', ' ', ' ', NULL, '2023-09-05 04:50:35', '2023-09-06 04:35:56'),
(8, NULL, 'Mining Products', NULL, NULL, 108, NULL, 'mining-products', 1, '71', 'd0d10947-27e3-495a-809c-395087b224da', 'Mining Products', ' ', ' ', NULL, '2023-09-05 04:51:35', '2023-09-06 05:46:56'),
(9, NULL, 'Sea Products', NULL, NULL, 109, NULL, 'sea-products', 1, '72', 'd0d10947-27e3-495a-809c-395087b224da', 'Sea Products', ' ', ' ', NULL, '2023-09-05 04:52:02', '2023-09-06 05:46:59'),
(10, NULL, 'Precious Items', NULL, NULL, 110, 111, 'precious-items', 0, '73', 'd0d10947-27e3-495a-809c-395087b224da', 'Precious Items', ' ', ' ', '2023-09-12 00:25:57', '2023-09-05 04:52:41', '2023-09-12 00:25:57'),
(11, NULL, 'Other Products', NULL, NULL, 112, 113, 'other-products', 0, '74', 'd0d10947-27e3-495a-809c-395087b224da', 'Other Products', ' ', ' ', '2023-09-11 04:49:16', '2023-09-05 04:53:12', '2023-09-11 04:49:16'),
(12, 6, 'mining', NULL, NULL, NULL, NULL, 'mining', 1, '75', 'd0d10947-27e3-495a-809c-395087b224da', 'mining', ' ', ' ', NULL, '2023-09-05 05:49:25', '2023-09-05 05:49:25'),
(13, 6, 'Metal', NULL, NULL, NULL, NULL, 'metal', 1, '76', 'd0d10947-27e3-495a-809c-395087b224da', 'Metal', ' ', ' ', NULL, '2023-09-05 05:49:57', '2023-09-05 05:49:57'),
(14, 7, 'Emery Miles', 'Consequuntur consequ', NULL, 158, 159, 'voluptatem-voluptat', 1, '86', 'd0d10947-27e3-495a-809c-395087b224da', 'Veniam culpa quod', 'Ut aspernatur et eiu', 'Quibusdam eligendi d', NULL, '2023-09-06 04:36:35', '2023-09-06 04:36:35'),
(15, 7, 'Allen Mcleod', 'Beatae in et cumque', NULL, 160, 161, 'quia-aliquip-volupta', 1, '50', 'd0d10947-27e3-495a-809c-395087b224da', 'Quos exercitationem', 'Est nostrum cupidata', 'Corrupti magni minu', NULL, '2023-09-06 04:37:01', '2023-09-06 04:37:01'),
(16, 10, 'Lee Strong', 'Quae dolor nostrum q', NULL, 162, 163, 'assumenda-labore-quo', 1, '4', 'd0d10947-27e3-495a-809c-395087b224da', 'Et perspiciatis vol', 'In enim adipisci inv', 'Amet quibusdam mole', NULL, '2023-09-06 04:37:30', '2023-09-06 04:37:30'),
(17, 8, 'Bevis Brown', 'Aperiam nostrud enim asjdgfuyweuidgfuy wieriuh qiuheriuh qwiuehrpi uwieuhr', NULL, 189, 190, 'nostrud-deserunt-hic', 1, '68', 'd0d10947-27e3-495a-809c-395087b224da', 'Et rerum dolor neque', 'Repudiandae et exped', 'Sunt consequatur ir', NULL, '2023-09-08 05:43:41', '2023-09-08 05:43:41'),
(18, NULL, 'Barrett Ewing', 'Dolore doloribus con', NULL, 191, 192, 'neque-ea-qui-ea-vel', 1, '100', 'd0d10947-27e3-495a-809c-395087b224da', 'Assumenda et anim es', 'Mollit qui architect', 'Aliquam et esse sint', '2023-09-11 04:49:22', '2023-09-09 03:51:07', '2023-09-11 04:49:22'),
(19, 9, 'Cade Woods', 'Eius aut ducimus si', NULL, 193, 194, 'fugit-tempor-optio', 1, '27', 'd0d10947-27e3-495a-809c-395087b224da', 'Itaque nemo fuga Il', 'Ipsam eos ea reprehe', 'Porro impedit quia', NULL, '2023-09-09 03:52:18', '2023-09-09 03:52:18'),
(20, NULL, 'Jessamine Blankenship-e', 'Sit est dolor cupid', NULL, 199, 200, 'in-ut-sint-aut-quia', 1, '25', 'd0d10947-27e3-495a-809c-395087b224da', 'Sequi ut voluptates', 'Enim corrupti nihil', 'Unde nesciunt ducim', '2023-09-12 00:25:41', '2023-09-11 04:30:59', '2023-09-12 00:25:41'),
(21, 6, 'Cameran Bradshaw', 'Adipisicing quo offi', NULL, 201, 202, 'commodo-facilis-labo', 1, '29', 'd0d10947-27e3-495a-809c-395087b224da', 'Quisquam accusamus f', 'Dolorum excepteur ve', 'Vel laboris asperior', NULL, '2023-09-11 04:39:27', '2023-09-11 04:39:27'),
(22, 20, 'Jonas Lester e', 'Est incididunt et au', NULL, 203, 204, 'facere-distinctio-d', 1, '50', 'd0d10947-27e3-495a-809c-395087b224da', 'Adipisci ut libero e', 'Quasi officiis ullam', 'Velit consequat Eu', NULL, '2023-09-11 04:40:24', '2023-09-11 04:54:33'),
(23, 22, 'Yvette Livingston e', 'Eius omnis exercitat', NULL, 205, 206, 'quam-quasi-molestias', 1, '89', 'd0d10947-27e3-495a-809c-395087b224da', 'Dolor voluptatum mag', 'Qui deleniti ex prov', 'Ut molestiae ut quas', NULL, '2023-09-11 04:45:52', '2023-09-11 04:54:56'),
(24, 9, 'Logan George', 'Aliqua Culpa nemo', NULL, 207, 208, 'ut-veniam-voluptate', 1, '59', 'd0d10947-27e3-495a-809c-395087b224da', 'Id amet ut vel mole', 'Laboriosam tempor v', 'Tempora molestiae su', NULL, '2023-09-11 04:49:52', '2023-09-11 04:49:52'),
(25, 20, 'Rigel Pierce', 'Sed nesciunt dolor', NULL, 209, 210, 'commodo-et-dignissim', 1, '84', 'd0d10947-27e3-495a-809c-395087b224da', 'Voluptatem Amet ut', 'Quae est pariatur D', 'Consequuntur et est', NULL, '2023-09-11 11:04:18', '2023-09-11 11:04:18'),
(26, 22, 'Gretchen Petty', 'Laboriosam ducimus', NULL, 211, 212, 'dolor-in-molestiae-a', 1, '45', 'd0d10947-27e3-495a-809c-395087b224da', 'Ex est animi modi p', 'Laudantium eiusmod', 'Minus perspiciatis', NULL, '2023-09-11 11:05:12', '2023-09-11 11:05:12'),
(27, 12, 'Juliet Gregory', 'Rem voluptatibus ut', NULL, 223, 224, 'ut-enim-amet-eum-ul', 1, '54', 'd0d10947-27e3-495a-809c-395087b224da', 'Id officia earum et', 'Nam debitis officia', 'Quia ab consectetur', NULL, '2023-09-12 01:35:20', '2023-09-12 01:35:20'),
(28, 19, 'Ria Franco', 'Debitis sunt qui qua', NULL, 225, 226, 'sit-quis-cupiditate', 1, '38', 'd0d10947-27e3-495a-809c-395087b224da', 'Sunt ducimus illum', 'Sed in quo distincti', 'Voluptatem dolores', NULL, '2023-09-12 01:38:40', '2023-09-12 01:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `trandingcategories`
--

CREATE TABLE `trandingcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trandingcategories`
--

INSERT INTO `trandingcategories` (`id`, `category_id`, `name`, `slug`, `status`, `order`, `deleted_at`, `created_at`, `updated_at`) VALUES
(18, NULL, 'shyam234', 'shyam5', '1', 6, NULL, '2023-09-02 01:09:14', '2023-09-13 00:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint UNSIGNED NOT NULL,
  `file_original_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` bigint UNSIGNED NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filepath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_original_name`, `file_name`, `user_id`, `file_size`, `extension`, `type`, `filepath`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pexels-photo-4256976.jpeg', 'air5Egf6rVxEg3Gok9bi.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\air5Egf6rVxEg3Gok9bi.jpeg', '2023-08-30 00:33:46', '2023-08-30 00:33:46', NULL),
(2, 'istockphoto-1357349308-1024x1024.jpg', '2ohTylgLyKED2j47oNex.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 58550, 'jpg', 'image/jpeg', 'uploads\\2ohTylgLyKED2j47oNex.jpg', '2023-08-30 00:33:46', '2023-08-30 00:33:46', NULL),
(3, 'pexels-photo-4256976.jpeg', 'sLQSlH4lesJDE0RO3MfY.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\sLQSlH4lesJDE0RO3MfY.jpeg', '2023-08-30 00:35:44', '2023-08-30 00:35:44', NULL),
(4, 'pexels-photo-4256976.jpeg', 'ZhETZz6w73VvT4dLvj7w.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\ZhETZz6w73VvT4dLvj7w.jpeg', '2023-08-30 00:35:44', '2023-08-30 00:35:44', NULL),
(5, 'ana-frantz-ySx4iTzSWwM-unsplash.jpg', '3gzWr5EtuThAlIRRj2Sz.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 1769198, 'jpg', 'image/jpeg', 'uploads\\3gzWr5EtuThAlIRRj2Sz.jpg', '2023-08-30 00:39:27', '2023-08-30 00:39:27', NULL),
(6, 'photo-1600880292203-757bb62b4baf.jpeg', 'E1FtGSk7SIvdixz14SSS.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\E1FtGSk7SIvdixz14SSS.jpeg', '2023-08-30 01:10:00', '2023-08-30 01:10:00', NULL),
(7, 'pexels-photo-3184292.jpeg', 'Yk4K08MfZVcbsLcGnZlr.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 12036716, 'jpeg', 'image/jpeg', 'uploads\\Yk4K08MfZVcbsLcGnZlr.jpeg', '2023-08-30 01:10:00', '2023-08-30 01:10:00', NULL),
(8, 'ana-frantz-ySx4iTzSWwM-unsplash.jpg', 'TEy9HyxakCdy7bbKbyLc.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 1769198, 'jpg', 'image/jpeg', 'uploads\\TEy9HyxakCdy7bbKbyLc.jpg', '2023-08-30 01:10:31', '2023-08-30 01:10:31', NULL),
(9, 'istockphoto-1357349308-1024x1024.jpg', 'Ez88cmj8yyv2aelH7NHp.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 58550, 'jpg', 'image/jpeg', 'uploads\\Ez88cmj8yyv2aelH7NHp.jpg', '2023-08-30 01:10:31', '2023-08-30 01:10:31', NULL),
(10, 'pexels-photo-4256976.jpeg', 'JwLoy2YYSU5M4Od4wi9L.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\JwLoy2YYSU5M4Od4wi9L.jpeg', '2023-09-01 01:06:33', '2023-09-01 01:06:33', NULL),
(11, 'pexels-photo-4256976.jpeg', 'pQz2xz67s4CoPzsMqkyk.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\pQz2xz67s4CoPzsMqkyk.jpeg', '2023-09-01 01:06:33', '2023-09-01 01:06:33', NULL),
(12, 'pexels-photo-4256976.jpeg', 'XeKdVaKCUoV8BnhO8qZI.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\XeKdVaKCUoV8BnhO8qZI.jpeg', '2023-09-01 01:55:35', '2023-09-01 01:55:35', NULL),
(13, 'pexels-photo-4256976.jpeg', 'u04yqGBLH958fz0oZRjA.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\u04yqGBLH958fz0oZRjA.jpeg', '2023-09-01 01:55:35', '2023-09-01 01:55:35', NULL),
(14, 'pexels-photo-4256976.jpeg', 'fKyOiiUAvVoXewPSstKb.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\fKyOiiUAvVoXewPSstKb.jpeg', '2023-09-01 02:23:04', '2023-09-01 02:23:04', NULL),
(15, 'pexels-photo-4256976.jpeg', 'VvfS1MP0pOfiMx2nwaxR.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\VvfS1MP0pOfiMx2nwaxR.jpeg', '2023-09-01 02:23:04', '2023-09-01 02:23:04', NULL),
(16, 'pexels-photo-4256976.jpeg', '1hxD9JQ6vg7yEOItIe4A.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\1hxD9JQ6vg7yEOItIe4A.jpeg', '2023-09-01 02:23:22', '2023-09-01 02:23:22', NULL),
(17, 'About.png', 'PGF4BPe0720FHTlj90m3.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\PGF4BPe0720FHTlj90m3.png', '2023-09-05 00:09:30', '2023-09-05 00:09:30', NULL),
(18, 'Indotradex.pdf', 'F9MW9F92LBUfwRr5NAQb.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\F9MW9F92LBUfwRr5NAQb.pdf', '2023-09-05 00:09:30', '2023-09-05 00:09:30', NULL),
(19, 'About.png', 'CYzJCtyAbsA4uWNVThwF.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\CYzJCtyAbsA4uWNVThwF.png', '2023-09-05 00:13:59', '2023-09-05 00:13:59', NULL),
(20, 'Indotradex.pdf', 'Hwnu15qO0MctJtXvNgUH.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\Hwnu15qO0MctJtXvNgUH.pdf', '2023-09-05 00:13:59', '2023-09-05 00:13:59', NULL),
(21, 'About.png', 'Hmht905ZioO5FkbgArNu.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\Hmht905ZioO5FkbgArNu.png', '2023-09-05 00:14:44', '2023-09-05 00:14:44', NULL),
(22, 'Indotradex.pdf', 'Nsv8RhuryzVeTXkeRQxa.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\Nsv8RhuryzVeTXkeRQxa.pdf', '2023-09-05 00:14:44', '2023-09-05 00:14:44', NULL),
(23, 'About.png', '2hFjbs3yaxasPd7Gbeuy.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\2hFjbs3yaxasPd7Gbeuy.png', '2023-09-05 00:18:29', '2023-09-05 00:18:29', NULL),
(24, 'Indotradex.pdf', '4op26qWVXM2Fh35E8qfs.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\4op26qWVXM2Fh35E8qfs.pdf', '2023-09-05 00:18:29', '2023-09-05 00:18:29', NULL),
(25, 'About.png', 'BVnwG4HEg3qjtlHTZeVT.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\BVnwG4HEg3qjtlHTZeVT.png', '2023-09-05 00:21:05', '2023-09-05 00:21:05', NULL),
(26, 'Indotradex.pdf', 'N0eWZjY1yVSP847HSQR9.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\N0eWZjY1yVSP847HSQR9.pdf', '2023-09-05 00:21:05', '2023-09-05 00:21:05', NULL),
(27, 'About.png', 'xne6qWBlyBG1pWUV8P5y.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\xne6qWBlyBG1pWUV8P5y.png', '2023-09-05 00:21:46', '2023-09-05 00:21:46', NULL),
(28, 'Indotradex.pdf', '5enYaIoKN5qJZC0bm5mj.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\5enYaIoKN5qJZC0bm5mj.pdf', '2023-09-05 00:21:46', '2023-09-05 00:21:46', NULL),
(29, 'About.png', 'ru4iF10xxZbX9VVKiyhW.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\ru4iF10xxZbX9VVKiyhW.png', '2023-09-05 00:22:59', '2023-09-05 00:22:59', NULL),
(30, 'Indotradex.pdf', 'mLAkXVZdX0tS6i81yAm6.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\mLAkXVZdX0tS6i81yAm6.pdf', '2023-09-05 00:22:59', '2023-09-05 00:22:59', NULL),
(31, 'About.png', 'DH3pinsFrVPWVAk2Ls3o.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\DH3pinsFrVPWVAk2Ls3o.png', '2023-09-05 00:25:24', '2023-09-05 00:25:24', NULL),
(32, 'Indotradex.pdf', 'Xhf2PkkXCyXgY9r7zS90.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\Xhf2PkkXCyXgY9r7zS90.pdf', '2023-09-05 00:25:24', '2023-09-05 00:25:24', NULL),
(33, 'photo-1600880292203-757bb62b4baf.jpeg', '31ZDP07Gk9eX1rJqqpCd.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\31ZDP07Gk9eX1rJqqpCd.jpeg', '2023-09-05 00:30:15', '2023-09-05 00:30:15', NULL),
(34, 'WEBSITE TESTING (1) (1).pdf', 'K74G7hRqHpzduCegohLu.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 115993, 'pdf', 'application/pdf', 'uploads\\K74G7hRqHpzduCegohLu.pdf', '2023-09-05 00:30:15', '2023-09-05 00:30:15', NULL),
(35, 'photo-1600880292203-757bb62b4baf.jpeg', '9lIGZDGpDeENAyjXxuPW.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\9lIGZDGpDeENAyjXxuPW.jpeg', '2023-09-05 00:33:20', '2023-09-05 00:33:20', NULL),
(36, 'Indotradex.pdf', '3QMmYpVFk4EyPuOcEk3w.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\3QMmYpVFk4EyPuOcEk3w.pdf', '2023-09-05 00:33:20', '2023-09-05 00:33:20', NULL),
(37, 'photo-1600880292203-757bb62b4baf.jpeg', 'dfdx48haNN2HxlqoJrhk.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\dfdx48haNN2HxlqoJrhk.jpeg', '2023-09-05 00:35:19', '2023-09-05 00:35:19', NULL),
(38, 'WEBSITE TESTING (1) (1).pdf', 'YWCeLVSlpGToTWQRePj1.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 115993, 'pdf', 'application/pdf', 'uploads\\YWCeLVSlpGToTWQRePj1.pdf', '2023-09-05 00:35:19', '2023-09-05 00:35:19', NULL),
(39, 'Why1.png', 'CHPY0cQtp3XWJgDUiA1n.png', 'd0d10947-27e3-495a-809c-395087b224da', 115480, 'png', 'image/png', 'uploads\\CHPY0cQtp3XWJgDUiA1n.png', '2023-09-05 00:37:42', '2023-09-05 00:37:42', NULL),
(40, 'Indotradex.pdf', '7odyhMTBWqM5KUlkm4XE.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\7odyhMTBWqM5KUlkm4XE.pdf', '2023-09-05 00:37:42', '2023-09-05 00:37:42', NULL),
(41, 'Why1.png', 'wbns7SjBdP8zdqQuYw68.png', 'd0d10947-27e3-495a-809c-395087b224da', 115480, 'png', 'image/png', 'uploads\\wbns7SjBdP8zdqQuYw68.png', '2023-09-05 00:38:27', '2023-09-05 00:38:27', NULL),
(42, 'Indotradex.pdf', 'jNtolZLpxOHn6weEkfq1.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\jNtolZLpxOHn6weEkfq1.pdf', '2023-09-05 00:38:27', '2023-09-05 00:38:27', NULL),
(43, 'photo-1600880292203-757bb62b4baf.jpeg', 'cb1KtGIZYysMcrOEpVwi.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\cb1KtGIZYysMcrOEpVwi.jpeg', '2023-09-05 00:43:18', '2023-09-05 00:43:18', NULL),
(44, 'Indotradex.pdf', 'ya1cmvUYYpieb1JvTJ5z.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\ya1cmvUYYpieb1JvTJ5z.pdf', '2023-09-05 00:43:18', '2023-09-05 00:43:18', NULL),
(45, 'photo-1600880292203-757bb62b4baf.jpeg', 'rV1z90y7nivHdWWZDOh6.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\rV1z90y7nivHdWWZDOh6.jpeg', '2023-09-05 00:43:45', '2023-09-05 00:43:45', NULL),
(46, 'Indotradex.pdf', 'i0eLFs5RrIhYdJkFqeVL.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\i0eLFs5RrIhYdJkFqeVL.pdf', '2023-09-05 00:43:45', '2023-09-05 00:43:45', NULL),
(47, 'photo-1600880292203-757bb62b4baf.jpeg', 'zNmAALobp7eFZz9f22C2.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\zNmAALobp7eFZz9f22C2.jpeg', '2023-09-05 00:44:19', '2023-09-05 00:44:19', NULL),
(48, 'Indotradex.pdf', 'R3OSCECkkjRKL60hvIwr.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\R3OSCECkkjRKL60hvIwr.pdf', '2023-09-05 00:44:19', '2023-09-05 00:44:19', NULL),
(49, 'photo-1600880292203-757bb62b4baf.jpeg', 'rS9aqTgqRKjRwJ28vopH.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\rS9aqTgqRKjRwJ28vopH.jpeg', '2023-09-05 00:46:10', '2023-09-05 00:46:10', NULL),
(50, 'Indotradex.pdf', 'BqRycfBhCyMFqcwuFO4v.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\BqRycfBhCyMFqcwuFO4v.pdf', '2023-09-05 00:46:10', '2023-09-05 00:46:10', NULL),
(51, 'photo-1600880292203-757bb62b4baf.jpeg', 'Ii2Q5I5kKn5iRM8AJjVA.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\Ii2Q5I5kKn5iRM8AJjVA.jpeg', '2023-09-05 00:47:00', '2023-09-05 00:47:00', NULL),
(52, 'Indotradex.pdf', 'LR0vU7qB3U3efKH8VCnX.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\LR0vU7qB3U3efKH8VCnX.pdf', '2023-09-05 00:47:00', '2023-09-05 00:47:00', NULL),
(53, 'photo-1600880292203-757bb62b4baf.jpeg', 'voWNRrUSaBgzDGkbefJE.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\voWNRrUSaBgzDGkbefJE.jpeg', '2023-09-05 00:47:18', '2023-09-05 00:47:18', NULL),
(54, 'Indotradex.pdf', 'jmkYFcAAo9o1C4IJwVKz.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\jmkYFcAAo9o1C4IJwVKz.pdf', '2023-09-05 00:47:18', '2023-09-05 00:47:18', NULL),
(55, 'photo-1600880292203-757bb62b4baf.jpeg', '4Jb1feQYJrJ9eeSqMZcY.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\4Jb1feQYJrJ9eeSqMZcY.jpeg', '2023-09-05 00:48:04', '2023-09-05 00:48:04', NULL),
(56, 'Indotradex.pdf', 'DMDN595aw82HnYTH3kmi.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\DMDN595aw82HnYTH3kmi.pdf', '2023-09-05 00:48:04', '2023-09-05 00:48:04', NULL),
(57, 'PermanentRecruitment - Copy.jpg', 'AlhO49vXErdxcJYPmbml.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\AlhO49vXErdxcJYPmbml.jpg', '2023-09-05 00:49:04', '2023-09-05 00:49:04', NULL),
(58, 'Indotradex.pdf', '7FDFVoPfGucMBrFMEkBm.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\7FDFVoPfGucMBrFMEkBm.pdf', '2023-09-05 00:49:04', '2023-09-05 00:49:04', NULL),
(59, 'pexels-photo-4256976.jpeg', 'XtNNKB8m6PGzaq0bICPw.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\XtNNKB8m6PGzaq0bICPw.jpeg', '2023-09-05 00:58:56', '2023-09-05 00:58:56', NULL),
(60, 'Indotradex.pdf', '2lbUQiCggH71tGFJItE8.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\2lbUQiCggH71tGFJItE8.pdf', '2023-09-05 00:58:56', '2023-09-05 00:58:56', NULL),
(61, 'pexels-photo-4256976.jpeg', 'i3hisaA23tcVhuPsxcz0.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\i3hisaA23tcVhuPsxcz0.jpeg', '2023-09-05 01:01:27', '2023-09-05 01:01:27', NULL),
(62, 'Indotradex.pdf', 'd2iJqGa7rv8JI98rWAoA.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\d2iJqGa7rv8JI98rWAoA.pdf', '2023-09-05 01:01:27', '2023-09-05 01:01:27', NULL),
(63, 'pexels-photo-4256976.jpeg', 'c51oocFYGQxCCbZkom2e.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\c51oocFYGQxCCbZkom2e.jpeg', '2023-09-05 01:01:56', '2023-09-05 01:01:56', NULL),
(64, 'Indotradex.pdf', 'mq1LktRyaxfNRphUbijZ.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\mq1LktRyaxfNRphUbijZ.pdf', '2023-09-05 01:01:56', '2023-09-05 01:01:56', NULL),
(65, 'pexels-photo-4256976.jpeg', 'tr7cs3f6O2aoRHtM1Soj.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\tr7cs3f6O2aoRHtM1Soj.jpeg', '2023-09-05 01:02:10', '2023-09-05 01:02:10', NULL),
(66, 'Indotradex.pdf', 'sxtA97KEXx3MAOX3uXkC.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\sxtA97KEXx3MAOX3uXkC.pdf', '2023-09-05 01:02:10', '2023-09-05 01:02:10', NULL),
(67, 'PermanentRecruitment - Copy.jpg', 'kOto8lw7GbppSvvEufOZ.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\kOto8lw7GbppSvvEufOZ.jpg', '2023-09-05 01:02:10', '2023-09-05 01:02:10', NULL),
(68, 'PermanentRecruitment.jpg', 'oJTGNVgokDxKdLPTTrNy.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\oJTGNVgokDxKdLPTTrNy.jpg', '2023-09-05 01:02:10', '2023-09-05 01:02:10', NULL),
(69, 'Why1.png', 'FioOpWNGUKHdHwEbiO6o.png', 'd0d10947-27e3-495a-809c-395087b224da', 115480, 'png', 'image/png', 'uploads\\FioOpWNGUKHdHwEbiO6o.png', '2023-09-05 01:02:10', '2023-09-05 01:02:10', NULL),
(70, 'PermanentRecruitment - Copy.jpg', 'kThFtMv7sERkRrsgNUJB.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\kThFtMv7sERkRrsgNUJB.jpg', '2023-09-05 01:45:23', '2023-09-05 01:45:23', NULL),
(71, 'PermanentRecruitment.jpg', 'PbfoHXUk43nTKznduzYq.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\PbfoHXUk43nTKznduzYq.jpg', '2023-09-05 01:45:23', '2023-09-05 01:45:23', NULL),
(72, 'Why1.png', '0zGD70Uh2vUlZnGxFOlp.png', 'd0d10947-27e3-495a-809c-395087b224da', 115480, 'png', 'image/png', 'uploads\\0zGD70Uh2vUlZnGxFOlp.png', '2023-09-05 01:45:23', '2023-09-05 01:45:23', NULL),
(73, 'PermanentRecruitment - Copy (2).jpg', 'B3e3EqXqcw6q8odzsIOx.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\B3e3EqXqcw6q8odzsIOx.jpg', '2023-09-05 01:48:15', '2023-09-05 01:48:15', NULL),
(74, 'PermanentRecruitment - Copy (2).jpg', 'NmoOjuxjDzZZ2GITWViy.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\NmoOjuxjDzZZ2GITWViy.jpg', '2023-09-05 01:49:59', '2023-09-05 01:49:59', NULL),
(75, 'PermanentRecruitment - Copy.jpg', 'bqXWNhuaQyvwjROb0adc.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\bqXWNhuaQyvwjROb0adc.jpg', '2023-09-05 01:49:59', '2023-09-05 01:49:59', NULL),
(76, 'PermanentRecruitment.jpg', 'l7JCxjerOTo3p5z9ojos.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\l7JCxjerOTo3p5z9ojos.jpg', '2023-09-05 01:49:59', '2023-09-05 01:49:59', NULL),
(77, 'image123.jpg', 'ie8EluaYKmDlFxBNNPSw.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\ie8EluaYKmDlFxBNNPSw.jpg', '2023-09-05 01:51:43', '2023-09-05 01:51:43', NULL),
(78, 'DineshBatra.jpeg', 'sIZgt9x1XlHViKgUpfXW.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 40523, 'jpeg', 'image/jpeg', 'uploads\\sIZgt9x1XlHViKgUpfXW.jpeg', '2023-09-05 01:51:43', '2023-09-05 01:51:43', NULL),
(79, 'PermanentRecruitment - Copy - Copy.jpg', 'oZnhIwaM9Z3ijXKKbpGo.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\oZnhIwaM9Z3ijXKKbpGo.jpg', '2023-09-05 01:51:43', '2023-09-05 01:51:43', NULL),
(80, 'image123.jpg', 'ZTyEI70HqbG78BIyqEYC.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\ZTyEI70HqbG78BIyqEYC.jpg', '2023-09-05 03:39:59', '2023-09-05 03:39:59', NULL),
(81, 'Indotradex (1).pdf', 'g6N93ZCyqz9x7vepbYCS.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\g6N93ZCyqz9x7vepbYCS.pdf', '2023-09-05 03:39:59', '2023-09-05 03:39:59', NULL),
(82, 'image123.jpg', 'b8v7ieCjc9mWoXDjvE74.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\b8v7ieCjc9mWoXDjvE74.jpg', '2023-09-05 03:41:01', '2023-09-05 03:41:01', NULL),
(83, 'Indotradex (1).pdf', 'Qum0FoiFzpMfypiFVuGQ.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\Qum0FoiFzpMfypiFVuGQ.pdf', '2023-09-05 03:41:01', '2023-09-05 03:41:01', NULL),
(84, 'image123.jpg', 'sLgLAc3fuoSqBUNlCZe1.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\sLgLAc3fuoSqBUNlCZe1.jpg', '2023-09-05 03:44:51', '2023-09-05 03:44:51', NULL),
(85, 'Indotradex (1).pdf', '8AIUHEy7EqAlthcqFZrn.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\8AIUHEy7EqAlthcqFZrn.pdf', '2023-09-05 03:44:51', '2023-09-05 03:44:51', NULL),
(86, 'image123.jpg', 'pDtNtPvDrBEFZXkibgoN.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\pDtNtPvDrBEFZXkibgoN.jpg', '2023-09-05 03:45:46', '2023-09-05 03:45:46', NULL),
(87, 'Indotradex (1).pdf', '3sQfa12Kd0iojxN4VES1.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\3sQfa12Kd0iojxN4VES1.pdf', '2023-09-05 03:45:46', '2023-09-05 03:45:46', NULL),
(88, 'image123.jpg', 'aY2VTVWzss2BVkW94UnZ.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\aY2VTVWzss2BVkW94UnZ.jpg', '2023-09-05 03:46:08', '2023-09-05 03:46:08', NULL),
(89, 'Indotradex (1).pdf', '8cpBcKGlyG6uwABuMiAB.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\8cpBcKGlyG6uwABuMiAB.pdf', '2023-09-05 03:46:08', '2023-09-05 03:46:08', NULL),
(90, 'PermanentRecruitment - Copy - Copy.jpg', 'IEjIb6NNH32z5exSprBJ.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\IEjIb6NNH32z5exSprBJ.jpg', '2023-09-05 03:46:08', '2023-09-05 03:46:08', NULL),
(91, 'PermanentRecruitment - Copy (2).jpg', 'VyXQ0gv7m5kUA2jpH3k3.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\VyXQ0gv7m5kUA2jpH3k3.jpg', '2023-09-05 03:46:08', '2023-09-05 03:46:08', NULL),
(92, 'PermanentRecruitment - Copy.jpg', 'J1tm4KH7inctWrSSMM1C.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\J1tm4KH7inctWrSSMM1C.jpg', '2023-09-05 03:46:08', '2023-09-05 03:46:08', NULL),
(93, 'image123.jpg', '4D0uLGWlvVbPT5KMMCI5.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\4D0uLGWlvVbPT5KMMCI5.jpg', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(94, 'Indotradex.pdf', 'iQ92ZvKFWVfjQfk33rac.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 9066, 'pdf', 'application/pdf', 'uploads\\iQ92ZvKFWVfjQfk33rac.pdf', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(95, 'PermanentRecruitment - Copy (2).jpg', '2eJ9M99RzUAJtpsy3Aqj.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\2eJ9M99RzUAJtpsy3Aqj.jpg', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(96, 'Why1.png', 'Tqp6VcuOmR9SjDAJokJH.png', 'd0d10947-27e3-495a-809c-395087b224da', 115480, 'png', 'image/png', 'uploads\\Tqp6VcuOmR9SjDAJokJH.png', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(97, 'About.png', 'TPgbgFmzHUdOWHkmp9nB.png', 'd0d10947-27e3-495a-809c-395087b224da', 78117, 'png', 'image/png', 'uploads\\TPgbgFmzHUdOWHkmp9nB.png', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(98, 'image123.jpg', '7mA11D9g8qe2g3ePB1V2.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\7mA11D9g8qe2g3ePB1V2.jpg', '2023-09-05 03:47:25', '2023-09-05 03:47:25', NULL),
(99, 'photo-1542990253-a781e04c0082.jpeg', 'OjjLcuP3QKm62Whz2Huw.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 291457, 'jpeg', 'image/jpeg', 'uploads\\OjjLcuP3QKm62Whz2Huw.jpeg', '2023-09-05 04:11:45', '2023-09-05 04:11:45', NULL),
(100, 'pexels-photo-4040644.jpeg', '9K3UxWLqZ4R0hPPROXYe.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 492507, 'jpeg', 'image/jpeg', 'uploads\\9K3UxWLqZ4R0hPPROXYe.jpeg', '2023-09-05 04:13:14', '2023-09-05 04:13:14', NULL),
(101, 'pexels-photo-4256976.jpeg', 'NKBLnKxgMdndeQFVE9Ot.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\NKBLnKxgMdndeQFVE9Ot.jpeg', '2023-09-05 04:13:14', '2023-09-05 04:13:14', NULL),
(102, 'photo-1600880292203-757bb62b4baf.jpeg', 'grgwLwrWDkRZEmvIkdzW.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 206897, 'jpeg', 'image/jpeg', 'uploads\\grgwLwrWDkRZEmvIkdzW.jpeg', '2023-09-05 04:14:35', '2023-09-05 04:14:35', NULL),
(103, 'pexels-photo-3184292.jpeg', 'tR7NYgBvXKw0VN1hbWJq.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 12036716, 'jpeg', 'image/jpeg', 'uploads\\tR7NYgBvXKw0VN1hbWJq.jpeg', '2023-09-05 04:14:36', '2023-09-05 04:14:36', NULL),
(104, 'leaf-icon.png', 'Me5RBnp7NFKILfJgrBTe.png', 'd0d10947-27e3-495a-809c-395087b224da', 5336, 'png', 'image/png', 'uploads\\Me5RBnp7NFKILfJgrBTe.png', '2023-09-05 04:49:43', '2023-09-05 04:49:43', NULL),
(105, 'pexels-photo-8148253.jpeg', 'vyauVCreksNDSVygLFGO.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 766321, 'jpeg', 'image/jpeg', 'uploads\\vyauVCreksNDSVygLFGO.jpeg', '2023-09-05 04:49:43', '2023-09-05 04:49:43', NULL),
(106, 'metal-icon.png', 'mgsQBZqX8weln5kPyqE8.png', 'd0d10947-27e3-495a-809c-395087b224da', 1004, 'png', 'image/png', 'uploads\\mgsQBZqX8weln5kPyqE8.png', '2023-09-05 04:50:35', '2023-09-05 04:50:35', NULL),
(107, 'pexels-photo-8148253.jpeg', 'RJe3lzoKBEn2PsfTcHT9.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 766321, 'jpeg', 'image/jpeg', 'uploads\\RJe3lzoKBEn2PsfTcHT9.jpeg', '2023-09-05 04:50:35', '2023-09-05 04:50:35', NULL),
(108, 'mining-icon.png', '086RpF2g0KFcchXpoGF4.png', 'd0d10947-27e3-495a-809c-395087b224da', 12260, 'png', 'image/png', 'uploads\\086RpF2g0KFcchXpoGF4.png', '2023-09-05 04:51:35', '2023-09-05 04:51:35', NULL),
(109, 'crab-icon.png', 'dPE1YOOPWDirIhDvgSfB.png', 'd0d10947-27e3-495a-809c-395087b224da', 11526, 'png', 'image/png', 'uploads\\dPE1YOOPWDirIhDvgSfB.png', '2023-09-05 04:52:02', '2023-09-05 04:52:02', NULL),
(110, 'gems-icon.png', '3A1IWOp7Rlbf7Iyswy8w.png', 'd0d10947-27e3-495a-809c-395087b224da', 8390, 'png', 'image/png', 'uploads\\3A1IWOp7Rlbf7Iyswy8w.png', '2023-09-05 04:52:41', '2023-09-05 04:52:41', NULL),
(111, 'pexels-photo-8148253.jpeg', 'MPtoY9OJ4dEw9yqd7lyJ.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 766321, 'jpeg', 'image/jpeg', 'uploads\\MPtoY9OJ4dEw9yqd7lyJ.jpeg', '2023-09-05 04:52:41', '2023-09-05 04:52:41', NULL),
(112, 'hotel-icon.png', 'LANpKCuZKiXcIDICv0b6.png', 'd0d10947-27e3-495a-809c-395087b224da', 5926, 'png', 'image/png', 'uploads\\LANpKCuZKiXcIDICv0b6.png', '2023-09-05 04:53:12', '2023-09-05 04:53:12', NULL),
(113, 'PermanentRecruitment - Copy (2).jpg', '3Zhrr7L0ZPD6yuU65mDA.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 240694, 'jpg', 'image/jpeg', 'uploads\\3Zhrr7L0ZPD6yuU65mDA.jpg', '2023-09-05 04:53:12', '2023-09-05 04:53:12', NULL),
(114, 'cashew1.jpg', 'q5OAYWzpnVpHxEIOkq3X.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\q5OAYWzpnVpHxEIOkq3X.jpg', '2023-09-05 05:58:03', '2023-09-05 05:58:03', NULL),
(115, 'nuts.png', 'Zjc6vHtBPvKltlUKoBhT.png', 'd0d10947-27e3-495a-809c-395087b224da', 4161, 'png', 'image/png', 'uploads\\Zjc6vHtBPvKltlUKoBhT.png', '2023-09-05 05:58:03', '2023-09-05 05:58:03', NULL),
(116, 'coal.jpg', 'D46unWwX0ChHJctn8Fq2.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\D46unWwX0ChHJctn8Fq2.jpg', '2023-09-05 06:01:27', '2023-09-05 06:01:27', NULL),
(117, 'sxsKicEdruNNDQ6Z8WkUJWF28ds4hWOudc8lvMpO.jpg', 'mguydHxxq4EVlTJzLiGO.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 263611, 'jpg', 'image/jpeg', 'uploads\\mguydHxxq4EVlTJzLiGO.jpg', '2023-09-05 06:01:27', '2023-09-05 06:01:27', NULL),
(118, 'business1.jpg', 'z5IN9kcOrf1fnhhHtXOF.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\z5IN9kcOrf1fnhhHtXOF.jpg', '2023-09-05 06:30:19', '2023-09-05 06:30:19', NULL),
(119, 'business2.jpg', 'UrdMWsMgopCqKUtbndXN.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\UrdMWsMgopCqKUtbndXN.jpg', '2023-09-05 06:30:57', '2023-09-05 06:30:57', NULL),
(120, 'business3.jpg', 'CyXJa8Q4uN6RlbTcBxND.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 157670, 'jpg', 'image/jpeg', 'uploads\\CyXJa8Q4uN6RlbTcBxND.jpg', '2023-09-05 06:31:13', '2023-09-05 06:31:13', NULL),
(121, 'pexels-photo-4256976 (1).jpeg', 'dXTpC18iREjQXfuhrraK.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\dXTpC18iREjQXfuhrraK.jpeg', '2023-09-05 23:20:25', '2023-09-05 23:20:25', NULL),
(122, 'pexels-photo-4256976 (1).jpeg', 'FkhA2sd714WF0noSsmPS.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\FkhA2sd714WF0noSsmPS.jpeg', '2023-09-05 23:23:00', '2023-09-05 23:23:00', NULL),
(123, 'pexels-photo-4256976 (1).jpeg', 'i16W4X7oEJvDD6SLzJVP.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\i16W4X7oEJvDD6SLzJVP.jpeg', '2023-09-05 23:23:44', '2023-09-05 23:23:44', NULL),
(124, 'PICTURE 2.png', '1xmD1kXJGbQ1tKOUD7as.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\1xmD1kXJGbQ1tKOUD7as.png', '2023-09-05 23:24:26', '2023-09-05 23:24:26', NULL),
(125, 'PICTURE 2.png', 'IUXC3uCax8QlWBTC6tQN.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\IUXC3uCax8QlWBTC6tQN.png', '2023-09-05 23:25:28', '2023-09-05 23:25:28', NULL),
(126, 'pexels-photo-4256976 (1).jpeg', 'GDz69zt1UEDMfguEiUs4.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\GDz69zt1UEDMfguEiUs4.jpeg', '2023-09-05 23:47:21', '2023-09-05 23:47:21', NULL),
(127, 'PICTURE 2.png', 'IdlbOUbB1LTaRHCAa1Ux.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\IdlbOUbB1LTaRHCAa1Ux.png', '2023-09-05 23:48:44', '2023-09-05 23:48:44', NULL),
(128, 'pexels-photo-4256976 (1).jpeg', 'mki07zsTQ14WqWAXM0Qd.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\mki07zsTQ14WqWAXM0Qd.jpeg', '2023-09-05 23:48:59', '2023-09-05 23:48:59', NULL),
(129, 'PICTURE 1.jpg', 'G7mIarsDaUUPIiPejZpS.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 99665, 'jpg', 'image/jpeg', 'uploads\\G7mIarsDaUUPIiPejZpS.jpg', '2023-09-06 00:41:04', '2023-09-06 00:41:04', NULL),
(130, 'nuts.png', 'bsErVWJcOjt48SuGfQxn.png', 'd0d10947-27e3-495a-809c-395087b224da', 4161, 'png', 'image/png', 'uploads\\bsErVWJcOjt48SuGfQxn.png', '2023-09-06 00:41:04', '2023-09-06 00:41:04', NULL),
(131, 'crab-icon.png', 'rTjSUOWJoDMu4sn5h07K.png', 'd0d10947-27e3-495a-809c-395087b224da', 11526, 'png', 'image/png', 'uploads\\rTjSUOWJoDMu4sn5h07K.png', '2023-09-06 00:41:04', '2023-09-06 00:41:04', NULL),
(132, 'PICTURE 2 - Copy.png', 'pJGFMv8Ause6kFuyQc4s.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\pJGFMv8Ause6kFuyQc4s.png', '2023-09-06 00:41:04', '2023-09-06 00:41:04', NULL),
(133, 'business1.jpg', 'vnFL7YGh6mWTtW1DMKW0.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\vnFL7YGh6mWTtW1DMKW0.jpg', '2023-09-06 00:41:04', '2023-09-06 00:41:04', NULL),
(134, 'coal.jpg', 'iqdgMiUIzXUifJc8aGQu.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\iqdgMiUIzXUifJc8aGQu.jpg', '2023-09-06 00:51:21', '2023-09-06 00:51:21', NULL),
(135, 'nuts.png', '4j9A3PXvgF5Z5sCUrSC7.png', 'd0d10947-27e3-495a-809c-395087b224da', 4161, 'png', 'image/png', 'uploads\\4j9A3PXvgF5Z5sCUrSC7.png', '2023-09-06 00:51:21', '2023-09-06 00:51:21', NULL),
(136, 'cashew1.jpg', 'm67kSFOSNZd4KZt3tXkW.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\m67kSFOSNZd4KZt3tXkW.jpg', '2023-09-06 00:51:21', '2023-09-06 00:51:21', NULL),
(137, 'gems-icon.png', 'kKdw3hcHYn4D4wSWilbh.png', 'd0d10947-27e3-495a-809c-395087b224da', 8390, 'png', 'image/png', 'uploads\\kKdw3hcHYn4D4wSWilbh.png', '2023-09-06 00:51:36', '2023-09-06 00:51:36', NULL),
(138, 'crab-icon.png', 'DoOnsNu3gkXuC3Y1JpgJ.png', 'd0d10947-27e3-495a-809c-395087b224da', 11526, 'png', 'image/png', 'uploads\\DoOnsNu3gkXuC3Y1JpgJ.png', '2023-09-06 00:51:36', '2023-09-06 00:51:36', NULL),
(139, 'PICTURE 2 - Copy.png', '9tfU46DNHvcJVL4ABoqD.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\9tfU46DNHvcJVL4ABoqD.png', '2023-09-06 00:55:53', '2023-09-06 00:55:53', NULL),
(140, 'PICTURE 2.png', 'Rt7jCcpgXSKKJ2UFt3H0.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\Rt7jCcpgXSKKJ2UFt3H0.png', '2023-09-06 00:55:54', '2023-09-06 00:55:54', NULL),
(141, 'PICTURE 2 - Copy.png', 'hgh7xYs3HpRYtWusoPlF.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\hgh7xYs3HpRYtWusoPlF.png', '2023-09-06 00:59:37', '2023-09-06 00:59:37', NULL),
(142, 'PICTURE 2.png', 'Uu4tyDqdAXDhhWisCq2N.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\Uu4tyDqdAXDhhWisCq2N.png', '2023-09-06 00:59:37', '2023-09-06 00:59:37', NULL),
(143, 'PICTURE 1.jpg', 'YQUnNRKdrdxM2dvvg6Aj.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 99665, 'jpg', 'image/jpeg', 'uploads\\YQUnNRKdrdxM2dvvg6Aj.jpg', '2023-09-06 00:59:37', '2023-09-06 00:59:37', NULL),
(144, 'business3.jpg', '2ZJcKRlhW3HB4YgzenX6.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 157670, 'jpg', 'image/jpeg', 'uploads\\2ZJcKRlhW3HB4YgzenX6.jpg', '2023-09-06 00:59:37', '2023-09-06 00:59:37', NULL),
(145, 'PICTURE 2 - Copy.png', 'vX1AzHAhLOOWd5I6mXA7.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\vX1AzHAhLOOWd5I6mXA7.png', '2023-09-06 01:10:44', '2023-09-06 01:10:44', NULL),
(146, 'PICTURE 2.png', 'KykdJaKYonmwIVl8BR5w.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\KykdJaKYonmwIVl8BR5w.png', '2023-09-06 01:10:44', '2023-09-06 01:10:44', NULL),
(147, 'PICTURE 1.jpg', 'oHfokhf9qdSUpVNTZ150.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 99665, 'jpg', 'image/jpeg', 'uploads\\oHfokhf9qdSUpVNTZ150.jpg', '2023-09-06 01:10:44', '2023-09-06 01:10:44', NULL),
(148, 'image123.jpg', 'g5JZGKLMu5ZHLpvmyJq7.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\g5JZGKLMu5ZHLpvmyJq7.jpg', '2023-09-06 01:20:45', '2023-09-06 01:20:45', NULL),
(149, 'business1.jpg', 'yQPrdnzW97QYbh0jwluB.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\yQPrdnzW97QYbh0jwluB.jpg', '2023-09-06 01:23:48', '2023-09-06 01:23:48', NULL),
(150, 'pexels-photo-4256976 (1).jpeg', 'KhO05wdTXh5GtORXXAep.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\KhO05wdTXh5GtORXXAep.jpeg', '2023-09-06 01:24:11', '2023-09-06 01:24:11', NULL),
(151, 'abt1.jpg', 'ij0DvNrcj4piFP3ePLuK.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 353112, 'jpg', 'image/jpeg', 'uploads\\ij0DvNrcj4piFP3ePLuK.jpg', '2023-09-06 01:30:39', '2023-09-06 01:30:39', NULL),
(152, 'abt2.jpg', 'eV2zHy7VUSVbmRVv44TI.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 193544, 'jpg', 'image/jpeg', 'uploads\\eV2zHy7VUSVbmRVv44TI.jpg', '2023-09-06 01:30:39', '2023-09-06 01:30:39', NULL),
(153, 'abt3.jpg', 'sI1wrMjdvLhaCN3BAMVb.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 438252, 'jpg', 'image/jpeg', 'uploads\\sI1wrMjdvLhaCN3BAMVb.jpg', '2023-09-06 01:30:39', '2023-09-06 01:30:39', NULL),
(154, 'business.jpg', 'dkujCzn3IH8qyDMTBJOA.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 527214, 'jpg', 'image/jpeg', 'uploads\\dkujCzn3IH8qyDMTBJOA.jpg', '2023-09-06 01:37:26', '2023-09-06 01:37:26', NULL),
(155, 'abt1.jpg', 'F5njD5Xrffy5v9afzGwh.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 353112, 'jpg', 'image/jpeg', 'uploads\\F5njD5Xrffy5v9afzGwh.jpg', '2023-09-06 01:38:01', '2023-09-06 01:38:01', NULL),
(156, 'abt2.jpg', 'q3MwEGYgSppZQGoSIPo2.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 193544, 'jpg', 'image/jpeg', 'uploads\\q3MwEGYgSppZQGoSIPo2.jpg', '2023-09-06 01:38:01', '2023-09-06 01:38:01', NULL),
(157, 'abt3.jpg', 'yQtMfvZsjGcBNxpGAh5u.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 438252, 'jpg', 'image/jpeg', 'uploads\\yQtMfvZsjGcBNxpGAh5u.jpg', '2023-09-06 01:38:01', '2023-09-06 01:38:01', NULL),
(158, 'abt1.jpg', 'rZsm1oafs0SfJFaLpPKT.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 353112, 'jpg', 'image/jpeg', 'uploads\\rZsm1oafs0SfJFaLpPKT.jpg', '2023-09-06 04:36:35', '2023-09-06 04:36:35', NULL),
(159, 'abt1.jpg', 'Y4Ncr8gq3VFCD5dHD6fs.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 353112, 'jpg', 'image/jpeg', 'uploads\\Y4Ncr8gq3VFCD5dHD6fs.jpg', '2023-09-06 04:36:35', '2023-09-06 04:36:35', NULL),
(160, 'business3.jpg', '9FWAV65ZLFTZzNSMNAVH.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 157670, 'jpg', 'image/jpeg', 'uploads\\9FWAV65ZLFTZzNSMNAVH.jpg', '2023-09-06 04:37:01', '2023-09-06 04:37:01', NULL),
(161, 'metal.jpg', 'QatZSycavKknFnVFHyeu.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 491352, 'jpg', 'image/jpeg', 'uploads\\QatZSycavKknFnVFHyeu.jpg', '2023-09-06 04:37:01', '2023-09-06 04:37:01', NULL),
(162, 'metal.jpg', 'M3Y7pDjkahuQlvo9mTOB.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 491352, 'jpg', 'image/jpeg', 'uploads\\M3Y7pDjkahuQlvo9mTOB.jpg', '2023-09-06 04:37:30', '2023-09-06 04:37:30', NULL),
(163, 'abt2.jpg', 'tIUDgazNBP0LkCJhmpHh.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 193544, 'jpg', 'image/jpeg', 'uploads\\tIUDgazNBP0LkCJhmpHh.jpg', '2023-09-06 04:37:30', '2023-09-06 04:37:30', NULL),
(164, 'metal.jpg', 'bC8BLyoptxXEhZwmiEzY.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 491352, 'jpg', 'image/jpeg', 'uploads\\bC8BLyoptxXEhZwmiEzY.jpg', '2023-09-06 04:38:31', '2023-09-06 04:38:31', NULL),
(165, 'metal-icon.png', '3QkCS0ftH1mVrbfHrGbk.png', 'd0d10947-27e3-495a-809c-395087b224da', 1004, 'png', 'image/png', 'uploads\\3QkCS0ftH1mVrbfHrGbk.png', '2023-09-06 04:38:31', '2023-09-06 04:38:31', NULL),
(166, 'cashew1.jpg', 'iO3V5PRDuY4MvgDiuBbd.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\iO3V5PRDuY4MvgDiuBbd.jpg', '2023-09-07 04:13:46', '2023-09-07 04:13:46', NULL),
(167, 'business2.jpg', 'hDj6UXcOylQbwn3bTcFz.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\hDj6UXcOylQbwn3bTcFz.jpg', '2023-09-07 04:13:46', '2023-09-07 04:13:46', NULL),
(168, 'Indotradex (1).pdf', 'enevNZdP9r124P6dRtm5.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\enevNZdP9r124P6dRtm5.pdf', '2023-09-07 23:43:41', '2023-09-07 23:43:41', NULL),
(169, 'PICTURE 2 - Copy.png', 'kIto8nj20WfwJhUDxul7.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\kIto8nj20WfwJhUDxul7.png', '2023-09-08 04:51:50', '2023-09-08 04:51:50', NULL),
(170, 'business1.jpg', 'LaO20Jzd6p32ytwhBaLb.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\LaO20Jzd6p32ytwhBaLb.jpg', '2023-09-08 04:51:50', '2023-09-08 04:51:50', NULL),
(171, 'PICTURE 2 - Copy.png', '6CVg4oV88FLwFOACAhLg.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\6CVg4oV88FLwFOACAhLg.png', '2023-09-08 04:54:08', '2023-09-08 04:54:08', NULL),
(172, 'business1.jpg', '6HUWPoe3I9r3K4kVk8Aj.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\6HUWPoe3I9r3K4kVk8Aj.jpg', '2023-09-08 04:54:08', '2023-09-08 04:54:08', NULL),
(173, 'PICTURE 2 - Copy.png', 'NOqVfPJb6acF6KQ5GDFg.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\NOqVfPJb6acF6KQ5GDFg.png', '2023-09-08 04:54:47', '2023-09-08 04:54:47', NULL),
(174, 'business1.jpg', 'YugWJL7lmFjZQV25W4Ew.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\YugWJL7lmFjZQV25W4Ew.jpg', '2023-09-08 04:54:47', '2023-09-08 04:54:47', NULL),
(175, 'PICTURE 2 - Copy.png', 'IKXXJxt8SdVfiloPIMai.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\IKXXJxt8SdVfiloPIMai.png', '2023-09-08 04:55:29', '2023-09-08 04:55:29', NULL),
(176, 'business1.jpg', '76zBnXWhZmTWo2hFzbaK.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\76zBnXWhZmTWo2hFzbaK.jpg', '2023-09-08 04:55:29', '2023-09-08 04:55:29', NULL),
(177, 'PICTURE 2 - Copy.png', 'Z0j9HOTwE98AyfK9JdsI.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\Z0j9HOTwE98AyfK9JdsI.png', '2023-09-08 04:55:39', '2023-09-08 04:55:39', NULL),
(178, 'business1.jpg', 'DowzoIJeTTv1BYEHBswV.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\DowzoIJeTTv1BYEHBswV.jpg', '2023-09-08 04:55:39', '2023-09-08 04:55:39', NULL),
(179, 'PICTURE 2 - Copy.png', 'GoYiS7VSNybUPdHXcHmG.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\GoYiS7VSNybUPdHXcHmG.png', '2023-09-08 04:57:06', '2023-09-08 04:57:06', NULL),
(180, 'coal.jpg', 'goF0wIXSNKQpMW3agmLx.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\goF0wIXSNKQpMW3agmLx.jpg', '2023-09-08 04:57:06', '2023-09-08 04:57:06', NULL),
(181, 'PICTURE 2 - Copy.png', 'm7yEXo8duuxg3b9610sE.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\m7yEXo8duuxg3b9610sE.png', '2023-09-08 04:58:22', '2023-09-08 04:58:22', NULL),
(182, 'coal.jpg', '53JfZX2ZZDEQDfOm1GFs.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\53JfZX2ZZDEQDfOm1GFs.jpg', '2023-09-08 04:58:22', '2023-09-08 04:58:22', NULL),
(183, 'PICTURE 2 - Copy.png', 'ivz0LFqrINlcMIKE4n3T.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\ivz0LFqrINlcMIKE4n3T.png', '2023-09-08 04:58:32', '2023-09-08 04:58:32', NULL),
(184, 'coal.jpg', '83sjO1J2ZhFd0BKAqjDh.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\83sjO1J2ZhFd0BKAqjDh.jpg', '2023-09-08 04:58:32', '2023-09-08 04:58:32', NULL),
(185, 'PICTURE 2 - Copy.png', 'xZjp8eNY19uf6W8ccCab.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\xZjp8eNY19uf6W8ccCab.png', '2023-09-08 04:59:31', '2023-09-08 04:59:31', NULL),
(186, 'coal.jpg', 'PHxSDz8A6n9AmbIZc4sf.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\PHxSDz8A6n9AmbIZc4sf.jpg', '2023-09-08 04:59:32', '2023-09-08 04:59:32', NULL),
(187, 'PICTURE 2 - Copy.png', 'cKgnuu5KsyEaRXNVz5ao.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\cKgnuu5KsyEaRXNVz5ao.png', '2023-09-08 05:02:23', '2023-09-08 05:02:23', NULL),
(188, 'coal.jpg', 'hipRA8fWjb3HOSCol22S.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\hipRA8fWjb3HOSCol22S.jpg', '2023-09-08 05:02:23', '2023-09-08 05:02:23', NULL),
(189, 'pexels-photo-4256976 (1).jpeg', '1Cm1tkqSC1McTYwxWRRS.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\1Cm1tkqSC1McTYwxWRRS.jpeg', '2023-09-08 05:43:41', '2023-09-08 05:43:41', NULL),
(190, 'bakers8 (1).webp', 'JBPNRhSjXA4gKdwRnW9N.webp', 'd0d10947-27e3-495a-809c-395087b224da', 31724, 'webp', 'image/webp', 'uploads\\JBPNRhSjXA4gKdwRnW9N.webp', '2023-09-08 05:43:41', '2023-09-08 05:43:41', NULL),
(191, 'cashew1.jpg', 'JhDx17Bq6VG3KZYchL1v.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\JhDx17Bq6VG3KZYchL1v.jpg', '2023-09-09 03:51:07', '2023-09-09 03:51:07', NULL),
(192, 'pexels-photo-4256976 (1) - Copy.jpeg', 'pDiXJje7F1OFVe9MtlJ6.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\pDiXJje7F1OFVe9MtlJ6.jpeg', '2023-09-09 03:51:07', '2023-09-09 03:51:07', NULL),
(193, 'PICTURE 2.png', 'h1mwA65TiwP64iTm0lbu.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\h1mwA65TiwP64iTm0lbu.png', '2023-09-09 03:52:18', '2023-09-09 03:52:18', NULL),
(194, 'pexels-photo-4256976 (1).jpeg', 'i7m29X8EzpoPXLSGVlMb.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\i7m29X8EzpoPXLSGVlMb.jpeg', '2023-09-09 03:52:18', '2023-09-09 03:52:18', NULL),
(195, 'cashew1.jpg', 'BKi3QrQY4Q211nn3oJOt.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\BKi3QrQY4Q211nn3oJOt.jpg', '2023-09-09 03:56:39', '2023-09-09 03:56:39', NULL),
(196, 'business1.jpg', 'abVeqyVaVFVrQROUixN3.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\abVeqyVaVFVrQROUixN3.jpg', '2023-09-09 03:56:39', '2023-09-09 03:56:39', NULL),
(197, 'pexels-photo-4256976 (1).jpeg', 'I9lIU6f7Q3HoOJ5MpArC.jpeg', '61914006-0a01-4b4d-89a1-21ab865dfff3', 381663, 'jpeg', 'image/jpeg', 'uploads\\I9lIU6f7Q3HoOJ5MpArC.jpeg', '2023-09-10 23:59:50', '2023-09-10 23:59:50', NULL),
(198, 'pexels-photo-4256976 (1).jpeg', 'ITUSVzSv6XCtTP7I8N9Z.jpeg', '61914006-0a01-4b4d-89a1-21ab865dfff3', 381663, 'jpeg', 'image/jpeg', 'uploads\\ITUSVzSv6XCtTP7I8N9Z.jpeg', '2023-09-10 23:59:50', '2023-09-10 23:59:50', NULL),
(199, 'Free Vector _ Cute astronaut working on laptop cartoon vector icon illustration science technology icon isolated.jfif', 'YPU0Bowdsg8zo239diDX.jfif', 'd0d10947-27e3-495a-809c-395087b224da', 34208, 'jfif', 'image/jpeg', 'uploads\\YPU0Bowdsg8zo239diDX.jfif', '2023-09-11 04:30:59', '2023-09-11 04:30:59', NULL),
(200, 'cashew1.jpg', 'qiM28yU8FxNKR7I6p7u5.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\qiM28yU8FxNKR7I6p7u5.jpg', '2023-09-11 04:30:59', '2023-09-11 04:30:59', NULL),
(201, 'business2.jpg', '66rc7tlYJTUxPN70xEk1.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\66rc7tlYJTUxPN70xEk1.jpg', '2023-09-11 04:39:27', '2023-09-11 04:39:27', NULL),
(202, 'business1.jpg', 'VZITJKID2LgDjs6uzh2z.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\VZITJKID2LgDjs6uzh2z.jpg', '2023-09-11 04:39:27', '2023-09-11 04:39:27', NULL),
(203, 'PICTURE 2 - Copy.png', 'DltKQcVRtErfHVHI2NqG.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\DltKQcVRtErfHVHI2NqG.png', '2023-09-11 04:40:24', '2023-09-11 04:40:24', NULL),
(204, 'business2.jpg', '6MPCPwY0mN3BbSoPX8Z9.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\6MPCPwY0mN3BbSoPX8Z9.jpg', '2023-09-11 04:40:24', '2023-09-11 04:40:24', NULL),
(205, 'business2.jpg', 'nuw1f6t0YOz8dnS0EPil.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\nuw1f6t0YOz8dnS0EPil.jpg', '2023-09-11 04:45:51', '2023-09-11 04:45:51', NULL),
(206, 'business1.jpg', '7EKLA0FKsNDssxfXiK8J.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 273716, 'jpg', 'image/jpeg', 'uploads\\7EKLA0FKsNDssxfXiK8J.jpg', '2023-09-11 04:45:51', '2023-09-11 04:45:51', NULL),
(207, 'gems-icon.png', 'pWglqlRM0VkGOUNYgnZ2.png', 'd0d10947-27e3-495a-809c-395087b224da', 8390, 'png', 'image/png', 'uploads\\pWglqlRM0VkGOUNYgnZ2.png', '2023-09-11 04:49:52', '2023-09-11 04:49:52', NULL),
(208, 'hotel-icon.png', 'TAFYZhOG4NpVTQF33SLM.png', 'd0d10947-27e3-495a-809c-395087b224da', 5926, 'png', 'image/png', 'uploads\\TAFYZhOG4NpVTQF33SLM.png', '2023-09-11 04:49:52', '2023-09-11 04:49:52', NULL),
(209, 'PICTURE 2 - Copy.png', 'zOECDIhqyT8LDdoMBVRU.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\zOECDIhqyT8LDdoMBVRU.png', '2023-09-11 11:04:18', '2023-09-11 11:04:18', NULL),
(210, 'business2.jpg', '1DYiuTwqs23MpqQqT5Qs.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\1DYiuTwqs23MpqQqT5Qs.jpg', '2023-09-11 11:04:18', '2023-09-11 11:04:18', NULL),
(211, 'business3.jpg', 'cxMkpU650KHqoCFybRRi.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 157670, 'jpg', 'image/jpeg', 'uploads\\cxMkpU650KHqoCFybRRi.jpg', '2023-09-11 11:05:12', '2023-09-11 11:05:12', NULL),
(212, 'business2.jpg', 'sHe6C2nbgpWZo8syuVZH.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\sHe6C2nbgpWZo8syuVZH.jpg', '2023-09-11 11:05:12', '2023-09-11 11:05:12', NULL),
(213, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'xNugNLbKahbzF4oT219k.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\xNugNLbKahbzF4oT219k.jpeg', '2023-09-12 00:00:13', '2023-09-12 00:00:13', NULL),
(214, 'PICTURE 2 - Copy.png', 'wb64kOrDKLoIEmc8pS6K.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\wb64kOrDKLoIEmc8pS6K.png', '2023-09-12 00:00:13', '2023-09-12 00:00:13', NULL),
(215, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'RkMmejMx4YzIWMlSFH26.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\RkMmejMx4YzIWMlSFH26.jpeg', '2023-09-12 00:01:23', '2023-09-12 00:01:23', NULL),
(216, 'PICTURE 2 - Copy.png', 'OouXnwOCPaGFVlMHUzm0.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\OouXnwOCPaGFVlMHUzm0.png', '2023-09-12 00:01:23', '2023-09-12 00:01:23', NULL),
(217, 'cashew1.jpg', '2BL7bEcUy82Icmg5mLT6.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\2BL7bEcUy82Icmg5mLT6.jpg', '2023-09-12 00:22:01', '2023-09-12 00:22:01', NULL),
(218, 'nuts.png', 'KNFQxubVwOSuc7CgQoKC.png', 'd0d10947-27e3-495a-809c-395087b224da', 4161, 'png', 'image/png', 'uploads\\KNFQxubVwOSuc7CgQoKC.png', '2023-09-12 00:22:01', '2023-09-12 00:22:01', NULL),
(219, 'photo-1542990253-a781e04c0082.jpeg', 'X34T6DOIxTZ3mCsA32sD.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 291457, 'jpeg', 'image/jpeg', 'uploads\\X34T6DOIxTZ3mCsA32sD.jpeg', '2023-09-12 00:34:20', '2023-09-12 00:34:20', NULL),
(220, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', '6OpmoxMTgGHm2BoEQvn4.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\6OpmoxMTgGHm2BoEQvn4.jpeg', '2023-09-12 00:34:20', '2023-09-12 00:34:20', NULL),
(221, 'pexels-photo-4040644.jpeg', 'e0aEhGSTieMRN2eULRNC.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 492507, 'jpeg', 'image/jpeg', 'uploads\\e0aEhGSTieMRN2eULRNC.jpeg', '2023-09-12 00:35:47', '2023-09-12 00:35:47', NULL),
(222, 'pexels-photo-8148253.jpeg', '6RsrsIiDDj577GO4nrj3.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 766321, 'jpeg', 'image/jpeg', 'uploads\\6RsrsIiDDj577GO4nrj3.jpeg', '2023-09-12 00:35:48', '2023-09-12 00:35:48', NULL),
(223, 'business2.jpg', 'A6r2JV2IUOzPZc5oAGRH.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\A6r2JV2IUOzPZc5oAGRH.jpg', '2023-09-12 01:35:20', '2023-09-12 01:35:20', NULL),
(224, 'PICTURE 2 - Copy.png', 'Ec5q9XLwXB41up4hN7LY.png', 'd0d10947-27e3-495a-809c-395087b224da', 51729, 'png', 'image/png', 'uploads\\Ec5q9XLwXB41up4hN7LY.png', '2023-09-12 01:35:20', '2023-09-12 01:35:20', NULL),
(225, 'pexels-photo-8148253.jpeg', 'CXnXOkiR9fwsWdhk1cHO.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 766321, 'jpeg', 'image/jpeg', 'uploads\\CXnXOkiR9fwsWdhk1cHO.jpeg', '2023-09-12 01:38:40', '2023-09-12 01:38:40', NULL),
(226, 'business2.jpg', 'wd2pFEb9ph57K5yAbQXq.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 134217, 'jpg', 'image/jpeg', 'uploads\\wd2pFEb9ph57K5yAbQXq.jpg', '2023-09-12 01:38:40', '2023-09-12 01:38:40', NULL),
(227, 'cashew1.jpg', 'W9y8WYQXhGOB5LVqxgD6.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 344903, 'jpg', 'image/jpeg', 'uploads\\W9y8WYQXhGOB5LVqxgD6.jpg', '2023-09-13 00:25:11', '2023-09-13 00:25:11', NULL),
(228, 'nuts.png', 'NYpmImjxKs1uYVQubbZr.png', 'd0d10947-27e3-495a-809c-395087b224da', 4161, 'png', 'image/png', 'uploads\\NYpmImjxKs1uYVQubbZr.png', '2023-09-13 00:25:11', '2023-09-13 00:25:11', NULL),
(229, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'TzKSAAozZj9a945zlrKn.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\TzKSAAozZj9a945zlrKn.jpeg', '2023-09-13 03:12:43', '2023-09-13 03:12:43', NULL),
(230, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'TBQbSVD8W9RtK4Ks1KtJ.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\TBQbSVD8W9RtK4Ks1KtJ.jpeg', '2023-09-13 03:12:43', '2023-09-13 03:12:43', NULL),
(231, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'wxDhTC16lSfd352BB4yI.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\wxDhTC16lSfd352BB4yI.jpeg', '2023-09-13 03:15:40', '2023-09-13 03:15:40', NULL);
INSERT INTO `uploads` (`id`, `file_original_name`, `file_name`, `user_id`, `file_size`, `extension`, `type`, `filepath`, `created_at`, `updated_at`, `deleted_at`) VALUES
(232, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', '8Xx5GMENKeciEj55pEn5.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\8Xx5GMENKeciEj55pEn5.jpeg', '2023-09-13 03:15:40', '2023-09-13 03:15:40', NULL),
(233, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'ZgDlS7mxtrX0oB00DOYH.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\ZgDlS7mxtrX0oB00DOYH.jpeg', '2023-09-13 03:31:14', '2023-09-13 03:31:14', NULL),
(234, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'XemzHAoCUR0gmVG0Kee5.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\XemzHAoCUR0gmVG0Kee5.jpeg', '2023-09-13 03:31:14', '2023-09-13 03:31:14', NULL),
(235, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'a8VCSPzwNrtQWgSFU3FL.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\a8VCSPzwNrtQWgSFU3FL.jpeg', '2023-09-13 04:27:26', '2023-09-13 04:27:26', NULL),
(236, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'iInQyaJ8r6iW87zxBDfy.jpeg', 'd0d10947-27e3-495a-809c-395087b224da', 381663, 'jpeg', 'image/jpeg', 'uploads\\iInQyaJ8r6iW87zxBDfy.jpeg', '2023-09-13 04:27:26', '2023-09-13 04:27:26', NULL),
(237, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', 'rM4NpiZm0onhFO6h2Zwz.jpeg', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 381663, 'jpeg', 'image/jpeg', 'uploads\\rM4NpiZm0onhFO6h2Zwz.jpeg', '2023-09-13 23:52:01', '2023-09-13 23:52:01', NULL),
(238, 'pexels-photo-4256976 (1) - Copy - Copy.jpeg', '92AfB4eLVBpUiLvyVit6.jpeg', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 381663, 'jpeg', 'image/jpeg', 'uploads\\92AfB4eLVBpUiLvyVit6.jpeg', '2023-09-13 23:52:01', '2023-09-13 23:52:01', NULL),
(239, 'enevNZdP9r124P6dRtm5 (1).pdf', 'jiUQimGLx5P72uq8iFVs.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\jiUQimGLx5P72uq8iFVs.pdf', '2023-09-14 03:57:17', '2023-09-14 03:57:17', NULL),
(240, 'enevNZdP9r124P6dRtm5.pdf', 'JS0TwSk2BpbPZn3a5gNH.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\JS0TwSk2BpbPZn3a5gNH.pdf', '2023-09-14 03:59:43', '2023-09-14 03:59:43', NULL),
(241, '8cpBcKGlyG6uwABuMiAB.pdf', '0CD3vTfg4689VeO72wOI.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\0CD3vTfg4689VeO72wOI.pdf', '2023-09-14 04:05:14', '2023-09-14 04:05:14', NULL),
(242, '8cpBcKGlyG6uwABuMiAB.pdf', 'GO5ilxRtl4XLMLWHuOGQ.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\GO5ilxRtl4XLMLWHuOGQ.pdf', '2023-09-14 04:07:04', '2023-09-14 04:07:04', NULL),
(243, '8cpBcKGlyG6uwABuMiAB.pdf', '1oRcu5gAHV6wRsocw3l9.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\1oRcu5gAHV6wRsocw3l9.pdf', '2023-09-14 04:07:31', '2023-09-14 04:07:31', NULL),
(244, '8cpBcKGlyG6uwABuMiAB.pdf', '0V2iG4lGI6jyWysYbW9j.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\0V2iG4lGI6jyWysYbW9j.pdf', '2023-09-14 04:08:26', '2023-09-14 04:08:26', NULL),
(245, 'enevNZdP9r124P6dRtm5 (1).pdf', 'lQ6cpC5WJdTiRFfMMnUr.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\lQ6cpC5WJdTiRFfMMnUr.pdf', '2023-09-14 04:09:03', '2023-09-14 04:09:03', NULL),
(246, '8cpBcKGlyG6uwABuMiAB.pdf', 'WC2fHL7FhuOrEeqkerBV.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\WC2fHL7FhuOrEeqkerBV.pdf', '2023-09-14 04:09:03', '2023-09-14 04:09:03', NULL),
(247, 'Silver Trading Project Story.pdf', 'EVkpiZVKQ8KXHJpAQvMs.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\EVkpiZVKQ8KXHJpAQvMs.pdf', '2023-09-14 04:12:14', '2023-09-14 04:12:14', NULL),
(248, 'Silver Trading Project Story.pdf', 'tJOMW8brUaVUR0frQGZu.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\tJOMW8brUaVUR0frQGZu.pdf', '2023-09-14 04:12:14', '2023-09-14 04:12:14', NULL),
(249, 'Silver Trading Project Story.pdf', 'zbbzwM02ojmurKVIrmFF.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\zbbzwM02ojmurKVIrmFF.pdf', '2023-09-14 04:13:25', '2023-09-14 04:13:25', NULL),
(250, 'enevNZdP9r124P6dRtm5 (1).pdf', 'LpaHYSHdd5DB32kG5h9c.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\LpaHYSHdd5DB32kG5h9c.pdf', '2023-09-14 04:13:25', '2023-09-14 04:13:25', NULL),
(251, 'Silver Trading Project Story.pdf', 'Z8uJzFD0qhJq6HFB11S7.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\Z8uJzFD0qhJq6HFB11S7.pdf', '2023-09-14 04:16:07', '2023-09-14 04:16:07', NULL),
(252, 'Silver Trading Project Story.pdf', 'GeAIAiWYV6xN0BA5eU9n.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\GeAIAiWYV6xN0BA5eU9n.pdf', '2023-09-14 04:16:07', '2023-09-14 04:16:07', NULL),
(253, 'Silver Trading Project Story.pdf', 'yLVWtIvmgA9KSDOVlOzc.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\yLVWtIvmgA9KSDOVlOzc.pdf', '2023-09-14 04:17:15', '2023-09-14 04:17:15', NULL),
(254, 'enevNZdP9r124P6dRtm5 (1).pdf', 'U00dgKvn4yVqvYx73VZj.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 11715, 'pdf', 'application/pdf', 'uploads\\U00dgKvn4yVqvYx73VZj.pdf', '2023-09-14 04:17:15', '2023-09-14 04:17:15', NULL),
(255, 'Silver Trading Project Story.pdf', 'DnmVM8voPsAYj8BZ0YaX.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\DnmVM8voPsAYj8BZ0YaX.pdf', '2023-09-14 04:19:39', '2023-09-14 04:19:39', NULL),
(256, 'Silver Trading Project Story.pdf', 'Cb9ombIvxhZIwvNk5zR1.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\Cb9ombIvxhZIwvNk5zR1.pdf', '2023-09-14 04:19:39', '2023-09-14 04:19:39', NULL),
(257, 'Silver Trading Project Story.pdf', 'RlDCfAhkzPZMyqx3nd0a.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\RlDCfAhkzPZMyqx3nd0a.pdf', '2023-09-14 04:19:53', '2023-09-14 04:19:53', NULL),
(258, 'Silver Trading Project Story.pdf', 'WsdvK5EzRQuQZt5johpJ.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\WsdvK5EzRQuQZt5johpJ.pdf', '2023-09-14 04:19:53', '2023-09-14 04:19:53', NULL),
(259, 'Silver Trading Project Story.pdf', 'md5SOW2Jhv6d6lR4TgxS.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\md5SOW2Jhv6d6lR4TgxS.pdf', '2023-09-14 04:20:12', '2023-09-14 04:20:12', NULL),
(260, 'Silver Trading Project Story.pdf', 'uqD3p52YhlQJO9dm8bpB.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\uqD3p52YhlQJO9dm8bpB.pdf', '2023-09-14 04:20:12', '2023-09-14 04:20:12', NULL),
(261, 'Silver Trading Project Story.pdf', 'Eej3lUi000N5xuryqK7S.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\Eej3lUi000N5xuryqK7S.pdf', '2023-09-14 04:20:27', '2023-09-14 04:20:27', NULL),
(262, 'Silver Trading Project Story.pdf', 'dgkbCGxxiuWzHAsCCMWQ.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\dgkbCGxxiuWzHAsCCMWQ.pdf', '2023-09-14 04:20:27', '2023-09-14 04:20:27', NULL),
(263, 'Indotradex Website Document1.pdf', 'oQrMUBBboY7DpcZAGEXP.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 258285, 'pdf', 'application/pdf', 'uploads\\oQrMUBBboY7DpcZAGEXP.pdf', '2023-09-14 04:22:11', '2023-09-14 04:22:11', NULL),
(264, 'Indotradex Website Document1.pdf', 'dUEPrmCj7qW2ohJjid2f.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 258285, 'pdf', 'application/pdf', 'uploads\\dUEPrmCj7qW2ohJjid2f.pdf', '2023-09-14 04:22:11', '2023-09-14 04:22:11', NULL),
(265, 'Silver Trading Project Story.pdf', 'GK7U2tBBEva9IpW6ec3O.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\GK7U2tBBEva9IpW6ec3O.pdf', '2023-09-14 04:40:03', '2023-09-14 04:40:03', NULL),
(266, 'Silver Trading Project Story.pdf', 'ZYV3xgfvswpzsPjBRNux.pdf', '7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 105576, 'pdf', 'application/pdf', 'uploads\\ZYV3xgfvswpzsPjBRNux.pdf', '2023-09-14 04:40:03', '2023-09-14 04:40:03', NULL),
(267, 'coal.jpg', 'vdTUPTFFqANucUlBw926.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 239069, 'jpg', 'image/jpeg', 'uploads\\vdTUPTFFqANucUlBw926.jpg', '2023-09-14 23:38:07', '2023-09-14 23:38:07', NULL),
(268, 'crab-icon.png', 'gb1azidtcdOHcq1tsskn.png', 'd0d10947-27e3-495a-809c-395087b224da', 11526, 'png', 'image/png', 'uploads\\gb1azidtcdOHcq1tsskn.png', '2023-09-14 23:38:07', '2023-09-14 23:38:07', NULL),
(269, 'Indotradex Website Document1.pdf', 'R1mNCReZPnYB0P8pdpBk.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\R1mNCReZPnYB0P8pdpBk.pdf', '2023-09-14 23:49:27', '2023-09-14 23:49:27', NULL),
(270, 'Indotradex Website Document1.pdf', 'D92bBoDrLpF68iB2Wg2C.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\D92bBoDrLpF68iB2Wg2C.pdf', '2023-09-15 00:59:26', '2023-09-15 00:59:26', NULL),
(271, 'Silver Trading Project Story.pdf', 'xerBWZEWkerpSrg8b4vg.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 105576, 'pdf', 'application/pdf', 'uploads\\xerBWZEWkerpSrg8b4vg.pdf', '2023-09-15 00:59:26', '2023-09-15 00:59:26', NULL),
(272, 'Indotradex Website Document1.pdf', 'kXnuXJ6n5h2vVOAA7P6x.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\kXnuXJ6n5h2vVOAA7P6x.pdf', '2023-09-15 00:59:35', '2023-09-15 00:59:35', NULL),
(273, 'Silver Trading Project Story.pdf', 'fWYIN8lRK6HGi6lGwDWz.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 105576, 'pdf', 'application/pdf', 'uploads\\fWYIN8lRK6HGi6lGwDWz.pdf', '2023-09-15 00:59:35', '2023-09-15 00:59:35', NULL),
(274, 'Indotradex Website Document1.pdf', 'Yxm1aZePsKzdTWEDOp67.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\Yxm1aZePsKzdTWEDOp67.pdf', '2023-09-15 00:59:36', '2023-09-15 00:59:36', NULL),
(275, 'Silver Trading Project Story.pdf', 'hf3vkT8dJJxOvbwiGx2B.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 105576, 'pdf', 'application/pdf', 'uploads\\hf3vkT8dJJxOvbwiGx2B.pdf', '2023-09-15 00:59:36', '2023-09-15 00:59:36', NULL),
(276, 'Indotradex Website Document1.pdf', 'Iun0nR1bS15Njz010Scv.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\Iun0nR1bS15Njz010Scv.pdf', '2023-09-15 00:59:36', '2023-09-15 00:59:36', NULL),
(277, 'Silver Trading Project Story.pdf', 'UhWyp8Wi8JVdxR1EHbWK.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 105576, 'pdf', 'application/pdf', 'uploads\\UhWyp8Wi8JVdxR1EHbWK.pdf', '2023-09-15 00:59:36', '2023-09-15 00:59:36', NULL),
(278, 'Indotradex Website Document1.pdf', 'mZiyd6lGxEodtvAkoaKi.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 258285, 'pdf', 'application/pdf', 'uploads\\mZiyd6lGxEodtvAkoaKi.pdf', '2023-09-15 01:00:18', '2023-09-15 01:00:18', NULL),
(279, 'Silver Trading Project Story.pdf', 'lDWzqjVBnQeMKg447S3K.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 105576, 'pdf', 'application/pdf', 'uploads\\lDWzqjVBnQeMKg447S3K.pdf', '2023-09-15 01:00:18', '2023-09-15 01:00:18', NULL),
(280, 'crab-icon.png', 'bhX39MJGVDqqt7Gqajw9.png', 'd0d10947-27e3-495a-809c-395087b224da', 11526, 'png', 'image/png', 'uploads\\bhX39MJGVDqqt7Gqajw9.png', '2023-09-15 01:37:39', '2023-09-15 01:37:39', NULL),
(281, 'image123.jpg', 'I8Z54fUNGMXypvbZSWDy.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 124193, 'jpg', 'image/jpeg', 'uploads\\I8Z54fUNGMXypvbZSWDy.jpg', '2023-09-15 01:37:39', '2023-09-15 01:37:39', NULL),
(282, 'pexels-photo-4256976 (1).jpeg', 'btUIlXCNtMOcyti060Ru.jpeg', 'a33204c3-879e-4644-af7e-89755a8a2084', 381663, 'jpeg', 'image/jpeg', 'uploads\\btUIlXCNtMOcyti060Ru.jpeg', '2023-09-15 06:57:27', '2023-09-15 06:57:27', NULL),
(283, 'pexels-photo-4256976 (1).jpeg', 'RkmzpXEOc7ofnVcMeHHv.jpeg', 'a33204c3-879e-4644-af7e-89755a8a2084', 381663, 'jpeg', 'image/jpeg', 'uploads\\RkmzpXEOc7ofnVcMeHHv.jpeg', '2023-09-15 06:57:27', '2023-09-15 06:57:27', NULL),
(284, 'PermanentRecruitment - Copy.jpg', 'sE0gQYtr4OKggaoRv4YU.jpg', 'a33204c3-879e-4644-af7e-89755a8a2084', 240694, 'jpg', 'image/jpeg', 'uploads\\sE0gQYtr4OKggaoRv4YU.jpg', '2023-09-15 06:59:57', '2023-09-15 06:59:57', NULL),
(285, 'crab-icon.png', 'bZ2d0eDgFu6j4Mj7xcbJ.png', 'a33204c3-879e-4644-af7e-89755a8a2084', 11526, 'png', 'image/png', 'uploads\\bZ2d0eDgFu6j4Mj7xcbJ.png', '2023-09-15 06:59:57', '2023-09-15 06:59:57', NULL),
(286, 'crab-icon.png', 'qT6NHIvjQ3MfLl3bb1f3.png', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 11526, 'png', 'image/png', 'uploads\\qT6NHIvjQ3MfLl3bb1f3.png', '2023-09-15 23:44:33', '2023-09-15 23:44:33', NULL),
(287, 'PermanentRecruitment - Copy.jpg', 'YzTxCoEzCs4qKttnFBSV.jpg', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 240694, 'jpg', 'image/jpeg', 'uploads\\YzTxCoEzCs4qKttnFBSV.jpg', '2023-09-15 23:44:34', '2023-09-15 23:44:34', NULL),
(288, 'Free Vector _ Cute astronaut working on laptop cartoon vector icon illustration science technology icon isolated.jfif', '8RlBthMofw7bJCsF3YKH.jfif', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 34208, 'jfif', 'image/jpeg', 'uploads\\8RlBthMofw7bJCsF3YKH.jfif', '2023-09-16 01:00:02', '2023-09-16 01:00:02', NULL),
(289, 'Cute Astronaut Working On Laptop Cartoon Stock Vector (Royalty Free) 2018542067 _ Shutterstock.png', 'DYhx1Ab1oCQUWBgq8tcM.png', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 46682, 'png', 'image/png', 'uploads\\DYhx1Ab1oCQUWBgq8tcM.png', '2023-09-16 01:00:03', '2023-09-16 01:00:03', NULL),
(290, 'iflow-mockup8.png', '7TdweBsWAOvBVNpiPzdW.png', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 617803, 'png', 'image/png', 'uploads\\7TdweBsWAOvBVNpiPzdW.png', '2023-09-18 02:16:37', '2023-09-18 02:16:37', NULL),
(291, 'iflow-mockup8.png', 'SnDAvYTzJ0M5WJ5DLPvz.png', '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 617803, 'png', 'image/png', 'uploads\\SnDAvYTzJ0M5WJ5DLPvz.png', '2023-09-18 02:16:37', '2023-09-18 02:16:37', NULL),
(292, 'enevNZdP9r124P6dRtm5 (1).pdf', 'CkP85DuDmb5G1gsPUhhZ.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\CkP85DuDmb5G1gsPUhhZ.pdf', '2023-09-18 09:40:25', '2023-09-18 09:40:25', NULL),
(293, 'Indotradex (1).pdf', '4uMSf1l1oB0B9kTki3Hl.pdf', 'd0d10947-27e3-495a-809c-395087b224da', 11715, 'pdf', 'application/pdf', 'uploads\\4uMSf1l1oB0B9kTki3Hl.pdf', '2023-09-18 09:40:25', '2023-09-18 09:40:25', NULL),
(294, 'iflow-mockup8.png', 'k6qAI1FLO4Ft6eb6nvJN.png', 'd0d10947-27e3-495a-809c-395087b224da', 617803, 'png', 'image/png', 'uploads\\k6qAI1FLO4Ft6eb6nvJN.png', '2023-09-19 00:24:04', '2023-09-19 00:24:04', NULL),
(295, 'iflow-mockup8.png', '2jhJ3u1B3UwFGUnGGTPM.png', 'd0d10947-27e3-495a-809c-395087b224da', 617803, 'png', 'image/png', 'uploads\\2jhJ3u1B3UwFGUnGGTPM.png', '2023-09-19 00:25:12', '2023-09-19 00:25:12', NULL),
(296, 'stefan-stefancik-QXevDflbl8A-unsplash.jpg', 'rvsxaos5NnhgoEG2u2UH.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 8817696, 'jpg', 'image/jpeg', 'uploads\\rvsxaos5NnhgoEG2u2UH.jpg', '2023-09-19 00:41:36', '2023-09-19 00:41:36', NULL),
(297, 'omid-armin-b5yGzWOpkMo-unsplash.jpg', 'PIEcxVsQM2jWLMzpopF3.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 2033109, 'jpg', 'image/jpeg', 'uploads\\PIEcxVsQM2jWLMzpopF3.jpg', '2023-09-19 00:52:25', '2023-09-19 00:52:25', NULL),
(298, 'omid-armin-b5yGzWOpkMo-unsplash.jpg', 'OpZE8chbX5BpmM8RUccq.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 2033109, 'jpg', 'image/jpeg', 'uploads\\OpZE8chbX5BpmM8RUccq.jpg', '2023-09-19 00:56:34', '2023-09-19 00:56:34', NULL),
(299, 'stefan-stefancik-QXevDflbl8A-unsplash.jpg', 'G6pRsamDSMCbLiHVR6GS.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 8817696, 'jpg', 'image/jpeg', 'uploads\\G6pRsamDSMCbLiHVR6GS.jpg', '2023-09-19 00:56:48', '2023-09-19 00:56:48', NULL),
(300, 'michael-dam-mEZ3PoFGs_k-unsplash.jpg', 'uXOv8vtehbBKentdWvRa.jpg', 'd0d10947-27e3-495a-809c-395087b224da', 1675585, 'jpg', 'image/jpeg', 'uploads\\uXOv8vtehbBKentdWvRa.jpg', '2023-09-19 00:57:08', '2023-09-19 00:57:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `photoId` int DEFAULT NULL,
  `photo` int DEFAULT NULL,
  `remark` longtext COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `LastName`, `email`, `mobile`, `password`, `website`, `address`, `city`, `pinCode`, `role_id`, `photoId`, `photo`, `remark`, `email_verified_at`, `status`, `remember_token`, `otp`, `deleted_at`, `created_at`, `updated_at`) VALUES
('66187226-815d-4eb8-a4f0-a96c696aad5e', 'Darius', 'Allison', 'fafykizewa@mailinator.com', '+1 (131) 906-4624', '$2y$10$R6i.MhJvcUjaHum52XeVgOVvAADDerx98HMxkt1BDJZHrTbO81Md2', 'https://www.miniperarojiget.com.au', 'Molestiae assumenda', 'Dolore laborum Sapi', 'Iste necessitatibus', 4, 267, 268, 'Adipisci do beatae a', NULL, 1, NULL, NULL, NULL, '2023-09-14 23:38:06', '2023-09-14 23:38:07'),
('6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 'Shyam', 'Yadav', 'Shyam@aspireindia.com', '8874762327', '$2y$10$HLQbDALrimb6meSnmvMs4u5CqE8vyr2h7gb/Him8r3SKnBC1PVBXq', 'https://www.xex.org.au', 'Ut non ratione volup', 'Eos modi atque nihil', '717686', 7, 288, 289, 'Ex doloremque qui om', NULL, 1, NULL, 'VkQ8lQ', NULL, '2023-09-15 23:44:33', '2023-09-19 06:09:42'),
('7207d3d4-9e53-4b47-bddd-ed7d1971feeb', 'Beck', 'Swanson', 'qizapa@mailinator.com', '+1 (249) 852-1724', '$2y$10$0dJy9Zr.SMt8.F5NJHF.OuyGzFpR0hhdM/6Uv5vr9CV.l9nOT4k.m', 'https://www.fin.org.uk', 'Est amet dolor non', 'Saepe quod nulla vol', 'Cumque corporis opti', 9, 237, 238, 'Accusantium voluptas', NULL, 1, NULL, NULL, NULL, '2023-09-13 23:52:01', '2023-09-13 23:52:01'),
('a33204c3-879e-4644-af7e-89755a8a2084', 'Keiko', 'Bass', 'poxeqinuh@mailinator.com', '+1 (702) 948-4855', '$2y$10$NpR1bzMVCqTPNz8IMeXmYOSY1WEbhelz7oLqSro04aH6RSoCrxLTK', 'https://www.nikuvyfafizeb.ca', 'Commodi aut exceptur', 'Corporis magnam beat', 'Aut quia veniam ali', 5, 282, 283, 'Qui ex et Nam ex quo', NULL, 1, NULL, NULL, NULL, '2023-09-15 06:57:27', '2023-09-15 06:57:27'),
('aeb9b097-66f1-4b13-b2ac-be7b79b35394', 'Isabelle', 'Henson', 'suwukohi@mailinator.com', '+1 (604) 798-8686', '$2y$10$MCU1G.OIKtQgrvecZX9s5.B.5okjf4ZeeR9qsM1tQZBUCHHcGL6Ya', 'https://www.kemuhez.mobi', 'Facere maxime in mag', 'Aliquid delectus ex', 'Voluptatibus volupta', 5, 235, 236, 'Excepteur quod incid', NULL, 1, NULL, NULL, NULL, '2023-09-13 04:27:25', '2023-09-13 04:27:26'),
('ec1d97b4-d261-4a04-9e88-afa45c33b316', 'Price', 'Bishop', 'doduralyb@mailinator.com', '+1 (341) 664-8353', '$2y$10$UiHY4GFKe.NBt0nuo93EZecIg6v3MOrFhEWt2AmlWI8ISarrRsbim', 'https://www.pizavozy.org', 'Repudiandae non impe', 'Nisi suscipit magna', 'Sint distinctio Qui', 2, 233, 234, 'Unde ut culpa maxim jhguy ighiuhi  iojijoi j', NULL, 1, NULL, NULL, NULL, '2023-09-13 03:31:14', '2023-09-13 03:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `count` int NOT NULL DEFAULT '0',
  `ipAddress` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `count`, `ipAddress`, `created_at`, `updated_at`) VALUES
(1, 167, '127.0.0.1', '2023-09-16 04:51:47', '2023-09-19 06:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massege` longtext COLLATE utf8mb4_unicode_ci,
  `options` longtext COLLATE utf8mb4_unicode_ci,
  `status` int DEFAULT NULL,
  `admin_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `user_id`, `massege`, `options`, `status`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', 'Voluptatibus sed ani', '[\"Hotel\",\"Investment\",\"Business\",\"Airport\",\"Tourism\",\"Sport\"]', 1, NULL, '2023-09-16 03:54:21', '2023-09-16 03:54:21'),
(2, '6e21bcda-2fbe-4355-b6c6-94cc4964a6e0', NULL, '[\"Hotel\",\"Investment\",\"Airport\",\"Support\",\"Sport\",\"Tourism\"]', 1, NULL, '2023-09-16 03:54:49', '2023-09-16 03:54:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `benefitsof_memberships`
--
ALTER TABLE `benefitsof_memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness_enquiries`
--
ALTER TABLE `bussiness_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `membership_fees`
--
ALTER TABLE `membership_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mettings`
--
ALTER TABLE `mettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_enquiries`
--
ALTER TABLE `products_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_enquiries`
--
ALTER TABLE `project_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tradingcategories`
--
ALTER TABLE `tradingcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trandingcategories`
--
ALTER TABLE `trandingcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `benefitsof_memberships`
--
ALTER TABLE `benefitsof_memberships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bussiness_enquiries`
--
ALTER TABLE `bussiness_enquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_fees`
--
ALTER TABLE `membership_fees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mettings`
--
ALTER TABLE `mettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products_enquiries`
--
ALTER TABLE `products_enquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `project_enquiries`
--
ALTER TABLE `project_enquiries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tradingcategories`
--
ALTER TABLE `tradingcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `trandingcategories`
--
ALTER TABLE `trandingcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
