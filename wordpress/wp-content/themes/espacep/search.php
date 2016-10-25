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
			<ol class="breadcrumb" itemscop itemtype="http://data-vocabulary.org/Breadcrumb">
				<li class="breadcrumb__link" itemprop="title"><a class="breadcrumb__link__text breadcrumb__link__text--home" itemprop="link" href="<?php echo home_url(); ?>" title="Aller vers l’accueil"><span class="breadcrumb__link__text--hidden">Accueil</span></a></li>
				<li class="breadcrumb__link" itemprop="title"><a class="breadcrumb__link__text" itemprop="link" href="#">Page de recherche</a></li>
			</ol>
		</div>
		<section class="search">
			<h2 class="search__title">Résultat de la recherche pour :
				<span class="search__query"><?php the_search_query(); ?></span>
			</h2>
			
			<ul>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li class="search__li">
						<a class="search__link" href="<?php echo the_permalink();?>"><?php echo the_title();?></a>
					</li>
				<?php endwhile; endif;?>
			</ul>
		</section>
	</main>
	<?php include 'footer.php'; ?>
</div>
