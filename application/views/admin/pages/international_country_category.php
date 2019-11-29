<?php $page = 'international'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">international Package</li>
</ul>


<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> Add International Country Category</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
					</ul>
				</div>
				<div class="panel-body">
					<?= form_open_multipart('dashboard/create_international_country_category',['class'=>'form-horizontal'])?>

					<div class="form-group">
						<div class="col-md-3"><label>Name Of Country </label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'inc_name',set_value('inc_name'),'placeholder'=>'Name of Country (ex - Dubai)'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>Sort Description of Country Tour</label></div>
						<div class="col-md-9">
							<?= form_textarea(['class'=>'form-control','name'=>'inc_desc','placeholder'=>'Sort Description of Country Tour','rows'=>'2',set_value('inc_desc')])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>Country Tour Image</label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'inc_img'])?>
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

	<!-- ================================Country Category ============================ -->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> International Tour Category</h3>
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
						<table id="international_country_category" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Sl. No.</th>
								<th>Country Tour Name</th>
								<th>Country Tour Description</th>
								<th>Country Tour Image</th>
								<th width="200">Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
								<?php if (count($internCategory)):?>
								    <?php $count = 0;?>
									<?php foreach ($internCategory as $item):?>
										<tr>
											<td><?= ++$count?></td>
											<td><span class="label label-primary label-form"><?= $item->inc_name?></span></td>
											<td><?= $item->inc_desc?></td>
											<td><img src="<?= $item->inc_img?>" class="img-thumbnail"></td>
											<td><?= date('d-m-Y',strtotime($item->created_at))?></td>
											<td>
												<?php
												echo anchor("dashboard/edit_international_tour_category/". $item->in_country_id,'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
												echo anchor("dashboard/add_international_tours_list/". $item->in_country_id,'<button class="btn btn-success btn-condensed btn-tour"><i class="fa fa-plus"></i> Add Tour</button>');
												echo anchor("dashboard/delete_international_tour_category/". $item->in_country_id,'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')
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

	<!-- ==============================..//end Category ============================== -->

</div>



<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>


<script>
	$(function(){
		$('#international_country_category').DataTable({
			"order": []
		});
	});
</script>
