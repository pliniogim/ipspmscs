@extends('layouts.master')
@section('conteudo')
  <h6>Editar Usuários</h6>
  <div class="flex-center position-ref full-height">
    <table>
      @foreach ($users as $user)
        <tr>
          <td> {{ $user->nome }}</td>
          <td> {{ $user->email }}</td>
          <td>
            <form action="{{action('UserController@edit', $user->id)}}">
              {{csrf_field()}}
              <input type="image" src="/images/ic_update_48px.svg" alt="Submit" width="16" height="16">
            </form>
          </td>
          <td>
            <form action="{{action('UserController@destroy', $user->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input  type="image" onclick="return confirm('Você deseja deletar o registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="16" height="16">
            </form>
          </td>
          <td>
            <form action="{{action('UserController@password', $user->id)}}">
              {{csrf_field()}}
              <input  type="image"  src="/images/ic_lock_48px.svg" alt="Submit" width="16" height="16">
            </form>
          </td>
        </tr>
      @endforeach
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <form action="{{action('RegistrationController@create', $user->id)}}">
            {{csrf_field()}}
            <input  type="image"  src="/images/ic_person_add_48px.svg" alt="Submit" width="16" height="16">
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
<br>
@include('layouts.errors')
@endsection
