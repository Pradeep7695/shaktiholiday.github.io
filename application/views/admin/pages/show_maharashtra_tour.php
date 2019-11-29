<?php $page = 'maharashtra_tour'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Show Maharashtra Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Maharashtra Tour List</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_maharashtra_tour')?>';"><i class="fa fa-plus"></i> Add Maharashtra Tour</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/add_maharashtra_tour')?>';"><i class="fa fa-reply"></i> Maharashtra Tour</button>
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
						<table id="privacy_policy" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Tour Name</th>
								<th>Tour Duration</th>
								<th>Tour Day</th>
								<th>Tour Image</th>
								<th width="200">Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php if ($AllDataMaha):?>
							   <?php $count = $this->uri->segment(3, 0); ?>
								<?php foreach ($AllDataMaha as $AllDataMaha):?>
									<tr>
										<td><?= ++$count?></td>
										<td><?= $AllDataMaha->mh_tour_name;?></td>
										<td><?= $AllDataMaha->tour_duration;?></td>
										<td><?= $AllDataMaha->tour_day;?></td>
										<td><img src="<?= $AllDataMaha->mh_tour_img;?>" class="img-responsive img-thumbnail" width="100" height="100"></td>
										<td><?= date('d-m-Y',strtotime($AllDataMaha->created_at))?></td>
										<td>
											<?php
											echo anchor("dashboard/edit_maharashtra_tour/". $AllDataMaha->mh_id,'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
											echo anchor("dashboard/delete_maharashtra_tour/". $AllDataMaha->mh_id,'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')
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
		$('#maharashtra-tour').DataTable({
			"order": []
		});
	});
</script>
