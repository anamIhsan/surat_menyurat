<?php

namespace App\Http\Controllers\master_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\SifatSuratRequest;
use App\Models\SifatSurat;
use Illuminate\Http\Request;

class SifatSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sifat = SifatSurat::all();

        return view('pages.master_surat.sifat-surat.index', [
            'sifat' => $sifat
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master_surat.sifat-surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SifatSuratRequest $request)
    {
        $data = $request->all();

        SifatSurat::create($data);

        return redirect()->route('master_surat-sifat_surat')->with('notification-success-add', '');
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
        $data = SifatSurat::findOrFail($id);

        return view('pages.master_surat.sifat-surat.edit', [
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
    public function update(SifatSuratRequest $request, $id)
    {
        $data = SifatSurat::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('master_surat-sifat_surat')->with('notification-success-edit', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SifatSurat::findOrFail($id);

        $data->delete();
        
        return back()->with('notification-success-delete', '');
    }
}
