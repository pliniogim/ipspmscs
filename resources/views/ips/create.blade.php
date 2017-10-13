@extends('layouts.master')
@section('conteudo')
  <h2>Cadastrar IPs</h2>
  <form method="POST" action="/ips">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="InputLocal">Local</label>
      <input type="text" maxlength="80" class="form-control" id="InputLocal" autofocus placeholder="Local" name="local" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>
    <div class="form-group">
      <label for="InputIp">Range de Ips</label>
      <input type="text" maxlength="18" class="form-control" id="InputIp" placeholder="Range de Ips" name="ip" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    @include('layouts.errors')
    </form>
@endsection
