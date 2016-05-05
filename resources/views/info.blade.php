<!DOCTYPE html>
<html lang="en">
  <head>
    @include('parts._header')
  </head>
  <body>

	@include('parts._navbar')

	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">
				<li><a href="{{url('')}}">Home</a></li>									
				<li><a href="#">Info Kursus</a></li>									
				@yield('breadcrumb')
			</div>		
		</div>	
	</div>

	@yield('konten')

	@include('parts._footer')
	
  </body>
</html>