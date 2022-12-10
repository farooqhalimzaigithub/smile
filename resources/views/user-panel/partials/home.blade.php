@extends("user-panel.layouts.master")

@section("title","Home_Page")

@section("content")
	<!-- HOME OWL -->
	<div id="home-owl" class="owl-carousel owl-theme">
		<!-- home item -->
		<div class="home-item">
			<!-- section background -->
			<div class="section-bg" style="background-image: url('assets/img/slide.jpeg');">
			</div>
			<!-- /section background -->

			<!-- home content -->
			<div class="home">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="home-content">
								<!-- h1 style="color: black;">Save The Humanity</h1>
								<p class="lead">Join hands with us in improving the health and well-being
                                of people by providing them best</p> -->
								<a href="donate" class="primary-button">Donate Now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /home content -->
		</div>
		<!-- /home item -->

		<!-- home item -->
		<div class="home-item">
			<!-- Background Image -->
			<div class="section-bg" style="background-image: url('assets/img/slide.jpeg');">
			</div>
			<!-- /Background Image -->

			<!-- home content -->
			<div class="home">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="home-content">
								<h1>Become A Donor</h1>
								<!-- <p class="lead">Smile Charity is always looking for the talented people with various skills and backgrounds. If you want to create a real difference in the lives of underprivileged people of Pakistan, we welcome you among our team. Our objective is to offer rewarding volunteer programs to those who have time and commitment to support our community. Smile Charity is committed to providing meaningful volunteer experience to the individuals with skills and education to support our noble cause.</p> -->
								<a href="donate" class="primary-button">Join Us Now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /home content -->
		</div>
		<!-- /home item -->
	</div>
	<!-- /HOME OWL -->

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- about content -->
				<div class="col-md-6" style="margin-top: -35px">
					<div class="section-title">
						<h2 class="title">WE NEED YOUR DONATIONS</h2>
						<p class="sub-title">The Time To Help And Give Zakat, Sadaqah, Charity Is Now</p>
					</div>
					<div class="about-content linespace">
						<p>Charitable giving is one of the most rewarding and honorable things you can do. Companies that donate and individuals who choose to give back as well not only are making a difference in someone's life but in the process are heros for doing it. Giving without receiving is not easy for many to do although it should be. Because of this generosity, the government gives back to you with a donation tax write off. Donations come in the form of one time donations or monthly donations to charity.</p>
						<a href="donate" class="primary-button">Donate Now!</a>
					</div>
				</div>
				<!-- /about content -->

				<!-- about video -->
				<div class="col-md-offset-1 col-md-5">
					<a href="#" class="about-video">
						<i class="play-icon fa fa-play"></i>
						<img src="{{asset('assets/img/about.jpg')}}" alt="">
					</a>
				</div>
				<!-- /about video -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- NUMBERS -->
	<div id="numbers" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
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
						<span>Children Saved</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-money"></i>
						<h3>785K</h3>
						<span>Donated</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-md-3 col-sm-6">
					<div class="number">
						<i class="fa fa-handshake-o"></i>
						<h3>357</h3>
						<span>Volunteers</span>
					</div>
				</div>
				<!-- /number -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /NUMBERS -->

	<!-- CAUSESS -->
	<div id="causes" class="section" style="margin-top: -100px;">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- section title -->
				<div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Program Plans</h2>
						<!-- <p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p> -->
					</div>
				</div>
				<!-- section title -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="educationdetail">
									<img src="{{asset('assets/water.jpeg')}}" alt=""  width="300" height="200">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<!-- <div style="width: 87%;">
									<span>87%</span>
								</div> -->
							</div>
							<div>
								<!-- <span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span> -->
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="educationdetail">Water</a></h3>
							<p>we provide water  looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="educationdetail">
									<img src="{{asset('assets/daster.jpeg')}}" alt="" width="300" height="200">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<!-- <div style="width: 53%;">
									<span>53%</span>
								</div> -->
							</div>
							<div>
								<!-- <span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span> -->
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="educationdetail">Daster khwan </a></h3>
							<p>provides to hungry people</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="educationdetail">
								<img src="{{asset('assets/hospital.jpeg')}}" alt="" width="300" height="200">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<!-- <div style="width: 72%;">
									<span>72%</span>
								</div> -->
							</div>
							<div>
								<!-- <span class="causes-raised">Raised: <strong>52.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span> -->
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="educationdetail">Hospital </a></h3>
							<p>Save the humanity</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- <div class="col-md-12"> -->
					<!-- number -->
					<!-- <div class="">
						<div class="number">
							<a href="education" class="primary-button" style="background-color: #dd4b39;">VIEW ALL EDUCATION HELP</a>
						</div>
					</div> -->
					<!-- /number -->
				<!-- </div> -->

				<!-- <div class="clearfix visible-md visible-lg"></div> -->

				<!-- section title -->
				<!-- <div class="col-md-8 col-md-offset-2" style="margin-top: 20PX;">
					<div class="section-title text-center">
						<h2 class="title">Medical Help</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
					</div>
				</div> -->
				<!-- section title -->

				<!-- causes -->
				<!-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="medicaldetail">
								<img src="{{asset('assets/img/post-4.jpg')}}" alt="">
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
							<h3><a href="medicaldetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- causes -->
				<!-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="medicaldetail">
								<img src="{{asset('assets/img/post-5.jpg')}}" alt="">
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
							<h3><a href="medicaldetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- causes -->
			<!-- 	<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="medicaldetail">
								<img src="{{asset('assets/img/post-6.jpg')}}" alt="">
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
							<h3><a href="medicaldetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- <div class="col-md-12"> -->
					<!-- number -->
					<!-- <div class="">
						<div class="number">
							<a href="medical" class="primary-button" style="background-color: #dd4b39;">VIEW ALL MEDICAL HELP</a>
						</div>
					</div> -->
					<!-- /number -->
				<!-- </div> -->

				<!-- <div class="clearfix visible-md visible-lg"></div> -->

				<!-- section title -->
				<!-- <div class="col-md-8 col-md-offset-2" style="margin-top: 20PX;">
					<div class="section-title text-center">
						<h2 class="title">Poverty</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
					</div>
				</div> -->
				<!-- section title -->

				<!-- causes -->
				<!-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="povertydetail">
								<img src="{{asset('assets/img/post-4.jpg')}}" alt="">
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
							<h3><a href="povertydetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- causes -->
				<!-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="povertydetail">
								<img src="{{asset('assets/img/post-5.jpg')}}" alt="">
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
							<h3><a href="povertydetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- causes -->
				<!-- <div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="povertydetail">
								<img src="{{asset('assets/img/post-6.jpg')}}" alt="">
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
							<h3><a href="povertydetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div> -->
				<!-- /causes -->

				<!-- <div class="col-md-12"> -->
					<!-- number -->
					<!-- <div class="">
						<div class="number">
							<a href="poverty" class="primary-button" style="background-color: #dd4b39;">VIEW ALL POVERTY CAUSES</a>
						</div>
					</div> -->
					<!-- /number -->
				<!-- </div> -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->

	<!-- CTA -->
	<!-- <div id="cta" class="section"> -->
		<!-- background section -->
		<!-- <div class="section-bg" style="background-image: url({{asset('assets/img/background-1.jpg')}});" data-stellar-background-ratio="0.5"></div> -->
		<!-- /background section -->

		<!-- container -->
		<!-- <div class="container"> -->
			<!-- row -->
			<!-- <div class="row"> -->
				<!-- cta content -->
				<!-- <div class="col-md-offset-2 col-md-8">
					<div class="cta-content text-center">
						<h1>Become A Donor</h1>
						<p class="lead">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
						<a href="donate" class="primary-button">Join Us Now!</a>
					</div>
				</div> -->
				<!-- /cta content -->
			<!-- </div> -->
			<!-- /row -->
		<!-- </div> -->
		<!-- /container -->
	<!-- </div> -->
	<!-- /CTA -->

	<!-- EVENTS -->
	<!-- <div id="events" class="section"> -->
		<!-- container -->
		<!-- <div class="container"> -->
			<!-- row -->
			<!-- <div class="row"> -->
				<!-- section title -->
				<!-- <div class="col-md-8 col-md-offset-2">
					<div class="section-title text-center">
						<h2 class="title">Upcoming Events</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
					</div>
				</div> -->
				<!-- /section title -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="{{asset('assets/img/post-1.jpg')}}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 87%;">
									<span>87%</span>
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
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
									<img src="{{asset('assets/img/post-2.jpg')}}" alt="">
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
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="{{asset('assets/img/post-3.jpg')}}" alt="">
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
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="upcomingeventdetail">
								<img src="{{asset('assets/img/post-5.jpg')}}" alt="">
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
				</div> -->
				<!-- /Event -->

				<!-- <div class="col-md-12"> -->
					<!-- number -->
					<!-- <div class="">
						<div class="number">
							<a href="upcomingevent" class="primary-button" style="background-color: #dd4b39;">VIEW ALL UPCOMING EVENT</a>
						</div>
					</div> -->
					<!-- /number -->
				<!-- </div> -->

				<!-- <div class="clearfix visible-md visible-lg"></div> -->

				<!-- section title -->
				<!-- <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
					<div class="section-title text-center">
						<h2 class="title">Completed Events</h2>
						<p class="sub-title">Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
					</div>
				</div> -->
				<!-- /section title -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="completedeventdetail">
								<img src="{{asset('assets/img/post-1.jpg')}}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 100%;">
									<span>100%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>90.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="completedeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="completedeventdetail" class="primary-button causes-donate">View Now</a>
						</div>
					</div>
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="completedeventdetail">
									<img src="{{asset('assets/img/post-2.jpg')}}" alt="">
								</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 100%;">
									<span>100%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>90.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="completedeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="completedeventdetail" class="primary-button causes-donate">View Now</a>
						</div>
					</div>
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="completedeventdetail">
								<img src="{{asset('assets/img/post-3.jpg')}}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 100%;">
									<span>100%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>90.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="completedeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="completedeventdetail" class="primary-button causes-donate">View Now</a>
						</div>
					</div>
				</div> -->
				<!-- /Event -->

				<!-- Event -->
				<!-- <div class="col-md-3">
					<div class="causes">
						<div class="causes-img">
							<a href="completedeventdetail">
								<img src="{{asset('assets/img/post-5.jpg')}}" alt="">
							</a>
						</div>
						<div class="causes-progress">
							<div class="causes-progress-bar">
								<div style="width: 100%;">
									<span>100%</span>
								</div>
							</div>
							<div>
								<span class="causes-raised">Raised: <strong>90.000$</strong></span>
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<div class="causes-content">
							<h3><a href="completedeventdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="completedeventdetail" class="primary-button causes-donate">View Now</a>
						</div>
					</div>
				</div> -->
				<!-- /Event -->

				<!-- <div class="col-md-12"> -->
					<!-- number -->
					<!-- <div class="">
						<div class="number">
							<a href="completedevent" class="primary-button" style="background-color: #dd4b39;">VIEW ALL COMPLETED EVENT</a>
						</div>
					</div> -->
					<!-- /number -->
				<!-- </div> -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /EVENTS -->


	<!-- /WHO ARE WES -->

	<!-- BLOG -->
	
	<!-- /BLOG -->
@endsection