<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>@yield("title")</title>

	<!-- My css file -->
	<link rel="stylesheet" type="text/css" href="css/my.css">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('assets/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<div class="container-fluid" style="background-color:#17202A;">
		<div class="row">
			<div class="col-md-12" style=" color: white; padding-top:20px;">
				<marquee onmouseover="stop()" onmouseout="start()">
					<p>Smile Charity provides free Medical Help , Education & Poverty across Pakistan.
					</p>
				</marquee>
			</div>

			<!-- <div class="col-md-4" style="padding-top:7px;">
					<a href="login" class="primary-button causes-donate" navbar-left>Login</a>

					<a href="register" class="primary-button causes-donate" navbar-left>Sign Up</a>
			</div> -->
		</div>
		<!-- Logo -->
	</div>
	<!-- /HEADER -->

	<!-- HEADER -->
	<header id="home">
		<!-- NAVGATION -->
		<nav id="main-navbar">
			<div class="container">
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="home"><img src="{{asset('assets/images/logo.jpg')}}" alt="logo"></a>
					</div>
					<!-- Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle-btn">
						<i class="fa fa-bars"></i>
					</button>
					<!-- Mobile toggle -->

					<!-- Mobile Search toggle -->
					<button class="search-toggle-btn">
						<i class="fa fa-user" style="font-size:25px;color:#78ab0c"></i>
					</button>
					<!-- Mobile Search toggle -->
				</div>

				<!-- Search -->
				<div class="navbar-search">
					<button class="search-btn"><i class="fa fa-user" style="font-size:25px;color:#78ab0c"></i></button>
					<div class="search-form">
						<!-- <form>
							<input type="submit" style="background-color: #78ab0c; color: white;" class="input" name="" value="LOGIN" formaction="/login">
							<input type="submit" style="background-color: #78ab0c; color:white; " class="input" name="" value="REGISTER" formaction="/register">	

							<a href="login" class="primary-button">LOGIN NOW ►<i class="fa fa-arrow-right"></i></a>

							<a href="register" class="primary-button">REGISTER NOW ►<i class="fa fa-arrow-right"></i></a>

							<input class="input" type="text" name="search" placeholder="Username">

							<input class="input" type="text" name="search" placeholder="Password">
						</form> -->
						@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
					</div>
				</div>
				<!-- Search -->

				<!-- Nav menu -->
				<ul class="navbar-menu nav navbar-nav navbar-right">
					<li><a href="home">Home</a></li>
					<li><a href="about">About</a></li>
					<li class="has-dropdown"><a href="donation">Donations</a>
						<ul class="dropdown">
							<li><a href="education">Education</a></li>
							<li><a href="medical">Medical</a></li>
							<li><a href="poverty">Poverty</a></li>
						</ul>
					</li>
					<li class="has-dropdown"><a href="#">Events</a>
						<ul class="dropdown">
							<li><a href="upcomingevent">Upcoming Events</a></li>
							<li><a href="completedevent">Completed Events</a></li>
						</ul>
					</li>
					<li><a href="blog">Blog</a></li>
					<li><a href="contact">Contact Us</a></li>
				</ul>
				<!-- Nav menu -->
			</div>
		</nav>
		<!-- /NAVGATION -->
	</header>
	<!-- /HEADER -->

	@yield("content")

	<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer contact -->
				<div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="index"><img src="{{asset('assets/images/logo.jpg')}}" alt=""></a>
						</div>
						<p>Smile Charity provides free Medical Camp , Education Help & Poverty services across Pakistan to those who cannot afford.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> Peshawar Road Rawalpindi Pakistan</li>
							<li><i class="fa fa-phone"></i> +92(43)-539-1592</li>
							<li><i class="fa fa-envelope"></i> <a href="#">SmileCharity@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer contact -->

				<!-- footer galery -->
				<!-- <div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Galery</h3>
						<ul class="footer-galery">
							<li><a href="#"><img src="./img/galery-1.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-2.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-3.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-4.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-5.jpg" alt=""></a></li>
							<li><a href="#"><img src="./img/galery-6.jpg" alt=""></a></li>
						</ul>
					</div>
				</div> -->
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Questions? We will reply in 20 minutes!</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer newsletter -->
			</div>
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<!-- <div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="home">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="donate">Online Donation</a></li>
						<li><a href="faqs">FAQ's</a></li>
						<li><a href="blog">Blog</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div> -->

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template 	is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Smile Charity. All Rights Reserved. 
						</span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
