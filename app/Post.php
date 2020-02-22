<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Post extends Model
{

    protected $with = [
        'content'
    ];

    public function content() {
        return $this->hasMany(Content::class, 'post_id', 'id');
    }
}
