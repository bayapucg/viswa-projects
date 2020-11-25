/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - theavfashion
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`theavfashion` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `theavfashion`;

/*Table structure for table `cartiformation` */

DROP TABLE IF EXISTS `cartiformation`;

CREATE TABLE `cartiformation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT '0',
  `ipaddress` varchar(120) DEFAULT NULL,
  `prodid` int(11) DEFAULT '0',
  `cartitems` int(11) DEFAULT '0',
  `price` float DEFAULT '0',
  `dprice` float DEFAULT '0',
  `cartprice` float DEFAULT '0',
  `status` int(11) DEFAULT '1',
  `createdat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cartiformation` */

insert  into `cartiformation`(`id`,`userid`,`ipaddress`,`prodid`,`cartitems`,`price`,`dprice`,`cartprice`,`status`,`createdat`) values (59,0,'120.0.01',32,1,98,88.2,88.2,1,'2020-11-15 18:13:01'),(60,0,'120.0.01',29,2,38,36.1,72.2,1,'2020-11-15 18:13:09'),(61,0,'120.0.01',33,1,56,50.4,50.4,1,'2020-11-15 18:18:06');

/*Table structure for table `giftcards` */

DROP TABLE IF EXISTS `giftcards`;

CREATE TABLE `giftcards` (
  `gcid` int(11) NOT NULL AUTO_INCREMENT,
  `identityid` int(11) DEFAULT NULL,
  `gcname` varchar(120) DEFAULT NULL,
  `base_url` varchar(120) DEFAULT NULL,
  `display_url` varchar(120) DEFAULT NULL,
  `description` text,
  `gcimage` varchar(120) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `createdat` datetime DEFAULT NULL,
  `displayorder` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`gcid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `giftcards` */

insert  into `giftcards`(`gcid`,`identityid`,`gcname`,`base_url`,`display_url`,`description`,`gcimage`,`status`,`createdat`,`displayorder`) values (1,2,'Walmart','https://www.walmart.com/','walmart','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?','01082020213527walmart.jpg',1,'2020-08-01 21:35:27',1),(2,4,'Adidas','https://www.adidas.com/','adidas','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020165921adidas.jpg',1,'2020-08-02 16:59:21',10),(3,1,'eBay','https://www.ebay.com/','ebay','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170006ebay.jpg',1,'2020-08-02 17:00:06',13),(4,16,'GameStop','https://www.gamestop.com/','gamestop','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170044gamestop.jpg',1,'2020-08-02 17:00:44',6),(5,6,'H&M','https://www.hm.com/','hm','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170134hm.jpg',1,'2020-08-02 17:01:34',5),(6,10,'Hotels.com','https://in.hotels.com/','hotelscom','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170211hotels.jpg',1,'2020-08-02 17:02:11',7),(7,11,'JCPenney','https://www.jcpenney.com/','jcpenney','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170243jcpenny.jpg',1,'2020-08-02 17:02:43',8),(8,12,'Macys','https://www.macys.com/','macys','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170328macys.jpg',1,'2020-08-02 17:03:28',15),(9,13,'Nike','https://www.nike.com/','nike','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170406nike.jpg',1,'2020-08-02 17:04:06',9),(10,9,'Nordstrom','https://www.nordstrom.com/','nordstrom','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170448nordstorm.jpg',1,'2020-08-02 17:04:48',12),(11,15,'Saks Fifth Avenue','https://www.saksfifthavenue.com/','saksfifthavenue','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170739saks-fifth-avenue.jpg',1,'2020-08-02 17:07:39',11),(12,14,'Starbucks Card','https://card.starbucks.in/','starbuckscard','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170816starbuck.jpg',1,'2020-08-02 17:08:16',14),(13,5,'bestbuy','https://www.bestbuy.com/','bestbuy','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170905bestbuy.jpg',1,'2020-08-02 17:09:05',3),(14,8,'home depot','https://www.homedepot.com/','home','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171009home.jpg',1,'2020-08-02 17:10:09',2),(15,3,'target','https://www.target.com/','target','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171056target.jpg',1,'2020-08-02 17:10:56',16),(16,7,'sephora','https://www.sephora.com/','sephora','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171137sephora.jpg',1,'2020-08-02 17:11:37',4),(17,17,'Eastbay','https://www.eastbay.com/','eastbay','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','32458953212eastbay.jpg',0,'2020-10-08 17:24:24',17),(18,NULL,'Eastbay',NULL,NULL,'Eastbay Gift Cards never expire and no service fees will be charged. Gift Cards. Give an all - access pass to the sneakers, clothing, and accessories they need.','11112020122402east.jpg',0,'2020-11-11 12:24:02',0);

/*Table structure for table `giftcards_checkcards` */

DROP TABLE IF EXISTS `giftcards_checkcards`;

CREATE TABLE `giftcards_checkcards` (
  `gccid` int(11) NOT NULL AUTO_INCREMENT,
  `gccname` varchar(150) DEFAULT NULL,
  `ipaddress` varchar(120) DEFAULT NULL,
  `emailaddress` varchar(120) DEFAULT NULL,
  `giftcardid` int(11) DEFAULT '0',
  `cardType` varchar(120) DEFAULT NULL,
  `giftcardnumber` varchar(120) DEFAULT NULL,
  `pinnumber` varchar(50) DEFAULT NULL,
  `createdat` datetime DEFAULT NULL,
  `status` tinyint(2) DEFAULT '1',
  PRIMARY KEY (`gccid`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4;

/*Data for the table `giftcards_checkcards` */

insert  into `giftcards_checkcards`(`gccid`,`gccname`,`ipaddress`,`emailaddress`,`giftcardid`,`cardType`,`giftcardnumber`,`pinnumber`,`createdat`,`status`) values (1,'','103.24.126.180','',1,'Walmart','6748488484884884','6366','2020-10-08 13:01:23',1),(2,'','103.24.126.180','Admin@gmail.com',10,'Nordstrom','7737477487848747','646','2020-10-08 13:04:16',1),(3,'','103.24.126.180','Admin@gmail.com',2,'Adidas','6677667877788887765','7678','2020-10-08 13:07:37',1),(4,'','174.228.12.214','',8,'Macys','651119281891172','6552','2020-10-09 22:00:03',1),(5,'','174.228.12.214','',8,'Macys','651119281891172','6552','2020-10-09 22:00:44',1),(6,'','71.59.24.6','',8,'Macys','832195699420428','4334','2020-10-09 22:51:56',1),(7,'','73.113.110.66','',10,'Nordstrom','8024140042710375','317','2020-10-09 23:11:10',1),(8,'','107.72.178.18','',8,'Macys','657173328037675','5784','2020-10-09 23:43:33',1),(9,'','172.58.111.173','',8,'Macys','659165365931069','8961','2020-10-10 00:00:13',1),(10,'','68.7.219.46','',8,'Macys','936180967321779','7778','2020-10-10 00:02:09',1),(11,'','172.58.168.247','',8,'Macys','934163799960455','2333','2020-10-10 00:43:21',1),(12,'','24.61.11.243','',8,'Macys','631129529526344','8913','2020-10-10 02:12:27',1),(13,'','24.61.11.243','',8,'Macys','831129529528344','8913','2020-10-10 02:14:29',1),(14,'','24.61.11.243','',1,'Walmart','6831129529528344','8913','2020-10-10 02:18:41',1),(15,'','174.234.11.38','',8,'Macys','559182188050043','8226','2020-10-10 03:18:47',1),(16,'','107.77.224.92','',8,'Macys','934148670458962','8046','2020-10-10 03:30:05',1),(17,'','76.124.250.90','',8,'Macys','827100027735653','5320','2020-10-10 03:43:46',1),(18,'','174.197.130.78','',8,'Macys','831188648209426','4410','2020-10-10 21:02:34',1),(19,'','207.38.251.213','',8,'Macys','655159959350071','6396','2020-10-10 21:11:28',1),(20,'','74.68.139.237','',8,'Macys','945171010102160','4576','2020-10-10 21:50:30',1),(21,'','162.199.92.186','',8,'Macys','951110365958009','1631','2020-10-10 22:39:09',1),(22,'','99.203.80.192','',8,'Macys','833103651838586','5637','2020-10-10 22:40:45',1),(23,'','172.58.190.239','',8,'Macys','934141919997796','8423','2020-10-10 23:01:11',1),(24,'','108.185.122.5','',8,'Macys','834167620839331','3979','2020-10-10 23:13:22',1),(25,'','108.185.122.5','',8,'Macys','834167620839331','3979','2020-10-10 23:14:24',1),(26,'','172.221.255.163','',8,'Macys','934117614934251','7504','2020-10-10 23:41:21',1),(27,'','73.191.126.3','',8,'Macys','934158626324258','6017','2020-10-11 01:26:56',1),(28,'','72.76.164.209','',8,'Macys','930148950787427','3376','2020-10-11 02:02:06',1),(29,'','99.203.201.120','',8,'Macys','651193218912178','1526','2020-10-11 02:32:36',1),(30,'','173.66.115.132','',8,'Macys','656189974097353','4889','2020-10-11 02:51:47',1),(31,'','172.58.22.233','',8,'Macys','934108863838063','3212','2020-10-11 03:18:54',1),(32,'','69.112.87.176','',8,'Macys','972172259000716','9185','2020-10-11 03:23:11',1),(33,'','73.165.248.17','',8,'Macys','939186933604461','4892','2020-10-11 03:35:10',1),(34,'','68.225.206.100','',8,'Macys','938199903093234','8450','2020-10-11 04:04:28',1),(35,'','172.58.94.189','',8,'Macys','650145589021639','9229','2020-10-11 04:09:56',1),(36,'','170.202.22.119','',8,'Macys','936134935571062','5029','2020-10-12 20:41:49',1),(37,'','108.45.24.112','',8,'Macys','832127380105512','5725','2020-10-12 20:46:22',1),(38,'','174.244.224.55','',8,'Macys','934162800521821','2404','2020-10-12 20:55:20',1),(39,'','104.129.196.166','',8,'Macys','659193136508530','8566','2020-10-12 21:02:36',1),(40,'','104.129.196.166','',8,'Macys','659193136508530','8566','2020-10-12 21:03:20',1),(41,'','162.83.137.81','',8,'Macys','938134884477253','5489','2020-10-12 21:14:13',1),(42,'','70.109.56.120','',8,'Macys','836136722818160','5617','2020-10-12 21:26:00',1),(43,'','71.56.171.82','',8,'Macys','652127218096636','2075','2020-10-12 21:30:10',1),(44,'','71.172.58.115','',8,'Macys','834128620620763','2514','2020-10-12 21:58:13',1),(45,'','32.208.255.133','',8,'Macys','954174348350195','2153','2020-10-12 22:02:09',1),(46,'','98.231.253.50','',8,'Macys','933122912638382','2110','2020-10-12 22:15:33',1),(47,'','96.228.18.102','',8,'Macys','935192523616985','4097','2020-10-12 22:19:13',1),(48,'','98.239.71.25','',8,'Macys','833114681120688','8277','2020-10-12 22:21:48',1),(49,'','107.77.228.195','',10,'Nordstrom','6164922148377353','353','2020-10-12 22:24:57',1),(50,'','98.232.207.92','',8,'Macys','653129243770405','3993','2020-10-12 22:37:30',1),(51,'','67.189.194.212','',8,'Macys','651169292874305','4497','2020-10-12 22:40:09',1),(52,'','67.189.194.212','',8,'Macys','651169292874305','4497','2020-10-12 22:40:09',1),(53,'','67.189.194.212','',8,'Macys','651169292874305','4497','2020-10-12 22:40:09',1),(54,'','73.134.18.23','',8,'Macys','939166691223319','1730','2020-10-12 22:45:22',1),(55,'','69.249.186.79','',8,'Macys','938164713721905','6612','2020-10-12 23:09:08',1),(56,'','24.7.133.52','',8,'Macys','650197388777733','5892','2020-10-12 23:24:38',1),(57,'','107.242.117.46','',8,'Macys','658142345123813','3582','2020-10-12 23:51:40',1),(58,'','104.180.13.90','',8,'Macys','654101222908336','7159','2020-10-13 00:44:43',1),(59,'','72.228.181.163','',8,'Macys','838195349790516','5354','2020-10-13 00:45:11',1),(60,'','100.4.164.135','',8,'Macys','830116441419523','6035','2020-10-13 00:49:09',1),(61,'','73.160.99.50','',8,'Macys','652130262257106','2903','2020-10-13 01:00:14',1),(62,'','96.57.15.34','',8,'Macys','831123640225687','3609','2020-10-13 01:02:21',1),(63,'','24.127.100.125','',8,'Macys','830177454169737','3520','2020-10-13 01:04:46',1),(64,'','72.201.150.32','',8,'Macys','958131237778603','7342','2020-10-13 01:13:33',1),(65,'','104.189.117.21','',8,'Macys','833152780569564','3163','2020-10-13 01:14:14',1),(66,'','96.252.12.131','',8,'Macys','654158262403796','3357','2020-10-13 01:17:46',1),(67,'','98.243.223.2','',8,'Macys','932145765313818','9749','2020-10-14 20:40:23',1),(68,'','70.183.176.94','',8,'Macys','834196702906630','7723','2020-10-14 21:07:37',1),(69,'','71.203.249.169','',10,'Nordstrom','6058250039478044','314','2020-10-14 21:20:35',1),(70,'','73.94.86.228','',8,'Macys','625176018627607','5981','2020-10-14 21:23:52',1),(71,'','148.74.168.234','',11,'Saks Fifth Avenue','6018010016239135','0323','2020-10-14 21:31:23',1),(72,'','107.77.189.43','',8,'Macys','658116269571234','6065','2020-10-14 21:36:54',1),(73,'','107.184.11.228','',8,'Macys','653158301585538','1557','2020-10-14 21:37:33',1),(74,'','108.5.113.82','',10,'Nordstrom','6168415070489173','194','2020-10-14 21:38:11',1),(75,'','107.77.189.43','byrket.miranda@yahoo.com',8,'Macys','658116269571234','6065','2020-10-14 21:39:45',1),(76,'','73.20.117.236','',8,'Macys','659182058107204','8256','2020-10-14 21:49:04',1),(77,'','73.20.117.236','',8,'Macys','659182058107204','8256','2020-10-14 21:50:23',1),(78,'','73.20.117.236','flowerchild0648@hotmail.com',8,'Macys','659182058107204','8256','2020-10-14 21:52:48',1),(79,'','73.20.117.236','flowerchild0648@hotmail.com',8,'Macys','659182058107204','8256','2020-10-14 21:53:51',1),(80,'','100.40.207.104','',8,'Macys','838114604837773','6527','2020-10-14 21:58:12',1),(81,'','65.51.152.194','',8,'Macys','935156945512911','1639','2020-10-14 21:59:50',1),(82,'','74.130.147.49','',8,'Macys','931124587775289','6718','2020-10-14 22:02:38',1),(83,'','107.77.197.63','',8,'Macys','835142780889180','5762','2020-10-14 22:13:23',1),(84,'','76.202.84.10','',8,'Macys','933155882982543','8350','2020-10-14 22:30:02',1),(85,'','68.184.126.86','',8,'Macys','651118208144308','8193','2020-10-14 22:38:58',1);

/*Table structure for table `parent_category` */

DROP TABLE IF EXISTS `parent_category`;

CREATE TABLE `parent_category` (
  `picatid` int(11) NOT NULL AUTO_INCREMENT,
  `picatname` varchar(120) DEFAULT NULL,
  `picatstatus` smallint(2) DEFAULT '1',
  PRIMARY KEY (`picatid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `parent_category` */

insert  into `parent_category`(`picatid`,`picatname`,`picatstatus`) values (1,'Home',1),(2,'Giftcards',1),(3,'New',1),(4,'Featured',1),(5,'Offer',1);

/*Table structure for table `tbl_admin_users_master` */

DROP TABLE IF EXISTS `tbl_admin_users_master`;

CREATE TABLE `tbl_admin_users_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A' COMMENT 'A-Acctive, I - Inactive',
  `otp` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_admin_users_master` */

insert  into `tbl_admin_users_master`(`id`,`name`,`username`,`email`,`mobile`,`password`,`user_role`,`status`,`otp`,`date_created`) values (1,'Admin','admin','admin@gmail.com','','e10adc3949ba59abbe56e057f20f883e','','A',0,'2019-02-25 00:40:05');

/*Table structure for table `tbl_product_categories` */

DROP TABLE IF EXISTS `tbl_product_categories`;

CREATE TABLE `tbl_product_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_ref_id` varchar(10) NOT NULL,
  `catimg` varchar(255) NOT NULL,
  `parent_category` int(11) NOT NULL,
  `catthumbimg` varchar(255) DEFAULT NULL,
  `cat_offer_type` smallint(4) DEFAULT NULL,
  `cat_discount_per` int(11) DEFAULT '0',
  `cat_dis_fixed_amt` float DEFAULT '0',
  `cat_status` int(11) DEFAULT NULL,
  `cat_createdat` datetime DEFAULT NULL,
  `cat_updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_categories` */

insert  into `tbl_product_categories`(`cat_id`,`category_name`,`category_ref_id`,`catimg`,`parent_category`,`catthumbimg`,`cat_offer_type`,`cat_discount_per`,`cat_dis_fixed_amt`,`cat_status`,`cat_createdat`,`cat_updatedat`) values (2,'Menswear','CAT_02','13112020102721mens.png',0,NULL,0,0,0,1,'2020-10-23 12:18:25','2020-11-13 10:27:21'),(3,'women\'s wear','CAT_03','13112020102902womens.png',0,NULL,0,0,0,1,'2020-11-02 07:08:10','2020-11-13 10:29:02'),(4,'Kid\'swear','CAT_04','13112020103014kids.png',0,NULL,0,0,0,1,'2020-11-11 12:35:54','2020-11-13 10:30:14');

/*Table structure for table `tbl_product_images` */

DROP TABLE IF EXISTS `tbl_product_images`;

CREATE TABLE `tbl_product_images` (
  `pi_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `pi_image` varchar(100) DEFAULT NULL,
  `pi_thumb_image` varchar(100) DEFAULT NULL,
  `pi_status` smallint(2) DEFAULT NULL,
  `pi_created_at` datetime DEFAULT NULL,
  `pi_updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`pi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_images` */

insert  into `tbl_product_images`(`pi_id`,`product_id`,`pi_image`,`pi_thumb_image`,`pi_status`,`pi_created_at`,`pi_updated_at`) values (1,1,'03082020082628product1.png',NULL,1,'2020-08-03 08:26:28','2020-08-03 08:26:28');

/*Table structure for table `tbl_products` */

DROP TABLE IF EXISTS `tbl_products`;

CREATE TABLE `tbl_products` (
  `prdid` int(10) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `cat_status` int(11) DEFAULT NULL,
  `product_name` longtext NOT NULL,
  `product_url` varchar(120) DEFAULT NULL,
  `product_description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `read_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `product_discount_type` smallint(4) DEFAULT '0',
  `product_discount_per` int(11) DEFAULT '0',
  `product_discount_fixed` float DEFAULT '0',
  `product_image` varchar(250) DEFAULT NULL,
  `product_thumb_image1` varchar(250) DEFAULT NULL,
  `product_thumb_image2` varchar(250) DEFAULT NULL,
  `product_thumb_image3` varchar(250) DEFAULT NULL,
  `product_thumb_image4` varchar(250) DEFAULT NULL,
  `product_price` float DEFAULT '0',
  `afterdiscoutprice` float DEFAULT '0',
  `updated_at` datetime DEFAULT NULL,
  `cat_new` smallint(2) DEFAULT '0',
  `cat_featured` smallint(2) DEFAULT '0',
  `cat_offer` smallint(2) DEFAULT '0',
  PRIMARY KEY (`prdid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_products` */

insert  into `tbl_products`(`prdid`,`category_id`,`subcategory_id`,`cat_status`,`product_name`,`product_url`,`product_description`,`status`,`read_status`,`created_date`,`product_discount_type`,`product_discount_per`,`product_discount_fixed`,`product_image`,`product_thumb_image1`,`product_thumb_image2`,`product_thumb_image3`,`product_thumb_image4`,`product_price`,`afterdiscoutprice`,`updated_at`,`cat_new`,`cat_featured`,`cat_offer`) values (15,2,0,NULL,'Denim shirt','denim-shirt','Item Type: ShirtsGender: MenSleeve Length(cm): FullPattern Type: SolidShirts Type: Casual Shirts Style: CasualCollar: Turn-down CollarModel Number',1,0,'2020-11-13 10:46:40',0,10,0,'13112020104640m1.png',NULL,NULL,NULL,NULL,45,0,'2020-11-13 10:46:40',0,0,0),(16,2,0,NULL,'Men designer wear','men-designer-wear','testing',1,0,'2020-11-13 11:01:38',0,5,0,'13112020110138m2.png',NULL,NULL,NULL,NULL,32,0,'2020-11-13 11:01:38',0,0,0),(17,2,0,NULL,'Ripped jeans men ','ripped-jeans-men-','product',1,0,'2020-11-13 12:21:14',0,15,0,'13112020122114m3.png',NULL,NULL,NULL,NULL,77,0,'2020-11-13 12:21:14',0,0,0),(18,2,0,NULL,'Men black jeans','men-black-jeans','product',1,0,'2020-11-13 12:25:50',0,10,0,'13112020122550m4.png',NULL,NULL,NULL,NULL,60,0,'2020-11-13 12:25:50',0,0,0),(19,2,0,NULL,'Men casual shoes','men-casual-shoes','Men casual shoes',1,0,'2020-11-13 12:32:18',0,5,0,'13112020123218m5.png',NULL,NULL,NULL,NULL,72,0,'2020-11-13 12:32:18',0,0,0),(20,2,0,NULL,'Men leather shoes','men-leather-shoes','Men leather shoes',1,0,'2020-11-13 12:34:55',0,15,0,'13112020123455m6.png',NULL,NULL,NULL,NULL,80,0,'2020-11-13 12:34:55',0,0,0),(21,2,0,NULL,'Men red sweatshirt','men-red-sweatshirt','Men red sweatshirt',1,0,'2020-11-13 12:40:38',0,20,0,'13112020124038m7.png',NULL,NULL,NULL,NULL,50,0,'2020-11-13 12:40:38',0,0,0),(22,2,0,NULL,'Men Hoodie ','men-hoodie-','Men Hoodie ',1,0,'2020-11-13 12:54:49',0,10,0,'13112020125449m8.png',NULL,NULL,NULL,NULL,19,0,'2020-11-13 12:54:49',0,0,0),(23,2,0,NULL,'Hand crafted wristband men','hand-crafted-wristband-men','Hand crafted wristband men',1,0,'2020-11-13 12:59:05',0,5,0,'13112020125905m9.png',NULL,NULL,NULL,NULL,19,0,'2020-11-13 12:59:05',0,0,0),(24,3,0,NULL,'Short sleeve women dress','short-sleeve-women-dress','Short sleeve women dress',1,0,'2020-11-13 13:03:03',0,15,0,'13112020130303m10.png',NULL,NULL,NULL,NULL,80,0,'2020-11-13 13:03:03',0,0,0),(25,3,0,NULL,'Women nightwear','women-nightwear','Women nightwear',1,0,'2020-11-13 13:06:57',0,5,0,'13112020130657m11.png',NULL,NULL,NULL,NULL,23,0,'2020-11-13 13:06:57',0,0,0),(26,3,0,NULL,'Women denim ripped jeans','women-denim-ripped-jeans','Women denim ripped jeans',1,0,'2020-11-14 02:28:52',0,5,0,'14112020022852m12.png',NULL,NULL,NULL,NULL,40,0,'2020-11-14 02:28:52',0,0,0),(27,3,0,NULL,'Women formals ','women-formals-','Women formals ',1,0,'2020-11-14 02:34:31',0,10,0,'14112020023431m13.png',NULL,NULL,NULL,NULL,89.9,0,'2020-11-14 02:34:31',0,0,0),(28,3,0,NULL,'Women heels','women-heels','Women heels',1,0,'2020-11-14 02:37:29',0,55,0,'14112020023729m14.png',NULL,NULL,NULL,NULL,60,0,'2020-11-14 02:37:29',0,0,0),(29,3,0,NULL,'Women flat shoes','women-flat-shoes','Women flat shoes',1,0,'2020-11-14 02:40:37',0,5,0,'14112020024037m15.png',NULL,NULL,NULL,NULL,38,0,'2020-11-14 02:40:37',0,0,0),(30,2,0,NULL,'Unisex boxers ','unisex-boxers-','Unisex boxers ',1,0,'2020-11-14 02:44:25',0,5,0,'14112020024425sho1.png',NULL,NULL,NULL,NULL,20,0,'2020-11-14 02:44:25',0,0,0),(31,2,0,NULL,'Anglo men watch','anglo-men-watch','Anglo men watch',1,0,'2020-11-14 02:47:36',0,10,0,'14112020024736men-watch.png',NULL,NULL,NULL,NULL,112,0,'2020-11-14 02:47:36',0,0,0),(32,3,0,NULL,'Women designer anglo watch','women-designer-anglo-watch','Women designer anglo watch',1,0,'2020-11-14 02:49:37',0,10,0,'14112020024937men-watch2.png',NULL,NULL,NULL,NULL,98,0,'2020-11-14 02:49:37',0,0,0),(33,4,0,NULL,'High strip backpack','high-strip-backpack','High strip backpack',1,0,'2020-11-14 02:51:43',0,10,0,'14112020025143bag.png',NULL,NULL,NULL,NULL,56,0,'2020-11-14 02:51:43',0,0,0);

/*Table structure for table `tbl_users_master` */

DROP TABLE IF EXISTS `tbl_users_master`;

CREATE TABLE `tbl_users_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` smallint(2) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `phone_num` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users_master` */

insert  into `tbl_users_master`(`id`,`user_name`,`password`,`email`,`status`,`created_date`) values (2,'Dileep','e10adc3949ba59abbe56e057f20f883e','dileepkumarkonda@gmail.com',1,'2020-08-01 16:36:21'),(3,'annmv888','aab984586539bf8285544a3a4bb8f0f6','annmv8@msn.com',1,'2020-10-12 21:04:49'),(4,'RaviSingh16','afba33487d2bf6a1a6edf4bd01a13036','Singhravikumar@gmail.com',1,'2020-10-12 21:35:04'),(5,'billyblack3@aol.com','20c503590862c545e861b3f4e890132a','Percy Blackburn',1,'2020-10-12 22:20:36'),(6,'merisisanchez','1852e76beb7c3bda42579d0cb45db759','merisimendez@gmail.com',1,'2020-10-12 23:52:22'),(7,'Miranda','73a30c14226e012cbf69a8bcc5bb0064','byrket.miranda@yahoo.com',1,'2020-10-14 21:37:34'),(8,'flowerchild0648','7d37c580f9c36fa004af865448a6e278','flowerchild0648@hotmail.com',1,'2020-10-14 21:51:19');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
