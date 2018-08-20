<?php ///* Template Name: CustomPageT1 */ ?>
<?php
function redirect_by_browserlang() {
	$browserLangCode            = substr( $_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2 );
	$uri                        = $_SERVER['REQUEST_URI'];
	$currentUriLangCode         = explode( '/', $uri )[1];
	$wpml_lang_codes            = apply_filters( 'wpml_active_languages', null, 'orderby=id&order=desc' );
	$is_current_uri_in_langcode = array_key_exists( $currentUriLangCode, $wpml_lang_codes );
	$redirected_url             = $uri . $browserLangCode;

	if ( $is_current_uri_in_langcode === false ) :
		wp_redirect( $redirected_url, 301 );
		do_action( 'wpml_switch_language', $browserLangCode );
		exit;
	endif;
}

redirect_by_browserlang();
?>