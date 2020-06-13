<template>
    <div class="container">
        <div class="row"> 
            <div class="col-12">
                <table class="table">
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
                        <tr v-for="jurnal in jurnals" :key="jurnal.id">
                            <td>{{ jurnal.id }}</td>
                            <td>{{ jurnal.created_at }}</td>
                            <td>{{ jurnal.aktivitas }}</td>
                            <td>{{ jurnal.no_akun }}</td>
                            <td>{{ jurnal.keterangan }}</td>
                            <td>{{ jurnal.jum_debet }}</td>
                            <td>{{ jurnal.jum_kredit }}</td>
                            <td>Opsi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        components: {
            
        },
        data() {
            return {
                jurnals: []
            }
        },
        created() {
            this.axios
                .get('/api/jurnals')
                .then(response => {
                    this.jurnals = response.data;
                }
            );
        }
    }
</script>