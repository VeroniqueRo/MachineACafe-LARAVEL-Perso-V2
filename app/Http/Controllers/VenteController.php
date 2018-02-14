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

    // Méthode pour lister les ventes par ordre de numero de vente
    function triVentesCroissant() {
        
        $ventes = Vente::orderBy('id','ASC')->get();// Ordonne par ordre croissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    function triVentesDecroissant() {
        
        $ventes = Vente::orderBy('id','DESC')->get();// Ordonne par ordre décroissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    // Méthode pour lister les ventes par nb de sucres
    function triNbSucresVentesCroissant() {
        
        $ventes = Vente::orderBy('nbSucres','ASC')->get();// Ordonne par ordre croissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    function triNbSucresVentesDecroissant() {
        
        $ventes = Vente::orderBy('nbSucres','DESC')->get();// Ordonne par ordre décroissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    // Méthode pour lister les ventes par dates
    function triDateVentesCroissant() {
        
        $ventes = Vente::orderBy('created_at','ASC')->get();// Ordonne par ordre croissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

    function triDateVentesDecroissant() {
        
        $ventes = Vente::orderBy('created_at','DESC')->get();// Ordonne par ordre décroissant
        return view('ventes.lister-ventes', ['ventes'=>$ventes]);
    
    }

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
        return redirect('/machineACafe');

    }

    

    

    

}