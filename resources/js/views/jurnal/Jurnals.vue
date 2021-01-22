<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Jurnal</h4>
                        <div class="add-items d-flex row">
                            <div class="col-lg-10">
                                <form v-on:submit.prevent>
                                    <input
                                        v-model="keywords"
                                        v-on:keyup="cari"
                                        type="search"
                                        class="form-control todo-list-input"
                                        placeholder="Cari jurnal"
                                    />
                                </form>
                            </div>
                            <div class="col-sm-2">
                                <button
                                    @click="reset" class="mt-1 btn btn-outline-danger float-left mb-4 btn-md btn-rounded"
                                >
                                    Reset
                                </button>
                            </div>
                        </div>
                        <div
                            v-if="loading"
                            class="d-flex justify-content-center mt-5"
                        >
                            <div class="dot-falling"></div>
                        </div>
                        <div
                            v-if="loading"
                            class="d-flex justify-content-center"
                        >
                            <div class=""><h4>Loading...</h4></div>
                        </div>
                        <div v-else class="loading">
                            <div class="col-12 mt-3" v-if="jurnals.data < 1">
                                <h6 class="text-danger text-center">
                                    Maaf data jurnal {{ keywords }} tidak
                                    ditemukan
                                </h6>
                            </div>
                            <div v-else>
                                <div v-if="!keywords">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr class="text-center">
                                                <th colspan="8">
                                                    <div class="text-title">
                                                        <h5 class="card-title">
                                                            Jurnal Tahun
                                                        </h5>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col" class="tgl">
                                                    Tgl
                                                </th>
                                                <th scope="col">Aktivitas</th>
                                                <th scope="col">No. Akun</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Debet</th>
                                                <th scope="col">Kredit</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                v-for="(jurnal,
                                                index) in jurnals.data"
                                                :key="index"
                                            >
                                                <td>{{ index + 1 }}</td>
                                                <td>{{ jurnal.created_at }}</td>
                                                <td>{{ jurnal.aktivitas }}</td>
                                                <td>{{ jurnal.no_akun }}</td>
                                                <td>{{ jurnal.keterangan }}</td>
                                                <td>
                                                    {{ jurnal.debet }}:
                                                    {{
                                                        jurnal.jum_debet
                                                            | currency
                                                    }}
                                                </td>
                                                <td>
                                                    {{ jurnal.kredit }}:
                                                    {{
                                                        jurnal.jum_kredit
                                                            | currency
                                                    }}
                                                </td>
                                                <td>
                                                    <!-- <button
                                                        @click="edit(jurnal.id)"
                                                        class="mt-1 btn btn-outline-warning btn-sm btn-rounded"
                                                    >
                                                        Update
                                                    </button> -->
                                                    <button
                                                        @click="
                                                            hapus(jurnal.id)
                                                        "
                                                        class="mt-1 btn btn-outline-danger btn-sm btn-rounded"
                                                    >
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div
                                        class="d-flex justify-content-center mt-2"
                                    >
                                        <pagination
                                            :data="jurnals"
                                            @pagination-change-page="getResult"
                                        >
                                            <span slot="prev-nav"
                                                >&lt; Previous</span
                                            >
                                            <span slot="next-nav"
                                                >Next &gt;</span
                                            >
                                        </pagination>
                                    </div>
                                </div>
                                <div v-if="keywords">
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr class="text-center">
                                                <th colspan="8">
                                                    <div class="text-title">
                                                        <h5 class="card-title">
                                                            Jurnal Tahun
                                                        </h5>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col" class="tgl">
                                                    Tgl
                                                </th>
                                                <th scope="col">Aktivitas</th>
                                                <th scope="col">No. Akun</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col">Debet</th>
                                                <th scope="col">Kredit</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr
                                                v-for="(jurnal,
                                                index) in jurnals.data"
                                                :key="index"
                                            >
                                                <td>{{ index + 1 }}</td>
                                                <td>{{ jurnal.created_at }}</td>
                                                <td>{{ jurnal.aktivitas }}</td>
                                                <td>{{ jurnal.no_akun }}</td>
                                                <td>{{ jurnal.keterangan }}</td>
                                                <td>
                                                    {{ jurnal.debet }}:
                                                    {{
                                                        jurnal.jum_debet
                                                            | currency
                                                    }}
                                                </td>
                                                <td>
                                                    {{ jurnal.kredit }}:
                                                    {{
                                                        jurnal.jum_kredit
                                                            | currency
                                                    }}
                                                </td>
                                                <td>
                                                    <button
                                                        @click="
                                                            hapus(jurnal.id)
                                                        "
                                                        class="mt-1 btn btn-outline-danger btn-sm btn-rounded"
                                                    >
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div
                                        class="d-flex justify-content-center mt-2"
                                    >
                                        <pagination
                                            :data="jurnals"
                                            @pagination-change-page="cari1"
                                        >
                                            <span slot="prev-nav"
                                                >&lt; Previous</span
                                            >
                                            <span slot="next-nav"
                                                >Next &gt;</span
                                            >
                                        </pagination>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import jsPDF from "jspdf";
import autoTable from "jspdf-autotable";

export default {
    data: function() {
        return {
            jurnals: {},
            keywords: "",
            message: "",
            loading: false
        };
    },
    mounted() {
        this.getResult();
        // this.generateReport()
    },
    methods: {
        cari() {
            if (this.keywords === "") {
                this.getResult();
            } else {
                this.cari1();
            }
        },
        reset() {
            this.message = "";
        },
        getResult(page) {
            this.loading = true;
            if (typeof page === "undefined") {
                page = 1;
            }
            axios
                .get("api/jurnals?page=" + page)
                .then(
                    res => ((this.jurnals = res.data), (this.loading = false))
                );
        },
        cari1(page) {
            if (typeof page === "undefined") {
                page = 1;
            }
            this.loading = true;
            axios
                .get("api/cari/" + this.keywords + "?page=" + page)
                .then(
                    res => ((this.jurnals = res.data), (this.loading = false))
                );
        },
        hapus(jurnal) {
            this.$swal({
                title: "Yakin?",
                text: "Anda masih dapat membatalkan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus"
            }).then(result => {
                if (result.isConfirmed) {
                    axios
                        .get("api/hapus/" + jurnal)
                        .then(
                            res => (
                                this.cari(),
                                this.$swal("Success", "Dihapus.", "success")
                            )
                        );
                }
            });
        },
        edit(jurnal) {
            this.$swal({
                title: "Submit new value",
                input: "text",
                inputAttributes: {
                    autocapitalize: "off"
                },
                showCancelButton: true,
                confirmButtonText: "Look up",
                showLoaderOnConfirm: true,
                preConfirm: result => {}
            }).then(result => {
                if (result.isConfirmed) {
                    console.log(result.value, jurnal);
                    axios.get("api/ubah/" + jurnal + "-" + result.value).then(
                        res =>
                            // this.cari(),
                            console.log(res),
                        this.$swal("Success", "diubah", "success")
                    );
                }
            });
        },
        reset(){
             this.$swal({
                title: "Yakin?",
                text: "Anda masih dapat membatalkan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Reset"
            }).then(result => {
                if (result.isConfirmed) {
                    axios
                        .get("api/reset/")
                        .then(
                            res => (
                                this.cari(),
                                this.$swal("Success", "Direset.", "success")
                            )
                        );
                }
            });
        },
        generateReport() {
            if (this.$route.params.Report) {
                if (this.jurnals) {
                    if (this.$route.params.Report == "Jurnals") {
                        const doc = new jsPDF("p", "pt");
                        autoTable(doc, { margin: { top: 60 }, html: "table" });
                        doc.setPage(1);
                        doc.text("To Do List", 40, 40);
                        doc.save("table.pdf");
                    }
                }
            }
        }
    }
};
</script>
