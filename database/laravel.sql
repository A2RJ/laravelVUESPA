-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Nov 2020 pada 07.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(7, 'Penerimaan dana nonhalal'),
(8, 'Penggunaan dana nonhalal'),
(9, 'Pembelian aset'),
(10, 'Pembelian kredit'),
(11, 'Pembelian cicilan'),
(12, 'Penjualan aset'),
(13, 'Pembayaran'),
(14, 'Pemberian peminjaman'),
(15, 'Pelunasan peminjaman'),
(16, 'Penerimaan peminjaman'),
(17, 'Bank');

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
(4, 2, '1.4', 'Fakir - Miskin', 'Fakir - Miskin', 'kas', 'kredit'),
(6, 2, '1.4', 'Gharim', 'Gharim', 'kas', 'kredit'),
(7, 2, '1.4', 'Muallaf', 'Muallaf', 'kas', 'kredit'),
(8, 2, '1.4', 'Sabilillah', 'Sabilillah', 'kas', 'kredit'),
(9, 2, '1.4', 'Ibnu sabil', 'Ibnu sabil', 'kas', 'kredit'),
(10, 3, '1.4', 'Muqayyadah', 'Kas', 'Muqayyadah', 'kas'),
(11, 3, '1.4', 'Mutlaqah', 'Kas', 'Mutlaqah', 'kas'),
(12, 3, '1.4', 'Hasil pengelolaan', 'Kas', 'Hasil pengelolaan', 'kas'),
(13, 4, '1.4', 'Muqayyadah', 'Muqayyadah', 'kas', 'kredit'),
(14, 4, '1.4', 'Mutlaqah', 'Mutlaqah', 'kas', 'kredit'),
(16, 5, '1.4', 'Bagian amil dari dana zakat', 'kas', 'Bagian amil dari dana zakat', 'kas'),
(17, 5, '1.4', 'Bagian amil dari dana infak sedekah', 'kas', 'Bagian amil dari dana infak sedekah', 'kas'),
(18, 5, '1.4', 'Penerimaan lainnya', 'kas', 'Penerimaan lainnya', 'kas'),
(21, 7, '1.4', 'Bunga bank', 'Kas', 'Bunga bank', 'Kas'),
(22, 7, '1.4', 'Jasa giro', 'Kas', 'Jasa giro', 'Kas'),
(23, 7, '1.4', 'Penerimaan dana nonhalal lainnya', 'Kas', 'Penerimaan dana nonhalal lainnya', 'Kas'),
(24, 8, '1.4', 'Penggunaan dana nonhalal', 'Penggunaan dana nonhalal', 'Kas', 'Kas'),
(25, 8, '1.4', 'Beban administrasi bank', 'Beban administrasi bank', 'Kas', 'Kredit'),
(26, 17, '1.8', 'Setor', 'Setor', 'Kas', 'Kredit'),
(27, 17, '1.8', 'Tarik', 'Kas', 'Tarik', 'Kas'),
(28, 9, '1.4', 'Peralatan', 'Tes', 'Tes', 'Kredit'),
(29, 9, '-', 'Perlengkapan', '-', '-', 'Kredit'),
(30, 9, '-', 'Gedung dan Bangunan', '-', '-', 'Kredit'),
(31, 9, '-', 'Tanah', '-', '-', 'Kredit'),
(32, 10, '1.4', 'Peralatan', 'Coba', 'Coba', 'Kredit'),
(33, 10, '-', 'Perlengkapan', '-', '-', 'Kredit'),
(34, 10, '-', 'Gedung dan Bangunan', '-', '-', 'Kredit'),
(35, 10, '-', 'Tanah', '-', '-', 'Kredit'),
(36, 11, '-', 'Peralatan', '-', '-', 'Kredit'),
(37, 11, '-', 'Perlengkapan', '-', '-', 'Kredit'),
(38, 11, '-', 'Gedung dan Bangunan', '-', '-', 'Kredit'),
(39, 11, '-', 'Tanah', '-', '-', 'Kredit'),
(40, 12, '-', 'Peralatan', '-', '-', 'Kas'),
(41, 12, '-', 'Perlengkapan', '-', '-', 'Kas'),
(42, 12, '-', 'Gedung dan Bangunan', '-', '-', 'Kas'),
(43, 12, '-', 'Tanah', '-', '-', 'Kas'),
(44, 13, '-', 'Gaji', '-', '-', 'Kredit'),
(45, 13, '-', 'Listrik', '-', '-', 'Kredit'),
(46, 13, '-', 'Air', '-', '-', 'Kredit'),
(47, 13, '-', 'Internet', '-', '-', 'Kredit'),
(48, 13, '-', 'Pemeliharaan', '-', '-', 'Kredit'),
(49, 13, '-', 'Administrasi dan Umum', '-', '-', 'Kredit'),
(50, 13, '-', 'Pajak', '-', '-', 'Kredit'),
(51, 13, '-', 'PHBI', '-', '-', 'Kredit'),
(52, 13, '-', 'Transportasi', '-', '-', 'Kredit'),
(53, 3, '1.4', 'Peralatan', 'Kas', 'Peralatan', 'kas'),
(54, 3, '1.5', 'Perlengkapan', 'Kas', 'Perlengkapan', 'kas'),
(55, 3, '1.6', 'Gedung dan Bangunan', 'Kas', 'Gedung dan Bangunan', 'kas'),
(56, 3, '1.7', 'Tanah', 'Kas', 'Tanah', 'kas');

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

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id`, `id_aktivitas`, `jangka_waktu`, `no_akun`, `keterangan`, `jum_debet`, `jum_kredit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(52, '9', NULL, '1.4', 'wew', '33', '33', '2020-10-31 12:50:18', '2020-10-31 12:50:18', NULL),
(57, '10', NULL, '1.4', 'wew', '33', '33', '2020-10-31 12:50:18', '2020-10-31 12:50:18', NULL);

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
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
