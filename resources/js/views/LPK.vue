<template>
  <div class="row container d-flex justify-content-center">
    <div class="col-sm-12">
      <div class="my-5 mb-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th>Keterangan</th>
              <th>Jumlah</th>
              <th></th>
              <th>Keterangan</th>
              <th>Jumlah</th>
            </tr>
            <tr>
              <td></td>
              <td>Aktiva lancar</td>
              <td></td>
              <td></td>
              <td>Kewajiban</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>Kas</td>
              <td>{{ data.kas | currency}}</td>
              <td></td>
              <td>Utang jangka pendek</td>
              <td>{{ data.UJPendek | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bank</td>
              <td>{{ data.bank | currency}}</td>
              <td></td>
              <td>Utang jangka panjang</td>
              <td>{{ data.UJPanjang | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Piutang</td>
              <td>{{ data.piutang | currency}}</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Perlengkapan</td>
              <td>{{ data.perlengkapan | currency}}</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah</td>
              <td>{{ data.kas + data.bank + data.piutang + data.perlengkapan | currency}}</td>
              <td></td>
              <td>Jumlah</td>
              <td>{{ data.jumlahUtang | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Aktiva tetap</td>
              <td></td>
              <td></td>
              <td>Saldo dana</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Peralatan</td>
              <td>{{ data.peralatan | currency}}</td>
              <td></td>
              <td>Dana zakat</td>
              <td>{{ data.zakat | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan peralatan</td>
              <td>{{ data.AkmPeralatan | currency}}</td>
              <td></td>
              <td>Dana infak/sedekah</td>
              <td>{{ data.infak | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gedung dan bangunan</td>
              <td>{{ data.gnb | currency}}</td>
              <td></td>
              <td>Dana amil</td>
              <td>{{ data.amil | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan gedung dan bangunan</td>
              <td>{{ data.AkmGnB | currency}}</td>
              <td></td>
              <td>Dana non halal</td>
              <td>{{ data.nonHalal | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Tanah</td>
              <td>{{ data.tanah | currency}}</td>
              <td></td>
              <td>Jumlah dana</td>
              <td>{{ data.zakat + data.infak + data.amil + data.nonHalal | currency}}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah Aset</td>
              <td>{{ data.aktivaLancar - data.aktivaTdkLancar | currency}}</td>
              <td></td>
              <td>Jumlah Kewajiban dan Saldo Dana</td>
              <td>{{ data.zakat + data.infak + data.amil + data.nonHalal - data.jumlahUtang | currency}}</td>
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
      .get("api/laporan/lpk")
      .then((response) => (this.data = response.data))
      .catch((error) => console.log(error));
  }
};
</script>

<style>
</style>