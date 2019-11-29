<div class="page-sidebar">
	<!-- START X-NAVIGATION -->
	<ul class="x-navigation">
		<li class="xn-logo">
			<a href="<?= base_url('admin/dashboard')?>">Shakti Vacations Pvt. Ltd</a>
			<a href="#" class="x-navigation-control"></a>
		</li>
		<li class="xn-profile">
			<a href="#" class="profile-mini">
				<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
			</a>
			<div class="profile">
				<div class="profile-image">
					<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
				</div>
				<div class="profile-data">
					<div class="profile-data-name">Super Admin</div>
				</div>

			</div>
		</li>

		<li class="<?php if ($page=='dashboard'){echo 'active';}?>">
			<a href="<?= base_url('admin/dashboard')?>"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
		</li>

		<li class="<?php if ($page=='slider'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Slider</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_slider')?>">Add Slider</a></li>
				<li><a href="<?= base_url('dashboard/show_slider')?>">Show Slider</a></li>
				<li><a href="<?= base_url('dashboard/show_video_slider')?>">Show Video Slider</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='popular-tour'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Most Popular Tours</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_popular_tour')?>">Add Popular Tour</a></li>
				<li><a href="<?= base_url('dashboard/show_popular_tour')?>">Show Popular Tour</a></li>
			</ul>
		</li>
		
		<!--<li class="<?php /*if ($page=='maharashtra_tour'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Maharashtra Tour</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_maharashtra_tour')*/?>">Add Maharashtra Tour</a></li>
				<li><a href="<?/*= base_url('dashboard/show_maharashtra_tour')*/?>">Show Maharashtra Tour</a></li>
			</ul>
		</li>-->
		
		<li class="<?php if ($page=='domestic'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">Domestic Packages</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/Domestic_State_Tour_Category')?>">Add Domestic Packages</a></li>
				<li><a href="<?= base_url('dashboard/show_state_table')?>">Show Domestic Packages</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='international'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">International Packages</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_international_country_category')?>">Add International Packages</a></li>
				<li><a href="<?= base_url('dashboard/show_country_tour')?>">Show International Packages</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='OneDayTour'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-plane"></span> <span class="xn-text">One Day Picnic / Resort Booking</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_one_day_tour')?>">Add One Day Picnic / Resort Booking</a></li>
				<li><a href="<?= base_url('dashboard/show_one_day_our')?>">Show One Day Picnic / Resort Booking</a></li>
			</ul>
		</li>

		<!--<li class="<?php /*if ($page=='img'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-image"></span> <span class="xn-text">Image Gallery</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_image')*/?>">Add Image</a></li>
				<li><a href="<?/*= base_url('dashboard/show_image')*/?>">Show Image</a></li>
			</ul>
		</li>-->

		<li class="<?php if ($page=='cruise'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-ship"></span> <span class="xn-text">Cruise</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_cruise')?>">Add Cruise</a></li>
				<li><a href="<?= base_url('dashboard/show_cruise')?>">Show Cruise</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='bus'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-truck"></span> <span class="xn-text">Bus</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_bus')?>">Add Bus</a></li>
				<li><a href="<?= base_url('dashboard/show_bus')?>">Show Bus</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='car'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-car"></span> <span class="xn-text">Car</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_car')?>">Add Car</a></li>
				<li><a href="<?= base_url('dashboard/show_car')?>">Show Car</a></li>
			</ul>
		</li>


		<li class="<?php if ($page=='visa'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-cc-visa"></span> <span class="xn-text">Visa</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_visa')?>">Add Visa</a></li>
				<li><a href="<?= base_url('dashboard/show_visa')?>">Show Visa</a></li>
			</ul>
		</li>
		
<!-- -----------pages ------- -->

		<!--<li class="<?php if ($page=='about'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-edit"></span> <span class="xn-text">About Us</span></a>
			<ul>
			<!--	<li><a href="<?= base_url('dashboard/add_aboutUs')?>">Add About Us</a></li>-->
			<!--	<li><a href="<?= base_url('dashboard/show_aboutUs')?>">Show About Us</a></li>
			</ul>
		</li>-->

		<li class="<?php if ($page=='contact'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-location-arrow"></span> <span class="xn-text">Contact Us</span></a>
			<ul>
			<!--	<li><a href="<?= base_url('dashboard/add_contactUs')?>">Add Contact Us</a></li>-->
				<li><a href="<?= base_url('dashboard/show_contactUs')?>">Show Contact Us</a></li>
			</ul>
		</li>


		<li class="<?php if ($page=='testimonial'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-microphone"></span> <span class="xn-text">Testimonial</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_testimonial')?>">Add Testimonial</a></li>
				<li><a href="<?= base_url('dashboard/show_testimonial')?>">Show Testimonial</a></li>
			</ul>
		</li>

		<li class="xn-title"></li>
		<li class="xn-title"></li>
		<li class="xn-title"></li>

		<!--<li class="xn-title">Add Tour Category</li>

		<li class="<?php /*if ($page=='tour-cat'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-tags"></span> <span class="xn-text">Tour Category</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_domestic_tour_category')*/?>">Add Domestic Tour Category</a></li>
				<li><a href="<?/*= base_url('dashboard/add_international_tour_category')*/?>">International Tour Category</a></li>
			</ul>
		</li>-->









	</ul>
	<!-- END X-NAVIGATION -->
</div>
