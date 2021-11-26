<?php
// On crée un HOOK ! c'est a dire qu'on se branche à une fonction de wordpress (widgets_init) afin d'en modifier son comportement, on acroche une fonction de wordpress afin de pouvoir s'en servir 
// widgets_init() : fonction wordpress permettant de créer des régions, des zones de widgets

// add_action('fonction_wordpress', 'notre_fonction')
add_action('widgets_init', 'portfolio_init_sidebar'); 

add_action('init', 'portfolio_init_menu');

add_action('the_excerpt', 'excerpt_read_more_link');

add_action('after_setup_theme', 'picture_post_thumbnails');

function portfolio_init_sidebar()
{
    // register_sidebar() : fonction wordpress permettant de créeer des zones de widgets 
    // on fournit à la fonction un tableau ARRAY contenant les parametres des zones de widget

    // REGION HEADER
    //haut-gauche
    register_sidebar([
        'name' => __('Haut-gauche', 'portfolio-wp'),
        'id' => 'haut-gauche',
        'description' => __('Région en haut à gauche', 'portfolio-wp')
    ]);

    //haut-centre
    register_sidebar([
        'name' => __('Haut-centre', 'portfolio-wp'),
        'id' => 'haut-centre',
        'description' => __('Région en haut au centre', 'portfolio-wp')
    ]);

    //haut-droit
    register_sidebar([
        'name' => __('Haut-droit', 'portfolio-wp'),
        'id' => 'haut-droite',
        'description' => __('Région en haut à droite', 'portfolio-wp')
    ]);

    //REGION CENTRE

    // centre
    register_sidebar([
        'name' => __('Centre', 'portfolio-wp'),
        'id' => 'centre',
        'description' => __('Région au centre', 'portfolio-wp')
    ]);

    //REGION FOOTER

     //bas-gauche
     register_sidebar([
        'name' => __('Bas-gauche', 'portfolio-wp'),
        'id' => 'bas-gauche',
        'description' => __('Région en bas à gauche', 'portfolio-wp')
    ]);


     //bas-centre
     register_sidebar([
        'name' => __('Bas-centre', 'portfolio-wp'),
        'id' => 'bas-centre',
        'description' => __('Région en bas à centre', 'portfolio-wp')
    ]);


     //bas-droit
     register_sidebar([
        'name' => __('Bas-droit', 'portfolio-wp'),
        'id' => 'bas-droit',
        'description' => __('Région en bas à droite', 'portfolio-wp')
    ]);


     //bas-end
     register_sidebar([
        'name' => __('Bas-end', 'portfolio-wp'),
        'id' => 'bas-end',
        'description' => __('Région en bas end', 'portfolio-wp')
    ]);
}

function portfolio_init_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'portfolio'));
    // register_nav_menu() : fonction wordpress permettant de déclarer ici le menu principal de notre thème 'portfolio' qui contient les pages intégrées dans la création du menu backoffice
}

function excerpt_read_more_link($output)
{
    global $post;
    return $output . '<p class="d-flex align-items-end justify-content-center h-100"><a href="' . get_permalink($post->ID) . '" class="btn btn-dark">Lire la suite</a>';
    //On concatène l'extrait de l'article avec le lien pour lire la suite
    // get_permalink($post->ID) : retourne l'adresse url de l'article en fonction de son ID transmit en argument
}

function picture_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_filter('pre_get_posts','my_search_filter');

function my_search_filter( $query )
{
    // Determine si la demande actuelle ne concerne pas une par d'interface administration
        if (!is_admin()){

            if ( $query->is_search){
                $query->set('post_type', 'post'); // pur exclure les pages
            }
        }
}