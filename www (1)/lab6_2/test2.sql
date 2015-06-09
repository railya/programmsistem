/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : test2

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-06-09 20:07:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', 'biology');
INSERT INTO `course` VALUES ('2', 'astronomy');
INSERT INTO `course` VALUES ('3', 'cookery');
INSERT INTO `course` VALUES ('4', 'psychology');
INSERT INTO `course` VALUES ('5', 'phisical culture');
INSERT INTO `course` VALUES ('6', 'physics');
INSERT INTO `course` VALUES ('7', 'mathematics');
INSERT INTO `course` VALUES ('8', 'painting');
INSERT INTO `course` VALUES ('9', 'informatics');
INSERT INTO `course` VALUES ('10', 'labor');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `status` int(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '1', '0');
INSERT INTO `orders` VALUES ('2', '2', '1');
INSERT INTO `orders` VALUES ('3', '4', '1');
INSERT INTO `orders` VALUES ('4', '3', '1');
INSERT INTO `orders` VALUES ('5', '7', '0');
INSERT INTO `orders` VALUES ('6', '6', '0');
INSERT INTO `orders` VALUES ('7', '5', '0');
INSERT INTO `orders` VALUES ('8', '8', '1');
INSERT INTO `orders` VALUES ('9', '9', '1');
INSERT INTO `orders` VALUES ('10', '10', '0');
INSERT INTO `orders` VALUES ('11', '1', '1');
INSERT INTO `orders` VALUES ('12', '1', '1');
INSERT INTO `orders` VALUES ('13', '1', '1');
INSERT INTO `orders` VALUES ('14', '1', '1');
INSERT INTO `orders` VALUES ('15', '1', '1');
INSERT INTO `orders` VALUES ('16', '2', '1');
INSERT INTO `orders` VALUES ('17', '2', '1');
INSERT INTO `orders` VALUES ('18', '2', '1');
INSERT INTO `orders` VALUES ('19', '2', '1');
INSERT INTO `orders` VALUES ('20', '1', '1');
INSERT INTO `orders` VALUES ('21', '2', '1');

-- ----------------------------
-- Table structure for `pc`
-- ----------------------------
DROP TABLE IF EXISTS `pc`;
CREATE TABLE `pc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cpu(MHz)` int(11) unsigned DEFAULT NULL,
  `memory(Mb)` int(11) unsigned DEFAULT NULL,
  `hdd(Gb)` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pc
-- ----------------------------
INSERT INTO `pc` VALUES ('1', '1600', '2000', '500');
INSERT INTO `pc` VALUES ('2', '2400', '3000', '800');
INSERT INTO `pc` VALUES ('3', '3200', '3000', '1200');
INSERT INTO `pc` VALUES ('4', '2400', '2000', '500');

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'Superman');
INSERT INTO `student` VALUES ('2', 'Batman');
INSERT INTO `student` VALUES ('3', 'Wolferine');
INSERT INTO `student` VALUES ('4', 'Green Lantern');
INSERT INTO `student` VALUES ('5', 'Spider-man');
INSERT INTO `student` VALUES ('6', 'Captain America');
INSERT INTO `student` VALUES ('7', 'Iron Man');
INSERT INTO `student` VALUES ('8', 'Daredevil');
INSERT INTO `student` VALUES ('9', 'Catwoman');
INSERT INTO `student` VALUES ('10', 'Halk');

-- ----------------------------
-- Table structure for `student_course`
-- ----------------------------
DROP TABLE IF EXISTS `student_course`;
CREATE TABLE `student_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_course
-- ----------------------------
INSERT INTO `student_course` VALUES ('1', '1', '1');
INSERT INTO `student_course` VALUES ('2', '2', '2');
INSERT INTO `student_course` VALUES ('3', '4', '3');
INSERT INTO `student_course` VALUES ('4', '8', '3');
INSERT INTO `student_course` VALUES ('5', '5', '5');
INSERT INTO `student_course` VALUES ('6', '6', '6');
INSERT INTO `student_course` VALUES ('7', '7', '7');
INSERT INTO `student_course` VALUES ('8', '8', '8');
INSERT INTO `student_course` VALUES ('9', '9', '9');
INSERT INTO `student_course` VALUES ('10', '10', '10');
INSERT INTO `student_course` VALUES ('11', '2', '1');
INSERT INTO `student_course` VALUES ('12', '3', '1');
INSERT INTO `student_course` VALUES ('13', '4', '1');
INSERT INTO `student_course` VALUES ('14', '5', '1');
INSERT INTO `student_course` VALUES ('15', '6', '1');
INSERT INTO `student_course` VALUES ('16', '3', '3');
INSERT INTO `student_course` VALUES ('17', '5', '3');
INSERT INTO `student_course` VALUES ('18', '6', '3');
INSERT INTO `student_course` VALUES ('19', '7', '3');

-- ----------------------------
-- Table structure for `track_downloads`
-- ----------------------------
DROP TABLE IF EXISTS `track_downloads`;
CREATE TABLE `track_downloads` (
  `download_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `track_id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `download_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`download_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of track_downloads
-- ----------------------------
INSERT INTO `track_downloads` VALUES ('1', '123456', '458963', '2012-01-01 10:12:36');
INSERT INTO `track_downloads` VALUES ('2', '125698', '256473', '2010-11-19 15:25:05');
INSERT INTO `track_downloads` VALUES ('3', '453585', '128942', '2013-03-12 11:10:00');
INSERT INTO `track_downloads` VALUES ('4', '789545', '234896', '2014-02-25 09:00:12');
INSERT INTO `track_downloads` VALUES ('5', '956485', '254626', '2007-05-07 20:05:56');
INSERT INTO `track_downloads` VALUES ('6', '354866', '896569', '2010-11-19 14:14:14');
INSERT INTO `track_downloads` VALUES ('7', '265465', '413245', '2011-11-11 13:12:11');
INSERT INTO `track_downloads` VALUES ('8', '597979', '125556', '2010-01-02 02:12:05');
INSERT INTO `track_downloads` VALUES ('9', '963418', '286954', '2012-06-08 15:16:17');
INSERT INTO `track_downloads` VALUES ('10', '1111', '989898', '2014-09-06 17:12:01');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Freddie Mercury');
INSERT INTO `users` VALUES ('2', 'Jhon Lennon');
INSERT INTO `users` VALUES ('3', 'Robert Plant');
INSERT INTO `users` VALUES ('4', 'Angus Young');
INSERT INTO `users` VALUES ('5', 'David Gilmour');
INSERT INTO `users` VALUES ('6', 'Matthias Jabs');
INSERT INTO `users` VALUES ('7', 'Kirk Hammett');
INSERT INTO `users` VALUES ('8', 'George Harrison');
INSERT INTO `users` VALUES ('9', 'Kurt Cobain');
INSERT INTO `users` VALUES ('10', 'Jared Leto');
