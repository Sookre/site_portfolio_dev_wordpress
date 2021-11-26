<?php get_header(); ?><!-- fonction wordpress (non native de php) permettant d'inclure la partie header du site, permettant d'inclure le fichier header.php -->

<!-- la boucle WHILE permet de charger les données ou les articles stocké en BDD -->
<!-- Si des articles sont stockés en BDD, on entre dans la condition IF -->
<!-- have_posts() : fonction wordpress qui determine si il y a des publications à bouclier en BDD -->
<?php if( have_posts() ): 
            while(have_posts()): 
                the_post();
?>

    <h1 class="text-center my-4"><a href="<?php the_permalink();?>" class="text-dark link-article"><?php the_title(); ?></a></h1>

    <!-- the_permalink() : fonction wordpress qui retourne l'url de l'article  -->
    <!-- the_title() : fonction wordpresse qui retourne le titre de l'article -->
    <!--  the_content() : fonction qui retourne le contenu de l'article -->

    <div class="container">
        <?php the_content(); ?>
    </div>

<?php
    endwhile;
 else:
 ?>
    <p>Aucun contenu posté...</p>

<?php endif; ?>


<?php get_footer(); ?><!-- fonction wordpress (non native de php) permettant d'inclure la partie footer du site, permettant d'inclure le fichier header.php -->