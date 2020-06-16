<template>
    <div class="container">
        <div class="row my-5"> 
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
                        <tr v-for="(jurnal, index) in jurnals" :key="index">
                            <td>{{ index+1 }}</td>
                            <td>{{ jurnal.created_at }}</td>
                            <td>{{ jurnal.aktivitas }}</td>
                            <td>{{ jurnal.no_akun }}</td>
                            <td>{{ jurnal.keterangan }}</td>
                            <td>{{ jurnal.debet }}: {{ jurnal.jum_debet }}</td>
                            <td>{{ jurnal.kredit }}: {{ jurnal.jum_kredit }}</td>
                            <td>
                                <button @click="edit(user)">Edit</button> ||  <button @click="del(user)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
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
        },
        methods: {
            del(user){
                axios.delete('http://localhost:3000/users/' + user.id).then(res =>{
                    this.load()
                    let index = this.users.indexOf(form.name)
                    this.users.splice(index,1)
                })
            }
        }
    }
</script>