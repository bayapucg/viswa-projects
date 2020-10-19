/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_1`;

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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cartiformation` */

insert  into `cartiformation`(`id`,`userid`,`ipaddress`,`prodid`,`cartitems`,`price`,`dprice`,`cartprice`,`status`,`createdat`) values (1,0,'120.0.01',6,3,60,49.99,149.97,1,'2020-08-13 19:54:30'),(2,0,'120.0.01',2,2,20,19.25,38.5,1,'2020-08-14 13:31:34'),(3,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:35'),(4,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:35'),(5,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:36'),(6,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:37'),(7,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:37'),(8,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:53'),(9,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:53'),(10,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:54'),(11,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:54'),(12,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:54'),(13,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:54'),(14,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:55'),(15,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:55'),(16,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:55'),(17,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:55'),(18,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:55'),(19,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:56'),(20,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:56'),(21,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:57'),(22,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:57'),(23,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:57'),(24,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:57'),(25,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:57'),(26,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:58'),(27,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:51:58'),(28,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:11'),(29,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:11'),(30,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:12'),(31,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:12'),(32,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:12'),(33,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:12'),(34,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:13'),(35,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:13'),(36,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:13'),(37,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:13'),(38,0,'120.0.01',6,1,60,49.99,49.99,1,'2020-10-17 22:52:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `giftcards` */

insert  into `giftcards`(`gcid`,`identityid`,`gcname`,`base_url`,`display_url`,`description`,`gcimage`,`status`,`createdat`,`displayorder`) values (1,2,'Walmart','https://www.walmart.com/','walmart','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?','01082020213527walmart.jpg',1,'2020-08-01 21:35:27',1),(2,4,'Adidas','https://www.adidas.com/','adidas','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020165921adidas.jpg',1,'2020-08-02 16:59:21',10),(3,1,'eBay','https://www.ebay.com/','ebay','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170006ebay.jpg',1,'2020-08-02 17:00:06',13),(4,16,'GameStop','https://www.gamestop.com/','gamestop','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170044gamestop.jpg',1,'2020-08-02 17:00:44',6),(5,6,'H&M','https://www.hm.com/','hm','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170134hm.jpg',1,'2020-08-02 17:01:34',5),(6,10,'Hotels.com','https://in.hotels.com/','hotelscom','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170211hotels.jpg',1,'2020-08-02 17:02:11',7),(7,11,'JCPenney','https://www.jcpenney.com/','jcpenney','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170243jcpenny.jpg',1,'2020-08-02 17:02:43',8),(8,12,'Macys','https://www.macys.com/','macys','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170328macys.jpg',1,'2020-08-02 17:03:28',15),(9,13,'Nike','https://www.nike.com/','nike','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170406nike.jpg',1,'2020-08-02 17:04:06',9),(10,9,'Nordstrom','https://www.nordstrom.com/','nordstrom','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170448nordstorm.jpg',1,'2020-08-02 17:04:48',12),(11,15,'Saks Fifth Avenue','https://www.saksfifthavenue.com/','saksfifthavenue','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170739saks-fifth-avenue.jpg',1,'2020-08-02 17:07:39',11),(12,14,'Starbucks Card','https://card.starbucks.in/','starbuckscard','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170816starbuck.jpg',1,'2020-08-02 17:08:16',14),(13,5,'bestbuy','https://www.bestbuy.com/','bestbuy','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020170905bestbuy.jpg',1,'2020-08-02 17:09:05',3),(14,8,'home depot','https://www.homedepot.com/','home','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171009home.jpg',1,'2020-08-02 17:10:09',2),(15,3,'target','https://www.target.com/','target','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171056target.jpg',1,'2020-08-02 17:10:56',16),(16,7,'sephora','https://www.sephora.com/','sephora','Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto, perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?	','02082020171137sephora.jpg',1,'2020-08-02 17:11:37',4);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `giftcards_checkcards` */

insert  into `giftcards_checkcards`(`gccid`,`gccname`,`ipaddress`,`emailaddress`,`giftcardid`,`cardType`,`giftcardnumber`,`pinnumber`,`createdat`,`status`) values (1,'','::1','',1,'Walmart','6666666666666666','1234','2020-08-10 13:07:40',1);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_categories` */

insert  into `tbl_product_categories`(`cat_id`,`category_name`,`category_ref_id`,`catimg`,`parent_category`,`catthumbimg`,`cat_offer_type`,`cat_discount_per`,`cat_dis_fixed_amt`,`cat_status`,`cat_createdat`,`cat_updatedat`) values (1,'Womens Shoes','CAT_01','06102020072825shoes.jpg',1,NULL,0,0,0,1,'2020-07-28 16:01:39','2020-10-06 07:28:25'),(2,'Mens Shorts','CAT_02','06102020072838shorts.jpg',1,NULL,0,0,0,1,'2020-07-28 16:15:42','2020-10-06 07:28:38'),(3,'Jackets','CAT_03','06102020072854tshirts.jpg',1,NULL,0,0,0,1,'2020-07-28 16:16:33','2020-10-06 07:28:54'),(4,'Casual loafers','CAT_04','06102020072935loafers.jpg',1,NULL,0,0,0,1,'2020-07-28 16:17:10','2020-10-06 07:29:35'),(5,'Mens Jeans','CAT_05','06102020073711jeans.jpg',1,NULL,0,0,0,1,'2020-07-28 16:17:38','2020-10-06 07:37:11'),(6,'Schilif embroidered','CAT_06','06102020074143embroidered.jpg',1,NULL,0,0,0,1,'2020-07-28 16:19:03','2020-10-06 07:41:43'),(7,'womens wear','CAT_07','06102020080049night.jpg',0,NULL,0,0,0,1,'2020-10-06 08:00:49','2020-10-06 08:00:49');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_products` */

insert  into `tbl_products`(`prdid`,`category_id`,`subcategory_id`,`cat_status`,`product_name`,`product_url`,`product_description`,`status`,`read_status`,`created_date`,`product_discount_type`,`product_discount_per`,`product_discount_fixed`,`product_image`,`product_thumb_image1`,`product_thumb_image2`,`product_thumb_image3`,`product_thumb_image4`,`product_price`,`afterdiscoutprice`,`updated_at`,`cat_new`,`cat_featured`,`cat_offer`) values (1,3,0,NULL,'Men\'s formal shirt','solid-slim-fit-shirt','Men Regular Fit Solid Spread Collar Formal Shirt\r\n',1,0,'2020-08-03 08:26:28',1,0,2.01,'1810202007290613.jpg',NULL,NULL,NULL,NULL,60,27.99,'2020-10-18 07:29:06',6,3,5),(3,3,0,NULL,'Men leather jacket','slim-fit-solid-blazer','2018 New Autumn Winter PU Male Faux Leather Jacket Men Casual Pockets Thick Warm Velvet Mens Jackets Patchwork Mortocycle Coats \r\n\r\n',1,0,'2020-08-03 14:47:35',1,0,21.04,'1810202007175211.jpg',NULL,NULL,NULL,NULL,200,39.96,'2020-10-18 07:17:52',5,2,1),(6,4,0,NULL,'Men\'s casual shoes','genuine-leather-slip-on-shoes','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',1,0,'2020-08-03 14:49:46',1,0,11.01,'181020200732106.jpg',NULL,NULL,NULL,NULL,80,49.99,'2020-10-18 07:32:10',3,5,3),(7,7,0,NULL,'Women hem wrap dress',NULL,'Tulip Hem Wrap Dress | Women\'s Plus Size Dresses | ELOQUII\r\n',1,0,'2020-10-06 08:02:56',0,2,0,'181020200705501.jpg',NULL,NULL,NULL,NULL,250,0,'2020-10-18 07:06:50',0,0,0),(8,1,0,NULL,'Women sneakers',NULL,'misto vagon women sneakers women casual shoes girls sneakers girls casual shoes mens sneakers mens casual shoes and boys sneakers boys casual shoes with canvas upper and lace ups shoes and sport shoes and running shoes with flat airmax sole vj463-white silver\r\n',1,0,'2020-10-06 08:08:01',0,10,0,'181020200715514.jpg',NULL,NULL,NULL,NULL,150,0,'2020-10-18 07:15:51',0,0,0),(9,7,0,NULL,'Women casual tshirt',NULL,'New Women T-shirts Casual Harajuku Love Printed Tops Tee Summer Female T shirt Short Sleeve T shirt For Women Clothing Special\r\n',1,0,'2020-10-06 08:21:04',0,15,0,'181020200709452.jpg',NULL,NULL,NULL,NULL,70,0,'2020-10-18 07:09:45',0,0,0),(10,7,0,NULL,'Leather jacket women',NULL,'Women’s leather jacket has gained much credibility and fame in fashion within a couple of decades. Continuously improvement in designs and styles keep the ladies to stick with it because the jacket is the only staple that suits to every dressing of ladies.',1,0,'2020-10-18 07:12:30',0,10,0,'1810202007123010.jpg',NULL,NULL,NULL,NULL,200,0,'2020-10-18 07:12:30',0,0,0),(11,7,0,NULL,'Women fashioned formal suit',NULL,'Role playing game was love that cool the\r\n',1,0,'2020-10-18 07:14:03',0,15,0,'181020200714033.jpg',NULL,NULL,NULL,NULL,300,0,'2020-10-18 07:14:03',0,0,0),(12,2,0,NULL,'Multi colour men shirt',NULL,'Men\'s shirts camisa Gradient Loose Male shirt blusa masculina Casual Short Sleeve Turn-Down Collar shirt men camisa masculina\r\n\r\n',1,0,'2020-10-18 07:23:05',0,15,0,'1810202007230512.jpg',NULL,NULL,NULL,NULL,50,0,'2020-10-18 07:23:05',0,0,0),(13,3,0,NULL,'Men\'s blazer',NULL,'Slim-Fit Casual Color-Block Single-Button Blazer Men\'s Jacket M-6XL 6 Colors\r\n',1,0,'2020-10-18 07:30:55',0,10,0,'181020200730555.jpg',NULL,NULL,NULL,NULL,130,0,'2020-10-18 07:30:55',0,0,0),(14,4,0,NULL,'Men formal shoes',NULL,'Allen Solly Tan Formal Shoes\r\n',1,0,'2020-10-18 07:35:38',0,12,0,'1810202007353814.jpg',NULL,NULL,NULL,NULL,150,0,'2020-10-18 07:35:38',0,0,0),(15,5,0,NULL,'Men beaine cap',NULL,'Mens Slouchy Beanie - The Hadley\r\n',1,0,'2020-10-18 07:38:51',0,5,0,'181020200738517.jpg',NULL,NULL,NULL,NULL,40,0,'2020-10-18 07:38:51',0,0,0),(16,2,0,NULL,'Women analogue watch',NULL,'\r\nFrench Connection Women Black Analogue Watch FCN0001D',1,0,'2020-10-18 07:41:39',0,5,0,'181020200741398.jpg',NULL,NULL,NULL,NULL,180,0,'2020-10-18 07:41:39',0,0,0),(17,7,0,NULL,'USB charging cable wristband',NULL,'\r\nThis charging cable not only charges your smartphone or tablet, but can also be worn stylishly as a bracelet. So you always have your charger cable handy and safely stowed away with you.',1,0,'2020-10-18 07:44:23',0,3,0,'181020200744239.jpg',NULL,NULL,NULL,NULL,50,0,'2020-10-18 07:44:23',0,0,0);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users_master` */

insert  into `tbl_users_master`(`id`,`user_name`,`password`,`email`,`status`,`created_date`) values (2,'Dileep','b59c67bf196a4758191e42f76670ceba','dileepkumarkonda@gmail.com',1,'2020-08-01 16:36:21');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
