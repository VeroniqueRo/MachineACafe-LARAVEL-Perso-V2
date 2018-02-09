<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    // Ajout de la relation 1-n ventes->boissons
    public function boissons()
   {
        return $this->belongsTo('App\Boisson');
   } 
}
