<?php $page = 'contactus'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->
<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li><a href="">Contact Us </a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Contact Us</h2>
			
			</div>
	</div>

	<section class="content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="company-contact-info-area">

						<div class="company-info-item d-flex align-items-center">
							<div class="icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="content">
								<span class="title">Phone Number</span>
							<?php if(count($contact)):?>
							   <?php foreach ($contact as $item):?>
								<p><a href="tel:<?= $item->contactno?>"><?= $item->contactno?></a></p>
							 <?php endforeach;?>
				         <?php endif;?>
							</div>
						</div><!-- company-info-item end -->
						<div class="company-info-item d-flex align-items-center">
							<div class="icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="content">
								<span class="title">Email Address</span>
							<?php if(count($contact)):?>
								<?php foreach ($contact as $item):?>
								<p><a href="mailto:<?= $item->email;?>">  <?= $item->email;?></a></p>
								<?php endforeach;?>
							<?php endif;?>
							</div>
						</div><!-- company-info-item end -->

						<div class="company-info-item d-flex align-items-center">
							<div class="icon">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="content">
								<span class="title">Address</span>
							<?php if(count($contact)):?>
								<?php foreach ($contact as $item):?>
								<p><?= $item->address?></p>
							 <?php endforeach;?>
				         <?php endif;?>
							</div>
						</div><!-- company-info-item end -->
					</div>

				</div>
				
				<div class="col-lg-7">

					<div class="contact-form-area form-area section-heading">
						<h4 class="form-title text-center">Get In Touch</h4>
							<h6 class="small-title" style="margin-left: 125px;">Promising Memories for a Lifetime !</h6>

						<?php if(!empty($this->session->flashdata('msg'))){ ?>
							<?php echo $this->session->flashdata('msg'); ?>
						<?php } ?>
						<?php if(validation_errors()) { ?>
							<div class="alert alert-danger">
								<?php echo validation_errors(); ?>
							</div>
						<?php } ?>

						<?= form_open('Contact_us/ContactForm',['class'=>'form-horizontal contact-form form-style-one'])?>
							<div class="row">
								<div class="col-md-6">
									<div class="frm-group">
										<input type="text" name="name" id="name" placeholder="Name" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="frm-group">
										<input type="tel" name="phoneno" id="contact" placeholder="Contact No." required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="frm-group">
										<input type="email" name="email" id="email" placeholder="Email Id" required>
									</div>
								</div>

								<div class="col-md-6">
									<div class="frm-group">

										<select name="service"  class="form-control" required>
										<option value="">Select a Service</option>
										<option value="Visa">Visa</option>
										<option value="holiday packages">holiday packages</option>
										<option value="Flight Booking">Flight Booking</option>
										<option value="Hotel Reservation">Hotel Reservation</option>
										<option value="Railway Train Booking">Railway Train Booking</option>
										<option value="Bus Booking">Bus Booking</option>
										<option value="Car On Rent">Car On Rent</option>
										<option value="Foreign exchange"> Foreign exchange</option>
										<option value="Travel Insurance"> Travel Insurance</option>
										</select>

									</div>
								</div>
								<div class="col-md-12">
									<div class="frm-group">
										<textarea name="address" id="ad" placeholder="Address" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="frm-group">
										<button type="submit" value="Submit" class="btn btn-reg-popup btn-success"><i class="fa fa-send"></i> Submit </button>
									</div>
								</div>
							</div>
					  <?= form_close();?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="map">
						<div class="contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.7404888806022!2d72.84016631479629!3d19.162833654217224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf1c234fb7c387b!2sShakti%20Tours%20%26%20Travels!5e0!3m2!1sen!2sin!4v1572684860434!5m2!1sen!2sin" width="1100" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

</div>


<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>
