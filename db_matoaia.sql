-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220427.b008cca95d
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2022 pada 06.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_matoaia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'ee61e766467546320854c3446ccde3d4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `kode` int(11) NOT NULL,
  `nama_bahan` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`kode`, `nama_bahan`, `stock`) VALUES
(1, 'Kayu Surian', 16),
(2, 'Kayu Bayur', 33),
(3, 'Kayu Borneo', 7),
(4, 'Kayu Timbalun', 46),
(5, 'Kayu Mahoni', 12),
(6, 'Multiplex 9mm', 9),
(7, 'Multiplex 12mm', 17),
(8, 'Multiplex 15mm', 19),
(9, 'HPL', 28),
(10, 'Tacosit', 23),
(11, 'Lem Fox', 0),
(12, 'Lem Prima D', 3),
(13, 'Lem 168', 2),
(14, 'Lem Fortebon', 5),
(15, 'Cat Impra', 12),
(16, 'Cat Boyo', 15),
(17, 'Cat Avian', 3),
(18, 'Cat Dulux', 2),
(19, 'Cat Laba-laba', 22),
(20, 'Paku Tembak F20', 8),
(21, 'Paku Tembak F25', 9),
(22, 'Paku Tembak F30', 9),
(23, 'Paku Biasa 1 inch', 4),
(24, 'Paku Biasa 2 inch', 4),
(25, 'Paku Biasa 3 inch', 4),
(26, 'Paku Biasa 4 inch', 4),
(27, 'Amplas Rol', 10),
(28, 'Amplas Bulat', 29),
(29, 'Amplas Tempel', 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulan`
--

CREATE TABLE `bulan` (
  `kode` char(2) CHARACTER SET latin1 NOT NULL,
  `nama_bulan` varchar(15) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bulan`
--

INSERT INTO `bulan` (`kode`, `nama_bulan`) VALUES
('01', 'Januari'),
('02', 'Februari'),
('03', 'Maret'),
('04', 'April'),
('05', 'Mei'),
('06', 'Juni'),
('07', 'Juli'),
('08', 'Agustus'),
('09', 'September'),
('10', 'Oktober'),
('11', 'November'),
('12', 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_user`, `username`, `password`) VALUES
(1, 'gudang', '984b3e4ffc385f1beeeb5aa07fa25f81');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori_pendapatan`
--

CREATE TABLE `histori_pendapatan` (
  `idx` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `kode_bulan` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `jml_penjualan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `histori_pendapatan`
--

INSERT INTO `histori_pendapatan` (`idx`, `tahun`, `kode_bulan`, `jml_penjualan`) VALUES
(1, 2020, '01', 15),
(2, 2020, '02', 16),
(3, 2020, '03', 23),
(4, 2020, '04', 19),
(7, 2020, '07', 26),
(8, 2020, '08', 29),
(9, 2020, '09', 31),
(10, 2020, '10', 35),
(11, 2020, '11', 37),
(12, 2020, '12', 11),
(13, 2021, '01', 14),
(14, 2021, '02', 15),
(15, 2021, '03', 22),
(16, 2021, '04', 18),
(17, 2021, '05', 20),
(18, 2021, '06', 24),
(19, 2021, '07', 27),
(20, 2021, '08', 30),
(21, 2021, '09', 30),
(22, 2021, '10', 33),
(23, 2021, '11', 35),
(24, 2021, '12', 9),
(25, 2020, '05', 21),
(28, 2020, '06', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_user`, `username`, `password`) VALUES
(1, 'karyawan', '8d7219f5842ae2941e3cd31480f54caa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `id_keluar` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode_bahan` int(11) NOT NULL,
  `jml_terpakai` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`id_keluar`, `tanggal`, `kode_bahan`, `jml_terpakai`, `keterangan`) VALUES
(53, '2022-07-12 02:24:11', 1, 4, '200x2x15=3\r\n200x3x18=1                    '),
(54, '2022-07-12 02:24:52', 2, 12, '200x3x10=5\r\n200x4x15=7                    '),
(55, '2022-07-12 02:25:14', 3, 5, '400x5x10=5                    '),
(56, '2022-07-12 02:25:46', 4, 24, '3x4x4=12\r\n4x6x4=12                    '),
(57, '2022-07-12 02:26:37', 5, 15, '200x2x15=5\r\n200x3x18=10                    '),
(58, '2022-07-12 02:27:10', 6, 4, '60x40=3\r\n122x244=1                    '),
(59, '2022-07-12 02:27:41', 7, 6, '20x30=3\r\n122x244=3                    '),
(60, '2022-07-12 02:28:52', 8, 13, '60x40=6\r\n40x30=7                    '),
(61, '2022-07-12 02:29:54', 9, 22, 'Taco=13\r\nEco=9                    '),
(62, '2022-07-12 02:30:14', 10, 7, 'Ukuran 100                    '),
(63, '2022-07-12 02:30:24', 11, 5, 'Ukuran 1kg                    '),
(64, '2022-07-12 02:30:32', 12, 2, 'Ukuran 2,5kg                    '),
(65, '2022-07-12 02:30:40', 13, 1, 'Ukuran 10kg                    '),
(66, '2022-07-12 02:30:47', 14, 5, 'Ukuran 650ml                    '),
(67, '2022-07-12 02:30:56', 15, 8, 'Ukuran 1L                    '),
(68, '2022-07-12 02:31:02', 16, 5, 'Ukuran 1L                    '),
(69, '2022-07-12 02:31:09', 17, 2, 'Cat minyak 1kg                    '),
(70, '2022-07-12 02:31:15', 18, 1, 'Ukuran 5kg                    '),
(71, '2022-07-12 02:31:22', 19, 1, 'Ukuran 1kg                    '),
(72, '2022-07-12 02:31:30', 20, 2, 'Per kotak                    '),
(73, '2022-07-12 02:31:38', 21, 1, 'Per kotak                    '),
(74, '2022-07-12 02:31:47', 22, 1, 'Per kotak                    '),
(75, '2022-07-12 02:32:03', 23, 1, 'Per kilo                    '),
(76, '2022-07-12 02:32:17', 24, 1, 'Per kilo                    '),
(77, '2022-07-12 02:32:22', 25, 1, 'Per kilo                    '),
(78, '2022-07-12 02:32:28', 26, 1, 'Per kilo                    '),
(79, '2022-07-12 02:32:35', 27, 5, 'Per gulungan                    '),
(80, '2022-07-12 02:32:41', 28, 21, 'Per lembar                    '),
(81, '2022-07-12 02:32:46', 29, 11, 'Per lembar                    ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id_masuk` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode_bahan` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `jml_tambah` int(11) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `bukti_transaksi` varchar(256) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id_masuk`, `tanggal`, `kode_bahan`, `supplier`, `jml_tambah`, `keterangan`, `bukti_transaksi`, `status`) VALUES
(80, '2022-07-12 01:24:20', 1, 'Toko TND', 20, '200x2x15=10 200x3x18=10                    ', '19056157862ce6a18f1c635.50197472.jpg', '1'),
(81, '2022-07-12 01:25:36', 3, 'Andriko Bangunan', 12, '400x5x10=12                    ', '205285290762ce6a422025a1.25336784.jpg', '1'),
(82, '2022-07-12 01:26:49', 2, 'Pak Katik', 45, '200x3x10=25 200x4x15=20                    ', '56603104762ce6a57d1f184.73941323.jpg', '1'),
(83, '2022-07-12 01:28:05', 4, 'Toko TND', 70, '3x4x4=40 4x6x4=30                    ', '41626721062ce6a8d4d86f3.04188763.jpg', '1'),
(84, '2022-07-12 01:29:15', 5, 'Pak Reno', 27, '200x2x15=12 200x3x18=15                    ', '95063131462ce6aa2740895.64206250.jpg', '1'),
(85, '2022-07-12 01:30:33', 6, 'Sentosa Abadi', 13, '60x40=8 122x244=5                    ', '131995275462ce6ab503d881.80021119.jpg', '1'),
(86, '2022-07-12 01:31:25', 7, 'Sentosa Abadi', 23, '20x30=15 122x244=8                    ', '191862597962ce6ad0e3b927.58389401.jpg', '1'),
(87, '2022-07-12 01:32:24', 8, 'Sentosa Abadi', 32, '60x40=12 40x30=20                    ', '107968628462ce6ae4299275.83331053.jpg', '1'),
(88, '2022-07-12 01:34:08', 9, 'Karya', 50, 'Taco=25 Eco=25                    ', '161791684562ce6af4c28bc3.16943672.jpg', '1'),
(89, '2022-07-12 01:34:36', 10, 'GDR Interior', 30, 'Ukuran 100                    ', '58449445662ce6b05dbd560.35468163.jpg', '1'),
(90, '2022-07-12 01:35:00', 11, 'Central Tukang', 5, 'Ukuran 1kg                    ', '156876897962ce6b19b68933.28392297.jpg', '1'),
(91, '2022-07-12 01:35:28', 12, 'Central Tukang', 5, 'Ukuran 2,5kg                    ', '27914049962ce6b55c7f2a5.42800051.jpg', '1'),
(92, '2022-07-12 01:35:55', 13, 'Central Tukang', 3, 'Ukuran 10kg                    ', '133997535262ce6b68203237.55940915.jpg', '1'),
(93, '2022-07-12 01:36:20', 14, 'Central Tukang', 10, 'Ukuran 650ml                    ', '170441401062ce6b77786b40.83860971.jpg', '1'),
(94, '2022-07-12 01:36:50', 15, 'Panama Bangunan', 20, 'Ukuran 1L                    ', '119421267762ce6b86696784.26911137.jpg', '1'),
(95, '2022-07-12 01:37:24', 16, 'Panama Bangunan', 20, 'Ukuran 1L                    ', '66026962862ce6b972a7b05.61293742.jpg', '1'),
(96, '2022-07-12 01:37:55', 17, 'Panama Bangunan', 5, 'Cat minyak 1kg                    ', '77638615562ce6ba8e59903.11925074.jpg', '1'),
(97, '2022-07-12 01:38:17', 18, 'Toko Layarmas', 3, 'Ukuran 5kg                    ', '120353730262ce6bbed7e0a1.30981241.jpg', '1'),
(98, '2022-07-12 01:59:09', 19, 'Toko Layarmas', 3, 'Ukuran 1kg                    ', '136375843262ce6be106c401.76935011.jpg', '1'),
(99, '2022-07-12 01:59:37', 20, 'Piliang Baru', 10, 'Per kotak                    ', '72659431662ce6bf2b84556.39571682.jpg', '1'),
(100, '2022-07-12 02:00:08', 21, 'Piliang Baru', 10, 'Per kotak               ', '60320207962ce6bfeb156c7.20967987.jpg', '1'),
(101, '2022-07-12 02:01:10', 22, 'Piliang Baru', 10, 'Per kotak                  ', '97575676562ce6c0c7020a2.00437663.jpg', '1'),
(102, '2022-07-12 02:02:12', 23, 'GDR Interior', 5, 'Per kilo                    ', '149764682562ce6c1f722215.12286927.jpg', '1'),
(103, '2022-07-12 02:02:28', 24, 'GDR Interior', 5, 'Per kilo                   ', '91907666662ce6c2e830a31.70080776.jpg', '1'),
(104, '2022-07-12 02:02:48', 25, 'GDR Interior', 5, 'Per kilo                 ', '34105876362ce6c3ace4a35.32368621.jpg', '1'),
(105, '2022-07-12 02:03:04', 26, 'GDR Interior', 5, 'Per kilo              ', '6895632762ce6c4740c0a9.18680114.jpg', '1'),
(106, '2022-07-12 02:03:35', 27, 'Toko DW', 15, 'Per gulungan                    ', '164780320462ce6c5747f783.77822553.jpg', '1'),
(107, '2022-07-12 02:04:10', 28, 'Toko DW', 50, 'Per lembar                  ', '154767013762ce6c66eaada6.92421938.jpg', '1'),
(108, '2022-07-12 02:04:31', 29, 'Toko DW', 50, 'Per lembar              ', '193047929662ce6c72a4b7f2.05773981.jpg', '1'),
(117, '2022-08-01 04:35:35', 1, 'Toko TND', 7, '6x15x3=6\r\n6x15x2=1                    ', '79163381662e7581760d730.51441951.jpeg', '0'),
(118, '2022-08-01 04:37:19', 3, 'Toko TND', 22, '6x15x4=4\r\n6x15x3=6\r\n6x15x2=10\r\n8x15x4=2                    ', '16062469962e7587f1bc384.94280300.jpeg', '0'),
(119, '2022-08-01 04:38:27', 13, 'GDR Interior', 1, 'Ukuran 10kg                    ', '203008259962e758c3970bb4.63879052.jpeg', '0'),
(120, '2022-08-01 04:39:16', 27, 'Sentosa Abadi', 5, 'Per gulungan                    ', '171290418462e758f49436d9.90907428.jpg', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_user` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_user`, `nama_supplier`, `username`, `password`, `alamat`) VALUES
(11, 'Toko TND', 'toko_tnd', '3ad4215b2c9fcd8a5503a1a3a0fb8f42', 'Padang Panjang'),
(12, 'UD Berkah', 'ud_berkah', '17319ed134fea4d3645fc2df2591e955', 'Bukittinggi'),
(13, 'Andriko Bangunan', 'andriko', 'dc7f5b55b2e725c0e7519f86dd561ec5', 'Padang Panjang'),
(14, 'Piliang Baru', 'piliang_baru', '655d6ea8320ab0c4879de195a68abf9d', 'Padang Luar, Agam'),
(15, 'GDR Interior', 'gdr_interior', '1c9c05947be988b433f58c1bfe442d04', 'Padang Panjang'),
(16, 'Central Tukang', 'central_tukang', '2f6bb5f1b643bbf6e703644ce32ed2cb', 'Padang'),
(17, 'Karya', 'karya', '49f12424e9ee60eb9fe7e4d2d598fc1c', 'Pekanbaru'),
(18, 'Sentosa Abadi', 'sentosa_abadi', 'f52a6c6100a433030e43a9dd1d911e41', 'Padang'),
(19, 'Toko DW', 'toko_dw', '81f1c47bcaf1e7a0a63b16c2c9ba19fb', 'Bukittinggi'),
(20, 'Panama Bangunan', 'panama', '824e55ca7fa9f451d2209c6d57af0ea2', 'Padang Panjang'),
(21, 'Toko Layar Mas', 'layarmas', '353e0fedff30ac067576fc7384f27bd9', 'Padang Panjang'),
(22, 'Pak Reno', 'reno_bts', '292442d6b8bda473e2af50a89b305d87', 'Batusangkar'),
(23, 'Pak Katik', 'katik_bkt', 'ff5054d89c13b07df9206f6d2d5e4321', 'Bukittinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_frekwensi`
--

CREATE TABLE `tmp_frekwensi` (
  `index` int(11) NOT NULL,
  `index_histori` int(11) DEFAULT NULL,
  `index_frekwensi` int(11) DEFAULT NULL,
  `jumlah_penjualan` int(11) DEFAULT NULL,
  `probabilitas` decimal(10,2) DEFAULT NULL,
  `probabilitas_kumulatif` decimal(10,2) DEFAULT NULL,
  `interval_bilacak_awal` int(11) DEFAULT NULL,
  `interval_bilacak_akhir` int(11) DEFAULT NULL,
  `tahun` int(11) NOT NULL,
  `kode_bulan` char(2) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tmp_frekwensi`
--

INSERT INTO `tmp_frekwensi` (`index`, `index_histori`, `index_frekwensi`, `jumlah_penjualan`, `probabilitas`, `probabilitas_kumulatif`, `interval_bilacak_awal`, `interval_bilacak_akhir`, `tahun`, `kode_bulan`) VALUES
(795, 1, 1, 15, '0.00', '0.00', 0, 0, 2020, '1'),
(796, 2, 2, 16, '0.01', '0.01', 1, 1, 2020, '2'),
(797, 3, 3, 23, '0.01', '0.02', 2, 2, 2020, '3'),
(798, 4, 4, 19, '0.01', '0.03', 3, 3, 2020, '4'),
(799, 25, 5, 21, '0.02', '0.05', 4, 5, 2020, '5'),
(800, 28, 6, 25, '0.02', '0.07', 6, 7, 2020, '6'),
(801, 7, 7, 26, '0.02', '0.09', 8, 9, 2020, '7'),
(802, 8, 8, 29, '0.03', '0.12', 10, 12, 2020, '8'),
(803, 9, 9, 31, '0.03', '0.15', 13, 15, 2020, '9'),
(804, 10, 10, 35, '0.03', '0.18', 16, 18, 2020, '10'),
(805, 11, 11, 37, '0.04', '0.22', 19, 22, 2020, '11'),
(806, 12, 12, 11, '0.04', '0.26', 23, 26, 2020, '12'),
(807, 13, 13, 14, '0.04', '0.30', 27, 30, 2021, '1'),
(808, 14, 14, 15, '0.05', '0.35', 31, 35, 2021, '2'),
(809, 15, 15, 22, '0.05', '0.40', 36, 40, 2021, '3'),
(810, 16, 16, 18, '0.05', '0.45', 41, 45, 2021, '4'),
(811, 17, 17, 20, '0.06', '0.51', 46, 51, 2021, '5'),
(812, 18, 18, 24, '0.06', '0.57', 52, 57, 2021, '6'),
(813, 19, 19, 27, '0.06', '0.63', 58, 63, 2021, '7'),
(814, 20, 20, 30, '0.07', '0.70', 64, 70, 2021, '8'),
(815, 21, 21, 30, '0.07', '0.77', 71, 77, 2021, '9'),
(816, 22, 22, 33, '0.07', '0.84', 78, 84, 2021, '10'),
(817, 23, 23, 35, '0.08', '0.92', 85, 92, 2021, '11'),
(818, 24, 24, 9, '0.08', '1.00', 93, 100, 2021, '12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `histori_pendapatan`
--
ALTER TABLE `histori_pendapatan`
  ADD PRIMARY KEY (`idx`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tmp_frekwensi`
--
ALTER TABLE `tmp_frekwensi`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `histori_pendapatan`
--
ALTER TABLE `histori_pendapatan`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keluar`
--
ALTER TABLE `keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tmp_frekwensi`
--
ALTER TABLE `tmp_frekwensi`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=819;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



