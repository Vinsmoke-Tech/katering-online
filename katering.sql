-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 04:06 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katering`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti`
--

CREATE TABLE `bukti` (
  `id_bukti` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `upload` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `aksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti`
--

INSERT INTO `bukti` (`id_bukti`, `kode`, `metode`, `upload`, `status`, `aksi`) VALUES
(1, 'BKT005', 'COD', 'bukti1.pdf', ' lunas', 'sedang di proses'),
(2, 'BKT006', 'ATx', 'tiket3.pdf', 'belum lunas', 'sedang di proses'),
(3, 'BKT007', 'ATx', 'bukti1.pdf', 'belum lunas', ''),
(4, 'BKT008', 'COD', '', 'belum lunas', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`, `level`) VALUES
(1, 'user@gmail.com', '123', 'user'),
(2, 'apry@gmail.com', '123', 'user'),
(3, 'admin@gmail.com', '123', 'admin'),
(4, 'bagas@gmail.com', '123', 'user'),
(5, 'daffa@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_men` varchar(25) NOT NULL,
  `ket` varchar(20) NOT NULL,
  `harga_men` varchar(20) NOT NULL,
  `foto_men` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_men`, `ket`, `harga_men`, `foto_men`) VALUES
(1, 'risol', 'risol mayo', '1000', 'menu-2.jpg'),
(2, 'dimsum', 'dimsum enak', '3000', 'dish-4.png'),
(3, 'sosis', 'sosis ayam', '5000', 'dish-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_pak` varchar(20) NOT NULL,
  `keterangan` varchar(25) NOT NULL,
  `harga_pak` varchar(15) NOT NULL,
  `foto_pak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_pak`, `keterangan`, `harga_pak`, `foto_pak`) VALUES
(1, 'paket 7', 'ayam', '10000', 'dish-1.png'),
(2, 'paket 2', 'nasi kuning', '20000', 'home-img-1.png'),
(3, 'paket 3', 'tahu', '30000', 'resol.jpg'),
(4, 'paket 4', 'nasi kuning', '40000', 'bagas1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `no_pesan` varchar(25) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `status_pesanan` varchar(20) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL,
  `metode_pengambilan` varchar(15) NOT NULL,
  `tharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'daffa', 4, 'daffa', 1655095800),
(2, 'kevin', 3, 'nice', 1655097899),
(3, 'bagas', 1, 'hahaha', 1655101472),
(4, 'fito', 1, 'tidak ramah\n', 1655101494),
(5, 'apry', 2, 'tidak ramah\n', 1655101508),
(6, 'arif', 5, 'nice', 1655101526),
(7, 'daffa', 1, 'penjual tidak ramah', 1655275075);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tanggal_ambil` date DEFAULT NULL,
  `qty` int(20) NOT NULL,
  `nama_pak` varchar(25) NOT NULL,
  `harga_pak` varchar(15) NOT NULL,
  `tharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pelanggan`, `alamat`, `tanggal_ambil`, `qty`, `nama_pak`, `harga_pak`, `tharga`) VALUES
(1, 'arif', 'solo', '2022-06-11', 21, 'paket 2', '20000', 420000),
(2, 'arif', 'solo', '2022-06-16', 22, 'paket 7', '20000', 440000),
(3, 'arif', 'solo', '2022-06-24', 22, 'paket 2', '20000', 440000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_menu`
--

CREATE TABLE `transaksi_menu` (
  `id_tmen` int(11) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(15) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `qty` int(11) NOT NULL,
  `nama_men` varchar(20) NOT NULL,
  `harga_men` varchar(15) NOT NULL,
  `tharga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_menu`
--

INSERT INTO `transaksi_menu` (`id_tmen`, `nama_pelanggan`, `alamat`, `tanggal_ambil`, `qty`, `nama_men`, `harga_men`, `tharga`) VALUES
(1, 'arif', 'solo', '2022-06-11', 44, 'sosis', '5000', '220000'),
(2, 'arif', 'solo', '2022-06-17', 22, 'dimsum', '3000', '66000'),
(3, 'arif', 'solo', '2022-06-22', 20, 'dimsum', '3000', '60000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `kd_pos` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `nohp`, `kd_pos`) VALUES
(1, 'Daffa', 'solo', '0815626', '1234'),
(2, 'arif', 'solo', '08913738', '71116'),
(4, 'daffa ariftama hanaris', 'mojosongo', '08967067442', '1234'),
(5, 'gregorius baga', 'dempo', '08933939', '22929');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD UNIQUE KEY `id_paket` (`id_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_menu`
--
ALTER TABLE `transaksi_menu`
  ADD PRIMARY KEY (`id_tmen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_menu`
--
ALTER TABLE `transaksi_menu`
  MODIFY `id_tmen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
