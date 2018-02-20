@extends('template.template') 
@section('titre')

  {{$recette->nom}}
@endsection

@section('content')

  <div class="container">
    <h3>Dose de l'ingrédient {{$recette->nom}} à modifier dans la recette du {{$boisson->nom}}</h3>
    <form class="" action="{{route('modifRecette', [$boisson->id, $recette->id])}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
     
        <div class="form-group">
       
            <input type="text" class="form-control" value="{{$recette->pivot->nbDose}}" name="nbDose" placeholder="entrer la nouvelle dose">
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
        <hr>
        <a href="{{route('ficheBoisson', $boisson->id)}}">
        <button type="button" class="btn btn-info">Annuler</button>
        </a>
      </form>
  </div>

@endsection
