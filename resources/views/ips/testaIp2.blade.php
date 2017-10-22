@extends('layouts.master')

<style>
.blink_me {animation: blinker 2s linear infinite;}
@keyframes blinker {50% { opacity: 0; }}
</style>

<script type="text/javascript">
function blinktexto(){
  document.getElementById('blinktexto').style.visibility="visible";
}

function myfunc () {
  document.getElementById('blinktexto').style.visibility="visible";
  var frm = document.getElementById("formtesta");
  frm.submit();
}

if (window.addEventListener) {
  window.addEventListener('load', myfunc, false);
} else {
  window.attachEvent('onload', myfunc);
}

</script>

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Pingar Range de Ips</h2>

  <hr>

  <form onsubmit="blinktexto()" name="formtesta" id="formtesta" method="POST" action="/testaip2">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="InputRange">Pingando o range de Ips: 192.168.{{ $ip3}}.0/24</label>
      <input type="hidden" value="{{ $ip3 }}" maxlength="3" max="254" min="0" "class="form-control" id="InputRange"  autofocus name="range"
      oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"  required>&emsp;
    </div>

  </form>

  @include('layouts.errors')

  <hr>

  <h6 class="blink_me alert alert-info text-center" id="blinktexto" style="text-decoration: blink; visibility:hidden">Aguarde a conclusão dos pings...</h6>

@endsection
