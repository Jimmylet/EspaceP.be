<?php

// Enregistrer une nouvelle version de jQuery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js", '', '', true);
    wp_enqueue_script('jquery');
}

// Désactiver la barre d’administration
show_admin_bar(false);

// Définir chemin raccourcis
$images = get_template_directory_uri() . '/assets/images';
$scripts = get_template_directory_uri() . '/assets/scripts';

// Enregistrer menu
register_nav_menu( 'main-nav', __('Menu principal, affiché dans le header.','b') );

// Créer les objets du menu
function b_get_menu_id( $location )
{
    $a = get_nav_menu_locations();
    if (isset($a[$location])) return $a[$location];
    return false;
}

function b_get_menu_items( $location )
{
    $navItems = [];
    foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
        $item = new stdClass();
        $item->url = $obj->url;
        $item->label = $obj->title;
        $item->icon = $obj->classes[0];
        $item->id = $obj->object_id;
        array_push($navItems, $item);
    }
    return $navItems;
}

// Postypes
register_post_type( 'contact', [
    'label' => __('Antennes','b'),
    'labels' => [
        'singular_name' => __('Antennes','b'),
        'add_new' => __('Ajouter une nouvelle antenne','b')
    ],
    'description' => __('La liste de toutes les antennes affichés sur le site.','b'),
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-email-alt',
    'supports' => ['title','thumbnail'],
    'has_archive' => false
] );

// Thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'thumb-antenne-membre', 115, 115, true );
