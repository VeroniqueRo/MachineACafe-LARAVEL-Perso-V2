@extends('template.template')

@section('titre')
  Ajouter une boisson
@endsection

@section('content')

  <div class="container">
      <form class="" action="{{route('ajoutBoissons')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="codeboisson">Code</label>
            <input type="text" class="form-control" name="codeboisson" placeholder="entrer le nom de la boisson">
          </div>
          <div class="form-group">
              <label for="nomboisson">Nom de la Boisson</label>
              <input type="text" class="form-control" name="nomboisson" placeholder="entrer le nom de la boisson">
          </div>
          <div class="form-group">
              <label for="prixboisson" name="prixboisson">Prix</label>
              {{-- <select class="form-control" name="prixboisson">
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="60">60</option>
                <option value="70">70</option>
                <option value="80">80</option>
              </select> --}}
              <input type="text" class="form-control" name="prixboisson" placeholder="entrer le prix de la boisson">
          </div>
          <button type="submit" class="btn btn-primary">Ajouter à la BDD</button>
      </form>
  </div>

@endsection
