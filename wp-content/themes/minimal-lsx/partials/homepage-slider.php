<?php
/**
 * Homepage slider.
 *
 * @package minimal-lsx
 */
?>

<div class="minimal-slider">
	<?php
		$heroSlides = of_get_option('hero-slide-count', '1');
		foreach (range(1, $heroSlides) as $heroSlide) { 
	?>

		<div class="minimal-slider-slide">
			<div class="minimal-slider-slide-content-wrapper minimal-slider-slide-content-wrapper-1" style="background-image: url('<?php echo of_get_option('hero-slide-'.$heroSlide, $heroSlide ); ?>')">
				<div class="minimal-slider-slide-content">
					
				</div>
			</div>
		</div>
	<?php } ?>
</div>
