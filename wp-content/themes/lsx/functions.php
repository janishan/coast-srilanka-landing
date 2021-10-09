<?php
use function Aws\serialize;

/**
 * LSX functions and definitions.
 *
 * @package lsx
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'LSX_VERSION', '2.9.5' );

if ( in_array( 'wordpress-seo/wp-seo.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || in_array( 'wordpress-seo-premium/wp-seo-premium.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	require get_template_directory() . '/includes/yoast/class-lsx-yoast.php';
}

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce/woocommerce.php';
	require get_template_directory() . '/includes/woocommerce/addons.php';
}

if ( class_exists( 'Tribe__Events__Main' ) ) {
	require get_template_directory() . '/includes/the-events-calendar/the-events-calendar.php';
}

if ( class_exists( 'Sensei_Main' ) || class_exists( 'Sensei_WC' ) ) {
	require get_template_directory() . '/includes/sensei/class-lsx-sensei.php';
}

if ( class_exists( 'Popup_Maker' ) ) {
	require get_template_directory() . '/includes/popup-maker/class-lsx-popup-maker.php';
}

if ( class_exists( 'bbPress' ) ) {
	require get_template_directory() . '/includes/bbpress/bbpress.php';
}

require get_template_directory() . '/includes/config.php';
require get_template_directory() . '/includes/deprecated.php';
require get_template_directory() . '/includes/classes/class-lsx-theme-customizer.php';
require get_template_directory() . '/includes/customizer.php';
require get_template_directory() . '/includes/sanitize.php';
require get_template_directory() . '/includes/layout.php';
require get_template_directory() . '/includes/hooks.php';
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/scripts.php';
require get_template_directory() . '/includes/classes/class-lsx-nav-walker.php';
require get_template_directory() . '/includes/nav-navwalker.php';
require get_template_directory() . '/includes/classes/class-lsx-bootstrap-navwalker.php';
require get_template_directory() . '/includes/nav-bootstrap-navwalker.php';
require get_template_directory() . '/includes/classes/class-lsx-walker-comment.php';
require get_template_directory() . '/includes/walker-comment.php';
require get_template_directory() . '/includes/template-tags.php';
require get_template_directory() . '/includes/extras.php';
require get_template_directory() . '/includes/welcome.php';
require get_template_directory() . '/includes/404-widget.php';
require get_template_directory() . '/includes/gutenberg.php';
require get_template_directory() . '/includes/classes/class-lsx-schema-utils.php';
require get_template_directory() . '/includes/classes/class-lsx-schema-graph-piece.php';
require get_template_directory() . '/includes/classes/class-lsx-optimisation.php';
require get_template_directory() . '/includes/classes/class-lsx-rest-helper.php';

// 	Load the D5 Framework Optios Page
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
// Loads options.php from child or parent theme
$optionsfile = locate_template( '/inc/options.php' );
load_template( $optionsfile );

//require_once dirname( __FILE__ ) . '/inc/sbmeta.php';
//require_once dirname( __FILE__ ) . '/inc/checkupdater.php';
//$d5theme_update_checker = new ThemeUpdateChecker( 'travel-extend', 'http://demo.d5creation.com/updatechecker/travel.json' );