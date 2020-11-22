<template>
  <div class="row">
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img
            src="assets/images/dashboard/circle.svg"
            class="card-img-absolute"
            alt="circle-image"
          />
          <h4 class="font-weight-normal mb-3">
            Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">$ 15,0000</h2>
          <h6 class="card-text">Increased by 60%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img
            src="assets/images/dashboard/circle.svg"
            class="card-img-absolute"
            alt="circle-image"
          />
          <h4 class="font-weight-normal mb-3">
            Weekly Orders
            <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">45,6334</h2>
          <h6 class="card-text">Decreased by 10%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img
            src="assets/images/dashboard/circle.svg"
            class="card-img-absolute"
            alt="circle-image"
          />
          <h4 class="font-weight-normal mb-3">
            Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-5">95,5741</h2>
          <h6 class="card-text">Increased by 5%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
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
          <div class="form-group">
            <label for="selectWaktu">Waktu</label>
            <select
              class="custom-select"
              id="selectWaktu"
              name="jangka_waktu"
              v-model="form.jangka_waktu"
            >
              <option value="0">Pilih Waktu</option>
              <option
                v-for="waktu in listWaktu"
                :key="waktu.id"
                :value="waktu.jangka_waktu"
              >
                {{ waktu.jangka_waktu }}
              </option>
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
              <option v-for="akun in listAkun" :key="akun.id" :value="akun.no_akun">
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
            <label for="jum_debet">Debet</label>
            <input
              type="number"
              class="form-control"
              name="jum_debet"
              v-model="form.jum_debet"
              id="jum_debet"
              placeholder="RP. . ."
            />
          </div>
          <div class="form-group">
            <label for="jum_kredit">Kredit</label>
            <input
              type="number"
              class="form-control"
              name="jum_kredit"
              v-model="form.jum_kredit"
              id="jum_kredit"
              placeholder="RP. . ."
            />
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
</template>

<script>
export default {
  components: {},
  data: function () {
    return {
      listAktivitas: [],
      listWaktu: [],
      listAkun: [],
      form: {
        id_aktivitas: "",
        jangka_waktu: "",
        no_akun: "",
        keterangan: "",
        jum_debet: "",
        jum_kredit: "",
      },
      message: false,
    };
  },
  created() {
    this.axios
      .get("/api/aktivitas")
      .then((response) => {
        this.listAktivitas = response.data;
      })
      .catch((err) => {
        console.log(err);
      });
  },

  methods: {
    change: function () {
      this.axios
        .get("/api/waktu/" + this.form.id_aktivitas)
        .then((response) => {
          this.listWaktu = response.data;
        })
        .catch((err) => {
          console.log(err);
        });

      this.axios
        .get("/api/akun/" + this.form.id_aktivitas)
        .then((response) => {
          this.listAkun = response.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },
    addData() {
      this.axios
        .post("/api/jurnals/", this.form)
        .then((res) => {
          (this.form.id_aktivitas = ""),
            (this.form.jangka_waktu = ""),
            (this.form.no_akun = ""),
            (this.form.keterangan = ""),
            (this.form.jum_debet = ""),
            (this.form.jum_kredit = "");
            console.log(res)
          // window.location.href = "/";
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style>
</style>