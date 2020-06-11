<template>
  
    <form @submit.prevent="addData()">
        <!-- {{ csrf_field() }} -->
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
        <div class="input-group mb-3">
        <label for="keterangan">keterangan</label>
            <input type="text" class="form-control" name="keterangan" v-model="form.keterangan" placeholder="keterangan" aria-label="keterangan" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <label for="debet">debet</label>
            <input type="text" class="form-control" name="jum_debet" v-model="form.jum_debet" placeholder="debet" aria-label="debet" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
        <label for="kredit">kredit</label>
            <input type="text" class="form-control" name="jum_kredit" v-model="form.jum_kredit" placeholder="kredit" aria-label="kredit" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-md btn-primary">Submit</button>
    </form>
</template>

<script>
import { validationMixin, required } from 'vuelidate';
    export default {
        data() {
            return {
                listAktivitas: [],
                // aktivitas: '',
                form:{
                    aktivitas: '',
                    waktu: '',
                    no_akun: '',
                    keterangan: '',
                    jum_debet: '',
                    jum_kredit: ''
                }
            }
        },
        mixins: [validationMixin],
        validations: {
            aktivitas: {
                required,
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/jurnals/aktivitas')
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
                axios.post('http://127.0.0.1:8000/api/jurnals', this.form).then(res => {
                    
                    aktivitas: this.form.aktivitas;
                    jangka_waktu: this.form.jangka_waktu;
                    no_akun: this.form.no_akun;
                    keterangan: this.form.keterangan;
                    jum_debet: this.form.jum_debet;
                    jum_debet: this.form.jum_kredit;
                    
                    this.form.aktivitas = '',
                    this.form.jangka_waktu = '',
                    this.form.no_akun = '',
                    this.form.keterangan = '',
                    this.form.jum_debet = '',
                    this.form.jum_kredit = ''
                })
                .then(response => {
                // push router ke read data
                    this.$router.push("/");
                })
                .catch ((err) => {
                    console.log(err);
                });
            },
        }
    }
</script>

<style>

</style>