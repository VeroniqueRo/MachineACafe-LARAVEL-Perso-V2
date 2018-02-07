<?php

namespace App\Http\Controllers;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 public function listeVente() {
  
    $venteTab = array (
      array (
        "N°" => "1",
        "Boisson commandée" => "Café",  
        "Date" => "2018/01/04",
        "Heure" => "08:17:57",
        "Nb de sucres" => "0",
     
      ),
      array (
        "N°" => "2",
        "Boisson commandée" => "Thé",  
        "Date" => "2018/01/04",
        "Heure" => "09:17:57",
        "Nb de sucres" => "1",
       
      ),
      array (
        "N°" => "3",
        "Boisson commandée" => "Expresso",  
        "Date" => "2018/01/14",
        "Heure" => "18:17:02",
        "Nb de sucres" => "5",
        
      ),
      array (
        "N°" => "4",
        "Boisson commandée" => "Expresso",  
        "Date" => "2018/01/15",
        "Heure" => "08:17:02",
        "Nb de sucres" => "2",
    
      ),
      array (
        "N°" => "5",
        "Boisson commandée" => "Thé",  
        "Date" => "2018/01/16",
        "Heure" => "10:17:57",
        "Nb de sucres" => "1",
   
      ),
    );
    
    return view("ventes",["RetourTab" => $venteTab]);
  }
}
?>

