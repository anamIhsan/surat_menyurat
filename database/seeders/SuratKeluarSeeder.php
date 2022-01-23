<?php

namespace Database\Seeders;

use App\Models\SuratKeluar;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SuratKeluar::truncate();

        DB::table('outgoing_letters')->insert([
            'teruskan_kepada' => 'PT.Nike',
            'no_surat' => '08.118/DP-KM/VII/2021',
            'perihal' => 'Permohonan Layanan',
            'tanggal_keluar' => new DateTime(),
            'klasifikasi_surat_id' => 1,
            'sifat_surat_id' => 1,
            'catatan' => 'Catatan Pengolah'
        ]);

        DB::table('outgoing_letters')->insert([
            'teruskan_kepada' => 'PT.Adidas',
            'no_surat' => '01.111/DP-ML/VII/2021',
            'perihal' => 'Layanan',
            'tanggal_keluar' => new DateTime(),
            'klasifikasi_surat_id' => 2,
            'sifat_surat_id' => 2,
            'catatan' => 'Catatan Pengolah 2'
        ]);

        DB::table('outgoing_letters')->insert([
            'teruskan_kepada' => 'PT.New Balance',
            'no_surat' => '01.123/JP-ML/VV/2019',
            'perihal' => 'Pengawasan',
            'tanggal_keluar' => new DateTime(),
            'klasifikasi_surat_id' => 3,
            'sifat_surat_id' => 3,
            'catatan' => 'Catatan Pengolah 3'
        ]);
    }
}
