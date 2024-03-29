<?php $page ='mumbai'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li>Maharashtra Tour</li>
				</ul>
			</div>
			<h1 class="heading_primary">Maharashtra Tour</h1></div>
	</div>
</div>

<section id="mh-sec">
	<div class="container">
		<div class="row">
			<div class="top-rw">
				<div class="text-rw">
					<h3 class="text-center"><a href="<?= base_url('contact_us')?>"> For other destinations please <i class="fa fa-hand-o-right"></i> Contact Us </a></h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="site-main col-sm-12 full-width">
				<ul class="tours products wrapper-tours-slider">
					<?php if ($maharashtraData):?>
						<?php foreach ($maharashtraData as $maharashtraData):?>
							<li class="item-tour col-md-4 col-sm-6 product">
								<div class="item_border item-product">
									<div class="post_images">
										<a href="<?= base_url('home/maharashtra_tour_details/'.$maharashtraData->mh_id)?>">
											<img width="430" height="305" src="<?= $maharashtraData->mh_tour_img?>" alt="<?= $maharashtraData->mh_tour_name?>" title="<?= $maharashtraData->mh_tour_name?>">
										</a>
									</div>
									<div class="wrapper_content">
										<div class="post_title"><h4>
												<a href="<?= base_url('home/maharashtra_tour_details/'.$maharashtraData->mh_id)?>" rel="bookmark"><?= $maharashtraData->mh_tour_name?></a>
											</h4></div>
										<span class="post_date"> <?= $maharashtraData->tour_duration?></span>

										<div class="description">
											<span class="fa fa-calendar "> <?= $maharashtraData->tour_day?></span>
										</div>
									</div>
									<div class="read_more">
										<div class="item_rating">
											<a rel="nofollow" href="<?= base_url('contact_us')?>" class="button ">Enquiry Now</a>
										</div>
										<a rel="nofollow" href="<?= base_url('home/maharashtra_tour_details/'.$maharashtraData->mh_id)?>" class="button product_type_tour_phys add_to_cart_button">Read more</a>
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







	<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
