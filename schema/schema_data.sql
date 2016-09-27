# ************************************************************
# Sequel Pro SQL dump
# Version 4529
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.0.21-MariaDB)
# Database: phalcon_rest_boilerplate
# Generation Time: 2016-02-28 12:01:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


/*Table structure for table `album` */

DROP TABLE IF EXISTS `album`;

CREATE TABLE `album` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `album` */

insert  into `album`(`id`,`title`,`created_at`,`updated_at`) values (1,'Album 1','2016-02-28 11:28:33','2016-02-28 11:28:33'),(2,'Album 2','2016-02-28 11:28:33','2016-02-28 11:28:33'),(12,'Album 3','2016-09-27 21:46:52','2016-09-27 21:46:52');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id`,`name`,`email`,`created_at`,`updated_at`) values (1,'Dipanjan','dbhattacharjee@q3tech.com',NULL,NULL),(2,'Dipanjan','dbhattacharjee@q3tech.com','2016-09-23 20:41:06','2016-09-23 20:41:06'),(3,'Dipanjan','dbhattacharjee@q3tech.com','2016-09-23 20:41:07','2016-09-23 20:41:07'),(4,'Dipanjan','dbhattacharjee@q3tech.com','2016-09-23 20:41:08','2016-09-23 20:41:08');

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `item` */

insert  into `item`(`id`,`title`,`created_at`,`updated_at`) values (1,'item 1','2016-09-27 22:49:02','2016-09-27 22:49:02'),(2,'item 1','2016-09-27 22:49:54','2016-09-27 22:49:54'),(3,'item 1','2016-09-27 22:50:21','2016-09-27 22:50:21'),(4,'item 11','2016-09-27 22:50:31','2016-09-27 22:50:31');

/*Table structure for table `photo` */

DROP TABLE IF EXISTS `photo`;

CREATE TABLE `photo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `album_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `photo` */

insert  into `photo`(`id`,`title`,`album_id`,`created_at`,`updated_at`) values (1,'Photo of Album 1',1,'2016-02-28 11:34:38','2016-02-28 11:34:38'),(2,'Another Photo of Album 1',1,'2016-02-28 11:34:38','2016-02-28 11:34:38'),(3,'Photo of Album 2',2,'2016-02-28 11:34:38','2016-02-28 11:34:38'),(4,'test',1,'2016-09-23 20:31:07','2016-09-23 20:31:07'),(5,'test',1,'2016-09-23 20:31:08','2016-09-23 20:31:08');

/*Table structure for table `purchase_order` */

DROP TABLE IF EXISTS `purchase_order`;

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_order` */

insert  into `purchase_order`(`id`,`supplier_id`,`title`,`created_at`,`updated_at`) values (1,1,'PO#1','2016-09-27 22:56:06','2016-09-27 22:56:06'),(2,1,'PO#1','2016-09-27 22:56:41','2016-09-27 22:56:41'),(3,1,'PO#1','2016-09-27 22:56:45','2016-09-27 22:56:45');

/*Table structure for table `purchase_order_detail` */

DROP TABLE IF EXISTS `purchase_order_detail`;

CREATE TABLE `purchase_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_order_detail` */

insert  into `purchase_order_detail`(`id`,`purchase_order_id`,`item_id`,`created_at`,`updated_at`) values (1,1,1,'2016-09-27 23:11:22','2016-09-27 23:11:22'),(2,1,1,'2016-09-27 23:12:09','2016-09-27 23:12:09'),(3,1,1,'2016-09-27 23:12:29','2016-09-27 23:12:29'),(4,1,1,'2016-09-27 23:12:31','2016-09-27 23:12:31');

/*Table structure for table `supplier` */

DROP TABLE IF EXISTS `supplier`;

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `supplier` */

insert  into `supplier`(`id`,`title`,`created_at`,`updated_at`) values (1,'supplier 1','2016-09-27 22:54:26','2016-09-27 22:54:26'),(2,'supplier 2','2016-09-27 22:54:47','2016-09-27 22:54:47');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`role`,`email`,`username`,`password`,`first_name`,`last_name`,`location`,`created_at`,`updated_at`) values (1,'User','test@example.com','demo','$2y$10$1/U1yo5yMdXsrsU3RaeULu7dm7UFX1qq3rnfpbQugv7uIPdo2kMcC','Demo','Account',NULL,'2015-12-28 16:20:58',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
