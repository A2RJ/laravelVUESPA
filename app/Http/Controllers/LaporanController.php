<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Jurnal;

class LaporanController extends Controller
{
    /**  
     * Dari routes masuk ditangkap oleh functions index 
     * dan diteruskan ke function sesuai params
     **/
    public function index($any)
    {
        return $this->$any();
    }

    /** 
     * Dapat digunakan untuk mengambil 1 nilai langsung berdasarkan 
     * aktivitas, aktivitas + akun, aktivitas + akun + jenis
     * tidak bisa jika hanya akun, aktivitas + jenis
     **/
    public function get($id, $no = false, $jenis = false)
    {
        if ($no) {
            if ($jenis) {
                return Jurnal::where('id_aktivitas', $id)->where('no_akun', $no)->sum('jum_' . $jenis);
            } else {
                return Jurnal::where('id_aktivitas', $id)->where('no_akun', $no)->sum('jum_debet');
            }
        } else {
            return Jurnal::where('id_aktivitas', $id)->sum('jum_debet');
        }
    }

    /** 
     * FUNGSI UNTUK LAPORAN
     * 
     * Untuk Halaman Laporan Posisi Keuangan
     **/
    public function LPK()
    {
        return response()->json([
            'success' => "success",
        ]);
    }

    /** 
     * Untuk Halaman Aktivitas 
     **/
    public function aktivitas()
    {
        return response()->json([
            'success' => "success",
        ]);
    }

    /** 
     * Untuk Halaman Arus Kas
     **/
    public function arusKas()
    {
        return response()->json([
            'sumbangan' => $this->get(5, 4.1),
            'amilzakat' => $this->get(5, 4.2),
            'amilInfak' => $this->get(5, 4.3),
            'tarik' => $this->get(18, 1.2),
            'piutangKas' => $this->get(15, 2.3),
            'aktivitasKas' => 0,
            'setor' => $this->get(17, 1.2),
            'perlengkapan' => $this->get(9, 1.4) + $this->get(10, 1.4) + $this->get(11, 1.4),
            'utangPendek' => $this->get(15, 2.1),
            'utangPanjang' => $this->get(15, 2.2),
            'gaji' => $this->get(13, 5.1),
            'listrik' => $this->get(13, 5.2),
            'air' => $this->get(13, 5.3),
            'internet' => $this->get(13, 5.4),
            'pemeliharaan' => $this->get(13, 5.5),
            'adminUmum' => $this->get(13, 5.6),
            'pajak' => $this->get(13, 5.7),
            'phbi' => $this->get(13, 5.8),
            'transportasi' => $this->get(13, 5.9),
            'aktivitasKredit' => 0,
            'peralatanKas' => $this->get(12, 2.1),
            'gnbKas' => $this->get(12, 2.3),
            'tanahKas' => $this->get(12, 2.5),
            'investasiKas' => 0,
            'peralatanKredit' => $this->get(9, 2.1) + $this->get(10, 2.1) + $this->get(11, 2.1),
            'gnbKredit' => $this->get(9, 2.3) + $this->get(10, 2.3) + $this->get(11, 2.3),
            'tanahKredit' => $this->get(9, 2.4) + $this->get(10, 2.4) + $this->get(11, 2.4),
            'investasiKredit' => 0,
            'utangJPendek' => $this->get(16, 2.1),
            'utangJPanjang' => $this->get(16, 2.2),
            'pendanaanKas' => 0,
            'piutangKredit' => $this->get(14, 2.3),
            'pendanaanKredit' => 0,
            'defisit' => 0,
            'awalTahun' => 0,
            'akhirTahun' => 0
        ]);
    }
 
    /** 
     * Untuk Halaman Arus Kas
     **/
    public function LPAK()
    {
        return response()->json([
            'lancarKas' => $this->get(3, 4.11) + $this->get(3, 4.12) + $this->get(3, 3.13),
            'lancarKredit' => $this->get(4, 5.18) + $this->get(4, 5.19),
            'penyisihan' => '',
            'tdkLancarKas' => $this->get(3, 2.1) + $this->get(3, 2.3) + $this->get(3, 2.5),
            'tdkLancarKredit' => $this->get(4, 2.1) + $this->get(4, 2.3) + $this->get(4, 2.5),
            'penyusutan' => $this->get(3, 2.2) + $this->get(3, 2.4),
        ]);
    }
    /** 
     * Untuk Halaman Laporan Perubahan Dana
     **/
    public function LPD()
    {
        return response()->json([
            'entitas' => $this->get(1, 4.8),
            'individual' => $this->get(1, 4.9),
            'penempatan' => $this->get(1, 4.10),
            'fakir' => $this->get(2, 5.13),
            'gharim' => $this->get(2, 5.14),
            'muallaf' => $this->get(2, 5.15),
            'sabilillah' => $this->get(2, 5.16),
            'ibnuSabil' => $this->get(2, 5.17),
            'muqayyadahKas' => $this->get(3, 4.11),
            'mutlaqahKas' => $this->get(3, 4.12),
            'pengelolaan' => $this->get(3, 3.13),
            'peralatan3' => $this->get(3, 2.1),
            'gnb3' => $this->get(3, 2.3),
            'tanah3' => $this->get(3, 2.5),
            'muqayyadahKredit' => $this->get(4, 5.18),
            'mutlaqahKredit' => $this->get(4, 5.19),
            'peralatan4' => $this->get(4, 2.1),
            'gnb4' => $this->get(4, 2.3),
            'tanah4' => $this->get(4, 2.5),
            'APperalatan' => $this->get(3, 2.2),
            'APgnb' => $this->get(3, 2.4),
            'sumbangan' => $this->get(5, 4.1),
            'amilzakat' => $this->get(5, 4.2),
            'amilinfak' => $this->get(5, 4.3),
            'penerimaanlainnya' => $this->get(12) + $this->get(15) + $this->get(17, 1.2),
            'bebanAmil' => $this->get(9) + $this->get(10) + $this->get(11) + $this->get(13) + $this->get(14) + $this->get(16) + $this->get(17, 1.2),
            'bungaBank' => $this->get(7, 4.5),
            'giro' => $this->get(7, 4.6),
            'nonHalalLainKas' => $this->get(7, 4.7),
            'administrasiBank' => $this->get(8, 5.11),
            'nonHalalLainKredit' => $this->get(8, 5.12)
        ]);
    }
}
