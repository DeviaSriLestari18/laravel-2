<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert(
            [

                'nama' => 'Devia Sri L',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
            ]
        );
        Siswa::insert(
            [

                'nama' => 'via',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
            ]
        );
        Siswa::insert(
            [
            
                'nama' => 'ndep',
                'kelas' => 'XI RPL 1',
                'jenis_kelamin' => 0,
            ]
        );

        //
    }
}
