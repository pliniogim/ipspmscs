@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h6>Dados Ativos</h6>

  <table>

    <tr>
      <td><strong>Fabricante: </strong>{{ $id->fabricante }}</td>
      <td><strong>Contato: </strong>{{ $id->contato }}</td>
    </tr>

    <tr>
      <td><strong>Telefone: </strong>{{ $id->telefone }}</td>
      <td><strong>Modelo: </strong>{{ $id->modelo }}</td>
    </tr>

    <tr>
      <td><strong>Ano: </strong>{{ $id->ano }}</td>
      <td><strong>N° série: </strong>{{ $id->nserie }}</td>
    </tr>

    <tr>
      <td colspan="2"><strong>Descrição: </strong>{{ $id->descricao }}</td>
    </tr>

    <tr>
      <td><strong>Aplicação: </strong>{{ $id->aplicacao }}</td>
      <td><strong>End. IP: </strong>{{ $id->enderecoip }}</td>
    </tr>

    <tr>
      <td colspan="2"><strong>Local: </strong>{{ $id->local }}</td>
    </tr>

    <tr>
      <td colspan="2"><strong>Responsável:</strong> {{ $id->responsavel }}</td>
    </tr>

    <tr>
      <td><strong>Usuário: </strong>{{ $id->usuario }}</td>
      <td><strong>Senha: </strong>{{ $id->senha }}</td>
    </tr>

    <tr>
      <td><strong>Protocolo1: </strong>{{ $id->protocolo1 }}</td>
      <td><strong>Protocolo2: </strong>{{ $id->protocolo2 }}</td>
    </tr>

    <tr>
      <td><strong>Protocolo3: </strong>{{ $id->protocolo3 }}</td>
      <td><strong>Versão Software: </strong>{{ $id->versaosoftware }}</td>
    </tr>

    <tr>
      <td><strong>Em operação: </strong>{{ $id->emoperacao }}</td>
      <td><strong>Garantia: </strong>{{ $id->garantia }}</td>
    </tr>

    <tr>
      <td><strong>Hardware: </strong>{{ $id->hardware }}</td>
      <td><strong>Memória: </strong>{{ $id->memoria }}</td>
    </tr>

    <tr>
      <td><strong>Processador: </strong>{{ $id->processador }}</td>
      <td><strong>N° Processadores: </strong>{{ $id->nprocessadores }}</td>
    </tr>

    <tr>
      <td><strong>N° Portas: </strong>{{ $id->portas }}</td>
      <td><strong>Descrição Portas: </strong>{{ $id->descportas }}</td>
      <td></td>
    </tr>

    <tr>
      <td colspan="2"><strong>Obs: </strong>{{ $id->observacoes }}</td>
    </tr>
  </table>

  <br>
  <h6>Informações</h6>
  <br>

  <div class="flex-center position-ref full-height">
    <table>
      @foreach ($id->infos as $info)
        <tr>
          <td> {{ $info->updated_at }}:  {{ $info->info }} </td>
          <td>
            <form action="{{action('InfoController@destroy', $info->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input  type="image" onclick="return confirm('Você deseja deletar o registro?')"
              src="/images/ic_delete_forever_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
        </tr>
      @endforeach
    </table>
  </div>

  <br>
  
  <div class="form-group">
    <form method="POST" action="/ativos/{{ $id->id }}/infos">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="InputAdicional">Adicionar Informação</label>
        <input type="text" maxlength="255" class="form-control" id="InputAdicional"  name="info"
        oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
        oninput="setCustomValidity('')" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </div>
    </form>
  </div>

  @include('layouts.errors')

@endsection
