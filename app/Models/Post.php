<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','content'];
    
    protected $casts = [
        'tags' => 'array',
    ];
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}

