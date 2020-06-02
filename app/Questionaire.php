<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Questionaire extends Model
{
    protected $guarded = [];


    // Helper methods
    public function path(){
        return url("/questionaire/$this->id");
    }

    public function publicPath(){
        return url("/surveys/$this->id-".Str::slug($this->title));
    }

    // Relationships

    public function question(){
        return $this->hasMany(Question::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function surveys(){
        return $this->hasMany(Survey::class);
    }
}
