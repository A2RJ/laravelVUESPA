<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Aktivitas;
use App\Models\Akun;
use App\Models\JangkaWaktu;
use App\Models\Jurnal;

class JurnalController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = new Jurnal;
        return response()->json($model->joinTable());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model=new Jurnal;
        $model->fill($request->all());

        if ($model->save()) {
            $keterangan = Akun::where('id_akun', $request->input("id_aktivitas"))->where('id', $request->input("no_akun"))->first();

            if ($keterangan) {
                if (
                    ($keterangan['id_akun'] == 3 and $keterangan['no_akun'] == 2.1) or
                    ($keterangan['id_akun'] == 9 and $keterangan['no_akun'] == 2.1) or
                    ($keterangan['id_akun'] == 10 and $keterangan['no_akun'] == 2.1) or
                    ($keterangan['id_akun'] == 11 and $keterangan['no_akun'] == 2.1)
                 ){
                    $model->APenyPeralatan($request);
                }elseif (
                    ($keterangan['id_akun'] == 3 and $keterangan['no_akun'] == 2.3) or
                    ($keterangan['id_akun'] == 9 and $keterangan['no_akun'] == 2.3) or
                    ($keterangan['id_akun'] == 10 and $keterangan['no_akun'] == 2.3) or
                    ($keterangan['id_akun'] == 11 and $keterangan['no_akun'] == 2.3)
                 ) {
                     $model->APenyGnB($request);
                 }
            }
        } else {
            return response()->json(['message' => false]);
        }
        return response()->json(['message' => true]);
    }

    public function getAktivitas()
    {
        return response()->json(Aktivitas::all());
    }

    public function getAkun($id)
    {
        return response()->json(Akun::where('id_akun', $id)->get(), 200);
    }

    public function getWaktu($id)
    {
        return response()->json(JangkaWaktu::where('id_jangka_waktu', $id)->get(), 200);
    }

    public function cari($data)
	{
        $model = new Jurnal;
        $data = $model->cari($data);
        return response()->json($data);
    }
    
    public function hapus($id)
    {
        $model = new Jurnal();
        return response()->json(['data' => $model::find($id)]);
    }
    
}
