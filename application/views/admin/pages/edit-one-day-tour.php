<?php $page='OneDayTour'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">One Day Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit One Day Tour</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_one_day_tour')?>';"><i class="fa fa-plus"></i> Add One Day Tour </button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_one_day_our')?>';"><i class="fa fa-reply"></i> One Day Tour List</button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart("dashboard/update_one_day_tour/{$editOneDayTour->id}",['class'=>'form-horizontal'])?>
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
						<label class="col-md-3 control-label">One Day Tour Name</label>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'one_day_tour_name','placeholder'=>'One Day Tour Name','value'=>set_value('one_day_tour_name',$editOneDayTour->one_day_tour_name)])?>
							<?= form_error('one_day_tour_name')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">One Day Tour Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="tour_desc"><?= $editOneDayTour->tour_desc?></textarea>
							<?= form_error('tour_desc')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">One Day Tour Image</label>
						<div class="col-md-9">
							<input type="file" name="tour_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $editOneDayTour->tour_img?>'/>"  />
						</div>
					</div>
					<?= form_hidden('created_at',date('d-m-y'))?>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-save"></i> Submit'])?>
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