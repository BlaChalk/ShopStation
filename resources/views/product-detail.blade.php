@extends('layouts.frontend', [$page='product'])

@section('page-title')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="/assets-shop/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2>Shop Single</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
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
    <!-- shop-details-area -->
    <section class="shop-details-area pt-100 pb-100">
        <div class="container">
            <div class="row mb-95">
                <div class="col-xl-7 col-lg-6">
                    {{-- <div class="shop-details-nav-wrap">
                        <div class="shop-details-nav">
                            <div class="shop-nav-item">
                                <img src="{{ $productDetail->bigPicture }}" alt="">
                            </div>
                            <div class="shop-nav-item">
                                <img src="/assets-shop/img/product/sd_bottom02.jpg" alt="">
                            </div>
                            <div class="shop-nav-item">
                                <img src="/assets-shop/img/product/sd_bottom03.jpg" alt="">
                            </div>
                            <div class="shop-nav-item">
                                <img src="/assets-shop/img/product/sd_bottom04.jpg" alt="">
                            </div>
                            <div class="shop-nav-item">
                                <img src="/assets-shop/img/product/sd_bottom03.jpg" alt="">
                            </div>
                        </div>
                    </div> --}}
                    <div class="shop-details-img-wrap">
                        <div class="shop-details-active">
                            <div class="shop-details-img">
                                <a href="{{ $productDetail->bigPicture }}" class="popup-image"><img src="{{ $productDetail->bigPicture }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="shop-details-content">
                        <span class="stock-info">In Stock</span>
                        <h2>{{ $productDetail->name }}<p>{{ $productDetail->serialName }}</p></h2>
                        {{-- <div class="shop-details-review">
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span>- 3 Customer Reviews</span>
                        </div> --}}
                        <div class="shop-details-price">
                            <h2>{{ $productDetail->price }} <del>$49000</del></h2>
                        </div>
                        <p>{{ $productDetail->content }}</p>
                        <div class="product-details-size mb-40">
                            <span>顏色 : </span>
                            {{-- <a href="#">Guide</a>
                            <a href="#">Can't Find Your Size?</a> --}}
                            <ul>
                                <li><a href="#">紅</a></li>
                                <li><a href="#">藍</a></li>
                            </ul>
                        </div>
                        <div class="perched-info">
                            <div class="cart-plus">
                                <form action="#">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="1">
                                    </div>
                                </form>
                            </div>
                            <a href="#" class="btn add-card-btn">加入購物車</a>
                        </div>
                        <div class="shop-details-bottom">
                            <h5><a href="#"><i class="far fa-heart"></i> 加入最愛</a></h5>
                            {{-- <ul>
                                <li>
                                    <span>Tag : </span>
                                    <a href="#">clothing</a>
                                </li>
                                <li>
                                    <span>CATEGORIES :</span>
                                    <a href="#">women's,</a>
                                    <a href="#">bikini,</a>
                                    <a href="#">tops for,</a>
                                    <a href="#">large bust</a>
                                </li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-desc-wrap mb-100">
                        <ul class="nav nav-tabs mb-25" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details"
                                    aria-selected="true">詳細介紹</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification" role="tab" aria-controls="specification"
                                    aria-selected="false">規格表</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                                <div class="product-desc-content">
                                    {{-- <h4 class="title">Product Details</h4> --}}
                                    <div class="row">
                                        {{-- <div class="col-xl-3 col-md-4">
                                            <div class="product-desc-img">
                                                <img src="/assets-shop/img/product/desc_img.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-md-8">
                                            <h5 class="small-title">The Christina Fashion</h5>
                                            <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining Lorem
                                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            <ul class="product-desc-list">
                                                <li>65% poly, 35% rayon</li>
                                                <li>Hand wash cold</li>
                                                <li>Partially lined</li>
                                                <li>Hidden front button closure with keyhole accents</li>
                                                <li>Button cuff sleeves</li>
                                                <li>Made in USA</li>
                                            </ul>
                                        </div> --}}
                                        @if ($productDetail->productDetailPicture)
                                            <img src="{{ $productDetail->productDetailPicture }}" alt="productDetailPicture">
                                        @else
                                            <h5>{{ $productDetail->productDetail }}</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="specification" role="tabpanel" aria-labelledby="specification-tab">
                                <div class="product-desc-content">
                                    {{-- <h4 class="title">Product Details</h4> --}}
                                    <div class="row">
                                        @if ($productDetail->specificationPicture)
                                            <img src="{{ $productDetail->specificationPicture }}" alt="specificationPicture">
                                        @else
                                            <h5>{{ $productDetail->specification }}</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="shop-details-add mb-95">
                        <a href="#"><img src="/assets-shop/img/product/shop_details_add.jpg" alt=""></a>
                    </div> --}}
                    {{-- <div class="related-product-wrap pb-95">
                        <div class="deal-day-top">
                            <div class="deal-day-title">
                                <h4 class="title">Viewers Also Liked</h4>
                            </div>
                            <div class="related-slider-nav">
                                <div class="slider-nav"></div>
                            </div>
                        </div>
                        <div class="row related-product-active">
                            <div class="col-xl-3">
                                <div class="exclusive-item exclusive-item-three text-center">
                                    <div class="exclusive-item-thumb">
                                        <a href="shop-details.html">
                                            <img src="/assets-shop/img/product/td_product_img01.jpg" alt="">
                                            <img class="overlay-product-thumb" src="/assets-shop/img/product/t_exclusive_product01.jpg" alt="">
                                        </a>
                                        <ul class="action">
                                            <li><a href="#"><i class="flaticon-shuffle-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-supermarket"></i></a></li>
                                            <li><a href="#"><i class="flaticon-witness"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="exclusive-item-content">
                                        <h5><a href="shop-details.html">Farfetch Mulberry Belted</a></h5>
                                        <div class="exclusive--item--price">
                                            <del class="old-price">$69.00</del>
                                            <span class="new-price">$58.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="exclusive-item exclusive-item-three text-center">
                                    <div class="exclusive-item-thumb">
                                        <a href="shop-details.html">
                                            <img src="/assets-shop/img/product/td_product_img02.jpg" alt="">
                                            <img class="overlay-product-thumb" src="/assets-shop/img/product/td_product_img05.jpg" alt="">
                                        </a>
                                        <ul class="action">
                                            <li><a href="#"><i class="flaticon-shuffle-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-supermarket"></i></a></li>
                                            <li><a href="#"><i class="flaticon-witness"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="exclusive-item-content">
                                        <h5><a href="shop-details.html">Luxury Fashion Bag</a></h5>
                                        <div class="exclusive--item--price">
                                            <del class="old-price">$69.00</del>
                                            <span class="new-price">$29.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="exclusive-item exclusive-item-three text-center">
                                    <div class="exclusive-item-thumb">
                                        <a href="shop-details.html">
                                            <img src="/assets-shop/img/product/td_product_img03.jpg" alt="">
                                            <img class="overlay-product-thumb" src="/assets-shop/img/product/t_exclusive_product04.jpg" alt="">
                                        </a>
                                        <ul class="action">
                                            <li><a href="#"><i class="flaticon-shuffle-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-supermarket"></i></a></li>
                                            <li><a href="#"><i class="flaticon-witness"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="exclusive-item-content">
                                        <h5><a href="shop-details.html">Men's Lathers Jacket</a></h5>
                                        <div class="exclusive--item--price">
                                            <del class="old-price">$69.00</del>
                                            <span class="new-price">$58.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="exclusive-item exclusive-item-three text-center">
                                    <div class="exclusive-item-thumb">
                                        <a href="shop-details.html">
                                            <img src="/assets-shop/img/product/td_product_img04.jpg" alt="">
                                            <img class="overlay-product-thumb" src="/assets-shop/img/product/td_product_img05.jpg" alt="">
                                        </a>
                                        <ul class="action">
                                            <li><a href="#"><i class="flaticon-shuffle-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-supermarket"></i></a></li>
                                            <li><a href="#"><i class="flaticon-witness"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="exclusive-item-content">
                                        <h5><a href="shop-details.html">Women Brand T-shirt</a></h5>
                                        <div class="exclusive--item--price">
                                            <del class="old-price">$49.00</del>
                                            <span class="new-price">$21.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="exclusive-item exclusive-item-three text-center">
                                    <div class="exclusive-item-thumb">
                                        <a href="shop-details.html">
                                            <img src="/assets-shop/img/product/td_product_img02.jpg" alt="">
                                            <img class="overlay-product-thumb" src="/assets-shop/img/product/td_product_img05.jpg" alt="">
                                        </a>
                                        <ul class="action">
                                            <li><a href="#"><i class="flaticon-shuffle-1"></i></a></li>
                                            <li><a href="#"><i class="flaticon-supermarket"></i></a></li>
                                            <li><a href="#"><i class="flaticon-witness"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="exclusive-item-content">
                                        <h5><a href="shop-details.html">Luxury Fashion Bag</a></h5>
                                        <div class="exclusive--item--price">
                                            <del class="old-price">$69.00</del>
                                            <span class="new-price">$29.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-reviews-wrap">
                        <div class="deal-day-top">
                            <div class="deal-day-title">
                                <h4 class="title">Product Reviews</h4>
                            </div>
                        </div>
                        <div class="reviews-count-title">
                            <h5 class="title">3 review for Pouch Pocket Jacket</h5>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-review-list blog-comment">
                                    <ul>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar-img">
                                                    <img src="/assets-shop/img/product/review_author_thumb01.jpg" alt="img">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="comment-avatar-info">
                                                        <h5>Emaliy Watson <span class="comment-date"> - November 13, 2020</span></h5>
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar-img">
                                                    <img src="/assets-shop/img/product/review_author_thumb02.jpg" alt="img">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="comment-avatar-info">
                                                        <h5>Tomas Alexzender <span class="comment-date"> - November 13, 2020</span></h5>
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar-img">
                                                    <img src="/assets-shop/img/product/review_author_thumb03.jpg" alt="img">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="comment-avatar-info">
                                                        <h5>Rana Watson <span class="comment-date"> - November 13, 2020</span></h5>
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar-img">
                                                    <img src="/assets-shop/img/product/review_author_thumb04.jpg" alt="img">
                                                </div>
                                                <div class="comment-text">
                                                    <div class="comment-avatar-info">
                                                        <h5>Emaliy Watson <span class="comment-date"> - November 13, 2020</span></h5>
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-review-form">
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                    <div class="rising-star mb-40">
                                        <h5>Your Rating</h5>
                                        <div class="rising-rating"></div>
                                    </div>
                                    <form action="#">
                                        <div class="form-grp">
                                            <label for="message">YOUR REVIEW *</label>
                                            <textarea name="message" id="message"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <label for="uea">YOUR NAME *</label>
                                                    <input type="text" id="uea">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-grp">
                                                    <label for="email">YOUR Email *</label>
                                                    <input type="email" id="email">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- shop-details-area-end -->
@endsection
