@extends('template.template')        
@section('titre')
    Fiche "{{$boisson->nom}}"
@endsection

@section('content')
<div class="container">
    <h2>Détails de la boisson</h2>
    <p>Options de la BDD</p>          
    <table class="table table-bordered .table-hover .table-responsive">
        <thead>
        <tr class="active">
            <th>ID</th>
            <th>Code</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$boisson->id}}</td>
            <td>{{$boisson->code}}</td>
            <td>{{$boisson->nom}}</td>
            <td>{{$boisson->prix}}</td>
        </tr>
        <tr>
            <td colspan=4><a href="{{ route('listeBoissons')}}">
            <button type="button" class="btn btn-success">Retour à la liste</button>
            </a></td>
        </tr>
        </tbody>
    </table>
</div>     
@endsection