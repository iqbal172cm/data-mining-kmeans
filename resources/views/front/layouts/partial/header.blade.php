<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="left-menu text-right menu-1">
					<ul>
						<li><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('visimisi') }}">Visi & Misi</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<div id="fh5co-logo"><a href="{{ route('home') }}">
						<span>				
							<img src="{{ asset('assets/front/images/logo.png')  }}" width="30%" alt="">
						</span>	
					</a></div>
				</div>
				<div class="right-menu text-left menu-1">
					<ul>
						<li><a href="{{ route('about') }}">Profil</a></li>
						{{-- <li class="has-dropdown">
							<a href="#">Tools</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li> --}}
						<li><a href="{{ route('contact') }}">Contact</a></li>
						<!-- <li class="btn-cta"><a href="#"><span>Login</span></a></li> -->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{asset('assets/front/images/1111.jpg')}});">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Ikan Berkualitas Indonesia</h1>
							<h2 ><a href="http://perinus.co.id/" >PT. Perikanan Nusantara (persero)</a></h2>
							<form action="http://perinus.co.id/">
								<button class="btn btn-default">Clik Me</button>
							</form>
							{{-- <div class="row">
								<form class="form-inline" id="fh5co-header-subscribe">
									<div class="col-md-6 col-md-offset-3">
										<div class="form-group">
											<button type="submit" class="btn btn-default">Join Now</button>
										</div>
									</div>
								</form>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>