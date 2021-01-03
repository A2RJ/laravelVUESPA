-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aktivitas`
--

DROP TABLE IF EXISTS `aktivitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aktivitas` (
  `id_aktivitas` int(11) NOT NULL AUTO_INCREMENT,
  `aktivitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_aktivitas`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aktivitas`
--

LOCK TABLES `aktivitas` WRITE;
/*!40000 ALTER TABLE `aktivitas` DISABLE KEYS */;
INSERT INTO `aktivitas` VALUES (1,'Penerimaan zakat'),(2,'Penyaluran zakat'),(3,'Penerimaan infak/sedekah'),(4,'Penyaluran infak/sedekah'),(5,'Penerimaan amil'),(7,'Penerimaan dana nonhalal'),(8,'Penggunaan dana nonhalal'),(9,'Pembelian aset'),(10,'Pembelian kredit'),(11,'Pembelian cicilan'),(12,'Penjualan aset'),(13,'Pembayaran'),(14,'Pemberian peminjaman'),(15,'Pelunasan peminjaman'),(16,'Penerimaan peminjaman'),(17,'Setor'),(18,'Tarik');
/*!40000 ALTER TABLE `aktivitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `akun` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_akun` int(11) NOT NULL,
  `no_akun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akun` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debet` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kredit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `akun_id_akun_foreign` (`id_akun`),
  CONSTRAINT `akun_id_akun_foreign` FOREIGN KEY (`id_akun`) REFERENCES `aktivitas` (`id_aktivitas`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `akun`
--

LOCK TABLES `akun` WRITE;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` VALUES (1,1,'4.8','Muzakki entitas','kas','muzakki entitas','kas'),(2,1,'4.9','Muzakki individual','kas','muzakki individual','kas'),(3,1,'4.10','Hasil penempatan','kas','Hasil penempatan','kas'),(4,2,'5.13','Fakir - Miskin','Fakir - Miskin','kas','kredit'),(6,2,'5.14','Gharim','Gharim','kas','kredit'),(7,2,'5.15','Muallaf','Muallaf','kas','kredit'),(8,2,'5.16','Sabilillah','Sabilillah','kas','kredit'),(9,2,'5.17','Ibnu sabil','Ibnu sabil','kas','kredit'),(10,3,'4.11','Muqayyadah','Kas','Muqayyadah','kas'),(11,3,'4.12','Mutlaqah','Kas','Mutlaqah','kas'),(12,3,'4.13','Hasil pengelolaan','Kas','Hasil pengelolaan','kas'),(13,4,'5.18','Muqayyadah','Muqayyadah','kas','kredit'),(14,4,'5.19','Mutlaqah','Mutlaqah','kas','kredit'),(16,5,'4.1','Sumbangan','kas','Sumbangan','kas'),(17,5,'4.2','Bagian amil dari dana zakat','kas','Bagian amil dari dana zakat','kas'),(18,5,'4.3','Bagian amil dari dana infak sedekah','kas','Bagian amil dari dana infak sedekah','kas'),(21,7,'4.5','Bunga bank','Kas','Bunga bank','Kas'),(22,7,'4.6','Jasa giro','Kas','Jasa giro','Kas'),(23,7,'4.7','Penerimaan dana nonhalal lainnya','Kas','Penerimaan dana nonhalal lainnya','Kas'),(24,8,'5.11','Penggunaan dana nonhalal','Penggunaan dana nonhalal','Kas','Kas'),(25,8,'5.12','Beban administrasi bank','Beban administrasi bank','Kas','Kredit'),(26,17,'1.2','Setor','Setor','Kas','Kredit'),(27,18,'1.2','Tarik','Kas','Tarik','Kas'),(28,9,'1.4','Perlengkapan','Perlengkapan','Kas','Kredit'),(29,9,'2.1','Peralatan','Peralatan','Kas','Kredit'),(30,9,'2.3','Gedung dan Bangunan','Gedung dan Bangunan','Kas','Kredit'),(31,9,'2.5','Tanah','Tanah','Kas','Kredit'),(32,10,'1.4','Perlengkapan','Perlengkapan','Kas','Kredit'),(33,10,'2.1','Peralatan','Peralatan','Kas','Kredit'),(34,10,'2.3','Gedung dan Bangunan','Gedung dan Bangunan','Kas','Kredit'),(35,10,'2.5','Tanah','Tanah','Kas','Kredit'),(36,11,'1.4','Perlengkapan','Perlengkapan','Kas','Kredit'),(37,11,'2.1','Peralatan','Peralatan','Kas','Kredit'),(38,11,'2.3','Gedung dan Bangunan','Gedung dan Bangunan','Kas','Kredit'),(39,11,'2.5','Tanah','Tanah','Kas','Kredit'),(40,12,'1.4','Perlengkapan','Kas','Perlengkapan','Kas'),(41,12,'2.1','Peralatan','Kas','Peralatan','Kas'),(42,12,'2.3','Gedung dan Bangunan','Kas','Gedung dan Bangunan','Kas'),(43,12,'2.5','Tanah','Kas','Tanah','Kas'),(44,13,'5.1','Gaji','Gaji','Kas','Kredit'),(45,13,'5.2','Listrik','Listrik','Kas','Kredit'),(46,13,'5.3','Air','Air','Kas','Kredit'),(47,13,'5.4','Internet','Internet','Kas','Kredit'),(48,13,'5.5','Pemeliharaan','Pemeliharaan','Kas','Kredit'),(49,13,'5.6','Administrasi dan Umum','Administrasi dan Umum','Kas','Kredit'),(50,13,'5.7','Pajak','Pajak','Kas','Kredit'),(51,13,'5.8','PHBI','PHBI','Kas','Kredit'),(52,13,'5.9','Transportasi','Transportasi','Kas','Kredit'),(53,3,'2.1','Peralatan','Kas','Peralatan','kas'),(55,3,'2.3','Gedung dan Bangunan','Kas','Gedung dan Bangunan','kas'),(56,3,'2.5','Tanah','Kas','Tanah','kas'),(57,3,'2.2','Penyusutan Peralatan','B. P. Peralatan','A. P. Peralatan','Kredit'),(58,3,'2.4','Penyusutan Gedung dan Bangunan','B. P. Gedung dan Bangunan','A. P Gedung dan Bangunan','Kredit'),(59,9,'2.2','Penyusutan Peralatan','B. P. Peralatan','A. P. Peralatan','Kredit'),(60,9,'2.4','Penyusutan Gedung dan Bangunan','B. P. Gedung dan Bangunan','A. P. Gedung dan Bangunan','Kredit'),(61,10,'2.2','Penyusutan Peralatan','B. P. Peralatan','A. P. Peralatan','Kredit'),(62,10,'2.4','Penyusutan Gedung dan Bangunan','B. P. Gedung dan Bangunan','A. P. Gedung dan Bangunan','Kredit'),(63,11,'2.2','Penyusutan Peralatan','B. P Peralatan','A. P. Peralatan','Kredit'),(64,11,'2.4','Penyusutan Gedung dan Bangunan','B. P. Gedung dan Bangunan','A. P. Gedung dan Bangunan','Kredit'),(65,4,'2.1','Peralatan','Peralatan','Kas','Kredit'),(66,4,'2.3','Gedung dan Bangunan','Gedung dan Bangunan','Kas','Kredit'),(67,4,'2.5','Tanah','Tanah','Kas','Kredit'),(74,14,'2.3','Piutang','Piutang','Kas','Kredit'),(75,15,'2.3','Piutang','Kas','Piutang','Kas'),(76,15,'2.1','Utang Jangka Pendek','Utang Jangka Pendek','Kas','Kredit'),(77,15,'2.2','Utang Jangka Panjang','Utang Jangka Panjang','Kas','Kredit'),(78,16,'2.1','Utang Jangka Pendek','Kas','Utang Jangka Pendek','Kas'),(79,16,'2.2','Utang Jangka Panjang','Kas','Utang Jangka Panjang','Kas');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jangka_waktu`
--

DROP TABLE IF EXISTS `jangka_waktu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jangka_waktu` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_jangka_waktu` int(11) NOT NULL,
  `jangka_waktu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jangka_waktu_id_jangka_waktu_foreign` (`id_jangka_waktu`),
  CONSTRAINT `jangka_waktu_id_jangka_waktu_foreign` FOREIGN KEY (`id_jangka_waktu`) REFERENCES `aktivitas` (`id_aktivitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jangka_waktu`
--

LOCK TABLES `jangka_waktu` WRITE;
/*!40000 ALTER TABLE `jangka_waktu` DISABLE KEYS */;
/*!40000 ALTER TABLE `jangka_waktu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jurnal`
--

DROP TABLE IF EXISTS `jurnal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jurnal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_aktivitas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jangka_waktu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_akun` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_debet` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_kredit` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jurnal`
--

LOCK TABLES `jurnal` WRITE;
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
INSERT INTO `jurnal` VALUES (15,'5',NULL,'4.1','Coba du bos','1000000','1000000','2021-01-03 01:26:51','2021-01-03 01:51:43');
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2020_06_04_195613_create_aktivitas_table',1),(2,'2020_06_04_195613_create_akun_table',1),(3,'2020_06_04_195613_create_jurnal_table',1),(4,'2020_06_05_023259_create_jangka_waktu_table',1),(5,'2021_01_03_182519_create_aktivitas_table',0),(6,'2021_01_03_182519_create_akun_table',0),(7,'2021_01_03_182519_create_jangka_waktu_table',0),(8,'2021_01_03_182519_create_jurnal_table',0),(9,'2021_01_03_182521_add_foreign_keys_to_akun_table',0),(10,'2021_01_03_182521_add_foreign_keys_to_jangka_waktu_table',0),(11,'2021_01_03_182613_create_aktivitas_table',0),(12,'2021_01_03_182613_create_akun_table',0),(13,'2021_01_03_182613_create_jangka_waktu_table',0),(14,'2021_01_03_182613_create_jurnal_table',0),(15,'2021_01_03_182615_add_foreign_keys_to_akun_table',0),(16,'2021_01_03_182615_add_foreign_keys_to_jangka_waktu_table',0);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-04  3:24:42
