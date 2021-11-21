<?php
/*------------------------------------*\
	Functions
\*------------------------------------*/
//Ajout de l'image à la une
add_theme_support( 'post-thumbnails' );

//Ajout des extraits sur les pages
add_post_type_support( 'page', 'excerpt' );


remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );

//Définition de l'emplacement des menus
function define_menus()
{
    register_nav_menus( array( // On utilise un tableau afin de pouvoir spécifier la position de plusieurs menus
                               'header-menu' => __( 'Navigation principal', 'html5-blank' ), // Main Navigation
                        ) );
}
add_action( 'init', 'define_menus' );

/*---------------------------------------------------------------------*\
	Déclaration d'un type de contenu personnalisé - Custom Post Types
\*---------------------------------------------------------------------*/
function custom_post_types()
{
    register_post_type(
        'test',
        array(
            'label'           => 'Un post type',
            'labels'          => array(
                'name'               => 'Post types',
                'singular_name'      => 'Post type',
                'all_items'          => 'Tous',
                'add_new_item'       => 'Ajouter',
                'edit_item'          => 'Éditer',
                'new_item'           => 'Nouveau',
                'view_item'          => 'Voir',
                'search_items'       => 'Rechercher',
                'not_found'          => 'Pas de résultat',
                'not_found_in_trash' => 'Pas de résultat dans la corbeille',
            ),
            'public'          => true,
            'capability_type' => 'post',
            'supports'        => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
            ),
            'has_archive'     => true,
        )
    );
}
add_action( 'init', 'custom_post_types' );

/*---------------------------------------------------------------------*\
	Déclaration d'une taxonomie personnalisée
\*---------------------------------------------------------------------*/
//function custom_taxonomies()
//{
//    register_taxonomy(
//        'taxonomy-test', 'test',
//        array(
//            'hierarchical' => true,
//            'label'        => 'Type de projet',
//            'show_ui'      => true,
//            'query_var'    => 'type-projet',
//        )
//    );
//}
//add_action( 'init', 'custom_taxonomies' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

function wp_enqueue_woocommerce_style(){
    wp_register_style( 'bloggersprout-woocommerce', get_template_directory_uri() . '/css/main.css' );
    
    if ( class_exists( 'woocommerce' ) ) {
        wp_enqueue_style( 'bloggersprout-woocommerce' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );