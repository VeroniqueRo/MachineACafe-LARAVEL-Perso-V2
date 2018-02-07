@extends('template.template')

@section('titre')
  Gestion de l'argent
@endsection

@section('content')

<div class="container">
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 10 pieces</span><img class="piece_2" alt="piece 2euro" src="../img/2euros.png"/></a></p>
      <progress class="etat2e" id="avancement" value="10" max="100"></progress>
      @include('template.boutonAddRemove')
    </div>
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 77 pieces</span><img class="piece_1" alt="piece 1euro" src="../img/1euros.jpg"/></a></p>
        <progress class="etat1e" id="avancement" value="77" max="100"></progress>
        @include('template.boutonAddRemove')
    </div>
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 30 pieces</span><img class="piece_50" alt="piece 50cts" src="../img/50ct.png"/></a></p>
        <progress class="etat50ct" id="avancement" value="30" max="100"></progress>
        @include('template.boutonAddRemove')
    </div>
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 3 pieces</span><img class="piece_20" alt="piece 20cts" src="../img/20ct.png"/></a></p>
        <progress class="etat20ct" id="avancement" value="3" max="100"></progress>
        @include('template.boutonAddRemove')
    </div>
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 16 pieces</span><img class="piece_10" alt="piece 10cts" src="../img/10ct.png"/></a></p>
        <progress class="etat10ct" id="avancement" value="16" max="100"></progress>
        @include('template.boutonAddRemove')
    </div>
    <div class="col-sm-2 pieces">
      <p><a href="#"><span>Il reste 100 pieces</span><img class="piece_5" alt="piece 5cts" src="../img/5ct.png"/></a></p>
        <progress class="etat5ct" id="avancement" value="100" max="100"></progress>
        @include('template.boutonAddRemove')
    </div>
  </div>
</div>

@endsection
