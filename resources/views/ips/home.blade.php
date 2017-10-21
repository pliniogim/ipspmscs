@extends('layouts.master')
@section('conteudo')
  <table >
    <tr>
      <td style="border:0"> <h2>Redes</h2> </td>
      <td style="border:0">
        <div class="btn float-right">
          <form action="{{action('IpController@create')}}">
            {{csrf_field()}}
            <input title="Adiciona IP" type="image"  src="/images/ic_router_48px.svg" alt="Submit" width="32" height="32">
          </form>
        </div>
      </td>
    </tr>
  </table>
  @include('layouts.errors')
  <script>
  document.getElementById("menu1").className = "nav-link active";
  </script>
  <table>
    <tr>
      <thead>
        <td style="font-weight:bold">IP/Local</td>
        <td style="font-weight:bold" colspan="4">Ações</td>
      </thead>
    </tr>

    @foreach($ips as $ip)
      <tbody>
        <tr>
          <td style="border:0">
            <a href="/ips/{{ $ip->id}}">
              {{ $ip->ip }}
            </a>
          </td>
          <td rowspan="2">
            <form action="{{action('IpController@edit',$ip->id)}}">
              {{csrf_field()}}
              <input title="Atualiza IP" type="image" src="/images/ic_update_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
          <td rowspan="2">
            <form action="{{action('IpController@testaIp1',$ip->id)}}">
              {{csrf_field()}}
              <input title="Pinga Range" type="image" src="/images/ic_check_box_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
          <td rowspan="2">
            <form action="{{action('IpController@testaIp2',$ip->id)}}">
              {{csrf_field()}}
              <input title="Fast Ping Range" type="image" src="/images/ic_fastcheck_box_48px.png" alt="Submit" width="28" height="28">
            </form>
          </td>
          <td rowspan="2">
            <form action="{{action('IpController@destroy', $ip->id)}}" method="post">
              {{csrf_field()}}
              <input name="_method" type="hidden" value="DELETE">
              <input title="Deleta IP" type="image" onclick="return confirm('Você deseja deletar este registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="28" height="28">
            </form>
          </td>
        </tr>
        <tr>
          <td>
            {{  $ip->local }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
