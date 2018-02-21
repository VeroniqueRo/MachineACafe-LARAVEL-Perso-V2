<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Boisson;// lien vers la classe Boisson

class machineACafeController extends Controller
{
    
    // Affiche les boissons proposées en fonction de la BDD
    public function index() {
        
        $boissons = Boisson::all();// Appelle la classe pour ajouter toutes les données
        return view('machineACafe', ['boissons'=>$boissons]);

       
    
    }

}

?>
