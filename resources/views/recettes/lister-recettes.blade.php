@extends('template.template')
      
@section('titre')
	Liste des recettes 
@endsection

@section('content')
<div class = "container">
    <div class="tableauRecettes">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom de la boisson</b></br><button type="button" class="btn btn-light">A-Z</button>
                    <button type="button" class="btn btn-light">Z-A</button>
                </td>
                <td><b>Ingrédient</b></br><button type="button" class="btn btn-light">UP</button>
                    <button type="button" class="btn btn-light">DOWN</button>
                </td>
                <td><b>dose</b></td>
            </tr>
            <tr>  
                @foreach ($boissons as $boisson)
                @foreach($boisson->ingredients as $ingredient)
                <tr>
                    <td>{{$boisson->nom}}</td>
                    <td>{{$ingredient->ingredient_id}}{{$ingredient->nom}}</td>
                    <td>{{$ingredient->pivot->nbDose}}</td>
                </tr> 
                @endforeach 
            </tr>
            @endforeach
        </table>        
        <a href="/recettes/ajouter-recette"><button type="button" class="btn btn-success">Ajouter une recette</button></a>
        <td><button type="button" class="btn btn-warning">Modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">Effacer</button></a></td>
    </div>
</div>    
@endsection





