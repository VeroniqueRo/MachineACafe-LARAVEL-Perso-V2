<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;// lien vers la classe Boisson
use App\Ingredient;

class BoissonController extends Controller
{
    // Méthode pour lister les boissons
    public function index() {

        $boissons = Boisson::all();// Appelle la classe pour ajouter toutes les données
        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour lister les boissons par ordre alphabéthique
    function triNomBoissonsAZ() {
        
        $boissons = Boisson::orderBy('nom')->get();// Ordonne par ordre alpha les noms de boissons

        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour lister les boissons par ordre alphabéthique
    function triNomBoissonsZA() {
        
        $boissons = Boisson::orderBy('nom','DESC')->get();// Ordonne par ordre alpha inverse

        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }  

    // Méthode pour lister les boissons par ordre de prix
    function triPrixBoissonsCroissant() {
        
        $boissons = Boisson::orderBy('prix','ASC')->get();// Ordonne par ordre croissant de prix
        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour lister les boissons par ordre de prix
    function triPrixBoissonsDecroissant() {
        
        $boissons = Boisson::orderBy('prix','DESC')->get();// Ordonne par ordre décroissant de prix
        return view('boissons.lister-boissons', ['boissons'=>$boissons]);
    
    }

    // Méthode pour afficher le détail des boissons en suivant un lien
    function detailsBoisson($id) {

        $boisson = Boisson::find($id);
        $ingredients = $boisson->ingredients()->get();
        // dump($ingredients);
        $allIngredients = Ingredient::all();

        return view('boissons.detail-boisson', ['boisson'=>$boisson, 'ingredients'=> $ingredients, 'listeIngredients'=>$allIngredients]);
    
    }

    // Fonctions d'ajout d'une boisson
    public function create() {

        return view('boissons.ajout-boisson');
    }

    public function store(Request $request)

    {
        $newBoisson = new Boisson();
        $newBoisson->code = $request->codeboisson; // $request->input('codeboisson');
        $newBoisson->nom = $request->nomboisson;
        $newBoisson->prix = $request->prixboisson;// l'attribut de l'objet Boisson prend la valeur entrée dans le formulaire
        
        $newBoisson->save();
        return redirect('/Liste_boissons');

    }

    // Fonctions de modification d'une boisson
    public function edit($id) {

        $boisson = Boisson::where('id',$id)->get();
        return view('boissons.modifier-boisson', ['boissonAModifier'=>$boisson[0]]);
    }

    public function update($id)

    {
        $modifBoisson = Boisson::find($id);

        $modifBoisson->code = request('newcode');
        $modifBoisson->nom = request('newnom');
        $modifBoisson->prix = request('newprix');
        
        $modifBoisson->save();

        return redirect('/Liste_boissons');

    }

    // Fonctions de supprimer d'une boisson
    public function supprime($id) {

        $boisson = Boisson::where('id',$id)->get();
        return view('boissons.supprimer-boisson', ['boissonASupprimer'=>$boisson[0]]);
    }

    public function destroy($id)

    {
        $deleteBoisson = Boisson::find($id);
        $deleteBoisson->delete();

        return redirect('/Liste_boissons');

    }

}
?>
