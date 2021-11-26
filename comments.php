<!-- Si il ya des commentaires postés (have_comments()), on entre dans la conditionIF  et on affiche le nombre de commentaires (get_comments_number()) -->
<?php if(have_comments()): ?>

    <h5 class="text-center fw-bold"><?php echo get_comments_number(); ?> commentaire(s)</h5>

<?php else: ?>

    <h5 class="text-center fw-bold">Soyer le premier donnez votre avis</h5>


<?php endif; ?>

<!-- cette condition détermine si il a plus d'une page de commentaire afin de pouvoir générer une paggination -->
<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>

<nav>
    <!-- previous_comments_link() : fonction wordpress, permet de créeer un lien <a></a> afin de consulter les pages de commentaires précédentes en cas de paggination -->
    <?php previous_comments_link( __('&larr; Commentaire précedent', 'portfolio') ); ?>
    <!-- next_comments_link() : fonction wordpress, permet de créer un lien <a></a> afin de consulter les pages de commentaires suivantes en cas de paggination -->
    <?php next_comments_link( __('Commentaires suivant &rarr;', 'portfolio') ); ?>
</nav>

<?php endif; ?>

<!-- wp_list_comments() : foncrion wordpress qui retourne l'ensemble des commentaire posté d'un article  -->
<p class="my-3">
<?php wp_list_comments(); ?>
</p>