<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactmessage extends Model
{
//variables

    protected $table = 'contactmessages';

    protected $fillable = ['subject', 'name', 'email', 'message', 'answer', 'read', 'answered', 'deleted_at'];

    protected $hidden = [];

    protected $with = [];

// relations

    // one message on one

    // one message to many

    // many messages to one
    public function Messagethread()
    {
        return $this->belongsTo(Messagethread::class);
    }

    // has many trough

    // many messages to many

    // polymorphic

    // many to many polymorphic

// functions

// getters

// setters
}
