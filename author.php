<?php get_header(); ?>

<h1 class="text-center my-5">A propos de : <?php echo $curauth->nickname ; ?></h1>

<div class="card text-center col-12 col-sm-10 col-md-8 col-lg-8 col-xl-8 p-3 mx-auto mb-5 shadow-sm">

<!-- Ceci définit la variable $curauth -->

<?php
// cette conditionpermet de selectionner les données de l'utilisateur de la bdd
$curauth =(isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>


<dl>
    <?php
    // date au format francais 
    $date = new DateTime($curauth->user_registered);
    $newDate = $date->format('d/m/Y H:i:s');
    ?>

    <dt>Membre depuis le :</dt>
    <dd><?php echo $dateFr; ?></dd>

    <dt>Prénom</dt>
    <dd><?php echo $curauth->first_name; ?></dd>

    <dt>Nom</dt>
    <dd><?php echo $curauth->last_name; ?></dd>

    <dt>Site Web</dt>
    <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>

    <dt>Profil</dt>
    <dd><?php echo $curauth->user_description; ?></dd>
</dl>

    <h2 class="text-center">Publication(s) de <?php echo $curauth->nickname ; ?></h2>

    <ul>
        <!-- la boucle -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent : <?php the_title(); ?>">
        <?php the_title(); ?></a>,&nbsp;
        <?php the_time('d M Y'); ?> dans <?php the_category('&');?>
        </li>

        <?php endwhile; else: ?>

            <p><?php _e('Aucun article de cet auteur.');?></p>
        <?php endif; ?>

    <!-- fin de boucle -->

    </ul>

</div>

<?php get_footer(); ?>
