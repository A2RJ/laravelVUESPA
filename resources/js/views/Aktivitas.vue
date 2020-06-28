<template>
    <div class="row container d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="mb-5 mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="5">Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>4.1</td>
                            <td>Sumbangan</td>
                            <td>RP. {{ sumbangan }}</td>
                            <td rowspan="2"></td>
                            <td rowspan="3"></td>
                        </tr>
                        <tr>
                            <td>4.2</td>
                            <td>Pendapatan Bunga Bank</td>
                            <td>RP. {{ pendBungaBank }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2" class="bold">Jumlah</td>
                            <td class="bold">{{ pendapatan }}</td>
						</tr> 
						<tr>
							<td colspan="5" class="font-weight-bold">Beban</td>
						</tr> 
                        <tr>
                            <td>5.1</td>
                            <td>Beban gaji</td>
                            <td>RP. {{ bebanGaji }}</td>
                            <td rowspan="12"></td>
                            <td rowspan="14"></td>
                        </tr>
                        <tr>
                            <td>5.2</td>
                            <td>Beban listrik</td>
                            <td>RP. {{ bebanListrik }}</td>
                        </tr>
                        <tr>
                            <td>5.3</td>
                            <td>Beban air</td>
                            <td>RP. {{ bebanAir }}</td>
                        </tr>
                        <tr>
                            <td>5.4</td>
                            <td>Beban internet</td>
                            <td>RP. {{ bebanInternet }}</td>
                        </tr>
                        <tr>
                            <td>5.5</td>
                            <td>Beban Pemeliharaan</td>
                            <td>RP. {{ bebanPemeliharaan }}</td>
                        </tr>
                        <tr>
                            <td>5.6</td>
                            <td>Beban administasi dan umum</td>
                            <td>RP. {{ bebanAdministrasiUmum }}</td>
                        </tr>
                        <tr>
                            <td>5.7</td>
                            <td>Beban Pajak</td>
                            <td>RP. {{ bebanPajak }}</td>
                        </tr>
                        <tr>
                            <td>5.8</td>
                            <td>Beban PHBI</td>
                            <td>RP. {{ bebanPHBI }}</td>
                        </tr>
                        <tr>
                            <td>5.9</td>
                            <td>Beban Trasnportasi</td>
                            <td>RP. {{ bebanTranportasi }}</td>
                        </tr>
                        <tr>
                            <td>5.10</td>
                            <td>Beban Penyusutan Peralatan</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>5.11</td>
                            <td>Beban Penyusutan Gedung dan Bangunan</td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td>5.12</td>
                            <td>Beban Administrasi Bank</td>
                            <td>RP. {{ bebanAdministrasiBank }}</td>
                        </tr>
                        <!-- jumlah -->
                        <tr class="bold">
                            <td></td>
                            <td colspan="2">Jumlah Beban</td>
                            <td>RP. {{ beban }}</td>
                        </tr>
                        <tr class="bold">
                            <td>3.1</td>
                            <td colspan="2">Aktiva bersih tidak terikat</td>
                            <td>RP. {{ abtt }}</td>
                        </tr>
                        <tr class="bold">
                            <td></td>
                            <td colspan="2">Kenaikan/penurunan Aset Neto Tidak Terikat</td>
                            <td></td>
                            <td>RP. {{ abtt }}</td>
                        </tr>
                        <!-- aktiva -->
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td>1.5</td>
                            <td>Peralatan</td>
                            <td>RP. {{ hibahPeralatan }}</td>
                            <td rowspan="2"></td>
                            <td rowspan="3"></td>
                        </tr>
                        <tr>
                            <td>1.7</td>
                            <td>Gedung dan Bangunan</td>
                            <td>RP. {{ hibahGedung }}</td>
                        </tr>
                        <tr class="bold">
                            <td>3.2</td>
                            <td colspan="2">Aktiva Bersih Temporer</td>
                            <td>RP. {{ abt }}</td>
                        </tr>
                        <tr class="bold">
                            <td></td>
                            <td colspan="3">Kenaikan/penurunan Aset Neto Temporer</td>
                            <td>RP. {{ abt }}</td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td>1.9</td>
                            <td>Tanah</td>
                            <td>RP. {{ hibahTanah }}</td>
                            <td></td>
                            <td rowspan="2"></td>
                        </tr>
                        <tr class="bold">
                            <td>3.3</td>
                            <td colspan="2">Aktiva Bersih Permanen</td>
                            <td>RP. {{ abp }}</td>
                        </tr>
                        <tr class="bold">
                            <td></td>
                            <td colspan="3">Kenaikan/penurunan Aset Neto Permanen</td>
                            <td>RP. {{ abp }}</td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                        <tr class="bold">
                            <td></td>
                            <td colspan="3">Aktiva Bersih Awal Tahun</td>
                            <td rowspan="4"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Aktiva Bersih Tidak Terikat</td>
                            <td>RP. {{ aktivaabtt }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Aktiva Bersih Temporer</td>
                            <td>RP. {{ aktivaabt }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">Aktiva Bersih Permanen</td>
                            <td>RP. {{ aktivaabp }}</td>
                        </tr>
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                        <tr class="bold">
                            <td></td>
                            <td colspan="3">Aktiva Bersih Akhir Tahun</td>
                            <td>{{ apa }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                Aktivitas: [],
                sumbangan: '',
                pendBungaBank: '',
                pendapatan: '',

                bebanGaji: '',
                bebanListrik: '',
                bebanAir: '',
                bebanInternet: '',
                bebanPemeliharaan: '',
                bebanAdministrasiUmum: '',
                bebanPajak: '',
                bebanPHBI: '',
                bebanTranportasi: '',
                bebanAdministrasiBank: '',
                beban: '',

                abtt: '',

                hibahPeralatan: '',
                hibahGedung: '',
                abt: '',

                hibahTanah: '',
                abp: '',

                abat: '',

                // aktiva
                aktivaabtt: '',
                aktivaabt: '',
                aktivaabp: ''
            }
        },
        mounted(){
            this.load()
        },
        methods:{
            load(){
            this.axios
                .get('/api/laporan/aktivitas')
                .then(res => {
                    this.Aktivitas = res.data;

                    this.sumbangan = this.Aktivitas.sumbangan.original;
                    this.pendBungaBank = this.Aktivitas.pendBungaBank.original;
                    this.pendapatan = this.sumbangan + this.pendBungaBank;

                    this.bebanGaji = this.Aktivitas.bebanGaji.original;
                    this.bebanListrik = this.Aktivitas.bebanListrik.original;
                    this.bebanAir = this.Aktivitas.bebanAir.original;
                    this.bebanInternet = this.Aktivitas.bebanInternet.original;
                    this.bebanPemeliharaan = this.Aktivitas.bebanPemeliharaan.original;
                    this.bebanAdministrasiUmum = this.Aktivitas.bebanAdministrasiUmum.original;
                    this.bebanPajak = this.Aktivitas.bebanPajak.original;
                    this.bebanPHBI = this.Aktivitas.bebanPHBI.original;
                    this.bebanTranportasi = this.Aktivitas.bebanTranportasi.original;
                    this.bebanAdministrasiBank = this.Aktivitas.bebanAdministrasiBank.original;
                    this.beban = this.bebanGaji + this.bebanListrik + this.bebanAir + this.bebanInternet + this.bebanPemeliharaan + this.bebanAdministrasiUmum + this.bebanPajak + this.bebanPHBI + this.bebanTranportasi + this.bebanAdministrasiBank + this.beban;

                    this.abtt = this.pendapatan - this.beban;

                    this.hibahPeralatan = this.Aktivitas.hibahPeralatan.original;
                    this.hibahGedung = this.Aktivitas.hibahGedung.original;
                    this.abt = this.hibahPeralatan + this.hibahGedung;

                    this.hibahTanah = this.Aktivitas.hibahTanah.original;
                    this.abp = this.hibahTanah;

                    // this.abat = this.abtt + this.abt + this.abp;

                    this.aktivaabtt = this.Aktivitas.aktiva[0].abtt;
                    // this.aktivaabtt = this.aktivaabtt + this.abtt;
                    this.aktivaabt = this.Aktivitas.aktiva[0].abt + this.abt;
                    this.aktivaabp = this.Aktivitas.aktiva[0].abp + this.abp;
                })
                .catch ((err) => {
                console.log(err);
                })
            }
        },
        computed: {
            apa: function() {
                return parseFloat(this.aktivaabtt) + parseFloat(this.abtt);
            }
        }
        
    }
</script>