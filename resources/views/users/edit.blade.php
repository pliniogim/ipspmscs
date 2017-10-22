@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Editar Usuários</h2>

  <form method="POST" action="{{action('UserController@update', $id)}}">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="InputNome">Nome</label>
      <input type="text" value="{{ $id->nome }}" maxlength="80" class="form-control" id="InputLocal" autofocus  name="nome" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="InputEmail">Email</label>
      <input type="text" maxlength="255" value="{{ $id->email }}" class="form-control" id="InputEmail"  name="email" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>

    @include('layouts.errors')

  </form>

@endsection
