@extends("front.layouts.master")

@section("title","Completed | Event_Page")

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