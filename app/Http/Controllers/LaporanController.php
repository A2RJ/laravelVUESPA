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

    // Dapat digunakan untuk mengambil 1 nilai langsung dari vue js
    public function getByNoAkun($id, $jenis)
    {
        $return = Jurnal::where('no_akun', $id)->sum('jum_' . $jenis);
        if ($return) {
            return response()->json($return, Response::HTTP_OK);
        }else{
            return response()->json($return, Response::HTTP_NOT_FOUND);
        }
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

    /** 
        @Untuk Halaman Laporan Posisi Keuangan
    **/

}
