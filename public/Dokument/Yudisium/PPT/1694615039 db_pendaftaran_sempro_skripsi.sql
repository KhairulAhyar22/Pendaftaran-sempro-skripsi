-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 01:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_sempro`
--

CREATE TABLE `tb_daftar_sempro` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) DEFAULT NULL,
  `nim` bigint(20) DEFAULT NULL,
  `judul_proposal` text DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `pembimbing1` varchar(40) DEFAULT NULL,
  `pembimbing2` varchar(40) DEFAULT NULL,
  `tgl_accp1` datetime DEFAULT NULL,
  `tgl_accp2` datetime DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `file_krs` varchar(255) DEFAULT NULL,
  `file_proposal` varchar(255) DEFAULT NULL,
  `status_mahasiswa` varchar(255) DEFAULT NULL,
  `status_dok` varchar(20) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `user_create` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_daftar_sempro`
--

INSERT INTO `tb_daftar_sempro` (`id`, `nama_mahasiswa`, `nim`, `judul_proposal`, `jenis_kelamin`, `pembimbing1`, `pembimbing2`, `tgl_accp1`, `tgl_accp2`, `no_hp`, `file_krs`, `file_proposal`, `status_mahasiswa`, `status_dok`, `status`, `user_create`, `created_at`, `updated_at`) VALUES
(32, 'Iren Kirana', 1904411231, 'RANCANG BANGUN SISTEM INFORMASI PENDATAAN PROPOSAL SKRIPSI DAN YUDISIUM PADA PROGRAM STUDI INFORMATIKA FAKULTAS TEKNIK KOMPUTER UNIVERSITAS COKROAMINOTO PALOPO', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd.', '2023-08-25 00:00:00', '2023-08-25 00:00:00', '082194947882', '1692894422 Formulir 1904411007_Khairullah.pdf', '1692894422 Formulir 1904411007_Khairullah.pdf', 'Regular', 'Belum Lengkap', 'Terbuat', 5, '2023-08-24 08:27:04', '2023-08-24 14:12:01'),
(33, 'Iren Kirana', 1904411231, 'RANCANG BANGUN SISTEM INFORMASI PENDATAAN PROPOSAL SKRIPSI DAN YUDISIUM PADA PROGRAM STUDI INFORMATIKA FAKULTAS TEKNIK KOMPUTER UNIVERSITAS COKROAMINOTO PALOPO', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd.', '2023-01-23 00:00:00', '2023-01-21 00:00:00', '085343831874', '1692915908 KRS.pdf', '1692915908 Proposal.pdf', 'Regular', 'Lengkap', 'Terjadwal', 8, '2023-08-24 14:25:08', '2023-08-24 16:15:39'),
(34, 'Nurnaini', 1904411227, 'Rancang bangun aplikasi persuratan', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd.', '2023-08-27 00:00:00', '2023-08-27 00:00:00', '081234567890', '1693112383 KRS.pdf', '1693112383 Proposal.pdf', 'Regular', 'Belum Lengkap', 'Terbuat', 9, '2023-08-26 20:59:44', '2023-09-07 05:44:50'),
(35, 'nur afika firanti', 1904411232, 'rancang bangun aplikasi penilaian seminar proposal dan ujian skripsi', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Syafriadi, S.Kom., M.Kom.', '2023-09-07 00:00:00', '2023-09-07 00:00:00', '22222222222', '1694097399 Iren Kirana - Copy (3).pdf', '1694097399 Iren Kirana - Copy (5).pdf', 'Regular', 'Lengkap', 'Terjadwal', 11, '2023-09-07 06:36:39', '2023-09-07 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_skripsi`
--

CREATE TABLE `tb_daftar_skripsi` (
  `id` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) DEFAULT NULL,
  `nim` bigint(20) DEFAULT NULL,
  `status_mahasiswa` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `judul_skripsi` text DEFAULT NULL,
  `pembimbing1` varchar(40) DEFAULT NULL,
  `pembimbing2` varchar(40) DEFAULT NULL,
  `tglacc_proposal` datetime DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `uji_similarity` varchar(255) DEFAULT NULL,
  `nama_pa` varchar(40) DEFAULT NULL,
  `status_dok` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `user_create` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_daftar_skripsi`
--

INSERT INTO `tb_daftar_skripsi` (`id`, `nama_mahasiswa`, `nim`, `status_mahasiswa`, `jenis_kelamin`, `judul_skripsi`, `pembimbing1`, `pembimbing2`, `tglacc_proposal`, `no_hp`, `uji_similarity`, `nama_pa`, `status_dok`, `status`, `user_create`, `created_at`, `updated_at`) VALUES
(8, 'Khairullah', 1904411007, 'Regular', 'Laki Laki', 'test', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-08-25 00:00:00', '082194947882', '1692899304 Formulir 1904411007_Khairullah.pdf', 'Diandradika Prasti, S.Kom., M.Kom.', 'Belum Lengkap', 'Terbuat', NULL, '2023-08-24 09:48:24', '2023-08-24 09:48:24'),
(11, 'sds', 1904411007, 'Regular', 'Laki Laki', 'test', 'Nirsal, S.Kom., M.Kom.', 'Diandradika Prasti, S.Kom., M.Kom.', '2023-08-25 00:00:00', '0821', '1692902458 Formulir 1904411007_Khairullah.pdf', 'Diandradika Prasti, S.Kom., M.Kom.', 'Lengkap', 'Terverifikasi', 5, '2023-08-24 10:40:58', '2023-08-24 11:16:28'),
(12, 'iren Kirana', 1904411231, 'Regular', 'Perempuan', 'RANCANG BANGUN SISTEM INFORMASI PENDATAAN PROPOSAL SKRIPSI DAN YUDISIUM PADA PROGRAM STUDI INFORMATIKA FAKULTAS TEKNIK KOMPUTER UNIVERSITAS COKROAMINOTO PALOPO', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd.', '2023-08-24 00:00:00', '08114488396', '1692917154 Scan2022-06-08_133321.jpg', 'Nirsal, S.Kom., M.Kom.', 'Lengkap', 'Terverifikasi', 8, '2023-08-24 14:45:54', '2023-08-24 16:10:58'),
(13, 'ayu ayu', 1111, 'Regular', 'Perempuan', 'sistem pakar', 'Syafriadi, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-09-20 00:00:00', '1123425683', '1694064610 Iren Kirana - Copy (2).pdf', 'Vicky Bin Djusmin, S.Kom., M.Kom.', 'Belum Lengkap', 'Terverifikasi', 8, '2023-09-06 21:30:11', '2023-09-06 21:36:18'),
(14, 'afika', 232, 'Regular', 'Perempuan', 'rancang bngun', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-09-07 00:00:00', '1111111111', '1694094886 Iren Kirana - Copy (5).pdf', 'Supriadi, S.Ag., M.Pd.', 'Belum Lengkap', 'Terbuat', 5, '2023-09-07 05:54:46', '2023-09-07 05:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dok_sempro`
--

CREATE TABLE `tb_dok_sempro` (
  `id` int(11) NOT NULL,
  `id_daftar_sempro` int(11) DEFAULT NULL,
  `file_krs` varchar(255) DEFAULT NULL,
  `file_kartu_konsul` varchar(255) DEFAULT NULL,
  `file_khs` varchar(255) DEFAULT NULL,
  `file_lunas_spp` varchar(255) DEFAULT NULL,
  `file_slip_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_dok_sempro`
--

INSERT INTO `tb_dok_sempro` (`id`, `id_daftar_sempro`, `file_krs`, `file_kartu_konsul`, `file_khs`, `file_lunas_spp`, `file_slip_pembayaran`, `created_at`, `updated_at`) VALUES
(9, 32, NULL, '1692895534 Formulir 1904411007_Khairullah.pdf', '1692895534 Formulir 1904411007_Khairullah.pdf', '1692895534 Formulir 1904411007_Khairullah.pdf', '1692895534 Formulir 1904411007_Khairullah.pdf', '2023-08-24 08:45:34', '2023-08-24 08:45:34'),
(10, 33, NULL, '1692916263 Tutorial Download Kartu UAS.pdf', '1692916263 Tutorial Download Kartu UAS.pdf', '1692916263 Tutorial Download Kartu UAS (2).pdf', '1692916263 Tutorial Download Kartu UAS.pdf', '2023-08-24 14:31:03', '2023-08-24 14:31:03'),
(11, 35, NULL, '1694098596 KTP (1).pdf', '1694098596 IJAZAH.pdf', '1694098596 BPJS IREN.pdf', '1694098596 6. Silabus Sosiologi Kelas XII Semester Genap.pdf', '2023-09-07 06:56:36', '2023-09-07 06:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dok_skripsi`
--

CREATE TABLE `tb_dok_skripsi` (
  `id` int(11) NOT NULL,
  `id_daftar_skripsi` int(11) DEFAULT NULL,
  `file_skripsi` varchar(100) DEFAULT NULL,
  `file_bukti_acc` varchar(100) DEFAULT NULL,
  `file_spus` varchar(100) DEFAULT NULL,
  `file_pengesahan_proposal` varchar(100) DEFAULT NULL,
  `file_krs` varchar(100) DEFAULT NULL,
  `file_ktm` varchar(100) DEFAULT NULL,
  `file_bukti_lunasspp` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_dok_skripsi`
--

INSERT INTO `tb_dok_skripsi` (`id`, `id_daftar_skripsi`, `file_skripsi`, `file_bukti_acc`, `file_spus`, `file_pengesahan_proposal`, `file_krs`, `file_ktm`, `file_bukti_lunasspp`, `created_at`, `updated_at`) VALUES
(3, 9, '1692899783 Formulir 1904411007_Khairullah.pdf', '1692899783 Formulir 1904411007_Khairullah.pdf', '1692899783 Formulir 1904411007_Khairullah.pdf', '1692899783 Formulir 1904411007_Khairullah.pdf', '1692899783 Formulir 1904411007_Khairullah.pdf', '1692899783 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '1692899783 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '2023-08-24 09:56:23', '2023-08-24 09:56:23'),
(4, 11, '1692902620 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '1692902620 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '1692902620 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '1692902620 Formulir 1904411007_Khairullah.pdf', '1692902620 Formulir 1904411007_Khairullah.pdf', '1692902620 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '1692902620 Jadwal Seminar Proposal Khairullah-1904411007.pdf', '2023-08-24 10:43:40', '2023-08-24 10:43:40'),
(5, 12, '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '1692917213 portofolio_Iren Kirana.pdf', '2023-08-24 14:46:54', '2023-08-24 14:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nama_dosen`, `created_at`, `updated_at`) VALUES
(1, 'Nirsal, S.Kom., M.Kom.', '2023-07-22 02:27:27', '2023-07-22 02:27:30'),
(2, 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-07-22 02:27:42', '2023-07-22 02:27:44'),
(3, 'Diandradika Prasti, S.Kom., M.Kom.', '2023-07-24 01:36:45', '2023-07-24 01:36:48'),
(4, 'Supriadi, S.Ag., M.Pd.', NULL, NULL),
(5, 'Syafriadi, S.Kom., M.Kom.', NULL, NULL),
(6, 'Nirwana, S.Pd., M.Pd.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_sempro`
--

CREATE TABLE `tb_jadwal_sempro` (
  `id` int(11) NOT NULL,
  `id_proposal` int(11) DEFAULT NULL,
  `tempat` varchar(40) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `ketua_tim` varchar(50) DEFAULT NULL,
  `anggota` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_jadwal_sempro`
--

INSERT INTO `tb_jadwal_sempro` (`id`, `id_proposal`, `tempat`, `waktu`, `no_surat`, `tanggal`, `ketua_tim`, `anggota`, `created_at`, `updated_at`) VALUES
(8, 32, 'Ruang Seminar ', '01:02:00', 's', '2023-08-25 00:00:00', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd', '2023-08-24 09:10:38', '2023-08-24 09:10:38'),
(9, 33, 'Ruang Seminar', '10:00:00', '121', '2023-08-25 00:00:00', 'Nirsal, S.Kom., M.Kom.', 'Supriadi, S.Ag., M.Pd.', '2023-08-24 16:15:39', '2023-08-24 16:15:39'),
(10, 35, 'Ruang Seminar', '00:00:00', '123', '2023-09-08 00:00:00', 'Nirsal, S.Kom., M.Kom.', 'Syafriadi, S.Kom., M.Kom.', '2023-09-07 06:59:04', '2023-09-07 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_skripsi`
--

CREATE TABLE `tb_jadwal_skripsi` (
  `id` int(11) NOT NULL,
  `id_skripsi` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `ketua_tim` varchar(255) DEFAULT NULL,
  `anggota1` varchar(255) DEFAULT NULL,
  `anggota2` varchar(255) DEFAULT NULL,
  `anggota3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `confirm_password`, `nim`, `level`, `created_at`, `updated_at`) VALUES
(4, 'Kiki', '$2y$10$Ja3h6.GDn5UZRW1BNaU29eCL.k5EsN3qKy2hDorjq/m9/RhBCYyau', 'Fakultas', NULL, 'Fakultas', '2023-08-16 15:00:02', '2023-08-16 15:00:02'),
(5, 'Iren', '$2y$10$69BNy9iObDOZ42wIqr85EOKcoPDil3a0qTUL5XQR/hSFCJeXZZax2', 'khairul', '1904411231', 'Mahasiswa', '2023-08-16 15:00:58', '2023-08-16 15:00:58'),
(6, 'Nurul', '$2y$10$ZbZmD3hlI08L4z8xqB1Lse6Y6l51cvGqpcy3npIXZ/StZgqdclniq', 'Nurul', NULL, 'Prodi', '2023-08-16 15:01:13', '2023-08-16 15:01:13'),
(8, 'Iren Kirana', '$2y$10$z88ZRtG3PAwn5UI/NRtfUe3zGEZwu6MyWMPFq2smAqJbO2zr9fANW', 'Iren', '1904411231', 'Mahasiswa', '2023-08-24 14:16:37', '2023-08-24 14:16:37'),
(9, 'Nurnaini', '$2y$10$LL2xLLmhoGQ5tIcAqmyNjutVwNu29WS5KEzDnObhb87U426wIICD2', 'naini', '1904411230', 'Mahasiswa', '2023-08-24 14:58:38', '2023-08-24 14:58:38'),
(11, 'Afika', '$2y$10$4POkpnqL4/K.VsJxZsEATufhBMZ.CAUvijNF6lwccIP.pawbbzPIK', 'afika', '1904411231', 'Mahasiswa', '2023-09-07 06:05:42', '2023-09-07 06:05:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_daftar_sempro`
--
ALTER TABLE `tb_daftar_sempro`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_daftar_skripsi`
--
ALTER TABLE `tb_daftar_skripsi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_dok_sempro`
--
ALTER TABLE `tb_dok_sempro`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `unique_id_proposal` (`id_daftar_sempro`) USING BTREE;

--
-- Indexes for table `tb_dok_skripsi`
--
ALTER TABLE `tb_dok_skripsi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_jadwal_sempro`
--
ALTER TABLE `tb_jadwal_sempro`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_jadwal_skripsi`
--
ALTER TABLE `tb_jadwal_skripsi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_daftar_sempro`
--
ALTER TABLE `tb_daftar_sempro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_daftar_skripsi`
--
ALTER TABLE `tb_daftar_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_dok_sempro`
--
ALTER TABLE `tb_dok_sempro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_dok_skripsi`
--
ALTER TABLE `tb_dok_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal_sempro`
--
ALTER TABLE `tb_jadwal_sempro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jadwal_skripsi`
--
ALTER TABLE `tb_jadwal_skripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
