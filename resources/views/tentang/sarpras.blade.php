@extends('tentang')

@section('title', '| Sarana dan Prasarana')


@section('breadcrumb')
	<li>Sarana dan Prasarana</li>			
@endsection

@section('header_content')
<div class="row">
	<div class="col-md-12">
		<h3>Sarana dan Prasarana LKP Kristof Multimedia</h3>
		<hr>
	</div>
</div>
@endsection


@section('konten')
<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
	<img src="{{url('images/12.jpg')}}" class="img-responsive">
	<h3>Kami Siapkan Yang Terbaik Untuk Anda</h3>
	<p>Sarana dan Prasarana yang telah tersedia untuk mendukung kegiatan belajar di LKP Kristof Multimedia antara lain : </p>
	
	<div class="row">
		<div class="col-md-6">
			<ul class="list-group">
			  <li class="list-group-item active">Sarana</li>
			  <li class="list-group-item">Monitor LCD  </li> 
			  <li class="list-group-item">CPU </li> 
			  <li class="list-group-item">Proyektor </li> 
			  <li class="list-group-item">Mouse</li> 
			  <li class="list-group-item">Keyboad </li> 
			  <li class="list-group-item">Power Supply </li> 
			  <li class="list-group-item">Printer</li> 
			  <li class="list-group-item">Speaker</li> 
			  <li class="list-group-item">Kamera Digital</li> 
			  <li class="list-group-item">White Board</li> 
			  <li class="list-group-item">Meja Komputer</li> 
			  <li class="list-group-item">Meja Biro</li> 
			  <li class="list-group-item">Kursi Putar</li> 
			  <li class="list-group-item">Kipas Angin</li> 
			  <li class="list-group-item">Scanner</li> 
			  <li class="list-group-item">Lemari Arsip</li> 
			</ul>
		</div>

		<div class="col-md-6">
			<ul class="list-group">
			  <li class="list-group-item active">Prasarana</li>
			  <li class="list-group-item">Gedung  </li> 
			  <li class="list-group-item">Ruang Administrasi</li> 
			  <li class="list-group-item">Ruang Teori</li> 
			  <li class="list-group-item">Ruang Praktek</li> 
			  <li class="list-group-item">Perpustakaan</li> 
			  <li class="list-group-item">Kamar Kecil </li> 
			  <li class="list-group-item">Lahan Parkir</li> 
			</ul>
		</div>
	</div>

</div>

			
		
@endsection
