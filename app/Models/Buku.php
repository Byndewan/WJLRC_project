<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Buku extends Model
{
    use HasFactory;

    public function data_peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'judul_id', 'id');
    }
}
