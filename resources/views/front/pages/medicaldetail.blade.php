@extends("front.layouts.master")

@section("title","Medical | Detail_Page")

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
							<h1>Medical Details Page</h1>
							<ul class="breadcrumb">
								<li><a href="home">Home</a></li>
								<li><a href="medical">Medical</a></li>
								<li><a href="#">Medical Details</a></li>
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

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- MAIN -->
				<main id="main" class="col-md-9">
					<!-- article -->
					<div class="article causes-details">
						<!-- article img -->
						<div class="article-img">
							<img src="./img/post-img.jpg" alt="">
						</div>
						<!-- article img -->

						<!-- causes progress -->
						<div class="clearfix">
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
							<a href="#" class="primary-button causes-donate">Donate Now</a>
						</div>
						<!-- /causes progress -->

						<!-- article content -->
						<div class="article-content">
							<!-- article title -->
							<h2 class="article-title">Possit nostro aeterno eu vis, ut cum quem reque</h2>
							<!-- /article title -->

							<!-- article meta -->
							<ul class="article-meta">
								<li>12 November 2018</li>
								<li>By John doe</li>
								<li>0 Comments</li>
							</ul>
							<!-- /article meta -->

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<!-- /article content -->

						<!-- article tags share -->
						<div class="article-tags-share">
							<!-- article tags -->
							<ul class="tags">
								<li>TAGS:</li>
								<li><a href="#">Charity</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Donation</a></li>
							</ul>
							<!-- /article tags -->

							<!-- article share -->
							<ul class="share">
								<li>SHARE:</li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
							<!-- /article share -->
						</div>
						<!-- /article tags share -->

						<!-- article reply form -->
						<div class="article-reply">
							<h3>Leave a reply</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<form>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Name" type="text">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Email" type="email">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input class="input" placeholder="Website" type="text">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="input" placeholder="Message"></textarea>
										</div>
										<button class="primary-button">Submit</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /article reply form -->
					</div>
					<!-- /article -->
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