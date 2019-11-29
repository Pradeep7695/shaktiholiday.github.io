<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Edit Domestic Tour Package</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Domestic Tour Package</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/Domestic_State_Tour_Category')?>';"><i class="fa fa-plus"></i> Add Domestic State Category</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_state_table')?>';"><i class="fa fa-list-alt"></i> Show Domestic State List</button>
	</div>
</div>

<div class="page-content-wrap">

	<!-- =========================add category ==================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> Edit Domestic Tour Category</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
					</ul>
				</div>
				<div class="panel-body">
					<?= form_open_multipart("dashboard/update_state_category/{$editStCat->state_tour_id}",['class'=>'form-horizontal'])?>

					<div class="form-group">
						<div class="col-md-3"><label>Name Of State Tour</label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'state_name','value'=>set_value('state_name',$editStCat->state_name),'placeholder'=>'Name of State (ex - Sikkim)'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>Sort Description of State Tour</label></div>
						<div class="col-md-9">
							<?= form_textarea(['class'=>'form-control','name'=>'state_tour_des','placeholder'=>'Sort Description of State Tour','rows'=>'2','value'=>set_value('state_tour_des',$editStCat->state_tour_des)])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>State Tour Image</label></div>
						<div class="col-md-9">
							<input type="file" name="state_tour_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $editStCat->state_tour_img?>'/>"  />
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
