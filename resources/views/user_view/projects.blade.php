@extends('user_view.layouts.master')
@section('content') 

<!-- start page-wrapper -->
<div class="page-wrapper">

	<!-- start preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<img src="assets/images/preloader.gif" alt>
		</div>
	</div>
	<!-- end preloader -->

	<!-- Start header -->
	<header id="header" class="site-header header-style-5">
		<div class="topbar topbar-style-2">
			<div class="container">
				<div class="row">
					<div class="col col-sm-7">
						<div class="topbar-contact-info-wrapper">
							<div class="topbar-contact-info">
								<div>
									<i class="fa fa-location-arrow"></i>
									<div class="details">
										<p>5523 Research Park Drive, Suite 110</p>
									</div>
								</div>
								<div>
									<i class="fa fa-phone"></i>
									<div class="details">
										<p>+012 (3546) 547</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-sm-5">
						<div class="social">
							<span>Follow: </span>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end container -->
		</div> <!-- end topbar -->

		<div class="lower-topbar">
			<div class="container">
				<div class="row">
					<div class="col col-sm-3">
						<div class="site-logo">
							<a href="{{route('bmz')}}"><img src="assets/images/logo-2.png" alt></a>
						</div>
					</div>
					<div class="col col-sm-9">
						<div class="awards">
							<div>
								<div class="icon"><i class="fi flaticon-title"></i></div>
								<div class="award-info">
									<h4>Global Certified</h4>
									<p>ISO 9001:2016</p>
								</div>
							</div>
							<div>
								<div class="icon"><i class="fi flaticon-medal"></i></div>
								<div class="award-info">
									<h4>Winner</h4>
									<p>Construction award 2016</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end lower-topbar -->

		<nav class="navigation navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="open-btn">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse navigation-holder">
					<button class="close-navbar"><i class="fa fa-close"></i></button>
			          			<ul class="nav navbar-nav">
            				<li class="menu-item-has-children">
            					<a href="{{route('bmz')}}">Главная</a>
            				</li>
            				<li><a href="{{route('about_bmz')}}">Около</a></li>
            				<li><a href="{{route('projects_bmz')}}">Проекты</a></li>
            				<li class="menu-item-has-children">
            					<a href="{{route('products_bmz')}}">Продукция</a>

            				</li>
            				<li><a href="{{route('contact_bmz')}}">Контакт</a></li>
            			</ul>
				</div><!-- end of nav-collapse -->


				<a href="{{route('order_bmz')}}" class="theme-btn-s2 request-quote">Оформить заказ</a>

			</div><!-- end of container -->
		</nav> <!-- end navigation -->
	</header>
	<!-- end of header -->


	<!-- start page-title -->
	<section class="page-title">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<h2>Проекты в</h2>
					<ol class="breadcrumb">
						<li><a href="index.html">Главная</a></li>
						<li>Проекты в</li>
					</ol>
				</div>
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section>        
	<!-- end page-title -->


	<!-- recent-project --> 
	<section class="section-padding projects-grid-view-section">
		<div class="container">
			<div class="row">
				<div class="col col-xs-12">
					<div class="projects-grid-view">
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-1.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-2.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-3.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-4.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-5.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-2.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-3.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-4.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
						<div class="grid">
							<div class="project-img">
								<img src="assets/images/projects/img-5.jpg" alt>
							</div>
							<div class="project-info">
								<div class="inner-info">
									<a href="#"><h3>Chemical Refinery</h3></a>
									<div class="tags">Michigan, US</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div> <!-- end container -->
	</section>
	<!-- end recent-project -->        


	@stop