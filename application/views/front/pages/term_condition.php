<?php $page='term'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Terms & Conditions</a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Terms & Conditions</h2></div>
	</div>

	<section class="foregin">
		<div class="container">
			<div class="row">
			<?php if ($terms):?>
			  <?php foreach ($terms as $terms):?>
				<div class="col-md-12">

					<div class="for-point">
						<h3>Terms & Conditions Rules:- </h3>
						<p>
						  <?= $terms->term_desc;?>
						</p>

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
