<?php

namespace App\Http\Controllers\kelola_surat;

use App\Http\Controllers\Controller;
use App\Models\Disposisi;
use App\Models\MasterHarap;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Http\Request;

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
        $data = $request->all();
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
