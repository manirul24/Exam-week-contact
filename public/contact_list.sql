/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : contact_list

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-08-01 20:37:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `contacts`
-- ----------------------------
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of contacts
-- ----------------------------
INSERT INTO `contacts` VALUES ('290', 'Mr. Hershel Schulist DDS', 'testemail0@gmail.com', '+19732567618', 'Rerum alias assumenda necessitatibus earum voluptates ut enim magnam qui incidunt amet sint ea dolores vel deleniti qui.', '2024-08-01 14:29:41', '2024-08-01 14:29:41');
INSERT INTO `contacts` VALUES ('291', 'Amelie Hettinger MD', 'testemail1@gmail.com', '+17144384657', 'Id sequi facilis praesentium sint consequatur assumenda illo et qui esse distinctio quas voluptatum in amet ut est reprehenderit expedita veniam eius ea veritatis.', '2024-08-01 14:29:41', '2024-08-01 14:29:41');
INSERT INTO `contacts` VALUES ('292', 'Miss Camylle Moore', 'testemail2@gmail.com', '+17479459157', 'Mollitia exercitationem in qui adipisci sunt consectetur incidunt rerum aliquid facere animi quo sit delectus quo dignissimos ut sit debitis magni illo.', '2024-08-01 14:29:41', '2024-08-01 14:29:41');
INSERT INTO `contacts` VALUES ('293', 'Evert Nolan', 'testemail3@gmail.com', '+15205199638', 'Dolores tempora et aut sed magni est saepe voluptatem est et rerum odit facilis quidem reprehenderit quia iusto rem aut dolor alias sit delectus molestias eveniet alias rerum.', '2024-07-01 14:29:41', '2024-08-01 14:29:41');
INSERT INTO `contacts` VALUES ('294', 'Timmothy Wunsch', 'testemail4@gmail.com', '+19067762682', 'Quaerat rerum mollitia ab numquam sed voluptate autem excepturi similique doloremque ipsa architecto reprehenderit a quas sed dolorem itaque.', '2024-08-01 14:29:41', '2024-08-01 14:29:41');
INSERT INTO `contacts` VALUES ('296', 'Miss Micaela Becker Jr.', 'testemail6@gmail.com', '+16575727878', 'Et corrupti maiores quia atque est corporis quam architecto laudantium voluptatem esse quo doloremque rerum.', '2024-08-01 14:31:06', '2024-08-01 14:31:06');
INSERT INTO `contacts` VALUES ('297', 'Lynn Johns PhD', 'testemail7@gmail.com', '+15052936779', 'Ea explicabo quo aut sed nihil sunt non sed et debitis omnis iusto quam.', '2024-08-01 14:31:06', '2024-08-01 14:31:06');
INSERT INTO `contacts` VALUES ('298', 'Virgil Marquardt PhD', 'testemail8@gmail.com', '+15209401166', 'Explicabo impedit in nobis ea eligendi sed maiores et necessitatibus eius incidunt nesciunt voluptas quo facilis eos eos ab hic fugiat excepturi cum natus illum.', '2024-08-01 14:31:06', '2024-08-01 14:31:06');
INSERT INTO `contacts` VALUES ('299', 'Dr. Zane Johns PhD', 'testemail9@gmail.com', '+17815270230', 'Facere qui aliquam officia mollitia sit vitae amet quidem qui autem voluptatem optio quia omnis sit est optio incidunt minima beatae ut molestiae blanditiis perspiciatis in.', '2024-08-01 14:31:06', '2024-08-01 14:31:06');

-- ----------------------------
-- Table structure for `failed_jobs`
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_reset_tokens_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('5', '2024_07_30_154439_create_contacts_table', '1');

-- ----------------------------
-- Table structure for `password_reset_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `personal_access_tokens`
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
