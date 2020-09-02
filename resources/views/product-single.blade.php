@extends('layouts.frontend', [$page='product'])

@section('head')
    <link href="css/product-single/bootstrap.min.css" rel="stylesheet">
	<link href="css/product-single/animate.min.css" rel="stylesheet">
	<link href="css/product-single/magnific-popup.css" rel="stylesheet">
	{{-- <link href="css/product-single/fontawesome-all.min.css" rel="stylesheet"> --}}
	<link href="css/product-single/owl.carousel.min.css" rel="stylesheet">
	<link href="css/product-single/jquery-ui.min.css" rel="stylesheet">
	<link href="css/product-single/flaticon.css" rel="stylesheet">
	<link href="css/product-single/odometer.css" rel="stylesheet">
	<link href="css/product-single/aos.css" rel="stylesheet">
	<link href="css/product-single/slick.css" rel="stylesheet">
	<link href="css/product-single/default.css" rel="stylesheet">
	<link href="css/product-single/style.css" rel="stylesheet">
	<link href="css/product-single/responsive.css" rel="stylesheet">
@endsection

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
    <!-- shop-details-area -->
		<section class="shop-details-area pt-100 pb-100">
			<div class="container">
				<div class="row mb-95">
					<div class="col-xl-7 col-lg-6">
						<div class="shop-details-nav-wrap">
							<div class="shop-details-nav slick-initialized slick-slider slick-vertical">
								<div class="slick-list draggable" style="height: 565.956px; padding: 0px;">
									<div class="slick-track" style="opacity: 1; height: 2123px; transform: translate3d(0px, -565px, 0px);">
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="-5" id="" style="width: 103px;" tabindex="-1"><img alt="" src=""></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="-4" id="" style="width: 103px;" tabindex="-1"><img alt="" src=""></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="-3" id="" style="width: 103px;" tabindex="-1"><img alt="" src=""></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="-2" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom04.jpg"></div>
										<div aria-hidden="false" class="shop-nav-item slick-slide slick-cloned slick-active" data-slick-index="-1" id="" style="width: 103px;" tabindex="-1"><img alt="" src="storage/uploads/users/admin/2014/12/ANGEL-_aE9_a87_a91_aE9_aBB_a9E_aE7_a8D_a8EMARK-01.jpg"></div>
										<div aria-hidden="false" class="shop-nav-item slick-slide slick-current slick-active slick-center" data-slick-index="0" style="width: 103px;" tabindex="0"><img alt="" src="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg"></div>
										<div aria-hidden="false" class="shop-nav-item slick-slide slick-active" data-slick-index="1" style="width: 103px;" tabindex="0"><img alt="" src="storage/uploads/users/admin/2014/12/ANGEL-_aE9_a87_a91_aE9_aBB_a9E_aE7_a8D_a8EMARK-01.jpg"></div>
										<div aria-hidden="false" class="shop-nav-item slick-slide slick-active" data-slick-index="2" style="width: 103px;" tabindex="0"><img alt="" src="storage/uploads/users/admin/2014/12/ANGEL-_aE9_a87_a91_aE9_aBB_a9E_aE7_a8D_a8EMARK-01.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide" data-slick-index="3" style="width: 103px;" tabindex="0"><img alt="" src="storage/uploads/users/admin/2014/12/ANGEL-_aE9_a87_a91_aE9_aBB_a9E_aE7_a8D_a8EMARK-01.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide" data-slick-index="4" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom03.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned slick-center" data-slick-index="5" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom01.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="6" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom02.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="7" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom03.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="8" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom04.jpg"></div>
										<div aria-hidden="true" class="shop-nav-item slick-slide slick-cloned" data-slick-index="9" id="" style="width: 103px;" tabindex="-1"><img alt="" src="temp/sd_bottom03.jpg"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="shop-details-img-wrap">
							<div class="shop-details-active slick-initialized slick-slider">
								<div class="slick-list draggable">
									<div class="slick-track" style="opacity: 1; width: 2505px;">
										<div aria-hidden="false" class="shop-details-img slick-slide slick-current slick-active product-big" data-slick-index="0" style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
											<a class="popup-image" href="temp/shop_details_img01.jpg" tabindex="0"><img alt="" src="images/product/pro_img01_b.jpg"></a>
										</div>
										<div aria-hidden="true" class="shop-details-img slick-slide" data-slick-index="1" style="width: 501px; position: relative; left: -501px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
											<a class="popup-image" href="temp/shop_details_img01.jpg" tabindex="-1"><img alt="" src="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg"></a>
										</div>
										<div aria-hidden="true" class="shop-details-img slick-slide" data-slick-index="2" style="width: 501px; position: relative; left: -1002px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
											<a class="popup-image" href="temp/shop_details_img01.jpg" tabindex="-1"><img alt="" src="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg"></a>
										</div>
										<div aria-hidden="true" class="shop-details-img slick-slide" data-slick-index="3" style="width: 501px; position: relative; left: -1503px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
											<a class="popup-image" href="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg" tabindex="-1"><img alt="" src="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg"></a>
										</div>
										<div aria-hidden="true" class="shop-details-img slick-slide" data-slick-index="4" style="width: 501px; position: relative; left: -2004px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1">
											<a class="popup-image" href="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg" tabindex="-1"><img alt="" src="storage/uploads/users/admin/2012/11/_MG_2775-ok.jpg"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6">
						<div class="shop-details-content">
							<span class="stock-info">In Stock</span>
							<h2>翱翔號</h2>
							<div class="shop-details-review">
								{{-- <div class="rating">
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
								</div><span>- 3 Customer Reviews</span> --}}
							</div>
							<div class="shop-details-price">
								<h2>$29000 <del>$39000</del></h2>
							</div>
							<p>首款椅天使翅膀為概念所設計之站立式電動輪椅，開發設計即是讓使用者可以任意調整各種坐姿，讓身體處於自然狀態也是符合人體工學的站立式輪椅。</p>
							<div class="product-details-size mb-40">
								<span>Size:</span><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">Guide</a><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">Can't Find Your Size?</a>
								<ul>
									<li>
										<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">XXS</a>
									</li>
									<li>
										<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">XS</a>
									</li>
									<li>
										<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">s</a>
									</li>
									<li>
										<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">M</a>
									</li>
									<li>
										<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">L</a>
									</li>
								</ul>
							</div>
							<div class="perched-info">
								<div class="cart-plus">
									<form action="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">
										<div class="cart-plus-minus">
											<input type="text" value="1">
											<div class="dec qtybutton">
												-
											</div>
											<div class="inc qtybutton">
												+
											</div>
										</div>
									</form>
								</div><a class="btn add-card-btn" href="">ADD TO CART</a>
							</div>
							{{-- <div class="shop-details-bottom">
								<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#"><i class="far fa-heart"></i> Add To Wishlist</a></h5>
								<ul>
									<li>
										<span>Tag :</span> <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">clothing</a>
									</li>
									<li>
										<span>CATEGORIES :</span> <a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">women's,</a><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">bikini,</a><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">tops for,</a><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">large bust</a>
									</li>
								</ul>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-desc-wrap mb-100">
							<ul class="nav nav-tabs mb-25" id="myTab" role="tablist">
								<li class="nav-item">
									<a aria-controls="details" aria-selected="true" class="nav-link active" data-toggle="tab" href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#details" id="details-tab" role="tab">Product Details</a>
								</li>
								<li class="nav-item">
									<a aria-controls="val" aria-selected="false" class="nav-link" data-toggle="tab" href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#val" id="val-tab" role="tab">Viewers Also Like</a>
								</li>
								<li class="nav-item">
									<a aria-controls="looks" aria-selected="false" class="nav-link" data-toggle="tab" href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#looks" id="looks-tab" role="tab">Looks</a>
								</li>
								<li class="nav-item">
									<a aria-controls="review" aria-selected="false" class="nav-link" data-toggle="tab" href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#review" id="review-tab" role="tab">Product Reviews</a>
								</li>
								<li class="nav-item">
									<a aria-controls="qa" aria-selected="false" class="nav-link" data-toggle="tab" href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#qa" id="qa-tab" role="tab">Q&amp;A</a>
								</li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div aria-labelledby="details-tab" class="tab-pane fade show active" id="details" role="tabpanel">
									<div class="product-desc-content">
										<h4 class="title">Product Details</h4>
										<div class="row">
											<div class="col-xl-3 col-md-4">
												<div class="product-desc-img"><img alt="" src="temp/desc_img.jpg"></div>
											</div>
											<div class="col-xl-9 col-md-8">
												<h5 class="small-title">The Christina Fashion</h5>
												<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<ul class="product-desc-list">
													<li>65% poly, 35% rayon</li>
													<li>Hand wash cold</li>
													<li>Partially lined</li>
													<li>Hidden front button closure with keyhole accents</li>
													<li>Button cuff sleeves</li>
													<li>Made in USA</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div aria-labelledby="val-tab" class="tab-pane fade" id="val" role="tabpanel">
									<div class="product-desc-content">
										<h4 class="title">Product Details</h4>
										<div class="row">
											<div class="col-xl-3 col-md-4">
												<div class="product-desc-img"><img alt="" src="temp/desc_img.jpg"></div>
											</div>
											<div class="col-xl-9 col-md-8">
												<h5 class="small-title">The Christina Fashion</h5>
												<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<ul class="product-desc-list">
													<li>65% poly,35% rayon</li>
													<li>Hand wash cold</li>
													<li>Partially lined</li>
													<li>Hidden front button closure with keyhole accents</li>
													<li>Button cuff sleeves</li>
													<li>Made in USA</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div aria-labelledby="looks-tab" class="tab-pane fade" id="looks" role="tabpanel">
									<div class="product-desc-content">
										<h4 class="title">Product Details</h4>
										<div class="row">
											<div class="col-xl-3 col-md-4">
												<div class="product-desc-img"><img alt="" src="temp/desc_img.jpg"></div>
											</div>
											<div class="col-xl-9 col-md-8">
												<h5 class="small-title">The Christina Fashion</h5>
												<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<ul class="product-desc-list">
													<li>65% poly, 35% rayon</li>
													<li>Hand wash cold</li>
													<li>Partially lined</li>
													<li>Hidden front button closure with keyhole accents</li>
													<li>Button cuff sleeves</li>
													<li>Made in USA</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div aria-labelledby="review-tab" class="tab-pane fade" id="review" role="tabpanel">
									<div class="product-desc-content">
										<h4 class="title">Product Details</h4>
										<div class="row">
											<div class="col-xl-3 col-md-4">
												<div class="product-desc-img"><img alt="" src="temp/desc_img.jpg"></div>
											</div>
											<div class="col-xl-9 col-md-8">
												<h5 class="small-title">The Christina Fashion</h5>
												<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting, remaining Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<ul class="product-desc-list">
													<li>65% poly,35% rayon</li>
													<li>Hand wash cold</li>
													<li>Partially lined</li>
													<li>Hidden front button closure with keyhole accents</li>
													<li>Button cuff sleeves</li>
													<li>Made in USA</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div aria-labelledby="qa-tab" class="tab-pane fade" id="qa" role="tabpanel">
									<div class="product-desc-content">
										<h4 class="title">Product Details</h4>
										<div class="row">
											<div class="col-xl-3 col-md-4">
												<div class="product-desc-img"><img alt="" src="temp/desc_img.jpg"></div>
											</div>
											<div class="col-xl-9 col-md-8">
												<h5 class="small-title">The Christina Fashion</h5>
												<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<ul class="product-desc-list">
													<li>65% poly, 35% rayon</li>
													<li>Hand wash cold</li>
													<li>Partially lined</li>
													<li>Hidden front button closure with keyhole accents</li>
													<li>Button cuff sleeves</li>
													<li>Made in USA</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
						{{-- <div class="shop-details-add mb-95">
							<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#"><img alt="" src="temp/shop_details_add.jpg"></a>
						</div> --}}
						{{-- <div class="related-product-wrap pb-95">
							<div class="deal-day-top">
								<div class="deal-day-title">
									<h4 class="title">Viewers Also Liked</h4>
								</div>
								<div class="related-slider-nav">
									<div class="slider-nav">
										<span class="slick-prev slick-arrow" style=""><i class="fas fa-angle-left"></i></span><span class="slick-next slick-arrow" style=""><i class="fas fa-angle-right"></i></span>
									</div>
								</div>
							</div>
							<div class="row related-product-active slick-initialized slick-slider">
								<div class="slick-list draggable">
									<div class="slick-track" style="opacity: 1; width: 4312px; transform: translate3d(-1232px, 0px, 0px);">
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="-4" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img02.jpg"> <img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del> <span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="-3" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img03.jpg"> <img alt="" class="overlay-product-thumb" src="temp/t_exclusive_product04.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Men's Lathers Jacket</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$58.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="-2" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img04.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Women Brand T-shirt</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$49.00</del><span class="new-price">$21.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="-1" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img02.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="false" class="col-xl-3 slick-slide slick-current slick-active" data-slick-index="0" style="width: 308px;" tabindex="0">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0"><img alt="" src="temp/td_product_img01.jpg"> <img alt="" class="overlay-product-thumb" src="temp/t_exclusive_product01.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0">Farfetch Mulberry Belted</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del> <span class="new-price">$58.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="false" class="col-xl-3 slick-slide slick-active" data-slick-index="1" style="width: 308px;" tabindex="0">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0"><img alt="" src="temp/td_product_img02.jpg"> <img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del> <span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="false" class="col-xl-3 slick-slide slick-active" data-slick-index="2" style="width: 308px;" tabindex="0">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0"><img alt="" src="temp/td_product_img03.jpg"> <img alt="" class="overlay-product-thumb" src="temp/t_exclusive_product04.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0">Men's Lathers Jacket</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$58.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="false" class="col-xl-3 slick-slide slick-active" data-slick-index="3" style="width: 308px;" tabindex="0">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0"><img alt="" src="temp/td_product_img04.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="0"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="0">Women Brand T-shirt</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$49.00</del><span class="new-price">$21.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide" data-slick-index="4" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img02.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="5" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img01.jpg"> <img alt="" class="overlay-product-thumb" src="temp/t_exclusive_product01.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Farfetch Mulberry Belted</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del> <span class="new-price">$58.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="6" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img02.jpg"> <img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del> <span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="7" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img03.jpg"> <img alt="" class="overlay-product-thumb" src="temp/t_exclusive_product04.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Men's Lathers Jacket</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$58.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="8" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img04.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Women Brand T-shirt</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$49.00</del><span class="new-price">$21.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<div aria-hidden="true" class="col-xl-3 slick-slide slick-cloned" data-slick-index="9" id="" style="width: 308px;" tabindex="-1">
											<div class="exclusive-item exclusive-item-three text-center">
												<div class="exclusive-item-thumb">
													<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1"><img alt="" src="temp/td_product_img02.jpg"><img alt="" class="overlay-product-thumb" src="temp/td_product_img05.jpg"></a>
													<ul class="action">
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-shuffle-1"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-supermarket"></i></a>
														</li>
														<li>
															<a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#" tabindex="-1"><i class="flaticon-witness"></i></a>
														</li>
													</ul>
												</div>
												<div class="exclusive-item-content">
													<h5><a href="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html" tabindex="-1">Luxury Fashion Bag</a></h5>
													<div class="exclusive--item--price">
														<del class="old-price">$69.00</del><span class="new-price">$29.00</span>
													</div>
													<div class="rating">
														<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						{{-- <div class="product-reviews-wrap">
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
													<div class="comment-avatar-img"><img alt="img" src="temp/review_author_thumb01.jpg"></div>
													<div class="comment-text">
														<div class="comment-avatar-info">
															<h5>Emaliy Watson <span class="comment-date">- November 13,2020</span></h5>
															<div class="rating">
																<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
															</div>
														</div>
														<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="single-comment">
													<div class="comment-avatar-img"><img alt="img" src="temp/review_author_thumb02.jpg"></div>
													<div class="comment-text">
														<div class="comment-avatar-info">
															<h5>Tomas Alexzender <span class="comment-date">- November 13,2020</span></h5>
															<div class="rating">
																<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
															</div>
														</div>
														<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="single-comment">
													<div class="comment-avatar-img"><img alt="img" src="temp/review_author_thumb03.jpg"></div>
													<div class="comment-text">
														<div class="comment-avatar-info">
															<h5>Rana Watson <span class="comment-date">- November 13,2020</span></h5>
															<div class="rating">
																<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
															</div>
														</div>
														<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="single-comment">
													<div class="comment-avatar-img"><img alt="img" src="temp/review_author_thumb04.jpg"></div>
													<div class="comment-text">
														<div class="comment-avatar-info">
															<h5>Emaliy Watson <span class="comment-date">- November 13,2020</span></h5>
															<div class="rating">
																<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
															</div>
														</div>
														<p>Cramond Leopard &amp; Pythong Print Anorak Jacket In Beige but also the leap into electronic typesetting,remaining.</p>
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
											<div class="rising-rating" style="width: 78.75px; height: 20.3523px; position: relative; cursor: default; user-select: none;">
												<div class="rate-base-layer" style="width: 100%; height: 20.3636px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;">
													<span><i class="far fa-star"></i></span><span><i class="far fa-star"></i></span><span><i class="far fa-star"></i></span><span><i class="far fa-star"></i></span><span><i class="far fa-star"></i></span>
												</div>
												<div class="rate-select-layer" style="width: 0%; height: 20.3636px; overflow: hidden; position: absolute; top: 0px; display: block; white-space: nowrap;">
													<span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span>
												</div>
												<div class="rate-hover-layer" style="width: 0%; height: 20.3636px; overflow: hidden; position: absolute; top: 0px; display: none; white-space: nowrap;">
													<span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span><span><i class="fas fa-star"></i></span>
												</div>
											</div>
										</div>
										<form action="http://v.bootstrapmb.com/2020/8/6d78d8710/shop-details.html#">
											<div class="form-grp">
												<label for="message">YOUR REVIEW *</label>
												<textarea id="message" name="message"></textarea>
											</div>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-grp">
														<label for="uea">YOUR NAME *</label><input id="uea" type="text">
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-grp">
														<label for="email">YOUR Email *</label><input id="email" type="email">
													</div>
												</div>
											</div><button class="btn">SUBMIT</button>
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

@section('script')
    <script src="js/product-single/popper.min.js">
	</script>
	{{-- <script src="js/product-single/bootstrap.min.js">
	</script> --}}
	<script src="js/product-single/isotope.pkgd.min.js">
	</script>
	{{-- <script src="js/product-single/imagesloaded.pkgd.min.js">
	</script> --}}
	<script src="js/product-single/jquery.magnific-popup.min.js">
	</script>
	<script src="js/product-single/owl.carousel.min.js">
	</script>
	{{-- <script src="js/product-single/jquery.odometer.min.js">
	</script>
	<script src="js/product-single/jquery.countdown.min.js">
	</script>
	<script src="js/product-single/jquery.appear.js">
	</script> --}}
	<script src="js/product-single/slick.min.js">
	</script>
	<script src="js/product-single/ajax-form.js">
	</script>
	<script src="js/product-single/wow.min.js">
	</script>
	<script src="js/product-single/aos.js">
	</script>
	<script src="js/product-single/plugins.js">
	</script>
	<script src="js/product-single/main.js">
	</script>
@endsection
