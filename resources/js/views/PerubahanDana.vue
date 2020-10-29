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
              <td>{{ data.entitas }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muzakki individual</td>
              <td>{{ data.individual }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil penempatan</td>
              <td>{{ data.penempatan }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jumlah penerimaan dana zakat</td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana zakat</td>
              <td>{{ data.bagianAmilzakat }}</td>
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
              <td>{{ data.fakir }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Riqab</td>
              <td>{{ data.riqab }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Gharim</td>
              <td>{{ data.gharim }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Muallaf</td>
              <td>{{ data.muallaf }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Sabilillah</td>
              <td>{{ data.sabilillah }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Ibnu sabil</td>
              <td>{{ data.ibnusabil }}</td>
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
              <td>{{ data.muqayyadahKas }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ data.mutlaqahKas }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil atas penerimaan dana infak/sedekah</td>
              <td>{{ data.bagianAmilInfak }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Hasil pengelolaan</td>
              <td>{{ data.pengelolaan }}</td>
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
              <td>{{ data.muqayyadahKredit }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Mutlaqah</td>
              <td>{{ data.mutlaqahKredit }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Beban penyusutan dan penyisihan</td>
              <td>{{ data.alokasi }}</td>
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
              <td>{{ data.amilzakat }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bagian amil dari dana infak/sedekah</td>
              <td>{{ data.amilinfak }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan lainnya</td>
              <td>{{ data.penerimaan }}</td>
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
              <td>Beban pegawai</td>
              <td>{{ data.bebanPegawai }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Beban penyusutan</td>
              <td>{{ data.bebanPenyusutan }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Beban umum dan administrasi</td>
              <td>{{ data.bebanUmum }}</td>
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
              <td>{{ data.bungaBank }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Jasa giro</td>
              <td>{{ data.giro }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Penerimaan nonhalal lainnya</td>
              <td>{{ data.nonalalLainnya }}</td>
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
              <td>Jumlah penggunaan dana nonhalal</td>
              <td>{{ data.penggunaanNonhalal }}</td>
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
      .then((response) => (this.data = response.data))
      .catch((error) => console.log(error));
  },
};
</script>

<style>
</style>