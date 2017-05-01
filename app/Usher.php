<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usher extends Model
{
    public function services() {

		return $this->belongsToMany('App\Service')->withTimestamps();
	}

}
