@extends('template.template')  
@section('titre')
{{$boissonASupprimer->nom}}
@endsection

@section('content')
    <hr>
    <div class="container">
        <form class="" action="{{route('deleteBoisson', [$boissonASupprimer->id])}}" method="post">
            {{ csrf_field() }} {{-- Protection contre les attaques d'injection SQL--}}
            {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_token" value="clé de sécurité">--}}
            {{ method_field('DELETE') }} 
            {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_method" value="PUT">--}}
            <div>
                <h3>Voulez-vous vraiment supprimer la boisson<br>
                {{$boissonASupprimer->nom}} de la base de données ?</h3><br>
            </div>
            <div>
                <button type="submit" class="btn btn-danger">Supprimer</button>
                <hr>
                <a href="{{ route('listeBoissons')}}">
                <button type="button" class="btn btn-info">Annuler</button>
                </a>
            </div>
        </form>
    </div>

@endsection