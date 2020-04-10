<?php
session_start();
require_once '../../config/utils.php';

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from themeearth.com/tf/html/kenduya/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 08:15:06 GMT -->
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta charset="utf-8">
<meta name="description" content="Kenduya || Cleaning Company Business HTML5 Template">
<meta name="keywords" content="car cleaning, clean, cleaning, cleaning products, commercial cleaning, gardening, green spaces maintenance, house cleaning, housekeeping, janitorial, laundry, maid, move in out, post renovation, window cleaning">
<meta name="author" content="Theme Path">

<title>Kenduya || Cleaning Company Business HTML5 Template</title>

<link rel="icon" type="image/png" href="<?=THEME_ASSET_URL ?>img/favicon.png">

<link rel="apple-touch-icon" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="57x57" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=THEME_ASSET_URL ?>img/apple-touch-icon-180x180.png">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/magnific-popup.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/animate.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/meanmenu.min.css">
<link rel="stylesheet" href="<?=THEME_ASSET_URL ?>css/responsive.css">


<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div id="preloader">
<div id="preloader-status"></div>
</div>


<header>

<div class="hd-sec">
<div class="container">
<div class="row menu-area">

<div class="col-md-2 col-sm-3 col-xs-8">
<div class="logo">
<a href="index.php"><img src="<?=THEME_ASSET_URL ?>img/logo.png" alt="" /></a>
</div>
</div>


<div class="mobile-nav-menu"></div>
<div class="col-md-8 col-sm-7 menu-center">
<div class="menu">
<nav id="main-menu" class="main-menu">
<ul>
<li><a href="<?=THEME_ASSET_URL ?>about.html">about</a></li>
<li><a href="<?=THEME_ASSET_URL ?>service.html">service</a></li>
<li><a href="<?=THEME_ASSET_URL ?>blog.html">blog</a></li>
<li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
<li><a href="<?=THEME_ASSET_URL ?>blog.html">blog</a>
<ul>
<li><a href="<?=THEME_ASSET_URL ?>blog.html">blog</a></li>
<li><a href="<?=THEME_ASSET_URL ?>blog-details.html">blog details</a></li>
</ul>
</li>
<li><a href="#">Page</a>
<ul>
<li><a href="<?=THEME_ASSET_URL ?>about.html">about</a></li>
<li><a href="<?=THEME_ASSET_URL ?>service.html">service</a></li>
<li><a href="<?=THEME_ASSET_URL ?>service-details.html">service details</a></li>
<li><a href="<?=THEME_ASSET_URL ?>blog.html">blog</a></li>
<li><a href="<?=THEME_ASSET_URL ?>blog-details.html">blog details</a></li>
<li><a href="<?=THEME_ASSET_URL ?>contact.html">contact</a></li>
</ul>
</li>
<li><a href="<?=BASE_URL ?>login.php">Login</a></li>
</ul>
</nav>
</div>
</div>


<div class="col-md-2 col-sm-2 cart-button-area">


<div class="search-bar-icon">
<div class="site-search">
<span data-toggle="dropdown"><i class="fa fa-search"></i></span>
<div class="search-forum dropdown-menu animation slideUpIn">
<form action="#">
<input placeholder="Search For Site" type="text">
<input type="submit" value="Go" />
</form>
</div>
</div>
</div>

</div>

</div>
</div>
</div>

</header>


<div class="banner-sec">
<div class="banner-text">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 contact-form-inner">
<div class="banner-contact-form">
<form id="add-vehicle-type-form" action="<?= BASE_URL . 'save-add.php'?>" method="post" enctype="multipart/form-data">
<h1>ĐĂNG KÍ DỌN DẸP</h1>

<div class="contact-field">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input type="text" placeholder="Name" name="name">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input type="text" placeholder="contact_number" name="contact_number">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input type="email" placeholder="email" name="email">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input type="text" placeholder="Địa chỉ" name="address">
<input type="" hidden value="Đang xử lý" name="status">
</div>
</div>
<div class="col-md-12">
<div class="single-input-field">
<input type="text" placeholder="Lời nhắn" name="messages">
</div>
</div>
<div class="single-input-fieldsbtn">
<div class="col-12 d-flex justify-content-end">
                           <button class="btn btn-primary" name="luu" onclick="alert('Đăng ký thành công, bạn hãy chờ nhân viên liên hệ với bạn!')">Đăng ký</button>&nbsp;

               

                        </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>


<div class="service-sec pt-100 pb-80">
<div class="container">

<div class="row">
<div class="col-md-12">
<div class="section-title">
<span class="sub-title">services</span>
<h1>Dịch Vụ Tốt Nhất Của Chúng Tôi</h1>
<div class="title-shape">
<span>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
</span>
</div>
</div>
</div>
</div>

<div class="row">

<div class="col-md-4 col-sm-4">
<div class="single-service-inner">
<div class="service-img">
<img src="<?=THEME_ASSET_URL ?>img/service-1.jpg" alt="" />
<div class="service-icon">
<img src="<?=THEME_ASSET_URL ?>img/icon/service-icon-1.png" alt="" />
</div>
</div>
<div class="service-desc">
<h2>Dọn dẹp Văn Phòng</h2>
</div>
<div class="service-overlay">
<div class="service-overlay-middle">
<h2>Dọn dẹp Văn Phòng</h2>
<a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>


<div class="col-md-4 col-sm-4">
<div class="single-service-inner">
<div class="service-img">
<img src="<?=THEME_ASSET_URL ?>img/service-2.jpg" alt="" />
<div class="service-icon">
<img src="<?=THEME_ASSET_URL ?>img/icon/service-icon-5.png" alt="" />
</div>
</div>
<div class="service-desc">
<h2>Dọn dẹp Phòng Bếp</h2>
</div>
<div class="service-overlay">
<div class="service-overlay-middle">
<h2>Dọn dẹp Phòng Bếp</h2>
<a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>


<div class="col-md-4 col-sm-4">
<div class="single-service-inner">
<div class="service-img">
<img src="<?=THEME_ASSET_URL ?>img/service-3.jpg" alt="" />
<div class="service-icon">
<img src="<?=THEME_ASSET_URL ?>img/icon/service-icon-3.png" alt="" />
</div>
</div>
<div class="service-desc">
<h2>Tổng vệ sinh Công Trường</h2>
</div>
<div class="service-overlay">
<div class="service-overlay-middle">
<h2>Tổng vệ sinh Công Trường</h2>
<a href="#"><i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<div class="why-us-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="why-us-inner-sec">
<div class="col-md-8">
<div class="process-step">
<div class="process-middle-step">
<div class="single-process-step">
<span class="process-no">01</span>
<span class="process-icon"><img src="<?=THEME_ASSET_URL ?>img/icon/vacuum.png" alt="" /></span>
</div>
<div class="single-process-step">
<span class="process-no">02</span>
<span class="process-icon"><img src="<?=THEME_ASSET_URL ?>img/icon/vacuum.png" alt="" /></span>
</div>
<div class="single-process-step">
<span class="process-no">03</span>
<span class="process-icon"><img src="<?=THEME_ASSET_URL ?>img/icon/vacuum.png" alt="" /></span>
</div>
<div class="single-process-step">
<span class="process-no">04</span>
<span class="process-icon"><img src="<?=THEME_ASSET_URL ?>img/icon/vacuum.png" alt="" /></span>
</div>
<h1>our process</h1>
</div>
</div>
</div>
<div class="col-md-4">
<div class="why-us-list">
<div class="why-us-list-inner">
<div class="why-us-list-inner-title">
<h2><img src="<?=THEME_ASSET_URL ?>img/icon/list-vacuu-icon-1.png" alt="" /><span>Hút Bụi</span></h2>
<p>Chúng tôi hút bụi làm sạch tới mọi ngóc ngách nhà bạn</p>
</div>
</div>
<div class="why-us-list-inner">
<div class="why-us-list-inner-title">
<h2><img src="<?=THEME_ASSET_URL ?>img/icon/list-vacuu-icon-2.png" alt="" /><span>Loại bỏ vết bẩn</span></h2>
<p>Chúng tôi giúp bạn loại bỏ những vết bẩn cứng đầu</p>
</div>
</div>
<div class="why-us-list-inner">
<div class="why-us-list-inner-title">
<h2><img src="<?=THEME_ASSET_URL ?>img/icon/list-vacuu-icon-3.png" alt="" /><span>Dọn Dẹp Bằng Nước Nóng</span></h2>
<p>Chúng tôi làm sạch mọi thứ trong nhà bạn bằng nước nóng</p>
</div>
</div>
<div class="why-us-list-inner">
<div class="why-us-list-inner-title">
<h2><img src="<?=THEME_ASSET_URL ?>img/icon/list-vacuu-icon-4.png" alt="" /><span>Những Biện Pháp Bảo Vệ</span></h2>
<p>Chúng tôi áp dụng những biện pháp bảo vệ giúp bạn thoải mái hơn</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="call-to-action-sec">
<div class="container">
<div class="row all-to-action-area">
<div class="col-md-7 col-sm-9">
<div class="call-to-action-text">
<h2>Chúng tôi là những người giỏi nhất trong lĩnh vực của mình</h2>
<p>Với những kinh nghiệm lâu năm trong việc dọn dẹp với đa dạng các hình thức dọn dẹp. Với đội ngũ nhân viên chuyên nghiệp tân tình chu đáo . Với những thiết bị hiện đại tiên tiến sẽ giúp bạn có được trải nghiệm tuyệt vời nhất với một không gian sạch sẽ hết mức có thể</p>
<a href="contact.html" class="btn">view details</a>
</div>
</div>
<div class="col-md-5 video-sec">
<div class="video-sec-middle">
<div class="vedio-button">
<a href="https://www.youtube.com/watch?v=YzDz8g1z83U" class="mfp-iframe vedio-play"></a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="testimonial-and-faq-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="col-md-6">

<div class="section-title">
<span class="sub-title">Lời chứng thực
</span>
<h1>Khách hàng nói gì về chúng tôi
</h1>
<div class="title-shape">
<span>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
</span>
</div>
</div>

<div class="all-testimonial">
<div class="single-testimonial">
<div class="client-comment">
<div class="client-thumb">
<img src="<?=THEME_ASSET_URL ?>img/team-1.jpg" alt="" />
<div class="shape-box"></div>
</div>
<h2>Nguyễn Công Nga</h2>
<h3>Nhân viên lau dọn</h3>
<p>Một anh thợ sửa điều hòa tâm huyết hết mình</p>
</div>
</div>
<div class="single-testimonial">
<div class="client-comment">
<div class="client-thumb">
<img src="<?=THEME_ASSET_URL ?>img/staff1.jpg" alt="" />
<div class="shape-box"></div>
</div>
<h2>Nguyễn Thiện Tâm</h2>
<h3>Thợ Sửa Ống Nước</h3>
<p>Người Thợ sửa ống nước chuyên nghiệp chỉ làm việc sau 22h đêm để có thể hoàn thành công việc tốt nhất</p>
</div>
</div>
<div class="single-testimonial">
<div class="client-comment">
<div class="client-thumb">
<img src="<?=THEME_ASSET_URL ?>img/team-1.jpg" alt="" />
<div class="shape-box"></div>
</div>
<h2>Eulalia Daugherty</h2>
<h3>Lawyer</h3>
<p>Justo eget pretium mauris vel volutpmauris. Nulla lobortis porttitor id vehicula suspendisse donec nam commodo a erat. bangladesh is a butiful country</p>
</div>
</div>
<div class="single-testimonial">
<div class="client-comment">
<div class="client-thumb">
<img src="<?=THEME_ASSET_URL ?>img/team-1.jpg" alt="" />
<div class="shape-box"></div>
</div>
<h2>Eulalia Daugherty</h2>
<h3>Lawyer</h3>
<p>Justo eget pretium mauris vel volutpmauris. Nulla lobortis porttitor id vehicula suspendisse donec nam commodo a erat. bangladesh is a butiful country</p>
</div>
</div>
</div>
</div>
<div class="col-md-6 faq-area">

<div class="section-title">
<span class="sub-title">faq</span>
<h1>Một số câu hỏi thường gặp
</h1>
<div class="title-shape">
<span>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
</span>
</div>
</div>

<div class="faq-sec">
<div class="panel-group" id="accordion" role="tablist">
<div class="panel">
<div class="panel-heading" role="tab" id="titleOne">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
how to get apoinment? </a>
</h4>
</div>
<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleOne">
<div class="panel-content">
<p>Lorem ipsum dolor sit amet, modi interdum ipsum ullamcorper velit, jaccumsan accumsan urna vel pellentesque, suscipit amet ipsum scelerisque domen to do games tatal pin.</p>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading active" role="tab" id="titleTwo">
<h4 class="panel-title">
<a class="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
our company commitment </a>
</h4>
</div>
<div id="collapseTwo" class="panel-collapse collapsed in" role="tabpanel" aria-labelledby="titleTwo">
<div class="panel-content">
<p>Lorem ipsum dolor sit amet, modi interdum ipsum ullamcorper velit, jaccumsan accumsan urna vel pellentesque, suscipit amet ipsum scelerisque domen to do games tatal pin.</p>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading" role="tab" id="titleThree">
<h4 class="panel-title">
<a class="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
why people like us </a>
</h4>
</div>
<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleThree">
<div class="panel-content">
<p>Lorem ipsum dolor sit amet, modi interdum ipsum ullamcorper velit, jaccumsan accumsan urna vel pellentesque, suscipit amet ipsum scelerisque domen to do games tatal pin.</p>
</div>
</div>
</div>
<div class="panel">
<div class="panel-heading" role="tab" id="titleFour">
<h4 class="panel-title">
<a class="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
how many service provided </a>
</h4>
</div>
<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="titleFour">
<div class="panel-content">
<p>Lorem ipsum dolor sit amet, modi interdum ipsum ullamcorper velit, jaccumsan accumsan urna vel pellentesque, suscipit amet ipsum scelerisque domen to do games tatal pin.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="team-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="single-team">
<div class="row">
<div class="col-md-6">
<div class="team-img">
<img src="<?=THEME_ASSET_URL ?>img/team-1.jpg" alt="" />
</div>
</div>
<div class="col-md-6">
<div class="team-desc">
<span>Chuyên Gia Vệ Sinh</span>
<h2>Daphnee Schoen</h2>
<p>Lorem ipsum dolo sametiaculis dui luctus non elem vulputate risus wisi amet congue and too</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="single-team">
<div class="row">
<div class="col-md-6">
<div class="team-img">
<img src="<?=THEME_ASSET_URL ?>img/team-2.jpg" alt="" />
</div>
</div>
<div class="col-md-6">
<div class="team-desc">
<span>Chuyên Gia Vệ Sinh</span>
<h2>Madaline Gibson</h2>
<p>Lorem ipsum dolo sametiaculis dui luctus non elem vulputate risus wisi amet congue and too</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="single-team">
<div class="row">
<div class="col-md-6">
<div class="team-desc">
<span>Chuyên Gia Vệ Sinh</span>
<h2>Eulalia Daugherty</h2>
<p>Lorem ipsum dolo sametiaculis dui luctus non elem vulputate risus wisi amet congue and too</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
<div class="col-md-6">
<div class="team-img">
<img src="<?=THEME_ASSET_URL ?>img/team-3.jpg" alt="" />
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="single-team">
<div class="row">
<div class="col-md-6">
<div class="team-img">
<img src="<?=THEME_ASSET_URL ?>img/team-4.jpg" alt="" />
</div>
</div>
<div class="col-md-6">
<div class="team-desc">
<span>Chuyên Gia Vệ Sinh</span>
<h2>Genoveva Leannon</h2>
<p>Lorem ipsum dolo sametiaculis dui luctus non elem vulputate risus wisi amet congue and too</p>
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="why-choose-list-sec">
<div class="why-choose-list-sec-overlay"></div>
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="why-choose-list">

<div class="section-title">
<span class="sub-title">Chúng Tôi Tốt Nhất</span>
<h1>Vì Sao Chọn Chúng Tôi</h1>
<div class="title-shape">
<span>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
</span>
</div>
</div>

<div class="why-choose-list-inner">
<div class="row">
<div class="col-md-6">
<div class="why-choose-single-item">
<div class="choose-list-inner-img">
<img src="<?=THEME_ASSET_URL ?>img/icon/start.png" alt="" />
</div>
<div class="choose-list-inner-desc">
<h2>Tinh thần cao & Giá rẻ</h2>
<span>24hrs With</span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="why-choose-single-item">
<div class="choose-list-inner-img">
<img src="<?=THEME_ASSET_URL ?>img/icon/price.png" alt="" />
</div>
<div class="choose-list-inner-desc">
<h2>Phù hợp với giá tiền</h2>
<span>Đủ các dịch vụ</span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="why-choose-single-item">
<div class="choose-list-inner-img">
<img src="<?=THEME_ASSET_URL ?>img/icon/list-vacum.png" alt="" />
</div>
<div class="choose-list-inner-desc">
<h2>Rẻ và Nhanh</h2>
<span>Dịch vụ tốt</span>
</div>
</div>
</div>
<div class="col-md-6">
<div class="why-choose-single-item">
<div class="choose-list-inner-img">
<img src="<?=THEME_ASSET_URL ?>img/icon/folder.png" alt="" />
</div>
<div class="choose-list-inner-desc">
<h2>Nhận đơn nhanh</h2>
<span>Làm sạch chuyên nghiệp</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="offer-text-area">
<div class="offer-text">
<h4>Ưu đãi tốt nhất của chúng tôi
</h4>
<h2>Nhiều lựa chọn cho bạn</h2>
<p>Cần bất kỳ loại trợ giúp về dịch vụ hoặc để biết hỗ trợ kỹ thuật. chúng tôi sẵn sàng 24/7.
</p>
<a href="#">Get Service</a>
</div>
<div class="call-button">
<h4>call us today</h4>
<h3>(364) 106-7572</h3>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="pricing-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="section-title">
<span class="sub-title">pricing plan</span>
<h1>choose your best pricing plan </h1>
<div class="title-shape">
<span>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
<i class="fa fa-circle"></i>
</span>
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-md-4 col-sm-4 single-pricing-inner">
<div class="single-pricing">
<div class="pricing-heading">
<h1>$250<span>per month</span></h1>
<h2 class="pricing-level">basic services</h2>
</div>
<ul>
<li>Weekly cleaning service</li>
<li>Up to 2500 square feet</li>
<li>Hiar a maid service</li>
<li>Remove waste</li>
<li>Wash exterior surface</li>
</ul>
<div class="pricing-button">
<a href="#">submit now</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 single-pricing-inner">
<div class="single-pricing">
<div class="pricing-heading">
<h1>$375<span>per month</span></h1>
<h2 class="pricing-level">premium services</h2>
</div>
<ul>
<li>Weekly cleaning service</li>
<li>Up to 2500 square feet</li>
<li>Hiar a maid service</li>
<li>Remove waste</li>
<li>Wash exterior surface</li>
</ul>
<div class="pricing-button">
<a href="#">submit now</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4 single-pricing-inner">
<div class="single-pricing">
<div class="pricing-heading">
<h1>$489<span>per month</span></h1>
<h2 class="pricing-level">post renovation</h2>
</div>
<ul>
<li>Weekly cleaning service</li>
<li>Up to 2500 square feet</li>
<li>Hiar a maid service</li>
<li>Remove waste</li>
<li>Wash exterior surface</li>
</ul>
<div class="pricing-button">
<a href="#">submit now</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="blog-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4">
<div class="single-blog">
<div class="blog-img">
<img src="<?=THEME_ASSET_URL ?>img/blog-1.jpg" alt="" />
</div>
<div class="blog-desc">
<div class="blog-meta">
<ul>
<li><a href="#"><i class="fa fa-calendar"></i>jun, 2018</a></li>
<li><a href="#"><i class="fa fa-comment-o"></i>leave a comment</a></li>
</ul>
</div>
<h2><a href="#">Our all client be happy to get join in cleaning services</a></h2>
<a href="#" class="blog-readmore">read more</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="single-blog">
<div class="blog-img">
<img src="<?=THEME_ASSET_URL ?>img/blog-2.jpg" alt="" />
</div>
<div class="blog-desc">
<div class="blog-meta">
<ul>
<li><a href="#"><i class="fa fa-calendar"></i>jun, 2018</a></li>
<li><a href="#"><i class="fa fa-comment-o"></i>leave a comment</a></li>
</ul>
</div>
<h2><a href="#">Our all client be happy to get join in cleaning services</a></h2>
<a href="#" class="blog-readmore">read more</a>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="single-blog">
<div class="blog-img">
<img src="<?=THEME_ASSET_URL ?>img/blog-3.jpg" alt="" />
</div>
<div class="blog-desc">
<div class="blog-meta">
<ul>
<li><a href="#"><i class="fa fa-calendar"></i>jun, 2018</a></li>
<li><a href="#"><i class="fa fa-comment-o"></i>leave a comment</a></li>
</ul>
</div>
<h2><a href="#">Our all client be happy to get join in cleaning services</a></h2>
<a href="#" class="blog-readmore">read more</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="patner-contact-sec pt-100 pb-80">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="all-patner">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="single-patner">
<img src="<?=THEME_ASSET_URL ?>img/patner-1.png" alt="" />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="single-patner">
<img src="<?=THEME_ASSET_URL ?>img/patner-2.png" alt="" />
</div>
</div>
</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="single-patner">
<img src="<?=THEME_ASSET_URL ?>img/patner-3.png" alt="" />
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<div class="single-patner">
<img src="<?=THEME_ASSET_URL ?>img/patner-4.png" alt="" />
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="contact-form">
<h2>make your apponiment</h2>
<div class="contact-field">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input placeholder="Name" type="text">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input placeholder="Phone" type="text">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input placeholder="E-mail" type="email">
</div>
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="single-input-field">
<input placeholder="Service Type" type="text">
</div>
</div>
<div class="col-md-12">
<div class="single-input-field">
<input placeholder="Adisonal Information" type="text">
</div>
</div>
<div class="single-input-fieldsbtn">
<input value="appoinment" type="submit">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer1">

<div class="footer-sec">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="footer-wedget-one">
<a href="index.php"><img src="<?=THEME_ASSET_URL ?>img/footer-logo.png" alt="" /></a>
<p>Lorem ipsum dolor sit amet, donec augue suspendisse, turpis lacus dicta, rhoncus eget accumsan. </p>
<div class="payment-logo">
<img src="<?=THEME_ASSET_URL ?>img/payment-logo.png" alt="" />
</div>
<div class="call-now">
<h4>call us today</h4>
<h3>(364) 106-7572</h3>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="footer-widget-menu">
<h2>quick view</h2>
<ul>
<li><a href="#">about</a></li>
<li><a href="#">support</a></li>
<li><a href="#">protfolio</a></li>
<li><a href="#">news</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="footer-widget-menu">
<h2>awsome services</h2>
<ul>
<li><a href="#">commercial cleaning</a></li>
<li><a href="#">house cleaning</a></li>
<li><a href="#">novum eleementum</a></li>
<li><a href="#">scilium polon</a></li>
<li><a href="#">window cleaning</a></li>
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="wedget-newsletter">
<h2>subscribe </h2>
<form action="#">
<input placeholder="Enter  Your E-mail" type="email" />
<button type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
</form>
</div>
<div class="footer-social">
<ul>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="footer-bottom-sec">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copy-right">
<p>&copy; coyright 2018 kenduya designed by:<span>Themezoon</span></p>
</div>
</div>
</div>
</div>
</div>

</div>

</footer>


<script src="<?=THEME_ASSET_URL ?>js/jquery-2.2.4.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/bootstrap.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/isotope.pkgd.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/owl.carousel.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/owl.animate.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/jquery.scrollUp.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/jquery.counterup.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/modernizr.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/waypoints.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/jquery.meanmenu.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/imagesloaded.pkgd.min.js"></script>
<script src="<?=THEME_ASSET_URL ?>js/custom.js"></script>

</body>

<!-- Mirrored from themeearth.com/tf/html/kenduya/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Mar 2020 08:15:26 GMT -->
</html>