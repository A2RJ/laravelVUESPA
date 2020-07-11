<template>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12 col-lg-8 offset-2">
                <div class="" v-if="message">
                    <b-alert variant="danger" dismissible>
                        {{ message }}
                    </b-alert>
                </div>
                <form @submit.prevent="addData()">
                    <div class="form-group">
                        <label for="selectAktivitas">Aktivitas</label>
                        <select class="custom-select" id="selectAktivitas" name="aktivitas" v-model="form.id_aktivitas" v-on:change="change()">
                            <option value="0">Pilih</option>
                            <option v-for="aktivitas in listAktivitas" :key="aktivitas.id" :value="aktivitas.id_aktivitas">
                                {{ aktivitas.aktivitas }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectWaktu">Waktu</label>
                        <select class="custom-select" id="selectWaktu" name="jangka_waktu" v-model="form.jangka_waktu">
                            <option value="0">Pilih Waktu</option>
                            <option v-for="waktu in listWaktu" :key="waktu.id" :value="waktu.jangka_waktu">
                                {{ waktu.jangka_waktu }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectAkun">Akun</label>
                        <select class="custom-select" id="selectAkun" name="no_akun" v-model="form.no_akun">
                            <option value="0">Pilih Akun</option>
                            <option v-for="akun in listAkun" :key="akun.id" :value="akun.id">
                                {{ akun.no_akun }} {{ akun.akun }}
                            </option>
                        </select>
                    </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" v-model="form.keterangan" placeholder="keterangan" aria-label="keterangan"  id="keterangan" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jum_debet">Debet</label>
                        <input type="number" class="form-control" name="jum_debet" v-model="form.jum_debet" id="jum_debet" placeholder="RP. . .">
                    </div>
                    <div class="form-group">
                        <label for="jum_kredit">Kredit</label>
                        <input type="number" class="form-control" name="jum_kredit" v-model="form.jum_kredit" id="jum_kredit" placeholder="RP. . .">
                    </div>
                    <button type="submit" class="btn btn-md btn-outline-primary btn-rounded float-right">Submit</button>
                </form>
            </div>
            <M />
        </div>
    </div>
</template>

<script>  
// gunakan if else untuk menampilkan pesan err
    export default {
        components: {
        },
        data: function(){
            return {
                listAktivitas: [],
                listWaktu: [],
                listAkun: [],
                form:{
                    id_aktivitas: '',
                    jangka_waktu: '',
                    no_akun: '',
                    keterangan: '',
                    jum_debet: '',
                    jum_kredit: ''
                },
                message: false,
            }
        },
        created() {
            this.axios
                .get('/api/jurnals/aktivitas')
                .then(response => {
                    this.listAktivitas = response.data['data'];
                })
                .catch ((err) => {
                console.log(err);
            })
        },
         
        methods: {
            change: function () {
                this.axios.get('/api/jurnals/waktu/' + this.form.id_aktivitas).then(response => {
                    this.listWaktu = response.data;
                }).catch ((err) => {
                    console.log(err);
                })

                this.axios.get('/api/jurnals/akun/' + this.form.id_aktivitas).then(response => {
                    this.listAkun = response.data;
                }).catch ((err) => {
                    console.log(err);
                })
            },
            addData() {
                this.axios
                .post('/api/jurnals/', this.form).then(res => {
                    this.form.id_aktivitas = '',
                    this.form.jangka_waktu = '',
                    this.form.no_akun = '',
                    this.form.keterangan = '',
                    this.form.jum_debet = '',
                    this.form.jum_kredit = ''

                    this.message = true;
                    // this.$router.push("/jurnal");                    
                })
                .catch ((err) => {
                   
                });
            }
        }
    }
</script>

<style>

</style>