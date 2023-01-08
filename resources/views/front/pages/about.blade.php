@extends("front.layouts.master")

@section("title","About_Page")

@section("content")
	<!-- Page Header -->
@include("front.layouts.static_slide");
	<!-- /Page Header -->

	<!-- ABOUT -->

	@foreach ($about as $abouts )
		
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-8 col-md-offset-2" style="margin-top: -40px;">
						<div class="section-title text-center">
							<h2 class="title">{{ $abouts->title }}</h2>
							<p class="sub-title">{{ $abouts->heading }}</p>
						</div>
				</div>
            
            	<!-- /about content -->
	            <div class="col-md-5">
					<div class="section-title">
						<h2 class="title">Brief Description</h2>
					</div>
					<div class="about-content linespace">
						<p>{{ $abouts->about_text }}</p>
						<a href="donate" class="primary-button">Donate Now</a>
					</div>
				</div>
                 <!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-6" style="margin-top: 30px;">
					<a href="#" class="about-video">
							<img src="{{ asset('/public/images/'.$abouts->image) }}" alt="" style="width: 450px; height: 330px;">
						</a>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- ABOUT -->
	@endforeach


	<!-- TESTIMONIAL -->
	<div id="testimonial" class="section" style="margin-top: 70px;">
		<!-- background section -->
		<div class="section-bg" style="background-image: url(./img/background-2.jpg);" data-stellar-background-ratio="0.5"></div>
		<!-- /background section -->

		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- Testimonial owl -->
				<div class="col-md-12">
					<div id="testimonial-owl" class="owl-carousel owl-theme">
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>Sami Khan</h3>
								<span>Volenteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Be a little wise , look for the needy and offer your charity-
                                      Adore the poor who extended you such noble opportunity.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>Muhammad Rizwan Yousaf</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>If you want to know a person’s true character, observe how he treats those who don’t matter.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-1.jpg" alt="">
								</div>
								<h3>Mamoon Khan</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>Compassion is a seed, empathy is the root, kindness is the stem, charity is the tree, and love is the fruit.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<div class="testimonial-img">
									<img src="./img/avatar-2.jpg" alt="">
								</div>
								<h3>Sufyan Ahmed</h3>
								<span>Volunteer</span>
							</div>
							<div class="testimonial-quote">
								<blockquote>
									<p>In a world starving for validity, the truth, when spoken at the right moment, can be one of the purest and most helpful forms of charity.</p>
								</blockquote>
							</div>
						</div>
						<!-- /testimonial -->
					</div>
				</div>
				<!-- /Testimonial owl -->
			</div>
			<!-- /Row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /TESTIMONIAL -->
            
	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">We Served</h2>
					</div>
				</div>

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-smile-o"></i>
						<h3>47k</h3>
						<span>Donors</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-heartbeat"></i>
						<h3>154K</h3>
						<span>Families</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-money"></i>
						<h3>785K</h3>
						<span>Patients</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3>357</h3>
						<span>Students</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	<!-- NUMBERS -->
	<div id="numbers" class="section" style="margin-top: -50px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-12">

					<!-- number -->
					<div class="">
						<div class="number">
							<i class="fa fa-handshake-o" style="font-size: 80px;"></i>
							<h3>Your time and skills could help us in saving a precious life!</h3>
							<a href="donate" class="primary-button">Become a Donor</a>
						</div>
					</div>
					<!-- /number -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->
@endsection
