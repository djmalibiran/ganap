<?php
/**
 * The template for displaying an image and a group of text.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ganap
 */
?>

<!-- Featured Image Section -->
<?php
$featured_img = get_field( 'acf_featured_img' );

if ( $featured_img ) :
    $fi_image       = $featured_img['fi_image'];
    $fi_heading     = $featured_img['fi_heading'];
    $fi_text        = $featured_img['fi_text'];
    ?>
    <section class="container py-5 border-top">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                <div class="col">
                    <!-- Featured Image -->
                    <?php if ( ! empty( $fi_image ) ): ?>
                        <?php echo wp_get_attachment_image( $fi_image['id'], 'large', false, array( 'class'=> 'img-fluid', 'loading'=> 'lazy' ) ); ?>
                    <?php endif; ?>
                </div>

                <!-- Featured Image Title Wrapper -->
                <div class="col d-flex flex-column align-items-start gap-2">
                    <!-- Feature Title -->
                    <?php if ( ! empty( $fi_heading ) ): ?>
                        <h2 class="fw-bold text-body-emphasis"><?php echo esc_html( $fi_heading ); ?></h2>
                    <?php endif; ?>

                    <!-- Feature Sub-text -->
                    <?php if ( ! empty( $fi_text ) ): ?>
                        <div class="text-body-secondary">
                            <?php echo wp_kses_post( $fi_text ); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- /Featured Image Section -->