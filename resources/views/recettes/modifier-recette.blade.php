@extends('template.template') 
@section('titre')
  Modifier la recette de la boisson {{$ingredient->nom}}
@endsection

@section('content')

  <div class="container">
    <hr>
    <form class="" action="{{route('modifRecette', [$ingredient->nbDose])}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
        <div class="form-group">
            <label for="nomingredient" name="nomingredient">Id de l'ingredient</label>
            <input type="text" class="form-control" value="{{$ingredient->id}}" name="newnom" placeholder="entrer le nouveau nom de l'ingredient">
        </div>
        <div class="form-group">
            <label for="nomingredient" name="nomingredient">Nom de l'ingredient</label>
            <input type="text" class="form-control" value="{{$ingredient->nom}}" name="newnom" placeholder="entrer le nouveau nom de l'ingredient">
        </div>
        <div class="form-group">
            <label for="stockingredient" name="stockingredient">Stock</label>
            <input type="text" class="form-control" value="{{$ingredient->stock}}" name="newstock" placeholder="entrer le  nouveau stock de l'ingredient">
        </div>
        <button type="submit" class="btn btn-warning">Modifier</button>
        <hr>
        <a href="">
        <button type="button" class="btn btn-info">Annuler</button>
        </a>
      </form>
  </div>

@endsection
