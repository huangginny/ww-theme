<!doctype html>
<!-- ############################ COPIED FROM header.php ############################ -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style='background-color: #191919;background-image: none'>
<div id="page" class="site">
	<a href="#content"><?php esc_html_e( 'Skip to content', 'ww-theme' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<nav id='front-page-nav' class="main-navbar navbar navbar-dark navbar-expand-lg fixed-top">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a>
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
// the query
$query = new WP_Query( array(
  'posts_per_page' => 7,
)); 

if ( $query->have_posts() ) {
	$query->the_post();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

	echo '<div id="homepage-latest-post" style="background-image: url(\''.esc_url($featured_img_url).'\')">';
	the_title( '<div id="homepage-latest-post-content"><h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	echo '<p>'.get_the_excerpt().'</p></div>';
	echo '</div>';
} ?>
<!-- First post on main page -->
</div>

<!-- Loop the next couple of posts-->
<?php
if ( $query->have_posts() ) {
?>
<p style='text-align:center;color:white;padding: 50px;'>
	· · · · · · ·
</p>
<div class="container-fluid">
	<div id="carouselHomepage">
    <!--<div id="carouselHomepage" class="carousel slide" data-ride="carousel">-->
		<div class="d-flex justify-content-center carousel-inner row w-100 mx-auto" role="listbox"><!-- d-flex justify-content-center should be removed in carousel mode -->
<?php
	$first_in_list = true;
	while ( $query->have_posts() ) {
 
        $query->the_post();
?>		
		<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 <?php if($first_in_list) { echo 'active'; } ?>">
			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
				<div class="carousel-item-post">
					<div class="carousel-image">
						<?php
						$first_in_list = false;
						the_post_thumbnail('medium');
						?>
					</div>
					<div class="carousel-title">
						<?php the_title( '<h2>', '</h2>' ); ?>
					</div>
				</div>
			</a>
		</div>
<?php } ?>
    </div>
    <!-- <a class="carousel-control-prev" href="#carouselHomepage" role="button" data-slide="prev">
        <i class="fa fa-chevron-left fa-lg text-muted"></i>
        <span class="sr-only">上一页</span>
    </a>
    <a class="carousel-control-next text-faded" href="#carouselHomepage" role="button" data-slide="next">
        <i class="fa fa-chevron-right fa-lg text-muted"></i>
        <span class="sr-only">下一页</span>
    </a> -->
    </div>
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
	<p class="text-center">@2020-<?php bloginfo( 'name' ); ?> | <?php
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