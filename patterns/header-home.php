<?php

/**
 * Title: Header home
 * Slug: george/header-home
 * Inserter: no
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/yellow-sailor.webp", "dimRatio":0,"minHeight":600,"contentPosition":"top center","isDark":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-top-center has-base-color has-text-color has-link-color" style="min-height:600px">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/yellow-sailor.webp" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group alignfull">
			<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"px","wideSize":""}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","left":"0"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","orientation":"horizontal"}} -->
				<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40);padding-left:0">
					<!-- wp:template-part {"slug":"logo"} /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
					<div class="wp-block-group">
						<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->