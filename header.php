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
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'your-theme-name' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="site-branding">
            
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }

            
            if ( is_front_page() && is_home() ) {
                echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . bloginfo( 'name' ) . '</a></h1>';
            } else {
                echo '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . bloginfo( 'name' ) . '</a></p>';
            }
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) {
                echo '<p class="site-description">' . $description . '</p>'; 
            }
            ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'your-theme-name' ); ?></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->