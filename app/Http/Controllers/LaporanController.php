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
        @dari routes masuk ditangkap oleh functions index dan diteruskan ke function sesuai params
    **/
    public function index($any)
    {
        return $this->$any();
    }

    /* Dapat digunakan untuk mengambil 1 nilai langsung */
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
            $this->get(1, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet');
            $b = $this->get(2, 'debet') +
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet');
            return $a - $b;
        }elseif ($id == 'infak') {
            $a = $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet');
            $b = $this->get(2, 'debet') +
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet');
            return $a - $b;
        }elseif ($id == 'amil') {
            $a = $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet');
            $b = $this->get(2, 'debet') +
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet');
            return $a - $b;
        }elseif ($id == 'nonhalal') {
            $a = $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') +
            $this->get(1, 'debet');
            $b = $this->get(2, 'debet') +
            $this->get(1, 'debet') + 
            $this->get(2, 'debet') + 
            $this->get(1, 'debet') + 
            $this->get(2, 'debet');
            return $a - $b;
        }
    }

    /** 
        @Untuk Halaman Laporan Posisi Keuangan
    **/
    public function LPK()
    {
        return response()->json([
            'zakat'=> $this->total('zakat'),
            'infak'=> $this->total('infak'),
            'amil'=> $this->total('amil'),
            'nonhalal'=> $this->total('nonhalal')
        ]);
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
            'fakir' => $this->get(44, 'debet'),
            'riqab' => $this->get(45, 'debet'),
            'gharim' => $this->get(46, 'debet'),
            'muallaf' => $this->get(47, 'debet'),
            'sabilillah' => $this->get(48, 'debet'),
            'ibnuSabil' => $this->get(49, 'debet'),
            'muqayyadahKas' => $this->get(50, 'debet'),
            'mutlaqahKas' => $this->get(51, 'debet'),
            'pengelolaan' => $this->get(53, 'debet'),
            'muqayyadahKredit' => $this->get(54, 'debet'),
            'mutlaqahKredit' => $this->get(55, 'debet'),
            'alokasi' => $this->get(56, 'debet'),
            'amilzakat' => $this->get(57, 'debet'),
            'amilinfak' => $this->get(58, 'debet'),
            'penerimaan' => $this->get(59, 'debet'),
            'bebanPegawai' => $this->get(60, 'debet'),
            'bebanPenyusutan' => $this->get(61, 'debet'),
            'bebanUmum' => $this->get(61, 'debet'),
            'bungaBank' => $this->get(62, 'debet'),
            'giro' => $this->get(63, 'debet'),
            'nonalalLainnya' => $this->get(64, 'debet'),
            'penggunaanNonhalal' => $this->get(65,'debet')
        ], Response::HTTP_OK);
    }


}
