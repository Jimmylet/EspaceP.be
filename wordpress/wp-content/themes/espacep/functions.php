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
