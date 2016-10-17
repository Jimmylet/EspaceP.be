<?php
/*
Template Name: Statut
*/
include 'meta.php';?>

<body class="no-js no-main statut">
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

<!-- Display the content of page statut -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
endwhile; else: ?>
	<p>Désolé, il n’y a aucun contenu sur cette page.</p>
<?php endif; ?>

<!-- End display the content of page statut -->

<?php include 'footer.php'; ?>
