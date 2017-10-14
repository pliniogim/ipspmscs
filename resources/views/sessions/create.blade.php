@extends('layouts.master')
@section('conteudo')
  <div class="col-sm-8">
    <h1>Efetuar Login</h1>
    <form method="POST" action="/login">
      {{ csrf_field() }}
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
        <button type="submit" class="btn btn-primary">Efetuar Login</button>
      </div>
      @include('layouts.errors')
    </form>
  </div>
@endsection
