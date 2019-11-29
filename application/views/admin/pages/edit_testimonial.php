<?php $page='testimonial'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Testimonial</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Testimonial</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_testimonial')?>';"><i class="fa fa-reply"></i> Testimonial Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/updateTestimonial/'.$testimonialdata->id,['class'=>'form-horizontal'])?>
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
						<label class="col-md-2 control-label">Client Name</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'client_name','placeholder'=>'client Name','value'=>set_value('client_name',$testimonialdata->client_name)])?>
							<?= form_error('client_name','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Client Review</label>
						<div class="col-md-10">
							<textarea class="ckeditor" id="content" name="review"><?= $testimonialdata->review;?></textarea>
							<?= form_error('review','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Client Image</label>
						<div class="col-md-10">
							<input type="file" name="client_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $testimonialdata->client_img?>'/>"  />
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
