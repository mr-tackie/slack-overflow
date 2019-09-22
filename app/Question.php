<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;

class Question extends Model
{
    //
    protected $fillalble = ["title", "body"];

    public function setTitleAttribute($value){
        $this->attributes["title"] = $value;
        $this->attributes["slug"] = Str::kebab($value);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
