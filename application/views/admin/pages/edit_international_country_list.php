<?php $page = 'international'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Edit International Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Country Tour</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_international_country_category')?>';"><i class="fa fa-plus"></i>Add International Tour </button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_country_tour')?>';"><i class="fa fa-reply"></i> International Tour Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="container">

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

		<div class="row">
			<?= form_open_multipart("dashboard/update_country_tour_list/{$editCountryTList->country_tour_id}",['class'=>'form-horizontal'])?>
			<?= form_hidden('in_country_id',$this->uri->segment(3))?>
			<div class="panel panel-default tabs">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">About Tour</a></li>
					<li><a href="#tab-second" role="tab" data-toggle="tab">Inclusion / Exclusion</a></li>
					<li><a href="#tab-third" role="tab" data-toggle="tab">Itinerary</a></li>
					<li><a href="#tab-four" role="tab" data-toggle="tab">Tour Date </a></li>
					<li><a href="#tab-five" role="tab" data-toggle="tab">Tour Cost </a></li>
				</ul>
				<div class="panel-body tab-content">

					<div class="tab-pane active" id="tab-first">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Country Tour Name</label>
											<?= form_input(['class'=>'form-control','name'=>'c_tour_name','placeholder'=>'Country Tour Name','value'=>set_value('c_tour_name',$editCountryTList->c_tour_name)])?>
											<?= form_error('c_tour_name','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Trip Duration</label>
											<?= form_input(['class'=>'form-control','name'=>'c_tour_duration','placeholder'=>'Tour Trip Duration (ex.- 3 Day 2 Night )','value'=>set_value('c_tour_duration',$editCountryTList->c_tour_duration)])?>
											<?= form_error('c_tour_duration','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Place Image</label>
											<input type="file" name="c_tour_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $editCountryTList->c_tour_img?>'/>"  />
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab-second">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Inclusion / Exclusion</label>
											<textarea class="ckeditor" name="c_inclusion_exclusion"><?= $editCountryTList->c_inclusion_exclusion?></textarea>
											<?= form_error('c_inclusion_exclusion','<div class="text-danger">','</div>')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab-third">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Itinerary</label>
											<textarea class="ckeditor" name="c_itenary"><?= $editCountryTList->c_itenary?></textarea>
											<?= form_error('c_itenary','<div class="text-danger">','</div>')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab-four">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Date</label>
											<textarea class="ckeditor" name="c_tour_date"><?= $editCountryTList->c_tour_date?></textarea>
											<?= form_error('c_tour_date','<div class="text-danger">','</div>')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab-five">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Cost</label>
											<textarea class="ckeditor" name="c_tour_cost"><?= $editCountryTList->c_tour_cost?></textarea>
											<?= form_error('c_tour_cost','<div class="text-danger">','</div>')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="panel-footer" id="btn-ft">
					<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-save"></i> Submit'])?>
				</div>
			</div>

			<?= form_close()?>
		</div>
	</div>
</div>



<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>
