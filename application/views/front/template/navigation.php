<div class="navigation-menu">
	<div class="container">
		<div class="menu-mobile-effect navbar-toggle button-collapse" data-activates="mobile-demo">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</div>
		<div class="width-logo sm-logo">
			<a href="<?= base_url('/')?>" title="Travel" rel="home">
				<img src="<?= base_url('assets/front/images/shakti-logo.png')?>" alt="Logo" class="logo_transparent_static">
				<img src="<?= base_url('assets/front/images/shakti-logo.png')?>" alt="Sticky logo" class="logo_sticky">
			</a>
		</div>
		<nav class="width-navigation tp-bar">
			<ul class="nav navbar-nav menu-main-menu side-nav" id="mobile-demo">
			
				<li class="<?php if ($page == 'home'){echo 'current-menu-ancestor';}?> current-menu-parent">
					<a href="<?= base_url('/')?>">Home</a>
				</li>

				<!--<li class="<?php /*if ($page=='about'){echo 'current-menu-ancestor';}*/?>"><a href="<?/*= base_url('about_us')*/?>">About Us</a></li>-->

				<li class="<?php if ($page == 'fleets'){echo 'current-menu-ancestor';}?> menu-item-has-children">
					<a href="#">FLEETS</a>
					<ul class="sub-menu">
						<li ><a href="<?= base_url('buses')?>"><i class="fa fa-angle-right"></i> Buses</a></li>
						<li><a href="<?= base_url('cars')?>"><i class="fa fa-angle-right"></i> Cars</a></li>
					</ul>
				</li>


				
				<li class="<?php if ($page == 'domestic'){echo 'current-menu-ancestor';}?> menu-item-has-children">
					<a href="#">Packages</a>
					<ul class="sub-menu">
						<li ><a href="<?= base_url('state_domestic_tour')?>"><i class="fa fa-angle-right"></i> Domestic Packages</a></li>
						<li><a href="<?= base_url('international_package')?>"><i class="fa fa-angle-right"></i> International Packages</a></li>
						<li><a href="<?= base_url('cruise')?>"><i class="fa fa-angle-right"></i> Cruise</a></li>
					</ul>
				</li>
				<li class="<?php if ($page == 'service'){echo 'current-menu-ancestor';}?> menu-item-has-children">
					<a href="#">Our services</a>
					<ul class="sub-menu">
						<li><a href="<?= base_url('online_booking')?>"><i class="fa fa-angle-right"></i> Air Ticket</a></li>
						<li><a href="<?= base_url('online_booking')?>"><i class="fa fa-angle-right"></i> Hotel Reservation</a></li>
						<li ><a href="<?= base_url('visa')?>"><i class="fa fa-angle-right"></i> Visa / Insurance</a></li>
						<li class="<?php if ($page == 'onedaytour'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('one_day_tour')?>"><i class="fa fa-angle-right"></i> One Day Picnic / Resort Booking</a></li>
					</ul>
				</li>

				<li class="<?php if ($page == 'distributor_portal'){ echo 'current-menu-ancestor';}?>"><a href="<?= base_url('distributor_portal')?>"> B2B Distributor Portal</a></li>

				<li class="<?php if ($page == 'contactus'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('contact_us')?>">Contact Us</a></li>

			</ul>
		</nav>
	</div>
  </div>
</header>
