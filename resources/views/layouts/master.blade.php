<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
  @include('layouts.navbartop')
  @include('layouts.navbarleft')
  <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    <h1>IPS PMSCS</h1>
    @yield('conteudo')
  </body>
  </html>
