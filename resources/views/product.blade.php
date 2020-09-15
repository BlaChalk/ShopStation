@extends('layouts.frontend', [$page='product'])

@section('page-title')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="/assets-shop/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2>Product List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
@endsection

@section('content')
<!--body content start-->
    {{-- <!-- shop-area --> --}}
    <div class="shop-area gray-bg pt-100 pb-100">
        <div class="custom-container-two">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-8 order-2 order-lg-0">
                    <aside class="shop-sidebar">
                        <div class="widget shop-widget mb-30">
                            <div class="shop-widget-title">
                                <h6 class="title white-bg">Product Categories</h6>
                            </div>
                        <!-- Main Menu -->
                            <div class="sidelist" id="accordion">

                                @foreach ($mainCategories as $mainCategory)
                                    <div class="card mb-2">
                                        <div class="card-header white-bg">
                                            <a class="card-link" data-toggle="collapse" href="#{{ $mainCategory->main_name }}">
                                                <img src="{{ $mainCategory->thumbnail }}">{{ $mainCategory->main_name }}
                                            </a>
                                        </div>
                                        <div id="{{ $mainCategory->main_name }}" class="collapse" data-parent="#accordion">
                                            <div class="card-body ml-4">
                                                <ul class="nav navbar-nav"  id="">
                                                    @foreach ($categories as $category)
                                                        @if ($mainCategory->id == $category->main_category_id)
                                                            <li>
                                                            <a href="/product/{{ $category->id }}">{{ $category->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        <!-- Main Menu end -->

                        </div>
                        <div class="widget">
                            <div class="shop-widget-banner special-offer-banner">
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html"><img alt="" hidden="" src="./Venam%20-%20eCommerce%20HTML5%20Template_files/sidebar_banner_ad.jpg" style="display: none !important;"></a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="shop-top-meta mb-40">
                        <p class="show-result">Showing Products 1-12 Of 10 Result</p>
                        <div class="shop-meta-right">
                            <ul>
                                <li class="active">
                                    <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="flaticon-grid"></i></a>
                                </li>
                                <li>
                                    <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="flaticon-list"></i></a>
                                </li>
                            </ul>
                            <form action="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">
                                <select class="custom-select">
                                    <option selected>
                                        Default Sorting
                                    </option>
                                    <option>
                                        Free Shipping
                                    </option>
                                    <option>
                                        Best Match
                                    </option>
                                    <option>
                                        Newest Item
                                    </option>
                                    <option>
                                        Size A - Z
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row">

                        @foreach ($productDetails as $productDetail)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href="/product-detail/{{ $productDetail->id }}"><img alt="Picture" src="{{ $productDetail->bigPicture }}"></a>
                                    {{-- <ul class="action">
                                        <li>
                                            <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="flaticon-shuffle-1"></i></a>
                                        </li>
                                        <li>
                                            <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="flaticon-supermarket"></i></a>
                                        </li>
                                        <li>
                                            <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="flaticon-witness"></i></a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <div class="exclusive-item-content">
                                    <h5><a href="#">{{ $productDetail->name }}</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination-wrap">
                        <ul>
                            <li class="prev">
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#"><i class="fas fa-long-arrow-alt-left"></i>Prev</a>
                            </li>
                            <li>
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">1</a>
                            </li>
                            <li class="active">
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">2</a>
                            </li>
                            <li>
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">3</a>
                            </li>
                            <li>
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">4</a>
                            </li>
                            <li>
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">...</a>
                            </li>
                            <li>
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">10</a>
                            </li>
                            <li class="next">
                                <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-left-sidebar.html#">Next <i class="fas fa-long-arrow-alt-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<!-- shop-area-end --> --}}
<!--body content end-->
@endsection

@section('footer')
    <!-- footer-area -->
    <footer class="footer-area">
        <div class="footer-top pt-65 pb-25">
            <div class="container">
                {{-- <div class="footer-newsletter-wrap footer-newsletter-two">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="newsletter-title">
                                <h4>Subscribe Now !</h4>
                                <span>Venam By Signing Up To Our Newsletter.</span>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="newsletter-form">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email....">
                                    <button class="btn yellow-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-alphabet mb-55">
                    <div class="row">
                        <div class="col-12">
                            <div class="newsletter-title text-left mb-0">
                                <h4>Find Out More :</h4>
                                <span>Browse Alphabetically :</span>
                                <span><a href="#">A</a></span>
                                <span><a href="#">B</a></span>
                                <span><a href="#">C</a></span>
                                <span><a href="#">D</a></span>
                                <span><a href="#">E</a></span>
                                <span><a href="#">F</a></span>
                                <span><a href="#">G</a></span>
                                <span><a href="#">H</a></span>
                                <span><a href="#">I</a></span>
                                <span><a href="#">J</a></span>
                                <span><a href="#">K</a></span>
                                <span><a href="#">L</a></span>
                                <span><a href="#">M</a></span>
                                <span><a href="#">N</a></span>
                                <span><a href="#">O</a></span>
                                <span><a href="#">P</a></span>
                                <span><a href="#">Q</a></span>
                                <span><a href="#">R</a></span>
                                <span><a href="#">S</a></span>
                                <span><a href="#">T</a></span>
                                <span><a href="#">U</a></span>
                                <span><a href="#">V</a></span>
                                <span><a href="#">W</a></span>
                                <span><a href="#">X</a></span>
                                <span><a href="#">Y</a></span>
                                <span><a href="#">Z</a></span>
                                <span><a href="#">0~9</a></span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-30">
                                <a href="index.html"><img src="/assets-shop/img/logo/logo_black.png" alt=""></a>
                            </div>
                            <div class="footer-text mb-35">
                                <p>Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear
                                Blood Pressure Rate Monito.</p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Product Recalls</a></li>
                                    <li><a href="#">Accessibility</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Quick Links</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Terms Of Use</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Store Pickup</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-35">
                                <h5>Customer Service</h5>
                            </div>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i> W898 RTower Stat, Suite 56
                                        Brockland, CA 9622 United States</li>
                                    <li><i class="fas fa-headphones"></i> 458-965-3224</li>
                                    <li><i class="fas fa-envelope-open"></i><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="693a1c1919061b1d2900070f06472a0604">[email&#160;protected]</a></li>
                                    <li><i class="fas fa-fax"></i>458-965-3224</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap copyright-style-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-text">
                            <p>Copyright © 2020 <a href="http://www.bootstrapmb.com/">bootstrapmb</a> All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-none d-md-block">
                        <div class="payment-method-img text-right">
                            <img src="/assets-shop/img/images/card_img.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->
@endsection
