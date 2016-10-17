<?php
/*
Template Name: Partenaires
*/
include 'meta.php';?>

<body class="no-js no-main partenaires-page">
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
		<section class="partenaires">
			<h2 aria-level="2" class="partenaires__title">Liste de nos partenaires</h2>
			<!-- start while with ACF -->
			<?php if( have_rows('partenaires') ):
			while ( have_rows('partenaires') ) : the_row();
			$image = wp_get_attachment_image_src(get_sub_field('partenaire_img')['id'], 'thumb-partenaires');
			$imageinfos = get_sub_field('partenaire_img'); ?>
			<?php /*var_dump($imageinfos); */?>
			<div class="paretnaires__wrap">
				<div class="partenaires__img">
					<img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>" alt="<?php echo $imageinfos['alt']; ?>">
				</div>
				<div class="description__wrap">
					<span class="description__title">
						<?php the_sub_field('partenaire_name'); ?>
					</span>
					<p class="description__text">
						<?php the_sub_field('partenaire_description'); ?>
					</p>
					<?php if( get_sub_field('partenaire_url') ): ?>
					<a href="<?php the_sub_field('partenaire_url'); ?>" class="description__link">
						Vers le site du partenaire
					</a>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</section>
	</main>
</div>
		
		
<?php include 'footer.php'; ?>
