@extends('template.template') 
@section('titre')
  Modifier {{$ingredientAModifier->nom}}
@endsection

@section('content')

  <div class="container">
      <hr>
      <form class="" action="{{route('modifIngredient', [$ingredientAModifier->id])}}" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }} 
          <div class="form-group">
              <label for="nomingredient" name="nomingredient">Nom de l'ingredient</label>
              <input type="text" class="form-control" value="{{$ingredientAModifier->nom}}" name="newnom" placeholder="entrer le nouveau nom de l'ingredient">
          </div>
          <div class="form-group">
              <label for="stockingredient" name="stockingredient">Stock</label>
              <input type="text" class="form-control" value="{{$ingredientAModifier->stock}}" name="newstock" placeholder="entrer le  nouveau stock de l'ingredient">
          </div>
          <button type="submit" class="btn btn-danger">Modifier la BDD</button>
          <hr>
          <a href="{{ route('listeIngredients')}}">
          <button type="button" class="btn btn-success">Annuler</button>
          </a>
      </form>
  </div>

@endsection
