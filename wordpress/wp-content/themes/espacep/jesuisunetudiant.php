<?php
/*
Template Name: Je suis un étudiant
*/
include 'meta.php';?>

<body class="no-js no-main etudiant-page">
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
				Vous êtes un étudiant
			</span>
			<p><?php the_field('meta-description'); ?></p>
		</div>
		
		<div class="client-top-wrap">
			<?php the_breadcrumb(); ?>
		</div>
		<section class="etudiant-section etudiant-actions">
			<h2 aria-level="2" class="etudiant-section__title">
				Nos actions
			</h2>
			<ol class="etudiant-section__ol">
				<?php if( have_rows('etudiant_actions') ):
					while ( have_rows('etudiant_actions') ) : the_row(); ?>
						<li>
							<span class="etudiant-section__subtitle">
								<?php the_sub_field('titre'); ?>
							</span>
							<?php the_sub_field('paragraph'); ?>
						</li>
					<?php endwhile; endif; ?>
			</ol>
		</section>
		<section class="etudiant-section etudiant-philosophie">
			<h2 aria-level="2" class="etudiant-section__title">
				Notre philosophie
			</h2>
			<?php the_field('etudiant_philosophie'); ?>
		</section>
		<section class="etudiant-section etudiant-legi">
			<h2 aria-level="2" class="etudiant-section__title">
				Le point sur notre législation et les autres
			</h2>
			<ol class="etudiant-section__ol">
				<?php if( have_rows('etudiant_legi') ):
					while ( have_rows('etudiant_legi') ) : the_row(); ?>
						<li>
							<span class="etudiant-section__subtitle">
								<?php the_sub_field('titre'); ?>
							</span>
							<?php the_sub_field('paragraph'); ?>
						</li>
					<?php endwhile; endif; ?>
			</ol>
		</section>
		<section class="etudiant-section etudiant-stages">
			<h2 aria-level="2" class="etudiant-section__title">
				Stages et intervention scolaire
			</h2>
			<ul>
				<?php if( have_rows('etudiant_stages') ):
				while ( have_rows('etudiant_stages') ) : the_row(); ?>
				<li>
					<span class="etudiant-section__subtitle"><?php the_sub_field('titre'); ?></span>
					<?php the_sub_field('paragraph'); ?>
				</li>
				<?php endwhile; endif; ?>
			</ul>
		</section>
		
		
		<div class="button-scroll"><a class="button-scroll__top" href="#" title="Remonter en haut"><svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path class="button-scroll__top__svg" d="M18.856 10.018c0 .412-.149.775-.448 1.089l-.908.908c-.307.307-.674.46-1.101.46-.436 0-.799-.153-1.089-.46l-3.558-3.546v8.52c0 .42-.151.76-.454 1.023-.303.262-.668.393-1.095.393h-1.549c-.428 0-.793-.131-1.095-.393-.303-.262-.454-.603-.454-1.023v-8.52l-3.558 3.546c-.29.307-.654.46-1.089.46-.436 0-.799-.153-1.089-.46l-.908-.908c-.307-.307-.46-.67-.46-1.089 0-.428.153-.795.46-1.101l7.879-7.879c.282-.299.645-.448 1.089-.448.436 0 .803.149 1.101.448l7.879 7.879c.299.315.448.682.448 1.101z" fill="#000"/></svg><span class="button-scroll__top__text">Remonter en haut</span></a>
		</div>
	</main>
	<?php include 'footer.php'; ?>
