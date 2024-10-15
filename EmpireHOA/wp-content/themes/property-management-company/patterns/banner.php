<?php
/**
 * Banner Section
 * 
 * slug: property-management-company/banner
 * title: Banner
 * categories: property-management-company
 */

return array(
    'title'      =>__( 'Banner', 'property-management-company' ),
    'categories' => array( 'property-management-company' ),
    'content'    => '<!-- wp:group {"className":"wp-block-group slider-main-box alignfull","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group slider-main-box"><!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":600,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
        <div class="wp-block-cover is-light banner-section" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"0"}}}} -->
        <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"top","width":"40%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%"><!-- wp:heading {"className":"banner-heading","style":{"elements":{"link":{"color":{"text":"#37353a"}}},"typography":{"fontSize":"35px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"#37353a"}},"fontFamily":"firasans"} -->
        <h2 class="wp-block-heading banner-heading has-text-color has-link-color has-firasans-font-family" style="color:#37353a;margin-top:0;margin-bottom:0;font-size:35px;font-style:normal;font-weight:600">'. esc_html('Find Your Perfect Property For Your Home','property-management-company').'</h2>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"color":{"text":"#4e4d50"},"elements":{"link":{"color":{"text":"#4e4d50"}}},"typography":{"lineHeight":1.6}},"fontSize":"extra-small","fontFamily":"firasans"} -->
        <p class="has-text-color has-link-color has-firasans-font-family has-extra-small-font-size" style="color:#4e4d50;line-height:1.6">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text.','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":"60%","className":"banner-image-wrap"} -->
        <div class="wp-block-column is-vertically-aligned-center banner-image-wrap" style="flex-basis:60%"><!-- wp:group {"className":"customer-sec","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group customer-sec" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":111,"width":"155px","height":"auto","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/customer-image.png" alt="" class="wp-image-111" style="object-fit:contain;width:155px;height:auto"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontSize":"small","fontFamily":"firasans"} -->
        <p class="has-white-color has-text-color has-link-color has-firasans-font-family has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.1">'. esc_html('Happy Customer','property-management-company').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"white","fontSize":"extra-small","fontFamily":"firasans"} -->
        <p class="has-white-color has-text-color has-link-color has-firasans-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.1">'. esc_html('2000,00','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:image {"id":110,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
        <figure class="wp-block-image aligncenter size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/Home.png" alt="" class="wp-image-110"/></figure>
        <!-- /wp:image --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover -->
        
        <!-- wp:columns {"className":"information-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":{"top":"0","left":"0"}},"border":{"radius":"15px"}}} -->
        <div class="wp-block-columns information-section" style="border-radius:15px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"information-column","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group information-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":103,"width":"66px","height":"59px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"information-img"} -->
        <figure class="wp-block-image size-full is-resized information-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/info01.png" alt="" class="wp-image-103" style="object-fit:contain;width:66px;height:59px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"content-heading","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-content-heading-font-size" style="font-style:normal;font-weight:500;line-height:1.1">'. esc_html('4.6k','property-management-company').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"medium","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-medium-font-size" style="font-style:normal;font-weight:400;line-height:1.1">'. esc_html('Property Ready','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"information-column","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group information-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":102,"width":"66px","height":"59px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"information-img"} -->
        <figure class="wp-block-image size-full is-resized information-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/info02.png" alt="" class="wp-image-102" style="object-fit:contain;width:66px;height:59px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"content-heading","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-content-heading-font-size" style="font-style:normal;font-weight:500;line-height:1.1">'. esc_html('100%','property-management-company').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"medium","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-medium-font-size" style="font-style:normal;font-weight:400;line-height:1.1">'. esc_html('Satisfaction','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"information-column","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group information-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":101,"width":"66px","height":"59px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"information-img"} -->
        <figure class="wp-block-image size-full is-resized information-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/info03.png" alt="" class="wp-image-101" style="object-fit:contain;width:66px;height:59px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"content-heading","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-content-heading-font-size" style="font-style:normal;font-weight:500;line-height:1.1">'. esc_html('06+','property-management-company').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"medium","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-medium-font-size" style="font-style:normal;font-weight:400;line-height:1.1">'. esc_html('Year Of Experience','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:group {"className":"information-column","style":{"position":{"type":""},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
        <div class="wp-block-group information-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"id":100,"width":"66px","height":"59px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"information-img"} -->
        <figure class="wp-block-image size-full is-resized information-img"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/info04.png" alt="" class="wp-image-100" style="object-fit:contain;width:66px;height:59px"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"content-heading","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-content-heading-font-size" style="font-style:normal;font-weight:500;line-height:1.1">'. esc_html('80+','property-management-company').'</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"medium","fontFamily":"firasans"} -->
        <p class="has-primary-color has-text-color has-link-color has-firasans-font-family has-medium-font-size" style="font-style:normal;font-weight:400;line-height:1.1">'. esc_html('Branches','property-management-company').'</p>
        <!-- /wp:paragraph --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->',
);