<?php $page = 'international'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">international Package</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit international Package</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_international_package')?>';"><i class="fa fa-reply"></i> International Package Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/update_international_package/'.$edit_international->id,['class'=>'form-horizontal'])?>
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
						<label class="col-md-3 control-label"> Package Name</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'intern_trip_name','placeholder'=>'Package Name','value'=>set_value('intern_trip_name',$edit_international->intern_trip_name)])?>
							<?= form_error('intern_trip_name','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Price</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'intern_trip_price','placeholder'=>'Package Price','value'=>set_value('intern_trip_price',$edit_international->intern_trip_price)])?>
							<?= form_error('intern_trip_price','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Trip Day</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'intern_trip_day','placeholder'=>'ex. 5 DAYS 4 NIGHTS','value'=>set_value('intern_trip_day',$edit_international->intern_trip_day)])?>
							<?= form_error('intern_trip_day','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Sort Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="intern_trip_desc"><?= $edit_international->intern_trip_desc?></textarea>
							<?= form_error('intern_trip_desc','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Package Image</label>
						<div class="col-md-9">
							<input type="file" name="intern_trip_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $edit_international->intern_trip_img?>'/>"  />
						</div>
					</div>
					<?= form_hidden('created_at',date('d-m-y'))?>

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

