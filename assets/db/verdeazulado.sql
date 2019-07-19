/*
Navicat MySQL Data Transfer

Source Server         : verdeazulado
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : verdeazulado

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-28 15:49:16
*/

USE u139874784_colec;

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idProducto` int(50) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `precio` int(255) DEFAULT NULL,
  `idtipo` int(5) DEFAULT NULL,
  `imagen1` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imagen2` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imagen3` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('1', 'Doctora Juguetes', 'Disfraz de la doctora juguete para niÃ±os, todos los talles que quieras', '250', '1', 'draJuguete.jpg', '', '');
INSERT INTO `producto` VALUES ('2', 'Violeta', 'Vestido de violeta!', '156', '2', 'violeta.jpg', null, null);
INSERT INTO `producto` VALUES ('11', 'Duendecillo navideÃ±o!', 'Disfraz de duende para las fiestas!', '250', '1', 'duendecillo.jpg', '', '');
INSERT INTO `producto` VALUES ('10', 'Mickey Mouse', 'Disfraz para bebÃ© de mickey mouse', '250', '1', 'Mickey.jpg', '', '');

-- ----------------------------
-- Table structure for `tipoproducto`
-- ----------------------------
DROP TABLE IF EXISTS `tipoproducto`;
CREATE TABLE `tipoproducto` (
  `idtipo` int(50) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipoproducto
-- ----------------------------
INSERT INTO `tipoproducto` VALUES ('1', 'disfraz');
INSERT INTO `tipoproducto` VALUES ('2', 'vestido');

-- ----------------------------
-- Table structure for `usuario`
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `iduser` int(5) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(90) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', 'admin');
