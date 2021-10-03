<?php

/*

Template Name: Gallery Page Template

*/
get_header();
?>
<!-- PAGE CODE GOES HERE -->

<main id="primary" class="site-main">

<?php
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', get_post_type() );

/*     the_post_navigation(
        array(
            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'keppelfm' ) . '</span> <span class="nav-title">%title</span>',
            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'keppelfm' ) . '</span> <span class="nav-title">%title</span>',
        )
    ); */


endwhile; // End of the loop.
?>

</main><!-- #main -->


<?php get_footer(); ?> 