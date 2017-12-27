<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WatchDiscussion extends Model
{
    protected $fillable = [
       'user_id', 'discussion_id'
    ];
}
