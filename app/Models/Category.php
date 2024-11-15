<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Karya;

class Category extends Model
{
    // protected $fillable = ['nama_kategori'];
    // protected $table = 'categories';

    // protected $fillable = [
    //     'nama_kategori',
    // ];

    public function data_karya()
    {
        return $this->hasMany(Karya::class, 'kategori_id', 'id');
    }
};
