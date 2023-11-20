<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'username'=> 'Admin1',
                'password' =>bcrypt('admin123'),
                'role'=> 'admin'
            ],
            [
                'name'=>'Fakhri',
                'username'=> 'G1A021050',
                'password' =>bcrypt('kudalaut123'),
                'role'=> 'mahasiswa'
            ],
            [
                'name'=>'Boko Susilo',
                'username'=> 'Boko123',
                'password' =>bcrypt('password'),
                'role'=>'dosen'
            ],
        ];

        foreach($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
