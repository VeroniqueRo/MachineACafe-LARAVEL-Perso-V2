<?php
namespace App\Http\Controllers;

class IngredientController extends Controller
{
  function listIngredients() {
  	$ingredients = array(
  		'Café' => 100,
  		'Eau'=> 100,
  		'Thé'  => 100,
  		'Lait' => 100,
      'Sucre' => 100
			);
			
     return view('ingredients', compact('ingredients'));
 }
}
?>
