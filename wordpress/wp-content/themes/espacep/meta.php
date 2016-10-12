<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo the_title(); ?> - <?php echo bloginfo(); ?></title>
    <meta name="description" content="<?php echo the_field("meta-description"); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/main.css'; ?>" type="text/css">
    <?php wp_head(); ?>
</head>
