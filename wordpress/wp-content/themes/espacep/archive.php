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
			<ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList"><li class="breadcrumb__link" itemprop="
itemListElement">
<a class="breadcrumb__link__text breadcrumb__link__text--home" href="http://espacep.app"><span class="breadcrumb__link__text--hidden">Accueil</span></a></li><li class="breadcrumb__link" itemprop="
itemListElement"><a class="breadcrumb__link__text" href="http://espacep.app/nos-partenaires/">Archives</a></li></ol>
		</div>
		<section class="archive">
			<!-- Last article -->
			<?php
				$posts = new WP_Query( ["posts_per_page" => 1, 'post_type' => 'post'] );
				if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post()
			;?>
			<!-- Recup thumbnail et size -->
			<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-home' ); ?>
				<a class="last-article__link last-article__link--top" href="<?php the_permalink();?>" title="Vers l’article <?php echo the_title(); ?>">
					<article class="article">
						<div class="article__wrap-text">
							<span class="article__category">
								<?php $categorie = get_the_category();?>
								<?php echo ($categorie[0]->name);?>
							</span>
							<h3 class="article__title"><?php the_title(); ?></h3>
							<span class="article__link">Lire l'article</span>
						</div>
						<div class="article__img" style="background-image: url('<?php echo $url[0];?>');"></div>
					</article>
				</a>
			<?php wp_reset_postdata(); ?>
			<?php endwhile; endif; ?>


			<!-- Other articles -->
			<div class="last-article-two">
				<?php
					$posts = new WP_Query( ['offset' => 1, 'post_type' => 'post'] );
					if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post()
					;?>
					<a class="last-article__link" href="<?php the_permalink();?>" title="Vers l’article <?php echo the_title(); ?>">
						<article class="article">
							<div class="article__wrap-text">
								<span class="article__category">
									<?php $categorie = get_the_category();?>
									<?php echo ($categorie[0]->name);?>
								</span>
								<h3 class="article__title">
									<?php if (strlen($post->post_title) > 80) {
										echo substr(the_title($before = '', $after = '', FALSE), 0, 80) . '...'; } else {
										the_title();
									} ?>
								</h3>
								<span class="article__link">Lire l'article</span>
							</div>
						</article>
					</a>
					<?php wp_reset_postdata(); ?>
					<?php endwhile; endif; ?>
				</div>
		

		</section>
	</main>
<?php include 'footer.php'; ?>