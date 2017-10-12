@extends('layouts.master')
@section('conteudo')
  <h2>Cadastrar IPs</h2>
  <form method="POST" action="/ips">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="InputLocal">Local</label>
      <input type="text" maxlength="80" class="form-control" id="InputLocal" placeholder="Local" name="local">
    </div>
    <div class="form-group">
      <label for="InputIp">Range de Ips</label>
      <input type="text" maxlength="18" class="form-control" id="InputIp" placeholder="Range de Ips" name="rangeips">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
@endsection
