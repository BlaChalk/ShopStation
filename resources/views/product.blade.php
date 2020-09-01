@extends('layouts.frontend', [$page='product'])

@section('page-title')
    <!--page title start-->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">產品列表</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li class="active"><a href="#">Blog</a>
                        </li>
                        <li class="active">Blog Listing</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!--page title end-->
@endsection

@section('content')
<!--body content start-->
<main>
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
                            <ul class="nav navbar-nav">
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed inline-block" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv01"><img src="/images/sub/sub_pro_01.jpg">站立式輪椅<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv01" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=138&amp;cid=168">電動站立式輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=138&amp;cid=167">半電動站立式輪椅</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv02"><img src="/images/sub/sub_pro_02.jpg">電動輪椅<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv02" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=140&amp;cid=176">戶外型電動輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=140&amp;cid=175">折疊式電動輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=140&amp;cid=205">躺式電動輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=140&amp;cid=180">動力推進器</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv03"><img src="/images/sub/sub_pro_03.jpg">電動代步車<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv03" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184">大型電動代步車</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=185">中型電動代步車</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv04"><img src="/images/sub/sub_pro_04.jpg">手動輪椅<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv04" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=199">鐵輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=187">經典款輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=201">運輸椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=303">躺式輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=188">高活動型輪椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=306">Tilt and reclining wheelchair</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=141&amp;cid=204">童車系列</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv05"><img src="/images/sub/sub_pro_05.jpg">助行器<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv05" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=200&amp;cid=305">拐杖</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=200&amp;cid=207">助行器</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=200&amp;cid=206">帶輪助行器</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv06"><img src="/images/sub/sub_pro_06.jpg">洗澡便器椅<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv06" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=202&amp;cid=293">便器椅</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=202&amp;cid=296">Shower Wheelchair</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=202&amp;cid=292">擺位洗澡椅</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="panel panel-default" id="dropdown">
                                    <a class="collapsed" data-toggle="collapse" href="http://www.comfort-mobility.com/tw_product.php?fcid=139&amp;cid=184#dropdown-lv07"><img src="/images/sub/sub_pro_07.jpg">配件<span class="caret"></span></a> <!-- Dropdown level 1 -->
                                    <div class="panel-collapse collapse" id="dropdown-lv07" style="height: 0px;">
                                        <div class="panel-body">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=143&amp;cid=203">衛浴安全系列</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=143&amp;cid=210">可攜式鋁梯</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=143&amp;cid=208">輪椅餐桌</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=143&amp;cid=289">SUNRISE 減壓座墊</a>
                                                </li>
                                                <li>
                                                    <a href="http://www.comfort-mobility.com/tw_product.php?fcid=143&amp;cid=297">其他配件</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="exclusive-item exclusive-item-three text-center mb-50">
                                <div class="exclusive-item-thumb">
                                    <a href=""><img alt="" src="images/product/pro_img01.jpg"></a>
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
                                    <h5><a href="#">電動站立式輪椅</a></h5>
                                    {{-- <div class="exclusive--item--price">
                                        <del class="old-price">$69.00</del><span class="new-price">$58.00</span>
                                    </div> --}}
                                    {{-- <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>

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
</main>
<!--body content end-->
@endsection

@section('footer')
<!--footer start 1-->
<footer id="footer" class="dark">
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="m-bot-20 footer-logo">
                        <img class="retina" src="assets/img/logo-dark.png" alt="" />
                    </a>
                    <p>Massive is fully responsible, performance oriented and SEO optimized, retina ready WordPress theme.</p>

                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase">recent posts</h5>
                    <ul class="f-list">
                        <li><a href="#">Standard Blog post</a>
                        </li>
                        <li><a href="#">Quotation post</a>
                        </li>
                        <li><a href="#">Audio Post</a>
                        </li>
                        <li><a href="#">Massive Video Demo</a>
                        </li>
                        <li><a href="#">Blog Image Post</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase">quick link</h5>
                    <ul class="f-list">
                        <li><a href="#">About Massive</a>
                        </li>
                        <li><a href="#">Career</a>
                        </li>
                        <li><a href="#">Terms & Condition</a>
                        </li>
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 class="text-uppercase">Recent Work</h5>
                    <ul class="r-work">
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/1.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/2.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/3.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/4.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/5.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/6.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/7.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/recent-work/8.jpg" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="secondary-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="m-top-10">Copyright 2012 - 2015 Massive Theme by <a href="http://themebucket.net/" class="f-link" target="_blank">ThemeBucket</a> | All Rights Reserved</span>
                </div>
                <div class="col-md-6">
                    <div class="social-link circle pull-right">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer 1 end-->
@endsection
