<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

//variables

    protected $table = 'users';

    protected $fillable = ['username', 'first_name', 'last_name', 'email', 'password', 'phone', 'about_nl', 'about_en', 'pattern'];

    protected $hidden = ['password', 'remember_token', 'artist_id', 'artist_id', 'created_at', 'updated_at', 'pattern', 'pivot', 'created_at'];

    protected $with = ['seo'];

// relations

    // one user on one

    // one user to many

    // many users to one
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    // many trough

    // many to many
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function messagethreads()
    {
        return $this->belongsToMany(Messagethread::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // polymorphic many to many
    public function likes()
    {
        return $this->morphToMany(Like::class, 'likeable');
    }

    public function sharelinks()
    {
        return $this->morphToMany(Sharelink::class, 'shareable');
    }

    public function roles()
    {
        return $this->morphToMany(Role::class, 'roleable');
    }

// functions
    public function hasRole($role)
    {
        $roles = $this->roles;
        if ($roles->count()) {
            foreach ($roles as $r) {
                if ($r->label == $role) {
                    return true;
                }
            }
        }
        return false;
    }

    public function hasRoles($userRoles)
    {
        $modelroles = $this->roles->lists('label');
        if ($modelroles->count()) {
            foreach ($modelroles as $label) {
                if (str_contains(json_encode($userRoles), $label)) {
                    return true;
                }
            }
        }
        return false;
    }

// getters

// setters

}
