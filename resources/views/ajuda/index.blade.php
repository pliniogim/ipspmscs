@extends('layouts.master')
@section('conteudo')
  <h6>Ajuda</h6>
  <div>
    <p>Passe o mouse sobre a imagem abaixo e clique nos links para obter ajuda.</p>
  </div>
  <script>
  function displayon(curr3){
    //console.log(curr3);
    document.getElementById("ipspmscs").style.display = "none";
    document.getElementById("home").style.display = "none";
    document.getElementById("preferencias").style.display = "none";
    document.getElementById("ajuda").style.display = "none";
    document.getElementById("login").style.display = "none";
    document.getElementById("registrarse").style.display = "none";
    document.getElementById("fldprocura").style.display = "none";
    document.getElementById("btnprocura").style.display = "none";
    document.getElementById(curr3).style.display = "block";
  }
  </script>
  <div class="flex-center position-ref full-height">
    <img class="img-fluid" src="/images/navegador_topo.png"  width="877,5px" height="90,76px" alt="ippmscs" usemap="#mapa">
    <map name="mapa">
      <area shape="rect" coords="18,80,115,120" onclick="displayon('ipspmscs')" alt="IPSPMSCS" href="#ipspmscs">
      <area shape="rect" coords="135,80,175,120" onclick="displayon('home')" alt="HOME" href="#home">
      <area shape="rect" coords="190,80,255,120" onclick="displayon('preferencias')" alt="PREFERENCIAS" href="#preferencias">
      <area shape="rect" coords="270,80,305,120" onclick="displayon('ajuda')" alt="AJUDA" href="#ajuda">
      <area shape="rect" coords="318,80,350,120" onclick="displayon('login')" alt="LOGIN" href="#login">
      <area shape="rect" coords="365,80,430,120" onclick="displayon('registrarse')" alt="REGISTRAR" href="#registrarse">
      <area shape="rect" coords="910,80,1130,120" onclick="displayon('fldprocura')" alt="FLDPROCURA" href="#fldprocura">
      <area shape="rect" coords="1138,80,1225,120" onclick="displayon('btnprocura')" alt="BTNPROCURA" href="#btnprocura">
    </map>
  </div>
  <div id="ipspmscs" style="display:none" class="flex-center position-ref full-height">
    <div>
      <br>
      <h6>Ao clicar em Ips PMSCS, a página mostrada sofre processo de refresh.</h6>
    </div>
  </div>
  <div id="home" style="display:none" class="flex-center position-ref full-height">
    <div>
      <br>
      <h6>Ao clicar em Home, a página inicial do site é mostrada. A ordem dos dados mostrada
        página inicial é pela classificação dos ips, em ordem crescente.
      </h6>
    </div>
  </div>
  <div id="preferencias" style="display:none" class="flex-center position-ref full-height">
    <div>
      <br>
      <h6>Ao clicar em Preferências, o site é direcionado para a página de preferências,
        onde será possível assinalar preferências quanto à forma que os dados iniciais
        são mostrados, etc.</h6>
      </div>
    </div>
    <div id="ajuda" style="display:none" class="flex-center position-ref full-height">
      <div>
        <br>
        <h6>Ao clicar em Ajuda, esta página é mostrada.</h6>
      </div>
    </div>
    <div id="login" style="display:none" class="flex-center position-ref full-height">
      <div>
        <br>
        <h6>Ao clicar em Login, a página de login é mostrada.
          Através do processo de login, alguns recursos reservados
          são ativados.</h6>
        </div>
      </div>
      <div id="registrarse" style="display:none" class="flex-center position-ref full-height">
        <div>
          <br>
          <h6>Ao clicar em Registrar-se, o site é direcionado
            para a página de registro de novos usuários.</h6>
        </div>
      </div>
      <div id="fldprocura" style="display:none" class="flex-center position-ref full-height">
        <div>
          <br>
          <h6>O campo de procura serve para a entrada de dados do local que se quer procurar.</h6>
        </div>
      </div>
      <div id="btnprocura" style="display:none" class="flex-center position-ref full-height">
        <div>
          <br>
          <h6>Ao clicar no botão Procura, a pesquisa selecionada é efetuada e os resultados são
            retornados à página, em ordem alfabética.
            Se nenhum padrão de pesquisa foi digitado no campo de procura, todos os resultados
            possíveis são recuperados do servidor, em ordem alfabética.</h6>
          </div>
        </div>

      @endsection
