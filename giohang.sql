/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : giohang

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 03/12/2023 22:55:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bill
-- ----------------------------
DROP TABLE IF EXISTS `bill`;
CREATE TABLE `bill`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bill_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán tiền mặt\r\n2. Chuyển khoản',
  `total` int NOT NULL,
  `ngaydathang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đang chờ\r\n1.Đang chờ\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bill
-- ----------------------------

-- ----------------------------
-- Table structure for binhluan
-- ----------------------------
DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE `binhluan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ngay` date NOT NULL,
  `id_sanpham` int NOT NULL,
  `id_taikhoan` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_sanpham`(`id_sanpham`) USING BTREE,
  INDEX `id_taikhoan`(`id_taikhoan`) USING BTREE,
  CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_taikhoan`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of binhluan
-- ----------------------------

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Pending',
  `phuongthuc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES (18, 21, 0, 'lac-vao-khu-rung-dom-dom-hotarubi-no-mori-e.jpg', 'Lạc vào khu rừng đom đóm', 99, 1, 99, 0, 'Hoàn thành', NULL);
INSERT INTO `cart` VALUES (19, 21, 0, 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 'lamboghini aventadorrrrrrr', 999999, 1, 999999, 0, 'Pending', NULL);
INSERT INTO `cart` VALUES (20, 21, 0, 'phim-anime-buon-hay-nhat-moi-thoi-dai-6.jpg', 'Cánh cổng thời gian ', 123000, 1, 123000, 0, 'Hoàn thành', NULL);
INSERT INTO `cart` VALUES (21, 21, 0, 'lac-vao-khu-rung-dom-dom-hotarubi-no-mori-e.jpg', 'Lạc vào khu rừng đom đóm', 99, 1, 99, 0, 'Hoàn thành', NULL);
INSERT INTO `cart` VALUES (22, 20, 0, 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 'lamboghini aventadorrrrrrr', 999999, 1, 999999, 0, 'Pending', '1');
INSERT INTO `cart` VALUES (24, 20, 0, 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 'lamboghini aventadorrrrrrr', 999999, 1, 999999, 0, 'Pending', '1');
INSERT INTO `cart` VALUES (25, 21, 0, 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 'lamboghini aventadorrrrrrr', 999999, 1, 999999, 0, 'Pending', '1');
INSERT INTO `cart` VALUES (26, 21, 0, 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 'lamboghini aventadorrrrrrr', 999999, 1, 999999, 0, 'Pending', '1');

-- ----------------------------
-- Table structure for danhmuc
-- ----------------------------
DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE `danhmuc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ten_dm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of danhmuc
-- ----------------------------
INSERT INTO `danhmuc` VALUES (9, 'Ma');
INSERT INTO `danhmuc` VALUES (10, 'Anime');
INSERT INTO `danhmuc` VALUES (11, 'Khoa học viễn tưởng huhu');

-- ----------------------------
-- Table structure for donhang
-- ----------------------------
DROP TABLE IF EXISTS `donhang`;
CREATE TABLE `donhang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gia` int NOT NULL,
  `trangthai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idkh` int NOT NULL,
  `idsp` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idkh`(`idkh`) USING BTREE,
  INDEX `idsp`(`idsp`) USING BTREE,
  CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donhang
-- ----------------------------

-- ----------------------------
-- Table structure for sanpham
-- ----------------------------
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL,
  `ngaychieu` date NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_dm` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_dm`(`id_dm`) USING BTREE,
  CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sanpham
-- ----------------------------
INSERT INTO `sanpham` VALUES (32, 'Đao kiếm thần vực - ss1', 999999, '0000-00-00', '43d2d1485665853bdc74.jpg', 9);
INSERT INTO `sanpham` VALUES (33, 'Siêu năng lực tuổi dậy thì', 1, '0000-00-00', 'sieu-nang-luc-tuoi-day-thi-charlotte.jpg', 10);
INSERT INTO `sanpham` VALUES (34, 'Lạc vào khu rừng đom đóm', 99, '0000-00-00', 'lac-vao-khu-rung-dom-dom-hotarubi-no-mori-e.jpg', 11);
INSERT INTO `sanpham` VALUES (35, 'Cánh cổng thời gian ', 123000, '0000-00-00', 'phim-anime-buon-hay-nhat-moi-thoi-dai-6.jpg', 10);
INSERT INTO `sanpham` VALUES (37, 'lamboghini aventadorrrrrrr', 999999, '0000-00-00', 'cac-hang-sieu-xe-dat-nhat-the-gioi-5.jpg', 11);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'ttt', '', 'hn', 't1@gmail.com', '1', 0);
INSERT INTO `user` VALUES (7, 'nguyễn thắng', '', 'Tphcm', 'vu1@gmail.com', '1', 0);
INSERT INTO `user` VALUES (14, 'vu hiep dam gai xinh', '', 'lll', '2', '1', 0);
INSERT INTO `user` VALUES (16, 'ppp', '0936718717', 'ppp', 'p@gmail.com', '1', 1);
INSERT INTO `user` VALUES (17, 'tvy', '', '', 'thangvy@gmail.com', '1', 0);
INSERT INTO `user` VALUES (18, 'tvyuiop', '', '', 'thangv3456y@gmail.com', '1', 0);
INSERT INTO `user` VALUES (19, '999', '', '', '999@gm.com', '1', 0);
INSERT INTO `user` VALUES (20, '2', '', '', 'aaa@gmail.com', '1', 0);
INSERT INTO `user` VALUES (21, '1', '0936601999', 'cao dang fpt', 'l@gmail.com', '1', 1);

SET FOREIGN_KEY_CHECKS = 1;
