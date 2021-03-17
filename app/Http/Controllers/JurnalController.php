<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
use App\Models\Jurnal;
use App\Models\Aktivitas;
use App\Models\JangkaWaktu;

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
        // $model = new Jurnal;
        // $model->fill($request->all());

        if ($request->input("id_aktivitas") == 10) {
            Jurnal::create([
                'id_aktivitas' => $request->input("id_aktivitas"),
                'jangka_waktu' => $request->input("jangka_waktu"),
                'no_akun' => $request->input("no_akun"),
                'keterangan' => $request->input("keterangan"),
                'jum_debet' => $request->input("jum_debet"),
                'jum_kredit' => $request->input("jum_debet")
            ]);

            $this->penyusutan($request);
            return response()->json(['message' => "Success input data"]);
        } else if ($request->input("id_aktivitas") == 11) {
            if ($request->input("jum_debet") > $request->input("jum_kredit")) {
                $utang = $request->input("jum_debet") - $request->input("jum_kredit");
                Jurnal::create([
                    'id_aktivitas' => $request->input("id_aktivitas"),
                    'jangka_waktu' => $request->input("jangka_waktu"),
                    'no_akun' => $request->input("no_akun"),
                    'keterangan' => $request->input("keterangan"),
                    'jum_debet' => $request->input("jum_debet"),
                    'jum_kredit' => $request->input("jum_kredit"),
                    'utang' => $utang
                ]);

                $this->penyusutan($request);
                return response()->json(['message' => "Success input data"]);
            } else {
                return response()->json(['message' => "Failed"], 422);
            }
        } else {
            Jurnal::create([
                'id_aktivitas' => $request->input("id_aktivitas"),
                'jangka_waktu' => $request->input("jangka_waktu"),
                'no_akun' => $request->input("no_akun"),
                'keterangan' => $request->input("keterangan"),
                'jum_debet' => $request->input("jum_debet"),
                'jum_kredit' => $request->input("jum_debet")
            ]);
            $this->penyusutan($request);
            return response()->json(['message' => "Success input data"]);
        }
    }

    public function penyusutan($request)
    {
        if (
            $request->input("no_akun") == "2.1" and $request->input("id_aktivitas") == "3" or
            $request->input("no_akun") == "2.1" and $request->input("id_aktivitas") == "9" or
            $request->input("no_akun") == "2.1" and $request->input("id_aktivitas") == "10" or
            $request->input("no_akun") == "2.1" and $request->input("id_aktivitas") == "11"
        ) {
            $jumlah = $request->input("jum_debet") / 5;
            Jurnal::create([
                'id_aktivitas' => $request->input("id_aktivitas"),
                'jangka_waktu' => null,
                'no_akun' => 2.2,
                'keterangan' => $request->input("keterangan"),
                'jum_debet' => $jumlah,
                'jum_kredit' => $jumlah
            ]);
        } elseif (
            $request->input("no_akun") == "2.3" and $request->input("id_aktivitas") == "3" or
            $request->input("no_akun") == "2.3" and $request->input("id_aktivitas") == "9" or
            $request->input("no_akun") == "2.3" and $request->input("id_aktivitas") == "10" or
            $request->input("no_akun") == "2.3" and $request->input("id_aktivitas") == "11"
        ) {
            $jumlah = $request->input("jum_debet") / 30;
            Jurnal::create([
                'id_aktivitas' => $request->input("id_aktivitas"),
                'jangka_waktu' => null,
                'no_akun' => 2.4,
                'keterangan' => $request->input("keterangan"),
                'jum_debet' => $jumlah,
                'jum_kredit' => $jumlah
            ]);
        }
    }

    public function getAktivitas()
    {
        return response()->json(Aktivitas::all(), 200);
    }

    public function getAkun($id)
    {
        // return response()->json(Akun::where('id_aktivitas', $id)->get(), 200);
        return response()->json(Akun::where('id_aktivitas', $id)->where('no_akun', '!=', '2.2')->where('no_akun', '!=', '2.4')->get(), 200);
    }

    public function getWaktu($id)
    {
        return response()->json(JangkaWaktu::where('id_aktivitas', $id)->get(), 200);
    }

    public function cari($data)
    {
        $model = new Jurnal;
        $data = $model->cari($data);
        return response()->json($data);
    }

    public function hapus($id)
    {
        return response()->json(['data' => Jurnal::find($id)->delete(), 'msg' => 'Berhasil hapus jurnal']);
    }

    public function reset()
    {
        return response()->json(['data' => Jurnal::truncate(), 'msg' => 'Berhasil reset jurnal']);
    }

    public function ubah($data)
    {
        $id = explode('-', $data);
        $jurnal = Jurnal::find($id[0]);

        $jurnal->keterangan = $id[1];

        $jurnal->save();
        return response()->json(['message' => $jurnal->wasChanged()]);
    }
}
