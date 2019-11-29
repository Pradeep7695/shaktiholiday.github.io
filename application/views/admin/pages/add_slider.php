<?php $page='slider'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Slider</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Slider</h2>
	<div class="form-group pull-right">
		<input id="Button1" type="button" class="btn btn-success" value="Upload Video Slider" onclick="switchVisible();"/>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_slider')?>';"><i class="fa fa-reply"></i> Slider Table </button>
	</div>
</div>

<div class="page-content-wrap">
    <div class="row">
		<div class="col-md-12" id="Div1img">
		   <?= form_open_multipart('dashboard/CreateSlider',['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<h3 class="text-center"><i class="fa fa-image"></i> Add Image Slider</h3>
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

					<div class="form-group">
						<label class="col-md-2 control-label">Slider Title</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'slider_title','placeholder'=>'Slider Title','value'=>set_value('slider_title')])?>
						</div>
					</div>

                    <!-- <div class="form-group">
						 <label class="col-md-2 control-label">Slider Sort Description</label>
						 <div class="col-md-10">
							 <?/*= form_input(['class'=>'form-control','name'=>'slider_text','placeholder'=>'Slider Sort Description','value'=>set_value('slider_text')])*/?>
						 </div>
					 </div>-->

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Image Slider</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'slider_img'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
								<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
							<!--	<?= form_button(['class'=>'btn btn-danger','type'=>'reset','value'=>'Cancel','content'=>'<i class="fa fa-reply"></i> Cancel'])?>-->
						</div>
					</div>

				</div>
			</div>
			<?= form_close()?>
		</div>

		<!-- --------------------video img slider ------------- -->
		<div class="col-md-12" id="Div2video" style="display: none">
			<?= form_open_multipart('dashboard/uploadVideo',['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<h3 class="text-center"><i class="fa fa-video-camera"></i> Add Video Slider</h3>
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

					<div class="form-group">
						<label class="col-md-2 control-label">Video Title</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'video_title','placeholder'=>'Video Title','value'=>set_value('video_title')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Video Slider</label>
						<div class="col-md-10">
							<input id="input-b7" name="video" multiple type="file" class="file" data-browse-on-zone-click="TRUE" data-show-upload="FALSE" data-allowed-file-extensions='["video", "avi","flv","wmv","mp4"]'>
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
						<!--	<?= form_button(['class'=>'btn btn-danger','type'=>'reset','value'=>'Cancel','content'=>'<i class="fa fa-reply"></i> Cancel'])?>-->
						</div>
					</div>

				</div>
			</div>
			<?= form_close()?>
		</div>

		<!-- -----------------..//end video slider ------------ -->

	</div>

</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>

<script>
	function switchVisible() {
		if (document.getElementById('Div1img')) {

			if (document.getElementById('Div1img').style.display == 'none') {
				document.getElementById('Div1img').style.display = 'block';
				document.getElementById('Div2video').style.display = 'none';
			}
			else {
				document.getElementById('Div1img').style.display = 'none';
				document.getElementById('Div2video').style.display = 'block';
			}
		}
	}
</script>

<script>
	document.getElementById("Button1").addEventListener(
		"click",
		function(event) {
			if (event.target.value === "Add Image Slider") {
				event.target.value = "Upload Video Slider";
			} else {
				event.target.value = "Add Image Slider";
			}
		},
		false
	);
</script>



