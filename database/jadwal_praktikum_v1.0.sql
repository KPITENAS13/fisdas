-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for inventaris
CREATE DATABASE IF NOT EXISTS `inventaris` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inventaris`;


-- Dumping structure for table inventaris.jadwal_praktikum
CREATE TABLE IF NOT EXISTS `jadwal_praktikum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `periode` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `asisten` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.jadwal_praktikum: ~1 rows (approximately)
/*!40000 ALTER TABLE `jadwal_praktikum` DISABLE KEYS */;
INSERT INTO `jadwal_praktikum` (`id`, `periode`, `prodi`, `kelas`, `waktu`, `asisten`) VALUES
	(14, '2016/2017', 'Teknik Informatika', 'B', 'Kamis 13.00', NULL);
/*!40000 ALTER TABLE `jadwal_praktikum` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
