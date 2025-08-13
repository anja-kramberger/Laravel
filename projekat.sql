-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `kontakts`
--

CREATE TABLE `kontakts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ime_prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(255) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `poruka` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontakts`
--

INSERT INTO `kontakts` (`id`, `ime_prezime`, `email`, `telefon`, `naslov`, `poruka`, `created_at`, `updated_at`) VALUES
(1, 'Mirjana Lalic', 'mirjana@gmail.com', '0654592304', 'Pitanje', 'Da li ce saksije ponovo biti u ponudi?', '2023-06-08 23:42:00', '2023-06-08 23:42:00');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_28_054859_azuriraj_users_tabelu', 1),
(7, '2023_03_28_061211_create_products_table', 2),
(8, '2023_03_28_103435_add_details_to_users_table', 3),
(9, '2023_05_26_141041_add_details_to_products_table', 4),
(10, '2023_05_26_182318_create_carts_table', 5),
(11, '2023_05_27_120344_create_orders_table', 6),
(12, '2023_05_27_121030_create_order_items_table', 7),
(13, '2023_06_08_230035_create_kontakts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `status_message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tracking_no`, `fullname`, `email`, `phone`, `address`, `status_message`, `created_at`, `updated_at`) VALUES
(1, 5, 'florapro-78lXTg6vAO', 'Kristina', 'kristina@gmail.com', '0649174492', 'Beograd, Rimska 67', 'Completed', '2023-05-27 12:18:57', '2023-05-27 12:18:57'),
(2, 5, 'florapro-LUibn4OTAT', 'Kristina', 'kristina@gmail.com', '0649174492', 'uga buga', 'Completed', '2023-05-27 12:23:23', '2023-05-27 12:23:23'),
(3, 5, 'florapro-cavorlq3jy', 'Kristina', 'kristina@gmail.com', '0649174492', 'Vojislava Ilica 23, Beograd', 'Completed', '2023-05-27 17:15:01', '2023-05-27 17:15:01'),
(4, 6, 'florapro-klaJ3LMBwz', 'Dijana', 'dijana@gmail.com', '0603251845', 'Ustanicka 34, Beograd', 'Completed', '2023-05-29 11:45:08', '2023-05-29 11:45:08'),
(5, 5, 'florapro-rmavkgF49V', 'Kristina Milic', 'kristina@gmail.com', '0649174492', 'adresa blbl', 'Completed', '2023-06-07 14:19:51', '2023-06-07 14:19:51'),
(6, 5, 'florapro-J8xfSQ1qxI', 'Kristina', 'kristina@gmail.com', '0649174492', 'Adresa 44\n', 'Completed', '2023-06-07 14:29:30', '2023-06-07 14:29:30'),
(7, 4, 'florapro-GEeTJifDh0', 'Jana Maslovaric', 'janam@gmail.com', '0638996780', 'Jasenicka 67a', 'Completed', '2023-06-22 17:49:53', '2023-06-22 17:49:53'),
(8, 4, 'florapro-mA84fBPLa5', 'Jana Maslovaric', 'janam@gmail.com', '0638996780', 'Vladimira Tomanovica 18', 'Completed', '2023-06-25 13:41:38', '2023-06-25 13:41:38'),
(9, 7, 'florapro-A9vckgxwzS', 'Anja', 'anja@gmail.com', '0649128908', 'Vojislava Ilica', 'Completed', '2023-06-25 18:53:11', '2023-06-25 18:53:11'),
(10, 8, 'florapro-l5yw5vcPVj', 'Andrijana', 'andrijana@gmail.com', '0605556677', 'Rimska 43', 'Completed', '2023-06-26 00:25:05', '2023-06-26 00:25:05'),
(11, 7, 'florapro-rf2YmEUWDL', 'Anja', 'anja@gmail.com', '0649128908', 'Rimska 32', 'Completed', '2023-06-26 03:47:49', '2023-06-26 03:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 2, 200, '2023-05-27 12:18:57', '2023-05-27 12:18:57'),
(2, 1, 14, 2, 790, '2023-05-27 12:18:57', '2023-05-27 12:18:57'),
(3, 2, 15, 2, 200, '2023-05-27 12:23:23', '2023-05-27 12:23:23'),
(4, 2, 14, 2, 790, '2023-05-27 12:23:23', '2023-05-27 12:23:23'),
(5, 3, 15, 2, 200, '2023-05-27 17:15:01', '2023-05-27 17:15:01'),
(6, 4, 15, 3, 200, '2023-05-29 11:45:08', '2023-05-29 11:45:08'),
(7, 4, 14, 1, 790, '2023-05-29 11:45:08', '2023-05-29 11:45:08'),
(8, 5, 15, 1, 200, '2023-06-07 14:19:51', '2023-06-07 14:19:51'),
(9, 6, 15, 1, 200, '2023-06-07 14:29:30', '2023-06-07 14:29:30'),
(10, 6, 15, 1, 200, '2023-06-07 14:29:30', '2023-06-07 14:29:30'),
(11, 7, 18, 2, 350, '2023-06-22 17:49:53', '2023-06-22 17:49:53'),
(12, 8, 20, 2, 850, '2023-06-25 13:41:38', '2023-06-25 13:41:38'),
(13, 9, 20, 2, 850, '2023-06-25 18:53:11', '2023-06-25 18:53:11'),
(14, 9, 19, 1, 1500, '2023-06-25 18:53:11', '2023-06-25 18:53:11'),
(15, 9, 15, 2, 200, '2023-06-25 18:53:11', '2023-06-25 18:53:11'),
(16, 10, 3, 2, 300, '2023-06-26 00:25:05', '2023-06-26 00:25:05'),
(17, 10, 15, 1, 200, '2023-06-26 00:25:05', '2023-06-26 00:25:05'),
(18, 10, 7, 1, 200, '2023-06-26 00:25:05', '2023-06-26 00:25:05'),
(19, 11, 2, 1, 452, '2023-06-26 03:47:49', '2023-06-26 03:47:49'),
(20, 11, 19, 1, 1500, '2023-06-26 03:47:49', '2023-06-26 03:47:49');

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(20,2) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Biljka','Saksija','Ostalo') NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `trending` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=not-trending, 1=trending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `category`, `image`, `created_at`, `updated_at`, `quantity`, `trending`) VALUES
(1, 'Crvena Lala', '456.00', 'Lale ili tulipani, je cveće koje se zbog svog izgleda i raznolikosti često koristi za bukete. Može se držati u bašti kao i unutar doma.', 'Biljka', 'uploads/product/1687744196.jpg', '2023-03-28 14:42:32', '2023-06-25 23:49:56', 20, 1),
(2, 'Žuta Lala', '452.00', 'Lale ili tulipani, je cveće koje se zbog svog izgleda i raznolikosti često koristi za bukete. Može se držati u bašti kao i unutar doma.', 'Biljka', 'uploads/product/1687744227.jpg', '2023-03-28 14:43:07', '2023-06-26 03:47:49', 4, 0),
(3, 'Ukrasno kamenje', '300.00', 'Ukrasno kamenje će poslužiti onima koji žele da upotpune izgled svoje bašte. U odabiru imamo belo i sivo kamenje. Prodaje se po kilogramu.', 'Ostalo', 'uploads/product/1687744434.jpg', '2023-03-28 14:43:54', '2023-06-26 00:25:05', 48, 0),
(4, 'Fikus', '780.00', 'Nije težak za održavanje a najčešće se drži u domovima.', 'Biljka', 'uploads/product/1687745375.jpg', '2023-03-28 14:45:04', '2023-06-26 00:09:35', 25, 1),
(6, 'Ukrasna Saksija', '800.00', 'Ukrasna saskija srednje veličine.', 'Saksija', 'uploads/product/1687744919.jpg', '2023-03-28 14:50:24', '2023-06-26 00:01:59', 12, 0),
(7, 'Kaktus', '200.00', 'Kaktus je najpopularnija biljka za prvu kupovinu. Popularnost je stekao zbog svog lakog održavanja i malih troškova.', 'Biljka', 'uploads/product/1687745461.png', '2023-03-28 14:51:35', '2023-06-26 00:25:05', 44, 1),
(14, 'Mala Keramicka Saksija', '790.00', 'Keramička saksija male veličine idealna za biljke poput kaktusa. Izrađena od keramike.', 'Saksija', 'uploads/product/1687744843.jpg', '2023-03-30 07:24:50', '2023-06-26 00:00:43', 31, 1),
(15, 'Prskalica', '200.00', 'Prskalica će dobro poslužiti za hidrataciju biljaka i njihov zdrav rast.', 'Ostalo', 'uploads/product/1687744505.jpg', '2023-05-26 14:32:18', '2023-06-26 00:25:05', 21, 1),
(18, 'Orhideja', '350.00', 'Orhideja je cvet kome treba posvetiti dosta pažnje. Ima dva stanja; mirovanje koje traje traje do nekoliko meseci bez cvetanje i cvetanje. Ne preporučuje se držanje u keramičkim saksijama', 'Biljka', 'uploads/product/1687745310.jpg', '2023-06-07 17:29:03', '2023-06-26 00:08:30', 19, 1),
(19, 'Monstera', '1500.00', 'Tropska biljka cije je poreklo centralna Amerika. Veoma popularna biljka a može se držati unutra kao i u bašti. Idealna temperatura je između 17 i 25 stepeni.', 'Biljka', 'uploads/product/1687464410.jpg', '2023-06-22 18:06:50', '2023-06-26 03:47:49', 43, 1),
(20, 'Orijentalni ljiljani', '850.00', 'Orijentalni ljiljani su popularni cvetovi koji se cesto koriste za buketne aranzmane. Ukoliko imate kucnog ljubimca izbeggnite kupovinu ovog cveta jer su smrtnosni po njih.', 'Biljka', 'uploads/product/1687633323.jpg', '2023-06-24 17:02:03', '2023-06-25 18:53:11', 52, 1);

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
  `phone` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `role_as`) VALUES
(1, 'Marko Ilic', 'marko@gmail.com', NULL, '$2y$10$HkyRKHd8Ry1/goUKGyxvWesZ9A7Fbbu.mQa/ZVvAPnTpcVwHBpFW2', NULL, '2023-03-28 03:56:25', '2023-03-28 03:56:25', '0655678912', 0),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$mLC/87VLH9BZSi.A3Uk4tO/WxJsPYvtK3/lCVf17KxhfZfThKgjSa', NULL, '2023-03-28 08:55:06', '2023-03-28 08:55:06', '0605556677', 1),
(3, 'Minja Nikolic', 'minjan@gmail.com', NULL, '$2y$10$0p7szRFTjq9tUXxq4M9EwOsd5UqwllTCwvdLNHRwRwSsVpaDO3Uxi', NULL, '2023-03-29 11:42:18', '2023-03-29 11:42:18', '0604539888', 0),
(4, 'Jana Maslovaric', 'janam@gmail.com', NULL, '$2y$10$Jn89bh2sA7M0P8kolGJy7OxigmjoRFI4xpQVQSfWBdGWMV5Axv4dy', NULL, '2023-03-29 19:48:17', '2023-03-29 19:48:17', '063899678', 0),
(5, 'Kristina', 'kristina@gmail.com', NULL, '$2y$10$7CUNOQo3kKcdCZGikZBGdOiko1hUn2/Y2XmrlrEYqnZQfVcd.fA0W', NULL, '2023-05-24 15:24:41', '2023-05-24 15:24:41', '0649174492', 0),
(6, 'Dijana', 'dijana@gmail.com', NULL, '$2y$10$lx2otp0YguwtW1/v.M3/YOwwXW8Rutb8pnomVNK9ARn4u1Y1L7LF2', NULL, '2023-05-29 11:42:21', '2023-05-29 11:42:21', '0603251845', 0),
(7, 'Anja', 'anja@gmail.com', NULL, '$2y$10$pG9tLgzmuN/pqE7pKzFuMe2ZlIv3TeqwPQU4Cb1QPJqJ9Ka0n6kmu', NULL, '2023-06-25 15:45:02', '2023-06-25 15:45:02', '0649128908', 0),
(8, 'Andrijana', 'andrijana@gmail.com', NULL, '$2y$10$Ny64eDaQST.xlqa6GFbzyezw/9sz5ehAaRJjYMefN91mJlyE.ayhi', NULL, '2023-06-26 00:12:53', '2023-06-26 00:12:53', '0605556677', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kontakts`
--
ALTER TABLE `kontakts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontakts`
--
ALTER TABLE `kontakts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
