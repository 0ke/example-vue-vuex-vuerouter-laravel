<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
//variables

    protected $table = 'icons';

    protected $fillable = ['classname', 'iconname', 'website'];

    protected $hidden = ['id', 'type'];

    protected $with = [];

    public $timestamps = false;

// relations

    // one icon on one

    // one icon to many
    public function seo()
    {
        return $this->hasMany(Seo::class);
    }

    public function subtypes()
    {
        return $this->hasMany(Subtype::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }

    public function sharelinks()
    {
        return $this->hasMany(Sharelink::class);
    }

    // many icons to one

    // has many trough

    // many icons to many

    // polymorphic

    // many to many polymorphic

// functions

// getters

// setters
}
