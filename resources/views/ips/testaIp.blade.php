@extends('layouts.master')

<style>
.blink_me {animation: blinker 2s linear infinite;}
@keyframes blinker {50% { opacity: 0; }}
</style>

<script>
function blinktexto(){
  document.getElementById('blinktexto').style.visibility="visible";
}
</script>

@section('conteudo')

  @include('layouts.menssuccess')

  <table >
    <tr>
      <td style="border:0"> <h2>Pingar Range de Ips</h2> </td>
      <td style="border:0">
      </td>
    </tr>
  </table>

  <hr>

  <form onsubmit="blinktexto()" id="formtesta" method="POST" action="/testaip">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="InputRange">Range: </label>
      <input type="number" maxlength="3" max="254" min="0" "class="form-control" id="InputRange"  autofocus name="range"
      oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"  required>
      &emsp;
      <button type="submit" class="btn btn-primary">Pingar</button>
    </div>

  </form>

  @include('layouts.errors')

  <hr>

  <h6 class="blink_me alert alert-info text-center" id="blinktexto" style="text-decoration: blink; visibility:hidden">Aguarde a conclusão dos pings...</h6>

@endsection
