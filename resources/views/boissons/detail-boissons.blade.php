@extends('template.template')
      
@section('titre')
    Fiche "{{$boissons->nom}}"
@endsection

@section('content')
        <h3>ID : {{$boissons->id}}</h3>
        {{--  <h3>Date : {{$boissons->created_at}}</h3>  --}}
        <h3>Code : {{$boissons->code}}</h3>
        <h3>Nom : {{$boissons->nom}}</h3>
        <h3>Prix : {{$boissons->prix}} cts</h3>
@endsection