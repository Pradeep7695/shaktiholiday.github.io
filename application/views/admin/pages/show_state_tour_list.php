<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Show State Tour Package</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> State Tour Package List</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/Domestic_State_Tour_Category')?>';"><i class="fa fa-plus"></i> Add State Tour Category</button>
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/Domestic_State_Tour_Category')?>';"><i class="fa fa-plus"></i> Add State Tour</button>
	</div>
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
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table id="domestic_package" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
								<th>State Name</th>
								<th>Tour Name</th>
								<th>Tour Duration</th>
								<th>Tour Image</th>
								<th>Created Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>


								<?php $count = 0; ?>
								<?php foreach ($stateTourList as $row):?>

									<tr>
										<td><?= ++$count;?></td>
										<td><span class="label label-primary label-form"> <?= $row->state_name?></span></td>
										<td><?= $row->domestic_tour_name;?></td>
										<td><?= $row->domestic_tour_duration;?></td>
										<td><img src="<?= $row->domestic_tour_img;?>" class="img-responsive img-thumbnail" width="100" height="100"></td>
										<td><?= date('d-m-Y',strtotime($row->created_at))?></td>
										<td>
											<?php
											echo anchor("dashboard/edit_state_tour/{$row->domestic_tour_id}",'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
											echo anchor("dashboard/delete_state_tour/{$row->domestic_tour_id}",'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>');
											?>
										</td>
									</tr>
								<?php endforeach;?>
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
		$('#domestic_package').DataTable({
			"order": []
		});
	});
</script>
