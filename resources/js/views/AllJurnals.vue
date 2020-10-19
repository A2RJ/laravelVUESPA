<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <form v-on:submit.prevent>
                        <input type="text" v-model="keywords" placeholder="Search for customers..." />
                    </form>
                    <a
                    href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
                    target="_blank"
                    class="btn download-button purchase-button ml-auto"
                    >Upgrade To Pro</a
                    >
                </span>
            </div>
            <div class="col-12">
                <table class="table table-responsive">
                    <thead>
                        <!-- <div class="col-8 offset-2">
                            <h6 class="text-danger text-center">Maaf data jurnal tahun  tidak ditemukan, <a href="<?= base_url('Sikangmas'); ?>">Batal</a></h6>
                        </div> -->
                        <tr class="text-center">
                            <th colspan="8">
                                <div class="text-title">
                                    <h5>Jurnal Tahun</h5>
                            </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col" class="tgl">Tgl</th>
                            <th scope="col">Aktivitas</th>
                            <th scope="col">No. Akun</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Debet</th>
                            <th scope="col">Kredit</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(jurnal, index) in jurnals" :key="jurnal.index">
                            <td>{{ index+1 }}</td>
                            <td>{{ jurnal.created_at }}</td>
                            <td>{{ jurnal.aktivitas }}</td>
                            <td>{{ jurnal.no_akun }}</td>
                            <td>{{ jurnal.keterangan }}</td>
                            <td>{{ jurnal.debet }}: {{ jurnal.jum_debet }}</td>
                            <td>{{ jurnal.kredit }}: {{ jurnal.jum_kredit }}</td>
                            <td>
                                <button @click="edit(user)" class="btn btn-sm btn-outline-warning btn-rounded">Edit</button> ||  <button @click="del(user)" class="mt-1 btn btn-outline-danger btn-sm btn-rounded">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center mt-2">
                    <pagination :data="jurnals" @pagination-change-page="getResult">
                        <span slot="prev-nav">&lt; Previous</span>
                        <span slot="next-nav">Next &gt;</span>
                    </pagination>
                </div>
               
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                jurnals: {},
                keywords: null
            }
        },
        mounted() {
            this.getResult();
        },
        watch: {
            keywords(after, before) {
                this.coba();
            }
        },
        methods: {
            getResult(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }
            axios.get('api/jurnals?page=' + page)
                .then(response => {
                    return response.data;
                }).then(data => {
                    this.jurnals = data.data;
                });
            },
            coba(){
                axios.get('api/jurnals/cari/' + this.keywords)
                // .then(response => (console.log(response.data)))
                .then(response => {
                    return response.data;
                }).then(data => {
                    this.jurnals = data.data;
                });
            }
        }
    }
</script>