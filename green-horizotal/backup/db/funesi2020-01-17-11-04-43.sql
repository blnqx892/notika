SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS bitacora CASCADE;

CREATE TABLE `bitacora` (
  `idBitacora` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_Usu` varchar(8) DEFAULT NULL,
  `sesionInicio` datetime DEFAULT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `tipo_Bico` int(11) NOT NULL,
  PRIMARY KEY (`idBitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

INSERT INTO bitacora VALUES("1","admin","2020-01-08 19:25:18","Cerro Sesión","0");
INSERT INTO bitacora VALUES("2","admin","2020-01-08 19:25:35","Inicio Sesión","0");
INSERT INTO bitacora VALUES("3","admin","2020-01-08 19:45:28","Registró una venta","0");
INSERT INTO bitacora VALUES("4","admin","2020-01-08 19:46:20","Registró una venta","0");
INSERT INTO bitacora VALUES("5","admin","2020-01-08 19:54:36","Cerro Sesión","0");
INSERT INTO bitacora VALUES("6","admin","2020-01-10 16:30:46","Inicio Sesión","0");
INSERT INTO bitacora VALUES("7","admin","2020-01-10 16:31:08","Cerro Sesión","0");
INSERT INTO bitacora VALUES("8","admin","2020-01-10 16:32:10","Inicio Sesión","0");
INSERT INTO bitacora VALUES("9","admin","2020-01-10 17:06:15","Cerro Sesión","0");
INSERT INTO bitacora VALUES("10","admin","2020-01-10 17:18:16","Inicio Sesión","0");
INSERT INTO bitacora VALUES("11","admin","2020-01-10 17:40:20","Registró una compra","0");
INSERT INTO bitacora VALUES("12","","2020-01-13 18:15:24","Registró un feretro","0");
INSERT INTO bitacora VALUES("13","admin","2020-01-14 10:00:21","Inicio Sesión","0");
INSERT INTO bitacora VALUES("14","admin","2020-01-14 10:01:20","Registró una compra","0");
INSERT INTO bitacora VALUES("15","admin","2020-01-14 15:34:21","Registró un feretro","0");
INSERT INTO bitacora VALUES("16","admin","2020-01-14 20:19:30","Registró una compra","0");
INSERT INTO bitacora VALUES("17","admin","2020-01-14 20:40:52","Registró una compra","0");
INSERT INTO bitacora VALUES("18","admin","2020-01-14 20:41:06","Registró una compra","0");
INSERT INTO bitacora VALUES("19","admin","2020-01-14 22:06:22","Registró una compra","0");
INSERT INTO bitacora VALUES("20","admin","2020-01-14 22:52:18","Registró una compra","0");
INSERT INTO bitacora VALUES("21","admin","2020-01-14 22:54:03","Registró una compra","0");
INSERT INTO bitacora VALUES("22","admin","2020-01-14 23:01:32","Inicio Sesión","0");
INSERT INTO bitacora VALUES("23","","2020-01-15 00:01:25","Registró una compra","0");
INSERT INTO bitacora VALUES("24","","2020-01-15 00:05:56","Registró una compra","0");
INSERT INTO bitacora VALUES("25","","2020-01-15 00:08:38","Registró una compra","0");
INSERT INTO bitacora VALUES("26","","2020-01-15 00:10:15","Registró una compra","0");
INSERT INTO bitacora VALUES("27","","2020-01-15 00:12:20","Registró una compra","0");
INSERT INTO bitacora VALUES("28","","2020-01-15 00:14:53","Registró una compra","0");
INSERT INTO bitacora VALUES("29","","2020-01-15 00:17:56","Registró una compra","0");
INSERT INTO bitacora VALUES("30","","2020-01-15 00:21:06","Registró una compra","0");
INSERT INTO bitacora VALUES("31","","2020-01-15 00:25:45","Registró una compra","0");
INSERT INTO bitacora VALUES("32","","2020-01-15 00:26:30","Registró una compra","0");
INSERT INTO bitacora VALUES("33","","2020-01-15 00:28:29","Registró una compra","0");
INSERT INTO bitacora VALUES("34","admin","2020-01-15 00:32:53","Inicio Sesión","0");
INSERT INTO bitacora VALUES("35","","2020-01-15 00:33:13","Registró una compra","0");
INSERT INTO bitacora VALUES("36","","2020-01-15 00:37:22","Registró una compra","0");
INSERT INTO bitacora VALUES("37","","2020-01-15 07:43:16","Registró una compra","0");
INSERT INTO bitacora VALUES("38","","2020-01-15 07:46:41","Registró una compra","0");
INSERT INTO bitacora VALUES("39","","2020-01-15 07:49:16","Registró una compra","0");
INSERT INTO bitacora VALUES("40","","2020-01-15 08:54:48","Registró una compra","0");
INSERT INTO bitacora VALUES("41","","2020-01-15 08:54:50","Registró una compra","0");
INSERT INTO bitacora VALUES("42","","2020-01-15 08:58:04","Registró una compra","0");
INSERT INTO bitacora VALUES("43","","2020-01-15 08:58:48","Registró una compra","0");
INSERT INTO bitacora VALUES("44","","2020-01-15 09:00:46","Registró una compra","0");
INSERT INTO bitacora VALUES("45","","2020-01-15 09:00:54","Registró una compra","0");
INSERT INTO bitacora VALUES("46","","2020-01-15 09:47:34","Registró una compra","0");
INSERT INTO bitacora VALUES("47","admin","2020-01-15 15:14:11","Inicio Sesión","0");
INSERT INTO bitacora VALUES("48","","2020-01-15 16:10:17","Registró una compra","0");
INSERT INTO bitacora VALUES("49","admin","2020-01-15 16:13:16","Registró un feretro","0");
INSERT INTO bitacora VALUES("50","admin","2020-01-15 16:14:04","Registró un feretro","0");
INSERT INTO bitacora VALUES("51","","2020-01-15 16:33:59","Registró una compra","0");
INSERT INTO bitacora VALUES("52","","2020-01-15 16:39:10","Registró una compra","0");
INSERT INTO bitacora VALUES("53","","2020-01-15 19:41:24","Registró una compra","0");
INSERT INTO bitacora VALUES("54","","2020-01-15 20:06:43","Registró una compra","0");
INSERT INTO bitacora VALUES("55","","2020-01-15 20:22:46","Registró una compra","0");
INSERT INTO bitacora VALUES("56","","2020-01-15 20:30:18","Registró una compra","0");
INSERT INTO bitacora VALUES("57","","2020-01-15 20:32:19","Registró una compra","0");
INSERT INTO bitacora VALUES("58","","2020-01-15 20:32:40","Registró una compra","0");
INSERT INTO bitacora VALUES("59","","2020-01-15 20:33:39","Registró una compra","0");
INSERT INTO bitacora VALUES("60","","2020-01-15 20:33:47","Registró una compra","0");
INSERT INTO bitacora VALUES("61","","2020-01-15 20:34:12","Registró una compra","0");
INSERT INTO bitacora VALUES("62","","2020-01-15 20:34:21","Registró una compra","0");
INSERT INTO bitacora VALUES("63","","2020-01-15 20:35:29","Registró una compra","0");
INSERT INTO bitacora VALUES("64","","2020-01-15 20:41:15","Registró una compra","0");
INSERT INTO bitacora VALUES("65","","2020-01-15 20:41:30","Registró una compra","0");
INSERT INTO bitacora VALUES("66","","2020-01-15 20:43:27","Registró una compra","0");
INSERT INTO bitacora VALUES("67","","2020-01-15 20:43:42","Registró una compra","0");
INSERT INTO bitacora VALUES("68","admin","2020-01-15 23:02:54","Inicio Sesión","0");
INSERT INTO bitacora VALUES("69","admin","2020-01-15 23:03:22","Inicio Sesión","0");
INSERT INTO bitacora VALUES("70","","2020-01-15 23:04:13","Registró una compra","0");
INSERT INTO bitacora VALUES("71","admin","2020-01-15 23:08:04","Inicio Sesión","0");
INSERT INTO bitacora VALUES("72","admin","2020-01-15 23:14:29","Registró un proveedor","0");
INSERT INTO bitacora VALUES("73","admin","2020-01-15 23:15:53","Registró un feretro","0");
INSERT INTO bitacora VALUES("74","","2020-01-15 23:16:25","Registró una compra","0");
INSERT INTO bitacora VALUES("75","admin","2020-01-15 23:29:35","Cerro Sesión","0");
INSERT INTO bitacora VALUES("76","admin","2020-01-15 23:33:39","Inicio Sesión","0");
INSERT INTO bitacora VALUES("77","admin","2020-01-16 00:46:16","Cerro Sesión","0");
INSERT INTO bitacora VALUES("78","admin","2020-01-16 10:46:18","Inicio Sesión","0");
INSERT INTO bitacora VALUES("79","admin","2020-01-16 12:12:30","Registró un feretro","0");
INSERT INTO bitacora VALUES("80","","2020-01-16 12:14:07","Registró una compra","0");
INSERT INTO bitacora VALUES("81","admin","2020-01-16 12:37:39","Registró un proveedor","0");
INSERT INTO bitacora VALUES("82","admin","2020-01-16 12:38:52","Registró un feretro","0");
INSERT INTO bitacora VALUES("83","admin","2020-01-16 12:39:36","Registró un feretro","0");
INSERT INTO bitacora VALUES("84","","2020-01-16 12:40:29","Registró una compra","0");
INSERT INTO bitacora VALUES("85","","2020-01-16 12:40:51","Registró una compra","0");
INSERT INTO bitacora VALUES("86","","2020-01-16 12:41:05","Registró una compra","0");
INSERT INTO bitacora VALUES("87","","2020-01-16 12:43:11","Registró una compra","0");
INSERT INTO bitacora VALUES("88","","2020-01-16 12:43:26","Registró una compra","0");
INSERT INTO bitacora VALUES("89","","2020-01-16 12:45:44","Registró una compra","0");
INSERT INTO bitacora VALUES("90","","2020-01-16 12:50:56","Registró una compra","0");
INSERT INTO bitacora VALUES("91","","2020-01-16 12:59:30","Cerro Sesión","0");
INSERT INTO bitacora VALUES("92","admin","2020-01-16 13:00:03","Inicio Sesión","0");
INSERT INTO bitacora VALUES("93","","2020-01-16 13:00:54","Registró una compra","0");
INSERT INTO bitacora VALUES("94","admin","2020-01-16 13:11:31","Registró un feretro","0");
INSERT INTO bitacora VALUES("95","","2020-01-16 13:11:50","Registró una compra","0");
INSERT INTO bitacora VALUES("96","admin","2020-01-16 13:29:38","Registró un feretro","0");
INSERT INTO bitacora VALUES("97","","2020-01-16 13:30:06","Registró una compra","0");
INSERT INTO bitacora VALUES("98","admin","2020-01-16 19:52:17","Registró un paquete","0");
INSERT INTO bitacora VALUES("99","admin","2020-01-16 20:17:04","Inicio Sesión","0");
INSERT INTO bitacora VALUES("100","admin","2020-01-16 20:48:55","Registró una venta","0");
INSERT INTO bitacora VALUES("101","admin","2020-01-16 22:18:26","Inicio Sesión","0");
INSERT INTO bitacora VALUES("102","","2020-01-16 22:22:05","Registró una compra","0");
INSERT INTO bitacora VALUES("103","","2020-01-16 22:36:27","Registró una compra","0");
INSERT INTO bitacora VALUES("104","bmelz","2020-01-16 23:56:14","Edito un cliente","0");
INSERT INTO bitacora VALUES("105","bmelz","2020-01-17 00:06:51","Cerro Sesión","0");
INSERT INTO bitacora VALUES("106","admin","2020-01-17 00:07:39","Inicio Sesión","0");
INSERT INTO bitacora VALUES("107","admin","2020-01-17 00:07:48","Cerro Sesión","0");
INSERT INTO bitacora VALUES("108","admin","2020-01-17 00:08:16","Inicio Sesión","0");
INSERT INTO bitacora VALUES("109","admin","2020-01-17 00:13:45","Edito un cliente","0");
INSERT INTO bitacora VALUES("110","admin","2020-01-17 00:20:45","Registró un cliente","0");
INSERT INTO bitacora VALUES("111","admin","2020-01-17 00:39:28","Inicio Sesión","0");
INSERT INTO bitacora VALUES("112","admin","2020-01-17 01:23:49","Inicio Sesión","0");
INSERT INTO bitacora VALUES("113","admin","2020-01-17 02:26:23","Edito un equipo","0");
INSERT INTO bitacora VALUES("114","admin","2020-01-17 02:29:03","Edito un equipo","0");
INSERT INTO bitacora VALUES("115","admin","2020-01-17 02:34:00","Edito un equipo","0");
INSERT INTO bitacora VALUES("116","admin","2020-01-17 02:34:35","Edito un equipo","0");
INSERT INTO bitacora VALUES("117","admin","2020-01-17 02:35:02","Edito un equipo","0");
INSERT INTO bitacora VALUES("118","admin","2020-01-17 02:35:17","Edito un equipo","0");
INSERT INTO bitacora VALUES("119","admin","2020-01-17 02:37:16","Edito un equipo","0");
INSERT INTO bitacora VALUES("120","admin","2020-01-17 02:50:04","Dio de baja un proveedor","0");
INSERT INTO bitacora VALUES("121","admin","2020-01-17 02:53:33","Dio de baja a un equipo","0");
INSERT INTO bitacora VALUES("122","admin","2020-01-17 02:53:57","Dio de baja a un equipo","0");
INSERT INTO bitacora VALUES("123","admin","2020-01-17 02:56:42","Dio de baja a un equipo","0");
INSERT INTO bitacora VALUES("124","admin","2020-01-17 02:57:00","Dio de alta a un equipo","0");
INSERT INTO bitacora VALUES("125","admin","2020-01-17 02:57:04","Dio de alta a un equipo","0");
INSERT INTO bitacora VALUES("126","admin","2020-01-17 03:15:49","Inicio Sesión","0");
INSERT INTO bitacora VALUES("127","admin","2020-01-17 04:01:14","Inicio Sesión","0");


DROP TABLE IF EXISTS cliente CASCADE;

CREATE TABLE `cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Dui_cli` varchar(10) NOT NULL,
  `nombre_cli` varchar(50) NOT NULL,
  `apellidos_Cli` varchar(50) NOT NULL,
  `direccion_cli` varchar(100) DEFAULT NULL,
  `telefono_Cli` varchar(9) DEFAULT NULL,
  `ben1_Cli` varchar(50) DEFAULT NULL,
  `ben2_Cli` varchar(50) DEFAULT NULL,
  `ben3_Cli` varchar(50) DEFAULT NULL,
  `fecha_Cli` date NOT NULL,
  `idPaquete` int(10) NOT NULL,
  `estado_Cli` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO cliente VALUES("1","56565656-5","Patricia Carolina","Mundo Flores","San Vicente","7485-4444","Maria Mundo","Kenia Flores","Karla Flores","2020-01-08","4","1");
INSERT INTO cliente VALUES("2","34545464-2","Daniela Esmerald","Morales Melara","San Vicente","2135-4777","Yessica Melara","Willian Morales","Esperanza Lainez","2020-01-08","4","1");
INSERT INTO cliente VALUES("3","55454879-0","Victoria Lucrecia","Lombardi","San Salvador, gg","7845-1023","Lucar Lombardi","Gabriela Lombardi","Fernando Lomardi","2020-01-08","5","1");
INSERT INTO cliente VALUES("4","","","","","","","","","2020-01-17","0","1");


DROP TABLE IF EXISTS compras CASCADE;

CREATE TABLE `compras` (
  `idCompra` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fac_Com` int(30) NOT NULL,
  `fecha_Com` date NOT NULL,
  `producto_Com` varchar(30) NOT NULL,
  `cate_Com` int(10) unsigned NOT NULL,
  `tipo_Comp` varchar(30) NOT NULL,
  `cantidad_Com` int(10) NOT NULL,
  `unitario_Com` float NOT NULL,
  `id_Proveedor` int(10) NOT NULL,
  `estado_Com` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idCompra`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO compras VALUES("1","10011011","2020-01-16","2","0","","25","0","1","1");
INSERT INTO compras VALUES("2","10011012","2020-01-16","1","0","","45","0","1","1");
INSERT INTO compras VALUES("3","10011012","2020-01-16","2","0","","5","0","1","1");
INSERT INTO compras VALUES("4","10011013","2020-01-16","2","0","","15","0","1","1");
INSERT INTO compras VALUES("5","10011013","2020-01-16","1","0","","15","0","1","1");
INSERT INTO compras VALUES("6","10011014","2020-01-16","2","0","","15","0","1","1");
INSERT INTO compras VALUES("7","10011015","2020-01-16","1","0","","25","0","1","1");
INSERT INTO compras VALUES("8","10011016","2020-01-16","1","0","","2","0","1","1");
INSERT INTO compras VALUES("9","10011017","2020-01-16","3","0","","2","0","1","1");
INSERT INTO compras VALUES("10","0","0000-00-00","","0","","0","300","0","0");
INSERT INTO compras VALUES("11","10011018","2020-01-16","4","0","","1","0","1","1");
INSERT INTO compras VALUES("12","10011019","2020-01-16","2","0","","5","0","0","1");
INSERT INTO compras VALUES("13","10011019","2020-01-16","2","0","","10","0","0","1");


DROP TABLE IF EXISTS detallecompra CASCADE;

CREATE TABLE `detallecompra` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cantidad` int(10) NOT NULL,
  `producto` varchar(55) NOT NULL,
  `precio` double NOT NULL,
  `total` double NOT NULL,
  `factura` int(11) NOT NULL,
  `id_producto` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO detallecompra VALUES("13","10","Feretro Laqueado","500","5000","10011019","2");


DROP TABLE IF EXISTS empleado CASCADE;

CREATE TABLE `empleado` (
  `idEmpleado` int(10) unsigned NOT NULL,
  `Dui_Emple` varchar(10) NOT NULL,
  `nombres_Emple` varchar(50) NOT NULL,
  `apellidos_Emple` varchar(50) NOT NULL,
  `direccion_Emple` varchar(100) DEFAULT NULL,
  `telefono_Emple` varchar(9) DEFAULT NULL,
  `fecha_Emple` date DEFAULT NULL,
  `cargo_Emple` varchar(20) DEFAULT NULL,
  `estado_Emple` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO empleado VALUES("1","87744444-4","Amilcar Adonay","Flores ","San Vicentej","7845-5200","2019-11-05","Motorista","1");
INSERT INTO empleado VALUES("2","47888888-8","Lucrecia Alejandra","Sepulveda Barrera","Colonia 4 de Octubre, Pasaje C, casa #24, san Vicente","7845-1200","2019-11-06","Edecan","0");
INSERT INTO empleado VALUES("3","74582111-2","Florencia María","Rosales Carrillo","Barrio el centro y 1era Av. Sur #2, San Vicente","7854-2442","2019-11-07","Edecan","1");


DROP TABLE IF EXISTS invetario CASCADE;

CREATE TABLE `invetario` (
  `idInventario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idProducto` int(10) unsigned NOT NULL,
  `stock` int(11) NOT NULL,
  `stockMinimo` int(11) NOT NULL,
  `precioVenta` double NOT NULL,
  PRIMARY KEY (`idInventario`),
  KEY `FK_invetario_Producto` (`idProducto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO invetario VALUES("1","1","87","12","560");
INSERT INTO invetario VALUES("2","2","62","12","500");
INSERT INTO invetario VALUES("3","3","2","10","400");
INSERT INTO invetario VALUES("4","4","1","2","300");


DROP TABLE IF EXISTS kardex CASCADE;

CREATE TABLE `kardex` (
  `idKardex` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `factura` int(10) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `idProducto` int(10) unsigned NOT NULL,
  `cantidad` int(10) NOT NULL,
  `costo` double NOT NULL,
  `importe` double NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`idKardex`),
  KEY `idproducto` (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO kardex VALUES("1","10011011","COMPRA","2","25","500","12500","2020-01-16");
INSERT INTO kardex VALUES("2","10011012","COMPRA","1","45","560","25200","2020-01-16");
INSERT INTO kardex VALUES("3","10011012","COMPRA","2","5","500","2500","2020-01-16");
INSERT INTO kardex VALUES("4","10011013","COMPRA","2","15","500","7500","2020-01-16");
INSERT INTO kardex VALUES("5","10011013","COMPRA","1","15","560","8400","2020-01-16");
INSERT INTO kardex VALUES("6","10011014","COMPRA","2","15","500","7500","2020-01-16");
INSERT INTO kardex VALUES("7","10011015","COMPRA","1","25","560","14000","2020-01-16");
INSERT INTO kardex VALUES("8","10011016","COMPRA","1","2","560","1120","2020-01-16");
INSERT INTO kardex VALUES("9","10011017","COMPRA","3","2","400","800","2020-01-16");
INSERT INTO kardex VALUES("10","10011018","COMPRA","4","1","300","300","2020-01-16");
INSERT INTO kardex VALUES("12","10011019","COMPRA","2","10","500","5000","2020-01-16");


DROP TABLE IF EXISTS paquete CASCADE;

CREATE TABLE `paquete` (
  `idPaquete` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_paq` varchar(50) NOT NULL,
  `idProducto` int(10) NOT NULL,
  `servicios` varchar(1000) NOT NULL,
  `precio_paq` float NOT NULL,
  PRIMARY KEY (`idPaquete`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO paquete VALUES("1","Jardín Completo","2","Cafetería 500 porciones, Servicio de carrocería, capilla ardiente primiun, sillas 55","1200");


DROP TABLE IF EXISTS producto CASCADE;

CREATE TABLE `producto` (
  `idProducto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_Pro` varchar(45) NOT NULL,
  `material_Pro` int(10) unsigned NOT NULL,
  `color_Pro` varchar(30) NOT NULL,
  `caracteristicas` varchar(500) NOT NULL,
  `estado_Pro` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES("1","Modelo Imperial","1","Vino","Hecho en madera de pino, con detalles en color dorado y blancoy","1");
INSERT INTO producto VALUES("2","Feretro Laqueado","1","Blanco","Hecho en madera de cedro, pintado a mano, detalles en dorado y plateadou","0");
INSERT INTO producto VALUES("3","Feretro Señorial","1","amarillo","sencillo feretro hecho en madera de pyino","1");
INSERT INTO producto VALUES("4","Feretro de bebe sencillo","1","celeste","Hecho en madera de pino","1");


DROP TABLE IF EXISTS proveedor CASCADE;

CREATE TABLE `proveedor` (
  `idProveedor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_prov` varchar(50) NOT NULL,
  `telefonoResp_Prov` varchar(9) DEFAULT NULL,
  `direccion_Prov` varchar(100) DEFAULT NULL,
  `nombreEmpr` varchar(50) DEFAULT NULL,
  `telefEmp` varchar(9) DEFAULT NULL,
  `estado_Provee` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idProveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO proveedor VALUES("1","Arte & Madera","2569-8444","San Salvador","Julio Antonio Morales","7845-0235","1");


DROP TABLE IF EXISTS usuarios CASCADE;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Dui_Usu` varchar(10) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_Usu` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `id_tipo` int(10) unsigned DEFAULT NULL,
  `usuario` varchar(8) DEFAULT NULL,
  `password` tinytext,
  `estado_Usu` int(10) unsigned DEFAULT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) DEFAULT NULL,
  `token` varchar(45) DEFAULT NULL,
  `token_password` int(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO usuarios VALUES("1","66666666-6","Blanqui","Melara","483mel@gmail.com","1","beme04","$2y$10$6nsL1b5ie0z4kG0RVNguYuSS2cdLSPK68NX.qm7o50Ij7DW5dAz0W","1","0000-00-00 00:00:00","0","","0","0");
INSERT INTO usuarios VALUES("11","78445656-4","Lissette","Lainez","483melz@gmail.com","1","admin","$2y$10$IUZwVJkpy.aWSqvCYcZ8Oefm0HnKI4glYG67pRLzb40Ew/PzP/K06","1","","1","","","");


DROP TABLE IF EXISTS venta CASCADE;

CREATE TABLE `venta` (
  `idVenta` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_ven` date NOT NULL,
  `numero_ven` int(10) NOT NULL,
  `pago` varchar(30) NOT NULL,
  `paquete_ven` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  PRIMARY KEY (`idVenta`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO venta VALUES("0","2020-01-16","20102","credito","1","0");
INSERT INTO venta VALUES("5","2020-01-16","20101","contado","1","1");
INSERT INTO venta VALUES("6","2020-01-16","20101","contado","1","1");
INSERT INTO venta VALUES("7","2020-01-16","20102","contado","1","0");
INSERT INTO venta VALUES("8","2020-01-17","20103","contado","1","1");
INSERT INTO venta VALUES("9","2020-01-17","20103","contado","1","1");
INSERT INTO venta VALUES("10","2020-01-17","20104","credito","1","3");
INSERT INTO venta VALUES("11","2020-01-17","20104","contado","1","2");


SET FOREIGN_KEY_CHECKS=1;

