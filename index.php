<?php get_header() ; ?>


<?php
if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                        get_template_part( 'template_parts/page-content', get_post_format() );
                endwhile;
            endif;
?>

<?php get_footer() ; ?>
