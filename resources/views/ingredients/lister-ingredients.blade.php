@extends('template.template')      
@section('titre')
    Liste des ingredients
@endsection

@section('content')
<div class = "container">
    <div class="tableauIngredients">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom</b></br><a href="{{ route('triAZ-I')}}"><button type="button" class="btn btn-light">A-Z</button></a>
                    <a href="{{ route('triZA-I')}}"><button type="button" class="btn btn-light">Z-A</button></a>
                </td>
                <td><b>Stock</b></br><a href="{{ route('triStockCroissant-I')}}"><button type="button" class="btn btn-light">UP</button></a>
                    <a href="{{ route('triStockDecroissant-I')}}"><button type="button" class="btn btn-light">DOWN</button></a>
                </td>
                <td colspan=2><b>Gestion</b></td>
            </tr>
            <tr>  
                @foreach($ingredients as $ingredient)
                <td>{{$ingredient->nom}}</td>
                <td>{{$ingredient->stock}}</td>
                <td><a href="{{ route('formModifIngredient',[$ingredient->id])}}"><button type="button" class="btn btn-warning">Modifier</button></a></td>
                <td><a href="{{ route('formDeleteIngredient',[$ingredient->id])}}"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
            </tr>
            @endforeach
        </table>        
        <a href="/ingredients/ajouter-ingredient"><button type="button" class="btn btn-primary">Ajouter un ingredient</button></a>
        <a href="{{ route('listeBoissons')}}"><button type="button" class="btn btn-info">Retour à la liste des boissons</button></a>
    </div>
</div>    
@endsection