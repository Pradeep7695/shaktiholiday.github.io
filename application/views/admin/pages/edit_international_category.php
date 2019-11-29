<?php $page = 'international'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Edit international Package</li>
</ul>


<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-plane"></i> Edit International Country Category</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
					</ul>
				</div>
				<div class="panel-body">
					<?= form_open_multipart("dashboard/update_international_tour_category/{$editInCate->in_country_id}",['class'=>'form-horizontal'])?>

					<div class="form-group">
						<div class="col-md-3"><label>Name Of Country </label></div>
						<div class="col-md-9">
							<?= form_input(['class'=>'form-control','name'=>'inc_name','value'=>set_value('inc_name',$editInCate->inc_name),'placeholder'=>'Name of Country (ex - Dubai)'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>Sort Description of Country Tour</label></div>
						<div class="col-md-9">
							<?= form_textarea(['class'=>'form-control','name'=>'inc_desc','placeholder'=>'Sort Description of Country Tour','rows'=>'2','value'=>set_value('inc_desc',$editInCate->inc_desc)])?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-3"><label>Country Tour Image</label></div>
						<div class="col-md-9">
							<input type="file" name="inc_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $editInCate->inc_img?>'/>"  />
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



<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>


