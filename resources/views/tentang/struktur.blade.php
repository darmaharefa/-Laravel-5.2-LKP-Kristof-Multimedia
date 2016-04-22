@extends('tentang')

@section('title', '| Tentang Kami')

@section('breadcrumb')
	<li>Struktur Organisasi</li>				
@endsection

@section('header_content')
	<h3>Struktur Organisasi LKP Kristof Multimedia</h3>
	<hr>
@endsection

@section('konten')
			
<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
	<img src="{{url('images/11.jpg')}}" class="img-responsive">
	<a class="preview" href="{{url('images/11.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> Lihat Foto</a>
</div>

	<!-- 
	<div class="our-team">
		<div class="container">
			<h3>Our Team</h3>	
			<div class="text-center">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img src="{{url('images/services/1.jpg')}}" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<img src="{{url('images/services/2.jpg')}}" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
					<img src="{{url('images/services/3.jpg')}}" alt="" >
					<h4>John Doe</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
				</div>
			</div>
		</div>
	</div> -->

@endsection