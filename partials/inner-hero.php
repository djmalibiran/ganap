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
$page_title = get_the_title();
$page_id = get_queried_object_id();

if ( is_page() && ! empty( $page_title ) ) : ?>
    <!-- Hero Main Wrapper -->
    <div id="hero" class="position-relative py-5 text-center" <?php echo ( ! has_post_thumbnail( $page_id ) ) ? null : 'style="background-image: url(' . esc_url( wp_get_attachment_image_url( get_post_thumbnail_id( $page_id ), 'full' ) ) . '); background-position: center; background-size: cover;"'; ?>>
         <!-- Semi-transparent Black Overlay -->
         <div class="d-flex position-absolute w-100 h-100 top-0 right-0 bottom-0 left-0 z-0 bg-black bg-opacity-50 user-select-none pe-none" role="presentation" tabindex="0"></div>
            <!-- Hero Content Container -->
            <div class="container py-5 my-5 position-relative z-1">
                <!-- Page Title -->
                <h1 class="display-1 text-white"><?php echo esc_html( $page_title ); ?></h1>
            </div>
        </div>
    </div>
<?php
elseif ( is_archive() ) : ?>
    <!-- Hero Main Wrapper -->
    <div id="hero" class="position-relative py-5 text-center bg-secondary-subtle">
            <!-- Hero Content Container -->
            <div class="container py-5 my-5 position-relative z-1">
                <!-- Page Title -->
                <h1 class="display-1"><?php echo the_archive_title() ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>