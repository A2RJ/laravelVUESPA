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
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td class="bold">Dana zakat</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan</td>
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
              <td>{{ entitas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muzakki individual</td>
              <td>{{ individual | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil penempatan</td>
              <td>{{ penempatan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penerimaan dana zakat</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana zakat</td>
              <td>{{ amilzakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>jumlah penerimaan dana zakat setelah bagian amil</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penyaluran</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Fakir-Miskin</td>
              <td>{{ fakir | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gharim</td>
              <td>{{ gharim | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muallaf</td>
              <td>{{ muallaf | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Sabilillah</td>
              <td>{{ sabilillah | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Ibnu sabil</td>
              <td>{{ ibnusabil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penyaluran dana zakat</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Surplus</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>DANA INFAK/SEDEKAH</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Muqayyadah</td>
              <td>{{ muqayyadahKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ mutlaqahKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>peralatan</td>
              <td>{{ peralatan3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gedung dan Bangunan</td>
              <td>{{ gnb3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Tanah</td>
              <td>{{ tanah3 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana infak/sedekah</td>
              <td>{{ amilinfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil pengelolaan</td>
              <td>{{ pengelolaan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penerimaan dana infak/sedekah</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penyaluran</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Muqayyadah</td>
              <td>{{ muqayyadahKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ mutlaqahKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>peralatan</td>
              <td>{{ peralatan4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan dan penyisihan Peralatan</td>
              <td>{{ APperalatan | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gedung dan Bangunan</td>
              <td>{{ gnb4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Akumulasi penyusutan dan penyisihan Gedung dan Bangunan</td>
              <td>{{ APgnb | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Tanah</td>
              <td>{{ tanah4 | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penyaluran dana infak/sedekah</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Surplus (Defisit)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>DANA AMIL</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil dari dana zakat</td>
              <td>{{ amilzakat | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil dari dana infak/sedekah</td>
              <td>{{ amilinfak | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan lainnya</td>
              <td>{{ penerimaanlainnya | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penerimaan dana amil</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penggunaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penggunaan dana amil</td>
              <td>{{ bebanAmil | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penggunaan dana amil</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Surplus (Defisit)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>DANA NONHALAL</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bunga bank</td>
              <td>{{ bungaBank | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jasa giro</td>
              <td>{{ giro | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan nonhalal lainnya</td>
              <td>{{ nonHalalLainKas | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penerimaan dana nonhalal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Penggunaan</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Administrasi Bank</td>
              <td>{{ administrasiBank | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penggunaan dana nonhalal</td>
              <td>{{ nonHalalLainKredit | currency }}</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Surplus (Defisit)</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo awal</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Saldo akhir</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>
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
      .then((response) => (this.data = response.data.data))
      .catch((error) => console.log(error));
  },
};
</script>

<style>
</style>