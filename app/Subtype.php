<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtype extends Model
{
//variables

    protected $table = 'subtypes';

    protected $fillable = ['title', 'type_id', 'icon_id', 'visible', 'position'];

    protected $hidden = ['id', 'type_id', 'icon_id', 'position', 'visible'];

    protected $with = ['seo', 'type'];

    public $timestamps = false;

// relations

    // one subtype on one

    // one subtype to many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // many subtypes to one
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // has many trough

    // many subtypes to many

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
