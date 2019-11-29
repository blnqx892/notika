-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 06:01:04
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `funesi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(10) UNSIGNED NOT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `usuario_Usu` varchar(8) DEFAULT NULL,
  `sesionInicio` datetime DEFAULT NULL,
  `tipo_Bico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idBitacora`, `actividad`, `usuario_Usu`, `sesionInicio`, `tipo_Bico`) VALUES
(1, 'RegistrÃ³ un cliente', '', '2019-11-28 00:36:18', 0),
(2, 'RegistrÃ³ un cliente', 'pollito', '2019-11-28 00:39:06', 0),
(3, 'RegistrÃ³ un cliente', 'Camz', '2019-11-28 00:53:43', 0),
(4, 'RegistrÃ³ un cliente', 'Camz', '2019-11-28 00:55:59', 0),
(5, 'Edito un cliente', 'Camz', '2019-11-28 00:58:01', 0),
(6, 'Edito un cliente', 'Camz', '2019-11-28 00:58:49', 0),
(7, 'Edito un cliente', 'Camz', '2019-11-28 00:59:10', 0),
(8, 'Dio de baja a un cliente', 'Camz', '2019-11-28 01:01:29', 0),
(9, 'Dio de baja a un cliente', 'Camz', '2019-11-28 01:01:45', 0),
(10, 'Dio de alta a un cliente', 'Camz', '2019-11-28 01:01:56', 0),
(11, 'Dio de baja a un cliente', 'Camz', '2019-11-28 01:03:23', 0),
(12, 'Dio de alta a un cliente', 'Camz', '2019-11-28 01:03:39', 0),
(13, 'Cerro SesiÃ³n', 'Camz', '2019-11-28 01:07:20', 0),
(14, 'Inicio SesiÃ³n', 'Camz', '2019-11-28 01:07:48', 0),
(15, 'Dio una Compra de baja', 'Camz', '2019-11-28 01:13:59', 0),
(16, 'Dio una Compra de alta', 'Camz', '2019-11-28 01:14:06', 0),
(17, 'Edito un empleado', 'Camz', '2019-11-28 01:23:05', 0),
(18, 'Cerro SesiÃ³n', 'Camz', '2019-11-28 01:23:37', 0),
(19, 'Inicio SesiÃ³n', 'admin', '2019-11-28 09:08:27', 0),
(20, 'Cerro SesiÃ³n', '', '2019-11-28 10:15:24', 0),
(21, 'Inicio SesiÃ³n', 'admin', '2019-11-28 11:20:52', 0),
(22, 'Inicio SesiÃ³n', 'admin', '2019-11-28 12:25:26', 0),
(23, 'Registro a un usuario', 'admin', '2019-11-28 12:26:21', 0),
(24, 'Cerro SesiÃ³n', 'admin', '2019-11-28 12:26:38', 0),
(25, 'Inicio SesiÃ³n', 'admin', '2019-11-28 19:11:18', 0),
(26, 'Cerro SesiÃ³n', '', '2019-11-28 19:13:09', 0),
(27, 'Inicio SesiÃ³n', 'admin', '2019-11-28 19:32:01', 0),
(28, 'Inicio SesiÃ³n', 'admin', '2019-11-28 20:54:47', 0),
(29, 'Inicio SesiÃ³n', 'admin', '2019-11-28 21:02:07', 0),
(30, 'Inicio SesiÃ³n', 'admin', '2019-11-28 21:14:47', 0),
(31, 'Inicio SesiÃ³n', 'admin', '2019-11-28 22:23:01', 0),
(32, 'Inicio SesiÃ³n', 'hn', '2019-11-28 22:40:24', 0),
(33, 'Inicio SesiÃ³n', 'hn', '2019-11-28 22:44:57', 0),
(34, 'Inicio SesiÃ³n', 'hn', '2019-11-28 22:58:11', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) UNSIGNED NOT NULL,
  `Dui_cli` varchar(10) NOT NULL,
  `nombre_cli` varchar(50) NOT NULL,
  `apellidos_Cli` varchar(50) NOT NULL,
  `direccion_cli` varchar(100) DEFAULT NULL,
  `telefono_Cli` varchar(9) DEFAULT NULL,
  `ben1_Cli` varchar(50) DEFAULT NULL,
  `ben2_Cli` varchar(50) DEFAULT NULL,
  `ben3_Cli` varchar(50) DEFAULT NULL,
  `fecha_Cli` date NOT NULL,
  `estado_Cli` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Dui_cli`, `nombre_cli`, `apellidos_Cli`, `direccion_cli`, `telefono_Cli`, `ben1_Cli`, `ben2_Cli`, `ben3_Cli`, `fecha_Cli`, `estado_Cli`) VALUES
(1, '', 'Daniela a', 'yu', 'yy', '', 'yyy', 'uyy', 'yy', '2019-11-26', 0),
(2, '66666666-6', 'hm', 'm,n,', 'Av. Crecencio Miranda #45, San Vicente, El Salvador', '9999-9999', ',k', ',k', 'k', '2019-11-28', 1),
(3, '77777777-9', '7777hjj', 'j,', 'klkjl', '1111-1111', 'jkljk', 'jkljkl', 'jkljkl', '2019-11-28', 1),
(4, '66666666-7', 'hg', 'hh', 'gg', '9999-9998', 'g', 'g', 'g', '2019-11-28', 1),
(5, '98988898-9', 'l', 'l', '', '8888-8778', 'k', 'k', 'k', '2019-11-28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(10) NOT NULL,
  `fac_Com` int(10) NOT NULL,
  `fecha_Com` date DEFAULT NULL,
  `producto_Com` varchar(30) NOT NULL,
  `cate_Com` int(10) UNSIGNED NOT NULL,
  `tipo_Comp` varchar(30) NOT NULL,
  `cantidad_Com` int(100) NOT NULL,
  `unitario_Com` float NOT NULL,
  `subTotal_Com` float DEFAULT NULL,
  `total_Com` float DEFAULT NULL,
  `id_Proveedor` int(10) NOT NULL,
  `estado_Com` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(10) UNSIGNED NOT NULL,
  `fac_Com` int(10) UNSIGNED NOT NULL,
  `fecha_Com` date NOT NULL,
  `producto_Com` varchar(30) NOT NULL,
  `cate_Com` int(10) UNSIGNED NOT NULL,
  `tipo_Comp` varchar(30) NOT NULL,
  `cantidad_Com` int(10) NOT NULL,
  `unitario_Com` float NOT NULL,
  `id_Proveedor` int(10) UNSIGNED NOT NULL,
  `estado_Com` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idCompra`, `fac_Com`, `fecha_Com`, `producto_Com`, `cate_Com`, `tipo_Comp`, `cantidad_Com`, `unitario_Com`, `id_Proveedor`, `estado_Com`) VALUES
(1, 555, '2019-11-07', 'dgfdfg', 2, 'gdg', 55, 55, 2, 0),
(2, 102, '2019-11-07', 'Sillas Magna Azul', 1, 'Sillas', 100, 12.5, 1, 1),
(3, 555, '2019-11-09', 'hhh', 2, 'Sillas', 25, 12.5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `idDetalleCompra` int(10) NOT NULL,
  `cantidad_DCom` int(10) NOT NULL,
  `precio_DComp` float NOT NULL,
  `idCompra` int(10) NOT NULL,
  `idProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(10) UNSIGNED NOT NULL,
  `fecha_Emple` date DEFAULT NULL,
  `Dui_Emple` varchar(10) NOT NULL,
  `nombres_Emple` varchar(50) NOT NULL,
  `apellidos_Emple` varchar(50) NOT NULL,
  `telefono_Emple` varchar(9) DEFAULT NULL,
  `direccion_Emple` varchar(100) DEFAULT NULL,
  `cargo_Emple` varchar(20) DEFAULT NULL,
  `estado_Emple` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `fecha_Emple`, `Dui_Emple`, `nombres_Emple`, `apellidos_Emple`, `telefono_Emple`, `direccion_Emple`, `cargo_Emple`, `estado_Emple`) VALUES
(1, '2019-11-05', '87744444-4', 'Amilcar Adonay', 'Flores ', '7845-5200', 'San Vicentej', 'Motorista', 1),
(2, '2019-11-06', '47888888-8', 'Lucrecia Alejandra', 'Sepulveda Barrera', '7845-1200', 'Colonia 4 de Octubre, Pasaje C, casa #24, san Vicente', 'Edecan', 0),
(3, '2019-11-07', '74582111-2', 'Florencia MarÃ­a', 'Rosales Carrillo', '7854-2442', 'Barrio el centro y 1era Av. Sur #2, San Vicente', 'Edecan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invetario`
--

CREATE TABLE `invetario` (
  `idInventario` int(10) NOT NULL,
  `tipomovi_Inv` int(10) NOT NULL,
  `existencias_Inv` int(10) NOT NULL,
  `precioactual_Inv` float NOT NULL,
  `canti_Inv` int(10) NOT NULL,
  `precio_Inv` float NOT NULL,
  `fechaMovi_Inv` date DEFAULT NULL,
  `nuevaExis_Inv` int(10) NOT NULL,
  `nuevoPrecio_Inv` float NOT NULL,
  `idProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) NOT NULL,
  `nombre_Pro` varchar(45) NOT NULL,
  `tipo_Pro` int(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `stock_Pro` int(10) DEFAULT NULL,
  `precio_Pro` float DEFAULT NULL,
  `categoria_Pro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(10) UNSIGNED NOT NULL,
  `nombre_prov` varchar(50) NOT NULL,
  `telefonoResp_Prov` varchar(9) DEFAULT NULL,
  `direccion_Prov` varchar(100) DEFAULT NULL,
  `nombreEmpr` varchar(50) DEFAULT NULL,
  `telefEmp` varchar(9) DEFAULT NULL,
  `estado_Provee` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombre_prov`, `telefonoResp_Prov`, `direccion_Prov`, `nombreEmpr`, `telefEmp`, `estado_Provee`) VALUES
(1, 'Talleres Futuro', '2458-9568', 'Calle los Sisimiles Av. 45, #78, San Salvador', 'Oscar Armando Villamil Carranza', '7145-4042', 1),
(2, 'Panaderia San Jose', '2365-7710', '4ta Av. Sur y 10a Av Norte, #52, San Salvador', 'Eunice Abigail Pineda', '7845-6582', 1),
(3, 'Madera & Arte', '2514-5444', 'Col. San Benito #325, San Salvador', 'Esteban Xavier Orellana', '7845-6222', 0),
(4, 'fgjfgj', '7657-5675', 'gfjfg', 'hjghjh', '7868-6867', 1),
(5, 'rgtry', '5555-5555', 'getr', 'gdfg', '6666-6666', 1),
(6, 'bfghgfh', '6666-6666', 'ghfgh', 'hgfh', '6666-6666', 1),
(7, 'gfhfh', '7868-6686', 'hgghgj', 'jhkhjkjh', '8979-8798', 1),
(8, 'hgjh', '7777-7777', '78hjh', '777jh', '7777-7777', 1),
(9, 'hjkhj', '8888-8888', 'kkhkhj', 'hjgkhgk', '7777-7777', 1),
(10, 'g', '6666-6666', 't', 'y', '5555-5555', 1),
(11, 'ghgh', '6666-6666', 'fghfgh', 'h', '6666-6666', 1),
(12, 'fdgfd', '4444-4444', 'dfgdf', 'gfddf', '4444-4444', 1),
(13, 'hfhf', '7777-7777', 'gfhfg', '76', '7777-7777', 1),
(14, 'hjkjh', '9999-9999', 'hjk', 'khjk', '8888-8888', 1),
(15, '', '', '', '', '', 1),
(16, 'mhj', '8888-8888', 'jhkhj', 'hjkhj', '8888-8888', 1),
(17, '', '', '', '', '', 1),
(18, 'HHGFH', '6756-5675', 'FGHGFH', 'JGHJGH', '5464-6546', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(8) DEFAULT NULL,
  `password` tinytext,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_Usu` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `Dui_Usu` varchar(10) DEFAULT NULL,
  `id_tipo` int(10) UNSIGNED DEFAULT NULL,
  `estado_Usu` int(10) UNSIGNED DEFAULT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) DEFAULT NULL,
  `token` varchar(250) DEFAULT NULL,
  `token_password` varchar(250) DEFAULT NULL,
  `password_request` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `apellido_Usu`, `correo`, `Dui_Usu`, `id_tipo`, `estado_Usu`, `last_session`, `activacion`, `token`, `token_password`, `password_request`) VALUES
(1, 'beme04', '$2y$10$6nsL1b5ie0z4kG0RVNguYuSS2cdLSPK68NX.qm7o50Ij7DW5dAz0W', 'Blanqui', 'Melara', '483mel@gmail.com', '66666666-6', 1, 1, '0000-00-00 00:00:00', 0, '', '0', 0),
(2, 'admin', '$2y$11$0u6d3kXlApubBjAxaBbjjOHaSFtWMH5EJoR9p6WyTomTJYbspW/Z6', 'Lissette', 'Melara', 'lmelz@gmail.com', '0458795555', 1, 1, '0000-00-00 00:00:00', 0, '', '0', 0),
(3, 'hn', '$2y$10$Ntd2zFBnbVUNva4BluryuODvPGY7SG0L2dWXz4uun0puNAr2.GUe.', 'pastilla', 'ttr', 'jmozalfaro@gmail.com', '77777777-7', 1, 1, '0000-00-00 00:00:00', 1, '3b4bee4943feeddd617a260ab64a6a30', '', 0),
(4, 'Camz', '$2y$11$Tdj7OdZ864rRcuxkh3A8oe3D2MZQNv.bZwhM/XrkfrvD1joZ6idNO', 'Camila', 'Caballero', 'dkdjksd', '54545555-5', 1, 1, '0000-00-00 00:00:00', 0, '', '0', 1),
(5, 'dany', '$2y$11$r2gh7VFZJb840t/8kG5WweYIPJK58RVJe91xRKZzJSOru.cvAUbmS', 'zuky polli', 'holi', '483melz@gmail.com', '43545634-5', 0, 1, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `FK_Compra_Proveedor` (`id_Proveedor`) USING BTREE;

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`idDetalleCompra`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `invetario`
--
ALTER TABLE `invetario`
  ADD PRIMARY KEY (`idInventario`),
  ADD KEY `FK_invetario_Producto` (`idProducto`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_Proveedor`) REFERENCES `compra` (`idCompra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
