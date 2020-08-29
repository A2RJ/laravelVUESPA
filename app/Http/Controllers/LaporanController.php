<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Jurnal;
use App\Models\Aktiva;

class LaporanController extends Controller
{
    /**  
        @dari routes masuk ditangkap oleh functions index 
        dan diteruskan ke function sesuai params
    **/
    public function index($any)
    {
        return $this->$any();
    }
 
    /** 
        @Untuk Halaman Aktivitas 
    **/
    public function aktivitas()
    {
        return response()->json([
                'sumbangan' => Jurnal::where('no_akun', 1)->sum('jum_debet')
        ], Response::HTTP_OK);
    }
    
    /** 
        @Untuk Halaman Arus Kas
    **/
    public function arusKas()
    {
        return response()->json([
            'success'=> "success",
        ]);
    }
    /** 
        @Untuk Halaman Laporan Posisi Keuangan
    **/
    public function LPK()
    {
        return response()->json([
            'zakat'=> $this->total('zakat') + $this->total('zakatkredit'),
            'infak'=> $this->total('zakat') + $this->total('zakatkredit'),
        ]);
    }
    /** 
        @Untuk Halaman Laporan Perubahan Dana
    **/
    public function LPD()
    {
        return response()->json([
            'entitas' => Jurnal::where('no_akun', 40)->sum('jum_debet'),
            'individual' => Jurnal::where('no_akun', 41)->sum('jum_debet'),
            'penempatan' => Jurnal::where('no_akun', 42)->sum('jum_debet'),
            'bagianAmilzakat' => Jurnal::where('no_akun', 43)->sum('jum_debet'),
            'fakir' => Jurnal::where('no_akun', 44)->sum('jum_debet'),
            'riqab' => Jurnal::where('no_akun', 45)->sum('jum_debet'),
            'gharim' => Jurnal::where('no_akun', 46)->sum('jum_debet'),
            'muallaf' => Jurnal::where('no_akun', 47)->sum('jum_debet'),
            'sabilillah' => Jurnal::where('no_akun', 48)->sum('jum_debet'),
            'ibnuSabil' => Jurnal::where('no_akun', 49)->sum('jum_debet'),
            'muqayyadahKas' => Jurnal::where('no_akun', 50)->sum('jum_debet'),
            'mutlaqahKas' => Jurnal::where('no_akun', 51)->sum('jum_debet'),
            'bagianAmilInfak' => Jurnal::where('no_akun', 52)->sum('jum_debet'),
            'pengelolaan' => Jurnal::where('no_akun', 53)->sum('jum_debet'),
            'muqayyadahKredit' => Jurnal::where('no_akun', 54)->sum('jum_debet'),
            'mutlaqahKredit' => Jurnal::where('no_akun', 55)->sum('jum_debet'),
            'alokasi' => Jurnal::where('no_akun', 56)->sum('jum_debet'),
            'amilzakat' => Jurnal::where('no_akun', 57)->sum('jum_debet'),
            'amilinfak' => Jurnal::where('no_akun', 58)->sum('jum_debet'),
            'penerimaan' => Jurnal::where('no_akun', 59)->sum('jum_debet'),
            'bebanPegawai' => Jurnal::where('no_akun', 60)->sum('jum_debet'),
            'bebanPenyusutan' => Jurnal::where('no_akun', 61)->sum('jum_debet'),
            'bebanUmum' => Jurnal::where('no_akun', 61)->sum('jum_debet'),
            'bungaBank' => Jurnal::where('no_akun', 62)->sum('jum_debet'),
            'giro' => Jurnal::where('no_akun', 63)->sum('jum_debet'),
            'nonalalLainnya' => Jurnal::where('no_akun', 64)->sum('jum_debet'),
            'penggunaanNonhalal' => Jurnal::where('no_akun', 65)->sum('jum_debet')
        ], Response::HTTP_OK);
    }

    /** 
     * @Funsi untuk mengambil data sesuai aktifitas
     * **/
    /* Dapat digunakan untuk mengambil 1 nilai langsung */
    public function getByNoAkun($id, $jenis)
    {
        return Jurnal::where('no_akun', $id)->sum('jum_' . $jenis);
    }
    
    /* Get nilai total */
    public function total($id)
    {
        if($id == 'zakat'){
            return $data = 10;
        }elseif ($id == 'infak') {
            return $data = $this->getByNoAkun(1, 'debet') + $this->getByNoAkun(2, 'debet') + $this->getByNoAkun(1, 'debet') + $this->getByNoAkun(2, 'debet');
        }elseif ($id == 'zakatkredit') {
            return $data = 12;
        }
    }
}
