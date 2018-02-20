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
// ROUTES DE L'INTERFACE DE GESTION (BACK OFFICE)
/////////////////////////////////////////////////////////////////////////////////////

        Auth::routes();

        Route::get('/home', 'HomeController@index')->name('home');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES BOISSONS
/////////////////////////////////////////////////////////////////////////////////////

    // Routes pour l'affichage du tableau avec la liste des boissons

        Route::get('/Liste_boissons','BoissonController@index')->name('listeBoissons')->middleware('auth');

    // Routes pour les tris du tableau des boissons

        Route::get('/boissons-AZ','BoissonController@triNomBoissonsAZ')->name('triAZ')->middleware('auth');

        Route::get('/boissons-ZA','BoissonController@triNomBoissonsZA')->name('triZA')->middleware('auth');

        Route::get('/prix-UP','BoissonController@triPrixBoissonsCroissant')->name('triPrixCroissant')->middleware('auth');

        Route::get('/prix-DOWN','BoissonController@triPrixBoissonsDecroissant')->name('triPrixDecroissant')->middleware('auth');

    // Routes du formulaire d'ajout d'une boisson

        Route::get('/boissons/ajouter-boisson','BoissonController@create')->name('formAjoutBoisson')->middleware('auth');

        Route::post('/boissons/liste_des_boissons','BoissonController@store')->name('ajoutBoisson')->middleware('auth');

    // Routes du formulaire de modification d'une boisson

        Route::get('/modif_boisson/{id}','BoissonController@edit')->name('formModifBoisson')->middleware('auth');

        Route::put('/Liste_boissons/{id}','BoissonController@update')->name('modifBoisson')->middleware('auth');

    // Routes pour supprimer une boisson

        Route::get('/supprime_boisson/{id}','BoissonController@supprime')->name('formDeleteBoisson')->middleware('auth');

        Route::delete('/Liste_boissons/{id}','BoissonController@destroy')->name('deleteBoisson')->middleware('auth');


    // Routes vers la fiche d'une boisson

        Route::get('/boissons/{id}','BoissonController@detailsBoisson')->name('ficheBoisson')->middleware('auth');       

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES INGREDIENTS
/////////////////////////////////////////////////////////////////////////////////////

    // Routes pour l'affichage du tableau avec la liste des ingredients

        Route::get('/Liste_ingredients','IngredientController@index')->name('listeIngredients')->middleware('auth');
    
    // Routes pour les tris du tableau des ingredients

        Route::get('/ingredients-AZ','IngredientController@triNomIngredientsAZ')->name('triAZ-I')->middleware('auth');

        Route::get('/ingredients-ZA','IngredientController@triNomIngredientsZA')->name('triZA-I')->middleware('auth');

        Route::get('/stock-UP','IngredientController@triPrixIngredientsCroissant')->name('triStockCroissant-I')->middleware('auth');

        Route::get('/stock-DOWN','IngredientController@triPrixIngredientsDecroissant')->name('triStockDecroissant-I')->middleware('auth');

    // Routes du formulaire d'ajout d'un ingredient

        Route::get('/ingredients/ajouter-ingredient','IngredientController@create')->name('formAjoutIngredient')->middleware('auth');

        Route::post('/ingredients/liste_des_ingredients','IngredientController@store')->name('ajoutIngredients')->middleware('auth');

    // Routes du formulaire de modification d'un ingredient

        Route::get('/modif_ingredient/{id}','IngredientController@edit')->name('formModifIngredient')->middleware('auth');

        Route::put('/Liste_ingredients/{id}','IngredientController@update')->name('modifIngredient')->middleware('auth');

    // Routes pour supprimer un ingredient

        Route::get('/supprime_ingredient/{id}','IngredientController@supprime')->name('formDeleteIngredient')->middleware('auth');

        Route::delete('/Liste_ingredients/{id}','IngredientController@destroy')->name('deleteIngredient')->middleware('auth');

    // Routes vers la fiche d'un ingredient

        Route::get('/ingredients/{id}','IngredientController@detailsIngredient')->middleware('auth');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES RECETTES
/////////////////////////////////////////////////////////////////////////////////////

        // Routes pour afficher toutes les recettes sur une page distincte de la boisson        

        Route::get('/liste_recettes','RecetteController@index')->name('listeRecettes')->middleware('auth');

        // Routes du formulaire d'ajout d'une recette

        Route::post('/recettes/{id}','RecetteController@store')->name('ajoutRecette')->middleware('auth');

        // Routes du formulaire de modification d'une recette

        Route::get('/modif_recette/{id_boisson}/{id_ingredient}','RecetteController@edit')->name('formModifRecette')->middleware('auth');

        Route::put('/liste_recettes/{id_boisson}/{id_ingredient}','RecetteController@update')->name('modifRecette')->middleware('auth');

        // Routes du formulaire de suppression d'une recette

        Route::delete('/supprime_recettes/{id_boisson}/{id_ingredient}','RecetteController@destroy')->name('supprimeRecette')->middleware('auth');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DES VENTES
/////////////////////////////////////////////////////////////////////////////////////

        // Route pour l'ajout d'une vente

        Route::post('/machineACafe','VenteController@store')->name('ajoutVente');

        // Route pour lister les ventes

        Route::get('/Liste_ventes','VenteController@index')->name('listeVentes')->middleware('auth');

        // Routes pour les tris du tableau des ventes

        Route::get('/ventes-UP','VenteController@triVentesCroissant')->name('triUP-V')->middleware('auth');

        Route::get('/ventes-DOWN','VenteController@triVentesDecroissant')->name('triDOWN-V')->middleware('auth');

        Route::get('/trisucres-UP','VenteController@triNbSucresVentesCroissant')->name('triSucreCroissant-V')->middleware('auth');

        Route::get('/trisucres-DOWN','VenteController@triNbSucresVentesDecroissant')->name('triSucreDecroissant-V')->middleware('auth');

        Route::get('/date-UP','VenteController@triDateVentesCroissant')->name('triDateCroissant-V')->middleware('auth');

        Route::get('/date-DOWN','VenteController@triDateVentesDecroissant')->name('triDateDecroissant-V')->middleware('auth');

/////////////////////////////////////////////////////////////////////////////////////
// ROUTES POUR LA GESTION DE LA MONNAIE
/////////////////////////////////////////////////////////////////////////////////////

        Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie')->middleware('auth');

    
?>


