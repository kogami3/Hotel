-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 01:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_reserva`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(30) NOT NULL COMMENT 'Identificacion del cliente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `habitacion`
--

CREATE TABLE `habitacion` (
  `Id_Habitacion` int(11) NOT NULL,
  `Capacidad` int(11) NOT NULL COMMENT 'Indica cuantas personas puede alojar',
  `Tipo_habitacion` int(11) NOT NULL COMMENT 'Indica que tipo de habitacion es',
  `ocupado` tinyint(1) NOT NULL COMMENT 'True ocupado, false desocupado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `precio_habitacion`
--

CREATE TABLE `precio_habitacion` (
  `Id_precio` int(11) NOT NULL,
  `Precio` int(11) NOT NULL COMMENT 'Precio que tiene la habitacion por la temporada',
  `Tipo_habitacion` int(11) NOT NULL COMMENT 'Tipo de la habitacion',
  `Temporada` int(11) NOT NULL COMMENT 'Depende temporada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `IdReserva` int(11) NOT NULL,
  `F_Entrada` datetime NOT NULL COMMENT 'Fecha de entrada',
  `F_Salida` datetime NOT NULL COMMENT 'Fecha de salidad ',
  `Id_Habitacion` int(11) NOT NULL COMMENT 'Numero de la habitacion reservada',
  `Cliente` int(11) NOT NULL COMMENT 'Identificacion del cliente que toma la reserva'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sede`
--

CREATE TABLE `sede` (
  `IdSede` int(11) NOT NULL,
  `Nombre_Sede` varchar(30) NOT NULL COMMENT 'Nombre de la sede',
  `N_Habitaciones` int(11) NOT NULL COMMENT 'Cantidad de habitaciones por sede'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sede`
--

INSERT INTO `sede` (`IdSede`, `Nombre_Sede`, `N_Habitaciones`) VALUES
(1, 'Barranquilla', 30),
(2, 'Cali', 20),
(3, 'Cartagena', 10),
(4, 'Bogota', 20);

-- --------------------------------------------------------

--
-- Table structure for table `temporada`
--

CREATE TABLE `temporada` (
  `Id_temporada` int(11) NOT NULL,
  `F_Inicio` datetime NOT NULL COMMENT 'Fecha de inicio de la temporada',
  `F_Fin` datetime NOT NULL COMMENT 'Fecha fin de la temporada'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `Tipo_habitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`);

--
-- Indexes for table `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`Id_Habitacion`);

--
-- Indexes for table `precio_habitacion`
--
ALTER TABLE `precio_habitacion`
  ADD PRIMARY KEY (`Id_precio`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`IdReserva`);

--
-- Indexes for table `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`IdSede`);

--
-- Indexes for table `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`Id_temporada`);

--
-- Indexes for table `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`Tipo_habitacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `Id_Habitacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `precio_habitacion`
--
ALTER TABLE `precio_habitacion`
  MODIFY `Id_precio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `IdReserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sede`
--
ALTER TABLE `sede`
  MODIFY `IdSede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temporada`
--
ALTER TABLE `temporada`
  MODIFY `Id_temporada` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Id_Cliente`) REFERENCES `reserva` (`IdReserva`);

--
-- Constraints for table `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`Id_Habitacion`) REFERENCES `reserva` (`IdReserva`);

--
-- Constraints for table `precio_habitacion`
--
ALTER TABLE `precio_habitacion`
  ADD CONSTRAINT `precio_habitacion_ibfk_1` FOREIGN KEY (`Id_precio`) REFERENCES `tipo_habitacion` (`Tipo_habitacion`);

--
-- Constraints for table `temporada`
--
ALTER TABLE `temporada`
  ADD CONSTRAINT `temporada_ibfk_1` FOREIGN KEY (`Id_temporada`) REFERENCES `precio_habitacion` (`Id_precio`);

--
-- Constraints for table `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD CONSTRAINT `tipo_habitacion_ibfk_1` FOREIGN KEY (`Tipo_habitacion`) REFERENCES `habitacion` (`Id_Habitacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
