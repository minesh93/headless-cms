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

    public function getContentByKey($key = '') {
        return $this->content()->where('content_key', $key)->get()->first();
    }

    public function mapContent() {
        $contentArray = [];

        $contentKeys = collect(app('headless')->types->{$this->type}->content)->pluck('key');

        foreach ($contentKeys as $key) {
            $content = $this->getContentByKey($key);
            if($content) {
                $contentArray[$key] = (object) $content->content;
            } else {
                $contentArray[$key] = (object) [];
            }
        }

        $this->mappedContent = $contentArray;
    }
}
