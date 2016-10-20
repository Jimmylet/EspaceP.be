<!DOCTYPE html>
<html lang="fr">
<head>
	<title><?php echo the_title(); ?> - <?php echo bloginfo(); ?></title>
	<meta name="description" content="<?php echo the_field("meta-description"); ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
	<?php if (is_post_type('contact')): ?>
		<?php if( have_rows('antennes_équipe') ):
			while ( have_rows('antennes_équipe') ) : the_row(); ?>
				<?php $image = get_field('antennes_map'); ?>
				<?php $imageResponsive = get_field('antennes_map-res'); ?>
	<style>
		.contact .maps__img{
			background-image: url("<?php echo $image['url']; ?>");
		}
		@media screen and ( max-width: 482px ){
			.contact .maps__img{
				background-image: url("<?php echo $imageResponsive['url']; ?>");
			}
		}
	</style>
				<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>
</head>
