@extends('template.template')
@section('titre')
  La liste des recettes 
@endsection
@section('content')
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover table-bordered">	
			<tr class="active">
				<th><b>NomBoisson</b></th> 
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
				<th><b>Ingrédients</b></th>
				<th><b>Quantité</b></th>
			</tr>
		</tr>
			@foreach($recette as $nomboisson=>$rec)
			<td>{{ $nomboisson }}</td>
			@foreach($rec as $ingredient=>$quantite)

			<td>{{$ingredient}}</td>
			<td>  {{$quantite}}</td>
			@endforeach
			</tr>
			@endforeach
		</table>
	</div> 
	@include("template.boutonAddRemoveModif");
@endsection





