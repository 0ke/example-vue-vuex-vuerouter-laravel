<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
//variables

    protected $table = 'tags';

    protected $fillable = ['title'];

    protected $hidden = ['id', 'pivot'];

    protected $with = ['seo'];

    public $timestamps = [];

// relations

    // one tag on one

    // one tag to many

    // many tags to one

    // has many trough

    // many tags to many

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // many to many polymorphic
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

// functions

// getters

// setters
}
