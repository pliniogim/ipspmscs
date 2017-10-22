@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <table>

    <tr>

      <td style="border:0">
        <h2>Usuários</h2>
      </td>

      <td style="border:0">
        <div class="btn float-right">
          <form action="{{action('RegistrationController@create')}}">
            {{csrf_field()}}
            <input class="float-lef" title="Adiciona Usuário" type="image" src="/images/ic_person_add_48px.svg" alt="Submit" width="32" height="32">
          </form>
        </div>
      </td>

    </tr>

  </table>

  <div class="flex-center position-ref full-height">

    <table>

      <thead>
        <tr>
          <td style="font-weight:bold">Nome/Email</td>
          <td style="font-weight:bold" colspan="4">Ações</td>
        </tr>
      </thead>

      <tbody>

        @foreach ($users as $user)

          <tr>

            <td style="border:0">
              {{ $user->nome }}
            </td>

            <td rowspan="2">
              <form action="{{action('UserController@edit', $user->id)}}">
                {{csrf_field()}}
                <input title="Atualiza Usuário" type="image" src="/images/ic_update_48px.svg" alt="Submit" width="28" height="28">
              </form>
            </td>

            <td rowspan="2">
              <form action="{{action('UserController@destroy', $user->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <input  title="Deleta Usuário" type="image" onclick="return confirm('Você deseja deletar o registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="28" height="28">
              </form>
            </td>

            <td rowspan="2">
              <form action="{{action('UserController@password', $user->id)}}">
                {{csrf_field()}}
                <input  title="Reseta Senha" type="image"  src="/images/ic_lock_48px.svg" alt="Submit" width="28" height="28">
              </form>
            </td>

          </tr>

          <tr>
            <td> {{ $user->email }}</td>
          </tr>

        @endforeach

      </tbody>

    </table>

  </div>

  <br>

  @include('layouts.errors')

@endsection
