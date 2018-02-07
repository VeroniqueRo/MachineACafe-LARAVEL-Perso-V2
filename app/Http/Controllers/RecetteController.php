<?php
namespace App\Http\Controllers;

class RecetteController extends Controller
{
  	function listRecettes() {
  	$recette = array(
				'Expresso'	=> array(
								'café'=>1,
								'eau'=>1),
				'Café_long'	=>array
								(
								'café'=>2,
								'eau'=>2
								),
				'Thé'		=>array
								(
								'thé'=>1,
								'eau'=>2
								),
				'Café au lait'=>array
								(
								'café'=>1,
								'eau'=>2,
								'lait'=>2
								),
  	            );

   
     return view('recettes',compact('recette'));
	}
}
?>

    
 

