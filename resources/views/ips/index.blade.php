@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Home</h2>

  @include('layouts.errors')

  <table>

    <tr>

      <thead>
        <td>IP</td>
        <td>Local</td>
      </thead>

    </tr>

    @foreach($ips as $ip)
      
      <tbody>

        <td style="color: gray;">
          {{ $ip->ip }}
        </td>

        <td style="color: gray;">
          {{  $ip->local }}
        </td>

      @endforeach

    </tbody>

  </table>

@endsection
