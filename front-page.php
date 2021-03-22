<!doctype html>
<!-- ############################ COPIED FROM header.php ############################ -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/5.7.0/css/all.css">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style='background-color: #191919;background-image: none'>
<div id="page" class="site">
	<header id="masthead" class="site-header container-fluid">
		<nav id='front-page-nav' class="main-navbar navbar navbar-expand-lg fixed-top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="custom-logo-link">
					<!-- logo svg -->
					<svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 class="custom-logo custom-logo-svg">
<image  x="0px" y="0px"  xlink:href="data:img/png;base64,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" />
</svg>
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#op-header-navbar" aria-controls="op-header-navbar" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="op-header-navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="/jkrowling">JK罗琳</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/harrypotter">哈利波特</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/fantasticbeasts">神奇动物</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/cursedchild">倒霉孩子</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/strike">Strike系列</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/alumni">霍格沃茨毕业生</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/activities">周边活动</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/thingswelove">Things We Love</a>
					</li>
				</ul>
			</div>
		</nav>
	</header><!-- #masthead -->
<!-- ############################ END COPIED FROM header.php ############################ -->

<?php

if ( have_posts() ) {
	the_post();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

	echo '<div id="homepage-latest-post" style="background-image: url(\''.esc_url($featured_img_url).'\')">';
	the_title( '<div id="homepage-latest-post-content"><h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	echo '<p class="d-none d-sm-block">'.get_the_excerpt().'</p></div>';
	echo '</div>';
} ?>
<!-- First post on main page -->
</div>

<!-- Loop the next couple of posts-->
<?php
if ( have_posts() ) {
?>
<div class="container-fluid">
<?php
	$total_posts = wp_count_posts('post')->publish - 1;
	$count_post = 0;
	while ( have_posts() ) {
        the_post();
		if ($count_post % 8 == 0) {
?>
	<p style='text-align:center;color:white;padding: 50px;'>
		· · · · · · ·
	</p>
	<div id="carouselHomepage">
		<div class="d-flex justify-content-center carousel-inner row w-100 mx-auto" role="listbox">
	<?php 
		}
		$remainder = $total_posts % 4;
		$widen = $remainder < 3 && $count_post > ($total_posts - 1 - $remainder);
		$classname_mid = 'col-sm-6';
		$classname_large = 'col-md-3';
		if ($widen) {
			if ($remainder == 1) {
				$classname_mid = 'col-sm-12';
				$classname_large = 'col-md-12';
			} elseif ($remainder == 2) {
				$classname_large = 'col-md-6';
			}
		}
	?>
		<div class="col-12 <?php echo $classname_mid ?> <?php echo $classname_large ?>" style="margin-top: 10px">
			<!-- put carousel-item back in class when there are more posts -->
			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
				<div class="carousel-item-post">
					<div class="carousel-image">
						<?php
						the_post_thumbnail('medium');
						?>
					</div>
					<div class="carousel-title">
						<?php the_title( '<h2>', '</h2>' ); ?>
					</div>
				</div>
			</a>
		</div>
	<?php if ($count_post % 8 == 7 || $count_post == $total_posts - 1) { ?>
		</div>
		</div>
	<?php 
		}
	$count_post++;
	}
	?>
</div> 
<?php } ?>

<!-- ############################ COPIED FROM footer.php ############################ -->
<p style='text-align:center;color:white;padding: 50px;'>
	· · · · · · ·
</p>
<footer class="site-footer container-fluid">
	<p class="text-center">
		<a href="/about-us/">关于我们</a> | <a href="/privacy-policy/">隐私政策</a>
	</p>
	<hr style="opacity:0.5;width:39%"/>
	<p class="text-center">@2021-<?php bloginfo( 'name' ); ?> | <?php
	/* translators: %s: CMS name, i.e. WordPress. */
	printf( esc_html__( 'Proudly powered by %s', 'ww-theme' ), 'WordPress' );
		?>
	</p>
</footer>
<?php wp_footer(); ?>
<!-- #page -->

<!-- ############################ END COPIED FROM footer.php ############################ -->
</body>
</html>