<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
//variables

    protected $table = 'types';

    protected $fillable = ['title', 'icon_id', 'visible', 'visible'];

    protected $hidden = ['icon_id'];

    protected $with = ['seo'];

    public $timestamps = false;

// relations

    // one type on one

    // one type to many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    // has many trough

    // many types to many

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // many to many polymorphic

// functions

// getters
    public function getDescriptionNlAttribute()
    {
        return $this->attributes['description_nl'] = $this->seo->first()->description_nl;
    }
    public function getDescriptionEnAttribute()
    {
        return $this->attributes['description_en'] = $this->seo->first()->description_en;
    }

// setters

}
