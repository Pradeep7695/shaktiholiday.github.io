<?php $page = 'maharashtra_tour'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Maharashtra Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Maharashtra Tour</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_maharashtra_tour')?>';"><i class="fa fa-reply"></i> Maharashtra Tour Table </button>
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
			<?= form_open_multipart("dashboard/update_maharashtra_tour/{$editMhTour->mh_id}",['class'=>'form-horizontal'])?>

			<div class="panel panel-default tabs">
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#tab-first" role="tab" data-toggle="tab">About Tour</a></li>
					<li><a href="#tab-second" role="tab" data-toggle="tab">Inclusion / Exclusion</a></li>
					<li><a href="#tab-third" role="tab" data-toggle="tab">Itinerary</a></li>
					<li><a href="#tab-four" role="tab" data-toggle="tab">Tour Cost </a></li>
					<li><a href="#tab-five" role="tab" data-toggle="tab">Departure Dates </a></li>
				</ul>
				<div class="panel-body tab-content">

					<div class="tab-pane active" id="tab-first">
						<div class="container">
							<div class="col-md-12">
								<div class="row">
									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Name</label>
											<?= form_input(['class'=>'form-control','name'=>'mh_tour_name','placeholder'=>'Tour Name','value'=>set_value('mh_tour_name',$editMhTour->mh_tour_name)])?>
											<?= form_error('mh_tour_name','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Trip Duration</label>
											<?= form_input(['class'=>'form-control','name'=>'tour_duration','placeholder'=>'Tour Trip Duration (ex.- 3 Day 2 Night )','value'=>set_value('tour_duration',$editMhTour->tour_duration)])?>
											<?= form_error('tour_duration','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Day</label>
											<?= form_input(['class'=>'form-control','name'=>'tour_day','placeholder'=>'Tour Day (ex.- Only Saturday)','value'=>set_value('tour_day',$editMhTour->tour_day)])?>
											<?= form_error('tour_day','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Place Image</label>
											<input type="file" name="mh_tour_img" value="" class="file multiple" id="input-b3" data-browse-on-zone-click="TRUE" data-show-upload="false" data-show-caption="true" data-initial-preview="<img width='150' height='150' src='<?= $editMhTour->mh_tour_img?>'/>"  />
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
											<textarea class="ckeditor" id="content" name="inclusion_exclution"><?= $editMhTour->inclusion_exclution?></textarea>
											<?= form_error('inclusion_exclution','<div class="text-danger">','</div>')?>
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
											<textarea class="ckeditor" name="tour_cost" id="content"><?= $editMhTour->itinerary?></textarea>
											<?= form_error('itinerary','<div class="text-danger">','</div>')?>
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
											<label>Tour Cost</label>
											<textarea class="ckeditor" name="tour_cost" id="content"><?= $editMhTour->tour_cost?></textarea>
											<?= form_error('tour_cost','<div class="text-danger">','</div>')?>
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
											<label>Departure Dates</label>
											<textarea class="ckeditor" name="tour_cost" id="content"><?= $editMhTour->depature_date?></textarea>
											<?= form_error('depature_date','<div class="text-danger">','</div>')?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="panel-footer" id="btn-ft">
					<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-save"></i> Update Now'])?>
				</div>
			</div>

			<?= form_close()?>
		</div>
	</div>
</div>





<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>