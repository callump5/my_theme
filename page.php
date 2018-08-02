 <?php get_header() ; ?>

   <?php
            if ( is_page('Gallery') ):
                get_template_part( 'gallery' );
            elseif ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                            get_template_part( 'template_parts/page-content', get_post_format() );
                    endwhile;
                endif;
        ?>

 <?php get_footer(); ?>
