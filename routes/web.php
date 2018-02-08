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

// Routes d'avant

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES BOISSONS
/////////////////////////////////////////////////////////////////////////////////////

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

    Route::get('/modif_boissons/{id}','BoissonController@edit')->name('formModifBoissons');

    Route::post('/Liste_boissons/{id}','BoissonController@update')->name('modifBoissons');

    // Routes pour supprimer une boisson

    Route::get('/Liste_boissons/{id}','BoissonController@destroy')->name('deleteBoissons');

    // Routes vers la fiche d'une boisson

    Route::get('/boissons/{id}','BoissonController@detailsBoissons');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES INGREDIENTS
/////////////////////////////////////////////////////////////////////////////////////

    // Route::get('/ingredients','IngredientController@listIngredients');// Version sans Model

    Route::get('/Liste_ingredients','IngredientController@afficheIngredients')->name('listeIngredients');
    
    // Routes pour les tris du tableau des ingredients

    Route::get('/ingredients-AZ','IngredientController@triNomIngredientsAZ')->name('triAZ-I');

    Route::get('/ingredients-ZA','IngredientController@triNomIngredientsZA')->name('triZA-I');

    Route::get('/stock-UP','IngredientController@triPrixIngredientsCroissant')->name('triStockCroissant-I');

    Route::get('/stock-DOWN','IngredientController@triPrixIngredientsDecroissant')->name('triStockDecroissant-I');

    // Routes du formulaire d'ajout d'un ingredient

    Route::get('/ingredients/ajouter-ingredient','IngredientController@create')->name('formAjoutIngredient');

    Route::post('/ingredients/liste_des_ingredients','IngredientController@store')->name('ajoutIngredients');

    // Routes du formulaire de modification d'un ingredient

    Route::get('/modif_ingredients/{id}','IngredientController@edit')->name('formModifIngredients');

    Route::post('/Liste_ingredients/{id}','IngredientController@update')->name('modifIngredients');

    // Routes pour supprimer un ingredient

    Route::get('/Liste_ingredients/{id}','IngredientController@destroy')->name('deleteIngredients');

    // Routes vers la fiche d'un ingredient

    Route::get('/ingredients/{id}','IngredientController@detailsIngredients');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES RECETTES
/////////////////////////////////////////////////////////////////////////////////////

    Route::get('/recettes','RecetteController@listRecettes')->name('listeRecettes');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES VENTES
/////////////////////////////////////////////////////////////////////////////////////

    Route::get('/ventes','VenteController@listeVente')->name('listeVentes');

    
?>
