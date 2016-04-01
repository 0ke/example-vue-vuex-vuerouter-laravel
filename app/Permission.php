<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
//variables

    protected $table = 'permissions';

    protected $fillable = ['label'];

    protected $hidden = ['pivot'];

    protected $with = ['seo'];

    public $timestamps = false;

// relations

    // one permission on one

    // one permission to many

    // many permissions to one

    // many trough

    // many to many

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // polymorphic many to many
    public function roles()
    {
        return $this->morphToMany(Role::class, 'roleable');
    }

// functions

// getters

// setters
}
