<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Content extends Model
{
    protected $casts = [
        'content' => 'object',
    ];


    public function post() {
        return $this->belongsTo(Post::class, 'id');
    }
}
