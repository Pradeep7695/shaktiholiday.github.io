<?php $page = 'dashboard';  include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Change Password</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Change Password</h2>
	<!--<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?/*= base_url('dashboard/show_slider')*/?>';"><i class="fa fa-reply"></i> Slider Table </button>
	</div>-->
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-xs-7">

				<?= form_open('dashboard/update_password',['class'=>'form-horizontal'])?>
				<div class="panel panel-default">
					<?php if ($feedback = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<p><?= $feedback;?></p>
						</div>
					<?php endif;?>
					<div class="panel-body">
						<h3 class="text-center"><span class="fa fa-pencil"></span> Change Password</h3>
					</div>
					<div class="panel-body form-group-separated">
						<div class="form-group">
							<label class="col-md-3 col-xs-5 control-label">Old Password</label>
							<div class="col-md-9 col-xs-7">
								<?= form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Old Password'])?>
								<?= form_error('password','<div class="error">','</div>')?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-5 control-label">New Password</label>
							<div class="col-md-9 col-xs-7">
								<?= form_password(['class'=>'form-control','name'=>'newpass','placeholder'=>'New Password'])?>
								<?= form_error('newpass','<div class="error">','</div>')?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 col-xs-5 control-label">Confirm Password</label>
							<div class="col-md-9 col-xs-7">
								<?= form_password(['class'=>'form-control','name'=>'confpassword','placeholder'=>'Confirm Password'])?>
								<?= form_error('confpassword','<div class="error">','</div>')?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-12 col-xs-5 text-center">
								<button class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
							</div>
						</div>
					</div>
				</div>
				<?= form_close()?>

			</div>
		</div>
	</div>
</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
