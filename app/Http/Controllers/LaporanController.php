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

    public function index($any)
    {
        return $this->$any();
    }

    public function aktivitas()
    {
        return response()->json([
                'sumbangan' => $this->sumbangan(),
                'pendBungaBank' => $this->pendBungaBank(),
                'bebanGaji' => $this->bebanGaji(),
                'bebanListrik' => $this->bebanListrik(),
                'bebanAir' => $this->bebanAir(),
                'bebanInternet' => $this->bebanInternet(),
                'bebanPemeliharaan' => $this->bebanPemeliharaan(),
                'bebanAdministrasiUmum' => $this->bebanAdministrasiUmum(),
                'bebanPajak' => $this->bebanPajak(),
                'bebanPHBI' => $this->bebanPHBI(),
                'bebanTranportasi' => $this->bebanTranportasi(),
                'bebanAdministrasiBank' => $this->bebanAdministrasiBank(),
                'hibahPeralatan' => $this->hibahPeralatan(),
                'hibahGedung' => $this->hibahGedung(),
                'hibahTanah' => $this->hibahTanah()
        ], Response::HTTP_OK);
    }

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
    public function sumbangan()
    {
        return $this->getByNoAkun('1', 'debet');
    }

    public function pendBungaBank()
    {
        return $this->getByNoAkun('21', 'debet');
    }

    public function bebanGaji()
    {
        return $this->getByNoAkun('10', 'debet');
    }

    public function bebanListrik()
    {
        return $this->getByNoAkun('11', 'debet');
    }

    public function bebanAir()
    {
        return $this->getByNoAkun('12', 'debet');
    }

    public function bebanInternet()
    {
        return $this->getByNoAkun('13', 'debet');
    }

    public function bebanPemeliharaan()
    {
        return $this->getByNoAkun('14', 'debet');
    }

    public function bebanAdministrasiUmum()
    {
        return $this->getByNoAkun('15', 'debet');
    }

    public function bebanPajak()
    {
        return $this->getByNoAkun('16', 'debet');
    }

    public function bebanPHBI()
    {
        return $this->getByNoAkun('17', 'debet');
    }

    public function bebanTranportasi()
    {
        return $this->getByNoAkun('18', 'debet');
    }

    public function bebanAdministrasiBank()
    {
        return $this->getByNoAkun('22', 'debet');
    }

    // Hibah
    public function hibahPeralatan()
    {
        return $this->getByNoAkun('29', 'debet');
    }

    public function hibahGedung()
    {
        return $this->getByNoAkun('30', 'debet');
    }

    public function hibahTanah()
    {
        return $this->getByNoAkun('31', 'debet');
    }

    public function aktiva()
    {
        return Aktiva::All();
    }
    /** 
        @Untuk Halaman Arus Kas
    **/
    /** 
        @Untuk Halaman Laporan Posisi Keuangan
    **/

}
