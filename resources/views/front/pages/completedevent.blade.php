@extends("front.layouts.master")

@section("title","Completed | Event_Page")

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
							<h1>Completed Events </h1>
							<ul class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li><a href="#">Completed Events</a></li>
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

	<!-- CAUSESS -->
	<div id="causes" class="section" style="margin-top: -20px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Completed Events</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019.</p>
					</div>
				</div>
				<!-- section title -->
				@foreach ($event as $events)

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="completedeventdetail">
								<img src="{{ asset('/public/images/'.$events->image) }}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 100%;">
									<span>100%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>{{ $events->raise_price }}</strong></span>
								<span class="causes-goal">Goal: <strong>{{ $events->goal_price }}</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="completedeventdetail">{{ $events->title }}</a></h3>
							<p>{{ $events->description }}</p>
							<a href="completedeventdetail" class="primary-button causes-donate">View Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

			@endforeach
			</div>

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->
@endsection