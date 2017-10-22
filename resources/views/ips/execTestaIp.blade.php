@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Resumo dos Pings</h2>

  <hr>

  @if ($addr)

    <div class="alert alert-success">
      <h5 class="text-center">O range está ativo.</h5>
    </div>

    <hr>

    <br>

    <strong><p>Ips ativos: </p></strong>

    <div>

      <table>

        <thead>
          <tr>
            <td>
              IP
            </td>
          </tr>
        </thead>

        <tbody>

          @foreach($addr as $a)
            <tr>
              <td>
                {{ $a }}
              </td>
            </tr>
          @endforeach

        </tbody>

      </table>

    </div>

  @else
    <h5 class="alert alert-info text-center">Nenhum ip foi encontrado no range pesquisado.<h5>


    @endif

    @include('layouts.errors')

  @endsection
