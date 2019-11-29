<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $page = 'domestic';?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

<body class="single-product travel_tour-page travel_tour">
    
    
    <!--<div class="preloader-wrap">
    <div class="percentage" id="precent"></div>
    <img class="loader-page-img" src="<?= base_url('assets/front/images/logo/home-travel-logo.png')?>" width="200">
    <div class="loader">
        <div class="trackbar">
            <div class="loadbar"></div>
        </div>
        <div class="glow"></div>
    </div>
</div>-->
    
<div class="wrapper-container">
	<header id="masthead" class="site-header sticky_header affix-top">
		<div class="header_top_bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<aside id="text-15" class="widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li><i class="fa fa-phone"></i> +91 9820044289 | 022 28739797</li>
									<li><i class="fa fa-envelope-o"></i> info@shaktiholiday.com</li>

								</ul>
							</div>
						</aside>
					</div>
					<div class="col-sm-6 topbar-right">
						<aside id="text-7" class="widget widget_text">
							<div class="textwidget">
								<ul class="top_bar_info clearfix">
									<li class="<?php if ($page=='career'){echo 'current-menu-ancestor';}?>" onclick="window.location.href='<?= base_url('career')?>';"><i class="fa fa-briefcase"></i> Career</li>
									<li class="<?php if ($page=='home'){echo 'current-menu-ancestor';}?>" onclick="window.location.href='<?= base_url('online_booking')?>';"><i class="fa fa-edit"></i> Enquire Now</li>
									<li class="<?php if ($page == 'testimonial'){echo 'current-menu-ancestor';}?>hidden-info" onclick="window.location.href='<?= base_url('testimonial')?>';">
										<i class="fa fa-thumbs-o-up"></i> Tour Reviews</li>
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
						<img src="<?= base_url('assets/front/images/shakti-logo.png')?>" alt="Logo" class="logo_transparent_static">
						<img src="<?= base_url('assets/front/images/shakti-logo.png')?>" alt="Sticky logo" class="logo_sticky">
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
	<?php if ($internationalDetails):?>
<?php foreach ($internationalDetails as $internationalDetails):?>
	<div class="site wrapper-content">
		<div class="top_site_main">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="<?= base_url('/')?>" class="home">Home</a></li>
						<li><a href="javaScript:void(0);">International Package Deatils </a></li>
						<li><a href="javaScript:void(0);"><?= $internationalDetails->intern_trip_name?> </a></li>
					</ul>
				</div>
				<h2 class="heading_primary"><?= $internationalDetails->intern_trip_name;?></h2></div>
		</div>
		<section class="content-area single-woo-tour">
			<div class="container">
				<div class="tb_single_tour product">
					<div class="top_content_single row">


						<?php /*if ($tourPackage):*/?><!--
					  --><?php /*foreach ($tourPackage as $tourPackage):*/?>
						<div class="images images_single_left">
							<div class="title-single">
								<div class="title">
									<h1><?= $internationalDetails->intern_trip_name?></h1>
								</div>
								<div class="tour_code">
									<strong>Trip Duration: </strong><?= $internationalDetails->intern_trip_day;?>
								</div>
							</div>

							<div class="tour-details">
								<div class="tour-img">
									<img class="img-responsive" src="<?= $internationalDetails->intern_trip_img?>">
								</div>
							</div>

							<div class="clear"></div>
							<div class="single-tour-tabs wc-tabs-wrapper">
								<ul class="tabs wc-tabs" role="tablist">
									<li class="description_tab active" role="presentation">
										<a href="#tab-description" role="tab" data-toggle="tab">Description</a>
									</li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane single-tour-tabs-panel single-tour-tabs-panel--description panel entry-content wc-tab active" id="tab-description">
										<h2>Tour Description</h2>
										<p>
											<?= $internationalDetails->intern_trip_desc?>
										</p>
									</div>

								</div>
							</div>
						</div>
						<?php endforeach;?>
						<?php endif;?>
						<div class="summary entry-summary description_single">
							<div class="affix-sidebar">
								<div class="entry-content-tour">
									<p class="price">
										<span class="text">Price:</span><span class="travel_tour-Price-amount amount"><i class="fa fa-inr"></i> <?= $internationalDetails->intern_trip_price?></span>
									</p>
									<div class="clear"></div>
									<div class="booking">
										<div class="">
											<div class="form-block__title">
												<h4>Book the Tour</h4>
											</div>
											<?php if(!empty($this->session->flashdata('msg'))){ ?>
												<?php echo $this->session->flashdata('msg'); ?>
											<?php } ?>
											<?php if(validation_errors()) { ?>
												<div class="alert alert-danger">
													<?php echo validation_errors(); ?>
												</div>
											<?php } ?>
											<!--<form id="tourBookingForm" method="POST" action="#">-->
											<?= form_open('Book_trip',['id'=>'tourBookingForm']);?>
											<div class="">
												<input name="first_name" value="" placeholder="First name" type="text" required>
											</div>
											<div class="">
												<input name="last_name" value="" placeholder="Last name" type="text" required>
											</div>
											<div class="">
												<input name="phone" value="" placeholder="Phone" type="text" required>
											</div>
											<div class="">
												<input name="email_tour" value="" placeholder="Email" type="text" required>
											</div>
											<div class="">
												<input type="text" name="date_book" value="" placeholder="Date" class="hasDatepicker" required>
											</div>
											<div class="from-group">
												<div class="total_price_arrow">
													<div class="col-md-6">
														<div class="">
															<input name="adult" value="" placeholder="Adult" type="text" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="">
															<input name="child" value="" placeholder="Child" type="text" required>
														</div>
													</div>
												</div>
											</div>
											<div class="spinner">
												<div class="rect1"></div>
												<div class="rect2"></div>
												<div class="rect3"></div>
												<div class="rect4"></div>
												<div class="rect5"></div>
											</div>
											<input class="btn-booking btn" value="Enquire now" type="submit">
											<?= form_close();?>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>


	<!-- -----------------../page content start here ------------------ -->

	<?php include APPPATH ."views/front/template/footer.php";?>
