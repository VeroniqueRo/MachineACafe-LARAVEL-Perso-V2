<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;// lien vers la classe boisson
use App\Ingredient;

class RecetteController extends Controller
{
    // Méthode pour lister les recettes dans une page recettes indépendante
    public function index() {
        
        //Récupèrer les ingrédients d'une boisson
        $boissons= Boisson::all()->load('ingredients');
        //Retourner la vue avec les données 
        return view('recettes.lister-recettes', ['boissons'=> $boissons]);
    
    }

    // // Méthode pour lister les recettes par ordre alphabéthique
    // function triNomRecettesAZ() {
        
    //     $recettes = Recette::orderBy('ingredient')->get();// Ordonne par ordre alpha les ingredients de recettes

    //     return view('recettes.lister-recettes', ['recettes'=>$recettes]);
    
    // }

    // // Méthode pour lister les recettes par ordre alphabéthique
    // function triNomRecettesZA() {
        
    //     $recettes = Recette::orderBy('ingredient','DESC')->get();// Ordonne par ordre alpha inverse

    //     return view('recettes.lister-recettes', ['recettes'=>$recettes]);
    
    // }  

    // // Méthode pour lister les recettes par ordre de dose
    // function triDoseRecettesCroissant() {
        
    //     $recettes = Recette::orderBy('dose','ASC')->get();// Ordonne par ordre croissant de dose
    //     return view('recettes.lister-recettes', ['recettes'=>$recettes]);
    
    // }

    // // Méthode pour lister les recettes par ordre de dose
    // function triDoseRecettesDecroissant() {
        
    //     $recettes = Recette::orderBy('dose','DESC')->get();// Ordonne par ordre décroissant de dose
    //     return view('recettes.lister-recettes', ['recettes'=>$recettes]);
    
    // }

    // Fonctions d'ajout d'une recette
    public function create() {

        return view('boissons.detail-boisson');
    }

    public function store(Request $request, $id)

    {
        $boisson = Boisson::find($id);
        $ingredient = Ingredient::find($request->ingredient);
        $boisson->ingredients()->attach($ingredient, ['nbDose' => $request->dose]);

        return redirect()->back();// Retour à la page précédement utilisée

    }

    // Fonctions de modification d'une recette
    public function edit($id_boisson, $id_ingredient) {

        $boisson = Boisson::find($id_boisson);
        // $ingredient = Ingredient::find($id_ingredient);
        $recette = $boisson->ingredients->find($id_ingredient);
        // return view('recettes.modifier-recette', ['boisson'=>$boisson, 'ingredient'=>$ingredient ]);
        return view('recettes.modifier-recette', ['boisson'=>$boisson], ['recette'=>$recette]);
    }

    public function update(Request $request, $id_boisson,$id_ingredient)

    {
        $boisson = Boisson::find($id_boisson);
        $recette = $boisson->ingredients->find($id_ingredient);
        $recette->pivot->update(["nbDose"=>$request->input("nbDose")]);

        return redirect('/boissons/'.$boisson->id);

    }

    public function destroy($id_boisson, $id_ingredient)

    {
        $boisson = Boisson::find($id_boisson);
        $ingredient = Ingredient::find($id_ingredient);
                
        $boisson->ingredients()->detach($ingredient);

        return redirect()->back();

    }

}
?>

    
 

