<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        Film::insert([
            'judul' => 'Fallout',
            'deskripsi' => 'lorem ipmsum...',
        ]);
        Film::insert([
             'judul' => 'Dexter',
             'deskripsi' => 'lorem ipmsum...',
        ]);
        Film::insert([
            'judul' => 'Siksa Kubur',
            'deskripsi' => 'lorem ipmsum...',
        ]);





        //
    }
}
