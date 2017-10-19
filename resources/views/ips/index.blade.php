@extends('layouts.master')
@section('conteudo')
  <h2>Home</h2>
  @include('layouts.errors')
  <script>
  document.getElementById("menu1").className = "nav-link active";
  </script>
  <table>
    <tr>
      <thead>
        <td>IP</td>
        <td>Local</td>
      </tr>
    </thead>
    @foreach($ips as $ip)
      <tbody>
        <td style="color: gray;">
            {{ $ip->ip }}
          </a>
        </td>
        <td style="color: gray;">
          {{  $ip->local }}
        </td>
      @endforeach
    </tbody>
  </table>
@endsection
