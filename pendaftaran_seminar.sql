/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : pendaftaran_seminar

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 11/07/2023 11:00:19
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
  `judul_sempro` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing1` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing2` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tgl_accp1` datetime NULL DEFAULT NULL,
  `tgl_accp2` datetime NULL DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status_dok` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_daftar_sempro
-- ----------------------------
INSERT INTO `tb_daftar_sempro` VALUES (1, 'iren kirana', 190, 'judul sempro iren', 'p', 'nirsal', 'vicky', '2023-06-10 11:31:17', '2023-06-10 11:31:20', '081', NULL, 'Terbuat', '2023-06-10 11:31:50', '2023-06-10 11:31:54');
INSERT INTO `tb_daftar_sempro` VALUES (2, 'khairul ahyar', 112, 'judul', 'L', 'vicky', 'suparman', '2023-06-10 12:03:18', '2023-06-10 12:03:22', '082', NULL, 'terbuat', '2023-06-10 12:03:51', '2023-06-10 12:03:56');
INSERT INTO `tb_daftar_sempro` VALUES (13, 'IREN  KIRANA', 1904411231, 'Rancang bangun pendataan proposal, skripsi dan yudisium pada program studi informatika fakultas teknik komputer universitas cokroaminoto palopo', 'P', 'Nirsal, S,Kom., M.Pd.', 'Supriadi, S.Ag., M.Pd.', '2023-06-13 00:00:00', '2023-06-13 00:00:00', '085343831874', NULL, 'terbuat', '2023-06-13 03:17:02', '2023-06-13 03:17:02');

-- ----------------------------
-- Table structure for tb_daftar_skripsi
-- ----------------------------
DROP TABLE IF EXISTS `tb_daftar_skripsi`;
CREATE TABLE `tb_daftar_skripsi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nim` bigint NULL DEFAULT NULL,
  `jenis_kelamin` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `judul_skripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `pembimbing1` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pembimbing2` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tglacc_proposal` datetime NULL DEFAULT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pa` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_daftar_skripsi
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
