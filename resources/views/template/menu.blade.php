<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">  
      <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Branding image -->
        <img width="50em" height="50em" src="../img/coffee.png"><a class="navbar-brand" href="{{ url('/') }}"> La Pause S'Impose</a>      </div>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="../">Accueil</a></li>
            <li><a href="{{ url('/machineACafe')}}">Machine à Café</a></li>
            @if (Illuminate\Support\Facades\Auth::check())
                {{--  @if (Illuminate\Support\Facades\Auth::user()->role=== 'admin')  --}}
                <li><a href="{{ route('listeBoissons')}}">Boissons</a></li>
                <li><a href="{{ route('listeIngredients')}}">Ingrédients</a></li>
                <li><a href="{{ route('listeRecettes')}}">Recettes</a></li>
                <li><a href="{{ url('/gestionMonnaie')}}">Gestion Monnaie</a></li>
                {{--  @endif  --}}
                <li><a href="{{ route('listeVentes')}}">Ventes</a></li>
            @endif
        </ul>
        <!-- Right Side Of Navbar -->
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->
              @guest
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Enregistrez-vous</a></li>
              @else
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                      aria-expanded="false" aria-haspopup="true">
                      Bonjour {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="    display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
                </li>
              @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<script src="{{ asset('js/app.js') }}"></script>