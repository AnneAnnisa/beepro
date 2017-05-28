-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 06:34 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `nama_brand`) VALUES
(1, 'THE BODY SHOP'),
(2, 'NYKAA'),
(3, 'LAKME'),
(4, 'KIEHL''S'),
(5, 'BIODERMA'),
(6, 'L''OREAL PARIS'),
(7, 'KYLIE'),
(8, 'MARC JACOBS'),
(9, 'THEBALM'),
(10, 'KYLIE KIT'),
(11, 'ORIFLAME'),
(12, 'NYX'),
(13, 'COLORBAR'),
(14, 'M.A.C'),
(15, 'ETUDE'),
(16, 'INNISFREE'),
(17, 'MAYBELINNE NEW YORK'),
(18, 'THE FACE SHOP');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(10) UNSIGNED NOT NULL,
  `review_id` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `review_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, '/review/2.jpg', NULL, NULL),
(2, 2, '/review/1.jpg', NULL, NULL),
(3, 3, '/review/3.jpg', NULL, NULL),
(4, 4, '/review/5.jpg', NULL, NULL),
(5, 5, '/review/p1.jpg', NULL, NULL),
(23, 16, '/review/123.jpg', '2017-05-17 20:36:04', '2017-05-17 20:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_hashtag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`id`, `nama_hashtag`, `created_at`, `updated_at`) VALUES
(1, '#kylie', '2017-05-16 23:38:25', '2017-05-16 23:38:25'),
(2, '#lipkit', '2017-05-16 23:38:25', '2017-05-16 23:38:25'),
(3, '#etude', '2017-05-16 23:38:25', '2017-05-16 23:38:25'),
(4, '#lipgloss', '2017-05-16 23:38:26', '2017-05-16 23:38:26'),
(5, '#viva', '2017-05-16 23:38:26', '2017-05-16 23:38:26'),
(28, '#fefe', '2017-05-17 20:34:29', '2017-05-17 20:34:29'),
(29, '#sdas', '2017-05-17 20:36:04', '2017-05-17 20:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Face'),
(2, 'Lips'),
(3, 'Eyes'),
(4, 'Make Up Kits'),
(5, 'Cleanser'),
(6, 'Moisturizer'),
(7, 'Lip Care'),
(8, 'Bath'),
(9, 'Body'),
(10, 'Hands & Feet'),
(11, 'Face'),
(12, 'Lips'),
(13, 'Eyes'),
(14, 'Make Up Kits'),
(15, 'Cleanser'),
(16, 'Moisturizer'),
(17, 'Lip Care'),
(18, 'Bath'),
(19, 'Body'),
(20, 'Hands & Feet'),
(21, 'Face'),
(22, 'Lips'),
(23, 'Eyes'),
(24, 'Make Up Kits'),
(25, 'Cleanser'),
(26, 'Moisturizer'),
(27, 'Lip Care'),
(28, 'Bath'),
(29, 'Body'),
(30, 'Hands & Feet'),
(31, 'Face'),
(32, 'Lips'),
(33, 'Eyes'),
(34, 'Make Up Kits'),
(35, 'Cleanser'),
(36, 'Moisturizer'),
(37, 'Lip Care'),
(38, 'Bath'),
(39, 'Body'),
(40, 'Hands & Feet'),
(41, 'Face'),
(42, 'Lips'),
(43, 'Eyes'),
(44, 'Make Up Kits'),
(45, 'Cleanser'),
(46, 'Moisturizer'),
(47, 'Lip Care'),
(48, 'Bath'),
(49, 'Body'),
(50, 'Hands & Feet'),
(51, 'Face'),
(52, 'Lips'),
(53, 'Eyes'),
(54, 'Make Up Kits'),
(55, 'Cleanser'),
(56, 'Moisturizer'),
(57, 'Lip Care'),
(58, 'Bath'),
(59, 'Body'),
(60, 'Hands & Feet'),
(61, 'Face'),
(62, 'Lips'),
(63, 'Eyes'),
(64, 'Make Up Kits'),
(65, 'Cleanser'),
(66, 'Moisturizer'),
(67, 'Lip Care'),
(68, 'Bath'),
(69, 'Body'),
(70, 'Hands & Feet');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `id` int(10) UNSIGNED NOT NULL,
  `review_id` int(11) NOT NULL,
  `hashtag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`id`, `review_id`, `hashtag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 1, 5, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 4, 1, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 4, 3, NULL, NULL),
(8, 3, 2, NULL, NULL),
(9, 6, 4, NULL, NULL),
(14, 16, 29, '2017-05-17 20:36:04', '2017-05-17 20:36:04');

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
(3, '2017_05_11_051603_reviewMigrate', 1),
(4, '2017_05_11_051700_memilikiMigrate', 1),
(5, '2017_05_11_051714_hashtagMigrate', 1),
(6, '2017_05_11_051725_fotoMigrate', 1),
(7, '2017_05_11_052028_brandMigrate', 1),
(8, '2017_05_11_052200_kategoriMigrate', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toko` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lihat` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `users_id`, `brand_id`, `kategori_id`, `judul`, `isi`, `harga`, `toko`, `rating`, `created_at`, `updated_at`, `lihat`) VALUES
(1, 1, 3, 1, 'kylie', 'Estee Lauder-owned Clinique launched the concept of cosmetics being "allergy-tested," "hypoallergenic," "100% fragrance-free," and "dermatologist tested." Of those marketing claims, the only one with significance is "100% fragrance-free," which, for the most part, Clinique maintains (although it does add some fragrant extracts to a few products). Unfortunately, terms like “hypoallergenic” and “dermatologist tested” aren’t regulated by the FDA and can mean anything—thus, you still need to rely on the ingredient list to tell you whether their product contains any ingredients with the potential to irritate skin.', '123000', 'summarecon/edjkfdskfdskjfhesuk', 1, '2017-05-16 23:38:28', '2017-05-17 21:27:03', 43),
(2, 2, 3, 3, 'bagus pol', 'That inconvenient fact aside, Clinique is leading the way with cutting-edge, state-of-the-art moisturizers and serums, plus some formidable makeup and more than a few excellent sunscreens. While Clinique has some products that we see as missteps for reasons discussed in their reviews, more than ever, what they offer is quite good (just have realistic expectations, as some of their claims go beyond what their products are capable of).', '250000', 'olshopie', 3, '2017-05-16 23:38:28', '2017-05-17 14:44:03', 7),
(3, 3, 1, 1, 'Lipstik', 'Turning to makeup, Clinique continues to offer a vast palette of colors and textures, especially with their enormous selection of foundations—many of which feature effective sunscreens. Without a doubt, the numerous formulas offer something for every skin type and almost every skin color—though the blushes, eye makeup and lip colors are frequently not pigmented enough for deeper skin tones.', '100000', 'ulalala', 3, '2017-05-16 23:38:28', '2017-05-17 21:05:38', 31),
(4, 2, 3, 5, 'uwaaaw', 'Clinique is categorized as one that tests on animals because their products are sold in China. Although Clinique does not conduct animal testing for their products sold elsewhere, the Chinese government requires imported cosmetics be tested on animals, so foreign companies retailing there must comply. This requirement is why some brand’s state that they don’t test on animals “unless required by law”. Animal rights organizations consider cosmetic companies retailed in China to be brands that test on animals, and so does the Beautypedia Team.', '100000', 'nyam', 2, '2017-05-16 23:38:28', '2017-05-17 14:34:59', 16),
(5, 1, 2, 6, 'terbaik', 'This body wash''s name and claims make it sound like the antidote for dry, sensitive skin, yet its formula tells a different story. Based around the soap-like cleansing agent potassium myristate, many will find this cleanses too well, leaving skin feeling a bit dry and tight. Unlike many other cleansers that offset the potentially drying effects of potassium myristate with a high amount of glycerin or similar ingredients (or even an oil), Deep Comfort Body Wash is low on those ingredients, increasing the odds that this will have more of a drying, soap-like effect on skin.', '100000', 'nyam', 5, '2017-05-16 23:38:28', '2017-05-17 21:03:41', 12),
(6, 3, 4, 7, 'ehehee', 'That inconvenient fact aside, Clinique is leading the way with cutting-edge, state-of-the-art moisturizers and serums, plus some formidable makeup and more than a few excellent sunscreens. While Clinique has some products that we see as missteps for reasons discussed in their reviews, more than ever, what they offer is quite good (just have realistic expectations, as some of their claims go beyond what their products are capable of).', '122000', 'www.tokopedia.com', 3, NULL, '2017-05-17 14:40:48', 4),
(16, 3, 1, 1, 'contoh', 'coba edit hayo pin...', '123', 'wnfdjfn', 4, '2017-05-17 20:36:04', '2017-05-17 21:02:47', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `aboutme` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `path_foto`, `aboutme`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anne Annisa', 'c@c.c', '$2y$10$orrws6NXQGBCTpwVMwRdBeIk7CgXFYBv77hjPMXDrPK02ZKIOjwXS', '/user/anne.jpg', 'Hi semuaa! Aku mau sharing soal lippies yang lagi hits banget baik di Indonesia maupun di luar negri, cepet banget sold out nya sejak dirilis. Produk apakah itu? Yak tepat sekali, lippies yang akan aku review kali ini adalah Kylie Lip Kit.Sekarang Kylie Matte Lip Kit tersedia dalam 15 warna, sampe ada warna hitam dan biru segala, tapi aku hanya punya dua warna yaitu Koko K dan Posie K. Awalnya sempet mau beli Candy K juga tapi mengurungkan niat deh dan nyobain dua warna dulu. Yuk langsung kita mulai aja reviewnya.', NULL, NULL, NULL),
(2, 'pina', 'p@p.p', '$2y$10$orrws6NXQGBCTpwVMwRdBeIk7CgXFYBv77hjPMXDrPK02ZKIOjwXS', '/user/pina.jpg', 'Hi semuaa! Aku mau sharing soal lippies yang lagi hits banget baik di Indonesia maupun di luar negri, cepet banget sold out nya sejak dirilis. Produk apakah itu? Yak tepat sekali, lippies yang akan aku review kali ini adalah Kylie Lip Kit.Sekarang Kylie Matte Lip Kit tersedia dalam 15 warna, sampe ada warna hitam dan biru segala, tapi aku hanya punya dua warna yaitu Koko K dan Posie K. Awalnya sempet mau beli Candy K juga tapi mengurungkan niat deh dan nyobain dua warna dulu. Yuk langsung kita mulai aja reviewnya.', NULL, NULL, NULL),
(3, 'Tiara Amalia', 'a@a.a', '$2y$10$orrws6NXQGBCTpwVMwRdBeIk7CgXFYBv77hjPMXDrPK02ZKIOjwXS', '/user/dita.jpg', 'Hi semuaa! Aku mau sharing soal lippies yang lagi hits banget baik di Indonesia maupun di luar negri, cepet banget sold out nya sejak dirilis. Produk apakah itu? Yak tepat sekali, lippies yang akan aku review kali ini adalah Kylie Lip Kit.Sekarang Kylie Matte Lip Kit tersedia dalam 15 warna, sampe ada warna hitam dan biru segala, tapi aku hanya punya dua warna yaitu Koko K dan Posie K. Awalnya sempet mau beli Candy K juga tapi mengurungkan niat deh dan nyobain dua warna dulu. Yuk langsung kita mulai aja reviewnya.', NULL, '2017-05-17 12:49:21', '2017-05-17 14:50:49'),
(4, 'qwe', 'qwe@qwe.qwe', '$2y$10$HNZnErRMp05jnpiIrflQY.zU4mUNWlThS9NOXoTegC5tnqgr1UjXe', '', '', NULL, '2017-05-17 21:17:34', '2017-05-17 21:17:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `memiliki`
--
ALTER TABLE `memiliki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
