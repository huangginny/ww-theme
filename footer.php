<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ww_theme
 */

?>

	</div><!-- #content -->
	</div>
	<footer class="site-footer container-fluid">
		<p class="text-center">
			<a href="/about-us/">关于我们</a> | <a href="/privacy-policy/">隐私政策</a> | <a href="/%e8%bd%ac%e8%bd%bd%e9%a1%bb%e7%9f%a5/">转载须知</a>
		</p>
		<hr style="opacity:0.5;width:39%"/>
		<p class="text-center">@2020-<?php bloginfo( 'name' ); ?> | <?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'ww-theme' ), 'WordPress' );
			?>
		</p>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
