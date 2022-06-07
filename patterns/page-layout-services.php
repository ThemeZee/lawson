<?php
/**
 * Title: Service Page
 * Slug: lincoln/page-layout-services
 * Block Types: core/post-content
 * Categories: lincoln_page_layouts
*/
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png","dimRatio":30,"contentPosition":"center center","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-30 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" data-object-fit="cover"/>

	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"layout":{"type":"default","contentSize":"1280px"}} -->
		<div class="wp-block-group" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

			<!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
			<div class="wp-block-columns">

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">

				<!-- wp:spacer {"height":"150px"} -->
				<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","right":"3rem","bottom":"3rem","left":"3rem"}}},"backgroundColor":"white","textColor":"dark-gray"} -->
				<div class="wp-block-group has-dark-gray-color has-white-background-color has-text-color has-background" style="padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem">

					<!-- wp:heading {"className":"is-style-underlined-heading"} -->
					<h2 class="is-style-underlined-heading"><?php _e( 'Our Services', 'lincoln' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%"></div>
			<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:group -->

	</div>

</div>
<!-- /wp:cover -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading"><?php _e( 'Why choose us?', 'lincoln' ); ?></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>1</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>2</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>3</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"72px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:72px;line-height:1"><strong>4</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis diss parturient.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"dark-gray","textColor":"white","layout":{"contentSize":"800px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-color has-dark-gray-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"4vw"}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading"><?php _e( 'What we have done', 'lincoln' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
			<div class="wp-block-columns alignwide">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Project One', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Project Two', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link"><?php _e( 'Learn more', 'lincoln' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"white","layout":{"contentSize":"800px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
			<h2 style="margin-bottom:4vw"><?php _e( 'What we offer', 'lincoln' ); ?></h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
			<div class="wp-block-columns alignwide">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Service One', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Service Two', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
			<div class="wp-block-columns alignwide">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Service Three', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:heading {"level":3,"className":"is-style-underlined-heading"} -->
					<h3 class="is-style-underlined-heading"><?php _e( 'Service Four', 'lincoln' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"}}},"backgroundColor":"primary","textColor":"white","layout":{"contentSize":"800px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">

			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>Aenean commodo ligula eget dolor.</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">

				<!-- wp:button {"backgroundColor":"white","textColor":"primary","className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background"><?php _e( 'Join now', 'lincoln' ); ?></a>
				</div>
				<!-- /wp:button -->

			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4vw","right":"4vw","bottom":"4vw","left":"4vw"},"blockGap":"3rem"}},"backgroundColor":"white","layout":{"contentSize":"1280px","wideSize":"1280px"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:4vw;padding-right:4vw;padding-bottom:4vw;padding-left:4vw">

	<!-- wp:columns {"style":{"spacing":{"blockGap":"2rem"}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading"><?php _e( 'What clients say', 'lincoln' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'What customers <br>think about us.', 'lincoln' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"120px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:120px;line-height:1">“</p>
				<!-- /wp:paragraph -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"flex","allowOrientation":false,"flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"120px","lineHeight":"1"}},"textColor":"primary"} -->
				<p class="has-primary-color has-text-color" style="font-size:120px;line-height:1">“</p>
				<!-- /wp:paragraph -->

				<!-- wp:group -->
				<div class="wp-block-group">

					<!-- wp:paragraph -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p>— John Doe</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
