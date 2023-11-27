<?php

get_header();

?>

<!-- HERO Section -->
<?php if ( get_field('event_hero_section' ) ): ?>
    <div id="hero" class="container py-5 text-center">
        <div class="py-5 my-5">
            <h1 class="display-1"><?php echo ( ! get_field( 'event_title' ) ) ? null : esc_html( get_field('event_title') ); ?></h1>
            <time class="d-block display-6 mb-3"><?php echo ( ! get_field( 'event_date' ) ) ? null : esc_html( get_field('event_date') ); ?></time>
            <?php echo ( ! the_field( 'event_short_description' ) ) ? null : esc_html( the_field('event_short_description') ); ?>
        </div>
    </div>
<?php endif; ?>
<!-- /HERO Section -->

<?php
get_template_part( 'partials/content', 'page' );

get_footer();