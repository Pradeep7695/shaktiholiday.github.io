<?php $page ='home'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<!-- -------------loader ------------- -->

   <!--<div class="preloader-wrap">
    <div class="percentage" id="precent"></div>
    <img class="loader-page-img" src="<?= base_url('assets/front/images/logo/thetravel.gif')?>">
    <div class="loader">
        <div class="trackbar">
            <div class="loadbar"></div>
        </div>
        <div class="glow"></div>
    </div>
</div>-->

<!-- -----------..//end loader --------- -->

<div class="site wrapper-content">
	<div class="home-content" role="main">

		<!-- ------------------start rev slider ------------- -->
		<div id="banner">

			<!-- Slider begins here -->
			<div id="homepage_slider" class="carousel slide">
				<ol class="carousel-indicators">
					<li data-target="#homepage_slider" data-slide-to="0" class="active"></li>
					<li data-target="#homepage_slider" data-slide-to="1"></li>
					<li data-target="#homepage_slider" data-slide-to="1"></li>
				</ol>

				<div class="carousel-inner">

					<!-- ------------------video  slide #1 ---------------->
					<div data-slide-to="0" class="item active">
						<?php if (count($videoSlider)):?>
							<?php foreach ($videoSlider as $item):?>
								<div class="slider-hide-on-mobile">
									<video id="bgvid" autoplay loop muted poster="">
										<source src="<?= $item->video?>" type="video/mp4"></video>
								</div>
							<?php endforeach;?>
						<?php endif;?>
					</div>
					<!-- -------------..//end video slider ----------- -->

					<!-- -------------------img slider -------------------- -->
					<?php if ($slider):?>
						<?php foreach ($slider as $item):?>
							<!-- slide #2 (image) -->
							<div class="item">
								<img alt="<?= $item->slider_title;?>" src="<?= $item->slider_img;?>">
							</div>
							<!-- slide #3 (image) -->

						<?php endforeach;?>
					<?php endif;?>
				</div>

				<!-- Carousel nav -->
			<div id="slider-play-button"><button class="play-video-button" type="button" title="Play Video"></button></div>
				<a class="carousel-control left" href="#homepage_slider" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#homepage_slider" data-slide="next">&rsaquo;</a>
			</div> <!-- end of '#homepage_slider' -->
			<!-- Slider ends here -->

		</div>  <!-- end of "#banner" -->

		<!-- -------------------end rev slider ------------------- -->
		<section class="form-slder">
			<div class="slider-tour-booking">
				<div class="container">
					<div class="travel-booking-search hotel-booking-search travel-booking-style_1">
					<?= form_open('Enquiry_Now/formSend')?>
							<ul class="hb-form-table">
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="name" value="" placeholder="Name" required>
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="mobile" value="" placeholder="Mobile No." required>
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>
								</li>
								<li class="hb-form-field">
									<div class="hb-form-field-input hb_input_field">
										<input type="text" name="destination" value="" placeholder="Destination" required>
									</div>
								</li>
								<li class="hb-submit">
									<button type="submit" value="Enquiry Now">Enquiry Now</button>
								</li>
							</ul>
							<input type="hidden" name="lang" value="">

					<?= form_close()?>
					</div>
					<?php if(!empty($this->session->flashdata('msg'))){ ?>
							<?php echo $this->session->flashdata('msg'); ?>
						<?php } ?>
						<?php if(validation_errors()) { ?>
							<div class="alert alert-danger">
								<?php echo validation_errors(); ?>
							</div>
						<?php } ?>
				</div>
			</div>
		</section>


		<!-- --------------why chose us main page ------------------->
		<section id="block-blockpricinghomemain" class="sec-padding section-light-1">
			<div class="container animatable fadeInUp">
				<div class="row nopadding">
					<div class="col-md-12">
						<div class="sec-title-container less-padding-3 text-center section-heading">
							<h3 class="font-weight-6 nomargin uppercase text-center animatable bounceInLeft"> Why Chose Us </h3>
							<h6 class="small-title animatable bounceInRight">Promising Memories for a Lifetime !</h6>
						</div>
					</div>
					<div class="clearfix margin-bottom-2"></div>

					<div class="col-md-3 marbo-resp4 animatable bounceInLeft">
						<div class="price-sec-two hover-shadow-2 active  text-center">
							<div class="box">
								<div class="icon-middle">
									<i class="fa fa-thumbs-up"></i>
								</div>
								<h2 class="roboto big2 font-weight-8 margin-bottom-2">Trust</h2>
								<p class="margin-bottom-4">Depending on each other to do the right thing in all situations, we aim at assuring best services at an economical rate</p>
								<!--<a href="#" class="but-2">Buy Now!</a>--> </div>
						</div>
					</div>

					<div class="col-md-3 marbo-resp4 animatable bounceInLeft">
						<div class="price-sec-two hover-shadow-2 text-center">
							<div class="box">
								<div class="icon-middle">
									<i class="fa fa-cogs"></i>
								</div>
								<h2 class="roboto big2 font-weight-8 margin-bottom-2">Integrity</h2>
								<p class="margin-bottom-4">Continuously doing the right thing that results in win-win situations for all </p>
								<!--<a href="#" class="but-2">Buy Now!</a>--> </div>
						</div>
					</div>

					<div class="col-md-3 marbo-resp4 animatable bounceInRight">
						<div class="price-sec-two hover-shadow-2  text-center">
							<div class="box">
								<div class="icon-middle">
									<i class="fa fa-support"></i>
								</div>
								<h2 class="roboto big2 font-weight-8 margin-bottom-2">Customer Focus</h2>
								<p class="margin-bottom-4">We will be our customer's preferred choice by providing them services that exceed their expectation. For doing this, we have 24 hours assistance for customers on Phone call, Email & WhatsApp</p>
								<!--<a href="#" class="but-2">Buy Now!</a>--> </div>
						</div>
					</div>

					<div class="col-md-3 animatable bounceInRight">
						<div class="price-sec-two hover-shadow-2  text-center">
							<div class="box">
								<div class="icon-middle">
									<i class="fa fa-users"></i>
								</div>
								<h2 class="roboto big2 font-weight-8 margin-bottom-2">Teamwork</h2>
								<p class="margin-bottom-4">Working together to ensure that our clients receive the best service right from booking the tour to finishing the tour</p>
								<!--<a href="#" class="but-2">Buy Now!</a>--> </div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- -----------..//end why chose us main page --------------- -->

		<div class="padding-top-6x padding-bottom-6x section-background2">
			<div class="container  animatable fadeInUp">
				<div class="shortcode_title text-white title-center title-decoration-bottom-center section-heading">
					<div class="title_subtitle animatable bounceInLeft">Take a Look at Our</div>
					<h3 class="title_primary animatable bounceInLeft">MOST POPULAR TOURS</h3>
					<h6 class="small-title animatable bounceInRight">Promising Memories for a Lifetime !</h6>
				</div>
				<div class="row wrapper-tours-slider">
					<div class="tours-type-slider list_content" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":2}, "992":{"items":3}}'>
						<?php if ($popularTour):?>
							<?php foreach ($popularTour as $item):?>
								<div class="item-tour">
									<div class="radius-mask tour-block hover-aqua">
										<div class="clip" onclick="window.location.href='details.html';">
											<img src="<?= $item->package_img;?>">
										</div>
										<div class="tour-layer delay-1"></div>
										<div class="tour-caption">
											<div class="vertical-align">
												<h3 class="hover-it"><?= $item->package_name?></h3>

												<h4>starting from <b><i class="fa fa-inr"></i> <?= $item->package_price;?>/-</b></h4>
											</div>
											<div class="vertical-bottom">
												<a href="<?= $item->url_link?>" target="_blank" class="c-button b-50 bg-aqua hv-transparent fr"><span class="fa fa-eye"></span> View Details</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;?>
						<?php endif;?>


					</div>
				</div>
			</div>
		</div>
		<!--<div class="section-white padding-top-6x padding-bottom-6x tours-type" id="destination-sec">
			<div class="container  animatable fadeInUp">
				<div class="shortcode_title title-center title-decoration-bottom-center section-heading ">
					<div class="title_subtitle animatable bounceInLeft" style="color: #fff;">Find a Tour by</div>
					<h3 class="title_primary animatable bounceInLeft" style="color: #fff;">DESTINATION</h3>
				<!--	<h6 class="small-title animatable bounceInRight">Promising Memories for a Lifetime !</h6>-->
				<!--</div>
				<div class="wrapper-tours-slider wrapper-tours-type-slider">
					<div class="tours-type-slider" data-dots="true" data-nav="true" data-responsive='{"0":{"items":1}, "480":{"items":2}, "768":{"items":3}, "992":{"items":4}}'>
						<div class="tours_type_item">
							<div class="hotel-showcase">
								<div class="post-media hoverentry">
									<img src="<?= base_url('assets/front/images/tour-place/singapore.jpg')?>" alt="" class="img-responsive">
									<div class="hoverbackground">
										<div class="rating">
											<h2 class="text-center"><a href="<?= base_url('contact_us')?>">Singapore</a></h2>
										</div>
										<h4><a href="<?= base_url('contact_us')?>" class="c-button b-50 bg-aqua hv-transparent fr">View Details</a></h4>
									</div>
								</div>
							</div>
						</div>

						<div class="tours_type_item">
							<div class="hotel-showcase">
								<div class="post-media hoverentry">
									<img src="<?= base_url('assets/front/images/tour-place/dubai.jpg')?>" alt="" class="img-responsive">
									<div class="hoverbackground">
										<div class="rating">
											<h2 class="text-center"><a href="<?= base_url('contact_us')?>">Dubai</a></h2>
										</div>
										<h4><a href="<?= base_url('contact_us')?>" class="c-button b-50 bg-aqua hv-transparent fr">View Details</a></h4>
									</div>
								</div>
							</div>
						</div>

						<div class="tours_type_item">
							<div class="hotel-showcase">
								<div class="post-media hoverentry">
									<img src="<?= base_url('assets/front/images/tour-place/thailand-wallpaper-2.jpg')?>" alt="" class="img-responsive">
									<div class="hoverbackground">
										<div class="rating">
											<h2 class="text-center"><a href="<?= base_url('contact_us')?>">Thailand</a></h2>
										</div>
										<h4><a href="<?= base_url('contact_us')?>" class="c-button b-50 bg-aqua hv-transparent fr">View Details</a></h4>
									</div>
								</div>
							</div>
						</div>

						<div class="tours_type_item">
							<div class="hotel-showcase">
								<div class="post-media hoverentry">
									<img src="<?= base_url('assets/front/images/tour-place/bali.jpg')?>" alt="" class="img-responsive">
									<div class="hoverbackground">
										<div class="rating">
											<h2 class="text-center"><a href="<?= base_url('contact_us')?>">Bali</a></h2>
										</div>
										<h4><a href="<?= base_url('contact_us')?>" class="c-button b-50 bg-aqua hv-transparent fr">View Details</a></h4>
									</div>
								</div>
							</div>
						</div>

						<div class="tours_type_item">
							<div class="hotel-showcase">
								<div class="post-media hoverentry">
									<img src="<?= base_url('assets/front/images/tour-place/kerla.jpg')?>" alt="" class="img-responsive">
									<div class="hoverbackground">
										<div class="rating">
											<h2 class="text-center"><a href="<?= base_url('contact_us')?>">Kerla</a></h2>
										</div>
										<h4><a href="<?= base_url('contact_us')?>" class="c-button b-50 bg-aqua hv-transparent fr">View Details</a></h4>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>-->


		<div class="padding-top-6x padding-bottom-6x bg__shadow section-background">
			<div class="container  animatable fadeInUp">
				<div class="shortcode_title text-white title-center title-decoration-bottom-center">
					<!--	<div class="title_subtitle">Some statistics about Travel WP</div>-->
					<h3 class="title_primary animatable bounceIn">Need Inspiration for Your Next Tour? Travel the World You Never Seen</h3>
					<span class="line_after_title" style="color:#ffffff"></span>
				</div>
				<!--<div class="row">
                    <div class="col-md-12">
                        <div class="text-cont">
                            <p>Need Inspiration for Your Next Tour? Travel the World You Never Seen</p>
                        </div>
                    </div>
                </div>-->
				<div class="row">
					<div class="col-sm-12 text-center padding-top-6x">
					    
					    
					    <div class="front-map">
                         <div class="map-site">
							 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.7404888806022!2d72.84016631479629!3d19.162833654217224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf1c234fb7c387b!2sShakti%20Tours%20%26%20Travels!5e0!3m2!1sen!2sin!4v1572684860434!5m2!1sen!2sin" width="1100" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                         </div>
                     </div>
					    
						<a href="<?= base_url('home/contact_us')?>" class="icon-btn" title="">
							<i class="fa fa-phone"></i> Contact Now
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>



<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>


<script>
	// without this script, the slider doesn't start on it's own:
	!function ($) {
		$(function(){
			$('#homepage_slider').carousel({
			    autoPlay : false,
			});
		});
	}(window.jQuery)


	// if user chooses to not autoplay the video, the button should be uncommented in html and this script will make the button work:
	var vid = document.getElementById("bgvid");
	var playButton = document.querySelector("#slider-play-button button");

	playButton.addEventListener("click", function() {
		if (vid.paused) {
			vid.play();
			playButton.classList.remove("play-video-button");
			playButton.classList.add("pause-video-button");
		} else {
			vid.pause();
			playButton.classList.add("play-video-button");
			playButton.classList.remove("pause-video-button");
		}
	});
</script>


 <!-- ------------animation js ------------ -->
 <script>
     // Trigger CSS animations on scroll.
     // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

     // Looking for a version that also reverses the animation when
     // elements scroll below the fold again?
     // --> Check https://codepen.io/bramus/pen/vKpjNP

     jQuery(function($) {

         // Function which adds the 'animated' class to any '.animatable' in view
         var doAnimations = function() {

             // Calc current offset and get all animatables
             var offset = $(window).scrollTop() + $(window).height(),
                 $animatables = $('.animatable');

             // Unbind scroll handler if we have no animatables
             if ($animatables.length == 0) {
                 $(window).off('scroll', doAnimations);
             }

             // Check all animatables and animate them if necessary
             $animatables.each(function(i) {
                 var $animatable = $(this);
                 if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                     $animatable.removeClass('animatable').addClass('animated');
                 }
             });

         };

         // Hook doAnimations on scroll, and trigger a scroll
         $(window).on('scroll', doAnimations);
         $(window).trigger('scroll');

     });
 </script>

    <!-- -------------..//end animation ----- -->


