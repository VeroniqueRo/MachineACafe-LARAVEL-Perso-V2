@extends('template.template')        
@section('titre')
    Fiche {{$boisson->nom}}
@endsection

@section('content')
<div class="container">
    <h2>Détails de la boisson</h2>
    <p>Options de la BDD</p>          
    <table class="table table-bordered .table-hover .table-responsive">
        <thead>
        <tr class="active">
            <th>Id</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$boisson->id}}</td>
            <td>{{$boisson->code}}</td>
            <td>{{$boisson->nom}}</td>
            <td>{{$boisson->prix}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <h2>Recette de la boisson {{$boisson->nom}}</h2>
    <p>Gestion des stocks</p>      
    <table class = "table table-hover table-bordered">
        <tr class="active">  
            <td><b>Id ingrédient</b></td>
            <td><b>Ingrédient</b></td>
            <td><b>Dose</b></td>
            <td><b>Stock</b></td>
            <td colspan=2><b>Gestion</b></td>
        </tr> 
        @foreach ($ingredients as $ingredient)
        <tr>
            <td>{{$ingredient->id}}</td>
            <td>{{$ingredient->nom}}</td>
            <td>{{$ingredient->pivot->nbDose}}</td>
            <td>{{$ingredient->stock}}</td>
            <td><button type="button" class="btn btn-warning">Modifier stock</button></td>
            <td><a href="{{ route('formDeleteIngredient', [ $ingredient->id ]) }}"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan=4><a href="{{ route('listeBoissons') }}">
            <button type="button" class="btn btn-info">Retour à la liste des boissons</button>
            </a></td>
            <td>
            </td>
            <td>{{-- <a href="{{ route('supprimeRecette')}}"> --}}
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </a></td>
        </tr>
    </table>
    <br>
    <h2>Ajouter la recette</h2>
    <p><i>Ingrédient + dose par ingrédient</i></p> 
    <form class="form-horizontal" action="{{ route('ajoutRecette', [ $boisson->id ]) }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6" >
        <label>Ingrédient </label>
            <select class="input-sm" name="ingredient" class="form-control">
                
                @foreach ($listeIngredients as $ingredient)
                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                @endforeach

            </select>
        </div>
        <div class="form-group mb-2">
            <label>Dose</label>
            <input type="text" class="input-sm" class="form-control" name="dose" placeholder="dose nécessaire">
        </div>
        <button type="submit" class="btn btn-success">Ajouter la recette</button>
        <hr>
            <a href="{{ route('listeBoissons')}}">
            <button type="button" class="btn btn-info">Annuler</button>
            </a>
    </form>
</div>     
@endsection