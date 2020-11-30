<template>
  <div class="row container d-flex justify-content-center">
    <div class="col-sm-12">
      <div class="my-5 mb-5">
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th></th>
              <th>Saldo awal</th>
              <th>Penambahan</th>
              <th>Penggunaan</th>
              <th>Penyisihan</th>
              <th>Akumulasi Penyusutan</th>
              <th>Saldo akhir</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Dana infak/sedekah - aset kelolaan lancar</td>
              <td>Saldo Awal</td>
              <td>{{ data.lancarKas | currency }}</td>
              <td>{{ data.lancarKredit | currency }}</td>
              <td>{{ data.penyisihan | currency }}</td>
              <td>-</td>
              <td>{{ data.lancarKas - data.lancarKredit - data.penyisihan | currency}}</td>
            </tr>
            <tr>
              <td>Dana infak/sedekah - aset kelolaan tidak lancar</td>
              <td>Saldo Awal</td>
              <td>{{ data.tdkLancarKas | currency }}</td>
              <td>{{ data.tdkLancarKredit | currency }}</td>
              <td>-</td>
              <td>{{ data.penyusutan | currency }}</td>
              <td>{{ data.jumlahTdkLancar | currency}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        data: [],
      };
    },
    mounted() {
      axios
        .get("api/laporan/lpak")
        .then((response) => (this.data = response.data))
        .catch((error) => console.log(error));
    }
  };
</script>

<style>
</style>