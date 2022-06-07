<?php
/**
 * Title: Hero Cover
 * Slug: lincoln/hero-cover
 * Categories: lincoln_hero
*/
?>

<!-- wp:cover {"url":"http://localhost/wp-content/themes/lincoln/assets/img/default-image.png","isRepeated":true,"dimRatio":80,"contentPosition":"center center","align":"full"} -->
<div class="wp-block-cover alignfull is-repeated" style="background-image:url(http://localhost/wp-content/themes/lincoln/assets/img/default-image.png)">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"textColor":"white","layout":{"type":"default","contentSize":"800px"}} -->
	<div class="wp-block-group has-white-color has-text-color" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

		<!-- wp:paragraph -->
		<p><?php _e( 'Add a subtitle here', 'lincoln' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":1,"className":"is-style-underlined-heading"} -->
		<h1 class="is-style-underlined-heading"><?php _e( 'Hero Headline', 'lincoln' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"medium"} -->
		<p class="has-medium-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Join now', 'lincoln' ); ?></a></div>
			<!-- /wp:button -->

			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->
