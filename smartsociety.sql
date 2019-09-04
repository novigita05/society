-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 05:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartsociety`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `idActivity` int(11) NOT NULL,
  `type_activity` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`idActivity`, `type_activity`, `description`, `date`, `location`) VALUES
(1, '0', 'Cobahehehe', '2019-08-31', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `idAnnouncement` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `description` text NOT NULL,
  `place` varchar(75) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`idAnnouncement`, `title`, `description`, `place`, `date`, `time`) VALUES
(2, 'Kerja Bakti', 'Diberitahukan kepada seluruh warga, bahwa akan diadakan kerja bakti yang akan berlangsung pada :', 'Desa Blablabla', '2019-09-01', '08.00 - selesai');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `idCommunity` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `idComplaint` int(11) NOT NULL,
  `type` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`idComplaint`, `type`, `content`, `created_at`) VALUES
(1, '2', 'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', '2019-08-22 07:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `idMembers` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `no_kk` int(16) NOT NULL,
  `name` varchar(100) NOT NULL,
  `images` blob,
  `place_of_birth` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `religion` varchar(20) NOT NULL,
  `education` varchar(75) NOT NULL,
  `work` varchar(75) NOT NULL,
  `residence_status` enum('Tetap','Pindahan') NOT NULL,
  `home_number` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`idMembers`, `nik`, `no_kk`, `name`, `images`, `place_of_birth`, `date_of_birth`, `gender`, `religion`, `education`, `work`, `residence_status`, `home_number`) VALUES
(1, 87627182, 273687216, 'Frida', NULL, 'Sidoarjo', '1999-02-04', 'Perempuan', 'Islam', 'SMAN 4 Sidoarjo', 'Pelajar', 'Tetap', 'K 112'),
(2, 83128938, 1251324, 'Nabila', NULL, 'Surabaya', '1998-06-06', 'Perempuan', 'Islam', 'SMK Kesehatan', 'Pelajar', 'Pindahan', 'K 108'),
(3, 2324, 2322, 'Belum punya nama', 0x33323566616430666263376537643065633730653063323464343165663264622e6a7067, 'Mars', '1992-02-29', 'Laki-Laki', 'Kristen', 'Lupa namanya', 'Kok kepo', 'Tetap', 'M 112'),
(4, 987, 7689, 'Eka Yulia Agustina Sari', 0x33323566616430666263376537643065633730653063323464343165663264622e6a7067, 'Jombang', '1999-08-28', 'Perempuan', 'Islam', 'Sistem Informasi 2017', 'Mahasiswi', 'Pindahan', 'R 118');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idNews` int(11) NOT NULL,
  `title` varchar(75) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idNews`, `title`, `content`, `created_at`) VALUES
(3, 'Gagal di Piala Sudirman, Indonesia Fokus ke Kejuaraan Dunia 2019', 'Indonesia fokus ke Kejuaraan Dunia Bulutangkis 2019, setelah gagal di Piala Sudirman 2019. Di Piala Sudirman, Indonesia tersingkir di semifinal setelah kalah dari Jepang dengan skor 1-3 di Nanning, China, Sabtu (25/5/2019).  “Setelah ini kami akan langsung fokus ke turnamen selanjutnya dan membenahi apa saja yang perlu ditingkatkan. Ada Australia Open dan Indonesia Open. Kami juga fokus ke Kejuaraan Dunia di Swiss,” ujar Achmad Budiharto, Chef de Mission tim Indonesia. Pencapaian di Piala Sudirman 2019 sebenarnya lebih baik ketimbang edisi sebelumnya. Pada Piala Sudirman 2017 yang digelar di Gold Coast, Australia, Indonesia gagal lolos ke babak gugur setelah kalah bersaing dengan Denmark dan India.  Hasil di Piala Sudirman akan menjadi bahan evaluasi PBSI untuk melakukan persiapan lebih baik pada ajang selanjutnya.  “Pastinya tidak puas dengan hasil demikian, tapi harus kami terima. Ini akan menjadi bahan evaluasi tim secara keseluruhan sehingga pada kejuaraan yang akan datang, bisa kami perbaiki kekurangan dan kelemahan kami,” imbuhnya. Setelah Piala Sudirman 2019, pebulutangkis Indonesia dinanti beberapa ajang, yakni Indonesia Terbuka 2019 di Jakarta dan Kejuaraan Dunia 2019 di Basel, Swiss. Juga ada Australia Terbuka 2019 Super 300 di Sydney.', '2019-08-22 07:24:55'),
(4, 'Perusuh 22 Mei Serang Asrama Brimob untuk Rebut Amunisi dan Senjata', 'Jakarta - Polri menyebut salah satu alasan para perusuh menyerang asrama Brimob di Petamburan, Jakarta Barat, pada 22 Mei adalah untuk merebut amunisi dan senjata polisi. Para perusuh itu sudah memetakan jumlah anggota polisi yang berada di asrama Brimob.  \"Ya. Salah satu sasarannya adalah menyerbu asrama Mako Brimob, untuk merebut senjatanya, untuk melakukan tindakan yang lebih berbahaya lagi. Karena di situ kekuatan hanya 50 dan sebagian besar hanya wanita dan anak-anak kecil yang bisa bertahan di situ,\" kata Karo Penmas Divisi Humas Polri Brigjen Dedi Prasetyo di RS Polri Kramat Jati, Jakarta Timur, Senin (27/5/2019). Dedi mengatakan para perusuh itu membakar sejumlah kendaraan di asrama Brimob. Sementara itu, sejumlah amunisi dan senjata masih bisa dipertahankan.  \"Kan ditahan, dengan kekuatan 50 orang, kemudian yang menjangkau ratusan orang, dari Slipi maupun Tanah Abang dengan secara masif, dengan menggunakan batu, bom molotov, dan benda-benda berbahaya lainnya, melakukan perusakan, pembakaran-pembakaran seluruh kendaraan yang ada di depan asrama Brimob itu dibakar semuanya,\" ujarnya. Terkait kejadian ini, polisi telah menangkap 442 tersangka perusuh dan mengungkap 3 kelompok penunggang gelap. Hingga saat ini, polisi masih menyelidiki keterkaitan para perusuh dengan kelompok-kelompok tersebut.  \"Perusuh 442 tersangka yang sedang berproses, 3 kelompok beda... 442 itu perusuh, kalau kelompok ini kepemilikan senjata api, perencanaan pembunuhan, dan teroris. Itu di luar perusuh,\" kata Kadiv Humas Polri Irjen M Iqbal kepada wartawan di Kemenko Polhukam, Jl Medan Merdeka Barat, Jakarta Pusat.', '2019-08-21 07:17:00');

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
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idPost`, `content`, `created_at`) VALUES
(1, 'posting', '2019-08-22 08:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Novi', 'novigita05@gmail.com', NULL, '$2y$10$tv5BqMK/0EWQweAYtSG5WuSDjFWHQiddo4VNo5gPx0QV24RUCbtM6', NULL, '2019-08-22 19:40:09', '2019-08-22 19:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`idActivity`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`idAnnouncement`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`idCommunity`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`idComplaint`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`idMembers`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idNews`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`);

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
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `idActivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `idAnnouncement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `idCommunity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `idComplaint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `idMembers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idNews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
