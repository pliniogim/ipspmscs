<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.head')
<body>
  @include('layouts.navbartop')
  @if(Auth::check())
    @include('layouts.navbarleft')
  @endif
  <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
    @yield('conteudo')
  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script type="text/javascript" src="/js/imageMapResizer.min.js"></script>
	<script>
  $(document).ready(function() {
    $('map').imageMapResize();
    });
	</script>
</script>
</html>
