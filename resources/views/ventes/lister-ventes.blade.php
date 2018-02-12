@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection

@section('content')
    <div class = "container">
        <div class="tableauVentes">
            <table class = "table table-hover table-bordered">  
                <tr class="active">
                    <td>Numéro de vente</td>
                    <td>Nom de la boisson</td>
                    <td>Nombre de sucres</td>  
                    <td>Prix</td>
                    <td>Date de la vente</td>
                </tr>
                @foreach($ventes as $vente)
                <td>{{$vente->id}}</td>
                <td>{{$vente->boisson->nom}}</td>
                <td>{{$vente->nbSucres}}</td>
                <td>{{$vente->boisson->prix}} cts</td>
                <td>{{$vente->created_at}}</td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>    
@endsection
