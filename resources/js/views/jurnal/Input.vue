<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jurnal</h4>
            <div class="">
              <div class="" v-if="message">
                {{ message }}
              </div>
              <form @submit.prevent="addData()">
                <div class="form-group">
                  <label for="selectAktivitas">Aktivitas</label>
                  <select
                    class="custom-select"
                    id="selectAktivitas"
                    name="aktivitas"
                    v-model="form.id_aktivitas"
                    v-on:change="change()"
                  >
                    <option value="0">Pilih</option>
                    <option
                      v-for="aktivitas in listAktivitas"
                      :key="aktivitas.id"
                      :value="aktivitas.id_aktivitas"
                    >
                      {{ aktivitas.aktivitas }}
                    </option>
                  </select>
                </div>
                <div class="form-group" v-if="cicilKredit">
                  <label for="selectWaktu">Waktu</label>
                  <select
                    class="custom-select"
                    id="selectWaktu"
                    name="jangka_waktu"
                    v-model="form.jangka_waktu"
                  >
                    <option>Pilih Waktu</option>
                    <option value="Jangka Pendek">Jangka Pendek</option>
                    <option value="Jangka Panjang">Jangka Panjang</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="selectAkun">Akun</label>
                  <select
                    class="custom-select"
                    id="selectAkun"
                    name="no_akun"
                    v-model="form.no_akun"
                  >
                    <option value="0">Pilih Akun</option>
                    <option
                      v-for="akun in listAkun"
                      :key="akun.id"
                      :value="akun.no_akun"
                    >
                      {{ akun.no_akun }} {{ akun.akun }}
                    </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea
                    class="form-control"
                    name="keterangan"
                    v-model="form.keterangan"
                    placeholder="keterangan"
                    aria-label="keterangan"
                    id="keterangan"
                    rows="6"
                  ></textarea>
                </div>
                <div class="form-group">
                  <label for="jum_debet">Nominal</label>
                  <currency-input
                    class="form-control"
                    name="jum_debet"
                    id="jum_debet"
                    v-model="form.jum_debet"
                    currency="IDR"
                    locale="idr"
                  />
                </div>
                <div class="form-group" v-if="kredit">
                  <label for="jum_kredit">Tunai</label>
                  <currency-input
                    class="form-control"
                    name="jum_kredit"
                    id="jum_kredit"
                    v-model="form.jum_kredit"
                    currency="IDR"
                    locale="idr"
                  />
                  <small id="emailHelp" class="form-text text-muted">Kredit tidak boleh lebih besar atau sama dengan debet.</small>
                </div>
                <button
                  type="submit"
                  class="btn btn-md btn-outline-primary btn-rounded float-right"
                >
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      listAktivitas: [],
      listWaktu: [],
      listAkun: [],
      form: {
        id_aktivitas: "",
        jangka_waktu: "",
        no_akun: "",
        keterangan: "",
        jum_debet: 0,
        jum_kredit: 0,
      },
      message: false,
      cicilKredit: false,
      kredit: false
    }
  },
  created() {
    this.axios
      .get("/api/aktivitas")
      .then((response) => {
        this.listAktivitas = response.data
      })
      .catch((err) => {
        console.log(err)
      })
  },

  methods: {
    change: function () {
      this.form.id_aktivitas == 10 || this.form.id_aktivitas == 11 ? this.cicilKredit = true : this.cicilKredit = false
      this.form.id_aktivitas == 11 ? this.kredit = true : this.kredit = false

      this.axios
        .get("/api/akun/" + this.form.id_aktivitas)
        .then((response) => this.listAkun = response.data)
        .catch((err) => console.log(err))
    },
    
    addData() {
      this.axios
        .post("/api/jurnals/", this.form)
        .then((res) => {
          this.$swal("Success", res.message, "success")
          this.form.id_aktivitas = ""
          this.form.jangka_waktu = ""
          this.form.no_akun = ""
          this.form.keterangan = ""
          this.form.jum_debet = ""
          this.form.jum_kredit = ""
          this.kredit = false
          this.cicilKredit = false
        })
        .catch((err) => {
          this.$swal({
            icon: "error",
            title: "Oops...",
            text: err.message,
            footer: err,
          })
        })
    },
  },
}
</script>