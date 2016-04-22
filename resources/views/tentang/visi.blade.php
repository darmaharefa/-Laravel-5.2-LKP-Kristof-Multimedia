@extends('tentang')

@section('title', '| Tentang Kami')

@section('breadcrumb')
	<li>Visi dan Misi</li>					
@endsection

@section('header_content')
		<h3>Visi dan Misi LKP Kristof Multimedia</h3>
		<hr>
@endsection

@section('konten')
<div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
	<img src="{{url('images/10.jpg')}}" class="img-responsive">
	<a class="preview" href="{{url('images/10.jpg')}}" rel="prettyPhoto"><i class="fa fa-eye"></i> Lihat Foto</a>
</div>
@endsection