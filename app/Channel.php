<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
       'title'
    ];

    public function discssions(){
        return $this->hasMany('App\Discussion');
    }
}
