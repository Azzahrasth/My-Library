/*
Navicat MySQL Data Transfer

Source Server         : LATIHAN
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : perpus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-06-16 17:19:10
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `anggota`
-- ----------------------------
DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of anggota
-- ----------------------------
INSERT INTO `anggota` VALUES ('AG001', 'Azzahra Siti H', 'Perempuan', 'Sukabumi', '085798466088');
INSERT INTO `anggota` VALUES ('AG003', 'Anandita K', 'Perempuan', 'Pasir Halang', '089765432188');
INSERT INTO `anggota` VALUES ('AG004', 'Amida Zulfa', 'Perempuan', 'Sukabumi', '098765432123');
INSERT INTO `anggota` VALUES ('AG005', 'Khana Yudistiana', 'Perempuan', 'Makasar', '087698667957');
INSERT INTO `anggota` VALUES ('AG006', 'Rifqi Fajar', 'Laki-Laki', 'Bandung', '081245663982');
INSERT INTO `anggota` VALUES ('AG008', 'Achmad Fauzan', 'Laki-Laki', 'Bandung', '08546733566');
INSERT INTO `anggota` VALUES ('AG009', 'Amir ', 'Laki-Laki', 'Bandung', '096758577433');

-- ----------------------------
-- Table structure for `buku`
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('BK004', '2', '3', 'Sketsa Mendung ', '2013', '8');
INSERT INTO `buku` VALUES ('BK005', '1', '3', 'Bulan ', '2016', '1');
INSERT INTO `buku` VALUES ('BK006', '2', '3', 'Koala Kumal', '2022', '1');
INSERT INTO `buku` VALUES ('BK007', '4', '4', 'Geez and Ann', '2019', '12');
INSERT INTO `buku` VALUES ('BK008', '4', '4', 'Kata', '2020', '5');
INSERT INTO `buku` VALUES ('BK009', '6', '6', 'Dilan', '2020', '4');

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

-- ----------------------------
-- Table structure for `peminjaman`
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `id_pm` varchar(10) NOT NULL,
  `id_anggota` varchar(10) DEFAULT NULL,
  `id_buku` varchar(10) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_pm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------
INSERT INTO `peminjaman` VALUES ('PM004', 'AG001', 'BK005', '2022-06-08', '2022-06-15');
INSERT INTO `peminjaman` VALUES ('PM005', 'AG004', 'BK006', '2022-06-16', '2022-06-23');
INSERT INTO `peminjaman` VALUES ('PM009', 'AG005', 'BK009', '2022-06-16', '2022-06-23');

-- ----------------------------
-- Table structure for `penerbit`
-- ----------------------------
DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penerbit
-- ----------------------------
INSERT INTO `penerbit` VALUES ('3', 'Republika');
INSERT INTO `penerbit` VALUES ('4', 'Gramedia');
INSERT INTO `penerbit` VALUES ('6', 'Erlangga');
INSERT INTO `penerbit` VALUES ('7', 'Pustaka');

-- ----------------------------
-- Table structure for `pengarang`
-- ----------------------------
DROP TABLE IF EXISTS `pengarang`;
CREATE TABLE `pengarang` (
  `id_pengarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengarang
-- ----------------------------
INSERT INTO `pengarang` VALUES ('1', 'Tere Liye');
INSERT INTO `pengarang` VALUES ('2', 'Raditya Dikaa');
INSERT INTO `pengarang` VALUES ('4', 'Rintik Sedu');
INSERT INTO `pengarang` VALUES ('6', 'Pidi Baiq');
INSERT INTO `pengarang` VALUES ('7', 'Angkasa');

-- ----------------------------
-- Table structure for `pengembalian`
-- ----------------------------
DROP TABLE IF EXISTS `pengembalian`;
CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggota` varchar(20) DEFAULT NULL,
  `id_buku` varchar(20) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `tgl_kembalikan` date DEFAULT NULL,
  PRIMARY KEY (`id_pengembalian`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengembalian
-- ----------------------------
INSERT INTO `pengembalian` VALUES ('1', 'AG001', 'BK004', '2022-06-13', '2022-06-20', '2022-06-13');
INSERT INTO `pengembalian` VALUES ('2', 'AG003', 'BK004', '2022-06-13', '2022-06-20', '2022-06-14');
INSERT INTO `pengembalian` VALUES ('3', 'AG004', 'BK004', '2022-06-13', '2022-06-20', '2022-06-16');
INSERT INTO `pengembalian` VALUES ('4', 'AG005', 'BK007', '2022-06-16', '2022-06-23', '2022-06-16');
INSERT INTO `pengembalian` VALUES ('5', 'AG005', 'BK007', '2022-06-16', '2022-06-23', '2022-06-16');
INSERT INTO `pengembalian` VALUES ('6', 'AG003', 'BK005', '2022-06-16', '2022-06-23', '2022-06-16');
INSERT INTO `pengembalian` VALUES ('7', 'AG006', 'BK008', '2022-06-16', '2022-06-23', '2022-06-16');
INSERT INTO `pengembalian` VALUES ('8', 'AG006', 'BK009', '2022-06-16', '2022-06-23', '2022-06-16');
DELIMITER ;;
CREATE TRIGGER `jml_after_pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW UPDATE buku SET buku.jumlah = buku.jumlah - 1 WHERE buku.id_buku = new.id_buku
;;
DELIMITER ;
DELIMITER ;;
CREATE TRIGGER `jml_after_kembali` AFTER INSERT ON `pengembalian` FOR EACH ROW UPDATE buku SET buku.jumlah = buku.jumlah +1 WHERE buku.id_buku = new.id_buku
;;
DELIMITER ;
