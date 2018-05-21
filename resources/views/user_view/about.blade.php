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
										<p>Город Баку Поселение Балаханы 3-я шахта</p>  
									</div>
								</div>
								<div>
									<i class="fa fa-phone"></i>
									<div class="details">
										<p>+994 12 451-16-95</p>
										<span>balaxanı-mash@yandex.ru</span>
									</div>
								</div>
							</div>
						</div>
					</div>
                        <div class="col col-sm-5"><!-- 
                            <div class="social">
                                <span>Follow: </span>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div> -->
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
<!--                             <div class="awards">
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
                            </div> -->
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
        				<h2>О нас
        				</h2>
        				<ol class="breadcrumb">
        					<li><a href="index.html">Главная</a></li>
        					<li>О нас
        					</li>
        				</ol>
        			</div>
        		</div> <!-- end row -->
        	</div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start offer -->
        <section class="section-padding offer-section">
        	<div class="container">
        		<div class="row">
        			<div class="col col-md-12">
        				<div class="section-title-s3">
        					<h2>Балаханский машиностроительный завод</h2>
        				</div>                        
        				<div class="offer-text">
        					<p style="text-align:  center;">{{$about->about_text}} </p>
        					
        				</div>
        			</div>
<!--                     <div class="col col-md-7">
                        <div class="offer-pic">
                            <img src="assets/images/offer-pic.jpg" alt>
                        </div>
                    </div> -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end offer -->  


        <!-- start cta -->
        <section class="cta section-padding parallax" data-bg-image="assets/images/cta-bg.jpg">
        	<div class="container">
        		<div class="row">
        			<div class="col col-xs-12">
        				<h2>Our one and only priority is the <span>customer satisfaction</span></h2>
        				<a href="{{route('order_bmz')}}" class="theme-btn-s5">Оформить заказ</a>
        			</div>
        		</div>
        	</div> <!-- end container -->
        </section>
        <!-- end cta -->


        <!-- start features --> 
        <section class="features section-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col col-md-3">
        				<div class="features-title">
        					<h2>Почему мы лучше всего</h2>
        					<p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmod tempor.</p>
        				</div>
        			</div>
        			<div class="col col-md-3 col-sm-4">
        				<div class="feature-grid">
        					<div class="icon">
        						<i class="fi flaticon-people"></i>
        					</div>
        					<div class="details">
        						<h3>Экспертные Инженеры</h3>
        						<p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
        						<a href="#" class="more">Детали <i class="fa fa-angle-right"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col col-md-3 col-sm-4">
        				<div class="feature-grid">
        					<div class="icon">
        						<i class="fi flaticon-support"></i>
        					</div>
        					<div class="details">
        						<h3>Служба Поддержки</h3>
        						<p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
        						<a href="#" class="more">Детали <i class="fa fa-angle-right"></i></a>
        					</div>
        				</div>
        			</div>
        			<div class="col col-md-3 col-sm-4">
        				<div class="feature-grid">
        					<div class="icon">
        						<i class="fi flaticon-time-passing"></i>
        					</div>
        					<div class="details">
        						<h3>Доставка по времени</h3>
        						<p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.</p>
        						<a href="#" class="more">Детали <i class="fa fa-angle-right"></i></a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div> <!-- end container -->
        </section> 
        <!-- end features -->


        <!-- start our-team -->
        <!-- SILIN OUR TEAM -->
        <!-- end our-team -->


        <!-- start fun-fact -->
        <section class="fun-fact">
        	<div class="container">
        		<div class="row start-count">
        			<div class="col col-sm-4">
        				<div class="grid">
        					<h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
        					<span class="fact-title">Проекты времени</span>
        					<p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        				</div>
        			</div>
        			<div class="col col-sm-4">
        				<div class="grid">
        					<h3><span class="counter" data-count="800">00</span><span>+</span></h3>
        					<span class="fact-title">Kлиенты</span>
        					<p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        				</div>
        			</div>
        			<div class="col col-sm-4">
        				<div class="grid">
        					<h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
        					<span class="fact-title">Yдовлетворение</span>
        					<p>inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam</p>
        				</div>
        			</div>
        		</div>
        	</div> <!-- end container -->
        </section>
        <!-- end fun-fact -->


        <!-- start partners -->
        <section class="section-padding partners partners-bg">
        	<h2 class="hidden">Partners</h2>
        	<div class="container">
        		<div class="row">
        			<div class="col col-xs-12">
<!--                         <div class="partners-slider">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.png" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.png" alt>
                            </div>
                        </div> -->
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end partners -->

        @stop