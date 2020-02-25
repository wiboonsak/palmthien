<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>PALMTHIEN POOL VILLA, ANDATHIEN POOL VILLA, AONANG  Krabi Thailand</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="images/favicon.png"/>

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/font-lotusicon.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/owl.carousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/jquery-ui.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/magnific-popup.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/settings.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/less/gallery.less')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/lib/bootstrap-select.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/helper.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/custom.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/responsive.css')?>">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/css/style.css')?>">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/slideimage/css/demo.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/slideimage/css/style.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('HTML/slideimage/css/elastislide.css')?>" />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
                		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body> <!--<![endif]-->


<!-- PRELOADER -->
<div id="preloader">
    <span class="preloader-dot"></span>
</div>
<!-- END / PRELOADER -->

<div id="page-wrap" class="bg-white-2">

<header id="header" class="header-v3 clearfix">

        <!-- HEADER TOP -->
        <div class="header_top">
            <div class="container">
                <div class="header_left float-left">
                    <span><i class="lotus-icon-phone"></i> (+66) 093-734-3498, 081-773-7921</span>
                </div>

                <div class="header_right float-right">
                    <span class="socials">
                        <a href="!#"><i class="fa fa-facebook"></i></a>
                        <a href="!#"><i class="fa fa-twitter"></i></a>
                        <a href="!#"><i class="fa fa-instagram"></i></a>
                    </span>
                    <span class="login-register">
                            <a href="https://www.expedia.com.sg/Krabi-Hotels-Palmthien-Pool-Villa-Aonang.h38437270.Hotel-Information?" target="_blank" class="btn-danger">BOOK NOW</a>
                    </span>                   
                </div>
                <!-- HEADER LOGO -->
                <a class="logo-top img-responsive" href="#"><img src="<?php echo base_url('HTML/images/logo-header.png')?>" alt=""></a>
                <!-- END / HEADER LOGO -->

            </div>
        </div>
        <!-- END / HEADER TOP -->

        <!-- HEADER LOGO & MENU -->
        <div class="header_content" id="header_content">

            <div class="container">

                <!-- HEADER LOGO -->
                <div class="header_logo">
                    <a href="#"><img src="<?php echo base_url('HTML/images/logo-header.png')?>" alt=""></a>
                </div>
                <!-- END / HEADER LOGO -->
                <!-- HEADER MENU -->
                <nav class="header_menu">
                    <ul class="menu">                        
                        <li><a href="<?php echo base_url('Welcome')?>">Home</a></li>
						<li class="current-menu-item">
                            <a href="<?php echo base_url('Palmthien')?>">Palmthien Pool Villa  <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <?php foreach ($getCategory->result() AS $getCategory2){?>
                                <li><a href="<?php echo base_url('Palmthien/Roomdetail/').$getCategory2->id?>"><?php echo $getCategory2->category_title?></a></li>   
                                <?php }?>
                            </ul>
                        </li>
						<li class="current-menu-item">
                                                    <a href="<?php echo base_url('Andathien')?>">Andathien Pool Villa</a>
                        </li>
                        <li><a href="<?php echo base_url('Package')?>">Package Tours</a></li>
						<li><a href="<?php echo base_url('Facilities')?>">Facilities & Services</a></li>
						<li class="current-menu-item">
                            <a href="#">Gallery  <span class="fa fa-caret-down"></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url('Gallery/index/1')?>">Palmthien Pool Villa</a></li>                                
				<li><a href="<?php echo base_url('Gallery/index/2')?>">Andathien Pool Villa</a></li>
                            </ul>
                        </li>											
                        <li><a href="<?php echo base_url('Contact')?>">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- END / HEADER MENU -->

                <!-- MENU BAR -->
                <span class="menu-bars">
                        <span></span>
                    </span>
                <!-- END / MENU BAR -->

            </div>
        </div>
        <!-- END / HEADER LOGO & MENU -->

    </header>