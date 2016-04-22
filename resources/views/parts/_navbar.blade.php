<header>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navigation">
		<div class="container">					
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
					<a href="{{url('')}}"><h1><span>Kristof</span>Multimedia</h1></a>
				</div>
			</div>
			
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="{{url('')}}" class="active">Home</a></li>
						<li role="presentation" class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang Kami <span class="caret"></span></a>
							<ul class="dropdown-menu" role="tablist">
								<li role="presentation"><a href="{{url('tentangkami/sejarah')}}">Sejarah</a></li>
								<li role="presentation"><a href="{{url('tentangkami/visi-misi')}}">Visi dan Misi</a></li>
								<li role="presentation"><a href="{{url('tentangkami/struktur-organisasi')}}">Struktur Organisasi</a></li>
								<li role="presentation"><a href="{{url('tentangkami/sarana-dan-prasarana')}}">Sarana dan Prasarana</a></li>
							</ul>
						</li>
						<li role="presentation" class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Info Kursus <span class="caret"></span></a>
							<ul class="dropdown-menu" role="tablist">
								<li role="presentation"><a href="{{url('info-kursus')}}">Progra Kursus</a></li>
								<li role="presentation"><a href="{{url('info-pendaftaran')}}">Info Pendaftaran</a></li>
								<li role="presentation"><a href="{{url('tata-tertip-peserta')}}">Tata Tertip Peserta Didik</a></li>
								<li role="presentation"><a href="{{url('tata-tertip-pendidik')}}">Tata Tertip Pendidik</a></li>
							</ul>
						</li>
						<!-- <li role="presentation"><a href="portfolio.html">Portfolio</a></li> -->
						<li role="presentation"><a href="{{url('blog')}}">Blog</a></li>
						<li role="presentation"><a href=" {!! url('kontak') !!} ">Kontak</a></li>						
					</ul>
				</div>
			</div>						
		</div>
	</div>	
</nav>
</header>