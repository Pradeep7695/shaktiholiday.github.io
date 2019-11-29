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
					<li><a href="">Visa</a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Visa</h2></div>
	</div>

	<section class="foregin">
		<div class="container">
			<?php if ($visa):?>
				<?php foreach ($visa as $visa):?>
			   <div class="col-md-6">
			        <div class="visa1">
				   <div class="frn-p">
					   <div class="text-p">
						   <p><?= $visa->visa_desc;?></p>
					   </div>
				   </div>
				   <div class="for-point">
					   <button class="btn btn-info btn-visa-enq" onclick="window.location.href='<?= base_url('contact_us')?>';"><i class="fa fa-send"></i> Enquire Now</button>
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
