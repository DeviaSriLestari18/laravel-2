<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt12637874',
            'url_imdb' => 'https://www.imdb.com/title/tt12637874/?ref_=hm_top_tt_i_1',
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt0773262',
            'url_imdb' => 'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_i_2',
        ]);
        DetailFilm::insert([
             'film_id' => 3,
             'code_film' => 'tt27004148',
             'url_imdb' => 'https://www.imdb.com/title/tt27004148/?ref_=hm_inth_tt_i_2',
        ]);




        //
    }
}
