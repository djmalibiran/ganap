<?php

get_header();

get_template_part( 'partials/inner', 'hero' );

if ( have_posts() ) {
    while ( have_posts() ) : ?>
        <div class="container py-5">
            <?php the_post(); ?>
        </div>
    <?php endwhile; ?>
<?php } ?>

</main>

<?php
get_footer();

?>