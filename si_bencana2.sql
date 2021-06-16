-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 09:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_bencana2`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(5, 'Banjir', 'terjadi banjir akibat hujan deras yang menguyur bengkulu terjadi banjir akibat hujan deras yang menguyur bengkulu terjadi banjir akibat hujan deras yang menguyur bengkulu terjadi banjir akibat hujan deras yang menguyur bengkulu', '2021-06-15 20:15:57', '2021-06-15 20:15:57');

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
-- Table structure for table `infobencana`
--

CREATE TABLE `infobencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_bencana`
--

CREATE TABLE `jenis_bencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bencana`
--

INSERT INTO `jenis_bencana` (`id`, `nama`) VALUES
(23, 'Banjir'),
(24, 'Banjir Bandang'),
(25, 'Banjir Rob'),
(26, 'Tanah Longsor'),
(27, 'Gempa Bumi'),
(28, 'Tsunami'),
(29, 'Jalan Amblas'),
(30, 'Kebakaran'),
(31, 'Kekeringan'),
(32, 'Angin Puting Beliung'),
(33, 'Jembatan putus');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`) VALUES
(1, 'Bengkulu Tengah'),
(2, 'Bengkulu selatan'),
(3, 'Bengkulu Utara'),
(4, 'Lebong'),
(5, 'Kaur'),
(6, 'muko-muko'),
(7, 'kota bengkulu'),
(8, 'Kpahiang'),
(9, 'Rejang Lebong'),
(10, 'Seluma');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kabupaten`, `nama`) VALUES
(7, 2, 'kedurang'),
(8, 2, 'seginim'),
(9, 2, 'seginim air nipis'),
(14, 7, 'sungai serut'),
(15, 7, 'muara bangkahulu');

-- --------------------------------------------------------

--
-- Table structure for table `kejadian_bencana`
--

CREATE TABLE `kejadian_bencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kabupaten` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kecamatan` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kelurahan` bigint(20) UNSIGNED DEFAULT NULL,
  `id_jenis_bencana` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `lokasi` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meninggal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hilang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luka_luka` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mengungsi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terdampak` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rumah_RB` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rumah_RR` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rumah_RS` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rumah_terendam` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_pendidikan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_peribadatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_perkantoran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas_kesehatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jembatan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hutan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sawah` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kebun` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_kerusakan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upaya` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taksir_kerugian` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kejadian_bencana`
--

INSERT INTO `kejadian_bencana` (`id`, `id_kabupaten`, `id_kecamatan`, `id_kelurahan`, `id_jenis_bencana`, `tanggal`, `waktu`, `lokasi`, `jumlah`, `meninggal`, `hilang`, `luka_luka`, `mengungsi`, `terdampak`, `rumah_RB`, `rumah_RR`, `rumah_RS`, `rumah_terendam`, `fasilitas_pendidikan`, `fasilitas_peribadatan`, `fasilitas_perkantoran`, `fasilitas_kesehatan`, `jembatan`, `hutan`, `lahan`, `sawah`, `kebun`, `luas_kerusakan`, `penyebab`, `upaya`, `keterangan`, `taksir_kerugian`, `created_at`, `updated_at`) VALUES
(3, 2, 9, 10, 23, '2021-06-10', '15:46:00', 'suka rami seginim air nipis', '1', '-', '-', '-', '-', '-', '-', '-', '1', '2', '-', '-', '-', '-', '1', '-', '-', '-', '-', '-', 'hujan deras', 'perbaikan jalan yang rusak akibat banjir', 'terjadi kerusakan jalan dan jebolnya aliran air akibat banjir', 10000000.00, '2021-06-13 22:49:54', NULL),
(4, 1, 7, 9, 27, '2021-06-03', '12:34:00', 'rawa makmur', '1', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '1', '1', '-', '-', '-', '-', '-', '-', '-', '-', 20000.00, '2021-06-15 01:38:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `id_kecamatan`, `nama`) VALUES
(9, 7, 'Tanjung Negara'),
(10, 9, 'suka ramiiii'),
(12, 14, 'tanjung agung'),
(13, 15, 'rawa makmur');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_bencanas`
--

CREATE TABLE `laporan_bencanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek_bencana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kejadian` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kronologi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_bencanas`
--

INSERT INTO `laporan_bencanas` (`id`, `nama_lengkap`, `email`, `no_hp`, `subjek_bencana`, `lokasi_kejadian`, `kronologi`, `created_at`, `updated_at`) VALUES
(5, 'lovida', 'lovida@gail.com', '080899922233', 'banjir', 'juwita', 'terjadi banjir terjadi banjir terjadi banjir v terjadi banjir v terjadi banjir terjadi banjir', '2021-06-05 01:54:13', '2021-06-05 01:54:13'),
(7, 'ristianah', 'Ristianah@gmail.com', '08537871234', 'banjir', 'rawa makmur', 'terjadi banjir di rawa makmur dan sekitarnya tadi malam dan mengakibatkan rumah terendam', '2021-06-08 20:13:05', '2021-06-08 20:13:05'),
(8, 'eva nurmala sari', 'eva@gmail.com', '08021345632', 'longsor', 'curup', 'terjadinya longsor terjadinya longsor terjadinya longsor terjadinya longsor terjadinya longsor', '2021-06-10 01:00:07', '2021-06-10 01:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(5, 'App\\Models\\Berita', 3, 'berita_images', 'Banjir1', 'Banjir1.jpg', 'image/jpeg', 'public', 113227, '[]', '[]', '[]', 3, '2021-06-05 01:12:48', '2021-06-05 01:12:48'),
(6, 'App\\Models\\Laporan_bencana', 5, 'foto_laporan_bencana', 'Banjir1', 'Banjir1.jpg', 'image/jpeg', 'public', 113227, '[]', '[]', '[]', 4, '2021-06-05 01:54:14', '2021-06-05 01:54:14'),
(9, 'App\\Models\\Laporan_bencana', 7, 'foto_laporan_bencana', '10', '10.jpg', 'image/jpeg', 'public', 8008, '[]', '[]', '[]', 5, '2021-06-08 20:13:06', '2021-06-08 20:13:06'),
(10, 'App\\Models\\Laporan_bencana', 8, 'foto_laporan_bencana', '15', '15.jpg', 'image/jpeg', 'public', 12306, '[]', '[]', '[]', 6, '2021-06-10 01:00:07', '2021-06-10 01:00:07'),
(11, 'App\\Models\\Kejadian_bencana', 4, 'foto_kejadian_bencana', 'tanah longsor', 'tanah-longsor.JPG', 'image/jpeg', 'public', 54197, '[]', '[]', '[]', 7, '2021-06-15 01:38:37', '2021-06-15 01:38:37'),
(13, 'App\\Models\\Petarawanbencana', 2, 'foto_petarawanbencana', 'cuaca', 'cuaca.JPG', 'image/jpeg', 'public', 53207, '[]', '[]', '[]', 8, '2021-06-15 20:03:41', '2021-06-15 20:03:41'),
(14, 'App\\Models\\Berita', 5, 'berita_images', 'bbb', 'bbb.jpeg', 'image/jpeg', 'public', 123600, '[]', '[]', '[]', 9, '2021-06-15 20:15:57', '2021-06-15 20:15:57');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_28_082046_create_kabupatens_table', 2),
(8, '2021_04_28_092048_create_jenis_bencanas_table', 5),
(9, '2021_04_28_085744_create_kecamatans_table', 6),
(10, '2021_04_28_091204_create_kelurahans_table', 6),
(28, '2021_05_04_053326_create_kerusakans_table', 13),
(34, '2021_05_31_073731_create_laporan_bencanas_table', 16),
(36, '2021_05_31_093545_create_media_table', 17),
(40, '2021_06_04_082734_create_peringatans_table', 19),
(41, '2021_06_04_112809_add_status_to_peringatan_table', 20),
(42, '2021_06_04_120413_create_beritas_table', 21),
(43, '2021_06_07_144053_create_infobencanas_table', 22),
(45, '2021_04_28_092513_create_kejadian_bencanas_table', 23),
(46, '2021_06_15_092848_create_petarawanbencanas_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peringatan`
--

CREATE TABLE `peringatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_level` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peringatan`
--

INSERT INTO `peringatan` (`id`, `nama`, `lokasi`, `penyebab`, `tanggal`, `jam`, `Status`, `keterangan`, `flag_level`, `flag_status`, `created_at`, `updated_at`) VALUES
(11, 'banjir', 'rawa makmur', 'hujan deras', '2021-06-09', '15:48:00', 'Siaga', 'proses penindakan', '2', 1, '2021-06-15 23:49:34', '2021-06-15 23:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `petarawanbencana`
--

CREATE TABLE `petarawanbencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petarawanbencana`
--

INSERT INTO `petarawanbencana` (`id`, `nama_peta`, `diskripsi`, `created_at`, `updated_at`) VALUES
(2, 'peta cuaca ekstrim', 'cuaca', NULL, NULL);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nama', 'Ristianah@gmail.com', NULL, '$2y$10$dZsvJe.UHmhhoKdAKhDPluEc4p5IHRxUcQf8XrlBULqBwesKnEdaC', '3WSO39X7EJVxn8x9nF1zaoy5S5mYnPlcuQ4pDGxXpxCYbSHmLrlc5rETDAzb', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `infobencana`
--
ALTER TABLE `infobencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id_kabupaten_foreign` (`id_kabupaten`);

--
-- Indexes for table `kejadian_bencana`
--
ALTER TABLE `kejadian_bencana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kejadian_bencana_id_jenis_bencana_foreign` (`id_jenis_bencana`),
  ADD KEY `kejadian_bencana_id_kabupaten_foreign` (`id_kabupaten`),
  ADD KEY `kejadian_bencana_id_kecamatan_foreign` (`id_kecamatan`),
  ADD KEY `kejadian_bencana_id_kelurahan_foreign` (`id_kelurahan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `laporan_bencanas`
--
ALTER TABLE `laporan_bencanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peringatan`
--
ALTER TABLE `peringatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petarawanbencana`
--
ALTER TABLE `petarawanbencana`
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
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infobencana`
--
ALTER TABLE `infobencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kejadian_bencana`
--
ALTER TABLE `kejadian_bencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `laporan_bencanas`
--
ALTER TABLE `laporan_bencanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `peringatan`
--
ALTER TABLE `peringatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `petarawanbencana`
--
ALTER TABLE `petarawanbencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_id_kabupaten_foreign` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kejadian_bencana`
--
ALTER TABLE `kejadian_bencana`
  ADD CONSTRAINT `kejadian_bencana_id_jenis_bencana_foreign` FOREIGN KEY (`id_jenis_bencana`) REFERENCES `jenis_bencana` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `kejadian_bencana_id_kabupaten_foreign` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `kejadian_bencana_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `kejadian_bencana_id_kelurahan_foreign` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
