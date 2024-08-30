<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Ambatuprak',
            'email' => 'ambatuprak@gmail.com',
            'alamat' => 'karet pasar baru barat',
            'ttl' => '2022-10-04',
            'hobi' => 'cols',
            'password' => Hash::make('789852bbc')
        ]);
    }
}
