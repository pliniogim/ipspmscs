@extends('layouts.master')
@section('conteudo')
  <h2>Editar Ips</h2>
  <div class="btn float-right">
    <form action="{{action('IpController@create')}}">
      {{csrf_field()}}
      <input title="Adiciona IP" type="image"  src="/images/ic_router_48px.svg" alt="Submit" width="32" height="32">
    </form>
  </div>

  @include('layouts.errors')
  <script>
  document.getElementById("menu1").className = "nav-link active";
  </script>
  <table>
    <tr>
      <thead>
        <td>IP</td>
        <td>Local</td>
        <td colspan="2">Ações</td>
      </thead>
    </tr>

    @foreach($ips as $ip)
      <tbody>
        <td>
          <a href="/ips/{{ $ip->id}}">
            {{ $ip->ip }}
          </a>
        </td>
        <td>
          {{  $ip->local }}
        </td>
        <td>
          <form action="{{action('IpController@edit',$ip->id)}}">
            {{csrf_field()}}
            <input title="Atualiza IP" type="image" src="/images/ic_update_48px.svg" alt="Submit" width="16" height="16">
            <!-- <a href="{{action('IpController@edit',$ip->id)}}" class="btn btn-primary" style="background: url(/images/ic_update_48px.svg)" height="30px" width="30px"></a>-->
          </form>
        </td>
        <td>
          <form action="{{action('IpController@destroy', $ip->id)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <input title="Deleta IP" type="image" onclick="return confirm('Você deseja deletar este registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="16" height="16">
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
