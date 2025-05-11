-- --------------------------------------------------------
-- Host:                         127.0.0.1
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


-- Dumping database structure for perpusonline
CREATE DATABASE IF NOT EXISTS `perpusonline` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `perpusonline`;

-- Dumping structure for table perpusonline.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penulis` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penerbit` varchar(250) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tahun_terbit` int DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perpusonline.buku: ~0 rows (approximately)
INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
	(1, 'Matematika', 'Guru', 'Gramedia', 2025),
	(2, 'Fisika', 'Guru', 'Gramedia', 2022),
	(3, 'Catatan Sii Boy', 'Akmal', 'Gramedia', 2021),
	(4, 'IPA', 'Guru', 'Gramedia', 2020),
	(5, 'Neraka', 'Setan', 'Gramedia', 1982),
	(6, 'Bocoran UTBK', 'Cracker', 'Gramedia', 2026);

-- Dumping structure for table perpusonline.member
CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int NOT NULL AUTO_INCREMENT,
  `nama_member` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomor_member` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `tgl_mendaftar` datetime DEFAULT CURRENT_TIMESTAMP,
  `tgl_terakhir_bayar` date DEFAULT NULL,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perpusonline.member: ~0 rows (approximately)
INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
	(1, 'Bintang', '1', 'Jalan Cendana No. 6', '2025-05-11 20:06:00', '2025-05-11'),
	(2, 'Dika', '2', 'Jalan Cendana No. 1', '2025-05-11 20:07:00', '2025-05-11'),
	(3, 'Novi', '3', 'Jalan Cendana No. 2', '2025-05-11 20:07:00', '2025-05-11'),
	(4, 'Agus', '4', 'Jalan Cendana No. 3', '2025-05-11 20:07:00', '2025-05-11'),
	(5, 'Yumi', '5', 'Jalan Cendana No.4', '2025-05-11 20:07:00', '2025-05-11'),
	(6, 'Wulan', '6', 'Jalan Cendana No. 5', '2025-05-11 20:08:00', '2025-05-11');

-- Dumping structure for table perpusonline.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int NOT NULL AUTO_INCREMENT,
  `id_member` int DEFAULT NULL,
  `id_buku` int DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_member` (`id_member`),
  KEY `id_buku` (`id_buku`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE,
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table perpusonline.peminjaman: ~0 rows (approximately)
INSERT INTO `peminjaman` (`id_peminjaman`, `id_member`, `id_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
	(1, NULL, NULL, '2025-05-11', '2025-05-11'),
	(2, NULL, NULL, '2025-05-12', '2025-06-07'),
	(3, NULL, NULL, '2025-05-14', '2025-06-03'),
	(4, NULL, NULL, '2025-05-01', '2025-05-29'),
	(5, NULL, NULL, '2025-05-03', '2025-06-03'),
	(6, NULL, NULL, '2025-05-15', '2025-06-04');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
