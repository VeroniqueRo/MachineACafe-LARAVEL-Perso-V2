@extends('template.template')  
@section('titre')
  Ajouter un ingrédient
@endsection

@section('content')

  <div class="container">
      <hr>
      <form class="" action="{{route('ajoutIngredients')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nomingredient">Nom</label>
            <input type="text" class="form-control" name="nomingredient" placeholder="entrer le nom de l'ingredient">
          </div>
          <div class="form-group">
            <label for="stockingredient" name="stockingredient">Stock</label>
            <input type="text" class="form-control" name="stockingredient" placeholder="entrer le stock de l'ingredient">
          </div>
          <button type="submit" class="btn btn-primary">Ajouter l'ingrédient</button>
          <hr>
          <a href="{{ route('listeIngredients')}}">
          <button type="button" class="btn btn-info">Annuler</button>
          </a>
      </form>
  </div>

@endsection
