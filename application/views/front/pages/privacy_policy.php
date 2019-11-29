<?php $page= 'privacy'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Privacy Policy</a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Privacy Policy</h2></div>
	</div>

	<section class="foregin">
		<div class="container">
		<?php if ($privacy):?>
		  <?php foreach ($privacy as $privacy):?>
			<div class="row">
				<div class="col-md-12">
					<div class="for-point">
						<h3>Privacy Policy Rules :- </h3>
						<p>
						  <?= $privacy->policy_desc?>
						 </p>
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
