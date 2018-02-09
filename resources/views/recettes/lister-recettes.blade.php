@extends('template.template')
      
@section('titre')
	Liste des recettes 
@endsection

@section('content')
<div class = "container">
    <div class="tableauRecettes">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
                <td><b>Nom de la boisson</b></br><button type="button" class="btn btn-light">A-Z</button></a>
                    <button type="button" class="btn btn-light">Z-A</button></a>
                </td>
                <td><b>Ingrédient</b></br><button type="button" class="btn btn-light">UP</button></a>
                    <button type="button" class="btn btn-light">DOWN</button></a>
                </td>
                <td><b>dose</b></td>
                <td colspan=2><b>Gestion</b></td>
            </tr>
            {{--  <tr>  
                @foreach($recettes as $recette)
				<td>{{$recette->nomBoisson}}</td>
				<td>{{$recette->nomIngredient}}</td>
                <td>{{$recette->dose}}</td>
                <td><button type="button" class="btn btn-warning">Modifier</button></a></td>
                <td><button type="button" class="btn btn-danger">Effacer</button></a></td>
            </tr>
            @endforeach  --}}
        </table>        
        <a href="/recettes/ajouter-recette"><button type="button" class="btn btn-success">Ajouter une recette</button></a>
    </div>
</div>    
@endsection





