<!DOCTYPE html>
<html lang="en">
  <head>
    @include('parts._header')
  </head>
  <body>

	@include('parts._navbar')

	@yield('breadcrumb')
	
	@yield('konten')

	@include('parts._footer')
	
  </body>
</html>