-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 04:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handyman_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_ar`, `description`, `description_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Assembly', 'التجميع', 'Assembly services', 'خدمات التجميع', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(2, 'Mounting', 'التثبيت', 'Mounting services', 'خدمات التثبيت', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(3, 'Moving', 'النقل', 'Moving services', 'خدمات النقل', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(4, 'Cleaning', 'التنظيف', 'Cleaning services', 'خدمات التنظيف', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(5, 'Outdoor Help', 'مساعدة خارجية', 'Outdoor help services', 'خدمات المساعدة الخارجية', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(6, 'Home Repairs', 'إصلاحات منزلية', 'Home repair services', 'خدمات الإصلاحات المنزلية', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(7, 'Painting', 'الطلاء', 'Painting services', 'خدمات الطلاء', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Plumbing License', 'Certified Plumbing License', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(2, 'Electrical Certification', 'Certified Electrical Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(3, 'Hardware Certification', 'Certified Hardware Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(4, 'Garden Tools Certification', 'Certified Garden Tools Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(5, 'Supplies Certification', 'Certified Supplies Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(6, 'Gear Certification', 'Certified Gear Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(7, 'DIY Certification', 'Certified DIY Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(8, 'Paint Certification', 'Certified Paint Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(9, 'Parts Certification', 'Certified Parts Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(10, 'Kitchenware Certification', 'Certified Kitchenware Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(11, 'Supplies Certification', 'Certified Supplies Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(12, 'Plumbing Certification', 'Certified Plumbing Work', '2024-10-12 19:25:55', '2024-10-12 19:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_infos`
--

CREATE TABLE `delivery_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `building_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_infos`
--

INSERT INTO `delivery_infos` (`id`, `user_id`, `phone`, `city`, `location`, `building_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '079', 'u', 'A', '1', '2024-10-16 14:39:13', '2024-10-16 14:39:13', NULL),
(2, 3, '079', 'u', 'A', '1', '2024-10-16 14:39:57', '2024-10-16 14:39:57', NULL),
(3, 4, '079', 'a', 'a', '1', '2024-10-24 18:14:33', '2024-10-24 18:14:33', NULL),
(4, 2, '079', 'Amman', 'amman', '21', '2024-10-25 15:10:23', '2024-10-25 15:10:23', NULL);

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
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `followed_id` bigint(20) UNSIGNED NOT NULL,
  `follow_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `follower_id`, `followed_id`, `follow_type`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'handyman', '2024-10-12 19:25:56', '2024-10-12 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `end_address` varchar(255) DEFAULT NULL,
  `car_req` tinyint(1) DEFAULT NULL,
  `estimated_time` int(11) DEFAULT NULL,
  `task_date` date NOT NULL,
  `task_time` time NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `user_id`, `handyman_id`, `category_id`, `service_id`, `title`, `description`, `location`, `end_address`, `car_req`, `estimated_time`, `task_date`, `task_time`, `price`, `total`, `status_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 1, 1, 'Fix leaky faucet', 'Need a handyman to fix a leaky faucet in the kitchen.', '123 Main St', NULL, NULL, 2, '2024-10-05', '08:30:00', 50, 350, 9, '2024-10-12 19:25:56', '2024-10-17 16:40:46', NULL),
(2, 16, 4, 4, 1, 'Tempore hic et aut officiis consequatur ratione porro qui.', 'Quam totam itaque molestiae iste sunt. Iusto nesciunt nobis omnis ut veniam. Fuga nam officia placeat non ut accusantium.', '4172 Delfina Vista\nLake Tedmouth, ND 92085', NULL, NULL, 3, '2024-09-27', '08:52:38', 455, 82, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(3, 14, 8, 2, 1, 'Voluptatem accusantium architecto praesentium nisi nihil molestiae.', 'Cumque in et rerum voluptatem accusamus sed. Velit repellat quod et et sint ut. Cum dolorem labore consectetur omnis.', '317 Ewald Stream Suite 684\nRunolfsdottirborough, GA 56644-3588', NULL, NULL, 7, '2024-10-17', '20:16:34', 238, 112, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(4, 16, 4, 5, 1, 'Eaque qui earum autem hic assumenda.', 'Nemo voluptatem veniam ut et. Ut provident quibusdam in officia praesentium dolor et et. Assumenda delectus labore mollitia earum. Amet molestiae est laborum eos laborum.', '299 Okuneva Street Apt. 339\nMarquardtstad, OR 96746', NULL, NULL, 1, '2024-11-03', '08:20:18', 465, 354, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(5, 18, 8, 1, 1, 'Modi ea minima et nam eos deserunt sed.', 'Voluptatem eum deleniti corrupti fuga distinctio alias molestiae. Quia non ipsam iste animi. Repellat cum eaque sit et. Qui tempora et aut possimus.', '3268 Stefanie Mews Suite 940\nPort Lorenzoland, KS 05424', NULL, NULL, 4, '2024-10-19', '05:11:53', 266, 334, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(6, 19, 5, 4, 1, 'Atque omnis et aliquam excepturi temporibus alias.', 'Et in sint et vel nihil. Culpa aut numquam explicabo facere ex inventore. Sint numquam excepturi qui quisquam.', '7711 Anahi Shore\nNew Devin, WA 85194-4303', NULL, NULL, 6, '2024-09-05', '05:17:41', 48, 467, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(7, 13, 4, 2, 1, 'Similique consequatur autem debitis possimus.', 'Minima eos asperiores officia quas ratione. Exercitationem hic aliquid qui accusantium. Et et qui magnam fugiat ullam odio voluptate. Qui quasi labore accusamus pariatur mollitia sit sed.', '1937 Eva Land Apt. 287\nDomenickfort, NJ 28644', NULL, NULL, 3, '2024-09-05', '12:05:17', 420, 243, 24, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(8, 19, 5, 6, 1, 'Aut maiores fugit ad labore et.', 'Ab eos et aut aut sunt placeat et. Dolorem minima nihil optio similique veniam. Tempora est officiis repellat reprehenderit et unde aliquid doloribus. Voluptas inventore est tempore unde ducimus fugiat.', '3393 Tatyana Ports\nPort Wilfredo, KS 11297-3688', NULL, NULL, 8, '2024-10-20', '01:43:02', 485, 416, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(9, 9, 3, 4, 1, 'Quas dolor harum repudiandae nulla et aut.', 'Optio delectus aut veniam dicta sequi et. Qui ratione natus aliquid et. Voluptas nobis soluta consequuntur odio possimus velit impedit. Eos similique sint cupiditate sapiente similique.', '5220 Purdy Run\nLake Ervin, MT 09432', NULL, NULL, 6, '2024-09-27', '12:31:22', 232, 38, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(10, 21, 5, 1, 1, 'Aut incidunt iusto debitis cum quia.', 'Voluptate ab ut iure reiciendis aperiam dolor. Reprehenderit consequuntur debitis sit aliquid tempora voluptatum. Ut aut iste aut labore voluptate quas omnis.', '9795 Langosh Loaf\nPort Austyn, AL 54591-2584', NULL, NULL, 6, '2024-09-03', '03:42:33', 271, 287, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(11, 9, 3, 5, 1, 'Asperiores nostrum earum sapiente dolore est.', 'Architecto ut sit consequuntur ut maiores qui aliquam molestiae. Ut quaerat suscipit doloremque quae quasi qui. Sed quae in qui sequi qui similique non facilis.', '27994 George Shoals Suite 806\nLake Kamronton, NC 79235-8374', NULL, NULL, 4, '2024-09-03', '16:22:10', 391, 381, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(12, 10, 3, 1, 1, 'Quos quasi eum non.', 'Dignissimos qui et reprehenderit corporis iusto. Eveniet sequi laborum labore exercitationem. Esse ducimus corrupti necessitatibus sapiente hic ex voluptatem. Sed explicabo et et.', '45578 Kemmer Radial\nEast Raul, AR 62327-8623', NULL, NULL, 7, '2024-10-24', '07:11:10', 212, 388, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(13, 11, 4, 4, 1, 'Enim animi omnis qui dolorem.', 'Sit pariatur quia numquam et amet deleniti consequatur voluptas. Est non ea ea est.', '96901 Ethelyn Loop Suite 363\nWest Jaybury, AL 61805-7052', NULL, NULL, 2, '2024-11-15', '23:00:02', 346, 326, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(14, 19, 6, 3, 1, 'Id tenetur et consequuntur aspernatur aliquid voluptas.', 'Possimus aliquam non aliquam reiciendis eum est ut aliquam. Recusandae maiores in iusto qui et. Tempora delectus sapiente autem ea est possimus dolore suscipit.', '89379 Murl Harbors\nNorth Hardyville, CA 44917', NULL, NULL, 4, '2024-09-26', '07:29:53', 320, 144, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(15, 12, 6, 4, 1, 'Culpa veniam aliquam voluptatem maxime eaque id odit.', 'Possimus nihil quidem incidunt quidem perspiciatis. Ipsum magni nostrum culpa et eveniet perferendis quae. Officiis rerum quia doloremque voluptas voluptas recusandae. Ut ullam ullam molestias suscipit neque ullam.', '3571 Beer Knolls\nMazietown, ND 05608', NULL, NULL, 3, '2024-10-17', '12:24:28', 240, 34, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(16, 11, 4, 4, 1, 'Itaque quo temporibus et id architecto.', 'Ab earum unde impedit iure. A voluptatem quia corporis consequuntur fuga voluptatem excepturi aut. Molestias voluptatum aliquid tempora unde quae cumque voluptas.', '50316 Nicklaus Club\nLinwoodfurt, DC 13547', NULL, NULL, 2, '2024-11-05', '02:34:31', 139, 343, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(17, 19, 3, 3, 1, 'Vero quam repudiandae rerum deserunt.', 'Non quos impedit placeat maxime in ut aliquid. Distinctio facere sunt voluptas quasi veritatis voluptates praesentium. Placeat totam voluptas qui dicta fuga at natus.', '4389 Laurel Mission\nWest Archibald, NV 01174-7865', NULL, NULL, 7, '2024-10-05', '08:22:57', 211, 407, 10, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(18, 17, 6, 6, 1, 'Sapiente possimus repellat sint in qui nihil magni.', 'Maiores dolorum earum consequatur et sed. Ea dolores ipsam voluptatem modi distinctio. Dolorum dolore necessitatibus odio id nam.', '3763 Jacobson Well\nJeraldhaven, CA 90441-2262', NULL, NULL, 4, '2024-09-03', '15:59:14', 277, 388, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(19, 20, 5, 1, 1, 'Nam et vitae quia sit aut temporibus.', 'Voluptatum dolorem tempora ut enim dolores nobis ab. Sapiente sed deserunt molestias rerum ratione unde. Accusamus nesciunt eos qui eaque molestiae eveniet.', '16987 Therese Fork\nBreitenbergfurt, HI 19017-2179', NULL, NULL, 5, '2024-09-06', '13:18:20', 202, 234, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(20, 18, 7, 1, 1, 'Sint quidem voluptate quisquam repellat omnis voluptatem.', 'Dolores reprehenderit ut quis est quos omnis. Eius reiciendis eligendi quam in voluptates. Distinctio magni ut aut debitis itaque nam.', '6512 Marge Canyon\nPort Emmanuelleview, SD 60295', NULL, NULL, 2, '2024-10-30', '13:03:36', 313, 52, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(21, 16, 6, 3, 1, 'Quia illo quae quis animi.', 'Ut iusto non inventore rerum quo omnis. Omnis ratione eaque ea est mollitia odit. Quae numquam voluptatem officiis illo quisquam possimus. Perferendis est tempore optio ducimus odit.', '934 King Flats Suite 882\nPort Josephine, MS 90569', NULL, NULL, 6, '2024-11-14', '20:14:32', 189, 246, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(22, 6, 7, 4, 1, 'Deserunt nostrum est voluptatem vitae cumque.', 'Totam non et ut magni. Qui quam necessitatibus officiis voluptatem. Consequatur reprehenderit ex quia. Fugiat vitae quos sit sunt occaecati.', '2288 Koch Port Apt. 713\nLake Marysetown, SC 51154', NULL, NULL, 3, '2024-10-13', '14:26:04', 400, 299, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(23, 9, 5, 5, 1, 'Minima et doloribus dignissimos qui minima dignissimos eos.', 'Distinctio tempora id id sint sequi. Minima in et ad omnis. Quidem libero repellendus et fugiat similique dolor.', '4360 Isaiah Loop Suite 554\nGreenfeldermouth, CA 45284-2172', NULL, NULL, 8, '2024-10-29', '16:44:55', 100, 211, 10, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(24, 7, 5, 1, 1, 'Ut illo sed eius aut.', 'Nemo quae temporibus excepturi necessitatibus consectetur eligendi. Corporis qui aliquam minima dignissimos molestias natus dolorem maxime. Explicabo repudiandae similique architecto et. Voluptates consequatur ut optio nobis voluptatem aut ut.', '661 Nova Meadows Apt. 175\nLake Garryshire, KS 56359', NULL, NULL, 7, '2024-11-30', '06:47:30', 91, 305, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(25, 6, 7, 4, 1, 'Ut qui distinctio cupiditate.', 'Nulla eligendi voluptate quibusdam dolor est sapiente. Aspernatur impedit magni rerum dolor aut magni sunt. Magnam voluptas magni aspernatur voluptatum.', '1899 Haag Plains Suite 591\nSchmelermouth, ME 87799', NULL, NULL, 7, '2024-11-28', '11:45:55', 447, 204, 10, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(26, 19, 3, 1, 1, 'Eos est molestiae rerum excepturi hic eligendi.', 'Odio animi commodi facere qui maiores enim eveniet. Quam est rerum ratione assumenda et perspiciatis incidunt. Natus ut iste nam modi ut consequatur vitae.', '64811 Ferne Unions\nPort Winnifred, CT 97867', NULL, NULL, 4, '2024-11-02', '01:12:54', 177, 264, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(27, 11, 8, 1, 1, 'Earum voluptate non consequatur iusto.', 'Mollitia id rerum enim optio. Fugit consequatur nam odio eum aliquid corrupti. Aut consequatur quos qui dolor itaque. Voluptate officiis ex necessitatibus.', '288 Ismael Hollow\nEast Austin, PA 35912', NULL, NULL, 7, '2024-09-21', '14:46:14', 33, 73, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(28, 19, 4, 1, 1, 'Est eos sed non numquam animi.', 'Veritatis reprehenderit dolore dolorem et. Explicabo amet sequi adipisci odio velit consequatur. Voluptatem delectus et molestias adipisci.', '8308 Marlon Ville\nNew Salvatore, ND 08055-2254', NULL, NULL, 7, '2024-11-11', '19:35:27', 413, 20, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(29, 16, 8, 1, 1, 'Et omnis sint dolorem quis.', 'Sed assumenda dolore qui laborum. Aperiam excepturi facilis et amet voluptas ipsum. Occaecati unde fugit porro eius fuga id eius quas.', '683 Sallie Vista\nEast Sasha, AK 09975', NULL, NULL, 8, '2024-11-17', '13:47:24', 137, 259, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(30, 22, 3, 3, 1, 'Dolorem nostrum aliquid porro quo impedit nemo.', 'Iste omnis ducimus esse totam. Nihil esse nam voluptate exercitationem labore eligendi. Corporis nostrum accusantium aperiam atque nobis possimus soluta rem. Deleniti ut iste dolor molestias eum ullam.', '5445 DuBuque Via\nVincenzaville, LA 94899', NULL, NULL, 4, '2024-09-25', '12:56:57', 249, 271, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(31, 13, 4, 4, 1, 'Debitis fuga et aut eum.', 'Impedit sunt neque excepturi ipsa et ea. Explicabo vel consectetur in laboriosam autem doloribus. Saepe eos qui est architecto. Est ea quia fugit quos.', '766 Homenick Tunnel Suite 956\nNew Alexandriafort, UT 26937', NULL, NULL, 5, '2024-11-29', '06:53:30', 231, 421, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(32, 8, 8, 5, 1, 'Corporis nihil maxime voluptatem iusto.', 'Voluptas quia placeat quia omnis. Reiciendis qui numquam accusantium ea.', '7710 Grant Harbor\nKittyburgh, KY 11011', NULL, NULL, 7, '2024-09-19', '02:17:02', 142, 493, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(33, 11, 3, 2, 1, 'Fugiat quam temporibus modi eos cumque sunt recusandae.', 'Quaerat autem consequatur perspiciatis est. Sapiente dolores maiores eligendi ut. Adipisci accusantium natus amet ipsa. Aliquam dolor quis ipsum consectetur modi qui et.', '176 Dino Turnpike\nEast Laylamouth, DC 19935-2994', NULL, NULL, 2, '2024-09-25', '09:45:53', 356, 315, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(34, 17, 6, 4, 1, 'Aut rem tenetur quo consequuntur quaerat unde.', 'Nihil sed quia deserunt repellendus. Sequi recusandae quam consectetur aliquam occaecati. Rem laboriosam repellendus quia voluptatibus praesentium non qui.', '1836 Zemlak Pine\nWest Maudieborough, SC 24063', NULL, NULL, 5, '2024-09-13', '23:34:28', 451, 209, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(35, 17, 8, 3, 1, 'Voluptatibus cupiditate ducimus numquam exercitationem quas reiciendis amet.', 'Inventore ut ut veritatis illo qui deleniti. Laborum excepturi temporibus exercitationem fugit labore nesciunt. Repellendus animi ab molestias laudantium velit eum itaque.', '62793 Christophe Valley\nCharliestad, AL 85678-7648', NULL, NULL, 1, '2024-10-16', '19:22:08', 96, 454, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(36, 18, 3, 5, 1, 'Voluptas sunt quam porro autem omnis incidunt nihil ipsa.', 'Excepturi quod consequatur porro non possimus voluptas. Doloremque et atque repellendus perspiciatis voluptatem quod. Sit reiciendis sunt voluptas ut possimus architecto. Ducimus sapiente consequatur eaque. Harum sequi eius voluptatibus nihil voluptates et.', '4708 Sawayn Alley\nNew Sammyfurt, KS 15633-5474', NULL, NULL, 3, '2024-10-19', '22:25:23', 331, 355, 24, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(37, 12, 5, 1, 1, 'Pariatur error occaecati rerum est rerum ut.', 'Esse et amet minima aliquid. Deserunt odio ut non ex impedit et et est. Eius exercitationem consequatur possimus suscipit saepe.', '252 Jamie Plaza Apt. 570\nKeeblertown, IN 84511', NULL, NULL, 7, '2024-10-15', '10:19:13', 65, 476, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(38, 6, 5, 5, 1, 'Qui non omnis laboriosam.', 'Doloribus autem reiciendis facere odit dolorem. Corporis quia est eos ab vel aliquid qui in. Eum dolores distinctio optio dolor.', '9607 Janae Stream\nPort Colleenland, OK 79234-8529', NULL, NULL, 6, '2024-10-05', '15:09:01', 476, 133, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(39, 13, 6, 3, 1, 'Libero ut qui non hic sint libero sunt rerum.', 'Expedita nihil qui labore deleniti amet asperiores. Numquam quaerat ut labore ea suscipit consequatur sit. Et ut dolores et. Eum natus qui libero. Dolores rerum ducimus consequatur sed aperiam.', '91133 Tristian Fall Apt. 879\nSchmittfort, PA 89977', NULL, NULL, 6, '2024-11-12', '13:37:54', 485, 389, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(40, 19, 5, 4, 1, 'Voluptas modi iste est distinctio perferendis doloremque.', 'Cupiditate aliquam non non dolores quasi ut rerum optio. Fugit voluptatibus ut porro nesciunt. Maiores corporis suscipit et.', '25768 Peyton Fort Suite 306\nWest Jasper, SD 36527', NULL, NULL, 4, '2024-11-21', '11:43:58', 249, 283, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(41, 11, 6, 5, 1, 'Est earum sunt sint ut eos.', 'Iure enim est qui nemo sed eos error aut. Ullam qui qui aut rem neque qui.', '40057 Nolan Run\nNorth Tressa, MA 79204-3300', NULL, NULL, 4, '2024-11-19', '18:55:02', 365, 87, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(42, 22, 7, 6, 1, 'Fugiat minima dolor maxime tempore nulla numquam.', 'Tenetur est provident impedit tenetur. Provident eos et ut magnam esse voluptatem illum. Alias aspernatur aut vel recusandae officia eum provident.', '90210 Quentin Spring Suite 727\nWest Zoeshire, OR 13014', NULL, NULL, 1, '2024-10-26', '03:33:30', 88, 456, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(43, 6, 7, 1, 1, 'Quia dolor velit ipsam minima saepe ut cupiditate.', 'Fugiat est illo aut est aperiam corporis delectus. Velit in illo tempora accusantium. Expedita eligendi dolores voluptas delectus rerum.', '7150 Kuvalis Ports\nNorth Roger, PA 61961-6988', NULL, NULL, 8, '2024-10-04', '01:18:20', 40, 276, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(44, 8, 4, 4, 1, 'Error maxime nulla consequatur eaque corporis non sint.', 'Voluptatem quas non dolore corporis aperiam ea similique. Animi ullam omnis quam nulla porro.', '546 Marisa Alley\nPort Lazaroberg, MD 66712-0199', NULL, NULL, 8, '2024-10-31', '07:11:50', 371, 356, 7, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(45, 16, 7, 1, 1, 'Repellendus quos eaque nisi placeat libero ut vel.', 'Sed eaque a quis nulla. Maiores dolores sed deserunt sint. Iusto non voluptatem soluta. Dicta repudiandae vitae adipisci est voluptates.', '375 Breitenberg Grove Apt. 420\nRosannaburgh, ME 19850-7523', NULL, NULL, 1, '2024-10-01', '19:36:38', 453, 443, 24, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(46, 12, 4, 3, 1, 'Aliquid sequi sed eveniet itaque.', 'Omnis quam voluptas sed cupiditate exercitationem qui. Explicabo quidem natus quis. Odio tempora minus nulla alias. Ullam perferendis molestiae ullam autem nesciunt. Voluptatem et officia repudiandae voluptate enim deleniti.', '2013 Heidenreich Groves Suite 985\nCaramouth, VT 23159', NULL, NULL, 6, '2024-09-14', '16:23:44', 364, 215, 24, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(47, 19, 7, 2, 1, 'Ab qui dolore fugiat et modi qui.', 'Fugit inventore corrupti debitis eum officiis distinctio dolores voluptatum. Illo cupiditate consequatur facilis iste dolorem sint odio ut. Ex ea explicabo asperiores ut tenetur libero.', '3859 Kylee Stream Apt. 022\nMayertown, WA 51990-4497', NULL, NULL, 6, '2024-09-05', '13:19:31', 69, 320, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(48, 21, 6, 2, 1, 'Odit iure nam voluptatem in molestiae doloribus itaque.', 'Voluptatibus culpa sed aut qui. Nobis id maiores quis. Est error impedit qui sint blanditiis neque totam.', '327 Kihn Rapid\nShanellebury, HI 73880', NULL, NULL, 6, '2024-10-10', '02:11:22', 257, 461, 24, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(49, 8, 3, 2, 1, 'Omnis eveniet aut non tempora sit vero.', 'Voluptatibus excepturi qui maxime. Dolor dolores provident adipisci aut est quod. Temporibus accusamus id eius ea.', '25219 Tyrique Ranch Suite 001\nOrtiztown, WA 82431-2725', NULL, NULL, 7, '2024-10-24', '07:28:40', 30, 110, 8, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(50, 18, 6, 5, 1, 'Sit voluptates quibusdam sint possimus quibusdam nobis sunt.', 'Quidem provident modi facere nihil. Fugiat ipsam et ratione officiis voluptatibus dicta rerum. Saepe praesentium voluptates eum necessitatibus laboriosam.', '6870 Rippin Junction Suite 488\nLake Libbyton, IN 56085-9179', NULL, NULL, 5, '2024-10-24', '16:52:54', 298, 307, 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(51, 6, 4, 3, 1, 'Assumenda cupiditate libero aliquam voluptas voluptate.', 'Commodi corporis quia non perferendis alias enim. Dolores rerum voluptatem eius eaque. Et dolor quisquam consequatur quod voluptatem ullam. Facilis est odio aliquam iusto vitae tempore dolore.', '30032 Simonis Rue Apt. 156\nKulasberg, ME 44602-1434', NULL, NULL, 5, '2024-11-11', '22:01:32', 437, 480, 9, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gig_policys`
--

CREATE TABLE `gig_policys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `content_ar` text NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gig_policys`
--

INSERT INTO `gig_policys` (`id`, `content`, `content_ar`, `visible`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'This is the default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.', 'هذه هي سياسة العمل الافتراضية. تحدد الشروط والأحكام لجميع معاملات العمل على منصتنا. يرجى التأكد من امتثال كل من الحرفيين والعملاء للسياسة لضمان سير العمليات بسلاسة وتجنب النزاعات.', 1, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(2, 'This is the 2nd default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.', 'هذه هي سياسة العمل الافتراضية الثانية. تحدد الشروط والأحكام لجميع معاملات العمل على منصتنا. يرجى التأكد من امتثال كل من الحرفيين والعملاء للسياسة لضمان سير العمليات بسلاسة وتجنب النزاعات.', 1, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(3, 'This is the 3rd default gig policy. It outlines the terms and conditions for all gig transactions on our platform. Please ensure that both handymen and customers comply with the policy to ensure smooth operations and avoid disputes.', 'هذه هي سياسة العمل الافتراضية الثالثة. تحدد الشروط والأحكام لجميع معاملات العمل على منصتنا. يرجى التأكد من امتثال كل من الحرفيين والعملاء للسياسة لضمان سير العمليات بسلاسة وتجنب النزاعات.', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `handymans`
--

CREATE TABLE `handymans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `experience` int(11) NOT NULL DEFAULT 0,
  `price_per_hour` int(11) NOT NULL DEFAULT 0,
  `store_location` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `suspended` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `handymans`
--

INSERT INTO `handymans` (`id`, `user_id`, `experience`, `price_per_hour`, `store_location`, `bio`, `created_at`, `updated_at`, `deleted_at`, `suspended`) VALUES
(1, 3, 50, 10, '123 Main St', 'Skilled in securely mounting a variety of items, from shelves and mirrors to artwork and fixtures. I ensure precise installation with attention to weight distribution and stability. Whether it’s small decorative pieces or heavy-duty fixtures', '2024-10-12 19:25:55', '2024-10-16 14:38:18', NULL, 0),
(2, 5, 3, 13, '1 Main St', 'I have experience installing various elements on plasterboard, concrete, brick and tiles, ensuring reliable and high-quality fastening💯⚒️🪛🧰', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 1),
(3, 23, 1, 10, ' ', 'I have a lot of experience mounting TVs, shelves, mirrors concrete walls, brick walls, drywall? No problem! Id love to help you out!', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0),
(4, 24, 2, 13, ' ', 'Experienced in mounting many different frame/art substrates, television mounts, shelving, and furniture units. 5 years working for a subcontracting company which include mountig jobs for Sony Animation/ Studios, Disney, and Kevin Berry Fine Arts. ', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0),
(5, 25, 5, 10, ' ', 'I have 10 years of experience👨‍🎓 I can install on tiles and marble🧱🪨🪵 I have all the necessary tools🪛🪜🔨🔩 I guarantee my work', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0),
(6, 26, 1, 20, ' ', 'Lots of experience mounting TVs, shelves, art, pendant lights, etc. Dedicated handyman with years of experience, available to assist with any type of task, big or small.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0),
(7, 27, 4, 18, ' ', '✅ ❕ 🔨 +🖼 +🪛= 😊 ❕ ✅ I have years of experience, bring my own tools, and would love to help you get things done.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0),
(8, 28, 3, 5, ' ', 'Craftsman with 5 years experience, I specialize in safe and aesthetically pleasing installations: TV mounting, curtains, wardrobes, home decor, mirrors, shelves, IKEA furniture assembly, and more. I ensure precise results using my professional tools on diverse wall surfaces-drywall, concrete,', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `handyman_availability`
--

CREATE TABLE `handyman_availability` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `handyman_availability`
--

INSERT INTO `handyman_availability` (`id`, `handyman_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 5, '2024-10-26 09:00:00', '2024-10-26 12:00:00', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(17, 1, '2024-10-27 21:00:00', '2024-10-29 20:59:59', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(26, 3, '2024-10-26 14:00:00', '2024-10-26 17:00:00', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(33, 4, '2024-10-25 21:00:00', '2024-10-26 20:59:59', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(36, 1, '2024-10-27 04:00:00', '2024-10-27 10:00:00', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(42, 7, '2024-10-26 00:33:30', '2024-10-26 01:33:30', '2024-10-12 19:25:56', '2024-10-12 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `store_id`, `product_id`, `gig_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL, 'Bashiti_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 13, NULL, NULL, 'Manaseer_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 14, NULL, NULL, 'SubhiAbuChallous_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(4, 15, NULL, NULL, 'Almemari_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(5, 16, NULL, NULL, 'Jotun_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(6, 17, NULL, NULL, 'Lafarge_logo.png', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(7, NULL, 1, NULL, 'PrecisionScrewdriversSet.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(8, NULL, 2, NULL, 'MetalToolBox16inch.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(9, NULL, 3, NULL, 'Measuring-Tapes-Tools7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(10, NULL, 4, NULL, 'Measuring-Tapes-Tools28-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(11, NULL, 5, NULL, 'Hammers3-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(12, NULL, 6, NULL, 'Hammers7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(13, NULL, 7, NULL, 'Generators1-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(14, NULL, 8, NULL, 'AirCompressors2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(15, NULL, 9, NULL, 'AirCompressors5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(16, NULL, 10, NULL, 'IndustrialCleaningEquipments5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(17, NULL, 11, NULL, 'WaterBasedPaint6a-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(18, NULL, 12, NULL, 'WaterBasedPaint4a-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(19, NULL, 13, NULL, 'WaterBasedPaint3-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(20, NULL, 14, NULL, 'WaterBasedPaint1-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(21, NULL, 15, NULL, 'SolventsPaints2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(22, NULL, 16, NULL, 'SolventsPaints7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(23, NULL, 17, NULL, 'OilBasedPaints2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(24, NULL, 18, NULL, 'OilBasedPaints6-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(25, NULL, 19, NULL, 'PersonalSafety1-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(26, NULL, 20, NULL, 'PersonalSafety3a-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(27, NULL, 21, NULL, 'PersonalSafety6-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(28, NULL, 22, NULL, 'PersonalSafety8-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(29, NULL, 23, NULL, 'PersonalSafety9.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(30, NULL, 24, NULL, 'PersonalSafety15-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(31, NULL, 25, NULL, 'AluminumLadders4-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(32, NULL, 26, NULL, 'SteelLadders5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(33, NULL, 27, NULL, 'OtherLadders2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(34, NULL, 28, NULL, 'H19a99b73a54543dcabbc223cdc6caa3f4.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(35, NULL, 29, NULL, 'H9fbd0446bfbb492686a35d301e86c8f68.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(36, NULL, 30, NULL, 'Hf7f4e636f57f41ba91ea1b0c3ebc8218t.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(37, NULL, 31, NULL, 'H6907e04db6bd4d388311d34775632285v.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(38, NULL, 32, NULL, 'H614cb44866864375b9e6d04b7aeaa4a2v.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(39, NULL, 33, NULL, 'H45b38192e85e49db95ff0396d530c0abm.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(40, NULL, 34, NULL, 'سيراميك أرضيات حجري بارز- سيراميك ريماس - 5 (1).webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(41, NULL, 35, NULL, 'H57025d0df7294ccd81d4fb30951dc99db.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(42, NULL, 36, NULL, 'H0c5fc312f9c64f6b8f3201ac16b0bd72V.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(43, NULL, 37, NULL, 'PrecisionScrewdriversSet.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(44, NULL, 38, NULL, 'MetalToolBox16inch.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(45, NULL, 39, NULL, 'Measuring-Tapes-Tools7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(46, NULL, 40, NULL, 'Measuring-Tapes-Tools28-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(47, NULL, 41, NULL, 'Hammers3-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(48, NULL, 42, NULL, 'Hammers7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(49, NULL, 43, NULL, 'Generators1-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(50, NULL, 44, NULL, 'AirCompressors2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(51, NULL, 45, NULL, 'AirCompressors5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(52, NULL, 46, NULL, 'IndustrialCleaningEquipments5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(53, NULL, 47, NULL, 'AluminumLadders4-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(54, NULL, 48, NULL, 'SteelLadders5-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(55, NULL, 49, NULL, 'OtherLadders2-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(56, NULL, 50, NULL, 'PrecisionScrewdriversSet.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(57, NULL, 51, NULL, 'MetalToolBox16inch.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(58, NULL, 52, NULL, 'Measuring-Tapes-Tools7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(59, NULL, 53, NULL, 'Measuring-Tapes-Tools28-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(60, NULL, 54, NULL, 'PrecisionScrewdriversSet.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(61, NULL, 55, NULL, 'MetalToolBox16inch.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(62, NULL, 56, NULL, 'Measuring-Tapes-Tools7-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(63, NULL, 57, NULL, 'Measuring-Tapes-Tools28-scaled.webp', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(65, NULL, 88, NULL, '1729861725.png', '2024-10-25 10:08:45', '2024-10-25 10:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message_content` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `message_content`, `is_read`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'Hello, I need help with a product.', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(2, 3, 2, 'HI', 1, '2024-10-20 14:55:31', '2024-10-20 14:55:31', NULL),
(3, 2, 3, 'nmnmn', 1, '2024-10-20 14:55:36', '2024-10-20 14:55:37', NULL);

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
(1, '2013_08_30_083231_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_08_28_101140_create_certificates_table', 1),
(7, '2024_08_28_101642_create_categories_table', 1),
(8, '2024_08_28_143118_create_statuses_table', 1),
(9, '2024_08_28_144246_create_services_table', 1),
(10, '2024_08_29_100900_create_skills_table', 1),
(11, '2024_08_30_084931_create_delivery_infos_table', 1),
(12, '2024_08_30_085259_create_store_owners_table', 1),
(13, '2024_08_30_100452_create_stores_table', 1),
(14, '2024_08_30_100615_create_handymans_table', 1),
(15, '2024_08_30_101734_create_gigs_table', 1),
(16, '2024_08_30_142628_create_skill_certificates_table', 1),
(17, '2024_08_30_143546_create_products_table', 1),
(18, '2024_08_30_144502_create_shopping_carts_table', 1),
(19, '2024_08_30_144616_create_sales_table', 1),
(20, '2024_08_30_144809_create_tickets_table', 1),
(21, '2024_08_30_144922_create_reviews_table', 1),
(22, '2024_08_30_145107_create_messages_table', 1),
(23, '2024_08_30_145159_create_notifications_table', 1),
(24, '2024_08_30_145320_create_follows_table', 1),
(25, '2024_09_04_162055_create__gig_policy_table', 1),
(26, '2024_09_06_192153_create_reports_table', 1),
(27, '2024_09_23_104140_create_images_table', 1),
(28, '2024_10_05_151249_create_handyman_availability_table', 1),
(29, '2024_10_08_172616_create_proposals_table', 1),
(30, '2024_10_09_170913_create_payments_table', 1),
(31, '2024_10_11_092928_create_skilltocategories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `category` text NOT NULL DEFAULT 'primary',
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `category`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 2, 'Your order has been shipped!', 'primary', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 2, 'Your order has been shipped!', 'warning', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 2, 'Your order has been shipped!', 'success', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(4, 2, 'Your order has been shipped!', 'danger', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(5, 3, 'You win the gig!', 'primary', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(6, 3, 'You win the gig!', 'danger', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(7, 3, 'You win the gig!', 'success', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(8, 3, 'You win the gig!', 'warning', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(9, 1, 'an order has been shipped!', 'primary', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(10, 1, 'an gig has a propblem!', 'success', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(11, 1, 'an order has been shipped!', 'danger', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(12, 1, 'an gig has a propblem!', 'warning', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(13, 4, 'Your order has been shipped!', 'primary', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(14, 4, 'Your order has been shipped!', 'danger', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(15, 4, 'Your order has been shipped!', 'success', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(16, 4, 'Your order has been shipped!', 'warning', 0, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(17, 2, 'Your received a new message from Handyman User', 'primary', 0, '2024-10-20 14:55:31', '2024-10-20 14:55:31'),
(18, 3, 'Your received a new message from Regular User', 'primary', 0, '2024-10-20 14:55:36', '2024-10-20 14:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `handyman_id`, `gig_id`, `amount`, `description`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, 'extra paint work for one hour', 25, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 1, 1, 20, 'extra paint work for one hour', 26, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 1, 1, 50, 'extra paint work for one hour', 27, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(4, 1, 1, 100, 'lets move', 25, '2024-10-17 16:36:39', '2024-10-17 16:36:39'),
(5, 1, 1, 150, 'lets move', 27, '2024-10-17 16:36:53', '2024-10-17 16:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `description` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discounted_price` int(11) DEFAULT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 0,
  `stock_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `store_id`, `name`, `name_ar`, `rating`, `description`, `description_ar`, `price`, `discounted_price`, `availability`, `stock_quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 'Precision Screwdrivers Set', ' طقم مفكات الكتروني', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool', 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool', 4, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(2, 2, 'Metal Tool Box 16 inch', 'صندوق عدة حديد 16 انش', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder', 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder', 14, 10, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(3, 2, 'Tape Measure 5mx25mm', 'متر قياس 5 متر*25 ملم', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony', 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony', 8, 7, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(4, 2, 'Laser Distance Measure 50m', 'متر قياس ليزر 50 متر', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix', 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix', 35, 30, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(5, 2, 'Stoning Hammer 500 gram', 'شاكوش خلع نجارين 500 غرام', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers', 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش', 4, NULL, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(6, 2, 'Sledge Hammer 3 Kilo', 'مهدة 3 كيلو', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers', 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش', 17, 15, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(7, 2, 'Gasoline Generator 1 KVA', 'مولد بنزين 1 كيلو فولت', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Gasoline GeneratorBrand: Marquis', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, المولدات الكهربائيةالعلامة التجارية: Marquis', 210, 200, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(8, 2, 'Air Compressors 50Ltr', 'كومبرسر هواء 50 لتر', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Dingqi', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Dingqi', 185, 183, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(9, 2, 'Air Compressors 100Ltr', 'كومبرسر هواء 100 لتر', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Ingco', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Ingco', 470, 460, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(10, 2, 'Industrial Tile Cleaning Machine', 'ماكنة جلي بلاط', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Industrial Cleaning Equipments', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, لوازم تنظيف صناعية', 650, 640, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(11, 5, 'Emulsion Eggshell', 'املشن ربع لمعة', 4.80, 'Categories: General Paints, Water Based Paints, Paints', 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل', 5, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(12, 5, 'Top Bond', 'بلابوند', 4.80, 'Categories: General Paints, Water Based Paints, Paints', 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل', 3, 2, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(13, 5, 'Transparent Antique', 'لكر مائي لميع', 4.80, 'Categories: General Paints, Water Based Paints, Paints', 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل', 4, NULL, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(14, 5, 'Modern Trafic Paints (Gallon)', 'دهان اطاريف (ارصفة) جالون', 4.80, 'Categories: General Paints, Water Based Paints, Paints', 'التصنيفات: الدهانات المائية, دهانات منوعة, الدهانات والعزل', 8, 7, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(15, 5, 'White Spirit 5 Liter', 'نفط 5 لتر', 4.80, 'Categories: General Paints, Solvent Paints, Paints', 'التصنيفات: دهانات منوعة, مذيبات الدهانات, الدهانات والعزل', 6, 5, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(16, 5, 'Paint Remover 1 Liter', 'مزيل دهان 1 لتر', 4.80, 'Categories: General Paints, Solvent Paints, Paints', 'التصنيفات: دهانات منوعة, مذيبات الدهانات, الدهانات والعزلالعلامة التجارية: National', 5, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(17, 5, 'Hammar Modern Paints', 'دهان زياتي مودرن', 4.80, 'Categories: General Paints, Oil Based Paints, Paints', 'التصنيفات: دهانات منوعة, الدهانات الزيتية, الدهانات والعزلالعلامة التجارية: National', 1, 1, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(18, 5, 'Epoxy Paint Gallon 3.6 Liter/Hardner', 'دهان ايبوكسي جالون 3.6 لتر/منشف', 4.80, 'Categories: General Paints, Oil Based Paints, Paints', 'التصنيفات: دهانات منوعة, الدهانات الزيتية, الدهانات والعزلالعلامة التجارية: National', 29, 28, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(19, 12, 'Safety Helmet', 'طاقية سلامة عامة', 4.80, 'Categories: Personal Safety Equipment, General Safety', 'التصنيفات: السلامة الشخصية, السلامة العامة', 4, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(20, 12, 'Safety Reflective Vest', 'فيزت سلامة عاكس', 4.80, 'Categories: Personal Safety Equipment, General Safety', 'التصنيفات: السلامة الشخصية, السلامة العامة', 2, NULL, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(21, 12, 'Safety Glasses', 'نظارات سلامة', 4.80, 'Categories: Personal Safety Equipment, General SafetyBrand: Dingqi', 'التصنيفات: السلامة الشخصية, السلامة العامةالعلامة التجارية: Dingqi', 2, NULL, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(22, 12, 'Safety Goggles', 'نظارات سلامة جلخ ربط', 4.80, 'Categories: Personal Safety Equipment, General Safety', 'التصنيفات: السلامة الشخصية, السلامة العامة', 6, 5, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(23, 12, 'Labor Gloves', 'كفوف عمال كتان', 4.80, 'Categories: Personal Safety Equipment, General Safety', 'التصنيفات: السلامة الشخصية, السلامة العامة', 2, 1, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(24, 12, 'Anti-Cut Gloves', 'كفوف ضد القطع', 4.80, 'Categories: Personal Safety Equipment, General Safety', 'التصنيفات: السلامة الشخصية, السلامة العامة', 3, 2, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(25, 3, 'Aluminium Ladders 5 Steps', 'سلم/سيبة المنيوم 5 درجات', 4.80, 'Categories: Aluminum Ladders, Ladders', 'التصنيفات: سلالم المنيوم, السلالم', 55, 50, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(26, 3, 'Steel Ladder 6 Step', 'سلم حديد 6 درجات', 4.80, 'Categories: Ladders, Steel Ladders', 'لتصنيفات: سلالم حديد, السلالم', 58, 57, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(27, 3, 'Plastic Two Step (Stool) Ladder', 'سلم بلاستيك درجتين', 4.80, 'Categories: Other Ladders, Ladders', 'التصنيفات: سلالم اخرى, السلالم', 28, 25, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(28, 14, 'Ceramic wall tiles', 'بلاط سيرامك للجدران  ', 4.80, 'Ceramic tiles for interior and exterior wall of villa and bathroom Polished glazed marble look porcelain tiles (120*60) cm for walls / 15 colors', 'بلاط سيراميك للحائط الداخلي والخارجي للفيلا والحمام بلاط بورسلين بمظهر الرخام المزجج المصقول قياس ( 120*60 ) سم للجدران  / 15 لون ', 20, 15, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(29, 14, 'dark brown ceramic tiles', 'بلاط سيراميك بني داكن', 4.80, 'Dark Brown Ceramic Tiles 700*1500mm Glazed Polished Porcelain Floor Tiles for Kitchen', 'بلاط سيراميك بني داكن مقاس 700*1500 مم  بلاط أرضيات مزجج مصقول من البورسلين للمطابخ', 30, 25, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(30, 14, 'Porcelain tiles for bathrooms', 'بلاط بورسلان للحمامات ', 4.80, 'Blue and white bathroom tiles, glazed polished porcelain tiles for floor and wall', 'بلاط الحمام الأزرق والأبيض ، بلاط بورسلين مصقول مزجج للأرضية والجدران', 31, 30, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(31, 14, 'Ceramic Floor Tiles', 'بلاط سيراميك', 4.80, '600x1200mm Ceramic Floor Tiles Polished Glazed Marble Outdoor and Indoor Tiles', 'بلاط أرضيات من السيراميك  مقاس 600×1200 ملم بلاط خارجي وداخلي من الرخام المزجج الملمع', 25, 23, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(32, 14, 'Wooden floor tiles', 'بلاط خشبي للارضيات  ', 4.80, 'Simple Wood Effect Ceramic Porcelain Floor Tiles with Wood Finish/15*90cm', 'بلاط خشبي للأرضيات بتأثير بسيط من السيراميك والبورسلين بجزء نهائي خشبي /قياس 15*90سم', 15, 14, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(33, 14, 'Wooden floor tiles', 'بلاط خشبي للارضيات  ', 4.80, 'Foshan Ceramic Tiles Glazed Wood Grain Rustic Design Living Room Floor Tiles 200x1000mm', 'بلاطة فوشان من السيراميك والأرضيات الخشبية المزججة ذات التصميم الريفي لغرفة المعيشة 200×1000 ملم', 12, 10, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(34, 14, 'outdoor tiles', 'بلاط خارجي ', 4.80, 'External floor ceramic / embossed stone 50*50 cm', 'سيراميك أرضيات خارجي حجري بارز 50×50', 5, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(35, 14, 'outdoor tiles', 'بلاط خارجي ', 4.80, 'Paving tiles / garden floor tiles', 'بلاط رصف / بلاط أرضيات للحدائق', 30, 25, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(36, 14, ' terrazzo tile', 'بلاط تيرازو', 4.80, 'Large size terrazzo tile 600x1200, antique tile with large specifications', ' بلاط تيرايزو كبير الحجم 600 × 1200 ، بلاط عتيق بمواصفات كبيرة', 20, 15, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(37, 4, 'Precision Screwdrivers Set', ' طقم مفكات الكتروني', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool', 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool', 4, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(38, 4, 'Metal Tool Box 16 inch', 'صندوق عدة حديد 16 انش', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder', 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder', 14, 10, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(39, 4, 'Tape Measure 5mx25mm', 'متر قياس 5 متر*25 ملم', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony', 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony', 8, 7, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(40, 4, 'Laser Distance Measure 50m', 'متر قياس ليزر 50 متر', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix', 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix', 35, 30, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(41, 4, 'Stoning Hammer 500 gram', 'شاكوش خلع نجارين 500 غرام', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers', 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش', 4, NULL, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(42, 10, 'Sledge Hammer 3 Kilo', 'مهدة 3 كيلو', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Hammers', 'التصنيفات: العدد اليدوية, العدد و الادوات, الشواكيش', 17, 15, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(43, 10, 'Gasoline Generator 1 KVA', 'مولد بنزين 1 كيلو فولت', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Gasoline GeneratorBrand: Marquis', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, المولدات الكهربائيةالعلامة التجارية: Marquis', 210, 200, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(44, 10, 'Air Compressors 50Ltr', 'كومبرسر هواء 50 لتر', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Dingqi', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Dingqi', 185, 183, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(45, 10, 'Air Compressors 100Ltr', 'كومبرسر هواء 100 لتر', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Air CompressorsBrand: Ingco', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, الكمبريسرالعلامة التجارية: Ingco', 470, 460, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(46, 10, 'Industrial Tile Cleaning Machine', 'ماكنة جلي بلاط', 4.80, 'Categories: Hardware and Tools, Electrical & Industrial Tools, Industrial Cleaning Equipments', 'التصنيفات: العدد و الادوات, العدد الكهربائية و الصناعية, لوازم تنظيف صناعية', 650, 640, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(47, 1, 'Aluminium Ladders 5 Steps', 'سلم/سيبة المنيوم 5 درجات', 4.80, 'Categories: Aluminum Ladders, Ladders1111111111111111', 'التصنيفات: سلالم المنيوم, السلالم', 55, 50, 1, 50, '2024-10-12 19:25:55', '2024-10-25 03:18:21'),
(48, 1, 'Steel Ladder 6 Step', 'سلم حديد 6 درجات', 4.80, 'Categories: Ladders, Steel Ladders', 'لتصنيفات: سلالم حديد, السلالم', 58, 57, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(49, 1, 'Plastic Two Step (Stool) Ladder', 'سلم بلاستيك درجتين', 4.80, 'Categories: Other Ladders, Ladders', 'التصنيفات: سلالم اخرى, السلالم', 28, 25, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(50, 8, 'Precision Screwdrivers Set', ' طقم مفكات الكتروني', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool', 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool', 4, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(51, 8, 'Metal Tool Box 16 inch', 'صندوق عدة حديد 16 انش', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder', 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder', 14, 10, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(52, 8, 'Tape Measure 5mx25mm', 'متر قياس 5 متر*25 ملم', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony', 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony', 8, 7, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(53, 8, 'Laser Distance Measure 50m', 'متر قياس ليزر 50 متر', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix', 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix', 35, 30, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(54, 9, 'Precision Screwdrivers Set', ' طقم مفكات الكتروني', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Precision Screwdrivers, ScrewdriversBrand: Jetech Tool', 'لتصنيفات: العدد اليدوية, العدد و الادوات, مفكات الكترونيات, المفكاتالعلامة التجارية: Jetech Tool', 4, 4, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(55, 9, 'Metal Tool Box 16 inch', 'صندوق عدة حديد 16 انش', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Tool & Screw BoxesBrand: Finder', 'التصنيفات: صناديق عدة وعلب براغي, العدد اليدوية, العدد و الادواتالعلامة التجارية: Finder', 14, 10, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(56, 9, 'Tape Measure 5mx25mm', 'متر قياس 5 متر*25 ملم', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: King Tony', 'التصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: King Tony', 8, 7, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(57, 9, 'Laser Distance Measure 50m', 'متر قياس ليزر 50 متر', 4.80, 'Categories: Hardware and Tools, Hand Tools & Tools, Measuring Tapes& ToolsBrand: Ronix', 'لتصنيفات: العدد اليدوية, العدد و الادوات, أدوات قياس وامتارالعلامة التجارية: Ronix', 35, 30, 1, 50, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(58, 11, 'voluptate', 'facilis', 4.10, 'Enim fuga ut sint laboriosam distinctio. Dolorem amet voluptatem aut animi eum distinctio voluptatem. Illum quis voluptatibus soluta voluptatem deleniti.\n\nQui aliquam alias debitis iste maxime officia. Et ipsa ipsam est iusto veniam sunt ullam. Voluptas est fugit incidunt temporibus ratione quidem molestias.\n\nPlaceat doloremque error aut quam deserunt facilis officia. Sit voluptates non distinctio fuga at illo sint expedita. Ipsa amet aut ad sit sint dolorum quis. Iure sit ut ipsam dolor.', 'Sed accusantium molestiae et rerum.', 23, 14, 1, 45, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(59, 17, 'in', 'reprehenderit', 2.60, 'Est commodi qui qui doloremque. Vitae quibusdam quidem sapiente voluptas. Quaerat corporis quia est odit. Modi iusto doloremque incidunt eos explicabo. Perferendis cum numquam vel id maxime possimus.\n\nQuo delectus maiores laboriosam assumenda. Hic quis voluptatibus nihil recusandae deleniti facere eum quia. Corrupti sunt ut dolorum ut tenetur autem.\n\nSit pariatur non aut aut incidunt consequuntur dolores. Totam quam earum dolor soluta nemo eaque unde laboriosam.', 'Est nesciunt distinctio vel adipisci aut.', 34, 44, 1, 73, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(60, 6, 'libero', 'voluptas', 4.10, 'Maxime aut voluptatem illum quisquam corrupti omnis autem. Distinctio aperiam rem in dolore. Repellendus et dignissimos dignissimos voluptatibus quis odit adipisci quia. Voluptas magnam in ut sunt distinctio.\n\nDolorum iure in laboriosam. Quaerat delectus accusamus nobis deleniti a. Qui ipsum vero iusto non molestiae. Est id possimus quis veritatis atque veritatis consequatur.\n\nLibero consequatur dicta sit officiis in harum. Vitae voluptatem autem neque quia repellendus explicabo dolores. Porro sed totam vero incidunt.', 'Nobis voluptatibus eius neque expedita.', 15, 45, 1, 9, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(61, 11, 'aut', 'ducimus', 4.40, 'Animi perferendis itaque temporibus ea. Quisquam placeat dolorem sapiente dolorem quis. Minus velit quae consectetur voluptates recusandae magnam rerum.\n\nSit quisquam dolor et sit laboriosam nihil. Consectetur at autem laudantium sequi et. Fugit impedit atque itaque est repellendus cumque magnam. Veritatis accusantium nam iure esse ipsum necessitatibus.\n\nAliquid alias qui pariatur autem. Eum magnam atque cumque et adipisci veniam modi et. Repellendus dolor pariatur qui minima soluta eius.', 'Molestiae voluptate eum quis deleniti.', 28, 32, 0, 45, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(62, 7, 'accusamus', 'quasi', 4.10, 'Est quo quis cupiditate quos quas est neque dolorem. Debitis qui consequuntur non est eaque unde. Vitae similique dolores perferendis est quis distinctio. Et et quo nihil qui sequi.\n\nRerum aut delectus dicta porro sit at voluptatem. Ullam est culpa esse voluptas ut expedita. Cum quia adipisci maiores quia.\n\nDolor iusto aliquid qui sit exercitationem aliquam dolor. Et laborum doloremque soluta ratione sit iusto aut laudantium. Molestias nam est est neque modi beatae culpa.', 'Consectetur quia accusamus dolore odit illum culpa facilis.', 37, 36, 1, 9, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(63, 6, 'aut', 'rem', 4.60, 'Occaecati earum at aut. Deleniti provident qui qui dolores eius. Repudiandae debitis quam facere. Saepe est tempora quidem omnis voluptas.\n\nQui magnam modi aut deserunt sit. Itaque porro officiis sequi laboriosam et perspiciatis iure. Quasi consequatur harum molestiae laborum. Quisquam ut quo fugit in laborum aut quam.\n\nPossimus itaque et sit placeat. Voluptatem voluptatum harum soluta. Quis dolor enim debitis facilis qui.', 'Doloribus esse sed quia non dolores iste nobis sapiente.', 13, 35, 0, 89, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(64, 7, 'voluptatem', 'nostrum', 1.10, 'Accusamus aut maiores officia reiciendis dolores sed dolores. Vel natus voluptatem repellat quo nihil quo. Debitis illo dolorum aspernatur quia porro consequatur. Voluptas accusamus autem voluptatem corrupti.\n\nTempora consequatur dignissimos laudantium sed quidem deserunt officiis. Iusto totam sit corrupti sequi eius tempora sed ut. Voluptatem dicta porro esse.\n\nDolores vero eos beatae vel deleniti aspernatur. Officiis magni et reiciendis assumenda. Quas itaque dolores voluptatibus et et et. Eligendi consequatur illum magni natus totam.', 'Aut libero voluptatem est aut dolores illum.', 48, 13, 0, 77, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(65, 17, 'quis', 'doloribus', 3.10, 'Optio velit eum vel minima consequatur dolorum. Quis nisi impedit molestiae. Facilis beatae soluta libero.\n\nModi eveniet consequatur atque quo eos eum deserunt vitae. Ad inventore sint sed iure maxime. Consequatur consectetur alias occaecati cupiditate est voluptas. Libero quibusdam tempore rem quaerat voluptatem mollitia dolores necessitatibus.\n\nAliquam aperiam quaerat rerum et. Optio nam reprehenderit voluptas. Quibusdam consequuntur quibusdam animi est sed.', 'Itaque ut explicabo distinctio fugiat.', 37, 20, 1, 55, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(66, 7, 'est', 'aut', 2.50, 'Sint error maxime harum voluptas ipsam quo at. At rerum doloribus ad esse aut officiis. Illum est quos asperiores optio reiciendis quaerat ut. Voluptatibus quia est rerum ut.\n\nNemo culpa aut quibusdam. Id accusantium culpa minus. Laboriosam facilis quibusdam adipisci ea corrupti qui dicta ut.\n\nProvident sint sunt sit enim non tempora blanditiis. Expedita architecto ut officiis fugiat atque. Illum omnis perferendis praesentium est.', 'Sunt nesciunt non cum voluptatum.', 23, 20, 0, 32, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(67, 17, 'atque', 'velit', 4.50, 'Dicta qui aliquid inventore ab quam maiores iusto quod. Tempore sit laudantium voluptates.\n\nTempore fugiat id autem eos qui sed commodi. Alias autem autem quia soluta. Minima ab eaque adipisci illo similique. Cumque magnam minima quibusdam id tempore repellat quaerat.\n\nIn voluptatem reprehenderit ut atque quam ea tempore. Excepturi earum sed dolores eum. Ut error harum repellendus eum fuga mollitia mollitia nulla.', 'Et repudiandae cupiditate qui sint provident.', 26, 15, 0, 14, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(68, 15, 'sequi', 'provident', 2.50, 'Expedita nisi ut officiis voluptatem tempore. Voluptatibus ut incidunt et. Tempora eos et tenetur dolor. Quia consequuntur nostrum qui pariatur.\n\nFugit perspiciatis blanditiis perferendis et dolores totam qui. Aliquam recusandae dolorum beatae eum eos autem amet. Possimus unde iure provident veritatis.\n\nConsequatur consequatur et est et ipsa. Delectus vitae ad autem aut tempora. Nisi aut dolor quo illo ut reiciendis consequuntur.', 'Qui laudantium et pariatur dolore.', 40, 43, 1, 63, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(69, 17, 'est', 'quia', 3.00, 'Beatae nobis eum voluptatem eum illo. Voluptate modi ipsum provident voluptatibus aut accusantium.\n\nEt quam aut reprehenderit totam unde repudiandae. Nobis quasi deserunt ab beatae odit. Corrupti molestias impedit odit sunt laboriosam voluptas sunt. Ut eveniet numquam vitae facere aspernatur atque.\n\nFugiat amet et aut unde ratione deserunt. Ut sunt aut iusto vel placeat adipisci. Et dolor voluptas cupiditate quas.', 'Sint impedit dolorem vel consequatur quasi et mollitia.', 12, 13, 1, 87, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(70, 6, 'consequatur', 'pariatur', 1.40, 'Maxime inventore recusandae quae sit quam rem suscipit voluptas. Qui et dolorem corporis qui labore. Perferendis a sunt et nisi voluptas quam. Mollitia nihil tempora maiores voluptatem ut eligendi.\n\nNisi rem assumenda in molestiae. Ab tenetur est consequatur voluptatem placeat excepturi deleniti. Aut corporis sed voluptas fuga et. Est consequuntur quas eos.\n\nMaiores cumque quo dolorem dolorem sed. Saepe natus soluta rem cupiditate deserunt est. Magnam veniam omnis molestiae.', 'Sit suscipit cupiditate et laborum ut ex.', 30, 47, 0, 74, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(71, 15, 'et', 'voluptatibus', 4.80, 'Exercitationem veniam ullam possimus debitis. Voluptatem eius perferendis est aperiam qui.\n\nEos quos vitae neque ea iusto hic. Minus dolorem voluptatem molestiae nihil. Error quia numquam aut iure voluptates est reprehenderit.\n\nNemo consequuntur temporibus inventore pariatur totam rerum eveniet. Amet magnam quidem voluptates voluptas. Exercitationem et labore qui.', 'Voluptatem omnis iure quam ut.', 42, 43, 1, 75, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(72, 17, 'provident', 'quasi', 1.90, 'Repellendus aut sint a vel est et. Aut ut sint hic. Enim consequatur alias nobis ut sapiente. Ut quidem et omnis deserunt corporis autem ratione. Ut dolor qui ut ipsa quia.\n\nSunt ut qui nemo ut accusantium quisquam optio. Incidunt numquam magni magni. Aut nobis optio maxime alias.\n\nAliquid voluptatibus et reiciendis et architecto et facilis. Sed dignissimos autem consequatur dolore. Saepe occaecati ipsa omnis accusamus.', 'Minus sed consequatur consequatur quia.', 26, 12, 0, 91, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(73, 15, 'ut', 'aliquam', 3.90, 'Voluptas et perferendis esse voluptatem earum. Voluptas quaerat expedita sed consequatur nostrum ipsum laborum. Et cupiditate laboriosam aut minus quibusdam aliquam. Dignissimos consequuntur similique adipisci commodi error. Ipsum sed nam totam incidunt.\n\nDicta quia autem iste quia aliquid praesentium. Dolorem in dignissimos quasi accusamus minima et dicta.\n\nUt blanditiis quidem consectetur. Rerum ipsa ea voluptatem in voluptas. Neque veritatis est et aperiam corrupti quaerat. Aut eos id sed nihil pariatur.', 'Natus quis magni eos et provident.', 40, 48, 0, 8, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(74, 15, 'cum', 'corrupti', 4.80, 'Omnis amet officia labore. Beatae hic sint accusamus ad sed. Saepe nemo at est est non.\n\nAperiam rerum voluptatem est. Qui optio sunt et est debitis ullam consequatur. Provident voluptates ut repellendus pariatur omnis est voluptas.\n\nAutem qui labore eveniet itaque. Hic veritatis sunt qui voluptatem consequatur deleniti. Quo rem enim dolores qui laborum qui dolores.', 'Molestiae ea amet libero voluptatem a.', 19, 33, 0, 62, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(75, 11, 'nostrum', 'assumenda', 3.80, 'Animi enim mollitia recusandae dolore consequatur. Temporibus exercitationem qui aut quasi velit. Et temporibus voluptatem non vel. Vel accusantium ex quas vitae ut quidem.\n\nIpsam quia sed dolor debitis laborum autem. Quia in error molestiae sunt ut. Quas explicabo aut velit qui nesciunt aliquam.\n\nAt est aliquam sed velit veritatis. Ad consectetur omnis aut et perspiciatis corrupti totam. Ratione delectus quasi dolorum quod sint inventore est nesciunt. Incidunt qui ipsam sapiente dolores aspernatur.', 'Architecto incidunt molestiae velit aut eum voluptate.', 15, 31, 0, 34, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(76, 17, 'deleniti', 'eos', 3.50, 'Commodi provident rerum velit et. Omnis esse aspernatur id vero exercitationem quia. Ipsam cumque labore ut unde. Unde molestias magni qui esse dolor.\n\nRepudiandae illo vel voluptatem itaque sapiente nihil qui. Minima enim non minus omnis est quia. Quasi ut cupiditate nihil quisquam et. Sequi voluptatem quos totam facilis incidunt est modi est.\n\nLaboriosam quia velit magnam labore deleniti atque illo rem. Voluptatum recusandae voluptatum in ex.', 'Dolorum deleniti sed quo fugiat error omnis iure.', 26, 15, 0, 0, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(77, 16, 'asperiores', 'optio', 3.70, 'Dolorem quis molestias dolore dolorem reprehenderit sunt et delectus. Sit sequi numquam at nostrum harum fuga. Non eos facilis et consectetur enim.\n\nConsequatur sint tenetur et tempore quis. Voluptas ea commodi possimus nam et ea dicta. Aut doloribus eaque hic perspiciatis repellendus maiores commodi. Et itaque aliquid nihil est cumque est.\n\nPossimus eum libero est fuga eum. Qui occaecati nemo numquam recusandae perferendis repellendus. Vel eum sit voluptatibus quis. Excepturi ut explicabo tempore voluptatibus maiores similique.', 'Repellendus ut nemo voluptas quis illum corrupti.', 41, 22, 0, 32, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(78, 11, 'eius', 'repellat', 3.60, 'Debitis velit ullam hic et libero aut. Qui id minima commodi. Fugit excepturi ullam perspiciatis in occaecati perspiciatis sed. Molestiae provident adipisci iure molestiae.\n\nAtque earum est id perspiciatis omnis dolor similique. Magnam debitis nam aut et. Autem laborum quos tempore culpa magnam qui.\n\nIllo fugit et voluptas nisi. Aperiam quaerat et dignissimos nemo repudiandae.', 'Reprehenderit doloremque numquam molestiae libero est.', 31, 14, 0, 38, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(79, 7, 'est', 'doloribus', 3.10, 'Minus commodi id quis officia qui. Et non sint ut ea perspiciatis quidem quis. Ratione in quia est culpa dolorem.\n\nQuia quia corporis est nisi. Quia aut iste ut adipisci aut ratione. Quis id consequuntur dolores dolorem. Fugiat qui non aspernatur.\n\nNisi aut neque quia nemo aut rerum. Omnis quo recusandae harum voluptatum odio. Et illum adipisci iusto neque aut non. Nihil eius officiis vel ea. Qui nemo quia voluptas illum praesentium.', 'Incidunt est quo blanditiis laboriosam ipsam pariatur.', 17, 17, 1, 13, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(80, 17, 'sequi', 'et', 3.30, 'Ea quia animi est enim explicabo aliquam. Nostrum consectetur dolorem vel odio. Nemo dicta vel incidunt eum. Quasi perferendis unde autem tempore non in.\n\nCorporis voluptate necessitatibus exercitationem. Nihil qui et tempora aut voluptatum id. Repudiandae similique non excepturi. Laborum aut pariatur doloremque eos.\n\nCorporis ducimus voluptate nobis voluptate illo officia sit laboriosam. Aspernatur culpa nihil veritatis velit. Et et optio autem adipisci earum aut laboriosam. Sit omnis rem eum.', 'Corporis recusandae tempore non voluptates porro voluptatem et.', 32, 29, 1, 40, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(81, 6, 'voluptatem', 'nobis', 3.20, 'Dolor possimus rerum modi magnam consequatur recusandae. Quis recusandae quaerat reiciendis. At officia nesciunt earum doloribus aut eum. Earum est quasi quia quo.\n\nQuos incidunt placeat vel. Id eligendi a sunt fuga adipisci dolorem. Voluptate saepe accusantium aliquid quibusdam qui.\n\nEum eaque laudantium corrupti ad rem ea eum. Amet doloribus inventore et minus. Et corrupti animi voluptatibus exercitationem accusamus iure ut. Quo id accusantium porro ut quia voluptatum repellat.', 'Perferendis fugit ipsum sed nemo iusto.', 19, 46, 1, 77, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(82, 7, 'cupiditate', 'vero', 1.80, 'In sit sunt maxime. Temporibus nemo illo animi qui qui perferendis quibusdam. Odio in molestiae et et rem corrupti. Placeat accusantium inventore quis temporibus cum est molestiae laboriosam. Cupiditate qui voluptas consectetur assumenda nihil ullam.\n\nRerum dolorem non voluptatum consequatur. Rem aspernatur minus dolores repellendus minima laborum. Molestiae nesciunt harum nihil dolorum. Ducimus quia est sunt esse voluptates.\n\nA esse eum illum voluptate debitis nam. Suscipit quam veniam repudiandae. Facere assumenda quo aut molestiae autem. Corporis voluptatem adipisci optio eveniet adipisci sapiente doloribus.', 'Officiis dolorem voluptatibus voluptas est quasi facere.', 46, 19, 0, 55, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(83, 7, 'dolor', 'nihil', 2.90, 'Impedit autem doloribus aut illum. Quia saepe velit dolores odio et. Temporibus dolores distinctio commodi dignissimos dolorem natus saepe. Dolore porro mollitia quo sed minus illo.\n\nDebitis enim quisquam sed non. Iure ipsa praesentium voluptatum laudantium voluptatum modi quis molestias. Impedit itaque animi labore porro. Necessitatibus esse deleniti consectetur tempore qui saepe.\n\nQuia rerum eius cumque nemo architecto quisquam. Quod libero excepturi reiciendis consequatur expedita voluptatem. Corrupti autem inventore quisquam quis.', 'Voluptatibus deleniti qui et animi a vel et.', 31, 32, 1, 29, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(84, 15, 'eos', 'voluptas', 2.20, 'Quae provident fugit architecto molestias neque. Omnis aut quos id aliquid sunt facilis doloremque. Nulla aut pariatur autem.\n\nExercitationem est tempore inventore qui reiciendis. Quis ut autem neque laboriosam enim. Dicta dolor dolorem et cupiditate quia.\n\nCulpa occaecati magni maxime et perferendis fugiat. Quasi iste et possimus. Iste dolore et repellat. Porro repellendus minima qui molestias non molestiae voluptas beatae.', 'Incidunt blanditiis quia sed dolorem nulla nesciunt eius.', 37, 14, 0, 20, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(85, 17, 'enim', 'sit', 4.00, 'Aut molestiae aut est eos aut inventore. Exercitationem occaecati quisquam consectetur molestiae at et. Ab corrupti expedita atque sunt molestiae sed.\n\nIn iste eaque facere et consectetur totam. Id in eum qui qui fugit id cum. Qui nulla deleniti voluptatem quia.\n\nSit et nobis dolor aliquam laboriosam quisquam. Neque accusantium voluptatem nihil non dolores. Blanditiis est sit minus maiores. Consequatur repellat sit minus reiciendis.', 'Et quidem iste beatae quia aut nisi quia.', 37, 42, 0, 82, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(86, 7, 'qui', 'necessitatibus', 4.90, 'Doloribus in voluptas tempore repudiandae ut sed quam. Quis ut quis magni tenetur aut dolores eum quasi. Ab sint perspiciatis error ea.\n\nFugit aut natus officia ipsum fugiat dicta hic. Ut incidunt sed nam nihil dolores. Qui fugiat qui et consectetur. Dolores sed illo ipsam dicta aut illo vel.\n\nVelit ab ipsum et ut consequatur voluptas cum. Ex ipsam quam repudiandae minima fugit dolorum distinctio. Aspernatur consequuntur quidem quod rerum aliquam ipsa facilis consequatur.', 'Illo maiores culpa temporibus.', 11, 24, 0, 87, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(87, 6, 'deleniti', 'est', 4.00, 'Aperiam aspernatur ipsum dolore ut quia. Blanditiis est et laborum labore nesciunt. Qui dignissimos voluptatum veniam tenetur placeat molestiae repudiandae. Dolorem rerum eligendi voluptatibus perferendis qui veniam explicabo molestiae. Sed facere ad pariatur pariatur.\n\nMolestiae aut sapiente quam ducimus libero. Sed iste odio quibusdam et ea. Voluptatem qui quia soluta quas error. Sed rerum unde repudiandae vitae odio aut hic.\n\nMolestias nihil ea id rerum delectus dignissimos. Rerum iste deleniti quasi. Quis dicta quis dolores voluptates.', 'Accusantium vel et ab molestiae aliquid ad.', 30, 26, 0, 90, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(88, 1, 'testtttttttttt', 'تستتتتتتتتتتتتتتت', 0.00, 'ddddddddddddddddddddddddddddddddd', 'ببببببببببببببببببببببببببببببببببببببببببب', 20, NULL, 0, 10, '2024-10-25 03:03:28', '2024-10-25 03:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `proposal` text NOT NULL,
  `price_per_hour` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `handyman_id`, `store_id`, `product_id`, `gig_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL, NULL, 'bad service, bad comminication!', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 2, NULL, NULL, NULL, 1, 'TOS Violation!', '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 2, NULL, 1, NULL, NULL, 'bad service, bad comminication!', '2024-10-12 19:25:56', '2024-10-12 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED DEFAULT NULL,
  `store_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gig_id` bigint(20) UNSIGNED DEFAULT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `handyman_id`, `store_id`, `product_id`, `client_id`, `gig_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL, NULL, NULL, 'Great service, highly recommend!', 5, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 2, NULL, 1, NULL, NULL, NULL, 'Excellent product selection.', 4, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 2, NULL, NULL, 1, NULL, NULL, 'The power drill works perfectly.', 5, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(4, 3, NULL, NULL, NULL, 1, NULL, 'The client was perfect.', 5, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(5, 3, 2, NULL, NULL, NULL, 1, 'kkk', 4, '2024-10-17 19:35:47', '2024-10-17 19:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(2, 'User', '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(3, 'Store Owner', '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(4, 'Handyman', '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity_sold` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `sale_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `store_id`, `product_id`, `user_id`, `quantity_sold`, `total_amount`, `sale_date`, `status_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 2, 2, 298, '2024-10-12 19:25:55', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(2, 17, 17, 4, 2, 360, '2024-07-07 22:50:49', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(3, 14, 19, 2, 2, 209, '2024-07-22 09:23:16', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(4, 9, 10, 2, 2, 382, '2024-07-15 19:31:01', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(5, 17, 14, 1, 1, 955, '2024-10-08 23:36:29', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(6, 15, 19, 4, 2, 719, '2024-04-06 17:28:07', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(7, 17, 14, 3, 2, 596, '2024-02-16 21:26:17', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(8, 16, 27, 3, 2, 146, '2024-06-10 12:54:15', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(9, 13, 31, 4, 2, 875, '2024-07-26 09:27:16', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(10, 17, 24, 2, 1, 932, '2024-01-24 00:37:29', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(11, 12, 28, 2, 1, 285, '2024-06-16 17:40:57', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(12, 14, 13, 3, 1, 824, '2024-07-22 12:33:14', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(13, 16, 10, 2, 2, 216, '2024-08-17 16:22:34', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(14, 12, 17, 2, 1, 272, '2024-06-09 23:41:13', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(15, 12, 14, 2, 1, 55, '2024-01-07 08:46:37', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(16, 14, 29, 4, 1, 280, '2024-01-16 17:18:29', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(17, 15, 21, 3, 2, 498, '2024-07-07 11:45:35', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(18, 14, 1, 1, 2, 961, '2024-09-05 09:19:33', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(19, 14, 22, 3, 1, 839, '2024-04-01 19:24:39', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(20, 17, 10, 2, 2, 98, '2024-05-30 05:00:31', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(21, 15, 14, 3, 2, 865, '2024-06-17 06:44:30', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(22, 10, 14, 3, 1, 707, '2024-06-23 08:19:14', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(23, 12, 32, 4, 2, 761, '2024-01-17 10:48:00', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(24, 9, 31, 3, 1, 440, '2024-02-23 06:34:28', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(25, 17, 8, 4, 1, 426, '2024-05-21 13:03:43', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(26, 15, 32, 1, 2, 454, '2024-08-18 07:32:03', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(27, 15, 18, 2, 1, 761, '2024-05-25 02:03:13', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(28, 2, 36, 3, 2, 815, '2024-01-26 16:48:55', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(29, 11, 7, 4, 1, 921, '2024-06-07 19:49:28', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(30, 17, 23, 3, 1, 64, '2024-05-15 05:35:33', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(31, 17, 24, 1, 1, 848, '2024-01-20 04:22:25', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(32, 15, 35, 3, 1, 199, '2024-08-10 01:15:23', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(33, 15, 25, 3, 2, 836, '2024-04-18 14:36:19', 19, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(34, 10, 11, 3, 2, 261, '2024-08-04 21:01:55', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(35, 10, 35, 3, 1, 162, '2024-05-04 11:56:19', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(36, 15, 23, 4, 2, 606, '2024-10-04 07:52:47', 16, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(37, 12, 25, 4, 2, 474, '2024-04-24 14:18:18', 17, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(38, 14, 10, 4, 1, 767, '2024-07-11 06:43:37', 18, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(39, 16, 34, 4, 1, 820, '2024-03-22 16:33:32', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(40, 16, 19, 2, 1, 332, '2024-05-22 03:45:25', 19, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(41, 16, 33, 4, 2, 441, '2024-03-19 07:17:54', 18, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(42, 12, 21, 2, 1, 455, '2024-01-03 18:11:20', 18, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(43, 8, 24, 3, 2, 360, '2024-05-30 06:49:00', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(44, 14, 35, 1, 1, 767, '2024-09-18 13:38:07', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(45, 13, 26, 4, 1, 765, '2024-03-17 03:43:29', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(46, 13, 5, 1, 2, 354, '2024-07-19 23:16:33', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(47, 12, 35, 3, 2, 891, '2024-03-01 05:16:51', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(48, 2, 18, 2, 2, 848, '2024-09-02 12:21:24', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(49, 12, 10, 3, 2, 252, '2024-02-21 19:40:27', 18, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(50, 12, 4, 4, 2, 552, '2024-05-09 18:50:18', 19, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(51, 8, 30, 4, 2, 981, '2024-07-30 21:28:11', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(52, 12, 29, 1, 1, 381, '2024-07-22 07:50:34', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(53, 13, 17, 2, 1, 151, '2024-09-08 14:30:21', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(54, 14, 19, 1, 1, 221, '2024-06-02 04:35:12', 19, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(55, 13, 36, 3, 1, 926, '2024-04-16 21:06:00', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(56, 13, 7, 3, 1, 217, '2024-01-26 05:42:48', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(57, 15, 17, 3, 2, 203, '2024-09-30 22:24:52', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(58, 13, 8, 2, 2, 289, '2024-05-26 19:23:44', 17, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(59, 14, 19, 3, 2, 641, '2024-09-01 17:50:13', 19, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(60, 16, 25, 2, 1, 993, '2024-01-18 17:20:38', 16, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(61, 13, 33, 2, 2, 56, '2024-02-17 18:31:21', 18, '2024-10-12 19:25:56', '2024-10-12 19:25:56', NULL),
(62, 1, 47, 2, 1, 55, '2024-10-25 18:45:24', 17, '2024-10-25 15:10:30', '2024-10-25 15:45:24', NULL),
(63, 1, 48, 2, 1, 58, '2024-10-25 18:45:04', 17, '2024-10-25 15:10:30', '2024-10-25 15:45:04', NULL),
(64, 1, 49, 2, 1, 28, '2024-10-25 15:10:30', 16, '2024-10-25 15:10:30', '2024-10-25 15:10:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `name`, `name_ar`, `description`, `description_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'General Furniture Assembling', 'تجميع الأثاث بجميع الأنواع', 'We assemble various types of furniture including beds, wardrobes, tables, and more for safe usage at home or office.', 'نقوم بتجميع جميع أنواع الأثاث مثل الأسرة والخزائن والطاولات وغيرها، لضمان الاستخدام الآمن في المنزل أو المكتب بأعلى كفاءة ممكنة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(2, 1, 'Professional IKEA Assembling', 'تجميع اثاث ايكيا بطريقة محترفة', 'Expertly assembling IKEA furniture based on specific instructions, ensuring precision and adherence to every detailed specification.', 'نقوم بتجميع أثاث ايكيا بناءً على التعليمات المحددة بدقة، لضمان الامتثال لكل التفاصيل المحددة والتأكد من الجودة العالية للخدمة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(3, 1, 'Assembling of Baby Cribs Safely', 'تجميع أسرة الأطفال بكل أمان', 'Safe and professional assembly of baby cribs with proper attention to fitting, ensuring full adherence to safety regulations.', 'تجميع آمن واحترافي لأسرة الأطفال مع الانتباه الكامل للتركيب، وضمان الامتثال التام لمعايير السلامة المطلوبة بكل دقة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(4, 1, 'PAX Wardrobes Assembling Service', 'خدمة تجميع خزانات PAX بشكل جيد', 'We assemble PAX wardrobes, offering customization options to suit your space while ensuring a perfect and balanced fit.', 'نقوم بتجميع خزانات PAX مع تقديم خيارات تخصيص لتناسب مساحتك، مع ضمان تركيب مثالي ومتوازن في جميع الأوقات.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(5, 1, 'Custom Assembly of Bookshelves', 'تجميع الرفوف المكتبية المتنوعة', 'Bookshelf assembly services designed to provide strong and secure fitting, ensuring long-lasting stability for your books.', 'خدمات تجميع الرفوف المكتبية لضمان التركيب المتين والآمن، مما يوفر الثبات الدائم لمقتنياتك ومجموعتك من الكتب.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(6, 1, 'Assembling Office Desks Precisely', 'تجميع مكاتب العمل بشكل احترافي', 'Precise assembly of office desks for workspaces at home or in the office, ensuring stability for daily work and efficiency.', 'تجميع مكاتب العمل بدقة للمساحات المكتبية أو المنزلية، لضمان الاستقرار والفعالية لاستخدامها في العمل اليومي بمرونة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(7, 2, 'Mounting Art, Mirrors & Decor', 'تركيب الفن والمرايا والزينة', 'Mounting services for art, mirrors, and decorative pieces, ensuring perfect alignment for aesthetic appeal in your spaces.', 'خدمات تركيب الفن والمرايا والزينة بدقة، لضمان المحاذاة المثالية وإضافة جاذبية جمالية في مختلف أركان المكان.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(8, 2, 'Blinds and Window Treatments', 'تركيب الستائر ومعالجات النوافذ', 'Installation of blinds and window treatments with care to ensure smooth functionality and privacy in all rooms.', 'تركيب الستائر ومعالجات النوافذ بعناية لضمان التشغيل السلس وتوفير الخصوصية في جميع الغرف في المنزل أو المكتب.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(9, 2, 'Anchoring Furniture Securely', 'تركيب وتأمين الأثاث بشكل آمن', 'We offer secure anchoring of furniture to prevent tipping, especially important for homes with children or pets.', 'نقدم خدمات تثبيت الأثاث بشكل آمن لمنع الانقلاب، وهو أمر مهم للغاية في المنازل التي بها أطفال أو حيوانات أليفة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(10, 2, 'Installing Shelves & Rods Properly', 'تركيب الرفوف والقضبان بمهارة', 'Professional installation of shelves, rods, and hooks, ensuring durability and proper alignment for weight balance.', 'تركيب احترافي للرفوف والقضبان والحوامل لضمان المتانة والمحاذاة الصحيحة للحفاظ على توازن الأحمال.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(11, 2, 'Television Wall Mounting Service', 'خدمة تركيب التلفاز على الحائط', 'Mounting televisions on the wall securely, ensuring proper viewing angles and safety of the mounted hardware.', 'تركيب أجهزة التلفاز على الجدران بشكل آمن، لضمان زوايا المشاهدة المناسبة والحفاظ على سلامة المعدات المثبتة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(12, 2, 'Other Specialized Mounting Jobs', 'خدمات تركيب أخرى متخصصة', 'Handling any specialized mounting job you may have, tailored to your specific needs and space requirements.', 'التعامل مع أي عملية تركيب متخصصة قد تحتاجها، مصممة خصيصًا لتلبية احتياجاتك ومتطلبات مساحتك.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(13, 3, 'Help Moving Safely and Quickly', 'المساعدة في النقل بأمان وسرعة', 'Reliable moving services to help you transport your belongings safely and efficiently to your new location.', 'خدمات نقل موثوقة لمساعدتك في نقل ممتلكاتك بأمان وكفاءة إلى موقعك الجديد بأسرع وقت ممكن.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(14, 3, 'Truck-Assisted Help Moving', 'المساعدة في النقل باستخدام الشاحنة', 'Full-service moving with truck assistance, ensuring the safe and timely delivery of your belongings to your destination.', 'خدمة نقل كاملة بمساعدة شاحنة لضمان تسليم ممتلكاتك بأمان وفي الوقت المحدد إلى وجهتك.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(15, 3, 'Trash & Furniture Removal Jobs', 'إزالة القمامة والأثاث القديم', 'Efficient removal of trash, old furniture, and unwanted items, ensuring a clean and clutter-free environment.', 'إزالة فعالة للقمامة والأثاث القديم والأغراض غير المرغوب فيها لضمان بيئة نظيفة وخالية من الفوضى.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(16, 3, 'Heavy Lifting and Loading Service', 'خدمة رفع وتحميل الأوزان الثقيلة', 'Professional heavy lifting services to safely move large and bulky items, minimizing damage during transportation.', 'خدمات رفع وتحميل احترافية لنقل الأشياء الكبيرة والضخمة بأمان وتقليل أي ضرر أثناء النقل.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(17, 3, 'Rearranging Furniture In Homes', 'إعادة ترتيب الأثاث في المنازل', 'We assist in rearranging your furniture to optimize space and improve the aesthetic appeal of your home.', 'نساعدك في إعادة ترتيب أثاث منزلك لتحسين المساحة وتعزيز الجاذبية الجمالية لمساحتك الداخلية.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(18, 3, 'Junk Haul Away Service Offered', 'خدمة إزالة النفايات المعروضة', 'Haul away any unwanted junk from your home or office, providing a clean and spacious environment for your needs.', 'إزالة أي نفايات غير مرغوب فيها من منزلك أو مكتبك لتوفير بيئة نظيفة وواسعة تناسب احتياجاتك اليومية.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(19, 4, 'General Cleaning for All Areas', 'تنظيف شامل لجميع المناطق', 'Comprehensive cleaning services for all rooms and spaces, ensuring a thorough clean and a hygienic environment.', 'خدمات تنظيف شاملة لجميع الغرف والمساحات، مما يضمن التنظيف الكامل وبيئة صحية آمنة للاستخدام.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(20, 4, 'Post-Party Cleanup Services', 'تنظيف بعد الحفلات والفعاليات', 'Thorough cleaning services after parties and events, restoring your home to its original clean state efficiently.', 'خدمات تنظيف شاملة بعد الحفلات والفعاليات، لإعادة منزلك إلى حالته الأصلية النظيفة بكفاءة وسرعة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(21, 4, 'Apartment Cleaning Services', 'خدمات تنظيف الشقق السكنية', 'Apartment cleaning services tailored to your needs, ensuring your living space is spotless and comfortable.', 'خدمات تنظيف الشقق السكنية المصممة لتلبية احتياجاتك، لضمان نظافة وراحة مساحتك السكنية بشكل دائم.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(22, 4, 'Deep Cleaning for All Spaces', 'تنظيف عميق لجميع الأماكن', 'In-depth cleaning services for your home, focusing on hard-to-reach areas, leaving your space thoroughly cleaned.', 'خدمات تنظيف عميق لمنزلك، مع التركيز على المناطق التي يصعب الوصول إليها، مما يترك مساحتك نظيفة تماماً بكل الجوانب.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(23, 4, 'Garage Cleaning Solutions', 'حلول تنظيف المرائب المخصصة', 'We offer garage cleaning services, removing clutter and ensuring your garage space is clean and well-organized.', 'نقدم خدمات تنظيف المرائب المخصصة، لإزالة الفوضى وضمان أن تكون مساحتك نظيفة ومنظمة بشكل جيد جداً.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(24, 4, 'Move-Out Cleaning Services', 'خدمات تنظيف عند الانتقال', 'Cleaning services to help you when moving out of your home, ensuring it is spotless for the next residents.', 'خدمات تنظيف شاملة عند الانتقال من منزلك، لضمان أن تكون نظيفة تمامًا للسكان الجدد أو المؤجرين المستقبليين.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(25, 5, 'Yard Work and Maintenance', 'أعمال الحديقة والصيانة', 'Outdoor yard work services, including lawn care, weeding, and general maintenance to keep your yard in top shape.', 'خدمات أعمال الحديقة الخارجية بما في ذلك رعاية الحديقة وإزالة الأعشاب الضارة والصيانة العامة للحفاظ على أفضل حالة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(26, 5, 'Lawn Care Services Offered', 'خدمات رعاية العشب مقدمة', 'We provide lawn care services, including mowing, trimming, and fertilizing, ensuring your lawn stays green and healthy.', 'نقدم خدمات رعاية العشب بما في ذلك القص والتشذيب والتسميد لضمان بقاء حديقتك خضراء وصحية دائماً.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(27, 5, 'Snow Removal Services Available', 'خدمات إزالة الثلوج المتاحة', 'Efficient snow removal services to keep your walkways, driveways, and outdoor spaces safe and clear during winter.', 'خدمات إزالة الثلوج المتاحة بكفاءة للحفاظ على ممرات المشاة والممرات والمساحات الخارجية آمنة وواضحة خلال فصل الشتاء.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(28, 5, 'Landscaping Assistance Provided', 'مساعدة تنسيق الحدائق المقدمة', 'Our landscaping assistance services include planting, trimming, and designing outdoor spaces for beauty and function.', 'تشمل خدمات مساعدة تنسيق الحدائق لدينا الزراعة والتشذيب وتصميم المساحات الخارجية لتكون جميلة وعملية.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(29, 5, 'Branch & Hedge Trimming Jobs', 'تشذيب الفروع والأشجار المتخصص', 'We offer specialized branch and hedge trimming services to maintain the health and appearance of your outdoor plants.', 'نقدم خدمات تشذيب الفروع والأشجار المتخصصة للحفاظ على صحة وجمال نباتاتك الخارجية في جميع الأوقات.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(30, 5, 'Gardening and Weeding Services', 'خدمات البستنة وإزالة الأعشاب', 'Gardening and weeding services for your outdoor spaces, helping you maintain a beautiful, clean, and healthy garden.', 'خدمات البستنة وإزالة الأعشاب للحفاظ على مساحاتك الخارجية، مما يساعد في الحفاظ على حديقة نظيفة وصحية بشكل دائم.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(31, 6, 'Repairing Doors & Furniture', 'إصلاح الأبواب والأثاث المتضرر', 'We offer repair services for doors, cabinets, and other furniture to restore functionality and enhance durability.', 'نقدم خدمات إصلاح للأبواب والخزائن والأثاث لإعادة استخدامها وزيادة المتانة على المدى الطويل.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(32, 6, 'Wall Repair Services Offered', 'خدمات إصلاح الجدران المقدمة', 'Comprehensive wall repair services to fix cracks, holes, and damages, restoring the integrity of your home’s walls.', 'خدمات إصلاح شاملة للجدران لإصلاح التشققات والثقوب والأضرار، واستعادة سلامة جدران منزلك بشكل كامل.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(33, 6, 'Sealing & Caulking Repairs', 'خدمات الختم وسد الفجوات', 'Sealing and caulking services to prevent leaks and drafts, protecting your home’s energy efficiency and comfort.', 'خدمات الختم وسد الفجوات لمنع التسربات والتيارات الهوائية، لحماية كفاءة الطاقة في منزلك وتحسين الراحة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(34, 6, 'Appliance Install & Repairing', 'تركيب وإصلاح الأجهزة المنزلية', 'Installation and repair of household appliances, ensuring they are set up correctly and function efficiently.', 'خدمات تركيب وإصلاح الأجهزة المنزلية لضمان تركيبها الصحيح وعملها بكفاءة في المنزل.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(35, 6, 'Window & Blinds Repairs Done', 'إصلاح النوافذ والستائر المتاحة', 'Repair services for windows and blinds, fixing any operational or cosmetic issues to keep them working properly.', 'خدمات إصلاح النوافذ والستائر لإصلاح أي مشكلات تشغيلية أو تجميلية، وضمان عملها بشكل صحيح.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(36, 6, 'Flooring & Tiling Assistance', 'مساعدة في الأرضيات والبلاط', 'We provide assistance with flooring and tiling projects, ensuring precise installation for durability and beauty.', 'نقدم المساعدة في مشاريع الأرضيات والبلاط لضمان التركيب الدقيق والمتانة والجمال.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(37, 6, 'Electrical Help Services Given', 'خدمات المساعدة الكهربائية متاحة', 'We offer electrical repair services to address common electrical issues, ensuring safety and functionality in your home.', 'نقدم خدمات المساعدة في الإصلاحات الكهربائية لمعالجة المشكلات الكهربائية الشائعة وضمان سلامة ووظائف النظام الكهربائي.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(38, 6, 'Plumbing Assistance Provided', 'تقديم المساعدة في السباكة', 'Plumbing services including leak repairs, drain cleaning, and pipe replacement to maintain your home’s water system.', 'خدمات السباكة بما في ذلك إصلاح التسربات وتنظيف المصارف واستبدال الأنابيب للحفاظ على نظام المياه في منزلك.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(39, 6, 'Light Carpentry Services', 'أعمال النجارة الخفيفة متاحة', 'Light carpentry services for repairs and installations of cabinets, doors, and custom woodwork in your home.', 'خدمات النجارة الخفيفة لإصلاح وتركيب الخزائن والأبواب والأعمال الخشبية المخصصة في منزلك.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(40, 7, 'Indoor Painting for Interiors', 'طلاء داخلي للمساحات الداخلية', 'Indoor painting services to refresh the look of your home’s walls with vibrant, durable, and smooth finishes.', 'خدمات الطلاء الداخلي لتجديد مظهر جدران منزلك بطلاء حيوي ومتين وذو لمسات ناعمة وراقية.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(41, 7, 'Wallpapering and Decoration', 'تغليف الجدران وتزيين المساحات', 'We offer wallpapering services to give your home’s walls a personalized and stylish finish, suited to your taste.', 'نقدم خدمات تغليف الجدران لتضفي على جدران منزلك لمسة شخصية أنيقة تناسب ذوقك الفردي بشكل كامل.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(42, 7, 'Outdoor Painting for Exteriors', 'طلاء خارجي للمساحات الخارجية', 'Outdoor painting services to enhance the appearance of your home’s exterior, ensuring durability and protection.', 'خدمات الطلاء الخارجي لتعزيز مظهر منزلك من الخارج، مع ضمان المتانة والحماية ضد عوامل الطقس الخارجية.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(43, 7, 'Concrete & Brick Painting', 'طلاء الأسطح الخرسانية والطوبية', 'We offer painting services for concrete and brick surfaces, ensuring a clean and modern look with long-lasting effects.', 'نقدم خدمات طلاء الأسطح الخرسانية والطوبية لضمان مظهر نظيف وحديث مع تأثير طويل الأمد على مظهرك الخارجي.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(44, 7, 'Accent Wall Painting Services', 'خدمات طلاء الجدران المميزة', 'Accent wall painting services to create a focal point in your home’s interior, adding style and color to your space.', 'خدمات طلاء الجدران المميزة لإنشاء نقطة محورية في داخل منزلك، وإضافة الأناقة والألوان للمساحات المختلفة.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(45, 7, 'Wallpaper Removal Services', 'خدمات إزالة ورق الجدران', 'Efficient wallpaper removal services to restore your walls to a smooth, clean surface, ready for new decoration.', 'خدمات إزالة ورق الجدران بشكل فعال لاستعادة جدرانك إلى سطح ناعم ونظيف، جاهز لأي زخرفة جديدة تريد إضافتها.', '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pipe Installation', 'Installation of pipes', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(2, 'Wiring', 'Electrical wiring', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55'),
(3, 'Woodworking', 'Woodworking and carpentry', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `skilltocategories`
--

CREATE TABLE `skilltocategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skilltocategories`
--

INSERT INTO `skilltocategories` (`id`, `skill_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(2, 2, 6, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(3, 3, 1, '2024-10-12 19:25:56', '2024-10-12 19:25:56'),
(4, 3, 2, '2024-10-12 19:25:56', '2024-10-12 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `skill_certificates`
--

CREATE TABLE `skill_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `handyman_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_certificates`
--

INSERT INTO `skill_certificates` (`id`, `skill_id`, `handyman_id`, `status_id`, `certificate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2024-10-12 19:25:55', '2024-10-12 19:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status_category`, `name`, `name_ar`, `description`, `description_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'skill', 'Approved', 'مقبول', 'Skill is Approved', 'المهارة مقبولة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(2, 'skill', 'Disapproved', 'مرفوض', 'Skill is Disapproved', 'المهارة مرفوضة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(3, 'skill', 'Pending', 'قيد الانتظار', 'Skill is Pending', 'المهارة قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(4, 'store', 'Open', 'مفتوح', 'Store is Open', 'المتجر مفتوح', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(5, 'store', 'Pending', 'قيد الانتظار', 'Store is Pending', 'المتجر قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(6, 'store', 'Closed', 'مغلق', 'Store is Closed', 'المتجر مغلق', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(7, 'gig', 'Open', 'مفتوح', 'Gig is Open', 'المهمة مفتوحة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(8, 'gig', 'In Progress', 'جاري العمل', 'Gig is in progress', 'المهمة قيد التنفيذ', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(9, 'gig', 'Completed', 'مكتملة', 'Gig is Completed', 'المهمة مكتملة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(10, 'gig', 'Canceled', 'ملغية', 'Gig is Canceled', 'المهمة ملغية', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(11, 'gig', 'Reported', 'تم الإبلاغ', 'Gig is Reported', 'تم الإبلاغ عن المهمة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(12, 'ticket', 'Open', 'مفتوح', 'Ticket is Open', 'التذكرة مفتوحة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(13, 'ticket', 'Pending', 'قيد الانتظار', 'Ticket is Pending', 'التذكرة قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(14, 'ticket', 'Closed', 'مغلقة', 'Ticket is Closed', 'التذكرة مغلقة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(15, 'ticket', 'Resolved', 'تم الحل', 'Ticket is Resolved', 'تم حل التذكرة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(16, 'sale', 'Pending', 'قيد الانتظار', 'Sale is Pending', 'البيع قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(17, 'sale', 'Confirmed', 'مؤكد', 'Sale is Confirmed', 'البيع مؤكد', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(18, 'sale', 'Delivered', 'تم التوصيل', 'Sale is Delivered', 'تم التوصيل', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(19, 'sale', 'Canceled', 'ملغية', 'Sale is Canceled', 'تم إلغاء البيع', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(20, 'store', 'Suspended', 'معلق', 'Store is Suspended', 'المتجر معلق', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(21, 'proposal', 'Rejected', 'مرفوض', 'Proposal is Rejected', 'تقديم مرفوض', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(22, 'proposal', 'Winner', 'فائز', 'Proposal is a Winner', 'المتقدم الفائز', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(23, 'proposal', 'Pending', 'قيد الانتظار', 'Proposal is a Pending', 'المتقدم قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(24, 'gig', 'work done', 'انتهى العمل', 'Gig is Done', 'المهمة انتهت', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(25, 'payment', 'Pending', 'قيد الانتظار', 'payment is a Pending', 'الدفعة قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(26, 'payment', 'Canceled', 'ملغية', 'payment is Canceled', 'تم إلغاء الدفعة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(27, 'payment', 'completed', 'اكتمل', 'payment is completed', 'الدفعة مكتملة', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL),
(28, 'gig', 'pending', 'قيد الانتظار ', 'gig is pending', 'قيد الانتظار', '2024-10-12 19:25:53', '2024-10-12 19:25:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_owner_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_owner_id`, `name`, `name_ar`, `location`, `description`, `description_ar`, `status_id`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Garden Tools Store', 'متجر أدوات الحديقة', '789 Garden Blvd', 'Find all your garden tools and supplies here', 'تجد هنا جميع أدواتك وإمداداتك للحديقة', 4, 4.90, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(2, 2, 'Home Fix Supplies', 'إمدادات إصلاح المنزل', '123 Fixer St', 'Everything you need for home repair and DIY', 'كل ما تحتاجه لإصلاح المنزل والمشاريع اليدوية', 4, 4.70, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(3, 3, 'Outdoor Gear Mart', 'سوق المعدات الخارجية', '456 Adventure Ave', 'Best outdoor gear and camping supplies', 'أفضل معدات خارجية وإمدادات التخييم', 4, 4.60, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(4, 4, 'The DIY Store', 'متجر الأعمال اليدوية', '789 Maker St', 'All DIY enthusiasts can find tools and supplies here', 'جميع محبي الأعمال اليدوية يمكنهم إيجاد الأدوات والإمدادات هنا', 4, 4.50, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(5, 5, 'Paint Pro Supplies', 'إمدادات محترفي الطلاء', '101 Paint Ave', 'Professional paint supplies for your projects', 'إمدادات الطلاء الاحترافية لمشاريعك', 4, 4.90, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(6, 6, 'Auto Parts Depot', 'مستودع قطع غيار السيارات', '202 Car Blvd', 'Find the best deals on car parts and accessories', 'احصل على أفضل الصفقات على قطع غيار السيارات والإكسسوارات', 4, 4.80, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(7, 7, 'Kitchenware House', 'بيت أدوات المطبخ', '303 Chef St', 'Top-quality kitchenware for all your cooking needs', 'أدوات مطبخ عالية الجودة لجميع احتياجاتك في الطبخ', 4, 4.70, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(8, 8, 'Tech Supplies Mart', 'سوق مستلزمات التكنولوجيا', '404 Tech Park', 'All the latest tech gadgets and supplies', 'كل الأدوات التكنولوجية الحديثة والإمدادات', 4, 4.60, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(9, 9, 'Plumbing World', 'عالم السباكة', '505 Plumbing St', 'Complete selection of plumbing tools and equipment', 'تشكيلة كاملة من أدوات ومعدات السباكة', 4, 4.90, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(10, 10, 'Tool Emporium', 'إمبراطورية الأدوات', '456 Store Blvd', 'All tools needed for handymen', 'جميع الأدوات اللازمة للحرفيين', 4, 4.70, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(11, 11, 'Hardware Central', 'مركز الأدوات', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.80, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(12, 12, 'Bashiti Depot', 'البشيتي', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.70, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(13, 13, 'Manaseer Group', 'المناصير', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.80, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(14, 14, 'Subhi Abu Ghallous', 'صبحي ابو غلوس ', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.50, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(15, 15, 'Almemari', 'المعماري', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.70, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(16, 16, 'Jotun', 'دهانات جوتن', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.00, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(17, 17, 'Lafarge', 'لافارج للاسمنت', '456 Central Ave', 'Your one-stop shop for hardware essentials', 'محلك الوحيد لكل المستلزمات الأساسية للأدوات', 4, 4.90, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `store_owners`
--

CREATE TABLE `store_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `store_name` varchar(255) DEFAULT NULL,
  `store_name_ar` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `rating` tinyint(4) NOT NULL DEFAULT 0,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_owners`
--

INSERT INTO `store_owners` (`id`, `user_id`, `store_name`, `store_name_ar`, `contact_number`, `address`, `address_ar`, `rating`, `certificate_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'Garden Tools Store', 'متجر أدوات الحديقة', '555-9876', '101 Garden St', 'شارع 101 الحديقة', 5, 4, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(2, 7, 'Home Fix Supplies', 'إمدادات تصليح المنزل', '555-4321', '102 Home Fix Ave', 'شارع 102 تصليح المنزل', 5, 5, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(3, 8, 'Outdoor Gear Mart', 'سوق المعدات الخارجية', '555-6543', '103 Outdoor Blvd', 'بوليفارد 103 في الهواء الطلق', 5, 6, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(4, 9, 'The DIY Store', 'متجر الأعمال اليدوية', '555-3210', '104 DIY St', 'شارع 104 الأعمال اليدوية', 5, 7, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(5, 10, 'Paint Pro Supplies', 'إمدادات محترفي الطلاء', '555-7890', '105 Paint Ave', 'شارع 105 الطلاء', 5, 8, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(6, 11, 'Auto Parts Depot', 'مستودع قطع غيار السيارات', '555-2468', '106 Auto St', 'شارع 106 السيارات', 5, 9, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(7, 12, 'Kitchenware House', 'بيت أدوات المطبخ', '555-1357', '107 Kitchenware Ave', 'شارع 107 أدوات المطبخ', 5, 10, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(8, 13, 'Tech Supplies Mart', 'سوق مستلزمات التكنولوجيا', '555-0246', '108 Tech St', 'شارع 108 التكنولوجيا', 5, 11, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(9, 14, 'Plumbing World', 'عالم السباكة', '555-9753', '109 Plumbing Blvd', 'بوليفارد 109 السباكة', 5, 12, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(10, 15, 'Tool Emporium', 'إمبراطورية الأدوات', '555-1234', '456 Store Blvd', 'شارع 456 المتجر', 5, 2, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(11, 16, 'Hardware Central', 'مركز الأدوات', '555-5678', '789 Central St', 'شارع 789 المركزي', 5, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(12, 17, 'Bashiti Depot', 'البشيتي', '555-5678', '789 Central St', 'شارع 789 المركزي', 5, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(13, 18, 'Manaseer Group', 'المناصير', '555-5678', '789 Central St', 'شارع 789 المركزي', 4, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(14, 19, 'Subhi Abu Ghallous', 'صبحي ابو غلوس ', '555-5678', '789 Central St', 'شارع 789 المركزي', 5, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(15, 20, 'Almemari', 'المعماري', '555-5678', '789 Central St', 'شارع 789 المركزي', 5, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(16, 21, 'Jotun', 'دهانات جوتن', '555-5678', '789 Central St', 'شارع 789 المركزي', 4, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(17, 22, 'Lafarge', 'لافارج للاسمنت', '555-5678', '789 Central St', 'شارع 789 المركزي', 5, 3, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `subject`, `description`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Issue with Power Drill', 'The power drill stopped working after a few uses.', 11, '2024-10-12 19:25:56', '2024-10-12 19:25:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `reported` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `date_created` date NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rating`, `image`, `reported`, `role_id`, `date_created`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin User', 'admin@example.com', '$2y$10$Ne9Dc6Fo5/glNyQgtr/OgOWdAEbsrAxIWYrgtema45MxxjHWT.b8G', 5.00, 'sadcat.png', 0, 1, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(2, 'Regular User', 'user@example.com', '$2y$10$ar1izEZo2LHly5tw0kTo8.8xStzbGxtznSGcQFT.R7AMeeNTSnIG6', 4.50, '1729100397.png', 0, 2, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(3, 'Handyman User', 'handyman@example.com', '$2y$10$zTksQ8YfaGmrRgQSrUGCE.fwxZL/HvRcEplc0fvmmO68wk5siYHni', 4.50, '1729100397.png', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-16 14:39:57', NULL),
(4, 'Store Owner User', 'storeowner@example.com', '$2y$10$2bvJ/uQbl7huSX6najf3XOLg2xmHu5fUexvDb0mKMiMkA1ZX9eSOW', 4.50, '1729804473.png', 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-24 18:14:33', NULL),
(5, 'suspended Handyman User', 'suspendedhandyman@example.com', '$2y$10$cGffApQ1pDNZKE8x1L/BAOsywhhgsLWn0HvT7wTH5e2SNA7ze6uXm', 4.50, NULL, 1, 4, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(6, 'John Doe', 'johndoe@example.com', '$2y$10$e.3rSMUGsY7ff3uevHaYxuyUDffaUsNPECMxta25Ir3jfhTAtlgoO', 4.80, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(7, 'Jane Smith', 'janesmith@example.com', '$2y$10$RLU8GSugGxhxXyp4XzG24u1JEvlfwWvsFM7PsxNgpKFWyoU/3ZnMS', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(8, 'Tom Brown', 'tombrown@example.com', '$2y$10$Qwsh6550xrOATFtCte0OY.PkSJPcF.vkR.DoHAVj.0E.ijxo.ondi', 4.90, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(9, 'Lucy Davis', 'lucydavis@example.com', '$2y$10$IIISNbepdY32bOZd9pmo7ek4wn4XWC7jUOGWgUNClRawYib39W6nq', 4.80, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(10, 'Mark Evans', 'markevans@example.com', '$2y$10$77TYZ2tmU0kpPdKX9fSWKOGx3OSZ/tN4wFvKS45hEZF9pCj/dhzbO', 4.60, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(11, 'Anna Johnson', 'annajohnson@example.com', '$2y$10$XGYo3zLDpy.Tk5S4QdkStOuEZsOet5nHEutgERq11bQK3XATbIfgO', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(12, 'Ahmed Ali', 'ahmedali@example.com', '$2y$10$sKtDFmYFQDHZiLQdQQ9E8eWXotAL8tyvV3ULrhS9wa4dt5fLHJd2i', 4.80, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(13, 'Fatima Hassan', 'fatimahassan@example.com', '$2y$10$YrYCwXVxcavj8g20L8.v4e8.G1ORNNFvKykodp4aZgUHcim8RsoD2', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(14, 'Omar Khaled', 'omarkhaled@example.com', '$2y$10$tQ23OGbCOWXagiZQ6wMCw.CJMw5CDdtaQQwEjjEvrud.bxBONk/86', 4.90, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(15, 'Aisha Mohammed', 'aishamohammed@example.com', '$2y$10$aE9gWqqN2XnKXNMKri0MOuXbog/ws.qWKkAk8rTHK/ShsxVi02fKy', 4.60, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(16, 'Youssef Ibrahim', 'youssefibrahim@example.com', '$2y$10$EgHU8AP8EiyFcbxMb3Ke1ue448Yxjl7omKCO1SYloLSV1gixd5wly', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(17, 'Bshiti owner', 'Bshiti@example.com', '$2y$10$njsXKsFUbcXgEjXJi7lq6O66wl2NU7A.Qiu9y5PAobq6/XEyLKvxS', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:54', '2024-10-12 19:25:54', NULL),
(18, 'Manaseer owner', 'Manaseer@example.com', '$2y$10$cgyFmjzY3HEIg4HkezRKhOCPGyOelTLGMnynmBBNx7asKx3sLsMe.', 4.30, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(19, 'Subhi owner', 'Subhi@example.com', '$2y$10$qEU1ZiE4OeR0cdJG0k2zb.a25MdUer1U3othIcr1bZPCVcB.K3YZe', 4.50, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(20, 'Almeimari owner', 'Almeimari@example.com', '$2y$10$ao10LkVbH5xqk92/lE1JReRoTs2CXP3AJ0dzLUhMTNQGRdYZ1KfAK', 4.70, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(21, 'Jotun owner', 'Jotun@example.com', '$2y$10$56gPoCHeFLmWLCOP8BtBO.ye5G0DcqV3Np58FeOCDXfqNAqJ7oW/2', 4.00, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(22, 'Lafarge owner', 'Lafarge@example.com', '$2y$10$DUfnyj6HLuS/lQCycKwcS.cPzweMCF41WnpDZY68eLcQ.gPpDCBBW', 4.90, NULL, 0, 3, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(23, 'Tom Brown', 'tomybrown@example.com', '$2y$10$DYVmNaU9SOssgAyTBKjpzuGK9RjHDDdw7eL5mlWslw173Kxci7t/6', 4.90, 'tomPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(24, 'Lucy Davis', 'lucyydavis@example.com', '$2y$10$cNvcIT7i1ozxc7sNgR6R4.NTUtoq0LvjeP0TRgqNJBKC8g2jTka8G', 4.80, 'LucyPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(25, 'Mark Evans', 'markyevans@example.com', '$2y$10$5TGXD4KkiNcAh8yI0TC4cu68jMyzuVdcc8/zMfM2VYR4r7QkOc1ha', 4.60, 'MarkPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(26, 'Anna Johnson', 'annayjohnson@example.com', '$2y$10$x0wMxs1a7iuEzh/SB3lGaOzwBaixTc0s.4PaVEd/XafKxDX5GBm1u', 4.70, 'AnnaPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(27, 'Ahmed Ali', 'ahmedyali@example.com', '$2y$10$o4auOBcViqxS/8Yrv5HR1.H18L0i05i2HH4nRibPaaTkFDYo4Gdw6', 4.80, 'AhmedPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(28, 'Fadi Hassan', 'fadiyhassan@example.com', '$2y$10$gk8VPDbMz2bu8ahY.rTv0e8vPQ30X2yYF02ZBmLd5hZoY0igqBe6q', 4.70, 'FadiPic.jpg', 0, 4, '2024-10-12', NULL, '2024-10-12 19:25:55', '2024-10-12 19:25:55', NULL),
(29, 'aseel aburumman', 'aseel@example.com', '$2y$10$Ch6YHtJdeeRpEWI7YcCDhOuTr6zfElVGBNm1vmxAxNTFs.8yXe1Iu', 0.00, NULL, 0, 2, '2024-10-27', NULL, '2024-10-27 09:02:23', '2024-10-27 09:02:23', NULL),
(30, 'aseel2 aburumman', 'aseel2@example.com', '$2y$10$Ear1SUd1nnFLuaw2OhvYgeVuEZONftlzBE1DCNXbLAcTR0t29ih3W', 0.00, NULL, 0, 2, '2024-10-27', NULL, '2024-10-27 09:05:07', '2024-10-27 09:05:07', NULL),
(31, 'aseel3 aburumman', 'aseel3@example.com', '$2y$10$hsDyTjWulCWZfFsvwB2wIe/xR/a/2qYdZh4EO0QbrpTryRrCX58xW', 0.00, NULL, 0, 2, '2024-10-27', NULL, '2024-10-27 09:07:33', '2024-10-27 09:07:33', NULL),
(32, 'Waleed Ahmad dfdfd', 'waleed@example.com', '$2y$10$b/CFICkB.3oRid.yNkWhf.1o8eI4bCiGJRbVbqBrYKxz/sFuyhhGi', 0.00, NULL, 0, 1, '2024-10-27', NULL, '2024-10-27 09:46:50', '2024-10-27 09:46:50', NULL),
(33, 'sally ibrahim', 'sally@example.com', '$2y$10$2ZmeMNvaF41E7T15CwdHJuZPxOUXzmGbk4/5XeVlRf/jUpkxJPOMy', 0.00, NULL, 0, 2, '2024-10-27', NULL, '2024-10-27 09:56:27', '2024-10-27 09:56:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_infos`
--
ALTER TABLE `delivery_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delivery_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follows_follower_id_foreign` (`follower_id`),
  ADD KEY `follows_followed_id_foreign` (`followed_id`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gigs_user_id_foreign` (`user_id`),
  ADD KEY `gigs_handyman_id_foreign` (`handyman_id`),
  ADD KEY `gigs_category_id_foreign` (`category_id`),
  ADD KEY `gigs_service_id_foreign` (`service_id`),
  ADD KEY `gigs_status_id_foreign` (`status_id`);

--
-- Indexes for table `gig_policys`
--
ALTER TABLE `gig_policys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `handymans`
--
ALTER TABLE `handymans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `handymans_user_id_foreign` (`user_id`);

--
-- Indexes for table `handyman_availability`
--
ALTER TABLE `handyman_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `handyman_availability_handyman_id_foreign` (`handyman_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_store_id_foreign` (`store_id`),
  ADD KEY `images_product_id_foreign` (`product_id`),
  ADD KEY `images_gig_id_foreign` (`gig_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_sender_id_foreign` (`sender_id`),
  ADD KEY `messages_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_handyman_id_foreign` (`handyman_id`),
  ADD KEY `payments_gig_id_foreign` (`gig_id`),
  ADD KEY `payments_status_id_foreign` (`status_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_store_id_foreign` (`store_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposals_handyman_id_foreign` (`handyman_id`),
  ADD KEY `proposals_gig_id_foreign` (`gig_id`),
  ADD KEY `proposals_status_id_foreign` (`status_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `reports_handyman_id_foreign` (`handyman_id`),
  ADD KEY `reports_store_id_foreign` (`store_id`),
  ADD KEY `reports_product_id_foreign` (`product_id`),
  ADD KEY `reports_gig_id_foreign` (`gig_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_handyman_id_foreign` (`handyman_id`),
  ADD KEY `reviews_store_id_foreign` (`store_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_client_id_foreign` (`client_id`),
  ADD KEY `reviews_gig_id_foreign` (`gig_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_store_id_foreign` (`store_id`),
  ADD KEY `sales_product_id_foreign` (`product_id`),
  ADD KEY `sales_user_id_foreign` (`user_id`),
  ADD KEY `sales_status_id_foreign` (`status_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_carts_store_id_foreign` (`store_id`),
  ADD KEY `shopping_carts_user_id_foreign` (`user_id`),
  ADD KEY `shopping_carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skilltocategories`
--
ALTER TABLE `skilltocategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skilltocategories_skill_id_foreign` (`skill_id`),
  ADD KEY `skilltocategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `skill_certificates`
--
ALTER TABLE `skill_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skill_certificates_skill_id_foreign` (`skill_id`),
  ADD KEY `skill_certificates_handyman_id_foreign` (`handyman_id`),
  ADD KEY `skill_certificates_status_id_foreign` (`status_id`),
  ADD KEY `skill_certificates_certificate_id_foreign` (`certificate_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_store_owner_id_foreign` (`store_owner_id`),
  ADD KEY `stores_status_id_foreign` (`status_id`);

--
-- Indexes for table `store_owners`
--
ALTER TABLE `store_owners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `store_owners_user_id_foreign` (`user_id`),
  ADD KEY `store_owners_certificate_id_foreign` (`certificate_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`),
  ADD KEY `tickets_status_id_foreign` (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `delivery_infos`
--
ALTER TABLE `delivery_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `gig_policys`
--
ALTER TABLE `gig_policys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `handymans`
--
ALTER TABLE `handymans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `handyman_availability`
--
ALTER TABLE `handyman_availability`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skilltocategories`
--
ALTER TABLE `skilltocategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skill_certificates`
--
ALTER TABLE `skill_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `store_owners`
--
ALTER TABLE `store_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `delivery_infos`
--
ALTER TABLE `delivery_infos`
  ADD CONSTRAINT `delivery_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_followed_id_foreign` FOREIGN KEY (`followed_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follows_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gigs_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gigs_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gigs_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gigs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `handymans`
--
ALTER TABLE `handymans`
  ADD CONSTRAINT `handymans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `handyman_availability`
--
ALTER TABLE `handyman_availability`
  ADD CONSTRAINT `handyman_availability_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proposals_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proposals_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_gig_id_foreign` FOREIGN KEY (`gig_id`) REFERENCES `gigs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shopping_carts_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shopping_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skilltocategories`
--
ALTER TABLE `skilltocategories`
  ADD CONSTRAINT `skilltocategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skilltocategories_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skill_certificates`
--
ALTER TABLE `skill_certificates`
  ADD CONSTRAINT `skill_certificates_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_certificates_handyman_id_foreign` FOREIGN KEY (`handyman_id`) REFERENCES `handymans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_certificates_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `skill_certificates_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stores_store_owner_id_foreign` FOREIGN KEY (`store_owner_id`) REFERENCES `store_owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `store_owners`
--
ALTER TABLE `store_owners`
  ADD CONSTRAINT `store_owners_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `store_owners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
