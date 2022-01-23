<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisposisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dispositions')->insert([
            'surat_masuk_id' => 1,
            'master_harap_id' => 1,
            'users_id' => 5,
            'catatan_adminTU' => 'Catatan admintu1',
            'catatan_kepalaDinas' => 'catatanKepalaDinas1',
            'verifikasi' => 'Sudah',
            'tanggal_verifikasi' => new DateTime(),
        ]);

        DB::table('dispositions')->insert([
            'surat_masuk_id' => 2,
            'master_harap_id' => 2,
            'users_id' => 5,
            'catatan_adminTU' => 'Catatan admintu2',
            'catatan_kepalaDinas' => 'catatanKepalaDinas2',
            'verifikasi' => 'Belum',
            'tanggal_verifikasi' => new DateTime(),
        ]);

        DB::table('dispositions')->insert([
            'surat_masuk_id' => 3,
            'master_harap_id' => 3,
            'users_id' => 5,
            'catatan_adminTU' => 'Catatan admintu3',
            'catatan_kepalaDinas' => 'catatanKepalaDinas3',
            'verifikasi' => 'Belum',
            'tanggal_verifikasi' => new DateTime(),
        ]);
    }
}
