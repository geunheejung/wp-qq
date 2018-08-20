<?php
/*
Plugin Name: Custom-Price-Calculate Plugin
Plugin URI: albam
Description: 사용법: [plus_price_selector]          or          [auto_price_selector] 을 Text에 넣어주세요!
Version: 0.0.1
Author: Geuni
Author URI: albam
License: ALBAM
*/

function plus_pricing_selector() {
	function get_pricing_options() {
		$pricing_options = array(
			'1-20'   => '9,900',
			'21-40'  => '27,000',
			'41-60'  => '42,000',
			'61-80'  => '55,000',
			'81-100' => '67,000',
			'101'    => '770'
		);

		$result_html;

		foreach ( $pricing_options as $key => $value ) {
			$tmp_html = "<span class='pricing_selector_option'>";
			if ( $key == '101' ) {
				$tmp_html .= $key . "명 이상";
			} else {
				$tmp_html .= $key . "명";
			}
			$tmp_html    .= "</span>";
			$result_html .= $tmp_html;
		}


		return $result_html;
	}

	$result_html = "<div id='pricing_selector_wrap_plus' class='price_selector_wrap'>";
	$result_html .= "
		<div id='pricing_selector_inner_plus' class='pricing_selector_inner' >
	        <div class='pricing_selector_btn_before'>
	            <img src='/wp-content/uploads/2018/04/ic_user-1.png'/>
	        </div>
	
	        <span id='pricing_selector_btn_plus' class='pricing_selector_btn'>
	            1-20 명
	        </span>
	
	        <div class='pricing_selector_btn_after'>
	            <img src='/wp-content/uploads/2018/04/ic_price_down-1.png' />
	        </div>
	    </div>
    ";
	$result_html .= "<div id='pricing_selector_modal_plus' class='pricing_selector_modal'>";
	$result_html .= get_pricing_options();
	$result_html .= "</div></div>";


	return $result_html;
}


function auto_pricing_selector() {

	function get_pricing_options1() {
		$pricing_options = array(
			'1-10' => '9,900',
			'11'   => '1,900',
		);

		$r_html;

		foreach ( $pricing_options as $key => $value ) {
			$tmp_html = "<span class='pricing_selector_option'>";
			if ( $key == '11' ) {
				$tmp_html .= $key . "명 이상";
			} else {
				$tmp_html .= $key . "명";
			}
			$tmp_html .= "</span>";
			$r_html   .= $tmp_html;
		}


		return $r_html;
	}


	$result_html = "<div id='pricing_selector_wrap_auto' class='price_selector_wrap q12'>";
	$result_html .= "
		<div id='pricing_selector_inner_auto' class='pricing_selector_inner' >
	        <div class='pricing_selector_btn_before'>
	            <img src='/wp-content/uploads/2018/04/ic_user-1.png'/>
	        </div>
	
	        <span id='pricing_selector_btn_auto' class='pricing_selector_btn'>
	            1-10 명
	        </span>
	
	        <div class='pricing_selector_btn_after'>
	            <img src='/wp-content/uploads/2018/04/ic_price_down-1.png' />
	        </div>
	    </div>
    ";
	$result_html .= "<div id='pricing_selector_modal_auto' class='pricing_selector_modal'>";
	$result_html .= get_pricing_options1();
	$result_html .= "</div></div>";


	return $result_html;

}

add_shortcode( 'auto_price_selector', 'auto_pricing_selector' );
add_shortcode( 'plus_price_selector', 'plus_pricing_selector' );