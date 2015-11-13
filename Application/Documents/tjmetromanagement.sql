/*
Navicat MySQL Data Transfer

Source Server         : asdf
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : tjmetromanagement

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-11-13 15:20:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `regist_time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'metro', 'metro', 'super_admin', '2015-11-13');
INSERT INTO `user` VALUES ('2', 'metrosub', 'metrosub', 'manager', '2015-11-13');
