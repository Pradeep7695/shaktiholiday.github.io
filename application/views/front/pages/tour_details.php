<?php $page ='onedaytour'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<?php if ($OneDayTourDataDetails):?>
						<?php foreach ($OneDayTourDataDetails as $OneDayTourDataDetails):?>
							<li><?=$OneDayTourDataDetails->one_day_tour_name ?></li>
						<?php endforeach;?>
					<?php endif;?>
				</ul>
			</div>
			<h1 class="heading_primary"><?=$OneDayTourDataDetails->one_day_tour_name ?></h1></div>
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
				<div class="page-content">
					<div class="tabbable-panel">
						<div class="tabbable-line">
							<ul class="nav nav-tabs ">
								<li class="active">
									<a href="#tab_default_1" data-toggle="tab">
										Description of <?= $OneDayTourDataDetails->one_day_tour_name?> </a>
								</li>
							</ul>

							<div class="tab-content" id="mh-tour-details">
								<div class="tab-pane active" id="tab_default_1">
									<div class="container">
										<div class="row">
											<div class="inclusion-exclusion">
												<h1 class="title">Description <?= $OneDayTourDataDetails->one_day_tour_name?></h1>
												<div class="inclsion-data">
													<?=$OneDayTourDataDetails->tour_desc ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</section>





<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>

