<div class="location-slider">
	<?php
		$locSlides = explode(',',of_get_option('locations', 'Location1,Location2'));
		foreach ($locSlides as $locSlide) {
            $locName = $locSlide;
            $locSlide = str_replace(' ', '-', strtolower($locSlide));
	?>

		<div class="location-slider-slide">
			<div class="location-slider-slide-image-wrapper">
				<div class="minimal-slider-slide-image" style="background-image: url('<?php echo of_get_option($locSlide.'-image', $locName ); ?>')">
                    <a href="<?php echo of_get_option($locSlide.'-link', $locName ); ?>" target="_blank" title="<?=$locName;?>"></a>
                </div>
            </div>
            <div class="location-slider-slide-content-wrapper">
                <div class="content-wrapper">
                    <h3><a href="<?php echo of_get_option($locSlide.'-link', $locName ); ?>" target="_blank" title="<?=$locName;?>"><?=$locName;?></a></h3>
                </div>
            </div>
		</div>
	<?php } ?>
</div>