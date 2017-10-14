@extends('layouts.master')
@section('conteudo')
  <div class="flex-center position-ref full-height">
    <div class="content">
      <table>
        <tr><td>{{ $id->local }}</td></tr>
        <tr><td>Endereço: {{ $id->endereco }}</td></tr>
        <tr><td>Range de IPS: {{ $id->ip }}</td></tr>
      </table>
      <div class="flex-center position-ref full-height">
        <table>
          @foreach ($id->infos as $info)
            <tr><td> {{ $info->info }} </td></tr>
          @endforeach
        </table>
      </div>
    </div>
    <br>
    <div class="form-group">
      <form method="POST" action="/ips/{{ $id->id }}/infos">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="InputAdicional">Adicionar Informação</label>
          <input type="text" maxlength="255" class="form-control" id="InputAdicional"  name="info" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
          oninput="setCustomValidity('')" required>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
      </form>
      @include('layouts.errors')
    </div>
  </div>
@endsection
