<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Domestic Tour Package</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Domestic Tour Package</h2>
	<!--<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?/*= base_url('dashboard/add_domestic_tour_category')*/?>';"><i class="fa fa-plus"></i>Add Domestic State Tour Category</button>
	</div>-->
</div>

<div class="page-content-wrap">

	<!-- =========================add category ==================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> Add Domestic Tour Category</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
					</ul>
				</div>
				<div class="panel-body">
					<?= form_open_multipart('dashboard/create_domestic_tour_category',['class'=>'form-horizontal'])?>


					<div class="form-group">
						<div class="col-md-3"><label>Name Of State Tour</label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'state_name',set_value('state_name'),'placeholder'=>'Name of State (ex - Sikkim)'])?>
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-3"><label>Sort Description of State Tour</label></div>
						<div class="col-md-9">
							<?= form_textarea(['class'=>'form-control','name'=>'state_tour_des','placeholder'=>'Sort Description of State Tour','rows'=>'2',set_value('state_tour_des')])?>
						</div>
					</div>


					<div class="form-group">
						<div class="col-md-3"><label>State Tour Image</label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'state_tour_img'])?>
						</div>
					</div>


					<div class="col-md-12">
						<div class="btn-state-submit text-center">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-save"></i>Submit'])?>
						</div>
					</div>

					<?= form_close()?>
				</div>
			</div>
		</div>
	</div>

	<!-- ---------------------..//end category --------------------- -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> Domestic Tour Category</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
					</ul>
				</div>
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
					<div class="table-responsive">
						<table id="state_tour_category" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Sl. No.</th>
								<th>State Tour Name</th>
								<th>State Tour Description</th>
								<th>State Tour Image</th>
								<th width="200">Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php if (count($DomesticCategoryData)):?>
								<?php $count = 0; ?>
								<?php foreach ($DomesticCategoryData as $item):?>
									<tr>
										<td><?= ++$count?></td>
										<td><span class="label label-primary label-form"><?= $item->state_name;?></span></td>
										<td><?= $item->state_tour_des?></td>
										<td><img src="<?= $item->state_tour_img;?>" class="img-responsive img-thumbnail" width="100" height="100"></td>
										<td><?= date('d-m-Y',strtotime($item->created_at))?></td>
										<td>
											<?php
											echo anchor("dashboard/edit_state_category/". $item->state_tour_id,'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
											echo anchor("dashboard/add_domestic_state_tours/". $item->state_tour_id,'<button class="btn btn-success btn-condensed btn-tour"><i class="fa fa-plus"></i> Add Tour</button>');
											echo anchor("dashboard/delete_state_tour_category/". $item->state_tour_id,'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')
											?>
										</td>
									</tr>

								<?php endforeach;?>
							<?php endif;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>


</div>
<!-- END PAGE CONTENT -->



<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>

<script>
	$(document).ready(function() {
		$('#summernote').summernote({
			tabsize: 2,
			height: 100
		});
	});
</script>

<script>
	$(function(){
		$('#state_tour_category').DataTable({
			"order": []
		});
	});
</script>
