<?php
    $dir_main = "learn";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">

<title>Single Course</title>
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
<ul id="nav" class="navbar-nav ml-auto">
<li class="nav-item">
<a href="index.html#home">Home</a>
</li>
<li class="nav-item">
<a href="index.html#courses">Courses</a>
</li>
<li class="nav-item">
<a href="index.html#mentors">Mentors</a>
</li>
<li class="nav-item">
<a href="index.html#blog">Blog</a>
</li>
<li class="nav-item">
<a href="index.html#contact">Contact</a>
</li>
<li class="nav-item">
<a class="header-btn btn-hover" href="index.html#courses">Get Started</a>
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
<div class="banner-content text-center">
<h1 class="text-white">Course Single</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Course Single</li>
</ol>
</nav>
</div>
</div>
</div>
</div>
</section>


<section id="course" class="course-area pt-140">
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="single-course-wrapper">
<div class="course-title mb-30">
<h3 class="mb-20">Modern JavaScript</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
</div>
<div class="course-img mb-30">
<img src="{{asset("$dir_main/assets/images/course/course-single.jpg")}}" alt="">
</div>
<div class="course-description pb-20 border-bottom">
<h3 class="mb-20">DESCRIPTION</h3>
<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit incidunt, est cupiditate illo, pariatur sapiente atque! Saepe, rerum quis ab, adipisci, in placeat eos assumenda recusandae nam repellendus aut quas. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, voluptates, distinctio. Maxime distinctio sunt mollitia vel laborum qui facere. Molestiae et vitae minus doloremque magni minima ad soluta in a.</p>
<p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto fuga libero commodi perspiciatis quasi autem excepturi et, pariatur maxime, sint velit aperiam modi minima doloribus ipsam nisi sunt voluptatum, quisquam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores est animi alias molestias aspernatur minus accusantium fuga dolores, ipsa, minima placeat deleniti id dicta magni, cupiditate praesentium, nemo labore unde.</p>
</div>
<div class="course-included pt-50 pb-50 border-bottom">
<h3 class="mb-20">TOPICS INCLUDED</h3>
<div class="row">
<div class="col-md-6">
<ul>
<li><i class="lni lni-checkmark"></i> React</li>
<li><i class="lni lni-checkmark"></i> ES7</li>
<li><i class="lni lni-checkmark"></i> Vue</li>
<li><i class="lni lni-checkmark"></i> React Router</li>
</ul>
</div>
<div class="col-md-6">
<ul>
<li><i class="lni lni-checkmark"></i> Personal Assistance</li>
<li><i class="lni lni-checkmark"></i> Standard and Secure Code</li>
<li><i class="lni lni-checkmark"></i> Validated</li>
</ul>
</div>
</div>
</div>
<div class="course-content pt-50 pb-35">
<h3 class="mb-20">COURSE CONTENT</h3>
<div class="accordion" id="accordionExample">
<div class="single-accordion">
<div class="accordion-btn" id="headingOne">
<button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Collapsible Group Item #1
</button>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="accordion-content">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
</div>
</div>
</div>
<div class="single-accordion">
<div class="accordion-btn" id="headingTwo">
<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
Collapsible Group Item #1
</button>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="accordion-content">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
</div>
</div>
</div>
<div class="single-accordion">
<div class="accordion-btn" id="headingThree">
<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
Collapsible Group Item #1
</button>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
<div class="accordion-content">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
</div>
</div>
</div>
<div class="single-accordion">
<div class="accordion-btn" id="headingFour">
<button class="btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
Collapsible Group Item #1
</button>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
<div class="accordion-content">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="right-sidebar">
<div class="course-info mb-50">
<h3 class="mb-20 text-center">Course Information</h3>
<ul class="mb-30">
<li class="d-flex justify-content-between">
<span>Starts:</span>
<span class="text-right">November 22, 2030</span>
</li>
<li class="d-flex justify-content-between">
<span>Duration:</span>
<span class="text-right">November 28 Weeks</span>
</li>
<li class="d-flex justify-content-between">
<span>Study Level:</span>
<span class="text-right">Intermediate</span>
</li>
<li class="d-flex justify-content-between">
<span>Discipline:</span>
<span class="text-right"><a href="javascript:void(0)">Other Courses</a>, <a href="javascript::void(0)">Tech Courses</a></span>
</li>
<li class="d-flex justify-content-between">
<span>Price:</span>
<span class="text-right text-warning">$45.00</span>
</li>
</ul>
<a href="javascript:void(0)" class="main-btn btn-hover">Purchase Course</a>
</div>
<div class="course-category">
<h3 class="mb-20">Course Category</h3>
<ul>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right mr-2"></i>Site Template</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right mr-2"></i>Site Template</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right mr-2"></i>Site Template</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right mr-2"></i>Site Template</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right mr-2"></i>Site Template</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<footer id="footer" class="footer-area pt-120">
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
<li><p>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b434e4747446b4c464a424705484446">[email&#160;protected]</a></p></li>
<li><p>Address: United State Of <br> America UNDF School</p></li>
</ul>
</div>
</div>
</div>
<div class="footer-credit">
<div class="row">
<div class="col-md-6">
<div class="copy-right text-center text-md-left">
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
