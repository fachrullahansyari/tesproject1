/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50536
 Source Host           : localhost:3306
 Source Schema         : survei

 Target Server Type    : MySQL
 Target Server Version : 50536
 File Encoding         : 65001

 Date: 29/01/2018 19:56:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_pasien
-- ----------------------------
DROP TABLE IF EXISTS `tb_pasien`;
CREATE TABLE `tb_pasien`  (
  `No_rekam_medis` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` char(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Alamat` char(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tempat_lahir` char(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Jenis_kelamin` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`No_rekam_medis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2326 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_pasien
-- ----------------------------
INSERT INTO `tb_pasien` VALUES (1, '2', '3', '', '0000-00-00', '');
INSERT INTO `tb_pasien` VALUES (22, '33', '44', '', '0000-00-00', '');

-- ----------------------------
-- Table structure for tb_pertanyaan
-- ----------------------------
DROP TABLE IF EXISTS `tb_pertanyaan`;
CREATE TABLE `tb_pertanyaan`  (
  `No` int(11) NOT NULL AUTO_INCREMENT,
  `Pertanyaan` char(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Index_kepuasan_sangat_puas` int(11) NOT NULL,
  `Index_kepuasan_puas` int(11) NOT NULL,
  `Index_kepuasan_biasa` int(11) NOT NULL,
  `Index_kepuasan_tidak_puas` int(11) NOT NULL,
  PRIMARY KEY (`No`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_pertanyaan
-- ----------------------------
INSERT INTO `tb_pertanyaan` VALUES (1, 'Bagaimana pendapat anda tentang pelayanan petugas informasi', 100, 80, 60, 40);
INSERT INTO `tb_pertanyaan` VALUES (2, 'Bagaimana pendapat anda tentang pelayanan registrasi rawat jalan', 100, 80, 60, 40);
INSERT INTO `tb_pertanyaan` VALUES (3, 'Bagaimana pendapat anda tentang sikap petugas keamanan / security', 100, 80, 60, 40);
INSERT INTO `tb_pertanyaan` VALUES (4, 'Bagaimana pendapat anda tentang pelayanan dokter dan perawat poliklinik', 100, 80, 60, 40);
INSERT INTO `tb_pertanyaan` VALUES (5, 'Bagaimana pendapat anda tentang pelayanan apotek', 100, 80, 60, 40);

-- ----------------------------
-- Table structure for tb_survey
-- ----------------------------
DROP TABLE IF EXISTS `tb_survey`;
CREATE TABLE `tb_survey`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NULL DEFAULT NULL,
  `id_pertanyaan` int(11) NULL DEFAULT NULL,
  `nilai` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_survey
-- ----------------------------
INSERT INTO `tb_survey` VALUES (19, 1, 1, 60);
INSERT INTO `tb_survey` VALUES (20, 1, 2, 60);
INSERT INTO `tb_survey` VALUES (21, 1, 3, 60);
INSERT INTO `tb_survey` VALUES (22, 1, 4, 60);
INSERT INTO `tb_survey` VALUES (23, 22, 1, 40);
INSERT INTO `tb_survey` VALUES (24, 22, 2, 80);
INSERT INTO `tb_survey` VALUES (25, 22, 3, 80);
INSERT INTO `tb_survey` VALUES (26, 22, 4, 60);
INSERT INTO `tb_survey` VALUES (27, 22, 5, 100);

SET FOREIGN_KEY_CHECKS = 1;
