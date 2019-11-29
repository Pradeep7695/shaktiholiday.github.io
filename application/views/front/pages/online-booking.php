<?php $page = 'service'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Enquire Now</a></li>
				</ul>
			</div>
			<h2 class="heading_primary text-center">Enquire Now</h2>
		</div>
	</div>
	<!-- -------------------------maine content from here- -------------- -->
	<section class="content-area" id="online-book">
		<div class="container">
		
			<div class="row">
				<div class="site-main col-sm-12">
					<div class="entry-content">
					    
						<div class="travel_tour">
							<?= form_open('Online_booking/SendForm',['class'=>'checkout travel_tour-checkout']);?>
								<div class="row">
									<div class="col-md-8 col-md-offset-2 columns">
										<div class="col2-set" id="customer_details">
            					 	<?php if(!empty($this->session->flashdata('msg'))){ ?>
                    					<?php echo $this->session->flashdata('msg'); ?>
                    			<?php } ?>
                    			<?php if(validation_errors()) { ?>
                    				<div class="alert alert-danger">
                    					<?php echo validation_errors(); ?>
                    				</div>
                    			<?php } ?>
											<div class="col-1">
												<div class="travel_tour-billing-fields">
													<h3>Enquire Now Form</h3>
													<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
														<label for="" class="">First Name
															<abbr class="required" title="required">*</abbr></label>
														<input type="text" class="input-text " name="fname" placeholder="" required>
													</p>
													<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
														<label for="" class="">Last Name
															<abbr class="required" title="required">*</abbr></label>
														<input type="text" class="input-text " name="lname" placeholder="" value="" required>
													</p>
													<div class="clear"></div>

													<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
														<label for="" class="">Contact Number
															<abbr class="required" title="required">*</abbr></label>
														<input type="text" class="input-text " name="contactno"  placeholder="" value="" required>
													</p>
													<p class="form-row form-row form-row-last validate-required " id="">
														<label for="" class="">Email Id
															<abbr class="required" title="required">*</abbr></label>
														<input type="email" class="input-text " name="email"  placeholder="" value="" required>
													</p>
													<div class="clear"></div>
													<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required travel_tour-validated" id="billing_country_field">
														<label for="" class="">I want To book
															<abbr class="required" title="required">*</abbr></label>
														<select name="service"  class="country_to_state country_select" required>
															<option value="">Select a Option…</option>
															<option value="Flight Booking">Flight Booking</option>
															<option value="Hotel Reservation">Hotel Reservation</option>
															<option value="Train Ticket Reservation">Train Ticket Reservation</option>
															<option value="Bus Booking">Bus Booking</option>
															<option value="Tour Package Booking">Tour Package Booking</option>
														</select>
													</p>
													<div class="col-2">
														<div class="travel_tour-shipping-fields">
															<p class="form-row form-row notes" id="order_comments_field">
																<label for="" class="">Address</label>
																<textarea name="address" class="input-text" placeholder="write address.." rows="2" cols="5" required></textarea>
															</p>
														</div>
													</div>

													<div class="clear"></div>

													<div class="s-b">
														<button class="btn btn-default btn-on-bk"><i class="fa fa-location-arrow"></i> Submit</button>
													</div>

												</div>
											</div>

										</div>
									</div>

								</div>
							<?= form_close();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- --------------------------------..//end main content ----------------- -->
</div>





<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
