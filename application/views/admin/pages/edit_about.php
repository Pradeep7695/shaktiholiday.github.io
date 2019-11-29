<?php $page = 'about'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">About Us</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit About Us</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_aboutUs')?>';"><i class="fa fa-reply"></i> About Us List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/update_aboutUs/'.$about->id,['class'=>'form-horizontal'])?>
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
						<label class="col-md-3 control-label">About Us Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="about_desc"><?php echo $about->about_desc; ?></textarea>
							<?= form_error('about_desc','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">About Us Service 1</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'service1','placeholder'=>'About Us Service 1','value'=>set_value('service1',$about->service1)])?>
							<?= form_error('service1','<div class="text-danger">','</div>')?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">About Us Service 2</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'service2','placeholder'=>'About Us Service 2','value'=>set_value('service2',$about->service2)])?>
							<?= form_error('service2','<div class="text-danger">','</div>')?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">About Us Service 3</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'service3','placeholder'=>'About Us Service 3','value'=>set_value('service3',$about->service3)])?>
							<?= form_error('service3','<div class="text-danger">','</div>')?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">About Us Service 4</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'service4','placeholder'=>'About Us Service 4','value'=>set_value('service4',$about->service4)])?>
							<?= form_error('service4','<div class="text-danger">','</div>')?>
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-3 control-label">About Us Image</label>
						<div class="col-md-9">
							<input type="file" name="about_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $about->about_img?>'/>"  />
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
