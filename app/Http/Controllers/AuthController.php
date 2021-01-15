<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin;


/**
 * Description of AuthController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(['records' => admin::All()]);
    }
    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, admin $admin)
    {
        return view('pages.admin.show', [
            'record' => $admin,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('pages.admin.create', [
            'model' => new admin,

        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new admin;
        $model->fill($request->all());

        if ($model->save()) {

            // session()->flash('app_message', 'admin saved successfully');
            // return redirect()->route('admin.index');
            return response()->json(['app_message' => 'admin saved successfully']);
        } else {
            // session()->flash('app_message', 'Something is wrong while saving admin');
            return response()->json(['app_message' => 'Something is wrong while saving admin']);
        }
        // return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, admin $admin)
    {

        return view('pages.admin.edit', [
            'model' => $admin,

        ]);
    }
    /**
     * Update a existing resource in storage.
     *
     * @param  Request  $request
     * @param  admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        $admin->fill($request->all());

        if ($admin->save()) {

            // session()->flash('app_message', 'admin successfully updated');
            // return redirect()->route('admin.index');
            return response()->json(['app_message' => 'admin saved successfully']);
        } else {
            // session()->flash('app_error', 'Something is wrong while updating admin');
            return response()->json(['app_error' => 'Something is wrong while saving admin']);
        }
        // return redirect()->back();
    }
    /**
     * Delete a  resource from  storage.
     *
     * @param  Request  $request
     * @param  admin  $admin
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, admin $admin)
    {
        if ($admin->delete()) {
            // session()->flash('app_message', 'admin successfully deleted');
            return response()->json(['app_message' => 'admin successfully deleted']);
        } else {
            // session()->flash('app_error', 'Error occurred while deleting admin');
            return response()->json(['app_error' => 'Error occurred while deleting admin']);
        }

        // return redirect()->back();
    }

    public function login(Request $request)
    {
        return response()->json(['app_message' => 'Login Boy']);
    }

    public function logout()
    {
        return response()->json(['app_message' => 'Logout Boy']);
    }
}
