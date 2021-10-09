<?php 
/* 	Travel Theme's Gallery Part
	Copyright: 2015-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Awesome 1.7
*/
$galleryboxes_number = of_get_option('galleryboxes-number', '9');
?>


<div id="gallery-box-item" class="gallerycontainer home-section home-gallery boxrel" >
	<div class="container section-intro-wrapper content-wrapper">
		<h2 class="boxtoptitle" ><?php echo of_get_option('galleryboxes-heading', 'OUR GALLERY'); ?></h2>
		<p class="boxtopdes" ><?php echo of_get_option('galleryboxes-heading-des', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua'); ?></p>
	</div>	
	<?php
	echo do_shortcode('[foogallery id="24"]');
	?>
   
</div>
