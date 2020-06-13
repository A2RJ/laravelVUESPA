<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 offset-2">
                <transition name="fade">
                <form @submit.prevent="addData()" v-if="show">
                    <div class="form-group">
                        <label for="selectAktivitas">Aktivitas</label>
                        <select class="form-control" id="selectAktivitas" name="aktivitas" v-model="form.aktivitas" v-on:change="change()">
                            <option value="">Pilih</option>
                            <option v-for="akt in listAktivitas" :key="akt.id_aktivitas" :value="akt.id_aktivitas">
                                {{ akt.aktivitas }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectWaktu">Waktu</label>
                        <select class="form-control" id="selectWaktu" name="jangka_waktu" v-model="form.jangka_waktu">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="selectAkun">Akun</label>
                        <select class="form-control" id="selectAkun" name="no_akun" v-model="form.no_akun">
                            <option value="">Pilih</option>
                        </select>
                    </div>
                      <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" v-model="form.keterangan" placeholder="keterangan" aria-label="keterangan"  id="keterangan" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jum_debet">Debet</label>
                        <input type="number" class="form-control" name="jum_debet" v-model="form.jum_debet" id="jum_debet" placeholder="RP. . .">
                    </div>
                    <div class="form-group">
                        <label for="jum_kredit">Kredit</label>
                        <input type="number" class="form-control" name="jum_kredit" v-model="form.jum_kredit" id="jum_kredit" placeholder="RP. . .">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                </form>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                listAktivitas: [],
                form:{
                    aktivitas: '',
                    jangka_waktu: '',
                    no_akun: '',
                    keterangan: '',
                    jum_debet: '',
                    jum_kredit: ''
                },
                show: true
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
                this.selection = this.selection;
            },
            addData(){
                this.axios
                .post('/api/jurnals/', this.form).then(res => {
                    
                    // aktivitas: this.form.aktivitas;
                    // jangka_waktu: this.form.jangka_waktu;
                    // no_akun: this.form.no_akun;
                    // keterangan: this.form.keterangan;
                    // jum_debet: this.form.jum_debet;
                    // jum_debet: this.form.jum_kredit;
                    
                    this.form.aktivitas = '',
                    this.form.jangka_waktu = '',
                    this.form.no_akun = '',
                    this.form.keterangan = '',
                    this.form.jum_debet = '',
                    this.form.jum_kredit = ''

                    this.$router.push("/jurnal");                    
                })
                .catch ((err) => {
                    console.log(
                        this.form.aktivitas,
                        this.form.jangka_waktu,
                        this.form.no_akun,
                        this.form.keterangan,
                        this.form.jum_debet,
                        this.form.jum_kredit
                    );
                    console.log(err.response, 'gagal');
                });
            },
        }
    }
</script>

<style>

</style>