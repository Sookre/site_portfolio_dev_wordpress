

    <form method="get" action="<?= home_url('/') ?>">
        <input class="form-control" value="<?= get_search_query()?> " id="s" name="s" 
        type="text" placeholder="Rechercher" aria-label="Search">
    </form>

<!-- home_url() : renvoie l'url de la page d'accueil du site -->
