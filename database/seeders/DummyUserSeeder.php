<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pembimbing;
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
                'name' => 'Admin',
                'username' => 'Admin1',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Fakhri',
                'username' => 'G1A021050',
                'password' => bcrypt('kudalaut123'),
                'role' => 'mahasiswa'
            ],
            [
                'name' => 'Boko Susilo',
                'username' => 'Boko123',
                'password' => bcrypt('password'),
                'role' => 'dosen'
            ],
            [
                'name' => 'Rusdi',
                'username' => 'Rusdi123',
                'password' => bcrypt('password'),
                'role' => 'dosen'
            ],
        ];


        foreach ($userData as $key => $val) {
            User::create($val);
        }

        $dosens = [
            [
                'name' => 'Boko Susilo',
                'NIP' => 'Boko123',
                'NomorNIP' => '93821 49328 492',
            ],
            [
                'name' => 'Rusdi',
                'NIP' => 'Rusdi123',
                'NomorNIP' => '234 432332 3232',
            ],
        ];

        foreach ($dosens as $key => $val) {
            Dosen::create($val);
        }


        $mahasiswas = [
            [
                'name' => 'Fakhri',
                'NPM' => 'G1A021050',
            ],
        ];
        foreach ($mahasiswas as $key => $val) {
            Mahasiswa::create($val);
        }

        $pembimbings = [
            [
                'mahasiswa_id' => '1',
                'dosen1_id' => '1',
                'dosen2_id'=> '2',
            ],
        ];
        foreach ($pembimbings as $key => $val) {
            Pembimbing::create($val);
        }
    }
}
