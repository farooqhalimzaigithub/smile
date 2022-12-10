@extends("user-panel.layouts.master")

@section("title","Blog_page")

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
							<h1>Blog</h1>
							<ul class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li><a href="#">Blog</a></li>
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
						<h2 class="title">Welcome To Our Blog Page</h2>
					</div>
					<div class="about-content" style="line-height: 1.9;">
						<p>Explore our blog for healthcare tips, insightful articles and other meaningful resources on charity, online crowdfunding, top NGOs and many other topics you care about.</p>
					</div>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<div class="row">

						<!-- blog -->
						<div class="col-md-12">
							<div class="event">
								<div class="event-img">
									<a href="blogdetail">
										<img src="./img/event-3.jpg" alt="">
									</a>
								</div>
								<div class="event-content">
									<h3><a href="blogdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
									<ul class="event-meta">
										<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
										<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
									</ul>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</div>
							</div>
						</div>
						<!-- /blog -->

						<!-- blog -->	
						<div class="col-md-12">
							<div class="event">
								<div class="event-img">
									<a href="blogdetail">
										<img src="./img/event-4.jpg" alt="">
									</a>
								</div>
								<div class="event-content">
									<h3><a href="blogdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
									<ul class="event-meta">
										<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
										<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
									</ul>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</div>
							</div>
						</div>
						<!-- /blog -->

						<!-- blog -->
						<div class="col-md-12">
							<div class="event">
								<div class="event-img">
									<a href="blogdetail">
										<img src="./img/event-3.jpg" alt="">
									</a>
								</div>
								<div class="event-content">
									<h3><a href="blogdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
									<ul class="event-meta">
										<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
										<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
									</ul>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</div>
							</div>
						</div>
						<!-- /blog -->

						<!-- blog -->	
						<div class="col-md-12">
							<div class="event">
								<div class="event-img">
									<a href="blogdetail">
										<img src="./img/event-4.jpg" alt="">
									</a>
								</div>
								<div class="event-content">
									<h3><a href="blogdetail">Coronavirus: Diagnosis, Symptoms & Prevention</a></h3>
									<ul class="event-meta">
										<li><i class="fa fa-clock-o"></i> 24 October, 2020 | 8:00AM - 11:00PM</li>
										<li><i class="fa fa-map-marker"></i> 2736 Hinkle Deegan Lake Road</li>
									</ul>
									<p>Wuhan, China, Coronavirus, tragedy. These four words have hijacked our TV screens since December 2019. And by the looks of things</p>
								</div>
							</div>
						</div>
						<!-- /blog -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- pagination -->
						<div class="col-md-12">
							<ul class="article-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li>...</li>
								<li><a href="#">12</a></li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
				</main>
				<!-- /MAIN -->

				<!-- ASIDE -->
				<aside id="aside" class="col-md-3">
					<!-- category widget -->
					<div class="widget">
						<h3 class="widget-title">Category</h3>
						<div class="widget-category">
							<ul>
								<li><a href="#">Health<span>(57)</span></a></li>
								<li><a href="#">Food<span>(86)</span></a></li>
								<li><a href="#">Education<span>(241)</span></a></li>
								<li><a href="#">Donation<span>(65)</span></a></li>
								<li><a href="#">Events<span>(14)</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- posts widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Posts</h3>
						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-2.jpg" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->

						<!-- single post -->
						<div class="widget-post">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
								</div>
							</a>
							<ul class="article-meta">
								<li>By John doe</li>
								<li>12 November 2018</li>
							</ul>
						</div>
						<!-- /single post -->
					</div>
					<!-- /posts widget -->

					<!-- causes widget -->
					<div class="widget">
						<h3 class="widget-title">Latest Causes</h3>

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-1.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 64%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-2.jpg" alt="">
								</div>
								<div class="widget-content">
									Vix fuisset tibique facilisis cu. Justo accusata ius at
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 75%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->

						<!-- single causes -->
						<div class="widget-causes">
							<a href="#">
								<div class="widget-img">
									<img src="./img/widget-3.jpg" alt="">
								</div>
								<div class="widget-content">
									Possit nostro aeterno eu vis, ut cum quem reque
									<div class="causes-progress">
										<div class="causes-progress-bar">
											<div style="width: 53%;"></div>
										</div>
									</div>
								</div>
							</a>
							<div>
								<span class="causes-raised">Raised: <strong>52.000$</strong></span> -
								<span class="causes-goal">Goal: <strong>90.000$</strong></span>
							</div>
						</div>
						<!-- /single causes -->
					</div>
					<!-- causes widget -->
				</aside>
				<!-- /ASIDE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->
@endsection

