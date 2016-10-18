<?php
/*
      Template Name: Single Article
*/
include 'meta.php';?>

<body class="no-js no-main myarticle">
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
			<?php the_breadcrumb(); ?>
		</div>
		<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
		<section class="myarticle__content">
			<span class="myarticle__category"><?php the_category(); ?></span>
			<h2 class="myarticle__title"><?php the_title(); ?></h2>
			<div class="myarticle__content-wrap">
				<p class="myarticle__intro">
					<?php the_field('meta-description'); ?>
				</p>
			
			<?php if( have_rows('article_groupe') ): ?>
			<?php while( have_rows('article_groupe') ): the_row(); ?>
				<?php if (get_sub_field('article_sous-titre')): ?>
						<span class="myarticle__subtitle">
							<?php the_sub_field('article_sous-titre'); ?>
						</span>
				<?php endif;?>
				<?php the_sub_field('article_contenu'); ?>
			<?php endwhile; endif; ?>
		</section>
		<?php endwhile; endif; ?>
	</main>
	<?php include 'footer.php'; ?>
