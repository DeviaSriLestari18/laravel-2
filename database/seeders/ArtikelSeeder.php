<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Database\Seeder;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {

        Artikel::insert([
            'judul' => 'Global Warning',
            'foto' => 'https://st2.depositphotos.com/56627780/51078/v/450/depositphotos_510785720-stock-illustration-climate-change-vertical-poster-banner.jpg',
            'kategori' =>'Cuaca Alam',
            'konten'=>'Perubahan iklim memperburuk kelangkaan air pada daerah daerah yang mengalami
             tekanan berat akan ketersediaan air, dan mengarah pada meningkatnya risiko kekeringan pertanian yang memperngaruhi produksi pangan, dan kekeringan juga menyebabkan kerusakan ekosistem baik darat, laut, sungai.',
            'penulis'=> 'Mamuju',
        ]);
        Artikel::insert([
            'judul' => 'Bahaya Merokok',
            'foto' => 'https://st3.depositphotos.com/6436316/12529/v/950/depositphotos_125299110-stock-illustration-smoke-kills-poster-smoking-harm.jpg',
            'kategori' =>'Stop Merokok',
            'konten'=> 'Asap rokok mengandung ribuan bahan kimia diantaranya banyak zat beracun dan bersifat karsinogenik yang bisa tinggal di suatu permukaan.
             Bila terpapar dalam jangka waktu yang lama dapat menyebabkan meningkatkan resiko kanker, serangan asma, masalah paru paru, infeksi tenggorokan dan mata.',
            'penulis'=>'Dinas Kesehatan',
        ]);
        Artikel::insert([
            'judul' => 'Cegah Banjir Sebelum Terjadi',
            'foto' => 'https://i.ibb.co/qgjZFJf/b1.png',
            'kategori' => 'Stop Membuang Sampah Sembarangan',
            'konten' => 'Dampak banjir bagi masyarakat yang paling sederhana adalah
             terendamnya rumah sehingga membuat mereka harus melakukan penanganan terlebih dahulu sebelum beraktivitas. Adapun dampak negatif banjir yang paling parah, yakni munculnya korban jiwa.',
            'penulis' => 'Prudential',
        ]);


        //
    }
}
