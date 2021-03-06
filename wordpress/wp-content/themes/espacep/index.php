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
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>
<body class="no-js main">
<div class="lang-alert">
	<a href="#" class="close-alert-lang" title="Fermer le bandeau Do you speak english?">
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20"  xml:space="preserve" >
			<path class="logo-cancel-bandeau" stroke="none" fill="#fff" d="M 1.77,-0 L 3.54,-1.77 C 3.78,-2.02 3.78,-2.41 3.54,-2.65 L 2.65,-3.54 C 2.41,-3.78 2.02,-3.78 1.77,-3.54 L 0,-1.77 -1.76,-3.54 C -2.01,-3.78 -2.41,-3.78 -2.65,-3.54 L -3.53,-2.65 C -3.78,-2.41 -3.78,-2.01 -3.53,-1.77 L -1.76,-0 -3.53,1.76 C -3.77,2 -3.77,2.4 -3.53,2.64 L -2.65,3.53 C -2.4,3.77 -2.01,3.77 -1.76,3.53 L 0,1.77 1.78,3.54 C 2.02,3.79 2.42,3.79 2.66,3.54 L 3.55,2.66 C 3.79,2.41 3.79,2.02 3.55,1.77 L 1.77,-0 Z M 0,-10 C -5.52,-10 -10,-5.52 -10,0 -10,5.53 -5.52,10 0,10 5.52,10 10,5.53 10,0 10,-5.52 5.52,-10 0,-10 Z M 0,8.13 C -4.49,8.13 -8.12,4.49 -8.12,0 -8.12,-4.48 -4.49,-8.12 0,-8.12 4.49,-8.12 8.12,-4.48 8.12,0 8.12,4.49 4.49,8.13 0,8.13 Z M 0,8.13" transform="translate(10, 10)"  />
		</svg>
		<span>Fermer le bandeau Do you speak english?</span>
	</a>
	<a lang="en" hreflang="en" title="Go to I'm Sex Worker page" href="<?php the_permalink(287); ?>">
		<strong lang="en">Do you speak English&nbsp;? Visit this page.</strong>
	</a>
</div>
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
							 class="menu__link <?php echo $thePostID == $navItem->id ? "active" : ""; ?>   <?php echo $navItem->class;?>"><?php echo $navItem->label; ?></a>
					<?php endforeach; ?>
					<a href="<?php the_permalink(241); ?>" class="menu__link menu__link-res menu__item5">Je suis un TDS</a>
					<a href="<?php the_permalink(209); ?>" class="menu__link menu__link-res menu__item6">Je suis un étudiant</a>
					<a href="<?php the_permalink(185); ?>" class="menu__link menu__link-res menu__item7">Je suis un sympathisant</a>
					<a href="<?php the_permalink(128); ?>" class="menu__link menu__link-res menu__item8">Je suis un client</a>
				</li>
			</ul>
		</div>
	</nav>
<!--	<form class="menu__search" action="<?php /*echo home_url(); */?>" method="get">
		<label class="menu__search__label" for="search"></label>
		<input class="menu__search__input" type="search" id="search" required placeholder="Rechercher">
		<input class="menu__search__submit" type="image" name="image" src="<?php /*echo $images . '/svg/search.svg'; */?>"
					 width="37"
					 height="37" alt="Bouton de recherche">
	</form>-->
	<?php get_search_form(); ?>
	<nav class="submenu">
		<h2 class="submenu__title">Choisissez votre profile</h2><a class="submenu__link submenu__link--sexworker" href="<?php echo the_permalink(241); ?>" title="Aller vers la page Je suis un travailleur du sex"><div class="submenu__content"><img class="submenu__img" src="<?php echo $images . '/button_sexworker.png'; ?>" alt="Photo des jambes d’une travailleuse du sexe" srcset="<?php echo $images . '/button_sexworker@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text submenu__text--sexworker">Je suis travailleur du sexe</span></div></a><a class="submenu__sublink" href="<?php the_permalink(287); ?>" title="Go to I'm Sex Worker page" lang="en" hreflang="en" rel="alternate">I'm sex worker and I speak English</a><a class="submenu__link" href="<?php the_permalink(209); ?>" title="Aller vers #"><div class="submenu__content"><img class="submenu__img" src="<?php echo $images . '/button_student.png'; ?>" alt="Photo d’une étudiante souriante" srcset="<?php echo $images . '/button_student@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un étudiant</span></div></a><a class="submenu__link" href="<?php the_permalink(185); ?>" title="Aller vers la page Je suis un curieux"><div class="submenu__content"><img class="submenu__img" src="<?php echo $images . '/button_curieux.png'; ?>" alt="Photo d’une personne sympathisante" srcset="<?php echo $images . '/button_curieux@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un sympathisant</span></div></a><a class="submenu__link" href="<?php the_permalink(128); ?>" title="Aller vers la page Je suis un client"><div class="submenu__content"><img class="submenu__img" src="<?php echo $images . '/button_client.png'; ?>" alt="Photo d’une personne vue de derrière portant une capuche" srcset="<?php echo $images . '/button_client@2x.png'; ?> 2x" width="82" height="82"><span class="submenu__text">Je suis un client</span></div></a>
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

			<div class="last-article-two">
			<?php $posts = new WP_Query( ['posts_per_page' => 2, 'offset' => 1, 'post_type' => 'post'] );
						if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
			?>
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

			<a href="<?php the_permalink('329'); ?>" class="home-manifeste__button">Voir tous les articles</a>

		</section>
		<section class="last-facebook">
			<h2 class="last-facebook__title">Notre dernier message sur facebook</h2>
			<div class="last-facebook__wrap">
				<section class="last-facebook__follow">
					<h3 class="last-facebook__follow__title">Suivez-nous</h3>
					<p class="last-facebook__text">Facebook est la manière la plus simple de rester informé sur notre
						activité. Suivez-nous, ça nous aide !</p><a class="last-facebook__button" href="https://www.facebook.com/Espace-P-1166947833360506"
																												title="Suivre espace P… sur Facebook"
																												rel="external">Suivre espacep</a>
				</section>
				<section class="last-facebook__comment">
					<h3 class="last-facebook__comment__title">Dernier commentaire</h3>
					
					<div class="last-facebook__comment__text-container">
						<img class="last-facebook__comment__img"
								 src="<?php echo $images . '/logo_v2.jpg'; ?>"
								 alt="Logo de espace p…" width="89" height="89">
						<?php recent_facebook_posts(array('likes' => 0, 'comments' => 0, 'number' => 1, 'show_link_previews' => 0, 'excerpt_length => 140')); ?>
					</div>
					<a class="last-facebook__comment__link" href="https://www.facebook.com/Espace-P-1166947833360506" title="Aller sur Facebook" rel="external">Lire la
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

