<?php

/**
 * Title: Header Media
 * Slug: fse-tour-booking/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":46,"dimRatio":0,"isUserOverlayColor":true,"minHeight":750,"minHeightUnit":"px","isDark":false,"align":"full","className":"alignfull slider","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignfull is-light slider" style="min-height:750px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-46" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"42px"} -->
<div style="height:42px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"center","className":"slider-box"} -->
<div class="wp-block-columns are-vertically-aligned-center slider-box"><!-- wp:column {"verticalAlignment":"center","width":"55%","className":"slider-box-inner"} -->
<div class="wp-block-column is-vertically-aligned-center slider-box-inner" style="flex-basis:55%"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"}},"textColor":"background"} -->
<h1 class="wp-block-heading has-background-color has-text-color has-link-color" style="font-size:50px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('let’s plan an','fse-tour-booking'); ?><br><span><?php esc_html_e('adventure','fse-tour-booking'); ?></span><?php esc_html_e(' trip','fse-tour-booking'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"slider-text","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"textColor":"background"} -->
<p class="slider-text has-background-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e('Discover your dream destination with our exclusive travel experiences.','fse-tour-booking'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"slider-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons slider-btn"><!-- wp:button {"backgroundColor":"background","textColor":"secondary-bg-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-bg-color"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"14px","textTransform":"uppercase"},"border":{"radius":"5px"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-secondary-bg-color-color has-background-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('book now','fse-tour-booking'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"px"} -->
<div class="wp-block-column is-vertically-aligned-center"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->