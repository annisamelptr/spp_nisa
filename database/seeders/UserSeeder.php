<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'username'      =>  'admin',
            'password'      =>  Hash::make('admin'),
            'nama_petugas'  =>  'Administrator',
            'level'         =>  'admin'
        ]);

        User::create([
            'username'      =>  'petugas',
            'password'      =>  Hash::make('67890'),
            'nama_petugas'  =>  'Annisa',
            'level'         =>  'petugas'
        ]);

        User::create([
            'username'      =>  'siswa',
            'password'      =>  Hash::make('12345'),
            'nama_petugas'  =>  'siswa',
            'level'         =>  'siswa'
        ]);
    }
}
