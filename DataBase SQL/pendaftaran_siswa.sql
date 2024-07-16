-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jan 2023 pada 05.52
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(6) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(18) NOT NULL,
  `noTlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `uname`, `password`, `nama`, `jabatan`, `noTlp`) VALUES
(1, 'lintang.adm', '78bb91fef1ebccbe81fa9ad5b166bf6b', 'Muhammad Lintang ', 'Staff', '08533333333 '),
(2, 'lintang.lp', '2b6895ae6a902d00da9e04a4d4269a68', 'admin lintang ke 2', 'staff', '0853532523');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `ID_DS` int(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `JenisKelamin` varchar(10) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`ID_DS`, `NIK`, `Nama`, `JenisKelamin`, `Agama`, `TempatLahir`, `TanggalLahir`, `Telepon`, `Alamat`) VALUES
(13, '2101030', 'Muhammad Lintang Pamungkas', 'Laki-laki', 'Islam', 'karanganyar', '2022-12-24', '085346463060', 'karanganyar, central java'),
(15, '2101030213112', 'm soleh', 'Laki-laki', 'Islam', 'klaten', '2023-01-06', '085346123060', 'klaten, central java'),
(19, '210103028', 'Lintang Muhammad', 'Laki-laki', 'Islam', 'jakarta', '2021-02-09', '0854444433', 'Semarang, central java'),
(21, '12122', 'M SOleh banyak', 'Laki-laki', 'Islam', 'karanganyar', '2023-01-11', '085346123060', 'karanganyar, central java'),
(22, '1231231231', 'Bintang candra', 'Laki-laki', 'Islam', 'surakarta', '2023-01-11', '085346463060', 'surakarta central java');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `ID_Dokumen` int(11) NOT NULL,
  `Akte` varchar(100) NOT NULL,
  `KK` varchar(100) NOT NULL,
  `PasFoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`ID_Dokumen`, `Akte`, `KK`, `PasFoto`) VALUES
(13, 'gradient-mountain-landscape_23-2149162009.png', '1.png', '20220307_051742.jpg'),
(15, 'Logo UDB.jpg', 'IAIN.png', '20220307_051742.jpg'),
(19, 'akte.png', 'bg1-1-1.jpg', 'pas.jpg'),
(20, 'akte.png', 'bg1-1-1.jpg', 'pas.jpg'),
(21, 'akte.png', 'bg1-1-1.jpg', 'pas.jpg'),
(22, 'gradient-mountain-landscape_23-2149162009.png', 'Capture1.PNG', '20220307_051742.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `ID_Hasil` int(11) NOT NULL,
  `ID_Kuisoner` int(11) NOT NULL,
  `ID_Pengumuman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisoner`
--

CREATE TABLE `kuisoner` (
  `ID_Kuisoner` int(11) NOT NULL,
  `p1` varchar(7) NOT NULL,
  `p2` varchar(7) NOT NULL,
  `p3` varchar(7) NOT NULL,
  `p4` varchar(7) NOT NULL,
  `p5` varchar(7) NOT NULL,
  `p6` varchar(7) NOT NULL,
  `p7` varchar(7) NOT NULL,
  `p8` varchar(7) NOT NULL,
  `p9` varchar(7) NOT NULL,
  `p10` varchar(7) NOT NULL,
  `p11` varchar(7) NOT NULL,
  `p12` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuisoner`
--

INSERT INTO `kuisoner` (`ID_Kuisoner`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`) VALUES
(13, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Kadang', 'Kadang', 'Kadang', 'Kadang', 'Tidak', 'Tidak'),
(15, 'Ya', 'Kadang', 'Tidak', 'Kadang', 'Ya', 'Kadang', 'Tidak', 'Kadang', 'Ya', 'Kadang', 'Tidak', 'Kadang'),
(19, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `ID_Pengumuman` int(11) NOT NULL,
  `DataValidasi` varchar(11) NOT NULL,
  `Pengumuman` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`ID_Pengumuman`, `DataValidasi`, `Pengumuman`) VALUES
(13, '', ''),
(14, 'Valid', 'Diterima'),
(15, 'Valid', 'Diterima'),
(19, 'Valid', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `Nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `Nama_lengkap`, `username`, `NIK`, `password`, `tanggal_lahir`) VALUES
(13, 'Muhammad Lintang Pamungkas', 'lintang.lp', '2101030', '2b6895ae6a902d00da9e04a4d4269a68', '2022-12-17'),
(14, 'M Soleh', 'soleh', '21010', 'a08e7920aa24da147fe58c2710dc646a', '2022-12-15'),
(15, 'M Soleh', 'soleh.id', '2101030213112', '2b6895ae6a902d00da9e04a4d4269a68', '2013-06-04'),
(19, 'Lintang Muhammad', 'lintang.lm', '210103028', '2b6895ae6a902d00da9e04a4d4269a68', '2021-02-09'),
(20, 'bahrul', 'bahrul.lp', '2101022', '2b6895ae6a902d00da9e04a4d4269a68', '2023-01-11'),
(21, 'Lintang Muhammad 2', 'a.lp', '2101030213112', '2b6895ae6a902d00da9e04a4d4269a68', '2023-01-11'),
(22, 'Bintang candra', 'bintang.lp', '2101030213112', '2b6895ae6a902d00da9e04a4d4269a68', '2023-01-11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`ID_DS`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`ID_Dokumen`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`ID_Hasil`),
  ADD KEY `ID_Pengumuman` (`ID_Pengumuman`),
  ADD KEY `ID_Kuisoner` (`ID_Kuisoner`);

--
-- Indeks untuk tabel `kuisoner`
--
ALTER TABLE `kuisoner`
  ADD PRIMARY KEY (`ID_Kuisoner`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`ID_Pengumuman`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`ID_DS`) REFERENCES `dokumen` (`ID_Dokumen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `dokumen_ibfk_1` FOREIGN KEY (`ID_Dokumen`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`ID_Pengumuman`) REFERENCES `pengumuman` (`ID_Pengumuman`),
  ADD CONSTRAINT `hasil_ibfk_4` FOREIGN KEY (`ID_Kuisoner`) REFERENCES `kuisoner` (`ID_Kuisoner`),
  ADD CONSTRAINT `hasil_ibfk_5` FOREIGN KEY (`ID_Hasil`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `kuisoner`
--
ALTER TABLE `kuisoner`
  ADD CONSTRAINT `kuisoner_ibfk_1` FOREIGN KEY (`ID_Kuisoner`) REFERENCES `data_siswa` (`ID_DS`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
