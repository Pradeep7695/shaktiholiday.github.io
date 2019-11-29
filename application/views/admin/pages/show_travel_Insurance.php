<?php $page = 'travel'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Travel Insurance</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Travel Insurance List</h2>
	<div class="form-group pull-right">
		<button class="btn btn-warning" onclick="window.location.href='<?= base_url('dashboard/show_travel_Insurance','refresh')?>';"><i class="fa fa-refresh"></i> Refresh</button>
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_travel_Insurance')?>';"><i class="fa fa-plus"></i> Add Travel Insurance</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/add_travel_Insurance')?>';"><i class="fa fa-reply"></i> Back</button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
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
					<div class="table-responsive">
						<table id="travel_insurance" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
								<th>Travel Insur. Description</th>
								<th>Travel Insur. Rules</th>
								<th>Image</th>
								<th>Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
						<?php if (count($travelAllData)):?>
						  <?php foreach ($travelAllData as $travelAllData):?>
							<tr>
								<td><?= $travelAllData->id;?></td>
								<td><?= $travelAllData->travel_desc;?></td>
								<td><?= $travelAllData->travel_rule;?></td>
								<td><img src="<?= $travelAllData->travel_img;?>" class="img-responsive img-thumbnail" width="100" height="100"></td>
								<td><?= date('d-m-Y',strtotime($travelAllData->created_at))?></td>
								<td>
									<?php
									echo anchor("dashboard/edit_travel_Insurance/{$travelAllData->id}",'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
									echo anchor("dashboard/delete_travel_Insurance/{$travelAllData->id}",'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>');
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


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
<script>
	$(function(){
		$('#travel_insurance').DataTable({
			"order": []
		});
	});
</script>
