-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2021 at 07:06 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bd_guru_mengajar`
--

CREATE TABLE `bd_guru_mengajar` (
  `id_mengajar` bigint(20) NOT NULL,
  `id_matapelajaran` bigint(20) NOT NULL,
  `id_guru` bigint(20) NOT NULL,
  `id_kelas` bigint(20) NOT NULL,
  `id_tahun` bigint(20) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_guru_mengajar`
--

INSERT INTO `bd_guru_mengajar` (`id_mengajar`, `id_matapelajaran`, `id_guru`, `id_kelas`, `id_tahun`, `created_at`) VALUES
(1, 3, 2, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bd_kehadiran_siswa`
--

CREATE TABLE `bd_kehadiran_siswa` (
  `id_kehadiran` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `jam` char(6) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_kehadiran_siswa`
--

INSERT INTO `bd_kehadiran_siswa` (`id_kehadiran`, `id_siswa`, `tanggal`, `status`, `jam`, `created_at`) VALUES
(1, 1, '2021-10-08', 'Izin', '13:08', '2021-10-08 07:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `bd_nilai_siswa`
--

CREATE TABLE `bd_nilai_siswa` (
  `id_nilai` bigint(20) NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `id_kelas` bigint(20) NOT NULL,
  `id_matapelajaran` bigint(20) NOT NULL,
  `id_tahun` bigint(20) NOT NULL,
  `nama_nilai` varchar(255) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_nilai_siswa`
--

INSERT INTO `bd_nilai_siswa` (`id_nilai`, `id_siswa`, `id_kelas`, `id_matapelajaran`, `id_tahun`, `nama_nilai`, `nilai`, `created_at`) VALUES
(1, 1, 4, 3, 1, 'UTS', 65, '2021-12-23 21:22:25'),
(2, 1, 4, 3, 1, 'UAS', 80, '2021-12-23 21:22:25'),
(3, 1, 4, 3, 1, 'TUGAS', 70, '2021-12-23 21:22:25'),
(5, 1, 4, 1, 1, 'TH MATERI 1', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bd_pelanggaran_siswa`
--

CREATE TABLE `bd_pelanggaran_siswa` (
  `id_pelanggaran` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `pelanggaran` longtext NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'berat \r\nringan',
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_pelanggaran_siswa`
--

INSERT INTO `bd_pelanggaran_siswa` (`id_pelanggaran`, `id_siswa`, `pelanggaran`, `status`, `tanggal`, `created_at`) VALUES
(1, 1, '<p>gak gae sabuk</p><p>gak gae topi</p><p>gak gae baret<br></p>', 'Ringan', '2021-10-08', '2021-10-08 08:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `bd_siswa`
--

CREATE TABLE `bd_siswa` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `id_user_wali` bigint(20) NOT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `kode_unik` varchar(10) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_siswa`
--

INSERT INTO `bd_siswa` (`id_siswa`, `id_user_wali`, `nis`, `nama_siswa`, `no_telepon`, `kode_unik`, `created_at`) VALUES
(1, 2, '111112345', 'aqil', '0099876', '901F3', '2021-12-23 21:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `bd_tagihan_siswa`
--

CREATE TABLE `bd_tagihan_siswa` (
  `id_tagihan` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_tahun` bigint(20) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bd_tagihan_siswa`
--

INSERT INTO `bd_tagihan_siswa` (`id_tagihan`, `id_siswa`, `jenis`, `jumlah`, `status`, `id_tahun`, `created_at`) VALUES
(1, 1, 'SPP OKTOBER 2021', 220000, 'Belum_Lunas', 0, '2021-10-08 08:28:51');

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
-- Table structure for table `md_guru`
--

CREATE TABLE `md_guru` (
  `id_guru` bigint(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_guru`
--

INSERT INTO `md_guru` (`id_guru`, `no_hp`, `nama_guru`, `id_user`, `created_at`) VALUES
(2, '39483948', 'AQILSPC', 6, '2021-12-23 19:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `md_kebijakan`
--

CREATE TABLE `md_kebijakan` (
  `id_kebijakan` bigint(20) UNSIGNED NOT NULL,
  `nama_kebijakan` varchar(100) NOT NULL,
  `file_kebijakan` text NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kebijakan`
--

INSERT INTO `md_kebijakan` (`id_kebijakan`, `nama_kebijakan`, `file_kebijakan`, `created_at`) VALUES
(1, 'Tata Tertib Berseragamssss', 'http://localhost/kuliah/sms/public/admin/file/kebijakan/1416295824-file_kebijakan.pdf', '2021-10-08 05:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `md_kegiatan`
--

CREATE TABLE `md_kegiatan` (
  `id_kegiatan` bigint(20) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kegiatan`
--

INSERT INTO `md_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal`, `gambar`, `keterangan`, `created_at`) VALUES
(1, 'hut rissssw', '2021-10-08', 'http://localhost/kuliah/sms/public/admin/images/kegiatan/979309420-gambar.png', '<p><s>okokkokokok</s><br></p>', '2021-10-08 06:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `md_kelas`
--

CREATE TABLE `md_kelas` (
  `id_kelas` bigint(20) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kelas`
--

INSERT INTO `md_kelas` (`id_kelas`, `nama_kelas`, `created_at`) VALUES
(1, '1A', '2021-12-23 19:05:04'),
(2, '2A', '2021-12-23 19:05:12'),
(3, '3A', '2021-12-23 19:05:18'),
(4, '4Ab', '2021-12-23 19:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `md_kelas_siswa`
--

CREATE TABLE `md_kelas_siswa` (
  `id_kelas_siswa` bigint(20) NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `id_kelas` bigint(20) NOT NULL,
  `id_tahun` bigint(20) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_kelas_siswa`
--

INSERT INTO `md_kelas_siswa` (`id_kelas_siswa`, `id_siswa`, `id_kelas`, `id_tahun`, `created_at`) VALUES
(1, 1, 4, 1, '2021-12-23 21:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `md_matapelajaran`
--

CREATE TABLE `md_matapelajaran` (
  `id_matapelajaran` bigint(20) NOT NULL,
  `nama_matapelajaran` varchar(255) NOT NULL,
  `kkm` bigint(20) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_matapelajaran`
--

INSERT INTO `md_matapelajaran` (`id_matapelajaran`, `nama_matapelajaran`, `kkm`, `created_at`) VALUES
(1, 'PAI', 75, '2021-12-23'),
(2, 'IPA', 75, '2021-12-23'),
(3, 'IPS', 75, '2021-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `md_sistem`
--

CREATE TABLE `md_sistem` (
  `id_sistem` int(11) NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_sistem`
--

INSERT INTO `md_sistem` (`id_sistem`, `visi`, `misi`, `created_at`) VALUES
(1, 'Visi SMK Negeri 1 Pasuruan<br>\r\nTerwujudnya insan yang berakhlak mulia, kreatif, inovatif, mandiri, dan peduli lingkungan.<br><br>', ' Misi SMK Negeri 1 Pasuruan <br>\r\n1. Meningkatkan Nilai Keimanan dan Ketaqwaan kepada Tuhan Yang Maha Esa<br>\r\n2. Menumbuhkembangkan Jiwa Nasionalisme<br>\r\n3. Meningkatkan Prestasi dalam Ilmu Pengetahuan, Teknologi, Seni Budaya dan Olahraga<br>\r\n4. Menumbuhkembangkan Kreatifitas, Inovatif dan Produktifitas dalam Peningkatan Mutu Pendidikan<br>\r\n5. Menumbuhkembangkan Kemandirian<br>\r\n6. Menanamkan sikap pelestarian Lingkungan, Pencegahan Terjadinya  Pencemaran dan  Kerusakan Lingkungan', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `md_tahun_ajaran`
--

CREATE TABLE `md_tahun_ajaran` (
  `id_tahun` bigint(20) NOT NULL,
  `priode_tahun` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `md_tahun_ajaran`
--

INSERT INTO `md_tahun_ajaran` (`id_tahun`, `priode_tahun`, `created_at`, `updated_at`) VALUES
(1, '2021-2022', '2021-12-23 18:45:17', NULL),
(2, '2022-2023', '2021-12-23 18:49:58', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@sms.com', NULL, '$2y$10$oDJ8Rpk1VkGOFpKDkIyx5OkKkMxNbwbxgZKlZPYJSo9S7.BQ.vbZ2', 'jPFRxMSSogY5xSNH3hD6HhpFNdkaQqLzocMnUaAdTsaboYv90AAPdSHyvuBI', NULL, NULL),
(2, 'wali', 'abd muchdyidin', 'abd_muchdyidin@smss.my.id', NULL, '$2y$10$hSd9AKLXX2e9thRrD4KNRO/BaKx3wsgYZurO6rlqz7Ci/dXQTr0ui', NULL, '2021-10-07 23:43:14', NULL),
(5, 'guru', 'AQILSPC', 'aqil@gg.com', NULL, '$2y$10$V6SatAsiQjKqp/JLTT3uzOZ.5gOe/cHMwMNJSKdU7Ev4DiaiMxYxe', NULL, '2021-12-23 12:25:11', NULL),
(6, 'guru', 'AQILSPC', 'abu@gmail.com', NULL, '$2y$10$.dFMPZFYHV2yEGJP9yditutz8jEA/VCI1OqvEBMgoHRvIiuCOoXGO', NULL, '2021-12-23 12:34:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_guru_mengajar`
--
ALTER TABLE `bd_guru_mengajar`
  ADD PRIMARY KEY (`id_mengajar`);

--
-- Indexes for table `bd_kehadiran_siswa`
--
ALTER TABLE `bd_kehadiran_siswa`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `bd_nilai_siswa`
--
ALTER TABLE `bd_nilai_siswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `bd_pelanggaran_siswa`
--
ALTER TABLE `bd_pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `bd_siswa`
--
ALTER TABLE `bd_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `bd_tagihan_siswa`
--
ALTER TABLE `bd_tagihan_siswa`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `md_guru`
--
ALTER TABLE `md_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `md_kebijakan`
--
ALTER TABLE `md_kebijakan`
  ADD PRIMARY KEY (`id_kebijakan`);

--
-- Indexes for table `md_kegiatan`
--
ALTER TABLE `md_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `md_kelas`
--
ALTER TABLE `md_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `md_kelas_siswa`
--
ALTER TABLE `md_kelas_siswa`
  ADD PRIMARY KEY (`id_kelas_siswa`);

--
-- Indexes for table `md_matapelajaran`
--
ALTER TABLE `md_matapelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `md_sistem`
--
ALTER TABLE `md_sistem`
  ADD PRIMARY KEY (`id_sistem`);

--
-- Indexes for table `md_tahun_ajaran`
--
ALTER TABLE `md_tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `bd_guru_mengajar`
--
ALTER TABLE `bd_guru_mengajar`
  MODIFY `id_mengajar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_kehadiran_siswa`
--
ALTER TABLE `bd_kehadiran_siswa`
  MODIFY `id_kehadiran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_nilai_siswa`
--
ALTER TABLE `bd_nilai_siswa`
  MODIFY `id_nilai` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bd_pelanggaran_siswa`
--
ALTER TABLE `bd_pelanggaran_siswa`
  MODIFY `id_pelanggaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_siswa`
--
ALTER TABLE `bd_siswa`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bd_tagihan_siswa`
--
ALTER TABLE `bd_tagihan_siswa`
  MODIFY `id_tagihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `md_guru`
--
ALTER TABLE `md_guru`
  MODIFY `id_guru` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `md_kebijakan`
--
ALTER TABLE `md_kebijakan`
  MODIFY `id_kebijakan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_kegiatan`
--
ALTER TABLE `md_kegiatan`
  MODIFY `id_kegiatan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_kelas`
--
ALTER TABLE `md_kelas`
  MODIFY `id_kelas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `md_kelas_siswa`
--
ALTER TABLE `md_kelas_siswa`
  MODIFY `id_kelas_siswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_matapelajaran`
--
ALTER TABLE `md_matapelajaran`
  MODIFY `id_matapelajaran` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `md_sistem`
--
ALTER TABLE `md_sistem`
  MODIFY `id_sistem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_tahun_ajaran`
--
ALTER TABLE `md_tahun_ajaran`
  MODIFY `id_tahun` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
