<?php 
/* Template Name: Archive */
if(is_page()){
	query_posts([
		'orderby' => 'date',
		'order' => 'DESC',
		'post_type' => 'post'
	]);
}
include 'meta.php';?>

<body class="no-js no-main archive-page">
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
		<section class="archive">
			<!-- Last article -->
			<?php
				$posts = new WP_Query( ["posts_per_page" => 1, 'post_type' => 'post'] );
				if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post()
			;?>
					<?php the_title(); ?>
			<?php wp_reset_postdata(); ?>
			<?php endwhile; endif; ?>


			<!-- Other articles -->
			<?php
				$posts = new WP_Query( ['offset' => 1, 'post_type' => 'post'] );
				if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post()
				;?>
					<?php the_title(); ?>
				<?php wp_reset_postdata(); ?>
				<?php endwhile; endif; ?>
		

		</section>
	</main>
<?php include 'footer.php'; ?>