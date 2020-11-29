<template>
  <div class="row container d-flex justify-content-center">
    <div class="col-sm-12">
      <div class="my-5 mb-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <th class="font-weight-bold">Keterangan</th>
              <th class="font-weight-bold">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td class="font-weight-bold">Dana zakat</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan dari muzakki</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>muzakki entitas</td>
              <td>{{ data.entitas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muzakki individual</td>
              <td>{{ data.individual | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil penempatan</td>
              <td>{{ data.penempatan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penerimaan dana zakat</td>
              <td>{{ data.penempatan + data.entitas + data.individual | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana zakat</td>
              <td>{{ data.amilzakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>jumlah penerimaan dana zakat setelah bagian amil</td>
              <td>{{ data.penerimaanZakat + data.amilzakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penyaluran</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Fakir-Miskin</td>
              <td>{{ data.fakir | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gharim</td>
              <td>{{ data.gharim | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muallaf</td>
              <td>{{ data.muallaf | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Sabilillah</td>
              <td>{{ data.sabilillah | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Ibnu sabil</td>
              <td>{{ data.ibnuSabil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penyaluran dana zakat</td>
              <td>{{ data.penyaluranZakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Surplus (Defisit)</td>
              <td>{{ data.penerimaanZakat + data.amilzakat - data.penyaluranZakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">DANA INFAK/SEDEKAH</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Muqayyadah</td>
              <td>{{ data.muqayyadahKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ data.mutlaqahKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>peralatan</td>
              <td>{{ data.peralatan3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gedung dan Bangunan</td>
              <td>{{ data.gnb3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Tanah</td>
              <td>{{ data.tanah3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana infak/sedekah</td>
              <td>{{ data.amilinfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil pengelolaan</td>
              <td>{{ data.pengelolaan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penerimaan dana infak/sedekah</td>
              <td>{{ data.penerimaanInfak + data.amilinfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penyaluran</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Muqayyadah</td>
              <td>{{ data.muqayyadahKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ data.mutlaqahKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>peralatan</td>
              <td>{{ data.peralatan4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gedung dan Bangunan</td>
              <td>{{ data.gnb4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Tanah</td>
              <td>{{ data.tanah4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan dan penyisihan Peralatan</td>
              <td>{{ data.APperalatan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan dan penyisihan Gedung dan Bangunan</td>
              <td>{{ data.APgnb | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penyaluran dana infak/sedekah</td>
              <td>{{ data.penyaluranInfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Surplus (Defisit)</td>
              <td>{{ data.penerimaanInfak + data.amilinfak - data.penyaluranInfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">DANA AMIL</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil dari dana zakat</td>
              <td>{{ data.amilzakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil dari dana infak/sedekah</td>
              <td>{{ data.amilinfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Sumbangan</td>
              <td>{{ data.sumbangan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan lainnya</td>
              <td>{{ data.penerimaanlainnya | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penerimaan dana amil</td>
              <td>{{ data.penerimaanAmil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penggunaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penggunaan dana amil</td>
              <td>{{ data.bebanAmil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penggunaan dana amil</td>
              <td>{{ data.bebanAmil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Surplus (Defisit)</td>
              <td>{{ data.penerimaanAmil - data.bebanAmil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">DANA NONHALAL</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bunga bank</td>
              <td>{{ data.bungaBank | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jasa giro</td>
              <td>{{ data.giro | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan nonhalal lainnya</td>
              <td>{{ data.nonHalalLainKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penerimaan dana nonhalal</td>
              <td>{{ data.penerimaanNonHalal | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Penggunaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Administrasi Bank</td>
              <td>{{ data.administrasiBank | currency }}</td>
            </tr> 
            <tr>
              <td></td>
              <td>Penggunaan dana nonhalal lainnya</td>
              <td>{{ data.nonHalalLainKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Jumlah penggunaan dana nonhalal</td>
              <td>{{ data.penyaluranNonHalal | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Surplus (Defisit)</td>
              <td>{{ data.penerimaanNonHalal - data.penyaluranNonHalal | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td class="font-weight-bold">
                Jumlah saldo dana zakat, dana infak/sedekah, dana amil dan dana
                nonhalal.
              </td>
              <td></td>
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
      .get("api/laporan/lpd")
      .then((response) => (this.data = response.data))
      .catch((error) => console.log(error));
  }
};
</script>

<style>
</style>