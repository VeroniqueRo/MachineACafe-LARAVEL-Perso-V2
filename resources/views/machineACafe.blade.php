@extends('template.template')

@section('titre')
    Faîtes votre choix
@endsection

@section('content')
  <div class = "container">
    <div class="tableauBoisson ">
      <table class = "table table-hover table-bordered">
        <thead>
          <tr class="active">
            @foreach ($drinks as $drinkName)
              <td><a href='{{route('listeBoissons',[$drinkName->code])}}'>{{$drinkName->nom}} </a></td>
            @endforeach
          </tr>
        </thead>
      </table>
    </div>
  </div>
@endsection
