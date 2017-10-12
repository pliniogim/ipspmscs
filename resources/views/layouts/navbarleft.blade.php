<script>
window.onload = function() {
  console.log(window.location.href);
  curr=window.location.href;
  if (curr.indexOf("/ips/create") !=-1) {
    document.getElementById("menu2").className = "nav-link active";
    }
};
var curr;
function mudaAtivo(curr){

    console.log(curr);
    document.getElementById("menu1").className = "nav-link";
    document.getElementById("menu2").className = "nav-link";
    document.getElementById("menu3").className = "nav-link";
    document.getElementById("menu4").className = "nav-link";
    switch (curr) {
      case "menu1":
        document.getElementById("menu1").className = "nav-link active";
        break;
      case "menu2":
        document.getElementById("menu2").className = "nav-link active";
        break;
      case "menu3":
        document.getElementById("menu3").className = "nav-link active";
        break;
      case "menu4":
        document.getElementById("menu4").className = "nav-link active";
        break;
    default:
    }
}
</script>
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav nav-pills flex-column">
    <li class="nav-item">
      <a id="menu1" class="nav-link" href="{{ route('home') }}" onclick="mudaAtivo('menu1')">Visão Geral <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a id="menu2" class="nav-link" href="{{ route('cadastro') }}" onclick="mudaAtivo('menu2')">Cadastramento</a>
    </li>
    <li class="nav-item">
      <a id="menu3" class="nav-link" href="#" onclick="mudaAtivo('menu3')">Relatórios</a>
    </li>
    <li class="nav-item">
      <a id="menu4" class="nav-link" href="#" onclick="mudaAtivo('menu4')">Exportar</a>
    </li>
  </ul>
</nav>
