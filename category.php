<?php get_header(); ?><!-- fonction wordpress (non native de php) permettant d'inclure la partie header du site, permettant d'inclure le fichier header.php -->

<!-- la boucle WHILE permet de charger les données ou les articles stocké en BDD -->
<!-- Si des articles sont stockés en BDD, on entre dans la condition IF -->
<!-- have_posts() : fonction wordpress qui determine si il y a des publications à bouclier en BDD -->
<?php if( have_posts() ): 
?>

    <h1 class="text-center"><?php single_cat_title('Catégorie : '); ?></h1>
    <!-- single_cat_title() : fonction wordpress permettant d'afficher le nom de la catégorieselectionné -->

    <div class="container-fluid mb-5">
        <div class="d-flex flex-wrap justify-content-around">

            <?php
                        while(have_posts()): 
                            the_post();
            ?>

          <div class="col-3 card bg-white shadow-sm px-3 pt-2">

                    <div class="col-12 img-thumbnail border-0 mb-3 text-center">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <h4 class="text-center my-4"><a href="<?php the_permalink();?>" class="text-dark link-article"><?php the_title(); ?></a></h4>

                    <!-- the_permalink() : fonction wordpress qui retourne l'url de l'article  -->
                    <!-- the_title() : fonction wordpresse qui retourne le titre de l'article -->
                    <!--  the_content() : fonction qui retourne le contenu de l'article -->
                    
                    <p class='text-center'>
                        <small>Publié le <?php the_time('d/m/Y à H:i:s'); ?> par <strong><?php the_author_posts_link(); ?><</strong></small>
                        <br>
                        <small>Catégorie(s): <?php the_category(',') ?></small>
                    </p>

                    <p class="text-justify">
                        <?php the_excerpt(); ?>
                    </p>

            </div>

                    <?php
                    endwhile;
                    ?>

        </div>
    </div>                
        <?php
        else:
        ?>
            <p>Aucun contenu posté...</p>

<?php endif; ?>


<?php get_footer(); ?><!-- fonction wordpress (non native de php) permettant d'inclure la partie footer du site, permettant d'inclure le fichier header.php -->