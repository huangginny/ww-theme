<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww_theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row d-flex <?php if( is_singular()) { echo 'justify-content-center'; } ?>" style="padding:50px 0;margin-top:-20px;z-index:100">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
			?>
				<div class="entry-meta <?php if( is_singular()) { echo 'center'; } ?>">
					<?php
					ww_theme_posted();
					?>
				</div><!-- .entry-meta -->
			<?php 
			endif;
			?>
		</header><!-- .entry-header -->
	</div>

	<div class="row entry-content">
		<?php
		if ( is_singular() ) {
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( '阅读全文 <span class="screen-reader-text"> "%s"</span>', 'ww-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		} else { ?>
		<div class='d-none d-md-block' width='150px'>
			<?php ww_theme_post_thumbnail('thumbnail'); ?>
		</div>
		<div class='d-none d-md-block col'>
			<?php the_excerpt(''); ?>
		</div>
		<div class='d-sm-block d-md-none'>
			<?php ww_theme_post_thumbnail('medium'); ?>
		</div>
		<?php
			   }

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ww-theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
	<div class="row">
		<footer class="entry-footer">
			<?php ww_theme_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->