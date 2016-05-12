<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
//variables

    protected $table = 'roles';

    protected $fillable = ['concept', 'label', 'requirements', 'expectations', 'profile', 'seats', 'remaining', 'deleted_at'];

    protected $hidden = ['updated_at', 'deleted_at'];

    protected $with = ['seo'];

// relations

    // one role on one

    // one role to many

    // many roles to one

    // many trough

    // many to many

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // polymorphic many to many
    public function users()
    {
        return $this->morphedByMany(User::class, 'roleable');
    }

    public function permissions()
    {
        return $this->morphedByMany(Permission::class, 'roleable');
    }

// functions

// getters

    public function getRequirementsAttribute()
    {
        return $this->attributes['requirements'] = json_decode($this->attributes['requirements']);
    }

    public function getExpectationsAttribute()
    {
        return $this->attributes['expectations'] = json_decode($this->attributes['expectations']);
    }

// setters
}
