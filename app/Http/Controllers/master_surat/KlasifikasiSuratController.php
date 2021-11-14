<?php

namespace App\Http\Controllers\master_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\KlasifikasiSuratRequest;
use App\Models\KlasifikasiSurat;
use Illuminate\Http\Request;

class KlasifikasiSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $klasifikasi = KlasifikasiSurat::all();

        return view('pages.master_surat.klasifikasi-surat.index', [
            'klasifikasi' => $klasifikasi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.master_surat.klasifikasi-surat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KlasifikasiSuratRequest $request)
    {
        $data = $request->all();

        KlasifikasiSurat::create($data);

        return redirect()->route('master_surat-klasifikasi_surat')->with('notification-success-add', '');
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
        $data = KlasifikasiSurat::findOrFail($id);

        return view('pages.master_surat.klasifikasi-surat.edit', [
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
    public function update(KlasifikasiSuratRequest $request, $id)
    {
        $data = KlasifikasiSurat::findOrFail($id);

        $data->update($request->all());
        
        return redirect()->route('master_surat-klasifikasi_surat')->with('notification-success-edit', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KlasifikasiSurat::findOrFail($id);

        $data->delete();

        return back()->with('notification-success-delete', '');

    }
}
