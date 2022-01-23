<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('users')->insert([
            'NIP' => '543213456789098765',
            'name' => 'Super Admin',
            'jabatan' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345'),
            'roles' => 'SUPER ADMIN',
        ]);

        DB::table('users')->insert([
            'NIP' => '987898098767890986',
            'name' => 'Admin',
            'jabatan' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'roles' => 'ADMIN',
        ]);

        DB::table('users')->insert([
            'NIP' => '6543213456898765',
            'name' => 'AdminTU',
            'jabatan' => 'AdminTU',
            'email' => 'adminTU@gmail.com',
            'password' => Hash::make('12345'),
            'roles' => 'ADMIN TU',
        ]);

        DB::table('users')->insert([
            'NIP' => '234543212345678909',
            'name' => 'Kepala Dinas',
            'jabatan' => 'Kepala Dinas',
            'email' => 'kepaladinas@gmail.com',
            'password' => Hash::make('12345'),
            'roles' => 'KEPALA DINAS',
        ]);
        
        DB::table('users')->insert([
            'NIP' => '987657890987654678',
            'name' => 'Pegawai',
            'jabatan' => 'Pegawai',
            'email' => 'pegawai@gmail.com',
            'password' => Hash::make('12345'),
            'roles' => 'PEGAWAI',
        ]);
        
    }
}
