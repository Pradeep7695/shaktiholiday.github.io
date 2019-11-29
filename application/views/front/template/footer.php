<div class="wrapper-footer wrapper-footer-newsletter">
	<div class="main-top-footer">
		<div class="container">
			<div class="row">

				<aside class="col-sm-4 widget_text"><h3 class="widget-title">Quick Links</h3>
					<div class="textwidget">
						<ul class="menu list-arrow">
							<li><a href="<?= base_url('online_booking')?>">Online Booking</a></li>
                            <li><a href="<?= base_url('state_domestic_tour')?>">Domestic Package </a></li>
							<li><a href="<?= base_url('international-package')?>">International Package</a></li>
							<!--<li><a href="<?/*= base_url('gallery')*/?>">Gallery</a></li>-->

						</ul>
					</div>
				</aside>
				<aside class="col-sm-4 widget_text"><h3 class="widget-title">Our Menu</h3>
					<div class="textwidget">
						<ul class="menu list-arrow">
						<!--	<li><a href="<?/*= base_url('about_us')*/?>">About us</a></li>-->
							<li><a href="<?= base_url('contact_us')?>">Contact Us</a></li>
							<li><a href="<?= base_url('visa')?>">Visa</a></li>
								<li><a href="<?= base_url('testimonial')?>">Tour Reviews</a></li>
						<!--	<li class="<?php if ($page=='term'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('term_condition')?>">Terms & Condition</a></li>
							<li class="<?php if ($page=='privacy'){echo 'current-menu-ancestor';}?>"><a href="<?= base_url('privacy_policy')?>">Privacy Policy</a></li>-->
						</ul>
					</div>
				</aside>

				<aside class="col-sm-4 widget_text"><h3 class="widget-title">CONTACT</h3>
					<div class="textwidget">
						<div class="footer-info">
							
							<ul class="contact-info">
								<li><i class="fa fa-map-marker fa-fw"></i> 4/5, Mangalya Chs, Near Waman Hari Pethe Jewellers, M.G. Road, Goregaon (West), Mumbai - 400062 </li>
								<li><i class="fa fa-mobile fa-fw"></i> +91 9820044289 | +91 9819001754</li>
								<li><i class="fa fa-phone fa-fw"></i> 022 28739797 | 022 28711599 | 022 28733569 </li>
							<!--	<li><i class="fa fa-phone fa-fw"></i> </li>-->
								<li>
									<i class="fa fa-envelope fa-fw"></i><a href="mailto:info@shaktiholiday.com"> info@shaktiholiday.com</a>
								</li>
							</ul>
						</div>
						
						<aside id="text-5 social-media" class="widget_text">
                            <div class="textwidget">
                                <ul class="footer_menu">
                                    <li><a href="javaScript:void(0);" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="javaScript:void(0);" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <li><a href="javaScript:void(0);" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="javaScript:void(0);" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </aside>
						
						
					</div>
				</aside>

			</div>
		</div>
	</div>
	<div class="container wrapper-copyright">
		<div class="row">
			<div class="col-sm-6">
				<div><p class="copy-right-p">Copyright © 2019 Shakti Vacations Pvt. Ltd. All Rights Reserved.  Powered by <a href="https://www.itarsia.com" target="_blank">Itarsia India</a></p></div>
			</div>
			<div class="col-sm-6">
				<aside id="text-5" class="widget_text">
					<div class="textwidget">
					    <div class="alert-msg-news" style="width:30%;margin: auto;">
            		    	<?php if(!empty($this->session->flashdata('msg'))){ ?>
            							<?php echo $this->session->flashdata('msg'); ?>
            						<?php } ?>
            						<?php if(validation_errors()) { ?>
            							<div class="alert alert-danger">
            								<?php echo validation_errors(); ?>
            							</div>
            						<?php } ?>
            		     </div>
						<div class="form-subscribe-form-wrap">
                			<aside class="mailchimp-container">
                				<?= form_open('News/ActiveNews',['class'=>'epm-sign-up-form'])?>
                					<div class="epm-form-field">
                						<label for="epm-email">Email Address</label>
                						<input type="email" placeholder="Email Address" name="email" tabindex="8" class="email" id="epm-email" value="" required>
                					</div>
                					<input type="submit" name="epm-submit-chimp" value="Sign Up Now" data-wait-text="Please wait..." tabindex="10" class="button btn epm-sign-up-button epm-submit-chimp">
                			    <?= form_close()?>
                			</aside>
                		</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>


</div>
<script type='text/javascript' src='<?= base_url('assets/front/js/jquery.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/bootstrap.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/vendors.js')?>'></script>
<script type="text/javascript" src="<?= base_url('assets/front/js/customejs.js')?>"></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/owl.carousel.min.js')?>'></script>

<!-- revslider -->
<!--<script type="text/javascript" src="<?/*= base_url('assets/front/js/revslider/jquery.themepunch.tools.min.js')*/?>"></script>
<script type="text/javascript" src="<?/*= base_url('assets/front/js/revslider/jquery.themepunch.revolution.min.js')*/?>"></script>
-->
<script type='text/javascript' src='<?= base_url('assets/front/js/jquery.blueimp-gallery.min.js')?>'></script>
<script type="text/javascript" src="<?= base_url('assets/front/js/jquery.mb-comingsoon.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/front/js/waypoints.min.js')?>"></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/jquery.swipebox.min.js')?>'></script>
<script type="text/javascript" src="<?= base_url('assets/front/js/jquery.counterup.min.js')?>"></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/theme.js');?>'></script>
<script type='text/javascript' src='<?= base_url('assets/front/js/validator.min.js');?>'></script>


 <!-- ----------------loader ----------------------- -->

    <script type="text/javascript">

        var width = 100,
            perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
            EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
            time = parseInt((EstimatedTime/2000)%60)*100;

        // Loadbar Animation
        $(".loadbar").animate({
            width: width + "%"
        }, time);

        // Loadbar Glow Animation
        $(".glow").animate({
            width: width + "%"
        }, time);

        // Percentage Increment Animation
        var PercentageID = $("#precent"),
            start = 0,
            end = 100,
            durataion = time;
        animateValue(PercentageID, start, end, durataion);

        function animateValue(id, start, end, duration) {

            var range = end - start,
                current = start,
                increment = end > start? 1 : -1,
                stepTime = Math.abs(Math.floor(duration / range)),
                obj = $(id);

            var timer = setInterval(function() {
                current += increment;
                $(obj).text(current + "%");
                //obj.innerHTML = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Fading Out Loadbar on Finised
        setTimeout(function(){
            $('.preloader-wrap').fadeOut(700);
        }, time);


    </script>

    <!-- -----------------..//end loader ----------------- -->

   </body>
</html>
