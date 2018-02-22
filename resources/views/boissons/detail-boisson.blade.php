@extends('template.template')        
@section('titre')
    Fiche {{$boisson->nom}}
@endsection

@section('content')
<div class="container">
    <h2>Détails de la boisson</h2>
    <p>Options de la BDD</p>          
    <table class="table table-bordered table-hover table-responsive">
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
    <table class = "table table-hover table-bordered table-responsive">
        <tr class="active">  
            <td><b>Id ingrédient</b></td>
            <td><b>Ingrédient</b></td>
            <td><b>Dose</b></td>
            <td><b>Stock</b></td>
            <td colspan=3><b>Gestion de la recette</b></td>
        </tr> 
        @foreach ($ingredients as $ingredient)
        <tr>
            <td>{{$ingredient->id}}</td>
            <td>{{$ingredient->nom}}</td>
            <td>{{$ingredient->pivot->nbDose}}</td>
            {{--  <td><form class="" action="{{route('modifRecette', [$boisson->id, $ingredient->id])}}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="text" class="form-control" value="{{$ingredient->pivot->nbDose}}" name="nbDose" placeholder="entrer la nouvelle dose">
            </td></form>  --}}
            <td>{{$ingredient->stock}}</td>
            <td><a href="{{ route('formModifRecette', [ $boisson->id, $ingredient->id ]) }}"><button type="button" class="btn btn-warning">Modifier recette</button></a></td>
            <td><a href="{{ route('formModifIngredient', [ $ingredient->id ]) }}"><button type="button" class="btn btn-success">Modifier stock</button></a></td>
            <td>
                <form class="" action="{{ route('supprimeRecette', [ $boisson->id, $ingredient->id ]) }}" method="post">
                    {{ csrf_field() }} 
                    {{ method_field('DELETE') }} 
                    <a href=""><button type="submit" class="btn btn-danger">Supprimer l'ingrédient</button></a>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan=4><a href="{{ route('listeBoissons') }}">
            <button type="button" class="btn btn-info">Retour à la liste des boissons</button>
            </a></td>
            <td colspan=3><a href="{{ route('listeIngredients') }}">
            <button type="button" class="btn btn-info">Retour à la liste des ingrédients</button>
            </a></td>
        </tr>
    </table>
    <br>
    <h2>Ajouter la recette</h2>
    <p>Ingrédient + dose</p>
    <form class="form-horizontal" action="{{ route('ajoutRecette', [ $boisson->id ]) }}" method="post">
        {{ csrf_field() }}
        <tr class="col-md-6" >
        <label>Ingrédient </label>
            <select class="input-sm" name="ingredient" class="form-control">
                @foreach ($listeIngredients as $ingredient)
                <option value="{{$ingredient->id}}">{{$ingredient->nom}}</option>
                @endforeach
            </select>
        </tr>
        <tr class="form-group mb-2">
            <label>Dose</label>
            <input type="text" class="input-sm" class="form-control" name="dose" placeholder="dose nécessaire">
        </tr>
        <button type="submit" class="btn btn-success">Ajouter la recette</button>
        
        <hr>
            {{--  <a href="{{ route('formModifRecette', [ $boisson->id, $ingredient->id ]) }}"><button type="button" class="btn btn-warning">Modifier recette</button></a>  --}}
            <a href="{{ route('listeBoissons')}}">
            <button type="button" class="btn btn-info">Annuler</button>
            </a>
    </form>
</div>     
@endsection