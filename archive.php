<?php get_header(); ?>

    <h1>Archives</h1>

    <div>
        <h5>Dernier article publié : </h5>
        <p><?php the_post(); ?></p>
        <h6><?php the_title();?></h6>
    </div>



    <hr class="col-6 mx-auto bg-secondary">

    <h5>Recherche : </h5>
    <?php get_search_form(); ?>

    <hr class="col-6 mx-auto bg-secondary">

    <div class="d-flex dlex-column align-items-center">
        <h5>Archives par mois : </h5>
        <?php wp_get_archives('type=monthly') ?>

        <hr class="col-6 mx-auto bg-secondary">

        <h5>Archives par mois : </h5>
        <?php wp_list_categories('type=monthly') ?>

    </div>



<?php get_footer(); ?>