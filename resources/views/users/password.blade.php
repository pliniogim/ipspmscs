@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h6>Resetar Senha de Usuários</h6>

  Usuário = {{ $user->nome }}

  <hr>

  <div class="flex-center position-ref full-height">

    <form method="POST" action="{{action('UserController@store', $user->id)}}">

      {{ csrf_field() }}

      <div class="form-group">
        <label for="password">Nova Senha</label>
        <input type="password" maxlength="255" class="form-control" id="password"  name="password" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>

      <div class="form-group">
        <label for="password_confirmation">Confirmação de Nova Senha</label>
        <input type="password" maxlength="255" class="form-control" id="password_confirmation"  name="password_confirmation" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>

      <input type="hidden" name="perfil" value="0">

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Resetar</button>
      </div>

      @include('layouts.errors')

    </form>

  </div>

@endsection
