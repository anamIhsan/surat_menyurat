<?php

namespace App\Http\Controllers\kelola_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuratKeluarRequest;
use App\Models\KlasifikasiSurat;
use App\Models\SifatSurat;
use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s_keluar = SuratKeluar::all();

        return view('pages.kelola_surat.surat-keluar.index', [
            's_keluar' => $s_keluar
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sifat = SifatSurat::all();
        $klasifikasi = KlasifikasiSurat::all();

        return view('pages.kelola_surat.surat-keluar.create', [
            'sifat' => $sifat,
            'klasifikasi' => $klasifikasi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratKeluarRequest $request)
    {
        $data = $request->all();
        
        SuratKeluar::create($data);

        return redirect()->route('kelola_surat-surat_keluar')->with('notification-success-add', '');
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
        $data = SuratKeluar::findOrFail($id);
        $sifat = SifatSurat::all();
        $klasifikasi = KlasifikasiSurat::all();

        return view('pages.kelola_surat.surat-keluar.edit', [
            'data' => $data,
            'sifat' => $sifat,
            'klasifikasi' => $klasifikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuratKeluarRequest $request, $id)
    {
        $data = SuratKeluar::findOrFail($id);

        $data->update($request->all());

        return redirect()->route('kelola_surat-surat_keluar')->with('notification-success-edit', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SuratKeluar::findOrFail($id);

        $data->delete();

        return back()->with('notification-success-delete', '');
    }
}
