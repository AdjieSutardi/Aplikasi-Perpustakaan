-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Apr 2022 pada 04.20
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`, `alamat`, `no_hp`) VALUES
(1, 'Adjie Maulana Sutardi', 'Laki - Laki', 'Cibogor', '0891234567'),
(2, 'Aji Pajrillah', 'Laki - Laki', 'Leuwi Anyar', '0891234567'),
(3, 'Arraafiz Husna Efgo', 'Laki - Laki', 'Tasikmalaya', '0891234567'),
(4, 'Dila Hisaniah', 'Perempuan', 'Tasikmalaya', '0891234567'),
(5, 'Fajar Nauval Ramadhan', 'Laki - Laki', 'Kalangsari', '0891234567'),
(6, 'Fikri Amarulah', 'Laki - Laki', 'Bantar', '0891234567'),
(7, 'Ira Nandira', 'Perempuan', 'Tasikmalaya', '0891234567'),
(8, 'Jajang Kamaludin', 'Laki - Laki', 'Kawalu', '0891234567'),
(9, 'Juni Gunawan', 'Perempuan', 'Bantar', '0891234567'),
(10, 'Levi Pelangi Aji Putri', 'Perempuan', 'Tasikmalaya', '0891234567'),
(11, 'Pepi', 'Perempuan', 'Tasikmalaya', '0891234567'),
(12, 'Raihan Muhammad Alfalaqi', 'Laki - Laki', 'Leuwi Anyar', '0891234567'),
(13, 'Salman Fuadi', 'Laki - Laki', 'Paseh', '0891234567'),
(14, 'Wendi Nurhandani', 'Laki - Laki', 'Leuwi Anyar', '0891234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(11) NOT NULL,
  `isbn` varchar(7) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `isbn`, `nama_buku`, `penulis`, `penerbit`, `tahun_terbit`, `gambar`) VALUES
(1, '1', 'Detective Conan Volume 1', 'Aoyama Gosho', 'Elex Media Komputindo', 1994, 'DC01.jpg'),
(2, '2', 'Detective Conan Volume 2', 'Aoyama Gosho', 'Elex Media Komputindo', 1994, 'DC02.jpg'),
(3, '3', 'Detective Conan Volume 3', 'Aoyama Gosho', 'Elex Media Komputindo', 1994, 'DC03.jpg'),
(4, '4', 'Detective Conan Volume 4', 'Aoyama Gosho', 'Elex Media Komputindo', 1994, 'DC04.jpg'),
(5, '5', 'Detective Conan Volume 5', 'Aoyama Gosho', 'Elex Media Komputindo', 1995, 'DC5.jpg'),
(6, '6', 'Detective Conan Volume 6', 'Aoyama Gosho', 'Elex Media Komputindo', 1995, 'DC06.jpg'),
(7, '7', 'Detective Conan Volume 7', 'Aoyama Gosho', 'Elex Media Komputindo', 1995, 'DC07.jpg'),
(8, '8', 'Detective Conan Volume 8', 'Aoyama Gosho', 'Elex Media Komputindo', 1998, 'DC08.jpg'),
(9, '9', 'Detective Conan Volume 9', 'Aoyama Gosho', 'Elex Media Komputindo', 1996, 'DC09.jpg'),
(10, '10', 'Detective Conan Volume 10', 'Aoyama Gosho', 'Elex Media Komputindo', 1996, 'DC10.jpg'),
(11, '11', 'Detective Conan Volume 11', 'Aoyama Gosho', 'Elex Media Komputindo', 1996, 'DC11.jpg'),
(12, '12', 'Detective Conan', 'Aoyama Gosho', 'Elex Media Komputindo', 1996, 'DC12.jpg'),
(13, '13', 'Detective Conan Volume 13', 'Aoyama Gosho', 'Elex Media Komputindo', 1997, 'DC13.jpg'),
(14, '14', 'Detective Conan Volume 14', 'Aoyama Gosho', 'Elex Media Komputindo', 1997, 'DC14.jpg'),
(15, '15', 'Detective Conan Volume 15', 'Aoyama Gosho', 'Elex Media Komputindo', 1997, 'DC15.jpg'),
(16, '16', 'Detective Conan Volume 16', 'Aoyama Gosho', 'Elex Media Komputindo', 1997, 'DC16.jpg'),
(17, '17', 'Detective Conan Volume 17', 'Aoyama Gosho', 'Elex Media Komputindo', 1997, 'DC17.jpg'),
(18, '18', 'Detective Conan Volume 18', 'Aoyama Gosho', 'Elex Media Komputindo', 1998, 'DC18.jpg'),
(19, '19', 'Detective Conan Volume 19', 'Aoyama Gosho', 'Elex Media Komputindo', 1998, 'DC19.jpg'),
(20, '20', 'Detective Conan Volume 20', 'Aoyama Gosho', 'Elex Media Komputindo', 1998, 'DC20.jpg'),
(21, '21', 'Detective Conan Volume 21', 'Aoyama Gosho', 'Elex Media Komputindo', 1998, 'DC21.jpg'),
(22, '22', 'Detective Conan Volume', 'Aoyama Gosho', 'Elex Media Komputindo', 1999, 'DC22.jpg'),
(23, '23', 'Detective Conan Volume 23', 'Aoyama Gosho', 'Elex Media Komputindo', 1999, 'DC23.jpg'),
(24, '24', 'Detective Conan Volume 24', 'Aoyama Gosho', 'Elex Media Komputindo', 1999, 'DC24.jpg'),
(25, '25', 'Detective Conan Volume 25', 'Aoyama Gosho', 'Elex Media Komputindo', 1999, 'DC25.jpg'),
(26, '26', 'Detective Conan Volume 26', 'Aoyama Gosho', 'Elex Media Komputindo', 2000, 'DC26.jpg'),
(27, '27', 'Detective Conan Volume 27', 'Aoyama Gosho', 'Elex Media Komputindo', 2000, 'DC27.jpg'),
(28, '28', 'Detective Conan Volume 28', 'Aoyama Gosho', 'Elex Media Komputindo', 2000, 'DC28.jpg'),
(29, '29', 'Detective Conan Volume 29', 'Aoyama Gosho', 'Elex Media Komputindo', 2000, 'DC29.jpg'),
(30, '30', 'Detective Conan Volume 30', 'Aoyama Gosho', 'Elex Media Komputindo', 2000, 'DC30.jpg'),
(31, '31', 'Detective Conan Volume 31', 'Aoyama Gosho', 'Elex Media Komputindo', 2001, 'DC31.jpg'),
(32, '32', 'Detective Conan Volume 32', 'Aoyama Gosho', 'Elex Media Komputindo', 2001, 'DC32.jpg'),
(33, '33', 'Detective Conan Volume 33', 'Aoyama Gosho', 'Elex Media Komputindo', 2001, 'DC33.jpg'),
(34, '34', 'Detective Conan Volume 34', 'Aoyama Gosho', 'Elex Meda Komputindo', 2001, 'DC34.jpg'),
(35, '35', 'Detective Conan Volume 35', 'Aoyama Gosho', 'Elex Media Komputindo', 2001, 'DC35.jpg'),
(36, '36', 'Detective Conan Volume 36', 'Aoyama Gosho', 'Elex Media Komputindo', 2002, 'DC36.jpg'),
(37, '37', 'Detective Conan Volume 37', 'Aoyama Gosho', 'Elex Media Komputindo', 2002, 'DC37.jpg'),
(38, '38', 'Detective Conan Volume 38', 'Aoyama Gosho', 'Elex Media Komputindo', 2002, 'DC38.jpg'),
(39, '39', 'Detective Conan Volume 39', 'Aoyama Gosho', 'Elex Media Komputindo', 2002, 'DC39.jpg'),
(40, '40', 'Detective Conan Volume 40', 'Aoyama Gosho', 'Elex Media Komputindo', 2003, 'DC40.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pegawai`
--

CREATE TABLE `tabel_pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pegawai`
--

INSERT INTO `tabel_pegawai` (`id_pegawai`, `nama_pegawai`, `jenis_kelamin`, `alamat`, `no_hp`, `jabatan`) VALUES
(2, 'Jajang Kamaludin', 'Laki - Laki', 'Kawalu', '0891234567', 'Wakil Ketua'),
(3, 'Juni Gunawan', 'Laki - Laki', 'Bantar', '0891234567', 'Sekretaris'),
(4, 'Salman Gunawan', 'Laki - Laki', 'Paseh', '0891234567', 'Wakil Sekretaris'),
(5, 'Fikri Amarulah', 'Laki - Laki', 'Bantar', '0891234567', 'Bendahara'),
(6, 'Fajar Nauval Ramadhan', 'Laki - Laki', 'Kalangsari', '0891234567', 'Wakil Bendahara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(5) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `jenis_transaksi` enum('Pinjam','Kembali') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `tanggal_transaksi`, `id_anggota`, `id_pegawai`, `id_buku`, `quantity`, `jenis_transaksi`) VALUES
(3, '2021-09-21', 3, 3, 3, 3, 'Pinjam'),
(4, '2021-10-01', 4, 4, 4, 4, 'Pinjam'),
(5, '2021-10-01', 5, 5, 5, 5, 'Pinjam'),
(6, '2021-10-01', 6, 6, 6, 6, 'Pinjam'),
(7, '2021-10-11', 7, 7, 7, 7, 'Pinjam'),
(8, '2021-11-01', 8, 8, 8, 8, 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'husni', 'gaminghusni16@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', 21, 1, 4342);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_buku_2` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tabel_pegawai`
--
ALTER TABLE `tabel_pegawai`
  MODIFY `id_pegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
