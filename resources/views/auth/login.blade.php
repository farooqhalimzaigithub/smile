
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- <title>@yield("title")</title> -->
	@Section("title","Login")

	<!-- My css file -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/my.css')}}">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400%7CSource+Sans+Pro:700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('front-assets/css/bootstrap.min.css')}}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{asset('front-assets/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('front-assets/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('front-assets/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('front-assets/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>



	<!-- Page Header -->
	@include("front.layouts.static_slide");
	<!-- /Page Header -->

	<div id="about" class="section">
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer newsletter -->
				<div class="col-md-4">
				</div>
				<div class="col-md-5">
					<div class="footer">
						<!-- section title -->
						<!-- <div class="col-md-8 col-md-offset-2"> -->
						<div class="section-title text-center" style=" margin-top: -20px;">
							<h5 class="sub-title" style="margin-bottom: 40px;">Login to Al-Asmat Foundation</h5>
						</div>
						<!-- /section title -->
						
						<form class="footer-newsletter" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
							  @csrf

							<div class="form-group">
								<input class="input" type="email" placeholder="Enter Email"  name="email">
							</div>

							<div class="form-group">
								<input class="input" placeholder="Enter Password" type="password" name="password">
							</div>

							<button class="primary-button">Login</button>

							<div style="margin-top: 10px;">
						    	<input type="checkbox" checked="checked" name="remember"> Remember Me

						    	<!-- <span class="navbar-right">Forgot <a href="#">Password?</a></span> -->
						    </div><br>

							<!-- <hr class="H1">

							<div class="vl">
		        				<span class="vl-innertext"><b>OR</b></span>
		      				</div><br>

	        				<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button fb"><i class="fa fa-facebook fa-fw"></i>Login With Facebook</button>
								</div>
							</div>
											
							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button twitter"><i class="fa fa-twitter fa-fw"></i>Login With Twitter</button>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<button class="primary-button google"><i class="fa fa-google fa-fw"></i>Login With Google+</button>
								</div>
							</div> -->
						</form>

						<div class="col-md-8 col-md-offset-2">
							<div class="section-title text-center" style="margin-top: 20px;">
								<p class="sub-title">Need New Account? <a href="register"><b>Register Now</b></a>
								</p>
							</div>
						</div>
					</div>
				</div>
					<!-- /footer newsletter -->
			</div>
			<!-- /row -->
		</div>
	</div>
<!-- FOOTER -->
	<footer id="footer" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<!-- <div class="row"> -->
				<!-- footer contact -->
				<!-- <div class="col-md-4">
					<div class="footer">
						<div class="footer-logo">
							<a class="logo" href="{{url('/home')}}"><img src="{{asset('front-assets/logo.jpg')}}" alt=""></a>
						</div>
						<p>Al Asmat Foundation provides free Medical Camp , Education Help & Poverty services across Pakistan to those who cannot afford.</p>
						<ul class="footer-contact">
							<li><i class="fa fa-map-marker"></i> Punjab center Near Chemaa Chowk Phalia Mandi Bahaodin Road  Pakistan</li>
							<li><i class="fa fa-phone"></i> +92(23)-7755002</li>
							<li><i class="fa fa-envelope"></i> <a href="#">AlAsmatFoundation@gmail.com</a></li>
						</ul>
					</div>
				</div> -->
				<!-- /footer contact -->

				<!-- footer galery -->
				<!-- <div class="col-md-4">
					<div class="footer">
						<h3 class="footer-title">Gallery</h3>
						<ul class="footer-galery">
							
							

						</ul>
					</div>
				</div> -->
				<!-- /footer galery -->

				<!-- footer newsletter -->
				<!-- <div class="col-md-4"> -->
					<!-- <div class="footer">
						<h3 class="footer-title">Newsletter</h3>
						<p>Questions? We will reply in 20 minutes!</p>
						<form class="footer-newsletter">
							<input class="input" type="email" placeholder="Enter your email">
							<button class="primary-button">Subscribe</button>
						</form>
						<ul class="footer-social">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div> -->
				<!-- </div> -->
				<!-- /footer newsletter -->
			<!-- </div> -->
			<!-- /row -->

			<!-- footer copyright & nav -->
			<div id="footer-bottom" class="row">
				<div class="col-md-6 col-md-push-6">
					<!-- <ul class="footer-nav">
						<li><a href="home">Home</a></li>
						<li><a href="about">About</a></li>
						<li><a href="donate">Online Donation</a></li>
						<li><a href="faqs">FAQ's</a></li>
						<li><a href="blog">Blog</a></li>
						<li><a href="contact">Contact</a></li>
					</ul> -->
				</div>

				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<span><!-- Link back to Colorlib can't be removed. Template 	is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Al Asmat Foundation. All Rights Reserved. 
						</span>
					</div>
				</div>
			</div>
			<!-- /footer copyright & nav -->
		</div>
		<!-- /container -->
	</footer>
	<!-- jQuery Plugins -->
	<script src="{{asset('front-assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('front-assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front-assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front-assets/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('front-assets/js/main.js')}}"></script>
	<!-- /FOOTER -->