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



                    <a href="#" class="theme-btn-s2 request-quote">Оформить заказ</a>
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Продукция</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Главная</a></li>
                            <li>Продукция</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start blog-with-sidebar -->
        <section class="blog-with-sidebar section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-md-8 col-md-push-4">
                        <div class="news-grids">
                            <h3>{{$product_id->prod_name}}</h3>
                            <div class="entry-media">
                                <img src="{{asset('/assets/upload/product_upload/'.$product_id->prod_picture)}}" alt>
                            </div>
                            <div class="entry-details">
                             
                             <div class="entry-body">
                               <h3>Технические характеристики:</h3>
                               
{!! $product_id->prod_description !!}
                        </div>
                    </div>



                </div> <!-- end news-grids -->

<!--                         <div class="pagination-wrapper">
                            <ul class="pg-pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <i class="fa fa-angle-double-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-md-4 col-md-pull-8 col-sm-5">
                        <div class="widget search-widget">
                            <form class="form">
                                <input type="text" class="form-control" placeholder="Поищи здесь..">
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3>КАТЕГОРИЯ</h3>
                            <ul>
                                @foreach($allcategories as $cat)
                                <li><a href="/products/cat/{{$cat->prod_categoryName}}">{{$cat->prod_categoryName}} <span class="badge"> {{$cat->products->count()}}</span></a></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-section -->               
        @stop