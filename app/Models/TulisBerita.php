<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TulisBerita extends Model
{
    use HasFactory;

    protected $table='berita';
    protected $fillable = [
        'judul',
        'kategori',
        'gambar',
        'sumber',
        'isi',
        'status',
        'penulis',
        'tanggal',
        'pukul',
        'tag',
        'views',
    ];

    public function vzt()
    {
        return visits($this);
    }

    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
