<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Domestic Package</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Domestic Package</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_domestic')?>';"><i class="fa fa-reply"></i> Domestic Package Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart("dashboard/updateDomestic/{$findDomestic->id}",['class'=>'form-horizontal'])?>
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
						<label class="col-md-3 control-label">Package Name</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'domestic_trip_name','placeholder'=>'Package Name','value'=>set_value("domestic_trip_name",$findDomestic->domestic_trip_name)])?>
							<?= form_error('domestic_trip_name','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Price</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'domestic_price','placeholder'=>'Package Price','value'=>set_value('domestic_price',$findDomestic->domestic_price)])?>
							<?= form_error('domestic_price','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Trip Day</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'domestic_trip_day','placeholder'=>'ex. 5 DAYS 4 NIGHTS','value'=>set_value('domestic_trip_day',$findDomestic->domestic_trip_day)])?>
							<?= form_error('domestic_trip_day','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Sort Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="domestic_desc"><?= $findDomestic->domestic_desc?></textarea>
							<?= form_error('domestic_desc','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Image</label>
						<div class="col-md-9">
							<input type="file" name="domestic_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $findDomestic->domestic_img?>'/>"  />
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




