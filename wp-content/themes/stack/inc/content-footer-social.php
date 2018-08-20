<?php
$title     = get_bloginfo( 'title' );
$protocols = array(
	'http',
	'https',
	'ftp',
	'ftps',
	'mailto',
	'news',
	'irc',
	'gopher',
	'nntp',
	'feed',
	'telnet',
	'skype'
);


?>

<style>
    .footer-ofice-description p {
        /*margin: 0 !important;*/
    }

    .footer-ofice-description ul {

    }

    .footer-ofice-description ul li {
        display: inline-block;
        position: relative;
        box-sizing: border-box;
        opacity: 1 !important;
        margin: 0 !important;
        padding: 0 10px;
        color: #949494;
        font-size: 12px;
    }

    .footer-ofice-description ul li::after {
        position: absolute;
        content: "|";
        left: 100%;
        color: #949494;
    }

    .footer-ofice-description ul li:last-child::after {
        content: "";
    }

    .copyright {
        margin: 10px 0 !important;
        font-size: 0.85714286em;
        color: #949494;
    }
</style>

<ul class="social-list list-inline list--hover stack-footer-social footer-ofice-description">
    <ul>
		<?php

		function render_footer_page_description() {
			$footer_page_description_text;
			$resultHtml;


			switch ( ICL_LANGUAGE_CODE ) {
				case 'ko':
					$footer_page_description_text = array(
						'ceo'     => '(주) 푸른밤, 대표 김진용',
						'number'  => '사업자등록번호 144-81-34624',
						'call'    => '통신판매업신고 제 2018-서울강남-02217 호',
						'address' => '서울특별시 강남구 학동로7길 5 베틀빌딩 4층',
						'email'   => 'support@albam.net',
						'phone'   => '1644-3332'
					);
					break;
				case 'en':
					$footer_page_description_text = array(
						'ceo'     => 'Blue Night Corp., CEO Kim Jin-yong',
						'address' => '4F, Bettle Building, 5, Hakdong-ro 7-gil, Gangnam-gu, Seoul, Korea',
						'email'   => 'support@albam.net',
					);
					break;
				default:
					$footer_page_description_text = array(
						'ceo'     => 'Blue Night Corp., CEO Kim Jin-yong',
						'address' => '4F, Bettle Building, 5, Hakdong-ro 7-gil, Gangnam-gu, Seoul, Korea',
						'email'   => 'support@albam.net',
					);
					break;
			}

			foreach ( $footer_page_description_text as $key => $value ) {
				$resultHtml .= "<li>";
				$resultHtml .= $value;
				$resultHtml .= "</li>";

			}

			return $resultHtml;
		}


		echo render_footer_page_description();
		?>

    </ul>
    <p class="copyright">
        Copyright©Blue Night Corp, All rights reserved.
    </p>

</ul>