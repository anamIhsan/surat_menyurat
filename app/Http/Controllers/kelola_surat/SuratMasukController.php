<?php

namespace App\Http\Controllers\kelola_surat;

use App\Http\Controllers\Controller;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $s_masuk = SuratMasuk::all();
        
        return view('pages.kelola_surat.surat-masuk.index', [
            's_masuk' => $s_masuk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kelola_surat.surat-masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        return view('pages.kelola_surat.surat-masuk.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }

    //mengupload file
    public function uploadFile($file)
    {
        $new_name_file =time() . '.'. $file->getClientOriginalExtension();
        $file->move(public_path('lampiran_surat'), $new_name_file);
        return $new_name_file;
        
    }
    
    //unlink buat menghapus file
    public function removeFile($file)
    {   
        if (file_exists('lampiran_surat/'. $file)){
        unlink('lampiran_surat/'. $file);
        }
    }
}
