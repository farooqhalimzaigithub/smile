@extends("front.layouts.master")

@section("title","Upcoming | Event_Page")

@section("content")
	<!-- Page Header -->
	@include("front.layouts.static_slide");
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
						<h2 class="title">Upcoming Events</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2023.</p>
					</div>
				</div>
				<!-- section title -->

				@foreach ($event as $events)
					

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="{{ asset('/public/images/'.$events->image) }}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 87%;">
									<span>87%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>{{ $events->raise_price }}</strong></span>
								<span class="causes-goal">Goal: <strong>{{ $events->goal_price }}</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">{{ $events->title }}</a></h3>
							<p>{{ $events->description }}</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>

				@endforeach

				<!-- /causes -->

				<!-- causes -->
				{{-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
									<img src="./img/post-2.jpg" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="./img/post-3.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<div class="clearfix visible-md visible-lg"></div>

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="./img/post-4.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 64%;">
									<span>64%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="./img/post-5.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 72%;">
									<span>72%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="./img/post-6.jpg" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 53%;">
									<span>53%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="upcomingeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> --}}
				<!-- /causes -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->
@endsection