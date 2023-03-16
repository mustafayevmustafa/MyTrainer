<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/Frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/vendor/themify.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/Frontend') }}/css/style.css">
</head>
<body>
<div class="main-wrapper">
<header class="header-area transparent-bar sticky-bar">
    <div class="main-header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo mt-40">
                        <a href="index.html"><img src="{{ asset('assets/Frontend') }}/images/logo/logo-1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="main-menu menu-common-style menu-lh-1 menu-other-style">
                        <nav>
                            <ul>
                                <li class="angle-shape"><a href="index.html">Əsas Səhifə</a>

                                </li>
                                <li class="angle-shape"><a href="shop.html">MyTrainer </a>
                                    <ul class="submenu">

                                            <ul>
                                                <li><a href="shop.html">Qadın Trainer</a></li>
                                                <li><a href="shop-2.html">Kişi Trainer</a></li>


                                            </ul>
                                        </li>


                                    </ul>
                                </li>
                                <li  class="angle-shape"><a href="shop.html">Fitnes Zallar</a></li>
                                <li class="angle-shape"><a href="#">Haqqımızda</a>

                                </li>
                                <li class="angle-shape"><a href="blog.html">Blog</a>

                                </li>
                                <li  class="angle-shape"><a href="contact.html">Əlaqə</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-1 col-lg-3">
                    <div class="header-right-wrap mt-40">
                        <div class="header-wishlist">
                            <a href="wishlist.html"><i class="la la-heart-o"></i></a>
                        </div>

                        <div class="header-login ml-40">
                            <a href=" {{ route('register') }}"><i class="la la-user"> </i></a>


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="header-small-mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a href="index.html">
                            <img alt="" src="{{ asset('assets/Frontend') }}/images/logo/logo-1.png">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">
                        <div class="cart-wrap common-style">
                            <button class="cart-active">
                                <i class="la la-shopping-cart"></i>
                                <span class="count-style">2 Items</span>
                            </button>
                            <div class="shopping-cart-content">
                                <div class="shopping-cart-top">
                                    <h4>Your Cart</h4>
                                    <a class="cart-close" href="#"><i class="la la-close"></i></a>
                                </div>
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ asset('assets/Frontend') }}/images/cart/cart-1.jpg"></a>
                                            <div class="item-close">
                                                <a href="#"><i class="sli sli-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                            <span>$99.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="la la-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ asset('assets/Frontend') }}/assets/images/cart/cart-2.jpg"></a>
                                            <div class="item-close">
                                                <a href="#"><i class="sli sli-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                            <span>$99.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="la la-trash"></i></a>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ asset('assets/Frontend') }}/images/cart/cart-3.jpg"></a>
                                            <div class="item-close">
                                                <a href="#"><i class="sli sli-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Golden Easy Spot Chair.</a></h4>
                                            <span>$99.00</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="la la-trash"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-bottom">
                                    <div class="shopping-cart-total">
                                        <h4>Subtotal <span class="shop-total">$290.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn btn-hover default-btn text-center">
                                        <a class="black-color" href="checkout.html">Continue to Chackout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="la la-navicon la-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
