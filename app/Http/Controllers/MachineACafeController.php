<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Boisson;// lien vers la classe Boisson

class machineACafeController extends Controller
{
    
    function listDrink() {
        // Méthode d'appel à la BDD sans ORM
        // $drinkChoice = DB::select('select nomboisson, codeboisson  from boisson');
        // Méthode d'appel à la BDD avec ORM
        $drinkChoice = Boisson::all();

        return view('machineACafe', ['drinks' => $drinkChoice]);

    }
}

?>
