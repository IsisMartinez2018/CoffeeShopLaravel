<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Cappuccino Coffee Restaurants Category Bootstrap Responsive Template | Portfolio :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cappuccino Coffee Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap(2).css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all">
	<!-- Lightbox -->
	<link rel="stylesheet" href="css/style(2).css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all(2).css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Arizonia&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Timmana&amp;subset=telugu" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- logo -->
			<h1>
				<a class="navbar-brand" href="index.html">Cappuccino
					<span>Coffee</span>
				</a>
			</h1>
			<!-- //logo -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/IM/public/homevista">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="/IM/public/aboutus">About Us</a>
					</li>
					<li class="nav-item dropdown mr-lg-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/IM/public/menu">Menu</a>
							<a class="dropdown-item" href="/IM/public/homevista/#services">Services</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/IM/public/aboutus">Team</a>
						</div>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/IM/public/gallery">Gallery</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="/IM/public/menu">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('orders.create') }}">Pedidos&nbsp;</a>
					</li>
					@if (Auth::guard('web')->check())
<li class="nav-item dropdown mr-lg-4">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             Bienvenido, usuario &nbsp;{{ Auth::user()->name }}

                        <img src="{{ URL::asset("/images/cup.png") }}" style="top: 130px; left: 650px;height: 30px; width: 30px; border:none;"></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/IM/public/login">Perfil</a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('user.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a><form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                        </div>
                </li>

@else

					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('login')}}">Login</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('register')}}">Registrate</a>
					</li>

					@endif
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- inner banner -->
	<div class="banner-2">

	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Gallery</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //inner banner -->

	<!-- gallery -->
	<div class="gallery-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			<h5 class="tittle-w3 text-dark text-center mb-5">Gallery</h5>
			<div class="row gallery-agile-kmsrow">
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g7.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g2.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g3.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g4.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g5.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g6.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g1.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g8.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 gallery-agile-grids">
					<div class="portfolio-hover">
						<a href="images/g9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
							<img src="images/g9.jpg" class="img-fluid zoom-img" alt="" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->

	<!-- footer -->
	<footer>
		<div class="w3ls-footer-grids py-5">
			<div class="container py-lg-2">
				<div class="row">
					<div class="col-lg-3 col-sm-6 w3l-footer one">
						<h2 class="index.html mb-3">Cappuccino Coffee</h2>
						<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-2 col-sm-6 w3l-footer agileinfo_footer_grid my-sm-0 my-4">
						<h3 class="mb-3">Navigation</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li class="mb-2">
									<a href="index.html">Home</a>
								</li>
								<li class="mb-2">
									<a href="about.html" class="">About Us</a>
								</li>
								<li class="mb-2">
									<a href="menu.html" class="">Menu</a>
								</li>
								<li class="mb-2">
									<a href="gallery.html" class="">Gallery</a>
								</li>
								<li>
									<a href="contact.html" class="">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer two mt-lg-0 mt-sm-5">
						<h3 class="mb-3">Connect With</h3>
						<ul class="list-unstyled">
							<li class="mb-3">
                                <a class="fb" href="#">
                                    <i class="fab fa-facebook-f"><img src="{{ url('svg/facebook.svg') }}" style="width: 20px; height: 23px"></i>Like us on Facebook</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb1" href="#">
                                    <i class="fab fa-twitter"><img src="{{ url('svg/twitter.svg') }}" style="width: 20px; height: 23px"></i>Follow us on Twitter</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb2" href="#">
                                    <i class="fab fa-google-plus-g"><img src="{{ url('svg/google-plus.svg') }}" style="width: 20px; height: 23px"></i>Add us on Google Plus</a>
                            </li>
                            <li>
                                <a class="fb3" href="#">
                                    <i class="fab fa-dribbble"><img src="{{ url('svg/instagram.svg') }}" style="width: 20px; height: 23px"></i>Follow us on Instagram</a>
                            </li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-6 w3l-footer three mt-lg-0 mt-4">
						<h3 class="mb-3">Address</h3>
						<ul class="list-unstyled">
							 <li>
                                <img src="{{ url('images/home.png') }}" style="width: 55px; height: 55px">
                                <p>The company name
                                    <span>Lorem ipsum dolor,</span>New York,Morris Park. </p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="my-2">
                                <img src="{{ url('images/map.png') }}" style="width: 35px; height: 35px">
                                <p> &nbsp;1234567890</p>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <img src="{{ url('images/agenda.png') }}" style="width: 25px; height: 25px">
                                <a href="mailto:info@example.com">&nbsp; mail@example.com</a>
                                <div class="clearfix"></div>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right-grids py-3">
			<p class="footer-gd text-center text-white">© 2018 Cappuccino Coffee. All Rights Reserved | Design by
				<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
			</p>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!--  light box js -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //light box js-->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/coffee.js"></script>

	<!-- //Js files -->

</body>

</html>