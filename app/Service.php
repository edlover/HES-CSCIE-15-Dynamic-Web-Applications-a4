<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function usher() {

        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Usher')->withTimestamps();
    }
}
