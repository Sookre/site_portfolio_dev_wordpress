<?php get_header(); ?>

<?php if( have_posts() ): 
?>

    <?php printf( __('<h3 class="text-center my-5">Résultat de la recherche : <strong>%s</strong></h3>'), get_search_query()); ?>

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

                    <p class='text-center'>
                        <small>Publié le <?php the_time('d/m/Y à H:i:s'); ?> par <strong><?php the_author(); ?></strong></small>
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


<?php get_footer(); ?>