-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Feb 2017 pada 07.03
-- Versi Server: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_pesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_pesanan` (
  `id_detail_pesanan` varchar(30) NOT NULL,
  `id_pesanan` varchar(30) NOT NULL,
  `kode_produk` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_pesanan`
--

INSERT INTO `tbl_detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `kode_produk`, `jumlah`) VALUES
('DP-5728a17a72b3a', 'P-5728a17a725e5', 'lptp001', 1),
('DP-5728a17a8544b', 'P-5728a17a725e5', 'lptp002', 1),
('DP-5728a47889e84', 'P-5728a4788947b', 'lptp001', 2),
('DP-5728a478980d1', 'P-5728a4788947b', 'lptp002', 3),
('DP-572a233d756a4', 'P-572a233d4ff40', 'lptp002', 1),
('DP-572a233ddcd13', 'P-572a233d4ff40', 'lptp001', 1),
('DP-572b237c46d4c', 'P-572b237c40df0', 'lptp002', 4),
('DP-572b237c58e7e', 'P-572b237c40df0', 'lptp001', 1),
('DP-572fdf5708e0f', 'P-572fdf56d0a9d', 'lptp03', 10),
('DP-5735175dcfb57', 'P-5735175daf6e1', 'lptp002', 1),
('DP-5735175e0ed0c', 'P-5735175daf6e1', 'lptp03', 4),
('DP-573812dd4be07', 'P-573812dd42249', 'lptp03', 1),
('DP-573812dd62170', 'P-573812dd42249', 'kybrd01', 20),
('DP-573812f5d05e9', 'P-573812f5cff12', 'kybrd01', 23),
('DP-58ad43a4953d6', 'P-58ad43a4953d6', '', 1),
('DP-58ad43a4a0f58', 'P-58ad43a4953d6', 'lptp002', 1),
('DP-58b01292b17f3', 'P-58b01292a5c70', 'lptp002', 2),
('DP-58b01292d795c', 'P-58b01292a5c70', 'kybrd01', 1),
('DP-58b03d3bb4916', 'P-58b03d3bb452e', 'lptp002', 1),
('DP-58b0c82d61139', 'P-58b0c82d60d50', 'kybrd01', 1),
('DP-58b0c860ccedc', 'P-58b0c860ccaf3', 'kybrd01', 1),
('DP-58b0ea8151255', 'P-58b0ea8150891', 'lptp002', 1),
('DP-58b108dca9536', 'P-58b108dca9536', 'kybrd01', 2),
('DP-58b11cffc9d55', 'P-58b11cffc996d', 'kybrd01', 1),
('DP-58b128dd09a51', 'P-58b128dd09669', 'hdsk200', 1),
('DP-58b1295040ef5', 'P-58b1295040ef5', 'kybrd01', 1),
('DP-58b129e5ddae2', 'P-58b129e5dd6fa', 'kybrd01', 1),
('DP-58b12a8fca1f2', 'P-58b12a8fca1f2', 'kybrd01', 1),
('DP-58b12dcbaf255', 'P-58b12dcbaf255', 'hdsk200', 1),
('DP-58b12de3e01ed', 'P-58b12de3dfe05', 'vga345', 1),
('DP-58b144b468db7', 'P-58b144b4683f3', 'lptp001', 1),
('DP-58b14b1789363', 'P-58b14b1788f7b', 'hdsk200', 3),
('DP-58b14b17af0e4', 'P-58b14b1788f7b', 'vga345', 3),
('DP-58b14b34cfa6d', 'P-58b14b34c4aa4', 'kybrd01', 1),
('DP-58b14b48b754a', 'P-58b14b48b6b86', 'ram101', 1),
('DP-58b14b9c8549e', 'P-58b14b9c8549e', 'kybrd01', 1),
('DP-58b14b9c95c4b', 'P-58b14b9c8549e', 'hdsk200', 1),
('DP-58b14b9ca9e90', 'P-58b14b9c8549e', 'vga345', 1),
('DP-58b14c26e1fbb', 'P-58b14c26e1fbb', 'kybrd01', 1),
('DP-58b14d4f97082', 'P-58b14d4f96c9a', 'kybrd01', 1),
('DP-58b14d4fa5ae5', 'P-58b14d4f96c9a', 'hdsk200', 1),
('DP-58b14d4fb60a1', 'P-58b14d4f96c9a', 'vga345', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis`
--

CREATE TABLE IF NOT EXISTS `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `jenis_barang`) VALUES
(1, 'Laptop'),
(2, 'Proyektor'),
(3, 'Keyboard'),
(4, 'RAM'),
(5, 'Hardisk'),
(6, 'VGA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesanan` (
  `id_pesanan` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `kode_produk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id_pesanan`, `id_user`, `status`, `tanggal_pesanan`, `kode_produk`) VALUES
('P-572b237c40df0', 16, 'Sudah Terkirim', '2016-05-05', ''),
('P-573812dd42249', 16, 'Belum Dikirim', '2016-05-15', ''),
('P-573812f5cff12', 17, 'Belum Dikirim', '2016-05-15', ''),
('P-58ad3b3c8993c', 0, 'Belum Dikirim', '2017-02-22', ''),
('P-58b0c82d60d50', 19, 'Sudah Terkirim', '2017-02-25', ''),
('P-58b0c860ccaf3', 19, 'Belum Dikirim', '2017-02-25', ''),
('P-58b0ea8150891', 22, 'Sudah Terkirim', '2017-02-25', ''),
('P-58b108dca9536', 22, 'Belum Dikirim', '2017-02-25', ''),
('P-58b11cffc996d', 22, 'Belum Dikirim', '2017-02-25', ''),
('P-58b1295040ef5', 22, 'Belum Dikirim', '2017-02-25', ''),
('P-58b129e5dd6fa', 22, 'Belum Dikirim', '2017-02-25', ''),
('P-58b12a8fca1f2', 22, 'Sudah Terkirim', '2017-02-25', 'kybrd01'),
('P-58b14b9c8549e', 22, 'Sudah Terkirim', '2017-02-25', 'kybrd01'),
('P-58b14d4f96c9a', 23, 'Belum Dikirim', '2017-02-25', 'kybrd01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_poling`
--

CREATE TABLE IF NOT EXISTS `tbl_poling` (
  `id_user` int(11) NOT NULL,
  `opsi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_poling`
--

INSERT INTO `tbl_poling` (`id_user`, `opsi`) VALUES
(2, 1),
(7, 0),
(8, 1),
(11, 0),
(12, 1),
(13, 1),
(15, 0),
(16, 1),
(17, 1),
(19, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE IF NOT EXISTS `tbl_produk` (
  `kode_produk` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(22) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama`, `id_jenis`, `gambar`, `deskripsi`, `harga`, `jumlah`) VALUES
('hdsk200', 'Dell Hardisk External 1TB Slim', 5, 'gambar/WJhdbSdaywYD_1487977491.jpg', 'Desainnya yang tipis dan memiki kapasitas yang cukup besar untuk menyimpan file', 850000, 13),
('kybrd01', 'Black Widow Chroma', 3, 'gambar/bdySahWwdYDJ_1463220226.jpg', 'Mulus\r\nmurah\r\nberkualitas\r\ndari luar negeri', 1200000, 7),
('lptp001', 'Lenovo G475', 1, 'gambar/SaDhWwJbdYyd_1463129148.jpg', 'Mulus\r\nOri 100%', 2000000, 4),
('lptp002', 'Acer Aspire', 1, 'gambar/SDYaywdWJhbd_1463129174.jpg', 'Bagus\r\nOke\r\nMulus\r\nOri 100%', 3500000, 0),
('ram101', 'Intel Nuc 2GB DDR3', 4, 'gambar/YJSdyWdahwDb_1487977279.jpg', 'Barang oke untuk yang membutuhkan RAM', 700000, 9),
('vga345', 'Gigabyte 2G GTX 950 WINDFORCE OC', 6, 'gambar/SwyJdbahdWDY_1487977932.jpg', 'cocok untuk yang suka ngegame', 200000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_temp_pesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_temp_pesanan` (
  `id_temp_pesanan` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `blokir` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `email`, `no_telepon`, `alamat`, `blokir`) VALUES
(19, 'budi', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'budies.bs@gmail.com', '088217510367', 'jl. simo', 0),
(22, 'hello', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'budianduk12342@yahoo.com', '877676868768', 'jl. jalan', 0),
(23, 'izul', 'izul', '9336339511292fcd57ad9514ad53e473', 'budies.bs@gmail.com', '088217510367', 'jl. Gresik', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_poling`
--
ALTER TABLE `tbl_poling`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tbl_temp_pesanan`
--
ALTER TABLE `tbl_temp_pesanan`
  ADD PRIMARY KEY (`id_temp_pesanan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_temp_pesanan`
--
ALTER TABLE `tbl_temp_pesanan`
  MODIFY `id_temp_pesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
