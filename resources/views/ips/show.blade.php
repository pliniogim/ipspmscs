@extends('layouts.master')
@section('conteudo')
  <h6>Dados</h6>
  <table>
    <tr><td>{{ $id->local }}</td></tr>
    <tr><td>Endereço: {{ $id->endereco }}</td></tr>
    <tr><td>Range de IPS: {{ $id->ip }}</td></tr>
  </table>
  <br>
  <h6>Informações</h6>
  <div class="flex-center position-ref full-height">
    <table>
      @foreach ($id->infos as $info)
        <tr>
          <td> {{ $info->updated_at }}:  {{ $info->info }} </td>
          <td>
            <form action="{{action('InfoController@destroy', $info->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input  type="image" onclick="return confirm('Você deseja deletar o registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="16" height="16">
            </form>
          </td>

        </tr>
      @endforeach
    </table>
  </div>
</div>
<br>
<div class="form-group">
  <form method="POST" action="/ips/{{ $id->id }}/infos">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="InputAdicional">Adicionar Informação</label>
      <input type="text" maxlength="255" class="form-control" id="InputAdicional"  name="info" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Adicionar</button>
    </div>
  </form>
  @include('layouts.errors')
@endsection
