@extends("user-panel.layouts.master")

@section("title","Success | Stories_Page")

@section("content")
	<!-- Page Header -->
	<div id="page-header">
		<!-- section background -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
		<!-- /section background -->

		<!-- page header content -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-content">
						<div class="col-md-8">
							<h1>Successful Stories </h1>
							<ul class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li><a href="#">Successful Stories</a></li>
							</ul>
						</div>
					</div>

					<div class="navbar-right" style="padding-top:30px;">
						<a href="donate" class="primary-button causes-donate" navbar-left>Donate Now  <i class="fa fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /page header content -->
	</div>
	<!-- /Page Header -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-8">
					<div class="section-title" style="margin-top: -20px;">
						<h2 class="title">You’ve turned their tears into cheers!</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>We’ve been able to bring a change in the lives of hundreds of people including men, women and children with your support. These are the stories of people whose lives have been transformed!</p>
						<a href="donate" class="primary-button">Donate today and change a life forever!</a>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- STORIES -->
	<div id="events" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- stories -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="successstoriesdetail">
								<img src="./img/event-1.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="successstoriesdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						</div>
					</div>
				</div>
				<!-- /stories -->

				<!-- stories -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="successstoriesdetail">
								<img src="./img/event-2.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="successstoriesdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						</div>
					</div>
				</div>
				<!-- /stories -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- stories -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="successstoriesdetail">
								<img src="./img/event-3.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="successstoriesdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						</div>
					</div>
				</div>
				<!-- /stories -->

				<!-- stories -->
				<div class="col-md-6">
					<div class="event">
						<div class="event-img">
							<a href="successstoriesdetail">
								<img src="./img/event-4.jpg" alt="">
							</a>
						</div>
						<div class="event-content">
							<h3><a href="successstoriesdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<ul class="event-meta">
								<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
								<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
							</ul>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						</div>
					</div>
				</div>
				<!-- /stories -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /STORIES -->
@endsection