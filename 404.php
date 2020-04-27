<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ww_theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h1 class="special-page-header">飞路网未能找到此壁炉</h1>
		<p>请检查浏览器地址栏确认您是否喊错终点壁炉地名。若确认无误，请稍后重试。</p>
		<img src="<?php echo get_template_directory_uri()?>/images/404.jpg">

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>