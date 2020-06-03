<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jurnal;
use App\Http\Requests\Jurnal\Index;
use App\Http\Requests\Jurnal\Show;
use App\Http\Requests\Jurnal\Create;
use App\Http\Requests\Jurnal\Store;
use App\Http\Requests\Jurnal\Edit;
use App\Http\Requests\Jurnal\Update;
use App\Http\Requests\Jurnal\Destroy;


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
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.jurnal.index', ['records' => Jurnal::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Jurnal $jurnal)
    {
        return view('pages.jurnal.show', [
                'record' =>$jurnal,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.jurnal.create', [
            'model' => new Jurnal,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Jurnal;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Jurnal saved successfully');
            return redirect()->route('jurnal.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Jurnal');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Jurnal $jurnal)
    {

        return view('pages.jurnal.edit', [
            'model' => $jurnal,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Jurnal $jurnal)
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
     * @param  Destroy  $request
     * @param  Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Jurnal $jurnal)
    {
        if ($jurnal->delete()) {
                session()->flash('app_message', 'Jurnal successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Jurnal');
            }

        return redirect()->back();
    }
}
