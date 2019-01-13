/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50720
 Source Host           : localhost
 Source Database       : newcaifu

 Target Server Type    : MySQL
 Target Server Version : 50720
 File Encoding         : utf-8

 Date: 03/13/2018 14:29:32 PM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `pre_user`
-- ----------------------------
DROP TABLE IF EXISTS `pre_user`;
CREATE TABLE `pre_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `user_name` varchar(120) CHARACTER SET utf8mb4 DEFAULT '',
  `user_mobile` varchar(20) CHARACTER SET utf8mb4 DEFAULT '',
  `user_phone` varchar(20) CHARACTER SET utf8mb4 DEFAULT '',
  `user_email` varchar(120) CHARACTER SET utf8mb4 DEFAULT '',
  `user_password` char(32) CHARACTER SET utf8mb4 DEFAULT '',
  `user_salt` char(6) CHARACTER SET utf8mb4 DEFAULT '',
  `user_comp_id` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `comp_id` (`user_comp_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10170 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
