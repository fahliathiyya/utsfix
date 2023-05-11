-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama_merk`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Suzukia'),
(6, 'TVS'),
(7, 'Kawasaki'),
(8, 'Harley-Davidson'),
(9, 'Royal Enfield'),
(10, 'Ducati'),
(11, 'Vespa');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id` int(11) NOT NULL,
  `nama_motor` varchar(191) NOT NULL,
  `cc` int(11) NOT NULL,
  `tipe_motor_id` int(45) DEFAULT NULL,
  `harga` int(45) NOT NULL,
  `merk_id` int(45) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id`, `nama_motor`, `cc`, `tipe_motor_id`, `harga`, `merk_id`, `stok`, `gambar`) VALUES
(6, 'Honda CBR150R', 150, 3, 42288000, 1, 30, 'https://www.wahanahonda.com/assets/upload/produk/varian_warna/24/PRODUK_VARIAN-WARNA_24_24-11-2022_637f7fdea2ade.jpg'),
(7, 'Honda CBR250RR ', 250, 3, 80484000, 1, 10, 'https://www.wahanahonda.com/assets/upload/produk/varian_warna/25/PRODUK_VARIAN-WARNA_25_19-09-2022_6328365246bda.jpg'),
(8, 'Yamaha R15', 155, 3, 39875000, 2, 10, 'https://www.yamaha-motor.co.id/uploads/products/new_product_model_image/2022011817082492352F15928.png'),
(9, 'Yamaha XSR 155', 155, 3, 37775000, 2, 10, 'https://www.yamaha-motor.co.id/uploads/products/new_product_model_image/2022011817082492352F15928.png'),
(13, 'Honda CBR 2028', 500, 3, 12000000, 2, 100, NULL),
(15, 'Honda CBR 2028', 500, NULL, 12000000, NULL, 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(191) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `motor_id` int(45) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `motor_id`, `quantity`) VALUES
(4, 'fahliaa', 'depok jawa tengah', NULL, 12),
(5, 'fahlia am', 'depok jawa tengah', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_motor`
--

CREATE TABLE `tipe_motor` (
  `id` int(11) NOT NULL,
  `tipe_motor` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_motor`
--

INSERT INTO `tipe_motor` (`id`, `tipe_motor`) VALUES
(0, 'Matic'),
(2, 'Semi-Auto'),
(3, 'Manual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_motor1` (`tipe_motor_id`),
  ADD KEY `fk_motor2` (`merk_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`motor_id`);

--
-- Indexes for table `tipe_motor`
--
ALTER TABLE `tipe_motor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe_motor`
--
ALTER TABLE `tipe_motor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `fk_motor1` FOREIGN KEY (`tipe_motor_id`) REFERENCES `tipe_motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_motor2` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`motor_id`) REFERENCES `motor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
