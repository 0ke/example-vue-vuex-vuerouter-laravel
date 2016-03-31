<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharelink extends Model
{
//variables

    protected $table = 'sharelinks';

    protected $fillable = ['icon_id', 'url'];

    protected $hidden = ['pivot', 'icon_id'];

    protected $with = ['icon'];

    public $timestamps = false;

// relations

    // one sharelink on one

    // one sharelink to many

    // many sharelinks to one
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    // has many trough

    // many sharelinks to many

    // polymorphic

    // many to many polymorphic
    public function albums()
    {
        return $this->morphedByMany(Album::class, 'shareable');
    }

    public function artists()
    {
        return $this->morphedByMany(Artist::class, 'shareable');
    }

    public function candidates()
    {
        return $this->morphedByMany(Candidate::class, 'shareable');
    }

    public function polls()
    {
        return $this->morphedByMany(Poll::class, 'shareable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'shareable');
    }

    public function roles()
    {
        return $this->morphedByMany(Role::class, 'shareable');
    }

    public function storystreams()
    {
        return $this->morphedByMany(Storystream::class, 'shareable');
    }

    public function tracks()
    {
        return $this->morphedByMany(Track::class, 'shareable');
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'shareable');
    }

// functions

// getters

// setters
}
