@extends("user-panel.layouts.master")

@Section("title","Donate | Now_page ")

@Section("content")
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
							<h1>Donate Now</h1>
								<ul class="breadcrumb">
									<li><a href="home">Home</a></li>
									<li><a href="#">Donate Now</a></li>
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

	@if (session('status'))
	<div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
	   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	   <strong> {{ session('status') }} </strong>
	</div>
  @endif

	<!-- ABOUT -->
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- about video -->
				<div class="col-md-offset-1 col-md-4" style="margin-bottom: 100px;">
					<a href="#" class="about-video">
							<img src="./img/a1.jpg" alt="">
						</a>
				</div>
				<!-- /about video -->

				<!-- about content -->
				<div class="col-md-7" style="margin-top: -30px">
					<form action="{{ route('donation') }}" method="post" class="footer-newsletter">
						@csrf
						<div class="section-title">
							<h3 class="abc9">Personal Information</h3>
							<hr style="border-top:2px dashed #78ab0c">
						</div>

						<div class="form-group">
							<input class="input" placeholder="Enter Full Name*" type="name" name="name">
						</div>

						<div class="form-group">
							<input class="input" placeholder="Enter Email Adress*" type="email" name="email">
						</div>

						<div class="section-title">
							<h3 class="abc9">Donation Information</h3>
							<hr style="border-top:2px dashed #78ab0c">
						</div>

						<div class="form-group">
							<input class="input" placeholder="Enter Your Amount*" type="number" name="amount">
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<input style="color:black" class="input btn btn-success" type="submit" value="Donate">
							</div>
						</div>
						<br><br>
{{-- 
						<div class="col-md-3">
							<div class="form-group">
								<input class="input" type="submit" value="Education Help">
							</div>
						</div>
										
						<div class="col-md-3">
							<div class="form-group">
								<input class="input" type="submit" value="Medical Camps">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<input class="input" type="submit" value="Poverty">
							</div>
						</div> --}}

						<div class="section-title">
							<h3 class="abc9">Select Payment Method</h3>
							<hr style="border-top:2px dashed #78ab0c">
						</div>
					</form>
				</div>
				<!-- /about content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /ABOUT -->
@endSection
