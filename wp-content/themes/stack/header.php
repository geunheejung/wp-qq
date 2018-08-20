<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!--  
<title><?php echo ( ICL_LANGUAGE_CODE === 'ko' ) ? '알밤' : 'Albam' ?></title>
-->

		<!-- 
		<link rel="canonical" href="https://www.albam.net">
	 -->

    <!--
    <meta name="description" content="스마트폰으로 간편한 출퇴근체크, 근무스케줄, 근태관리, 자동 급여계산, 웹관리자. 30,000 사업장의 선택. 복잡한 급여계산 자동해결. 근무52시간 자동계산. 쉽고 빠른 출퇴근기록 앱.">
-->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1, IE=11, IE=10">
    <!--[if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->


    <meta http-equiv="X-UA-Compatible" content="IE=5">

    <meta http-equiv="X-UA-Compatible" content="IE=6">

    <meta http-equiv="X-UA-Compatible" content="IE=7">

    <meta http-equiv="X-UA-Compatible" content="IE=8">

    <meta http-equiv="X-UA-Compatible" content="IE=9">

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
        data-smooth-scroll-offset="<?php echo (int) esc_attr( get_option( 'stack_scroll_offset', '0' ) ); ?>">

<a href="#" id="start" title="<?php esc_attr_e( 'Start', 'stack' ); ?>"></a>

<?php
do_action( 'ebor_before_header' );

/**
 * First, we need to check if we're going to override the header layout (with post meta)
 * Or if we're going to display the global choice from the theme options.
 * This is what ebor_get_header_layout is in charge of.
 */
get_template_part( 'inc/layout-header', ebor_get_header_layout() );

do_action( 'ebor_after_header' );
?>

<div class="main-container">

	<?php
	// 메인페이지 유저 언어 코드 ko일 경우 video on/off 코드
	if ( is_front_page() && ICL_LANGUAGE_CODE === 'ko' ) {

		/**
		 * Custom Script 파일 로드 함수 입니다.
		 */


		echo '        
        <script>
        jQuery(document).ready(function(){
  jQuery( window ).off().resize(function() { jQuery(".video-over-cover").css({"height": jQuery("#video").height() }) });
});
</script>
        <div id="main-banner-background-video">
            <video id="video" preload="auto" loop="loop" autoplay="autoplay" muted="muted" volume="0" class="hidden-xs" style="background-image: url("https://www.albam.me/static/images/mainv3/img_main_mobile.png"); background-size: cover;">
                <source src="https://s3-ap-northeast-1.amazonaws.com/albam-image/kr/main_video.mp4" type="video/mp4">
            </video>
        </div>
	<div class="video-over-cover"></div>    
        ';
	}
	?>
<?php do_action( 'ebor_before_content' );