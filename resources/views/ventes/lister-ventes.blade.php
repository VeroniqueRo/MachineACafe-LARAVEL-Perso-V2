@extends('template.template')

@section('image')
    <a href="ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>
@endsection

@section('titre')
    Liste des Ventes
@endsection

@section('content')
    <div class = "container">
        <div class="tableauVentes">
            <table class = "table table-hover table-bordered">  
                {{-- @foreach($newVente as $vente)
                <tr class="active">
                    <td>{{$vente->id}} </td>
                    <td>{{$vente->boisson->nom}} </td>  
                    utilise la table boissons
                    <td>{{$vente->boisson->prix}} </td>
                    <td>{{$vente->nbSucre}}</td>
                    <td>{{$vente->boisson_id}}</td>
                    <td>{{$vente->created_at}}</td>
                </tr> --}}
                {{-- @endforeach --}}
            </table>
            <table class = "table table-hover table-bordered">
                <!-- Button (Double) -->
                <div class="form-group">
                    
                    <div class="col-md-8">
                    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
                    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
                    <label class="col-md-4 control-label" for="button1id">Double Button</label>
                    </div>
                </div>
                
                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
                    <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">Option one</option>
                        <option value="2">Option two</option>
                    </select>
                    </div>
                </div>
            </table>     
        </div>
    </div>    
@endsection
