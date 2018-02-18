@extends('template.template')

@section('content')
<div id="machineACafe" class="container">
  <form action="{{route('ajoutVente')}}" method="post">
  {{ csrf_field() }}
    <!-- Selection de la boisson -->
    <div class="form-group" margin-top:"10px" >
      <label class="col-md-4 control-label" for="inputlg"></label>
      <div class="col-md-4" >
        <select class="input-lg" name=inputBoisson class="form-control">
          @foreach ($boissons as $boisson)
          <option value="{{$boisson->id}}">{{$boisson->nom}}
          @endforeach
          </option>
        </select>
      </div>
    </div>
    <br><br><br><br>
    <!-- Choix du nombre de sucres -->
    <div class="form-group">
      <div class="col-md-12"> 
        <label class="radio-inline">
          <input name="inputSucre" value="0" checked="checked" type="radio">
          Sans sucre
        </label> 
        <label class="radio-inline">
          <input name="inputSucre" value="1" type="radio">
          1
        </label> 
        <label class="radio-inline">
          <input name="inputSucre" value="2" type="radio">
          2
        </label> 
        <label class="radio-inline">
          <input name="inputSucre" value="3" type="radio">
          3
        </label> 
        <label class="radio-inline">
          <input name="inputSucre" value="4" type="radio">
          4
        </label>
        <label class="radio-inline">
          <input name="inputSucre" value="5" type="radio">
          5
        </label>
      </div>
      <br><br>
      <div>
        <button type="submit" class="btn btn-primary">Commander</button>
        <a href="{{ route('MachineACafe')}}">
        <button type="button" class="btn btn-success">Annuler</button>
        </a>
      </div>
    </div>
  </form>
</div>
@endsection
