/*
 Navicat Premium Data Transfer

 Source Server         : mom
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : pendaftaran_seminar

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 11/08/2023 08:06:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_daftar_sempro
-- ----------------------------
DROP TABLE IF EXISTS `tb_daftar_sempro`;
CREATE TABLE `tb_daftar_sempro`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nim` bigint NULL DEFAULT NULL,
  `judul_proposal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing1` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing2` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_accp1` datetime NULL DEFAULT NULL,
  `tgl_accp2` datetime NULL DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_krs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_proposal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_mahasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_dok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_daftar_sempro
-- ----------------------------
INSERT INTO `tb_daftar_sempro` VALUES (1, 'iren kirana', 190, 'judul sempro iren', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-06-10 00:00:00', '2023-06-10 00:00:00', '081', NULL, NULL, NULL, 'Belum Lengkap', 'Terbuat', '2023-06-10 11:31:50', '2023-07-22 02:32:48');
INSERT INTO `tb_daftar_sempro` VALUES (13, 'IREN  KIRANA', 1904411231, 'Rancang bangun pendataan proposal, skripsi dan yudisium pada program studi informatika fakultas teknik komputer universitas cokroaminoto palopo', 'Perempuan', 'Vicky Bin Djusmin, S.Kom., M.Kom.', 'Nirsal, S.Kom., M.Kom.', '2023-06-13 00:00:00', '2023-06-13 00:00:00', '085343831874', NULL, NULL, NULL, 'Belum Lengkap', 'Terbuat', '2023-06-13 03:17:02', '2023-07-20 02:57:09');
INSERT INTO `tb_daftar_sempro` VALUES (20, 'iren', 1904411231, 'rancang bangun sistem informasi', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-07-31 00:00:00', '2023-07-31 00:00:00', '085343831874', NULL, NULL, NULL, 'Belum Lengkap', 'Terbuat', '2023-07-31 05:45:36', '2023-07-31 05:45:36');
INSERT INTO `tb_daftar_sempro` VALUES (23, 'iren', 1904411007, 'test', 'Laki Laki', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-08-10 00:00:00', '2023-08-10 00:00:00', '081', '1691609423 CV Khairul 20232.pdf', '1691609423 CV Khairul 20232.pdf', NULL, 'Belum Lengkap', 'Terbuat', '2023-08-09 19:30:23', '2023-08-09 19:30:23');
INSERT INTO `tb_daftar_sempro` VALUES (28, 'sds', 1904411007, 'w', 'Perempuan', 'Nirsal, S.Kom., M.Kom.', 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-08-10 00:00:00', '2023-08-10 00:00:00', '12', '1691678926 Formulir 1904411007_iren.pdf', '1691678926 Formulir 1904411007_iren.pdf', 'Regular', 'Belum Lengkap', 'Terbuat', '2023-08-10 14:48:46', '2023-08-10 14:58:02');

-- ----------------------------
-- Table structure for tb_daftar_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `tb_daftar_skripsi`;
CREATE TABLE `tb_daftar_skripsi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nim` bigint NULL DEFAULT NULL,
  `status_mahasiswa` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_skripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pembimbing1` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing2` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tglacc_proposal` datetime NULL DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uji_similarity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pa` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_dok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tb_daftar_skripsi
-- ----------------------------
INSERT INTO `tb_daftar_skripsi` VALUES (1, 'Khairul Ahyar', 1904411306, 'Regular', 'Laki Laki', 'Rancang Bangun Aplikasi Pelaporan Satuan Pengamanan di PT. Pertamina Patra Niaga Fuel Terminal Palopo Berbasis Website', 'Vicky Bin Djusmin, S.Kom., M.Kom.', 'Nirsal, S.Kom., M.Kom.', '2023-07-16 11:38:44', '082194947882', NULL, 'Diandradika Prasti, S.Kom., M.Kom.', 'Belum Lengkap', NULL, '2023-07-16 12:12:19', '2023-07-24 01:23:00');
INSERT INTO `tb_daftar_skripsi` VALUES (6, 'sds', 1904411007, 'Non Regular', 'Laki Laki', 'w', 'Nirsal, S.Kom., M.Kom.', 'Nirsal, S.Kom., M.Kom.', '2023-08-11 00:00:00', '09', '1691684619 Formulir 1904411007_iren.pdf', 'Vicky Bin Djusmin, S.Kom., M.Kom.', 'Belum Lengkap', 'Terbuat', '2023-08-10 16:23:39', '2023-08-10 16:38:13');

-- ----------------------------
-- Table structure for tb_dok_sempro
-- ----------------------------
DROP TABLE IF EXISTS `tb_dok_sempro`;
CREATE TABLE `tb_dok_sempro`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_daftar_sempro` int NULL DEFAULT NULL,
  `file_krs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_kartu_konsul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_khs` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_lunas_spp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_slip_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique_id_proposal`(`id_daftar_sempro` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dok_sempro
-- ----------------------------

-- ----------------------------
-- Table structure for tb_dok_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `tb_dok_skripsi`;
CREATE TABLE `tb_dok_skripsi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_daftar_skripsi` int NULL DEFAULT NULL,
  `file_skripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_bukti_acc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_spus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_pengesahan_proposal` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_krs` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_ktm` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_bukti_lunasspp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dok_skripsi
-- ----------------------------

-- ----------------------------
-- Table structure for tb_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tb_dosen`;
CREATE TABLE `tb_dosen`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dosen
-- ----------------------------
INSERT INTO `tb_dosen` VALUES (1, 'Nirsal, S.Kom., M.Kom.', '2023-07-22 10:27:27', '2023-07-22 10:27:30');
INSERT INTO `tb_dosen` VALUES (2, 'Vicky Bin Djusmin, S.Kom., M.Kom.', '2023-07-22 10:27:42', '2023-07-22 10:27:44');
INSERT INTO `tb_dosen` VALUES (3, 'Diandradika Prasti, S.Kom., M.Kom.', '2023-07-24 09:36:45', '2023-07-24 09:36:48');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (1, 'Nurul', '$2y$10$vcx9hTVieqE7XFIQlHNEhOOSvrAS/TzaG3x2BOghju8t4KOgu./Da', '2023-08-09 13:50:09', '2023-08-09 13:50:09');

SET FOREIGN_KEY_CHECKS = 1;
