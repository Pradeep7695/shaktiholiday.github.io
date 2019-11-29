<?php $page = 'popular-tour'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Popular Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Popular Tour</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_popular_tour')?>';"><i class="fa fa-plus"></i> Add Popular Tour</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_popular_tour')?>';"><i class="fa fa-reply"></i> Popular List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart("dashboard/update_popular_tour/{$popular_tour->id}",['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<?php $feedback_icon = $this->session->userdata('feedback_icon');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<?= $feedback_icon?> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label class="col-md-2 control-label">Package Name</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'package_name','placeholder'=>'Package Name','value'=>set_value("package_name",$popular_tour->package_name)])?>
							<?= form_error('package_name','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Package Price</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'package_price','placeholder'=>'Package Price','value'=>set_value("package_price",$popular_tour->package_price)])?>
							<?= form_error('package_price','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Package Url Link</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'url_link','placeholder'=>'Package Url Link (eg. https://www.google.com/)','value'=>set_value('url_link',$popular_tour->url_link)])?>
							<?= form_error('url_link','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Package Image</label>
						<div class="col-md-10">
							<input type="file" name="package_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $popular_tour->package_img?>'/>"  />
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
						
						</div>
					</div>

				</div>
			</div>
			<?= form_close()?>
		</div>
	</div>

</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
