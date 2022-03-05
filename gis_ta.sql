-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2021 pada 04.15
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_puskesmas`
--

CREATE TABLE `tbl_puskesmas` (
  `id_list` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kuota` varchar(100) NOT NULL,
  `kode_pos` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_puskesmas`
--

INSERT INTO `tbl_puskesmas` (`id_list`, `nama`, `alamat`, `kuota`, `kode_pos`, `lat`, `long`, `jenis`, `gambar`) VALUES
(1, 'Puskesmas Grobogan', 'Puskesmas Grobogan, Grobogan, Kabupaten Grobogan, Jawa Tengah', '300', '58152', '-7.019334815502816', ' 110.9221479024196', 'Sinovac, AstraZeneca, Moderna', 'co1.jpg'),
(2, 'Puskesmas Purwodadi 1', 'Puskesmas Purwodadi 1, Jalan Gajah Mada, Perumda, Purwodadi, Kabupaten Grobogan, Jawa Tengah', '350', '58111', '-7.097203318464514', '110.91213560043875', 'Moderna dan Sinovac', 'co1.jpg'),
(3, 'Puskesmas Purwodadi 2', 'Puskesmas Purwodadi 2, Pulogendol, Nambuhan, Kabupaten Grobogan, Jawa Tengah', '250', '58111', '-7.1174098255556615', '110.96998064076871', 'AstraZeneca dan Moderna', 'co1.jpg'),
(4, 'Puskesmas Pulokulon 1', 'Puskesmas Pulokulon I, Panunggalan, Kabupaten Grobogan, Jawa Tengah', '300', '58181', '-7.127575808197996', '111.06293381008344', 'Sinovac dan AstraZeneca', 'co1.jpg'),
(5, 'Puskesmas Godong 1', 'Puskesmas Godong I, Bugel, Kabupaten Grobogan, Jawa Tengah', '250', '58162', '-7.020781446530748', '110.7645557965893', 'Sinovac, AstraZeneca, Moderna', 'co1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_puskesmas`
--
ALTER TABLE `tbl_puskesmas`
  ADD PRIMARY KEY (`id_list`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_puskesmas`
--
ALTER TABLE `tbl_puskesmas`
  MODIFY `id_list` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
