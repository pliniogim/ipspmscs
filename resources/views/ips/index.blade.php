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
        @foreach($ips as $ip)
          <tr>
            <td>
              <a href="/ips/{{ $ip->id}}">
                {{ $ip->ip }}
              </a>
            </td>
            <td>
              {{  $ip->local }}
            </td>
          @endforeach
        </table>
      </div>
    </div>
  @endsection
