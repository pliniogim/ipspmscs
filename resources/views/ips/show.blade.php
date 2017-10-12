@extends('layouts.master')
@section('conteudo')
  <div class="flex-center position-ref full-height">
    <div class="content">
      <table>
        <tr><td>{{ $id->local }}</td></tr>
        <tr><td>Range de IPS: {{ $id->ip }}</td></tr>
      </table>
    </div>
  </div>
@endsection
