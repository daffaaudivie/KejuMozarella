-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2024 at 07:58 AM
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
-- Database: `kejumozarella`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_21_015733_create_tb_produk_table', 1),
(6, '2024_08_21_020948_create_tb_slider_table', 2),
(7, '2024_08_21_021550_create_tb_profil_table', 3),
(8, '2024_08_21_022631_create_tb_artikel_table', 4),
(9, '2024_08_21_030627_create_tb_olahan_table', 5);

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
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` bigint UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_artikel` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Keju'),
(2, 'Susu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` bigint UNSIGNED NOT NULL,
  `nama_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_menu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resep` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `foto_menu`, `deskripsi_menu`, `resep`) VALUES
(1, 'Chicken Cordon Bleu', 'menu/RpYdcwPldkVCPtD4AMX20eOEDQK3J0nYeF76YvWp.jpg', 'Tahukah kamu keju merupakan salah satu bahan makanan tertua yang masih populer digunakan di dunia modern? Penelitian mengungkapkan keju telah ada jauh sebelum bahasa ditemukan, sekitar 7.500 tahun silam. Selain citarasa gurih yang unik, keju memiliki berbagai khasiat bagi kesehatan tubuh manusia seperti meningkatkan kepadatan tulang dan membantu pertumbuhan gigi bagi anak-anak. Kadar protein yang tinggi juga menjadi alasan kenapa anak-anak dan ibu hamil sangat dianjurkan mengonsumsi keju secara teratur.', '200 gr Dada Ayam\r\n2 Smoked beef\r\n50 gr PROCHIZ Quickmelt\r\n1 gr Garam\r\n100 gr Terigu protein sedang\r\n5 gr Garam\r\n5 gr Bawang putih bubuk\r\n200 gr Tepung roti\r\n2 butir Telur'),
(2, 'Mac n Cheese', 'menu/OujZfCZLTYDaxfw4VohCX5PEJYRc11M2CXG4kYgy.jpg', 'Seperti namanya, resep mac and cheese tentu dibuat dari dua bahan utama yaitu makaroni dan keju. Makanan yang satu ini tidak hanya enak tapi juga kaya akan nutrisi yang bisa Anda dapatkan dari susu dan keju di dalam masakan ini. \r\nJika Anda tertarik untuk membuatnya, yuk simak baik-baik ragam resep mac and cheese dan tips membuatnya.', '400 ml susu UHT \r\n600 gram pasta makaroni atau varian pasta lain yang sejenis\r\n400 gram keju cheddar\r\n½ siung bawang bombay\r\n6 siung bawang putih\r\n2 sendok makan tepung terigu\r\n8 sendok makan margarin atau butter\r\n4 buah sosis sapi atau smoked beef\r\nGaram dapur secukupnya\r\nMerica bubuk secukupnya\r\nLada hitam sesuai selera');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kategori` int NOT NULL,
  `deskripsi_produk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `foto_produk`, `kode_kategori`, `deskripsi_produk`) VALUES
(1, 'Keju Mozarella', 'produk/snKCWAp1AUBzZ9fJlfLMszHCoTKCDVWfNCG2x4Hb.jpg', 1, 'Mozzarella adalah keju Italia yang dibuat dengan cara diputar dan dipotong, karena dalam bahasa Italia, mozzare berarti memotong. Keju ini dibuat dari susu sapi ataupun susu kerbau. Mozzarella di bufala dibuat dari susu kerbau, sementara mozzarella fior di latte dibuat dari susu sapi yang di pasteurisasi.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_perusahaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kontak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int UNSIGNED NOT NULL,
  `foto_slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `foto_slider`) VALUES
(7, 'sliders/x5MLkM941yol9ZFTOKzez2sqtRkvmOR3VrYhZcDs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Daffa Audyvie', 'daffa.audivie27@gmail.com', NULL, '$2y$12$nlzXf0d3egtGM2jb4UwYo.GcC4WwaMOIzNHBvi4J7FyDBmCbOKWWC', NULL, '2024-08-20 21:28:21', '2024-08-20 21:28:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
