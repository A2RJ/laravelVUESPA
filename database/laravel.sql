-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jun 2020 pada 06.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

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
(1, 'pendapatan tunai'),
(2, 'pembelian aset tunai'),
(3, 'pembelian kredit'),
(4, 'pembelian cicilan'),
(5, 'penjualan aset'),
(6, 'pembayaran'),
(7, 'setor'),
(8, 'tarik'),
(9, 'penyesuaian bank'),
(10, 'pemberian peminjaman'),
(11, 'pelunasan peminjaman'),
(12, 'penerimaan peminjaman'),
(13, 'hibah');

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
(1, 1, '4.1', 'sumbangan', 'kas', 'sumbangan', '?'),
(2, 2, '1.4', 'perlengkapan', 'perlengkapan', 'kas', '?'),
(3, 2, '1.5', 'peralatan', 'peralatan', 'kas', '?'),
(4, 2, '1.7', 'gedung & bangunan', 'gedung & bangunan', 'kas', '?'),
(5, 2, '1.9', 'tanah', 'tanah', 'kas', '?'),
(6, 5, '1.4', 'perlengkapan', 'kas', 'perlengkapan', '?'),
(7, 5, '1.5', 'peralatan', 'kas', 'peralatan', '?'),
(8, 5, '1.7', 'gedung & bangunan', 'kas', 'gedung & bangunan', '?'),
(9, 5, '1.9', 'tanah', 'kas', 'tanah', '?'),
(10, 6, '5.1', 'gaji', 'beban gaji', 'kas', '?'),
(11, 6, '5.2', 'listrik', 'beban listrik', 'kas', '?'),
(12, 6, '5.3', 'air', 'beban air', 'kas', '?'),
(13, 6, '5.4', 'internet', 'beban internet', 'kas', '?'),
(14, 6, '5.5', 'pemeliharaan', 'beban pemeliharaan', 'kas', '?'),
(15, 6, '5.6', 'administrasi dan umum', 'beban administrasi dan umum', 'kas', '?'),
(16, 6, '5.7', 'pajak', 'beban pajak', 'kas', '?'),
(17, 6, '5.8', 'PHBI', 'beban PHBI', 'kas', '?'),
(18, 6, '5.9', 'transportasi', 'beban transportasi', 'kas', '?'),
(19, 7, '1.2', 'bank', 'bank', 'kas', '?'),
(20, 8, '1.2', 'bank', 'kas', 'bank', '?'),
(21, 9, '4.2', 'pendapatan bunga bank', 'bank', 'pendapatan bunga bank', '?'),
(22, 9, '5.12', 'administrasi bank', 'beban administrasi bank', 'bank', '?'),
(23, 10, '1.3', 'piutang', 'piutang', 'kas', '?'),
(24, 11, '2.1', 'utang jangka pendek', 'utang jangka pendek', 'kas', '?'),
(25, 11, '2.2', 'utang jangka panjang', 'utang jangka panjang', 'kas', '?'),
(26, 11, '13.', 'piutang', 'kas', 'piutang', '?'),
(27, 12, '2.1', 'utang jangka pendek', 'kas', 'utang jangka pendek', '?'),
(28, 12, '2.2', 'utang jangka panjang', 'kas', 'utang jangka panjang', '?'),
(29, 13, '1.5', 'peralatan', 'peralatan', 'aktiva bersih temporer', '?'),
(30, 13, '1.7', 'gedung & bangunan', 'gedung & bangunan', 'aktiva bersih temporer', '?'),
(31, 13, '1.9', 'tanah', 'tanah', 'aktiva bersih permanen', '?'),
(32, 4, '1.4', 'perlengkapan', 'perlengkapan', 'kas, utang', '?'),
(33, 4, '1.5', 'peralatan', 'peralatan', 'kas, utang', '?'),
(34, 4, '1.7', 'gedung & bangunan', 'gedung & bangunan', 'kas, utang', '?'),
(35, 4, '1.9', 'tanah', 'tanah', 'kas, utang', '?'),
(36, 3, '1.4', 'perlengkapan', 'perlengkapan', 'utang', '?'),
(37, 3, '1.5', 'peralatan', 'peralatan', 'utang', '?'),
(38, 3, '1.7', 'gedung & bangunan', 'gedung & bangunan', 'utang', '?'),
(39, 3, '1.9', 'tanah', 'tanah', 'utang', '?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jangka_waktu`
--

CREATE TABLE `jangka_waktu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jangka_waktu` int(11) NOT NULL,
  `jangka_waktu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jangka_waktu`
--

INSERT INTO `jangka_waktu` (`id`, `id_jangka_waktu`, `jangka_waktu`) VALUES
(1, 4, 'jangka pendek'),
(2, 4, 'jangka panjang'),
(3, 3, 'jangka pendek'),
(4, 3, 'jangka panjang');

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
(1, '1', NULL, '1', 'sdsdsdsds', '1000', '1000', '2020-06-15 00:00:48', '2020-06-15 00:00:48', NULL),
(2, '1', NULL, '1', 'kedua', '20000', '2000', '2020-06-15 00:33:07', '2020-06-15 00:33:07', NULL),
(3, '1', '0', '1', 'apa apa aja mo', '20000', '20000', '2020-06-16 08:11:07', '2020-06-16 08:11:07', NULL),
(4, '6', '0', '14', 'apa aja mp', '1000', '1000', '2020-06-16 08:11:45', '2020-06-16 08:11:45', NULL),
(5, '2', NULL, '5', 'sadasds', '1000', '1000', '2020-06-16 08:28:05', '2020-06-16 08:28:05', NULL);

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
(37, '2020_06_04_195613_create_aktivitas_table', 1),
(38, '2020_06_04_195613_create_akun_table', 1),
(40, '2020_06_05_023259_create_jangka_waktu_table', 1),
(45, '2020_06_04_195613_create_jurnal_table', 2);

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
  MODIFY `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
