<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;

class Karya extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'like'
    ];

    public function likes(){
        return $this->belongsToMany(User::class,'karya_like')->withTimestamps();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id', 'id');
    }
}

    

    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

