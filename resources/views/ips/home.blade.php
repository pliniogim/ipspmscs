@extends('layouts.master')
@section('conteudo')
  <h2>Visão geral</h2>
  @include('layouts.errors')
  <div class="flex-center position-ref full-height">
    <div class="content">
      <script>
      document.getElementById("menu1").className = "nav-link active";
      </script>
      <div class="container">
        <table>
          <tr>
            <thead>
              <td>IP</td>
              <td>Local</td>
              <td colspan="2">Ação</td>
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
                  <input type="image" src="/images/ic_update_48px.svg" alt="Submit" width="24" height="24">
                <!-- <a href="{{action('IpController@edit',$ip->id)}}" class="btn btn-primary" style="background: url(/images/ic_update_48px.svg)" height="30px" width="30px"></a>-->
              </form>
              </td>
              <td>
              <form action="{{action('IpController@destroy', $ip->id)}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <input  type="image" onclick="return confirm('Você deseja deletar o registro?')" src="/images/ic_delete_forever_48px.svg" alt="Submit" width="24" height="24">
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection
