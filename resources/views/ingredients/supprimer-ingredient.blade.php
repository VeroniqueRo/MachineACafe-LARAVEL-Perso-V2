@extends('template.template')

@section('titre')
{{$ingredientASupprimer->nom}}
@endsection

@section('content')

  <div class="container">
      <form class="" action="{{route('deleteIngredient', [$ingredientASupprimer->id])}}" method="post">
          {{ csrf_field() }} {{-- Protection contre les attaques d'injection SQL--}}
          {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_token" value="clé de sécurité">--}}
          {{ method_field('DELETE') }} 
          {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_method" value="PUT">--}}
        <div>
            <h3>Voulez-vous vraiment supprimer<br>
            {{$ingredientASupprimer->nom}} de la base de données ?</h3><br>
        </div>
        <button type="submit" class="btn btn-primary">Supprimer de la BDD</button>
      </form>
  </div>

@endsection