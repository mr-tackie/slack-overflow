<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillalble = ["title", "body"];

    public function setSlugAttribute(){
        $this->slug = str_slug($this->title);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
