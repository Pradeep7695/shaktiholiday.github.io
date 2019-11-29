<?php $page = 'dashboard'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Dashboard</li>
</ul>

<div class="page-content-wrap" id="dashboard-icons">
	<div class="row">
		<div class="col-md-4">
			<!-- START WIDGET REGISTRED -->
			<div class="widget widget-danger widget-item-icon" onclick="location.href='<?= base_url('dashboard/show-popular-tour')?>';">
				<div class="widget-item-left">
					<img src="<?= base_url('assets/admin/img/popular.png')?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('popular_tour')?></div>
					<div class="widget-title"> Most Popular Tour</div>
					<div class="widget-subtitle">On your website</div>
				</div>
				<div class="widget-controls">
					<a href="javaScript:void(0)" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="Most Popular Tour"><span class="fa fa-plane"></span></a>
				</div>
			</div>
			<!-- END WIDGET REGISTRED -->
		</div>


		<div class="col-md-4">
			<!-- START WIDGET MESSAGES -->
			<div class="widget widget-warning widget-item-icon" onclick="location.href='<?= base_url('dashboard/show_state_table')?>';">
				<div class="widget-item-left">
					<img src="<?= base_url('assets/admin/img/domestic.png')?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('domestic_tour_state')?></div>
					<div class="widget-title">Domestic Package</div>
					<div class="widget-subtitle">In your website</div>


				</div>
				<div class="widget-controls">
					<a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="Domestic Package"><span class="fa fa-plane"></span></a>
				</div>
			</div>
			<!-- END WIDGET MESSAGES -->
		</div>

		<div class="col-md-4">
			<!-- START WIDGET REGISTRED -->
			<div class="widget widget-success widget-item-icon" onclick="location.href='<?= base_url('dashboard/show_country_tour')?>';">
				<div class="widget-item-left">
					<img src="<?= base_url('assets/admin/img/international.png')?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('country_tour_package');?></div>
					<div class="widget-title">International Package</div>
					<div class="widget-subtitle">On your website</div>
				</div>
				<div class="widget-controls">
					<a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="International Package"><span class="fa fa-plane"></span></a>
				</div>
			</div>
			<!-- END WIDGET REGISTRED -->
		</div>

		<!--<div class="col-md-4">
			<div class="widget widget-info widget-item-icon" onclick="location.href='<?/*= base_url('dashboard/show_maharashtra_tour')*/?>';">
				<div class="widget-item-left">
					<img src="<?/*= base_url('assets/admin/img/maharashtra.png')*/?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?/*= $this->db->count_all('maharashtra-tour')*/?></div>
					<div class="widget-title"> Maharashtra Tour</div>
					<div class="widget-subtitle">On your website</div>
				</div>
				<div class="widget-controls">
					<a href="javaScript:void(0)" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="Maharashtra Tour"><span class="fa fa-plane"></span></a>
				</div>
			</div>
		</div>-->

		<div class="col-md-4">
			<!-- START WIDGET MESSAGES -->
			<div class="widget widget-success widget-item-icon" onclick="location.href='<?= base_url('dashboard/show_domestic')?>';">
				<div class="widget-item-left">
					<img src="<?= base_url('assets/admin/img/one-day-tour.png')?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('one_day_tour')?></div>
					<div class="widget-title">One Day Picnic / Resort</div>
					<div class="widget-subtitle">In your website</div>
				</div>
				<div class="widget-controls">
					<a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="One Day Tour"><span class="fa fa-plane"></span></a>
				</div>
			</div>
			<!-- END WIDGET MESSAGES -->
		</div>



		<!--<div class="col-md-4">
			<div class="widget widget-danger widget-item-icon" onclick="location.href='<?/*= base_url('dashboard/show-image')*/?>';">
				<div class="widget-item-left">
					<img src="<?/*= base_url('assets/admin/img/image.png')*/?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php /*echo $this->db->count_all('img_gallery')*/?></div>
					<div class="widget-title">Images</div>
					<div class="widget-subtitle">In your website</div>
				</div>
				<div class="widget-controls">
					<a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="Images"><span class="fa fa-plane"></span></a>
				</div>
			</div>
		</div>-->

		<div class="col-md-4">
			<!-- START WIDGET MESSAGES -->
			<div class="widget widget-warning widget-item-icon" onclick="location.href='<?= base_url('dashboard/show_testimonial')?>';">
				<div class="widget-item-left">
					<img src="<?= base_url('assets/admin/img/thumbs-up.png')?>"/>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('testimonial')?></div>
					<div class="widget-title">Client Feedback</div>
					<div class="widget-subtitle">In your website</div>
				</div>
				<div class="widget-controls">
					<a href="#" class="widget-control-right" data-toggle="tooltip" data-placement="top" title="Client Feedback"><span class="fa fa-plane"></span></a>
				</div>
			</div>
			<!-- END WIDGET MESSAGES -->
		</div>

	</div>
</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
