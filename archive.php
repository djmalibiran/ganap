<?php
echo "<pre>";
var_dump( the_archive_description() );
echo is_archive();
echo "</pre>";


get_header();

get_template_part( 'partials/inner', 'hero' );



// $args = array(
// 	'post_type'     => 'post',
//     'post_status'   => 'publish',
// );

// // The Query.
// $the_query = new WP_Query( $args );

// // The Loop.
// if ( $the_query->have_posts() ) {
// 	echo '<ul>';
// 	while ( $the_query->have_posts() ) {
// 		$the_query->the_post();
// 		echo '<li>' . esc_html( get_the_title() ) . '</li>';
// 	}
// 	echo '</ul>';
// }

// // Restore original Post Data.
// wp_reset_postdata();
