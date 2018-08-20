<?php
$button_1_link = get_option( 'stack_header_button_url_1', '#' );
$button_2_link = get_option( 'stack_header_button_url_2', '#' );


$main_menu_button_text = array(
	'WEB_ADMIN' => 'WEB ADMIN',
	'TRY_FREE'  => 'TRY FREE'
);

if ( ICL_LANGUAGE_CODE == 'ko' ):
	$main_menu_button_text['WEB_ADMIN'] = '웹관리자';
	$main_menu_button_text['TRY_FREE']  = '무료 이용하기';
endif;


?>

<div class="bar__module stack-header-buttons">

	<?php if ( $button_1_link ) : ?>
        <a
                class="<?php echo esc_attr( get_option( 'stack_header_button_class_1', 'btn btn--sm type--uppercase' ) ); ?>"
                href="<?php echo esc_url( $button_1_link ); ?>"
                target="<?php echo esc_attr( get_option( 'stack_header_button_target_1' ) ); ?>"
        >
            <span class="btn__text"><?php echo $main_menu_button_text['WEB_ADMIN']; ?></span>
        </a>
	<?php endif; ?>

	<?php if ( $button_2_link ) : ?>
        <a
                class="<?php echo esc_attr( get_option( 'stack_header_button_class_2', 'btn btn--sm btn--primary type--uppercase' ) ); ?>"
                href="<?php echo esc_url( $button_2_link ); ?>"
                target="<?php echo esc_attr( get_option( 'stack_header_button_target_2' ) ); ?>"
        >
			<?php if ( ICL_LANGUAGE_CODE == 'ko' ): ?>
                <span class="btn__text">무료 이용하기</span>
			<?php else : ?>
                <span class="btn__text"><?php echo $main_menu_button_text['TRY_FREE']; ?></span>
			<?php endif; ?>

        </a>
	<?php endif; ?>

</div><!--end module-->