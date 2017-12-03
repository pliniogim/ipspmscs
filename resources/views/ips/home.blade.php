@extends('layouts.master')

@section('conteudo')

  @include('layouts.menssuccess')

  <table>

    <tr>
      <td style="border:0">
        <h2>Redes</h2>
      </td>

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

  <table>

    <tr>
      <thead>
        <td style="font-weight:bold">IP/Local</td>
        <td style="font-weight:bold" colspan="5">Ações</td>
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

          <td rowspan="2">
            <img id="rede{{ $ip->id }}" src="" alt="Rede" width="28" height="28">
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

  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
  </script>

  <script type="text/javascript">
  $(document).ready(function(){
    //pega tag dos elementos img da página
    var images = document.getElementsByTagName('img');
    //troca imagens para offline
    for(var i = 0; i < images.length; i++)
    {
      $(images[i]).attr("src","/images/ic_signal_off.svg");
    }

    for(var i=0; i < images.length; i++)
    {
      var item = $(images[i]).attr('id').replace('rede','');
      verAtiva(item);
    }

    // verifica rede por api
    function verAtiva(item){
      $.ajax({
        method:'GET',
        url:'http://192.168.0.100:82/api/redes',
        data: {item: item}
      }).done(function(resposta){
        var images = document.getElementsByTagName('img');
        itemc = "rede"+resposta;
        if(resposta !== "Inativo") {
          $(images[itemc]).attr("src","/images/ic_signal_on.svg"); }
        //location.reload();
      });
    }


  });
  </script>

@endsection
