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
