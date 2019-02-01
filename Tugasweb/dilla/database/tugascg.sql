-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2019 pada 02.28
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugascg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `sma` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `prestasi` text NOT NULL,
  `skill` text NOT NULL,
  `motto` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `nim`, `nama`, `email`, `jekel`, `tmp_lahir`, `tgl_lahir`, `agama`, `goldar`, `sma`, `alamat`, `no_hp`, `hobi`, `prestasi`, `skill`, `motto`, `foto`) VALUES
('160a16b7-ea61-42e7-a5ea-dbf7233e1094', '1711522014', 'Muhammad Hamdi', 'muhammad.hamdits@gmail.com', 'Laki-laki', 'Padang', '2000-02-03', 'Islam', 'A', 'MAN 2 Padang', 'Padang', '081234567890', 'Ngoding', 'Banyak', 'Banyak', 'Selamat dunia akhirat', '5c53994343210.jpg'),
('825f2ba6-5e01-4990-95fd-1b07b00ce0ad', '1711522012', 'Afif Maulana Isman', 'afif.mi@gmail.com', 'Laki-laki', 'Padang', '1998-11-30', 'Islam', 'O', 'SMAN 10 Kota Padang', 'Simp. Haru', '082386003596', 'Main Game', 'Satu-satunya yang dapat A- di matakuliah SDA yang diampu Bapak Matahari terbit dan bisa mengalahkan ketua club ini :v', 'Satu-satunya yang dapat A- di matakuliah SDA yang diampu Bapak Matahari terbit dan bisa mengalahkan ketua club ini :v', 'No Game No Live :v', '5c53979ac7714.jpeg'),
('a55eb578-df47-4aa7-889f-4fee7c40321c', '1711522020', 'Feny Mametri', 'feni.mametri@gmail.com', 'Perempuan', 'Agam', '2019-03-18', 'Islam', 'B', 'SMAN 1 Ampek Angkek', 'Pasa Baru', '083465432764', 'Main HP', 'Banyak', 'Banyak', 'Tanya ke orangnya', '5c5398d739b23.jpg'),
('a7169ba8-79f7-41de-b62f-7a09256b7318', '1711522012', 'Nadilla Cantik', 'nadila.syihaq8@gmail.com', 'Laki-laki', 'Muara Labuh', '2019-02-13', '', '', '', '', '082356752634', '', '', '', '', '5c539c5a713f4.png'),
('c9bd56ed-0eab-4df3-b04b-df6b10d13b54', '1711521015', 'Ovy Nanda Putri', 'ovy.np@gmail.com', 'Perempuan', 'Jambi', '1999-07-08', 'Islam', 'AB', 'SMAN 1 Sungai Penuh', 'Pasar Baru', '082345677654', 'Menipu Orang', 'Tanya ke orangnya', 'Menyebar rumor di lingkungan FTI', 'Tak bisa disebutkan dengan kata-kata', '5c5396a9d8b67.jpg'),
('d6982e97-7ee1-44af-bd29-eae14ddeb80c', '1711522002', 'Rahmania Jasmin', 'fara.rahmania@gmail.com', 'Perempuan', 'Jakarta', '2001-02-04', 'Islam', 'B', 'SMAN XX JAKARTA', 'Dekat kos dio', '082356752634', 'Belajar', 'Banyak', 'IP selalu tinggi', 'Tidak tau saya', '5c5399dd1c478.jpg'),
('e136925d-89a4-4df6-b9a8-b5313e72d90a', '1711521012', 'Nadilla Syihaq', 'nadila.syihaq8@gmail.com', 'Perempuan', 'Muara Labuh', '1999-01-08', 'Islam', 'O', 'SMAN 1 Kota Solok', 'Jln. Drs. Moh. Hatta - Kepalo Koto No. 5, Kota Padang', '082386003596', 'Banyak', 'Tidak ada yang bisa disebut sebagai prestasi', 'Sangat banyak sekali :v', 'Belum dipikirkan', '5c539916c6dd8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
