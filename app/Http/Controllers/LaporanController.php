<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Jurnal;
use App\Models\Akun;

class LaporanController extends Controller
{
    /**  
        @dari routes masuk ditangkap oleh functions index dan diteruskan ke function sesuai params
    **/
    public function index($any)
    {
        return $this->$any();
    }

    /**
     * FUNGSI UNTUK KELOLA JURNAL
     * 
     * Dapat digunakan untuk mengambil 1 nilai langsung **/
    public function get($id, $jenis)
    {
        return Jurnal::where('no_akun', $id)->sum('jum_' . $jenis);
    }
    
    /* Get nilai total */
    public function total($id)
    {
        if($id == 'zakat'){

            $a = $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(3, 'debet');
            $b = $this->get(4, 'debet') +
            $this->get(5, 'debet') + 
            $this->get(6, 'debet') + 
            $this->get(7, 'debet') + 
            $this->get(8, 'debet') + 
            $this->get(9, 'debet');

            return response()->json([
                'total' => $a - $b,
                'kas' => $a,
                'kredit' => $b
            ]);
        }elseif ($id == 'infak') {

            $a = $this->get(10, 'debet') + 
            $this->get(11, 'debet') + 
            $this->get(12, 'debet');
            $b = $this->get(13, 'debet') +
            $this->get(14, 'debet') + 
            $this->get('penyisihan', 'debet');

            return response()->json([
                'total' => $a - $b,
                'kas' => $a,
                'kredit' => $b
            ]);
        }elseif ($id == 'amil') {

            $a = $this->get(16, 'debet') + 
            $this->get(17, 'debet') + 
            $this->get(18, 'debet');
            $b = $this->get(19, 'debet') +
            $this->get('penyusutan', 'debet');
            $this->get('20', 'debet');

            return response()->json([
                'total' => $a - $b,
                'kas' => $a,
                'kredit' => $b
            ]);
        }elseif ($id == 'nonhalal') {

            $a = $this->get(21, 'debet') + 
            $this->get(22, 'debet') + 
            $this->get(23, 'debet');
            $b = $this->get(24, 'debet');

            return response()->json([
                'total' => $a - $b,
                'kas' => $a,
                'kredit' => $b
            ]);
        }
    }

    /** 
     * FUNGSI UNTUK LAPORAN
     * 
        @Untuk Halaman Laporan Posisi Keuangan
    **/
    public function LPK()
    {
        $jurnal = new Jurnal();
        return $jurnal->joinTable();
        // return response()->json([
        //     'zakat'=> $this->total('zakat'),
        //     'infak'=> $this->total('infak'),
        //     'amil'=> $this->total('amil'),
        //     'nonhalal'=> $this->total('nonhalal')
        // ], Response::HTTP_OK);
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
        @Untuk Halaman Laporan Perubahan Dana
    **/
    public function LPD()
    {
        return response()->json([
            'entitas' => $this->get(1, 'debet'),
            'individual' => $this->get(2, 'debet'),
            'penempatan' => $this->get(3, 'debet'),
            'fakir' => $this->get(4, 'debet'),
            'riqab' => $this->get(5, 'debet'),
            'gharim' => $this->get(6, 'debet'),
            'muallaf' => $this->get(7, 'debet'),
            'sabilillah' => $this->get(8, 'debet'),
            'ibnuSabil' => $this->get(9, 'debet'),
            'muqayyadahKas' => $this->get(10, 'debet'),
            'mutlaqahKas' => $this->get(11, 'debet'),
            'pengelolaan' => $this->get(12, 'debet'),
            'muqayyadahKredit' => $this->get(13, 'debet'),
            'mutlaqahKredit' => $this->get(14, 'debet'),
            'alokasi' => $this->get(15, 'debet'),
            'amilzakat' => $this->get(16, 'debet'),
            'amilinfak' => $this->get(17, 'debet'),
            'penerimaan' => $this->get(18, 'debet'),
            'bebanPegawai' => $this->get(19, 'debet'),
            'bebanUmum' => $this->get(20, 'debet'),
            'bungaBank' => $this->get(21, 'debet'),
            'giro' => $this->get(22, 'debet'),
            'nonalalLainnya' => $this->get(23, 'debet'),
            'penggunaanNonhalal' => $this->get(24,'debet')
        ], Response::HTTP_OK);
    }


}
