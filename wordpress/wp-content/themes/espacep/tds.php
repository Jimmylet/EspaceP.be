<?php
/*
Template Name: Je suis un travailleur du sexe
*/
include 'meta.php';?>

<body class="no-js no-main tds-page tds-page-fr">
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
			
			<a href="<?php the_permalink(287); ?>" rel="alternate" hreflang="en" lang="en" class="language">
				<span class="language__message">Click here for visit this page in English</span>
			</a>
			
			<span class="headintro__title">
				Vous êtes un travailleur du sexe
			</span>
			<p><?php the_field('meta-description'); ?></p>
		</div>
		
		<div class="client-top-wrap">
			<?php the_breadcrumb(); ?>
		</div>
		
		<section class="tds-section tds-services tds-action">
			<h2 aria-level="2" class="tds-section__title">
				Nos actions
			</h2>
			<ol class="tds-section__ol">
				<?php if( have_rows('tds-services') ):
					while ( have_rows('tds-services') ) : the_row(); ?>
						<li>
							<span class="tds-section__subtitle">
								<?php the_sub_field('titre'); ?>
							</span>
							<?php the_sub_field('paragraph'); ?>
						</li>
					<?php endwhile; endif; ?>
			</ol>
		</section>
		
		<section class="tds-section tds-droits">
			<h2 aria-level="2" class="tds-section__title">
				La législation sur la prostitution
			</h2>
			<div>
				<?php if( have_rows('tds-droits') ):
					while ( have_rows('tds-droits') ) : the_row(); ?>
						<div>
							<span class="tds-section__subtitle"><?php the_sub_field('titre'); ?></span>
							<?php the_sub_field('paragraph'); ?>
						</div>
					<?php endwhile; endif; ?>
			</div>
		</section>
		
		<section class="tds-section tds-vaccins">
			<h2 aria-level="2" class="tds-section__title">
				Infos vaccination et dépistage
			</h2>
			<div>
				<?php if( have_rows('tds-vaccins') ):
					while ( have_rows('tds-vaccins') ) : the_row(); ?>
						<div>
							<span class="tds-section__subtitle"><?php the_sub_field('titre'); ?></span>
							<?php the_sub_field('paragraph'); ?>
						</div>
					<?php endwhile; endif; ?>
				<div class="tds-vaccins__ask">
					<div class="tds-vaccins__ask__wrap">
						<span class="tds-vaccins__ask__title">Demander le passage d’une équipe</span>
						<?php the_field('tds-passage'); ?>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="293" title="Demander le passage d’une équipe" html_class="form"]'); ?>
					<!--<form class="form">
					<div class="form__top">
						<div class="form__name">
							<label class="form__name__label" for="name">Votre nom</label>
							<input class="form__name__input" type="text" id="name" name="name" placeholder="Votre nom" required>
						</div>
						<div class="form__email">
							<label class="form__email__label" for="email">Votre email</label>
							<input class="form__email__input" type="email" id="email" name="email" placeholder="Votre email" required>
						</div>
					</div>
					<div class="form__middle">
						<div class="form__subject">
							<label class="form__subject__label" for="subject">Votre sujet</label>
							<input class="form__subject__input" type="text" id="subject" name="subject" placeholder="Le sujet de votre message" required>
						</div>
						<select class="select" name="carlist" form="carform">
							<option value="volvo">Sélectionner un destinataire</option>
							<option value="saab">Saab</option>
							<option value="opel">Opel</option>
							<option value="audi">Audi</option>
						</select>
					</div>
					<div class="form__bottom">
						<div class="form__message">
							<label class="form__message__label" for="message">Votre message</label>
							<textarea class="form__message__input" id="message" name="message" placeholder="Votre message" required></textarea>
						</div>
					</div>
					<input class="form__submit" type="submit" value="Envoyer le message">
				</form>-->
				</div>
			</div>
		</section>
		



		<section class="tds-section tds-files">
			<h2 aria-level="2" class="tds-section__title">
				Documents à télécharger
			</h2>
			<div class="div-content">
				<?php if( have_rows('tds-files') ):
					while ( have_rows('tds-files') ) : the_row(); ?>
						<div class="tds-files__wrap">
						<?php $file = get_sub_field('tds-file'); ?>
						<a href="<?php echo $file['url']; ?>"  alt="<?php echo $file['description']; ?>" class="tds-files__link">
							<span class="tds-files__name"><?php the_sub_field('tds-name'); ?></span>
							<img src="<?php echo $images; ?>/svg/pdf.svg" alt="Icone d’un fichier SVG" width="60" height="60">
							<span class="tds-files__download">Télécharger</span>
						</a>
						</div>
					<?php endwhile; endif; ?>
			</div>
		</section>
		
		
		
		
		<div class="button-scroll"><a class="button-scroll__top" href="#" title="Remonter en haut"><svg width="19" height="19" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path class="button-scroll__top__svg" d="M18.856 10.018c0 .412-.149.775-.448 1.089l-.908.908c-.307.307-.674.46-1.101.46-.436 0-.799-.153-1.089-.46l-3.558-3.546v8.52c0 .42-.151.76-.454 1.023-.303.262-.668.393-1.095.393h-1.549c-.428 0-.793-.131-1.095-.393-.303-.262-.454-.603-.454-1.023v-8.52l-3.558 3.546c-.29.307-.654.46-1.089.46-.436 0-.799-.153-1.089-.46l-.908-.908c-.307-.307-.46-.67-.46-1.089 0-.428.153-.795.46-1.101l7.879-7.879c.282-.299.645-.448 1.089-.448.436 0 .803.149 1.101.448l7.879 7.879c.299.315.448.682.448 1.101z" fill="#000"/></svg><span class="button-scroll__top__text">Remonter en haut</span></a>
		</div>
	</main>
	<?php include 'footer.php'; ?>
