<div class="menuTemplate">
  <div class="links">
  
      <a href="../">Home</a>
      <a href="{{ url('/machineACafe')}}">Machine à Café</a>
    @if (Route::has('login'))
      @auth
        <a href="{{ route('listeBoissons')}}">Boissons</a>
        <a href="{{ route('listeIngredients')}}">Ingrédients</a>
        <a href="{{ route('listeRecettes')}}">Recettes</a>
        <a href="{{ route('listeVentes')}}">Ventes</a>
        <a href="{{ url('/gestionMonnaie')}}">Gestion Monnaie</a>
        <a href="{{ url('/home')}}">Bonjour {{ Auth::user()->name }}</a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
      @endauth
    @endif
  </div>
</div>