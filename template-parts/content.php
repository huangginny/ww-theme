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
	<div class="row d-flex <?php if( is_singular()) { echo 'justify-content-center'; } ?>" style="padding-bottom:25px;margin-top:-20px;z-index:100;<?php if( is_singular()) { echo 'padding-top:50px;'; } ?>">
			<?php
			if ( is_singular() ) :
				echo '<header class="entry-header">';
				the_title( '<h1 class="entry-title">', '</h1>' );
				if ( 'post' === get_post_type() ) :
				?>
					<div class="entry-meta center">
						<?php
						ww_theme_posted();
						?>
					</div><!-- .entry-meta -->
				<?php 
				endif;
				echo '</header><!-- .entry-header -->';
			endif;
			?>
	</div>

		<?php
		if ( is_singular() ) {
		?>
		<div class="entry-content">
		<?php
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
		?>	</div><!-- .entry-content --> <?php
		} else { ?>
		<div class='d-none d-md-flex flex-row' style='position:relative'>
			<div class='archive-thumbnail'>
				<?php ww_theme_post_thumbnail('medium'); ?>
			</div>
			<div class='archive-excerpt col' style='margin-left:200px;padding-left: 30px;'>
				<?php 
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
				<div class="entry-meta">
					<?php ww_theme_posted(); ?>
				</div>
				<?php the_excerpt('');?>
			</div>
		</div>
		<div class='d-sm-flex d-md-none' style='text-align: center;padding-bottom:1em;'>
			<div class='flex-row' style='padding-bottom:1em;'>
				<?php 
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</div>
			<div class='flex-row'>
				<?php ww_theme_post_thumbnail('medium'); ?>
			</div>
		</div>
		<?php
		}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ww-theme' ),
			'after'  => '</div>',
		) );
		?>
	<div class="row">
		<footer class="entry-footer">
			<?php ww_theme_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->