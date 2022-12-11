@extends("front.layouts.master")

@section("title","DasterKhwan")

@section("content")
	<!-- Page Header -->
	@include("front.layouts.static_slide");
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
						<h2 class="title">Giving every child the right to education</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>Pakistan is facing a serious challenge to ensure all children, particularly the most disadvantaged, attend, stay and learn in school. While enrollment and retention rates are improving, progress has been slow to improve education indicators in Pakistan.An estimated 22.8 million children aged 5-16 are out-of-school.</p>
						<a href="{{route('donations.create')}}" class="primary-button">Click to donate and send a child to school</a>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- CAUSESS -->
	<div id="causes" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="educationdetail">
								<img src="./img/post-1.jpg" alt="">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="{{route('donations.create')}}" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->

				<!-- causes -->
				<div class="col-md-4">
					<div class="causes">
						<div class="causes-img">
							<a href="educationdetail">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
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
							<a href="educationdetail">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
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
							<a href="educationdetail">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
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
							<a href="educationdetail">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
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
							<a href="educationdetail">
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
							<h3><a href="educationdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
							<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
					</div>
				</div>
				<!-- /causes -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /CAUSESS -->
@endsection