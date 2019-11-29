<?php $page ='career'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('/')?>" class="home">Home</a></li>
					<li><a href="javaScript:void(0);">Career </a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Career</h2></div>
	</div>
</div>

<section class="career-top" id="career-top-sec">
	<div class="container">
		<div class="row">
			<div class="content-agileits">
				<h1 class="title">Share Your Resume</h1>
				<div class="left">
					<form action="#" method="post" data-toggle="validator" novalidate="true">
						<div class="form-group">
							<label for="firstname" class="control-label">Name:</label>
							<input type="text" class="form-control" id="firstname" placeholder="Name" data-error="Enter Your Name" required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="lastname" class="control-label">Apply For:</label>
							<input type="text" class="form-control" id="lastname" placeholder="Apply For" data-error="Enter Apply For" required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="Phone" class="control-label">Contact No.:</label>
							<input type="text" class="form-control" id="Phone" placeholder="Phone" data-error="Enter Your Contact No." required="">
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<label for="inputEmail" class="control-label">Email:</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="This email address is invalid" required="">
							<div class="help-block with-errors"></div>
						</div>

						<div class="form-group">
							<label for="inputPassword" class="control-label">Address:</label>
							<textarea class="form-control" id="inputAddress" placeholder="Enter Your Address" data-error="Enter Your Address"></textarea>
						</div>

						<div class="form-group">
							<label for="inputPassword" class="control-label">Upload Your Resume:</label>
							<input type="file" id="inputFile" class="form-control">
						</div>
						<!---728x90--->

						<div class="form-group career">
							<button class="btn btn-default btn-on-bk"><i class="fa fa-location-arrow"></i> Submit</button>
						</div>
					</form>
				</div>
				<div class="right"></div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>



<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
