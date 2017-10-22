@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <h2>Editar Ativos</h2>

  <form method="POST" action="{{action('AtivoController@update', $id)}}">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="fabricante">Fabricante</label>
      <input type="text" value="{{ $id->fabricante }}" maxlength="255" class="form-control" id="fabricante" autofocus  name="fabricante" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="contato">Contato</label>
      <input type="text" value="{{ $id->contato }}" maxlength="80"  class="form-control" id="contato"  name="contato" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="telefone">Telefone</label>
      <input type="text" value="{{ $id->telefone }}" maxlength="40" class="form-control"  id="telefone"  name="telefone" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="modelo">Modelo</label>
      <input type="text" value="{{ $id->modelo }}" maxlength="80" class="form-control" id="modelo"  name="modelo" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="ano">Ano</label>
      <input type="date"  value="{{ $id->ano }}" axlength="80" class="form-control" id="ano"  name="ano" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="nserie">N° Série</label>
      <input type="text"  value="{{ $id->nserie }}" maxlength="80" class="form-control" id="nserie" name="nserie" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text"  value="{{ $id->descricao }}" maxlength="80" class="form-control" id="descricao" name="descricao" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="aplicacao">Aplicação</label>
      <input type="text" value="{{ $id->aplicacao }}"  maxlength="80" class="form-control" id="aplicacao" name="aplicacao" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="enderecoip">Endereço IP</label>
      <input type="text"  value="{{ $id->enderecoip }}" maxlength="80" class="form-control" id="enderecoip" name="enderecoip" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="local">Local</label>
      <input type="text" value="{{ $id->local }}"  maxlength="80" class="form-control" id="local" name="local" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="responsavel">Responsavel</label>
      <input type="text" value="{{ $id->responsavel }}"  maxlength="80" class="form-control" id="responsavel" name="responsavel" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="usuario">Usuário</label>
      <input type="text"  value="{{ $id->usuario }}" maxlength="80" class="form-control" id="usuario" name="usuario" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="senha">Senha</label>
      <input type="text" value="{{ $id->senha }}"  maxlength="80" class="form-control" id="senha" name="senha" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="protocolo1">Protocolo1</label>
      <input type="text" value="{{ $id->protocolo1 }}" maxlength="80" class="form-control" id="protocolo1" name="protocolo1" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="protocolo2">Protocolo2</label>
      <input type="text"  value="{{ $id->protocolo2 }}" maxlength="80" class="form-control" id="protocolo2" name="protocolo2" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="protocolo3">Protocolo3</label>
      <input type="text" value="{{ $id->protocolo3 }}"  maxlength="80" class="form-control" id="protocolo3" name="protocolo3" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="emoperacao">Em operação</label>
      <input type="date"  value="{{ $id->emoperacao }}" maxlength="80" class="form-control" id="emoperacao" name="emoperacao" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="garantia">Garantia</label>
      <input type="date" value="{{ $id->garantia }}" maxlength="80" class="form-control" id="garantia" name="garantia" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="versaosoftware">Versão Software</label>
      <input type="text"  value="{{ $id->versaosoftware }}" maxlength="80" class="form-control" id="versaosoftware" name="versaosoftware" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="hardware">Hardware</label>
      <input type="text"  value="{{ $id->hardware }}" maxlength="80" class="form-control" id="hardware" name="hardware" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="memoria">Memória</label>
      <input type="text" value="{{ $id->memoria }}" maxlength="80" class="form-control" id="memoria" name="memoria" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="processador">Processador</label>
      <input type="text"  value="{{ $id->processador }}" maxlength="80" class="form-control" id="processador" name="processador" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="nprocessadores">N° Processadores</label>
      <input type="integer" value="{{ $id->nprocessadores }}"  min="1" max="32" maxlength="2" class="form-control" id="nprocessadores" name="nprocessadores" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="portas">Portas</label>
      <input type="integer" value="{{ $id->portas }}"  min="1" max="32" maxlength="2" class="form-control" id="portas" name="portas" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="descportas">Descrição Portas</label>
      <input type="text"  value="{{ $id->descportas }}" maxlength="80" class="form-control" id="descportas" name="descportas" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <label for="observacoes">Observações</label>
      <input type="text"  value="{{ $id->observacoes }}" maxlength="80" class="form-control" id="observacoes" name="observacoes" oninvalid="this.setCustomValidity('Por favor, preencha este campo.')"
      oninput="setCustomValidity('')" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>

    @include('layouts.errors')

  </form>

@endsection
