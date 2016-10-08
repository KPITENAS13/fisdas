-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.37-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for inventaris
CREATE DATABASE IF NOT EXISTS `inventaris` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inventaris`;


-- Dumping structure for table inventaris.topik_ta
CREATE TABLE IF NOT EXISTS `topik_ta` (
  `id` int(11) NOT NULL auto_increment,
  `judul` varchar(50) default NULL,
  `peserta` varchar(50) default NULL,
  `pembimbing2` varchar(50) default NULL,
  `pembimbing1` varchar(50) default NULL,
  `status` enum('Berlangsung','Disarankan') default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inventaris.topik_ta: ~3 rows (approximately)
/*!40000 ALTER TABLE `topik_ta` DISABLE KEYS */;
INSERT INTO `topik_ta` (`id`, `judul`, `peserta`, `pembimbing2`, `pembimbing1`, `status`) VALUES
	(1, 'Lorem Ipsum lorem Ipsum Lorem Ipsum', 'Yayan Yanuari', 'Jasman Pardede, ST., MT.', 'Milda Gustiana H., Ir., M.Eng.', 'Berlangsung'),
	(7, 'Lorem Ipsum Lorem Ipsum Lrem Ipsum #2', 'Sandha Rineka', 'Rio Korio Utoro, S.T., M.T.', 'Irma Amelia, S.T., M.T.', 'Berlangsung'),
	(8, 'Lorem Ipsum Lorem Ipsum Lrem Ipsum', NULL, NULL, NULL, 'Disarankan');
/*!40000 ALTER TABLE `topik_ta` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
