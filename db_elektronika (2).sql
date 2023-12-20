-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 16.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elektronika`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gedung`
--

CREATE TABLE `gedung` (
  `kode` int(2) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gedung`
--

INSERT INTO `gedung` (`kode`, `nama`, `desc`, `img`) VALUES
(1, 'GEDUNG', 'Gedung Baru FT 1', 'gedung1.jpg'),
(2, 'GEDUNG', 'Blok Elektronika 1', 'gedung2.jpg'),
(3, 'GEDUNG', 'Gedung Baru FT 2', 'gedung3.jpg'),
(4, 'GEDUNG', 'Blok Elektronika 2', 'gedung4.jpg'),
(5, 'GEDUNG', 'Pascasarjana', '4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1649506324),
('m130524_201442_init', 1649506330),
('m190124_110200_add_verification_token_column_to_user_table', 1649506330);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `kode` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`kode`, `nama`, `desc`) VALUES
(1, 'Pendidikan Teknik Elektronika - S1', 'Mempelajari perancangan dan implementasi sistem elektronik, aplikasi teknologi telekomunikasi dan informasi dalam mendukung kinerja sistem elektronik. Guru, dosen, pranata laboratorium pendidikan, teknisi, dll.'),
(2, 'Teknik Elektronika - D3', 'Mempelajari tentang berbagai perangkat dan komponen elektronik dan listrik non-linier serta arus listrik tabung elektron maupun perangkat semikonduktor yang mencakup sirkuit terintegrasi, dioda, hingga transistor, yang digunakan untuk merancang perangkat, sirkuit, maupun sistem elektronika.'),
(3, 'Pendidikan Teknik Informatika - S1', 'Teknik informatika merupakan bidang ilmu yang mempelajari teknologi komputer meliputi analisis matematis pengembangan, pengujian, evaluasi perangkat lunak (software), sistem operasi, dan kerja komputer. karena ini pendidikan maka kamu bisa menjadi guru dan dosen.'),
(4, 'Teknik Informatika - S1', 'Mempelajari perancangan dan implementasi sistem elektronik, aplikasi teknologi telekomunikasi dan informasi dalam mendukung kinerja sistem elektronik.'),
(5, 'Animasi - D3', 'Mempelajari teknik pembuatan animasi mulai dari merancang karakter 2D dan 3D, membuat storyboard, menulis skenario, hingga video editing. Mahasiswa Animasi juga akan diajari cara menambahkan sound effects pada tampilan animasi yang telah dibuat sebelumnya.'),
(6, 'Ubahhh', 'Mempelajari teknik pembuatan animasi mulai dari merancang karakter 2D dan 3D, membuat storyboard, menulis skenario, hingga video editing. Mahasiswa Animasi juga akan diajari cara menambahkan sound effects pada tampilan animasi yang telah dibuat sebelumnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `kode` int(2) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`kode`, `nama`, `desc`, `img`) VALUES
(1, 'LABOR', 'Laboratorium 1', 'ruang1.jpg'),
(2, 'KELAS', 'kelas 1', 'ruang2.jpg'),
(3, 'LABOR', 'Laboratorium 2', 'ruang3.jpg'),
(4, 'LABOR', 'Laboratorium 3', 'ruang4.jpg'),
(5, 'KANTOR', 'Kantor Dosen', 'ruang5.jpg'),
(6, 'LABOR', 'Laboratorium 4', 'ruang6.jpg'),
(7, 'LABOR', 'Laboratorium 5', 'ruang7.jpg'),
(8, 'KANTOR', 'Kantor Dosen 2', 'ruang8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taman`
--

CREATE TABLE `taman` (
  `kode` int(2) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `des` varchar(100) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `taman`
--

INSERT INTO `taman` (`kode`, `nama`, `des`, `img`) VALUES
(1, 'TAMAN', 'Taman Blok Elektronika 1', 'taman1.jpg'),
(2, 'TAMAN', 'Taman Blok Elektronika 2', 'taman2.jpg'),
(3, 'TAMAN', 'Taman Blok Elektronika 3', 'taman3.jpg'),
(4, 'TAMAN', 'Taman Blok Elektronika 4', 'taman4.jpg'),
(5, 'KORIDOR', 'Koridor Blok Elektronika', 'taman5.jpg'),
(6, 'TAMAN', 'Taman Blok Elektronika 5', 'taman6.jpg'),
(7, 'TAMAN', 'Taman Blok Elektronika 6', 'taman7.jpg'),
(8, 'TAMAN', 'Taman Blok Elektronika 7', 'taman8.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `img`) VALUES
(1, 'Drs. Hanesman, M.M.', 'team-01.jpg'),
(2, 'Drs. Zulhendra, M.kom.', 'team-02.jpg'),
(3, 'Drs. Putra Jaya, M.T', 'team-03.jpg'),
(4, 'Dr. Elfi Tasrif, M.T', 'team-04.jpg'),
(5, 'Drs. Denny Kurniadi, M.Kom', 'team-5.jpg'),
(6, 'Drs. Efrizon, M.T.', 'team-6.jpg'),
(7, 'Muhammad Adri, S.Pd, M.T.', 'team-7.jpg'),
(8, 'Zulwisli, S.Pd, M.Eng.', 'team-8.jpg'),
(9, 'Drs. Legiman S, M.T.', 'team-9.jpg'),
(10, 'Dr. Edidas, M.T.', 'team-10.jpg'),
(11, 'Khairi Budayawan, S.Pd, M.Kom', 'team-11.jpg'),
(12, 'Dr. Muhammad Anwar, S.Pd, M.T', 'team-12.jpg'),
(13, 'Dr. Dedy Irfan, S.Pd, M.Kom.', 'team-13.jpg'),
(14, 'Dony Novaliendry, M.Kom.', 'team-14.jpg'),
(15, 'Ahmaddul Hadi, S.Pd, M.Kom.', 'team-15.jpg'),
(16, 'Yasdinul Huda, S.Pd, M.T.', 'team-16.jpg'),
(17, 'Titi Sri Wahyuni, S.Pd.M.Eng', 'team-17.jpg'),
(18, 'Oktoria, S.Pd, M.T.', 'team-18.jpg'),
(19, 'Thamrin, S.Pd., MT.', 'team-19.jpg'),
(20, 'Delsina Faiza, ST, M.T.', 'team-20.jpg'),
(21, 'Dr. Asrul Huda, S.Kom, M.Kom.', 'team-21.jpg'),
(22, 'Yeka Hendriyani, S.Kom., M.Kom.', 'team-22.jpg'),
(23, 'Geovanne Farell, S.P.d.,M.Pd.T.', 'team-23.jpg'),
(25, 'Avila', '6..jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'vera', 'uTO-pZoOtlRImqOsRrmj5S6MUyfwZ3z9', '$2y$13$aWFAjFRnYq6srV3US8FQruwq4I7mZ8KrhtGJKOzfR0qUS67Uu/c2i', NULL, 'veraindriani@gmail.com', 10, 0, 1649511568, '4FwbOUgG-Uk6qO9dbIf_RL2rgxwq_ABT_1649511568');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gedung`
--
ALTER TABLE `gedung`
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `taman`
--
ALTER TABLE `taman`
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
