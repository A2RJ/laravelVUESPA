<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-responsive">
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
                                <td>{{ data.lancarKas | currency }}</td>
                                <td>{{ data.lancarKredit | currency }}</td>
                                <td>{{ data.penyisihan | currency }}</td>
                                <td>-</td>
                                <td>
                                    {{
                                        (data.lancarKas -
                                            data.lancarKredit -
                                            data.penyisihan)
                                            | currency
                                    }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Dana infak/sedekah - aset kelolaan tidak
                                    lancar
                                </td>
                                <td>Saldo Awal</td>
                                <td>{{ data.tdkLancarKas | currency }}</td>
                                <td>{{ data.tdkLancarKredit | currency }}</td>
                                <td>-</td>
                                <td>{{ data.penyusutan | currency }}</td>
                                <td>{{ data.jumlahTdkLancar | currency }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <button @click="generateReport">Click</button> -->
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
            .get("api/laporan/lpak")
            .then(
                response => ((this.data = response.data), this.generateReport())
            )
            .catch(error => console.log(error));
    },
    methods: {
        generateReport() {
            if (this.$route.params.Report) {
                if (this.$route.params.Report == "PAK") {
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
