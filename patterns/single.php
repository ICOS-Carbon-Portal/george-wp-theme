<?php

/**
 * Title: single
 * Slug: george/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/post-hero-sea-photo.webp","id":171,"dimRatio":0,"minHeight":600,"contentPosition":"center center","isDark":false,"className":"align-items-start"} -->
<div class="wp-block-cover is-light align-items-start" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-171" alt="" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/post-hero-sea-photo.webp" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"px","wideSize":""}} -->
			<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
				<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
					<!-- wp:template-part {"slug":"logo","theme":"george"} /-->

					<!-- wp:navigation {"ref":362,"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main"} -->
<main class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:0"><!-- wp:bcn/breadcrumb-trail /-->

		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:post-featured-image {"align":"wide"} /-->

				<!-- wp:post-date {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"0","bottom":"var:preset|spacing|30","left":"0"}}}} /-->

				<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

				<!-- wp:post-content {"layout":{"type":"constrained"}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%"></div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"george"} /-->