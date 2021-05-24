<?php
    $dir_main = "learn";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">

<title>Courses</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="{{asset("$dir_main/assets/images/favicon.png")}}" type="image/png">

<link rel="stylesheet" href="{{asset("$dir_main/assets/css/animate.css")}}">

<link rel="stylesheet" href="{{asset("$dir_main/assets/css/lineicons.css")}}">

<link rel="stylesheet" href="{{asset("$dir_main/assets/css/bootstrap-5.0.5-alpha.min.css")}}">

<link rel="stylesheet" href="{{asset("$dir_main/assets/css/style.css")}}">
</head>
<body>
<!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

<div class="preloader">
<div class="loader">
<div class="ytp-spinner">
<div class="ytp-spinner-container">
<div class="ytp-spinner-rotator">
<div class="ytp-spinner-left">
<div class="ytp-spinner-circle"></div>
</div>
<div class="ytp-spinner-right">
<div class="ytp-spinner-circle"></div>
</div>
</div>
</div>
</div>
</div>
</div>


<header class="header_area">
<div id="header_navbar" class="header_navbar">
<div class="container">
<div class="row align-items-center">
<div class="col-xl-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index.html">
<img id="logo" src="{{asset("$dir_main/assets/images/logo.svg")}}" alt="Logo">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
<ul id="nav" class="ml-auto navbar-nav">
<li class="nav-item">
<a class="page-scroll" href="index.html#home">Home</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="index.html#courses">Courses</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="index.html#mentors">Mentors</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="index.html#blog">Blog</a>
</li>
<li class="nav-item">
<a class="page-scroll" href="index.html#contact">Contact</a>
</li>
<li class="nav-item">
<a class="header-btn btn-hover" href="index.html#course">Get Started</a>
</li>
</ul>
</div> 
</nav> 
</div>
</div> 
</div> 
</div> 
</header>


<section class="page-banner pt-200 pb-100 bg_cover" style="background-image: url('{{asset("$dir_main/assets/images/hero-bg.jpg")}}');">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="text-center banner-content">
<h1 class="text-white">Courses Page</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Courses</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</section>


<section id="courses" class="course-area pt-140">
<div class="container">
<div class="row">
<div class="mx-auto col-xl-6 col-lg-7 col-md-10">
<div class="text-center section-title mb-50">
<h2 class="mb-15 wow fadeInUp" data-wow-delay=".2s">All Courses</h2>
<p class="wow fadeInUp" data-wow-delay=".4s">eStore UI Kit comes with all essential features, sections and elements you need
to design and develop web UI efficiently.</p>
</div>
</div>
</div>
<div class="row mb-30">
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".2s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/full-stack.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">Full-stack Web Development</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>3.5k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>12k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>5.0</span>
</div>
<div class="price">
<span>$99.00</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".4s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/design.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">UX/UI Design</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>3k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>11k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>5.0</span>
</div>
<div class="price">
<span>$39.00</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".6s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/js.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">Modern JavaScript</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>2.5k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>18k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>4.0</span>
</div>
<div class="price">
<span>$19.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row mb-30">
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".2s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/business.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">Business Development</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>1.5k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>15k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>4.5</span>
</div>
<div class="price">
<span>$19.00</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".4s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/marketing.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">Email Marketing 101</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>1.9k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>5k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>5.0</span>
</div>
<div class="price">
<span>$69.00</span>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-course wow fadeInUp" data-wow-delay=".6s">
<div class="course-img">
<a href="course-single.html">
<img src="{{asset("$dir_main/assets/images/course/python.jpg")}}" alt="">
</a>
</div>
<div class="course-info">
<h4><a href="course-single.html">Getting Started with Python</a></h4>
<div class="course-meta">
<div class="meta-item">
<i class="lni lni-user"></i>
<span>1.2k</span>
</div>
<div class="meta-item">
<i class="lni lni-eye"></i>
<span>13k</span>
</div>
<div class="meta-item">
<i class="lni lni-star"></i>
<span>3.5</span>
</div>
<div class="price">
<span>$9.00</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<footer id="footer" class="footer-area pt-170">
<div class="container">
<div class="row">
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="footer-widget">
<a href="index.html" class="logo d-blok">
<img src="{{asset("$dir_main/assets/images/logo.svg")}}" alt="">
</a>
<p>Lorem ipsum dolor sit amco nsetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna .</p>
</div>
</div>
<div class="col-xl-2 col-lg-2 offset-xl-1 offset-lg-1 col-md-6">
<div class="footer-widget">
<h5>Quick Links</h5>
<ul>
<li><a href="javascript:void(0)">Home</a></li>
<li><a href="javascript:void(0)">Cources</a></li>
<li><a href="javascript:void(0)">Event</a></li>
<li><a href="javascript:void(0)">Blog</a></li>
<li><a href="javascript:void(0)">Contact</a></li>
</ul>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-6">
<div class="footer-widget">
<h5>Our Course</h5>
<ul>
<li><a href="javascript:void(0)">Design</a></li>
<li><a href="javascript:void(0)">Development</a></li>
<li><a href="javascript:void(0)">Marketing</a></li>
<li><a href="javascript:void(0)">SEO Design</a></li>
<li><a href="javascript:void(0)">Business</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6">
<div class="footer-widget">
<h5>Contact Us</h5>
<ul>
<li><p>Phone: +884-9273-3867</p></li>
<li><p>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="026a676e6e6d42656f636b6e2c616d6f">[email&#160;protected]</a></p></li>
<li><p>Address: United State Of <br> America UNDF School</p></li>
</ul>
</div>
</div>
</div>
<div class="footer-credit">
<div class="row">
<div class="col-md-6">
<div class="text-center copy-right text-md-left">
<p>Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
</div>
</div>
<div class="col-md-6">
<div class="footer-social">
<ul class="d-flex justify-content-md-end justify-content-center">
<li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a></li>
<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>


<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>


<script data-cfasync="false" src="{{asset("$dir_main/assets/js/email-decode.min.js")}}"></script><script src="{{asset("$dir_main/assets/js/bootstrap.bundle-5.0.0.alpha-min.js")}}"></script>

<script src="{{asset("$dir_main/assets/js/wow.min.js")}}"></script>

<script src="{{asset("$dir_main/assets/js/main.js")}}"></script>
</body>
</html>
