<?php
/*
Template Name: Search
*/
include 'meta.php';?>

<body class="no-js no-main search-page">
<header class="header">
	<div class="header__wrap-title">
		<h1 class="header__title" aria-level="1">
			<?php echo the_title(); ?> - <?php echo bloginfo(); ?>
		</h1>
	</div>
	<?php include 'navigation.php'; ?>
</header>

<div class="site-content">
	<main>
		<div class="client-top-wrap">
			<?php echo the_breadcrumb(); ?>
		</div>
		<section class="search">
			<h2 class="search__title">Résultat de la recherche pour : </h2>
			<p class="search__subtitle"><?php the_search_query(); ?></p>
			<ul>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li class="search__element">
						<a class="search__link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
					</li>
				<?php endwhile; endif;?>
			</ul>
		</section>
	</main>
	<?php include 'footer.php'; ?>
</div>
