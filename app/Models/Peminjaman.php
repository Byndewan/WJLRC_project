<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Peminjaman extends Model
{
    // protected $fillable = 'peminjamen';
    // protected $guarded = ['id'];

    public function judul()
    {
        return $this->belongsTo(Buku::class, 'judul_id', 'id');
    }
}
