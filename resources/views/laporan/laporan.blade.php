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
    </style>
</head>

<body>
    <h4 class="center">Laporan Keuangan SIKANGMAS <?= date("Y") ?></h4>
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
                    <td><?= $p->debet . " <br> " . $p->jum_debet ?></td>
                    <td><?= $p->kredit . " <br> " . $p->jum_debet ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div id="footer">
        <p class="page">Page </p>
    </div>

    <div class="page_break"></div>

    <h4 class="center">Laporan Keuangan SIKANGMAS <?= date("Y") ?></h4>
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
                    <td><?= $p->debet . " <br> " . $p->jum_debet ?></td>
                    <td><?= $p->kredit . " <br> " . $p->jum_debet ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <div class="page_break"></div>

    <h4 class="center">Laporan Keuangan SIKANGMAS <?= date("Y") ?></h4>
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
                    <td><?= $p->debet . " <br> " . $p->jum_debet ?></td>
                    <td><?= $p->kredit . " <br> " . $p->jum_debet ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

</html>