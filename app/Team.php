<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function services() {
        # Team has many Services
        # Define a one-to-many relationship.
        return $this->hasMany('App\Service');
    }

    public function ushers(){
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Usher')->withTimestamps();
    }
}
