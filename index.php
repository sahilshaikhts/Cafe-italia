<h1 style="font-size:1.25rem;color:red">Index file triggered!</h1>
<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); 
        the_content();
    endwhile;   
endif;

get_footer();