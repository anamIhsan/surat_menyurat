<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('letter_classifications')->insert([
            'code' => '000',
            'name' => 'umum',
        ]);

        DB::table('letter_classifications')->insert([
            'code' => '800',
            'name' => 'kepegawaian',
        ]);

        DB::table('letter_classifications')->insert([
            'code' => '700',
            'name' => 'pengawasan',
        ]);
    }
}
