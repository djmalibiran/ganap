<?php

get_header();

get_template_part( 'partials/inner', 'hero' );

$args = array(
	'post_type'     => 'post',
    'post_status'   => 'publish',
);

// The Query.
$the_query = new WP_Query( $args );

// The Loop.
if ( $the_query->have_posts() ) : ?>
	<div class="container">
        <div class="row row-cols-1 row-cols-lg-2 g-4 py-5">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4 position-relative">
                            <?php ( ! has_post_thumbnail() ) ? null : the_post_thumbnail( 'medium_large', array( 'class' => 'position-absolute w-100 h-100 img-fluid object-fit-cover' ) ); ?>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h2 class="card-title h5">
                                    <a href="<?php the_permalink(); ?>" class="stretched-link text-primary-emphasis link-offset-1 link-offset-2-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <p class="card-text"><?php echo ( has_excerpt() ) ? get_the_excerpt() : wp_trim_words( get_the_content(), 20, '...' );  ?></p>
                                <p class="card-text">
                                    <small class="text-body-secondary">Published on <?php echo get_the_date(); ?></small>
                                </p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
	    </div>
	</div>
<?php endif; ?>


<?php
// Restore original Post Data.
wp_reset_postdata();
?>

</main>

<?php
get_footer();

?>
