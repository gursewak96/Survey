<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $guarded = [];

    public function question(){
        return $this->hasMany(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
