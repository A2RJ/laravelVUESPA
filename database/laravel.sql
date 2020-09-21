-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Sep 2020 pada 10.15
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id_aktivitas` int(11) NOT NULL,
  `aktivitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `aktivitas`) VALUES
(1, 'Penerimaan zakat'),
(2, 'Penyaluran zakat'),
(3, 'Penerimaan infak/sedekah'),
(4, 'Penyaluran infak/sedekah'),
(5, 'Penerimaan amil'),
(6, 'Penggunaan amil'),
(7, 'Penerimaan dana nonhalal'),
(8, 'Penggunaan dana nonhalal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_akun` int(11) NOT NULL,
  `no_akun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `id_akun`, `no_akun`, `akun`, `debet`, `kredit`, `keterangan`) VALUES
(1, 1, '1.4', 'Muzakki entitas', 'kas', 'muzakki entitas', 'kas'),
(2, 1, '1.4', 'Muzakki individual', 'kas', 'muzakki individual', 'kas'),
(3, 1, '1.4', 'Hasil penempatan', 'kas', 'Hasil penempatan', 'kas'),
(4, 1, '1.4', 'Bagian amil', 'kas', 'Bagian amil', 'kas'),
(5, 2, '1.4', 'Fakir - Miskin', 'Fakir - Miskin', 'kas', 'kredit'),
(6, 2, '1.4', 'Riqab', 'Riqab', 'kas', 'kredit'),
(7, 2, '1.4', 'Gharim', 'Gharim', 'kas', 'kredit'),
(8, 2, '1.4', 'Muallaf', 'Muallaf', 'kas', 'kredit'),
(9, 2, '1.4', 'Sabilillah', 'Sabilillah', 'kas', 'kredit'),
(10, 2, '1.4', 'Ibnu sabil', 'Ibnu sabil', 'kas', 'kredit'),
(11, 3, '1.4', 'Muqayyadah', 'Muqayyadah', 'kas', 'kredit'),
(12, 3, '1.4', 'Mutlaqah', 'Mutlaqah', 'kas', 'kredit'),
(13, 3, '1.4', 'Bagian amil', 'Bagian Amil', 'kas', 'kredit'),
(14, 3, '1.4', 'Hasil pengelolaan', 'Hasil pengelolaan', 'kas', 'kredit'),
(15, 4, '1.4', 'Muqayyadah', 'Muqayyadah', 'kas', 'kredit'),
(16, 4, '1.4', 'Mutlaqah', 'Mutlaqah', 'kas', 'kredit'),
(17, 4, '1.4', 'Alokasi pemanfaatan aset kelolaan', 'Alokasi pemanfaatan aset kelolaan', 'kas', 'kredit'),
(18, 5, '1.4', 'Bagian amil dari dana sakat', 'kas', 'Bagian amil dari dana sakat', 'kas'),
(19, 5, '1.4', 'Bagian amil dari dana infak sedekah', 'kas', 'Bagian amil dari dana infak sedekah', 'kas'),
(20, 5, '1.4', 'Penerimaan lainnya', 'kas', 'Penerimaan lainnya', 'kas'),
(21, 6, '1.4', 'Beban pegawai', 'kredit', 'Beban pegawai', 'kredit'),
(22, 6, '1.4', 'Beban umum dan administrasi ', 'kredit', 'Beban umum dan administrasi ', 'kredit'),
(23, 7, '1.4', 'Bunga bank', 'Bunga bank', 'kas', 'kas'),
(24, 7, '1.4', 'Jasa giro', 'Jasa giro', 'kas', 'kas'),
(25, 7, '1.4', 'Penerimaan dana nonhalal lainnya', 'Penerimaan dana nonhalal lainnya', 'kas', 'kas'),
(26, 8, '1.4', 'Penggunaan dana nonhalal', 'kredit', 'Penggunaan dana nonhalal', 'kredit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jangka_waktu`
--

CREATE TABLE `jangka_waktu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jangka_waktu` int(11) NOT NULL,
  `jangka_waktu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_aktivitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jangka_waktu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_akun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_debet` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_kredit` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_06_04_195613_create_aktivitas_table', 1),
(2, '2020_06_04_195613_create_akun_table', 1),
(3, '2020_06_04_195613_create_jurnal_table', 1),
(4, '2020_06_05_023259_create_jangka_waktu_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `akun_id_akun_foreign` (`id_akun`);

--
-- Indeks untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jangka_waktu_id_jangka_waktu_foreign` (`id_jangka_waktu`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `aktivitas` (`id_aktivitas`);

--
-- Ketidakleluasaan untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  ADD CONSTRAINT `jangka_waktu_id_jangka_waktu_foreign` FOREIGN KEY (`id_jangka_waktu`) REFERENCES `aktivitas` (`id_aktivitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
