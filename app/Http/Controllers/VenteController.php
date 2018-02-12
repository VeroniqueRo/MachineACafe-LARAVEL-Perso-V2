<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vente;// lien vers le modèle de la classe vente
use App\Boisson;// lien vers le modèle de la classe boisson

class VenteController extends Controller
{
    // Méthode pour lister les ventes
    public function index() {
        
        $ventes = Vente::all();// Appelle la classe pour ajouter toutes les données de la table vente
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    // // Méthode pour lister les ventes par ordre alphabéthique
    // function triNomVentesAZ() {
        
    //     $ventes = Vente::orderBy('ingredient')->get();// Ordonne par ordre alpha les ingredients de ventes

    //     return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    // }

    // // Méthode pour lister les ventes par ordre alphabéthique
    // function triNomVentesZA() {
        
    //     $ventes = Vente::orderBy('ingredient','DESC')->get();// Ordonne par ordre alpha inverse

    //     return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    // }  

    // // Méthode pour lister les ventes par ordre de dose
    // function triDoseVentesCroissant() {
        
    //     $ventes = Vente::orderBy('dose','ASC')->get();// Ordonne par ordre croissant de dose
    //     return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    // }

    // // Méthode pour lister les ventes par ordre de dose
    // function triDoseVentesDecroissant() {
        
    //     $ventes = Vente::orderBy('dose','DESC')->get();// Ordonne par ordre décroissant de dose
    //     return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    // }

    // // Méthode pour afficher le détail des ventes en suivant un lien
    // function detailsVente($id) {
        
    //     $ventes = Vente::where('id',$id)->get();

    //     return view('ventes.detail-vente', ['vente'=>$ventes[0]]);
    
    // }

    // Fonctions d'ajout d'une vente
   
    public function store(Request $request)

    {
        $newVente = new Vente();
        
        $newVente->boisson_id = request('inputBoisson');
        $newVente->nbSucres = request('inputSucre');
        
        $newVente->save();
        return redirect('/Liste_ventes');

    }

    

    

    

}