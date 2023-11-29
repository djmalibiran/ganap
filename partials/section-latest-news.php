<?php
/**
 * The template for displaying Latest News and a button to main blog page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ganap
 */
?>

<aside class="bg-light py-5">
    <div class="container py-5">
        <h2 class="text-center mb-5">Latest News</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $recent_posts = wp_get_recent_posts(
                array(
                    'numberposts' => 6,
                    'post_status' => 'publish',
                )
            );

            foreach ( $recent_posts as $post_item ): ?>
                <div class="col">
                    <article class="card h-100 bg-white">

                        <!-- Post Thumbnail -->
                        <?php echo wp_get_attachment_image( get_post_thumbnail_id( $post_item["ID"] ), 'large', false, array( 'class'=> 'img-fluid card-img-top', 'loading' => 'lazy', 'decoding' => 'async' ) ); ?>
                        
                        <div class="card-body">

                            <!-- Post Title -->
                            <h3 class="card-title">
                                <a href="<?php echo esc_url( get_permalink( $post_item["ID"] ) ); ?>" class="stretched-link text-primary-emphasis link-offset-1 link-offset-2-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                    <?php echo esc_html( $post_item["post_title"] ); ?>
                                </a>
                            </h3>

                            <!-- Post Excerpt -->
                            <?php if ( ! has_excerpt( $post_item["ID"] ) ): ?>
                                <p class="card-text text-body-secondary"><?php echo wp_trim_words( $post_item["post_content"], 20, '...' ); ?></p>
                            <?php else: ?>
                                <p class="card-text text-body-secondary"><?php echo get_the_excerpt( $post_item["ID"] ); ?></p>
                            <?php endif; ?>

                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</aside>