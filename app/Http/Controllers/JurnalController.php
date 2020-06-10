<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Aktivitas;
use App\Models\Akun;
use App\Models\JangkaWaktu;
use App\Models\Jurnal;


/**
 * Description of JurnalController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

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
        // return view('pages.jurnal.index', ['records' => Jurnal::paginate(10)]);
        return response()->json(Jurnal::all(), 200);
    }    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Jurnal $jurnal)
    {
        return view('pages.jurnal.show', [
                'record' =>$jurnal,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('pages.jurnal.create', [
            'model' => new Jurnal,

        ]);
    }    /**
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
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Disimpan!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Disimpan!',
            ], 400);
        }
        // if ($model->save()) {
        //         return redirect('jurnal')->with('status', 'Jurnal saved successfully');
        //     } else {
        //         session()->flash('app_message', 'Something is wrong while saving Jurnal');
        //     }
        // return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Jurnal $jurnal)
    {

        return view('pages.jurnal.edit', [
            'model' => $jurnal,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Request  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Jurnal $jurnal)
    {
        $jurnal->fill($request->all());

        if ($jurnal->save()) {
            
            session()->flash('app_message', 'Jurnal successfully updated');
            return redirect()->route('jurnal.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Jurnal');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Request  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, Jurnal $jurnal)
    {
        if ($jurnal->delete()) {
                session()->flash('app_message', 'Jurnal successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Jurnal');
            }

        return redirect()->back();
    }

    public function getAktivitas()
    {
        // return response([
        //     'success' => true,
        //     'message' => 'List Aktivitas',
        //     'data' => Aktivitas::all()
        // ], 200);
        if (Aktivitas::all()) {
            return response()->json([
                'success' => true,
                'message' => 'List data',
                'data' => Aktivitas::all()
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
            ], 400);
        }
        // return response()->json(Aktivitas::all());
    }

    public function getAkun($id)
    {
        return response()->json(Akun::where('id_akun', $id)->get(), 200);
    }

    public function getWaktu($id)
    {
        return response()->json(JangkaWaktu::where('id_jangka_waktu', $id)->get(), 200);
    }
}
