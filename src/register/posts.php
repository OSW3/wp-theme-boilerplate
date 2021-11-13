<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * Use this file to define custom post will be created when installing the theme.
 * 
 * @since: 1.0.0
 * @version: 1.0.0
 * 
 */ if (!defined('ABSPATH')) exit;



$labels = array(
    // Le nom au pluriel
    'name'                => __( 'Séries TV', 'Post Type General Name'),
    // Le nom au singulier
    'singular_name'       => __( 'Série TV', 'Post Type Singular Name'),
    // Le libellé affiché dans le menu
    'menu_name'           => __( 'Séries TV'),
    // Les différents libellés de l'administration
    'all_items'           => __( 'Toutes les séries TV'),
    'view_item'           => __( 'Voir les séries TV'),
    'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
    'add_new'             => __( 'Ajouter'),
    'edit_item'           => __( 'Editer la séries TV'),
    'update_item'         => __( 'Modifier la séries TV'),
    'search_items'        => __( 'Rechercher une série TV'),
    'not_found'           => __( 'Non trouvée'),
    'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
);
    
$args = array(
    'label'         => __( 'Séries TV'),
    'description'   => __( 'Tous sur séries TV'),
    'labels'        => $labels,
    'supports'      => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

    'show_in_rest'  => true,
    'hierarchical'  => false,
    'public'        => true,
    'has_archive'   => true,
    'rewrite'       => array( 'slug' => 'series-tv'),
);


return [
    [
        'type' => "my-custom-post",
        'properties' => $args,
    ]
];