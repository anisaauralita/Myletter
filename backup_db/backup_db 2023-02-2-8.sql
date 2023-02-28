-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for suratku
CREATE DATABASE IF NOT EXISTS `suratku` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `suratku`;

-- Dumping structure for table suratku.role
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table suratku.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id_surat_keluar` int NOT NULL AUTO_INCREMENT,
  `no_berkas` varchar(50) NOT NULL,
  `alamat_instansi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `bukti` longblob NOT NULL,
  `penerima` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table suratku.surat_masuk
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id_surat_masuk` int NOT NULL AUTO_INCREMENT,
  `no_berkas` varchar(50) NOT NULL,
  `alamat_instansi` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_surat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bukti` longblob NOT NULL,
  PRIMARY KEY (`id_surat_masuk`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for table suratku.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_user_role` (`id_role`),
  CONSTRAINT `FK_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Data exporting was unselected.

-- Dumping structure for view suratku.view_user
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `view_user` (
	`id_role` INT(10) NOT NULL,
	`id_user` INT(10) NOT NULL,
	`username` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`password` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`nama_role` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_0900_ai_ci'
) ENGINE=MyISAM;

-- Dumping structure for view suratku.view_user
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `view_user`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `view_user` AS select `user`.`id_role` AS `id_role`,`user`.`id_user` AS `id_user`,`user`.`username` AS `username`,`user`.`password` AS `password`,`role`.`nama_role` AS `nama_role` from (`user` join `role` on((`user`.`id_role` = `role`.`id_role`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
