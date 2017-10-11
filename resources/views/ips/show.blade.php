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
                  <tr>
                  <td>{{ $ip->ip }}</td>
                  <td>{{ $ip->local }}</td>
              </table>
              </div>
        </div>
    </body>
</html>
