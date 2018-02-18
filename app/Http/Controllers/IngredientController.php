<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;// lien vers la classe Ingrédient

class IngredientController extends Controller
{

	// Méthode pour lister les ingredients avec le Model
	public function index() {
					
		$ingredients = Ingredient::all();// Appelle la classe pour ajouter toutes les données
		return view('ingredients.lister-ingredients', ['ingredients'=>$ingredients]);

	}

	// Méthode pour lister les ingredients par ordre alphabéthique avec le Model
	function triNomIngredientsAZ() {
        
		$ingredients = Ingredient::orderBy('nom')->get();// Ordonne par ordre alpha les noms de ingredients
		return view('ingredients.lister-ingredients', ['ingredients'=>$ingredients]);

	}

	// Méthode pour lister les ingredients par ordre alphabéthique avec le Model
	function triNomIngredientsZA() {
			
		$ingredients = Ingredient::orderBy('nom','DESC')->get();// Ordonne par ordre alpha inverse
		return view('ingredients.lister-ingredients', ['ingredients'=>$ingredients]);

	}  

	// Méthode pour lister les ingredients par ordre de prix avec le Model
	function triPrixIngredientsCroissant() {
			
		$ingredients = Ingredient::orderBy('stock','ASC')->get();// Ordonne par ordre croissant de prix
		return view('ingredients.lister-ingredients', ['ingredients'=>$ingredients]);

	}

	// Méthode pour lister les ingredients par ordre de prix avec le Model
	function triPrixIngredientsDecroissant() {
			
		$ingredients = Ingredient::orderBy('stock','DESC')->get();// Ordonne par ordre décroissant de prix
		return view('ingredients.lister-ingredients', ['ingredients'=>$ingredients]);

	}

	// // Méthode pour afficher le détail d'un ingredient en suivant un lien avec le Model
	// function detailsIngredients($id) {
			
// 		$ingredients = Ingredient::where('id',$id)->get();
// 		return view('ingredients.detail-ingredient', ['ingredient'=>$ingredients[0]]);

	// }

	// Fonctions d'ajout d'un ingredient
	public function create() {

			return view('ingredients.ajout-ingredient');
	}

	public function store(Request $request)

	{
			$newIngredient = new Ingredient();
			$newIngredient->nom = $request->nomingredient;
			$newIngredient->stock = $request->stockingredient;// l'attribut de l'objet Ingredient prend la valeur entrée dans le formulaire
			
			$newIngredient->save();
			return redirect('/Liste_ingredients');

	}

	// Fonctions de modification d'un ingredient
	public function edit($id) {

			$ingredient = Ingredient::where('id',$id)->get();
			return view('ingredients.modifier-ingredient', ['ingredientAModifier'=>$ingredient[0]]);
	}

	public function update(Request $request, $id)

	{
			$modifIngredient = Ingredient::find($id);

			$modifIngredient->nom = $request->newnom;
			$modifIngredient->stock = $request->newstock;
			
			$modifIngredient->save();

			return redirect('/Liste_ingredients');

	}

	// Fonctions de suppression d'un ingredient
	public function supprime($id) {

        $ingredient = Ingredient::where('id',$id)->get();
        return view('ingredients.supprimer-ingredient', ['ingredientASupprimer'=>$ingredient[0]]);
    }

	public function destroy($id)

	{
			$deleteIngredient = Ingredient::find($id);
			$deleteIngredient->delete();

			return redirect('/Liste_ingredients');

	}
}

?>
