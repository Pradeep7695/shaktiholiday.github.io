<?php $page = 'gallery'; include APPPATH ."views/front/template/header.php";?>

<?php include APPPATH ."views/front/template/head.php";?>

<?php include APPPATH ."views/front/template/navigation.php";?>

<!-- -----------------page content start here ------------------ -->

<div class="site wrapper-content">
	<div class="top_site_main">
		<div class="banner-wrapper container article_heading">
			<div class="breadcrumbs-wrapper">
				<ul class="phys-breadcrumb">
					<li><a href="<?= base_url('home')?>" class="home">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
			<h1 class="heading_primary">Gallery</h1></div>
	</div>
	<section class="content-area">
		<div class="container">
			<div class="row">
				<div class="gallery" id="links">
					<h3></h3>
				<?php if ($imgGallery):?>
				  <?php foreach ($imgGallery as $imgData):?>
					<a class="gallery-item" href="<?= $imgData->t_img;?>" title="<?= $imgData->img_name;?>" data-gallery="">
						<div class="image">
							<img src="<?= $imgData->t_img;?>">
						</div>
					</a>
				  <?php endforeach;?>
				<?php endif;?>

				</div>
			</div>
		</div>
	</section>
</div>



<!-- ------------------blueimp controller---------------------- -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	<div class="slides"></div>
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
	<ol class="indicator"></ol>
</div>
<!-- ------------------.//blueimp controller---------------------- -->

<!-- -----------------../page content start here ------------------ -->

<?php include APPPATH ."views/front/template/footer.php";?>

<script>
	document.getElementById('links').onclick = function (event) {
		event = event || window.event;
		var target = event.target || event.srcElement;
		var link = target.src ? target.parentNode : target;
		var options = {index: link, event: event,onclosed: function(){
				setTimeout(function(){
					$("body").css("overflow","");
				},200);
			}};
		var links = this.getElementsByTagName('a');
		blueimp.Gallery(links, options);
	};
</script>
