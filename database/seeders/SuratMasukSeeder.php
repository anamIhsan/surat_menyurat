<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuratMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incoming_letters')->insert([
            'dari' => 'PT.Surya',
            'no_surat' => '08.118/DP-KM/VII/2021',
            'tanggal_masuk' => new DateTime(),
            'perihal' => 'Permohonan Layanan',
            'klasifikasi_surat_id' => 1,
            'sifat_surat_id' => 1,
            'catatan' => 'Catatan Pengolah',
            'lampiran_surat' => 'file.pdf',
            'diterima' => null,
        ]);

        DB::table('incoming_letters')->insert([
            'dari' => 'PT.Sampoerna',
            'no_surat' => '08.118/DP-KM/VII/2021',
            'tanggal_masuk' => new DateTime(),
            'perihal' => 'Kerja Sama',
            'klasifikasi_surat_id' => 2,
            'sifat_surat_id' => 2,
            'catatan' => 'Catatan Pengolah1',
            'lampiran_surat' => 'file11.pdf',
            'diterima' => null,
        ]);

        DB::table('incoming_letters')->insert([
            'dari' => 'PT.Samsoe',
            'no_surat' => '08.118/DP-KM/VII/2021',
            'tanggal_masuk' => new DateTime(),
            'perihal' => 'Penelitian',
            'klasifikasi_surat_id' => 3,
            'sifat_surat_id' => 3,
            'catatan' => 'Catatan Pengolah2',
            'lampiran_surat' => 'file22.pdf',
            'diterima' => null,
        ]);
    }
}
