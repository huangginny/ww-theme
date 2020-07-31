<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww_theme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="row">
<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$ww_theme_comment_count = get_comments_number();
			printf( // WPCS: XSS OK.
				/* translators: 1: comment count number, 2: title. */
				esc_html( _nx( '%1$s条评论', '%1$s条评论', $ww_theme_comment_count, 'comments title', 'ww-theme' ) ),
				number_format_i18n( $ww_theme_comment_count ),
				'<span>' . get_the_title() . '</span>'
			);
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ul class="comment-list" style='list-style: none'>
			<?php
			wp_list_comments( array(
				'short_ping' => true,
			) );
			?>
		</ul><!-- .comment-list -->

		<?php the_comments_navigation(); 

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
</div>