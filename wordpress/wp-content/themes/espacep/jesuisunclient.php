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
		
		<div class="headintro">
			<span class="headintro__title">
				Vous êtes un client
			</span>
			<?php the_field('meta-description'); ?>
		</div>
		
		<div class="client-top-wrap">
			<?php the_breadcrumb(); ?>
			<div class="client">
				<?php the_field('client_intro'); ?>
				<span class="client__signature">Tendrement,<strong>Les travailleurs du sexe</strong><img alt="Lèvres enduite d’un rouge à lèvre" width="46" height="33" src="<?php echo $images . '/svg/bigbisous.svg';?>"></span>
			</div>
		</div>
		<section class="guideclient">
			<h2 class="guideclient__title"><span>Le guide du parfait client</span></h2>
			<div class="guideclient__wrap">
				<ul class="guideclient__categories">
					<?php $i = 1; ?>
					<?php foreach (get_field('client_guide') as $guide ): ?>
					<li class="guideclient__categories__item"><a class="guideclient__categories__link" href="#section<?php echo $i; $i++;?>"> <!-- TODO: Class selected and section number -->
							<?php echo $guide['client_section'] ;?>
						</a></li>
					<?php endforeach; ?>
				</ul>
				<?php $e = 1; ?>
				<?php if( have_rows('client_guide') ): ?>
				<?php while( have_rows('client_guide') ): the_row(); ?>
				<section class="guideclient__section">
					<ul class="guideclient__section__group" id="section<?php echo $e; $e++; ?>">
						<li class="guideclient__section__title">
							<h3><?php the_sub_field('client_section'); ?></h3>
						</li>
						<?php /*var_dump($guide['client_section-content']); */?>
						<?php if( have_rows('client_section-content') ):?>
						<?php while ( have_rows('client_section-content') ) : the_row();?>
						<li class="guideclient__section__item"><a class="guideclient__section__trigger" href="#0">
								<?php the_sub_field('client_titre-sujet'); ?></a>
							<div class="guideclient__section__content">
								
									<?php the_sub_field('client_description-sujet'); ?>
								
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
		<div class="button-scroll"><a class="button-scroll__top" href="#" title="Remonter en haut"><svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path class="button-scroll__top__svg" d="M18.856 10.018c0 .412-.149.775-.448 1.089l-.908.908c-.307.307-.674.46-1.101.46-.436 0-.799-.153-1.089-.46l-3.558-3.546v8.52c0 .42-.151.76-.454 1.023-.303.262-.668.393-1.095.393h-1.549c-.428 0-.793-.131-1.095-.393-.303-.262-.454-.603-.454-1.023v-8.52l-3.558 3.546c-.29.307-.654.46-1.089.46-.436 0-.799-.153-1.089-.46l-.908-.908c-.307-.307-.46-.67-.46-1.089 0-.428.153-.795.46-1.101l7.879-7.879c.282-.299.645-.448 1.089-.448.436 0 .803.149 1.101.448l7.879 7.879c.299.315.448.682.448 1.101z" fill="#000"/></svg><span class="button-scroll__top__text">Remonter en haut</span></a>
		</div>
	</main>
	<?php include 'footer.php'; ?>
