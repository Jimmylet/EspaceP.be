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

register_nav_menu( 'city-nav', __('Menu des villes, affiché sur la page contact.','b') );

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
        $item->class = $obj->classes[0];
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
add_image_size( 'thumb-partenaires', 270, 250);
add_image_size('thumb-article-home', 610, 415);


// Delete URL from form
function disable_comment_url($fields) {
    $fields = array(
        'author' =>
            '<div class="comment-wrap-top"> <div class="comment-name-wrap"><p class="comment-form-author"><label for="author">' . __( 'Nom&nbsp;:', 'domainreference' ) . '</label> ' .
            '<input id="author" required name="author" type="text" placeholder="Votre nom ou pseudo" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' /></p></div>',
        'email' =>
            '<div class="comment-mail-wrap"><p class="comment-form-email"><label for="email">' . __( 'Adresse email&nbsp;:', 'domainreference' ) . '</label> ' .
            '<input id="email" required name="email" type="text" placeholder="Votre adresse email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' /></p></div></div>',
    );
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','disable_comment_url');

// Deplace form textarea after inputs
function move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'move_comment_field_to_bottom' );

// Add placeholder to comment textarea
function textarea_placeholder( $fields )
{
    $fields['comment_field'] = str_replace(
        '<textarea',
        '<textarea placeholder="Votre commentaire"',
        $fields['comment_field']
    );
    return $fields;
}
add_filter( 'comment_form_defaults', 'textarea_placeholder' );

// Breadcrumb page
function the_breadcrumb()
{
    echo '<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">';
    if (!is_home()) {
        echo '<li class="breadcrumb__link"  itemprop="
itemListElement"><a class="breadcrumb__link__text breadcrumb__link__text--home" href="';
        echo get_home_url();
        echo '"><span class=';
        echo 'breadcrumb__link__text--hidden>';
        echo _e('Accueil', 'b');
        echo "</span></a></li>";
        echo '<li class="breadcrumb__link" itemprop="
itemListElement"><a class="breadcrumb__link__text" href="';
        echo the_permalink();
        echo '">';
        the_title();
        echo '</a></li>';
        echo '</ol>';
    }
}

// Create function for is_post_type
function is_post_type($type){
	global $wp_query;
	if($type == get_post_type($wp_query->post->ID)) return true;
	return false;
}


// upload svg
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Excerpt
function custom_excerpt($new_length = 25, $new_more = '…') {
      // use the variable passed from $new_length as the length of the excerpt
      add_filter('excerpt_length', function () use ($new_length) {
            return $new_length;
      }, 999);
      // determine what comes at the end of the excerpt (in this case ...)
      add_filter('excerpt_more', function () use ($new_more) {
            return $new_more;
      });
      // generate the current excerpt
      $output = get_the_title();
      // use wptexturize to basically sanitize the excerpt
      $output = apply_filters('wptexturize', $output);
      // convert_chars to remove metadata tags and convert others to unicode
      $output = apply_filters('convert_chars', $output);
      // the above line may not be needed depending on the status of wpautop
      // echo that sucker
      echo $output;
}