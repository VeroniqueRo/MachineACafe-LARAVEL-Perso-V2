<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;// lien vers la classe boisson
use App\Ingredient;// lien vers la classe boisson

class RecetteController extends Controller
{
    // Méthode pour lister les recettes
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

    // // Méthode pour afficher le détail des recettes en suivant un lien
    // function detailsRecette($id) {
        
    //     $recettes = Recette::where('id',$id)->get();

    //     return view('recettes.detail-recette', ['recette'=>$recettes[0]]);
    
    // }

    // // Fonctions d'ajout d'une recette
    // public function create() {

    //     return view('recettes.ajout-recette');
    // }

    // public function store(Request $request)

    // {
    //     $newRecette = new Recette();
    //     $newRecette->nom = $request->nomrecette; // $request->input('coderecette');
    //     $newRecette->ingredient = $request->ingredientrecette;
    //     $newRecette->dose = $request->doserecette;// l'attribut de l'objet recette prend la valeur entrée dans le formulaire
        
    //     $newRecette->save();
    //     return redirect('/Liste_recettes');

    // }

    // // Fonctions de modification d'une recette
    // public function edit($id) {

    //     $recette = Recette::where('id',$id)->get();
    //     return view('recettes.modifier-recette', ['recetteAModifier'=>$recette[0]]);
    // }

    // public function update($id)

    // {
    //     $modifRecette = Recette::find($id);

    //     $modifRecette->code = request('newcode');
    //     $modifRecette->ingredient = request('newingredient');
    //     $modifRecette->dose = request('newdose');
        
    //     $modifRecette->save();

    //     return redirect('/Liste_recettes');

    // }

    // // Fonctions de supprimer d'une recette
    // public function supprime($id) {

    //     $recette = Recette::where('id',$id)->get();
    //     return view('recettes.supprimer-recette', ['recetteASupprimer'=>$recette[0]]);
    // }

    // public function destroy($id)

    // {
    //     $deleteRecette = Recette::find($id);
    //     $deleteRecette->delete();

    //     return redirect('/Liste_recettes');

    // }

}
?>

    
 

