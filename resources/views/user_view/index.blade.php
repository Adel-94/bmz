
@extends('user_view.layouts.master')
@section('content') 

<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
         <!--    <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div> -->
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-3">
            <div class="topbar topbar-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-9">
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
                                              <a class="pdf_products" href="/pdfFiles/catalog.pdf" download>Каталог продукции 
                                 (8 Мб, PDF)
                                  </a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-3">
                            <div class="get-quote">
                                
                                <a href="{{route('order_bmz')}}" class="theme-btn">Оформить заказ</a>
                            </div>
                    
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="site-logo">
                            <a href="index.html"><img src="assets/images/logo-3.png" alt></a>
                        </div>
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
             </div><!-- end of container -->
         </nav> <!-- end navigation -->
     </header>
     <!-- end of header -->


     <!-- start of hero -->   
     <section class="hero hero-slider-wrapper hero-slider-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="assets/images/slider/slide-3.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <div class="btns">
                                <a href="{{route('about_bmz')}}" class="theme-btn">О нас</a>
                                <a href="#" class="theme-btn-s2">Исследовать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="assets/images/slider/slide-1.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">О нас</a>
                                <a href="#" class="theme-btn-s2">Исследовать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="assets/images/slider/slide-3.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Industrial</span> Services worldwide</h2>
                            <p>An unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">О нас</a>
                                <a href="#" class="theme-btn-s2">Исследовать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
    

    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>Балаханский машиностроительный завод</h2>
                    </div>                        
                    <div class="offer-text">
                        <p>Балаханский машиностроительный завод был основан в 1900 году. Бурильная ось установки
                            и специализируется на производстве инструментов, держателей труб, скребков, хомутов, осей,
                            карбюратор, производство барабанов. Площадь завода составляет 3 га. Сегодня
                        На заводе работают 84 человека. Завод имеет сертификат ISO. </p>
                        <a href="{{route('about_bmz')}}" class="theme-btn-s3">Прочитайте больше</a>
                        <!--   <a href="about.html" class="theme-btn-s4">История компании </a> -->
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="assets/images/offer-pic.jpg" alt>
                    </div>
                </div>
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



    <!-- start contact-section -->
    <section class="contact-section section-padding parallax" data-bg-image="assets/images/contact-section-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-md-offset-1 col-md-5">
                    <div class="contact-section-contact-box">
                        <div class="section-title-white">
                            <h2>Kонтакт</h2>
                        </div>
                        <div class="details">
                            <p>Для получения любого запроса свяжитесь с нами, используя приведенные ниже сведения.</p>
                            <ul>
                             <li><i class="fa fa-home"></i>Город Баку Поселение Балаханы 3-я шахта</li>
                             <li><i class="fa fa-phone"></i>Tel: +994 12 451-16-95 </li>
                             <li><i class="fa fa-fax"></i>Faks: +994 12 451-16-96</li>
                             <li><i class="fa fa-envelope"></i>Balaxanı-mash@yandex.ru</li>
                         </ul>
                     </div>
                 </div>
             </div>

             <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                <div class="section-title-white">
                    <h2>Связь с дирекцией</h2>
                </div>   
                <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</p>

                <div class="contact-form-s1 form" style="margin-bottom: 15px;">
                    <form method="post" action="/postMessage"  class="wpcf7-form">
                           {{ csrf_field() }}
                        <div>
                            <label for="name">ПОЛНОЕ ИМЯ</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div>
                            <label for="email">ЭЛ. АДРЕС</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div>
                            <label for="phone">НОМЕР ТЕЛЕФОНА</label>
                            <input type="text" id="phone" name="phone">
                        </div>
                        <div class="col col-sm-12">
                            <label for="message">Текст сообщения</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                        
                        <div class="submit-btn-wrap">
                            <input value="Отправить" class="theme-btn wpcf7-submit" type="submit">
                        
                        </div>
                      
                    </form>

         
                </div> 
                             @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                     {{ $message }}
                 </div>
                 @endif
                 @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif                    
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end contact-section -->


<!-- news-section -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-3 col-md-4">
                <div class="section-title">
                    <h2>Свежие новости</h2>
                </div>
            </div>
            <div class="col col-lg-6 col-md-5">
            
            </div>
            <div class="col col-lg-3 col-md-3">
             
        </div>
    </div> <!-- end row -->

    <div class="row">
        <div class="col col-xs-12">
            <div class="news-grids">
                <div class="grid">
                    <div class="entry-media">
                        <img src="assets/images/blog/img-1.jpg" alt>
                    </div>
                    <div class="entry-details">
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                <li><i class="fa fa-comments"></i><a href="#">2 Комментарии</a></li>
                            </ul>
                        </div>
                        <div class="entry-body">
                            <h3><a href="#">China's industrial profits grow faster in first eight months</a></h3>
                            <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="entry-media">
                        <img src="assets/images/blog/img-2.jpg" alt>
                    </div>
                    <div class="entry-details">
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                <li><i class="fa fa-comments"></i><a href="#">2 Комментарии</a></li>
                            </ul>
                        </div>
                        <div class="entry-body">
                            <h3><a href="#">Exploring the wild side in an industrial jungle</a></h3>
                            <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="entry-media">
                        <img src="assets/images/blog/img-3.jpg" alt>
                    </div>
                    <div class="entry-details">
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                <li><i class="fa fa-comments"></i><a href="#">2 Комментарии</a></li>
                            </ul>
                        </div>
                        <div class="entry-body">
                            <h3><a href="#">Bus drivers in Liverpool vote for industrial action</a></h3>
                            <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end container -->        
</section>
<!-- end news-section -->
@stop

