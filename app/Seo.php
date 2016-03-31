<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
//variables

    protected $table = 'seo';

    protected $fillable = ['title', 'title_nl', 'title_en', 'slug', 'slug_nl', 'slug_en', 'description_nl', 'description_en', 'seoble_type', 'seoble_id', 'deleted_at'];

    protected $hidden = ['id', 'seoble_type', 'seoble_id', 'deleted_at', 'updated_at', 'icon_id', 'created_at'];

    protected $with = [];

// relations

    //many seo to one
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

// polymorphic
    public function seoble()
    {
        return $this->morphTo();
    }

// functions

// getters

// setters
    public function setSlugAttribute($string)
    {
        return $this->attributes['slug'] = str_slug($string);
    }
    public function setSlugNlAttribute($string)
    {
        return $this->attributes['slug_nl'] = str_slug($string);
    }
    public function setSlugEnAttribute($string)
    {
        return $this->attributes['slug_en'] = str_slug($string);
    }

}
