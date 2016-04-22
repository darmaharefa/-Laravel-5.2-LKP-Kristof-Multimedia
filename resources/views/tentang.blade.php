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
				<li><a href="#">Tentang Kami</a></li>									
				@yield('breadcrumb')
			</div>		
		</div>	
	</div>

	<div class="aboutus">
		<div class="container">
			@yield('header_content')
			<div class="row">
				@yield('konten')
				<div class="col-md-4 col-md-offset-1">
					<div class="list-group">
						<a href="{{url('tentangkami/sejarah')}}" class="list-group-item {{Request::is('tentangkami/sejarah') ? "active" : "" }}">Sejarah</a>
						<a href="{{url('tentangkami/visi-misi')}}" class="list-group-item {{Request::is('tentangkami/visi-misi') ? "active" : ""}}" class="list-group-item">Visi dan Misi</a>
						<a href="{{url('tentangkami/struktur-organisasi')}}" class="list-group-item {{Request::is('tentangkami/struktur-organisasi') ? "active" : ""}}" class="list-group-item">Struktur Organisasi</a>
						<a href="{{url('tentangkami/sarana-dan-prasarana')}}" class="list-group-item {{Request::is('tentangkami/sarana-dan-prasarana') ? "active" : ""}}">Sarana dan Prasarana</a>
					</div>
				</div>		
			</div>
		</div>
	</div>

	@include('parts._footer')
	
  </body>
</html>