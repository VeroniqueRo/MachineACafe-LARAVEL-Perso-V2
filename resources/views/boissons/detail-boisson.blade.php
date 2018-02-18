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
    <h2>Détails de la recette du {{$boisson->nom}}</h2>
    <p>Options de la BDD</p>      
    <table class = "table table-hover table-bordered">
        <tr class="active">  
            <td><b>Id ingrédient</b></td>
            <td><b>Ingrédient</b></td>
            <td><b>Dose</b></td>
            <td><b>Stock</b></td>
        </tr>
        <tr>  
        @foreach ($ingredients as $ingredient)
            <tr>
                <td>{{$ingredient->id}}</td>
                <td>{{$ingredient->nom}}</td>
                <td>{{$ingredient->pivot->nbDose}}</td>
                <td>{{$ingredient->stock}}</td>
            </tr> 
        </tr>
        @endforeach
        <tr>
            <td colspan=4><a href="{{ route('listeBoissons')}}">
            <button type="button" class="btn btn-success">Retour à la liste</button>
            </a></td>
        </tr>
    </table>
    <form class="form-inline" action="" method="get">
        {{ csrf_field() }}
        <div class="form-group ">
            <label>Ingrédient</label>
            <div class="form-group" margin-top:"10px" >
            <label class="col-md "></label>
                <div class="col-md-6" >
                    <select class="input-lg" name="nomIngredient" class="form-control">
                   
                    <option value=""></option>
                     
                   
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mb-2">
            <label>Dose</label>
            <input type="text" class="form-control" name="dose" placeholder="entrer la dose d'ingrédient">
        </div>
        {{-- <a href="{{ route('ajoutRecette')}}"> --}}
            <button type="submit" class="btn btn-primary">Ajouter la recette</button>
    </form>

</div>     
@endsection