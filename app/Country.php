<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){

    	return $this->hasManyThrough(Post::class,User::class);
    }
}
//we can get all data from table without any connected it.
//by using hasManyThrough 