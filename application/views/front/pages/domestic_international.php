<?php $page = 'domestic'?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?= "Book Holiday Tour Packages | The Best Holiday Domestic & International Packages | Shakti Holiday"?></title>
	<link rel="icon" href="<?= base_url()?>assets/front/images/shakit-favicone.jpg">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/bootstrap.min.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/font-awesome.min.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/flaticon.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/font-linearicons.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/style.css')?>" type="text/css" media="all">
	<link rel="stylesheet" href="<?= base_url('assets/front/css/travel-setting.css')?>" type="text/css" media="all">
</head>

<body class="archive travel_tour travel_tour-page">
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
								    	<li><i class="fa fa-phone"></i>+91-97024 83622 | 022-25600030</li>
									<li><i class="fa fa-envelope-o"></i> info@thetravelfirm</li>
								
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-6 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
								<li class="<?php if ($page=='home'){echo 'current-menu-ancestor';}?>" onclick="window.location.href='<?= base_url('online_booking')?>';"><i class="fa fa-edit"></i> Enquire Now</li>
								<li class="<?php if ($page == 'testimonial'){echo 'current-menu-ancestor';}?>hidden-info" onclick="window.location.href='<?= base_url('testimonial')?>';">
									<i class="fa fa-thumbs-o-up"></i> Testimonial</li>
							</ul>
							</div>
						</aside>

					</div>
				</div>
			</div>
		</div>
		<div class="navigation-menu">
			<div class="container">
				<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
				<div class="width-logo sm-logo">
					<a href="<?= base_url('/')?>" title="Travel" rel="home">
						<img src="<?= base_url('assets/front/images/logo/home-travel-logo.png')?>" alt="Logo" class="logo_transparent_static">
						<img src="<?= base_url('assets/front/images/logo/home-travel-logo.png')?>" alt="Sticky logo" class="logo_sticky">
					</a>
				</div>
				<nav class="width-navigation tp-bar">
					<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">

						<li class="<?php if ($page == 'home'){echo 'current-menu-ancestor';}?> current-menu-parent">
							<a href="<?= base_url('/')?>">Home</a>
						</li>

						<!--<li class="<?php /*if ($page=='about'){echo 'current-menu-ancestor';}*/?>"><a href="<?/*= base_url('about_us')*/?>">About Us</a></li>-->

						<li class="<?php if ($page == 'fleets'){echo 'current-menu-ancestor';}?> menu-item-has-children">
							<a href="#">FLEETS</a>
							<ul class="sub-menu">
								<li ><a href="<?= base_url('buses')?>"><i class="fa fa-angle-right"></i> Buses</a></li>
								<li><a href="<?= base_url('cars')?>"><i class="fa fa-angle-right"></i> Cars</a></li>
							</ul>
						</li>

						<li class="<?php if ($page == 'domestic'){echo 'current-menu-ancestor';}?> menu-item-has-children">
							<a href="#">Packages</a>
							<ul class="sub-menu">
								<li ><a href="<?= base_url('state_domestic_tour')?>"><i class="fa fa-angle-right"></i> Domestic Packages</a></li>
								<li><a href="<?= base_url('international_package')?>"><i class="fa fa-angle-right"></i> International Packages</a></li>
								<li><a href="<?= base_url('cruise')?>"><i class="fa fa-angle-right"></i> Cruise</a></li>
							</ul>
						</li>
						<li class="<?php if ($page == 'service'){echo 'current-menu-ancestor';}?> menu-item-has-children">
							<a href="#">Our services</a>
							<ul class="sub-menu">
								<li><a href="<?= base_url('online_booking')?>"><i class="fa fa-angle-right"></i> Air Ticket</a></li>
								<li><a href="<?= base_url('online_booking')?>"><i class="fa fa-angle-right"></i> Hotel Reservation</a></li>
								<li ><a href="<?= base_url('visa')?>"><i class="fa fa-angle-right"></i> Visa / Insurance</a></li>
								<li class="<?php if ($page == 'onedaytour'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('one_day_tour')?>"><i class="fa fa-angle-right"></i> One Day Picnic / Resort Booking</a></li>
							</ul>
						</li>

						<li class="<?php if ($page == 'distributor_portal'){ echo 'current-menu-ancestor';}?>"><a href="<?= base_url('distributor_portal')?>"> B2B Distributor Portal</a></li>

						<li class="<?php if ($page == 'contactus'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('contact_us')?>">Contact Us</a></li>

					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div class="site wrapper-content">
		<div class="top_site_main">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="<?= base_url('/')?>" class="home">Home</a></li>
						<li>Domestic & International</li>
					</ul>
				</div>
				<h1 class="heading_primary">Domestic & International</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12 full-width">
						<ul class="tours products wrapper-tours-slider">

						 <?php if ($tourPackage):?>
						   <?php foreach ($tourPackage as $tourPack):?>
							<li class="item-tour col-md-3 col-sm-6 product">
								<div class="item_border item-product">
									<div class="post_images">
										<a href="<?= base_url('home/details/'.$tourPack->id .'/'. $tourPack->trip_name)?>">
											<img width="430" height="305" src="<?= $tourPack->trip_img;?>" alt="<?= $tourPack->trip_name;?>" title="<?= $tourPack->trip_name;?>">
										</a>

									</div>
									<div class="wrapper_content">
										<div class="post_title"><h4>
												<a href="<?= base_url('home/details/'.$tourPack->id .'/'. $tourPack->trip_name)?>" rel="bookmark"><?= $tourPack->trip_name;?></a>
											</h4></div>
										<span class="post_date"> <?= $tourPack->trip_day;?></span>

										<div class="description">
											<p><?= $tourPack->trip_desc;?></p>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<a rel="nofollow" href="<?= base_url('home/contact_us')?>" class="button ">Enquiry Now</a>
										</div>
										<a rel="nofollow" href="<?= base_url('home/details/'.$tourPack->id .'/'. $tourPack->trip_name)?>" class="button product_type_tour_phys add_to_cart_button">Read more</a>
									</div>
								</div>
							</li>
							<?php endforeach;?>
						<?php endif;?>

						</ul>

					</div>
				</div>
			</div>
		</section>
	</div>


 <?php include APPPATH ."views/front/template/footer.php";?>
