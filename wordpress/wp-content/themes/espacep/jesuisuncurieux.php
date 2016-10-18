<?php
/*
Template Name: Je suis un curieux/Sympathisant
*/
include 'meta.php';?>

<body class="no-js no-main curieux-page">
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
		
		<div class="headintro">
			<span class="headintro__title">
				Vous êtes un sympathisant/curieux
			</span>
			<?php the_field('meta-description'); ?>
		</div>
		
		<div class="client-top-wrap">
			<?php the_breadcrumb(); ?>
		</div>
		<section class="curieux-legislation">
			<h2 aria-level="2" class="curieux-legislation__title">
				Le point sur notre législation et les autres
			</h2>
			<ol class="curieux-legislation__ol">
				<?php if( have_rows('curieux_legi') ):
				while ( have_rows('curieux_legi') ) : the_row(); ?>
				<li>
					<span class="curieux-legislation__subtitle">
						<?php the_sub_field('curieux_titre-legi'); ?>
					</span>
					<?php the_sub_field('curieux_paragraph-legi'); ?>
				</li>
				<?php endwhile; endif; ?>
			</ol>
		</section>
		
		<section class="curieux-manifeste">
			<h2 aria-level="2" class="curieux-manifeste__title">
				Les points forts de notre manifeste
			</h2>
			<ol class="curieux-manifeste__ol">
				<?php if( have_rows('curieux_legi') ):
					while ( have_rows('curieux_legi') ) : the_row(); ?>
						<li>
							<span class="curieux-manifeste__subtitle">
								<?php the_sub_field('curieux_titre-legi'); ?>
							</span>
							<?php the_sub_field('curieux_paragraph-legi'); ?>
						</li>
					<?php endwhile; endif; ?>
			</ol>
		</section>

	</main>
	<?php include 'footer.php'; ?>
