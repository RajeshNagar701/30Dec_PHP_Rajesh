<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="{{ url('website/images/fevicon/fevicon.png')}}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ url('website/css/bootstrap.min.css')}}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ url('website/css/style.css')}}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ url('website/css/responsive.css')}}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ url('website/css/colors1.css')}}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ url('website/css/custom.css')}}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ url('website/css/animate.css')}}" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ url('website/revolution/css/settings.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('website/revolution/css/layers.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ url('website/revolution/css/navigation.css')}}" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">

<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="{{ url('website/images/loaders/loader_1.png')}}" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
				<?php
				if(isset($_SESSION['id']))
				{
				?>
				<li> <span class="topbar-label"><i class="fa fa-user"></i></span> <span class="topbar-hightlight"><a href="#">Hi .. <?php echo $_SESSION['name']?></a></span> </li>
				<li> <span class="topbar-label"><i class="fa fa-user"></i></span> <span class="topbar-hightlight"><a href="profile">My Account</a></span> </li>
				<?php
				}
				?>
			  </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> 
				<?php
				if(isset($_SESSION['id']))
				{
				?>
					<a class="btn white_btn" href="logout">Logout</a> 
				<?php
				}
				else
				{
				?>
					<a class="btn white_btn" href="login">Login</a> 
				<?php	
				}				
				?>
				
			</div>
          
		  </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="/"><img src="{{ url('website/images/logos/it_logo.png')}}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="it_about">About Us</a></li>
                <li> <a href="it_service">Service</a></li>
                <li> <a href="it_blog">Blog</a></li>
               
                <li> <a href="it_contact">Contact</a></li>
              </ul>
            </div>
            <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->