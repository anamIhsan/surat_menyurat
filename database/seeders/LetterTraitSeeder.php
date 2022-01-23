<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterTraitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('letter_traits')->truncate();

        DB::table('letter_traits')->insert([
            'name' => 'Sangat Segera'
        ]);

        DB::table('letter_traits')->insert([
            'name' => 'Segera'
        ]);

        DB::table('letter_traits')->insert([
            'name' => 'Penting'
        ]);

        DB::table('letter_traits')->insert([
            'name' => 'Biasa'
        ]);
    }
}
