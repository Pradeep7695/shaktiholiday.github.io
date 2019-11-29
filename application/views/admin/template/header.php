<!-- PAGE CONTENT -->
<div class="page-content">
	<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
		<!-- TOGGLE NAVIGATION -->
		<li class="xn-icon-button">
			<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
		</li>
		<!-- END TOGGLE NAVIGATION -->
		<!-- SEARCH -->
		<li class="xn-search">
			<form role="form">
				<input type="text" name="search" placeholder="Search..."/>
			</form>
		</li>
		<!-- END SEARCH -->
		<!-- POWER OFF -->
		<li class="xn-icon-button pull-right last">
			<a href="#"><span class="fa fa-power-off"></span></a>
			<ul class="xn-drop-left animated zoomIn">
				<li><a href="javaScript:void(0);" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
			</ul>
		</li>

		<!-- change password -->
		<li class="<?php if ($page=='dashboard'){echo 'active';}?> xn-icon-button pull-right">
			<a href="<?= base_url('dashboard/changePassword')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Change Password"><span class="fa fa-key"></span></a>
		</li>
		<!-- TASKS -->
		<li class="xn-icon-button login-style pull-right">
			<!--<a href="<?/*= base_url('/')*/?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Visit Website"><span class="fa fa-external-link-square"></span></a>-->
			<button class="btn btn-success" id="view-site" onclick="window.open('<?= base_url('/')?>')"> <i class="fa fa-desktop"></i> View Website</button>
		</li>
		<!-- END TASKS -->

		<!-- LANG BAR -->

		<!-- END LANG BAR -->
	</ul>
	<!-- END X-NAVIGATION VERTICAL -->
