<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th colspan="4">Aktivitas operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2.1</td>
                                <td>Sumbangan</td>
                                <td>{{ data.sumbangan | currency }}</td>
                                <td rowspan="5"></td>
                            </tr>
                            <tr>
                                <td>1.2</td>
                                <td>Infaq</td>
                                <td>{{ data.amilInfak | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.2</td>
                                <td>sakat</td>
                                <td>{{ data.amilzakat | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.2</td>
                                <td>Bank</td>
                                <td>{{ data.tarik | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.3</td>
                                <td>Piutang</td>
                                <td>{{ data.piutangKas | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.aktivitasKas | currency }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="font-weight-bold">
                                    Beban
                                </td>
                            </tr>
                            <tr>
                                <td>1.2</td>
                                <td>Bank</td>
                                <td>{{ data.setor | currency }}</td>
                                <td rowspan="13"></td>
                            </tr>
                            <tr>
                                <td>1.4</td>
                                <td>Perlengkapan</td>
                                <td>{{ data.perlengkapan | currency }}</td>
                            </tr>
                            <tr>
                                <td>2.1</td>
                                <td>Utang Jangka Pendek</td>
                                <td>{{ data.utangPendek | currency }}</td>
                            </tr>
                            <tr>
                                <td>2.2</td>
                                <td>Utang Jangka Panjang</td>
                                <td>{{ data.utangPanjang | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.1</td>
                                <td>Beban Gaji</td>
                                <td>{{ data.gaji | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.2</td>
                                <td>Beban listrik</td>
                                <td>{{ data.listrik | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.3</td>
                                <td>Beban air</td>
                                <td>{{ data.air | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.4</td>
                                <td>Beban internet</td>
                                <td>{{ data.internet | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.5</td>
                                <td>Beban Pemeliharaan</td>
                                <td>{{ data.pemeliharaan | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.6</td>
                                <td>Beban administasi dan umum</td>
                                <td>{{ data.adminUmum | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.7</td>
                                <td>Beban Pajak</td>
                                <td>{{ data.pajak | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.9</td>
                                <td>Beban PHBI</td>
                                <td>{{ data.phbi | currency }}</td>
                            </tr>
                            <tr>
                                <td>5.9</td>
                                <td>Beban Transportasi</td>
                                <td>{{ data.transportasi | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.aktivitasKredit | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Total</td>
                                <td>
                                    {{
                                        (data.aktivitasKas -
                                            data.aktivitasKredit)
                                            | currency
                                    }}
                                </td>
                            </tr>

                            <tr class="bold">
                                <td colspan="4" class="font-weight-bold">
                                    Aktivitas investasi
                                </td>
                            </tr>
                            <tr>
                                <td>1.5</td>
                                <td>Peralatan</td>
                                <td>{{ data.peralatanKas | currency }}</td>
                                <td rowspan="3"></td>
                            </tr>
                            <tr>
                                <td>1.7</td>
                                <td>Gedung dan Bangunan</td>
                                <td>{{ data.gnbKas | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.9</td>
                                <td>Tanah</td>
                                <td>{{ data.tanahKas | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.investasiKas | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.5</td>
                                <td>Peralatan</td>
                                <td>{{ data.peralatanKredit | currency }}</td>
                                <td rowspan="3"></td>
                            </tr>
                            <tr>
                                <td>1.7</td>
                                <td>Gedung dan Bangunan</td>
                                <td>{{ data.gnbKredit | currency }}</td>
                            </tr>
                            <tr>
                                <td>1.9</td>
                                <td>Tanah</td>
                                <td>{{ data.tanahKredit | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.investasiKredit | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Total</td>
                                <td>
                                    {{
                                        (data.investasiKas -
                                            data.investasiKredit)
                                            | currency
                                    }}
                                </td>
                            </tr>
                            <tr class="bold">
                                <td colspan="4" class="font-weight-bold">
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
                                <td>{{ data.utangJPendek | currency }}</td>
                            </tr>
                            <tr>
                                <td>2.2</td>
                                <td>Utang Jangka Panjang</td>
                                <td>{{ data.utangJPanjang | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.pendanaanKas | currency }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">Pemberian Peminjaman</td>
                                <td rowspan="2"></td>
                            </tr>
                            <tr>
                                <td>1.3</td>
                                <td>Piutang</td>
                                <td>{{ data.piutangKredit | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Jumlah</td>
                                <td>{{ data.piutangKredit | currency }}</td>
                            </tr>
                            <tr class="bold">
                                <td></td>
                                <td colspan="2">Total</td>
                                <td>
                                    {{
                                        (data.pendanaanKas -
                                            data.piutangKredit)
                                            | currency
                                    }}
                                </td>
                            </tr>

                            <tr>
                                <td colspan="4"></td>
                            </tr>
                            <tr class="bold">
                                <td colspan="3">Kenaikan/Penurunan kas</td>
                                <td>
                                    {{
                                        (data.aktivitasKas -
                                            data.aktivitasKredit +
                                            data.investasiKas -
                                            data.investasiKredit +
                                            data.pendanaanKas -
                                            data.piutangKredit)
                                            | currency
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
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import jsPDF from "jspdf";
import autoTable from "jspdf-autotable";

export default {
    data() {
        return {
            data: []
        };
    },
    mounted() {
        axios
            .get("api/laporan/arusKas")
            .then(
                response => ((this.data = response.data), this.generateReport())
            )
            .catch(error => console.log(error));
    },
    methods: {
        generateReport() {
            if (this.$route.params.Report) {
                if (this.$route.params.Report == "ArusKas") {
                    const doc = new jsPDF("p", "pt");
                    autoTable(doc, { margin: { top: 60 }, html: "table" });
                    doc.setPage(1);
                    doc.text("To Do List", 40, 40);
                    doc.save("table.pdf");
                }
            }
        }
    }
};
</script>

<style></style>
