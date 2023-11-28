<?php
/**
 * The Hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ganap
 */
?>

<!-- HERO Section -->
<?php
$event_hero_section = get_field( 'event_hero_section' );
$event_title = $event_hero_section['event_title'];
$event_date = $event_hero_section['event_date'];
$event_short_description = $event_hero_section['event_short_description'];
$event_learn_more_button = $event_hero_section['event_learn_more_button'];
$event_background = $event_hero_section['event_background'];
?>

<?php if ( $event_hero_section ): ?>
    <!-- Hero Main Wrapper -->
    <div id="hero" class="position-relative py-5 text-center" <?php echo (!$event_background) ? null : 'style="background-image: url(' . esc_url($event_background["url"]) . '); background-position: center; background-size: cover;"'; ?>>
        <!-- Semi-transparent Black Overlay -->
        <div class="d-flex position-absolute w-100 h-100 top-0 right-0 bottom-0 left-0 z-0 bg-black bg-opacity-50 user-select-none pe-none" role="presentation" tabindex="0"></div>

        <!-- Hero Content Container -->
        <div class="container py-5 my-5 position-relative z-1">

            <!-- Event Title -->
            <?php if ( ! empty( $event_title ) ): ?>
                <h1 class="display-1 text-white"><?php echo esc_html( $event_title ); ?></h1>
            <?php endif; ?>

            <!-- Event Time -->
            <?php if ( ! empty( $event_date ) ): ?>
                <p class="d-block display-6 mb-3 text-white" style="--bs-text-opacity: .95;"><?php echo esc_html( $event_date ); ?></p>
            <?php endif; ?>
            
            <!-- Event Short Description -->
            <?php if ( ! empty( $event_short_description ) ): ?>
                <div class="col-lg-8 mx-auto lead text-white" style="--bs-text-opacity: .75;">
                    <?php echo wp_kses_post( $event_short_description ); ?>
                </div>
            <?php endif; ?>

            <!-- Event Read More Link -->
            <?php if ( ! empty($event_short_description ) ): ?>
                <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $event_learn_more_button['url'] ); ?>" target="<?php echo esc_attr( $event_learn_more_button['target'] ? $event_learn_more_button['target'] : '_self' ); ?>" role="button"><?php echo esc_html( $event_learn_more_button['title'] ); ?></a>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>
<!-- /HERO Section -->