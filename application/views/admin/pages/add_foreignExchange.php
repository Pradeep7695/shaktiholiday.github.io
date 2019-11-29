<?php $page='foreign'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Foreign exchange</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Foreign exchange</h2>
	<div class="form-group pull-right">
		<button class="btn btn-warning" onclick="window.location.href='<?= base_url('dashboard/add_foreignExchange','refresh')?>';"><i class="fa fa-refresh"></i> Refresh</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_foreignExchange')?>';"><i class="fa fa-reply"></i> Foreign Exchange List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/createForeignExchange',['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')): ?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<i class="fa fa-check-circle"></i> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-2 control-label">Foreign exchange Description</label>
						<div class="col-md-10">
							<?= form_textarea(['class'=>'ckeditor','name'=>'foreign_desc','placeholder'=>'Visa Description','value'=>set_value('foreign_desc')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Foreign exchange Rules</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'foreign_rule','placeholder'=>'Foreign exchange Rules','value'=>set_value('foreign_rule')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Image</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'foreign_img'])?>
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
