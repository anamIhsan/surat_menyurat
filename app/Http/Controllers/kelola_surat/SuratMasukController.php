<?php

namespace App\Http\Controllers\kelola_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuratMasukRequest;
use App\Models\Disposisi;
use App\Models\KlasifikasiSurat;
use App\Models\SifatSurat;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::user()->roles == "ADMIN" || Auth::user()->roles == "SUPER ADMIN"){
            $s_masuk = SuratMasuk::all();
        }else{
            $s_masuk = SuratMasuk::where("diterima", Auth::user()->id)->get();
        }
        
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
        $sifat = SifatSurat::all();
        $klasifikasi = KlasifikasiSurat::all();

        return view('pages.kelola_surat.surat-masuk.create', [
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
    public function store(SuratMasukRequest $request)
    {
        $data = $request->all();

        $user = User::where("roles", "ADMIN TU")->first();
        
        $image_file = $this->uploadFile($request->file('lampiran_surat'));

        $data['lampiran_surat'] = $image_file;

        $data['diterima'] = $user->id;

        $s_masuk =  SuratMasuk::create($data);

        $create = [
            'surat_masuk_id' => $s_masuk->id
        ];

        Disposisi::create($create);
        
        return redirect()->route('kelola_surat-surat_masuk')->with('notification-success-add', '');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = action([DisposisiController::class, 'index'], ['id' => $id]);
        
        return redirect($url);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SuratMasuk::findOrFail($id);
        $sifat = SifatSurat::all();
        $klasifikasi = KlasifikasiSurat::all();

        return view('pages.kelola_surat.surat-masuk.edit', [
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
    public function update(SuratMasukRequest $request, $id)
    {
        $data = $request->all();

        $s_masuk = SuratMasuk::findOrFail($id);

        if($request->file('lampiran_surat') == null){
            $data['lampiran_surat'] = $s_masuk->lampiran_surat;
        }else {
            $this->removeFile($s_masuk->lampiran_surat);
            $image_file = $this->uploadFile($request->lampiran_surat);
            $data['lampiran_surat'] = $image_file;
        }

        $s_masuk->update($data);

        return redirect()->route('kelola_surat-surat_masuk')->with('notification-success-edit', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SuratMasuk::findOrFail($id);
        $this->removeFile($data->lampiran_surat);

        $data->disposisi()->delete();
        $data->delete();
        return back()->with('notification-success-delete', '');
    }

    // mengupload file
    public function uploadFile($file)
    {
        $new_name_file =time() . '.'. $file->getClientOriginalExtension();
        $file->move(public_path('lampiran_surat'), $new_name_file);
        return $new_name_file;
        
    }
    
    // unlink buat menghapus file
    public function removeFile($file)
    {   
        if (file_exists('lampiran_surat/'. $file)){
        unlink('lampiran_surat/'. $file);
        }
    }
}
