<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // kolom (field) mana saja yang boleh diisi
    public $fillable = ['judul','foto','kategori','konten', 'penulis'];

    // kolom (field) mana saja yang boleh diperlihatkan
    public $visible = ['judul','foto','kategori','konten', 'penulis'];
}
