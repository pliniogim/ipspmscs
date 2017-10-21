@extends('layouts.master')
@section('conteudo')
  <table >
    <tr>
      <td style="border:0"> <h2>Ativos</h2> </td>
      <td style="border:0">
        <div class="btn float-right">
          <form action="{{action('AtivoController@create')}}">
            {{csrf_field()}}
            <input title="Adiciona Ativo" type="image"  src="/images/ic_router_48px.svg" alt="Submit" width="32" height="32">
          </form>
        </div>
      </td>
    </tr>
  </table>
  @include('layouts.errors')
  <table>
    <tr>
      <thead>
        <td style="font-weight:bold">Ip/Local</td>
        <td style="font-weight:bold" colspan="4">Ações</td>
      </thead>
    </tr>
    @foreach($ativos as $ativo)
      <tbody>
        <tr>
          <td style="border:0">
            <a href="{{action('AtivoController@show',$ativo->id)}}">
              {{ $ativo->enderecoip }}
            </a>
          </td>
          <td rowspan="2">
            <form action="{{action('AtivoController@edit',$ativo->id)}}">
              {{csrf_field()}}
              <input title="Atualiza Ativo" type="image" src="/images/ic_update_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
          <td rowspan="2">
            <form action="{{action('AtivoController@destroy', $ativo->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input title="Deleta Ativo" type="image" onclick="return confirm('Você deseja deletar este registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
        </tr>
        <tr>
          <td>
            {{  $ativo->local }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
