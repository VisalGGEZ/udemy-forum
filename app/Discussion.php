<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Discussion extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'channel_id', 'slug'
    ];

    public function channel(){
        return $this->belongsTo('App\Channel');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function replies(){
        return $this->hasMany('App\Reply');
    }

    public function watchDiscussions(){
        return $this->hasMany('App\WatchDiscussion');
    }

    public function isWatched()
    {
        $id = Auth::id();

        $wathcers = array();

        foreach ($this->watchDiscussions as $watchDiscussion):
            array_push($wathcers, $watchDiscussion->user_id);
        endforeach;

        if (in_array($id, $wathcers)) {
            return true;
        } else {
            return false;
        }

    }
}
