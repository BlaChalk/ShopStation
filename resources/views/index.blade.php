@extends('layouts.frontend')

@section('hero')
    <!--hero section-->
    <div class="vertical-align text-center">
        <img id="banner" src="/images/banner/B201602190012.jpg" alt="">
        <div class="container-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner-title">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--hero section-->
@endsection

@section('content')
    <!--body content start-->
    <section class="body-content">

        <!--feature-->
        <div class="page-content">
            <div class="container">
                <div class="row ">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase"> Life is just beginning.</h3>
                        <p class="half-txt p-top-30">本公司現有以下產品可供購買使用。</p>
                    </div>

                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_01.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>站立式輪椅</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_02.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>電動輪椅</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_03.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>電動代步車</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row ">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase"></h3>
                    </div>

                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_04.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>手動輪椅</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_05.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>助行器</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="featured-item feature-bg-box gray-bg text-center m-bot-0 inline-block radius-less blue-bg">
                            <div class="productIcon">
                                <img src="images/product/hot_pro_06.jpg" alt="">
                            </div>
                            <div class="title text-uppercase">
                                <h4>洗澡便器椅</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--feature-->



        <!--progress-->
        <div class="page-content parallax-inner parallax-12">

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="theme-color txt-xl">公司創立沿革：</p>
                        <p class="light-txt">龍熒股份有限公司成立於一九七八年，秉持「愛心」、「品質」、「創新」的經營理念，卅多年來多次榮獲台灣精品獎、優良設計獎，公司並榮獲第一屆小巨人獎。以ＣＯＭＦＯＲＴ（康而富時尚輔具）品牌行銷五大洲，已經成為醫療復健器材界中的高品質代表。</p>
                        <p class="theme-color txt-xl">品牌簡介：</p>
                        <p class="light-txt">2003年ＣＯＭＦＯＲＴ（康而富時尚輔具），本著使用者至上的理念，打造舒適化、人性化、自主化、科技化的輔具，更以”時尚”輔具為概念，讓所有使用者更具自信與尊嚴。此外，為落實精耕醫材的目標，以使用者需求為前提，積極從事高品質,輕量化的新型輪椅、站立式輪椅、運動輪椅及電動代步車的設計開發。康而富的產品擁有多國認證,有歐盟的CE,美國的FDA,德國的TUV等,行銷全球,深獲肯定，目標要成為全球行動輔具業界中的第一品牌。</p>
                        <div>
                            <a href="#" class="btn btn-medium btn-light-border   btn-transparent "> 品牌故事</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-5">
                        <!-- progress bar start -->
                        <div class="progress  massive-progress-alt progress-light-trans-bg">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                HTML / CSS / JQUERY <span>80%</span>
                            </div>
                        </div>
                        <!-- progress bar end -->

                        <!-- progress bar start -->
                        <div class="progress  massive-progress-alt progress-light-trans-bg">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                PHOTOSHOP <span>90%</span>
                            </div>
                        </div>
                        <!-- progress bar end -->

                        <!-- progress bar start -->
                        <div class="progress  massive-progress-alt progress-light-trans-bg">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                GRAPHIC DESIGN <span>75% </span>
                            </div>
                        </div>
                        <!-- progress bar end -->

                        <!-- progress bar start -->
                        <div class="progress  massive-progress-alt progress-light-trans-bg">
                            <div class="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                PHP / WORDPRESS <span>82%</span>
                            </div>
                        </div>
                        <!-- progress bar end -->

                        <!-- progress bar start -->
                        <div class="progress  massive-progress-alt progress-light-trans-bg">
                            <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                REQUIREMENT ANALYSIS <span>67%</span>
                            </div>
                        </div>
                        <!-- progress bar end -->
                    </div> --}}
                </div>
            </div>

        </div>
        <!--progress-->


        <!--blog post-->
        <div class="page-content">
            <div class="container">
                <div class="row">

                    <div class="heading-title text-center">
                        <h3 class="text-uppercase">Latest Blog Post</h3>
                    </div>

                    <!--post style 2 start-->
                    <div class="post-list">
                        <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img">
                                    <img src="assets/img/post/p4.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">ultra modern design</a>
                                    </h4>
                                    <div class="date">
                                        <a href="#" class="author">martin smith</a> july 29, 2015
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img ">
                                    <img src="assets/img/post/p5.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">fully responsive</a>
                                    </h4>
                                    <div class="date">
                                        <a href="#" class="author">martin smith</a> july 29, 2015
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="post-single">
                                <ul class="post-cat">
                                    <li><a href="#">interface</a>
                                    </li>
                                    <li><a href="#">standard</a>
                                    </li>
                                </ul>
                                <div class="post-img">
                                    <img src="assets/img/post/p6.jpg" alt="">
                                </div>
                                <div class="post-desk">
                                    <h4 class="text-uppercase">
                                        <a href="#">light weight theme</a>
                                    </h4>
                                    <div class="date">
                                        <a href="#" class="author">martin smith</a> july 29, 2015
                                    </div>
                                    <p>
                                        Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                                    </p>
                                    <a href="#" class="p-read-more">Read More <i class="icon-arrows_slim_right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--post style 2 end-->
                </div>
            </div>
        </div>
        <!--blog post-->

        <!--subscribe-->
        <div class="subscribe-box gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="subscribe-info">
                            <h4>subscribe to get in touch</h4>
                            <span>Nullam ut consectetur dolor. Sed sit amet iaculis nisi. </span>
                        </div>
                        <div class="subscribe-form">
                            <form class="form-inline">
                                <input type="text" class="form-control radius-less" placeholder="Enter your email address">
                                <button type="submit" class="btn btn-medium btn-dark-solid text-uppercase">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--subscribe-->

        <!--clients-->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="clients angle-box grid-3 ">
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-1.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-2.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-3.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-4.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-5.png" alt="Clients">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/clients/c-6.png" alt="Clients">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <!--testimonial start-->
                        <div id="testimonial-2" class="">
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>
                                        Nam nec dui dolor. Curabitur in laoreet erat. Nam nec dui dolor. Aliquam varius dolor nunc, interdum commodo justoporttitor vitae. Quisque fermentum purus.
                                    </p>
                                    <div class="testimonial-meta">
                                        - Kevin Paige -
                                        <span>ABC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet.</p>
                                    <div class="testimonial-meta">
                                        - John Doe -
                                        <span>head of marketing, TB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item left-align">
                                <div class="tst-thumb">
                                    <img class="circle" src="assets/img/post/a1.png" alt="">
                                </div>
                                <div class="content">
                                    <p>Vestibulum varius fermentum risus vitae lacinia neque auctor nec. Nunc ac rutrum nulla. Nulla maximus dolor in quam euismod ac viverra libero aliquet.</p>
                                    <div class="testimonial-meta">
                                        - Linda Smith -
                                        <span>CEO, TB</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--testimonial end-->
                    </div>
                </div>
            </div>
        </div>
        <!--clients-->

        <!--promo-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-box gray-bg m-bot-100">
                        <div class="promo-info">
                            <h4>new <span class="theme-color">offer</span> for this <span class="theme-color">summer</span></h4>
                            <span>Nullam ut consectetur dolor. Sed sit amet iaculis nisi. Mauris ridiculus elementum non felis etewe blandit. </span>
                        </div>
                        <div class="promo-btn">
                            <a href="#" class="btn btn-medium btn-dark-solid  text-uppercase">purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--promo-->

    </section>
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
                            <li>
                                <a href="#">
                                    <img src="assets/img/recent-work/9.jpg" alt="" />
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
