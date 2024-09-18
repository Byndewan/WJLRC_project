<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'user_id', 'body', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
}
