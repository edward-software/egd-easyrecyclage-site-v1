<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once('paprec_config.php');

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/slider-home.php');
require_once locate_template('/functions/feedback.php');
require_once locate_template('/functions/shortcode.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
}

/**
 * desactivation barre admin
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Widget
 */
/* Widget Base */
require_once( 'widgets/base/class-widget-base-img-center.php' );
require_once( 'widgets/base/class-widget-base-img-left.php' );
require_once( 'widgets/base/class-widget-base-img-right.php' );
require_once( 'widgets/base/class-widget-base-button.php' );
require_once( 'widgets/base/class-widget-base-movie-link.php' );
require_once( 'widgets/base/class-widget-base-picto.php' );
require_once( 'widgets/base/class-widget-base-text-center.php' );
require_once( 'widgets/base/class-widget-base-text-left.php' );
require_once( 'widgets/base/class-widget-base-title-center.php' );
require_once( 'widgets/base/class-widget-base-title-left.php' );
///* page-template Home */
require_once( 'widgets/home/class-widget-home-section-two.php' );
require_once( 'widgets/home/class-widget-home-section-three.php' );
require_once( 'widgets/home/class-widget-home-section-four.php' );
require_once( 'widgets/home/class-widget-home-slider.php' );
///* page-template offer */
// require_once( 'widgets/offer/class-widget-offer-section-one-product.php' );
require_once( 'widgets/offer/class-widget-offer-section-two-process.php' );
require_once( 'widgets/offer/class-widget-offer-section-three-picto.php' );
///* page-template rse */
require_once( 'widgets/RSE/class-widget-rse-section-one-bloc-content.php' );
require_once( 'widgets/RSE/class-widget-rse-section-three_link.php' );
require_once( 'widgets/RSE/class-widget-rse-section-two-bloc-detail.php' );
///* page-template transition */
require_once( 'widgets/transition/class-widget-transition-section-one-bloc-content.php' );
require_once( 'widgets/transition/class-widget-transition-section-one-bloc-header.php' );
require_once( 'widgets/transition/class-widget-transition-section-two-picto.php' );
require_once( 'widgets/transition/class-widget-transition-section-two-text.php' );
/* page-template about */
require_once( 'widgets/about/class-widget-about-section-one.php' );
require_once( 'widgets/about/class-widget-about-section-three.php' );

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/**
* Supprimer le read more dans les résumés d'article
*/

function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
