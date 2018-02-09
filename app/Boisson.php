<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    // Ajout de la relation 1-n boissons->ventes
    public function ventes()
   {
       return $this->hasMany('App\Vente');
   } 
}
