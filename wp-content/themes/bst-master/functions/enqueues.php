<?php

function bst_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.7', null);
	wp_enqueue_style('bootstrap-css');
	wp_register_style('select2-css', get_template_directory_uri() . '/js/plugins/select2/dist/css/select2.min.css', false, null, null);
	wp_enqueue_style('select2-css');
	wp_register_style('select2-bootstrap-css', get_template_directory_uri() . '/js/plugins/select2-bootstrap/dist/select2-bootstrap.min.css', false, null, null);
	wp_enqueue_style('select2-bootstrap-css');

//  wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
//	wp_enqueue_style('bst-css');
	/* font std */
	wp_register_style('font-cirularStd-css', get_template_directory_uri() . '/fonts/CircularStd-Book/styles.css', false, null);
	wp_enqueue_style('font-cirularStd-css');
	/* font-awesome std */
	wp_register_style('font-awesome-css', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', false, null);
	wp_enqueue_style('font-awesome-css');

	/* custom style */
	wp_register_style('style-css', get_template_directory_uri() . '/css/style.css', false, null);
	wp_enqueue_style('style-css');
	/* custom style */
	wp_register_style('responsive-style-css', get_template_directory_uri() . '/css/responsive.css', false, null);
	wp_enqueue_style('responsive-style-css');

	/* Scripts */
	 wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
    https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */
	/* jquery 2.1.3 */
//	wp_register_script('jquery-2.1.3', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', false, null, true);
//	wp_enqueue_script('jquery-2.1.3');
	/* end */

	/* modernizer */
	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');
	/* end */


	
	wp_register_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', false, null, true);
	wp_enqueue_script('jquery-easing');
	wp_register_script('sly', get_template_directory_uri() . '/js/sly.min.js', false, null, true);
	wp_enqueue_script('sly');

	/* bootstrap */
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
	/* end */

	/* plugin fancybox */
	wp_register_script('jquery-mousewheel', get_template_directory_uri() . '/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js', false, null, true);
	wp_enqueue_script('jquery-mousewheel');
	wp_register_script('jquery-fancybox', get_template_directory_uri() . '/js/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5', false, null, true);
	wp_enqueue_script('jquery-fancybox');
	wp_register_style('jquery-fancybox-css', get_template_directory_uri() . '/js/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5', false, null);
	wp_enqueue_style('jquery-fancybox-css');
	wp_register_script('fancybox-buttons', get_template_directory_uri() . '/js/plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5', false, null, true);
	wp_enqueue_script('fancybox-buttons');
	wp_register_script('fancybox-media', get_template_directory_uri() . '/js/plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6', false, null, true);
	wp_enqueue_script('fancybox-media');
	wp_register_script('jquery-mixitup', get_template_directory_uri() . '/js/plugins/mixitup/jquery.mixitup.min.js?v=2.1.11', false, null, true);
	wp_enqueue_script('jquery-mixitup');
	wp_register_script('select2', get_template_directory_uri() . '/js/plugins/select2/dist/js/select2.full.min.js', false, null, true);
	wp_enqueue_script('select2');
	wp_register_script('select2-fr', get_template_directory_uri() . '/js/plugins/select2/dist/js/i18n/fr.js', false, null, true);
	wp_enqueue_script('select2-fr');
    wp_register_script('js-cookie', get_template_directory_uri() . '/js/plugins/js-cookie-master/src/js.cookie.js', false, null, true);
    wp_enqueue_script('js-cookie');
	/* end */

	/* scripts */
	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');
	/* end */

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
