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

    
    function showDrink($id) {
        // Méthode d'appel à la BDD sans ORM
        // $drink = DB::select("select nomboisson, prixboisson from boisson where codeboisson = ?", [$code]);
        // Méthode d'appel à la BDD avec ORM
        $drink = Boisson::where('code',[$id])->get();

        return view('boissons.detail-boissons', ['details' => $drink]);
        
    }





// Fonction de Thomas
//   function listDrink()
//   {
//        // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
//       // return view('machineACafe', compact('drinkChoice'));

//     $drinkChoice = DB::select('select nomBoisson, codeBoisson from boisson');
//       return view('machineACafe', ['boissons' => $drinkChoice]);
//   }

//   function showDrink($code)
//   {
//     $drink = DB::select('select nomBoisson, prix from boisson where codeBoisson = ?',[$code]);
//     return view('boisson.affichageBoisson',['detailBoisson' => $drink]);
//   }
}

?>
