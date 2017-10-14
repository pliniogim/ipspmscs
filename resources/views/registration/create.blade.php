@extends('layouts.master')
@section('conteudo')
  <div class="col-sm-8">
    <h1>Registrar-se</h1>
    <form method="POST" action="/register">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="InputNome">Nome</label>
        <input type="text" maxlength="255" class="form-control" id="InputNome" autofocus  name="nome" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>
      <div class="form-group">
        <label for="InputEmail">Email</label>
        <input type="email" maxlength="255" class="form-control" id="InputEmail"  name="email" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>
      <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" maxlength="255" class="form-control" id="password"  name="password" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>
      <div class="form-group">
        <label for="password_confirmation">Confirmação de Senha</label>
        <input type="password" maxlength="255" class="form-control" id="password_confirmation"  name="password_confirmation" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>
      <input type="hidden" name="perfil" value="0">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Registrar-se</button>
      </div>
        @include('layouts.errors')
      </form>
  </div>
@endsection
