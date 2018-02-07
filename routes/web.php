<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');


// Ingrédients
Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

// Boissons

Route::get('/Liste_boissons','BoissonController@afficheBoissons')->name('listeBoissons');

    // Routes pour les tris du tableau des boissons

Route::get('/boissons-AZ','BoissonController@triNomBoissonsAZ')->name('triAZ');

Route::get('/boissons-ZA','BoissonController@triNomBoissonsZA')->name('triZA');

Route::get('/prix-UP','BoissonController@triPrixBoissonsCroissant')->name('triPrixCroissant');

Route::get('/prix-DOWN','BoissonController@triPrixBoissonsDecroissant')->name('triPrixDecroissant');

    // Routes du formulaire d'ajout d'une boisson

Route::get('/boissons/ajouter-boisson','BoissonController@create')->name('formAjoutBoisson');

Route::post('/boissons/liste_des_boissons','BoissonController@store')->name('ajoutBoissons');

    // Routes du formulaire de modification d'une boisson

Route::get('/modif/{id}','BoissonController@edit')->name('formModifBoissons');

Route::post('/Liste_boissons/{id}','BoissonController@update')->name('modifBoissons');

    // Routes vers la fiche d'une boisson

Route::get('/boissons/{id}','BoissonController@detailsBoissons');

?>
