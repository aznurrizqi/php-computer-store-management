-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2016 at 07:07 
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `nama`, `username`, `password`, `email`) VALUES
('A0001', 'ADMIN', 'aaaa', 'aaaa', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbrg` varchar(5) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `merek` varchar(25) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `stok` int(5) NOT NULL,
  `hrg` int(25) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbrg`, `nmbrg`, `merek`, `deskripsi`, `kategori`, `stok`, `hrg`, `foto`) VALUES
('B0001', 'RAM APIK', 'VGEN', 'RAM APIK', 'VGEN', 4, 120, ''),
('B0002', 'MOBO APIK', 'MSI', 'JOS', 'MOTHERBOARD', 1, 1560000, ''),
('B0003', 'LCD 24 INCH', 'SAMSUNG', 'BENING COOY', 'MONITOR', 5, 340000, ''),
('B0004', 'NVIDIA GEFORCE GTX990', 'NVIDIA', '4 GB GDDR5', 'VGA', 4, 4750000, ''),
('B0005', 'GALAX GTX 980', 'NVIDIA', '4800 MHZ', 'VGA', 2, 7650000, ''),
('B0006', 'INTEL CORE I7 7870K', 'INTEL', 'OVERCLOCKING READY', 'PROSESOR', 8, 6664000, ''),
('B0007', 'ASUS MONITOR 17''', 'ASUS', 'RESOLUTION 1000X1000', 'MONITOR', 1, 750000, 0x6c6f6e646f6e2e6a7067),
('B0008', 'KEYBOARD R16', 'MSI', 'AAA', 'KEYBOARD', 2, 6000000, 0x6c6f6e646f6e2e6a7067),
('B0009', 'ASDA', 'INTEL', 'JOSS', 'KEYBOARD', 2, 23000, 0x636f64652e6a7067),
('B0010', 'HP', 'ASUS', 'SEHAT', 'MONITOR', 1, 1, 0x6c6f6e646f6e2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `detailtransaksi`
--

CREATE TABLE IF NOT EXISTS `detailtransaksi` (
  `iddetail` varchar(10) NOT NULL,
  `ktgbrg` varchar(25) NOT NULL,
  `merekbrg` varchar(25) NOT NULL,
  `nmbrg` varchar(50) NOT NULL,
  `hrgbrg` int(25) NOT NULL,
  `jmlbrg` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailtransaksi`
--

INSERT INTO `detailtransaksi` (`iddetail`, `ktgbrg`, `merekbrg`, `nmbrg`, `hrgbrg`, `jmlbrg`) VALUES
('T0001D0001', 'MONITOR', 'ASUS', 'LCD 24 INCH', 1, 1),
('T0001D0002', 'MONITOR', 'ASUS', 'LCD 24 INCH', 1200000, 6),
('T0001D0003', 'MOTHERBOARD', 'MSI', 'MOBO APIK', 2, 2),
('T0001D0004', 'RAM', 'ASUS', 'RAM APIK', 5, 5),
('T0002D0005', 'MONITOR', 'MSI', 'LCD 24 INCH', 7, 7),
('T0004D0007', 'VGA', 'NVIDIA', 'INTEL CORE I7 7870K', 6640000, 4),
('T0005D0008', 'VGA', 'NVIDIA', 'GALAX GTX 980', 67900000, 2),
('T0005D0009', 'MONITOR', 'ASUS', 'LCD 24 INCH', 112000000, 3),
('T0005D0010', 'PROSESOR', 'INTEL', 'INTEL CORE I7 7870K', 66650000, 4),
('T0006D0011', 'HDD', 'MSI', 'ASUS MONITOR 17''', 6000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `idjabatan` varchar(5) NOT NULL,
  `nmjabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` varchar(5) NOT NULL,
  `nmkategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nmkategori`) VALUES
('K0001', 'MOTHERBOARD'),
('K0002', 'RAM'),
('K0003', 'POWER SUPPLY'),
('K0004', 'MOUSE'),
('K0005', 'KEYBOARD'),
('K0006', 'MONITOR'),
('K0007', 'VGA'),
('K0008', 'HDD'),
('K0009', 'PROSESOR'),
('K0010', 'SSD');

-- --------------------------------------------------------

--
-- Table structure for table `merek`
--

CREATE TABLE IF NOT EXISTS `merek` (
  `idmerek` varchar(5) NOT NULL,
  `nmmerek` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `merek`
--

INSERT INTO `merek` (`idmerek`, `nmmerek`) VALUES
('M0001', 'ASUS'),
('M0002', 'VGEN'),
('M0003', 'SAMSUNG'),
('M0004', 'NVIDIA'),
('M0005', 'MSI'),
('M0006', 'SEAGATE'),
('M0007', 'INTEL');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idpelanggan` varchar(5) NOT NULL,
  `nmpelanggan` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nmpelanggan`, `telp`, `alamat`, `email`) VALUES
('P0001', 'MIMIN', '0999', 'JAKARTA', 'HAHA@GMAIL.COM'),
('P0002', 'AA', '09890877', 'CC', 'AA@GMAIL.COM'),
('P0003', 'ZXC', '0823945555322', 'SURAKARTA', 'ZXC@GMAIL.COM'),
('P0004', 'GOG', '08234445322', 'SEMARANG', 'GOG@GG.COM');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idtransaksi` varchar(5) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `totalbayar` int(25) NOT NULL,
  `nmkaryawan` varchar(25) NOT NULL,
  `nmpelanggan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `tgltransaksi`, `totalbayar`, `nmkaryawan`, `nmpelanggan`) VALUES
('T0001', '2016-01-05', 1200008, '', 'MIMIN'),
('T0002', '2016-01-05', 7, 'HAHA', 'AA'),
('T0004', '2016-01-05', 7000000, 'DT', 'ZXC'),
('T0005', '2016-01-06', 700000000, 'MMM', 'GOG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `telepon`, `alamat`, `email`, `jabatan`) VALUES
('OWNER', 'OWNER', 'OWNER', 'OWNER', '012', 'SOLO', 'ASDAS', 'PEMILIK'),
('U0002', 'USER', 'USER', 'USER', '0787887878', 'SOLO', 'lalala@gmail.com', 'KARYAWAN'),
('ZXC', 'ZXC', 'fgg', '123456', '02955566694', 'SOLO', 'ZXC@GMAIL.COM', 'PEMILIK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbrg`);

--
-- Indexes for table `detailtransaksi`
--
ALTER TABLE `detailtransaksi`
  ADD PRIMARY KEY (`iddetail`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`idjabatan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`idmerek`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
