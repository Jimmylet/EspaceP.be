<?php
/*
Template Name: Page d’accueil
*/; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo bloginfo(); ?></title>
	<meta name="description" content="<?php echo the_field("meta-description"); ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
	<?php wp_head(); ?>
</head>
<body class="no-js">
<header class="header">
	<div class="header__wrap-title">
		<h1 class="header__title" aria-level="1">
			<?php echo bloginfo(); ?>
		</h1>
		<span class="header__subtitle">
			<?php echo get_bloginfo('description'); ?>
		</span>
	</div>
	<nav class="menu menu-home">
		<h2 class="menu__title">Menu de navigation</h2>
		<div class="menu__wrap">
			<div class="menu__icon__wrap">
				<input class="menu__icon" id="menu__icon" type="checkbox">
				<label class="menu__icon__label" id="menu__icon__label" for="menu__icon"><span></span></label>
			</div>
			<ul class="menu__list">
				<li class="menu__item">
					<a class="menu__link menu__logo menu__item0" href="<?php echo get_home_url(); ?>">Accueil</a>
					<?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
						<a href="<?php echo $navItem->url; ?>"
							 class="menu__link <?php echo $thePostID == $navItem->id ? "active" : ""; ?>  "><?php echo $navItem->label; ?></a>
					<?php endforeach; ?>
				</li>
			</ul>
		</div>
	</nav>
	<form class="menu__search" action="index.php" method="get">
		<label class="menu__search__label" for="search"></label>
		<input class="menu__search__input" type="search" id="search" required placeholder="Rechercher">
		<input class="menu__search__submit" type="image" name="image" src="<?php echo $images . '/svg/search.svg'; ?>"
					 width="37"
					 height="37" alt="Bouton de recherche">
	</form>
	<nav class="submenu">
		<h2 class="submenu__title">Choisissez votre profile</h2><a class="submenu__link submenu__link--sexworker" href="#" title="Aller vers #"><img class="submenu__img" src="<?php echo $images . '/button_sexworker.png'; ?>" alt="Photo des jambes d’une travailleuse du sexe" srcset="<?php echo $images . '/button_sexworker@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text submenu__text--sexworker">Je suis travailleur du sexe</span></a><a class="submenu__sublink" href="#" title="Go to…" lang="en">I'm sex worker and I speak English</a><a class="submenu__link" href="#" title="Aller vers #"><img class="submenu__img" src="<?php echo $images . '/button_student.png'; ?>" alt="Photo d’une étudiante souriante" srcset="<?php echo $images . '/button_student@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un étudiant</span></a><a class="submenu__link" href="<?php the_permalink(185); ?>" title="Aller vers la page Je suis un curieux"><img class="submenu__img" src="<?php echo $images . '/button_curieux.png'; ?>" alt="Photo d’une personne sympathisante" srcset="<?php echo $images . '/button_curieux@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un sympathisant</span></a><a class="submenu__link" href="<?php the_permalink(128); ?>" title="Aller vers la page Je suis un client"><img class="submenu__img" src="<?php echo $images . '/button_client.png'; ?>" alt="Photo d’une personne vue de derrière portant une capuche" srcset="<?php echo $images . '/button_client@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un futur client</span></a>
	</nav>
</header>
<main>
	<div class="wrap-top">
		<section class="last-article">
			<h2 class="last-article__title">Notre dernier article</h2>
			
			
			<!-- Debut WP_QUERY -->
			<?php
			$posts = new WP_Query( ['posts_per_page' => 1, 'post_type' => 'post'] );
			if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
			?>
			<!-- Recup thumbnail et size -->
			<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'thumb-article-home' ); ?>
			
			<a class="last-article__link" href="<?php the_permalink();?>" title="Vers l’article <?php echo the_title(); ?>">
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
		</section>
		<section class="last-facebook">
			<h2 class="last-facebook__title">Notre dernier message sur facebook</h2>
			<div class="last-facebook__wrap">
				<section class="last-facebook__follow">
					<h3 class="last-facebook__follow__title">Suivez-nous</h3>
					<p class="last-facebook__text">Facebook est la manière la plus simple de rester informé sur notre
						activité. Suivez-nous, ça nous aide !</p><a class="last-facebook__button" href="#"
																												title="Suivre espace P… sur Facebook"
																												rel="external">Suivre espacep</a>
				</section>
				<section class="last-facebook__comment">
					<h3 class="last-facebook__comment__title">Dernier commentaire</h3>
					<span class="last-facebook__comment__date">Le 29 septembre 2016</span>
					<div class="last-facebook__comment__text-container">
						<img class="last-facebook__comment__img"
								 src="<?php echo $images . '/logo_v2.jpg'; ?>"
								 alt="Logo de espace p…" width="89" height="89">
						<p class="last-facebook__comment__text">Le Centre De Ressources Crhs est actuellement entrain de réaliser
							une étude sur l'accompagnement sexuel et la place qu'il prend au sein du paysage wallon. Ils sont à la
							recherche de personnes en situation de handicap qui seraient prêtes à répondre à leurs questions sous
							forme…</p>
					</div>
					<a class="last-facebook__comment__link" href="#" title="Aller sur Facebook" rel="external">Lire la
						suite sur&nbsp;<span class="last-facebook__comment__facebook">Facebook</span></a>
				</section>
			</div>
		</section>
	</div>
	<div class="quote-home">
		<blockquote class="quote-home__quote">Nous soutenons, accompagnons et défendons les milliers d’hommes, de femmes
			et de transgenres.
		</blockquote>
	</div>
	<div class="wrap-bottom">
		<section class="home-mag">
			<h2 class="home-mag__title">Nous publions un magazine</h2>
			<p class="home-mag__text">Quatre fois par an, nous éditons un magazine sur le milieu de la prostitution afin
				d’informer les lecteurs et de soutenir financièrement l’organisation.<br>Soutenez-nous en vous abonnant.
			</p><a class="home-mag__button" href="<?php echo the_permalink('25'); ?>" title="Aller vers la page du magazine">S’abonner</a>
		</section>
		<section class="home-manifeste">
			<h2 class="home-manifeste__title">Signez notre manifeste</h2>
			<p class="home-manifeste__text">Montrez votre attachement à notre cause le signant !</p><a
							class="home-manifeste__button" href="<?php echo the_permalink('29'); ?>"
							title="Aller vers la page du manifeste">Lire et signer</a>
		</section>
	</div>
</main>
<?php include 'footer.php'; ?>

