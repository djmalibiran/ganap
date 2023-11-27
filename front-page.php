<?php

get_header();

?>

<!-- HERO Section -->
<?php
$event_hero_section = get_field( 'event_hero_section' );
$event_title = $event_hero_section['event_title'];
$event_date = $event_hero_section['event_date'];
$event_short_description = ( ! $event_hero_section['event_short_description'] ) ? null : $event_hero_section['event_short_description'];
$event_learn_more_button = $event_hero_section['event_learn_more_button'];
?>

<?php if ( $event_hero_section ): ?>
    <div id="hero" class="container py-5 text-center">
        <div class="py-5 my-5">
            <h1 class="display-1"><?php echo ( ! $event_title ) ? null : esc_html( $event_title ); ?></h1>
            <time class="d-block display-6 mb-3"><?php echo ( ! $event_date ) ? null : esc_html( $event_date ); ?></time>
            <?php echo ( ! $event_short_description ) ? null : wp_kses_post( $event_short_description ); ?>
            <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $event_learn_more_button['url'] ); ?>" target="<?php echo esc_attr( $event_learn_more_button['target'] ? $event_learn_more_button['target'] : '_self' ); ?>" role="button"><?php echo esc_html( $event_learn_more_button['title'] ); ?></a>
        </div>
    </div>
<?php endif; ?>
<!-- /HERO Section -->

<?php
get_template_part( 'partials/content', 'page' );

get_footer();