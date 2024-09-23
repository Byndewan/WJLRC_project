<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;

class Karya extends Model
{
    // protected $fillable = ['judul', 'penulis', 'deskripsi', 'tanggal'];

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'id');
    }

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }
};
