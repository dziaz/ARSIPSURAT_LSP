-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 04:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onic`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id`, `no_surat`, `kategori`, `judul`, `file_surat`, `created_at`, `updated_at`) VALUES
(2, '13/oio/12/t', 'undangan', 'abc', 'storage/surat/modul klasifikasi (1).pdf', '2023-11-14 11:06:37', '2023-11-14 11:06:37'),
(3, '12/jhfgj/sdf/4', 'undangan', 'batagor', 'storage/surat/SOAL UTS PML 2023.pdf', '2023-11-14 12:26:07', '2023-11-14 12:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'undangan', 'bebas', NULL, NULL),
(2, 'peminjaman', 'free', NULL, '2023-11-14 12:00:26');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_27_030506_m_user', 1),
(3, '2023_07_27_030542_t_membership', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

CREATE TABLE `m_user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`id_user`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'admin', '$2y$10$yHBWy5R0GBcqOJ0H5C1jGeBR8/v.yCaLtPF61Vz3WEQ4k/Ai08a3G', 'admin', NULL, '2023-08-15 22:04:26', '2023-08-15 22:04:26', NULL, NULL),
(7, 'deden22', '$2y$10$zyOrW2lwncgOXGpiEIXpne0ph1MdKANHTdjRFFmnOEVoFqQENmsgu', 'member', NULL, '2023-10-21 02:51:58', '2023-10-21 02:51:58', NULL, NULL),
(8, 'aziz99', '$2y$10$vm1DgmrDapf4a4AMYLokK.nyeQsXAHRaDvyxHjXat7tqpVW8BK0km', 'member', NULL, '2023-10-22 11:06:36', '2023-10-22 11:06:36', NULL, NULL),
(9, 'jhon00', '$2y$10$c4rtYZ45n7CtcfT12.mQgOKkmeOcgg84yfoY3VbDb/eziHMwQ9gWu', 'member', NULL, '2023-10-22 11:08:02', '2023-10-22 11:08:02', NULL, NULL),
(10, 'ani_hijrah', '$2y$10$wfxLuu2hrG0Tdfio5iIJA.4BuZQ9Icl8243CjzODiTw82qw8OH6vm', 'member', NULL, '2023-10-22 11:08:50', '2023-10-22 11:08:50', NULL, NULL),
(11, 'jejen-doank', '$2y$10$ffUXDfRzeElBPLeQSa2JQ.UfwNucNKxj8j5ylG7JfvQylrSXZoEWO', 'member', NULL, '2023-10-22 11:10:01', '2023-10-22 11:10:01', NULL, NULL),
(12, 'dandi', '$2y$10$mrZTOhoiuf8z0d9elPKuCOz5uG8dJoJZEFmI1JUkTAvGq.z/30r42', 'member', NULL, '2023-10-25 11:34:06', '2023-10-25 11:34:06', NULL, NULL),
(13, 'udil10', '$2y$10$TILbbcAFEPQwKqlmmRfGVuRn0E1rjgW/GCUwsKmXEt7u5eRh/aS12', 'member', NULL, '2023-10-25 11:35:23', '2023-10-25 11:35:23', NULL, NULL),
(14, 'player8', '$2y$10$ITplGoQBlhGeyavIAZkbqerXm9KenSS2chh7OqmBWE4xSPVxmk05O', 'member', NULL, '2023-10-25 11:36:26', '2023-10-25 11:36:26', NULL, NULL),
(15, 'kiki', '$2y$10$OKCdY.eE.Zv2aIpsTt91ueX4xUxYygnryKKXruwej5h40.PXyEeZO', 'member', NULL, '2023-10-25 11:37:07', '2023-10-25 11:37:07', NULL, NULL),
(16, 'player10', '$2y$10$YWiMriO2.GPl0zFD2EGTUuZUJHD6gIw.g27URYBSxOy3Ws3lHtfjy', 'member', NULL, '2023-10-25 11:46:30', '2023-10-25 11:46:30', NULL, NULL),
(17, 'andri', '$2y$10$FEqIrfpqYNGqZxyNPliRr.PPjMnHHS6elCAqhiNw1gv1unvUKPt0a', 'member', NULL, '2023-10-25 22:01:42', '2023-10-25 22:01:42', NULL, NULL),
(18, 'moonton', '$2y$10$ZXW9R7a9GHSrv17pPHcljuLVmvpB/M2D.CwVwM9eJsM9dZmEo2F9e', 'member', NULL, '2023-10-25 22:02:28', '2023-10-25 22:02:28', NULL, NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `m_user_created_by_foreign` (`created_by`),
  ADD KEY `m_user_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `m_user_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL,
  ADD CONSTRAINT `m_user_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `m_user` (`id_user`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
