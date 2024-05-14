<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AlbumMusikSeeder::class,
        ]);
        $this->call([
            FilmSeeder::class,
        ]);
        $this->call([
            DetailFilmSeeder::class,
        ]);
        $this->call([
            MediaFilmSeeder::class,
        ]);
        $this->call([
            ArtikelSeeder::class,
        ]);


    }
}
