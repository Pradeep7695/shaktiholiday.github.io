<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">State Tour</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add State Tour</h2>
	<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/Domestic_State_Tour_Category')?>';"><i class="fa fa-plus"></i>Add State Tour </button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_state_table')?>';"><i class="fa fa-reply"></i> State Tour Table </button>
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
			<?= form_open_multipart('dashboard/create_domestic_state_tours',['class'=>'form-horizontal'])?>
             <?= form_hidden('state_tour_id',$this->uri->segment(3))?>
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
											<label>Tour Name</label>
											<?= form_input(['class'=>'form-control','name'=>'domestic_tour_name','placeholder'=>'Tour Name','value'=>set_value('domestic_tour_name')])?>
											<?= form_error('domestic_tour_name','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Trip Duration</label>
											<?= form_input(['class'=>'form-control','name'=>'domestic_tour_duration','placeholder'=>'Tour Trip Duration (ex.- 3 Day 2 Night )','value'=>set_value('domestic_tour_duration')])?>
											<?= form_error('domestic_tour_duration','<div class="text-danger">','</div>')?>
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-10">
											<label>Tour Place Image</label>
											<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'domestic_tour_img'])?>
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
											<?= form_textarea(['class'=>'ckeditor','name'=>'inclusion_exclusion','placeholder'=>'Package Description (Inclusion Exclusion)','value'=>set_value('inclusion_exclusion')])?>
											<?= form_error('inclusion_exclusion','<div class="text-danger">','</div>')?>
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
											<?= form_textarea(['class'=>'ckeditor','name'=>'itinerary','placeholder'=>'Package Description','value'=>set_value('itinerary')])?>
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
											<label>Tour Date</label>
											<?= form_textarea(['class'=>'ckeditor','name'=>'tour_date','placeholder'=>'Package Description','value'=>set_value('tour_date')])?>
											<?= form_error('tour_date','<div class="text-danger">','</div>')?>
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
											<?= form_textarea(['class'=>'ckeditor','name'=>'tour_cost','placeholder'=>'Package Description','value'=>set_value('tour_cost')])?>
											<?= form_error('tour_cost','<div class="text-danger">','</div>')?>
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
