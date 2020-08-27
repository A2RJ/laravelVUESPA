-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Agu 2020 pada 05.40
-- Versi server: 8.0.20
-- Versi PHP: 7.3.19

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
-- Struktur dari tabel `aktiva`
--

CREATE TABLE `aktiva` (
  `id` bigint UNSIGNED NOT NULL,
  `abtt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abt` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktivitas`
--

CREATE TABLE `aktivitas` (
  `id_aktivitas` int NOT NULL,
  `aktivitas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aktivitas`
--

INSERT INTO `aktivitas` (`id_aktivitas`, `aktivitas`) VALUES
(1, 'Penerimaan zakat'),
(2, 'Penyaluran zakat'),
(3, 'Penerimaan infak/sedekah'),
(4, 'Penyaluran infak/sedekah'),
(18, 'Penerimaan amil'),
(19, 'Penggunaan amil'),
(20, 'Penerimaan dana nonhalal'),
(21, 'Penggunaan dana nonhalal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int UNSIGNED NOT NULL,
  `id_akun` int NOT NULL,
  `no_akun` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `debet` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `id_akun`, `no_akun`, `akun`, `debet`, `kredit`, `keterangan`) VALUES
(40, 1, '1.4', 'Muzakki entitas', 'kas', 'muzakki entitas', 'kas'),
(41, 1, '1.4', 'Muzakki individual', 'kas', 'muzakki individual', 'kas'),
(42, 1, '1.4', 'Hasil penempatan', 'kas', 'Hasil penempatan', 'kas'),
(43, 1, '1.4', 'Bagian amil', 'kas', 'Bagian amil', 'kas'),
(44, 2, '1.4', 'Fakir - Miskin', 'Fakir - Miskin', 'kas', 'kredit'),
(45, 2, '1.4', 'Riqab', 'Riqab', 'kas', 'kredit'),
(46, 2, '1.4', 'Gharim', 'Gharim', 'kas', 'kredit'),
(47, 2, '1.4', 'Muallaf', 'Muallaf', 'kas', 'kredit'),
(48, 2, '1.4', 'Sabilillah', 'Sabilillah', 'kas', 'kredit'),
(49, 2, '1.4', 'Ibnu sabil', 'Ibnu sabil', 'kas', 'kredit'),
(50, 3, '1.4', 'Muqayyadah', 'Muqayyadah', 'kas', 'kredit'),
(51, 3, '1.4', 'Mutlaqah', 'Mutlaqah', 'kas', 'kredit'),
(52, 3, '1.4', 'Bagian amil', 'Bagian Amil', 'kas', 'kredit'),
(53, 3, '1.4', 'Hasil pengelolaan', 'Hasil pengelolaan', 'kas', 'kredit'),
(54, 4, '1.4', 'Muqayyadah', 'Muqayyadah', 'kas', 'kredit'),
(55, 4, '1.4', 'Mutlaqah', 'Mutlaqah', 'kas', 'kredit'),
(56, 4, '1.4', 'Alokasi pemanfaatan aset kelolaan', 'Alokasi pemanfaatan aset kelolaan', 'kas', 'kredit'),
(57, 18, '1.4', 'Bagian amil dari dana sakat', 'kas', 'Bagian amil dari dana sakat', 'kas'),
(58, 18, '1.4', 'Bagian amil dari dana infak sedekah', 'kas', 'Bagian amil dari dana infak sedekah', 'kas'),
(59, 18, '1.4', 'Penerimaan lainnya', 'kas', 'Penerimaan lainnya', 'kas'),
(60, 19, '1.4', 'Beban pegawai', 'kredit', 'Beban pegawai', 'kredit'),
(61, 19, '1.4', 'Beban umum dan administrasi ', 'kredit', 'Beban umum dan administrasi ', 'kredit'),
(62, 20, '1.4', 'Bunga bank', 'Bunga bank', 'kas', 'kas'),
(63, 20, '1.4', 'Jasa giro', 'Jasa giro', 'kas', 'kas'),
(64, 20, '1.4', 'Penerimaan dana nonhalal lainnya', 'Penerimaan dana nonhalal lainnya', 'kas', 'kas'),
(65, 21, '1.4', 'Penggunaan dana nonhalal', 'kredit', 'Penggunaan dana nonhalal', 'kredit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jangka_waktu`
--

CREATE TABLE `jangka_waktu` (
  `id` bigint UNSIGNED NOT NULL,
  `id_jangka_waktu` int NOT NULL,
  `jangka_waktu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id` int UNSIGNED NOT NULL,
  `id_aktivitas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jangka_waktu` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_akun` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_debet` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_kredit` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id`, `id_aktivitas`, `jangka_waktu`, `no_akun`, `keterangan`, `jum_debet`, `jum_kredit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, '1', NULL, '40', 'Musakki entitas', '1000', '1000', '2020-08-20 08:56:53', '2020-08-20 08:56:53', NULL),
(13, '1', NULL, '41', 'individual', '1000', '1000', '2020-08-20 08:57:20', '2020-08-20 08:57:20', NULL),
(14, '1', NULL, '42', 'hasil', '1000', '1000', '2020-08-20 08:57:44', '2020-08-20 08:57:44', NULL),
(15, '1', NULL, '43', 'amil', '1000', '1000', '2020-08-20 08:57:53', '2020-08-20 08:57:53', NULL),
(16, '1', NULL, '40', 'dfd', '500', '500', '2020-08-20 09:23:44', '2020-08-20 09:23:44', NULL),
(17, '18', NULL, '57', 'apa', '20000', '20000', '2020-08-22 01:00:36', '2020-08-22 01:00:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2020_06_04_195613_create_aktivitas_table', 1),
(38, '2020_06_04_195613_create_akun_table', 1),
(40, '2020_06_05_023259_create_jangka_waktu_table', 1),
(45, '2020_06_04_195613_create_jurnal_table', 2),
(46, '2020_06_16_175750_aktiva', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktiva`
--
ALTER TABLE `aktiva`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `aktiva`
--
ALTER TABLE `aktiva`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `id_aktivitas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
