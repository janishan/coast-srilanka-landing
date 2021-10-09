<?php
/* 	Travel Theme's Featured Box to show the Featured Items of Front Page
	Copyright: 2012-2017, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>
<div class="home-page-main-content-wrapper">

	<div id="main-content" class="main-content" >
		<h1 class="page-heading"><?php echo do_shortcode( of_get_option('fphomeheading') ); ?></h1>
		<div class="page-intro"><?php echo do_shortcode( of_get_option('fphomeintro') ); ?></div>
	</div>
	<?php if ( of_get_option('fbboxv', '1') == '1' ): ?>
	<div class="featured-boxs boxrel" id="fpfboxid">
	<div class="featured-boxes-wrapper">	
	<?php $fboxclm = of_get_option('nfbox1', '6');
	foreach (range(1, $fboxclm) as $fboxn) { ?>
	<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' || of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' || of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?>

	<div class="featured-box fboxnumber-<?php echo of_get_option('featured-po' . $fboxn, $fboxn ); ?>">
		<?php if ( of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg') != '' ): ?>
		<div class="featured-box-image-wrapper">
			<div class="featured-box-inner-image-wrapper">
				<img src="<?php echo of_get_option('featured-image' . $fboxn, get_template_directory_uri() . '/images/featured-image'. $fboxn . '.jpg'); ?>"/>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="featured-box-content">
		<div class="featured-box-content-inner">
		<?php if ( of_get_option('featured01-title' . $fboxn, 'Featured') != '' || of_get_option('featured02-title' . $fboxn, 'Image') != '' ): ?>
		<h3 class="featured-box-title after"><?php echo of_get_option('featured-title' . $fboxn, 'Featured'); ?></h3>
		<?php endif; ?>

		<?php if ( of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?><p class="featured-box-desc anim"><?php echo do_shortcode(of_get_option('featured-description' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.')); ?></p>
		<?php endif; ?>

		<?php if ( of_get_option('featured-link-text' . $fboxn, 'Read More...') != '' && of_get_option('featured-popup-text' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != ''): ?>
		<?php /*<span class="read-more"><?php echo of_get_option('featured-link-text' . $fboxn, 'Read More...'); ?></span>*/ ?>
		<a class="featured-box-link link primary-link" href="<?php echo of_get_option('featured-link' . $fboxn , '#'); ?>" <?php if ( of_get_option('featured-link-nw' . $fboxn, '0') == '1'  ): ?> target="_blank" <?php endif; ?> data-rel="popup" class="read-more ui-btn ui-corner-all ui-shadow ui-btn-inline" data-transition="pop">Read More</a>
		<?php endif; ?>
		</div>
		</div>
		<?php if ( of_get_option('featured-popup-text' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.') != '' ): ?>
			<div class="featured-box-popup-wrapper">
				<span class="featured-box-popup-close"></span>
				<div class="featured-box-popup-inner-wrapper content-wrapper">
				
					<p class="featured-popup-desc anim"><?php echo do_shortcode(of_get_option('featured-popup-text' . $fboxn, 'Travel Theme, a Smart way of Natural Presence. This is a Test Description of Travel Theme.')); ?></p>
				
				</div>
			</div>
		<?php endif; ?>
		
	</div>

	<?php endif; } ?>

	</div>  
	</div>  


<?php endif;  ?>
</div>


