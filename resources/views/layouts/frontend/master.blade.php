<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daxone - eCommerce Bootstrap 4 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/vendor/themify.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/plugins/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/style.css">
</head>
<body>
<div class="main-wrapper">

    @yield('content')


    @include('layouts.frontend.footer')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="assets/images/product/quickview-l1.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/images/product/quickview-l2.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/images/product/quickview-l3.jpg" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="assets/images/product/quickview-l2.jpg" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                    <a class="active" data-toggle="tab" href="#pro-1"><img src="assets/images/product/quickview-s1.jpg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-2"><img src="assets/images/product/quickview-s2.jpg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-3"><img src="assets/images/product/quickview-s3.jpg" alt=""></a>
                                    <a data-toggle="tab" href="#pro-4"><img src="assets/images/product/quickview-s4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <span>Life Style</span>
                                <h2>LaaVista Depro, FX 829 v1</h2>
                                <div class="product-ratting-review">
                                    <div class="product-ratting">
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star-half-o"></i>
                                    </div>
                                    <div class="product-review">
                                        <span>40+ Reviews</span>
                                    </div>
                                </div>
                                <div class="pro-details-color-wrap">
                                    <span>Color:</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li class="green"></li>
                                            <li class="yellow"></li>
                                            <li class="red"></li>
                                            <li class="blue"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size:</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-price-wrap">
                                    <div class="product-price">
                                        <span>$210.00</span>
                                        <span class="old">$230.00</span>
                                    </div>
                                    <div class="dec-rang"><span>- 30%</span></div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="02">
                                    </div>
                                </div>
                                <div class="pro-details-compare-wishlist">
                                    <div class="pro-details-compare">
                                        <a title="Add To Compare" href="#"><i class="la la-retweet"></i> Compare</a>
                                    </div>
                                    <div class="pro-details-wishlist">
                                        <a title="Add To Wishlist" href="#"><i class="la la-heart-o"></i> Add to wish list</a>
                                    </div>
                                </div>
                                <div class="pro-details-buy-now btn-hover btn-hover-radious">
                                    <a href="#">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/frontend') }}/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/vendor/jquery-3.3.1.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/vendor/popper.js"></script>
<script src="{{ asset('assets/frontend') }}/js/vendor/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/countdown.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/counterup.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/images-loaded.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/isotope.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/instafeed.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/jquery-ui.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/magnific-popup.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/owl-carousel.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/scrollup.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/waypoints.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/slick.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/wow.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/textillate.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/elevatezoom.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/sticky-sidebar.js"></script>
<script src="{{ asset('assets/frontend') }}/js/plugins/smoothscroll.js"></script>
<script src="{{ asset('assets/frontend') }}/js/main.js"></script>
</body>

</html>


