<?php

get_header();

get_template_part( 'partials/inner', 'hero' );

?>

<?php
/* Start the Loop */
while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'container py-5' ); ?>>
        <?php the_content(); ?>
    </article>
<?php endwhile; ?>

<!-- Close the Main tag -->
</main>

<?php
get_footer();

?>