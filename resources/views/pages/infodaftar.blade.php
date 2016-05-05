@extends('info')


@section('title', '| Tata Tertip Peserta Didik')


@section('breadcrumb')
	<li>Info Pendaftaran</li>
@endsection

@section('konten')

<div class="services">
	<div class="container">
		<div class="row well">
			<div class="col-md-12">
				<h3 class="text-center">Syarat Pendaftaran</h3>
			</div>
		</div>
		<div class="row well">
			<div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<ol class="pendaftaran">
					<li>Mengisi formulir pendaftaran</li>
					<li>Melunasi biaya kursus tahap I</li>
					<li>Menyerahkan pasphoto uk. 3 x 4 cm sebanyak 2 lembar dan 2 x 3 cm sebanyak 2 lembar</li>
					<li>Menyerahkan fotocopy ijazah terakhir sebanyak 1 lembar</li>
				</ol>
			</div>
			<div class="col-md-3">
				<div class="text-center">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="i-pendaftaran fa fa-file-text-o"></i>	
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href="{{url("/files/formulir.rtf")}}" class="btn btn-primary">Download Formulir Pendaftaran</a>
		</div>
	</div>
</div>

@endsection