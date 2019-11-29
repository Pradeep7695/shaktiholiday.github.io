<?php $page = 'popular-tour'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Show Popular Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Popular Tour List</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_popular_tour')?>';"><i class="fa fa-plus"></i> Add Popular Tour</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/add_popular_tour')?>';"><i class="fa fa-reply"></i> Back</button>
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
						<table id="popular_tour" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
								<th>Package Name</th>
								<th>Package Price</th>
								<th>Package Url Link</th>
								<th>Package Image</th>
								<th>Created Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
						<?php if (count($data)):?>
						   <?php foreach ($data as $data):?>
							<tr>
								<td><?= $data->id?></td>
								<td><?= $data->package_name?></td>
								<td><?= $data->package_price?></td>
								<td><?= $data->url_link?></td>
								<td><img src="<?= $data->package_img?>" class="img-responsive img-thumbnail" width="100" height="100"></td>
								<td><?= date('d-m-Y',strtotime($data->created_at))?></td>
								<td>
									<?php
									   echo anchor("dashboard/edit_Popular_tour/{$data->id}",'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
									   echo anchor("dashboard/delete/{$data->id}",'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')
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
		$('#popular_tour').DataTable({
			"order": []
		});
	});
</script>
