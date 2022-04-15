/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : kampus

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 15/04/2022 17:46:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `data_mahasiswa`;
CREATE TABLE `data_mahasiswa`  (
  `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT,
  `nm_mahasiswa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tpt_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_mahasiswa
-- ----------------------------
INSERT INTO `data_mahasiswa` VALUES (1, 'Astri Nurazizah', '41037006200008', '', 'Campaka, Cianjur', '083822128871', NULL, NULL, NULL);
INSERT INTO `data_mahasiswa` VALUES (2, 'Fajrian', '41037006200056', '', 'Soreang', '089874637537', '', '', '');
INSERT INTO `data_mahasiswa` VALUES (3, 'Ajid Jakariya', '41037006200066', '', 'Cimahi', '078243527156', NULL, NULL, NULL);
INSERT INTO `data_mahasiswa` VALUES (4, 'Linda Handayani', '41037006200032', '', 'Ciparay', '089273527473', NULL, NULL, NULL);
INSERT INTO `data_mahasiswa` VALUES (14, 'Fajriann', '41037006200003', '20', 'bandung', '089647426238', 'laki', 'bandung', 'islam');
INSERT INTO `data_mahasiswa` VALUES (16, 'udin', '41038005234324', '20', 'soreang', '08090', 'laki', 'bandung sl', 'islam');

SET FOREIGN_KEY_CHECKS = 1;
