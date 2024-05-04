<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Sekolah::insert(
            [
                'nama' => 'SMK ASSALAAM BANDUNG',
                'alamat' => 'Jln.Situtarate',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMP ASSALAAM BANDUNG',
                'alamat' => 'Balong Gede',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMA ASSALAAM BANDUNG',
                'alamat' => 'Jln.Situtarate',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SD ASSALAAM BANDUNG',
                'alamat' => 'Balong Gede',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'BPPI BALEENDAH',
                'alamat' => 'Baleendah',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK 3 BALEENDAH',
                'alamat' => 'Baleendah',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK 2 BALEENDAH',
                'alamat' => 'Baleendah',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'BAKTI KENCANA',
                'alamat' => 'Katapang',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK 1 KATAPANG',
                'alamat' => 'Katapang',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMPN 3 BALEEDAH',
                'alamat' => 'Rancamnayar',
                'email' => 0,
                'tlp' => 0,
                'status' => 'active',
            ]
        );

        //
    }
}
