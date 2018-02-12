<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    // Ajout de la relation 1-n ventes->boisson
    public function boisson()
   {
        return $this->belongsTo('App\Boisson');
   } 
}
