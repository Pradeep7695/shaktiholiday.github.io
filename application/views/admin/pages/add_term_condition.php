<?php $page = 'term'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Terms & Condition</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Terms & Condition</h2>
	<div class="form-group pull-right">
		<button class="btn btn-warning" onclick="window.location.href='<?= base_url('dashboard/add_term_condition','refresh')?>';"><i class="fa fa-refresh"></i> Refresh</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_term_condition')?>';"><i class="fa fa-reply"></i> Terms & Condition List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/create_term_condition',['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<i class="fa fa-check-circle"></i> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-3 control-label">Terms & Condition Description</label>
						<div class="col-md-9">
							<?= form_textarea(['class'=>'ckeditor','name'=>'term_desc','placeholder'=>'Terms & Condition Description','value'=>set_value('term_desc')])?>
							<?= form_error('term_desc','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
							<!--<?= form_button(['class'=>'btn btn-danger','type'=>'reset','value'=>'Cancel','content'=>'<i class="fa fa-reply"></i> Cancel'])?>-->
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
