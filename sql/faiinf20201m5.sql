-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for faiinf20201m5
CREATE DATABASE IF NOT EXISTS `faiinf20201m5` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `faiinf20201m5`;

-- Dumping structure for table faiinf20201m5.accounts
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `highscore` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Dumping data for table faiinf20201m5.accounts: ~31 rows (approximately)
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` (`id`, `username`, `join_date`, `highscore`, `country_id`) VALUES
	(1, 'jtutchener0', '2019-12-20', 100, 1),
	(2, 'xkestle1', '2020-05-18', 35, 4),
	(3, 'tjancy2', '2019-11-30', 79, 3),
	(4, 'kjaneczek3', '2020-04-29', 67, 4),
	(5, 'tyashunin4', '2020-08-23', 70, 2),
	(6, 'vpic5', '2020-05-03', 62, 2),
	(7, 'mstoak6', '2020-06-21', 61, 4),
	(8, 'gcorson7', '2019-12-02', 60, 1),
	(9, 'mcull8', '2019-12-19', 70, 5),
	(10, 'twarburton9', '2020-05-24', 60, 3),
	(11, 'ewandtkea', '2020-03-15', 16, 3),
	(12, 'tiwaszkiewiczb', '2020-04-21', 91, 5),
	(13, 'cduckerinc', '2019-11-22', 41, 5),
	(14, 'dshrievesd', '2020-02-13', 38, 3),
	(15, 'bcapsticke', '2020-01-06', 64, 3),
	(16, 'tlahrsf', '2020-09-02', 36, 1),
	(17, 'sspykingsg', '2019-10-08', 60, 5),
	(18, 'chalfacreh', '2020-04-05', 57, 2),
	(19, 'kkemeri', '2020-01-07', 28, 2),
	(20, 'kbatchellorj', '2020-07-27', 85, 2),
	(21, 'gjurczikk', '2020-03-14', 61, 2),
	(22, 'rjordanl', '2019-09-25', 4, 5),
	(23, 'adrewettm', '2020-05-18', 27, 2),
	(24, 'psweatlandn', '2019-12-02', 1, 3),
	(25, 'bmckeighano', '2019-09-17', 97, 4),
	(26, 'egovettp', '2020-08-22', 52, 4),
	(27, 'bcrangleq', '2020-09-09', 79, 1),
	(28, 'dskyrmr', '2020-03-26', 55, 2),
	(29, 'ppeffers', '2019-12-21', 39, 3),
	(30, 'pwilmutt', '2020-04-28', 22, 1);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;

-- Dumping structure for table faiinf20201m5.account_award
DROP TABLE IF EXISTS `account_award`;
CREATE TABLE IF NOT EXISTS `account_award` (
  `account_id` int(11) NOT NULL,
  `award_id` int(11) NOT NULL,
  PRIMARY KEY (`account_id`,`award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table faiinf20201m5.account_award: ~50 rows (approximately)
/*!40000 ALTER TABLE `account_award` DISABLE KEYS */;
INSERT INTO `account_award` (`account_id`, `award_id`) VALUES
	(1, 1),
	(1, 3),
	(1, 5),
	(2, 2),
	(2, 3),
	(2, 6),
	(4, 5),
	(4, 6),
	(6, 2),
	(7, 2),
	(7, 4),
	(7, 6),
	(8, 2),
	(9, 1),
	(9, 2),
	(10, 2),
	(10, 3),
	(11, 3),
	(11, 6),
	(12, 4),
	(13, 2),
	(13, 3),
	(13, 4),
	(15, 3),
	(15, 6),
	(17, 5),
	(17, 6),
	(18, 4),
	(18, 6),
	(19, 3),
	(19, 4),
	(20, 2),
	(20, 4),
	(21, 6),
	(22, 6),
	(23, 2),
	(23, 3),
	(23, 6),
	(25, 4),
	(25, 5),
	(26, 4),
	(27, 6),
	(28, 1),
	(28, 3),
	(28, 6),
	(29, 1),
	(29, 4),
	(29, 5),
	(30, 1),
	(30, 5);
/*!40000 ALTER TABLE `account_award` ENABLE KEYS */;

-- Dumping structure for table faiinf20201m5.awards
DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `icon` (`icon`,`color`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table faiinf20201m5.awards: ~6 rows (approximately)
/*!40000 ALTER TABLE `awards` DISABLE KEYS */;
INSERT INTO `awards` (`id`, `name`, `icon`, `color`) VALUES
	(1, 'Favorite', 'heart', '#e50000'),
	(2, 'Smartie', 'graduation-cap', '#000000'),
	(3, 'Gamer', 'gamepad', '#929591'),
	(4, 'Likable', 'thumbs-up', '#fcc006'),
	(5, 'Premium', 'diamond', '#c5c9c7'),
	(6, 'Verified', 'check-circle', '#056eee');
/*!40000 ALTER TABLE `awards` ENABLE KEYS */;

-- Dumping structure for table faiinf20201m5.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `code` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table faiinf20201m5.countries: ~5 rows (approximately)
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`id`, `name`, `code`) VALUES
	(1, 'China', 'cn'),
	(2, 'India', 'in'),
	(3, 'USA', 'us'),
	(4, 'Indonesia', 'id'),
	(5, 'Pakistan', 'pk');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
