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

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES DE L'INTERFACE CLIENT
/////////////////////////////////////////////////////////////////////////////////////

        Route::get('/', 'IndexController@bienvenue');

        Route::get('/machineACafe','MachineACafeController@index')->name('MachineACafe');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES BOISSONS
/////////////////////////////////////////////////////////////////////////////////////

    // Routes pour l'affichage du tableau avec la liste des boissons

        Route::get('/Liste_boissons','BoissonController@index')->name('listeBoissons');

    // Routes pour les tris du tableau des boissons

        Route::get('/boissons-AZ','BoissonController@triNomBoissonsAZ')->name('triAZ');

        Route::get('/boissons-ZA','BoissonController@triNomBoissonsZA')->name('triZA');

        Route::get('/prix-UP','BoissonController@triPrixBoissonsCroissant')->name('triPrixCroissant');

        Route::get('/prix-DOWN','BoissonController@triPrixBoissonsDecroissant')->name('triPrixDecroissant');

    // Routes du formulaire d'ajout d'une boisson

        Route::get('/boissons/ajouter-boisson','BoissonController@create')->name('formAjoutBoisson');

        Route::post('/boissons/liste_des_boissons','BoissonController@store')->name('ajoutBoisson');

    // Routes du formulaire de modification d'une boisson

        Route::get('/modif_boisson/{id}','BoissonController@edit')->name('formModifBoisson');

        Route::put('/Liste_boissons/{id}','BoissonController@update')->name('modifBoisson');

    // Routes pour supprimer une boisson

        Route::get('/supprime_boisson/{id}','BoissonController@supprime')->name('formDeleteBoisson');

        Route::delete('/Liste_boissons/{id}','BoissonController@destroy')->name('deleteBoisson');


    // Routes vers la fiche d'une boisson

        Route::get('/boissons/{id}','BoissonController@detailsBoisson');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES INGREDIENTS
/////////////////////////////////////////////////////////////////////////////////////

    // Routes pour l'affichage du tableau avec la liste des ingredients

        Route::get('/Liste_ingredients','IngredientController@index')->name('listeIngredients');
    
    // Routes pour les tris du tableau des ingredients

        Route::get('/ingredients-AZ','IngredientController@triNomIngredientsAZ')->name('triAZ-I');

        Route::get('/ingredients-ZA','IngredientController@triNomIngredientsZA')->name('triZA-I');

        Route::get('/stock-UP','IngredientController@triPrixIngredientsCroissant')->name('triStockCroissant-I');

        Route::get('/stock-DOWN','IngredientController@triPrixIngredientsDecroissant')->name('triStockDecroissant-I');

    // Routes du formulaire d'ajout d'un ingredient

        Route::get('/ingredients/ajouter-ingredient','IngredientController@create')->name('formAjoutIngredient');

        Route::post('/ingredients/liste_des_ingredients','IngredientController@store')->name('ajoutIngredients');

    // Routes du formulaire de modification d'un ingredient

        Route::get('/modif_ingredient/{id}','IngredientController@edit')->name('formModifIngredient');

        Route::put('/Liste_ingredients/{id}','IngredientController@update')->name('modifIngredient');

    // Routes pour supprimer un ingredient

        Route::get('/supprime_ingredient/{id}','IngredientController@supprime')->name('formDeleteIngredient');

        Route::delete('/Liste_ingredients/{id}','IngredientController@destroy')->name('deleteIngredient');

    // Routes vers la fiche d'un ingredient

        Route::get('/ingredients/{id}','IngredientController@detailsIngredient');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES RECETTES
/////////////////////////////////////////////////////////////////////////////////////

        Route::get('/Liste_recettes','RecetteController@index')->name('listeRecettes');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES VENTES
/////////////////////////////////////////////////////////////////////////////////////

        Route::get('/Liste_ventes','VenteController@index')->name('listeVentes');

        // Route pour l'ajout d'une vente

        Route::post('/machineACafe','VenteController@store')->name('ajoutVente');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DE LA MONNAIE
/////////////////////////////////////////////////////////////////////////////////////

        Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

    
?>
