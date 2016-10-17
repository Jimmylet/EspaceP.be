<?php
/*
Template Name: Je suis un client
*/
include 'meta.php';?>

<body class="no-js no-main client-page">
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
			<section class="client">
				<h2 class="client__title">Je suis un client</h2>
				<?php the_field('client_intro'); ?>
				<span class="client__signature">Tendrement,<strong>Les travailleurs du sexe</strong><img alt="Lèvres enduite d’un rouge à lèvre" width="46" height="33" src="<?php echo $images . '/svg/bigbisous.svg';?>"></span>
			</section>
		</div>
		<section class="guideclient">
			<h2 class="guideclient__title"><span>Le guide du parfait client</span></h2>
			<div class="guideclient__wrap">
				<ul class="guideclient__categories">
					<?php foreach (get_field('client_guide') as $guide ): ?>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section1"> <!-- TODO: Class selected and section number -->
							<?php echo $guide['client_section'] ;?>
					</a></li>
					<?php endforeach; ?>
				</ul>
				<?php if( have_rows('client_guide') ): ?>
				<?php while( have_rows('client_guide') ): the_row(); ?>
				<section class="guideclient__section">
					<ul class="guideclient__section__group" id="section1">
						<li class="guideclient__section__title">
							<h3><?php the_sub_field('client_section'); ?></h3>
						</li>
						<?php /*var_dump($guide['client_section-content']); */?>
						<?php if( have_rows('client_section-content') ):?>
						<?php while ( have_rows('client_section-content') ) : the_row();?>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">
								<?php the_sub_field('client_titre-sujet'); ?></a>
							<div class="guideclient__section__content">
								<p class="guideclient__section__paragraph">
									<?php the_sub_field('client_description-sujet'); ?>
								</p>
							</div>
						</li>
							<?php endwhile; ?> <!-- client-section-content -->
							<?php endif; ?> <!-- client-section-content -->
					</ul>
				</section>
				<?php endwhile;?> <!-- client-section -->
				<?php endif;?> <!-- client-section -->
			</div>
		</section>
	</main>
	<?php include 'footer.php'; ?>
