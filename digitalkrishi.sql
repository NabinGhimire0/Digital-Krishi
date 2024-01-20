-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 02:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalkrishi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agro_experts`
--

CREATE TABLE `agro_experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agro_experts`
--

INSERT INTO `agro_experts` (`id`, `name`, `image`, `description`, `contact`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rohan Karki', 'agroexpert/G5kubFIkOq0d4o24d39GD7ff1nAANaxLX79e24KD.jpg', 'description', '9864235616', 'rohan@gmail.com', 0, '2024-01-20 05:15:26', '2024-01-20 05:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 1, 'Dharan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cures`
--

CREATE TABLE `cures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedure` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cures`
--

INSERT INTO `cures` (`id`, `disease_id`, `medicine`, `procedure`, `created_at`, `updated_at`) VALUES
(1, 1, '-', 'solutions:\r\nIn most cases, infections can be tolerated. Remove fallen leaves and debris promptly. Many of the pathogens are favored by moisture, so avoid overhead sprinklers and irrigate early in the day so that the foliage dries more quickly. Generally, fungicide treatment is not warranted.', '2024-01-20 03:30:26', '2024-01-20 03:30:26'),
(2, 2, '-', 'Solution:\r\nAvoid overhead watering. Collect fallen, infected leaves and needles and dispose of them away from host plants. Cut off and dispose of diseased shoots and branches as soon as they appear, except do not prune woody parts so extensively that plants are seriously damaged. Removing nearby alternate hosts of the fungus may help to reduce new infections in certain situations.', '2024-01-20 03:30:45', '2024-01-20 03:30:45'),
(3, 3, '-', 'Solutions:\r\nTo manage canker diseases, do not plant species that are poorly adapted to local conditions. Botryosphaeria canker of giant sequoia, Chinese elm anthracnose canker, and cypress canker of Leyland and Monterey cypress are virtually unavoidable when their hosts are poorly located; planting other species or resistant cultivars is the only practical management strategy.\r\n\r\nMany canker diseases primarily damage plants that lack proper cultural care. Keep plants vigorous to avoid and limit these diseases. Prune dead and dying branches when they are first observed, making the cuts in healthy wood below any apparent cankers, and use good sanitation to avoid spreading canker pathogens on contaminated tools.', '2024-01-20 03:31:26', '2024-01-20 03:31:26'),
(4, 4, '-', 'Solutions:\r\nThe disease can be effectively prevented by:\r\n\r\nUsing clean transplants\r\nProper field and seedbed preparation\r\nGood water management\r\nEmploying a 2-year crop rotation that exclude susceptible plants.\r\nFungicides are sometimes used preventively in fields with histories of root rot or problems with drainage. Use a fungicide seed treatment to prevent damping-off.', '2024-01-20 03:31:54', '2024-01-20 03:31:54'),
(5, 5, '-', 'Solutions:\r\nUse varieties resistant to downy mildew. Avoid sprinkler irrigation and reduce relative humidity in greenhouses. Fungicide treatment of susceptible varieties is needed when the disease occurs on transplants or early in crop development in the field; repeated applications may be required to protect new growth. Treatment during early flowering is required on some seed crops.', '2024-01-20 03:32:13', '2024-01-20 03:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symptoms` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `symptoms`, `created_at`, `updated_at`) VALUES
(1, 'Leaf Spots:', '<p>Leaf spots are localized infections of leaves. Many fungi cause leaf spots on different hosts. Spots may vary from small discrete dots and raised areas to irregular yellow or brownish patches that cover much of the leaf surface. Leaves may fall off the tree if the problem is severe, but these pathogens rarely cause long-term damage to trees. Similar spots can be caused by bacterial pathogens, insects and mites, or abiotic factors on some plants.<br></p>', '2024-01-20 03:28:03', '2024-01-20 03:28:03'),
(2, 'Rust:', '<p>Rust fungi and their damage usually occur on fruit, green stems, and leaves of broadleaf plants or on the bark or needles of conifers. The host species and characteristics of the damage and fungal fruiting bodies and spores are used to identify rusts.Infected foliage on broadleaf hosts may become spotted, turn yellow or brown overall, and drop prematurely. Infected conifers may develop bushy growth (e.g., witches\' brooms), cankered, galled, and oozing bark and limbs, and spotted needles.<br></p>', '2024-01-20 03:28:31', '2024-01-20 03:28:31'),
(3, 'Cranker', '<p>A canker is a localized dead (necrotic) area on branches, trunks, or roots. Cankers vary greatly in appearance but are often a circular or oblong lesion that may be discolored, oozing, or sunken. Cutting under cankered bark usually reveals discolored tissue, which may have a well-defined margin separating it from healthy tissue. When cankers entirely circle (girdle) stems or trunks, foliage turns yellow or brown and wilts as the plant dies outward or upward from the canker.<br></p>', '2024-01-20 03:28:49', '2024-01-20 03:28:49'),
(4, 'Root Rots', '<p>Damping-off is primarily caused by Pythium spp. Seedlings affected by damping-off fail to emerge or fall over and die soon after emergence. Stems usually have a dark, shriveled portion at the soil line. Damping-off is generally limited to areas where drainage is poor or where soil is compacted, but whole fields can be affected, especially in early plantings exposed to rain.<br></p>', '2024-01-20 03:29:12', '2024-01-20 03:29:12'),
(5, 'Downy Mildew', '<p>The name downy mildew is somewhat descriptive of the fluffy appearance of the white, lavender, or purple sporulation that occurs usually on the undersides of diseased leaves. Downy mildew leaf lesions are often angular in shape and delimited by veins. Pale yellow, purple, or necrotic areas often are visible from the upper side of the leaf. Extensive disease can result in the death of large portions of the leaves.<br></p>', '2024-01-20 03:29:46', '2024-01-20 03:29:46');

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
-- Table structure for table `fertilizers`
--

CREATE TABLE `fertilizers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fertilizers`
--

INSERT INTO `fertilizers` (`id`, `name`, `shortdesc`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Compost', 'Function: Adds organic matter to the soil, improves soil structure, and provides a slow release of nutrients.', 'pesticides/eJb4VG5l8LLXVN4t7gHQmBr4yhrPnE1RekaTwC7p.png', 100, '<p>How to use: Mix compost into the soil during planting or apply as a top dressing around established plants. Compost can also be used to make compost tea for foliar feeding.<br></p>', '2024-01-20 03:20:07', '2024-01-20 03:20:07'),
(2, 'Manure', 'Function: Rich in nutrients, especially nitrogen, phosphorus, and potassium. Improves soil fertility and structure.', 'pesticides/ZN9hjbml6wX21W8alIBrWwjQyHok19xpkKZpB2xi.png', 250, '<p>How to use: Mix well-aged manure into the soil before planting or use as a top dressing around established plants. Avoid using fresh manure, as it can burn plants.<br></p>', '2024-01-20 03:20:55', '2024-01-20 03:20:55'),
(3, 'Bone Meal', 'Function: High in phosphorus, helps with root development and flowering.', 'pesticides/wfEa4HIcnCvTc41vTdrzD84Scph8x18QrOnCOSLG.png', 338, '<p>How to use: Incorporate into the soil during planting or sprinkle around the base of established plants. It is commonly used for flowering and fruiting plants.<br></p>', '2024-01-20 03:22:12', '2024-01-20 03:22:12'),
(4, '(N-P-K) Fertilizers', 'Function: Provides essential macro-nutrients for plant growth - nitrogen for leaf development, phosphorus for root development, and potassium for overall plant health.', 'pesticides/akcLDuB9arvgQF3k9CxntGfBf0M0eqHOyENN0dIT.png', 1050, '<p>How to use: Follow the instructions on the product label for application rates. Apply evenly to the soil around plants and water well.<br></p>', '2024-01-20 03:23:34', '2024-01-20 03:23:34'),
(5, 'Calcium Nitrate', 'Function: Provides calcium and nitrogen. Improves fruit quality and prevents blossom-end rot in tomatoes.', 'pesticides/HRVnHKG7C4LU4bcuzXb2SJMgKZj11flvuaOaclAN.png', 430, '<p>How to use: Dissolve in water and apply as a liquid fertilizer. Can also be used as a foliar spray.<br></p>', '2024-01-20 03:24:50', '2024-01-20 03:24:50');

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
(1, '2013_01_19_144836_create_provinces_table', 1),
(2, '2013_01_19_153215_create_cities_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_01_19_182958_create_notices_table', 1),
(8, '2024_01_19_185824_create_diseases_table', 1),
(9, '2024_01_19_185906_create_cures_table', 1),
(10, '2024_01_19_201451_create_seeds_table', 1),
(11, '2024_01_19_205316_create_pesticides_table', 1),
(12, '2024_01_19_205329_create_fertilizers_table', 1),
(13, '2024_01_20_073052_create_agro_experts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hackathon program completed', '<p>yes!</p>', 1, 0, '2024-01-20 05:56:49', '2024-01-20 05:56:49');

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
-- Table structure for table `pesticides`
--

CREATE TABLE `pesticides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesticides`
--

INSERT INTO `pesticides` (`id`, `name`, `shortdesc`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Insecticidal Soaps', 'Safer Brand Insect Killing Soap, Bonide Insecticidal Soap', 'pesticides/l3r2YMAn9Aikib9V3ehirfYY8g1VMtXRVZHtKiLP.png', 2318, '<p style=\"margin-left: 50px;\"><span style=\"font-family: Tahoma;\">Function:</span><br>&nbsp; &nbsp;Controls soft-bodied insects such as aphids, mites, and whiteflies by disrupting their cell membranes.&nbsp; &nbsp; &nbsp; &nbsp;<br><br>How to Use ?<br>&nbsp; &nbsp;&nbsp;Mix with water according to the product instructions and spray directly on affected plant surfaces. Repeat as needed.</p>', '2024-01-20 03:06:22', '2024-01-20 03:10:59'),
(2, 'Neem Oil:100ml', 'Name: Garden Safe Neem Oil, Bonide Neem Oil', 'pesticides/7ETeDKs7dTCdrwvV0co0WJER4YRuKSwwiVanzMMv.png', 200, '<p style=\"margin-left: 75px;\">Function: Acts as an insecticide, fungicide, and miticide. It disrupts the life cycle of pests and prevents fungal growth.</p><p style=\"margin-left: 75px;\">How to use: Dilute in water and spray on affected plants. Apply every 7-14 days or as recommended on the product label.</p>', '2024-01-20 03:12:32', '2024-01-20 03:12:32'),
(3, 'Bacillus thuringiensis', 'Name: Thuricide, Dipel', 'pesticides/uvEV5UWraTI5wZoKem1XtgYrzDWHgH3vAdY5wlaT.png', 1080, '<p>Function: Controls caterpillars and larvae of certain insects. It\'s a biological pesticide.</p><p>How to use: Mix with water and apply to the foliage where caterpillars are present. Bt is specific to certain insects and is harmless to humans, animals, and beneficial insects.</p>', '2024-01-20 03:14:04', '2024-01-20 03:14:04'),
(4, 'Diatomaceous Earth', 'Name: Safer Brand Diatomaceous Earth, Harris Diatomaceous Earth', 'pesticides/JNrXbPVWZqxqhGgswiGVcUd4U0tSeLWRb2MUIHUe.png', 2815, '<p>Function: Controls insects by damaging their exoskeletons, causing dehydration.</p><p>How to use: Sprinkle diatomaceous earth around plants or directly on pests. Reapply after rain or irrigation.</p><div><br></div>', '2024-01-20 03:15:52', '2024-01-20 03:15:52'),
(5, 'Copper-Based Fungicides', 'Name: Bordeaux mixture, Kocide', 'pesticides/NnjSS4PnIFjxTvkPYT7DyBSHh8WEWu9pi88QviOL.png', 100, '<p>Function: Controls fungal diseases on plants, including blights and mildews.</p><p>How to use: Mix according to instructions and apply as a spray to affected plant surfaces. Use caution to avoid copper buildup in the soil.</p>', '2024-01-20 03:17:16', '2024-01-20 03:17:16'),
(6, 'Horticultural Oils', 'Name: Bonide All Seasons Horticultural and Dormant Oil, Southern Ag Parafine Horticultural Oil', 'pesticides/lKYX0fy1y2t5oiNfDYRkCzkzHGwKcmmn3cmggKqZ.png', 14218, '<p>Function: Controls insects by suffocating them and their eggs. Also used as a dormant spray.</p><p>How to use: Mix with water and spray on plants during the dormant season. Apply when temperatures are above freezing.</p><div><br></div>', '2024-01-20 03:18:30', '2024-01-20 03:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Koshi Pradesh', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seeds`
--

CREATE TABLE `seeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `climate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `altitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seeds`
--

INSERT INTO `seeds` (`id`, `name`, `shortdesc`, `image`, `market_price`, `climate`, `altitude`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Tomato (Solanum lycopersicum)', 'Hybrid Name: Celebrity, Early Girl, Sun Gold', 'users/snsBKdxMrJMb3dNbvwzMlGYITogXDRi4ZflJuZJ8.png', '350', 'Warm temperatures; tomatoes are sensitive to frost.', 'Suitable for a wide range of altitudes, typically grown at lower to mid altitudes.', '<p>Germination: Start seeds indoors 6-8 weeks before the last expected frost. Plant seeds 1/4 inch deep in seed-starting mix. Keep soil consistently moist, and provide warmth (around 70-80°F or 21-27°C) for germination.<br></p>', 1, '2024-01-20 03:35:25', '2024-01-20 03:35:25'),
(2, 'Carrot (Daucus carota)', 'Hybrid Name: Danvers, Nantes, Scarlet Nantes', 'users/7fI8rxs2ldDuMwGegC9pEXfvUzI62unIeQB2dpHj.png', '70', 'Cool to temperate climates; carrots are a cool-season crop.', 'Suitable for various altitudes, from low to high.', '<p>Germination: Directly sow seeds in the garden when the soil can be worked. Plant seeds 1/4 inch deep. Keep the soil consistently moist during germination, which usually takes 14-21 days.<br></p>', 1, '2024-01-20 03:36:34', '2024-01-20 03:36:34'),
(3, 'Lettuce (Lactuca sativa)', 'Hybrid Name: Buttercrunch, Romaine, Red Sails', 'users/So0cyhFwZNQdRD7m4OvOCvpxS2gBgckR7jZSlW5E.png', '308', 'Cool to mild climates; lettuce is a cool-season crop.', 'Suitable for various altitudes, commonly grown at lower to mid altitudes.', '<p>Germination: Directly sow seeds in the garden or start indoors. Plant seeds 1/8 inch deep. Keep the soil consistently moist. Lettuce germinates in about 7-14 days.<br></p>', 1, '2024-01-20 03:37:32', '2024-01-20 03:37:32'),
(4, 'Bell Pepper (Capsicum annuum)', 'Hybrid Name: California Wonder, King Arthur, Sweet Chocolate', 'users/6ANl3Q2UY9iXL0W5ySjlQq78WpXpGO5JPMVg58Yx.png', '200', 'Warm to hot temperatures; peppers are sensitive to frost', 'Suitable for a wide range of altitudes, commonly grown at lower to mid altitudes.', '<p><span style=\"font-size: 1rem;\">Germination: Start seeds indoors 8-10 weeks before the last expected frost. Plant seeds 1/4 inch deep in seed-starting mix. Provide warmth (around 70-85°F or 21-29°C) for germination.</span><br></p>', 1, '2024-01-20 03:39:01', '2024-01-20 03:39:01'),
(5, 'Basil (Ocimum basilicum)', 'Hybrid Name: Genovese, Sweet Thai, Purple Ruffles', 'users/E6S4dSZJ7tNW0GfiEvlpZEZXXxM0v9ncZI39lwVf.png', '950', 'Warm to hot temperatures; basil is sensitive to frost.', 'Suitable for various altitudes, commonly grown at lower to mid altitudes.', '<p>Germination: Start seeds indoors 6-8 weeks before the last expected frost. Plant seeds 1/4 inch deep in seed-starting mix. Provide warmth (around 70-80°F or 21-27°C) for germination.</p><div><br></div>', 1, '2024-01-20 03:39:51', '2024-01-20 03:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','subadmin','farmer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'farmer',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `crop_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `image`, `role`, `address`, `province_id`, `city_id`, `crop_area`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '9816375267', NULL, 'admin', NULL, 1, 2, NULL, 0, NULL, '$2y$12$rmEZ3dk16bdUI7FMr5nmt.v9c9B.IEd2QrpB1BpIW8tkrZkK70XcW', NULL, '2024-01-20 02:57:15', '2024-01-20 02:57:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agro_experts`
--
ALTER TABLE `agro_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_province_id_foreign` (`province_id`);

--
-- Indexes for table `cures`
--
ALTER TABLE `cures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fertilizers`
--
ALTER TABLE `fertilizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notices_user_id_foreign` (`user_id`);

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
-- Indexes for table `pesticides`
--
ALTER TABLE `pesticides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeds`
--
ALTER TABLE `seeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seeds_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_province_id_foreign` (`province_id`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agro_experts`
--
ALTER TABLE `agro_experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cures`
--
ALTER TABLE `cures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fertilizers`
--
ALTER TABLE `fertilizers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesticides`
--
ALTER TABLE `pesticides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seeds`
--
ALTER TABLE `seeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seeds`
--
ALTER TABLE `seeds`
  ADD CONSTRAINT `seeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
