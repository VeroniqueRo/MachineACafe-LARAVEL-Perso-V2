@extends('template.template')

@section('titre')
    Liste des boissons
@endsection

@section('content')
  <div class = "container">
  <div class="tableauBoisson ">
    <table class = "table table-hover table-bordered">
      <thead>
        <tr class="active">
          {{--  Méthode sans ORM  --}}
          @foreach ($drinks as $drinkName)
          <td><a href="/boisson/{{$drinkName->codeboisson}}">{{$drinkName->nomboisson}} </a></td>
          @endforeach
        </tr>
      </thead>
    </table>
  </div>
    {{--  <div class="choixBoisson">
      <h1>Faites votre choix !</h1>
      <form method="post" action="/boisson/{{$drinkName->codeboisson}}">
        <select name="choixBoisson">
          @foreach ($drinks as $drinkName)
            <option><a href="/boisson/{{$drinkName->codeboisson}}">{{ $drinkName->nomboisson}} </a></option>
          @endforeach
        </select>
        <select name="choixSucre" placeholder="Combien de sucres ?"/>
          <option>Combien de sucres?</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        <input type="submit" value="Valider"/>
      </form>
    </div>  --}}
  </div>
@endsection
