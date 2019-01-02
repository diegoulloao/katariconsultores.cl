<?php
/*
	SHORTCODE: slider.

	[slider options="{}"] $content [/slider]

	@parámetros: {
		'options' -> opciones flickity (json)
	}
*/
?>


<div class="page-slider" data-flickity='<?php echo $atts['options'] ?>'>
	<?php echo do_shortcode( $content ) ?>
</div>