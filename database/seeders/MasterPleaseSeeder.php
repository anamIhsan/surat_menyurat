<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterPleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('master_pleases')->insert([
            'name' => 'Tanggapan dan Saran'
        ]);

        DB::table('master_pleases')->insert([
            'name' => 'Proses Lebih Lanjut'
        ]);

        DB::table('master_pleases')->insert([
            'name' => 'Kordinasi / konfirmasi'
        ]);
    }
}
