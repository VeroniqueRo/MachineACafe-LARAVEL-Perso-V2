@extends('template.template')

@section('titre')
  Ajouter une boisson
@endsection

@section('content')

  <div class="container">
      <hr>
      <form class="" action="{{route('ajoutBoisson')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="codeboisson">Code</label>
            <input type="text" class="form-control" name="codeboisson" placeholder="entrer le nom de la boisson">
          </div>
          <div class="form-group">
            <label for="nomboisson">Nom</label>
            <input type="text" class="form-control" name="nomboisson" placeholder="entrer le nom de la boisson">
          </div>
          <div class="form-group">
            <label for="prixboisson" name="prixboisson">Prix</label>
            <input type="text" class="form-control" name="prixboisson" placeholder="entrer le prix de la boisson">
          </div>
            <button type="submit" class="btn btn-primary">Ajouter à la BDD</button>
            <hr>
              <a href="{{ route('listeBoissons')}}">
              <button type="button" class="btn btn-success">Annuler</button>
              </a>
      </form>
  </div>

@endsection
