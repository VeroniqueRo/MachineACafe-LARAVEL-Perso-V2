@extends('template.template') 
@section('titre')
    Liste des boissons
@endsection

@section('content')
<div class = "container">
    <div class="tableauBoissons">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom</b></br><a href="{{ route('triAZ')}}"><button type="button" class="btn btn-light">A-Z</button></a>
                    <a href="{{ route('triZA')}}"><button type="button" class="btn btn-light">Z-A</button></a>
                </td>
                <td><b>Prix</b></br><a href="{{ route('triPrixCroissant')}}"><button type="button" class="btn btn-light">UP</button></a>
                    <a href="{{ route('triPrixDecroissant')}}"><button type="button" class="btn btn-light">DOWN</button></a>
                </td>
                <td><b>Fiche détaillée</b></td>
                <td colspan=2><b>Gestion</b></td>
            </tr>
            <tr>  
                @foreach($boissons as $boisson)
                <td>{{$boisson->nom}}</td>
                <td>{{$boisson->prix}} cts</td>
                <td><a href="/boissons/{{$boisson->id}}">Détail</a></td>
                <td><a href="{{ route('formModifBoisson',[$boisson->id])}}"><button type="button" class="btn btn-warning">Modifier</button></a></td>
                <td><a href="{{ route('formDeleteBoisson',[$boisson->id])}}"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>
            @endforeach
        </table>        
        <a href="/boissons/ajouter-boisson"><button type="button" class="btn btn-success">Ajouter une boisson</button></a>
    </div>
</div>    
@endsection