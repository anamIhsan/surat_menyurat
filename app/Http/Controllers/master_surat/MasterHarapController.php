<?php

namespace App\Http\Controllers\master_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\MasterHarapRequest;
use App\Models\MasterHarap;
use Illuminate\Http\Request;

class MasterHarapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $master = MasterHarap::all();

        return view('pages.master_surat.master-harap.index', [
            'master' => $master
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master_surat.master-harap.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterHarapRequest $request)
    {
        $data = $request->all();
        
        MasterHarap::create($data);

        return redirect()->route('master_surat-master_harap')->with('notification-success-add', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MasterHarap::findOrFail($id);

        return view('pages.master_surat.master-harap.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MasterHarapRequest $request, $id)
    {
        $data = MasterHarap::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('master_surat-master_harap')->with('notification-success-edit', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = MasterHarap::findOrFail($id);

        $data->delete();

        return back()->with('notification-success-delete', '');
    }
}
