<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ganap
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> data-bs-theme="dark">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#primary">
        <?php esc_html_e('Skip to content', 'your-theme-name'); ?>
    </a>

    <header>

        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <?php
                    /**
                     * Display the custom logo image if one is set or a text fallback.
                     *
                     * @package Ganap
                     */
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image($custom_logo_id, 'full', false, array('loading' => 'eager', 'decoding' => 'async'));

                    if (has_custom_logo()) {
                        echo $logo;
                    } else {
                        echo '<h1>' . get_bloginfo('name') . '</h1>';
                    }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => 'ms-auto me-0',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>

    </header>

    <main id="content">

    