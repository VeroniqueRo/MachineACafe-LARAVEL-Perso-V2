@extends('template.template')

@section('titre')
  Modifier "{{$boissonAModifier->nom}}"
@endsection

@section('content')

  <div class="container">
      <form class="" action="{{route('modifBoissons', [$boissonAModifier->id])}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="codeboisson">Code</label>
            <input type="text" class="form-control" value="{{$boissonAModifier->code}}" name="newcode" placeholder="entrer le nouveau code de la boisson">
          </div>
          <div class="form-group">
              <label for="nomboisson">Nom de la Boisson</label>
              <input type="text" class="form-control" value="{{$boissonAModifier->nom}}" name="newnom" placeholder="entrer le nouveau nom de la boisson">
          </div>
          <div class="form-group">
              <label for="prixboisson" name="prixboisson">Prix</label>
              <input type="text" class="form-control" value="{{$boissonAModifier->prix}}" name="newprix" placeholder="entrer le  nouveau prix de la boisson">
          </div>
          <button type="submit" class="btn btn-primary">Modifier la BDD</button>
      </form>
  </div>

@endsection
