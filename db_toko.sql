-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 10:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pesanan`
--

CREATE TABLE `tbl_detail_pesanan` (
  `id_detail_pesanan` varchar(30) NOT NULL,
  `id_pesanan` varchar(30) NOT NULL,
  `kode_produk` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_pesanan`
--

INSERT INTO `tbl_detail_pesanan` (`id_detail_pesanan`, `id_pesanan`, `kode_produk`, `jumlah`, `harga`) VALUES
('DP-5728a17a72b3a', 'P-5728a17a725e5', 'lptp001', 1, 0),
('DP-5728a17a8544b', 'P-5728a17a725e5', 'lptp002', 1, 0),
('DP-5728a47889e84', 'P-5728a4788947b', 'lptp001', 2, 0),
('DP-5728a478980d1', 'P-5728a4788947b', 'lptp002', 3, 0),
('DP-572a233d756a4', 'P-572a233d4ff40', 'lptp002', 1, 0),
('DP-572a233ddcd13', 'P-572a233d4ff40', 'lptp001', 1, 0),
('DP-572b237c46d4c', 'P-572b237c40df0', 'lptp002', 4, 0),
('DP-572b237c58e7e', 'P-572b237c40df0', 'lptp001', 1, 0),
('DP-572fdf5708e0f', 'P-572fdf56d0a9d', 'lptp03', 10, 0),
('DP-5735175dcfb57', 'P-5735175daf6e1', 'lptp002', 1, 0),
('DP-5735175e0ed0c', 'P-5735175daf6e1', 'lptp03', 4, 0),
('DP-573812dd4be07', 'P-573812dd42249', 'lptp03', 1, 0),
('DP-573812dd62170', 'P-573812dd42249', 'kybrd01', 20, 0),
('DP-573812f5d05e9', 'P-573812f5cff12', 'kybrd01', 23, 0),
('DP-58ad43a4953d6', 'P-58ad43a4953d6', '', 1, 0),
('DP-58ad43a4a0f58', 'P-58ad43a4953d6', 'lptp002', 1, 0),
('DP-58b01292b17f3', 'P-58b01292a5c70', 'lptp002', 2, 0),
('DP-58b01292d795c', 'P-58b01292a5c70', 'kybrd01', 1, 0),
('DP-58b03d3bb4916', 'P-58b03d3bb452e', 'lptp002', 1, 0),
('DP-58b0c82d61139', 'P-58b0c82d60d50', 'kybrd01', 1, 0),
('DP-58b0c860ccedc', 'P-58b0c860ccaf3', 'kybrd01', 1, 0),
('DP-58b0ea8151255', 'P-58b0ea8150891', 'lptp002', 1, 0),
('DP-58b108dca9536', 'P-58b108dca9536', 'kybrd01', 2, 0),
('DP-58b11cffc9d55', 'P-58b11cffc996d', 'kybrd01', 1, 0),
('DP-58b128dd09a51', 'P-58b128dd09669', 'hdsk200', 1, 0),
('DP-58b1295040ef5', 'P-58b1295040ef5', 'kybrd01', 1, 0),
('DP-58b129e5ddae2', 'P-58b129e5dd6fa', 'kybrd01', 1, 0),
('DP-58b12a8fca1f2', 'P-58b12a8fca1f2', 'kybrd01', 1, 0),
('DP-58b12dcbaf255', 'P-58b12dcbaf255', 'hdsk200', 1, 0),
('DP-58b12de3e01ed', 'P-58b12de3dfe05', 'vga345', 1, 0),
('DP-58b144b468db7', 'P-58b144b4683f3', 'lptp001', 1, 0),
('DP-58b14b1789363', 'P-58b14b1788f7b', 'hdsk200', 3, 0),
('DP-58b14b17af0e4', 'P-58b14b1788f7b', 'vga345', 3, 0),
('DP-58b14b34cfa6d', 'P-58b14b34c4aa4', 'kybrd01', 1, 0),
('DP-58b14b48b754a', 'P-58b14b48b6b86', 'ram101', 1, 0),
('DP-58b14b9c8549e', 'P-58b14b9c8549e', 'kybrd01', 1, 0),
('DP-58b14b9c95c4b', 'P-58b14b9c8549e', 'hdsk200', 1, 0),
('DP-58b14b9ca9e90', 'P-58b14b9c8549e', 'vga345', 1, 0),
('DP-58b14c26e1fbb', 'P-58b14c26e1fbb', 'kybrd01', 1, 0),
('DP-58b14d4f97082', 'P-58b14d4f96c9a', 'kybrd01', 1, 0),
('DP-58b14d4fa5ae5', 'P-58b14d4f96c9a', 'hdsk200', 1, 0),
('DP-58b14d4fb60a1', 'P-58b14d4f96c9a', 'vga345', 1, 0),
('DP-5e9ef8dbdad1f', 'P-5e9ef8dbdab00', 'kybrd01', 1, 0),
('DP-5e9ef96b52548', 'P-5e9ef96b523ea', 'kybrd01', 1, 0),
('DP-5e9ef98dd4ab2', 'P-5e9ef98dd48f9', 'hdsk200', 1, 0),
('DP-5e9efd686b179', 'P-5e9efd686aed8', 'kybrd01', 1, 0),
('DP-5e9efd9e8de12', 'P-5e9efd9e8dc6a', '64564', 1, 0),
('DP-5e9efe4ae8947', 'P-5e9efe4ae8787', '64564', 1, 0),
('DP-5e9efed91f9f7', 'P-5e9efed91f841', '64564', 1, 0),
('DP-5e9efeff55412', 'P-5e9efeff55222', '64564', 1, 0),
('DP-5e9f000455015', 'P-5e9f000454e82', '64564', 4, 0),
('DP-5e9f002151b1f', 'P-5e9f00215184e', '64564', 1, 0),
('DP-5e9f006ebf54b', 'P-5e9f006ebf387', 'kybrd01', 1, 0),
('DP-5e9f0ac5b64e7', 'P-5e9f0ac5b6319', 'vga345', 1, 0),
('DP-5ea03664bef0e', 'P-5ea03664bed49', '1213', 3, 0),
('DP-5ea03fb4a3913', 'P-5ea03fb4a374a', '64564', 1, 0),
('DP-5ea0406195411', 'P-5ea040619522d', '64564', 1, 0),
('DP-5ea044c3884cc', 'P-5ea044c38809b', '1213', 1, 0),
('DP-5eb5563182360', 'P-5eb556318204d', '1832', 1, 0),
('DP-5eb564fbe2948', 'P-5eb564fbe2588', '9863', 2, 0),
('DP-5ee2e596144f9', 'P-5ee2e59612d3b', '7352', 1, 0),
('DP-5ef474d3a04ed', 'P-5ef474d3a030a', '1832', 1, 0),
('DP-5ef474d3a6dbe', 'P-5ef474d3a030a', '6342', 4, 0),
('DP-5ef61f40db4eb', 'P-5ef61f40db2e4', '1832', 1, 120000),
('DP-5ef9973b885b0', 'P-5ef9973b88337', '9863', 1, 95000),
('DP-5ef9988220d4c', 'P-5ef9988220b4d', '1334', 1, 47000),
('DP-5ef9a573bf4f4', 'P-5ef9a573bf2b9', '1334', 1, 47000),
('DP-5ef9a573c2853', 'P-5ef9a573bf2b9', '7352', 3, 80000),
('DP-5f02dde532464', 'P-5f02dde532222', '6342', 3, 60000),
('DP-5f02dde537fe0', 'P-5f02dde532222', '7352', 2, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `jenis_barang`) VALUES
(1, 'Horor'),
(2, 'Fantasi'),
(3, 'Romance'),
(4, 'Action'),
(5, 'Jurnal'),
(6, 'Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `kode_produk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesanan`
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
('P-5e9f000454e82', 24, 'Belum Dikirim', '2020-04-21', '64564'),
('P-5e9f00215184e', 24, 'Belum Dikirim', '2020-04-21', '64564'),
('P-5e9f006ebf387', 24, 'Belum Dikirim', '2020-04-21', 'kybrd01'),
('P-5ea03664bed49', 25, 'Sudah Terkirim', '2020-04-22', '1213'),
('P-5ea03fb4a374a', 25, 'Belum Dikirim', '2020-04-22', '64564'),
('P-5ea040619522d', 25, 'Belum Dikirim', '2020-04-22', '64564'),
('P-5ea044c38809b', 25, 'Belum Dikirim', '2020-04-22', '1213'),
('P-5ef9973b88337', 24, 'Sudah Terkirim', '2020-06-29', '9863'),
('P-5ef9988220b4d', 24, 'Sudah Terkirim', '2020-06-29', '1334'),
('P-5f02dde532222', 28, 'Sudah Terkirim', '2020-07-06', '6342');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poling`
--

CREATE TABLE `tbl_poling` (
  `id_user` int(11) NOT NULL,
  `opsi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_poling`
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
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kode_produk` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `gambar` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(22) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`kode_produk`, `nama`, `pengarang`, `id_jenis`, `gambar`, `deskripsi`, `harga`, `jumlah`) VALUES
('1334', 'Pendidikan Karakter', 'Ki Hadjar Dewantara', 6, 'gambar/dawySdYbWJDh_1588870450.jpg', 'Manusia adalah makhluk sosial. Dia membutuhkan orang lain untuk bisa meraih kebahagiaan. Dan kebahagiaan itu dapat diraih manusia dengan ketakwaannya dan kemuliaan karakternya. Dunia pendidikan sebagai lembaga pendidik manusia memiliki tanggungjawab besar dalam pembentukan karakter anak bangsa. Dan buku ini bisa menjadi jalan petunjuk bagi siapapun yang ingin memahami pendidikan karakter. Baik itu guru, siswa, mahasiswa, orang tua, para akademisi pendidikan lainnya bahkan masyarakat umumpun layak mengkonsumsi buku ini. Buku ini menyajikan pemikiran dua tokoh akhlaq atau karakter yaitu Ibnu Miskawayh dan Ki Hajar Dewantara. Ibnu Miskawayh seorang Muslim yang menitikberatkan landasan pendidikan karaktertnya pada Islam. Adapun Ki Hajar Dewantara menitikberatkan landasan pendidikan karakternya pada adat budaya bangsa Indonesia. Dua tokoh ini bisa menjadi representasi dunia pendidikan Indonesia yang terpecah menjadi dua yaitu pendidikan umum di bawah naungan Kementrian Pendidikan dan pendidikan Islam di bawah naungan Kementrian Agama. Dengan membaca buku ini insyaAllah anda akan mendapatkan pemahaman tentang konsep pendidikan karakter kedua tokoh tersebut.', 100000, 28),
('1832', 'Harry Potter and The Cursed Child', 'Jack Thorne', 2, 'gambar/hwyaSYbWJdDd_1588869680.jpg', 'Sinopsis :\r\nMenjadi Harry Potter memang sulit dan sekarang pun tidak lebih mudah ketika ia menjadi pegawai Kementerian Sihir yang kelelahan, suami, dan ayah tiga anak usia sekolah.\r\nSementara Harry berjuang menghadapi masa lalu yang mengikutinya, putra bungsunya, Albus, harus berjuang menghadapi beban warisan keluarga yang tak pernah ia inginkan.\r\nKetika masa lalu dan masa sekarang melebur, ayah dan anak pun mengetahui fakta yang tidak menyenangkan: terkadang kegelapan datang dari tempat-tempat yang tak terduga.', 50000, 47),
('6342', 'Dilan 1990', 'Pidi Baiq', 3, 'gambar/dhDayYbWwSdJ_1588870106.jpg', 'Novel ini berceritakan tentang seorang remaja, bernama bernama Dilan, dia juga seorang geng motor. Anak ini nakal, namun dari sisi lain ada hal yang sangat positif darinya. Suatu saat dia jatuh cinta kepada perempuan anak baru di sekolahnya, yang bernama Milea. Anak gadis ini awalnya bingung cara bagaimana dilan berkenalan degan Milea.', 60000, 113),
('7352', 'Jurnal Risa (Teror Liburan Sekolah)', 'Risa Saraswati', 5, 'gambar/ddbDYSJawyWh_1588869946.jpg', 'Ini adalah cerita kami kecil, di musim libur sekolah yang menyenangkan. Ketika aku, A Angga, Nicko, Kakang, dan Riri untuk kali pertama berterus terang dan bertualang dengan â€˜kemampuanâ€™ kami.\r\nTidak pernah sedikit pun terpikir, ini adalah sebuah awal yang perlahan membentuk karakter kami. Sekumpulan penakut yang mau tak mau menjadi berani karena tak bisa menutup mata dan telinga dari teror mereka.\r\n-Risa Saraswati-', 80000, 94),
('8363', 'Kisah Tanah Jawa', '@kisahtanahjawa', 1, 'gambar/dSdJbYyDhwWa_1588870214.jpg', 'Tanah Jawa menyimpan banyak kisah misteri yang takkan habis diceritakan dalam semalam. Sosok misterius, ritual mistis, dan tempat angker, selalu membuat kita penasaran. Buku Kisah Tanah Jawa mengajak pembaca membuka selubung mitos dan mistis yang selama ini hanya menjadi kasak-kusuk di masyarakat.', 70000, 80),
('9863', 'Into The Water', 'Paula Hawkins', 4, 'gambar/bhYSDadwJyWd_1588869813.jpg', 'Sinopsis :\r\nungai itu indah. Penampilan yang menipu, karena sebenarnya, itu adalah tempat paling mematikan di seluruh penjuru kota. Airnya yang gelap dan dingin menyembunyikan apa yang ada di bawahnya ...\r\nSalah satu sudutnya, dikelilingi tebing batu tinggi yang menggodamu melongok ke tepi, selama berabad-abad telah merenggut banyak nyawa. Semuanya perempuan. Kebanyakan tidak bernama, tidak berwajah. Sungai itu memikat mereka yang tidak beruntung, yang putus asa, yang tidak bahagia, yang tersesat, agar datang ke sana. Mereka menyebutnya Kolam Penenggelaman.\r\nKini sungai itu kembali menelan korban: Nel Abbot, wanita yang bertekad untuk menyingkap rahasia sungai itu dan menuliskan kisah-kisahnya. Kali ini, semua ornag mendapat kesempatan untuk mencari tahu penyebabnya, alasannya: kenapa dan bagaimana? Apakah dia jatuh? Apakah dia bunuh diri? Apakah dia  dibunuh?', 100000, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_pesanan`
--

CREATE TABLE `tbl_temp_pesanan` (
  `id_temp_pesanan` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `blokir` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`, `email`, `no_telepon`, `alamat`, `blokir`) VALUES
(24, 'rayhan', 'rayhan', '123', 'anu', '1', 'Jln. Alamat Lengkap', 0),
(25, 'tayo', 'tayo', '123', 'tayo@gmail.com', '083857577562', 'Jln. Bulak Banteng 5 No 70', 0),
(26, 'coba1', 'coba1', '123', 'coba@gmail.com', '08372524364', 'Jl. Coba 4/17', 0),
(27, 'coba2', 'coba2', '123', 'coba2', '9231813712', 'coba2', 0),
(28, 'buku', 'buku', '123', 'buku@gmail.com', '083762635', 'Buku', 0);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_temp_pesanan`
--
ALTER TABLE `tbl_temp_pesanan`
  MODIFY `id_temp_pesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
