<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IPS PMSCS</title>
      </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    IPS PMSCS
                </div>
                <table>
                @foreach($ips as $ip)
                  <tr>
                  <td>
                    <a href="/ips/{{ $ip->id}}">
                      {{ $ip->ip }}
                    </a>
                  </td>
                  <td>
                    {{ $ip->local }}
                  </td>
                @endforeach
              </table>
              </div>
        </div>
    </body>
</html>
