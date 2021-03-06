@extends('main')

@section('title', '| Home Page')

@section('konten')

	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Selamat Datang Di <span>LKP Kristof Multimedia</span></h2>
                                    <!-- <p class="animation animated-item-2"><i>"Anda bisa kami senang... Anda pintar kami bangga"</i></p> -->
                                    <i class="fa fa-quote-left fa-3x fa-pull-left" aria-hidden="true"></i><p class=""><i>"Anda bisa kami senang <br> Anda pintar kami bangga"</i></p>
                                    <a class="btn-slide animation animated-item-3" href="#">Bergabung Dengan Kami</a>
                                </div>
                            </div>

                            <!-- <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img3.png" class="img-responsive">
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-thumbs-up"></i>	
						<h2>Berpengalaman</h2>
						<p>Instruktur berpengalaman Minimal 10 tahun dan Lulus Uji Kompetensi, Serta LKP Kristof Multimedia Telah ditetapkan sebagai tempat Uji Kompetensi Komputer</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-desktop"></i>	
						<h2>Fasilitas</h2>
						<p>Fasilitas Praktek Ruang Belajar, Komputer, Perpusatakan dan Modul Praktek</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-money"></i>	
						<h2>Biaya Ringan</h2>
						<p>Biaya kursus sangat ringan dan pembayaran dapat diangsur</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-magic"></i>	
						<h2>Modern</h2>
						<p>Materi disampaikan dengan LCD Proyektor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>Tentang Kami</h2>
				<img src="images/8.jpg" class="img-responsive"/>
				<p><b>Lembaga Kursus dan Pelatihan Kristof Multimedia</b> didirikan sejak bulan Oktober 2005 yang beralamat di Jl. Yos Sudarso No. 53 Gunungsitoli, serta memiliki izin operasional dari Dinas Dinas Pendidikan Kabupaten Nias.
				</p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<br><br><br>
				<h3>Selayang Pandang</h3>
				<p>Dengan segala keterbatasan yang dimiliki oleh suatu daerah, lembaga pendidikan formal dan non formal mempunyai tanggung jawab moral untuk mempersiapkan tenaga – tenaga kerja yang professional hingga dapat bersaing di segala lini kehidupan. Jika apa yang terjadi dilingkungan kita dewasa ini banyak manusia – manusia dalam masa produktif tetapi tidak dapat berbuat banyak untuk menghidupi dirinya sendiri, sementara banyak lowongan – lowongan pekerjaan yang ditawarkan oleh dunia kerja dan industri,ini semua bisa terjadi karna kecakapan hidup/ kompetensi yang dibutuhkan tidak dimiliki oleh masyarakat
				</p>
				<p> Untuk itulah kami <b>Lembaga Kursus dan Pelatihan Kristof Multimedia</b> terpacu untuk dapat sedikit berbuat untuk masyarakat dengan membuka program pelatihan bidang komputer dengan harapan anak-anak dengan usia produktif dapat memiliki keahlian bidang komputer sehingga dapat dengan mudah diterima di dunia kerja 
				</p>
				<p>Akhirnya dengan tersusunya profil ini diharapkan masyarakat yang membutuhkan informasi tentang <b>Lembaga Kursus dan Pelatihan Kristof Multimedia</b> bisa mendapatkan informasi secara jelas. </p>
			</div>
		</div>
	</div>
	
	@include("blog.lates")
	
	@include("blog.partner")
	
	@include("blog.contact-info")
	

@endsection