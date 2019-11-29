<?php $page = 'testimonial'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="index.html" class="home">Home</a></li>
					<li><a href="">Testimonial </a></li>
				</ul>
			</div>
			<h2 class="heading_primary">Testimonial</h2></div>
	</div>

	<div class="section-white padding-top-6x padding-bottom-6x">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="shortcode_title title-center title-decoration-bottom-center">
						<h2 class="title_primary">Tours Reviews</h2>
						<span class="line_after_title"></span>
						
						
						<div class="tour--re1">
                            <div class="rev-1">
                                <input type="button" id="Button1" class="btn btn-reg-popup pull-right" value="Write Tour Review" onclick="switchVisible(); "/>
                            </div>
                        </div>
						
					</div>
					<div class="shortcode-tour-reviews wrapper-tours-slider" id="hideReview">
						<div class="tours-type-slider" data-autoplay="true" data-dots="true" data-nav="false" data-responsive='{"0":{"items":1}, "480":{"items":1}, "768":{"items":1}, "992":{"items":1}, "1200":{"items":1}}'>
						 <?php if (count($testimonial)):?>
						    <?php foreach ($testimonial as $testimonial):?>
							<div class="tour-reviews-item">
								<div class="reviews-item-info">
									<img alt="" src="<?= $testimonial->client_img?>" class="avatar avatar-95 photo" height="90" width="90">
									<!-- <div class="reviews-item-info-name">Pradeep Kushwaha</div>-->
									<!-- <div class="reviews-item-rating">
										<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
									</div> -->
								</div>
								<div class="reviews-item-content">
									<h3 class="reviews-item-title">
										<a href="#"><?= $testimonial->client_name;?></a>
									</h3>
									<div class="reviews-item-description"><?= $testimonial->review;?></div>
								</div>
							</div>
						    <?php endforeach;?>
						 <?php endif;?>

						</div>
					</div>
					
					
				 <!-- ------------------write review --------------- -->

                    <div class="w-r1" id="writeReview1"  style="display: none">
                        <div class="dfsdf">
                            <div class="container">

                                <div class="row">
                                    <div class="site-main col-sm-12">
                                        <div class="entry-content">
                                            <div class="travel_tour">
                                                <?= form_open_multipart('TourReview/TourForm',['class'=>'checkout travel_tour-checkout']);?>
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2 columns wt-rev-col">
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
                                                                    <p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
                                                                        <label for="" class="">Name
                                                                            <abbr class="required" title="required">*</abbr></label>
                                                                        <input type="text" class="input-text " name="name" placeholder="" required>
                                                                    </p>
                                                                    <p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
                                                                        <label for="" class="">Contact Number
                                                                            <abbr class="required" title="required">*</abbr></label>
                                                                        <input type="text" class="input-text " name="contactno" placeholder="" value="" required>
                                                                    </p>
                                                                    <div class="clear"></div>

                                                                    <p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
                                                                        <label for="" class="">Email
                                                                            <abbr class="required" title="required">*</abbr></label>
                                                                        <input type="email" class="input-text " name="email"  placeholder="" value="" required>
                                                                    </p>

                                                                    <p class="form-row form-row form-row-last validate-required " id="">
                                                                        <label for="" class="">Upload Image
                                                                            <abbr class="required" title="required">*</abbr></label>
                                                                        <input type="file" class="input-text" id="uploaded_file" name="uploaded_file"  placeholder="" value="" required>
                                                                    </p>

                                                                    <div class="clear"></div>

                                                                    <div class="col-2">
                                                                        <div class="travel_tour-shipping-fields">
                                                                            <p class="form-row form-row notes" id="order_comments_field">
                                                                                <label for="" class="">Tour Review</label>
                                                                                <textarea name="review" class="input-text" placeholder="write tour review.." rows="2" cols="5" required></textarea>
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
                        </div>
                    </div>


                    <!-- ----------------------..//end review ----------- -->	
					
					
					
				</div>

			</div>
		</div>
	</div>
</div>





<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>






<script>

    function switchVisible() {
        if (document.getElementById('hideReview')) {

            if (document.getElementById('hideReview').style.display == 'none') {
                document.getElementById('hideReview').style.display = 'block';
                document.getElementById('writeReview1').style.display = 'none';
            }
            else {
                document.getElementById('hideReview').style.display = 'none';
                document.getElementById('writeReview1').style.display = 'block';
            }
        }
    }

</script>










