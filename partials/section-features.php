<?php
/**
 * The Features section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ganap
 */
?>

<!-- FEATURES Section -->
<?php
$features = get_field( 'features' );
$features_left_aligned_title = $features['left_aligned_title'];
$features_text_beneath_the_heading = $features['text_beneath_the_heading'];
$features_button = $features['button'];
$features_feature_1_img = $features['feature_1_image'];
$features_feature_1_title = $features['feature_1_title'];
$features_feature_1_text = $features['feature_1_text'];
$features_feature_2_img = $features['feature_2_image'];
$features_feature_2_title = $features['feature_2_title'];
$features_feature_2_text = $features['feature_2_text'];
$features_feature_3_img = $features['feature_3_image'];
$features_feature_3_title = $features['feature_3_title'];
$features_feature_3_text = $features['feature_3_text'];
$features_feature_4_img = $features['feature_4_image'];
$features_feature_4_title = $features['feature_4_title'];
$features_feature_4_text = $features['feature_4_text'];
?>

<?php if ( $features ): ?>
    <div id="features" class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">

            <!-- Feature Title Wrapper -->
            <div class="col d-flex flex-column align-items-start gap-2">
                <!-- Feature Title -->
                <?php if ( ! empty( $features_left_aligned_title ) ): ?>
                    <h2 class="fw-bold text-body-emphasis"><?php echo esc_html( $features_left_aligned_title ); ?></h2>
                <?php endif; ?>

                <!-- Feature Sub-text -->
                <?php if ( ! empty( $features_text_beneath_the_heading ) ): ?>
                    <div class="text-body-secondary">
                        <?php echo wp_kses_post( $features_text_beneath_the_heading ); ?>
                    </div>
                <?php endif; ?>

                <!-- Feature Button -->
                <?php if ( ! empty( $features_button ) ): ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $features_button['url'] ); ?>" target="<?php echo esc_attr( $features_button['target'] ? $features_button['target'] : '_self' ); ?>" role="button"><?php echo esc_html( $features_button['title'] ); ?></a>
                <?php endif; ?>

            </div>
            
            <!-- Feature List Wrapper-->
            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">

                    <!-- Feature 1 -->
                    <?php if ( ! empty( $features_feature_1_title ) ): ?>
                        <div class="col d-flex flex-column gap-2">

                            <!-- Feature 1 Image -->
                            <?php if ( ! empty( $features_feature_1_img ) ): ?>
                                <?php echo wp_get_attachment_image( $features_feature_1_img['id'], array( '48', '48' ), true, array( 'class'=> 'img-fluid', 'loading'=> 'lazy' ) ); ?>
                            <?php endif; ?>

                            <!-- Feature 1 Title -->
                            <h3 class="fw-semibold mb-0 text-body-emphasis"><?php echo esc_html( $features_feature_1_title ); ?></h3>

                            <!-- Feature 1 Text -->
                            <?php if ( ! empty( $features_feature_1_text ) ): ?>
                                <div class="text-body-secondary">
                                    <?php echo wp_kses_post( $features_feature_1_text ); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <!-- Feature 2 -->
                    <?php if ( ! empty( $features_feature_2_title ) ): ?>
                        <div class="col d-flex flex-column gap-2">

                            <!-- Feature 2 Image -->
                            <?php if ( ! empty( $features_feature_2_img ) ): ?>
                                <?php echo wp_get_attachment_image( $features_feature_2_img['id'], array( '48', '48' ), true, array( 'class'=> 'img-fluid', 'loading'=> 'lazy' ) ); ?>
                            <?php endif; ?>

                            <!-- Feature 2 Title -->
                            <h3 class="fw-semibold mb-0 text-body-emphasis"><?php echo esc_html( $features_feature_2_title ); ?></h3>

                            <!-- Feature 2 Text -->
                            <?php if ( ! empty( $features_feature_2_text ) ): ?>
                                <div class="text-body-secondary">
                                    <?php echo wp_kses_post( $features_feature_2_text ); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <!-- Feature 3 -->
                    <?php if ( ! empty( $features_feature_3_title ) ): ?>
                        <div class="col d-flex flex-column gap-2">

                            <!-- Feature 3 Image -->
                            <?php if ( ! empty( $features_feature_3_img ) ): ?>
                                <?php echo wp_get_attachment_image( $features_feature_3_img['id'], array( '48', '48' ), true, array( 'class'=> 'img-fluid', 'loading'=> 'lazy' ) ); ?>
                            <?php endif; ?>

                            <!-- Feature 3 Title -->
                            <h3 class="fw-semibold mb-0 text-body-emphasis"><?php echo esc_html( $features_feature_3_title ); ?></h3>

                            <!-- Feature 3 Text -->
                            <?php if ( ! empty( $features_feature_3_text ) ): ?>
                                <div class="text-body-secondary">
                                    <?php echo wp_kses_post( $features_feature_3_text ); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                    <!-- Feature 4 -->
                    <?php if ( ! empty( $features_feature_4_title ) ): ?>
                        <div class="col d-flex flex-column gap-2">

                            <!-- Feature 4 Image -->
                            <?php if ( ! empty( $features_feature_4_img ) ): ?>
                                <?php echo wp_get_attachment_image( $features_feature_4_img['id'], array( '48', '48' ), true, array( 'class'=> 'img-fluid', 'loading'=> 'lazy' ) ); ?>
                            <?php endif; ?>

                            <!-- Feature 4 Title -->
                            <h3 class="fw-semibold mb-0 text-body-emphasis"><?php echo esc_html( $features_feature_4_title ); ?></h3>

                            <!-- Feature 4 Text -->
                            <?php if ( ! empty( $features_feature_4_text ) ): ?>
                                <div class="text-body-secondary">
                                    <?php echo wp_kses_post( $features_feature_1_text ); ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
            
        </div>
    </div>
<?php endif; ?>
<!-- /FEATURES Section -->