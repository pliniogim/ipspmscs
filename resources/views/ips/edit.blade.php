@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Editar Ips</h2>

  <form method="POST" action="{{action('IpController@update', $id)}}">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="InputLocal">Local</label>
      <input type="text" value="{{ $id->local }}" maxlength="80" class="form-control" id="InputLocal" autofocus  name="local" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="InputEndereco">Endereço</label>
      <input type="text" maxlength="255" value="{{ $id->endereco }}" class="form-control" id="InputEndereco"  name="endereco" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>

    @include('layouts.errors')

  </form>

@endsection
