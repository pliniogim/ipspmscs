<script>
function mudaMenuAtivo(curr){
  console.log(curr);
  document.getElementById("menua").className = "nav-link";
  document.getElementById("menub").className = "nav-link";
  document.getElementById("menuc").className = "nav-link";
  document.getElementById("menud").className = "nav-link";
  switch (curr) {
    case "menua":
    document.getElementById("menua").className = "nav-link active";
    break;
    case "menub":
    document.getElementById("menub").className = "nav-link active";
    break;
    case "menuc":
    document.getElementById("menuc").className = "nav-link active";
    break;
    case "menud":
    document.getElementById("menud").className = "nav-link active";
    break;
    default:
  }
}
</script>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/home">Ips PMSCS</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li>
        <a id="menua" class="nav-link" href="{{ route('home') }}" onclick="mudaMenuAtivo('menua')">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a id="menub" class="nav-link" href="#" onclick="mudaMenuAtivo('menub')">Preferências</a>
      </li>
      <li class="nav-item">
        <a id="menuc" class="nav-link" href="#" onclick="mudaMenuAtivo('menuc')">Ajuda</a>
      </li>
      <li class="nav-item">
        <a id="menud" class="nav-link" href="/login" onclick="mudaMenuAtivo('menud')">Login</a>
      </li>
      <li class="nav-item">
        <a id="menue" class="nav-link" href="/register" onclick="mudaMenuAtivo('menue')">Registrar-se</a>
      </li>

      <li class="nav-item">
        @if(Auth::check())
          <a id="menue" class="nav-link ml-auto" href="#" >Logado como: {{ auth()->user()->nome }} </a>
          <script>
            document.getElementById("menud").onclick=function (){ return confirm('Você deseja fazer o logout?'); };
            document.getElementById("menud").innerHTML="Logout";
            document.getElementById("menud").href="/logout";
            document.getElementById("menue").style.visibility="hidden";
          </script>
        @else
          <script>
            document.getElementById("menud").innerHTML="Login";
            document.getElementById("menud").href="/login";
            document.getElementById("menue").style.visibility="visible";
          </script>
        @endif
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0" method="POST" action="/">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" type="text" aria-label="Procurar" name="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
  </div>
</nav>
