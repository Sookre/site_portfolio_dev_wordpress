<!doctype html>
<html <?php language_attributes();?>>
<html lang="en">
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500&family=Estonia&family=Source+Code+Pro&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

    <title><?php bloginfo('name'); ?></title>

    <!-- bloginfo() : fonction wordpress qui retourne certaines données en fonction de l'argument envoyé ( encodage, url du thème, le nom du thème, la langue du site etc ...) -->
    <!-- wp_head() et wp_footer() : fonction wordpress permettant de charger des fichiers indispensables de wordpress (script js, fichier css) afin de charger la barre administrative en haut de page -->

   <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!-- fonction de wordpress qui génère des classes affectés a la balise <body>, ces classes permettent d'affecté la mise en  -->

  <header class="container-fluid d-flex p-0">

    <div class="col-3 zone-haut">
        <!-- dynamic_sidebar() : fonction permettant de faire appel a une zone de widget déclar& dans le fichier function.php 
             en arguement, on lui transmet l'identifiant de la zone de widget définir dans la fonction register_sidebar() -->
        <?php dynamic_sidebar('haut-gauche'); ?>
    </div>

    <div class="col-6 zone-haut d-flex flex-column align-items-center justify-content-center">
        <?php dynamic_sidebar('haut-centre'); ?>
    </div>

    <div class="col-3 zone-haut d-flex flex-column align-items-center justify-content-center">
        <?php dynamic_sidebar('haut-droit'); ?>
    </div>

  </header>

  <nav class="navbar navbar-expand-lg navbar-dark  navigation-wp" aria-label="Fifth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto ">

          <?php
          // wp_nav_menu() : fonction wordpress permettant d'integrer le menu principal 'primary déclaré das le fichier function.php -> portfolio_init_menu()
          wp_nav_menu([
            'container_class'=> 'munu-header',
            'theme_location'=> 'primary'
          ]); 
          ?>
           
          
        </ul>
          <?php get_search_form(); ?>
      </div>
    </div>
  </nav>

  <main class="container-fluid main-wp p-0">

        <div class="container-fluid p-0 zone-centre mx-auto">
            <?php dynamic_sidebar('centre'); ?>
        </div>
