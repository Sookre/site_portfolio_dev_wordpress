<?php get_header(); ?>

    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="my-5">404 Not Found</h1>

        <h4 class="mb-5">Page non trouvée</h4>

        <h5 class="mb-3">Il semble que rien n'ait été trouvé à cet endroit. Essayez peut-être une recherche ?</h5>

            <div>
                <?php get_search_form(); ?>
            </div>

            <p class="my-5">
                <a href="<?= home_url(); ?>" class="text-dark link-404"><i class="far fa-handpoint-left"></i>RETOUR A LA PAGE D'ACCUEIL</a>
            </p>
    </div>

<?php get_footer(); ?>