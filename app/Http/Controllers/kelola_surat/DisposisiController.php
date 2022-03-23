<?php

namespace App\Http\Controllers\kelola_surat;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisposisiRequest;
use App\Models\Disposisi;
use App\Models\MasterHarap;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($url)
    {
        $s_masuk = SuratMasuk::findOrFail($url);
        $disposisi = Disposisi::findOrFail($url);

        return view('pages.kelola_surat.surat-masuk.disposisi.index', [
            's_masuk' => $s_masuk,
            'disposisi' => $disposisi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        $data = Disposisi::findOrFail($id);
        $masterHarap = MasterHarap::all();
        $pegawais = User::where('roles', 'Pegawai')->get();

        return view('pages.kelola_surat.surat-masuk.disposisi.edit', [
            'data' => $data,
            'masterHarap' => $masterHarap,
            'pegawais' => $pegawais,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Auth::user()->roles == "SUPER ADMIN"){
            $request->validate([
                'catatan' => 'required',
                'catatan_adminTU' => 'required',
                'catatan_kepalaDinas' => 'required',
                'tanggal_verifikasi' => 'required',
                'master_harap_id' => 'required',
                'diterima' => 'required',
                'verifikasi' => 'required',
                ],
                [
                'catatan.required' => 'Catatan wajib di isi',
    
                'catatan_adminTU.required' => 'Catatan Admin TU wajib di isi',
    
                'catatan_kepalaDinas.required' => 'Catatan Kepala Dinas wajib di isi',
    
                'tanggal_verifikasi.required' => 'Tanggal wajib di isi',
                
                'master_harap_id.required' => 'Harap wajib di isi',
                
                'diterima.required' => 'Teruskan kepada wajib di isi',
    
                'verifikasi.required' => 'Verifikasi Surat wajib di isi',
            ]);
        }elseif(Auth::user()->roles == "ADMIN"){
            $request->validate([
                'catatan' => 'required'
                ],
                [
                'catatan.required' => 'Catatan wajib di isi'
            ]);
        }elseif(Auth::user()->roles == "ADMIN TU"){
            $request->validate([
                'catatan_adminTU' => 'required'
                ],
                [
                'catatan_adminTU.required' => 'Catatan Admin TU wajib di isi'
            ]);
        }else{
            $request->validate([
                'catatan_kepalaDinas' => 'required',
                'tanggal_verifikasi' => 'required',
                'master_harap_id' => 'required',
                'diterima' => 'required',
                'verifikasi' => 'required',
                ],
                [
                'catatan_kepalaDinas.required' => 'Catatan Kepala Dinas wajib di isi',
    
                'tanggal_verifikasi.required' => 'Tanggal wajib di isi',
                
                'master_harap_id.required' => 'Harap wajib di isi',
                
                'diterima.required' => 'Teruskan kepada wajib di isi',
    
                'verifikasi.required' => 'Verifikasi Surat wajib di isi',
            ]);
        };



        

        $data = $request->all();
        
        if(Auth::user()->roles == "ADMIN TU"){
            $user = User::where("roles", "KEPALA DINAS")->first();
            
            $data['diterima'] = $user->id;
        }

        
        $disposisi = Disposisi::findOrFail($id);
        
        $s_masuk = SuratMasuk::findOrFail($disposisi->suratMasuk->id);

        if($request->verifikasi == null){
            $data['verifikasi'] = 'Belum';
        }

        $disposisi->update($data);

        $s_masuk->update($data);

        return redirect()->route('kelola_surat-disposisi', $id)->with('notification-success-edit', '');
    }
}
