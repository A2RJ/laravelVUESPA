<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <form v-on:submit.prevent>
            <input
              type="text"
              v-model="keywords"
              v-on:keyup="cari"
              placeholder="Cari jurnal"
            />
          </form>

          <a
            href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template?utm_source=organic&utm_medium=banner&utm_campaign=free-preview"
            target="_blank"
            class="btn download-button purchase-button ml-auto"
            ><router-link class="sidebar-link" to="/input" aria-expanded="false"
              ><i class="mdi mdi-home menu-icon"></i
              ><span class="menu-title">Input Jurnal</span></router-link
            ></a
          >
        </span>
      </div>
      <div class="col-12">
        <div class="" v-if="message">
          <div class="alert alert-danger alert-dismissible fade show">
            <button
              type="button"
              class="close"
              data-dismiss="alert"
              @click="reset"
            >
              &times;
            </button>
            <strong>Danger!</strong> {{ message }}.
          </div>
        </div>
        <div class="col-12" v-if="jurnals.data < 1">
          <h6 class="text-danger text-center">
            Maaf data jurnal {{ keywords }} tidak ditemukan
          </h6>
        </div>
        <div class="" v-else>
          <div class="" v-if="!keywords">
            <table class="table table-responsive">
              <thead>
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
                <tr v-for="(jurnal, index) in jurnals.data" :key="index">
                  <td>{{ index + 1 }}</td>
                  <td>{{ jurnal.created_at }}</td>
                  <td>{{ jurnal.aktivitas }}</td>
                  <td>{{ jurnal.no_akun }}</td>
                  <td>{{ jurnal.keterangan }}</td>
                  <td>{{ jurnal.debet }}: {{ jurnal.jum_debet }}</td>
                  <td>{{ jurnal.kredit }}: {{ jurnal.jum_kredit }}</td>
                  <td>
                    <button
                      @click="edit(user)"
                      class="btn btn-sm btn-outline-warning btn-rounded"
                    >
                      Edit
                    </button>
                    |
                    <button
                      @click="hapus(jurnal.id)"
                      class="mt-1 btn btn-outline-danger btn-sm btn-rounded"
                    >
                      Delete
                    </button>
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
          <div v-if="keywords">
            <table class="table table-responsive">
              <thead>
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
                <tr v-for="(jurnal, index) in jurnals.data" :key="index">
                  <td>{{ index + 1 }}</td>
                  <td>{{ jurnal.created_at }}</td>
                  <td>{{ jurnal.aktivitas }}</td>
                  <td>{{ jurnal.no_akun }}</td>
                  <td>{{ jurnal.keterangan }}</td>
                  <td>{{ jurnal.debet }}: {{ jurnal.jum_debet }}</td>
                  <td>{{ jurnal.kredit }}: {{ jurnal.jum_kredit }}</td>
                  <td>
                    <button
                      @click="edit(user)"
                      class="btn btn-sm btn-outline-warning btn-rounded"
                    >
                      Edit
                    </button>
                    ||
                    <button
                      @click="del(user)"
                      class="mt-1 btn btn-outline-danger btn-sm btn-rounded"
                    >
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex justify-content-center mt-2">
              <pagination :data="jurnals" @pagination-change-page="cari1">
                <span slot="prev-nav">&lt; Previous</span>
                <span slot="next-nav">Next &gt;</span>
              </pagination>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
// Tidak ada ubah data, langsung hapus dan input kembali krn ada banyak perhitungan.
<script>
export default {
  data: function () {
    return {
      jurnals: {},
      keywords: "",
      message: "",
    };
  },
  mounted() {
    this.getResult();
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
      if (typeof page === "undefined") {
        page = 1;
      }
      axios
        .get("api/jurnals?page=" + page)
        .then((res) => (this.jurnals = res.data));
    },
    cari1(page) {
      if (typeof page === "undefined") {
        page = 1;
      }
      axios
        .get("api/cari/" + this.keywords + "?page=" + page)
        .then((res) => (this.jurnals = res.data));
    },
    hapus(jurnal) {
      axios
        .delete("api/jurnals/" + jurnal)
        .then((res) => ((this.message = res.data.data), this.cari()));
    },
  },
};
</script>