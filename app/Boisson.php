<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    //Préciser les champs que l'on a le droit de modifier 
    protected $fillable = ['nom', 'prix'];

    // Ajout de la relation 1-n boisson->ventes
    public function ventes()
   {
       return $this->hasMany('App\Vente');
   }

   public function ingredients()
   {
        return $this->belongsToMany('App\Ingredient')->withPivot('nbDose');
   }
}
