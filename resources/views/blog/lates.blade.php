<div class="lates">
	<div class="container">
		<div class="text-center">
			<h2>Berita Terbaru</h2>
		</div>
		@foreach($data as $item)
		<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			<img src="{{url("/images")}}/blog/{{$item->img}}" class="img-responsive"/>
			<h3>{{$item->judul}}</h3>
			<p>{!!substr($item->deskripsi,0,200)!!} {{ strlen($item->deskripsi) > 200 ? "..." : ""}}
			</p>
		</div>
		@endforeach
	</div>
</div>