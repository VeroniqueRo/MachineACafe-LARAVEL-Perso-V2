@extends('template.template')

@section('content')
<div id="machine" class="container">
  <form id="formulaire" action="{{route('ajoutVente')}}" method="post">
  {{ csrf_field() }}
    <div id="ecran">
      <div id="afficheur"></div>

        <!-- Selection de la boisson -->                 
        <img id="btnCafe" class="boisson" src="../img/btn_espresso_0.png">
        <img id="btnChocolat" class="boisson" src="../img/btn_chocolat_0.png">
        <img id="btnCappuccino" class="boisson" src="../img/btn_cappuccino_0.png">
        <img id="btnThe" class="boisson" src="../img/btn_the_0.png">
            
        <!-- Choix du nombre de sucres -->
        <img id="imgSucre" src="../img/sucreDeco.png"> 
        <img id="btnMoinsSucre" src="../img/bouton_moins_0.png">               
        <img id="btnPlusSucre" src="../img/bouton_plus_0.png">
        
        <img id="sucres" src="../img/Sucre_Etat_0.png">

    </div>
      <div>
        <img id="fente" src="../img/Fente_Monnayeur.png">
        <img type="submit" id="btnPay" src="../img/pay_off.png">
        <a href="{{ route('MachineACafe')}}"><img id="btnCancel" src="../img/cancel_off.png"></a>
        <img id="btnMaintenance" src="../img/Maintenance_off.png">
        <img id="renduMonnaie" src="../img/Rendu_monnaie.png">
      </div>  
    
    <div id="gobeletConstruit">
      <div class="gobeletElement" id="gobeletFond"></div>
      <div class="gobeletElement" id="touillette"></div>
      <div class="gobeletElement" id="boisson"></div>
      <div class="gobeletElement" id="sucre"></div>
      <div class="gobeletElement" id="gobeletFace"></div>
    </div>
    
      <div id="pieces">
          <img id="btn5cts" src="../img/5_cents.png">
          <img id="btn10cts" src="../img/10_cents.png">
          <img id="btn20cts" src="../img/20_cents.png">
          <img id="btn50cts" src="../img/50_cents.png">
          <img id="btn1euro" src="../img/1_euros.png">
          <img id="btn2euro" src="../img/2_euros.png">
      </div>
    </div>
    <div>
    <!-- Input de selection de la boisson rempli par les fonctions jQuery-->
    <input hidden id="ChoixBoisson" name="inputBoisson" value="0" >
    <!-- Input de selection du nombre de sucres -->
    <input hidden id="ChoixSucre" name="inputSucre" value="0">
    </div>
  </form>
</div>
@endsection
