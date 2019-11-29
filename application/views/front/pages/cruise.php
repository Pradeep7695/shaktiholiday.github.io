<?php $page = 'domestic'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Cruise </a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Cruise </h2></div>
	</div>

	<section class="content-area" id="car">
		<div class="container">
			<div class="row">
				<?php if (count($CruiseList)):?>
					<?php foreach ($CruiseList as $item):?>
						<div class="col-lg-12 col-md-12">
							<div class="row white main-top-sec">
								<div class="col-md-4 col-sm-4 prp-img">
									<div class="exp-img-2">
										<img src="<?= $item->cruise_img?>" height="220">
										<p class="text-center">Cruise Name:- <?= $item->cruise_name?></p>
										<button class="btn btn-info"> View Price List <i class="fa fa-caret-down"></i></button>
									</div>
								</div>
								<div class="item-info col-lg-8 col-md-8 col-sm-12">
									<h5>Description :- </h5>
									<p><?= $item->cruise_desc?></p>

									<div class="btn-sec">
										<button class="btn btn-success pull-right" onclick="window.location.href='<?= base_url('/contact_us')?>';">Enquiry Now</button>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="sec-price" style="display: none">
									<p><?= $item->cruise_price?></p>
								</div>
							</div>
						</div>
					<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>
	</section>

</div>





<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
<script>
	$(document).ready(function(){
		$("button").click(function(){
			$(".sec-price").toggle(500);
		});
	});
</script>
