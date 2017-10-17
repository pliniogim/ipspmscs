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
            <form action="{{action('UserController@edit',$user->id)}}">
              {{csrf_field()}}
              <input type="image" src="/images/ic_update_48px.svg" alt="Submit" width="16" height="16">
              <!-- <a href="{{action('UserController@edit',$user->id)}}" class="btn btn-primary" style="background: url(/images/ic_update_48px.svg)" height="30px" width="30px"></a>-->
            </form>
          </td>
          <td>
            <form action="{{action('UserController@destroy', $user->id)}}" method="post">
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
@include('layouts.errors')
@endsection
