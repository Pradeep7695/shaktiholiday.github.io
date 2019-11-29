<?php $page = 'service'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Travel Insurance</a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Travel Insurance</h2></div>
	</div>

	<section class="foregin">
		<div class="container">
		<?php if ($travelIns):?>
		   <?php foreach ($travelIns as $travelIns):?>
			<div class="row">
				<div class="col-md-4">
					<div class="for-ex">
						<img class="" src="<?= $travelIns->travel_img; ?>">
					</div>
				</div>
				<div class="col-md-8">
					<div class="frn-p">
						<div class="text-p">
						   <p><?= $travelIns->travel_desc;?></p>
						</div>
					</div>
					<div class="for-point">
						<h3>Insurance Rules:- </h3>
						<p><i class="fa fa-hand-o-right"></i> <?= $travelIns->travel_rule;?></p>

						<button class="btn btn-info" onclick="window.location.href='<?= base_url('home/contact_us')?>';">Contact Now</button>
					</div>
				</div>
			</div>
		  <?php endforeach;?>
		<?php endif;?>

		</div>
	</section>

</div>





<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
