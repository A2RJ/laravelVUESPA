<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Laporan Keuangan</title>
    <style>
        table {
            width: 700px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table.center {
            margin-left: auto;
            margin-right: auto;
        }

        h4.center {
            text-align: center;
        }

        .page_break {
            page-break-before: always;
        }

        #footer {
            position: fixed;
            right: 0px;
            bottom: 10px;
            text-align: center;
            border-top: 1px solid black;
        }

        #footer .page:after {
            content: counter(page, decimal);
        }

        .top {
            text-align: center;
        }

        .top img {
            display: block;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="top bold">
        <h4> LAPORAN KEUANGAN</h4>
        <h4>SISTEM INFORMASI AKUNTANSI KEUANGAN MASJID</h4>
        <h4>(SIKANGMAS)</h4>
        <h4>Tahun <?= date("Y") ?></h4>
        <!-- <img src="{{ public_path('a.jpg') }}" style="width:200px;"> -->
    </div>

    <div id="footer">
        <p class="page">Page </p>
    </div>

    <div class="page_break"></div>

    <h4 class="center">Laporan Jurnal</h4>
    <table class="center">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal</th>
                <th>Aktivitas</th>
                <th>Akun</th>
                <th>Keterangan</th>
                <th>Debet</th>
                <th>Kredit</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($jurnal as $p) { ?>
                <tr>
                    <th>
                        <?= $i;
                        $i++; ?>
                    </th>
                    <td><?= $p->created_at ?></td>
                    <td><?= $p->aktivitas ?></td>
                    <td><?= $p->no_akun . " " . $p->akun ?></td>
                    <td><?= $p->keterangan ?></td>
                    <td><?= $p->debet . " <br> " . "RP. " . number_format($p->jum_debet) ?></td>
                    <td><?= $p->kredit . " <br> " . "RP. " . number_format($p->jum_debet) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


    <div class="page_break"></div>

    <h4 class="center">Laporan Posisi Keuangan</h4>
    <table class="">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
            </tr>
            <tr>
                <td class="bold">Aktiva lancar</td>
                <td></td>
                <td class="bold">Kewajiban</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kas</td>
                <td>RP. {{ number_format($lpk['kas']) }}</td>
                <td>Utang jangka pendek</td>
                <td>RP. {{ number_format($lpk['UJPendek']) }}</td>
            </tr>
            <tr>
                <td>Bank</td>
                <td>RP. {{ number_format(number_format($lpk['bank'])) }}</td>
                <td>Utang jangka panjang</td>
                <td>RP. {{ number_format($lpk['UJPanjang']) }}</td>
            </tr>
            <tr>
                <td>Piutang</td>
                <td>RP. {{ number_format($lpk['piutang']) }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Perlengkapan</td>
                <td>RP. {{ number_format($lpk['perlengkapan']) }}</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="bold">Jumlah</td>
                <td>
                    RP. {{ number_format(($lpk['kas'] + $lpk['bank'] + $lpk['piutang'] + $lpk['perlengkapan'])) }}
                </td>
                <td class="bold">Jumlah</td>
                <td>RP. {{ number_format($lpk['UJPendek'] + $lpk['UJPanjang']) }}</td>
            </tr>
            <tr>
                <td class="bold">Aktiva tetap</td>
                <td></td>
                <td class="bold">Saldo dana</td>
                <td></td>
            </tr>
            <tr>
                <td>Peralatan</td>
                <td>RP. {{ number_format($lpk['peralatan']) }}</td>
                <td>Dana zakat</td>
                <td>RP. {{ number_format($lpk['zakat']) }}</td>
            </tr>
            <tr>
                <td>Akumulasi penyusutan peralatan</td>
                <td>RP. {{ number_format($lpk['AkmPeralatan']) }}</td>
                <td>Dana infak/sedekah</td>
                <td>RP. {{ number_format($lpk['infak']) }}</td>
            </tr>
            <tr>
                <td>Gedung dan bangunan</td>
                <td>RP. {{ number_format($lpk['gnb']) }}</td>
                <td>Dana amil</td>
                <td>RP. {{ number_format($lpk['amil']) }}</td>
            </tr>
            <tr>
                <td>
                    Akumulasi penyusutan gedung dan bangunan
                </td>
                <td>RP. {{ number_format($lpk['AkmGnB']) }}</td>
                <td>Dana non halal</td>
                <td>RP. {{ number_format($lpk['nonHalal']) }}</td>
            </tr>
            <tr>
                <td>Tanah</td>
                <td>RP. {{ number_format($lpk['tanah']) }}</td>
                <td>Jumlah dana</td>
                <td>
                    RP. {{ number_format(($lpk['zakat'] + $lpk['infak'] + $lpk['amil'] + $lpk['nonHalal'])) }}
                </td>
            </tr>
            <tr>
                <td class="bold">Jumlah Aset</td>
                <td>
                    RP. {{ number_format(($lpk['kas'] +
                        $lpk['bank'] +
                        $lpk['piutang'] +
                        $lpk['perlengkapan'] +
                        $lpk['peralatan'] +
                        $lpk['gnb'] +
                        $lpk['tanah'] -
                        ($lpk['AkmPeralatan'] + $lpk['AkmGnB']))) }}
                </td>
                <td class="bold">Jumlah Kewajiban dan Saldo Dana</td>
                <td>
                    RP. {{
                        number_format(($lpk['zakat'] +
                            $lpk['infak'] +
                            $lpk['amil'] +
                            $lpk['nonHalal'] +
                            $lpk['UJPendek'] +
                            $lpk['UJPanjang']))
                    }}
                </td>
            </tr>
        </tbody>
    </table>

    <div class="page_break"></div>

    <h4 class="center">Laporan Arus Kas</h4>
    <table class="">
        <thead>
            <tr>
                <th colspan="4">Aktivitas operasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2.1</td>
                <td>Sumbangan</td>
                <td>RP. {{ number_format($arusKas['sumbangan']) }}</td>
                <td rowspan="5"></td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>Infaq</td>
                <td>RP. {{ number_format($arusKas['amilInfak']) }}</td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>sakat</td>
                <td>RP. {{ number_format($arusKas['amilzakat']) }}</td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>Bank</td>
                <td>RP. {{ number_format($arusKas['tarik']) }}</td>
            </tr>
            <tr>
                <td>1.3</td>
                <td>Piutang</td>
                <td>RP. {{ number_format($arusKas['piutangKas']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['aktivitasKas']) }}</td>
            </tr>
            <tr>
                <td colspan="4" class="bold">
                    Beban
                </td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>Bank</td>
                <td>RP. {{ number_format($arusKas['setor']) }}</td>
                <td rowspan="13"></td>
            </tr>
            <tr>
                <td>1.4</td>
                <td>Perlengkapan</td>
                <td>RP. {{ number_format($arusKas['perlengkapan']) }}</td>
            </tr>
            <tr>
                <td>2.1</td>
                <td>Utang Jangka Pendek</td>
                <td>RP. {{ number_format($arusKas['utangPendek']) }}</td>
            </tr>
            <tr>
                <td>2.2</td>
                <td>Utang Jangka Panjang</td>
                <td>RP. {{ number_format($arusKas['utangPanjang']) }}</td>
            </tr>
            <tr>
                <td>5.1</td>
                <td>Beban Gaji</td>
                <td>RP. {{ number_format($arusKas['gaji']) }}</td>
            </tr>
            <tr>
                <td>5.2</td>
                <td>Beban listrik</td>
                <td>RP. {{ number_format($arusKas['listrik']) }}</td>
            </tr>
            <tr>
                <td>5.3</td>
                <td>Beban air</td>
                <td>RP. {{ number_format($arusKas['air']) }}</td>
            </tr>
            <tr>
                <td>5.4</td>
                <td>Beban internet</td>
                <td>RP. {{ number_format($arusKas['internet']) }}</td>
            </tr>
            <tr>
                <td>5.5</td>
                <td>Beban Pemeliharaan</td>
                <td>RP. {{ number_format($arusKas['pemeliharaan']) }}</td>
            </tr>
            <tr>
                <td>5.6</td>
                <td>Beban administasi dan umum</td>
                <td>RP. {{ number_format($arusKas['adminUmum']) }}</td>
            </tr>
            <tr>
                <td>5.7</td>
                <td>Beban Pajak</td>
                <td>RP. {{ number_format($arusKas['pajak']) }}</td>
            </tr>
            <tr>
                <td>5.9</td>
                <td>Beban PHBI</td>
                <td>RP. {{ number_format($arusKas['phbi']) }}</td>
            </tr>
            <tr>
                <td>5.9</td>
                <td>Beban Transportasi</td>
                <td>RP. {{ number_format($arusKas['transportasi']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['aktivitasKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Total</td>
                <td>RP. {{ number_format(($arusKas['aktivitasKas'] - $arusKas['aktivitasKredit'])) }}</td>
            </tr>

            <tr class="bold">
                <td colspan="4" class="bold">
                    Aktivitas investasi
                </td>
            </tr>
            <tr>
                <td>1.5</td>
                <td>Peralatan</td>
                <td>RP. {{ number_format($arusKas['peralatanKas']) }}</td>
                <td rowspan="3"></td>
            </tr>
            <tr>
                <td>1.7</td>
                <td>Gedung dan Bangunan</td>
                <td>RP. {{ number_format($arusKas['gnbKas']) }}</td>
            </tr>
            <tr>
                <td>1.9</td>
                <td>Tanah</td>
                <td>RP. {{ number_format($arusKas['tanahKas']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['investasiKas']) }}</td>
            </tr>
            <tr>
                <td>1.5</td>
                <td>Peralatan</td>
                <td>RP. {{ number_format($arusKas['peralatanKredit']) }}</td>
                <td rowspan="3"></td>
            </tr>
            <tr>
                <td>1.7</td>
                <td>Gedung dan Bangunan</td>
                <td>RP. {{ number_format($arusKas['gnbKredit']) }}</td>
            </tr>
            <tr>
                <td>1.9</td>
                <td>Tanah</td>
                <td>RP. {{ number_format($arusKas['tanahKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['investasiKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Total</td>
                <td>RP.
                    {{
                        number_format(($arusKas['investasiKas'] - $arusKas['investasiKredit']))
                    }}
                </td>
            </tr>
            <tr class="bold">
                <td colspan="4" class="bold">
                    Aktivitas Pendanaan
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Penerimaan Peminjaman</td>
                <td rowspan="3"></td>
            </tr>
            <tr>
                <td>2.1</td>
                <td>Utang Jangka Pendek</td>
                <td>RP. {{ number_format($arusKas['utangJPendek']) }}</td>
            </tr>
            <tr>
                <td>2.2</td>
                <td>Utang Jangka Panjang</td>
                <td>RP. {{ number_format($arusKas['utangJPanjang']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['pendanaanKas']) }}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2">Pemberian Peminjaman</td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td>1.3</td>
                <td>Piutang</td>
                <td>RP. {{ number_format($arusKas['piutangKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Jumlah</td>
                <td>RP. {{ number_format($arusKas['piutangKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td></td>
                <td colspan="2">Total</td>
                <td>RP.
                    {{
                        number_format(($arusKas['pendanaanKas'] - $arusKas['piutangKredit']))
                    }}
                </td>
            </tr>

            <tr>
                <td colspan="4"></td>
            </tr>
            <tr class="bold">
                <td colspan="3">Kenaikan/Penurunan kas</td>
                <td>RP.
                    {{
                        number_format(($arusKas['aktivitasKas'] -
                            $arusKas['aktivitasKredit'] +
                            $arusKas['investasiKas'] -
                            $arusKas['investasiKredit'] +
                            $arusKas['pendanaanKas'] -
                            $arusKas['piutangKredit']))
                    }}

                </td>
            </tr>
            <tr class="bold">
                <td colspan="3">Kas setara kas awal tahun</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td colspan="3">Kas setara kas akhir tahun</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="page_break"></div>

    <h4 class="center">Laporan Perubahan Dana</h4>
    <table class="">
        <thead>
            <tr class="bold">
                <th>Keterangan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bold">
                <td>Dana zakat</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penerimaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Penerimaan dari muzakki</td>
                <td></td>
            </tr>
            <tr>
                <td>muzakki entitas</td>
                <td>RP. {{ number_format($lpd['entitas']) }}</td>
            </tr>
            <tr>
                <td>Muzakki individual</td>
                <td>RP. {{ number_format($lpd['individual']) }}</td>
            </tr>
            <tr>
                <td>Hasil penempatan</td>
                <td>RP. {{ number_format($lpd['penempatan']) }}</td>
            </tr>
            <tr>
                <td>
                    Jumlah penerimaan dana zakat
                </td>
                <td>RP.
                    {{
                        number_format(($lpd['penempatan'] +
                            $lpd['entitas'] +
                            $lpd['individual']))
                    }}
                </td>
            </tr>
            <tr>
                <td>Bagian amil atas penerimaan dana zakat</td>
                <td>RP. {{ number_format($lpd['amilzakat']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    jumlah penerimaan dana zakat setelah bagian amil
                </td>
                <td>RP.
                    {{
                        number_format(($lpd['penerimaanZakat'] + $lpd['amilzakat']))
                    }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penyaluran</td>
                <td></td>
            </tr>
            <tr>
                <td>Fakir-Miskin</td>
                <td>RP. {{ number_format($lpd['fakir']) }}</td>
            </tr>
            <tr>
                <td>Gharim</td>
                <td>RP. {{ number_format($lpd['gharim']) }}</td>
            </tr>
            <tr>
                <td>Muallaf</td>
                <td>RP. {{ number_format($lpd['muallaf']) }}</td>
            </tr>
            <tr>
                <td>Sabilillah</td>
                <td>RP. {{ number_format($lpd['sabilillah']) }}</td>
            </tr>
            <tr>
                <td>Ibnu sabil</td>
                <td>RP. {{ number_format($lpd['ibnuSabil']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penyaluran dana zakat
                </td>
                <td>RP. {{ number_format($lpd['penyaluranZakat']) }}</td>
            </tr>
            <tr class="bold">
                <td>Surplus (Defisit)</td>
                <td>RP.
                    {{
                        number_format(($lpd['penerimaanZakat'] +
                            $lpd['amilzakat'] -
                            $lpd['penyaluranZakat']))
                    }}
                </td>
            </tr>
            <tr class="bold">
                <td>Saldo awal</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Saldo akhir</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>DANA INFAK/SEDEKAH</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penerimaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Muqayyadah</td>
                <td>RP. {{ number_format($lpd['muqayyadahKas']) }}</td>
            </tr>
            <tr>
                <td>Mutlaqah</td>
                <td>RP. {{ number_format($lpd['mutlaqahKas']) }}</td>
            </tr>
            <tr>
                <td>peralatan</td>
                <td>RP. {{ number_format($lpd['peralatan3']) }}</td>
            </tr>
            <tr>
                <td>Gedung dan Bangunan</td>
                <td>RP. {{ number_format($lpd['gnb3']) }}</td>
            </tr>
            <tr>
                <td>Tanah</td>
                <td>RP. {{ number_format($lpd['tanah3']) }}</td>
            </tr>
            <tr>
                <td>
                    Bagian amil atas penerimaan dana infak/sedekah
                </td>
                <td>RP. {{ number_format($lpd['amilinfak']) }}</td>
            </tr>
            <tr>
                <td>Hasil pengelolaan</td>
                <td>RP. {{ number_format($lpd['pengelolaan']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penerimaan dana infak/sedekah
                </td>
                <td>RP.
                    {{
                        number_format(($lpd['penerimaanInfak'] + $lpd['amilinfak']))
                    }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penyaluran</td>
                <td></td>
            </tr>
            <tr>
                <td>Muqayyadah</td>
                <td>RP. {{ number_format($lpd['muqayyadahKredit']) }}</td>
            </tr>
            <tr>
                <td>Mutlaqah</td>
                <td>RP. {{ number_format($lpd['mutlaqahKredit']) }}</td>
            </tr>
            <tr>
                <td>peralatan</td>
                <td>RP. {{ number_format($lpd['peralatan4']) }}</td>
            </tr>
            <tr>
                <td>Gedung dan Bangunan</td>
                <td>RP. {{ number_format($lpd['gnb4']) }}</td>
            </tr>
            <tr>
                <td>Tanah</td>
                <td>RP. {{ number_format($lpd['tanah4']) }}</td>
            </tr>
            <tr>
                <td>
                    Akumulasi penyusutan dan penyisihan Peralatan
                </td>
                <td>RP. {{ number_format($lpd['APperalatan']) }}</td>
            </tr>
            <tr>
                <td>
                    Akumulasi penyusutan dan penyisihan Gedung dan
                    Bangunan
                </td>
                <td>RP. {{ number_format($lpd['APgnb']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penyaluran dana infak/sedekah
                </td>
                <td>RP. {{ number_format($lpd['penyaluranInfak']) }}</td>
            </tr>
            <tr class="bold">
                <td>Surplus (Defisit)</td>
                <td>RP.
                    {{
                        number_format(($lpd['penerimaanInfak'] -
                                        $lpd['penyaluranInfak']))
                    }}
                </td>
            </tr>
            <tr class="bold">
                <td>Saldo awal</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Saldo akhir</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>DANA AMIL</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penerimaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Bagian amil dari dana zakat</td>
                <td>RP. {{ number_format($lpd['amilzakat']) }}</td>
            </tr>
            <tr>
                <td>Bagian amil dari dana infak/sedekah</td>
                <td>RP. {{ number_format($lpd['amilinfak']) }}</td>
            </tr>
            <tr>
                <td>Sumbangan</td>
                <td>RP. {{ number_format($lpd['sumbangan']) }}</td>
            </tr>
            <tr>
                <td>Penerimaan lainnya</td>
                <td>RP. {{ number_format($lpd['penerimaanAmil']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penerimaan dana amil dan lainnya
                </td>
                <td>RP.
                    {{
                        number_format(($lpd['amilinfak'] +
                            $lpd['amilzakat'] +
                            $lpd['sumbangan'] +
                            $lpd['penerimaanAmil']))
                    }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penggunaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Penggunaan dana amil</td>
                <td>RP. {{ number_format($lpd['bebanAmil']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penggunaan dana amil
                </td>
                <td>RP. {{ number_format($lpd['bebanAmil']) }}</td>
            </tr>
            <tr class="bold">
                <td>Surplus (Defisit)</td>
                <td>RP.
                    {{
                        number_format(($lpd['amilinfak'] +
                            $lpd['amilzakat'] +
                            $lpd['sumbangan'] +
                            $lpd['penerimaanAmil'] -
                            $lpd['bebanAmil']))
                    }}
                </td>
            </tr>
            <tr class="bold">
                <td>Saldo awal</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Saldo akhir</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>DANA NONHALAL</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penerimaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Bunga bank</td>
                <td>RP. {{ number_format($lpd['bungaBank']) }}</td>
            </tr>
            <tr>
                <td>Jasa giro</td>
                <td>RP. {{ number_format($lpd['giro']) }}</td>
            </tr>
            <tr>
                <td>Penerimaan nonhalal lainnya</td>
                <td>RP. {{ number_format($lpd['nonHalalLainKas']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penerimaan dana nonhalal
                </td>
                <td>RP. {{ number_format($lpd['penerimaanNonHalal']) }}</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Penggunaan</td>
                <td></td>
            </tr>
            <tr>
                <td>Administrasi Bank</td>
                <td>RP. {{ number_format($lpd['administrasiBank']) }}</td>
            </tr>
            <tr>
                <td>Penggunaan dana nonhalal lainnya</td>
                <td>RP. {{ number_format($lpd['nonHalalLainKredit']) }}</td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah penggunaan dana nonhalal
                </td>
                <td>RP. {{ number_format($lpd['penyaluranNonHalal']) }}</td>
            </tr>
            <tr class="bold">
                <td>Surplus (Defisit)</td>
                <td>RP.
                    {{
                        number_format(($lpd['penerimaanNonHalal'] - $lpd['penyaluranNonHalal']))
                    }}
                </td>
            </tr>
            <tr class="bold">
                <td>Saldo awal</td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>Saldo akhir</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="bold">
                <td>
                    Jumlah saldo dana zakat, dana infak/sedekah,
                    dana amil dan dana nonhalal.
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="page_break"></div>

    <h4 class="center">Laporan Perubahan Aset Kelolaan</h4>
    <table class="">
        <thead class="mt-5">
            <tr>
                <th></th>
                <th>Saldo awal</th>
                <th>Penambahan</th>
                <th>Penggunaan</th>
                <th>Penyisihan</th>
                <th>Akumulasi Penyusutan</th>
                <th>Saldo akhir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    Dana infak/sedekah - aset kelolaan lancar
                </td>
                <td>Saldo Awal</td>
                <td>{{ number_format($lpak['lancarKas']) }}</td>
                <td>{{ number_format($lpak['lancarKredit']) }}</td>
                <td>{{ number_format($lpak['penyisihan']) }}</td>
                <td>-</td>
                <td>RP.
                    {{
                        number_format(($lpak['lancarKas'] -
                            $lpak['lancarKredit'] -
                            $lpak['penyisihan']))
                    }}
                </td>
            </tr>
            <tr>
                <td>
                    Dana infak/sedekah - aset kelolaan tidak
                    lancar
                </td>
                <td>Saldo Awal</td>
                <td>{{ number_format($lpak['tdkLancarKas']) }}</td>
                <td>{{ number_format($lpak['tdkLancarKredit']) }}</td>
                <td>-</td>
                <td>{{ number_format($lpak['penyusutan']) }}</td>
                <td>{{ number_format($lpak['jumlahTdkLancar']) }}</td>
            </tr>
        </tbody>
    </table>


</body>

</html>