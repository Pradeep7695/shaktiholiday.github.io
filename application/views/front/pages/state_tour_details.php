<?php $page ='domestic'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li>State Tour List</li>
					<li class="active"><?= $stateTourDetails->domestic_tour_name?></li>
				</ul>
			</div>
			<h1 class="heading_primary"><?=$stateTourDetails->domestic_tour_name ?></h1></div>
	</div>
</div>

<section id="mh-sec" class="tour-single-data">
	<div class="container">
		<div class="row">
			<div class="top-rw">
				<div class="text-rw">
					<h3 class="text-center"><a href="<?= base_url('contact_us')?>"> For other destinations please <i class="fa fa-hand-o-right"></i> Contact Us </a></h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="state_tour_details1">
					<div class="images images_single_left">
						<div class="title-single">
							<div class="title">
								<h1><i class="fa fa-tree"></i> <?= $stateTourDetails->domestic_tour_name?></h1>
							</div>
							<div class="tour_code">
								<p><strong>Trip Duration: </strong><i class="fa fa-calendar"></i> <?= $stateTourDetails->domestic_tour_duration?></p>
							</div>
						</div>

						<div class="tour-details">
							<div class="tour-img">
								<img class="img-responsive" src="<?= $stateTourDetails->domestic_tour_img?>">
							</div>
						</div>

						<div class="clear"></div>

					</div>
				</div>
			</div>
			<div class="col-md-4" id="tour-single-data">
				<div class="state_tour_details2">
					<div class="pane panel-primary">
						<div class="panel-heading">
							<div class="panel-title">Interested In Tour</div>
						</div>
					</div>
					<div class="panel panel-body">
						<div class="form-tour">
							<form>
								<div class="row">
									<div class="form-group">
										<label>Full Name</label>
										<input type="text" class="form-control" placeholder="Full Name">
									</div>
									<div class="form-group">
										<label>Contact No.</label>
										<input type="text" class="form-control" placeholder="Contact No.">
									</div>
									<div class="form-group">
										<label>Email id</label>
										<input type="email" class="form-control" placeholder="Email id">
									</div>
									<div class="form-group">
										<label>City</label>
										<input type="text" class="form-control" placeholder="City">
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea class="form-control" placeholder="Addres"></textarea>
									</div>

									<div class="form-group">
										<button class="btn btn-success">Enquire Now</button>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

			<div class="row">
				<div class="site-main col-sm-12 full-width">
					<div class="page-content">
						<div class="tabbable-panel">
							<div class="tabbable-line">
								<ul class="nav nav-tabs ">
									<li class="active">
										<a href="#tab_default_1" data-toggle="tab">
											Price & Date  </a>
									</li>
									<li>
										<a href="#tab_default_2" data-toggle="tab">
											Inclusion / Exclusion  </a>
									</li>
									<li>
										<a href="#tab_default_3" data-toggle="tab">
											Itinerary  </a>
									</li>
									<li>
										<a href="#tab_default_4" data-toggle="tab">
											Tour Cost </a>
									</li>
									<li>
										<a href="#tab_default_5" data-toggle="tab">
											Tour Date  </a>
									</li>
								</ul>
								<div class="tab-content" id="mh-tour-details">
									<div class="tab-pane active" id="tab_default_1">
										<div class="container">
											<div class="row">
												<div class="content-agileits">
													<h1 class="title">Calculate package price here</h1>
													<div class="left">
														<form action="#" method="post" data-toggle="validator" novalidate="true">

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="firstname" class="control-label">Package Name*:</label>
																		<input type="text" class="form-control" id="firstname" placeholder="Package Name" data-error="Enter Package Name" required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="lastname" class="control-label">Name:</label>
																		<input type="text" class="form-control" id="lastname" placeholder="Namer" data-error="Enter Name" required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="Phone" class="control-label">Adult .:</label>
																		<input type="text" class="form-control" id="Phone" placeholder="Adult (13yr. Above) " data-error="Adult " required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="inputEmail" class="control-label">Child :</label>
																		<input type="text" class="form-control" id="inputEmail" placeholder="Child (12-13 yr.) " data-error="Child " required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="inputPassword" class="control-label">Sr. Citizen :</label>
																		<input type="text" class="form-control" id="inputEmail" placeholder="Sr. Citizen (65yr. Above) " data-error="Sr. Citizen " required="">
																		<div class="help-block with-errors"></div>
																	</div>

																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="inputPassword" class="control-label">Date  :</label>
																		<input type="datetime-local" class="form-control" id="inputEmail" placeholder="Date  " data-error="Date " required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="inputPassword" class="control-label">Mobile No. :</label>
																		<input type="text" class="form-control" id="inputEmail" placeholder="Mobile No." data-error="Mobile No. " required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="inputPassword" class="control-label">Email Id :</label>
																		<input type="email" class="form-control" id="inputEmail" placeholder="Email  " data-error="Enter Valid Email Id" required="">
																		<div class="help-block with-errors"></div>
																	</div>
																</div>
															</div>

															<div class="form-group">
																<label>Description </label>
																<textarea class="form-control" placeholder="Description "></textarea>
															</div>
															<!---728x90--->

															<div class="form-group career">
																<button class="btn btn-default btn-on-bk"><i class="fa fa-location-arrow"></i> Submit</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_default_2">
										<div class="container">
											<div class="col-md-12">
												<div class="row">
													<div class="inclusion-exclusion">
														<h1 class="title">Inclusion / Exclusion </h1>
														<div class="inclsion-data">
															<?=$stateTourDetails->inclusion_exclusion ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_default_3">
										<div class="container">
											<div class="col-md-12">
												<div class="row">
													<div class="inclusion-exclusion">
														<h1 class="title">Itinerary </h1>
														<div class="itar-text pull-left">
															<p><i class="fa fa-hand-o-right"></i> <?=$stateTourDetails->domestic_tour_duration ?></p>
														</div>
														<div class="inclsion-data">
															<?=$stateTourDetails->itinerary ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab_default_4">
										<div class="container">
											<div class="col-md-12">
												<div class="row">
													<div class="inclusion-exclusion">
														<h1 class="title">Tour Cost </h1>
														<div class="inclsion-data">
															<?=$stateTourDetails->tour_cost?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab_default_5">
										<div class="container">
											<div class="col-md-12">
												<div class="row">
													<div class="inclusion-exclusion">
														<h1 class="title">Tour Date </h1>
														<div class="inclsion-data">
															<?=$stateTourDetails->tour_date?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
</section>







<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
