<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ganap
 */

?>

<footer class="py-3 border-top border-secondary">
    <p class="text-center text-body-secondary mb-0">&copy; <?php echo date("Y") . ' ' . get_bloginfo('name'); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>