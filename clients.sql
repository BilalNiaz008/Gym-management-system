/*
SQLyog Ultimate v8.61 
MySQL - 5.5.5-10.4.11-MariaDB : Database - clients
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`clients` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `clients`;

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Birth` date DEFAULT NULL,
  `Reason` varchar(255) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Package` varchar(255) NOT NULL,
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `Created_ON` date NOT NULL DEFAULT current_timestamp(),
  `Updated_ON` date NOT NULL DEFAULT current_timestamp(),
  `Package_Fee` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clients` */

insert  into `clients`(`FirstName`,`LastName`,`Email`,`Photo`,`Gender`,`Birth`,`Reason`,`Contact`,`Address`,`Package`,`id`,`Created_ON`,`Updated_ON`,`Package_Fee`) values ('Qasir','Nadeem','Qasir.12432@gmail.com','clients/male.png','Male','1999-05-05','sdfsd',1320983217,'adafdsgagsdv','Package 1',3,'2020-01-02','2020-01-02',6000),('Waseem','Medee','Waseem.12@gmail.com','clients/Gym.jpg','Female','1997-11-02','gfvdsadfghjkhuygfds',1234235,'fddfassdvcbnhjgfds','Package 2',4,'2020-01-02','2020-01-02',16000),('Umair','Muzaffar','umair.1234@gmail.com','clients/male.png','Male','1998-01-02','asdghjkl;jhg',2147483647,'sdhjkslagfhgjkl;jhgfhjk','Package 2',5,'2020-01-15','2020-01-15',16000),('Adeel','Ahmad','adeel.222@outlook.com','clients/male.png','Male','1998-06-12','dsfghfgds',322155443,'sdafggfadszx','Package 3',7,'2020-01-19','2020-01-19',28000),('Waqas','Hameed','waqas1.@outlook.com','clients/c.jpg','Male','1998-02-12','jhgfdsghj',2147483647,'kjhgfdxghjkl;','Package 3',8,'2020-01-20','2020-01-20',28000),('Hassan','Ikram','hassanikram555@outlook.com','','Male','1999-04-12','lkjfdhgjkl;jhdfg',2147483647,'lkjgfhdghjkl;jdfl','Package 3',10,'2020-01-20','2020-01-20',28000);

/*Table structure for table `fees` */

DROP TABLE IF EXISTS `fees`;

CREATE TABLE `fees` (
  `Fees_id` int(8) NOT NULL AUTO_INCREMENT,
  `Fees_amount` int(8) NOT NULL,
  `Due_date` date NOT NULL,
  `Fees_paid` varchar(255) DEFAULT NULL,
  `Package_id` int(8) NOT NULL,
  PRIMARY KEY (`Fees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `fees` */

insert  into `fees`(`Fees_id`,`Fees_amount`,`Due_date`,`Fees_paid`,`Package_id`) values (1,6000,'0000-00-00',NULL,1),(2,16000,'0000-00-00',NULL,2),(3,0,'2020-01-21','YES',0),(4,0,'2020-01-21','YES',0),(5,0,'2020-01-21','YES',0);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Login_id` int(11) NOT NULL,
  PRIMARY KEY (`Login_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`Email`,`Password`,`FirstName`,`LastName`,`Gender`,`DOB`,`Contact`,`Address`,`Login_id`) values ('member555@outlook.com','member','','','','0000-00-00',0,'',0),('admin555@outlook.com','admin','Admin','Admin','Male','0000-00-00',332453215,'',2);

/*Table structure for table `packages` */

DROP TABLE IF EXISTS `packages`;

CREATE TABLE `packages` (
  `Package_id` int(9) NOT NULL,
  `Package_name` varchar(255) NOT NULL,
  `Package_Fee` int(9) NOT NULL,
  `Package_end` date NOT NULL,
  `Package_start` date NOT NULL DEFAULT current_timestamp(),
  `Package_duration` varchar(255) NOT NULL,
  PRIMARY KEY (`Package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `packages` */

insert  into `packages`(`Package_id`,`Package_name`,`Package_Fee`,`Package_end`,`Package_start`,`Package_duration`) values (0,'Package ',50000,'0000-00-00','0000-00-00',''),(1,'Package 1',6000,'2020-03-10','2020-01-10','3 months'),(2,'Package 2',16000,'2020-06-10','2020-01-10','6 months'),(3,'Package 3',28000,'2021-01-10','2020-01-10','12 months');

/*Table structure for table `trainer` */

DROP TABLE IF EXISTS `trainer`;

CREATE TABLE `trainer` (
  `trainer_id` int(11) NOT NULL,
  `trainer_name` varchar(11) NOT NULL,
  `trainer_gender` varchar(11) NOT NULL,
  `trainer_contact` int(11) NOT NULL,
  `trainer_address` varchar(255) NOT NULL,
  `trainer_photo` varchar(255) NOT NULL,
  `trainer_email` int(11) NOT NULL,
  `trainer_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `trainer` */

insert  into `trainer`(`trainer_id`,`trainer_name`,`trainer_gender`,`trainer_contact`,`trainer_address`,`trainer_photo`,`trainer_email`,`trainer_birth`) values (201,'Umair ','Male',2147483647,'sddsasasdd','',0,'1998-02-12'),(0,'','',0,'','',0,'0000-00-00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
