<?php

/**
 * Define theme folder URL, saves querying the template directory multiple times.
 */
define( 'EBOR_THEME_DIRECTORY', esc_url( trailingslashit( get_template_directory_uri() ) ) );
define( 'EBOR_REQUIRE_DIRECTORY', trailingslashit( get_template_directory() ) );


/**
 * Naver Blog Rss 피드 관련 php 파일 require
 */
// require_once( EBOR_REQUIRE_DIRECTORY . 'custom-inc/insert-naver-rss-post.php' );

/**
 * wpml legacy-dropdown 스크립트, 스타일 로드 캔슬
 */
add_action( 'wp_enqueue_scripts', 'remove_wcml_stylesheet', 100 );
function remove_wcml_stylesheet() {
	wp_dequeue_style( 'wpml-legacy-dropdown-0' );
	wp_dequeue_style( 'wcml-dropdown-0-css' );
	wp_dequeue_style( 'wcml-dropdown-0' );
}

if ( is_front_page() ) {
	wp_enqueue_script( 'custom_script.js', EBOR_THEME_DIRECTORY . 'custom-inc/script/custom_script.js', array( 'jquery' ), $version, false );
}

/**
 * Ebor Framework
 * Queue Up Theme-Side Framework, everything else is loaded in the ebor-framework plugin.
 *
 * You can install a child theme to modify all aspects of the theme, if you need to modify anything from the /admin/ folder
 * Just delete the require line below and move it to the functions.php of your child theme, make sure to copy over the entire /admin/ folder too.
 * It's very rare you'd need to do that, but if you do, you'll need to delete this require on every theme update.
 *
 * Note that to override a function from the /admin/ folder, you don't need to copy the folder to your child theme, every function is wrapped
 * in a conditional so that it can be called directly from your child theme and ignored in the parent theme.
 *
 * @since 1.0.0
 * @author TommusRhodus
 */


require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_menus_widgets.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_layouts.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_functions.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_scripts.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_filters.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_support.php' );
require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_options.php' );

/**
 * Some parts of the framework only need to run on admin views.
 * These would be those.
 * Calling these only on admin saves some operation time for the theme, everything in the name of speed.
 */

function wpdocs_scripts_method() {
	wp_enqueue_script( 'html5shiv.js', EBOR_THEME_DIRECTORY . 'style/js/html5shiv.js', array( 'jquery' ), $version, false );
	wp_enqueue_script( 'es6-shim.min.js', EBOR_THEME_DIRECTORY . 'style/js/es6-shim.min.js', array( 'jquery' ), $version, false );
	wp_enqueue_script( 'smooth-scroll.min.js', EBOR_THEME_DIRECTORY . 'style/js/smooth-scroll.min.js' );
	wp_enqueue_script( 'smooth-scroll.polyfills.min.js', EBOR_THEME_DIRECTORY . 'style/js/smooth-scroll.polyfills.min.js' );
}

function custom_excerpt_length( $length ) {
  return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Custom Style 파일 등록 함수 입니다.
 */
function custom_style_method() {
	wp_enqueue_style( 'custom_style', EBOR_THEME_DIRECTORY . 'custom-inc/style/custom_style.css' );
	wp_enqueue_style( 'web-font', '/font/web-font.css' );
}

function custom_script_method() {
    wp_enqueue_script( 'kboard_cusotm', EBOR_THEME_DIRECTORY . 'custom-inc/script/kboard_cusotm.js', array( 'jquery' ), null, false );
}

add_action( 'wp_enqueue_scripts', 'custom_style_method' );
add_action( 'wp_enqueue_scripts', 'wpdocs_scripts_method' );
add_action( 'wp_enqueue_scripts', 'custom_script_method', 100 );

if ( is_admin() ) {
	if ( ! ( class_exists( 'TGM_Plugin_Activation' ) ) ) {
		require_once( EBOR_REQUIRE_DIRECTORY . 'admin/class-tgm-plugin-activation.php' );
	}

	require_once( EBOR_REQUIRE_DIRECTORY . 'admin/theme_metaboxes.php' );
}

/**
 * If visual composer is installed, grab all required files.
 * Wrapped in an if statement so that we can save parsing this if visual composer is not used.
 * It's a speed boost basically.
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	require_once( EBOR_REQUIRE_DIRECTORY . "vc_init.php" );
}

if ( class_exists( 'woocommerce' ) ) {
	require_once( EBOR_REQUIRE_DIRECTORY . "woocommerce_init.php" );
}

if ( function_exists( 'variant_page_builder_init' ) ) {
	require_once( EBOR_REQUIRE_DIRECTORY . "variant_init.php" );
}