<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

  <a class="navbar-brand" href="{{ route('index') }}">Ips PMSCS</a>

  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">

    <ul class="navbar-nav mr-auto">

      @if(Auth::check())

        <li>
          <a id="menub" class="nav-link" href="{{ route('home') }}" >Home <span class="sr-only">(current)</span></a>
        </li>

      @else

        <li>
          <a id="menua" class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
        </li>

      @endif

      <li class="nav-item">
        <a id="menud" class="nav-link" href="/login">Login</a>
      </li>

      <li class="nav-item">

        @if(Auth::check())

          <a id="menue" class="nav-link ml-auto" href="#" >Logado como: {{ auth()->user()->nome }} </a>

          <script>
          document.getElementById("menud").onclick=function (){ return confirm('Você deseja fazer o logout?'); };
          document.getElementById("menud").innerHTML="Logout";
          document.getElementById("menud").href="/logout";
          </script>

        @else

          <script>
          document.getElementById("menud").innerHTML="Login";
          document.getElementById("menud").href="/login";
          </script>

        @endif

      </li>

      @if(Auth::check())

        <li class="nav-item">
          <a  class="nav-link" href="/home">Redes</a>
        </li>

        <li class="nav-item">
          <a  class="nav-link" href="/ativos">Ativos</a>
        </li>

        <li class="nav-item">
          <a  class="nav-link" href="/users">Usuários</a>
        </li>

        <li class="nav-item">
          <a  class="nav-link" href="/testaip">Pings</a>

        </li>

      @endif

    </ul>

    <form class="form-inline mt-2 mt-md-0" method="POST" action="/">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="text" aria-label="Procurar" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>

  </div>

</nav>
