@extends('layouts.frontend', [$page='product'])

@section('page-title')
    <!--page title start-->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-uppercase">Blog Listing</h4>
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
<section class="body-content ">

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--classic image post-->
                    <div class="blog-classic">
                        <div class="date">
                            24
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <div class="full-width">
                                <img src="assets/img/post/p12.jpg" alt="" />
                            </div>
                            <h4 class="text-uppercase"><a href="blog-single.html">standard blog post with photo</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                </li>
                            </ul>
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                        </div>
                    </div>
                    <!--classic image post-->

                    <!--classic gallery post-->
                    <div class="blog-classic">
                        <div class="date">
                            20
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <div class="full-width ">
                                <div class="post-slider post-img text-center relative">
                                    <ul class="slides">
                                        <li>
                                            <a href="javascript:;" title="Freshness Photo">
                                                <img src="assets/img/post/p3.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="Awesome Lightbox">
                                                <img src="assets/img/post/p2.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="Massive UI Components">
                                                <img src="assets/img/post/p1.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h4 class="text-uppercase"><a href="blog-single.html">Gallery Image Post</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                </li>
                            </ul>
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                        </div>
                    </div>
                    <!--classic gallery post-->

                    <!--classic text post-->
                    <div class="blog-classic">
                        <div class="date">
                            17
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <h4 class="text-uppercase"><a href="blog-single.html">standard Text post</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                </li>
                            </ul>
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                        </div>
                    </div>
                    <!--classic text post-->

                    <!--classic quote post-->
                    <div class="blog-classic">
                        <div class="date">
                            17
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <blockquote class="quote-post">
                                <p>
                                    Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error
                                </p>
                            </blockquote>
                            <span>- Princes Meridina</span>
                        </div>
                    </div>
                    <!--classic quote post-->

                    <!--classic audio post-->
                    <div class="blog-classic">
                        <div class="date">
                            15
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <p class="audio-fit m-bot-50">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115637399&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"></iframe>
                            </p>

                            <h4 class="text-uppercase"><a href="blog-single.html">Audio post</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                </li>
                            </ul>
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                        </div>
                    </div>
                    <!--classic audio post-->

                    <!--classic video post-->
                    <div class="blog-classic">
                        <div class="date">
                            10
                            <span>MAR 2015</span>
                        </div>
                        <div class="blog-post">
                            <p class="video-fit m-bot-50">
                                <iframe width="560" height="315" src="//www.youtube.com/embed/lq_BVyou38s" allowfullscreen></iframe>
                            </p>
                            <h4 class="text-uppercase"><a href="blog-single.html">Video post</a></h4>
                            <ul class="post-meta">
                                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a>
                                </li>
                                <li><i class="fa fa-folder-open"></i>  <a href="#">lifestyle</a>, <a href="#">travel</a>, <a href="#">fashion</a>
                                </li>
                                <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                </li>
                            </ul>
                            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <a href="blog-single.html" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                        </div>

                    </div>
                    <!--classic video post-->


                    <!--pagination-->
                    <div class="text-center">
                        <ul class="pagination custom-pagination">
                            <li><a href="#">Prev</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                    <!--pagination-->

                </div>
                <div class="col-md-4">

                    <!--search widget-->
                    <div class="widget">
                        <form class="form-inline form" role="form">
                            <div class="search-row">
                                <button class="search-btn" type="submit" title="Search">
                                    <i class="fa fa-search"></i>
                                </button>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <!--search widget-->

                    <!--author widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">about author</h6>
                        </div>
                        <div class="full-width avatar">
                            <img src="assets/img/post/avatar.jpg" alt="" />
                        </div>
                        <p>Persuaded to return to the shoemaker's shop, young Edward struggled on till three years of his wretched apprenticeship had passed over.</p>

                        <span class="">- Nelson Leonard</span>
                    </div>
                    <!--author widget-->

                    <!--latest post widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">latest post</h6>
                        </div>
                        <ul class="widget-latest-post">
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Old Father Getup</a>
                                    April 25, 2014
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Represent is the best way</a>
                                    March 28, 2014
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <a href="#">
                                        <img src="assets/img/post/post-thumb-3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="w-desk">
                                    <a href="#">Alone with the music</a>
                                    May 05, 2014
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--latest post widget-->

                    <!--follow us widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">follow us</h6>
                        </div>
                        <div class="widget-social-link circle">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                    <!--follow us widget-->

                    <!--category widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">category</h6>
                        </div>
                        <ul class="widget-category">
                            <li><a href="#">Animals</a>
                            </li>
                            <li><a href="#">Landscape</a>
                            </li>
                            <li><a href="#">Portrait</a>
                            </li>
                            <li><a href="#">Wild Life</a>
                            </li>
                            <li><a href="#">Video</a>
                            </li>
                        </ul>
                    </div>
                    <!--category widget-->

                    <!--comments widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">Latest comments </h6>
                        </div>
                        <ul class="widget-comments">
                            <li>Jonathan on <a href="javascript:;">Vesti blulum quis dolor </a>
                            </li>
                            <li>Jane Doe on <a href="javascript:;">Nam sed arcu tellus</a>
                            </li>
                            <li>Margarita on <a href="javascript:;">Fringilla ut vel ipsum </a>
                            </li>
                            <li>Smith on <a href="javascript:;">Vesti blulum quis dolor sit</a>
                            </li>
                        </ul>
                    </div>
                    <!--comments widget-->

                    <!--tags widget-->
                    <div class="widget">
                        <div class="heading-title-alt text-left heading-border-bottom">
                            <h6 class="text-uppercase">tag cloud</h6>
                        </div>
                        <div class="widget-tags">
                            <a href="">Portfolio</a>
                            <a href="">Design</a>
                            <a href="">Link</a>
                            <a href="">Gallery</a>
                            <a href="">Video</a>
                            <a href="">Clean</a>
                            <a href="">Retina</a>
                        </div>
                    </div>
                    <!--tags widget-->

                </div>
            </div>
        </div>
    </div>


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
