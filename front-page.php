<?php

get_header();

get_template_part( 'partials/section', 'hero' );

get_template_part( 'partials/section', 'features' );

get_template_part( 'partials/section', 'featured-img' );

get_template_part( 'partials/content', 'page' );

?>

</main>

<?php
get_template_part( 'partials/section', 'latest-news' );
get_footer();

?>