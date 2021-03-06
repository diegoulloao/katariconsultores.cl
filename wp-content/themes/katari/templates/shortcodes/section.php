<?php
/*
	SHORTCODE: section.

	[section title="" sub="" trans=""] content [/section]

	@parámetros: {
		$atts[
			'title'		-> título.
			'sub'		-> subtítulo.
			'trans'		-> traducción subtítulo
		]

		$content -> contenido.
	}
*/
?>


<div class="container">
	
	<div class="row title-container">

		

		<div class="title col-md-4 col-12 wp3">
			<h1> <?php echo mb_strtoupper( $atts['title'] ) ?> </h1>
		</div>

		<div class="description col-md-8 col-12 wp3">
			<h2> <?php echo mb_strtoupper( $atts['sub'], 'utf-8' ) ?> </h2>
			<h3> <?php echo mb_strtoupper( $atts['trans'] ) ?> </h3>
		</div>
	</div>

	<div class="row content-container wp3"> <!-- content -->
		
		<?php echo do_shortcode( $content ) ?>

	</div>

</div>