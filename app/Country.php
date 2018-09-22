<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];
    public function city(){
        return $this->hasMany(City::class);
    }

    public function continent(){
        return $this->belongsTo(Continent::class);
    }
}
