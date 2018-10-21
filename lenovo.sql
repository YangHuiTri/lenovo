# Host: localhost  (Version: 5.5.53)
# Date: 2018-10-21 15:44:35
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "addr"
#

DROP TABLE IF EXISTS `addr`;
CREATE TABLE `addr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `stel` varchar(255) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `addrInfo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "addr"
#

INSERT INTO `addr` VALUES (1,1,'张三','110','山西太原','千峰商务','a@qq.com'),(2,3,'李四','119','山西太原','水利小区','b@qq.com'),(3,15,'辉哥','168168','中国北京','北大青鸟','913603802@qq.com');

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(10) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL COMMENT '密码',
  `time` int(11) DEFAULT NULL,
  `lasttime` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (16,'qwqwqw','eyJpdiI6IllIT0lTYThJekI0Qmt3ZUh1MTl6cmc9PSIsInZhbHVlIjoiRmdnYVAxUjlTbjBMN0d5QnkzemtNZz09IiwibWFjIjoiMmY4MmQ5MjM4OTUwMGJhZmVlNjljYTQ3YmUzN2I0ZDExYjU5ZjliNDUwZGVkOTJjMmYzMWQxMWJlZjhmNmIxMSJ9',1539481637,1540107650,20,0),(17,'admin123','eyJpdiI6IllIT0lTYThJekI0Qmt3ZUh1MTl6cmc9PSIsInZhbHVlIjoiRmdnYVAxUjlTbjBMN0d5QnkzemtNZz09IiwibWFjIjoiMmY4MmQ5MjM4OTUwMGJhZmVlNjljYTQ3YmUzN2I0ZDExYjU5ZjliNDUwZGVkOTJjMmYzMWQxMWJlZjhmNmIxMSJ9',1539504060,1540107695,1,0),(18,'ewqewq','eyJpdiI6IllIT0lTYThJekI0Qmt3ZUh1MTl6cmc9PSIsInZhbHVlIjoiRmdnYVAxUjlTbjBMN0d5QnkzemtNZz09IiwibWFjIjoiMmY4MmQ5MjM4OTUwMGJhZmVlNjljYTQ3YmUzN2I0ZDExYjU5ZjliNDUwZGVkOTJjMmYzMWQxMWJlZjhmNmIxMSJ9',1539505420,NULL,NULL,1);

#
# Structure for table "ads"
#

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "ads"
#

INSERT INTO `ads` VALUES (1,'14994093444537.jpg',3242343,'321314','1232132'),(2,'14994093546654.jpg',1234,'dfadsfas','dsafdsaf'),(3,'14994093641939.jpg',122313,'afdsafda','dfadfdsa'),(4,'14994093849567.jpg',321,'332312','dsarqe'),(5,'14994094758137.jpg',221,'e312','3edsd'),(6,'14994096663378.jpg',131,'eddas','dasdsa'),(7,'149940933530592.jpg',332,'3213','321321'),(8,'149940937513235.jpg',2213,'321321','321321');

#
# Structure for table "comment"
#

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `statu` tinyint(4) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,1,8,'111',3,232132135,0,NULL),(2,2,8,'222',4,232132132,1,NULL),(3,3,8,'333',5,232113213,2,NULL),(4,4,7,'112',5,21211,1,NULL),(5,5,6,'231',4,21321,1,NULL),(6,6,5,'312',5,5454,1,NULL),(7,7,4,'2321',3,521,1,NULL),(8,8,3,'12312',4,21321,1,NULL),(9,9,2,'212',2,3123,1,NULL),(10,10,1,'1212',5,5312,1,NULL);

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `text` text,
  `config` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "goods"
#

INSERT INTO `goods` VALUES (1,18,'领带002','质量好','1499258488918.jpg',269,30,'<p>fd<em>asfd</em>fd<strong>fadsfdafdsfdsa<img src=\"/ueditor/php/upload/image/20181016/1539656825.jpg\" title=\"1539656825.jpg\" alt=\"india_fly_&amp;_41445cfc-4177-484c-9d49-766e712e4002.jpg\"/></strong></p>\n','<p>fdafdafdafdsaf<strong>ewtretrwetre</strong></p>\n'),(2,7,'西服001','213','14992575802595.jpg',321,321,'<p>fd<em>asfd</em>fd<strong>fadsfdafdsfdsa<img src=\"/ueditor/php/upload/image/20181016/1539656825.jpg\" title=\"1539656825.jpg\" alt=\"india_fly_&amp;_41445cfc-4177-484c-9d49-766e712e4002.jpg\"/></strong></p>','<p>fdafdafdafdsaf<strong>ewtretrwetre</strong></p>'),(3,18,'西服','fdas','14992575804061.jpg',2134,21,'<p style=\"text-align: center;\">fafdsafdsafdsa<img src=\"/ueditor/php/upload/image/20181016/1539657004.jpg\" title=\"1539657004.jpg\" alt=\"色彩 (5)_&amp;_5f7820a8-1e15-4f3f-91fa-d86d0b1aed93.jpg\"/></p>','<p style=\"text-align: center;\">erqeqreqrewqere<img src=\"/ueditor/php/upload/image/20181016/1539656993.jpg\" title=\"1539656993.jpg\" alt=\"军事 (14)_&amp;_0c07a853-5e27-4623-b08a-e38e71a81329.jpg\"/></p>'),(4,10,'领带','范德萨范德萨鬼斧神工的发放','14992576397365.jpg',341,231,'<p>fdasfdsafd</p>','<p>erewqreq</p>'),(5,10,'领带123','dfadsfdas','14992603916322.jpg',355,321,'fadfdsafdsafd','fdsafdsafdsa'),(6,11,'手机','gfgfsd','153991410327927.jpg',269,30,'<p>fdasfdsafdsa</p>','<p>fdsagwfdas</p>'),(7,11,'红米手机','小米-红米','15399159807454.jpg',1499,9999,'<p>132222222222222222</p>','<p>13333324</p>'),(8,11,'三星手机','三星盖世手机','153991765915715.jpg',6999,5666,'<p><img src=\"/ueditor/php/upload/image/20181019/1539917681.jpg\" title=\"1539917681.jpg\"/></p><p><img src=\"/ueditor/php/upload/image/20181019/1539917682.jpg\" title=\"1539917682.jpg\"/></p><p><br/></p>','<p><img src=\"/ueditor/php/upload/image/20181019/1539917697.jpg\" title=\"1539917697.jpg\"/></p><p><img src=\"/ueditor/php/upload/image/20181019/1539917697.jpg\" title=\"1539917697.jpg\"/></p><p><br/></p>');

#
# Structure for table "goodsimg"
#

DROP TABLE IF EXISTS `goodsimg`;
CREATE TABLE `goodsimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

#
# Data for table "goodsimg"
#

INSERT INTO `goodsimg` VALUES (1,1,'14992576771236.jpg'),(2,2,'14992576786514.jpg'),(3,2,'14992582526720.jpg'),(4,2,'14992582596764.jpg'),(5,3,'14992583832855.jpg'),(6,3,'14992584879787.jpg'),(7,4,'14992586962211.jpg'),(8,4,'14992588895285.jpg'),(9,4,'14992588898719.jpg'),(10,4,'14992591634976.jpg'),(11,6,'153991411612531.jpg'),(12,6,'153991411724887.jpg'),(13,6,'15399141174184.jpg'),(14,6,'153991411726842.jpg'),(15,7,'153991598723788.jpg'),(16,7,'153991598717492.jpg'),(17,7,'15399159878277.jpg'),(18,7,'1539915987404.jpg'),(19,8,'15399176667028.jpg'),(20,8,'15399176662081.jpg'),(21,8,'153991766632364.jpg'),(22,8,'153991766713255.jpg');

#
# Structure for table "orders"
#

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `money` tinyint(4) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "orders"
#

INSERT INTO `orders` VALUES (1,'0001',1,1,200,2,1,21212112,0,1),(2,'1100',3,2,100,1,2,111111,1,6),(3,'1100',3,3,200,3,2,111111,1,6),(6,'DZ_15401056827353',15,8,6999,1,3,1540105682,NULL,1),(7,'DZ_15401056827353',15,6,269,3,3,1540105682,NULL,1),(8,'DZ_154010609730108',15,8,6999,1,3,1540106097,NULL,1),(9,'DZ_154010609730108',15,6,269,3,3,1540106097,NULL,1),(10,'DZ_154010609730108',15,3,2134,1,3,1540106097,NULL,1),(11,'DZ_154010634716552',15,4,341,1,3,1540106347,NULL,1),(12,'DZ_15401066577922',15,4,341,1,3,1540106657,NULL,1),(13,'DZ_15401068731223',15,6,269,1,3,1540106873,NULL,1),(14,'DZ_154010736912441',15,6,269,1,3,1540107369,NULL,1);

#
# Structure for table "orderstatu"
#

DROP TABLE IF EXISTS `orderstatu`;
CREATE TABLE `orderstatu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "orderstatu"
#

INSERT INTO `orderstatu` VALUES (1,'未付款'),(2,'已发货'),(3,'在途中'),(4,'配送中'),(5,'签收'),(6,'已完成');

#
# Structure for table "slider"
#

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) DEFAULT NULL,
  `orders` tinyint(4) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `href` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "slider"
#

INSERT INTO `slider` VALUES (1,'14994091009572.jpg',123,'衣服','fdsafd'),(2,'14994091095069.jpg',121,'衣服','fdsa'),(3,'14994091175250.jpg',21,'衣服','fdsafd'),(4,'149940908913047.jpg',22,'电脑','dadsa'),(5,'149940912423842.jpg',23,'电脑','fffeea');

#
# Structure for table "types"
#

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `is_lou` tinyint(4) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "types"
#

INSERT INTO `types` VALUES (3,'衣服',0,'0,',100,1,'衣服','衣服衣服','衣服衣服衣服衣服衣服'),(5,'一级分类',0,'0,',300,1,'一级分类','一级分类一级分类','一级分类一级分类一级分类一级分类'),(6,'二级分类',5,'0,5,',300,0,'二级分类','二级分类二级分类','二级分类二级分类二级分类二级分类'),(8,'男装',3,'0,3,',11,1,'男装','男装男装','男装男装男装男装'),(9,'女装',3,'0,3,',11,1,'女装','女装女装','女装女装女装女装'),(10,'西服',8,'0,3,8,',300,0,'西服','西服西服','西服西服西服西服'),(11,'三级分类',6,'0,5,6,',300,0,'三级分类','三级分类三级分类','三级分类三级分类三级分类三级分类');

#
# Structure for table "typesads"
#

DROP TABLE IF EXISTS `typesads`;
CREATE TABLE `typesads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "typesads"
#

INSERT INTO `typesads` VALUES (1,5,'149940946613264.jpg',0,'eeee'),(2,3,'149940933530592.jpg',0,'男装'),(3,3,'14994093444537.jpg',0,'111'),(4,5,'14994093546654.jpg',0,'222'),(5,1,'14994093641939.jpg',1,'333'),(6,1,'14994093849567.jpg',1,'444'),(7,2,'14994094758137.jpg',0,'555'),(8,3,'149940948830414.png',1,'666'),(9,4,'149940937513235.jpg',0,'777'),(10,5,'149940967530953.png',1,'888');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `tel` varchar(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'12@qq.com','132456','132456',0,1231231321,'123123132123',0,'user1'),(2,'211','212321','23324323',1,212,NULL,0,'user2'),(3,'32132',NULL,'34321',2,12,NULL,0,'user3'),(15,'913603802@qq.com','eyJpdiI6IkR2R3BNRExsRVhLQjlUc3pZcnhuR0E9PSIsInZhbHVlIjoibXlvTHMzOW1mVGFTeUtDTWRVNFBBUT09IiwibWFjIjoiZjk0NGQ4YmQ0MmZhZmE5NDQ1NDA1MTYwZGY4ODUxNTY2ODllYjQ4Y2JkZjEwMzJhOWI5Mjg5MjViOGNlYjlhNiJ9',NULL,1,1540027118,'Aj7x5GBoIU1V6IQscMZGGMHt8JNkEQjNKEOnrP5MdcJtlWzEvw',NULL,'辉哥');

#
# Structure for table "userinfo"
#

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `birthday` int(11) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `addrInfo` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "userinfo"
#

