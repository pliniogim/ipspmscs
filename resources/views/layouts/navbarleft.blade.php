<script type="text/javascript" src="{{ asset('js/Mousetrap.js') }}"></script>
<script>
Mousetrap.bind('c', function() {
  //console.log("Tecla C");
  document.getElementById('menu2').click();
});
Mousetrap.bind('v', function() {
  //console.log("Tecla V");
  document.getElementById('menu1').click();
});
</script>
<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a id="menu1" class="nav-link" href="{{ route('home') }}">Editar Ips</a>
    </li>
    <li class="nav-item">
      <a id="menu2" class="nav-link" href="{{ route('cadastroip') }}">Cadastrar Ips</a>
    </li>
    <li class="nav-item">
      <a id="menu3" class="nav-link" href="{{ route('users') }}">Editar Usuários</a>
    </li>
    <li class="nav-item">
      <a id="menu4" class="nav-link" href="{{ route('register') }}">Cadastrar Usuários</a>
    </li>
  </ul>
</nav>
