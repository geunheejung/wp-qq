<article id="post-<?php the_ID(); ?>" <?php post_class('masonry__item col-sm-12'); ?>>
	<div class="article__title text-center">
		<?php 
			the_title('<a href="'. get_permalink() .'"><h2>', '</h2></a>'); 
			get_template_part('inc/content-post', 'meta');			
		?>	
	</div><!--end article title-->

	<div class="text-center">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		?>
	</div>
	
	<br />

	<div class="article__body">
		<?php the_excerpt(); ?>
		<!-- <?php the_content(esc_html__('Continue reading &raquo;', 'stack')); ?> -->
		<div>
			<a href="<?php echo get_permalink() ?>" style="font-size: 17px; font-weight: 600; text-decoration: underline;">Continue reading <span style="font-size: 13px; letter-spacing: -1.5px;">>></span></a>	
		</div>
	</div>
	
</article><!--end item-->