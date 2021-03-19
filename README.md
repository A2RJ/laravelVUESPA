# Revisi

-   (Sudah) Aktivitas kredit di halaman lain
    Aktivitas ini hanya ada di LPK, untuk setiap data masuk ke akun masing2 misal
    perlengkapan, peralatan, gedung, tanah dan akumulasi/penyusutan. sedangkan
    UJPendek dan UJPanjang nilainya diambil dari jangka waktu masing2 akun.

-   (Sudah) LPK
    Perhitungan pembelian cicilan (input, validasi nominal-utang, panggil nilai diLPK atau halaman lain)
    Aktivitas ini ada di LPK mirip seperti pembelian kredit tetapi untuk akun masing2 misal
    perlengkapan, peralatan, gedung, tanah dan akumulasi/penyusutan diambil dari debet,
    untuk kas ambil dari kredit dan UJPendek dan UJPanjang ambil dari utang.

-   (Sudah) Arus Kas
    Untuk akun diatas ada juga di Arus Kas mengambil nilai dari debet
    Perlengkapan (Beban), peralatan, gedung, tanah (Aktivitas investasi Kredit)

-   Perhitungan aktivitas peminjaman 14, 15 dan 16 pelajari SIKANGMAS lama, pada halaman LPK dan Arus Kas

-   Revisi jurnal agar sesuai dengan konsep awal misal pembelian kredit (Perlengkapan rp.0 dan UJPanjang rp.0)
    sekarang masih Perlengkapan rp.0 dan kas rp.0

-   Penyusutan dan kas masuk (uang dp yg dibayar) berasal pembelian kredit tambah di dana amil LPD
-   Validasi perhitungan
-   Laporan (pdf)
-   Login
-   Kelola user
-   Kalkulator zakat
-   Fitur depresiasi
    <h1 align="center">Welcome to laravelVUESPA 👋</h1>
    <p><img alt="Version" src="https://img.shields.io/badge/version-2.0.0-blue.svg?cacheSeconds=2592000" /></p>

> Accounting application final project

## Install

```sh
npm i && composer update
```

## Usage

```
Clone this repo
Import MySQL DB in storage/backup
```

## Optional

```
//Backup and restore DB
Backup DB php artisan make:mysqlbackup DBName sql
Restore DB php artisan mysql:restore DBName
//Create migration from current table schema
php artisan migrate:generate
```

## Run tests

```sh
npm run watch
npm run php
```

## Author

👤 **a2rj**

-   Github: [@a2rj](https://github.com/a2rj)
-   LinkedIn: [@a2rj](https://linkedin.com/in/a2rj)

## Show your support

Give a ⭐️ if this project helped you!

<a href="https://www.patreon.com/a2rj">
  <img src="https://c5.patreon.com/external/logo/become_a_patron_button@2x.png" width="160">
</a>

---

_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
