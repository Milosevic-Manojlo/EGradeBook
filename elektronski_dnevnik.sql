-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for elektronski_dnevnik
CREATE DATABASE IF NOT EXISTS `elektronski_dnevnik` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `elektronski_dnevnik`;

-- Dumping structure for table elektronski_dnevnik.elektronski_dnevnik
CREATE TABLE IF NOT EXISTS `elektronski_dnevnik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL DEFAULT '',
  `prezime` varchar(50) NOT NULL DEFAULT '',
  `slika` varchar(255) NOT NULL,
  `vreme` time NOT NULL DEFAULT current_timestamp(),
  `srpski` int(11) NOT NULL DEFAULT 5,
  `engleski` int(11) NOT NULL DEFAULT 5,
  `matematika` int(11) NOT NULL DEFAULT 5,
  `dan` date NOT NULL DEFAULT current_timestamp(),
  `programiranje` int(11) NOT NULL DEFAULT 5,
  `menadzment` int(11) NOT NULL DEFAULT 5,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table elektronski_dnevnik.elektronski_dnevnik: ~1 rows (approximately)
INSERT INTO `elektronski_dnevnik` (`id`, `ime`, `prezime`, `slika`, `vreme`, `srpski`, `engleski`, `matematika`, `dan`, `programiranje`, `menadzment`) VALUES
	(40, 'da', 'da', 'download1.jpeg', '19:43:24', 5, 4, 3, '2023-09-01', 2, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
