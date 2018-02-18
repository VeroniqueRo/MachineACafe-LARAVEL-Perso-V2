@extends('template.template')  
@section('titre')
  Modifier {{$boissonAModifier->nom}}
@endsection

@section('content')

    <div class="container">
        <table class="table table-bordered .table-hover .table-responsive">
            <tbody>      
                <form class="" action="{{route('modifBoisson', [$boissonAModifier->id])}}" method="post">
                    {{ csrf_field() }} {{-- Protection contre les attaques d'injection SQL--}}
                    {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_token" value="clé de sécurité">--}}
                    {{ method_field('PUT') }} 
                    {{--  Méthode LARAVEL Equivalante à <input type="hidden" name="_method" value="PUT">--}}
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
                    <button type="submit" class="btn btn-warning">Modifier</button>
                </form>
                <tr>
                    <a href="{{ route('listeBoissons')}}">
                    <button type="button" class="btn btn-info">Annuler</button>
                    </a>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
