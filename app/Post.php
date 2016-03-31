<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
//variables

    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['type_id', 'subtype_id', 'concept', 'views', 'startdate', 'endingdate', 'price', 'inclusions_nl', 'inclusions_en', 'location', 'body_nl', 'body_en', 'videourl', 'embed', 'score', 'matchscore', 'pros_nl', 'pros_en', 'cons_nl', 'cons_en', 'deleted_at'];

    protected $hidden = ['type_id', 'subtype_id', 'inclusions_nl', 'inclusions_en', 'seats', 'seats_remaining', 'price', 'startdate', 'endingdate', 'location', 'updated_at'];

    protected $with = ['seo'];

    protected $dates = ['deleted_at'];

// relations

    // one post on one

    // one post to many
    public function streams()
    {
        return $this->hasMany(Stream::class);
    }

    // many posts to one
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function subtype()
    {
        return $this->belongsTo(Subtype::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    // has many trough

    // many posts to many
    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    public function storystreams()
    {
        return $this->belongsToMany(Storystream::class);
    }

    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class);
    }

    public function tracks()
    {
        return $this->belongsToMany(Track::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // polymorphic
    public function seo()
    {
        return $this->morphMany(Seo::class, 'seoble');
    }

    // many to many polymorphic
    public function likes()
    {
        return $this->morphToMany(Like::class, 'likeable');
    }

    public function sharelinks()
    {
        return $this->morphToMany(Sharelink::class, 'shareable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

// functions

// getters

    public function getTitleNlAttribute()
    {
        return $this->attributes['title_nl'] = response()->returnLang($this, 'title', false, 'nl');
    }

    public function getTitleEnAttribute()
    {
        return $this->attributes['title_en'] = response()->returnLang($this, 'title', false, 'en');
    }

    public function getDescriptionEnAttribute()
    {
        return $this->attributes['description'] = response()->returnLang($this, 'description', false, 'en');
    }

    public function getDescriptionNlAttribute()
    {
        return $this->attributes['description'] = response()->returnLang($this, 'description', false, 'nl');
    }

// setters

}
