-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_apps
CREATE DATABASE IF NOT EXISTS `db_apps` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_apps`;

-- Dumping structure for table db_apps.data_gag
CREATE TABLE IF NOT EXISTS `data_gag` (
  `idGag` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pic` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`idGag`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Dumping data for table db_apps.data_gag: ~12 rows (approximately)
DELETE FROM `data_gag`;
/*!40000 ALTER TABLE `data_gag` DISABLE KEYS */;
INSERT INTO `data_gag` (`idGag`, `judul_pic`, `pic`, `kategori`) VALUES
	(1, 'Prewed', 'nonton_ultraman.jpg', 'funny'),
	(2, 'I just found this I thought it belongs here', 'pic1.jpg', 'funny'),
	(4, 'Bad Hair Day', 'bad_hari.jpg', 'funny'),
	(5, 'Try The Lemon', 'lemon.jpg', 'funny'),
	(7, 'Lets Ride', 'letride.jpg', 'animals'),
	(8, 'Its Monday Bro', 'dog.jpg', 'animals'),
	(9, 'Cheesseee', 'cat_smile.jpg', 'animals'),
	(10, 'Me & My Grandpa', 'me_tiger.jpg', 'animals'),
	(11, 'When your soul is still sunday but its monday', 'luffy.jpg', 'manga'),
	(12, 'Why', 'baby_cry.jpg', 'manga'),
	(25, 'Isi Apa yA', 'Jellyfish.jpg', 'manga'),
	(26, 'Kawai', 'kawai.jpg', 'manga');
/*!40000 ALTER TABLE `data_gag` ENABLE KEYS */;

-- Dumping structure for table db_apps.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(50) NOT NULL,
  `posisi` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table db_apps.menu: ~1 rows (approximately)
DELETE FROM `menu`;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`id_menu`, `nama_menu`, `posisi`) VALUES
	(3, 'Master', 1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table db_apps.modul
CREATE TABLE IF NOT EXISTS `modul` (
  `id_modul` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `nama_modul` varchar(150) NOT NULL,
  `link_menu` text NOT NULL,
  `link_folder` text NOT NULL,
  `posisi` int(11) NOT NULL,
  `icon_menu` varchar(150) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table db_apps.modul: ~1 rows (approximately)
DELETE FROM `modul`;
/*!40000 ALTER TABLE `modul` DISABLE KEYS */;
INSERT INTO `modul` (`id_modul`, `id_menu`, `nama_modul`, `link_menu`, `link_folder`, `posisi`, `icon_menu`) VALUES
	(2, 3, 'Content', 'index.php?page=data_gag', 'pages/data_gag/data_gag.php', 1, 'fa fa-smile-o');
/*!40000 ALTER TABLE `modul` ENABLE KEYS */;

-- Dumping structure for table db_apps.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(45) NOT NULL,
  `usernm` varchar(20) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table db_apps.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama_lengkap`, `usernm`, `passwd`, `level`, `last_login`) VALUES
	(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2018-03-18 08:09:37');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
