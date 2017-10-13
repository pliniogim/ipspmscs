<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
  @include('layouts.navbartop')
  @include('layouts.navbarleft')
  <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    @yield('conteudo')
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/popper.min.js"></script>
    </html>
