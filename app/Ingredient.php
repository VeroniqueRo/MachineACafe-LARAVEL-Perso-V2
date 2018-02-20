<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    
    //Préciser les champs que l'on a le droit de modifier 
    protected $fillable = ['nom', 'prix'];
    public $timestamps = false;
    
    public function boissons()
    {
        return $this->belongsToMany('App\Boisson')->withPivot('nbDose');
    }  
}
