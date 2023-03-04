@extends('layouts.frontend.master')
@include('layouts.frontend.header')
@section('content')

    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="la la-close"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="la la-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home version 1 </a></li>
                                    <li><a href="index-2.html">Home version 2 </a></li>
                                    <li><a href="index-3.html">Home version 3 </a></li>
                                    <li><a href="index-4.html">Home version 4 </a></li>
                                    <li><a href="index-5.html">Home version 5 </a></li>
                                    <li><a href="index-6.html">Home version 6 </a></li>
                                    <li><a href="index-7.html">Home version 7 </a></li>
                                    <li><a href="index-8.html">Home version 8 </a></li>
                                    <li><a href="index-9.html">Home version 9 </a></li>
                                    <li><a href="index-10.html">Home version 10 </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">shop</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><a href="#">shop layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop.html">standard grid style</a></li>
                                            <li><a href="shop-2.html">standard style 2</a></li>
                                            <li><a href="shop-2-col.html">shop 2 column</a></li>
                                            <li><a href="shop-no-sidebar.html">shop no sidebar</a></li>
                                            <li><a href="shop-fullwide.html">shop fullwide</a></li>
                                            <li><a href="shop-fullwide-no-sidebar.html">fullwide no sidebar </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-list.html">list style</a></li>
                                            <li><a href="shop-list-2col.html">list 2 column</a></li>
                                            <li><a href="shop-list-no-sidebar.html">list no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">product details</a>
                                        <ul class="dropdown">
                                            <li><a href="product-details.html">standard style</a></li>
                                            <li><a href="product-details-2.html">standard style 2</a></li>
                                            <li><a href="product-details-tab1.html">tab style 1</a></li>
                                            <li><a href="product-details-tab2.html">tab style 2</a></li>
                                            <li><a href="product-details-tab3.html">tab style 3 </a></li>
                                            <li><a href="product-details-gallery.html">gallery style </a></li>
                                            <li><a href="product-details-sticky.html">sticky style</a></li>
                                            <li><a href="product-details-slider.html">slider style</a></li>
                                            <li><a href="product-details-affiliate.html">Affiliate style</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="about-us.html">about us </a></li>
                                    <li><a href="cart.html">cart page </a></li>
                                    <li><a href="checkout.html">checkout </a></li>
                                    <li><a href="compare.html">compare </a></li>
                                    <li><a href="wishlist.html">wishlist </a></li>
                                    <li><a href="my-account.html">my account </a></li>
                                    <li><a href="contact.html">contact us </a></li>
                                    <li><a href="login-register.html">login/register </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="#">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">standard style </a></li>
                                    <li><a href="blog-2col.html">blog 2 column </a></li>
                                    <li><a href="blog-sidebar.html">blog sidebar </a></li>
                                    <li><a href="blog-details.html">blog details </a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="la la-angle-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (US)</a></li>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-mobile-curr-lang">
                    <a class="mobile-currency-active" href="#">Currency <i class="la la-angle-down"></i></a>
                    <div class="lang-curr-dropdown curr-dropdown-active">
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">Real</a></li>
                            <li><a href="#">BDT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="la la-angle-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Creat Account</a></li>
                            <li><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="ti-facebook"></i></a>
                <a class="twitter" href="#"><i class="ti-twitter-alt"></i></a>
                <a class="pinterest" href="#"><i class="ti-pinterest"></i></a>
                <a class="instagram" href="#"><i class="ti-instagram"></i></a>
                <a class="google" href="#"><i class="ti-google"></i></a>
            </div>
        </div>
    </div>
    <div class="slider-area">
        <div class="slider-active owl-carousel nav-style-1 dot-style-1 nav-dot-left">
            <div class="single-slider height-100vh bg-img" data-dot="01" style="background-image:url({{ asset('assets/frontend') }}/images/slider/hm1-bg-1.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                            <div class="slider-sin-img-hm1 slider-sin-mrg1 slider-animated-1">
                                <img class="animated" src="{{ asset('assets/frontend') }}/images/slider/hm1-single-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-1 slider-animated-1 ml-70">
                                <h3 class="animated">30% off</h3>
                                <h1 class="animated">Comfort Chair</h1>
                                <p class="animated">Collect from Daxone & get 30% Discount.</p>
                                <div class="slider-btn-1 default-btn btn-hover">
                                    <a class="animated btn-color-theme btn-size-md btn-style-outline" href="product-details.html">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider height-100vh bg-img" data-dot="02" style="background-image:url({{ asset('assets/frontend') }}/images/slider/hm1-bg-1.jpg);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12 col-sm-6">
                            <div class="slider-sin-img-hm1 slider-sin-mrg1 slider-animated-1">
                                <img class="animated" src="{{ asset('assets/frontend') }}/images/slider/hm1-single-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 col-sm-6">
                            <div class="slider-content-1 slider-animated-1 ml-70">
                                <h3 class="animated">30% off</h3>
                                <h1 class="animated">Comfort Chair</h1>
                                <p class="animated">Collect from Daxone & get 30% Discount.</p>
                                <div class="slider-btn-1 default-btn btn-hover">
                                    <a class="animated btn-color-theme btn-size-md btn-style-outline" href="product-details.html">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-area pt-100 pb-100">
        <div class="container">
            <div class="bg-img pt-100 pb-100 learn-banner" style="background-image:url({{ asset('assets/frontend') }}/images/bg/banner-bg-1.jpg);">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-11">
                        <div class="banner-content">
                            <h2>Premium Home <br>Decorator</h2>
                            <a href="product-details.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-135">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2>Best Sell</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
            <div class="product-slider-active owl-carousel">
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-1.jpg" alt="product"></a>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-2.jpg" alt="product"></a>
                        <span class="price-dec">-30%</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                                <span class="old">$230.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-3.jpg" alt="product"></a>
                        <span class="new-stock"><span>Stock <br>Out</span></span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$250.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-4.jpg" alt="product"></a>
                        <span class="price-dec font-dec">NEW</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$320.00</span>
                                <span class="old">$120.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="product-img mb-15">
                        <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-2.jpg" alt="product"></a>
                        <span class="price-dec">-30%</span>
                        <div class="product-action">
                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                            <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                            <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <span>Chair</span>
                        <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                        <div class="price-addtocart">
                            <div class="product-price">
                                <span>$210.00</span>
                                <span class="old">$230.00</span>
                            </div>
                            <div class="product-addtocart">
                                <a title="Add To Cart" href="#">+ Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="discount-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="discount-img">
                        <a href="#">
                            <img src="{{ asset('assets/frontend') }}/images/banner/banner-1.jpg" alt="discount-img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="discount-content">
                        <p>Lorem Ipsum is simply dummy text of the <br>printing and typesetting industry.</p>
                        <h2>Winter Discount <br>Up to 30%</h2>
                        <p class="bright-color">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="discount-btn default-btn btn-hover">
                            <a class="btn-color-theme btn-size-md btn-style-outline" href="product-details.html">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-60">
        <div class="container">
            <div class="section-title text-center mb-40">
                <h2>All Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-1.jpg" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$210.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-2.jpg" alt="product"></a>
                            <span class="price-dec">-30%</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$250.00</span>
                                    <span class="old">$270.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-3.jpg" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$200.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-4.jpg" alt="product"></a>
                            <span class="price-dec font-dec">NEW</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$220.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-5.jpg" alt="product"></a>
                            <span class="new-stock"><span>Stock <br>Out</span></span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$250.00</span>
                                    <span class="old">$260.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-6.jpg" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$260.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-7.jpg" alt="product"></a>
                            <span class="price-dec font-dec">NEW</span>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$240.00</span>
                                    <span class="old">$290.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="product-wrap mb-35">
                        <div class="product-img mb-15">
                            <a href="product-details.html"><img src="{{ asset('assets/frontend') }}/images/product/pro-hm1-8.jpg" alt="product"></a>
                            <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class="la la-plus"></i></a>
                                <a title="Wishlist" href="#"><i class="la la-heart-o"></i></a>
                                <a title="Compare" href="#"><i class="la la-retweet"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <span>Chair</span>
                            <h4><a href="product-details.html">Golden Easy Spot Chair.</a></h4>
                            <div class="price-addtocart">
                                <div class="product-price">
                                    <span>$280.00</span>
                                </div>
                                <div class="product-addtocart">
                                    <a title="Add To Cart" href="#">+ Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
