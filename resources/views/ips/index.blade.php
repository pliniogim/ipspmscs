@extends('layouts.master')
@section('conteudo')
  <h2>Visão geral</h2>
  @include('layouts.errors')
  <div class="flex-center position-ref full-height">
    <div class="content">
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
            <td>
              <a href="/ips/{{ $ip->id}}">
                {{ $ip->ip }}
              </a>
            </td>
            <td>
              {{  $ip->local }}
            </td>
          @endforeach
        </tbody>
        </table>
      </div>
    </div>
  @endsection
