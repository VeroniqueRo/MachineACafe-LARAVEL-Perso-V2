@extends('template.template')

@section('titre')
    Faîtes votre choix
@endsection

@section('content')
<form class="" action="{{route('ajoutVente')}}" method="post">
{{ csrf_field() }}
  <!-- Selection de la boisson -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="inputlg"></label>
    <div class="col-md-4">
      <select class="input-lg" name=inputBoisson class="form-control">
        @foreach ($boissons as $boisson)
        <option value="{{$boisson->id}}">{{$boisson->nom}}
        @endforeach
        </option>
      </select>
    </div>
  </div>
  <br><br><hr>
  <!-- Choix du nombre de sucres -->
  <div class="form-group">
    <div class="col-md-12"> 
      <label class="radio-inline">
        <input name="inputSucre" value="0" checked="checked" type="radio">
        Sans sucre
      </label> 
      <label class="radio-inline">
        <input name="inputSucre" value="1" type="radio">
        1 sucre
      </label> 
      <label class="radio-inline">
        <input name="inputSucre" value="2" type="radio">
        2 sucres
      </label> 
      <label class="radio-inline">
        <input name="inputSucre" value="3" type="radio">
        3 sucres
      </label> 
      <label class="radio-inline">
        <input name="inputSucre" value="4" type="radio">
        4 sucres
      </label>
      <label class="radio-inline">
        <input name="inputSucre" value="5" type="radio">
        5 sucres
      </label>
    </div>
      <br><hr>
    <div>
      <button type="submit" class="btn btn-primary">Commander</button>
      <a href="{{ route('MachineACafe')}}">
      <button type="button" class="btn btn-success">Annuler</button>
      </a>
    </div>
  </div>
</form>
@endsection
