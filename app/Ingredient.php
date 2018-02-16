<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function boissons()
    {
        return $this->belongsToMany('App\Boisson')->withPivot('nbDose');
    }  
}
