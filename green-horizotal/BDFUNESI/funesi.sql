-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 05:09:21
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

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
  `idBitacora` int(10) NOT NULL,
  `actividad` varchar(50) DEFAULT NULL,
  `usuario_Usu` varchar(8) DEFAULT NULL,
  `sesionInicio` datetime DEFAULT NULL,
  `tipo_Bico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(10) NOT NULL,
  `Dui_cli` varchar(8) NOT NULL,
  `nombre_cli` varchar(50) NOT NULL,
  `apellidos_Cli` varchar(50) NOT NULL,
  `direccion_cli` varchar(100) DEFAULT NULL,
  `telefono_Cli` varchar(10) DEFAULT NULL,
  `ben1_Cli` varchar(50) DEFAULT NULL,
  `ben2_Cli` varchar(50) DEFAULT NULL,
  `ben3_Cli` varchar(50) DEFAULT NULL,
  `estado_Cli` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(10) NOT NULL,
  `numFac_Com` int(10) NOT NULL,
  `fecha_Com` date DEFAULT NULL,
  `total_Com` float NOT NULL,
  `id_Proveedor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `idEmpleado` int(10) NOT NULL,
  `fecha_Emple` date DEFAULT NULL,
  `Dui_Emple` varchar(8) NOT NULL,
  `nombres_Emple` varchar(50) NOT NULL,
  `apellidos_Emple` varchar(50) NOT NULL,
  `telefono_Emple` varchar(10) DEFAULT NULL,
  `direccion_Emple` varchar(100) DEFAULT NULL,
  `cargo_Emple` varchar(20) DEFAULT NULL,
  `estado_Emple` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `idProveedor` int(10) NOT NULL,
  `nomEmp` varchar(50) NOT NULL,
  `telEmp` varchar(10) DEFAULT NULL,
  `dirEmp` varchar(100) DEFAULT NULL,
  `nomRes` varchar(50) DEFAULT NULL,
  `telRes` varchar(10) DEFAULT NULL,
  `estadoProv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nomEmp`, `telEmp`, `dirEmp`, `nomRes`, `telRes`, `estadoProv`) VALUES
(0, 'Funesi', '23933333', 'Barrio El Santuario', 'Juan Gonzales', '71234568', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL,
  `usuario_Usu` varchar(8) NOT NULL,
  `contrasena_Usu` tinytext,
  `nombre_Usu` varchar(50) NOT NULL,
  `correo_Usu` varchar(50) NOT NULL,
  `Dui_Usu` varchar(10) NOT NULL,
  `tipo_Usu` int(10) NOT NULL,
  `estado_Usu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`idCompra`) USING BTREE,
  ADD KEY `FK_Compra_Proveedor` (`id_Proveedor`) USING BTREE;

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
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

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
